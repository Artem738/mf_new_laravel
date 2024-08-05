<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TelegramAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $data = $request->all();
        $botToken = env('TELEGRAM_BOT_TOKEN'); // Ваш реальный бот-токен

        // Логируем данные для отладки
        Log::info('Received Telegram data: ', $data);

        // Проверяем наличие необходимых полей
        if (!isset($data['raw']) || !isset($data['hash'])) {
            Log::error('Missing data fields');
            return response()->json(['status' => 'error', 'message' => 'Missing data fields'], 400);
        }

        // Получаем строку для проверки и хэш из данных
        $rawData = $data['raw'];
        $checkHash = $data['hash'];

        // Создаем секретный ключ
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);
        $calculatedHash = hash_hmac('sha256', $rawData, $secretKey);

        // Логируем строку для проверки и рассчитанный хэш
        Log::info('Secret Key (hex): ' . bin2hex($secretKey));
        Log::info('Raw Data: ' . $rawData);
        Log::info('Calculated Hash: ' . $calculatedHash);
        Log::info('Received Hash: ' . $checkHash);

        // Валидация хэша
        if (hash_equals($calculatedHash, $checkHash)) {
            // Валидация успешна
            Log::info('Validation successful');
            return response()->json([
                'status' => 'success',
                'message' => 'User is valid',
                'token' => 'your_generated_token_here' // Здесь вы можете сгенерировать и вернуть токен
            ]);
        } else {
            // Валидация не прошла
            Log::error('Validation failed');
            return response()->json(['status' => 'error', 'message' => 'Invalid data'], 400);
        }
    }
}
