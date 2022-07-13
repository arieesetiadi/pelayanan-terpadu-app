<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Lapor | Surat Ijin Keramaian</title>

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
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <a href="/pengaduan-masyarakat/sik">
                <i class="fa-solid fa-angle-left fa-3x"></i>
            </a>

            <h1 style="color: black" class="h1 font-weight-bolder text-center mb-4" data-aos="fade-up"
                data-aos-duration="500">Form Laporan</h1>

            <form action="/upload-sik" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-sm table-borderless">
                    {{-- UPLOAD DOKUMEN --}}
                    <tr>
                        <td colspan="2">
                            <h1 class="d-block mt-4 text-dark" style="font-size: 24px">Upload Dokumen :</h1>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Proposal Kegiatan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="proposalKegiatan" type="file" class="form-control-file">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Izin Tempat / Lokasi Kegiatan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="izinTempat" type="file" class="form-control-file">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Izin / rekomendasi dari instansi terkait</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="izinInstansi" type="file" class="form-control-file">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Fotokopi paspor (bila melibatkan WNA)</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="fotokopiPaspor" type="file" class="form-control-file">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Rekomendasi dari Polsek setempat</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="rekomendasiPolsek" type="file" class="form-control-file">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="custom-control custom-checkbox mt-4 mb-2">
                                <input name="persetujuan" type="checkbox" class="custom-control-input" id="persetujuan">
                                <label class="custom-control-label" for="persetujuan">
                                    Dengan mengklik tombol ini berarti anda telah setuju bahwa data yang anda masukkan
                                    sudah
                                    benar.
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal"
                                data-target="#successModal">Kirim Data</button>

                            <!-- Modal -->
                            <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <i class="fa-solid fa-circle-check text-success mx-2 fa-2x"></i>
                                                Berhasil
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda Telah Berhasil Mengirim Laporan</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
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