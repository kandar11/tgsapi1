<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        "kode_anggota",
        "nama_anggota",
        "jk_anggota",
        "jurusan_anggota",
        "no_tlpn_anggota",
        "alamat_anggota"
    ];
}
