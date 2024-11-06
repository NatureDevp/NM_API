<?php

namespace App\Http\Controllers\API\AUTH;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function signup(Request $request)
    {
        $validation = [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|string|in:User,Admin',
            'password' => 'required|string|confirmed',
        ];

        $customMessage = [
            'name.required' => 'Required. Name is required.',
            'email.required' => 'Required. Email is required.',
            'password.required' => 'Required. Password is required.',
            'email.unique' => 'Existing. Email is already taken.',
            'password.confirmed' => 'Required. Password does not match.',
            'role.required' => 'Required. Role is required.',
            'role.in' => 'Invalid. Role must be User or Admin.',
        ];

        $request->validate($validation, $customMessage);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);

        return response()->json(['success' => true, 'message' => 'Person created successfully.'], 200);
    }

    //=========================================================================

    public function login(Request $request)
    {
        $validation = [
            'email' => 'required|string|email|exists:users',
            'password' => 'required|string',
        ];

        $customMessage = [
            'email.required' => 'Required. Email is required.',
            'password.required' => 'Required. Password is required.',
            'email.exists' => 'Invalid. Email does not exist.',
        ];

        $request->validate($validation, $customMessage);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['success' => false, 'message' => 'Invalid. Incorrect password.', 'errors' => ['password' => ['Invalid. Incorrect Password.']]], 401);
        }

        $token = $user->createToken('auth_token' . $user->name)->plainTextToken;
        return response()->json(['success' => true, 'message' => 'Logged in successfully.', 'access_token' => $token, 'data' => [$user]], 200);
    }

    //=========================================================================

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['success' => true, 'message' => 'Logged out successfully.'], 200);
    }

    //=========================================================================

    public function session(Request $request)
    {
        if (!$request->header('Authorization')) {
            return response()->json(['is_active' => false, 'message' => 'Session Expired.'], 401);
        }

        $user = Auth::guard('sanctum')->user();

        if (!$user) {
            return response()->json(['is_active' => false, 'message' => 'Session Expired.'], 401);
        }

        return response()->json(['is_active' => true, 'message' => 'Session accepted.'], 200);
    }


    //=========================================================================
    public function searchEmail(Request $request)
    {
        $validation = [
            'email' => 'required|string|email|exists:users,email',
        ];

        $customMessage = [
            'email.required' => 'Required. Email is required.',
            'email.exists' => 'Invalid. Email does not exist.',
        ];

        $request->validate($validation, $customMessage);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        // Response indicating the email was found
        return response()->json(['success' => true, 'message' => 'Confirmed. Email address found.', 'data' => $user], 200);
    }

    public function reset(Request $request)
    {
        $validation = [
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string|confirmed',
        ];

        $customMessage = [
            'email.required' => 'Required. Email is required.',
            'email.exists' => 'Invalid. Email does not exist.',
            'password.required' => 'Required. Password is required.',
            'password.confirmed' => 'Required. Password does not match.',
        ];

        $request->validate($validation, $customMessage);

        // Fetch the user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Invalid. Password change unsuccessful.'], 401);
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['success' => true, 'message' => 'Success. Password change successful.'], 200);
    }
}
