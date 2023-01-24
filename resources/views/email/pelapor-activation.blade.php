<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Email Verification</h1>
    <p>
        Anda telah berhasil melakukan pendaftaran akun. Silahkan klik link berikut untuk melakukan aktivasi akun.
    </p>
    <a href="{{ url()->to('/pelapor/activation/') . '/' . $id }}">Aktivasi Akun</a>
</body>

</html>
