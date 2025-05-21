<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEkskulsTable extends Migration
{
    public function up(): void
    {
        Schema::create('ekskuls', function (Blueprint $table) {
            $table->id();
            $table->string('ekskuls');  // Tambahkan kolom untuk nama ekstrakurikuler
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ekskuls');
    }
}

class Ekstrakurikuler extends Model
{
    // Tentukan tabel jika nama tabel tidak sesuai dengan nama model (opsional)
    protected $table = 'ekskuls';  // Sesuaikan dengan nama tabel di database
    
    // Tentukan kolom yang dapat diisi (opsional)
    protected $fillable = ['name'];
}
