<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan SP2HP</title>

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

    <h2 style="text-align: center">Laporan Surat Pemberitahuan Perkembangan Hasil Penyidikan Polres Badung Tahun
        {{ now()->year }}</h2>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Detail Lokasi</th>
            <th>Dilaporkan Pada</th>
        </tr>

        @foreach ($laporanSP2HP as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->status ? 'Valid' : 'Tidak Valid' }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->lokasi_kejadian }}</td>
                <td>{{ $item->detail_lokasi_kejadian }}</td>
                <td>{{ dateFormat($item->dilaporkan_pada) }}</td>
            </tr>
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
