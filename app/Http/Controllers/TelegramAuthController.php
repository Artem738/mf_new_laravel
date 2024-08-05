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
        if (!isset($data['auth_date']) || !isset($data['user']) || !isset($data['hash'])) {
            return response()->json(['status' => 'error', 'message' => 'Missing data fields'], 400);
        }

        // Декодируем JSON строку user
        $data['user'] = json_decode($data['user'], true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['status' => 'error', 'message' => 'Invalid user data'], 400);
        }

        // Формируем строку для проверки
        $dataCheckString = $this->generateDataCheckString($data);

        // Валидация хэша
        if ($this->validateTelegramData($data, $dataCheckString, $botToken)) {
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

    private function generateDataCheckString($data)
    {
        $dataCheckString = [];

        foreach ($data as $key => $value) {
            if ($key !== 'hash') {
                if (is_array($value)) {
                    foreach ($value as $subKey => $subValue) {
                        $dataCheckString[] = $subKey . '=' . $subValue;
                    }
                } else {
                    $dataCheckString[] = $key . '=' . $value;
                }
            }
        }

        sort($dataCheckString);
        return implode("\n", $dataCheckString);
    }

    private function validateTelegramData($data, $dataCheckString, $botToken)
    {
        $checkHash = $data['hash'];

        // Создаем секретный ключ
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);
        $calculatedHash = hash_hmac('sha256', $dataCheckString, $secretKey);

        // Логируем строку для проверки и рассчитанный хэш
        Log::info('Data Check String: ' . $dataCheckString);
        Log::info('Calculated Hash: ' . $calculatedHash);
        Log::info('Received Hash: ' . $checkHash);

        return hash_equals($calculatedHash, $checkHash);
    }
}
