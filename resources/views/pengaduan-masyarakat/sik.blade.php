<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Surat Izin Keramaian</title>

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

    <style>
        ol {
            margin-left: 20px
        }
    </style>

    <link href="favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    {{-- Top Bar --}}
    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Surat Izin Keramaian</h1>

            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-12">
                    <p>
                        Izin keramaian dimaksudkan untuk menjaga suasana yang kondusif bagi semua pihak. Kelancaran
                        suatu acara keramaian pasti harus didukung dengan persiapan pengamanan yang pas. Pemberian izin
                        dipertimbangkan dengan resiko-resiko yang mungkin timbul, kesiapan kuantitas personil, sarana
                        dan prasarana Polri untuk antisipasinya.
                    </p><br>

                    <ol style="list-style-type: upper-alpha">
                        {{-- A. IJIN KERAMAIAN --}}
                        <li>
                            <span class="h6">IZIN KERAMAIAN</span>
                            <ul>
                                <li>
                                    <strong>Dasar :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>
                                            Juklap Kapolri No. Pol / 02 / XII / 95 tentang perizinan dan pemberitahuan
                                            kegiatan masyarakat.
                                            Dalam hal ini kegiatan yang dimaksud adalah:
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Pentas musik band / dangdut</li>
                                                <li>Wayang Kulit</li>
                                                <li>Ketoprak</li>
                                                <li> Dan pertunjukan lain</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <strong>Persyaratan :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>
                                            Izin keramaian yang mendatangkan massa 300 – 500 orang (Kecil)
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Surat Keterangan dari kelurahan Setempat</li>
                                                <li>Fotocopy Kartu Tanda Penduduk ( KTP ) yang punya Hajad sebanyak 1
                                                    (satu)
                                                    Lembar</li>
                                                <li>Fotocopy Kartu Keluarga ( KK ) yang punya hajad sebanyak 1 ( satu )
                                                    lembar</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Izin keramaian yang mendatangkan massa lebih dari 1000 orang (Besar)
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Surat Permohonan Izin Keramaian</li>
                                                <li>Proposal kegiatan</li>
                                                <li>Identitas penyelenggara / Penanggung Jawab</li>
                                                <li>Izin Tempat berlangsungnya kegiatan</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <br>

                        {{-- B. IJIN KERAMAIAN DENGAN KEMBANG API --}}
                        <li>
                            <span class="h6">IZIN KERAMAIAN DENGAN KEMBANG API</span>
                            <ul>
                                <li>
                                    <strong>Dasar :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>KUHP pasal 510 tentang Keramaian Umum.</li>
                                        <li> Petunjuk pelaksanaan kapolri No.Pol : Juklak / 29 / VII / 1991 Tgl
                                            23
                                            juli1991 tentang Pengawasan , Pengendalian dan Pengamanan bahan
                                            Peledak Non
                                            Organik ABRI.</li>
                                        <li>Petunjuk lapangan Kapolri no. Pol : Juklap / 02 / XII / 1995 /
                                            Tentang
                                            Perijinan dan Pemberitahuan Kegiatan Masyarakat.</li>
                                    </ol>
                                </li>
                                <li>
                                    <strong>Persyaratan :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>Surat Permohonan dari Pemohon tentang pelaksanaan Pesta Kembang Api,
                                            yang mencakup:
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Pesta Kembang api tersebut digunakan dalam acara apa</li>
                                                <li>Jumlah dan Jenis Kembang api</li>
                                                <li>Waktu / Durasi Penyalaan Kembang Api</li>
                                                <li>Identitas Penyala Kembang Api</li>
                                                <li>Identitas Penanggung jawab Kegiatan</li>
                                                <li>Ijin Tempat Pelaksanaan Pesta Kembang Api</li>
                                                <li>Rekomendasi dari Polsek setempat</li>
                                            </ol>
                                        </li>
                                        <li>Surat ijin Impor ( asal – usul kembang api ) yang didatangkan untuk
                                            kegiatan tersebut.</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <br>

                        {{-- C. PERIJINAN PENYAMPAIAN PENDAPAT DI MUKA UMUM --}}
                        <li>
                            <span class="h6">PERIJINAN PENYAMPAIAN PENDAPAT DI MUKA UMUM</span>
                            <ul>
                                <li>
                                    <strong>Dasar :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>Undang – Undang No. 9 Th 1998 tentang Kemerdekaan Menyampaikan Pendapat di
                                            Muka Umum
                                            Bentuk Penyampaian pendapat di muka umum :
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Unjuk rasa / Demonstrasi</li>
                                                <li>Pawai</li>
                                                <li>Rapat Umum</li>
                                                <li>Mimbar Bebas</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <strong>Ketentuan :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>Penyampaian Pendapat di Muka Umum disampaikan di tempat terbuka dan tidak
                                            membawa yang dapat membahayakan keselamatan umum.
                                        </li>
                                        <li>
                                            Pembatalan pelaksanaan penyampaian pendapat di muka umum disampaikan secara
                                            tertulis selambat–selambatnya 24 jam sebelum pelaksanaan.
                                        </li>
                                        <li>
                                            Setelah menerima pemberitahuan tentang kegiatan penyamapain pendapat di Muka
                                            Umum Polri wajib:
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Memberikan surat tanda terima pemberitahuan</li>
                                                <li>Melakukan koordinasi dengan penanggung jawab penyampaian pendapat di
                                                    Muka Umum</li>
                                                <li>Melakukan koordinasi dengan pimpinan, instansi / lembaga yang
                                                    menjadi tujuan penyampaian pendapat
                                                </li>
                                                <li>Mempersiapakan pengamanan tempat lokasi dan route yang dilalui</li>
                                                <li>Bertanggung Jawab untuk melindungi para peserta penyampaian pendapat
                                                    di muka umum</li>
                                                <li>Bertanggung jawab untuk menyelenggarakan Pengamanan.</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Sanksi – sanksi yang diperoleh apabila tidak sesuai dengan ketentuan antara
                                            lain:.
                                            <ol style="list-style-type: lower-alpha">
                                                <li>Dibubarkan bila tidak memenuhi dengan ketentuan</li>
                                                <li>Perbuatan melanggar hukum di kenakan sanksi hukuman sesuai dengan
                                                    ketentuan Perundang–undangan yang berlaku.</li>
                                                <li>Penanggung Jawab melakukan tindak pidana, di pidana sesuai dengan
                                                    ketentuan Perundang–undangan yang berlaku ditambah sepertiga dari
                                                    pidana pokok.
                                                </li>
                                                <li>Barang siapa dengan kekerasan / ancaman dalam penyampaian pendapat
                                                    di muka umum dipidana penjara paling lama 1 ( satu ) Tahun.</li>
                                            </ol>
                                        </li>

                                    </ol>
                                </li>

                                <li>
                                    <strong>Persyaratan :</strong>
                                    <ol style="list-style-type: decimal">
                                        <li>Maksud dan tujuan</li>
                                        <li>Lokasi dan rute</li>
                                        <li>Waktu dan lama Pelaksanaan</li>
                                        <li>Bentuk</li>
                                        <li>Penanggung jawab / Korlap</li>
                                        <li>Nama dan alamat organisasi, kelompok dan perorangan</li>
                                        <li>Alat peraga yang digunakan</li>
                                        <li>Jumlah peserta</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
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
    <script
        src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets-user/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}">
    </script>
</body>

</html>
