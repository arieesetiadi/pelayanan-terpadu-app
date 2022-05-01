<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Sentra Pelayanan Kepolisian Terpadu</title>

    {{-- Animation os Scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Template Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets-user/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/jquery-fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/responsive.css') }}">

    <link href="favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    <div data-aos="fade-down" data-aos-duration="500">
        {{-- Top Bar --}}
        <div class="top-bar top-bar-type1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12 d-lg-flex align-items-center">
                        <ul class="flat-information flat-information-type1">
                            <li>
                                <a href="#" title="Phone">
                                    <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                                    0361829949
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Email">
                                    <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                                    info@polresbadung.id
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                    </div>
                </div>
            </div>
        </div>

        {{-- Navbar --}}
        <header id="header" class="header header-type1 bg-header-s1 bg-color" data-aos="fade-down"
            data-aos-duration="500">
            <div class="container">
                <div class="flex-header d-flex">
                    <div id="logo" class="logo d-flex align-items-center justify-content-start">
                        <a href="/" title="Logo">
                            <img src="{{ asset('assets-user/img/logo-main.png') }}" data-width="150" data-height="38"
                                alt="images" data-retina="{{ asset('assets-user/img/logo-main.png') }}">
                        </a>
                    </div>
                    <div class="content-menu d-flex align-items-center justify-content-end">
                        <div class="nav-wrap">
                            <div class="btn-menu"><span></span></div>
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li>
                                        <a href="index.html" class="active">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="#">Profil</a>
                                        <ul class="sub-menu">
                                            <li><a href="it-services.html">Logo</a></li>
                                            <li><a href="it-services-banking.html">Visi & Misi</a></li>
                                            <li><a href="it-services-banking.html">Sejarah</a></li>
                                            <li><a href="it-services-banking.html">Tentang Polri</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Kontak</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="flat-appointment btn-linear hv-linear-gradient">
                            <a href="/daftar" class="font-style linear-color border-corner">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    {{-- Banner --}}
    <div class="flat-slider clearfix">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{ asset('assets-user/img/rev-slider/gambar1.jpg') }}" alt=""
                            data-bgposition="center center" data-no-retina>
                    </li>
                    <!-- /End Slide 1 -->

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{ asset('assets-user/img/rev-slider/gambar2.jpg') }}" alt=""
                            data-bgposition="center center" data-no-retina>
                    </li>
                    <!-- /End Slide 2 -->
                </ul>
            </div>
        </div>
    </div>

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Pilihan Layanan</h1>
            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                {{-- Pengaduan Masyarakat --}}
                <div class="col-6">
                    <div class="card shadow-lg">
                        <img class="card-img-top" width="100%"
                            src="{{ asset('assets-user/img/rev-slider/gambar1.jpg') }}" alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="d-inline-block h6" style="color: black">Pengaduan Masyarakat</h5>

                            <div class="d-inline-block dropdown">
                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">SKTLK (Surat Keterangan Tanda Lapor
                                        Kehilangan)</a>
                                    <a class="dropdown-item" href="#">Surat Izin Keramaian</a>
                                    <a class="dropdown-item" href="#">STTLP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Penindaklanjutan Tindak Kriminal --}}
                <div class="col-6">
                    <div class="card shadow-lg">
                        <img class="card-img-top" width="100%"
                            src="{{ asset('assets-user/img/rev-slider/gambar1.jpg') }}" alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="d-inline-block h6" style="color: black">Penindaklanjutan Tindak Kriminal</h5>

                            <div class="d-inline-block dropdown">
                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Tindak Kriminal</a>
                                    <a class="dropdown-item" href="#">SP2HP</a>
                                    <a class="dropdown-item" href="#">STTLP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer id="footer" class="footer footer-bg-3">
        <div class="overlay"></div>
        <div id="footer-widget" class="footer-widget-type2 bottom-type3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-text">
                            <div class="logo"><img src="{{ asset('assets-user/img/logo-main-white.png') }}"
                                    alt="images"></div>
                            <div class="socials-list">
                                <a target="_blank" href="https://www.facebook.com/PolresBadung/">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/polresbadung_/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a target="_blank"
                                    href="https://twitter.com/polres_badung__?s=20&t=mWpCEac-SCZ8yG4oS9K9tQ">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCWfSXgpJW5C2I8ulKl4Eb0g">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Kontak Informasi --}}
                    <div class="col-lg-5 col-md-6">
                        <div class="mg-widget-mobi kcl-widget2">
                            <h3 class="widget widget-title">Kontak Informasi</h3>
                            <div class="widget-services d-sm-flex">
                                <ul>
                                    <li>
                                        <a href="#" class="text-white my-1 d-inline-block">
                                            <i class="fa-solid fa-building d-inline-block mx-2"></i>
                                            Jl. Kebo Iwa No.1, Mengwitani, Mengwi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white my-1 d-inline-block">
                                            <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                                            (0361) 829949
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white my-1 d-inline-block">
                                            <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                                            info@polresbadung.id
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white my-1 d-inline-block">
                                            <i class="fa-solid fa-globe d-inline-block mx-2"></i>
                                            www.polresbadung.id
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Google Maps --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="mg-widget-mobi kcl-widget">
                            <h3 class="widget widget-title">Google Maps</h3>
                            <div class="widget-latest-news">
                                <div class="mapouter">
                                    <div class="gmap_canvas rounded"><iframe width="350" height="170" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Polres%20Badung,%20Jalan%20Kebo%20Iwa,%20Mengwitani,%20Kabupaten%20Badung,%20Bali&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                            href="https://fmovies-online.net"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 170px;
                                                width: 350px;
                                            }

                                        </style><a href="https://www.embedgooglemap.net">map widgets for websites</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 170px;
                                                width: 350px;
                                            }

                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom" class="bottom-type3 position-relative">
            <div class="container">
                <div class="bottom-wrap text-center">
                    <div id="copyright">
                        Copyright © 2020 <a href="">Polres Badung</a>. All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->

    {{-- JQuery --}}
    <script src="{{ asset('assets-user/js/jquery.min.js') }}"></script>

    {{-- Animation on Scroll --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- Bootstrap bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets-user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/main.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('assets-user/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets-user/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/rev-slider.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}">
    </script>
</body>

</html>
