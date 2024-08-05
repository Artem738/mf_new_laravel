<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-hash', function () {
    $botToken = env('TELEGRAM_BOT_TOKEN');

    $data = [
        'auth_date' => '1691539200',
        'user' => '{"id":123456789,"first_name":"John","last_name":"Doe","username":"johndoe","language_code":"en"}',
    ];

    // Формируем строку для проверки
    $dataCheckString = [];
    foreach ($data as $key => $value) {
        $dataCheckString[] = $key . '=' . $value;
    }
    sort($dataCheckString);
    $dataCheckString = implode("\n", $dataCheckString);

    // Создаем секретный ключ
    $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);

    // Вычисляем хэш
    $calculatedHash = hash_hmac('sha256', $dataCheckString, $secretKey);

    // Выводим результаты
    return response()->json([
        'data_check_string' => $dataCheckString,
        'calculated_hash' => $calculatedHash
    ]);
});


