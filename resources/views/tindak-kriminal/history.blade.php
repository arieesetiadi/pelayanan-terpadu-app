<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Sentra Pelayanan Kepolisian Terpadu</title>

    {{-- Animation os Scroll --}}
    <link rel="stylesheet"
          href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Mobile Specific Metas-->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          crossorigin="anonymous">

    <!-- Template Style-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    <link rel="stylesheet"
          href="{{ asset('assets-user/css/icomoon.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets-user/css/jquery-fancybox.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets-user/css/style.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets-user/css/shortcodes.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets-user/css/responsive.css') }}">

    <style>
        ol {
            list-style-type: decimal;
        }

        li {
            margin-left: 30px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        li {
            color: black
        }
    </style>
    <link href="favicon.ico"
          rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    {{-- Top Bar --}}
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5"
             style="padding: 0 10%">
            <div class="row">
                <div class="col-12">
                    <h1 style="color: black"
                        class="h1 font-weight-bolder text-center my-4"
                        data-aos="fade-up"
                        data-aos-duration="500">Riwayat Perkembangan Penyelidikan</h1>
                </div>
                <div class="col-12">
                    {{-- Time-line --}}
                    <div class="container p-3">
                        @if (count($filePerkembangan) > 0 && count($keteranganPerkembangan) > 0)
                            @foreach ($keteranganPerkembangan as $i => $keterangan)
                                <!-- timeline item  -->
                                <div class="row">
                                    <!-- timeline item left dot -->
                                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                                        <div class="row h-50">
                                            <div class="col {{ $i == 0 ? '' : 'border-end' }}">
                                                &nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            @php
                                                $style = '';
                                                if ($i == 0 && $laporan->perkembangan != 'Selesai') {
                                                    $style = 'primary';
                                                } elseif ($i == 0 && $laporan->perkembangan == 'Selesai') {
                                                    $style = 'secondary';
                                                }
                                            @endphp
                                            <span class="badge rounded-pill border badge-{{ $style }}">
                                                @if ($laporan->perkembangan == 'Selesai' && $i == 0)
                                                    <i class="fa-solid fa-check"></i>
                                                @else
                                                    <i class="fa-solid fa-check"
                                                       style="visibility: hidden"></i>
                                                @endif
                                            </span>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col {{ $i + 1 == $count ? '' : 'border-end' }}">
                                                &nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!-- timeline item event content -->
                                    <div class="col py-2">
                                        <div class="card radius-15">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-end text-muted">
                                                    {{ dateTimeFormat($keterangan->uploaded_at) }}
                                                </div>
                                                <h4 class="card-title  {{ $i + 1 == $count ? 'd-none' : '' }}"
                                                    style="font-size: 150%; font-weight: bolder">
                                                    Perkembangan
                                                    {{ $count - ($i + 1) }}
                                                </h4>
                                                <p class="card-text {{ $i == 0 ? 'text-dark' : 'text-muted' }}">
                                                    {{ $keterangan->keterangan }}
                                                </p>
                                                <a href="{{ asset('assets-user/upload/') . '/' . $filePerkembangan[$i] }}"
                                                   target="_blank"
                                                   title="Unduh file perkembangan"
                                                   class="btn btn-sm mt-3">
                                                    <i class="fa-solid fa-download"></i> Perkembangan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h6 class="text-muted text-center">Belum ada perkembangan.</h6>
                        @endif
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
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
            crossorigin="anonymous"></script>

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
