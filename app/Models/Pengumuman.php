<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';

    protected $fillable = [
        'kategori',
        'judul',
        'konten',
        'gambar',
        'tgl_posting',
        'user',
        'status'
    ];
}
