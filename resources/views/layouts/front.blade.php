<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('icon.png') }}" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KMKS - Medan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
    @stack('styles')
</head>
<body>

<div class="super_container">

    <!-- Header -->
    <header class="header trans_200">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="top_bar_item"><a href="{{ url('contact') }}">Alamat :</a></div>
                            <div class="top_bar_item"><a href="{{ url('contact') }}">Gang susuk 5, No.12</a></div>
                            <div class="emergencies d-flex flex-row align-items-center justify-content-start ml-auto">Yesus Gembalaku</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav ml-auto">
                                <ul>
                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="{{ url('tentang') }}">Tentang</a></li>
                                    <li><a href="{{ url('kegiatan') }}">Kegiatan</a></li>
                                    <li><a href="{{ url('renungan') }}">Renungan</a></li>
                                    <li><a href="{{ url('jadwal') }}">Jadwal</a></li>
                                    <li><a href="{{ url('contact') }}">Kontak</a></li>
                                </ul>
                            </nav>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo -->
        <div class="logo_container_outer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="logo_container">
                            <a href="{{ url('/') }}">
                                <div class="logo_content d-flex flex-column align-items-start justify-content-center">
                                    <div class="logo_line"></div>
                                    <div class="logo d-flex flex-row align-items-center justify-content-center">
                                        <div class="logo_text">KMKS<span> MEDAN</span></div>
                                    </div>
                                    <div class="logo_sub">Gang Susuk 5, No.12</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </header>

    <!-- Menu -->
    <div class="menu_container menu_mm">
        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <p class="menu_item menu_mm fa fa-home"><a href="{{ url('/') }}"> Beranda</a></p>
                    <hr class="my-2">
                    <p class="menu_item menu_mm fa fa-bars"><a href="{{ url('tentang') }}"> Tentang</a></p>
                    <hr class="my-2">
                    <p class="menu_item menu_mm fa fa-photo"><a href="{{ url('kegiatan') }}"> Kegiatan</a></p>
                    <hr class="my-2">
                    <p class="menu_item menu_mm fa fa-play"><a href="{{ url('renungan') }}"> Renungan</a></p>
                    <hr class="my-2">
                    <p class="menu_item menu_mm fa fa-book"><a href="{{ url('jadwal') }}"> Jadwal</a></p>
                    <hr class="my-1">
                    <p class="menu_item menu_mm fa fa-map-marker"><a href="{{ url('contact') }}"> Kontak</a></p>
                    <hr class="my-1">
                </ul>
            </div>
            <div class="menu_extra">
                <div class="menu_appointment"><a href="#">Shalom</a></div>
                <div class="menu_emergencies">Tuhan Yesus Memberkati</div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer_container">
            <div class="container">
                <div class="row">
                    <!-- Footer - About -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_about">
                            <div class="footer_logo_container">
                                <a href="{{ url('/') }}" class="d-flex flex-column align-items-center justify-content-center">
                                    <div class="logo_content">
                                        <div class="logo d-flex flex-row align-items-center justify-content-center">
                                            <div class="logo_text">KMKS<span>MEDAN</span></div>
                                            <div class="logo_box">+</div>
                                        </div>
                                        <div class="logo_sub">Kebaktian Muda-Mudi Kp. Susuk</div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>Mari datang beribadah di Persekutuan KMKS</p>
                            </div>
                            <ul class="footer_about_list">
                                <li><div class="footer_about_icon"><img src="{{ asset('images/phone-call.svg') }}" alt=""></div><span>+64 852-7794-8885</span></li>
                                <li><div class="footer_about_icon"><img src="{{ asset('images/envelope.svg') }}" alt=""></div><span>kmksmedan1998@gmail.com</span></li>
                                <li><div class="footer_about_icon"><img src="{{ asset('images/placeholder.svg') }}" alt=""></div><span>Gang Susuk 5, No.12, Medan</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer - Links -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_links footer_column">
                            <div class="footer_title">Daftar Kegiatan</div>
                            <ul>
                                @if(isset($footerKegiatans))
                                    @foreach($footerKegiatans as $kegiatan)
                                    <li><a href="{{ url('kegiatan') }}">{{ $kegiatan->nama }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Footer - News -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_news footer_column">
                            <div class="footer_title">Jadwal Terbaru</div>
                            <ul>
                                @if(isset($recentJadwals))
                                    @foreach($recentJadwals as $jadwalItem)
                                    <li>
                                        <div class="footer_news_title"><a href="{{ url('jadwal/' . $jadwalItem->id) }}">{{ $jadwalItem->judul }}</a></div>
                                        <a href="{{ url('jadwal/' . $jadwalItem->id) }}">Baca Selengkapnya </a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
                            <div class="cr"> KMKS MEDAN <i aria-hidden="true"></i> Dev <a href="https://layanancoding.com" target="_blank">by Hans </a></div>
                            <div class="footer_social ml-lg-auto">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </footer>
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
@stack('scripts')
</body>
</html>