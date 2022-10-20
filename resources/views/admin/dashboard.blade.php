@extends('layout.admin-template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1 class="mb-4">Dashboard</h1>
            </div>
            <div class="col-6 d-flex justify-content-end mt-2">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
                    rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

                {{-- Export PDF per Wilayah --}}
                <div>
                    <button id="filterDateWilayah" class="btn btn-primary btn-sm mt-1" data-bs-toggle="modal"
                        data-bs-target="#requestTtdKanit" title="Download PDF per Wilayah">
                        <i class="bi bi-pen"></i> Request TTD Kanit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="requestTtdKanit" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="filterDateWilayahForm" action="/admin/request-ttd-kanit" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Upload File :</label>
                                            <input name="files[]" class="form-control" type="file" id="file"
                                                multiple>
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan :</label>
                                            <textarea name="keterangan" class="form-control" id="keterangan" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        $("#startPDF").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });

                        $("#endPDF").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });
                    </script>
                </div>

                {{-- Export PDF per Wilayah --}}
                <div>
                    <button id="filterDateWilayah" class="btn" data-bs-toggle="modal"
                        data-bs-target="#laporanWilayahModalPDF" title="Download PDF per Wilayah">
                        <i class="fa-solid fa-file-pdf fa-2x text-danger"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="laporanWilayahModalPDF" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form target="_blank" id="filterDateWilayahForm" action="/admin/laporan-wilayah/pdf"
                                    method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Periode Laporan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @csrf
                                        <label for="">Pilih Periode :</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" class="form-control" name="start" id="startPDF" />
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control" name="end" id="endPDF" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        $("#startPDF").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });

                        $("#endPDF").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });
                    </script>
                </div>

                {{-- Export Excel per Wilayah --}}
                <div>
                    <button id="filterDateWilayah" class="btn" data-bs-toggle="modal"
                        data-bs-target="#laporanWilayahModalExcel" title="Download Excel per Wilayah">
                        <i class="fa-solid fa-file-excel fa-2x text-success"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="laporanWilayahModalExcel" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form target="_blank" id="filterDateWilayahForm" action="/admin/laporan-wilayah/excel"
                                    method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Periode Laporan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @csrf
                                        <label for="">Pilih Periode :</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" class="form-control" name="start"
                                                    id="startExcel" />
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control" name="end"
                                                    id="endExcel" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        $("#startExcel").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });

                        $("#endExcel").datepicker({
                            format: "mm-yyyy",
                            startView: "months",
                            minViewMode: "months",
                            endDate: "0m"
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            {{-- Jumlah Laporan SKTLK --}}
            <div class="col-4">
                <a href="/admin/sktlk">
                    <div class="card radius-10 border-0 border-start border-tiffany border-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1 text-dark">Laporan SKTLK</p>
                                    <h4 class="mb-0 text-tiffany">{{ $countSKTLK }}</h4>
                                </div>
                                <div class="ms-auto widget-icon bg-tiffany text-white">
                                    <i class="bi bi-card-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Jumlah Laporan SIK --}}
            <div class="col-4">
                <a href="/admin/sik">
                    <div class="card radius-10 border-0 border-start border-success border-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1 text-dark">Laporan SIK</p>
                                    <h4 class="mb-0 text-success">{{ $countSIK }}</h4>
                                </div>
                                <div class="ms-auto widget-icon bg-success text-white">
                                    <i class="bi bi-card-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Jumlah Laporan SP2HP --}}
            <div class="col-4">
                <a href="/admin/sp2hp">
                    <div class="card radius-10 border-0 border-start border-warning border-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1 text-dark">Laporan SP2HP</p>
                                    <h4 class="mb-0 text-warning">{{ $countSP2HP }}</h4>
                                </div>
                                <div class="ms-auto widget-icon bg-warning text-white">
                                    <i class="bi bi-card-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                {{-- Tampilkan laporan SKTLK jika ada --}}
                @if (isset($laporanSKTLK))
                    <div class="card">
                        <div class="card-header pt-3 pb-1">
                            <h6>Laporan SKTLK</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table table-borderless">
                                <thead style="border-bottom: 1px solid black">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Kejadian</th>
                                        <th>Lokasi Kejadian</th>
                                        <th>Surat-surat Hilang</th>
                                        <th>Bukti Dokumen</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($laporanSKTLK as $i => $sktlk)
                                        <tr>
                                            <td>{{ $laporanSKTLK->firstItem() + $i }}</td>
                                            <td>{{ $sktlk->nama_lengkap }}</td>
                                            <td>{{ $sktlk->alamat }}</td>
                                            <td>{{ $sktlk->tanggal_kejadian }}</td>
                                            <td>{{ $sktlk->lokasi_kejadian }}</td>
                                            <td>{{ $sktlk->surat_hilang }}</td>
                                            <td>
                                                {{-- Tombol detail dokumen --}}
                                                <a href="#" title="Tampilkan Detail Dokumen" data-bs-toggle="modal"
                                                    data-bs-target="#detail-modal-sktlk-{{ $sktlk->id }}">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                </a>
                                            </td>
                                            <td>
                                                {{-- Tombol upload --}}
                                                <a href="#" class="" title="Upload File"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#upload-modal-{{ $sktlk->id }}">
                                                    <i class="bi bi-upload"></i>
                                                </a>

                                                {{-- Tombol hapus --}}
                                                <a href="/admin/sktlk/hapus/{{ $sktlk->id }}" title="Hapus"
                                                    onclick="return confirm('Apakah anda yakin untuk menghapus data SKTLK ?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>

                                                {{-- ===================================== --}}

                                                {{-- Popup Upload File --}}
                                                <div class="modal fade" id="upload-modal-{{ $sktlk->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload File
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/admin/sktlk/upload-file" method="POST"
                                                                enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    @csrf
                                                                    {{-- Input file --}}
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $sktlk->id }}">
                                                                    <div class="mb-3">
                                                                        <label for="file" class="form-label">File
                                                                            :</label>
                                                                        <input name="file" class="form-control"
                                                                            type="file" id="file" accept=".pdf">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Upload</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Popup Detail Dokumen --}}
                                                <div class="modal fade" id="detail-modal-sktlk-{{ $sktlk->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                                    Dokumen
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @php
                                                                    $sktlkDocument = getSKTLKDocumentById($sktlk->id);
                                                                @endphp
                                                                <div id="carouselExampleControls-{{ $sktlk->id }}"
                                                                    class="carousel slide" data-bs-ride="carousel">
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
                                                                                    class="d-block w-100"
                                                                                    alt="Rekomendasi Instansi">
                                                                            </div>
                                                                        @endif

                                                                        {{-- Pernyataan Keaslian --}}
                                                                        @if (isImage($sktlkDocument['pernyataanKeaslian']))
                                                                            <div class="carousel-item">
                                                                                <img src="{{ asset('assets-user/upload/' . $sktlkDocument['pernyataanKeaslian']) }}"
                                                                                    class="d-block w-100"
                                                                                    alt="Rekomendasi Instansi">
                                                                            </div>
                                                                        @endif

                                                                        {{-- Dokumen Tambahan --}}
                                                                        @if (isImage($sktlkDocument['dokumenTambahan']))
                                                                            <div class="carousel-item">
                                                                                <img src="{{ asset('assets-user/upload/' . $sktlkDocument['dokumenTambahan']) }}"
                                                                                    class="d-block w-100"
                                                                                    alt="Rekomendasi Instansi">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button"
                                                                        data-bs-target="#carouselExampleControls-{{ $sktlk->id }}"
                                                                        data-bs-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button"
                                                                        data-bs-target="#carouselExampleControls-{{ $sktlk->id }}"
                                                                        data-bs-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                            aria-hidden="true"></span>
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
                                    @empty
                                        <h6 class="text-center">Tidak ada laporan.</h6>
                                    @endforelse

                                </tbody>
                            </table>

                            {{-- Nomor / pagination --}}
                            <div class="w-100 d-flex justify-content-end pt-3">
                                {{ $laporanSKTLK->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if (isset($laporanSIK))
                    <div class="card">
                        <div class="card-header pt-3 pb-1">
                            <h6>Laporan SIK</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-scrollable">
                                <table class="table table table-borderless">
                                    <thead style="border-bottom: 1px solid black">
                                        <tr>
                                            <th>No.</th>
                                            <th>Dokumen</th>
                                            <th>Status</th>
                                            <th>Nama Organisasi</th>
                                            <th>Nama Penanggungjawab</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                            <th>Bentuk Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Lokasi Kegiatan</th>
                                            <th>Dalam Rangka</th>
                                            <th>Jumlah Undangan</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laporanSIK as $i => $sik)
                                            <tr>
                                                <td>{{ $laporanSIK->firstItem() + $i }}</td>
                                                {{-- Pop-up dokumen --}}
                                                <td>
                                                    <center>
                                                        {{-- Tombol detail dokumen --}}
                                                        <a href="#" title="Tampilkan Detail Dokumen"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detail-modal-sik-{{ $sik->id }}">
                                                            <i class="bi bi-info-circle-fill"></i>
                                                        </a>
                                                    </center>
                                                </td>

                                                {{-- Status --}}
                                                <td>
                                                    @if ($sik->status === 1)
                                                        {{-- centang --}}
                                                        <i class="bi bi-check-circle-fill text-success"
                                                            title="Disetujui"></i>
                                                    @elseif($sik->status === 0)
                                                        {{-- x --}}
                                                        <i class="bi bi-x-circle-fill text-danger" title="Ditolak"></i>
                                                    @else
                                                        -
                                                    @endif
                                                </td>

                                                <td>{{ $sik->nama_organisasi ?? '-' }}</td>
                                                <td>{{ $sik->nama_penanggung_jawab ?? '-' }}</td>
                                                <td>{{ $sik->pekerjaan ?? '-' }}</td>
                                                <td>{{ $sik->alamat ?? '-' }}</td>
                                                <td>{{ $sik->bentuk_kegiatan ?? '-' }}</td>
                                                <td>{{ $sik->tanggal_kegiatan ?? '-' }}</td>
                                                <td>{{ $sik->waktu_mulai ?? '-' }}</td>
                                                <td>{{ $sik->waktu_selesai ?? '-' }}</td>
                                                <td>{{ $sik->lokasi_kegiatan ?? '-' }}</td>
                                                <td>{{ $sik->dalam_rangka ?? '-' }}</td>
                                                <td>{{ $sik->jumlah_undangan ?? '-' }}</td>

                                                <td class="d-flex gap-2">
                                                    {{-- Tombol upload --}}
                                                    <a href="#" class="" title="Upload File"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#upload-modal-{{ $sik->id }}">
                                                        <i class="bi bi-upload"></i>
                                                    </a>

                                                    {{-- Popup upload file --}}
                                                    <div class="modal fade" id="upload-modal-{{ $sik->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload
                                                                        File
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form action="/admin/sik/upload-file" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        {{-- Input file --}}
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $sik->id }}">
                                                                        <div class="mb-3">
                                                                            <label for="file" class="form-label">File
                                                                                :</label>
                                                                            <input name="file" class="form-control"
                                                                                type="file" id="file"
                                                                                accept=".pdf">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Tombol Hapus SIK --}}
                                                    <a href="/admin/sik/hapus/{{ $sik->id }}" title="Hapus"
                                                        onclick="return confirm('Apakah anda yakin untuk menghapus data SIK ?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                </td>

                                                {{-- Pop up Detail Dokumen --}}
                                                <div class="modal fade" id="detail-modal-sik-{{ $sik->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                                    Dokumen
                                                                    Persyaratan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @php
                                                                    $sikDocument = getSIKDocumentById($sik->id);
                                                                @endphp

                                                                {{-- Foto KTP --}}
                                                                @if ($sikDocument['fotoKtp'])
                                                                    <a target="_blank"
                                                                        href="{{ asset('assets-user/upload/' . $sikDocument['fotoKtp']) }}"
                                                                        class="d-block btn my-1 text-start">
                                                                        <i class="bi bi-arrow-down-circle-fill"></i>
                                                                        Foto KTP
                                                                    </a>
                                                                @endif

                                                                {{-- Dokumen Tambahan --}}
                                                                @if ($sikDocument['fotoPelapor'])
                                                                    <a target="_blank"
                                                                        href="{{ asset('assets-user/upload/' . $sikDocument['fotoPelapor']) }}"
                                                                        class="d-block btn my-1 text-start">
                                                                        <i class="bi bi-arrow-down-circle-fill"></i>
                                                                        Foto Pelapor
                                                                    </a>
                                                                @endif

                                                                {{-- Link Download Proposal Kegiatan --}}
                                                                <a target="_blank"
                                                                    href="{{ asset('assets-user/upload/' . $sikDocument['proposalKegiatan']) }}"
                                                                    class="d-block btn my-1 text-start">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                    Download Proposal Kegiatan
                                                                </a>

                                                                {{-- Link Download Izin Tempat --}}
                                                                <a target="_blank"
                                                                    href="{{ asset('assets-user/upload/' . $sikDocument['izinTempat']) }}"
                                                                    class="d-block btn my-1 text-start">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                    Download Izin Tempat
                                                                </a>

                                                                {{-- Link Download Izin Instansi --}}
                                                                <a target="_blank"
                                                                    href="{{ asset('assets-user/upload/' . $sikDocument['izinInstansi']) }}"
                                                                    class="d-block btn my-1 text-start">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                    Download Izin Instansi
                                                                </a>

                                                                {{-- Link Download Fotokopi Paspor --}}
                                                                @if ($sikDocument['fotokopiPaspor'])
                                                                    <a target="_blank"
                                                                        href="{{ asset('assets-user/upload/' . $sikDocument['fotokopiPaspor']) }}"
                                                                        class="d-block btn my-1 text-start">
                                                                        <i class="bi bi-arrow-down-circle-fill"></i>
                                                                        Download Fotokopi Paspor
                                                                    </a>
                                                                @endif

                                                                {{-- Link Download Rekomendasi Polsek --}}
                                                                <a target="_blank"
                                                                    href="{{ asset('assets-user/upload/' . $sikDocument['rekomendasiPolsek']) }}"
                                                                    class="d-block btn my-1 text-start">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                    Download Rekomendasi Polsek
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Pop up Penolakan --}}
                                                <div class="modal fade" id="tolak-modal-{{ $sik->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Alasan
                                                                    Penolakan
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <form action="/admin/sik/tolak" method="POST">
                                                                <div class="modal-body" style="height: 250px">
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $sik->id }}">
                                                                        <label for="alasanPenolakan"
                                                                            class="form-label">Masukkan
                                                                            alasan pada kolom
                                                                            di bawah ini :</label>
                                                                        <textarea name="alasanPenolakan" class="form-control" id="alasanPenolakan" rows="6"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    {{-- Tombol Kirim --}}
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Kirim</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        @empty
                                            <h6 class="text-center">Tidak ada laporan.</h6>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="w-100 d-flex justify-content-end pt-3">
                                {{ $laporanSIK->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if (isset($laporanSP2HP))
                    <div class="card">
                        <div class="card-header pt-3 pb-1">
                            <h6>Laporan SP2HP</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table table-borderless">
                                <thead style="border-bottom: 1px solid black">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Status</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Detail Kejadian</th>
                                        <th>Lampiran</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($laporanSP2HP as $i => $item)
                                        <tr>
                                            <td>{{ $laporanSP2HP->firstItem() + $i }}</td>
                                            <td>{{ $item->nama_lengkap }}</td>

                                            {{-- Status --}}
                                            <td>
                                                @if ($item->status === 1)
                                                    {{-- centang --}}
                                                    <i class="bi bi-check-circle-fill text-success" title="Valid"></i>
                                                @elseif($item->status === 0)
                                                    {{-- x --}}
                                                    <i class="bi bi-x-circle-fill text-danger" title="Tidak Valid"></i>
                                                @else
                                                    -
                                                @endif
                                            </td>

                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->judul_laporan }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>
                                                {{-- Tombol detail dokumen --}}
                                                <a href="#" title="Tampilkan Detail Kejadian"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detail-modal-sp2hp-{{ $item->id }}">
                                                    <i class="bi bi-info-circle-fill"></i> Detail
                                                </a>
                                            </td>
                                            <td>
                                                @if ($item->lampiran != '')
                                                    <a href="{{ asset('assets-user/upload/') . '/' . $item->lampiran }}"
                                                        target="_blank" title="Download Lampiran">
                                                        <i class="bi bi-download"></i> Lampiran
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-end gap-1">
                                                {{-- Tombol download --}}
                                                @if ($item->status)
                                                    <a target="_blank"
                                                        href="/notifikasi/cetak-pdf/{{ getNotifSP2HP($item->id) }}"
                                                        class="" title="Dok. Validasi">
                                                        <i class="bi bi-download"></i>
                                                    </a>
                                                @endif

                                                {{-- Tombol upload --}}
                                                <a href="#" class="" title="Upload Validasi/Perkembangan"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#upload-modal-{{ $item->id }}">
                                                    <i class="bi bi-upload"></i>
                                                </a>

                                                {{-- Tombol hapus --}}
                                                <a href="/admin/sp2hp/hapus/{{ $item->id }}" title="Hapus"
                                                    onclick="return confirm('Apakah anda yakin untuk menghapus data SP2HP ?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>

                                                {{-- Tombol selesai --}}
                                                @if ($item->perkembangan == 'Selesai')
                                                    <a title="Telah Selesai">
                                                        <i class="bi bi-check-circle-fill text-success"></i>
                                                    </a>
                                                @else
                                                    <a href="/admin/sp2hp/selesai/{{ $item->id }}"
                                                        title="Selesaikan Laporan"
                                                        onclick="return confirm('Selesaikan Pelaporan ?')">
                                                        <i class="bi bi-check-circle-fill text-secondary"></i>
                                                    </a>
                                                @endif

                                                {{-- ===================================== --}}

                                                {{-- Popup Upload File --}}
                                                <div class="modal fade" id="upload-modal-{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload File
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/admin/sp2hp/upload-keterangan" method="POST"
                                                                enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    @csrf
                                                                    {{-- Input file --}}
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $item->id }}">
                                                                    <div class="mb-3">
                                                                        <label for="file" class="form-label">File
                                                                            :</label>
                                                                        <input name="file" class="form-control"
                                                                            type="file" id="file" accept=".pdf">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <span
                                                                            class="d-inline-block my-2">Keterangan:</span>
                                                                        <div class="form-group">
                                                                            <textarea name="keterangan" placeholder="Keterangan" class="form-control" rows="3"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Upload</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Popup Detail Kejadian --}}
                                                <div class="modal fade" id="detail-modal-sp2hp-{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                                    Kejadian
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Tanggal Kejadian</h6>
                                                                <span>{{ $item->tanggal_kejadian }}</span>

                                                                <h6 class="mt-4">Isi Laporan:</h6>
                                                                <span>{{ $item->isi_laporan }}</span>

                                                                <h6 class="mt-4">Lokasi Kejadian:</h6>
                                                                <span>{{ $item->lokasi_kejadian }} |
                                                                    {{ $item->detail_lokasi_kejadian }}</span>
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
                                    @empty
                                        <h6 class="text-center">Tidak ada laporan.</h6>
                                    @endforelse

                                </tbody>
                            </table>

                            <div class="w-100 d-flex justify-content-end pt-3">
                                {{ $laporanSP2HP->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
