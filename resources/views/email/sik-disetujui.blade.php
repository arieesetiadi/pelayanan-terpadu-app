<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIK Disetujui</title>
</head>

<body>
    <h2>Laporan SIK Telah Disetujui</h2>

    <p>Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya pada link berikut:</p>

    <h3>
        <a href="{{ url()->to('/notifikasi/detail/') . '/' . $id }}">Link</a>

    </h3>
</body>

</html>
