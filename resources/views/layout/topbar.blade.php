<div data-aos="fade-down" data-aos-duration="500">
    <div class="top-bar top-bar-type1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 d-flex align-items-center">
                    <div class="d-inline-block">
                        <a href="#" title="Datetime" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-clock d-inline-block mx-2"></i>
                            <span id="realtimeCounter"></span>
                        </a>
                        <script src="{{ asset('assets-user/js/realtimeCounter.js') }}"></script>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Phone" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                            0361829949
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Email" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                            info@polresbadung.id
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <header id="header" class="header header-type1 bg-header-s1 bg-color" data-aos="fade-down" data-aos-duration="500">
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
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Profil</a>
                                    <ul class="sub-menu">
                                        <li><a href="/visimisi">Visi & Misi</a></li>
                                        <li><a href="/sejarah">Sejarah</a></li>
                                        <li><a href="/tentangpolri">Tentang Polri</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/kontak">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="flat-appointment btn-linear hv-linear-gradient">
                        <a href="/daftar" class="font-style linear-color border-corner">Daftar</a>
                    </div> --}}
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
                    <img style="width: 100%; height: auto; object-fit: none"
                        src="{{ asset('assets-user/img/rev-slider/selamat-datang.png') }}" alt=""
                        data-bgposition="center center" data-no-retina width="100%">
                </li>
                <!-- /End Slide 1 -->

                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img style="width: 100%; height: auto;"
                        src="{{ asset('assets-user/img/rev-slider/gambar1.jpg') }}" alt=""
                        data-bgposition="center center" data-no-retina width="100%">
                </li>
                <!-- /End Slide 2 -->
            </ul>
        </div>
    </div>
</div>
