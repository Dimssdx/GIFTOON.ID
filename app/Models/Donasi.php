<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_donasi', 
        'keterangan_donasi', 
        'gambar', 
        'jumlah_uang', 
        'selesai', 
        'user_id'
    ];
}
