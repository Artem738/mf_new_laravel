<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

//wtf

class TelegramAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $data = $request->all();
        $botToken = env('TELEGRAM_BOT_TOKEN');

        if ($this->validateTelegramData($data, $botToken)) {
            // Валидация успешна
            $user = json_decode($data['user'], true);

            // Логика авторизации пользователя
            $user = User::updateOrCreate(
                ['telegram_id' => $user['id']],
                [
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'] ?? null,
                    'username' => $user['username'] ?? null,
                    'language_code' => $user['language_code'] ?? null,
                    'allows_write_to_pm' => $user['allows_write_to_pm'] ?? false,
                    'name' => $user['first_name'] ?? $user['username'],
                    'email' => null, // Можно обновить позже
                    'password' => null, // Можно обновить позже
                ]
            );

            // Возвращаем успешный ответ с токеном
            return response()->json([
                'status' => 'success',
                'user' => $user,
                'token' => $user->createToken('TelegramAuthToken')->plainTextToken,
            ]);
        } else {
            // Валидация не прошла
            return response()->json(['status' => 'error', 'message' => 'Invalid data'], 400);
        }
    }

    private function validateTelegramData($data, $botToken)
    {
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);
        $dataCheckString = $data['raw'];
        $calculatedHash = hash_hmac('sha256', $dataCheckString, $secretKey);

        return hash_equals($calculatedHash, $data['hash']);
    }
}
