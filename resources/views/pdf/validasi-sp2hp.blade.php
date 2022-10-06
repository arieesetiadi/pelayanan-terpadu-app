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

        ol {
            margin-left: -18px;
            margin-bottom: -3px;
            margin-top: 0px;
        }

        header {
            width: 60%;
        }

        header span {
            display: block;
            text-align: center;
        }

        table {
            width: 100%
        }

        main h3 {
            text-align: center;
            text-decoration: underline;
        }

        td {
            vertical-align: top;
        }

        .half {
            display: inline-block;
        }

        strong {
            margin-top: -2px;
        }

        hr {
            margin: -1px
        }
    </style>
</head>

<body>
    <header>
        <span style="font-weight: bolder">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
        <span style="font-weight: bolder">DAERAH KABUPATEN BADUNG</span>
        <span style="font-weight: bolder ;text-decoration: underline">SENTRA PELAYANAN KEPOLISIAN TERPADU</span>
        <span>Jl. Kebo Iwa No.1, Mengwitani, Mengwi</span>
        <span
            style="font-weight: bolder; text-decoration: underline; margin-top: 10px; text-align: left; margin-left: 35px">PRO
            JUSTITIA</span>
    </header>


    <main>
        {{-- Logo POLRI --}}
        <center>
            <img height="150" style="margin-top: 0px" src="{{ $logoPolriPath }}">
        </center>

        <h4 style="margin-top: 0px; text-decoration: underline; text-align: center">LAPORAN POLISI</h4>
        <h4 style="text-align: center; margin-top: -15px; margin-bottom: 0px">Nomor : {{ $laporan->nomor_polisi }}
        </h4>

        <hr>

        {{-- Yang Melaporkan --}}
        <strong>YANG MELAPORKAN :</strong>
        <div style="margin-bottom: 5px">1. Nama : {{ $laporan->nama_lengkap }}. 2. Tempat/Tanggal Lahir :
            {{ $laporan->tempat_lahir . ', ' . dateFormat($laporan->tanggal_lahir) }}. 3. Pekerjaan :
            {{ $laporan->pekerjaan }}. 4. Kewarganegaraan : {{ $laporan->kewarganegaraan }}. 5. Alamat :
            {{ $laporan->alamat }}. 6. Nomor Telepon : {{ $laporan->telepon }}</div>

        <hr>

        {{-- Hal Yang Dilaporkan --}}
        <strong>HAL YANG DILAPORKAN :</strong>
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
                <td>4. Nama Terlapor</td>
                <td>:</td>
                <td>{{ $terlapor }}</td>
            </tr>

            <tr>
                <td>5. Dilaporkan Pada Hari</td>
                <td>:</td>
                <td>{{ dateFormat($laporan->dilaporkan_pada, true) }}</td>
            </tr>
        </table>

        <hr>

        <table>
            <tr>
                <td style="width: 30%">
                    <strong>TINDAK PIDANA APA :</strong>
                    <strong style="text-transform: uppercase">{{ $laporan->kategori }}</strong>
                </td>
                <td style="width: 70%">
                    {{-- Saksi --}}
                    <strong>NAMA DAN ALAMAT SAKSI – SAKSI :</strong>
                    <ol>
                        @for ($i = 0; $i < count($saksi->nama); $i++)
                            <li>Nama : {{ $saksi->nama[$i] }}, Umur: {{ $saksi->umur[$i] }} tahun, Alamat :
                                {{ $saksi->alamat[$i] }}, Pekerjaan : {{ $saksi->pekerjaan[$i] }}</li>
                        @endfor
                    </ol>
                </td>
            </tr>
        </table>

        <hr>

        <table style="width: 100%">
            <tr>
                <td style="width: 30%">
                    <strong>BARANG BUKTI :</strong>
                    <ol>
                        @for ($i = 0; $i < count($bukti->namaBukti); $i++)
                            <li>{{ $bukti->namaBukti[$i] }}</li>
                        @endfor
                    </ol>
                </td>
                <td style="width: 70%">
                    <strong>URAIAN SINGKAT KEJADIAN :</strong>
                    <p style="text-align: justify; margin-top: 0px; margin-bottom: -2px">{{ $laporan->isi_laporan }}
                    </p>
                </td>
            </tr>
        </table>

        <hr>

        <p style="float: none; display: block; margin: -3px 0;">Pengadu / Pelapor membenarkan semua keterangannya dan
            membubuhkan
            tanda
            tangannya
            dibawah
            ini.</p>

        <table>
            <tr>
                <td style="width: 50%">-</td>
                <td style="width: 50%">
                    <span style="display: block; text-align: center;">
                        Pelapor,
                    </span>

                    <center>
                        {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                    </center>
                    <br><br><br><br>

                    <span style="display: block; text-align: center; text-decoration: underline">
                        {{ $laporan->nama_lengkap }}
                    </span>
                </td>
            </tr>
        </table>

        <hr>
        <div><strong>TINDAKAN YANG DIAMBIL</strong> : - Menerima / Membuat Laporan Polisi</div>
        <hr>

        <table>
            <tr>
                <td style="width: 50%; padding: 0 20px">
                    <center>
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
                </td>
                <td style="width: 50%; padding: 0 20px">
                    <center>
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
                        <center>
                            <hr style="margin: 2px 0; text-align: center">
                        </center>
                        <span style="display: block;
                            text-align: center;">
                            AKBP NRP 123456?????
                        </span>
                    </center>
                </td>
            </tr>
        </table>

        {{-- NEW PAGE - SURAT TANDA BUKTI MELAPOR --}}
        <div style="page-break-before: always;">
            <header>
                <span style="font-weight: bolder">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                <span style="font-weight: bolder">DAERAH KABUPATEN BADUNG</span>
                <span style="font-weight: bolder ;text-decoration: underline">SENTRA PELAYANAN KEPOLISIAN TERPADU</span>
                <span>Jl. Kebo Iwa No.1, Mengwitani, Mengwi</span>
                <span
                    style="font-weight: bolder; text-decoration: underline; margin-top: 10px; text-align: left; margin-left: 35px">PRO
                    JUSTITIA</span>
            </header>

            {{-- Logo POLRI --}}
            <center>
                <img height="75" style="margin-top: 0px" src="{{ $logoPolriPath }}">
            </center>

            <h4 style="margin-top: 0px; text-decoration: underline; text-align: center">LAPORAN POLISI</h4>
            <h4 style="text-align: center; margin-top: -15px; margin-bottom: 0px">Nomor :
                {{ $laporan->nomor_polisi }}
            </h4>

            <div style="padding-left: 60px">
                <p style="text-align: justify; margin: 5px;">
                    ------ Yang bertanda tangan dibawah ini menerangkan bahwa pada hari
                    {{ dateFormat($laporan->dilaporkan_pada) }} pukul {{ timeFormat($laporan->dilaporkan_pada) }} WITA
                    telah melakukan pelaporan, yang mengaku :
                </p>

                <table style="margin-left: 36px">
                    {{-- Waktu Kejadian --}}
                    <tr>
                        <td style="width: 25%">Nama</td>
                        <td style="width: 12px">:</td>
                        <td>{{ $laporan->nama_lengkap }}</td>
                    </tr>

                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $laporan->tempat_lahir }}, {{ dateFormat($laporan->tanggal_lahir) }}</td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>
                            {{ ageFormat($laporan->tanggal_lahir) }} Tahun
                        </td>
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
                </table>

                <p style="text-align: justify; margin: 5px">
                    ------ Telah melaporkan bahwa telah terjadi Tindak Pidana <strong
                        style="text-transform: capitalize">{{ $laporan->kategori }}</strong> yang
                    diduga dilakukan oleh <strong>{{ $terlapor }}</strong> yang
                    terjadi pada hari {{ dateFormat($laporan->tanggal_kejadian) }} di {{ $laporan->lokasi_kejadian }},
                    {{ $laporan->detail_lokasi_kejadian }} yang merupakan wilayah Hukum Polres Badung.
                </p>

                <p style="text-align: justify; margin: 5px">
                    ------ Dengan adanya kejadian di atas, korban melaporkan ke Polres Badung guna Pengusutan lebih
                    lanjut.
                </p>

                <table style="margin-left: 36px">
                    {{-- Waktu Kejadian --}}
                    <tr>
                        <td style="width: 25%">Terlapor</td>
                        <td style="width: 12px">:</td>
                        <td>{{ $terlapor }}</td>
                    </tr>

                    <tr>
                        <td>Kerugian</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                </table>

                <p style="text-align: justify; margin: 5px">
                    ------ Sesuai dengan Pengaduan / Laporan Polisi Nomor : {{ $laporan->nomor_polisi }} tanggal
                    {{ dateFormat($laporan->dilaporkan_pada) }}.
                </p>

                <p style="text-align: justify; margin: 5px">
                    ------ Demikian Tanda Bukti Penerimaan Laporan ini dibuat dengan sebenar – benarnya untuk
                    dipergunakan
                    seperlunya. Telpon Polres Badung : (0361) 829949.
                </p>

            </div>
            <table>
                <tr>
                    <td style="width: 50%; padding: 0 20px">
                        <br>
                        <span style="display: block; text-align: center;">
                            Pelapor,
                        </span>

                        <center>
                            {{-- <img width="150" src="{{ $ttdPath }}"> --}}
                        </center>
                        <br><br><br><br>

                        <span style="display: block; text-align: center; text-decoration: underline">
                            {{ $laporan->nama_lengkap }}
                        </span>
                    </td>
                    <td style="width: 50%; padding: 0 20px">
                        <center>
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
                            <center>
                                <hr style="margin: 2px 0; text-align: center">
                            </center>
                            <span style="display: block;
                        text-align: center;">
                                AKBP NRP 123456?????
                            </span>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%; padding: 0 30%; padding-top: 20px" colspan="2">
                        <center>
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
                    </td>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>
