<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    protected $fillable = ['judul', 'ayat', 'isi_renungan', 'tanggal', 'video_url'];
}
