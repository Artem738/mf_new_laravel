<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deck;
use Illuminate\Support\Facades\Log;

class FlashcardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    // Получение одной флешкарты по ID
    public function show($id)
    {
        $user = Auth::user();

        // Поиск флешкарты пользователя
        $flashcard = Flashcard::whereHas('deck', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->find($id);

        if (!$flashcard) {
            return response()->json(['message' => 'Flashcard not found'], 404);
        }

        return response()->json($flashcard);
    }

    // Создание новой флешкарты
    public function store(Request $request)
    {
        $user = Auth::user();

        // Валидация данных
        $request->validate([
            'deck_id' => 'required|exists:decks,id',
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
            // 'weight' => 'nullable|integer',
        ]);

        // Проверка, что колода принадлежит пользователю
        $deck = Deck::where('id', $request->input('deck_id'))
            ->where('user_id', $user->id)
            ->first();

        if (!$deck) {
            return response()->json(['message' => 'Deck not found or does not belong to the user'], 404);
        }

        // Проверка, нет ли у пользователя флешкарты с таким же вопросом
        $existingFlashcard = Flashcard::where('deck_id', $request->input('deck_id'))
            ->where('question', $request->input('question'))
            ->first();

        if ($existingFlashcard) {
            return response()->json(['message' => 'Flashcard with this question already exists'], 409);
        }

        // Создание новой флешкарты
        $flashcard = Flashcard::create([
            'deck_id' => $request->input('deck_id'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'weight' => $request->input('weight', 0),
            // 'last_answer_weight' => null,
        ]);

        return response()->json($flashcard, 201);
    }



    // Обновление существующей флешкарты
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Поиск флешкарты пользователя
        $flashcard = Flashcard::whereHas('deck', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->find($id);

        if (!$flashcard) {
            return response()->json(['message' => 'Flashcard not found'], 404);
        }

        // Валидация данных
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'weight' => 'nullable|integer',
        ]);

        // Проверка, нет ли у пользователя другой флешкарты с таким же вопросом
        $existingFlashcard = Flashcard::where('deck_id', $flashcard->deck_id)
            ->where('question', $request->input('question'))
            ->where('id', '!=', $flashcard->id) // исключаем текущую флешкарту из поиска
            ->first();

        if ($existingFlashcard) {
            return response()->json(['message' => 'Flashcard with this question already exists'], 409);
        }

        // Обновление данных флешкарты
        $flashcard->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'weight' => $request->input('weight', $flashcard->weight),
        ]);

        return response()->json($flashcard);
    }

    /*

    aasd;rtyyy
    333;3333
    555;777

    */

    public function csvInsert(Request $request)
    {
        Log::info("csvInsert method started.");
    
        $user = Auth::user();
        Log::info("Authenticated user", ['user_id' => $user->id]);
    
        // Валидация данных
        $validated = $request->validate([
            'deck_id' => 'required|exists:decks,id',
            'csv_data' => 'required|string',
        ]);
        Log::info("Request validated", $validated);
    
        // Проверка, что колода принадлежит пользователю
        $deck = Deck::where('id', $request->input('deck_id'))
            ->where('user_id', $user->id)
            ->first();
        Log::info("Deck checked", ['deck_id' => $request->input('deck_id'), 'deck_exists' => $deck !== null]);
    
        if (!$deck) {
            Log::warning("Deck not found or does not belong to the user", ['deck_id' => $request->input('deck_id')]);
            return response()->json(['message' => 'Deck not found or does not belong to the user'], 404);
        }
    
        // Чтение данных CSV из текстового поля
        $csvData = $request->input('csv_data');
        Log::info("CSV data received", ['csv_data' => $csvData]);
    
        // Разделение на строки
        $rows = explode("\n", $csvData);
        Log::info("CSV data split into rows", ['rows' => $rows]);
    
        // Обработка каждой строки
        foreach ($rows as $row) {
            Log::info("Processing row", ['row' => $row]);
    
            // Если строка пустая, пропустить
            if (empty(trim($row))) {
                Log::warning("Skipping empty row", ['row' => $row]);
                continue;
            }
    
            // Разделение строки по `;`
            $columns = explode(";", $row);
    
            // Если меньше двух колонок, пропустить
            if (count($columns) < 2) {
                Log::warning("Skipping row due to insufficient columns", ['row' => $row]);
                continue;
            }
    
            $question = trim($columns[0]);
            $answer = trim($columns[1]);
    
            Log::info("Extracted question and answer", ['question' => $question, 'answer' => $answer]);
    
            // Проверка, нет ли у пользователя флешкарты с таким же вопросом
            $flashcard = Flashcard::where('deck_id', $request->input('deck_id'))
                ->where('question', $question)
                ->first();
            Log::info("Flashcard existence checked", ['flashcard_exists' => $flashcard !== null]);
    
            if ($flashcard) {
                // Обновление существующей флешкарты
                $flashcard->update([
                    'answer' => $answer,
                    'weight' => $flashcard->weight, // Сохраняем вес, если это важно
                ]);
                Log::info("Flashcard updated", ['flashcard_id' => $flashcard->id]);
            } else {
                // Создание новой флешкарты
                $newFlashcard = Flashcard::create([
                    'deck_id' => $request->input('deck_id'),
                    'question' => $question,
                    'answer' => $answer,
                    'weight' => 0, // Или передать значение, если есть в CSV
                ]);
                Log::info("New flashcard created", ['flashcard_id' => $newFlashcard->id]);
            }
        }
    
        Log::info("CSV data processed successfully.");
        return response()->json(['message' => 'CSV data processed successfully'], 201);
    }
    



    // Удаление флешкарты
    public function destroy($id)
    {
        $user = Auth::user();

        // Поиск флешкарты пользователя
        $flashcard = Flashcard::whereHas('deck', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->find($id);

        if (!$flashcard) {
            return response()->json(['message' => 'Flashcard not found'], 404);
        }

        // Удаление флешкарты
        $flashcard->delete();

        return response()->json(['message' => 'Flashcard deleted successfully']);
    }
}
