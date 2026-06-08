@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR RENUNGAN</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>JUDUL RENUNGAN</th>
                    <th>TANGGAL</th>
                    <th>AYAT</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($renungans as $key => $renungan)
                <tr>
                    <td>{{ $renungans->firstItem() + $key }}</td>
                    <td>{{ $renungan->judul }}</td>
                    <td>{{ $renungan->tanggal }}</td>
                    <td>{{ Str::limit($renungan->ayat, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.renungan.edit', $renungan->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.renungan.destroy', $renungan->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
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
        {{ $renungans->links() }}
    </div>
</div>
@endsection