<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    /**
     * Обновить вес для конкретной карточки пользователя.
     */
    public function updateWeight(Request $request, $flashcardId)
    {
        $validated = $request->validate([
            'weight' => 'required|integer',
            'last_answer_weight' => 'required|integer',
        ]);

        $userId = $request->user()->id;
        $grade = $validated['last_answer_weight'];

        // Поиск записи прогресса для указанной карточки и пользователя
        $progress = DB::table('progress')
                      ->where('flashcard_id', $flashcardId)
                      ->where('user_id', $userId)
                      ->first();

        // Дефолтные значения, если прогресса еще нет
        $currentEaseFactor = $progress ? (float)$progress->ease_factor : 2.50;
        $currentIntervalDays = $progress ? (int)$progress->interval_days : 0;
        $currentWeight = $progress ? (int)$progress->weight : 0;

        $newEaseFactor = $currentEaseFactor;
        $newIntervalDays = $currentIntervalDays;
        $nextReviewAt = null;

        if ($grade === 1) {
            // Плохо: сбрасываем интервал, уменьшаем коэффициент легкости
            $newEaseFactor = max(1.30, $currentEaseFactor - 0.20);
            $newIntervalDays = 0; // Начать заучивание заново
            $nextReviewAt = now(); // Повторить немедленно
        } elseif ($grade === 7) {
            // Средне: интервал увеличивается умеренно
            if ($currentIntervalDays === 0) {
                $newIntervalDays = 1;
            } else {
                $newIntervalDays = max(1, (int)round($currentIntervalDays * 1.5));
            }
            $nextReviewAt = now()->addDays($newIntervalDays);
        } elseif ($grade === 30) {
            // Хорошо: коэффициент легкости растет, интервал умножается на него
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

        // Обновляем вес (weight) для обратной совместимости
        $newWeight = $currentWeight + $validated['weight'];

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
            // Если запись не существует, создаем новую
            $dataToSave['flashcard_id'] = $flashcardId;
            $dataToSave['user_id'] = $userId;
            $dataToSave['created_at'] = now();
            DB::table('progress')->insert($dataToSave);
        } else {
            // Обновление, если запись существует
            DB::table('progress')
              ->where('flashcard_id', $flashcardId)
              ->where('user_id', $userId)
              ->update($dataToSave);
        }

        // Получение обновленной записи
        $updatedProgress = DB::table('progress')
                             ->where('flashcard_id', $flashcardId)
                             ->where('user_id', $userId)
                             ->first();

        return response()->json([
            'message' => 'Weight and SRS progress updated successfully',
            'progress' => $updatedProgress
        ]);
    }
}
