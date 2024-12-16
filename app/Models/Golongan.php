<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'tb_golongan'; // Nama tabel

    protected $primaryKey = 'gol_id'; // Primary key pada tabel

    public $timestamps = false; // Jika tidak menggunakan kolom created_at dan updated_at

    protected $fillable = [
        'gol_kode',
        'gol_nama',
    ];
}
