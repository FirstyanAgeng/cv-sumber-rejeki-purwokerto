@extends('layouts.home')

@section('title', 'Tentang Kami')

@section('content')
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">TENTANG KAMI</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>CV Sumber rejeki adalah suatu perusahaan yang bergerak di bidang projek konstruksi dan jasa pengadaan
                    barang serta kemauan untuk membentuk sebuah perusahaan yang profesional dan bisa diandalkan </p>
                <blockquote>
                    <p>Perusahaan konstruksi dan perdagangan umum adalah fondasi yang membangun masa depan,
                        menghubungkan impian dengan kenyataan, dan memperkuat masyarakat melalui pembangunan yang
                        berkelanjutan.</p>
                </blockquote>
                <p>
                    Kami berharap dari berbagai pihak bersedia memberikan peluang untuk berkembang dengan memberikan
                    kesempatan untuk
                    membantu sekaligus sebagai mitra kerja aktif dalam setiap usaha pembangunan yang ditangani sesuai
                    dengan bidang, spesialisasi, dan kemampuan yang dimiliki.
                </p>

            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <div id="page-slider" class="page-slider small-bg">

                    <div class="item" style="background-image:url({{ asset('front-end/assets/img/lokasi.png') }})">

                    </div><!-- Item 1 end -->
                    <div class="item"
                        style="background-image:url({{ asset('front-end/assets/img/home-image-1.png') }})">

                    </div><!-- Item 1 end -->
                    <div class="item"
                        style="background-image:url({{ asset('front-end/assets/img/truk-merah-01.png') }})">

                    </div><!-- Item 1 end -->

                    {{-- <div class="item"
                        style="background-image:url({{ asset('fe-2/images/slider-pages/slide-page2.jpg') }})">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Relasi</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end -->

                    <div class="item"
                        style="background-image:url({{ asset('fe-2/images/slider-pages/slide-page3.jpg') }})">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Performa</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end --> --}}
                </div><!-- Page slider end-->


            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->


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

<section id="ts-team" class="ts-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Quality Service</h2>
                <h3 class="section-sub-title">Susunan Pengurus</h3>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    @foreach($teams as $tim)
                    <div class="col my-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="/image/{{ $tim->image }}" alt="..." />
                            <h5 class="fw-bolder">{{ $tim->title }}</h5>
                            <div class="fst-italic text-muted">{{ $tim->description }}</div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!--/ Title row end -->


        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">Kami memahami kebutuhan anda</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="{{ url('contact') }}">Pesan Sekarang</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->
<section id="ts-team" class="ts-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="title">

                    <h2 class="section-title">Quality Service</h2>
                    <h3 class="section-sub-title">Struktur Organisasi</h3>
                </div>
                <div class="image">
                    <img src="image/{{ $about->image }}" alt="" style="width: 100%; height:100%">
                </div>

                {{-- <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center"> --}}
                    {{--
                </div> --}}
            </div>
        </div>
        <!--/ Title row end -->


        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Team end -->
@endsection