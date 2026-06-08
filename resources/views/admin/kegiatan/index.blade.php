@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR KEGIATAN</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>NAMA KEGIATAN</th>
                    <th>ALAMAT LINK</th>
                    <th>GAMBAR</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kegiatans as $key => $kegiatan)
                <tr>
                    <td>{{ $kegiatans->firstItem() + $key }}</td>
                    <td>{{ $kegiatan->nama }}</td>
                    <td>{{ $kegiatan->alamat }}</td>
                    <td>
                        @if($kegiatan->gambar)
                            <img src="{{ asset('img/folio/' . $kegiatan->gambar) }}" width="80" alt="Gambar">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.kegiatan.destroy', $kegiatan->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $kegiatans->links() }}
    </div>
</div>
@endsection