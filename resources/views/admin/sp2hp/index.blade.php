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

    <h3>Laporan SP2HP</h3>

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
                        <a href="#" title="Tampilkan Detail Kejadian" data-bs-toggle="modal"
                            data-bs-target="#detail-modal-{{ $item->id }}">
                            <i class="bi bi-info-circle-fill"></i> Detail
                        </a>
                    </td>
                    <td>
                        @if ($item->lampiran != '')
                            <a href="{{ asset('assets-user/upload/') . '/' . $item->lampiran }}" target="_blank"
                                title="Download Lampiran">
                                <i class="bi bi-download"></i> Lampiran
                            </a>
                        @else
                            -
                        @endif
                    </td>
                    <td class="d-flex justify-content-end gap-1">
                        {{-- Tombol download --}}
                        @if ($item->status)
                            <a target="_blank" href="/notifikasi/cetak-pdf/{{ getNotifSP2HP($item->id) }}" class=""
                                title="Dok. Validasi">
                                <i class="bi bi-download"></i>
                            </a>
                        @endif

                        {{-- Tombol upload --}}
                        <a href="#" class="" title="Upload Validasi/Perkembangan" data-bs-toggle="modal"
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
                            <a href="/admin/sp2hp/selesai/{{ $item->id }}" title="Selesaikan Laporan"
                                onclick="return confirm('Selesaikan Pelaporan ?')">
                                <i class="bi bi-check-circle-fill text-secondary"></i>
                            </a>
                        @endif

                        {{-- ===================================== --}}

                        {{-- Popup Upload File --}}
                        <div class="modal fade" id="upload-modal-{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="/admin/sp2hp/upload-keterangan" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            @csrf
                                            {{-- Input file --}}
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <div class="mb-3">
                                                <label for="file" class="form-label">File :</label>
                                                <input name="file" class="form-control" type="file" id="file"
                                                    accept=".pdf">
                                            </div>
                                            <div class="mb-3">
                                                <span class="d-inline-block my-2">Keterangan:</span>
                                                <div class="form-group">
                                                    <textarea name="keterangan" placeholder="Keterangan" class="form-control" rows="3"></textarea>
                                                </div>
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

                        {{-- Popup Detail Kejadian --}}
                        <div class="modal fade" id="detail-modal-{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kejadian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Tanggal Kejadian</h6>
                                        <span>{{ $item->tanggal_kejadian }}</span>

                                        <h6 class="mt-4">Isi Laporan:</h6>
                                        <span>{{ $item->isi_laporan }}</span>

                                        <h6 class="mt-4">Lokasi Kejadian:</h6>
                                        <span>{{ $item->lokasi_kejadian }} | {{ $item->detail_lokasi_kejadian }}</span>
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
@endsection
