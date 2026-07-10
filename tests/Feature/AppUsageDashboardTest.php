<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Deck;
use App\Models\CreditTransaction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AppUsageDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_requires_correct_secret_token()
    {
        // Set secret key configuration
        config(['services.dashboard.secret' => 'supersecret123']);

        // Access with wrong key
        $response = $this->get('/dashboard/wrong-key');
        $response->assertStatus(404);

        $responseData = $this->get('/dashboard/wrong-key/data');
        $responseData->assertStatus(404);

        // Access with correct key
        $responseCorrect = $this->get('/dashboard/supersecret123');
        $responseCorrect->assertStatus(200);
    }

    public function test_dashboard_data_endpoint_returns_stats_and_users()
    {
        config(['services.dashboard.secret' => 'supersecret123']);

        // Create sample users
        $user1 = User::factory()->create([
            'name' => 'John Doe',
            'telegram_id' => 1234567,
            'ai_credits' => 100,
        ]);
        
        $user2 = User::factory()->create([
            'name' => 'Jane Smith',
            'telegram_id' => 7654321,
            'ai_credits' => 50,
        ]);

        $deck = Deck::create([
            'user_id' => $user1->id,
            'name' => 'English Vocabulary',
            'description' => 'Test deck',
            'question_lang' => 'ru',
            'answer_lang' => 'en',
        ]);

        $response = $this->getJson('/dashboard/supersecret123/data');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'stats' => [
                'total_users',
                'active_users_7d',
                'total_decks',
                'total_cards',
                'total_reviews',
                'total_ai_credits',
            ],
            'users' => [
                '*' => [
                    'id',
                    'name',
                    'telegram_id',
                    'ai_credits',
                    'decks_count',
                    'last_activity',
                ]
            ]
        ]);

        $this->assertEquals(2, $response->json('stats.total_users'));
        $this->assertEquals(1, $response->json('stats.total_decks'));
        $this->assertEquals(150, $response->json('stats.total_ai_credits'));
    }

    public function test_dashboard_user_details_endpoint_returns_deck_and_txs_details()
    {
        config(['services.dashboard.secret' => 'supersecret123']);

        $user = User::factory()->create([
            'name' => 'Alice Cooper',
            'telegram_id' => 999999,
        ]);

        $deck = Deck::create([
            'user_id' => $user->id,
            'name' => 'Alice Spanish Deck',
            'description' => 'Alice description',
            'question_lang' => 'en',
            'answer_lang' => 'es',
        ]);

        CreditTransaction::create([
            'user_id' => $user->id,
            'amount' => -10,
            'balance_after' => 90,
            'type' => 'ai_generation',
            'description' => 'AI Generation card creation cost',
        ]);

        $response = $this->getJson("/dashboard/supersecret123/user/{$user->id}");
        $response->assertStatus(200);
        
        $response->assertJsonStructure([
            'user' => [
                'id',
                'name',
                'telegram_id',
            ],
            'decks' => [
                '*' => [
                    'id',
                    'name',
                    'total_cards',
                    'studied_cards',
                    'mastered_cards',
                    'due_cards',
                    'avg_ease_factor',
                ]
            ],
            'transactions' => [
                '*' => [
                    'id',
                    'amount',
                    'balance_after',
                    'description',
                ]
            ]
        ]);

        $this->assertEquals('Alice Cooper', $response->json('user.name'));
        $this->assertCount(1, $response->json('decks'));
        $this->assertEquals('Alice Spanish Deck', $response->json('decks.0.name'));
        $this->assertCount(1, $response->json('transactions'));
        $this->assertEquals(-10, $response->json('transactions.0.amount'));
    }
}
