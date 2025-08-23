<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index (Request $request)
    {
        $users = User::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Load user list successfully',
            'data' => $users
        ], 200);
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Load user info successfully',
            'data' => $user
        ], 200);
    }

    public function store(UserRequest $request)
    {
        $userData = $request->except('avatar');
        $userData['avatar'] = '';

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $name_avt = $userData['name'] . '_' . time() . '_' . $image->getClientOriginalName();
            $path_avt = $image->storeAs('images/avatars', $name_avt, 'public');
            $userData['avatar'] = $path_avt;
        }

        // Hash the password
        $userData['password'] = bcrypt($userData['password']);

        $user = User::create($userData);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 404);
        }

        $userData = $request->except('avatar');

        if (!empty($userData['password'])) {
            // Hash the password
            $userData['password'] = bcrypt($userData['password']);
        } else {
            unset($userData['password']);
        }

        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Handle avatar upload
            $image = $request->file('avatar');
            $set_name = Str::slug($userData['name']) . '_' . time() . '_' . $image->getClientOriginalName();
            $path_avt = $image->storeAs('images/avatars', $set_name, 'public');
            $userData['avatar'] = $path_avt;
        }

        $user->update($userData);
        $user->refresh();

        return response()->json([
            'status' => 'success',
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    public function destroy(Request $request, $id) 
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 404);
        }

        // Delete avatar if exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully'
        ], 200);
    }
}
