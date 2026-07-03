<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deck;

class DecksTableSeeder extends Seeder
{
    public function run()
    {
        $decks = [
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
