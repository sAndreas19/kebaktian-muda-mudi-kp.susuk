@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_responsive.css') }}">
@endpush

@section('content')

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/gambar/keakraban.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title"><span>JADWAL</span> KMKS MEDAN</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li>Jadwal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News / Jadwal -->
<div class="news">
    <div class="container">
        <div class="row">
            
            <!-- Jadwal Posts -->
            <div class="col-lg-8">
                <div class="news_posts">
                    
                    @foreach($jadwals as $data)
                    <div class="news_post">
                        
                        <div class="news_body">
                            <div class="news_title"><a href="{{ url('jadwal/' . $data->id) }}">{{ $data->judul }}</a></div>
                            <div class="news_info">
                                <ul>
                                    <li class="news_author"><span>Post: </span><a href="#"> {{ $data->user }}</a></li>
                                </ul>
                                <ul>
                                    <li class="news_author"><span>Tanggal: </span><a href="#">{{ \Carbon\Carbon::parse($data->tgl_posting)->format('d M Y') }}</a></li>
                                </ul>
                            </div>
                            <div class="button about_button">
                                <a href="{{ url('jadwal/' . $data->id) }}">SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{ $jadwals->links('pagination::bootstrap-4') }}
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
                            <div class="sidebar_title">Daftar Jadwal</div>
                        </div>
                        <ul>
                            @foreach($jadwals->take(10) as $recent)
                            <li><a href="{{ url('jadwal/' . $recent->id) }}">{{ $recent->judul }}</a></li>
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