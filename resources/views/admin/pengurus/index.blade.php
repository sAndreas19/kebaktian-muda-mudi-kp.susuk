@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>DAFTAR NAMA PENGURUS</h3>
    <a href="{{ route('admin.pengurus.create') }}" class="btn btn-primary mb-3">Tambah Pengurus</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="mb-3">
        <form action="{{ route('admin.pengurus.index') }}" method="GET" class="form-inline">
            <div class="form-group mr-2">
                <label for="periode" class="mr-2">Filter Periode:</label>
                <select name="periode" id="periode" class="form-control">
                    <option value="">Semua Periode</option>
                    @foreach($periodes as $p)
                        @if($p)
                            <option value="{{ $p }}" {{ request('periode') == $p ? 'selected' : '' }}>{{ $p }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-info">Filter</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>NAMA PENGURUS</th>
                    <th>JABATAN</th>
                    <th>DIVISI / KATEGORI</th>
                    <th>PERIODE</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($penguruses as $key => $pengurus)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pengurus->nama }}</td>
                    <td>{{ $pengurus->jabatan }}</td>
                    <td>{{ $pengurus->divisi }}</td>
                    <td>{{ $pengurus->periode }}</td>
                    <td>
                        <a href="{{ route('admin.pengurus.edit', $pengurus->id) }}" class="btn btn-sm btn-info">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.pengurus.destroy', $pengurus->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data pengurus</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection