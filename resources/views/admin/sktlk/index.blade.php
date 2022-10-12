@extends('layout.admin-template')

@section('content')
    {{-- Alert success --}}
    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <div class="mx-2">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-6">
                <h3>Laporan SKTLK</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <!-- Include Required Prerequisites -->
                <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
                <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> --}}

                <!-- Include Date Range Picker -->
                <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
                <link rel="stylesheet" type="text/css"
                    href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

                <span class="mt-4 mx-2">Filter Tanggal : </span>

                <form id="filterDateForm" action="/admin/sktlk/filter-date" method="POST">
                    @csrf
                    <input name="dateFilter" type="text" class="d-inline-block form-control w-50 mt-3" id="filterDate">
                </form>

                <script type="text/javascript">
                    $('#filterDate').daterangepicker({
                        "alwaysShowCalendars": true,
                        "parentEl": "body",
                        "startDate": "10/03/2022",
                        "endDate": "10/09/2022",
                        "opens": "left"
                    }, function(start, end, label) {
                        $('#filterDate').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
                        $("#filterDateForm").submit();
                    });
                </script>
            </div>
        </div>
    </div>

    @if (count($laporanSKTLK) > 0)
        <table class="table table table-borderless mt-3">
            <thead style="border-bottom: 1px solid black">
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tanggal Kejadian</th>
                    <th>Lokasi Kejadian</th>
                    <th>Surat-surat Hilang</th>
                    <th>Bukti Dokumen</th>
                    <th>Dilaporkan Pada</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporanSKTLK as $i => $sktlk)
                    <tr>
                        <td>{{ $laporanSKTLK->firstItem() + $i }}</td>
                        <td>{{ $sktlk->nama_lengkap }}</td>
                        <td>{{ $sktlk->alamat }}</td>
                        <td>{{ $sktlk->tanggal_kejadian }}</td>
                        <td>{{ $sktlk->lokasi_kejadian }}, {{ $sktlk->detail_lokasi_kejadian }}</td>
                        <td>{{ $sktlk->surat_hilang }}</td>
                        <td>
                            {{-- Tombol detail dokumen --}}
                            <a href="#" title="Tampilkan Detail Dokumen" data-bs-toggle="modal"
                                data-bs-target="#detail-modal-{{ $sktlk->id }}">
                                <i class="bi bi-info-circle-fill"></i>
                            </a>
                        </td>
                        <td>{{ dateTimeFormat($sktlk->dilaporkan_pada) }}</td>
                        <td>
                            {{-- Tombol upload --}}
                            <a href="#" class="" title="Upload File" data-bs-toggle="modal"
                                data-bs-target="#upload-modal-{{ $sktlk->id }}">
                                <i class="bi bi-upload"></i>
                            </a>

                            {{-- Tombol ubah --}}
                            {{-- <a href="#" class="" title="Ubah">
                            <i class="bi bi-pencil-square"></i>
                        </a> --}}

                            {{-- Tombol hapus --}}
                            <a href="/admin/sktlk/hapus/{{ $sktlk->id }}" title="Hapus"
                                onclick="return confirm('Apakah anda yakin untuk menghapus data SKTLK ?')">
                                <i class="bi bi-trash-fill"></i>
                            </a>

                            {{-- ===================================== --}}

                            {{-- Popup Upload File --}}
                            <div class="modal fade" id="upload-modal-{{ $sktlk->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/admin/sktlk/upload-file" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf
                                                {{-- Input file --}}
                                                <input type="hidden" name="id" value="{{ $sktlk->id }}">
                                                <div class="mb-3">
                                                    <label for="file" class="form-label">File :</label>
                                                    <input name="file" class="form-control" type="file" id="file"
                                                        accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Popup Detail Dokumen --}}
                            <div class="modal fade" id="detail-modal-{{ $sktlk->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Dokumen</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @php
                                                $sktlkDocument = getSKTLKDocumentById($sktlk->id);
                                            @endphp
                                            <div id="carouselExampleControls-{{ $sktlk->id }}" class="carousel slide"
                                                data-bs-ride="carousel">
                                                {{-- Slideshow gambar --}}
                                                <div class="carousel-inner">
                                                    {{-- Gambar foto KTP --}}
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets-user/upload/' . $sktlkDocument['fotoKTP']) }}"
                                                            class="d-block w-100" alt="Foto KTP">
                                                    </div>

                                                    {{-- Gambar foto pelapor --}}
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('assets-user/upload/' . $sktlkDocument['fotoPelapor']) }}"
                                                            class="d-block w-100" alt="Foto Pelapor">
                                                    </div>

                                                    {{-- Rekomendasi instansi --}}
                                                    @if (isImage($sktlkDocument['rekomendasiInstansi']))
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets-user/upload/' . $sktlkDocument['rekomendasiInstansi']) }}"
                                                                class="d-block w-100" alt="Rekomendasi Instansi">
                                                        </div>
                                                    @endif

                                                    {{-- Pernyataan Keaslian --}}
                                                    @if (isImage($sktlkDocument['pernyataanKeaslian']))
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets-user/upload/' . $sktlkDocument['pernyataanKeaslian']) }}"
                                                                class="d-block w-100" alt="Rekomendasi Instansi">
                                                        </div>
                                                    @endif

                                                    {{-- Dokumen Tambahan --}}
                                                    @if (isImage($sktlkDocument['dokumenTambahan']))
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets-user/upload/' . $sktlkDocument['dokumenTambahan']) }}"
                                                                class="d-block w-100" alt="Rekomendasi Instansi">
                                                        </div>
                                                    @endif
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControls-{{ $sktlk->id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControls-{{ $sktlk->id }}"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>

                                            {{-- Rekomendasi Instansi --}}
                                            @if (!isImage($sktlkDocument['rekomendasiInstansi']))
                                                <a target="_blank"
                                                    href="{{ asset('assets-user/upload/' . $sktlkDocument['rekomendasiInstansi']) }}"
                                                    class="d-block btn mb-1 mt-4">
                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                    Rekomendasi Instansi
                                                </a>
                                            @endif

                                            {{-- Pernyataan Keaslian --}}
                                            @if ($sktlkDocument['pernyataanKeaslian'])
                                                @if (!isImage($sktlkDocument['pernyataanKeaslian']))
                                                    <a target="_blank"
                                                        href="{{ asset('assets-user/upload/' . $sktlkDocument['pernyataanKeaslian']) }}"
                                                        class="d-block btn my-1">
                                                        <i class="bi bi-arrow-down-circle-fill"></i>
                                                        Pernyataan Keaslian
                                                    </a>
                                                @endif
                                            @endif

                                            {{-- Dokumen Tambahan --}}
                                            @if ($sktlkDocument['dokumenTambahan'])
                                                @if (!isImage($sktlkDocument['dokumenTambahan']))
                                                    <a target="_blank"
                                                        href="{{ asset('assets-user/upload/' . $sktlkDocument['dokumenTambahan']) }}"
                                                        class="d-block btn my-1">
                                                        <i class="bi bi-arrow-down-circle-fill"></i>
                                                        Dokumen Tambahan
                                                    </a>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="w-100 d-flex justify-content-end pt-3">
            {{ $laporanSKTLK->links() }}
        </div>
    @else
        <center>Tidak ada laporan.</center>
    @endif
@endsection
