@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Pesan</li>
        <li class="breadcrumb-item active">Detail Pesan</li>
    </ul>

    <section class="statistics">
        <div class="row d-flex">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Pesan dari: {{ $pesan->nama }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama:</strong> {{ $pesan->nama }}</p>
                        <p><strong>Email:</strong> {{ $pesan->email }}</p>
                        <p><strong>Handphone:</strong> {{ $pesan->hp }}</p>
                        <p><strong>Tanggal:</strong> {{ $pesan->tanggal }}</p>
                        <hr>
                        <p><strong>Isi Pesan:</strong></p>
                        <div class="p-3 bg-light border">
                            {{ $pesan->pesan }}
                        </div>
                        <div class="mt-4">
                            @if($pesan->keterangan == '1')
                                <a href="{{ route('admin.pesan.read') }}" class="btn btn-secondary">KEMBALI</a>
                            @else
                                <a href="{{ route('admin.pesan.index') }}" class="btn btn-secondary">KEMBALI</a>
                            @endif
                            <form action="{{ route('admin.pesan.destroy', $pesan->id) }}" method="POST" onsubmit="return confirm('Yakin hapus pesan ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">HAPUS PESAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
@endsection