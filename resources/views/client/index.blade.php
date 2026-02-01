@extends('layouts.home')

@section('title', 'Beranda')

@section('content')

<div class="banner-carousel banner-carousel-2 mb-0">
    @foreach($sliders as $banner)
    <div class="banner-carousel-item" style='background-image:url("image/{{ $banner->image }}")'>
        <div class="container">
            <div class="box-slider-content">
                <div class="box-slider-text">
                    <h3 class="box-slide-sub-title">{{ $banner->title }}</h3>
                    <p class="box-slide-description">{{ $banner->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<section id="ts-features" class="ts-features pb-2">
    <div class="container">

        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
                <div class="row">

                    <div class="col-6">
                        <img loading="lazy" class="w-100" src="{{ asset('front-end/assets/img/tentang-hero.png') }}"
                            alt="service-image">
                    </div>
                    <div class="col-6 d-flex align-item-center flex-column pt-5">
                        <h3 class="service-box-title">Tentang Kami
                        </h3>
                        <p>CV Sumber rejeki adalah suatu perusahaan yang bergerak di bidang projek konstruksi dan jasa
                            pengadaan barang serta kemauan untuk membentuk sebuah perusahaan yang profesional dan bisa
                            diandalkan </p>
                        <div>
                            <a class="btn btn-primary" href="{{ url('about') }}">Selengkapnya</a>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Service1 end -->


    </div><!-- Container end -->
</section><!-- Feature are end -->
<div class="container">

    <hr style="border: 1px solid black">
</div>

<section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{ asset('fe-2/images/services/service1.jpg')}}"
                            alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon1.png') }}"
                                alt="service-icon" />
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title">KONSTRUKSI UMUM
                            </h3>
                            <p style="text-align: justify">
                                Membangun keseluruhan bangunan yang terdiri dari bagian-bagian struktur. Misal,
                                Konstruksi Struktur Bangunan adalah bentuk/bangun secara keseluruhan dari struktur
                                bangunan, atau Konstruksi Jalan Raya, Konstruksi Jembatan, Konstruksi Pelabuhan Udara
                                dan Laut , dan lain lain.
                            </p>

                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{ asset('fe-2/images/services/service2.jpg')}}"
                            alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon2.png')}}"
                                alt="service-icon" />
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title">KONSULTAN PENGAWAS
                            </h3>
                            <p style="text-align: justify">
                                Bertanggung jawab mengawasi dan memastikan pelaksanaan proyek konstruksi berjalan sesuai
                                dengan perencanaan, spesifikasi, peraturan, dan standar yang telah ditetapkan. Bertujuan
                                untuk memastikan bahwa proyek konstruksi berjalan lancar,
                                sesuai dengan jadwal, anggaran, dan kualitas yang diharapkan.
                            </p>

                        </div>
                    </div>
                </div><!-- Service2 end -->
            </div><!-- Col 2 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{ asset('fe-2/images/services/service3.jpg')}}"
                            alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon3.png')}}"
                                alt="service-icon" />
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="service-single.html">DESAIN INTERIOR</a></h3>
                            <p style="text-align: justify">Penuangan ide dan gagasan atas pelaksanaan pekerjaan yang
                                sifatnya perubahan suasana
                                bagian dalam bangunan (rumah, kantor, dll.). Dengan memperhatikan atas fungsi ruangan,
                                serta kemampuan keuangan menuju tampilan/suasana ruangan yang lebih hidup dan berkarya
                                citra seni.</p>

                        </div>
                    </div>
                </div><!-- Service3 end -->
            </div><!-- Col 3 end -->
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->




