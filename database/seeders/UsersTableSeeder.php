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
            'tg_username' => 'one',
            'email' => '111@111.111',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Jane Two',
            'tg_username' => 'two',
            'email' => '2',
            'password' => Hash::make('2'),
        ]);

        User::factory()->create([
            'name' => 'Smith Three',
            'tg_username' => 'three',
            'email' => '3',
            'password' => Hash::make('3'),
        ]);
    }
}
