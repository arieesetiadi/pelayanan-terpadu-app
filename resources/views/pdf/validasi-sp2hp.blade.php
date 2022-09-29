<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen Validasi SP2HP</title>

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

        <h4 style="margin-top: 9px; text-decoration: underline; text-align: center">LAPORAN POLISI</h4>
        <h4 style="text-align: center; margin-top: -15px">Nomor : {{ $laporan->nomor_polisi }}</h4>

        <hr>

        {{-- Yang Melaporkan --}}
        <h4>YANG MELAPORKAN :</h4>
        <p>1. Nama : {{ $laporan->nama_lengkap }}. 2. Tempat/Tanggal Lahir :
            {{ $laporan->tempat_lahir . ', ' . dateFormat($laporan->tanggal_lahir) }}. 3. Pekerjaan :
            {{ $laporan->pekerjaan }}. 4. Kewarganegaraan : {{ $laporan->kewarganegaraan }}. 5. Alamat :
            {{ $laporan->alamat }}. 6. Nomor Telepon : {{ $laporan->telepon }}</p>

        <hr>

        {{-- Hal Yang Dilaporkan --}}
        <h4>HAL YANG DILAPORKAN :</h4>
        <table>
            {{-- Waktu Kejadian --}}
            <tr>
                <td>1. Waktu Kejadian</td>
                <td>:</td>
                <td>Pada {{ dateFormat($laporan->tanggal_kejadian, true) }}</td>
            </tr>

            <tr>
                <td>2. Tempat Kejadian</td>
                <td>:</td>
                <td>Di {{ $laporan->lokasi_kejadian }}, {{ $laporan->detail_lokasi_kejadian }}</td>
            </tr>

            <tr>
                <td>3. Apa Yang Terjadi</td>
                <td>:</td>
                <td>
                    <strong style="text-transform: uppercase">{{ $laporan->kategori }}</strong>
                </td>
            </tr>

            <tr>
                <td>4. Siapa</td>
                <td>:</td>
                <td>Nama</td>
            </tr>

            <tr>
                <td>5. Dilaporkan Pada Hari</td>
                <td>:</td>
                <td>{{ dateFormat($laporan->dilaporkan_pada, true) }}</td>
            </tr>
        </table>

        <hr>

        <div>
            {{-- Barang Bukti --}}
            <div style="width: 49%; display: inline-block">
                <h4>BARANG BUKTI :</h4>
            </div>

            {{-- Uraian Singkat --}}
            <div style="width: 50%; display: inline-block">
                <H4>URAIAN SINGKAT KEJADIAN :</H4>
                <p style="text-align: justify">{{ $laporan->isi_laporan }}</p>
            </div>
        </div>

        <hr>

        <p style="float: none; display: block">Pengadu / Pelapor membenarkan semua keterangannya dan membubuhkan tanda
            tangannya
            dibawah
            ini.</p>

        <div style="margin-top: 40px">
            <div class="half" style="margin-top: 20px; width: 35%">
            </div>
            <div class="half" style="width: 64%">
                <span style="display: block; text-align: center;">
                    Pelapor
                </span>

                <center>
                    {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                </center>
                <br><br><br><br>

                <strong
                    style="display: block; text-align: center; text-transform: uppercase; text-decoration: underline">
                    {{ $laporan->nama_lengkap }}
                </strong>
            </div>
        </div>

        <hr>
        <div><strong>TINDAKAN YANG DIAMBIL</strong> : - Menerima / Membuat Laporan Polisi</div>
        <hr>

        <div>
            <div class="half" style="width:50%">
                <span style="display: block; text-align: center;">
                    MENGETAHUI
                </span>
                <span style="display: block; text-align: center;">
                    KEPALA KEPOLISIAN RESOR BADUNG
                </span>

                <center>
                    {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                </center>
                <br><br><br><br>

                <span style="display: block; text-align: center;">
                    Leo Dedy Defretes, SIK, SH, MH
                </span>
                <hr style="width: 50%">
                <span style="display: block; text-align: center;
                ">
                    AKBP NRP 123456
                </span>
            </div>

            <div class="half" style="width: 49%">
                <span style="display: block; text-align: center">
                    Badung, {{ dateFormat(now(), false) }}
                </span>
                <span style="display: block; text-align: center;">
                    Yang Menerima Laporan,
                </span>

                <center>
                    {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                </center>
                <br><br><br><br>

                <span style="display: block; text-align: center;">
                    I Komang Gede Artayasa
                </span>
                <hr style="width: 50%">
                <span style="display: block; text-align: center;
                ">
                    AKBP NRP 123456?????
                </span>
            </div>
        </div>
    </main>
</body>

</html>
