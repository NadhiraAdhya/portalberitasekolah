<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Prestasi; // Pastikan nama model dengan huruf besar 'Prestasi'

class DashboardController extends Controller
{
    // Fungsi untuk menampilkan halaman admin dashboard
    public function index()
    {
        return view('admin.dashboard');  // Pastikan 'admin.dashboard' ada di resources/views/admin/dashboard.blade.php
    }
   
    // Fungsi untuk menampilkan data berita dan prestasi
    public function dashboard()
    {
        $beritas = Berita::latest()->get();
        $prestasis = Prestasi::latest()->get();
        
        // Mengirim data ke view 'dashboard'
        return view('dashboard', compact('beritas', 'prestasis'));
    }
}
