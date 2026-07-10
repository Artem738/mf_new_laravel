<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;
use App\Models\TemplateCategory;
use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ImportTemplateDeckTest extends TestCase
{
    use RefreshDatabase;

    protected $testLang = 'ru';
    protected $testCatKey = 'test_cat_temp';
    protected $testSubcatKey = 'test_subcat_temp';
    protected $testDeckFile = 'test_deck_temp';

    protected $categoriesBackupPath;
    protected $categoriesPath;
    protected $deckDir;
    protected $deckFilePath;
    protected $tempImportFile;

    protected function setUp(): void
    {
        parent::setUp();

        $this->categoriesPath = database_path("seeders/seeds_data/{$this->testLang}/categories.php");
        $this->categoriesBackupPath = database_path("seeders/seeds_data/{$this->testLang}/categories.backup.php");

        // Back up categories.php if it exists
        if (File::exists($this->categoriesPath)) {
            File::copy($this->categoriesPath, $this->categoriesBackupPath);
        }

        $this->deckDir = database_path("seeders/seeds_data/{$this->testLang}/{$this->testCatKey}/{$this->testSubcatKey}");
        $this->deckFilePath = "{$this->deckDir}/{$this->testDeckFile}.php";

        // Create a temporary source txt file to import cards from
        $this->tempImportFile = tempnam(sys_get_temp_dir(), 'deck_test_');
        File::put($this->tempImportFile, "Привет - Hello\nПока - Bye\n");
    }

    protected function tearDown(): void
    {
        // Clean up created files
        if (File::exists($this->deckFilePath)) {
            File::delete($this->deckFilePath);
        }
        if (File::isDirectory(database_path("seeders/seeds_data/{$this->testLang}/{$this->testCatKey}"))) {
            File::deleteDirectory(database_path("seeders/seeds_data/{$this->testLang}/{$this->testCatKey}"));
        }
        if (File::exists($this->tempImportFile)) {
            File::delete($this->tempImportFile);
        }

        // Restore categories.php
        if (File::exists($this->categoriesBackupPath)) {
            File::move($this->categoriesBackupPath, $this->categoriesPath);
        } else {
            if (File::exists($this->categoriesPath)) {
                File::delete($this->categoriesPath);
            }
        }

        parent::tearDown();
    }

    public function test_can_import_and_seed_template_deck_interactively()
    {
        // Assert files do not exist initially
        $this->assertFalse(File::exists($this->deckFilePath));

        // Call the artisan command and mock all interactions
        $this->artisan('deck:import-template')
            ->expectsChoice('Select target language:', $this->testLang, ['ru', 'en', 'uk'])
            ->expectsChoice('Select Category:', '[Create New Category]', ['languages', 'it', 'practical', '[Create New Category]'])
            ->expectsQuestion('Enter category key (slug, e.g. history):', $this->testCatKey)
            ->expectsQuestion('Enter category name (e.g. 📜 История):', '🏆 Тестовая Категория')
            ->expectsChoice('Select Subcategory:', '[Create New Subcategory]', ['[Create New Subcategory]'])
            ->expectsQuestion('Enter subcategory key (slug, e.g. ancient_rome):', $this->testSubcatKey)
            ->expectsQuestion('Enter subcategory name (e.g. 🏛 Древний Рим):', '🥇 Тестовая Подкатегория')
            ->expectsQuestion('Enter deck filename (without .php, e.g. rome_republic):', $this->testDeckFile)
            ->expectsQuestion('Enter deck title (e.g. 🏛 Древний Рим: Эпоха Республики):', '🚀 Тестовая Колода')
            ->expectsQuestion('Enter deck description (optional):', 'Описание тестовой колоды')
            ->expectsQuestion('Enter question language code (e.g. ru):', $this->testLang)
            ->expectsQuestion('Enter answer language code (e.g. en):', 'en')
            ->expectsQuestion('Enter sort order (optional, leave empty for auto-generated):', '15')
            ->expectsChoice('Select flashcards input method:', 'From a local text file', [
                'From a local text file',
                'Paste raw text in CLI',
                'Empty template (scaffold only)'
            ])
            ->expectsQuestion('Enter path to the text file:', $this->tempImportFile)
            ->expectsQuestion('Enter question-answer separator:', '-')
            ->expectsConfirmation('Do you want to run the TemplateDeckSeeder to update the database now?', 'yes')
            ->assertExitCode(0);

        // Verify files were generated
        $this->assertTrue(File::exists($this->deckFilePath));

        $deckData = include $this->deckFilePath;
        $this->assertEquals('🚀 Тестовая Колода', $deckData['name']);
        $this->assertEquals('Описание тестовой колоды', $deckData['description']);
        $this->assertEquals(15, $deckData['sort_order']);
        $this->assertCount(2, $deckData['cards']);
        $this->assertEquals('Привет', $deckData['cards'][0]['q']);
        $this->assertEquals('Hello', $deckData['cards'][0]['a']);

        // Verify categories.php contains the new category
        $this->assertTrue(File::exists($this->categoriesPath));
        $categoriesMap = include $this->categoriesPath;
        $this->assertArrayHasKey($this->testCatKey, $categoriesMap);
        $this->assertEquals('🏆 Тестовая Категория', $categoriesMap[$this->testCatKey]['name']);
        $this->assertArrayHasKey($this->testSubcatKey, $categoriesMap[$this->testCatKey]['subcategories']);
        $this->assertEquals('🥇 Тестовая Подкатегория', $categoriesMap[$this->testCatKey]['subcategories'][$this->testSubcatKey]['name']);

        // Verify database records were seeded
        $this->assertDatabaseHas('template_categories', [
            'name' => '🏆 Тестовая Категория',
            'lang' => $this->testLang,
            'parent_id' => null,
        ]);

        $dbSubcategory = TemplateCategory::where('name', '🥇 Тестовая Подкатегория')->first();
        $this->assertNotNull($dbSubcategory);

        $this->assertDatabaseHas('template_decks', [
            'name' => '🚀 Тестовая Колода',
            'category_id' => $dbSubcategory->id,
            'deck_lang' => $this->testLang,
            'question_lang' => $this->testLang,
            'answer_lang' => 'en',
            'sort_order' => 15,
        ]);

        $dbDeck = TemplateDeck::where('name', '🚀 Тестовая Колода')->first();
        $this->assertNotNull($dbDeck);

        $this->assertDatabaseHas('template_flashcards', [
            'deck_id' => $dbDeck->id,
            'question' => 'Привет',
            'answer' => 'Hello',
        ]);
        $this->assertDatabaseHas('template_flashcards', [
            'deck_id' => $dbDeck->id,
            'question' => 'Пока',
            'answer' => 'Bye',
        ]);
    }

    public function test_my_fresh_command_runs_safely()
    {
        $this->artisan('my:fresh')
            ->expectsOutput('Starting safe database update...')
            ->expectsOutput('Running safe migrations...')
            ->expectsOutput('Refreshing template decks from seeds_data...')
            ->expectsOutput('Database successfully updated safely!')
            ->assertExitCode(0);
    }
}
