@extends('layouts.home')

@section('title', 'Kontraktor')


@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Kontraktor</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                                <li class="breadcrumb-item"><a href="#">Kontraktor</a></li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container pb-2">
    <div class="container">
        <div class="row">
            @foreach($contractors as $contractor)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box service-image">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" src="image/{{ $contractor->image }}" alt="service-image">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title">{{ $contractor->name }}</h3>
                        <p>{!! Str::limit($contractor->description, 50) !!}</p>
                        <a class="learn-more d-inline-block" href="contractor/detail/{{ $contractor->slug }}"
                            aria-label="service-details"><i class="fa fa-caret-right"></i> Selengkapnya</a>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->
            @endforeach



            <nav class="paging" aria-label="Page navigation example">
                {{ $contractors->links() }}
            </nav>

            {{-- <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/service6.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="service-single.html">SAFETY MANAGEMENT</a></h3>
                            <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                looking for talent like. Lorem ipsum dolor suscipit.</p>
                            <a class="learn-more d-inline-block" href="service-single.html"
                                aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                        </div>
                    </div>
                </div><!-- Service3 end -->
            </div><!-- Col 6 end --> --}}

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection