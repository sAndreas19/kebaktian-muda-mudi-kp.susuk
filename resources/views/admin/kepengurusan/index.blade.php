@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR KEPENGURUSAN KMKS</h3>
    <a href="{{ route('admin.kepengurusan.create') }}" class="btn btn-primary mb-3">Tambah Kepengurusan</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>NAMA KEPENGURUSAN</th>
                    <th>PENJELASAN</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kepengurusans as $key => $kepengurusan)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kepengurusan->nama }}</td>
                    <td>{{ Str::limit($kepengurusan->penjelasan, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.kepengurusan.edit', $kepengurusan->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.kepengurusan.destroy', $kepengurusan->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection