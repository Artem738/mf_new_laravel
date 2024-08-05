<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class TelegramAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // Логирование всего запроса
        Log::info('Received request', $request->all());

        // Получение данных из запроса
        $initData = $request->input('initData');

        // Парсинг данных
        parse_str($initData, $data);
        Log::info('Parsed init data', $data);

        // Получение хеша из данных
        $receivedHash = $data['hash'] ?? null;
        if (!$receivedHash) {
            Log::error('Hash not found in init data');
            return response()->json(['error' => 'Hash not found'], 400);
        }

        // Удаление хеша из данных для проверки
        unset($data['hash']);

        // Сортировка данных по ключам
        ksort($data);

        // Создание строки для проверки
        $dataCheckString = urldecode(http_build_query($data, '', "\n"));
        Log::info('Data check string', ['data_check_string' => $dataCheckString]);

        // Получение ключа бота из окружения
        $botToken = env('TELEGRAM_BOT_TOKEN');

        // Создание секретного ключа
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);
        Log::info('Secret key generated', ['secret_key' => bin2hex($secretKey)]);

        // Создание хеша для проверки
        $computedHash = hash_hmac('sha256', $dataCheckString, $secretKey);
        Log::info('Computed hash', ['computed_hash' => $computedHash]);

        // Проверка хеша
        if (hash_equals($computedHash, $receivedHash)) {
            Log::info('Hash verification passed');
            return response()->json(['status' => 'success', 'message' => 'Hash verification passed']);
        } else {
            Log::error('Hash verification failed');
            return response()->json(['error' => 'Hash verification failed'], 403);
        }
    }
}
