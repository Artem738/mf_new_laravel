<?php

namespace App\Telegram;

use Illuminate\Http\Client\Factory as HttpFactory;
use Illuminate\Support\Facades\Log;
use Throwable;

class TelegramBotClient
{
    public function __construct(private readonly HttpFactory $http)
    {
    }

    public function sendMessage(string $chatId, string $text, array $options = []): ?array
    {
        return $this->call('sendMessage', array_filter([
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'HTML',
            'disable_web_page_preview' => true,
            ...$options,
        ], static fn ($value): bool => $value !== null));
    }

    public function editMessageText(string $chatId, int $messageId, string $text, array $options = []): ?array
    {
        return $this->call('editMessageText', array_filter([
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'text' => $text,
            'parse_mode' => 'HTML',
            'disable_web_page_preview' => true,
            ...$options,
        ], static fn ($value): bool => $value !== null));
    }

    public function answerCallbackQuery(string $callbackQueryId, ?string $text = null, bool $showAlert = false): void
    {
        $this->call('answerCallbackQuery', array_filter([
            'callback_query_id' => $callbackQueryId,
            'text' => $text,
            'show_alert' => $showAlert ?: null,
        ], static fn ($value): bool => $value !== null));
    }

    public function deleteMessage(string $chatId, int $messageId): void
    {
        $this->call('deleteMessage', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
        ]);
    }

    public function call(string $method, array $payload): ?array
    {
        $token = trim((string) config('services.telegram.bot_token', ''));
        if ($token === '') {
            Log::warning('Telegram bot token is missing.');
            return null;
        }

        $baseUrl = 'https://api.telegram.org';
        $timeout = 10;

        try {
            $response = $this->http
                ->baseUrl($baseUrl)
                ->asJson()
                ->timeout($timeout)
                ->retry(2, 250)
                ->post("/bot{$token}/{$method}", $payload);

            if (!$response->successful()) {
                Log::warning('Telegram API call failed.', [
                    'method' => $method,
                    'status' => $response->status(),
                    'body' => mb_substr((string) $response->body(), 0, 1000),
                ]);

                return null;
            }

            $json = $response->json();
            return is_array($json) ? $json : null;
        } catch (Throwable $exception) {
            Log::warning('Telegram API exception.', [
                'method' => $method,
                'message' => $exception->getMessage(),
            ]);

            return null;
        }
    }
}
