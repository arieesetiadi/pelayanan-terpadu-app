<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan SKTLK</title>

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

    <h2 style="text-align: center">Laporan Surat Keterangan Tanda Lapor Kehilangan Polres Badung Tahun
        {{ now()->year }}
    </h2>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Kewarganegaraan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal Kejadian</th>
            <th>Lokasi</th>
            <th>Detail Lokasi</th>
            <th>Surat Hilang</th>
            <th>Dilaporkan Pada</th>
        </tr>

        @foreach ($laporanSKTLK as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->kewarganegaraan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ dateFormat($item->tanggal_kejadian) }}</td>
                <td>{{ $item->lokasi_kejadian }}</td>
                <td>{{ $item->detail_lokasi_kejadian }}</td>
                <td>{{ $item->surat_hilang }}</td>
                <td>{{ dateFormat($item->dilaporkan_pada) }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
