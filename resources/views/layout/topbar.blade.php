@php
    if (auth()->user()) {
        $notifikasi = App\Models\Notifikasi::getNotifikasiPelapor()['notifikasi'];
        $count = App\Models\Notifikasi::getNotifikasiPelapor()['count'];
        session()->put('notifikasi', $notifikasi);
    }
@endphp

<link rel="stylesheet" href="{{ asset('assets-user/css/custom.css') }}">

<div data-aos="fade-down" data-aos-duration="500">
    <div class="top-bar top-bar-type1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 d-flex align-items-center">
                    <div class="d-inline-block">
                        <a href="#" title="Datetime" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-clock d-inline-block mx-2"></i>
                            <span id="realtimeCounter" class="text-white"></span>
                        </a>
                        <script src="{{ asset('assets-user/js/realtimeCounter.js') }}"></script>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Phone" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                            0361829949
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Email" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                            info@polresbadung.id
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <header id="header" class="header header-type1 bg-header-s1 bg-color" data-aos="fade-down"
        data-aos-duration="500">
        <div class="container">
            <div class="flex-header d-flex">
                <div id="logo" class="logo d-flex align-items-center justify-content-start">
                    <a href="/" title="Logo">
                        <img src="{{ asset('assets-user/img/logo-main.png') }}" data-width="150" data-height="38"
                            alt="images" data-retina="{{ asset('assets-user/img/logo-main.png') }}">
                    </a>
                </div>
                <div class="content-menu d-flex align-items-center justify-content-end">
                    <div class="nav-wrap">
                        <div class="btn-menu"><span></span></div>
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li>
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Profil</a>
                                    <ul class="sub-menu">
                                        <li><a href="/visimisi">Visi & Misi</a></li>
                                        <li><a href="/sejarah">Sejarah</a></li>
                                        <li><a href="/tentangpolri">Tentang Polri</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/kontak">Kontak</a>
                                </li>
                                <li class="position-relative">
                                    <i id="notification-button" class="fa-solid fa-bell text-dark"
                                        style="cursor: pointer"></i>
                                    @if (isset($count))
                                        @if ($count > 0)
                                            <small class="count-notifikasi-pelapor">{{ $count }}</small>
                                        @endif
                                    @endif

                                    <div id="notification-box" class="d-none position-absolute"
                                        style="left: -350px; margin-top: 31px">
                                        <div class="card">
                                            <div class="card-body" style="width: 450px; padding:0;">
                                                @if (session('notifikasi'))
                                                    @php
                                                        $isReadedAll = true;
                                                        foreach (session('notifikasi') as $notifikasi) {
                                                            if (!$notifikasi->telah_dibaca) {
                                                                $isReadedAll = false;
                                                            }
                                                        }
                                                    @endphp
                                                    <center>
                                                        <span class="d-block my-2">Notifikasi</span>
                                                        <a href="/notifikasi/read-all-pelapor"
                                                            class="text-center text-primary {{ $isReadedAll ? 'd-none' : '' }}">Tandai
                                                            semua telah
                                                            dibaca</a>
                                                    </center>
                                                    @foreach (session('notifikasi') as $notifikasi)
                                                        <a href="/notifikasi/detail/{{ $notifikasi->id }}"
                                                            class="d-block {{ $notifikasi->telah_dibaca ? 'notification-readed' : 'notification' }}">
                                                            <span style="font-weight: bolder">
                                                                {{ $notifikasi->judul }}
                                                            </span>
                                                            <p>{{ $notifikasi->isi }}</p>
                                                            <small>{{ humanTimeFormat($notifikasi->dikirim_pada) }}</small>
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <center>
                                                        <span class="d-inline-block text-center my-4">Tidak ada
                                                            notifikasi.</span>
                                                    </center>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="position-relative">
                                    @if (auth()->user())
                                        @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                            <img id="profile-button" width="40" height="40"
                                                src="{{ asset('assets-user/img/profiles/man.png') }}" alt="Man"
                                                style="cursor: pointer; margin-left: 20px">
                                        @else
                                            <img id="profile-button" width="40" height="40"
                                                src="{{ asset('assets-user/img/profiles/woman.png') }}" alt="Woman"
                                                style="cursor: pointer; margin-left: 20px">
                                        @endif

                                        <div id="profile-box" class="d-none position-absolute mt-4"
                                            style="z-index: 9999; left: -200px;">
                                            <div class="card">
                                                <div class="card-body" style="width: 300px">
                                                    <a href="/profile/pelapor"
                                                        class="d-block notification-readed">{{ auth()->user()->nama }}</a>
                                                    <hr>
                                                    <a href="/logout" class="d-block notification-readed">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="flat-appointment btn-linear hv-linear-gradient">
                                            <a href="/login" class="font-style linear-color border-corner">Login</a>
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<script src="{{ asset('assets-user/js/custom.js') }}"></script>
