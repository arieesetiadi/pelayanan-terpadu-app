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
            /* margin-bottom: 50px */
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
                <td style="width: 45%">Nama Organisasi</td>
                <td style="width: 20px">:</td>
                <td>{{ $laporan->nama_organisasi }}</td>
            </tr>
            <tr>
                <td style="width: 45%">Nama Penanggung Jawab</td>
                <td style="width: 20px">:</td>
                <td>{{ $laporan->nama_penanggung_jawab }}</td>
            </tr>
            <tr>
                <td style="width: 45%">Alamat</td>
                <td style="width: 20px">:</td>
                <td>{{ $laporan->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 45%">Telepon</td>
                <td style="width: 20px">:</td>
                <td>{{ $laporan->telepon }}</td>
            </tr>
        </table>

        <p style="margin-top: 20px; line-height: 150%">
            Untuk menyelenggarakan kegiatan {{ $laporan->bentuk_kegiatan }} yang dimulai dari
            {{ dateTimeFormat($laporan->waktu_mulai) }} s/d
            {{ dateTimeFormat($laporan->waktu_selesai) }} yang berlokasi di
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
                <center style="width: 50%; float: right; padding-right: 90px">
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
        </div>
    </main>
</body>

</html>
