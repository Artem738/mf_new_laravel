<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'John One',
            'email' => '111@111.111',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Jane Two',
            'tg_username' => '',
            'email' => '222@222.222',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Smith Three',
            'email' => '333@333.333',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Peter Four',
            'email' => '444@444.444',
            'password' => Hash::make('12345678'),
        ]);
    }
}
