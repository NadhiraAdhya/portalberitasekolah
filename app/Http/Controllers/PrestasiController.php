<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    // Menampilkan daftar prestasi
    public function index()
    {
        // Mengambil semua data prestasi
        $prestasis = Prestasi::latest()->get();  // Menambahkan urutan terbaru

        // Menampilkan data prestasi ke view 'prestasi.index'
        return view('prestasi.index', compact('prestasis'));
    }

    // Menampilkan form untuk menambah prestasi
    public function create()
    {
        return view('prestasi.create');
    }

    // Menyimpan prestasi yang baru dibuat
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'date' => 'required|date',  // Validasi tanggal
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan prestasi
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Menyimpan gambar di folder 'storage/app/public/images'
        }

        // Menyimpan prestasi ke database
        Prestasi::create([
            'date' => $request->date, // Menyimpan tanggal
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit prestasi
    public function edit($id)
    {
        // Mencari prestasi berdasarkan ID
        $prestasi = Prestasi::findOrFail($id);

        // Mengembalikan view dengan data prestasi yang akan diedit
        return view('prestasi.edit', compact('prestasi'));
    }

    // Menyimpan perubahan prestasi yang sudah diedit
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'date' => 'required|date',  // Validasi tanggal
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        ]);

        // Cari prestasi berdasarkan ID
        $prestasi = Prestasi::findOrFail($id);

        // Menghapus gambar lama jika ada dan ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage jika ada
            if ($prestasi->image && Storage::exists('public/' . $prestasi->image)) {
                Storage::delete('public/' . $prestasi->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // Tetap menggunakan gambar lama jika tidak ada gambar baru
            $imagePath = $prestasi->image;
        }

        // Update prestasi
        $prestasi->update([
            'date' => $request->date, // Memperbarui tanggal
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil diperbarui.');
    }

    // Fungsi untuk menghapus prestasi
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        
        // Menghapus gambar jika ada
        if ($prestasi->image && Storage::exists('public/' . $prestasi->image)) {
            Storage::delete('public/' . $prestasi->image);
        }

        // Menghapus prestasi dari database
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
    }
}
