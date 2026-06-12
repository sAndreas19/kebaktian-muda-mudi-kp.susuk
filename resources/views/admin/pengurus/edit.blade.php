@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>EDIT PENGURUS</h3>
    <div class="mt-4">
        <form action="{{ route('admin.pengurus.update', $pengurus->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">NAMA PENGURUS</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pengurus->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">JABATAN</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $pengurus->jabatan }}" required>
            </div>
            <div class="form-group">
                <label for="divisi">DIVISI / KATEGORI</label>
                <input type="text" name="divisi" id="divisi" class="form-control" value="{{ $pengurus->divisi }}">
            </div>
            <div class="form-group">
                <label for="periode">PERIODE</label>
                <input type="text" name="periode" id="periode" class="form-control" value="{{ $pengurus->periode }}">
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a href="{{ route('admin.pengurus.index') }}" class="btn btn-secondary">KEMBALI</a>
        </form>
    </div>
</div>
@endsection