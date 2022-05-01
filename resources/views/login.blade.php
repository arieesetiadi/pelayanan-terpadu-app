<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | SPKT Polres Badung</title>
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

                                            <h4 class="font-size-18 mt-4">Login</h4>
                                        </div>

                                        <div class="mt-5">
                                            {{-- Form Daftar --}}
                                            <form action="/login" method="POST">
                                                @if (session('failed'))
                                                    <div class="alert alert-danger d-flex align-items-center"
                                                        role="alert">
                                                        <div>
                                                            {{ session('failed') }}
                                                        </div>
                                                    </div>
                                                @endif

                                                @csrf
                                                {{-- Username --}}
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="fa-solid fa-address-card auti-custom-input-icon"></i>
                                                    <label for="username">Username</label>
                                                    <input name="username" type="text" class="form-control"
                                                        id="username" placeholder="Username" required>
                                                </div>
                                                {{-- Password --}}
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="fa-solid fa-key auti-custom-input-icon"></i>
                                                    <label for="password">Password</label>
                                                    <input name="password" type="password" class="form-control"
                                                        id="password" placeholder="Password" required>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p>Belum memiliki akun ? <a href="/daftar" class="fw-medium text-primary">
                                                    Daftar</a> </p>
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
