<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Lapor | Surat Ijin Keramaian</title>

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
            <a href="/pengaduan-masyarakat/sik">
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

            {{-- Alert warning alasan --}}
            @if (isset($laporan))
                @if ($laporan->keterangan != null || $laporan->keterangan != '')
                    <div class="alert alert-warning mt-4"
                         role="alert">
                        <i class="fa-solid fa-triangle-exclamation text-dark"></i>
                        <span class="d-inline-block mx-2">
                            {{ $laporan->keterangan }}
                        </span>
                    </div>
                @endif
            @endif

            <div class="card shadow p-5 my-5">
                <div class="card-body">
                    <h1 style="color: black"
                        class="h1 font-weight-bolder text-center mb-4"
                        data-aos="fade-up"
                        data-aos-duration="500">Form Dokumen Persyaratan SIK</h1>

                    <form action="/upload-sik"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @if (isset($laporan))
                            <input type="hidden"
                                   name="laporan_id"
                                   value="{{ $laporan->id }}">
                        @endif
                        <table class="table table-sm table-borderless">
                            {{-- UPLOAD DOKUMEN --}}
                            <tr>
                                <td colspan="2">
                                    <h1 class="d-block mt-4 text-dark"
                                        style="font-size: 24px">Upload Dokumen
                                        Persyaratan :</h1>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 55%">
                                    <span class="d-inline-block mt-2">Proposal Kegiatan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label id="labelProposalKegiatan"
                                               for="proposalKegiatan"
                                               class="btn btn-primary d-block w-100 @error('proposalKegiatan') border-error @enderror">
                                            {{ $laporan->proposal_kegiatan ?? 'Upload File' }}
                                        </label>

                                        <input id="proposalKegiatan"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               {{ isset($laporan) ? '' : '' }}
                                               name="proposalKegiatan"
                                               type="file"
                                               class="d-none">
                                        @error('proposalKegiatan')
                                            <small class="text-danger d-inline-block mr-2"
                                                   style="font-size: 80%">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 55%">
                                    <span class="d-inline-block mt-2">Izin Tempat / Lokasi Kegiatan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label id="labelIzinTempat"
                                               for="izinTempat"
                                               class="btn btn-primary d-block w-100 @error('izinTempat') border-error @enderror">
                                            {{ $laporan->izin_tempat ?? 'Upload File' }}
                                        </label>
                                        <input id="izinTempat"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               {{ isset($laporan) ? '' : '' }}
                                               name="izinTempat"
                                               type="file"
                                               class="d-none">
                                        @error('izinTempat')
                                            <small class="text-danger d-inline-block mr-2"
                                                   style="font-size: 80%">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 55%">
                                    <span class="d-inline-block mt-2">Izin / rekomendasi dari instansi terkait</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label id="labelIzinInstansi"
                                               for="izinInstansi"
                                               class="btn btn-primary d-block w-100 @error('izinInstansi') border-error @enderror">
                                            {{ $laporan->izin_instansi ?? 'Upload File' }}
                                        </label>
                                        <input id="izinInstansi"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               {{ isset($laporan) ? '' : '' }}
                                               name="izinInstansi"
                                               type="file"
                                               class="d-none">
                                        @error('izinInstansi')
                                            <small class="text-danger d-inline-block mr-2"
                                                   style="font-size: 80%">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 55%">
                                    <span class="d-inline-block mt-2">Fotokopi paspor (bila melibatkan WNA)</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label id="labelFotokopiPaspor"
                                               for="fotokopiPaspor"
                                               class="btn btn-primary d-block w-100">
                                               @if (isset($laporan) && $laporan->fotokopi_paspor != '')
                                                   $laporan->fotokopi_paspor
                                               @else
                                                   Upload File
                                               @endif
                                        </label>
                                        <input id="fotokopiPaspor"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               name="fotokopiPaspor"
                                               type="file"
                                               class="d-none">
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 55%">
                                    <span class="d-inline-block mt-2">Rekomendasi dari Polsek setempat</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label id="labelRekomendasiPolsek"
                                               for="rekomendasiPolsek"
                                               class="btn btn-primary d-block w-100 @error('rekomendasiPolsek') border-error @enderror">
                                            {{ $laporan->rekomendasi_polsek ?? 'Upload File' }}
                                        </label>
                                        <input id="rekomendasiPolsek"
                                               accept=".pdf,.jpg,.jpeg,.png"
                                               name="rekomendasiPolsek"
                                               type="file"
                                               class="d-none"
                                               {{ isset($laporan) ? '' : '' }}>
                                        @error('rekomendasiPolsek')
                                            <small class="text-danger d-inline-block mr-2"
                                                   style="font-size: 80%">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h6>
                                        <span class="font-weight-bolder">Note</span> :
                                        <span class="text-danger">*</span>
                                        Dokumen wajib diisi
                                    </h6>
                                    <button type="submit"
                                            class="btn btn-primary mt-4">Kirim Data</button>
                                </td>
                            </tr>
                        </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
            crossorigin="anonymous"></script>

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

    <script>
        // Proposal kegiatan
        $('#proposalKegiatan').on('change', function() {
            $('#labelProposalKegiatan').text(this.files[0].name);
        });
        // Izin tempat
        $('#izinTempat').on('change', function() {
            $('#labelIzinTempat').text(this.files[0].name);
        });
        // Izin instansi
        $('#izinInstansi').on('change', function() {
            $('#labelIzinInstansi').text(this.files[0].name);
        });
        // Fotokopi paspor
        $('#fotokopiPaspor').on('change', function() {
            $('#labelFotokopiPaspor').text(this.files[0].name);
        });
        // Rekomendasi polsek
        $('#rekomendasiPolsek').on('change', function() {
            $('#labelRekomendasiPolsek').text(this.files[0].name);
        });
    </script>
</body>

</html>
