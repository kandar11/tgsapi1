<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $fillable =[
       "nama_petugas",
       "jabatan_petugas",
       "no_tlpn_petugas",
       "alamat_petugas"
    ];
}
