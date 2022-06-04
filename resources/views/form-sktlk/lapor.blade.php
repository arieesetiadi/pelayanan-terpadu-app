<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Lapor | Surat Keterangan Tanda Lapor Kehilangan</title>

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

    {{-- Fontawesome --}}
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

    {{-- Top Bar --}}
    <div data-aos="fade-down" data-aos-duration="500">
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
                        <div class="flat-appointment btn-linear hv-linear-gradient">
                            <a href="/daftar" class="font-style linear-color border-corner">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Form Laporan</h1>

            {{-- Form Data Diri --}}
            <h1 style="font-size: 24px">Data Diri :</h1>
            <hr>
            <table class="table table-sm table-borderless">
                {{-- Nama Lengkap --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Nama Lengkap</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="namaLengkap" type="text" class="form-control form-control-sm" placeholder="Nama lengkap" style="height: 40px">
                        </div>
                    </td>
                </tr>

                {{-- Tempat tanggal lahir --}}
                <tr style="margin-bottom: 50px">
                    <td>
                        <span class="d-inline-block mt-2">Tempat & Tanggal lahir</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="tempatLahir" type="text" class="form-control d-inline-block float-left" placeholder="Tempat lahir"
                                style="height: 40px; width: 48%; margin-right: 2%">
                            <input name="tanggalLahir" type="date" class="form-control w-50 d-inline-block float-left" style="height: 40px">
                        </div>
                    </td>
                </tr>

                {{-- Pekerjaan --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Pekerjaan</span>
                    </td>
                    <td>
                       <div class="form-group">
                            <input name="pekerjaan" type="text" class="form-control form-control-sm" placeholder="Pekerjaan"
                            style="height: 40px">
                        </div>
                    </td>
                </tr>

                {{-- Kewarganegaraan --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Kewarganegaraan</span>
                    </td>
                    <td>
                       <select name="kewarganegaraan" class="custom-select" style="height: 40px">
                            <option selected hidden>Pilih kewarganegaraan</option>
                            <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                            <option value="Warga Negara Asing">Warga Negara Asing</option>
                    </select>
                    </td>
                </tr>

                {{-- Alamat --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Alamat</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3"></textarea>
                        </div>
                    </td>
                </tr>

                {{-- No HP --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">No. Handphone</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="noHandphone" type="text" class="form-control form-control-sm" placeholder="Nomor handphone"
                                style="height: 40px">
                        </div>
                    </td>
                </tr>
            </table>


            {{-- Kronologi Singkat --}}
            <h1 style="font-size: 24px">Kronologi Singkat :</h1>
            <hr>
            <table class="table table-sm table-borderless">
                {{-- Tanggal Kejadian --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Tanggal Kejadian</span>
                    </td>
                    <td>
                        <input name="tanggalKejadian" type="date" class="form-control" style="height: 40px">
                    </td>
                </tr>

                {{-- Lokasi Kejadian --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Lokasi Kejadian Kehilangan</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="lokasiKejadian" type="text" class="form-control form-control-sm" placeholder="Lokasi kejadian"
                                style="height: 40px">
                        </div>
                    </td>
                </tr>

                {{-- Surat yang hilang --}}
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Surat - surat yang hilang</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="suratHilang" placeholder="Surat Hilang" class="form-control" rows="3"></textarea>
                        </div>
                    </td>
                </tr>
            </table>


            <h1 style="font-size: 24px">Upload Data dan Lokasi Pengambilan :</h1>
            <hr>
            <table class="table table-sm table-borderless">
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Dokumen 1</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="dokumen1" type="file" class="form-control-file">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Dokumen 2</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="dokumen2" type="file" class="form-control-file">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Dokumen 3</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="dokumen3" type="file" class="form-control-file">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="d-inline-block mt-2">Dokumen 4</span>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="dokumen4" type="file" class="form-control-file">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input name="persetujuan" type="checkbox" class="custom-control-input" id="persetujuan">
                            <label class="custom-control-label" for="persetujuan">
                                Dengan mengklik tombol ini berarti anda telah setuju bahwa data yang anda masukkan sudah benar.
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#successModal">Kirim</button>

                        <!-- Modal -->
                        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <i class="fa-solid fa-circle-check text-success mx-2 fa-2x"></i>
                                            Berhasil
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda Telah Berhasil Mengirim Laporan</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
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

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script> --}}

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