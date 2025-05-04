<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Jika Anda tidak ingin menggunakan timestamps
    // Matikan fitur timestamps
    //publictiestamps = false;

    // Atau jika Anda ingin menggunakan timestamps, biarkan bagian ini hilang
    // public $timestamps = true;
}