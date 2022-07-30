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
                        <td>{{ $i + 1 }}</td>
                        {{-- Pop-up dokumen --}}
                        <td>
                            <center>
                                {{-- Tombol detail dokumen --}}
                                <a href="#" title="Tampilkan Detail Dokumen" data-bs-toggle="modal"
                                    data-bs-target="#detail-modal-{{ $sik->id }}">
                                    <i class="bi bi-info-circle-fill"></i>
                                </a>
                            </center>
                        </td>

                        {{-- Status --}}
                        <td>
                            @if ($sik->status === 1)
                                {{-- centang --}}
                                <i class="bi bi-check-circle-fill text-success" title="Disetujui"></i>
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
                        <td>
                            -
                        </td>

                        {{-- Pop up Detail Dokumen --}}
                        <div class="modal fade" id="detail-modal-{{ $sik->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Dokumen Persyaratan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @php
                                            $sikDocument = getSIKDocumentById($sik->id);
                                        @endphp

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
                                    @if ($sik->status === null)
                                        <div class="modal-footer">
                                            {{-- Tombol Setuju --}}
                                            <a href="/admin/sik/setuju/{{ $sik->id }}" type="button"
                                                class="btn btn-success">Setuju</a>

                                            {{-- Tombol Tolak --}}
                                            <button type="button" class="btn btn-danger"
                                                data-bs-target="#tolak-modal-{{ $sik->id }}" data-bs-toggle="modal"
                                                data-bs-dismiss="modal">Tolak</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Pop up Penolakan --}}
                        <div class="modal fade" id="tolak-modal-{{ $sik->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <form action="/admin/sik/tolak" method="POST">
                                        <div class="modal-body" style="height: 250px">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="hidden" name="id" value="{{ $sik->id }}">
                                                <label for="alasanPenolakan" class="form-label">Masukkan alasan pada kolom
                                                    di bawah ini :</label>
                                                <textarea name="alasanPenolakan" class="form-control" id="alasanPenolakan" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            {{-- Tombol Kirim --}}
                                            <button type="submit" class="btn btn-primary">Kirim</button>
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
@endsection
