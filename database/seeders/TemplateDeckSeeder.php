<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateDeckSeeder extends Seeder
{
    public function run()
    {
        DB::table('template_decks')->insert([
            ['name' => 'Programming', 'description' => 'Русско-Английский словарь по программированию'],
            ['name' => 'Medicine', 'description' => 'Русско-Английский словарь по медицине'],
            ['name' => 'Technical', 'description' => 'Русско-Английский словарь по бытовым техническим вопросам'],
        ]);
    }
}