<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DecksTableSeeder extends Seeder
{
    public function run()
    {


        DB::table('decks')->insert([
            [
                'user_id' => 1,
                'name' => '☣️ Biology',
                'description' => 'Biology flashcards for high school.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => '🧪 Chemistry',
                'description' => 'Chemistry flashcards for high school.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => '💫 Physics',
                'description' => 'Physics flashcards for college.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => '🇬🇧 English - Ru',
                'description' => 'English-Russian words',
                'created_at' => now(),
                'updated_at' => now(),
            ],            
        ]);
    }
}
