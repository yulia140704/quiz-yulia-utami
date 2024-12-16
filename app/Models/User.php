<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'tb_users';

    // Tentukan primary key yang digunakan
    protected $primaryKey = 'user_id';

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'user_email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_role',
        'user_aktif',
    ];

    // Tentukan kolom timestamps jika digunakan
    public $timestamps = true;
}

