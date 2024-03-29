<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Lapor | Surat Keterangan Tanda Lapor Kehilangan</title>

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

    {{-- Fontawesome --}}
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

    <link href="favicon.ico"
          rel="shortcut icon">

    <style>
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
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    {{-- Top Bar --}}
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5 styled-bg"
             style="padding: 0 8%">
            <a href="/pengaduan-masyarakat/sktlk">
                <i class="fa-solid fa-angle-left fa-3x"></i>
            </a>
            {{-- Alert success --}}
            @if (session('success'))
                <div class="alert alert-success mt-4"
                     role="alert">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="d-inline-block mx-2">
                        {{ session('success') }}
                    </span>
                </div>
            @endif

            <div class="card shadow p-5 my-5">
                <div class="card-body">
                    <h1 style="color: black"
                        class="h1 font-weight-bolder text-center my-4"
                        data-aos="fade-up"
                        data-aos-duration="500">Form Pelaporan SKTLK</h1>

                    <form action="/upload-sktlk"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        {{-- Hidden Inputs --}}
                        <input type="hidden"
                               name="namaLengkap"
                               value="{{ auth()->user()->nama }}">
                        <input type="hidden"
                               name="tempatLahir"
                               value="{{ auth()->user()->tempat_lahir }}">
                        <input type="hidden"
                               name="tanggalLahir"
                               value="{{ auth()->user()->tanggal_lahir }}">
                        <input type="hidden"
                               name="alamat"
                               value="{{ auth()->user()->alamat }}">
                        <input type="hidden"
                               name="telepon"
                               value="{{ auth()->user()->telepon }}">
                        <input type="hidden"
                               name="pekerjaan"
                               value="{{ auth()->user()->pekerjaan }}">
                        <input type="hidden"
                               name="kewarganegaraan"
                               value="{{ auth()->user()->kewarganegaraan }}">

                        {{-- Kronologi Singkat --}}
                        <h1 style="font-size: 24px">Kronologi Singkat :</h1>
                        <hr>
                        <table class="table table-sm table-borderless">
                            {{-- Tanggal Kejadian --}}
                            <tr>
                                <td style="width: 270px">
                                    <span class="d-inline-block mt-2">Tanggal Kejadian</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <input name="tanggalKejadian"
                                           type="date"
                                           class="form-control"
                                           style="height: 40px"
                                           value="{{ old('tanggalKejadian') ?? '' }}"
                                           required>
                                </td>
                            </tr>

                            {{-- Lokasi Kejadian --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Lokasi Kejadian Kehilangan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <input list="lokasiKejadians"
                                           name="lokasiKejadian"
                                           id="lokasiKejadian"
                                           class="form-control"
                                           placeholder="Lokasi kejadian"
                                           autocomplete="off">

                                    <datalist id="lokasiKejadians">
                                        <option value="Abiansemal">
                                        <option value="Kuta">
                                        <option value="Kuta Selatan">
                                        <option value="Kuta Utara">
                                        <option value="Mengwi">
                                        <option value="Petang">
                                    </datalist>
                                    <div class="form-group mt-2">
                                        <textarea name="detailLokasiKejadian"
                                                  placeholder="Detail lokasi kejadian"
                                                  class="form-control"
                                                  rows="3"
                                                  required>{{ isset($laporan) ? $laporan->detail_lokasi_kejadian : '' }}</textarea>
                                    </div>
                                </td>
                            </tr>

                            {{-- Surat yang hilang --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Surat - surat yang hilang</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <textarea name="suratHilang"
                                                  placeholder="Surat Hilang"
                                                  class="form-control"
                                                  rows="3"
                                                  required></textarea>
                                    </div>
                                </td>
                            </tr>

                            {{-- Download Surat pernyataan --}}
                            {{-- <tr>
                                <td class="pb-4">
                                    <a id="btnDownloadPernyataan"
                                       role="button"
                                       class="btn btn-primary"
                                       data-bs-toggle="modal"
                                       data-bs-target="#modalDownloadPernyataan">
                                        Surat Pernyataan Keaslian Dokumen
                                    </a>
                                </td>
                            </tr> --}}
                        </table>

                        <h1 style="font-size: 24px">Upload Data :</h1>
                        <hr>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Foto identitas pelapor (KTP)</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="fotoKtp"
                                               type="file"
                                               class="form-control-file"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Foto pelapor sambil membawa identitas</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="fotoPelapor"
                                               type="file"
                                               class="form-control-file"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr> --}}
                            {{-- <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Rekomendasi dari instansi yang
                                        mengeluarkan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="rekomendasiInstansi"
                                               type="file"
                                               class="form-control-file"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr> --}}

                            {{-- <tr class="border-top">
                                <td>
                                    <span class="d-inline-block mt-4">Dokumen Pernyataan Keaslian</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group mt-3">
                                        <input name="pernyataanKeaslian"
                                               type="file"
                                               class="form-control-file"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr> --}}

                            <tr>
                                <td>
                                    <h6 class="mb-4">
                                        <span class="font-weight-bolder">Note</span> :
                                        <span class="text-danger">*</span>
                                        Data wajib diisi
                                    </h6>
                                    <button name=""
                                            value="kirim"
                                            type="submit"
                                            class="btn btn-primary">
                                        Kirim
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        {{-- Modal untuk download Surat Pernyataan Keaslian Dokumen --}}
        <div class="modal fade"
             id="modalDownloadPernyataan"
             tabindex="-1"
             aria-labelledby="modalDownloadPernyataanLabel"
             aria-hidden="true"
             role="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/download-pernyataan-sktlk"
                          method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title"
                                id="modalDownloadPernyataanLabel">Download Surat Pernyataan
                                Keaslian</h5>
                        </div>
                        <div class="modal-body">
                            {{-- Hidden Data --}}
                            <input name="pernyataanNamaLengkap"
                                   type="hidden"
                                   value="{{ auth()->user()->nama }}">
                            <input name="pernyataanTempatLahir"
                                   type="hidden">
                            <input name="pernyataanTanggalLahir"
                                   type="hidden">
                            <textarea name="pernyataanAlamat"
                                      class="d-none"></textarea>
                            <input name="pernyataanTelepon"
                                   type="hidden">

                            <p>Tekan "Download" untuk mengunduh berkas/surat pernyataan keaslian SKTLK</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                            <button formtarget="_blank"
                                    type="submit"
                                    type="button"
                                    class="btn btn-primary">Download</button>
                        </div>
                    </form>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
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

    <script src="{{ asset('assets-user/js/download-pernyataan.js') }}"></script>

    <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
    <script>
        var render = createwidgetlokasi("provinsi", "kabupaten", "kecamatan", "kelurahan");
    </script>
</body>

</html>
