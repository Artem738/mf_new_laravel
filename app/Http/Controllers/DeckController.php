<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\Flashcard;
use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    // Получение всех колод пользователя
    public function index()
    {
        $user = Auth::user();
        $decks = Deck::where('user_id', $user->id)->get();
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
    public function showFlashcards($id)
    {
        $user = Auth::user();
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        // Получение карточек с учетом веса пользователя и последней даты рассмотрения
        $flashcards = DB::table('flashcards')
            ->leftJoin('progress', function ($join) use ($user) {
                $join->on('flashcards.id', '=', 'progress.flashcard_id')
                     ->where('progress.user_id', '=', $user->id);
            })
            ->where('flashcards.deck_id', $id)
            ->select('flashcards.*', 'progress.weight', 'progress.last_reviewed_at')
            ->get();

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
        $newDeck = Deck::create([
            'user_id' => $user->id,
            'template_deck_id' => $templateDeck->id,  // Указание template_deck_id
            'name' => $templateDeck->name,
            'description' => $templateDeck->description,
        ]);
    
        // Копирование карточек из шаблонной колоды
        $templateFlashcards = TemplateFlashcard::where('deck_id', $templateDeckId)->get();
        foreach ($templateFlashcards as $templateFlashcard) {
            Flashcard::create([
                'deck_id' => $newDeck->id,
                'question' => $templateFlashcard->question,
                'answer' => $templateFlashcard->answer,
                'weight' => $templateFlashcard->weight,
            ]);
        }
    
        return response()->json(['message' => 'Template base added to user'], 200);
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
