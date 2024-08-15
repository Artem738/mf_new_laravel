<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateDeckSeeder extends Seeder
{
    public function run()
    {
        DB::table('template_decks')->insert([
            ['id' => 1, 'name' => '🇩🇪💉 Deutsch Medizin', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'de', 'description' => 'Медицина на немецком'],
            ['id' => 2, 'name' => '👶🏻 For Kids 🧸', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Английский для детей с картинками'],
            ['id' => 3, 'name' => '⌨️ Programming', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по программированию'],
            ['id' => 4, 'name' => '💉 Medicine', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по медицине'],
            ['id' => 5, 'name' => '🛠 Technical', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по бытовым техническим вопросам'],
            ['id' => 6, 'name' => '💻 Dart & Flutter Syntax', 'deck_lang' => 'ru', 'question_lang' => 'ru', 'answer_lang' => 'en', 'description' => 'Русско-Английский словарь по бытовым техническим вопросам'],
        ]);
    }
}
