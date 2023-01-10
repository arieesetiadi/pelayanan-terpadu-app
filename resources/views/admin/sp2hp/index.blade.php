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
                <h3>Laporan SP2HP</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <!-- Include Required Prerequisites -->
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/datepicker.css') }}" /> --}}

                <!-- Include Date Range Picker -->
                <script type="text/javascript"
                        src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
                <link rel="stylesheet"
                      type="text/css"
                      href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

                <span class="mt-4 mx-2">Filter Tanggal : </span>

                <form id="filterDateForm"
                      action="/admin/sp2hp/filter-date"
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
                        "startDate": "10/14/2022",
                        "endDate": "10/14/2022",
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
                      action="/admin/sp2hp/pdf"
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
                      action="/admin/sp2hp/excel"
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

    @if (count($laporanSP2HP) > 0)
        <table class="table table table-borderless mt-3">
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
                    <th>Dilaporan Pada</th>
                    <th class="{{ auth()->user()->jenis_pengguna != 'AdminSPKT' ? 'd-none' : '' }}">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporanSP2HP as $i => $item)
                    <tr>
                        <td>{{ $laporanSP2HP->firstItem() + $i }}</td>
                        <td>{{ $item->nama_lengkap }}</td>

                        {{-- Status --}}
                        <td>
                            @if ($item->status == 1)
                                {{-- centang --}}
                                <i class="bi bi-check-circle-fill text-success"
                                   title="Valid"></i>
                            @elseif($item->status == 0)
                                {{-- x --}}
                                <i class="bi bi-x-circle-fill text-danger"
                                   title="Tidak Valid"></i>
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
                            <a href="#"
                               title="Tampilkan Detail Kejadian"
                               data-bs-toggle="modal"
                               data-bs-target="#detail-modal-{{ $item->id }}">
                                <i class="bi bi-info-circle-fill"></i> Detail
                            </a>
                        </td>
                        <td>
                            @if ($item->lampiran != '')
                                <a href="{{ asset('assets-user/upload/') . '/' . $item->lampiran }}"
                                   target="_blank"
                                   title="Download Lampiran">
                                    <i class="bi bi-download"></i> Lampiran
                                </a>
                            @else
                                -
                            @endif
                        </td>

                        <td>{{ dateTimeFormat($item->dilaporkan_pada) }}</td>

                        <td
                            class="justify-content-end gap-1 {{ auth()->user()->jenis_pengguna != 'AdminSPKT' ? 'd-none' : 'd-flex' }}">
                            {{-- Tombol download --}}
                            @if ($item->status || $item->file_pemberitahuan != '')
                                {{-- <a target="_blank" href="/notifikasi/cetak-pdf/{{ getNotifSP2HP($item->id) }}" --}}
                                <a href="#"
                                   class=""
                                   title="Lihat Validasi/Perkembangan"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lihat-modal-{{ $item->id }}">
                                    <i class="bi bi-download"></i>
                                </a>
                            @endif

                            {{-- Tombol upload --}}
                            @if ($item->perkembangan != 'Selesai' && $item->status)
                                <a href="#"
                                   class=""
                                   title="Upload Validasi/Perkembangan"
                                   data-bs-toggle="modal"
                                   data-bs-target="#upload-modal-{{ $item->id }}">
                                    <i class="bi bi-upload"></i>
                                </a>
                            @endif

                            {{-- Tombol hapus --}}
                            <a href="/admin/sp2hp/hapus/{{ $item->id }}"
                               title="Hapus"
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
                            {{-- Popup Lihat Perkembangan --}}
                            <div class="modal fade"
                                 id="lihat-modal-{{ $item->id }}"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">Lihat Validasi & Perkembangan
                                            </h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-3">
                                                <center>
                                                    <h4>Dokumen Validasi</h4>
                                                    <a href="/notifikasi/cetak-pdf/{{ getNotifSP2HP($item->id) }}"
                                                       target="_blank"
                                                       class="btn btn-sm btn-primary">
                                                        <i class="bi bi-download"></i>
                                                        Dokumen Validasi
                                                    </a>
                                                </center>
                                            </div>
                                            <hr>
                                            {{-- Time-line --}}
                                            <div class="container p-3"
                                                 style="height: 50vh; overflow-y: scroll">
                                                @if ($item->keterangan_pemberitahuan != '' && $item->file_pemberitahuan != '')
                                                    @php
                                                        $filePerkembangan = getFilePerkembangan($item->file_pemberitahuan);
                                                        $keteranganPerkembangan = getKeteranganPerkembangan($item->keterangan_pemberitahuan);
                                                        $count = count($keteranganPerkembangan);
                                                    @endphp

                                                    @foreach ($keteranganPerkembangan as $i => $keterangan)
                                                        <!-- timeline item  -->
                                                        <div class="row">
                                                            <!-- timeline item left dot -->
                                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                                <div class="row h-50">
                                                                    <div class="col {{ $i == 0 ? '' : 'border-end' }}">
                                                                        &nbsp;</div>
                                                                    <div class="col">&nbsp;</div>
                                                                </div>
                                                                <h5 class="m-2">
                                                                    @php
                                                                        $style = '';
                                                                        if ($i == 0 && $item->perkembangan != 'Selesai') {
                                                                            $style = 'primary';
                                                                        } elseif ($i == 0 && $item->perkembangan == 'Selesai') {
                                                                            $style = 'secondary';
                                                                        }
                                                                    @endphp
                                                                    <span
                                                                          class="badge rounded-pill border bg-{{ $style }}">
                                                                        @if ($item->perkembangan == 'Selesai' && $i == 0)
                                                                            <i class="bi bi-check2"></i>
                                                                        @else
                                                                            <i class="bi bi-check2"
                                                                               style="visibility: hidden"></i>
                                                                        @endif
                                                                    </span>
                                                                </h5>
                                                                <div class="row h-50">
                                                                    <div
                                                                         class="col {{ $i + 1 == $count ? '' : 'border-end' }}">
                                                                        &nbsp;</div>
                                                                    <div class="col">&nbsp;</div>
                                                                </div>
                                                            </div>
                                                            <!-- timeline item event content -->
                                                            <div class="col py-2">
                                                                <div class="card radius-15">
                                                                    <div class="card-body">
                                                                        <div class="float-end text-muted">
                                                                            {{ dateTimeFormat($keterangan->uploaded_at) }}
                                                                        </div>
                                                                        <h4
                                                                            class="card-title {{ $i + 1 == $count ? 'd-none' : '' }}">
                                                                            Perkembangan
                                                                            {{ $count - ($i + 1) }}
                                                                        </h4>
                                                                        <p
                                                                           class="card-text {{ $i == 0 ? 'text-dark' : 'text-muted' }}">
                                                                            {{ $keterangan->keterangan }}
                                                                        </p>
                                                                        <a href="{{ asset('assets-user/upload/') . '/' . $filePerkembangan[$i] }}"
                                                                           target="_blank"
                                                                           title="Unduh file perkembangan"
                                                                           class="btn btn-sm {{ $i + 1 == $count ? 'd-none' : '' }}">
                                                                            <i class="bi bi-download"></i> Perkembangan
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <h6 class="text-muted text-center">Belum ada perkembangan.</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Popup Upload File --}}
                            <div class="modal fade"
                                 id="upload-modal-{{ $item->id }}"
                                 tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true"
                                 data-bs-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">Upload Validasi / Perkembangan
                                            </h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>

                                        <form action="/admin/sp2hp/upload-keterangan"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf
                                                {{-- Input file --}}
                                                <input type="hidden"
                                                       name="id"
                                                       value="{{ $item->id }}">
                                                <div class="mb-3">
                                                    <label for="file"
                                                           class="form-label">File :</label>
                                                    <input name="file"
                                                           class="form-control"
                                                           type="file"
                                                           id="file"
                                                           accept=".pdf"
                                                           required>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="d-inline-block my-2">Keterangan:</span>
                                                    <div class="form-group">
                                                        <textarea name="keterangan"
                                                                  placeholder="Keterangan"
                                                                  class="form-control"
                                                                  rows="3"
                                                                  required></textarea>
                                                    </div>
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
                        </td>
                        {{-- Popup Detail Kejadian --}}
                        <div class="modal fade"
                             id="detail-modal-{{ $item->id }}"
                             tabindex="-1"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            id="exampleModalLabel">Detail Kejadian</h5>
                                        <button type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Tanggal Kejadian</h6>
                                        <span>{{ dateFormat($item->tanggal_kejadian) }}</span>

                                        <h6 class="mt-4">Isi Laporan:</h6>
                                        <span>{{ $item->isi_laporan }}</span>

                                        <h6 class="mt-4">Lokasi Kejadian:</h6>
                                        <span>{{ $item->lokasi_kejadian }} |
                                            {{ $item->detail_lokasi_kejadian }}</span>

                                        <h6 class="mt-4">Terlapor :</h6>
                                        <span>{{ $item->terlapor ?? '-' }}</span>

                                        <h6 class="mt-4">Saksi - saksi :</h6>
                                        <div>
                                            @php
                                                $saksi = json_decode($item->saksi);
                                            @endphp
                                            @if ($saksi->nama[0] != null)
                                                <ol style="list-style-type: decimal; margin: 0; padding-left: 15px;">
                                                    @for ($i = 0; $i < count($saksi->nama); $i++)
                                                         <li>{{ $saksi->nama[$i] }}
                                                            {{ $saksi->umur[$i] != null ? ", " . $saksi->umur[$i] . " tahun" : "" }}
                                                            {{ $saksi->pekerjaan[$i] != null ? ", " . $saksi->pekerjaan[$i] : "" }}
                                                            {{ $saksi->alamat[$i] != null ? ", " . $saksi->alamat[$i] : "" }}
                                                        </li>
                                                    @endfor
                                                </ol>
                                            @else
                                                -
                                            @endif
                                        </div>
                                        <h6 class="mt-4">Bukti - bukti :</h6>
                                        <div>
                                            @php
                                                $bukti = json_decode($item->bukti);
                                            @endphp
                                            @if ($bukti->namaBukti[0] != null)
                                                <ol style="list-style-type: decimal; margin: 0; padding-left: 15px;">
                                                    @for ($i = 0; $i < count($bukti->namaBukti); $i++)
                                                        <li>
                                                            <i class="bi bi-download"></i>
                                                            <a href="{{ asset('assets-user/upload/') . '/' . $bukti->gambarBukti[$i] }}"
                                                               target="_blank">
                                                                {{ $bukti->namaBukti[$i] }}
                                                            </a>
                                                        </li>
                                                    @endfor
                                                </ol>
                                            @else
                                                -
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <center>Tidak ada laporan.</center>
    @endif

    <div class="w-100 d-flex justify-content-end pt-3">
        {{ $laporanSP2HP->links() }}
    </div>
@endsection
