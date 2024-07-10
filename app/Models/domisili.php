<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;

    protected $table = 'data_domisili';
    protected $fillable = [
        'nik',
        'nama',
        'user_id',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'keperluan',
        'pengantar',
        'file_ktp_kk',
    ];
}
