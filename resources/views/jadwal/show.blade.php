@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_responsive.css') }}">
@endpush

@section('content')

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/gambar/juduln.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3> {{ $jadwal->judul }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jadwal Detail -->
<div class="news">
    <div class="container">
        <div class="row">
            
            <!-- Jadwal Post -->
            <div class="col-lg-8">
                <div class="news_posts">
                    <div class="news_post">
                        <div class="news_image">
                            <p>Tanggal Posting : {{ \Carbon\Carbon::parse($jadwal->tgl_posting)->format('d F Y') }} | Post : {{ $jadwal->user }}</p>
                        </div>
                        <div class="news_content" style="margin-top: 20px;">
                            @if($jadwal->flyer)
                                <div style="margin-bottom: 20px;">
                                    <img src="{{ asset('img/blog/' . $jadwal->flyer) }}" alt="Flyer {{ $jadwal->judul }}" style="max-width: 100%;">
                                </div>
                            @endif
                            {!! nl2br(e($jadwal->konten)) !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Search -->
                    <div class="sidebar_search">
                        <form action="#" id="sidebar_search_form" class="sidebar_search_form">
                            <input type="text" class="search_input" placeholder="Cari" required="required">
                            <button class="search_button"><img src="{{ asset('images/search.png') }}" alt=""></button>
                        </form>
                    </div>

                    <!-- Categories / Recent -->
                    <div class="sidebar_categories sidebar_section">
                        <div class="sidebar_section_title">
                            <div class="sidebar_title">Jadwal Lainnya</div>
                        </div>
                        <ul>
                            @foreach($recentJadwals as $recent)
                            <li><a href="{{ url('jadwal/' . $recent->id) }}">#. {{ $recent->judul }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/news.js') }}"></script>
@endpush
@endsection