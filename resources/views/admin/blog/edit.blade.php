@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Master</li>
        <li class="breadcrumb-item active">Edit News</li>
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
                <form method="POST" action="{{ route('admin.blog.update', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">KATEGORI</label>
                        <div class="col-sm-10">
                            <input type="text" name="kategori" class="form-control is-valid" value="{{ old('kategori', $blog->kategori) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">JUDUL</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" class="form-control is-valid" value="{{ old('judul', $blog->judul) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">KONTEN</label>
                        <div class="col-sm-10">
                            <textarea name="konten" class="form-control is-valid" rows="10">{{ old('konten', $blog->konten) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">TANGGAL POSTING</label>
                        <div class="col-sm-10">
                            <input type="date" name="tgl_posting" class="form-control is-valid" value="{{ old('tgl_posting', $blog->tgl_posting) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">USER</label>
                        <div class="col-sm-10">
                            <input type="text" name="user" class="form-control is-valid" value="{{ old('user', $blog->user) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">STATUS</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control is-valid" value="{{ old('status', $blog->status) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">GAMBAR SAAT INI</label>
                        <div class="col-sm-10">
                            @if($blog->gambar)
                                <img src="{{ asset('img/blog/' . $blog->gambar) }}" width="150" alt="Gambar">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">GANTI GAMBAR</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar" class="form-control is-valid">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE BLOG</button>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </section> 
</div>
@endsection