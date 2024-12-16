<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'tb_pelanggan'; // Nama tabel di database
    protected $primaryKey = 'pel_id'; // Primary key tabel
    public $timestamps = true; // Aktifkan timestamps jika menggunakan `created_at` dan `updated_at`

    // Kolom-kolom yang dapat diisi
    protected $fillable = [
        'pel_id_gol',
        'pel_no',
        'pel_nama',
        'pel_alamat',
        'pel_hp',
        'pel_ktp',
        'pel_seri',
        'pel_meteran',
        'pel_aktif',
        'pel_id_user',
    ];
}
