<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Daftar | SPKT Polres Badung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0 d-flex justify-content-center">
                <div class="col-lg-5 shadow">
                    <div class="authentication-page-content d-flex align-items-center min-vh-100">
                        <div class="w-100 my-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="/" class="logo"><img
                                                        src="{{ asset('assets-admin/img/logo-polres.png') }}"
                                                        height="100" alt="logo" class="rounded"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Daftar akun</h4>
                                        </div>

                                        <div class=" mt-5">
                                            {{-- Form Daftar --}}
                                            <form action="/daftar" method="POST">
                                                @csrf
                                                {{-- Nama --}}
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="fa-solid fa-address-card auti-custom-input-icon"></i>
                                                    <label for="nama">Nama</label>
                                                    <input name="nama" type="text" class="form-control"
                                                        id="nama" placeholder="Nama pengguna" required>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        {{-- Username --}}
                                                        <div class="mb-3 auth-form-group-custom mb-4">
                                                            <i
                                                                class="fa-solid fa-address-card auti-custom-input-icon"></i>
                                                            <label for="username">Username</label>
                                                            <input name="username" type="text" class="form-control"
                                                                id="username" placeholder="Username" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        {{-- Password --}}
                                                        <div class="mb-3 auth-form-group-custom mb-4">
                                                            <i class="fa-solid fa-key auti-custom-input-icon"></i>
                                                            <label for="password">Password</label>
                                                            <input name="password" type="password" class="form-control"
                                                                id="password" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        {{-- Email --}}
                                                        <div class="auth-form-group-custom mb-4">
                                                            <i class="fa-solid fa-envelope auti-custom-input-icon"></i>
                                                            <label for="email">Email</label>
                                                            <input name="email" type="email" class="form-control"
                                                                id="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        {{-- Telepon --}}
                                                        <div class="auth-form-group-custom mb-4">
                                                            <i class="fa-solid fa-phone auti-custom-input-icon"></i>
                                                            <label for="telepon">Telepon</label>
                                                            <input name="telepon" type="text" class="form-control"
                                                                id="telepon" placeholder="Nomor telepon" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Alamat --}}
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="fa-solid fa-house-chimney auti-custom-input-icon"></i>
                                                    <label for="alamat">Alamat</label>
                                                    <input name="alamat" type="text" class="form-control"
                                                        id="alamat" placeholder="Alamat pengguna" required>
                                                </div>

                                                <div>
                                                    <div class="d-block mb-1">
                                                        <i class="fa-solid fa-venus-mars auti-custom-input-icon"></i>
                                                        <label for="">Jenis Kelamin</label>
                                                    </div>
                                                    <div class="form-check d-inline-block">
                                                        <input class="form-check-input" type="radio"
                                                            name="jenis_kelamin" id="Laki-laki" value="Laki-laki">
                                                        <label class="form-check-label" for="Laki-laki">
                                                            Laki-laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-inline-block mx-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="jenis_kelamin" id="Perempuan" value="Perempuan">
                                                        <label class="form-check-label" for="Perempuan">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">Daftar</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p>Sudah memiliki akun ? <a href="/login" class="fw-medium text-primary">
                                                    Login</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
