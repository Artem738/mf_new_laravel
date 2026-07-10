<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deck;
use App\Models\Flashcard;
use App\Models\CreditTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppUsageDashboardController extends Controller
{
    /**
     * Check if the secret matches.
     */
    private function verifySecret(string $secret): void
    {
        $configuredSecret = config('services.dashboard.secret', 'secret54');
        if ($secret !== $configuredSecret) {
            abort(404);
        }
    }

    /**
     * Show the main dashboard view.
     */
    public function index(string $secret)
    {
        $this->verifySecret($secret);
        return view('dashboard', ['secret' => $secret]);
    }

    /**
     * Fetch general stats and user lists.
     */
    public function data(string $secret)
    {
        $this->verifySecret($secret);

        // General stats
        $totalUsers = User::count();
        $totalDecks = Deck::count();
        $totalCards = Flashcard::count();
        $totalReviews = DB::table('progress')->count();
        
        // Active users (reviewed cards in last 7 days)
        $activeUsers = User::whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('progress')
                ->whereColumn('progress.user_id', 'users.id')
                ->where('progress.last_reviewed_at', '>=', now()->subDays(7));
        })->count();

        // Total AI credits held
        $totalAiCredits = User::sum('ai_credits');

        // Users List
        // We select users and run a subquery to get their last activity
        $users = User::select('users.*')
            ->selectSub(function($query) {
                $query->selectRaw('MAX(last_reviewed_at)')
                    ->from('progress')
                    ->whereColumn('progress.user_id', 'users.id');
            }, 'last_activity_at')
            ->withCount('decks')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($user) {
                $user->last_activity = $user->last_activity_at ? $user->last_activity_at : null;
                return $user;
            });

        return response()->json([
            'stats' => [
                'total_users' => $totalUsers,
                'active_users_7d' => $activeUsers,
                'total_decks' => $totalDecks,
                'total_cards' => $totalCards,
                'total_reviews' => $totalReviews,
                'total_ai_credits' => (int)$totalAiCredits,
            ],
            'users' => $users
        ]);
    }

    /**
     * Fetch details of a specific user.
     */
    public function userDetails(string $secret, int $userId)
    {
        $this->verifySecret($secret);

        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Get user's decks with stats
        $decks = Deck::where('decks.user_id', $userId)
            ->leftJoin('template_decks', 'decks.template_deck_id', '=', 'template_decks.id')
            ->select(
                'decks.id',
                'decks.user_id',
                'decks.template_deck_id',
                'decks.name',
                'decks.description',
                'decks.question_lang',
                'decks.answer_lang',
                'decks.created_at',
                'decks.updated_at',
                'template_decks.name as template_name'
            )
            ->get()
            ->map(function ($deck) use ($userId) {
                $stats = DB::table('flashcards')
                    ->where('flashcards.deck_id', $deck->id)
                    ->leftJoin('progress', function ($join) use ($userId) {
                        $join->on('progress.flashcard_id', '=', 'flashcards.id')
                             ->where('progress.user_id', '=', $userId);
                    })
                    ->selectRaw('
                        COUNT(flashcards.id) as total_cards,
                        COUNT(progress.id) as studied_cards,
                        SUM(CASE WHEN progress.interval_days > 7 THEN 1 ELSE 0 END) as mastered_cards,
                        SUM(CASE WHEN progress.next_review_at <= NOW() THEN 1 ELSE 0 END) as due_cards,
                        AVG(progress.ease_factor) as avg_ease_factor
                    ')
                    ->first();

                $deck->total_cards = (int)$stats->total_cards;
                $deck->studied_cards = (int)$stats->studied_cards;
                $deck->mastered_cards = (int)$stats->mastered_cards;
                $deck->due_cards = (int)$stats->due_cards;
                $deck->avg_ease_factor = $stats->avg_ease_factor ? round((float)$stats->avg_ease_factor, 2) : null;

                return $deck;
            });

        // Get recent transactions (limit 50)
        $transactions = CreditTransaction::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take(50)
            ->get();

        return response()->json([
            'user' => $user,
            'decks' => $decks,
            'transactions' => $transactions
        ]);
    }
}
