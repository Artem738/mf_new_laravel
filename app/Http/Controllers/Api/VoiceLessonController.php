<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Deck;
use App\Models\Flashcard;
use App\Services\Audio\Contracts\SpeechToTextProviderInterface;
use App\Services\VoiceLesson\AnswerEvaluationService;
use App\Services\VoiceLesson\VoiceLessonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VoiceLessonController extends Controller
{
    protected $sttProvider;
    protected $evaluationService;
    protected $lessonService;

    public function __construct(
        SpeechToTextProviderInterface $sttProvider,
        AnswerEvaluationService $evaluationService,
        VoiceLessonService $lessonService
    ) {
        $this->sttProvider = $sttProvider;
        $this->evaluationService = $evaluationService;
        $this->lessonService = $lessonService;
    }

    /**
     * Start a voice lesson session and get the first card.
     */
    public function start(Request $request)
    {
        $request->validate([
            'deck_id' => 'required|exists:decks,id',
        ]);

        $userId = $request->user()->id;
        $deckId = $request->input('deck_id');

        Log::info("[VoiceLesson] User {$userId} starting voice lesson for Deck {$deckId}");

        // Verify ownership
        $deck = Deck::where('id', $deckId)->where('user_id', $userId)->first();
        if (!$deck) {
            return response()->json(['message' => 'Deck not found or unauthorized'], 403);
        }

        $nextCard = $this->lessonService->getNextCardForLesson($deckId, $userId);

        if (!$nextCard) {
            return response()->json([
                'status' => 'completed',
                'message' => 'No cards available for review in this deck.',
                'next_card' => null,
            ]);
        }

        return response()->json([
            'status' => 'started',
            'next_card' => $this->cleanCardForApi($nextCard),
        ]);
    }

    /**
     * Process an audio answer, evaluate it, update progress, and return the next card.
     */
    public function answer(Request $request)
    {
        $request->validate([
            'deck_id' => 'required|exists:decks,id',
            'flashcard_id' => 'required|exists:flashcards,id',
            'audio' => 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac,m4a,mp4,webm,ogg',
            'is_timeout' => 'nullable|boolean',
            'language' => 'nullable|string|max:10', // Language hint for STT
        ]);

        $userId = $request->user()->id;
        $deckId = $request->input('deck_id');
        $flashcardId = $request->input('flashcard_id');
        $language = $request->input('language', 'en');

        Log::info("[VoiceLesson] User {$userId} submitting answer for Card {$flashcardId}");

        // 1. Verify card belongs to user's deck
        $flashcard = Flashcard::where('id', $flashcardId)->where('deck_id', $deckId)->first();
        if (!$flashcard) {
            return response()->json(['message' => 'Flashcard not found'], 404);
        }

        $firstLineAnswer = $this->getFirstLine($flashcard->answer);

        // 2. Transcribe Audio
        $audioFile = $request->file('audio');
        $isTimeout = $request->boolean('is_timeout', false);

        if (!$audioFile || !$audioFile->isValid() || $isTimeout) {
            // No file or invalid. This might happen if user didn't speak (timeout) or pressed I don't know
            Log::info("[VoiceLesson] File is empty or not attached. Triggering timeout/dont_know logic.");
            $transcribedText = '';
            $evaluation = [
                'is_command' => false,
                'command' => null,
                'is_correct' => false,
                'result' => 'red',
            ];
        } else {
            $audioPath = $audioFile->getRealPath();

            try {
                $originalName = $audioFile->getClientOriginalName() ?? 'audio.m4a';
                $transcribedText = $this->sttProvider->transcribe($audioPath, $language, $originalName);
            } catch (\Exception $e) {
                Log::error("[VoiceLesson] Transcription failed: " . $e->getMessage());
                return response()->json(['message' => 'Failed to transcribe audio'], 500);
            }

            // 3. Evaluate the transcribed text against the correct answer
            $evaluation = $this->evaluationService->evaluate($transcribedText, $firstLineAnswer);
        }

        // 4. Handle results based on evaluation
        if ($evaluation['is_command']) {
            // It's a command like "skip", "pause", "dont_know"
            if ($evaluation['command'] === 'dont_know') {
                // Grade as red (1)
                $this->lessonService->updateProgress($flashcardId, $userId, 1);
            }
            // For 'pause' or 'repeat', we don't update progress
        } else {
            $result = $evaluation['result'] ?? 'red';
            if ($result === 'green') {
                $grade = 30;
            } elseif ($result === 'yellow') {
                $grade = 7;
            } else {
                $grade = 1;
            }
            $this->lessonService->updateProgress($flashcardId, $userId, $grade);
        }

        // 5. Get the NEXT card
        $nextCard = $this->lessonService->getNextCardForLesson($deckId, $userId);

        return response()->json([
            'status' => 'processed',
            'transcript' => $transcribedText,
            'evaluation' => $evaluation,
            'correct_answer' => $this->cleanTextForApi($firstLineAnswer),
            'display_correct_answer' => preg_replace('/\[\/?v\]/i', '', $firstLineAnswer),
            'next_card' => $this->cleanCardForApi($nextCard),
            'is_finished' => $nextCard === null,
        ]);
    }

    private function cleanCardForApi($card)
    {
        if (!$card) return null;
        
        $array = (array) $card;
        
        // Take only the first line of the answer for voice lessons
        if (isset($array['answer'])) {
            $array['answer'] = $this->getFirstLine($array['answer']);
        }
        
        $array['display_question'] = preg_replace('/\[\/?v\]/i', '', $array['question'] ?? '');
        $array['display_answer'] = preg_replace('/\[\/?v\]/i', '', $array['answer'] ?? '');
        
        $array['question'] = $this->cleanTextForApi($array['question'] ?? '');
        $array['answer'] = $this->cleanTextForApi($array['answer'] ?? '');
        return $array;
    }

    private function cleanTextForApi(string $text): string
    {
        // Remove emojis
        $text = preg_replace('/[\x{1F000}-\x{1F9FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1FA00}-\x{1FAFF}]/u', '', $text);
        // Remove [v] and [/v] tags
        $text = preg_replace('/\[\/?v\]/i', '', $text);
        // Remove text in parentheses ()
        $text = preg_replace('/\([^)]*\)/', '', $text);
        // Remove actual newlines and literal \n strings
        $text = str_replace(["\n", "\r", "\\n", "\\r"], ' ', $text);
        // Clean up multiple spaces
        return trim(preg_replace('/\s+/', ' ', $text));
    }

    private function getFirstLine(string $text): string
    {
        $lines = explode("\n", str_replace(["\r\n", "\r"], "\n", $text));
        return trim($lines[0] ?? '');
    }
}
