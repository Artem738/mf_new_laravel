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
}
