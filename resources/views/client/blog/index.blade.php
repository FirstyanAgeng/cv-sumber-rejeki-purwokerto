@extends('layouts.home')

@section('title', 'Berita Perusahaaan')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('fe-2/images/banner/banner2.jpg') }})">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Berita</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Berita</a></li>
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

            <div class="col-lg-8 mb-5 mb-lg-0">
                @foreach($blogs as $blog)
                <div class="post">
                    <div class="post-media post-image">
                        <img loading="lazy" src="/image/{{ $blog->image_1 }}" class="img-fluid" alt="post-image">
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-author">
                                    <i class="far fa-user"></i>{{ $blog->author->name }}
                                </span>
                                <span class="post-cat">
                                    <i class="far fa-folder-open"></i><a href="#">{{ $blog->subtitle }}</a>
                                </span>
                                <span class="post-meta-date"><i class="far fa-calendar"></i>{{ date("d M Y",
                                    strtotime($blog->created_at))
                                    }}</span>

                            </div>
                            <h2 class="entry-title">
                                <a href="news-single.html">{{ $blog->title }}</a>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>{!! Str::limit($blog->content, 300) !!}</p>
                        </div>

                        <div class="post-footer">
                            <a href="/blog/detail/{{ $blog->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 1st post end -->
                @endforeach



                <nav class="paging" aria-label="Page navigation example">
                    {{ $blogs->links() }}
                </nav>


            </div><!-- Content Col end -->

            <div class="col-lg-4">

                <div class="sidebar sidebar-right">
                    <div class="widget recent-posts">
                        <h3 class="widget-title">Berita Terkini</h3>
                        <ul class="list-unstyled">
                            @foreach($latest_blog as $latest)
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="/image/{{ $latest->image_1 }}"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="/blog/detail/{{ $latest->slug }}">{{ $latest->title }}</a>
                                    </h4>
                                </div>
                            </li><!-- 1st post end-->
                            @endforeach

                            {{--
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news3.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                                    </h4>
                                </div>
                            </li><!-- 3rd post end--> --}}

                        </ul>

                    </div><!-- Recent post end -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Commercial</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Safety</a></li>
                            <li><a href="#">Structure</a></li>
                        </ul>
                    </div><!-- Categories end -->

                    <div class="widget">
                        <h3 class="widget-title">Archives </h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">Feburay 2016</a></li>
                            <li><a href="#">January 2016</a></li>
                            <li><a href="#">December 2015</a></li>
                            <li><a href="#">November 2015</a></li>
                            <li><a href="#">October 2015</a></li>
                        </ul>
                    </div><!-- Archives end -->

                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags </h3>

                        <ul class="list-unstyled">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Safety</a></li>
                            <li><a href="#">Contracting</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div><!-- Tags end -->


                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

@endsection