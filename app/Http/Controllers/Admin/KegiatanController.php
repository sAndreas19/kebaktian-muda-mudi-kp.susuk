<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->paginate(10);
        return view('admin.kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . strtolower($file->getClientOriginalName());
            $file->move(public_path('img/folio'), $filename);
            $data['gambar'] = $filename;
        }

        Kegiatan::create($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . strtolower($file->getClientOriginalName());
            $file->move(public_path('img/folio'), $filename);
            $data['gambar'] = $filename;

            // Optional: delete old file
            if ($kegiatan->gambar && file_exists(public_path('img/folio/' . $kegiatan->gambar))) {
                unlink(public_path('img/folio/' . $kegiatan->gambar));
            }
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diupdate');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->gambar && file_exists(public_path('img/folio/' . $kegiatan->gambar))) {
            unlink(public_path('img/folio/' . $kegiatan->gambar));
        }

        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus');
    }
}
