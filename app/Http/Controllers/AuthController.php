<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // Create a validator instance manually
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'type' => $validatedData['type'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json(['data' => [$user], 'message' => 'Registered successfully'], 201);
    }


    public function login(LoginRequest $request)
    {
        $validateUser = $request->validated();

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($validateUser['password'], $user->password)) {
            return response()->json(['message' => 'Incorrect email or password'], 422);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Login successfully', 'data' => $user, 'access_token' => $token], 200);
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout successfully'], 200);
    }
}
