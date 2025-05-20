<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login.'); // arahkan ke file form login kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('views.admin.dashboard.');
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function dashboard()
    {
        return view('admin.dashboard'); // arahkan ke view dashboard admin
    }
}

