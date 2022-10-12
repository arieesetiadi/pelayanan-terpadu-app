<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan SP2HP</title>

    <style>
        th,
        td {
            padding: 2px 10px
        }
    </style>
</head>

<body>
    <h1 style="text-align: center">Laporan SP2HP</h1>

    <table style="width: 100%" border="1" cellspacing="0" cellpadding="0">
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
</body>

</html>
