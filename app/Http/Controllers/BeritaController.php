<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk menyimpan file gambar

class BeritaController extends Controller
{
    // Fungsi untuk menampilkan berita
    public function index()
    {
        // Mengambil semua data berita
        $beritas = Berita::all();
        
        // Menampilkan data berita ke view 'berita.index'
        return view('berita.index', compact('beritas'));
    }

    // Fungsi untuk menampilkan form untuk menambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Fungsi untuk menyimpan berita yang baru dibuat
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan berita
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Menyimpan gambar di folder 'storage/app/public/images'
        }

        // Menyimpan berita ke database
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image' => $imagePath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Fungsi untuk menampilkan form untuk mengedit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id); // Mencari berita berdasarkan ID
        return view('berita.edit', compact('berita'));
    }

    // Fungsi untuk menyimpan perubahan berita yang sudah diedit
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        $berita = Berita::findOrFail($id);
        
        // Menghapus gambar lama jika ada dan ada gambar baru
        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::delete('public/' . $berita->image); // Menghapus gambar lama dari storage
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $berita->image; // Tetap menggunakan gambar lama jika tidak ada gambar baru
        }

        // Update berita
        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image' => $imagePath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Fungsi untuk menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Menghapus gambar jika ada
        if ($berita->image) {
            Storage::delete('public/' . $berita->image);
        }

        // Menghapus berita dari database
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
