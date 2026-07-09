<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        Log::info('Register endpoint called', $request->except(['password', 'password_confirmation']));

        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'language_code' => 'nullable|string|max:3',
            ]);

            Log::info('Validation passed', $validatedData);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'language_code' => $validatedData['language_code'] ?? null,
            ]);

            app(\App\Services\CreditService::class)->adjust($user, 10000, 'signup_bonus', 'Welcome bonus');

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

    public function login(Request $request)
    {
        Log::info('Login endpoint called', $request->except(['password']));

        try {
            $validatedData = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            Log::info('Validation passed', $validatedData);

            $user = User::where('email', $validatedData['email'])->first();

            if (!$user || !Hash::check($validatedData['password'], $user->password)) {
                Log::warning('Invalid credentials provided', collect($validatedData)->except(['password'])->toArray());

                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            Log::info('User authenticated', ['user' => $user]);

            $token = $user->createToken('auth_token')->plainTextToken;

            Log::info('Token created for user', ['user_id' => $user->id]);

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user->toArray(),
            ]);

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

    public function webLogin(Request $request)
    {
        Log::info('Web login endpoint called');

        try {
            $validatedData = $request->validate([
                'key' => 'required|string',
            ]);

            $user = User::where('web_access_key', $validatedData['key'])->first();

            if (!$user) {
                Log::warning('Invalid web access key provided', ['key' => $validatedData['key']]);

                throw ValidationException::withMessages([
                    'key' => ['The provided link is invalid or has expired.'],
                ]);
            }

            Log::info('User authenticated via web key', ['user' => $user->id]);

            // Обнуляем ключ, чтобы он стал одноразовым
            $user->web_access_key = null;
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user->toArray(),
            ]);

        } catch (ValidationException $e) {
            Log::error('Validation failed during web login', $e->errors());

            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('An error occurred during web login', ['error' => $e->getMessage()]);

            return response()->json([
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
