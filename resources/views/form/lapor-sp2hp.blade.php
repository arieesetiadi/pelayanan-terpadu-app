<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Lapor | Tindak Kriminal</title>

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
        <div class="container py-5 styled-bg" style="padding: 0 8%">
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

            <div class="card shadow p-5 my-5">
                <div class="card-body">
                    <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                        data-aos-duration="500">Form Pelaporan Tindak Kriminal</h1>

                    <form action="/lapor-sp2hp" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($laporan))
                            <input type="hidden" name="id" value="{{ $laporan->id }}">
                            <input type="hidden" name="reupload" value="true">
                        @endif

                        {{-- Form Data Diri --}}
                        <h1 style="font-size: 24px">Data Diri :</h1>
                        <hr>
                        <table class="table table-sm table-borderless">
                            {{-- Nama Lengkap --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Nama Lengkap</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="namaLengkap" type="text" class="form-control form-control-sm"
                                            placeholder="Nama lengkap" style="height: 40px" required
                                            value="{{ isset($laporan) ? $laporan->nama_lengkap : '' }}">
                                    </div>
                                </td>
                            </tr>

                            {{-- Tempat tanggal lahir --}}
                            <tr style="margin-bottom: 50px">
                                <td>
                                    <span class="d-inline-block mt-2">Tempat & Tanggal lahir</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="tempatLahir" type="text"
                                            class="form-control d-inline-block float-left" placeholder="Tempat lahir"
                                            style="height: 40px; width: 48%; margin-right: 2%" required
                                            value="{{ isset($laporan) ? $laporan->tempat_lahir : '' }}">
                                        <input name="tanggalLahir" type="date"
                                            class="form-control w-50 d-inline-block float-left" style="height: 40px"
                                            required value="{{ isset($laporan) ? $laporan->tanggal_lahir : '' }}">
                                    </div>
                                </td>
                            </tr>

                            {{-- Pekerjaan --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Pekerjaan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="pekerjaan" type="text" class="form-control form-control-sm"
                                            placeholder="Pekerjaan" style="height: 40px" required
                                            value="{{ isset($laporan) ? $laporan->pekerjaan : '' }}">
                                    </div>
                                </td>
                            </tr>

                            {{-- Kewarganegaraan --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Kewarganegaraan</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <select name="kewarganegaraan" class="custom-select" style="height: 40px" required>
                                        @if (isset($laporan))
                                            @if ($laporan->kewarganegaraan == 'Warga Negara Indonesia')
                                                <option selected value="Warga Negara Indonesia">Warga Negara Indonesia
                                                </option>
                                                <option value="Warga Negara Asing">Warga Negara Asing</option>
                                            @else
                                                <option value="Warga Negara Indonesia">Warga Negara Indonesia
                                                </option>
                                                <option selected value="Warga Negara Asing">Warga Negara Asing</option>
                                            @endif
                                        @else
                                            <option selected hidden>Pilih kewarganegaraan</option>
                                            <option value="Warga Negara Indonesia">Warga Negara Indonesia
                                            </option>
                                            <option value="Warga Negara Asing">Warga Negara Asing</option>
                                        @endif
                                    </select>
                                </td>
                            </tr>

                            {{-- Alamat --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Alamat</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3" required>{{ isset($laporan) ? $laporan->alamat : '' }}</textarea>
                                    </div>
                                </td>
                            </tr>

                            {{-- No HP --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">No. Handphone</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="telepon" type="text" class="form-control form-control-sm"
                                            placeholder="Nomor handphone" style="height: 40px" required
                                            value="{{ isset($laporan) ? $laporan->telepon : '' }}">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        {{-- Kronologi Singkat --}}
                        <h1 style="font-size: 24px">Kronologi Singkat :</h1>
                        <hr>
                        <table class="table table-sm table-borderless">
                            {{-- Judul laporan --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Judul Laporan :</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <input name="judulLaporan" type="text" class="form-control"
                                        style="height: 40px" placeholder="Judul laporan" required
                                        value="{{ isset($laporan) ? $laporan->judul_laporan : '' }}">
                                </td>
                            </tr>

                            {{-- Isi laporan --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Isi Laporan :</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <textarea name="isiLaporan"
                                            placeholder="Tuliskan detil kejadian, meliputi nama pelaku, jumlah kerugian, dan keterangan lainnya secara lengkap"
                                            class="form-control" rows="3" required>{{ isset($laporan) ? $laporan->isi_laporan : '' }}</textarea>
                                    </div>
                                </td>
                            </tr>

                            {{-- Tanggal kejadian --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Tanggal Kejadian :</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <input name="tanggalKejadian" type="date" class="form-control"
                                        style="height: 40px" placeholder="Tanggal Kejadian" required
                                        value="{{ isset($laporan) ? $laporan->tanggal_kejadian : '' }}">
                                </td>
                            </tr>

                            {{-- Lokasi Kejadian --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Lokasi Kejadian :</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <select name="lokasiKejadian" class="custom-select" style="height: 40px"
                                        required>
                                        <option selected value="" hidden>Pilih Lokasi Kejadian</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Abiansemal' ? 'selected' : '' }}
                                            value="Abiansemal">Abiansemal</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Kuta' ? 'selected' : '' }}
                                            value="Kuta">Kuta</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Kuta Selatan' ? 'selected' : '' }}
                                            value="Kuta Selatan">Kuta Selatan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Kuta Utara' ? 'selected' : '' }}
                                            value="Kuta Utara">Kuta Utara</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Mengwi' ? 'selected' : '' }}
                                            value="Mengwi">Mengwi</option>
                                        <option
                                            {{ isset($laporan) && $laporan->lokasi_kejadian == 'Petang' ? 'selected' : '' }}
                                            value="Petang">Petang</option>
                                    </select>
                                    <div class="form-group mt-2">
                                        <textarea name="detailLokasiKejadian" placeholder="Detail lokasi kejadian" class="form-control" rows="3"
                                            required>{{ isset($laporan) ? $laporan->detail_lokasi_kejadian : '' }}</textarea>
                                    </div>
                                </td>
                            </tr>

                            {{-- Kategori --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Kategori :</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <select name="kategori" class="custom-select" style="height: 40px" required>
                                        <option selected value="" hidden>Pilih Kategori</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Pencurian' ? 'selected' : '' }}
                                            value="Pencurian">Pencurian</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Penganiayaan' ? 'selected' : '' }}
                                            value="Penganiayaan">Penganiayaan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Pembunuhan' ? 'selected' : '' }}
                                            value="Pembunuhan">Pembunuhan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Pemerkosaan' ? 'selected' : '' }}
                                            value="Pemerkosaan">Pemerkosaan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Perzinahan' ? 'selected' : '' }}
                                            value="Perzinahan">Perzinahan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Kesusilaan/Cabul' ? 'selected' : '' }}
                                            value="Kesusilaan/Cabul">Kesusilaan/Cabul</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Penggelapan' ? 'selected' : '' }}
                                            value="Penggelapan">Penggelapan</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Penipuan/Perbuatan Curang' ? 'selected' : '' }}
                                            value="Penipuan/Perbuatan Curang">Penipuan/Perbuatan Curang</option>
                                        <option {{ isset($laporan) && $laporan->kategori == 'KDRT' ? 'selected' : '' }}
                                            value="KDRT">KDRT</option>
                                        <option
                                            {{ isset($laporan) && $laporan->kategori == 'Pelanggaran HAM' ? 'selected' : '' }}
                                            value="Pelanggaran HAM">Pelanggaran HAM</option>
                                    </select>
                                </td>
                            </tr>

                            {{-- Terlapor / Pelaku --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Terlapor / Pelaku :</span>
                                </td>
                                <td>
                                    <input name="terlapor" type="text" class="form-control" style="height: 40px"
                                        placeholder="Terlapor / pelaku"
                                        value="{{ isset($laporan) ? $laporan->terlapor : '' }}">
                                </td>
                            </tr>

                            {{-- Saksi - saksi --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Saksi - saksi :</span>
                                </td>
                                <td>
                                    <div>
                                        <div id="saksiContainer"
                                            data-count="{{ isset($saksi) ? count($saksi->nama) : 1 }}">
                                            @if (isset($saksi))
                                                @for ($i = 0; $i < count($saksi->nama); $i++)
                                                    <div id="saksi-{{ $i + 1 }}">
                                                        <div>
                                                            <span style="font-weight: bolder"
                                                                class="m-{{ $i + 1 }} d-inline-block">Saksi
                                                                - {{ $i + 1 }}</span>
                                                            @if ($i > 0)
                                                                <a id="hapusSaksi-{{ $i + 1 }}" href="#hapus"
                                                                    class="text-danger hapusSaksi mb-1 d-inline-block"
                                                                    onClick="deleteSaksiForm({{ $i + 1 }})"
                                                                    title="Hapus Saksi {{ $i + 1 }}">
                                                                    <i class="fa-solid fa-circle-minus"></i>
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <input name="namaSaksi-{{ $i + 1 }}" type="text"
                                                            class="form-control" style="height: 40px"
                                                            placeholder="Nama saksi" value="{{ $saksi->nama[$i] }}">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input name="umurSaksi-{{ $i + 1 }}"
                                                                    type="number" class="form-control"
                                                                    style="height: 40px" placeholder="Umur saksi"
                                                                    value="{{ $saksi->umur[$i] }}">
                                                            </div>
                                                            <div class="col-6">
                                                                <input name="pekerjaanSaksi-{{ $i + 1 }}"
                                                                    type="text" class="form-control"
                                                                    style="height: 40px" placeholder="Pekerjaan saksi"
                                                                    value="{{ $saksi->pekerjaan[$i] }}">
                                                            </div>
                                                        </div>
                                                        <input name="alamatSaksi-{{ $i + 1 }}" type="text"
                                                            class="form-control mb-2" style="height: 40px"
                                                            placeholder="Alamat saksi"
                                                            value="{{ $saksi->alamat[$i] }}">
                                                    </div>
                                                @endfor
                                            @else
                                                <div id="saksi-1">
                                                    <div>
                                                        <span style="font-weight: bolder"
                                                            class="m-1 d-inline-block">Saksi
                                                            - 1</span>
                                                    </div>
                                                    <input name="namaSaksi-1" type="text" class="form-control"
                                                        style="height: 40px" placeholder="Nama saksi">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input name="umurSaksi-1" type="number"
                                                                class="form-control" style="height: 40px"
                                                                placeholder="Umur saksi">
                                                        </div>
                                                        <div class="col-6">
                                                            <input name="pekerjaanSaksi-1" type="text"
                                                                class="form-control" style="height: 40px"
                                                                placeholder="Pekerjaan saksi">
                                                        </div>
                                                    </div>
                                                    <input name="alamatSaksi-1" type="text"
                                                        class="form-control mb-2" style="height: 40px"
                                                        placeholder="Alamat saksi">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <a id="tambahSaksi" style="font-size: 80%"
                                        class="btn btn-sm btn-primary mt-2 mb-2">
                                        <i class="fa-solid fa-user-plus"></i>
                                        Tambah Saksi
                                    </a>
                                </td>
                            </tr>

                            {{-- Bukti --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Barang Bukti :</span>
                                </td>
                                <td>
                                    <div id="buktiContainer"
                                        data-count="{{ isset($bukti) ? count($bukti->namaBukti) : 1 }}">
                                        @if (isset($bukti))
                                            @for ($i = 0; $i < count($bukti->namaBukti); $i++)
                                                <div id="bukti-{{ $i + 1 }}" class="row">
                                                    <div class="col-12">
                                                        <span style="font-weight: bolder"
                                                            class="mb-1 mr-2 d-inline-block">Barang
                                                            Bukti - {{ $i + 1 }}</span>
                                                        @if ($i > 0)
                                                            <a id="hapusBukti-{{ $i + 1 }}" href="#hapus"
                                                                class="text-danger mb-2"
                                                                title="Hapus barang bukti {{ $i + 1 }}"
                                                                onClick="deleteBuktiForm({{ $i + 1 }})">
                                                                <i class="fa-solid fa-circle-minus"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="col-6">
                                                        <input name="namaBukti-{{ $i + 1 }}" type="text"
                                                            class="form-control" style="height: 40px"
                                                            placeholder="Nama barang bukti"
                                                            value="{{ $bukti->namaBukti[$i] }}">
                                                    </div>
                                                    <div class="col-6">
                                                        <input name="gambarBukti-{{ $i + 1 }}" type="file"
                                                            class="form-control-file" accept=".jpg,.jpeg,.png">
                                                        <small style="font-size: 80%">Upload foto bukti - .jpg,
                                                            .jpeg, .png</small>
                                                    </div>
                                                </div>
                                            @endfor
                                        @else
                                            <div id="bukti-1" class="row">
                                                <div class="col-12">
                                                    <span style="font-weight: bolder"
                                                        class="mb-1 mr-2 d-inline-block">Barang
                                                        Bukti - 1</span>
                                                </div>
                                                <div class="col-6">
                                                    <input name="namaBukti-1" type="text" class="form-control"
                                                        style="height: 40px" placeholder="Nama barang bukti">
                                                </div>
                                                <div class="col-6">
                                                    <input name="gambarBukti-1" type="file"
                                                        class="form-control-file" accept=".jpg,.jpeg,.png">
                                                    <small style="font-size: 80%">Upload foto bukti - .jpg,
                                                        .jpeg, .png</small>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <a id="tambahBukti" style="font-size: 80%" class="btn btn-sm btn-primary mb-2">
                                        <i class="fa-solid fa-file-circle-plus"></i>
                                        Tambah Bukti
                                    </a>
                                </td>
                            </tr>

                            {{-- Upload KTP --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-3">Foto identitas pelapor (KTP)</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group mt-3">
                                        <input name="fotoKtp" type="file" class="form-control-file"
                                            accept=".pdf,.jpg,.jpeg,.png" required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>

                            {{-- Upload Foto Orang + KTP --}}
                            <tr>
                                <td>
                                    <span class=" mt-2">Foto pelapor sambil membawa identitas</span>
                                    <span class="text-danger">*</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="fotoPelapor" type="file" class="form-control-file"
                                            accept=".pdf,.jpg,.jpeg,.png" required>
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>

                            {{-- Upload lampiran --}}
                            <tr>
                                <td>
                                    <span class="d-inline-block mt-2">Upload Lampiran :</span>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="lampiran" type="file" class="form-control-file"
                                            accept=".pdf,.jpg,.jpeg,.png">
                                        <small style="font-size: 80%">.pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <h6 class="mb-4 text-dark">
                            <span class="font-weight-bolder">Note</span> :
                            <span class="text-danger">*</span>
                            Dokumen wajib diisi
                        </h6>
                        <button type="submit" class="btn btn-primary">Lapor</button>
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
