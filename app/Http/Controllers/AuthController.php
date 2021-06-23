<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\postAuthRequest;
use Illuminate\Support\Facades\Validator;
use App\User;

class AuthController extends Controller
{

    public function auth(Request $request) 
    {

        $credentials = $request->only('email','password');

        $v = Validator::make($credentials,[
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        if($v->fails())
        {
            $e = $v->errors();

            return response()->json([
                'email' => $e->get('email'),
                'password' => $e->get('password'),
            ]);
        }
        else {

            if(!Auth::attempt($credentials)) {
            
                return response()->json([
                    'message' => 'invalid login request',
                ],401);
            } 
        }

        $user = User::where('email',$request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer', 
            'user' => $user,
        ]);
    }

    public function register(Request $request) 
    {
        $rules = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
        
        $user = User::create([
            'name' => $rules['name'],
            'email' => $rules['email'],
            'password' => bcrypt($rules['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer', 
        ]);
    }

    public function userInfo() {
        return User::all();
    }

    public function logOut(User $user) {

        $user->tokens()->delete();
        
        return response()->json([
            'message' => 'Cerrando Session...',
            'user' => $user,
        ]);
    }
}
