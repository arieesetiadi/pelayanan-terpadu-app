<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen Pernyataan Keaslian</title>

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
            text-align: justify;
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
    <main>
        <h3>SURAT PERNYATAAN KEASLIAN DOKUMEN</h3>

        <p>Yang bertanda tangan dibawah ini :</p>

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $namaLengkap }}</td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $tempatLahir }}, {{ dateFormat($tanggalLahir, false) }}</td>
            </tr>
            <tr>
                <td style="vertical-align: top">Alamat</td>
                <td style="vertical-align: top">:</td>
                <td>{{ $alamat }}</td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td>{{ $telepon }}</td>
            </tr>
        </table>

        <br>

        <p style="text-indent: 30px">
            Dengan ini menyatakan bahwa data dan dokumen yang saya lampirkan dalam persyaratan pembuatan Surat
            Keterangan Tanda Lapor Kehilangan adalah benar dan sah. Apabila ternyata
            informasi yang Saya berikan terbukti tidak pernah, maka saya bersedia menerima sanksi sesuai ketentuan
            dan peraturan yang berlaku.
        </p><br>
        <p style="text-indent: 30px">
            Demikian surat pernyataan ini Saya buat dengan sebenarnya dan apabila di kemudian hari ternyata
            informasi dan keterangan yang Saya berikan pada permohonan dan lampiran ini tidak benar adanya, maka
            Saya menyatakan bersedia dibatalkan Surat Keterangan Tanda Lapor Kehilangan yang telah diberikan dan
            bersedia dituntut sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.
        </p>

        {{-- Bagian TTD --}}
        <div style="margin-top: 40px">
            <div class="half" style="margin-top: 20px; width: 35%">
            </div>
            <div class="half" style="width: 65%">
                <span style="display: block; text-align: center">
                    Badung, {{ dateFormat(now(), false) }}
                </span>

                <span style="display: block; text-align: center">Pembuat pernyataan,</span>

                <span style="display: block; text-align: center; margin: 75px 0 10px 0">
                    Materai
                </span>
                <hr style="width: 50%">
                <span style="display: block; text-align: center;
                ">
                    {{ $namaLengkap }}
                </span>
            </div>
        </div>
    </main>
</body>

</html>