<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="facts-wrapper">
            <div class="row">
                <div class="col-md-3 col-sm-6 ts-facts">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/fact1.png') }}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="70">0</span></h2>
                        <h3 class="ts-facts-title">Total Projek</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/fact2.png') }}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                        <h3 class="ts-facts-title">
                            Anggota Staff</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/fact3.png') }}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="3000">0</span></h2>
                        <h3 class="ts-facts-title">Jam Kerja</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/fact4.png') }}" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="40">0</span></h2>
                        <h3 class="ts-facts-title">
                            Lokasi</h3>
                    </div>
                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Kami merupakan spesialis dalam</h2>
                <h3 class="section-sub-title">Bidang yang kami lakukan</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon1.png')}}"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title">Konstruksi Umum</h3>
                        <p>
                            Kami memberikan solusi inovatif dan berkualitas tinggi untuk proyek
                            konstruksi Anda. Bersama kami, visi Anda akan diwujudkan dengan presisi dan ketepatan,
                            membangun masa depan yang solid dan berkelanjutan.</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon2.png')}}"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title">Pembangunan Gedung</h3>
                        <p>proses konstruksi fisik untuk mendirikan bangunan baru. Proses ini mencakup serangkaian
                            langkah yang melibatkan perencanaan, desain, pembangunan, dan penyelesaian sebuah gedung
                            sesuai dengan spesifikasi yang telah ditentukan. </p>
                    </div>
                </div><!-- Service 2 end -->

                {{-- <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon3.png')}}"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title">Desain Interior</h3>
                        <p>Proses perancangan ruang dalam bangunan atau lingkungan untuk menciptakan lingkungan
                            fungsional, estetis, dan nyaman. Desainer interior bertanggung jawab menciptakan ruang
                            sesuai kebutuhan dan preferensi klien dengan mempertimbangkan elemen desain seperti warna,
                            tekstur, pencahayaan, dan bahan.</p>
                    </div>
                </div><!-- Service 3 end --> --}}

            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="{{ asset('fe-2/images/services/service-center.jpg')}}"
                    alt="service-avater-image">
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                {{-- <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-icon4.png')}}"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title">Desain Eksterior</h3>
                        <p> proses perancangan dan penataan elemen-elemen visual di luar bangunan atau lingkungan untuk
                            menciptakan tampilan fisik dan estetika yang menarik dan sesuai dengan tujuan dan identitas
                            bangunan tersebut.</p>
                    </div>
                </div><!-- Service 4 end --> --}}

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-ic')}}on5.png"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Rehabilitasi Bangunan</a></h3>
                        <p>
                            Rehabilitasi bangunan adalah proses perbaikan dan pemulihan bangunan rusak agar dapat
                            digunakan kembali dengan efisien dan aman. Tujuannya adalah memperpanjang usia bangunan,
                            mengembalikan fungsionalitasnya, dan menjaga nilai historis atau arsitekturalnya.</p>
                    </div>
                </div><!-- Service 5 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('fe-2/images/icon-image/service-ic')}}on6.png"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Manajemen Keselamatan</a></h3>
                        <p>
                            Manajemen keselamatan berfokus pada penerapan strategi dan prosedur untuk menjaga tempat
                            kerja atau kegiatan bebas dari risiko dan aman. Tujuannya adalah melindungi kesehatan dan
                            keselamatan pekerja, pengunjung, dan orang lain yang terlibat.</p>
                    </div>
                </div><!-- Service 6 end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Karya Unggulan</h2>
                <h3 class="section-sub-title">Projek Terbaru Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">
                        Semua
                    </label>

                    <label for="government">
                        <input type="radio" name="shuffle-filter" id="government" value="government">Pemerintah
                    </label>
                    <label for="infrastructure">
                        <input type="radio" name="shuffle-filter" id="infrastructure"
                            value="infrastructure">Infrastruktur
                    </label>
                    <label for="residential">
                        <input type="radio" name="shuffle-filter" id="residential" value="residential">Perumahan
                    </label>
                    <label for="healthcare">
                        <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Kesehatan
                    </label>

                </div><!-- project filter end -->

                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($portofolios as $portofolio)
                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;{{ $portofolio->category }}&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="/image/{{ $portofolio->image }}" aria-label="project-img">
                                <img class="img-fluid" width="400" height="400" src="/image/{{ $portofolio->image }}"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="portofolio/detail/{{ $portofolio->slug }}">{{ $portofolio->title }}</a>
                                    </h3>
                                    <p class="project-cat">{{ $portofolio->category }}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 2 end -->
                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('fe-2/images/projects/project3.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('fe-2/images/projects/project3.jpg') }}"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">TNT East Facility</a>
                                    </h3>
                                    <p class="project-cat">Government</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 3 end --> --}}

                    {{-- <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('fe-2/images/projects/project4.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('fe-2/images/projects/project4.jpg') }}"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Narriot Headquarters</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 4 end --> --}}
                    {{--
                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('fe-2/images/projects/project5.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('fe-2/images/projects/project5.jpg') }}"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Kalas Metrorail</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 5 end --> --}}
                    {{--
                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('fe-2/images/projects/project6.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('fe-2/images/projects/project6.jpg') }}"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Ancraft Avenue House</a>
                                    </h3>
                                    <p class="project-cat">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 6 end --> --}}
                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">Selengkapnya</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">TESTIMONIALS</h3>

                <div id="testimonial-slide" class="testimonial-slide">
                    @foreach($testimonials as $testimoni)
                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                {{ $testimoni->description }}
                            </span>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="/image/{{ $testimoni->image }}"
                                    alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">{{ $testimoni->title }}</h3>
                                    <span class="quote-subtext">{{ $testimoni->subtitle }}</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->
                    </div>
                    <!--/ Item 1 end -->
                    @endforeach

                </div>
                <!--/ Testimonial carousel end-->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <h3 class="column-title">MITRA KAMI</h3>

                <div class="row all-clients">
                    @foreach($clients as $client)
                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="image/{{ $client->image }}"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 1 end -->
                    @endforeach
                    {{-- <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid"
                                    src="{{ asset('fe-2/images/clients/client2.png') }}" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 2 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid"
                                    src="{{ asset('fe-2/images/clients/client3.png') }}" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 3 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid"
                                    src="{{ asset('fe-2/images/clients/client4.png') }}" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 4 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid"
                                    src="{{ asset('fe-2/images/clients/client5.png') }}" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 5 end --> --}}

                    {{-- <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid"
                                    src="{{ asset('fe-2/images/clients/client6.png') }}" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 6 end --> --}}

                </div><!-- Clients row end -->

            </div><!-- Col end -->

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="subscribe-call-to-acton">
                    <h3>Kontak kami</h3>
                    <h4>081246280574 / 081542688017</h4>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-4">
                <div class="ts-newsletter row align-items-center">
                    <div class="col-md-12 newsletter-introtext">
                        <h4 class="text-white mb-0">Melayani Selama 24 Jam</h4>
                        <p class="text-white">Memberikan pelayanan terbaik</p>
                    </div>
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Blog Terkini</h2>
                <h3 class="section-sub-title">Berita Terbaru Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="/blog/detail/{{ $blog->slug }}" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="/image/{{ $blog->image_1 }}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="/blog/detail/{{ $blog->slug }}" class="d-inline-block">{{ $blog->title
                                }}</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ date("d M Y",
                                strtotime($blog->created_at))
                                }}
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->
            @endforeach


        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="{{ url('blog') }}">Selengkapnya</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->

@endsection