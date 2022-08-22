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
            text-indent: 5%;
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

        <h3>SURAT IZIN KERAMAIAN</h3>

        <p>
            Yang bertanda tangan dibawah ini Kepala Kepolisian Resor Kabupaten Badung, memberikan izin kepada :
        </p>
        <br>

        <table>
            <tr>
                <td>Nama Organisasi</td>
                <td>:</td>
                <td>{{ $laporan->nama_organisasi }}</td>
            </tr>
            <tr>
                <td>Nama Penanggung Jawab</td>
                <td>:</td>
                <td>{{ $laporan->nama_penanggung_jawab }}</td>
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

        <p style="margin-top: 20px">
            Untuk menyelenggarakan kegiatan {{ $laporan->bentuk_kegiatan }} pada
            {{ dateFormat($laporan->tanggal_kegiatan, false) }}, mulai dari pukul
            {{ timeFormat($laporan->waktu_mulai) }} WITA
            hingga pukul {{ timeFormat($laporan->waktu_selesai) }} WITA yang berlokasi di
            {{ $laporan->lokasi_kegiatan }} dalam rangka {{ $laporan->dalam_rangka }}.
        </p>

        <p style="margin-top: 20px">
            Demikian surat izin kami keluarkan untuk digunakan sebagaimana mestinya.
        </p>

        {{-- Bagian TTD --}}
        <div style="margin-top: 40px">
            <div class="half" style="margin-top: 20px; width: 35%">
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
