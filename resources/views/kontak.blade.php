<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Kontak | Sentra Pelayanan Kepolisian Terpadu</title>

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
        p, li {
            text-align: justify;
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

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Kontak</h1>
            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-12">
                  {{-- Google Maps --}}
                  <div style="width: 100%"><iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=Polres%20Badung,%20Jalan%20Kebo%20Iwa,%20Mengwitani,%20Kabupaten%20Badung,%20Bali+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.gps.ie/wearable-gps/">Kids wearables</a></iframe></div>

                        {{-- Polres Badung --}}
                        <h1 style="color: black" class="h1 font-weight-bolder my-4">
                            Polres Badung</h1>

                        {{-- Kontak --}}
                        <ul>
                            <li>
                                <a href="#" class="my-1 d-inline-block">
                                    <i class="fa-solid fa-building d-inline-block mx-2"></i>
                                    Jl. Kebo Iwa No.1, Mengwitani, Mengwi
                                </a>
                            </li>
                            <li>
                                <a href="tel:0361829949" class="my-1 d-inline-block">
                                    <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                                    (0361) 829949
                                </a>
                            </li>
                            <li>
                                <a href="#" class="my-1 d-inline-block">
                                    <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                                    info@polresbadung.id
                                </a>
                            </li>
                            <li>
                                <a href="https://www.polresbadung.id/" class="my-1 d-inline-block">
                                    <i class="fa-solid fa-globe d-inline-block mx-2"></i>
                                    www.polresbadung.id
                                </a>
                            </li>
                        </ul>
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