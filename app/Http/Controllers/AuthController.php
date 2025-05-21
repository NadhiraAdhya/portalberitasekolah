<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil, redirect ke dashboard admin
        return redirect()->route('admin.dashboard');
    }

    // Jika login gagal, kembali ke halaman login dengan error
    return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
}

}

