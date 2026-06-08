@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/services.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/services_responsive.css') }}">
@endpush

@section('content')
<style type="text/css">
    .feature_image img { transition: all .2s ease-in-out; }
    .feature_image img:hover { transform: scale(1.5); }
</style>

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/slide/kebersamaan4.png') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title"><span>KMKS</span> Kegiatan</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li>Kegiatan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-between">
                    
                    @foreach($kegiatans as $data)
                    <div class="feature">
                        <div class="feature_image"><img src="{{ asset('img/folio/' . $data->gambar) }}" alt="" style="max-width: 100%;"></div>
                        <div class="feature_content">
                            <div class="section_title"><h5>{{ $data->nama }}</h5></div>
                            <div class="feature_text">
                                <p>{{ $data->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>      
</div>

@push('scripts')
<script src="{{ asset('js/services.js') }}"></script>
@endpush
@endsection