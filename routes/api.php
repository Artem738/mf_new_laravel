<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoggerController;
use App\Http\Controllers\TelegramAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;




Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);

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