<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TemplateCategory;
use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;

class TemplateDeckSeeder extends Seeder
{
    public function run()
    {
        $basePath = database_path('seeders/seeds_data');

        // 1. Получаем список всех папок языков в seeds_data
        $langDirs = glob($basePath . '/*', GLOB_ONLYDIR);

        foreach ($langDirs as $langDir) {
            $lang = basename($langDir);
            $categoriesPath = $langDir . '/categories.php';

            if (!file_exists($categoriesPath)) {
                continue;
            }

            // Загружаем структуру категорий для этого языка
            $categoriesMap = include $categoriesPath;

            // Сидируем категории (Уровень 1) и подкатегории (Уровень 2) с генерацией стабильных ID и порядковых номеров
            $catSort = 0;
            foreach ($categoriesMap as $catKey => $catData) {
                $catSort += 10;
                $catId = $this->generateStableId("category/{$lang}/{$catKey}");
                $parentCat = TemplateCategory::updateOrCreate(
                    ['id' => $catId],
                    [
                        'name' => $catData['name'],
                        'parent_id' => null,
                        'lang' => $lang,
                        'sort_order' => $catSort,
                    ]
                );

                if (isset($catData['subcategories'])) {
                    $subcatSort = 0;
                    foreach ($catData['subcategories'] as $subcatKey => $subcatData) {
                        $subcatSort += 10;
                        $subcatId = $this->generateStableId("subcategory/{$lang}/{$catKey}/{$subcatKey}");
                        TemplateCategory::updateOrCreate(
                            ['id' => $subcatId],
                            [
                                'name' => $subcatData['name'],
                                'parent_id' => $parentCat->id,
                                'lang' => $lang,
                                'sort_order' => $subcatSort,
                            ]
                        );
                    }
                }
            }

            // 2. Рекурсивно находим все файлы колод (Уровень 3)
            $deckFiles = $this->getPhpFilesRecursive($langDir);

            // Группируем файлы колод по подкатегориям
            $groupedDecks = [];
            foreach ($deckFiles as $filePath) {
                if (basename($filePath) === 'categories.php') {
                    continue;
                }

                // Вычисляем путь относительно папки языка для сопоставления с категориями
                $relativeToLang = ltrim(str_replace($langDir, '', $filePath), '/');
                $pathParts = explode('/', $relativeToLang);

                // Ожидаем структуру: категория/подкатегория/файл.php
                if (count($pathParts) < 3) {
                    continue;
                }

                $catKey = $pathParts[0];
                $subcatKey = $pathParts[1];
                $subcatId = $this->generateStableId("subcategory/{$lang}/{$catKey}/{$subcatKey}");

                $groupedDecks[$subcatId][] = [
                    'filePath' => $filePath,
                    'catKey' => $catKey,
                    'subcatKey' => $subcatKey,
                ];
            }

            // Сидируем колоды в каждой подкатегории с генерацией стабильных ID и порядковых номеров
            foreach ($groupedDecks as $subcatId => $decksInSubcat) {
                // Гарантируем алфавитный порядок файлов
                usort($decksInSubcat, function ($a, $b) {
                    return strcmp(basename($a['filePath']), basename($b['filePath']));
                });

                foreach ($decksInSubcat as $index => $deckInfo) {
                    $filePath = $deckInfo['filePath'];
                    $catKey = $deckInfo['catKey'];
                    $subcatKey = $deckInfo['subcatKey'];
                    $fileName = basename($filePath);

                    $deckData = include $filePath;

                    if (!is_array($deckData)) {
                        continue;
                    }

                    // Вычисляем стабильный ID колоды на основе её пути на диске
                    $deckId = $this->generateStableId("deck/{$lang}/{$catKey}/{$subcatKey}/{$fileName}");

                    $cards = $deckData['cards'] ?? [];
                    unset($deckData['cards']);

                    // Определяем sort_order: приоритет явному ключу в файле, иначе автогенерация
                    $sortOrder = $deckData['sort_order'] ?? (($index + 1) * 10);
                    unset($deckData['sort_order']);

                    $deckData['id'] = $deckId;
                    $deckData['category_id'] = $subcatId;
                    $deckData['deck_lang'] = $lang;
                    $deckData['sort_order'] = $sortOrder;

                    $deck = TemplateDeck::updateOrCreate(
                        ['id' => $deckId],
                        $deckData
                    );

                    // Удаляем старые карточки для этой колоды и записываем новые
                    TemplateFlashcard::where('deck_id', $deck->id)->delete();

                    foreach ($cards as $card) {
                        TemplateFlashcard::create([
                            'deck_id' => $deck->id,
                            'question' => $card['q'],
                            'answer' => $card['a'],
                            'weight' => $card['weight'] ?? 0,
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Генерирует стабильный 52-битный целый ID на основе уникальной строки пути.
     * Ограничение в 52 бита (13 символов hex) гарантирует, что число не превысит
     * лимит безопасного целого числа в JavaScript (Number.MAX_SAFE_INTEGER = 2^53 - 1),
     * что критично для работы веб-клиента без потери точности.
     */
    private function generateStableId($string)
    {
        return hexdec(substr(hash('sha256', $string), 0, 13));
    }

    /**
     * Рекурсивно собирает все PHP файлы из указанной папки.
     */
    private function getPhpFilesRecursive($dir)
    {
        $files = [];
        $items = glob($dir . '/*');

        foreach ($items as $item) {
            if (is_dir($item)) {
                $files = array_merge($files, $this->getPhpFilesRecursive($item));
            } elseif (is_file($item) && pathinfo($item, PATHINFO_EXTENSION) === 'php') {
                $files[] = $item;
            }
        }

        return $files;
    }
}
