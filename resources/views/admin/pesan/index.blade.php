@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>PESAN MASUK</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>HANDPHONE</th>
                    <th>EMAIL</th>
                    <th>PESAN</th>
                    <th>TANGGAL</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pesans as $key => $pesan)
                <tr>
                    <td>{{ $pesans->firstItem() + $key }}</td>
                    <td>{{ $pesan->nama }}</td>
                    <td>{{ $pesan->hp }}</td>
                    <td>{{ $pesan->email }}</td>
                    <td>{{ Str::limit($pesan->pesan, 50) }}</td>
                    <td>{{ $pesan->tanggal }}</td>
                    <td>
                        <a href="{{ route('admin.pesan.show', $pesan->id) }}" class="btn btn-sm btn-info">READ</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada pesan masuk</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $pesans->links() }}
    </div>
</div>
@endsection