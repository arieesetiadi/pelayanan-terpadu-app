<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Surat Pemberitahuan Perkembangan Hasil Penyidikan</title>

    {{-- Animation os Scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Template Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets-user/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/jquery-fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/responsive.css') }}">
    <link href="favicon.ico" rel="shortcut icon">

    <style>
        ol {
            list-style-type: decimal;
        }

        ul {
            list-style-type: disc;
        }

        ol,
        ul {
            margin-left: 25px
        }

        h4 {
            font-size: 28px
        }

        h6 {
            font-size: 20px
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        li {
            color: black
        }
    </style>
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    {{-- Top Bar --}}
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container p-5 styled-bg">
            <a href="/">
                <i class="fa-solid fa-angle-left fa-3x"></i>
            </a>

            {{-- Alert success --}}
            @if (session('success'))
                <div class="alert alert-success mt-4" role="alert">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="d-inline-block mx-2">
                        {{ session('success') }}
                    </span>
                </div>
            @endif

            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Surat Pemberitahuan Perkembangan Hasil Penyidikan</h1>

            <center>
                <div class="flat-appointment btn-linear hv-linear-gradient">
                    <a href="/form/lapor-sp2hp" class="font-style linear-color border-corner">Lapor</a>
                </div>
            </center>
            <br>

            <p>
                Surat Pemberitahuan Perkembangan Hasil Penyidikan (SP2HP) merupakan hak bagi pelapor. Dalam hal menjamin
                akuntabilitas dan transparansi penyelidikan /penyidikan, penyidik wajib memberikan SP2HP kepada pihak
                pelapor baik diminta atau tidak diminta secara berkala.
            </p>
            <br>
            <p>
                Surat Pemberitahuan Perkembangan Hasil Penyidikan (SP2HP) merupakan hak bagi pelapor. Dalam hal menjamin
                akuntabilitas dan transparansi penyelidikan /penyidikan, penyidik wajib memberikan SP2HP kepada pihak
                pelapor baik diminta atau tidak diminta secara berkala.
            </p>
            <br>
            <p>SP2HP sekurang-kurangnya memuat tentang :</p>
            <ol>
                <li>Pokok perkara</li>
                <li>Tindakan penyidikan yang telah dilaksanakan dan hasilnya</li>
                <li>Masalah/kendala yang dihadapi dalam penyidikan</li>
                <li>Rencana tindakan selanjutnya</li>
                <li>Himbauan atau penegasan kepada pelapor tentang hak dan kewajibannya demi kelancaran dan keberhasilan
                    penyidikan</li>
            </ol>
            <br>
            <p>SP2HP yang dikirimkan kepada pelapor, ditandatangani oleh Ketua Tim Penyidik dan diketahui oleh Pengawas
                Penyidik, tembusannya wajib disampaikan kepada atasan langsung.</p>
            <br>
            <p>SP2HP merupakan layanan kepolisian yang memberikan informasi kepada masyarakat sampai sejauh mana
                perkembangan perkara yang ditangani oleh pihak Kepolisian. Sehingga dengan adanya transparansi
                penanganan perkara, masyarakat dapat menilai kinerja Kepolisian dalam menangani berbagai perkara tindak
                pidana yang terjadi di masyarakat.</p>
            <br>
            <p>Dalam SP2HP, di sisi pojok kanan atas tertera kode yang mengindikasikan keterangan:</p>
            <ul>
                <li>A1: Perkembangan hasil penelitian Laporan</li>
                <li>A2: Perkembangan hasil penyelidikan blm dapat ditindaklanjuti ke penyidikan</li>
                <li>A3: Perkembangan hasil penyelidikan akan dilakukan penyidikan</li>
                <li>A4: Perkembangan hasil penyidikan</li>
                <li>A5: SP3 (Surat Perintah Pemberhentian Penyelidikan)</li>
            </ul>
            <hr>
            <h4>Interval pemberian SP2HP</h4>
            <p>SP2HP pertama kali diberikan adalah pada saat setelah mengeluarkan surat perintah penyidikan dalam waktu
                3 (tiga) hari Laporan Polisi dibuat. SP2HP yang diberikan kepada pelapor berisi pernyataan bahwa laporan
                telah diterima, nama penyidik dan nomor telepon/HP.</p>
            <hr>
            <h6>Waktu pemberian SP2HP pada tingkat penyidikan untuk kasus :</h6>
            <ul>
                <li>Kasus ringan, SP2HP diberikan pada hari ke-10, hari ke-20 dan hari ke-30</li>
                <li>Kasus sedang, SP2HP diberikan pada hari ke-15, hari ke-30, hari ke-45 dan hari ke-60.</li>
                <li>Kasus sulit, SP2HP diberikan pada hari ke-15, hari ke-30, hari ke-45, hari ke-60, hari ke-75 dan
                    hari ke 90.</li>
                <li>Kasus sangat sulit, SP2HP diberikan pada hari ke-20, hari ke-40, hari ke-60, hari ke-80, hari ke-100
                    dan hari ke-120.
                </li>
            </ul>

            <br>

            <p>Tahap penyelesaian dihitung pada saat penyerahan berkas perkara yang pertama.</p>

            <hr>
            <h4>Bila tidak diberikan / mendapatkan SP2HP</h4>
            <p>Bahwa mengenai penyampaian SP2HP kepada pelapor/pengadu atau keluarga tidak diatur waktu perolehannya.
                Dahulu dalam ketentuan Pasal 39 ayat (1) Perkap No. 12 Tahun 2009 (yang saat ini sudah dicabut dan
                diganti dengan berlakunya Perkap No. 14 Tahun 2012) disebutkan setiap bulan paling sedikit 1 (satu)
                penyidik secara berkala wajib memberikan SP2HP kepada pihak pelapor baik diminta maupun tidak diminta,
                namun dalam Perkap No. 14 Tahun 2012 tidak lagi diatur mengenai waktu perolehannya.
            </p>
            <br>
            <p>Oleh karena itu untuk mengetahui perkembangan proses penyidikan yang sedang berlangsung, pihak pelapor
                dapat mengajukan permohonan untuk dapat diberikan SP2HP kepada pihak kepolisian terkait, sebagaimana
                telah diatur dalam ketentuan Pasal 11 ayat (1) huruf a Perkap No. 21 Tahun 2011 juncto Pasal 12 huruf c
                Perkap No. 16 tahun 2010
            </p>
            <br>
            <p>Setiap penerbitan dan penyampaian SP2HP, maka Penyidik wajib menandatangani dan menyampaikan tembusan
                kepada atasannya. Dengan SP2HP inilah pelapor atau pengadu dapat memantau kinerja kepolisian dalam
                menangani kasusnya. Sewaktu-waktu, pelapor atau pengadu dapat juga menghubungi Penyidik untuk menanyakan
                perkembangan kasusnya. Jika Penyidik menolak untuk memberikan SP2HP, maka kita dapat melaporkannya ke
                atasan Penyidik tersebut. Dan jika atasan Penyidik tersebut juga tidak mengindahkan laporan kita, maka
                kita dapat melaporkannya ke Divisi Propam Kepolisian Daerah terkait.
            </p>
        </div>
    </section>

    {{-- Footer --}}
    @include('layout.footer')

    {{-- JQuery --}}
    <script src="{{ asset('assets-user/js/jquery.min.js') }}"></script>

    {{-- Animation on Scroll --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- Bootstrap bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets-user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/main.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('assets-user/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets-user/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/rev-slider.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>
</body>

</html>
