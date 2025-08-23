<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConversationRequest;
use App\Models\Conversation;
use App\Models\ConversationMember;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    // Create conversation
    public function store(ConversationRequest $request)
    {
        try{
            $creatorId = $request->user()->id;
            $members = $request->members ?? [];

            // Check conversation có tồn tại không
            $allMember = array_unique(array_merge($members, [$creatorId]));
            sort($allMember);

            // Get all conversation that the user has
            $conversation = Conversation::whereHas('members', function($q) use ($creatorId) {
                $q->where('user_id', $creatorId);
            })->with('members')->get();

            foreach ($conversation as $conv) {
                $convMembers = $conv->members->pluck('user_id')->toArray();
                sort($convMembers);

                if ($convMembers === $allMember) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Conversation already exists with these members.'
                    ], 400);
                }
            }

            // Nếu chưa có thì tạo mới 
            $conversation = Conversation::create([
                'name' => $request->name ?? null,
                'is_group' => $request->is_group ?? false,
                'created_by' => $request->user()->id,
            ]);

            // add members to conversation
            foreach ($allMember as $userId) {
                ConversationMember::create([
                    'conversation_id' => $conversation->id,
                    'user_id' => $userId,
                    'is_admin' => $userId === $creatorId, // Creator is admin
                ]);
            }

            return response()->json([
                'status' => "success",
                "message" => "Conversation created successfully",
                "data" => [
                    "id" => $conversation->id,
                    "name" => $conversation->name,
                    "is_group" => $conversation->is_group,
                    "created_by" => $conversation->created_by,
                    "members" => $conversation->members
                ]
            ], 200);
        }catch(\Exception $e) {
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to create conversation: ' . $e->getMessage()
                ], 500);
            }
        }
    }

    // Get conversations which user is a member
    public function index()
    {
        $conversations = Conversation::whereHas('members', function($q) {
            $q->where('user_id', auth()->id());
        })->with('members')->get();

        return response()->json($conversations);
    }

    // Get conversation by information and members id
    public function show($id)
    {
        $conversation = Conversation::with('members.user')->findOrFail($id);

        if(!$conversation->members->where('user_id', auth()->id())->first()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized access to conversation'
            ], 403);
        }

        return response()->json($conversation);
    }

    // Update conversation
    public function update(ConversationRequest $request, $id)
    {
        $conversation = Conversation::findOrFail($id);

        if(!$conversation->members->where('user_id', auth()->id())->first()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized access to conversation'
            ], 403);
        }

        $conversation->update($request->only('name'));

        return response()->json($conversation);
    }

    // Soft delete conversation
    public function destroy($id)
    {
        $conversation = Conversation::findOrFail($id);
        
        // Soft delete for current user
        $member = $conversation->members()
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $member->update([
            'deleted_at' => now()
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Conversation deleted successfully'
        ]);
    }

    // Leave conversation
    public function leave($id)
    {
        $conversation = Conversation::findOrFail($id);

        $conversation->members()
            ->where('user_id', auth()->id())
            ->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Left conversation successfully'
        ]);
    }
}
