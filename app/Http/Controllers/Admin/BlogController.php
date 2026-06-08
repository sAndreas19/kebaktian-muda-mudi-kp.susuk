<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Pengumuman::latest('tgl_posting')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/blog'), $filename);
            $data['gambar'] = $filename;
        }

        Pengumuman::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'News berhasil ditambahkan');
    }

    public function edit($id)
    {
        $blog = Pengumuman::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Pengumuman::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/blog'), $filename);
            $data['gambar'] = $filename;

            // Optional: delete old file
            if ($blog->gambar && file_exists(public_path('img/blog/' . $blog->gambar))) {
                unlink(public_path('img/blog/' . $blog->gambar));
            }
        }

        $blog->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'News berhasil diupdate');
    }

    public function destroy($id)
    {
        $blog = Pengumuman::findOrFail($id);
        
        if ($blog->gambar && file_exists(public_path('img/blog/' . $blog->gambar))) {
            unlink(public_path('img/blog/' . $blog->gambar));
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'News berhasil dihapus');
    }
}
