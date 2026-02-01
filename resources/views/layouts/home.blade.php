<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | CV SUMBER REJEKI </title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CV Sumber Rejeki Konstruksi dan Perdagangan Umum">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  
    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="{{ asset('fe-2/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('fe-2/plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('fe-2/plugins/animate-css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('fe-2/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fe-2/plugins/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('fe-2/plugins/colorbox/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('fe-2/css/style.css') }}">
    <!-- initialize jQuery Library -->
    <script src="{{ asset('fe-2/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('fe-2/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('fe-2/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('fe-2/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('fe-2/plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('fe-2/plugins/shuffle/shuffle.min.js') }}" defer></script>

    <!-- Template custom -->
    <script src="{{ asset('fe-2/js/script.js') }}"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}


</head>

<body>
    <div class="body-inner">
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">CV Sumber Rejeki, Purwokerto</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                </a>
                                <a title="Twitter" href="https://twitter.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-twitter"></i></span>
                                </a>
                                <a title="Instagram" href="https://instagram.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                                </a>
                                <a title="Linkdin" href="https://github.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-github"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                <a class="d-block" href="index.html">
                                    <img loading="lazy" src="{{ asset('front-end/assets/img/logo-kuning-cv.svg') }}"
                                        alt="Constra">
                                </a>
                            </div><!-- logo end -->

                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Hubungi Kami</p>
                                                <p class="info-box-subtitle">081246280574 / 081542688017</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email</p>
                                                <p class="info-box-subtitle">rejekisumber016@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- Ul end -->
                            </div><!-- header right end -->
                        </div><!-- logo area end -->

                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div>

            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ url('/contractor') }}">Kontraktor</a></li>
                                                <li><a href="{{ url('/trade') }}">Perdagangan Umum</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/portfolio') }}">Portofolio</a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/blog') }}">Berita</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->

                    <div class="nav-search">
                        <span id="search"><i class="fa fa-search"></i></span>
                    </div><!-- Search end -->

                    <div class="search-block" style="display: none;">
                        <label for="search-field" class="w-100 mb-0">
                            <input type="text" class="form-control" id="search-field"
                                placeholder="Type what you want and enter">
                        </label>
                        <span class="search-close">&times;</span>
                    </div><!-- Site search end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->
        {{--
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">9051 Constra Incorporate, USA</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                </a>
                                <a title="Twitter" href="https://twitter.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-twitter"></i></span>
                                </a>
                                <a title="Instagram" href="https://instagram.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                                </a>
                                <a title="Linkdin" href="https://github.com/themefisher.com">
                                    <span class="social-icon"><i class="fab fa-github"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div> --}}
        <!--/ Topbar end -->
        {{--
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">

                                <div class="logo">
                                    <a class="d-block" href="index-2.html">
                                        <img loading="lazy" src="{{ asset('fe-2/images/logo.png') }}" alt="Constra">
                                    </a>
                                </div><!-- logo end -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav ml-auto align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link active"
                                                href="{{ url('about') }}">Tentang Kami</a>
                                        </li>




                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ url('contractor') }}">Contractor</a></li>
                                                <li><a href="{{ url('trade') }}">Perdagangan Umum</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item"><a class="nav-link active"
                                                href="{{ url('portfolio') }}">Portofolio</a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link active"
                                                href="{{ url('blog') }}">Berita</a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end --> --}}

        <div>
            @yield('content')
        </div>



        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">Tentang kami</h3>
                            <img loading="lazy" class="footer-logo" src="{{ asset('front-end/assets/img/logo-2.svg') }}"
                                alt="Constra">
                            <p>Merupakan perusahaan yang bergerak di bidang kontruksi dan perdagangan umum</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://github.com/themefisher" aria-label="Github"><i
                                                class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Jam Operasional</h3>
                            <div class="working-hours">
                                <p style="text-align: justify"> Kami bekerja setiap hari
                                    kecuali hari libur besar. Hubungi
                                    kami jika Anda memiliki kebutuhan konstruksi maupun perdagangan umum melalui telepon
                                    dan formulir kontak.
                                    Kami siap membantu Anda dengan cepat dan responsif.</p>

                                <br>Senin - Jumat: <span class="text-right">10:00 - 16:00 </span>
                                <br> Sabtu: <span class="text-right">12:00 - 15:00</span>
                                <br> Minggu dan Hari Libur: <span class="text-right">09:00 - 12:00</span>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Layanan</h3>
                            <ul class="list-arrow">
                                <li><a href="{{ url('contractor') }}">Konstruksi</a></li>
                                <li><a href="{{ url('trade') }}">Perdagangan Umum</a></li>
                            </ul>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="copyright-info text-center">
                                <span>Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script> CV Sumber Rejeki, </span>
                            </div>
                        </div>

                        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                            <button class="btn btn-primary" title="Back to Top">
                                <i class="fa fa-angle-double-up"></i>
                            </button>
                        </div>

                    </div><!-- Container end -->
                </div><!-- Copyright end -->
        </footer><!-- Footer end -->


    </div><!-- Body inner end -->



    {{-- botman --}}
    <script>
        var botmanWidget = {
            aboutText:'Webappfix',  
            introMessage: 'Kami dari Customer Service CV Sumber Rejeki, Ada yang bisa dibantu?',
            position: 'bottom-right',
            className: 'botman-custom-position'
        };
    </script>
    <style>
        /* CSS untuk memindahkan widget ke kiri bawah */
        .botman-custom-position {
            left: 20px !important; /* Posisi dari kiri */
            right: auto !important; /* Menonaktifkan posisi kanan */
            bottom: 20px !important; /* Posisi dari bawah */
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    
<script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/chat.js'></script>

</body>

</html>