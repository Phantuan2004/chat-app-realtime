<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request as HttpRequest;

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
        // 1) Check credentials trước cho nhanh + thông báo rõ ràng
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // 2) Gọi nội bộ tới /oauth/token (Passport) -> không qua HTTP nên rất nhanh
        $clientId = config('passport.password_grant_client.id', env('PASSPORT_PASSWORD_GRANT_CLIENT_ID'));
        $clientSecret = config('passport.password_grant_client.secret', env('PASSPORT_PASSWORD_GRANT_CLIENT_SECRET'));

        $internal = HttpRequest::create('/oauth/token', 'POST', [
            'grant_type'    => 'password',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'username'      => $request->email,
            'password'      => $request->password,
            'scope'         => '',
        ], [], [], ['HTTP_ACCEPT' => 'application/json']);

        $passportResponse = app()->handle($internal);

        if ($passportResponse->getStatusCode() !== 200) {
            // Trả thẳng lỗi của Passport (ví dụ client_id/secret sai…)
            return $passportResponse;
        }

        $token = json_decode($passportResponse->getContent(), true);

        return response()->json([
            'status'  => 'success',
            'message' => 'User logged in successfully',
            'data' => [
                'user' => [
                    'id'    => $user->id,
                    'name'  => $user->name,
                    'email' => $user->email,
                ],
                'access_token'  => $token['access_token'],
                'refresh_token' => $token['refresh_token'],
                'token_type'    => $token['token_type'] ?? 'Bearer',
                'expires_in'    => $token['expires_in'],
                'expires_at'    => Carbon::now()->addSeconds($token['expires_in'])->toISOString(),
            ],
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
