<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\Flashcard;
use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DeckController extends Controller
{
    // Получение всех колод пользователя
    public function index()
    {
        $user = Auth::user();
        $decks = Deck::where('user_id', $user->id)->get();

        if ($decks->isEmpty()) {
            return response()->json($decks);
        }

        $stats = DB::table('flashcards')
            ->leftJoin('progress', function ($join) use ($user) {
                $join->on('flashcards.id', '=', 'progress.flashcard_id')
                    ->where('progress.user_id', '=', $user->id);
            })
            ->whereIn('flashcards.deck_id', $decks->pluck('id'))
            ->select('flashcards.deck_id', 'progress.last_answer_weight', DB::raw('count(*) as count'))
            ->groupBy('flashcards.deck_id', 'progress.last_answer_weight')
            ->get();

        $deckStats = [];
        foreach ($stats as $stat) {
            $deckId = $stat->deck_id;
            if (!isset($deckStats[$deckId])) {
                $deckStats[$deckId] = [
                    'total_cards' => 0,
                    'gray_cards' => 0,
                    'red_cards' => 0,
                    'yellow_cards' => 0,
                    'green_cards' => 0,
                ];
            }

            $deckStats[$deckId]['total_cards'] += $stat->count;

            if (is_null($stat->last_answer_weight)) {
                $deckStats[$deckId]['gray_cards'] += $stat->count;
            } elseif ($stat->last_answer_weight == 1) {
                $deckStats[$deckId]['red_cards'] += $stat->count;
            } elseif ($stat->last_answer_weight == 7) {
                $deckStats[$deckId]['yellow_cards'] += $stat->count;
            } elseif ($stat->last_answer_weight == 30) {
                $deckStats[$deckId]['green_cards'] += $stat->count;
            } else {
                $deckStats[$deckId]['gray_cards'] += $stat->count;
            }
        }

        foreach ($decks as $deck) {
            if (isset($deckStats[$deck->id])) {
                $deck->total_cards = $deckStats[$deck->id]['total_cards'];
                $deck->gray_cards = $deckStats[$deck->id]['gray_cards'];
                $deck->red_cards = $deckStats[$deck->id]['red_cards'];
                $deck->yellow_cards = $deckStats[$deck->id]['yellow_cards'];
                $deck->green_cards = $deckStats[$deck->id]['green_cards'];
            } else {
                $deck->total_cards = 0;
                $deck->gray_cards = 0;
                $deck->red_cards = 0;
                $deck->yellow_cards = 0;
                $deck->green_cards = 0;
            }
        }

        return response()->json($decks);
    }

    // Получение одной колоды по ID
    public function show($id)
    {
        $user = Auth::user();
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        $stats = DB::table('flashcards')
            ->leftJoin('progress', function ($join) use ($user) {
                $join->on('flashcards.id', '=', 'progress.flashcard_id')
                    ->where('progress.user_id', '=', $user->id);
            })
            ->where('flashcards.deck_id', $deck->id)
            ->select('progress.last_answer_weight', DB::raw('count(*) as count'))
            ->groupBy('progress.last_answer_weight')
            ->get();

        $deck->total_cards = 0;
        $deck->gray_cards = 0;
        $deck->red_cards = 0;
        $deck->yellow_cards = 0;
        $deck->green_cards = 0;

        foreach ($stats as $stat) {
            $deck->total_cards += $stat->count;
            if (is_null($stat->last_answer_weight)) {
                $deck->gray_cards += $stat->count;
            } elseif ($stat->last_answer_weight == 1) {
                $deck->red_cards += $stat->count;
            } elseif ($stat->last_answer_weight == 7) {
                $deck->yellow_cards += $stat->count;
            } elseif ($stat->last_answer_weight == 30) {
                $deck->green_cards += $stat->count;
            } else {
                $deck->gray_cards += $stat->count;
            }
        }

        return response()->json($deck);
    }

    // Создание новой колоды
    public function store(Request $request)
    {
        $user = Auth::user();

        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'template_deck_id' => 'nullable|exists:template_decks,id'
        ]);

        // Создание новой колоды
        $deck = Deck::create([
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'template_deck_id' => $request->input('template_deck_id'),
        ]);

        return response()->json($deck, 201);
    }

    // Обновление существующей колоды
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Поиск колоды пользователя
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Обновление колоды
        $deck->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json($deck);
    }

    // Получение всех карточек колоды
    public function showFlashcards(Request $request, $id)
    {
        $user = Auth::user();
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        $mode = $request->query('mode', 'srs');

        $query = DB::table('flashcards')
            ->leftJoin('progress', function ($join) use ($user) {
                $join->on('flashcards.id', '=', 'progress.flashcard_id')
                    ->where('progress.user_id', '=', $user->id);
            })
            ->where('flashcards.deck_id', $id);

        if ($mode === 'srs') {
            $query->where(function ($q) {
                $q->whereNull('progress.id')
                    ->orWhere('progress.next_review_at', '<=', now());
            });
        }

        $flashcards = $query->select(
            'flashcards.*',
            'progress.weight',
            'progress.last_answer_weight',
            'progress.last_reviewed_at',
            'progress.ease_factor',
            'progress.interval_days',
            'progress.next_review_at'
        )->get();

        return response()->json($flashcards);
    }

    // Добавление шаблонной базы для пользователя
    public function addTemplateBaseToUser(Request $request)
    {
        $user = Auth::user();
        $templateDeckId = $request->input('template_deck_id');

        // Проверка наличия шаблонной колоды
        $templateDeck = TemplateDeck::find($templateDeckId);
        if (!$templateDeck) {
            return response()->json(['message' => 'Template deck not found'], 404);
        }

        // Проверка наличия колоды с таким же template_deck_id у пользователя
        $existingDeck = Deck::where('user_id', $user->id)
            ->where('template_deck_id', $templateDeck->id)
            ->first();
        if ($existingDeck) {
            return response()->json(['message' => 'User already has a deck based on this template'], 400);
        }

        // Создание новой колоды для пользователя с привязкой к шаблонной колоде
        DB::beginTransaction();
        try {
            $newDeck = Deck::create([
                'user_id' => $user->id,
                'template_deck_id' => $templateDeck->id,  // Указание template_deck_id
                'name' => $templateDeck->name,
                'description' => $templateDeck->description,
            ]);

            // Копирование карточек из шаблонной колоды
            $templateFlashcards = TemplateFlashcard::where('deck_id', $templateDeckId)->get();

            $now = now();
            $flashcardsData = [];
            foreach ($templateFlashcards as $templateFlashcard) {
                $flashcardsData[] = [
                    'deck_id' => $newDeck->id,
                    'question' => $templateFlashcard->question,
                    'answer' => $templateFlashcard->answer,
                    'weight' => $templateFlashcard->weight,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            // Batch insert to avoid N+1 issue
            $chunks = array_chunk($flashcardsData, 500);
            foreach ($chunks as $chunk) {
                Flashcard::insert($chunk);
            }

            DB::commit();
            return response()->json(['message' => 'Template base added to user'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to add template base to user', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Failed to add template base'], 500);
        }
    }

    // Удаление колоды пользователя
    public function deleteUserDeck($id)
    {
        $user = Auth::user();

        // Поиск колоды пользователя
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        // Удаление колоды и всех зависимых данных
        DB::transaction(function () use ($deck) {
            // Удаление прогресса по карточкам этой колоды
            DB::table('progress')
                ->join('flashcards', 'progress.flashcard_id', '=', 'flashcards.id')
                ->where('flashcards.deck_id', $deck->id)
                ->delete();

            // Удаление карточек
            $deck->flashcards()->delete();

            // Удаление самой колоды
            $deck->delete();
        });

        return response()->json(['message' => 'Deck and all associated data deleted successfully'], 200);
    }
}
