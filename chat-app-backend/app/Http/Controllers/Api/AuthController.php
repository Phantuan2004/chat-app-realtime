<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email already exists'
            ], 422);
        }

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('chat-app-token');

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'data' => [
                'user' => $user,
                'access_token' => $token->accessToken, // Token string
                'token_type' => 'Bearer'
            ]
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Create token
        $tokenResult = $user->createToken('chat-app-token');
        $accessToken = $tokenResult->accessToken;
        $token = $tokenResult->token;

        $token->expires_at = Carbon::now()->addSeconds(20);
        $token->save();

        $expiresIn = Carbon::parse($token->expires_at)->diffInSeconds(now());

        $expiresAtVN = Carbon::parse($token->expires_at)
                        ->setTimezone('Asia/Ho_Chi_Minh')
                        ->toDateTimeString();

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'data' => [
                'user' => $user,
                'access_token' => $accessToken,
                'token_type' => 'Bearer',
                'expires_at' => $expiresAtVN,
                'expires_in' => $expiresIn
            ]
        ], 200);
    }

    public function me(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'User retrieved successfully',
            'user' => $request->user()
        ], 200);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete(); // Revoke all tokens for the user

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
