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

    <style>
        ol {
            list-style-type: decimal;
        }

        li {
            margin-left: 30px;
        }
    </style>
    <link href="favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    {{-- Top Bar --}}
    @include('layout.topbar')
    @include('layout.banner')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Sentra Pelayanan Kepolisian Terpadu ( SPKT )</h1>
            <p data-aos="fade-up" data-aos-duration="500">
                SPKT bertugas memberikan pelayanan kepolisian secara terpadu terhadap laporan/pengaduan masyarakat,
                memberikan bantuan dan pertolongan, serta memberikan pelayanan informasi.
                Website ini dapat melayani fungsi SPKT sebagai berikut :
            </p>

            <ol data-aos="fade-up" data-aos-duration="500">
                <li>
                    Surat Keterangan Tanda Lapor Kehilangan (SKTLK)
                </li>
                <li>
                    Surat Ijin Keramaian
                </li>
                <li>
                    Tindak Kriminal
                </li>
                <li>
                    Surat Pemberitahuan Perkembangan Hasil Penyidikan (SP2HP)
                </li>
            </ol>
            <br>
            <br>
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Pilihan Layanan</h1>
            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                {{-- Pengaduan Masyarakat --}}
                <div class="col-6">
                    <div class="card shadow-lg">
                        <img class="card-img-top" width="100%"
                            src="{{ asset('assets-user/img/rev-slider/polres-badung.jpg') }}"
                            alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="d-inline-block h6" style="color: black">Pengaduan Masyarakat</h5>

                            <div class="d-inline-block dropdown">
                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/pengaduan-masyarakat/sktlk">SKTLK (Surat Keterangan
                                        Tanda Lapor
                                        Kehilangan)</a>
                                    <a class="dropdown-item" href="/pengaduan-masyarakat/sik">Surat Izin Keramaian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Penindaklanjutan Tindak Kriminal --}}
                <div class="col-6">
                    <div class="card shadow-lg">
                        <img class="card-img-top" width="100%"
                            src="{{ asset('assets-user/img/rev-slider/polres-badung.jpg') }}"
                            alt="Pengaduan Masyarakat">
                        <div class="card-body">
                            <h5 class="d-inline-block h6" style="color: black">Penindaklanjutan Tindak Kriminal</h5>

                            <div class="d-inline-block dropdown">
                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/tindak-kriminal">Tindak Kriminal</a>
                                    <a class="dropdown-item" href="/tindak-kriminal/sp2hp">SP2HP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('layout.footer')

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
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>
</body>

</html>
