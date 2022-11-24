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
    </style>
</head>

<body>
    <table style="width: 100%">
        <tr>
            <td style="width: 60%">
                <center>
                    <span style="font-weight: bolder; display: block">KEPOLISIAN NEGARA REPUBLIK INDONESIA</span>
                    <span style="font-weight: bolder; display: block">DAERAH KABUPATEN BADUNG</span>
                    <span style="font-weight: bolder; display: block; text-decoration: underline">
                        SENTRA PELAYANAN
                        KEPOLISIAN
                        TERPADU
                    </span>
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

    <h2 style="text-align: center">Laporan Jumlah Pelaporan SPKT Polres Badung</h2>
    <h2 style="text-align: center; margin-top: -20px">Periode {{ $periode }}</h2>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
        {{-- Header Table --}}
        <tr>
            <th rowspan="2">Lokasi</th>
            @foreach ($laporan as $item)
                <th colspan="3">{{ $item['label'] }}</th>
            @endforeach
            <th rowspan="2">Total</th>
        </tr>
        <tr>
            @foreach ($laporan as $item)
                <th>SKTLK</th>
                <th>SIK</th>
                <th>SP2HP</th>
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
            <th>Total</th>

            @foreach ($laporan as $item)
                <td>{{ $countPerPeriod[$item['label']]['SKTLK'] }}</td>
                <td>{{ $countPerPeriod[$item['label']]['SIK'] }}</td>
                <td>{{ $countPerPeriod[$item['label']]['SP2HP'] }}</td>
            @endforeach
            <td></td>
        </tr>
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
