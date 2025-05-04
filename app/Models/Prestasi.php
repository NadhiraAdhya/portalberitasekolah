<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\FileViewFinder; // <-- tambahkan ini
use Illuminate\Support\ServiceProvider;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasis'; 
}
