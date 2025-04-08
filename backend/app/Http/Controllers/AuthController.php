<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

use App\Models\User;

class AuthController extends Controller
{
    
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
          "name"=> "required|string|max:255",
          "email"=> "required|string|email|max:255",
          "password"=> "required|string|min:8|confirmed",
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
            "role"=> "ROLE_USER",
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            "message"=> "User created successfully",
            "user"=> $user,
            "token"=> $token,
        ]);

    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $token = JWTAuth::attempt($credentials);

        if (!$token) {
            return response()->json(['message' => 'Credenciais inválidas!'], 401);
        }

        return response()->json([
            'message' => 'Login realizado com sucesso!',
            'user' => Auth::user(),
            'token' => $token
        ]);

    }

}
