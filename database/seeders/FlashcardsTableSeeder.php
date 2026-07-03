<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flashcard;

class FlashcardsTableSeeder extends Seeder
{
    public function run()
    {
        $cards = [
        ];

        foreach ($cards as $card) {
            Flashcard::updateOrCreate(
                [
                    'deck_id' => $card['deck_id'],
                    'question' => $card['question'],
                ],
                $card
            );
        }
    }
}
