<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //===============================================================================
    public function index()
    {
        $user = User::all();

        if ($user->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Users not found.'], 204);
        }

        return response()->json(['success' => true, 'message' => 'Users fetch successfully.', 'data' => $user], 200);
    }


    //===============================================================================
    public function store(StoreUserRequest $request)
    {
        $request->validated();
        $user = User::create($request->all());

        if ($user) {
            return response()->json(['success' => true, 'message' => 'User created successfully.', 'data' => $user], 201);
        }
    }

    //===============================================================================
    public function show(User $user)
    {
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 204);
        }

        return response()->json(['success' => true, 'message' => 'User found.', 'data' => $user], 200);
    }

    //===============================================================================
    public function update(Request $request, User $user)
    {

        $user->update($request->all());

        if ($user) {
            return response()->json(['success' => true, 'message' => 'User updated successfully.', 'data' => $user], 200);
        }
    }


    //===============================================================================
    public function destroy(User $user)
    {

        if ($user->delete()) {
            return response()->json(['success' => true, 'message' => 'User deleted successfully.'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'User failed to delete.'], 204);
        }
    }

    //===============================================================================
    public function type($role)
    {
        $user = User::where('type', $role)->get();

        if ($user->isEmpty()) {
            return response()->json(['success' => false, 'message' => $role . 's not found.'], 204);
        }

        return response()->json(['success' => true, 'message' => $role . 's found.', 'data' => $user], 200);
    }


    //===============================================================================
    public function upload(UpdateUserRequest $request, $id)
    {

        $request->validated();

        $user = User::find($id);
        $named = $user->avatar;

        //delete old image
        $basePath = 'app/public/user_profile/';
        if (file_exists(storage_path($basePath . $named))) {
            unlink(storage_path('app/public/user_profile/' . $named));
        }

        if ($request->hasFile('avatar')) {
            //change name of image
            $file = $request->file('avatar');
            $named = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('user_profile', $named, 'public');
        }

        $user->avatar = $named;
        $user->save();
    }
}
