<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TelegramAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $data = $request->all();
        $botToken = env('TELEGRAM_BOT_TOKEN');

        // Логируем данные для отладки
        Log::info('Received Telegram data: ', $data);

        // Декодируем JSON строку user
        $data['user'] = str_replace('\"', '"', $data['user']);

        if ($this->validateTelegramData($data, $botToken)) {
            // Валидация успешна
            return response()->json([
                'status' => 'success',
                'message' => 'User is valid',
                'token' => 'your_generated_token_here' // Здесь вы можете сгенерировать и вернуть токен
            ]);
        } else {
            // Валидация не прошла
            return response()->json(['status' => 'error', 'message' => 'Invalid data'], 400);
        }
    }

    private function validateTelegramData($data, $botToken)
    {
        if (!isset($data['hash']) || !isset($data['auth_date']) || !isset($data['user'])) {
            return false;
        }

        $checkHash = $data['hash'];
        unset($data['hash']);

        // Формируем строку для проверки
        $dataCheckString = [];
        foreach ($data as $key => $value) {
            $dataCheckString[] = $key . '=' . $value;
        }
        sort($dataCheckString);
        $dataCheckString = implode("\n", $dataCheckString);

        // Логируем строку для проверки
        Log::info('Data Check String: ' . $dataCheckString);

        // Создаем секретный ключ
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);
        $calculatedHash = hash_hmac('sha256', $dataCheckString, $secretKey);

        // Логируем рассчитанный хэш и хэш из данных
        Log::info('Calculated Hash: ' . $calculatedHash);
        Log::info('Received Hash: ' . $checkHash);

        return hash_equals($calculatedHash, $checkHash);
    }
}
