<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportTemplateDeck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deck:import-template';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Safely import and scaffold template decks for the Leitner flashcard system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // 1. Choose language code
        $lang = $this->choice('Select target language:', ['ru', 'en', 'uk'], 'ru');

        // 2. Read categories map
        $categoriesPath = database_path("seeders/seeds_data/{$lang}/categories.php");
        $categoriesMap = [];
        if (File::exists($categoriesPath)) {
            $categoriesMap = include $categoriesPath;
        }

        // 3. Select or create category
        $catOptions = array_keys($categoriesMap);
        $catOptions[] = '[Create New Category]';
        $selectedCat = $this->choice('Select Category:', $catOptions);

        if ($selectedCat === '[Create New Category]') {
            $catKey = $this->ask('Enter category key (slug, e.g. history):');
            $catKey = $this->slugify($catKey);
            
            if (empty($catKey)) {
                $this->error('Category key cannot be empty.');
                return 1;
            }

            if (isset($categoriesMap[$catKey])) {
                $this->error("Category with key '{$catKey}' already exists.");
                return 1;
            }

            $catName = $this->ask('Enter category name (e.g. 📜 История):');
            if (empty($catName)) {
                $this->error('Category name cannot be empty.');
                return 1;
            }

            $categoriesMap[$catKey] = [
                'name' => $catName,
                'subcategories' => []
            ];
        } else {
            $catKey = $selectedCat;
        }

        // 4. Select or create subcategory
        $subcategoriesMap = $categoriesMap[$catKey]['subcategories'] ?? [];
        $subcatOptions = array_keys($subcategoriesMap);
        $subcatOptions[] = '[Create New Subcategory]';
        $selectedSubcat = $this->choice('Select Subcategory:', $subcatOptions);

        $categoriesChanged = false;

        if ($selectedSubcat === '[Create New Subcategory]') {
            $subcatKey = $this->ask('Enter subcategory key (slug, e.g. ancient_rome):');
            $subcatKey = $this->slugify($subcatKey);

            if (empty($subcatKey)) {
                $this->error('Subcategory key cannot be empty.');
                return 1;
            }

            if (isset($subcategoriesMap[$subcatKey])) {
                $this->error("Subcategory with key '{$subcatKey}' already exists.");
                return 1;
            }

            $subcatName = $this->ask('Enter subcategory name (e.g. 🏛 Древний Рим):');
            if (empty($subcatName)) {
                $this->error('Subcategory name cannot be empty.');
                return 1;
            }

            $categoriesMap[$catKey]['subcategories'][$subcatKey] = [
                'name' => $subcatName
            ];
            $categoriesChanged = true;
        } else {
            $subcatKey = $selectedSubcat;
        }

        // Save categories if changed or if categories.php didn't exist
        if ($categoriesChanged || !File::exists($categoriesPath)) {
            $this->saveCategories($categoriesPath, $categoriesMap);
            $this->info("Categories file updated successfully at: {$categoriesPath}");
        }

        // Create the directory for the subcategory if it doesn't exist
        $deckDir = database_path("seeders/seeds_data/{$lang}/{$catKey}/{$subcatKey}");
        if (!File::isDirectory($deckDir)) {
            File::makeDirectory($deckDir, 0755, true, true);
        }

        // 5. Deck metadata
        $fileName = $this->ask('Enter deck filename (without .php, e.g. rome_republic):');
        $fileName = $this->slugify($fileName);
        if (empty($fileName)) {
            $this->error('Filename cannot be empty.');
            return 1;
        }

        $deckFilePath = "{$deckDir}/{$fileName}.php";
        if (File::exists($deckFilePath)) {
            if (!$this->confirm("File {$fileName}.php already exists. Overwrite?", false)) {
                $this->info('Cancelled.');
                return 0;
            }
        }

        $deckTitle = $this->ask('Enter deck title (e.g. 🏛 Древний Рим: Эпоха Республики):');
        if (empty($deckTitle)) {
            $this->error('Deck title cannot be empty.');
            return 1;
        }

        $deckDescription = $this->ask('Enter deck description (optional):');
        $questionLang = $this->ask('Enter question language code (e.g. ru):', $lang);
        $answerLang = $this->ask('Enter answer language code (e.g. en):', $lang === 'ru' ? 'en' : 'ru');

        $sortOrderInput = $this->ask('Enter sort order (optional, leave empty for auto-generated):');
        $sortOrder = ($sortOrderInput !== '' && is_numeric($sortOrderInput)) ? (int)$sortOrderInput : null;

        // 6. Flashcards import options
        $importType = $this->choice('Select flashcards input method:', [
            'From a local text file',
            'Paste raw text in CLI',
            'Empty template (scaffold only)'
        ], 'From a local text file');

        $cards = [];

        if ($importType === 'From a local text file') {
            $filePath = $this->ask('Enter path to the text file:');
            if (!File::exists($filePath)) {
                $this->error("File not found at path: {$filePath}");
                return 1;
            }
            $separator = $this->ask('Enter question-answer separator:', '-');
            $content = File::get($filePath);
            $cards = $this->parseCardsText($content, $separator);
        } elseif ($importType === 'Paste raw text in CLI') {
            $this->info("Paste your question-answer lines below. Type 'DONE' on a new line and press Enter to finish:");
            $separator = $this->ask('Enter question-answer separator:', '-');
            $lines = [];
            while (true) {
                $line = $this->ask('Line');
                if ($line === null || strtolower(trim($line)) === 'done') {
                    break;
                }
                $lines[] = $line;
            }
            $content = implode("\n", $lines);
            $cards = $this->parseCardsText($content, $separator);
        } else {
            // Scaffold only
            $cards = [
                ['q' => 'Пример вопроса 1', 'a' => 'Пример ответа 1'],
                ['q' => 'Пример вопроса 2', 'a' => 'Пример ответа 2'],
            ];
        }

        if (empty($cards)) {
            $this->warn('No flashcards were parsed. File will contain empty cards array.');
        } else {
            $this->info('Parsed ' . count($cards) . ' flashcards successfully.');
        }

        // 7. Write deck template PHP file
        $deckData = [
            'name' => $deckTitle,
            'description' => $deckDescription,
            'question_lang' => $questionLang,
            'answer_lang' => $answerLang,
            'sort_order' => $sortOrder,
            'cards' => $cards,
        ];

        $this->saveDeckFile($deckFilePath, $deckData);
        $this->info("Deck template file successfully created/updated at: {$deckFilePath}");

        // 8. Ask to run database seeder
        if ($this->confirm('Do you want to run the TemplateDeckSeeder to update the database now?', true)) {
            $this->info('Seeding template decks...');
            $this->call('db:seed', ['--class' => 'Database\Seeders\TemplateDeckSeeder']);
            $this->info('Database successfully seeded!');
        }

        return 0;
    }

    /**
     * Slugify helper
     */
    private function slugify(string $string): string
    {
        return preg_replace('/[^a-z0-9_]/', '', strtolower(trim($string)));
    }

    /**
     * Parse cards text content
     */
    private function parseCardsText(string $content, string $separator): array
    {
        $lines = explode("\n", $content);
        $cards = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            $parts = explode($separator, $line, 2);
            if (count($parts) === 2) {
                $cards[] = [
                    'q' => trim($parts[0]),
                    'a' => trim($parts[1]),
                ];
            } else {
                $this->warn("Skipping invalid line (no separator '{$separator}' found): {$line}");
            }
        }
        return $cards;
    }

    /**
     * Write categories.php structure to disk
     */
    private function saveCategories(string $path, array $categories)
    {
        $content = "<?php\n\nreturn [\n" . $this->prettyExportArray($categories, 1) . "];\n";
        File::put($path, $content);
    }

    /**
     * Export arrays nicely with short array syntax
     */
    private function prettyExportArray(array $array, int $indentLevel = 1): string
    {
        $indent = str_repeat('  ', $indentLevel);
        $lines = [];
        foreach ($array as $key => $value) {
            $keyStr = is_int($key) ? $key : "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $key) . "'";
            if (is_array($value)) {
                $lines[] = "{$indent}{$keyStr} => [";
                $lines[] = $this->prettyExportArray($value, $indentLevel + 1);
                $lines[] = "{$indent}],";
            } else {
                $valStr = "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $value) . "'";
                $lines[] = "{$indent}{$keyStr} => {$valStr},";
            }
        }
        return implode("\n", $lines);
    }

    /**
     * Write deck template file
     */
    private function saveDeckFile(string $path, array $deckData)
    {
        $cards = $deckData['cards'] ?? [];
        unset($deckData['cards']);

        $content = "<?php\n\nreturn [\n";
        foreach ($deckData as $key => $value) {
            if ($value === null) {
                continue;
            }
            $valStr = is_numeric($value) ? $value : "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $value) . "'";
            $content .= "    '{$key}' => {$valStr},\n";
        }

        $content .= "    'cards' => [\n";
        foreach ($cards as $card) {
            $q = str_replace(['\\', "'"], ['\\\\', "\\'"], $card['q']);
            $a = str_replace(['\\', "'"], ['\\\\', "\\'"], $card['a']);
            $content .= "        ['q' => '{$q}', 'a' => '{$a}'],\n";
        }
        $content .= "    ],\n";
        $content .= "];\n";

        File::put($path, $content);
    }
}
