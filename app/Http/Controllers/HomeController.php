<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        // For the homepage activities
        $jadwals = Kegiatan::limit(200)->get();

        // For the footer recent schedule (latest 5 jadwals)
        $recentBlogs = Jadwal::orderBy('tgl_posting', 'desc')->limit(5)->get();

        return view('welcome', compact('jadwals', 'recentBlogs'));
    }
}
