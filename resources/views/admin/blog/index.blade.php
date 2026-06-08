@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR NEWS</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>TANGGAL</th>
                    <th>KATEGORI</th>
                    <th>USER</th>
                    <th>STATUS</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $key => $blog)
                <tr>
                    <td>{{ $blogs->firstItem() + $key }}</td>
                    <td>{{ $blog->judul }}</td>
                    <td>{{ $blog->tgl_posting }}</td>
                    <td>{{ $blog->kategori }}</td>
                    <td>{{ $blog->user }}</td>
                    <td>{{ $blog->status }}</td>
                    <td>
                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $blogs->links() }}
    </div>
</div>
@endsection