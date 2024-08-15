<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateFlashcardSeeder extends Seeder
{
    public function run()
    {
        // Здесь указываем ID колоды и путь к файлу с флешкартами для этой колоды
        $flashcardFiles = [
            1 => database_path('seeders/seeds_data/deutsch_medizin.php'),
            2 => database_path('seeders/seeds_data/for_kids.php'),
            3 => database_path('seeders/seeds_data/programming.php'),
            4 => database_path('seeders/seeds_data/for_kids.php'),
            5 => database_path('seeders/seeds_data/en_medicine.php'),
            6 => database_path('seeders/seeds_data/flutter_dart.php'),
            // добавь остальные файлы для других колод
        ];

        foreach ($flashcardFiles as $deckId => $filePath) {
            $cards = include $filePath; // Подключаем файл и получаем массив

            foreach ($cards as $card) {
                DB::table('template_flashcards')->insert([
                    'deck_id' => $deckId,
                    'question' => $card['question'],
                    'answer' => $card['answer'],
                    'weight' => $card['weight'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
