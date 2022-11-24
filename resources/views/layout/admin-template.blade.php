@php
    $data = App\Models\Notifikasi::getNotifikasiAdmin();
    session()->put('notifikasiAdmin', $data['notifikasi']);
@endphp

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets-admin/img/favicon-32x32.png') }}" type="image/png" />

    <!--plugins-->
    <link href="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('assets-admin/css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('assets-admin/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/header-colors.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets-admin/css/custom.css') }}">
    <title>{{ $title ?? 'Title' }} | Administrator</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>
                <form action="/search" class="searchbar w-100" method="POST">
                    @csrf
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i
                            class="bi bi-search"></i></div>
                    <input id="searchBox" name="keyword" class="form-control" type="text" placeholder="Pencarian .."
                        autocomplete="off" value="{{ $old['keyword'] ?? '' }}">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon"><i
                            class="bi bi-x-lg"></i></div>
                </form>
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item search-toggle-icon">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <i class="bi bi-search"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                        <img src="{{ asset('assets-admin/img/avatars/man.png') }}" class="user-img"
                                            alt="">
                                    @else
                                        <img src="{{ asset('assets-admin/img/avatars/woman.png') }}" class="user-img"
                                            alt="">
                                    @endif
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" style="width: 300px">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                                <img src="{{ asset('assets-admin/img/avatars/man.png') }}"
                                                    alt="Profile Picture" class="rounded-circle" width="54"
                                                    height="54">
                                            @else
                                                <img src="{{ asset('assets-admin/img/avatars/woman.png') }}"
                                                    alt="Profile Picture" class="rounded-circle" width="54"
                                                    height="54">
                                            @endif

                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">{{ auth()->user()->nama }}</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">
                                                    {{ auth()->user()->email }}
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/profile">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-person-fill"></i></div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/logout">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-lock-fill"></i></div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="notifications">
                                    @if ($data['count'] > 0)
                                        <span class="notify-badge">{{ $data['count'] }}</span>
                                    @endif
                                    <i class="bi bi-bell-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Notifications</h5>
                                </div>
                                <div class="header-notifications-list">
                                    @forelse (session('notifikasiAdmin') as $notifikasi)
                                        @php
                                            $namaPelapor = getNamaPelaporByNotification($notifikasi);
                                        @endphp
                                        @if ($namaPelapor != null)
                                            <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Pelapor : {{ $namaPelapor }}"
                                                class="dropdown-item {{ $notifikasi->telah_dibaca == false ? 'bg-grey' : '' }}"
                                                href="/notifikasi/cetak-pdf/{{ $notifikasi->id }}">
                                            @else
                                                <a target="_blank"
                                                    class="dropdown-item {{ $notifikasi->telah_dibaca == false ? 'bg-grey' : '' }}"
                                                    href="/notifikasi/cetak-pdf/{{ $notifikasi->id }}">
                                        @endif

                                        <div class="d-flex align-items-center">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">{{ $notifikasi->judul }}</h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">
                                                    {{ $notifikasi->isi }}
                                                </small>
                                                <small>{{ humanTimeFormat($notifikasi->dikirim_pada) }}</small>
                                            </div>
                                        </div>
                                        </a>
                                    @empty
                                        <span class="d-inline-block text-center">Tidak ada notifikasi.</span>
                                    @endforelse
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="/notifikasi/read-all-admin">
                                        <div class="text-center">Tandai
                                            semua telah
                                            dibaca</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets-admin/img/logo-polres.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text text-dark">POLRES</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                {{-- Dashboard --}}
                <li>
                    <a href="/dashboard">
                        <div class="parent-icon"><i class="bi bi-house-fill"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li class="{{ auth()->user()->jenis_pengguna == 'AdminReskrim' ? 'd-none' : '' }}">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <i class="bi bi-list-ul"></i>
                        </div>
                        <div class="menu-title">Pengaduan Masyarakat</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/sktlk"><i class="bi bi-circle"></i>SKTLK</a>
                        </li>
                        <li> <a href="/admin/sik"><i class="bi bi-circle"></i>Surat Izin Keramaian</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <i class="bi bi-list-ul"></i>
                        </div>
                        <div class="menu-title">Tindak Kriminal</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/sp2hp"><i class="bi bi-circle"></i>SP2HP</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            @yield('content')
        </main>
        <!--end page main-->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->

    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('assets-admin/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets-admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script
        src="{{ asset('assets-admin/plugins/perfect-scrollbar/js/perfect-scrollbar.jsassets-admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}">
    </script>
    <script src="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <!--app-->
    <script src="{{ asset('assets-admin/js/app.js') }}"></script>
    <script src="{{ asset('assets-admin/js/index2.js') }}"></script>
    <script>
        new PerfectScrollbar(".best-product")
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('assets-admin/js/custom.js') }}"></script>

</body>

</html>
