@extends('layouts.home')

@section('title', $contractor->name)

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">{{ $contractor->name }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                                <li class="breadcrumb-item"><a href="#">Kontraktor</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Kontraktor</li>
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

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">Solutions</h3>
                        <ul class="nav service-menu">
                            <li><a href="service-single.html">Home Construction</a></li>
                            <li class="active"><a href="service-single.html">Building Remodels</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Exterior Design</a></li>
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Safety Management</a></li>
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png"
                                    alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CEO, First Choice Group</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->

                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0">{{ $contractor->name }}</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <p>{!! $contractor->description !!}</p>

                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="/image/{{ $contractor->image }}"
                                alt="project-slider-image" />
                        </div>


                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">

                            <p>{!! $contractor->detail !!}</p>

                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3 class="column-title-small">Yang Perlu Diketahui</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Apakah SOP mengharuskan penggunaan helm pengaman (safety helmet) di
                                                lokasi konstruksi?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Ya, Di Dalam SOP (Standar Operasional Prosedur) mengharuskan penggunaan helm
                                            pengaman (safety helmet) di lokasi konstruksi. Helm pengaman merupakan
                                            bagian penting dari upaya untuk menjaga keselamatan dan kesehatan para
                                            pekerja di industri konstruksi. Tujuannya adalah melindungi pekerja dari
                                            cedera kepala yang dapat disebabkan oleh benda jatuh, tumbukan, atau
                                            benturan lainnya di lokasi konstruksi.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Apa persyaratan pertolongan pertama untuk lokasi/area kerja?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Persyaratan pertolongan pertama untuk lokasi/area kerja meliputi beberapa
                                            hal. Pertama, lokasi kerja harus dilengkapi dengan kotak pertolongan pertama
                                            yang terisi peralatan yang memadai. Kedua, setidaknya satu atau beberapa
                                            anggota tim di lokasi kerja harus memiliki pelatihan pertolongan pertama
                                            yang memadai. Ketiga, pemberitahuan tentang lokasi kotak pertolongan pertama
                                            dan nomor darurat harus ditempatkan dengan jelas. Keempat, pihak pengelola
                                            atau pemilik proyek harus melakukan evaluasi risiko dan mengembangkan
                                            rencana penanganan darurat. Terakhir, pemantauan kesehatan dan pencatatan
                                            kejadian kecelakaan juga harus dilakukan di lokasi kerja. Memastikan
                                            pemenuhan persyaratan pertolongan pertama merupakan bagian penting dalam
                                            menjaga keselamatan dan kesejahteraan di lingkungan kerja.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Apa Itu Pengawas Konstruksi?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Merupakan seseorang yang ditunjuk untuk mengawasi pelaksanaan proyek
                                            konstruksi, memeriksa kualitas pekerjaan, memastikan kepatuhan terhadap
                                            standar dan spesifikasi, serta memonitor keselamatan kerja di lokasi
                                            konstruksi.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Accordion end -->
                        </div>
                    </div>
                    <!--2nd row end -->

                    <div class="gap-40"></div>

                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">Tertarik dengan Layanan ini?</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="{{ url('contact') }}">Kontak Kami</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->

                </div><!-- Content inner end -->
            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection