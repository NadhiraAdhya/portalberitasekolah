<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration
{
    public function up(): void
    {
        // Membuat tabel 'prestasis' dengan kolom-kolom yang diperlukan
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->date('date');  // Menyimpan tanggal prestasi
            $table->string('name');  // Nama prestasi
            $table->text('description');  // Deskripsi prestasi
            $table->string('student_name');  // Nama siswa yang mendapatkan prestasi
            $table->string('image_path')->nullable();  // Lokasi gambar (opsional)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Menghapus tabel 'prestasis' saat rollback migrasi
        Schema::dropIfExists('prestasis');
    }
}

class Prestasi extends Model
{
    // Tentukan tabel jika nama tabel tidak sesuai dengan nama model
    protected $table = 'prestasis';  // Nama tabel yang sesuai dengan nama model

    // Tentukan kolom yang dapat diisi (opsional)
    protected $fillable = ['date', 'name', 'description', 'student_name', 'image_path'];
}
