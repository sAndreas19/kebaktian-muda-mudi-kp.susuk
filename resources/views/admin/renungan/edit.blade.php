@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Master</li>
        <li class="breadcrumb-item active">Edit Renungan</li>
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
                <form method="POST" action="{{ route('admin.renungan.update', $renungan->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Judul Renungan</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" class="form-control is-valid" value="{{ old('judul', $renungan->judul) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" class="form-control is-valid" value="{{ old('tanggal', $renungan->tanggal) }}">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Ayat</label>
                        <div class="col-sm-10">
                            <textarea name="ayat" class="form-control is-valid" rows="3">{{ old('ayat', $renungan->ayat) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Isi Renungan</label>
                        <div class="col-sm-10">
                            <textarea name="isi_renungan" class="form-control is-valid" rows="10">{{ old('isi_renungan', $renungan->isi_renungan) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">Video URL (Opsional)</label>
                        <div class="col-sm-10">
                            <input type="text" name="video_url" class="form-control is-valid" value="{{ old('video_url', $renungan->video_url) }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{ route('admin.renungan.index') }}" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </section> 
</div>
@endsection