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
            // Try to find a voice matching the language code (e.g. 'ru' -> 'ru-RU')
            $matchingVoices = array_filter($voices, function($v) use ($lang) {
                return str_starts_with(strtolower($v), strtolower($lang));
            });
            if (!empty($matchingVoices)) {
                $voiceId = array_values($matchingVoices)[0];
            } else {
                $voiceId = config("audio.providers.{$provider}.default_voice");
            }
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
            return url('/api/audio/stream?path=' . urlencode($cachedAudio->file_path));
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
            return url('/api/audio/stream?path=' . urlencode($relativePath));
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

        return url('/api/audio/stream?path=' . urlencode($filePath));
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
            $extracted = trim(implode('. ', $matches[1]));

            // OpenAI tts-1 workaround: single words sometimes cause silence hallucination.
            // Prepending a comma forces the neural network to process it correctly.
            if (!str_contains(trim($extracted), ' ')) {
                $extracted = ', ' . $extracted;
            }

            if (!preg_match('/[.!?;:]$/', $extracted)) {
                $extracted .= '.';
            }
            return $extracted;
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

        if ($provider === 'google') {
            return $this->generateWithGoogleCloud($text, $textHash, $voiceId);
        }

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

    protected function generateWithGoogleCloud(string $text, string $textHash, string $voiceId): ?string
    {
        $apiKey = config('audio.providers.google.key');

        if (!$apiKey) {
            Log::error('Google API key missing for AudioService.');
            return null;
        }

        // Extract language code from voice id, e.g. en-US-Neural2-F -> en-US
        $parts = explode('-', $voiceId);
        $languageCode = isset($parts[0], $parts[1]) ? "{$parts[0]}-{$parts[1]}" : 'en-US';

        $response = Http::post('https://texttospeech.googleapis.com/v1/text:synthesize?key=' . $apiKey, [
            'input' => [
                'text' => $text
            ],
            'voice' => [
                'languageCode' => $languageCode,
                'name' => $voiceId
            ],
            'audioConfig' => [
                'audioEncoding' => 'MP3'
            ]
        ]);

        if ($response->failed()) {
            Log::error('Google TTS Error: ' . $response->body());
            return null;
        }

        $content = $response->json('audioContent');
        if (!$content) {
            Log::error('Google TTS Error: No audioContent in response');
            return null;
        }

        $dir1 = substr($textHash, 0, 2);
        $dir2 = substr($textHash, 2, 2);
        $fileName = "{$textHash}_{$voiceId}.mp3";
        $relativePath = "{$dir1}/{$dir2}/{$fileName}";

        Storage::disk('audio')->put($relativePath, base64_decode($content));

        return $relativePath;
    }

    /**
     * Clears the audio cache for the given text.
     */
    public function clearAudioCache(string $rawText, string $lang, ?string $voiceId = null): int
    {
        $textToSpeak = $this->extractTextToSpeak($rawText);
        if (empty($textToSpeak)) {
            return 0;
        }

        $provider = config('audio.default', 'openai');
        
        $voices = config("audio.providers.{$provider}.voices", []);
        if (!$voiceId || !in_array($voiceId, $voices)) {
            $matchingVoices = array_filter($voices, function($v) use ($lang) {
                return str_starts_with(strtolower($v), strtolower($lang));
            });
            if (!empty($matchingVoices)) {
                $voiceId = array_values($matchingVoices)[0];
            } else {
                $voiceId = config("audio.providers.{$provider}.default_voice");
            }
        }

        $textHash = md5($textToSpeak . '_' . $lang);
        
        $cachedAudio = AudioCache::where('text_hash', $textHash)
            ->where('voice_id', $voiceId)
            ->first();

        $cleared = 0;

        if ($cachedAudio) {
            Storage::disk('audio')->delete($cachedAudio->file_path);
            $cachedAudio->delete();
            $cleared++;
        }

        $dir1 = substr($textHash, 0, 2);
        $dir2 = substr($textHash, 2, 2);
        $fileName = "{$textHash}_{$voiceId}.mp3";
        $relativePath = "{$dir1}/{$dir2}/{$fileName}";

        if (Storage::disk('audio')->exists($relativePath)) {
            Storage::disk('audio')->delete($relativePath);
            $cleared++;
        }

        return $cleared > 0 ? 1 : 0;
    }
}
