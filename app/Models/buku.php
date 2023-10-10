<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable =[
        "kode_buku",
        "judul_buku",
        "penulisan_buku",
        "penerbit_buku",
        "tahun_terbit",
        "stok"
    ];
}
