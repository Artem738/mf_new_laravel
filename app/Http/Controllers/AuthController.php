<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Регистрация нового пользователя
     */
    public function register(Request $request)
    {
        Log::info('Register endpoint called', $request->all());

        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            Log::info('Validation passed', $validatedData);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            Log::info('User created', ['user' => $user]);

            return response()->json(['message' => 'User registered successfully'], 201);

        } catch (ValidationException $e) {
            Log::error('Validation failed', $e->errors());

            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('An error occurred during registration', ['error' => $e->getMessage()]);

            return response()->json([
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Логин пользователя и выдача токена
     */
    public function login(Request $request)
    {
        Log::info('Login endpoint called', $request->all());

        try {
            $validatedData = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            Log::info('Validation passed', $validatedData);

            $user = User::where('email', $validatedData['email'])->first();

            if (!$user || !Hash::check($validatedData['password'], $user->password)) {
                Log::warning('Invalid credentials provided', $validatedData);

                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            Log::info('User authenticated', ['user' => $user]);

            $token = $user->createToken('auth_token')->plainTextToken;

            Log::info('Token created', ['token' => $token]);

            return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);

        } catch (ValidationException $e) {
            Log::error('Validation failed during login', $e->errors());

            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('An error occurred during login', ['error' => $e->getMessage()]);

            return response()->json([
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
