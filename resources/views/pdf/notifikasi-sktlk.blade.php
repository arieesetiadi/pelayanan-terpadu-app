<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>

    <style>
        * {
            font-family: 'Times New Roman', Times, serif
        }

        header {
            width: 50%;
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
            margin: 0 10%;
        }

        table {
            width: 65%;
            margin: 0 15%;
        }

        ol {
            width: 65%;
            margin: 0 13%;
        }

        .half {
            display: inline-block;
            float: left
        }
    </style>
</head>

<body>
    <header>
        <span>KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
        <span>DAERAH BALI</span>
        <span style="text-decoration: underline">SENTRA PELAYANAN KEPOLISIAN TERPADU</span>
    </header>

    <main>
        {{-- Logo POLRI --}}
        <center>
            <img height="150" style="margin-top: 25px" src="{{ $logoPolriPath }}">
        </center>

        <h3>SURAT KETERANGAN TANDA LAPOR KEHILANGAN</h3>

        <p>Pada hari ini {{ dateFormat($laporan->diunggah_pada) }} pukul {{ timeFormat($laporan->diunggah_pada) }}
            telah melaporkan ke Polres Badung yang mengaku :
        </p>

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $laporan->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $laporan->tempat_lahir }}, {{ $laporan->tanggal_lahir }}</td>
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
        </table>

        <p style="margin-top: 20px">Melaporkan telah kehilangan Surat-surat atau Barang-barang penting berupa :</p>

        <ol>
            @foreach ($suratHilang as $item)
                <li>
                    Satu lembar {{ $item }} di {{ $laporan->lokasi_kejadian }}
                </li>
            @endforeach
        </ol>

        <p style="margin-top: 20px">
            Barang atau Surat penting tersebut diketahui hilang pada hari
            {{ dateFormat($laporan->tanggal_kejadian) }} sekitar pukul
            {{ timeFormat($laporan->tanggal_kejadian) }} WITA hilang di sekitar lokasi
            {{ $laporan->lokasi_kejadian }}
        </p>

        <p style="margin-top: 20px">
            Surat keterangan tanda lapor kehilangan ini berlaku 30 (tiga puluh) hari sejak tanggal dikeluarkannya surat
            ini.
        </p>

        <p style="margin-top: 20px">
            Demikian surat keterangan tanda lapor kehilangan surat atau barang ini dibuat dengan sebenar-benarnya dan
            untuk dapat digunakan sebagaimana mestinya.
        </p>

        {{-- Bagian TTD --}}
        <div style="margin-top: 40px">
            <div class="half" style="margin-top: 20px; width: 35%">
                <span style="display: block; text-align: center">Pelapor</span>
                <span
                    style="display: block; text-align: center; margin-top: 84px">({{ $laporan->nama_lengkap }})</span>
            </div>
            <div class="half" style="width: 65%">
                <span style="display: block; text-align: center">
                    Badung, {{ dateFormat(now(), false) }}
                </span>
                <span style="display: block; text-align: center;">
                    KEPALA KEPOLISIAN RESOR BADUNG
                </span>

                <center>
                    <img width="150" src="{{ $ttdPath }}">
                </center>

                <span style="display: block; text-align: center;">
                    Leo Dedy Defretes, SIK, SH, MH
                </span>
                <hr style="width: 50%">
                <span style="display: block; text-align: center;
                ">
                    AKBP NRP 123456
                </span>
            </div>
        </div>

    </main>
</body>

</html>
