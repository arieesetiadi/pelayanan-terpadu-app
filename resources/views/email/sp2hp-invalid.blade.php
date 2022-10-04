<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaporan SP2HP Tidak</title>
</head>

<body>
    <h2>Pelaporan SP2HP Tidak Valid : </h2>
    <p>{{ $keteranganInvalid }}</p>
    <p>Silahkan periksa kembali kelengkapan pelaporan tindak kriminal.</p>
    <h3>
        <a href="{{ url()->to('/notifikasi/detail/') . '/' . $id }}">Link</a>
    </h3>
</body>

</html>
