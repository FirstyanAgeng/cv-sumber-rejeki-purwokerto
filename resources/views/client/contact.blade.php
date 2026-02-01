@extends('layouts.home')

@section('title', 'Kontak')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Kontak</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="#">KOntak</a></li>
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

        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Kunjungi Kantor Kami</h2>
                <h3 class="section-sub-title">Temukan Lokasi Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fas fa-map-marker-alt mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Alamat Kantor</h4>
                        <p>{{ $contact->alamat }}</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->


            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Email Kami</h4>
                        <p>{{ $contact->email }}</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-phone-square mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Kontak Kami</h4>
                        <p>{{ $contact->telepon_1 }} / {{ $contact->telepon_2 }}</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->


        </div><!-- 1st row end -->

        <div class="gap-40"></div>

        <iframe src="https://www.google.com/maps/embed?pb={{ $contact->maps_embed }}" width="100%" height="400px"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="gap-40"></div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="column-title">Hubungi Kami</h3>
                <!-- contact form works with formspree.io  -->
                <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                <form action="{{ route('inbox.send') }}" method="POST" role="form">
                    @csrf

                    @if (session('success'))
                    {{-- <div class="alert alert-success">
                        {!! session('success') !!}
                    </div> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                    class="form-control form-control-name @error('name') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Masukan Nama anda" name="name" />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control form-control-email @error('email') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Enter Your Email" name="email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No. Handphone</label>
                                <input type="number"
                                    class="form-control form-control-subject @error('handphone') is-invalid @enderror"
                                    id="telephone" placeholder="Enter Phone Number" name="handphone" />
                                @error('handphone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message @error('message') is-invalid @enderror"
                            id="exampleFormControlTextarea1" rows="7" name="message"></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Kirim Pesan</button>
                    </div>
                </form>
            </div>

        </div>



        <div class="gap-60"></div>
        {{-- <img src="/image/{{ $contact->image }}" alt="" class="img-fluid" style="width: 100%">
        <div class="gap-40"></div> --}}


    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<script>
    // Fungsi untuk menutup alert secara otomatis setelah 5 detik
    setTimeout(function(){
        $(".alert").alert('close');
    }, 3000);
</script>
@endsection