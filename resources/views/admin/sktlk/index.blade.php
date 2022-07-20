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

    <h3>Laporan SKTLK</h3>

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
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laporanSKTLK as $i => $sktlk)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $sktlk->nama_lengkap }}</td>
                    <td>{{ $sktlk->alamat }}</td>
                    <td>{{ $sktlk->tanggal_kejadian }}</td>
                    <td>{{ $sktlk->lokasi_kejadian }}</td>
                    <td>{{ $sktlk->surat_hilang }}</td>
                    <td>
                        <center>
                            {{-- Tombol detail dokumen --}}
                            <a href="#" title="Tampilkan Detail Dokumen" data-bs-toggle="modal"
                                data-bs-target="#detail-modal-{{ $sktlk->id }}">
                                <i class="bi bi-info-circle-fill"></i>
                            </a>
                        </center>
                    </td>
                    <td>
                        {{-- Tombol upload --}}
                        <a href="#" class="" title="Upload File" data-bs-toggle="modal"
                            data-bs-target="#upload-modal-{{ $sktlk->id }}">
                            <i class="bi bi-upload"></i>
                        </a>

                        {{-- Tombol ubah --}}
                        <a href="#" class="" title="Ubah">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        {{-- Tombol hapus --}}
                        <a href="#" class="" title="Hapus">
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
                                    <form action="/admin/sktlk/upload-file" method="POST" enctype="multipart/form-data">
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
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        {{-- Rekomendasi Instansi --}}
                                        <a target="_blank"
                                            href="{{ asset('assets-user/upload/' . $sktlkDocument['rekomendasiInstansi']) }}"
                                            class="d-block btn mb-1 mt-4">
                                            <i class="bi bi-arrow-down-circle-fill"></i>
                                            Rekomendasi Instansi
                                        </a>

                                        {{-- Dokumen Tambahan --}}
                                        @if ($sktlkDocument['dokumenTambahan'])
                                            <a target="_blank"
                                                href="{{ asset('assets-user/upload/' . $sktlkDocument['dokumenTambahan']) }}"
                                                class="d-block btn my-1">
                                                <i class="bi bi-arrow-down-circle-fill"></i>
                                                Dokumen Tambahan
                                            </a>
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
@endsection
