@extends('layout.admin-template')

@section('content')
    {{-- Alert success --}}
    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
             role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <div class="mx-2">
                {{ session('success') }}
            </div>
            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-4">
                <h3>Laporan SIK</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <!-- Include Required Prerequisites -->
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> --}}

                <!-- Include Date Range Picker -->
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
                <link rel="stylesheet"
                      type="text/css"
                      href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

                <span class="mt-4 mx-2">Filter Tanggal : </span>

                <form id="filterDateForm"
                      action="/admin/sik/filter-date"
                      method="POST">
                    @csrf
                    <input id="filterKeyword"
                           name="keyword"
                           type="text"
                           hidden
                           value="{{ $old['keyword'] ?? '' }}">
                    <input name="dateFilter"
                           type="text"
                           class="d-inline-block form-control mt-3"
                           id="filterDate"
                           {{ $old['dateFilter'] ?? '' }}>
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

            <div class="col-2 mt-3 d-flex justify-content-end">
                {{-- Tombol export PDF --}}
                <form target="_blank"
                      action="/admin/sik/pdf"
                      method="POST">
                    @csrf
                    <input hidden
                           type="hidden"
                           name="keyword"
                           value="{{ $old['keyword'] ?? '' }}">
                    <input hidden
                           type="text"
                           name="dateFilter"
                           value="{{ $old['dateFilter'] ?? '' }}">
                    <button type="submit"
                            class="btn">PDF</button>
                </form>

                <form target="_blank"
                      action="/admin/sik/excel"
                      method="POST">
                    @csrf
                    <input hidden
                           type="hidden"
                           name="keyword"
                           value="{{ $old['keyword'] ?? '' }}">
                    <input hidden
                           type="text"
                           name="dateFilter"
                           value="{{ $old['dateFilter'] ?? '' }}">
                    <button type="submit"
                            class="btn">Excel</button>
                </form>
            </div>
        </div>
    </div>

    @if (count($laporanSIK) > 0)
        <div class="table-scrollable">
            <table class="table table table-borderless mt-3">
                <thead style="border-bottom: 1px solid black">
                    <tr>
                        <th>No.</th>
                        <th>Dokumen</th>
                        <th>Status</th>
                        <th>Nama Organisasi</th>
                        <th>Nama Penanggungjawab</th>
                        <th>Bentuk Kegiatan</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Lokasi Kegiatan</th>
                        <th>Dalam Rangka</th>
                        <th>Jumlah Undangan</th>
                        <th>Dilaporkan Pada</th>
                        <th class="{{ auth()->user()->jenis_pengguna != 'AdminSPKT' ? 'd-none' : '' }}">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporanSIK as $i => $sik)
                        <tr>
                            <td>{{ $laporanSIK->firstItem() + $i }}</td>
                            {{-- Pop-up dokumen --}}
                            <td>
                                <center>
                                    {{-- Tombol detail dokumen --}}
                                    <a href="#"
                                       title="Tampilkan Detail Dokumen"
                                       data-bs-toggle="modal"
                                       data-bs-target="#detail-modal-{{ $sik->id }}">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </a>
                                </center>
                            </td>

                            {{-- Status --}}
                            <td>
                                @if ($sik->status == 1)
                                    {{-- centang --}}
                                    <i class="bi bi-check-circle-fill text-success"
                                       title="Disetujui"></i>
                                @elseif($sik->status == 0)
                                    {{-- x --}}
                                    <i class="bi bi-x-circle-fill text-danger"
                                       title="Ditolak"></i>
                                @else
                                    -
                                @endif
                            </td>

                            <td>{{ $sik->nama_organisasi ?? '-' }}</td>
                            <td>{{ $sik->nama_penanggung_jawab ?? '-' }}</td>
                            <td>{{ $sik->bentuk_kegiatan ?? '-' }}</td>
                            <td>{{ $sik->waktu_mulai ? dateTimeFormat($sik->waktu_mulai) : '-' }}</td>
                            <td>{{ $sik->waktu_selesai ? dateTimeFormat($sik->waktu_selesai) : '-' }}</td>
                            <td>{{ $sik->lokasi_kegiatan ?? '-' }}</td>
                            <td>{{ $sik->dalam_rangka ?? '-' }}</td>
                            <td>{{ $sik->jumlah_undangan ?? '-' }}</td>
                            <td>{{ dateTimeFormat($sik->dilaporkan_pada) }}</td>

                            <td
                                class="d-flex gap-2 {{ auth()->user()->jenis_pengguna != 'AdminSPKT' ? 'd-none' : 'd-flex' }}">
                                {{-- Tombol download --}}
                                @if ($sik->dokumen_persetujuan != null)
                                    <a href="{{ asset('assets-user/upload/') . '/' . $sik->dokumen_persetujuan }}"
                                       target="_blank"
                                       title="Dokumen Persetujuan">
                                        <i class="bi bi-download"></i>
                                    </a>
                                @endif

                                {{-- Tombol upload --}}
                                @if ($sik->status == 1 && $sik->dokumen_persetujuan == null)
                                    <a href="#"
                                       class=""
                                       title="Upload File"
                                       data-bs-toggle="modal"
                                       data-bs-target="#upload-modal-{{ $sik->id }}">
                                        <i class="bi bi-upload"></i>
                                    </a>
                                @endif

                                {{-- Tombol Hapus SIK --}}
                                <a href="/admin/sik/hapus/{{ $sik->id }}"
                                   title="Hapus"
                                   onclick="return confirm('Apakah anda yakin untuk menghapus data SIK ?')">
                                    <i class="bi bi-trash-fill"></i>
                                </a>

                                {{-- Tombol selesai --}}
                                @if ($sik->dokumen_persetujuan != null)
                                    <a title="Telah Selesai">
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    </a>
                                @endif
                            </td>

                            {{-- Popup upload file --}}
                            <div class="modal fade"
                                 id="upload-modal-{{ $sik->id }}"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">Upload File</h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="/admin/sik/upload-file"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf
                                                {{-- Input file --}}
                                                <input type="hidden"
                                                       name="id"
                                                       value="{{ $sik->id }}">
                                                <div class="mb-3">
                                                    <label for="file"
                                                           class="form-label">File :</label>
                                                    <input name="file"
                                                           class="form-control"
                                                           type="file"
                                                           id="file"
                                                           accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                        class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                <button type="submit"
                                                        class="btn btn-primary">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Pop up Detail Dokumen --}}
                            <div class="modal fade"
                                 id="detail-modal-{{ $sik->id }}"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">Detail Dokumen Persyaratan</h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
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
                                        {{-- @if ($sik->status === null)
                                        <div class="modal-footer">
                                            <a href="/admin/sik/setuju/{{ $sik->id }}" type="button"
                                                class="btn btn-success">Setuju</a>

                                            <button type="button" class="btn btn-danger"
                                                data-bs-target="#tolak-modal-{{ $sik->id }}" data-bs-toggle="modal"
                                                data-bs-dismiss="modal">Tolak</button>
                                        </div>
                                    @endif --}}
                                    </div>
                                </div>
                            </div>

                            {{-- Pop up Penolakan --}}
                            <div class="modal fade"
                                 id="tolak-modal-{{ $sik->id }}"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">Alasan Penolakan</h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>

                                        <form action="/admin/sik/tolak"
                                              method="POST">
                                            <div class="modal-body"
                                                 style="height: 250px">
                                                @csrf
                                                <div class="mb-3">
                                                    <input type="hidden"
                                                           name="id"
                                                           value="{{ $sik->id }}">
                                                    <label for="alasanPenolakan"
                                                           class="form-label">Masukkan alasan pada
                                                        kolom
                                                        di bawah ini :</label>
                                                    <textarea name="alasanPenolakan"
                                                              class="form-control"
                                                              id="alasanPenolakan"
                                                              rows="6"></textarea>
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
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-100 d-flex justify-content-end pt-3">
            {{ $laporanSIK->links() }}
        </div>
    @else
        <center>Tidak ada laporan.</center>
    @endif
@endsection
