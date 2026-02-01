@extends('layouts.home')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">{{ $portofolio->title }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Portofolio</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail Portofolio</a></li>
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
            <div class="col-lg-8">
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item">
                        <img loading="lazy" class="img-fluid" src="/image/{{ $portofolio->image }}"
                            alt="project-image" />
                    </div>

                    {{-- <div class="item">
                        <img loading="lazy" class="img-fluid" src="images/projects/project4.jpg" alt="project-image" />
                    </div> --}}
                </div><!-- Page slider end -->
            </div><!-- Slider col end -->

            <div class="col-lg-4 mt-5 mt-lg-0">

                <h3 class="column-title mrt-0">{{ $portofolio->title }}</h3>
                <p>{!! $portofolio->description !!}</p>

                <ul class="project-info list-unstyled">
                    <li>
                        <p class="project-info-label">Pengguna Jasa</p>
                        <p class="project-info-content">{!! $portofolio->detail !!}</p>
                    </li>

                    <li>
                        <p class="project-info-label">Lokasi</p>
                        <p class="project-info-content">{{ $portofolio->lokasi }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Tanggal</p>
                        <p class="project-info-content">{{ $portofolio->tanggal }}</p>
                    </li>
                    {{-- <li>
                        <p class="project-info-label">Size</p>
                        <p class="project-info-content">65,000 SF</p>
                    </li> --}}
                    <li>
                        <p class="project-info-label">Kategori</p>
                        <p class="project-info-content">{{ $portofolio->category }}</p>
                    </li>
                    {{-- <li>
                        <p class="project-link">
                            <a class="btn btn-primary" target="_blank" href="#">View Project</a>
                        </p>
                    </li> --}}
                </ul>

            </div><!-- Content col end -->

        </div><!-- Row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection