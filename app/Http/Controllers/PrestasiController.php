<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    // Fungsi untuk menampilkan prestasi
    public function index()
    {
        // Mengambil semua data prestasi
        $prestasis = Prestasi::all();
        
        // Menampilkan data prestasi ke view 'prestasi.index'
        return view('prestasi.index', compact('prestasis'));
    }

    // Fungsi lainnya sesuai dengan resource CRUD
}
