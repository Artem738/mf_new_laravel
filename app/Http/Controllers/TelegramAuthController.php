<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

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
                    'first_name' => $userData['first_name'],
                    'last_name' => $userData['last_name'] ?? null,
                    'username' => $userData['username'],
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

