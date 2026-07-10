<?php

namespace App\Http\Controllers;

use App\Telegram\PresentationBot;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TelegramWebhookController extends Controller
{
    public function __construct(private readonly PresentationBot $bot)
    {
    }

    public function handle(Request $request): JsonResponse
    {
        $secret = (string) config('services.telegram.webhook_secret', '');
        $providedSecret = (string) $request->header('X-Telegram-Bot-Api-Secret-Token', '');

        if ($secret !== '' && !hash_equals($secret, $providedSecret)) {
            return response()->json(['ok' => false], Response::HTTP_FORBIDDEN);
        }

        $payload = $request->json()->all();
        if (!is_array($payload) || $payload === []) {
            return response()->json(['ok' => false], Response::HTTP_BAD_REQUEST);
        }

        $this->bot->handleUpdate($payload);

        return response()->json(['ok' => true]);
    }
}
