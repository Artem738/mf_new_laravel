<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use App\Traits\VerifiesTelegramHash;

class TelegramAuthController extends Controller
{
    use VerifiesTelegramHash;

    public function authenticate(Request $request)
    {
        // Логирование всего запроса+
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

        // Проверка хеша с использованием трейта
        if ($this->verifyHash($data, $receivedHash)) {
            Log::info('Hash verification passed');

            // Декодируем поле user из JSON
            $userData = json_decode($data['user'], true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Error decoding user data', ['error' => json_last_error_msg()]);
                return response()->json(['error' => 'Error decoding user data'], 400);
            }

            // Проверка наличия пользователя по telegram_id
            $telegramId = $userData['id'];
            $user = User::where('telegram_id', $telegramId)->first();

            if (!$user) {
                // Если пользователя нет, зарегистрируем его
                $user = User::create([
                    'telegram_id' => $telegramId,
                    'tg_first_name' => $userData['tg_first_name'],
                    'tg_last_name' => $userData['tg_last_name'] ?? null,
                    'tg_username' => $userData['tg_username'] ?? null,
                    'language_code' => $userData['language_code'] ?? null,
                    'allows_write_to_pm' => $userData['allows_write_to_pm'] ?? false,
                ]);
                Log::info('User registered', ['user' => $user]);
            }

            // Создание токена для пользователя
            $token = $user->createToken('TelegramWebApp')->plainTextToken;

            // Логирование успешной авторизации
            Log::info('User authenticated', ['user' => $user, 'token' => $token]);

            // Возвращение ответа с токеном
            return response()->json([
                'status' => 'success',
                'message' => 'Hash verification passed',
                'token' => $token,
            ]);
        } else {
            Log::error('Hash verification failed');
            return response()->json(['error' => 'Hash verification failed'], 403);
        }
    }
}
