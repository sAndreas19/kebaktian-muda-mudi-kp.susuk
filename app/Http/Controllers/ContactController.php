<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'txtnama' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txthandphone' => 'required|string|max:20',
            'txtpesan' => 'required|string',
        ]);

        Pesan::create([
            'nama' => $request->txtnama,
            'email' => $request->txtemail,
            'hp' => $request->txthandphone,
            'pesan' => $request->txtpesan,
            'tanggal' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Terimakasih! Pesan Anda berhasil dikirim, kami akan segera membalas lewat Email atau HandPhone.');
    }
}
