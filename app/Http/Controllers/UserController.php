<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        if ($user->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No users found.'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Empty. User found found.', 'data' => $user], 200);
    }

    public function store(Request $request) {}


    public function show(User $user)
    {

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }

        return response()->json(['success' => true, 'message' => 'User found.', 'data' => $user], 200);
    }

    public function update(Request $request, User $user) {}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) {}


    public function getUserRoleOnly($type)
    {
        $user = User::where('role', $type)->get();
        if ($user->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No users found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'User found.', 'data' => $user], 200);
    }
}
