@extends('layouts.admin')

@section('content')
<div class="card-body">
    <h3>TAMBAH KEPENGURUSAN KMKS</h3>
    <div class="mt-4">
        <form action="{{ route('admin.kepengurusan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">NAMA KEPENGURUSAN</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penjelasan">PENJELASAN (Opsional)</label>
                <textarea name="penjelasan" id="penjelasan" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <a href="{{ route('admin.kepengurusan.index') }}" class="btn btn-secondary">KEMBALI</a>
        </form>
    </div>
</div>
@endsection