<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('amoba-token')->plainTextToken;

        return response()->json([
            'message' => "Hi {$user->first_name} {$user->last_name}! You are logged in.",
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens->each(function (PersonalAccessToken $token) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Successfully logged out',
        ], 200);
    }
}
