@extends('layouts.front')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/elements.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/elements_responsive.css') }}">
@endpush

@section('content')
<!-- Head Extra specific to this page can go here if needed, or just relying on layout is fine. We will just output the content body -->
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/slide/kebersamaan1.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Profil <span>Kebaktian Muda-Mudi Kampung Susuk</span></div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li>Profil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Accordions & Tabs -->
<div class="accordions_tabs">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title"><h2>Profil KMKS</h2></div>
            </div>
        </div>

        <div class="row accordions_tabs_row">
            <div class="col-lg-12">
            
                <!-- Accordions -->
                <div class="accordions">
                    
                    <div class="elements_accordions">
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active"><div>SEJARAH KMKS</div></div>
                            <div class="accordion_panel">
                                <ul>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Berbicara tentang sejarah KMKS, kita tidak pernah lepas dari pertolongan Tuhan yang sampai saat ini KMKS bisa berumur 36 tahun, itu semua karna berkat anugrah dan kemurahan Tuhan. Pelayanan ini dimulai oleh Persekutuan yang diadakan oleh beberapa orang diantaranya Bang Umar, Bang Rikardo, Bang Kristofanus di kos susuk ujung no.35 namun hanya terbatas untuk kos kos-an dan diadakan satu kali dalam sebulan seiring berjalannya waktu, timbul kerinduan mengadakan Persekutuan mahasiswa sekampung susuk dengan pergumulan yang Panjang maka tanggal 9 Oktober 1998 diadakanlah Persekutuan mahasiswa pertama kali di susuk 2 yang dilayani Bang Surya Sembiring. Ditengah-tengah ibadah yang berjalan, Bang Surya menantang jemaat untuk terbeban sebagai pengurus Bg Herman mengangkat tangan sebagai koodinator, Bg Jatiran sebagai sekretaris, Kak Arimurty sebagai bendahara dan terbentuk lah Persekutuan dengan nama KMKS.</p>
                                        </div>
                                        <div class="image-container" style="border: 8px double gray;">
                                            <img src="{{ asset('img/sejarah/sejarah1.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Visi dan kerinduan melihat kampung susuk dimenangkan untuk Tuhan, tidak hanya mahasiswa saja, namun juga muda-mudi setempat. Bersama kakak abang tersebut mengaktifkan kembali PMKS yang sudah ada sebelumnya sehingga dibentuklah kepengurusan PMKS dengan ketua Daud Surbakti dan KMKS pun dimasukkan kedalah wadah KMKS sebagai seksi kerohanian. Sayangnya PMKS tidak bertahan lama namun kerinduan kakak abang terdahulu dan lainnya untuk bersekutu tetap besar sehingga dengan terus bertekun dalam doa ditengah pergumulan yang ada, abang kakak terdahulu sepakat untuk menjadikan seksi kerohanian menjadi wadah yang mandiri yakni dengan nama KMKS (Kebaktian Muda/i Kampung Susuk).</p>
                                        </div>
                                        <div class="image-container" style="border: 8px double gray;">
                                            <img src="{{ asset('img/sejarah/sejarah2.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="image-container" style="border: 8px double pink;">
                                            <img src="{{ asset('img/sejarah/sejarah3.jpg') }}" width="100%">
                                        </div>
                                        <div class="text-container">
                                            <p>Sekretariat KMKS untuk pertama kali berada di susuk 2 nomor 4 yaitu kos Bang Surya Sembiring. Pada periode ini pun pengurus yang masih terdiri dari BPH, Komisi Kebaktian, dan Hubungan Masyarakat dibina oleh Bang Surya sebagai pemimpin Rohani. Sekitar tahun 1990, sekretariat KMKS kemudian dipindah ke Susuk 5, No.2 di lantai 2 yang merupakan rumah Pak Paulus Tarigan, sedangkan lantai 1 dijadikan rumah tempat tinggal keluarga Pak Paulus</p>
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Bersyukur bagi Allah sang pemilik pelayanan yang terus menaru beban pada para Pembina KMKS yang terus mendukung yaitu Pak Paulus Tarigan pada periode pertama, diikuti oleh Pak Stefanus pada periode ke-6 dan Pak Randi pada periode ke-9. Ditengah-tengah pergumulan yang ada seperti Okultisme, Kriminalitas, Perjudian, dan bahkan pemutaran film porno, abang kakak terdahulu terus berjuang dalam doa, air mata dan kegigihan yang terus mewarnai hari-hari pelayanan mereka</p>
                                        </div>
                                        <div class="image-container" style="border: 8px double aqua;">
                                            <img src="{{ asset('img/sejarah/sejarah_pembina.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Sehingga atas kemurahan Tuhan, sekitar bulan Mei 1989 diadakan KKR pertama di Kampung Susuk Bersama rombongan mahasiswa dari ITA, Bandar Baru, yang dipimpin oleh rector pendeta H. Sitorus. Beberapa pelayanan terus dikerjakan yaitu perayaan Paskah dan Natal sejak periode kedua sampai saat ini. Sejak awal pelayanan, KMKS terus bersama-sama melayani masyarakat kampung susuk dalam kegiatan-kegiata seperti acara sosial dan mengajar anak-anak.</p>
                                        </div>
                                        <div class="image-container" style="border: 8px double #e8cab0;">
                                            <img src="{{ asset('img/sejarah/sejarah_event.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="image-container" style="border: 8px double lightblue;">
                                            <img src="{{ asset('img/sejarah/covid1.jpg') }}" width="100%">
                                        </div>
                                        <div class="text-container">
                                            <p>Tahun demi tahun berlalu, pelayanan KMKS terus berjalan hingga pada Maret 2020 Covid 19 menjalar ke Indonesia. Setelah menyerang berbagai negara di Dunia, tanpa diduga hal tersebut berdampak besar terhadap pelayanan KMKS. Dimulai dari K-31 yang tidak dapat mengerjakan pelayanan sebagaimana biasanya sehingga sempat terjadi kekosongan pelayanan akibat terbatasnya ruang untuk bertemu. Dunia Pendidikan, pekerjaan, bahkan ekonomi terdampak oleh pandemi dimana tidak diperbolehkannya untuk berinteraksi secara langsung, diberlakukannya PPKM dan seluruh kegiatan yang menimbulkan kerumunan ditiadakan, akibatnya tidak ada kegiatan pelayanan yang dilakukan.</p>
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Kemudian K-31 berinisiatif untuk melakukan kegiatan pelayanan secara online yang dimulai dengan kebaktian yang disiarkan secara langsung melalui platform Instagram, namun hal ini juga masih menyulitkan untuk melakukan pelayanan di KMKS bahkan untuk melakukan regenerasi, sehingga regenerasi pada periode selanjutnya terlambat. Terpujilah Tuhan atas pertolongannya sehingga regenerasi dapat dilakukan, banyak penyesuaian yang dilakukan oleh pengurus di K-32, mulai dari kebaktian, jam doa, bahkan penginjilan yang masih terus berlanjut hingga saat ini. Pandemi sudah mulai ditanggulangi dengan adanya vaksinasi, kemudian kegiatan ekonomi, pendidikan dan lain-lain sudah mulai berjalan dengan normal dengan menaati protocol kesehatan. Sehingga pada periode K-34, pelayanan di KMKS sudah mulai dilaksanakan secara offline.</p>
                                        </div>
                                        <div class="image-container" style="border: 8px double black;">
                                            <img src="{{ asset('img/sejarah/covid2.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="text-container">
                                            <p>Biarpun pelayanan ini seperti terasa memulai kembali dari awal dengan penyesuaian yang terus dilakukan, namun kasih setia Tuhan terus menolong pelayanannya di KMKS. Pelayanan demi pelayanan terus dilakukan, seiring berjalannya waktu Persekutuan KMKS tumbuh dan terus menyebar kasih dan cinta <br>
                                            Terpujilah Tuhan tahun 2025 ini genaplah umur KMKS 37 Tahun, begitu banyak kasih yang sudah ditabur oleh anak Tuhan hingga saat ini KMKS boleh menjadi wadah bagi kita untuk bertumbuh sampai saat ini. Terpujilah Tuhan karena kesetiaannya menolong KMKS, sehingga KMKS boleh bangkit dari keterpurukan pandemi. Bersyukur untuk orang-orang yang terus memberi diri untuk pelayanan ini, mari dimanapun kita sebagai orang yang sudah merasakan kasih Tuhan, kita boleh terus menabur kasih, menabur dan terus menabur hingga damai sejahtera ada didalam diri kita, keluarga kita dan sekitar kita.
                                            </p>
                                        </div>
                                        <div class="image-container" style="border: 8px double green;">
                                            <img src="{{ asset('img/sejarah/fotok37.jpg') }}" width="100%">
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div>
                                            <p>Terpujilah Tuhan tahun 2025 ini genaplah umur KMKS 37 Tahun, begitu banyak kasih yang sudah ditabur oleh anak Tuhan hingga saat ini KMKS boleh menjadi wadah bagi kita untuk bertumbuh sampai saat ini. Terpujilah Tuhan karena kesetiaannya menolong KMKS, sehingga KMKS boleh bangkit dari keterpurukan pandemi. Bersyukur untuk orang-orang yang terus memberi diri untuk pelayanan ini, mari dimanapun kita sebagai orang yang sudah merasakan kasih Tuhan, kita boleh terus menabur kasih, menabur dan terus menabur hingga damai sejahtera ada didalam diri kita, keluarga kita dan sekitar kita.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="content-item">
                                        <div class="image-container" style="border: 8px double red;">
                                            <img src="{{ asset('img/sejarah/sejarahlast1.png') }}" width="100%">
                                        </div>
                                        <div class="image-container" style="border: 8px double yellow;">
                                            <img src="{{ asset('img/sejarah/sejarahlast2.png') }}" width="100%">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Kepengurusan di KMKS</div></div>
                            <div class="accordion_panel">
                                <div>
                                    @if(isset($kepengurusans) && $kepengurusans->count() > 0)
                                        @foreach($kepengurusans as $kepengurusan)
                                            <details style="margin-bottom: 12px; cursor: pointer;" ontoggle="var panel = this.closest('.accordion_panel'); if(panel && panel.style.maxHeight !== '0px') { panel.style.maxHeight = panel.scrollHeight + 'px'; }">
                                                <summary style="font-weight: bold; outline: none; padding: 5px 0;">{{ $kepengurusan->nama }}</summary>
                                                @if($kepengurusan->penjelasan)
                                                    <p style="padding-left: 15px; margin-top: 5px; color: #555; margin-bottom: 5px;">{{ $kepengurusan->penjelasan }}</p>
                                                @endif
                                            </details>
                                        @endforeach
                                    @else
                                        <p>Belum ada data kepengurusan.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center"><div>Nama-nama Pengurus Persekutuan</div></div>
                            <div class="accordion_panel">
                                <div>
                                    @if(isset($penguruses) && $penguruses->count() > 0)
                                        @foreach($penguruses as $divisi => $anggota_pengurus)
                                            <div style="background-color: #f0f0f0; padding: 6px 12px; border-radius: 4px; margin-bottom: 10px;">
                                                <strong> {{ $divisi ?: 'Lainnya' }} </strong>
                                            </div>
                                            <div style="padding-left: 15px; margin-bottom: 15px;">
                                                @foreach($anggota_pengurus as $pengurus)
                                                    <p style="margin-bottom: 4px;"> {{ $pengurus->nama }} <span style="color: #666;">- {{ $pengurus->jabatan }}</span></p>
                                                @endforeach
                                            </div>
                                            @if(!$loop->last)
                                                <hr>
                                            @endif
                                        @endforeach
                                    @else
                                        <p>Belum ada data pengurus.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        
        </div>
    </div>
</div>

<!-- Milestones -->
<div class="milestones">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title"><h2>PROGRES</h2></div>
            </div>
        </div>
        <div class="row milestones_container">
                        
            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ asset('images/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="37+">0</div>
                    <div class="milestone_text">Tahun</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ asset('images/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="28+">0</div>
                    <div class="milestone_text">KK&KPIPA</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ asset('images/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="81+">0</div>
                    <div class="milestone_text">AKK</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ asset('images/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="32+">0</div>
                    <div class="milestone_text">Ak-PIPA</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

@push('scripts')
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('js/elements.js') }}"></script>
@endpush

@endsection