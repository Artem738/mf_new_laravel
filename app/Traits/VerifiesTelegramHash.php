<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait VerifiesTelegramHash
{
    public function verifyHash(array $data, string $receivedHash): bool
    {
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
        return hash_equals($computedHash, $receivedHash);
    }
}
