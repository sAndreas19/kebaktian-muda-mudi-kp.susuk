<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kegiatan;
use App\Models\Renungan;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // For the homepage activities (preview)
        $jadwals = Jadwal::orderBy('tgl_posting', 'desc')->limit(6)->get();

        // For the footer recent schedule (latest 5 jadwals)
        $recentJadwals = Jadwal::orderBy('tgl_posting', 'desc')->limit(5)->get();

        // For today's devotional
        $renunganHariIni = Renungan::whereDate('tanggal', Carbon::today())->first();

        return view('welcome', compact('jadwals', 'recentJadwals', 'renunganHariIni'));
    }
}
