@extends('layouts.home')

@section('title', 'Perdagangan Umum')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Perdagangan Umum</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                                <li class="breadcrumb-item"><a href="#">Perdagangan Umum</a></li>
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

            @foreach($trades as $trade)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box service-image">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" src="image/{{ $trade->image }}" alt="service-image">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title">{{ $trade->name }}</h3>
                        <p>{!! Str::limit($trade->description, 50) !!}</p>
                        <a class="learn-more d-inline-block" href="trade/detail/{{ $trade->slug }}"
                            aria-label="service-details"><i class="fa fa-caret-right"></i> Selengkapnya</a>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->
            @endforeach

            {{-- pagination --}}
            <nav class="paging" aria-label="Page navigation example">
                {{ $trades->links() }}
            </nav>
            {{-- end pagination --}}

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection