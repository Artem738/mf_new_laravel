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

    public function index()
    {
        $decks = TemplateDeck::all();
        return response()->json($decks);
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

