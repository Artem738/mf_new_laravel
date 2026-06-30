<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deck;

class DecksTableSeeder extends Seeder
{
    public function run()
    {
        $decks = [
            [
                'id' => 1,
                'user_id' => 1,
                'name' => '☣️ Biology',
                'description' => 'Biology flashcards for high school.',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => '🧪 Chemistry',
                'description' => 'Chemistry flashcards for high school.',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => '💫 Physics',
                'description' => 'Physics flashcards for college.',
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'name' => '🇬🇧 English - Ru',
                'description' => 'English-Russian words',
            ],
        ];

        foreach ($decks as $deck) {
            Deck::updateOrCreate(
                ['id' => $deck['id']],
                [
                    'user_id' => $deck['user_id'],
                    'name' => $deck['name'],
                    'description' => $deck['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
