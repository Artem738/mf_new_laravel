<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flashcard;
use App\Services\Audio\AudioService;
use Illuminate\Http\Request;

class FlashcardAudioController extends Controller
{
    public function getAudio(Request $request, Flashcard $flashcard, AudioService $audioService)
    {
        $voiceId = $request->query('voice_id');

        // We need to determine the language from the request or the card's deck.
        // Assuming we pass lang from frontend or get it from deck category.
        // For now, let's look for 'lang' query param, default to 'en'.
        // Real implementation might infer this from the Deck category lang.
        $lang = $request->query('lang', 'en');

        $url = $audioService->getAudioUrl($flashcard->answer, $lang, $voiceId);

        if (!$url) {
            return response()->json(['error' => 'Failed to generate audio or no suitable text found'], 400);
        }

        return response()->json([
            'audio_url' => $url,
            'voice_id'  => $voiceId ?? config('audio.providers.openai.default_voice'),
        ]);
    }

    public function streamAudio(Request $request)
    {
        $path = $request->query('path');

        if (!$path || !preg_match('/^[a-f0-9]{2}\/[a-f0-9]{2}\/[a-f0-9]+_[a-zA-Z0-9_-]+\.mp3$/', $path)) {
            abort(403, 'Invalid audio path');
        }

        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
        $disk = \Illuminate\Support\Facades\Storage::disk('audio');

        if (!$disk->exists($path)) {
            abort(404, 'Audio file not found');
        }

        return $disk->response($path, null, ['Content-Type' => 'audio/mpeg']);
    }

    public function directAudio(Request $request, $id, AudioService $audioService)
    {
        \Illuminate\Support\Facades\Log::info("=== DIRECT AUDIO REQUEST STARTED for ID: {$id} ===");
        
        // Вручную проверяем токен из query параметров
        $token = $request->query('token');
        if (!$token) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: Token missing from query string.");
            abort(401, 'Unauthorized: Token missing');
        }

        $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
        if (!$accessToken || !$accessToken->tokenable) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: Token is invalid or expired.");
            abort(401, 'Unauthorized: Invalid token');
        }
        
        \Illuminate\Support\Facades\Log::info("Direct Audio [ID {$id}]: Token valid for User ID: " . $accessToken->tokenable->id);

        $flashcard = Flashcard::find($id);
        if (!$flashcard) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: Flashcard NOT FOUND in DB!");
            abort(404, 'Flashcard not found');
        }
        
        \Illuminate\Support\Facades\Log::info("Direct Audio [ID {$id}]: Flashcard found.");

        $voiceId = $request->query('voice_id');
        $lang = $request->query('lang', 'en');

        \Illuminate\Support\Facades\Log::info("Direct Audio [ID {$id}]: Calling AudioService->getAudioUrl...");
        // Получаем URL от AudioService
        $url = $audioService->getAudioUrl($flashcard->answer, $lang, $voiceId);

        if (!$url) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: AudioService returned null!");
            abort(400, 'Failed to generate audio or no suitable text found');
        }

        \Illuminate\Support\Facades\Log::info("Direct Audio [ID {$id}]: AudioService returned URL: {$url}");

        // URL имеет вид http://.../api/audio/stream?path=...
        // Извлекаем path из URL
        $parsedUrl = parse_url($url);
        parse_str($parsedUrl['query'] ?? '', $query);
        $path = $query['path'] ?? null;

        if (!$path) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: Failed to parse path from URL!");
            abort(500, 'Failed to parse audio path');
        }

        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
        $disk = \Illuminate\Support\Facades\Storage::disk('audio');
        
        if (!$disk->exists($path)) {
            \Illuminate\Support\Facades\Log::error("Direct Audio [ID {$id}]: File does NOT exist on disk: {$path}");
            abort(404, 'Audio file not found');
        }

        \Illuminate\Support\Facades\Log::info("Direct Audio [ID {$id}]: SUCCESS! Streaming file {$path} to client.");
        return $disk->response($path, null, ['Content-Type' => 'audio/mpeg']);
    }
}
