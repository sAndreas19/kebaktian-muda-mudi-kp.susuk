@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR JADWAL</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>NAMA JADWAL</th>
                    <th>TANGGAL JADWAL</th>
                    <th>HARI</th>
                    <th>USER</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwals as $key => $jadwal)
                <tr>
                    <td>{{ $jadwals->firstItem() + $key }}</td>
                    <td>{{ $jadwal->judul }}</td>
                    <td>{{ $jadwal->tgl_posting }}</td>
                    <td>{{ $jadwal->kategori }}</td>
                    <td>{{ $jadwal->user }}</td>
                    <td>
                        <a href="{{ route('admin.jadwal.edit', $jadwal->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.jadwal.destroy', $jadwal->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $jadwals->links() }}
    </div>
</div>
@endsection