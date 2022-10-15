<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=sp2hp.xls');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SP2HP</title>
</head>

<body>

    @if (count($laporanSP2HP) > 0)
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Kategori</th>
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
                    <td>{{ dateTimeFormat($item->dilaporkan_pada) }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <center>Laporan tidak tersedia.</center>
    @endif

</body>

</html>
