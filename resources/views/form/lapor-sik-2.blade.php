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

            {{-- Alert success --}}
            @if (session('success'))
                <div class="alert alert-success mt-4" role="alert">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="d-inline-block mx-2">
                        {{ session('success') }}
                    </span>
                </div>
            @endif

            <h1 style="color: black" class="h1 font-weight-bolder text-center mb-4" data-aos="fade-up"
                data-aos-duration="500">Form Izin Keramaian </h1>
            {{-- Form Data Diri --}}
            <h1 class="text-dark" style="font-size: 24px">Data Laporan :</h1>
            <hr>

            <form action="/upload-form-sik" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $laporan->id }}">
                <table class="table table-sm table-borderless">
                    {{-- Nama Organisasi --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Nama Organisasi</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="namaOrganisasi" type="text" class="form-control form-control-sm"
                                    placeholder="Nama Organisasi" style="height: 40px"
                                    value="{{ $laporan->nama_organisasi != '' ? $laporan->nama_organisasi : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Nama Penanggung Jawab --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Nama Penanggung Jawab</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="namaPenanggungJawab" type="text" class="form-control form-control-sm"
                                    placeholder="Nama Penanggung Jawab" style="height: 40px"
                                    value="{{ $laporan->nama_penanggung_jawab != '' ? $laporan->nama_penanggung_jawab : '' }}">
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
                                <input name="pekerjaan" type="text" class="form-control form-control-sm"
                                    placeholder="Pekerjaan Penanggung Jawab" style="height: 40px"
                                    value="{{ $laporan->pekerjaan != '' ? $laporan->pekerjaan : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Alamat --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Alamat</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea name="alamat" placeholder="Alamat Penanggung Jawab" class="form-control" rows="3">{{ $laporan->alamat != '' ? $laporan->alamat : '' }}</textarea>
                            </div>
                        </td>
                    </tr>

                    {{-- Nomor Telepon --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Nomor Telepon</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="telepon" type="text" class="form-control form-control-sm"
                                    placeholder="Nomor telepon" style="height: 40px"
                                    value="{{ $laporan->telepon != '' ? $laporan->telepon : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Bentuk Macam Kegiatan --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Bentuk Macam Kegiatan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <textarea name="bentukKegiatan" placeholder="Bentuk / Macam Kegiatan" class="form-control" rows="3">{{ $laporan->bentuk_kegiatan != '' ? $laporan->bentuk_kegiatan : '' }}</textarea>
                            </div>
                        </td>
                    </tr>

                    {{-- Tanggal Kegiatan --}}
                    <tr style="margin-bottom: 50px">
                        <td>
                            <span class="d-inline-block mt-2">Tanggal Kegiatan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="tanggalKegiatan" type="date" class="form-control"
                                    style="height: 40px"
                                    value="{{ $laporan->tanggal_kegiatan != '' ? $laporan->tanggal_kegiatan : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Waktu Kegiatan --}}
                    <tr style="margin-bottom: 50px">
                        <td>
                            <span class="d-inline-block mt-2">Waktu Kegiatan</span>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <input name="waktuMulai" type="time" class="form-control"
                                            style="height: 40px"
                                            value="{{ $laporan->waktu_mulai != '' ? $laporan->waktu_mulai : '' }}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <span class="d-block text-center">s/d</span>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <input name="waktuSelesai" type="time" class="form-control"
                                            style="height: 40px"
                                            value="{{ $laporan->waktu_selesai != '' ? $laporan->waktu_selesai : '' }}">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    {{-- Lokasi Kegiatan --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Lokasi</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="lokasiKegiatan" type="text" class="form-control form-control-sm"
                                    placeholder="Tempat" style="height: 40px"
                                    value="{{ $laporan->lokasi_kegiatan != '' ? $laporan->lokasi_kegiatan : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Dalam Rangka --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Dalam Rangka</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="dalamRangka" type="text" class="form-control form-control-sm"
                                    placeholder="Dalam Rangka" style="height: 40px"
                                    value="{{ $laporan->dalam_rangka != '' ? $laporan->dalam_rangka : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Jumlah Undangan / Peserta --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Jumlah Undangan / Peserta</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="jumlahUndangan" type="number" class="form-control form-control-sm"
                                    placeholder="Undangan / Peserta" style="height: 40px"
                                    value="{{ $laporan->jumlah_undangan != '' ? $laporan->jumlah_undangan : '' }}">
                            </div>
                        </td>
                    </tr>

                    {{-- Download persyaratan keaslian SIK --}}
                    <tr>
                        <td class="pb-4">
                            <a id="btnDownloadPernyataanSIK" role="button" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#modalDownloadPernyataan">
                                Surat Pernyataan Keaslian Dokumen
                            </a>
                        </td>
                    </tr>

                    {{-- Upload pernyataan keaslian SIK --}}
                    <tr class="border-top">
                        <td>
                            <span class="d-inline-block mt-4">Dokumen Pernyataan Keaslian</span>
                        </td>
                        <td>
                            <div class="form-group mt-3">
                                <input name="pernyataanKeaslian" type="file" class="form-control-file"
                                    accept=".pdf,.jpg,.jpeg,.png" required>
                                <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button name="simpanSementara" value="simpan" type="submit" class="btn btn-primary">
                                Simpan Sementara
                            </button>
                            <button name="kirim" value="kirim" type="submit" class="btn btn-primary">
                                Kirim Data
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        {{-- Modal untuk download Surat Pernyataan Keaslian Dokumen --}}
        <div class="modal fade" id="modalDownloadPernyataan" tabindex="-1"
            aria-labelledby="modalDownloadPernyataanLabel" aria-hidden="true" role="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/download-pernyataan-sik" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDownloadPernyataanLabel">Download Surat Pernyataan
                                Keaslian</h5>
                        </div>
                        <div class="modal-body">
                            {{-- Hidden Data --}}
                            <input name="SIKNamaOrganisasi" type="hidden">
                            <input name="SIKNamaPenanggungJawab" type="hidden">
                            <textarea name="SIKAlamat" class="d-none"></textarea>
                            <input name="SIKTelepon" type="hidden">

                            <p>Tekan "Download" untuk mengunduh berkas/surat pernyataan keaslian SIK</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button formtarget="_blank" type="submit" type="button"
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
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
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

    <script src="{{ asset('assets-user/js/download-pernyataan.js') }}"></script>
</body>

</html>
