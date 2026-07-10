<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Возвращает данные аутентифицированного пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request)
    {
        $response = response()->json($request->user()->toArray());
        Log::info('Response:', ['response' => $response->getContent()]);
        return $response;
    }

    /**
     * Обновляет поле language_code у аутентифицированного пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function updateLanguageCode(Request $request)
    {
        $request->validate([
            'language_code' => 'required|string|max:3',
        ]);

        $user = $request->user();
        $user->language_code = $request->input('language_code');
        $user->save();

        Log::info('User language code updated:', ['user_id' => $user->id, 'language_code' => $user->language_code]);

        return response()->json([
            'status' => 'success',
            'message' => 'Language code updated successfully.',
            'user' => $user->toArray(),
        ]);
    }

    /**
     * Обновляет поле base_font_size у аутентифицированного пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateBaseFontSize(Request $request)
    {
        $request->validate([
            'base_font_size' => 'required|numeric|min:5|max:35',
        ]);

        $user = $request->user();
        $user->base_font_size = $request->input('base_font_size');
        $user->save();

        Log::info('User base font size updated:', ['user_id' => $user->id, 'base_font_size' => $user->base_font_size]);

        return response()->json([
            'status' => 'success',
            'message' => 'Base font size updated successfully.',
            'user' => $user->toArray(),
        ]);
    }

    /**
     * Возвращает значение base_font_size для аутентифицированного пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBaseFontSize(Request $request)
    {
        $user = $request->user();
        $baseFontSize = $user->base_font_size;

        return response()->json([
            'status' => 'success',
            'base_font_size' => $baseFontSize,
        ]);
    }

    /**
     * Обновляет поле auto_close_cards у аутентифицированного пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateAutoCloseCards(Request $request)
    {
        $request->validate([
            'auto_close_cards' => 'required|boolean',
        ]);

        $user = $request->user();
        $user->auto_close_cards = $request->input('auto_close_cards');
        $user->save();

        Log::info('User auto close cards updated:', ['user_id' => $user->id, 'auto_close_cards' => $user->auto_close_cards]);

        return response()->json([
            'status' => 'success',
            'message' => 'Auto close cards setting updated successfully.',
            'user' => $user->toArray(),
        ]);
    }

    /**
     * Генерирует одноразовую ссылку для входа через браузер.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateWebLink(Request $request)
    {
        $user = $request->user();
        
        $key = \Illuminate\Support\Str::random(64);
        $user->web_access_key = hash('sha256', $key);
        $user->save();

        $baseUrl = config('app.web_app_url', 'https://mf.sitelab-studio.com/a/');
        // Убедимся, что добавляем параметр корректно
        $url = rtrim($baseUrl, '/') . '/?key=' . $key;

        return response()->json([
            'status' => 'success',
            'link' => $url,
        ]);
    }
}
