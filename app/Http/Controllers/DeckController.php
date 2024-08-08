<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\Flashcard;
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
}
