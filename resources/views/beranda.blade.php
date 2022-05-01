<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Softo</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/font-awesome.css">
    <link rel="stylesheet" href="stylesheet/owl.theme.default.min.css">
    <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/icomoon.css">
    <link rel="stylesheet" href="stylesheet/jquery-fancybox.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">

    <link href="icon/favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->
    <div class="top-bar top-bar-type1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 d-lg-flex align-items-center">
                    <ul class="flat-information flat-information-type1">
                        <li class="phone"><a href="#" title="Phone">0361 829949</a></li>
                        <li class="email"><a href="#" title="Email">info@polresbadung.id</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                </div>
            </div>
        </div>
    </div><!-- top-bar -->
    <header id="header" class="header header-type1 bg-header-s1 bg-color">
        <div class="container">
            <div class="flex-header d-flex">
                <div id="logo" class="logo d-flex align-items-center justify-content-start mt-3">
                    <a href="index.html" title="Logo">
                        <img src="img/logo-polres.png" data-width="100" data-height="38"
                            alt="images" data-retina="img/logo-polres.png">
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
    </header><!-- header -->
    <div class="flat-slider clearfix">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/rev-slider/gambar2.jpg" alt="" data-bgposition="center center" data-no-retina>
                    </li>
                    <!-- /End Slide 1 -->

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/rev-slider/gambar1.jpg" alt="" data-bgposition="center center" data-no-retina>
                    </li>
                    <!-- /End Slide 2 -->
                </ul>
            </div>
        </div>
    </div>

    {{-- Konten --}}

    <section id="main">
        <div class="container">
            <div class="row py-5">
                {{-- Pengaduan Masyarakat --}}
                <div class="col-6" style="padding-bottom: 120px">
                    <div class="card">
                        <img class="card-img-top" width="100%" src="images/rev-slider/gambar1.jpg" alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="card-title">Pengaduan Masyarakat</h5>
                            <div class="dropdown">
                               <nav id="mainnav" class="mainnav" style="margin-left: 200px">
                                <ul class="menu">
                                    <li>
                                        <a href="#">Daftar Layanan</a>
                                        <ul class="sub-menu" style="width: 500px;">
                                            <li><a href="it-services.html">SKTLK (Surat Keterangan Tanda Lapor Kehilangan)</a></li>
                                            <li><a href="it-services-banking.html">Surat Izin Keramaian</a></li>
                                            <li><a href="it-services-banking.html">STTLP</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                    </div>
                </div>
    
                {{-- Penindaklanjutan Tindak Kriminal --}}
                <div class="col-6" style="padding-bottom: 120px">
                    <div class="card">
                        <img class="card-img-top" width="100%" src="images/rev-slider/gambar1.jpg" alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="card-title">Penindaklanjutan Tindak Kriminal</h5>
                            <div class="dropdown">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li>
                                            <a href="#">Daftar Layanan</a>
                                            <ul class="sub-menu">
                                                <li><a href="it-services.html">Tindak Kriminal</a></li>
                                                <li><a href="it-services-banking.html">SP2HP</a></li>
                                                <li><a href="it-services-banking.html">STTLP</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer footer-bg-3">
        <div class="overlay"></div>
        <div id="footer-widget" class="footer-widget-type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-text">
                            <div class="logo"><img src="img/logo-polres.png" alt="images"></div>
                            <div class="socials-list">
                                <a target="_blank" href="https://www.facebook.com/PolresBadung/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a target="_blank" href="https://www.instagram.com/polresbadung_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a target="_blank" href="https://twitter.com/polres_badung__?s=20&t=mWpCEac-SCZ8yG4oS9K9tQ"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCWfSXgpJW5C2I8ulKl4Eb0g"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="mg-widget-mobi kcl-widget2">
                            <h3 class="widget widget-title">Kontak Informasi</h3>
                            <div class="widget-services d-sm-flex">
                                <ul class="one-half first">
                                    <li><a href="#">Jl. Kebo Iwa No.1, Mengwitani, Mengwi, Kabupaten Badung, Bali 80351</a></li>
                                    <li><a href="#">(0361) 829949</a></li>
                                    <li><a href="#">info@polresbadung.id</a></li>
                                    <li><a href="#">www.polresbadung.id</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mg-widget-mobi kcl-widget">
                            <h3 class="widget widget-title">Google Maps</h3>
                            <div class="widget-latest-news">
                               <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=Polres%20Badung,%20Jalan%20Kebo%20Iwa,%20Mengwitani,%20Kabupaten%20Badung,%20Bali&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://fmovies-online.net"></a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 250px;
                                            width: 300px;
                                        }
                                    </style><a href="https://www.embedgooglemap.net">map widgets for websites</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 250px;
                                            width: 300px;
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

    <script src="javascript/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
    <script src="javascript/parallax.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/owl.carousel.min.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/jquery-fancybox.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    <script src="javascript/wow.min.js"></script>
    <script src="javascript/jquery-validate.js"></script>
    <script src="javascript/main.js"></script>

    <!-- slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="javascript/rev-slider.js"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>
</body>

</html>