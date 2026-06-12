@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
@endpush

@section('content')
<!-- Home -->
<div class="home">
    <div class="home_slider_container">
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            
            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{ asset('img/background/hero_background.jpg') }})"></div>
                <div class="home_content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content_inner">
                                    <div class="home_title"><h1>Kebaktian Muda-Mudi Kampung Susuk</h1></div>
                                    <div class="home_text">
                                        <p>KMKS (Kebaktian Muda/i Kampung Susuk) adalah sebuah komunitas pelayanan rohani yang lahir dari kerinduan mahasiswa dan muda-mudi untuk membawa terang Kristus di Kampung Susuk. Berdiri sejak tahun 1988, KMKS menjadi wadah persekutuan, pertumbuhan iman, serta pelayanan sosial yang menjangkau tidak hanya kalangan mahasiswa, tetapi juga masyarakat sekitar. Melalui ibadah rutin, doa bersama, penginjilan, dan kegiatan sosial, KMKS hadir sebagai bentuk nyata kasih Tuhan yang terus bekerja di tengah-tengah pergumulan dan tantangan zaman, menjadi sarana bagi generasi muda untuk bertumbuh dan melayani bersama</p>
                                    </div>
                                    <div class="button home_button">
                                        <a href="#">GESER>></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image: url({{ asset('img/slide/jam_doa_kmks.jpg') }})"></div>
                <div class="home_content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content_inner">
                                    <div class="home_title"><h1>Ibadah Jam Doa</h1></div>
                                    <div class="home_text">
                                        <p></p>
                                    </div>
                                    <div class="button home_button">
                                        <a href="{{ url('jadwal') }}">_belum jadi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{ asset('img/slide/kebaktian_kmks.jpg') }})"></div>
                <div class="home_content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content_inner">
                                    <div class="home_title"><h1>Ibadah Kebaktian</h1></div>
                                    <div class="home_text">
                                        <p>..</p>
                                    </div>
                                    <div class="button home_button">
                                        <a href="{{ url('jadwal') }}">_Belum jadi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Progress -->
        <div class="home_slider_progress"></div>
    </div>
</div>

<!-- 3 Boxes -->
<section id="contact" class="wow fadeInUp">
    <div class="boxes">
        <div class="container">
            <div class="row">
                
                <!-- Box -->
                <div class="col-lg-12 box_col">
                    <div class="box working_hours">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="{{ asset('images/alarm-clock.svg') }}" alt=""></div></div>
                        <div class="box_title">DATANG DAN HADIRLAH</div>
                        <div class="working_hours_list">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <h3><div>Ibadah Jam Doa setiap hari sabtu, 19.30 WIB</div></h3>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <h3><div>Ibadah Kebaktian setiap hari minggu, 19.30 WIB</div><br></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="contact" class="wow fadeInUp">
    <div class="about">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-7">
                    <div class="about_content">
                        <div class="section_title"><h2>Renungan hari ini</h2></div>
                        @if($renunganHariIni)
                        <div class="about_text">
                            <h4 align="justify-content-center">{{ $renunganHariIni->judul }}</h4>
                        </div>
                        <div class="button about_button">
                            <a href="{{ url('renungan') }}">{{ $renunganHariIni->ayat }}</a>
                        </div>
                        @else
                        <div class="about_text" style="padding: 20px; background-color: #f8f9fa; color: #6c757d; border-radius: 8px; border-left: 4px solid #17a2b8; margin-top: 20px;">
                            <h4 style="margin-bottom: 0; font-style: italic;">Renungan hari ini belum diupload</h4>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5">
                    <div class="about_image"><img src="{{ asset('img/slide/alkitab.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="wow fadeInUp">
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h2>Kegiatan Minggu Ini</h2></div>
                </div>
            </div>
            <div class="row services_row">
                <!-- Service -->
                @foreach($jadwals as $data)
                <div class="col-lg-4 col-md-6 service_col">
                    <div class="service text-center trans_200" @if($data->flyer) style="background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('{{ asset('img/blog/' . $data->flyer) }}'); background-size: cover; background-position: center; border-radius: 8px;" @endif>
                        <div class="service_icon"><img class="svg" src="{{ asset('images/alarm-clock.svg') }}" alt=""></div>
                        <div class="service_title trans_200"><strong>{{ $data->kategori }}</strong></div>
                        <div class="service_text">
                            <div class="service_title trans_200">{{ $data->judul }}</div>
                        </div>
                        <div class="button dept_button"><a href="{{ url('jadwal/' . $data->id) }}">Selengkapnya</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<div class="cta">
    <div class="cta_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/slide/salib_digunung.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cta_content text-center">
                    <h2>Datang dan Hadirilah</h2>
                    @if($jadwalTerdekat)
                    <p>{{ $jadwalTerdekat->judul }}</p>
                    <div class="button cta_button"><a href="{{ url('jadwal/' . $jadwalTerdekat->id) }}">Selengkapnya</a></div>
                    @else
                    <p>Belum ada jadwal terbaru</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/custom.js') }}"></script>
@endpush
@endsection