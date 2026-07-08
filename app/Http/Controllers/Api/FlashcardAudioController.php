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
        $flashcard->load('deck');
        $lang = $flashcard->deck?->answer_lang ?? $request->query('lang', 'en');

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
        
        // Вручную проверяем токен из query параметров
        $token = $request->query('token');
        if (!$token) {
            abort(401, 'Unauthorized: Token missing');
        }

        $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
        if (!$accessToken || !$accessToken->tokenable) {
            abort(401, 'Unauthorized: Invalid token');
        }

        $flashcard = Flashcard::with('deck')->find($id);
        if (!$flashcard) {
            abort(404, 'Flashcard not found');
        }

        $voiceId = $request->query('voice_id');
        $lang = $flashcard->deck?->answer_lang ?? $request->query('lang', 'en');
        $text = $request->query('text');

        // Получаем URL от AudioService
        // Если передан конкретный текст, оборачиваем его в теги для AudioService
        $textToPlay = $text ? "[v]{$text}[/v]" : $flashcard->answer;
        $url = $audioService->getAudioUrl($textToPlay, $lang, $voiceId);

        if (!$url) {
            abort(400, 'Failed to generate audio or no suitable text found');
        }

        // URL имеет вид http://.../api/audio/stream?path=...
        // Извлекаем path из URL
        $parsedUrl = parse_url($url);
        parse_str($parsedUrl['query'] ?? '', $query);
        $path = $query['path'] ?? null;

        if (!$path) {
            abort(500, 'Failed to parse audio path');
        }

        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
        $disk = \Illuminate\Support\Facades\Storage::disk('audio');
        
        if (!$disk->exists($path)) {
            abort(404, 'Audio file not found');
        }

        return $disk->response($path, null, ['Content-Type' => 'audio/mpeg']);
    }
}
