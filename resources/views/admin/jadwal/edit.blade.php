@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Master</li>
        <li class="breadcrumb-item active">Edit Jadwal</li>
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
                <form method="POST" action="{{ route('admin.jadwal.update', $jadwal->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">HARI</label>
                        <div class="col-sm-10">
                            <input type="text" name="kategori" class="form-control is-valid" value="{{ old('kategori', $jadwal->kategori) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">NAMA JADWAL</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" class="form-control is-valid" value="{{ old('judul', $jadwal->judul) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">DESKRIPSI JADWAL</label>
                        <div class="col-sm-10">
                            <textarea name="konten" class="form-control is-valid" rows="10">{{ old('konten', $jadwal->konten) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">TANGGAL JADWAL</label>
                        <div class="col-sm-10">
                            <input type="date" name="tgl_posting" class="form-control is-valid" value="{{ old('tgl_posting', $jadwal->tgl_posting) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">NAMA YANG POSTING</label>
                        <div class="col-sm-10">
                            <input type="text" name="user" class="form-control is-valid" value="{{ old('user', $jadwal->user) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">FLYER (FOTO)</label>
                        <div class="col-sm-10">
                            <input type="file" name="flyer" class="form-control is-valid">
                            @if($jadwal->flyer)
                                <div class="mt-2">
                                    <img src="{{ asset('img/blog/' . $jadwal->flyer) }}" width="150" alt="Flyer">
                                </div>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE JADWAL</button>
                    <a href="{{ route('admin.jadwal.index') }}" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </section> 
</div>
@endsection