<?php

namespace App\Services\Audio;

use App\Models\AudioCache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AudioService
{
    /**
     * Get or generate audio URL for the given text.
     *
     * @param string $rawText The raw text from the flashcard (potentially containing markdown and {{words}}).
     * @param string $lang The language code (e.g. 'en')
     * @param string|null $voiceId The requested voice model, or null for default.
     * @return string|null Public URL to the audio file
     */
    public function getAudioUrl(string $rawText, string $lang, ?string $voiceId = null): ?string
    {
        $textToSpeak = $this->extractTextToSpeak($rawText);
        if (empty($textToSpeak)) {
            return null;
        }

        $provider = config('audio.default', 'openai');
        
        // Handle voice selection
        $voices = config("audio.providers.{$provider}.voices", []);
        if (!$voiceId || !in_array($voiceId, $voices)) {
            $voiceId = config("audio.providers.{$provider}.default_voice");
        }

        $textHash = md5($textToSpeak . '_' . $lang);
        $dir1 = substr($textHash, 0, 2);
        $dir2 = substr($textHash, 2, 2);
        $fileName = "{$textHash}_{$voiceId}.mp3";
        $relativePath = "{$dir1}/{$dir2}/{$fileName}";

        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
        $disk = Storage::disk('audio');

        // 1. Check if we already have it in the cache (DB)
        $cachedAudio = AudioCache::where('text_hash', $textHash)
            ->where('voice_id', $voiceId)
            ->first();

        if ($cachedAudio && $disk->exists($cachedAudio->file_path)) {
            return $disk->url($cachedAudio->file_path);
        }

        // 2. Auto-heal: If DB was wiped (e.g., migrate:fresh) but the file exists on disk
        if ($disk->exists($relativePath)) {
            AudioCache::updateOrCreate(
                ['text_hash' => $textHash, 'voice_id' => $voiceId],
                [
                    'text'      => $textToSpeak,
                    'lang'      => $lang,
                    'provider'  => $provider,
                    'file_path' => $relativePath,
                ]
            );
            return $disk->url($relativePath);
        }

        // 3. Generate the audio file
        $filePath = $this->generateAudio($textToSpeak, $textHash, $provider, $voiceId);

        if (!$filePath) {
            return null; // Generation failed
        }

        // Store in DB
        AudioCache::updateOrCreate(
            ['text_hash' => $textHash, 'voice_id' => $voiceId],
            [
                'text'      => $textToSpeak,
                'lang'      => $lang,
                'provider'  => $provider,
                'file_path' => $filePath,
            ]
        );

        return $disk->url($filePath);
    }

    /**
     * Extracts the relevant words to speak from the raw text.
     * Looks for [v]word[/v] markup. If missing, returns null.
     */
    protected function extractTextToSpeak(string $text): ?string
    {
        preg_match_all('/\[v\](.*?)\[\/v\]/is', $text, $matches);

        if (!empty($matches[1])) {
            // Join all [v]word[/v] blocks found
            return trim(implode('. ', $matches[1]));
        }

        // If no markup is found, we don't generate audio.
        return null;
    }

    /**
     * Calls the provider API and saves the file to the disk.
     */
    protected function generateAudio(string $text, string $textHash, string $provider, string $voiceId): ?string
    {
        if ($provider === 'openai') {
            return $this->generateWithOpenAI($text, $textHash, $voiceId);
        }

        // Future providers can be handled here

        return null;
    }

    protected function generateWithOpenAI(string $text, string $textHash, string $voiceId): ?string
    {
        $apiKey = config('audio.providers.openai.key');
        $model = config('audio.providers.openai.model', 'tts-1');

        if (!$apiKey) {
            Log::error('OpenAI API key missing for AudioService.');
            return null;
        }

        $response = Http::withToken($apiKey)->post('https://api.openai.com/v1/audio/speech', [
            'model' => $model,
            'input' => $text,
            'voice' => $voiceId,
            'response_format' => 'mp3',
        ]);

        if ($response->failed()) {
            Log::error('OpenAI TTS Error: ' . $response->body());
            return null;
        }

        // Implement directory sharding: 1f/38/1f38..._alloy.mp3
        $dir1 = substr($textHash, 0, 2);
        $dir2 = substr($textHash, 2, 2);
        $fileName = "{$textHash}_{$voiceId}.mp3";
        $relativePath = "{$dir1}/{$dir2}/{$fileName}";

        Storage::disk('audio')->put($relativePath, $response->body());

        return $relativePath;
    }
}
