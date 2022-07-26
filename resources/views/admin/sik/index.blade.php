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

    <h3>Laporan SIK</h3>

    <div class="table-scrollable">
        <table class="table table table-borderless mt-3">
            <thead style="border-bottom: 1px solid black">
                <tr>
                    <th>No.</th>
                    <th>Dokumen</th>
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
                    <th>Status</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($laporanSIK as $i => $sik)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            <center>
                                {{-- Tombol detail dokumen --}}
                                <a href="#" title="Tampilkan Detail Dokumen" data-bs-toggle="modal"
                                    data-bs-target="#detail-modal-{{ $sik->id }}">
                                    <i class="bi bi-info-circle-fill"></i>
                                </a>
                            </center>
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
                        <td>{{ $sik->status ?? '-' }}</td>
                        <td>
                            -
                        </td>

                        {{-- Popup Detail Dokumen --}}
                        <div class="modal fade" id="detail-modal-{{ $sik->id }}" tabindex="-1"
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
                                            $sikDocument = getSIKDocumentById($sik->id);
                                            dump($sikDocument);
                                        @endphp
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
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
@endsection
