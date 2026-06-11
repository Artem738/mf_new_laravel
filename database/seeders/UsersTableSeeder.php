<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'John One',
                'email' => '111@111.111',
                'password' => Hash::make('12345678'),
                'language_code' => 'en',
                'base_font_size' => 16,
                'user_lvl' => 10,
            ],
            [
                'name' => 'Jane Two',
                'email' => '222@222.222',
                'password' => Hash::make('12345678'),
                'language_code' => 'en',
                'base_font_size' => 16,
                'user_lvl' => 1,
            ],
            [
                'name' => 'Smith Three',
                'email' => '333@333.333',
                'password' => Hash::make('12345678'),
                'language_code' => 'de',
                'base_font_size' => 18,
                'user_lvl' => 1,
            ],
            [
                'name' => 'Peter Four',
                'email' => '444@444.444',
                'password' => Hash::make('12345678'),
                'language_code' => 'ru',
                'base_font_size' => 17,
                'user_lvl' => 1,
            ],
        ];

        foreach ($users as $userData) {
            User::query()->updateOrCreate(
                ['email' => $userData['email']],
                $userData,
            );
        }
    }
}
