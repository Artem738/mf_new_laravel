<?php

namespace App\Services\VoiceLesson;

use Illuminate\Support\Facades\Log;

class AnswerEvaluationService
{
    /**
     * Evaluates if the transcribed text matches the correct answer.
     * Also detects voice commands like "pause", "skip", "don't know".
     *
     * @param string $transcribedText The text from STT.
     * @param string $correctAnswer The actual correct answer for the flashcard.
     * @return array [
     *   'is_command' => bool,
     *   'command' => string|null,
     *   'is_correct' => bool|null,
     *   'result' => 'green' | 'yellow' | 'red' | null
     * ]
     */
    public function evaluate(string $transcribedText, string $correctAnswer): array
    {
        Log::info("[VoiceLesson] Evaluating answer. STT: '{$transcribedText}', Correct: '{$correctAnswer}'");

        $transcribedClean = $this->cleanText($transcribedText);
        
        // Strip emojis, [v] tags, parentheses, and newlines
        $correctAnswerRaw = preg_replace('/[\x{1F000}-\x{1F9FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1FA00}-\x{1FAFF}]/u', '', $correctAnswer);
        $correctAnswerRaw = preg_replace('/\[\/?v\]/i', '', $correctAnswerRaw);
        $correctAnswerRaw = preg_replace('/\([^)]*\)/', '', $correctAnswerRaw);
        $correctAnswerRaw = str_replace(["\n", "\r", "\\n", "\\r"], ' ', $correctAnswerRaw);
        
        // Split correct answers by comma or slash
        $correctOptions = preg_split('/[,\\/]+/', $correctAnswerRaw);

        // 1. Check for commands
        $command = $this->detectCommand($transcribedClean);
        if ($command) {
            Log::info("[VoiceLesson] Detected command: {$command}");
            return [
                'is_command' => true,
                'command' => $command,
                'is_correct' => null,
                'result' => null,
            ];
        }

        // 2. Evaluate answer
        // Simple exact match or subset match for now
        $bestPercent = 0;
        
        foreach ($correctOptions as $option) {
            $optClean = $this->cleanText($option);
            if (empty($optClean)) continue;

            if ($transcribedClean === $optClean) {
                $bestPercent = 100;
                break;
            }

            // Calculate similarity percentage
            similar_text($transcribedClean, $optClean, $percent);
            
            // Check for subset match (e.g. user said "it is actually" vs "actually")
            if (str_contains($transcribedClean, $optClean) || str_contains($optClean, $transcribedClean)) {
                if (strlen($transcribedClean) > 2 && strlen($optClean) > 2) {
                    $percent = max($percent, 85); // Treat subset match as yellow/green
                }
            }

            if ($percent > $bestPercent) {
                $bestPercent = $percent;
            }
        }

        if ($bestPercent >= 90) {
            $result = 'green';
            $isCorrect = true;
        } elseif ($bestPercent >= 70) {
            $result = 'yellow';
            $isCorrect = true; // Counted as partially correct
        } else {
            $result = 'red';
            $isCorrect = false;
        }
        
        Log::info("[VoiceLesson] Evaluation result: {$result}");

        return [
            'is_command' => false,
            'command' => null,
            'is_correct' => $isCorrect,
            'result' => $result,
        ];
    }

    private function cleanText(string $text): string
    {
        $text = mb_strtolower($text);
        // Remove punctuation
        $text = preg_replace('/[[:punct:]]/u', '', $text);
        return trim($text);
    }

    private function detectCommand(string $text): ?string
    {
        $commands = [
            'pause' => ['пауза', 'подожди', 'pause', 'wait', 'стоп', 'stop'],
            'skip' => ['дальше', 'следующий', 'skip', 'next'],
            'dont_know' => ['не знаю', 'подскажи', 'i dont know', 'dont know', 'no idea', 'не помню'],
            'repeat' => ['повтори', 'еще раз', 'repeat', 'again'],
        ];

        foreach ($commands as $cmd => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($text, $keyword)) {
                    return $cmd;
                }
            }
        }

        return null;
    }
}
