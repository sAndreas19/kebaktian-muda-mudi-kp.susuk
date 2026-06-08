<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::orderBy('tgl_posting', 'desc')->paginate(10);
        return view('jadwal.index', compact('jadwals'));
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $recentJadwals = Jadwal::orderBy('tgl_posting', 'desc')->limit(5)->get();
        return view('jadwal.show', compact('jadwal', 'recentJadwals'));
    }
}
