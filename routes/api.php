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




Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'show']);
    Route::patch('/user/language', [UserController::class, 'updateLanguageCode']);
    // Обновление base_font_size пользователя
    Route::put('/user/base-font-size', [UserController::class, 'updateBaseFontSize']);
    // Получение base_font_size пользователя
    Route::get('/user/base-font-size', [UserController::class, 'getBaseFontSize']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/template-decks', [TemplateDeckController::class, 'index']);
    Route::get('/template-decks/{id}', [TemplateDeckController::class, 'show']);
    Route::get('/template-decks/{id}/flashcards', [TemplateDeckController::class, 'showFlashcards']);
});

Route::middleware('auth:sanctum')->group(function () {
    // Route::get('/decks', [DeckController::class, 'index']);
    // Route::get('/decks/{id}', [DeckController::class, 'show']);
    // Route::get('/decks/{id}/flashcards', [DeckController::class, 'showFlashcards']);
    // Route::post('/add-template-to-user', [DeckController::class, 'addTemplateBaseToUser']);
    // Route::delete('/delete-user-deck/{id}', [DeckController::class, 'deleteUserDeck']);
    // Получение всех колод пользователя
    Route::get('/decks', [DeckController::class, 'index']);

    // Получение конкретной колоды по ID
    Route::get('/decks/{id}', [DeckController::class, 'show']);

    // Создание новой колоды
    Route::post('/decks', [DeckController::class, 'store']);

    // Обновление существующей колоды по ID
    Route::put('/decks/{id}', [DeckController::class, 'update']);

    // Удаление колоды пользователя по ID
    Route::delete('/decks/{id}', [DeckController::class, 'deleteUserDeck']);

    // Получение всех карточек в колоде
    Route::get('/decks/{id}/flashcards', [DeckController::class, 'showFlashcards']);

    // Добавление шаблонной базы для пользователя
    Route::post('/add-template-to-user', [DeckController::class, 'addTemplateBaseToUser']);
    //Route::post('/delete-user-deck', [DeckController::class, 'deleteUserDeck']);
});



Route::middleware('auth:sanctum')->post('/flashcards/{flashcardId}/progress/weight', [ProgressController::class, 'updateWeight']);


Route::get('/decks', [DeckController::class, 'index']);
Route::get('/decks/{id}', [DeckController::class, 'show']);


Route::post('/log', [ApiLoggerController::class, 'logMessage']);


/*
|--------------------------------------------------------------------------
| Маршрут для аутентификации Telegram
|--------------------------------------------------------------------------
||
| Хеш необходимо проверить на сервере с использованием токена бота Telegram.
|
*/

Route::post('/telegram/auth', [TelegramAuthController::class, 'authenticate']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
