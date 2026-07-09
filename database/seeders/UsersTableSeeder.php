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
                'name' => 'Art One',
                'email' => '111@111.111',
                'password' => Hash::make('123'),
                'language_code' => 'ru',
                'base_font_size' => 16,
                'user_lvl' => 10,
                'ai_credits' => 10000,
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
