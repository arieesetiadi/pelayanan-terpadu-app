<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=sik.xls');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIK</title>

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
    @if (count($laporanSIK) > 0)
        <table border="1">
            <tr>
                <td></td>
                <td>
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 60%">
                                <center>
                                    <span style="font-weight: bolder; display: block">KEPOLISIAN NEGARA REPUBLIK
                                        INDONESIA</span>
                                    <span style="font-weight: bolder; display: block">DAERAH KABUPATEN BADUNG</span>
                                    <span style="font-weight: bolder; display: block ;text-decoration: underline">SENTRA
                                        PELAYANAN
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
                </td>
            </tr>

            <tr>
                <td colspan="13">
                    <h2 style="text-align: center">Laporan Surat Izin Keramaian Polres Badung Tahun
                        {{ now()->year }}</h2>
                </td>
            </tr>

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

            @foreach ($laporanSIK as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
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
            @endforeach
        </table>

        <br><br>
        <div style="margin-top: 40px; display: flex;">
            <center style="width: 25%; float: right">
                <span style="display: block; text-align: center;">
                    Mengetahui
                </span>
                <span style="display: block; text-align: center;">
                    Kepala Kepolisian Resor Badung,
                </span>

                <center>
                    {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                </center>
                <br><br><br><br>

                <span style="display: block; text-align: center;">
                    Leo Dedy Defretes, SIK, SH, MH
                </span>
                <center>
                    <hr style="margin: 2px 0; text-align: center">
                </center>
                <span style="display: block;
                            text-align: center;">
                    AKBP NRP 123456
                </span>
            </center>
        </div>
    @else
        <center>Laporan tidak tersedia.</center>
    @endif

</body>

</html>
