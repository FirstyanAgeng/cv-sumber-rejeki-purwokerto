@extends('layouts.home')

@section('title', 'Portofolio Projek')

@section('content')
<!-- header -->
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Portofolio</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="#">Portofolio</a></li>
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
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
                    </label>
                    <label for="commercial">
                        <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
                    </label>
                    <label for="education">
                        <input type="radio" name="shuffle-filter" id="education" value="education">Education
                    </label>
                    <label for="government">
                        <input type="radio" name="shuffle-filter" id="government" value="government">Government
                    </label>
                    <label for="infrastructure">
                        <input type="radio" name="shuffle-filter" id="infrastructure"
                            value="infrastructure">Infrastructure
                    </label>
                    <label for="residential">
                        <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
                    </label>
                    <label for="healthcare">
                        <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
                    </label>
                </div><!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($portofolios as $portofolio)
                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="image/{{ $portofolio->image }}">
                                <img class="img-fluid" width="400" height="400" src="image/{{ $portofolio->image }}"
                                    alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="portofolio/detail/{{ $portofolio->slug }}">{{ $portofolio->title }}</a>
                                    </h3>
                                    <p class="project-cat">{{ $portofolio->lokasi }}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 1 end -->
                    @endforeach

                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">View All Projects</a>
                </div>
            </div>

        </div><!-- Content row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection