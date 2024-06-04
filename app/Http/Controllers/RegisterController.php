<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new User($request->except('_token'));
        $user->save();
        Auth::loginUsingId($user['id']);
        return redirect()->route('items');
    }
}
