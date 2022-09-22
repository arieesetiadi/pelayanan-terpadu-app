@extends('layout.admin-template')

@section('content')
    <h3>Validasi Pelaporan</h3>

    <table class="w-100">
        <tr>
            <td style="width: 200px">Nama Lengkap</td>
            <td style="width: 20px">:</td>
            <td>{{ $laporan->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $laporan->tempat_lahir }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $laporan->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $laporan->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>{{ $laporan->kewarganegaraan }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $laporan->alamat }}</td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>{{ $laporan->telepon }}</td>
        </tr>
        <tr>
            <td>Judul Laporan</td>
            <td>:</td>
            <td>{{ $laporan->judul_laporan }}</td>
        </tr>
        <tr>
            <td>Isi Laporan</td>
            <td>:</td>
            <td>{{ $laporan->isi_laporan }}</td>
        </tr>
        <tr>
            <td>Tanggal Kejadian</td>
            <td>:</td>
            <td>{{ $laporan->tanggal_kejadian }}</td>
        </tr>
        <tr>
            <td>Lokasi Kejadian</td>
            <td>:</td>
            <td>{{ $laporan->lokasi_kejadian }}</td>
        </tr>
        <tr>
            <td>Detail Lokasi Kejadian</td>
            <td>:</td>
            <td>{{ $laporan->detail_lokasi_kejadian }}</td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>{{ $laporan->kategori }}</td>
        </tr>
        <tr>
            <td>Foto KTP</td>
            <td>:</td>
            <td>
                <a target="_blank" href="{{ asset('assets-user/upload/') . '/' . $laporan->foto_ktp }}">
                    <i class="bi bi-download"></i>
                    Foto KTP
                </a>
            </td>
        </tr>
        <tr>
            <td>Foto Pelapor</td>
            <td>:</td>
            <td>
                <a target="_blank" href="{{ asset('assets-user/upload/') . '/' . $laporan->foto_pelapor }}">
                    <i class="bi bi-download"></i>
                    Foto Pelapor
                </a>
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>
                <a target="_blank" href="{{ asset('assets-user/upload/') . '/' . $laporan->lampiran }}">
                    <i class="bi bi-download"></i>
                    Lampiran
                </a>
            </td>
        </tr>
    </table>
    @if ($laporan->status === null)
        <hr>
        {{-- Tombol Setuju --}}
        <a href="/admin/sp2hp/valid/{{ $laporan->id }}" type="button" class="btn btn-success">Valid</a>

        {{-- Tombol Tolak --}}
        <button type="button" class="btn btn-danger mx-3" data-bs-target="#tolak-modal-{{ $laporan->id }}"
            data-bs-toggle="modal" data-bs-dismiss="modal">Tidak Valid</button>

        {{-- Pop up Penolakan --}}
        <div class="modal fade" id="tolak-modal-{{ $laporan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pelaporan Tidak Valid</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/admin/sp2hp/invalid" method="POST">
                        <div class="modal-body" style="height: 250px">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="id" value="{{ $laporan->id }}">
                                <label for="alasanPenolakan" class="form-label">Masukkan keterangan :</label>
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
    @endif
@endsection
