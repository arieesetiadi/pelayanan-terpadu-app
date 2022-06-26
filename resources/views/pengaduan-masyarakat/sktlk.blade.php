<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan Tanda Lapor Kehilangan</title>

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
        ul {
            list-style-type: decimal;
        }

        li {
            margin-left: 30px;
        }
    </style>

    <link href="favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->

    @include('layout.topbar')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Surat Keterangan Tanda Lapor Kehilangan</h1>

            <center>
                <div class="flat-appointment btn-linear hv-linear-gradient">
                    <a href="/form-sktlk/lapor" class="font-style linear-color border-corner">Lapor</a>
                </div>
            </center>

            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-12">
                    <p>
                        Pelayanan Surat Keterangan Tanda Lapor Kehilangan ( SKTLK ) atau yang dulu dikenal dengan
                        Laporan Kehilangan Barang
                        (LKB) adalah salah satu jenis pelayanan di Polri. Program ini dengan harapan memberikan
                        kemudahan kepada masyarakat
                        dengan melihat efektifitas waktu, tenaga dan biaya.
                    </p>
                    <br>
                    <p>
                        SKTLK Online dibuka setiap hari senin sampai dengan sabtu pukul 08.00-14.00 WIB untuk data yang
                        diinput setelah pukul
                        14.00 WIB akan dikirim hasilnya keesekoan harinya. Syarat – syarat kepengurusan Surat Keterangan
                        Tanda Lapor Kehilangan (SKTLK) antara lain :
                    </p>
                    <br>

                    <ol>
                        <li><strong>Surat Sertifikat Tanah:</strong>
                            <ul>
                                <li>Menunjukan bukti 2x (dua kali) penerbitan pada surat kabar / koran atas Sertifikat
                                    Hak Milik (SHM) yang hilang.</li>
                                <li>Rekomendasi yang membenarkan dari Kantor Badan Pertanahan Nasional (BPN), termasuk
                                    data-data keterangan lengkap berdasarkan Sertifikat Hak Milik (SHM) yang hilang dan
                                    tidak sedang dalam permasalahan.</li>
                                <li>Membuat surat pernyataan dari pemilik bahwa Sertifikat Hak Milik (SHM) telah hilang.
                                </li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Buku Pemilik Kendaraan Bermotor (BPKB) :</strong>
                            <ul>
                                <li>Menunjukan bukti 2x (dua kali) penerbitan pada surat kabar / koran atas Buku Pemilik
                                    Kendaraan Bermotor (BPKB) yang hilang.</li>
                                <li>Menunjukan Surat Tanda Nomor Kendaraan (STNK) asli dan bukti cek fisik kendaraan.
                                </li>
                                <li>Membuat surat pernyataan dari pemilik bahwa Buku Pemilik Kendaraan Bermotor (BPKB)
                                    telah hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>

                    <ol>
                        <li><strong>Surat Tanda Nomor Kendaraan (STNK) :</strong>
                            <ul>
                                <li>Menunjukan bukti surat kabar / koran atas Surat Tanda Nomor Kendaraan (STNK) yang
                                    hilang.</li>
                                <li>Menunjukan Buku Pemilik Kendaraan Bermotor (BPKB) asli / apabila masih dalam proses
                                    kredit, minta Rekomendasi dari Dealer dan tidak sedang dalam permasalahan.</li>
                                <li>Membuat surat pernyataan dari pemilik bahwa Surat Tanda Nomor Kendaraan (STNK).</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>PASPOR :</strong>
                            <ul>
                                <li>Menunjukan bukti 2x (dua kali) penerbitan pada surat kabar / koran atas PASPOR yang
                                    hilang.</li>
                                <li>Rekomendasi yang membenarkan dari Kantor Imigrasi, termasuk data-data keterangan
                                    lengkap berdasarkan PASPOR yang hilang dan tidak sedang dalam permasalahan.</li>
                                <li>Membuat surat pernyataan dari pemilik bahwa PASPOR telah hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Buku Nikah :</strong>
                            <ul>
                                <li>Menunjukan bukti 2x (dua kali) penerbitan pada surat kabar / koran atas Buku Nikah
                                    yang hilang.</li>
                                <li>Rekomendasi yang membenarkan dari Kantor Urusan Agama (KUA) tempat Buku Nikah
                                    dikeluarkan, termasuk data-data keterangan lengkap berdasarkan Buku Nikah yang
                                    hilang dan tidak sedang dalam permasalahan.</li>
                                <li>Membuat surat pernyataan dari pemilik bahwa Buku Nikah telah hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Surat Ijazah :</strong>
                            <ul>
                                <li>Menunjukan bukti 2x (dua kali) penerbitan pada surat kabar / koran atas Buku Nikah
                                    yang hilang.</li>
                                <li>Rekomendasi yang membenarkan dari sekolah tempat Ijazah dikeluarkan, termasuk
                                    data-data keterangan lengkap berdasarkan Ijazah yang hilang.</li>
                                <li>Membuat surat pernyataan dari pemilik bahwa Ijazah telah hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Surat Ijin Mengemudi (SIM) :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Sat.Lantas tempat Surat Ijin Mengemudi (SIM)
                                    dikeluarkan, termasuk data-data keterangan lengkap berdasarkan Surat Ijin Mengemudi
                                    (SIM) yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Kartu Tanda Penduduk (KTP) : </strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Kantor Kelurahan / Desa sesuai alamat pada KTP /
                                    domisili, termasuk data-data keterangan lengkap berdasarkan Kartu Tanda Penduduk
                                    (KTP) yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Kartu Keluarga :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Kantor Kelurahan / Desa sesuai alamat pada KTP /
                                    domisili, termasuk data-data keterangan lengkap berdasarkan Kartu Keluarga yang
                                    hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Buku Tabungan :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Bank yang bersangkutan, termasuk data-data
                                    keterangan lengkap berdasarkan Buku Tabungan yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Kartu ATM :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Bank yang bersangkutan, termasuk data-data
                                    keterangan lengkap berdasarkan Kartu ATM yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Surat Gadai (Pegadaian) :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Kantor Pegadaian yang bersangkutan, termasuk
                                    data-data keterangan lengkap berdasarkan Surat Gadai yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                        <li><strong>Kartu BPJS (Badan Penyelenggara Jaminan Sosial):</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Kantor BPJS yang bersangkutan, termasuk data-data
                                    keterangan lengkap berdasarkan Kartu BPJS yang hilang.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
                            </ul>
                        </li>
                    </ol>

                    <p>&nbsp;</p>

                    <ol>
                        <li><strong>Surat-surat penting lainnya :</strong>
                            <ul>
                                <li>Rekomendasi yang membenarkan dari Kantor atau Dinas instansi yang mengeluarkan /
                                    menerbitkan, termasuk data-data keterangan lengkap berdasarkan surat / dokumen yang
                                    hilang dan tidak sedang dalam permasalahan.</li>
                                <li>Foto copy identitas pelapor / yang membuat laporan kehilangan.</li>
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
