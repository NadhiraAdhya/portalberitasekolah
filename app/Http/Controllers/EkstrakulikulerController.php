<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    // Fungsi untuk menampilkan ekstrakurikuler
    public function index()
    {
        // Mengambil semua data ekstrakurikuler
        $ekstrakurikulers = Ekstrakurikuler::all();
        
        // Menampilkan data ekstrakurikuler ke view 'ekstrakurikuler.index'
        return view('ekstrakurikuler.index', compact('ekskuls'));
    }

    // Fungsi lainnya sesuai dengan resource CRUD
}
