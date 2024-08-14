<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateDeckSeeder extends Seeder
{
    public function run()
    {
        DB::table('template_decks')->insert([
            ['name' => 'deutsch medizin', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Медицина на немецком '],
            ['name' => '👶🏻 For Kids 🧸', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Английский для детей с картинками'],
            ['name' => '⌨️ Programming', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по программированию'],
            ['name' => '💉 Medicine', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по медицине'],
            ['name' => '🛠 Technical', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по бытовым техническим вопросам'],
            ['name' => '💻 Dart & Flutter Syntax', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по бытовым техническим вопросам'],
        ]);
    }
}
