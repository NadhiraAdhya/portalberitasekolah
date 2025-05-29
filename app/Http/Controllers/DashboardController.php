<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Prestasi; // Pastikan nama model dengan huruf besar 'Prestasi'

class DashboardController extends Controller
{
    // Fungsi untuk menampilkan halaman admin dashboard
    public function index()
    {
        // Mengambil data berita dan prestasi
        $beritas = Berita::latest()->get();
        $prestasis = Prestasi::latest()->get();
        
        // Mengirim data ke view 'admin.dashboard'
        return view('admin.dashboard', compact('beritas', 'prestasis'));
    }
}
