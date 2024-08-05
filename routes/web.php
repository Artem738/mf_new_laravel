<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TelegramAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $data = $request->all();
        $botToken = '6739542640:AAH2x7RNESVDrulO7fCCOYBWMlClL-5W5ko'; // Ваш реальный бот-токен

        // Логируем данные для отладки
        Log::info('Received Telegram data: ', $data);

        // Создаем строку для проверки из входных данных
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
                $dataCheckString[] = $key . '=' . $value;
            }
        }

        sort($dataCheckString);
        return implode("\n", $dataCheckString);
    }

    private function validateTelegramData($data, $dataCheckString, $botToken)
    {
        if (!isset($data['hash'])) {
            return false;
        }

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
