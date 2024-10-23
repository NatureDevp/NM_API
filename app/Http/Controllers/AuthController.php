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
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'type' => $validatedData['type'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json(['success' => true, 'message' => 'Registered successfully', 'data' => [$user]], 201);
    }


    public function login(LoginRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();
        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Email doesn\'t exist.'], 422);
        }

        if (!Hash::check($validatedData['password'], $user->password)) {
            return response()->json(['success' => false, 'message' => 'Incorrect password'], 422);
        }

        $token = $user->createToken($user->name . 'Token')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'Login successfully', 'data' => [$user], 'access_token' => $token], 200);
    }



    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout successfully'], 200);
    }

    public function checkLogin(Request $request)
    {
        $user = $request->user(); // Retrieves the authenticated user based on the token

        if ($user) {
            // Get the current access token
            $accessToken = $request->bearerToken(); // Get the token from the request header

            return response()->json([
                'success' => true,
                'message' => 'Login successfully',
                'data' => [$user],
                'access_token' => $accessToken,
            ], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }
    }
}
