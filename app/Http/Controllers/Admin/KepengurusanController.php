<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    public function index()
    {
        $kepengurusans = Kepengurusan::all();
        return view('admin.kepengurusan.index', compact('kepengurusans'));
    }

    public function create()
    {
        return view('admin.kepengurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penjelasan' => 'nullable|string',
        ]);

        Kepengurusan::create($request->all());

        return redirect()->route('admin.kepengurusan.index')->with('success', 'Data kepengurusan berhasil ditambahkan.');
    }

    public function edit(Kepengurusan $kepengurusan)
    {
        return view('admin.kepengurusan.edit', compact('kepengurusan'));
    }

    public function update(Request $request, Kepengurusan $kepengurusan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penjelasan' => 'nullable|string',
        ]);

        $kepengurusan->update($request->all());

        return redirect()->route('admin.kepengurusan.index')->with('success', 'Data kepengurusan berhasil diperbarui.');
    }

    public function destroy(Kepengurusan $kepengurusan)
    {
        $kepengurusan->delete();
        return redirect()->route('admin.kepengurusan.index')->with('success', 'Data kepengurusan berhasil dihapus.');
    }
}
