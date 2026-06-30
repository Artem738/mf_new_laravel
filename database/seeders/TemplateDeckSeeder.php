<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;

class TemplateDeckSeeder extends Seeder
{
    public function run()
    {
        // Реестр всех шаблонов колод.
        // Чтобы добавить новую колоду:
        // 1. Добавьте новый элемент в этот массив (присвоив ему следующий уникальный id).
        // 2. Создайте файл с карточками в папке database/seeders/seeds_data/ и укажите его имя в ключе 'file'.
        $decks = [
            [
                'id' => 1,
                'name' => '🇩🇪💉 Deutsch Medizin',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'de',
                'description' => 'Медицина на немецком',
                'file' => 'deutsch_medizin.php',
            ],
            [
                'id' => 2,
                'name' => '👶🏻 For Kids 🧸',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Английский для детей с картинками',
                'file' => 'for_kids.php',
            ],
            [
                'id' => 3,
                'name' => '⌨️ Programming',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Русско-Английский словарь по программированию',
                'file' => 'programming.php',
            ],
            [
                'id' => 4,
                'name' => '💉 Medicine',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Русско-Английский словарь по медицине',
                'file' => 'en_medicine.php',
            ],
            [
                'id' => 5,
                'name' => '🛠 Technical',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Русско-Английский словарь по бытовым техническим вопросам',
                'file' => 'ru_en_technic.php',
            ],
            [
                'id' => 6,
                'name' => '💻 Dart & Flutter Syntax',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Програмирование на Dart и Flutter. Просто Код...',
                'file' => 'flutter_dart.php',
            ],
            [
                'id' => 7,
                'name' => '🇺🇸 🛠 Handy-Man Professional',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Профессиональный английский технический словарь',
                'file' => 'ru_en_technic_pro.php',
            ],
            [
                'id' => 8,
                'name' => '🇺🇸 Boston English',
                'deck_lang' => 'ru',
                'question_lang' => 'ru',
                'answer_lang' => 'en',
                'description' => 'Разговорный английский язык Бостонская Школа',
                'file' => 'ru_en_boston.php',
            ],
        ];

        foreach ($decks as $deckData) {
            $fileName = $deckData['file'];
            unset($deckData['file']);

            // Создаем или обновляем шаблонную колоду по её ID
            $deck = TemplateDeck::updateOrCreate(
                ['id' => $deckData['id']],
                $deckData
            );

            $filePath = database_path("seeders/seeds_data/{$fileName}");
            if (file_exists($filePath)) {
                $cards = include $filePath;

                // Удаляем старые шаблонные карточки для этой колоды во избежание дублирования
                TemplateFlashcard::where('deck_id', $deck->id)->delete();

                foreach ($cards as $card) {
                    TemplateFlashcard::create([
                        'deck_id' => $deck->id,
                        'question' => $card['question'],
                        'answer' => $card['answer'],
                        'weight' => $card['weight'] ?? 0,
                    ]);
                }
            }
        }
    }
}
