<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoggerController;
use App\Http\Controllers\TelegramAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\TemplateDeckController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\FlashcardController;

Route::middleware('auth:sanctum')->group(function () {

    // Flashcard Routes
    Route::post('/flashcards', [FlashcardController::class, 'store']);
    Route::get('/flashcards/{id}', [FlashcardController::class, 'show']);
    Route::put('/flashcards/{id}', [FlashcardController::class, 'update']);
    Route::delete('/flashcards/{id}', [FlashcardController::class, 'destroy']);
    Route::post('/flashcards/csv-insert', [FlashcardController::class, 'csvInsert']);

    // User Routes
    Route::get('/user', [UserController::class, 'show']);
    Route::patch('/user/language', [UserController::class, 'updateLanguageCode']);
    Route::put('/user/base-font-size', [UserController::class, 'updateBaseFontSize']);
    Route::get('/user/base-font-size', [UserController::class, 'getBaseFontSize']);
    
    // Template Deck Routes
    Route::get('/template-decks', [TemplateDeckController::class, 'index']);
    Route::get('/template-decks/{id}', [TemplateDeckController::class, 'show']);
    Route::get('/template-decks/{id}/flashcards', [TemplateDeckController::class, 'showFlashcards']);
    
    // Deck Routes
    Route::get('/decks', [DeckController::class, 'index']);
    Route::get('/decks/{id}', [DeckController::class, 'show']);
    Route::post('/decks', [DeckController::class, 'store']);
    Route::put('/decks/{id}', [DeckController::class, 'update']);
    Route::delete('/decks/{id}', [DeckController::class, 'deleteUserDeck']);
    Route::get('/decks/{id}/flashcards', [DeckController::class, 'showFlashcards']);
    Route::post('/add-template-to-user', [DeckController::class, 'addTemplateBaseToUser']);
    

    
    // Progress Routes
    Route::post('/flashcards/{flashcardId}/progress/weight', [ProgressController::class, 'updateWeight']);
});

// Логи
Route::post('/log', [ApiLoggerController::class, 'logMessage']);

// Аутентификация
Route::post('/telegram/auth', [TelegramAuthController::class, 'authenticate']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
