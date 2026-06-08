<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['judul', 'kategori', 'konten', 'gambar', 'tgl_posting', 'user', 'status'];
}
