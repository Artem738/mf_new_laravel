<?php

namespace App\Services\Audio\Providers;

use App\Services\Audio\Contracts\SpeechToTextProviderInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenAiSpeechToTextProvider implements SpeechToTextProviderInterface
{
    public function transcribe(string $audioFilePath, string $language = 'en', ?string $originalName = null): string
    {
        $apiKey = config('audio.providers.openai.key');

        if (!$apiKey) {
            Log::error('[VoiceLesson] OpenAI API key missing for STT.');
            throw new \Exception("OpenAI API key missing");
        }

        Log::info("[VoiceLesson] Starting OpenAI Whisper STT for file: {$audioFilePath}, lang: {$language}");

        $response = Http::withToken($apiKey)
            ->timeout(60) // OpenAI STT can sometimes take a few seconds
            ->attach(
                'file',
                file_get_contents($audioFilePath),
                $originalName ?? basename($audioFilePath)
            )
            ->post('https://api.openai.com/v1/audio/transcriptions', [
                'model' => 'whisper-1',
                'language' => $language,
            ]);

        if ($response->failed()) {
            Log::error("[VoiceLesson] OpenAI STT Error: " . $response->body());
            throw new \Exception("STT Provider failed: " . $response->body());
        }

        $result = $response->json();
        
        Log::info("[VoiceLesson] OpenAI Whisper returned: " . json_encode($result));

        return $result['text'] ?? '';
    }
}
