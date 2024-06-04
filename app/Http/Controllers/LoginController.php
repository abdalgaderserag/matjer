<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $user = User::all()->where('email','=',$request['email'])->first();
        if (!$user){
            return response()->json([
//                todo: better message
                'message' => 'no account with this email'
            ],401);
        }
        else if (!Hash::check($request['password'],$user['password'])){
            return response()->json([
                'message' => 'wrong password'
            ],401);
        }
        Auth::loginUsingId($user['id']);

        return redirect()->route('items');
    }

    public function logout()
    {
        return  1;
        return Auth::user();
        Auth::user()->tokens()->delete();
        Auth::logout();
        redirect()->route('login');
    }
}
