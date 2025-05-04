<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler; // Pastikan model ini terimport
use App\Models\Berita;
use App\Models\Prestasi;

class LandingController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(4)->get(); // Mengambil 4 berita terbaru
        $prestasis = Prestasi::latest()->take(4)->get(); // Mengambil 4 prestasi terbaru
        $ekskuls = Ekstrakurikuler::all(); // Mengambil semua data ekstrakurikuler

        return view('landing', compact('beritas', 'prestasis', 'ekskuls')); // Mengirim data ke view
    }
}
