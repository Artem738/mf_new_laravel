<?php

namespace App\Telegram;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class PresentationBot
{
    public function __construct(private readonly TelegramBotClient $client)
    {
    }

    public function handleUpdate(array $update): void
    {
        $message = Arr::get($update, 'message');
        $callback = Arr::get($update, 'callback_query');

        if (is_array($callback)) {
            $this->handleCallback($callback);
            return;
        }

        if (is_array($message)) {
            $this->handleMessage($message);
        }
    }

    private function handleMessage(array $message): void
    {
        $from = (array) ($message['from'] ?? []);
        $chat = (array) ($message['chat'] ?? []);
        $text = trim((string) ($message['text'] ?? ''));

        if (!isset($from['id'], $chat['id']) || $text === '') {
            return;
        }

        $locale = $this->resolveLocale($from);
        
        // Regardless of what text they send, we show the main screen
        $this->sendOrUpdateScreen((string) $chat['id'], null, 'main', $locale);
    }

    private function handleCallback(array $callback): void
    {
        $from = (array) ($callback['from'] ?? []);
        $message = (array) ($callback['message'] ?? []);
        $chat = (array) ($message['chat'] ?? []);
        $data = trim((string) ($callback['data'] ?? ''));

        if (!isset($from['id'], $chat['id']) || $data === '') {
            return;
        }

        $callbackMessageId = isset($message['message_id']) ? (int) $message['message_id'] : null;
        $locale = $this->resolveLocale($from);

        if (str_starts_with($data, 'screen:')) {
            $screen = substr($data, 7);
            $this->sendOrUpdateScreen((string) $chat['id'], $callbackMessageId, $screen, $locale);
            $this->client->answerCallbackQuery((string) ($callback['id'] ?? ''));
        }
    }

    private function resolveLocale(array $from): string
    {
        $code = strtolower((string) ($from['language_code'] ?? 'en'));
        
        if (str_starts_with($code, 'ru')) {
            return 'ru';
        }
        
        if (str_starts_with($code, 'uk')) {
            return 'uk';
        }

        return 'en';
    }

    private function sendOrUpdateScreen(string $chatId, ?int $messageId, string $screen, string $locale): void
    {
        // Temporarily set app locale so the __() helper works
        $originalLocale = App::getLocale();
        App::setLocale($locale);

        $payload = $this->buildScreen($screen);

        if ($messageId !== null && $messageId > 0) {
            $result = $this->client->editMessageText($chatId, $messageId, $payload['text'], [
                'reply_markup' => $payload['reply_markup'],
            ]);
            
            // If editing failed (e.g., message is exactly the same), we don't care much, 
            // but we could fallback to send new. For simplicity, we ignore.
        } else {
            $this->client->sendMessage($chatId, $payload['text'], [
                'reply_markup' => $payload['reply_markup'],
            ]);
        }

        // Restore locale
        App::setLocale($originalLocale);
    }

    private function buildScreen(string $screen): array
    {
        $miniAppUrl = (string) config('services.telegram.mini_app_url', 'https://t.me/leitner_flashcards_bot/app');
        $launchButton = ['text' => __('bot.buttons.launch'), 'web_app' => ['url' => $miniAppUrl]];
        
        switch ($screen) {
            case 'leitner':
                return [
                    'text' => __('bot.screens.leitner.text'),
                    'reply_markup' => [
                        'inline_keyboard' => [
                            [$launchButton],
                            [['text' => __('bot.buttons.back'), 'callback_data' => 'screen:main']],
                        ],
                    ],
                ];
                
            case 'hands_free':
                return [
                    'text' => __('bot.screens.hands_free.text'),
                    'reply_markup' => [
                        'inline_keyboard' => [
                            [$launchButton],
                            [['text' => __('bot.buttons.back'), 'callback_data' => 'screen:main']],
                        ],
                    ],
                ];
                
            case 'main':
            default:
                return [
                    'text' => __('bot.screens.main.text'),
                    'reply_markup' => [
                        'inline_keyboard' => [
                            [['text' => __('bot.buttons.leitner'), 'callback_data' => 'screen:leitner']],
                            [['text' => __('bot.buttons.hands_free'), 'callback_data' => 'screen:hands_free']],
                            [$launchButton],
                        ],
                    ],
                ];
        }
    }
}
