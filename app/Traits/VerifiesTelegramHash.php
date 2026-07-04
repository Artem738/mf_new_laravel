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

        // Получение ключа бота из окружения
        $botToken = config('services.telegram.bot_token');

        // Создание секретного ключа
        $secretKey = hash_hmac('sha256', $botToken, 'WebAppData', true);

        // Создание хеша для проверки
        $computedHash = hash_hmac('sha256', $dataCheckString, $secretKey);

        // Проверка хеша
        return hash_equals($computedHash, $receivedHash);
    }
}
