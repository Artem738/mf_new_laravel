<?php

namespace App\Services\VoiceLesson;

use App\Models\Deck;
use App\Models\Flashcard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VoiceLessonService
{
    /**
     * Get the next flashcard for SRS study for a given deck and user.
     */
    public function getNextCardForLesson(int $deckId, int $userId): ?object
    {
        Log::info("[VoiceLesson] Fetching next card for Deck ID: {$deckId}, User ID: {$userId}");

        $flashcard = DB::table('flashcards')
            ->leftJoin('progress', function ($join) use ($userId) {
                $join->on('flashcards.id', '=', 'progress.flashcard_id')
                    ->where('progress.user_id', '=', $userId);
            })
            ->where('flashcards.deck_id', $deckId)
            ->where(function ($q) {
                $q->whereNull('progress.id')
                    ->orWhere('progress.next_review_at', '<=', now());
            })
            ->select(
                'flashcards.*',
                'progress.weight',
                'progress.last_answer_weight',
                'progress.last_reviewed_at',
                'progress.ease_factor',
                'progress.interval_days',
                'progress.next_review_at'
            )
            // Sort by weight (new cards first, then red, yellow, green) and then by id
            // This exactly matches the FlashcardProvider::_sortFlashcardsByWeight() logic
            ->orderByRaw('COALESCE(progress.weight, -1) ASC')
            ->orderBy('flashcards.id', 'ASC')
            ->first();

        if ($flashcard) {
            Log::info("[VoiceLesson] Next card selected: ID {$flashcard->id}");
        } else {
            Log::info("[VoiceLesson] No cards available for review in Deck ID: {$deckId}");
        }

        return $flashcard;
    }

    /**
     * Updates the Leitner progress for a card.
     * This mirrors the logic in ProgressController::updateWeight
     */
    public function updateProgress(int $flashcardId, int $userId, int $grade): void
    {
        Log::info("[VoiceLesson] Updating progress for Card ID: {$flashcardId}, User ID: {$userId}, Grade: {$grade}");

        $progress = DB::table('progress')
            ->where('flashcard_id', $flashcardId)
            ->where('user_id', $userId)
            ->first();

        $currentEaseFactor = $progress ? (float)$progress->ease_factor : 2.50;
        $currentIntervalDays = $progress ? (int)$progress->interval_days : 0;
        $currentWeight = $progress ? (int)$progress->weight : 0;

        $newEaseFactor = $currentEaseFactor;
        $newIntervalDays = $currentIntervalDays;
        $nextReviewAt = null;

        if ($grade === 1) { // Red
            $newEaseFactor = max(1.30, $currentEaseFactor - 0.20);
            $newIntervalDays = 0;
            $nextReviewAt = now();
        } elseif ($grade === 7) { // Yellow
            if ($currentIntervalDays === 0) {
                $newIntervalDays = 1;
            } else {
                $newIntervalDays = max(1, (int)round($currentIntervalDays * 1.5));
            }
            $nextReviewAt = now()->addDays($newIntervalDays);
        } elseif ($grade === 30) { // Green
            $newEaseFactor = min(3.0, $currentEaseFactor + 0.15);
            if ($currentIntervalDays === 0) {
                $newIntervalDays = 3;
            } else {
                $newIntervalDays = max(2, (int)round($currentIntervalDays * $currentEaseFactor));
            }
            $nextReviewAt = now()->addDays($newIntervalDays);
        } else {
            $nextReviewAt = now();
        }

        // We assume 'weight' isn't explicitly passed in Voice mode, so we just increment based on grade
        $weightIncrement = ($grade === 30) ? 1 : (($grade === 1) ? -1 : 0);
        $newWeight = max(0, $currentWeight + $weightIncrement);

        $dataToSave = [
            'weight' => $newWeight,
            'last_answer_weight' => $grade,
            'ease_factor' => $newEaseFactor,
            'interval_days' => $newIntervalDays,
            'next_review_at' => $nextReviewAt,
            'last_reviewed_at' => now(),
            'updated_at' => now(),
        ];

        if (!$progress) {
            $dataToSave['flashcard_id'] = $flashcardId;
            $dataToSave['user_id'] = $userId;
            $dataToSave['created_at'] = now();
            DB::table('progress')->insert($dataToSave);
            Log::info("[VoiceLesson] Inserted new progress record.");
        } else {
            DB::table('progress')
                ->where('flashcard_id', $flashcardId)
                ->where('user_id', $userId)
                ->update($dataToSave);
            Log::info("[VoiceLesson] Updated existing progress record.");
        }
    }
}
