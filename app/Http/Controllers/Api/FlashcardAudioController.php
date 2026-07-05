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

        return $disk->response($path);
    }
}
