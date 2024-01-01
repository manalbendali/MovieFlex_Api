<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            return response()->json([
                'user' => $user,
            ], 200);
        } else {
            // Authentication failed...
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
    public function show($id) {
        // Find the user by ID with their reservations and corresponding film details
        $user = User::with('reservations.film')->find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Return the user data with their reservations and film details
        return response()->json(['user' => $user], 200);
    }
}
