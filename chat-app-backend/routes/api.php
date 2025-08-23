<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ConversationController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route CRUD user
Route::prefix('/users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

// Route auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth:api', 'check.token.expiry'])->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Route conversation 
Route::middleware(['auth:api', 'check.token.expiry'])->prefix('/conversations')->group(function() {
    Route::get('', [ConversationController::class, 'index']);
    Route::get('/{id}', [ConversationController::class, 'show']);
    Route::post('/', [ConversationController::class, 'store']);
    Route::put('/{id}', [ConversationController::class, 'update']);
    Route::delete('/{id}', [ConversationController::class, 'destroy']);
    Route::post('/{id}/leave', [ConversationController::class, 'leave']);
});

// Route message
Route::middleware(['auth:api', 'check.token.expiry'])->prefix('/messages')->group(function() {
    Route::get('/{conversationId}', [MessageController::class, 'index']);
    Route::post('/{conversationId}', [MessageController::class, 'store']);
    Route::delete('/{messageId}', [MessageController::class, 'destroy']);
    Route::post('/{messageId}/recall', [MessageController::class, 'recall']);
    Route::post('/{messageId}/markAsRead', [MessageController::class, 'markAsRead']);
});
