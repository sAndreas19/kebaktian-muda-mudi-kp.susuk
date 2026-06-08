<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Renungan;
use Illuminate\Http\Request;

class RenunganController extends Controller
{
    public function index()
    {
        $renungans = Renungan::latest('tanggal')->paginate(10);
        return view('admin.renungan.index', compact('renungans'));
    }

    public function create()
    {
        return view('admin.renungan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'ayat' => 'nullable|string',
            'isi_renungan' => 'required|string',
            'tanggal' => 'required|date',
            'video_url' => 'nullable|string',
        ]);

        Renungan::create($request->all());

        return redirect()->route('admin.renungan.index')->with('success', 'Renungan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $renungan = Renungan::findOrFail($id);
        return view('admin.renungan.edit', compact('renungan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'ayat' => 'nullable|string',
            'isi_renungan' => 'required|string',
            'tanggal' => 'required|date',
            'video_url' => 'nullable|string',
        ]);

        $renungan = Renungan::findOrFail($id);
        $renungan->update($request->all());

        return redirect()->route('admin.renungan.index')->with('success', 'Renungan berhasil diupdate');
    }

    public function destroy($id)
    {
        $renungan = Renungan::findOrFail($id);
        $renungan->delete();

        return redirect()->route('admin.renungan.index')->with('success', 'Renungan berhasil dihapus');
    }
}
