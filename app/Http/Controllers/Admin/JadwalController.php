<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::latest('tgl_posting')->paginate(10);
        return view('admin.jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'nullable|string',
            'judul' => 'required|string|max:255',
            'konten' => 'nullable|string',
            'tgl_posting' => 'nullable|date',
            'user' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'nullable|string',
            'judul' => 'required|string|max:255',
            'konten' => 'nullable|string',
            'tgl_posting' => 'nullable|date',
            'user' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil diupdate');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
