<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Judul berita
            $table->text('description');  // Deskripsi berita
            $table->string('image_path')->nullable();  // Lokasi gambar (opsional)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
}

class Berita extends Model
{
    protected $table = 'beritas';  // Nama tabel yang sesuai dengan nama model

    protected $fillable = ['title', 'description', 'image_path'];
}
