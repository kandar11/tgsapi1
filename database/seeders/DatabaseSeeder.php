<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\buku;
use App\Models\petugas;
use App\Models\rak;
use App\Models\peminjaman;
use App\Models\pengembalian;
use App\Models\anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        anggota::create([
            "kode_anggota" => "12345",
            "nama_anggota" => "Boyan",
            "jk_anggota" => "L",
            "jurusan_anggota" => "MM",
            "no_tlpn_anggota" => "0812131415",
            "alamat_anggota" => "Cawang",
        ]);

        anggota::create([
            "kode_anggota" => "54321",
            "nama_anggota" => "Muing",
            "jk_anggota" => "L",
            "jurusan_anggota" => "PM",
            "no_tlpn_anggota" => "0813151678",
            "alamat_anggota" => "Ppd",
        ]);

        petugas::create([
            "nama_petugas" => "Dika",
            "jabatan_petugas" => "Staf",
            "no_tlpn_petugas" => "0892921878",
            "alamat_petugas" => "Gang Yaya",
        ]);

        petugas::create([
            "nama_petugas" => "Gus",
            "jabatan_petugas" => "Admin",
            "no_tlpn_petugas" => "0889812698",
            "alamat_petugas" => "Kali Arema",
        ]);

        buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "Boyan ketemu muing",
            "penulis_buku" => "Dika",
            "penerbit_buku" => "GusGopal",
            "tahun_penerbit" => "2011",
            "stok" => 50,
           ]);
    
           buku::create([
            "kode_buku" => "67890",
            "judul_buku" => "Muing beli teh rio",
            "penulis_buku" => "Edrian",
            "penerbit_buku" => "Digul",
            "tahun_penerbit" => "2012",
            "stok" => 51,
           ]);

           rak::create([
            "nama_rak" => "Implus",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
          ]);
   
        
          rak::create([
           "nama_rak" => "Sejarah",
           "lokasi_rak" => "lt-1",
           "buku_id" => 2,
            ]);
   
         peminjaman::create([
           "tanggal_pinjam" => "2023-05-05",
           "tanggal_kembali" => "2023-05-09",
           "buku_id" => 1,
           "anggota_id" => 1,
           "petugas_id" => 1,
         ]);
   
         peminjaman::create([
           "tanggal_pinjam" => "2023-06-11",
           "tanggal_kembali" => "2023-06-15",
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
         ]);
   
         pengembalian::create([
            "tanggal_pengembalian" => "2023-05-09",
            "denda" => 50000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         pengembalian::create([
           "tanggal_pengembalian" => "2023-06-15",
           "denda" => 45000,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
         ]);
        }
}