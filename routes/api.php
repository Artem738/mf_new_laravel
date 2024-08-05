<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoggerController;
use App\Http\Controllers\TelegramAuthController;

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
|
| Этот маршрут используется для аутентификации пользователей Telegram WebApp.
| Запрос содержит initData, который включает информацию о пользователе и хеш.
| 
| Пример входящих данных initData:
| 
| query_id=ВАШ_ЗАПРОС_ID&
| user={
|     "id": ПОЛЬЗОВАТЕЛЬ_ID,
|     "first_name": "Имя",
|     "last_name": "Фамилия",
|     "username": "Псевдоним",
|     "language_code": "ru",
|     "allows_write_to_pm": true
| }&
| auth_date=ДАТА_АВТОРИЗАЦИИ&
| hash=ВАШ_ХЕШ
|
| Хеш необходимо проверить на сервере с использованием токена бота Telegram.
|
*/

Route::post('/telegram/auth', [TelegramAuthController::class, 'authenticate']);