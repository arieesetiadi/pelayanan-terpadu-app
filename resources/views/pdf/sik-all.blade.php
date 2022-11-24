<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan SIK</title>

    <style>
        * {
            font-family: 'Times New Roman', Times, serif
        }

        header {
            width: 55%;
        }

        header span {
            display: block;
            text-align: center;
        }

        main h3 {
            text-align: center;
            text-decoration: underline;
            margin-bottom: 50px
        }

        main p {
            /* margin: 0 10%; */
            text-align: justify;
        }

        table {
            width: 65%;
            /* margin: 0 15%; */
        }

        ol {
            width: 65%;
            margin: 0 13%;
        }

        .half {
            display: inline-block;
            float: left
        }

        td,
        th {
            padding: 1px 5px
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tr>
            <td style="width: 60%">
                <center>
                    <span style="font-weight: bolder; display: block">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                    <span style="font-weight: bolder; display: block">DAERAH KABUPATEN BADUNG</span>
                    <span style="font-weight: bolder; display: block ;text-decoration: underline">SENTRA PELAYANAN
                        KEPOLISIAN
                        TERPADU</span>
                    <span style="display: block">Jl. Kebo Iwa No.1, Mengwitani, Mengwi</span>
                </center>
            </td>
            <td style="width: 40%">
                <table style="width: 100%">
                    <tr>
                        <td style="width: 70px">
                            <small>LAMPIRAN</small>
                        </td>
                        <td>:</td>
                        <td>...</td>
                    </tr>
                    <tr>
                        <td style="width: 70px">
                            <small>NOMOR</small>
                        </td>
                        <td>:</td>
                        <td>...</td>
                    </tr>
                    <tr>
                        <td style="width: 70px">
                            <small>TANGGAL</small>
                        </td>
                        <td>:</td>
                        <td>
                            <small>{{ dateFormat(now()->toDateString()) }}</small>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <h2 style="text-align: center">Laporan Surat Izin Keramaian Polres Badung Tahun
        {{ now()->year }}</h2>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No.</th>
            <th>Nama Organisasi</th>
            <th>Penanggung Jawab</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Bentuk Kegiatan</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Lokasi Kegiatan</th>
            <th>Detail Lokasi Kegiatan</th>
            <th>Dalam Rangka</th>
            <th>Jumlah Undangan</th>
            <th>Dilaporkan Pada</th>
        </tr>

        @php
            $i = 1;
        @endphp
        @foreach ($laporanSIK as $item)
            @if ($item->lokasi_kegiatan != null)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->nama_organisasi }}</td>
                    <td>{{ $item->nama_penanggung_jawab }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->bentuk_kegiatan }}</td>
                    <td>{{ $item->waktu_mulai }}</td>
                    <td>{{ $item->waktu_selesai }}</td>
                    <td>{{ $item->lokasi_kegiatan }}</td>
                    <td>{{ $item->detail_lokasi_kegiatan }}</td>
                    <td>{{ $item->dalam_rangka }}</td>
                    <td>{{ $item->jumlah_undangan }}</td>
                    <td>{{ dateFormat($item->dilaporkan_pada) }}</td>
                </tr>
            @endif
        @endforeach
    </table>

    <div style="margin-top: 40px; display: flex;">
        <center style="width: 25%; float: right">
            <span style="display: block; text-align: center;">
                Mengetahui
            </span>
            <span style="display: block; text-align: center;">
                Kepala Unit SPKT Polres Badung,
            </span>

            <center>
                {{-- <img width="150" src="{{ $ttdPath }}"> --}}
            </center>
            <br><br><br><br>

            <span style="display: block; text-align: center;">
                Desak Nyoman Ratmini, S.H.
            </span>
            <center>
                <hr style="margin: 2px 0; text-align: center">
            </center>
            <span style="display: block;
                            text-align: center;">
                IPTU NRP 70060049
            </span>
        </center>
    </div>
</body>

</html>
