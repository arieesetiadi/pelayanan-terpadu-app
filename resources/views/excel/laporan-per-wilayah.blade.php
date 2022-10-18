<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=laporan-per-wilayah.xls');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan per Wilayah</title>

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

        p,
        span,
        td,
        th,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tr>
            <td colspan="11">
                <table>
                    <tr>
                        <td>
                            <center>
                                <span style="font-weight: bolder; display: block">KEPOLISIAN NEGARA REPUBLIK
                                    INDONESIA</span>
                                <span style="font-weight: bolder; display: block">DAERAH KABUPATEN BADUNG</span>
                                <span style="font-weight: bolder; display: block; text-decoration: underline">
                                    SENTRA PELAYANAN
                                    KEPOLISIAN
                                    TERPADU
                                </span>
                                <span style="display: block">Jl. Kebo Iwa No.1, Mengwitani, Mengwi</span>
                            </center>
                        </td>
                        <td>
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
            @for ($i = 0; $i < 11; $i++)
                <td></td>
            @endfor
        </tr>
    </table>

    <h2 style="text-align: center">Laporan Jumlah Pelaporan SPKT Polres Badung</h2>
    <h2 style="text-align: center; margin-top: -20px">Periode {{ $periode }}</h2>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
        {{-- Header Table --}}
        <tr>
            <td rowspan="2">Lokasi</td>
            @foreach ($laporan as $item)
                <td colspan="3">{{ $item['label'] }}</td>
            @endforeach
            <td rowspan="2">Total</td>
        </tr>
        <tr>
            @foreach ($laporan as $item)
                <td>SKTLK</td>
                <td>SIK</td>
                <td>SP2HP</td>
            @endforeach
        </tr>

        {{-- Looping Lokasi --}}
        @foreach (getLokasi() as $lokasi)
            <tr>
                <td>{{ $lokasi }}</td>
                @foreach ($laporan as $item)
                    <td>{{ $item['laporanSKTLK'][$lokasi] }}</td>
                    <td>{{ $item['laporanSIK'][$lokasi] }}</td>
                    <td>{{ $item['laporanSP2HP'][$lokasi] }}</td>
                @endforeach
                <td>{{ $countPerLokasi[$lokasi] }}</td>
            </tr>
        @endforeach

        <tr>
            <td>Total</td>

            @foreach ($laporan as $item)
                <td>{{ $countPerPeriod[$item['label']]['SKTLK'] }}</td>
                <td>{{ $countPerPeriod[$item['label']]['SIK'] }}</td>
                <td>{{ $countPerPeriod[$item['label']]['SP2HP'] }}</td>
            @endforeach
            <td></td>
        </tr>
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
</body>

</html>
