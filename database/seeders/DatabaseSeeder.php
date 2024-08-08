<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Database\Seeders\UsersTableSeeder;
// use Database\Seeders\DecksTableSeeder;
// use Database\Seeders\FlashcardsTableSeeder;
// use Database\Seeders\ProgressTableSeeder;
// use Database\Seeders\UserDeckAccessTableSeeder;
// use Database\Seeders\TemplateDeckSeeder;
// use Database\Seeders\TemplateFlashcardSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Вызов всех сидеров
        $this->call([
            UsersTableSeeder::class,
            DecksTableSeeder::class,
            FlashcardsTableSeeder::class,
            ProgressTableSeeder::class,
            UserDeckAccessTableSeeder::class,
            TemplateDeckSeeder::class,
            TemplateFlashcardSeeder::class,
        ]);
    }
}

