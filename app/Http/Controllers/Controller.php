<?php

namespace App\Http\Controllers;

abstract class Controller
{
     public function index()
{
   
    $beritas = Berita::latest()->take(4)->get();
    $ekskuls = Ekstrakurikuler::all();
    $prestasis = Prestasi::all();

    return view('landing', compact('beritas', 'ekskuls', 'prestasis'));


}
}