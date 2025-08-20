<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Laravel\Passport\Token;
use Symfony\Component\HttpFoundation\Response;

class CheckTokenExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        $bearer = $request->bearerToken();
        if (!$bearer) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        // Lấy token theo token string (hashed)
        $token = Token::where('user_id', $user->id)
                      ->where('revoked', false)
                      ->orderBy('created_at', 'desc')
                      ->first();

        if (!$token || Carbon::now()->gt($token->expires_at)) {
            return response()->json(['error' => 'Token expired'], 401);
        }

        return $next($request);
    }
}
