<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use App\Traits\VerifiesTelegramHash;

class TelegramAuthController extends Controller
{
    use VerifiesTelegramHash;

    public function authenticate(Request $request)
    {
        Log::info('Before validation');
        Log::info('Received request', $request->all());
        $validatedData = $request->validate([
            'language_code' => 'nullable|string|max:3',
        ]);

        Log::info('Validation passed', $validatedData);


        $initData = $request->input('initData');
        parse_str($initData, $data);
        Log::info('Parsed initData', $data);

        $receivedHash = $data['hash'] ?? null;
        if (!$receivedHash) {
            Log::error('Hash not found in init data');
            return response()->json(['error' => 'Hash not found'], 400);
        }

        if ($this->verifyHash($data, $receivedHash)) {
            Log::info('Hash verification passed');

            $tgUserData = json_decode($data['user'], true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Error decoding user data', ['error' => json_last_error_msg()]);
                return response()->json(['error' => 'Error decoding user data'], 400);
            }

            $telegramId = $tgUserData['id'];
            $user = User::where('telegram_id', $telegramId)->first();

            if (!$user) {
                $user = User::create([
                    'telegram_id' => $telegramId,
                    'tg_first_name' => $tgUserData['first_name'],
                    'tg_last_name' => $tgUserData['last_name'] ?? null,
                    'tg_username' => $tgUserData['username'] ?? null,
                    'tg_language_code' => $tgUserData['tg_language_code'] ?? null,
                    'allows_write_to_pm' => $tgUserData['allows_write_to_pm'] ?? false,
                    'language_code' => $validatedData['language_code'] ?? null,
                ]);
                Log::info('User registered', ['user' => $user]);
            }

            $token = $user->createToken('TelegramWebApp')->plainTextToken;
            Log::info('User authenticated', ['user' => $user, 'token' => $token]);

            return response()->json([
                'status' => 'success',
                'message' => 'Hash verification passed',
                'token' => $token,
                'user' => $user->toArray(),
            ]);
   
        } else {
            Log::error('Hash verification failed');
            return response()->json(['error' => 'Hash verification failed'], 403);
        }
    }
}
