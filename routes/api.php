<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoggerController;
use App\Http\Controllers\TelegramAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\TemplateDeckController;




Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/template-decks', [TemplateDeckController::class, 'index']);
    Route::get('/template-decks/{id}', [TemplateDeckController::class, 'show']);
    Route::get('/template-decks/{id}/flashcards', [TemplateDeckController::class, 'showFlashcards']);
});


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