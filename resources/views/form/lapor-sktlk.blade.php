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
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <a href="/pengaduan-masyarakat/sktlk">
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

            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Form Laporan</h1>

            <form action="/upload-sktlk" method="POST" enctype="multipart/form-data">
                @csrf
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
                                <input name="namaLengkap" type="text" class="form-control form-control-sm"
                                    placeholder="Nama lengkap" style="height: 40px"
                                    value="{{ old('namaLengkap') ?? '' }}" required>
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
                                <input name="tempatLahir" type="text" class="form-control d-inline-block float-left"
                                    placeholder="Tempat lahir" style="height: 40px; width: 48%; margin-right: 2%"
                                    value="{{ old('tempatLahir') ?? '' }}" required>
                                <input name="tanggalLahir" type="date"
                                    class="form-control w-50 d-inline-block float-left" style="height: 40px" required>
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
                                    placeholder="Pekerjaan" style="height: 40px" value="{{ old('pekerjaan') ?? '' }}"
                                    required>
                            </div>
                        </td>
                    </tr>

                    {{-- Kewarganegaraan --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Kewarganegaraan</span>
                        </td>
                        <td>
                            <select name="kewarganegaraan" class="custom-select" style="height: 40px" required>
                                <option selected hidden>Pilih kewarganegaraan</option>
                                @if (old('kewarganegaraan'))
                                    @if (old('kewarganegaraan') == 'Warga Negara Indonesia')
                                        <option selected value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                        <option value="Warga Negara Asing">Warga Negara Asing</option>
                                    @elseif(old('kewarganegaraan') == 'Warga Negara Asing')
                                        <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                        <option selected value="Warga Negara Asing">Warga Negara Asing</option>
                                    @endif
                                @else
                                    <option selected hidden>Pilih kewarganegaraan</option>
                                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                    <option value="Warga Negara Asing">Warga Negara Asing</option>
                                @endif
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
                                <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3" required>{{ old('alamat') ?? '' }}</textarea>
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
                                <input name="telepon" type="text" class="form-control form-control-sm"
                                    placeholder="Nomor handphone" style="height: 40px"
                                    value="{{ old('telepon') ?? '' }}" required>
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
                            <span class="d-inline-block mt-2" required>Tanggal Kejadian</span>
                        </td>
                        <td>
                            <input name="tanggalKejadian" type="date" class="form-control" style="height: 40px"
                                value="{{ old('tanggalKejadian') ?? '' }}" required>
                        </td>
                    </tr>

                    {{-- Lokasi Kejadian --}}
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Lokasi Kejadian Kehilangan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="lokasiKejadian" type="text" class="form-control form-control-sm"
                                    placeholder="Lokasi kejadian" style="height: 40px"
                                    value="{{ old('lokasiKejadian') ?? '' }}" required>
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
                                <textarea name="suratHilang" placeholder="Surat Hilang" class="form-control" rows="3" required></textarea>
                            </div>
                        </td>
                    </tr>

                    {{-- Surat pernyataan --}}
                    <tr>
                        <td class="pb-4">
                            <button name="downloadPernyataan" value="downloadPernyataan" type="submit"
                                class="btn btn-primary">
                                Surat Pernyataan Keaslian Dokumen
                            </button>
                        </td>
                    </tr>
                </table>


                <h1 style="font-size: 24px">Upload Data dan Lokasi Pengambilan :</h1>
                <hr>
                <table class="table table-sm table-borderless">
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Foto identitas pelapor (KTP)</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="fotoKtp" type="file" class="form-control-file"
                                    accept=".jpg,.jpeg,.png" {{ session('dokumenDownloaded') ? 'required' : '' }}>
                                <small style="font-size: 80%">.jpg, .jpeg, .png</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Foto pelapor sambil membawa identitas</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="fotoPelapor" type="file" class="form-control-file"
                                    accept=".jpg,.jpeg,.png" {{ session('dokumenDownloaded') ? 'required' : '' }}>
                                <small style="font-size: 80%">.jpg, .jpeg, .png</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Rekomendasi dari instansi yang mengeluarkan</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="rekomendasiInstansi" type="file" class="form-control-file"
                                    accept=".pdf,.jpg,.jpeg,.png"
                                    {{ session('dokumenDownloaded') ? 'required' : '' }}>
                                <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-inline-block mt-2">Dokumen tambahan (bila diperlukan)</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input name="dokumenTambahan" type="file" class="form-control-file"
                                    accept=".pdf,.jpg,.jpeg,.png">
                                <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            {{-- <div class="custom-control custom-checkbox">
                                <input name="persetujuan" type="checkbox" class="custom-control-input"
                                    id="persetujuan">
                                <label class="custom-control-label" for="persetujuan">
                                    Dengan mengklik tombol ini berarti anda telah setuju bahwa data yang anda masukkan
                                    sudah
                                    benar.
                                </label>
                            </div> --}}
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            {{-- <button type="submit" class="btn btn-primary" data-toggle="modal"
                                    data-target="#successModal">Kirim</button> --}}

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
