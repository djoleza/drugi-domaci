<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'MESSAGE' => $validator->errors()
            ]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'User' => $user,
        ]);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'MESSAGE' => $validator->errors()
            ]);
        }


        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'MESSAGE' => 'Please try again'
            ]);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $LOGIN_TOKEN = $user->createToken('LoginToken')->plainTextToken;


        return response()->json([
            'User' => $user,
            'Token' => $LOGIN_TOKEN
        ]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'MESSAGE' => 'LOGOUT'
        ]);
    }
}
