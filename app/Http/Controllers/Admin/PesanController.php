<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    // Pesan Masuk (keterangan = '0')
    public function index()
    {
        $pesans = Pesan::where('keterangan', '0')->latest('tanggal')->paginate(20);
        return view('admin.pesan.index', compact('pesans'));
    }

    // Pesan Telah Dibaca (keterangan = '1')
    public function read()
    {
        $pesans = Pesan::where('keterangan', '1')->latest('tanggal')->paginate(20);
        return view('admin.pesan.read', compact('pesans'));
    }

    // Tampil Pesan & Mark as Read
    public function show(Pesan $pesan)
    {
        // Mark as read
        if ($pesan->keterangan == '0') {
            $pesan->update(['keterangan' => '1']);
        }

        return view('admin.pesan.show', compact('pesan'));
    }

    // Hapus Pesan
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
    }
}
