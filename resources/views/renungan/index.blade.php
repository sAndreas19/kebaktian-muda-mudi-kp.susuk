@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/services.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/services_responsive.css') }}">
@endpush

@section('content')
<style>
    .renungan-card {
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }
    .renungan-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }
    .renungan-date {
        color: #888;
        font-size: 16px;
        margin-bottom: 25px;
        display: block;
    }
    .renungan-ayat {
        font-style: italic;
        color: #555;
        border-left: 4px solid #33cc99;
        padding-left: 15px;
        margin-bottom: 30px;
        font-size: 18px;
    }
    .renungan-content {
        font-size: 16px;
        line-height: 1.8;
        color: #444;
    }
    .search-box {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 30px;
    }
</style>

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/slide/kebersamaan2.png') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title"><span>Renungan</span> Harian</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li>Renungan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        
        <!-- Search By Date -->
        <div class="row">
            <div class="col-lg-12">
                <div class="search-box">
                    <form action="{{ url('renungan') }}" method="GET" class="form-inline">
                        <label for="tanggal" class="mr-3 font-weight-bold">Cari Renungan Tanggal:</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control mr-3" value="{{ request('tanggal', $date) }}" required>
                        <button type="submit" class="btn btn-success">Cari Renungan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row services_row">
            <div class="col-lg-12">
                
                @if($renungan)
                <div class="renungan-card">
                    <h2 class="renungan-title">{{ $renungan->judul }}</h2>
                    <span class="renungan-date">Tanggal: {{ \Carbon\Carbon::parse($renungan->tanggal)->translatedFormat('l, d F Y') }}</span>
                    
                    @if($renungan->ayat)
                    <div class="renungan-ayat">
                        "{{ $renungan->ayat }}"
                    </div>
                    @endif

                    <div class="renungan-content">
                        {!! nl2br(e($renungan->isi_renungan)) !!}
                    </div>

                    @if($renungan->video_url)
                    <div class="mt-4">
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/{{ $renungan->video_url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    @endif
                </div>
                @else
                <div class="alert alert-warning text-center" style="padding: 40px; font-size: 18px;">
                    Maaf, belum ada renungan untuk tanggal <strong>{{ \Carbon\Carbon::parse($date)->translatedFormat('d F Y') }}</strong>.
                    <br>Silakan pilih tanggal lain pada form di atas.
                </div>
                @endif

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/services.js') }}"></script>
@endpush
@endsection