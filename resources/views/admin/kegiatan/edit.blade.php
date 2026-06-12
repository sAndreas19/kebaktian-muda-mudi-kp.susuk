@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Master</li>
        <li class="breadcrumb-item active">Edit Galeri / Kegiatan</li>
    </ul>

    <section class="statistics">
        <div class="row d-flex">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Nama *</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control is-valid" value="{{ old('nama', $kegiatan->nama) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Deskripsi *</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control is-valid" rows="5">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">GAMBAR SAAT INI</label>
                        <div class="col-sm-10">
                            @if($kegiatan->gambar)
                                <img src="{{ asset('img/folio/' . $kegiatan->gambar) }}" width="150" alt="Gambar">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Ganti Gambar *</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar" class="form-control is-valid">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE KEGIATAN</button>
                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </section> 
</div>
@endsection