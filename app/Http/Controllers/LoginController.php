<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Menambahkan use Auth

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');  // Pastikan view login berada di resources/views/auth/login.blade.php
    }

    // Menangani proses login
    public function login(Request $request)
{
    // Validasi input form
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6', // Pastikan password memiliki panjang minimal
    ]);

    $credentials = $request->only('email', 'password');

    // Log email dan password yang dimasukkan
    \Log::info('Email yang dimasukkan: ' . $credentials['email']);
    \Log::info('Password yang dimasukkan: ' . $credentials['password']);

    // Cek apakah ada user dengan email tersebut
    $user = \App\Models\User::where('email', $credentials['email'])->first();

    if ($user && \Hash::check($credentials['password'], $user->password)) {
        \Log::info('Password cocok');

        Auth::login($user);  // Jika cocok, login user
        $request->session()->regenerate();  // Regenerasi session untuk keamanan

        return redirect()->intended('/dashboard');
    } else {
        \Log::warning('Login gagal dengan kredensial: ' . json_encode($credentials));
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
}