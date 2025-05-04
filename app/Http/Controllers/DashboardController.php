<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
     public function index()
{
   
    public function dashboard()
{
    $beritas = Berita::latest()->get();
    $prestasis = Prestasi::latest()->get();
    return view('dashboard', compact('beritas', 'prestasis'));
}


}
}
