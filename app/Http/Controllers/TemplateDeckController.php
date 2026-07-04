<?php

namespace App\Http\Controllers;

use App\Models\TemplateDeck;
use App\Models\TemplateFlashcard;
use Illuminate\Http\Request;

class TemplateDeckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        $user = $request->user();
        $lang = $user->language_code ?? 'ru';

        if (!in_array($lang, ['ru', 'en', 'uk'])) {
            $lang = 'ru';
        }

        $categories = \App\Models\TemplateCategory::whereNull('parent_id')
            ->where('lang', $lang)
            ->whereHas('children.decks')
            ->orderBy('sort_order', 'asc')
            ->with(['children' => function ($query) {
                $query->has('decks')
                    ->orderBy('sort_order', 'asc')
                    ->with(['decks' => function ($q) {
                        $q->orderBy('sort_order', 'asc')
                          ->withCount('flashcards');
                    }]);
            }])
            ->get();

        return response()->json($categories);
    }

    public function show($id)
    {
        $deck = TemplateDeck::find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }
        return response()->json($deck);
    }

    public function showFlashcards($id)
    {
        $deck = TemplateDeck::find($id);
        if (!$deck) {
            return response()->json(['message' => 'Deck not found'], 404);
        }

        $flashcards = TemplateFlashcard::where('deck_id', $id)->get();
        return response()->json($flashcards);
    }

}

