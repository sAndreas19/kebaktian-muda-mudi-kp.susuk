<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index(Request $request)
    {
        $query = Pengurus::query();
        if ($request->has('periode') && $request->periode != '') {
            $query->where('periode', $request->periode);
        }
        $penguruses = $query->orderBy('divisi')->orderBy('id')->get();
        
        $periodes = Pengurus::select('periode')->distinct()->pluck('periode');

        return view('admin.pengurus.index', compact('penguruses', 'periodes'));
    }

    public function create()
    {
        return view('admin.pengurus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'divisi' => 'nullable|string|max:255',
            'periode' => 'nullable|string|max:255',
        ]);

        Pengurus::create($request->all());

        return redirect()->route('admin.pengurus.index')->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    public function edit(Pengurus $pengurus)
    {
        return view('admin.pengurus.edit', compact('pengurus'));
    }

    public function update(Request $request, Pengurus $pengurus)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'divisi' => 'nullable|string|max:255',
            'periode' => 'nullable|string|max:255',
        ]);

        $pengurus->update($request->all());

        return redirect()->route('admin.pengurus.index')->with('success', 'Data pengurus berhasil diperbarui.');
    }

    public function destroy(Pengurus $pengurus)
    {
        $pengurus->delete();
        return redirect()->route('admin.pengurus.index')->with('success', 'Data pengurus berhasil dihapus.');
    }
}
