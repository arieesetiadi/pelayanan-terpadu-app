<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Profile | Sentra Pelayanan Kepolisian Terpadu</title>

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
        p,
        li {
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
        <div class="container my-4">
            <a href="/">
                <i class="fa-solid fa-angle-left fa-3x"></i>
            </a>
            <div class="row mt-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mt-2">Profile</h5>
                        </div>
                        <div class="card-body" style="height: 500px">
                            <center>
                                {{-- Foto Profile --}}
                                @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                    <img src="{{ asset('assets-admin/img/avatars/man.png') }}" width="40%"
                                        alt="Profile Man" class="my-3">
                                @else
                                    <img src="{{ asset('assets-admin/img/avatars/woman.png') }}" width="40%"
                                        alt="Profile Woman" class="my-3">
                                @endif

                                <h6>{{ auth()->user()->nama }}</h6>
                                <span class="d-block">{{ auth()->user()->email }}</span>
                                <span class="d-block">{{ auth()->user()->telepon }}</span>

                                <hr>

                                <span>{{ auth()->user()->alamat }}</span>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mt-2">Ubah</h5>
                        </div>
                        <div class="card-body" style="height: 500px">
                            <form action="/profile/update" method="POST">
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama :</label>
                                    <input name="nama" type="text" class="form-control" id="nama"
                                        value="{{ auth()->user()->nama }}">
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email :</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        value="{{ auth()->user()->email }}">
                                </div>
                                <div class="mb-2">
                                    <label for="telepon" class="form-label">Nomor Telepon :</label>
                                    <input name="telepon" type="text" class="form-control" id="telepon"
                                        value="{{ auth()->user()->telepon }}">
                                </div>
                                <div class="mb-2">
                                    <label for="alamat" class="form-label">Alamat :</label>
                                    <input name="alamat" type="text" class="form-control" id="alamat"
                                        value="{{ auth()->user()->alamat }}">
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
