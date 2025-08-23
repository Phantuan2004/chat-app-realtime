<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageUserSetting;
use Illuminate\Http\Request;

class MessageController extends Controller
{
     // Get all message from conversation for current user
    public function index($conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        // Check user is member in conversation
        if (!$conversation->members()->where('user_id', auth()->id())->first()) {
            return response()->json([
                'status' => 'error',
                'message' => 'You are not a member of this conversation.'
            ], 403);
        }

        // Lấy tin nhắn chưa bị xóa mềm thuộc conversation
        $messages = Message::where('conversation_id', $conversationId)
        // Lọc tin nhắn không bị user hiện tại xóa mềm
            ->whereDoesntHave('userSettings', function($q) {
                $q->where('user_id', auth()->id())
                  ->whereNotNull('deleted_at');
            })
            ->with(['userSettings' => function($q) {
                $q->where('user_id', auth()->id());
            }])
            ->orderBy('created_at')
            ->get();

        return response()->json($messages); 
    }

    // Send new message
   public function store(Request $request, $conversationId)
    {
        $request->validate([
            'content' => 'required|string',
            'file' => 'required_without:content|file|max:10240',
            'type' => 'required|in:text,file,image'
        ]);

        $conversation = Conversation::findOrFail($conversationId);

        // Check user is member in conversation
        if (!$conversation->members()->where('user_id', auth()->id())->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Forbidden'
            ], 403);
        }

        $message = Message::create([
            'conversation_id' => $conversationId,
            'sender_id' => $request->user()->id,
            'content' => $request->content,
            'type' => $request->type ?? 'text',
        ]);

        // Tạo user setting mặc định cho người gửi
        MessageUserSetting::create([
            'message_id' => $message->id,
            'user_id' => $request->user()->id,
            'deleted_at' => null,
            'is_recalled' => false,
            'read_at' => now(),
        ]);

        return response()->json($message, 201);
    }

    // Remove/Hidden message user side
    public function destroy($messageId)
    {
        $message = Message::find($messageId);

        if (!$message) {
            return response()->json(['error' => 'Message not found'], 404);
        }

        MessageUserSetting::updateOrCreate(
            ['message_id' => $message->id, 'user_id' => auth()->id()],
            ['deleted_at' => now()]
        );

        return response()->json([
            'message' => 'Message hidden for current user',
            'data' => $message
        ]);
    }

    // Restore message user side
    public function recall($messageId)
    {
        $message = Message::findOrFail($messageId);

        if ($message->sender_id !== auth()->id()) {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        // Cập nhật is_recalled = true cho tất cả user
        MessageUserSetting::where('message_id', $message->id)
            ->update(['is_recalled' => true]);

        return response()->json(['message' => 'Message recalled for all users']);
    }

    // Tick message is read
    public function markAsRead($messageId)
    {
        $message = Message::findOrFail($messageId);

        MessageUserSetting::updateOrCreate(
            ['message_id' => $message->id, 'user_id' => auth()->id()],
            ['read_at' => now()]
        );

        return response()->json(['message' => 'Message marked as read']);
    }
}
