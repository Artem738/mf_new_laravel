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
            Log::error('Missing data fields');
            return response()->json(['status' => 'error', 'message' => 'Missing data fields'], 400);
        }

        // Декодируем JSON строку user
        $data['user'] = json_decode($data['user'], true);
        Log::info('Decoded user data: ', $data['user']);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('Invalid user data', ['error' => json_last_error_msg()]);
            return response()->json(['status' => 'error', 'message' => 'Invalid user data'], 400);
        }

        // Формируем строку для проверки
        $dataCheckString = $this->generateDataCheckString($data);
        Log::info('Data Check String: ' . $dataCheckString);

        // Валидация хэша
        if ($this->validateTelegramData($data, $dataCheckString, $botToken)) {
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

    private function generateDataCheckString($data)
    {
        $dataCheckString = [];

        // Добавляем auth_date отдельно
        $dataCheckString[] = 'auth_date=' . $data['auth_date'];

        // Добавляем параметры из user
        foreach ($data['user'] as $key => $value) {
            if ($value === null) {
                $value = '';
            }
            $dataCheckString[] = $key . '=' . $value;
        }

        // Сортируем строку
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
        Log::info('Secret Key (hex): ' . bin2hex($secretKey));
        Log::info('Calculated Hash: ' . $calculatedHash);
        Log::info('Received Hash: ' . $checkHash);

        return hash_equals($calculatedHash, $checkHash);
    }
}
