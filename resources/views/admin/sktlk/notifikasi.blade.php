@extends('layout.admin-template')

@section('content')
    <h3>Verifikasi Pelaporan SKTLK</h3>

    <table class="w-100">
        <tr>
            <td style="width: 170px">Nama Lengkap</td>
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
            <td>{{ dateFormat($laporan->tanggal_lahir) }}</td>
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
            <td>Surat Hilang</td>
            <td>:</td>
            <td>{{ $laporan->surat_hilang }}</td>
        </tr>
        <tr>
            <td>Foto KTP</td>
            <td>:</td>
            <td>
                <a target="_blank"
                   href="{{ asset('assets-user/upload/') . '/' . $laporan->foto_ktp }}">
                    <i class="bi bi-download"></i>
                    Foto KTP
                </a>
            </td>
        </tr>
        <tr>
            <td>Foto Pelapor</td>
            <td>:</td>
            <td>
                <a target="_blank"
                   href="{{ asset('assets-user/upload/') . '/' . $laporan->foto_pelapor }}">
                    <i class="bi bi-download"></i>
                    Foto Pelapor
                </a>
            </td>
        </tr>
        <tr>
            <td>Rekomendasi Instansi</td>
            <td>:</td>
            <td>
                <a target="_blank"
                   href="{{ asset('assets-user/upload/') . '/' . $laporan->rekomendasi_instansi }}">
                    <i class="bi bi-download"></i>
                    Rekomendasi Instansi
                </a>
            </td>
        </tr>
        <tr>
            <td>Pernyataan Keaslian</td>
            <td>:</td>
            <td>
                <a target="_blank"
                   href="{{ asset('assets-user/upload/') . '/' . $laporan->pernyataan_keaslian }}">
                    <i class="bi bi-download"></i>
                    Pernyataan Keaslian
                </a>
            </td>
        </tr>
        @if ($laporan->dokumen_tambahan != '')
            <tr>
                <td>Dokumen Tambahan</td>
                <td>:</td>
                <td>
                    <a target="_blank"
                       href="{{ asset('assets-user/upload/') . '/' . $laporan->dokumen_tambahan }}">
                        <i class="bi bi-download"></i>
                        Dokumen Tambahan
                    </a>
                </td>
            </tr>
        @endif
    </table>

    <a href="/admin/sktlk/surat-keterangan/{{ $laporan->id }}"
       class="btn btn-primary mt-4">
        <i class="bi bi-download"></i>
        Surat Keterangan
    </a>
@endsection
