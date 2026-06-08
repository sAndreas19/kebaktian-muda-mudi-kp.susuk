<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RenunganController extends Controller
{
    public function index(Request $request)
    {
        // Get requested date from URL, fallback to today
        $dateParam = $request->query('tanggal');
        $date = $dateParam ? Carbon::parse($dateParam)->format('Y-m-d') : Carbon::today()->format('Y-m-d');

        // Retrieve renungan for that specific date
        $renungan = Renungan::whereDate('tanggal', $date)->first();

        return view('renungan.index', compact('renungan', 'date'));
    }
}
