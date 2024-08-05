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
        if (!isset($data['authDate']) || !isset($data['hash']) || !isset($data['tgId'])) {
            Log::error('Missing data fields');
            return response()->json(['status' => 'error', 'message' => 'Missing data fields'], 400);
        }

        // Преобразуем данные в нужный формат
        $user = [
            'id' => $data['tgId'],
            'username' => $data['username'],
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'language_code' => $data['languageCode']
        ];

        // Декодируем JSON строку user
        $data['user'] = json_encode($user);
        $data['auth_date'] = $data['authDate'];

        Log::info('Decoded user data: ', $user);

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
        Log::info('Secret Key (hex): ' . bin2hex($secretKey));
        Log::info('Calculated Hash: ' . $calculatedHash);
        Log::info('Received Hash: ' . $checkHash);

        return hash_equals($calculatedHash, $checkHash);
    }
}
