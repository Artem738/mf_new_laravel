<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoggerController;
use App\Http\Controllers\TelegramAuthController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

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