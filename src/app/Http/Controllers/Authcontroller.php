<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(AuthRequest $request)
    {
        // フォームリクエストでバリデーション済み
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }

}