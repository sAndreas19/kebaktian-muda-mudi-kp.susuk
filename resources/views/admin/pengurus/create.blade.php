@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>TAMBAH PENGURUS</h3>
    <div class="mt-4">
        <form action="{{ route('admin.pengurus.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">NAMA PENGURUS</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Contoh: Rani Manalu" required>
            </div>
            <div class="form-group">
                <label for="jabatan">JABATAN</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Contoh: Koordinator Umum" required>
            </div>
            <div class="form-group">
                <label for="divisi">DIVISI / KATEGORI</label>
                <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Contoh: Badan Pengurus Harian">
                <small class="form-text text-muted">Akan digunakan untuk mengelompokkan nama pengurus.</small>
            </div>
            <div class="form-group">
                <label for="periode">PERIODE</label>
                <input type="text" name="periode" id="periode" class="form-control" placeholder="Contoh: 2024/2025">
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <a href="{{ route('admin.pengurus.index') }}" class="btn btn-secondary">KEMBALI</a>
        </form>
    </div>
</div>
@endsection