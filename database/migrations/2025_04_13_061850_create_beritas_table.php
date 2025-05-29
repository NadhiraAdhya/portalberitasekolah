<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID sebagai primary key
            $table->string('judul'); // Judul berita
            $table->text('isi'); // Deskripsi berita
            $table->string('image')->nullable(); // Lokasi gambar (optional)
            $table->timestamps(); // Created at dan updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
}
