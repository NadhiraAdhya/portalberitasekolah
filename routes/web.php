<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Halaman utama (Landing Page)
Route::get('/', [LandingController::class, 'index']);

// Login dan Logout - Hanya untuk user yang belum login (middleware guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout route (untuk logout)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard - Hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']); // Untuk menampilkan halaman admin dashboard

//CRUD BERITA 
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');



    // CRUD Prestasi (Resource Route untuk prestasi)
Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');
Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit');
Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');
Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy');

Route::resource('admin/berita', BeritaController::class);
Route::resource('admin/prestasi', PrestasiController::class);
Route::get('/', [LandingPageController::class, 'index']);


    // Password reset routes (forgot password)
    Route::get('/forgot-password', [App\Http\Controllers\AuthController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\AuthController::class, 'sendResetLinkEmail'])->name('password.email');
});

?>

