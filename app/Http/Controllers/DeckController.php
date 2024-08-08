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

    public function index()
    {
        $user = Auth::user();
        $decks = Deck::where('user_id', $user->id)->get();
        return response()->json($decks);
    }

    public function show($id)
    {
        $user = Auth::user();
        $deck = Deck::where('user_id', $user->id)->find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }
        return response()->json($deck);
    }

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

    public function addTemplateBaseToUser(Request $request)
    {
        $user = Auth::user();
        $templateDeckId = $request->input('template_deck_id');

        // Проверка наличия шаблонной колоды
        $templateDeck = TemplateDeck::find($templateDeckId);
        if (!$templateDeck) {
            return response()->json(['message' => 'Template deck not found'], 404);
        }

        // Проверка наличия колоды с таким же именем у пользователя
        $existingDeck = Deck::where('user_id', $user->id)
                            ->where('name', $templateDeck->name)
                            ->first();
        if ($existingDeck) {
            return response()->json(['message' => 'User already has a deck with this name'], 400);
        }

        // Создание новой колоды для пользователя
        $newDeck = Deck::create([
            'user_id' => $user->id,
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

}
