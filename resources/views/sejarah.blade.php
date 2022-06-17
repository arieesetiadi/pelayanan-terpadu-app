<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Sejarah | Sentra Pelayanan Kepolisian Terpadu</title>

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
        p {
            text-align: justify;
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
    @include('layout.banner')

    {{-- Konten --}}
    <section id="main">
        <div class="container py-5">
            <h1 style="color: black" class="h1 font-weight-bolder text-center my-4" data-aos="fade-up"
                data-aos-duration="500">Sejarah</h1>
            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-12">
                    {{-- Jaman Kerajaan --}}
                    <h6 class="font-weight-bolder">Jaman Kerajaan</h6>
                    <p>Pada zaman Kerajaan Majapahit patih Gajah Mada membentuk pasukan pengamanan yang disebut dengan
                        Bhayangkara yang bertugas melindungi raja dan kerajaan.</p>
                    <br>
                    {{-- Masa kolonial Belanda --}}
                    <h6 class="font-weight-bolder">Masa kolonial Belanda</h6>
                    <p>Pada masa kolonial Belanda, pembentukan pasukan keamanan diawali oleh pembentukan pasukan-pasukan
                        jaga yang diambil dari
                        orang-orang pribumi untuk menjaga aset dan kekayaan orang-orang Eropa di Hindia Belanda pada
                        waktu itu. Pada tahun 1867
                        sejumlah warga Eropa di Semarang, merekrut 78 orang pribumi untuk menjaga keamanan mereka.</p>
                    <br>
                    <p>Wewenang operasional kepolisian ada pada residen yang dibantu asisten residen. Rechts politie
                        dipertanggungjawabkan pada
                        procureur generaal (jaksa agung). Pada masa Hindia Belanda terdapat bermacam-macam bentuk
                        kepolisian, seperti veld
                        politie (polisi lapangan) , stands politie (polisi kota), cultur politie (polisi pertanian),
                        bestuurs politie (polisi
                        pamong praja), dan lain-lain</p>
                    <br>
                    <p>Sejalan dengan administrasi negara waktu itu, pada kepolisian juga diterapkan pembedaan jabatan
                        bagi bangsa Belanda dan
                        pribumi. Pada dasarnya pribumi tidak diperkenankan menjabat hood agent (bintara), inspekteur van
                        politie, dan commisaris
                        van politie. Untuk pribumi selama menjadi agen polisi diciptakan jabatan seperti mantri polisi,
                        asisten wedana, dan
                        wedana polisi.</p>
                    <br>
                    <p>Kepolisian modern Hindia Belanda yang dibentuk antara tahun 1897-1920 adalah merupakan cikal
                        bakal dari terbentuknya
                        Kepolisian Negara Republik Indonesia saat ini.</p>
                    <br>


                    {{-- Masa pendudukan Jepang --}}
                    <h6 class="font-weight-bolder">Masa pendudukan Jepang</h6>
                    <p>Pada masa ini Jepang membagi wiliyah kepolisian Indonesia menjadi Kepolisian Jawa dan Madura yang
                        berpusat di Jakarta,
                        Kepolisian Sumatera yang berpusat di Bukittinggi, Kepolisian wilayah Indonesia Timur berpusat di
                        Makassar dan Kepolisian
                        Kalimantan yang berpusat di Banjarmasin.</p>
                    <br>
                    <p>Tiap-tiap kantor polisi di daerah meskipun dikepalai oleh seorang pejabat kepolisian bangsa
                        Indonesia, tapi selalu
                        didampingi oleh pejabat Jepang yang disebut sidookaan yang dalam praktik lebih berkuasa dari
                        kepala polisi.</p><br>

                    {{-- Periode 1945 - 1950 --}}
                    <h6 class="font-weight-bolder">Periode 1945-1950</h6>
                    <p>Tidak lama setelah Jepang menyerah tanpa syarat kepada Sekutu, pemerintah militer Jepang
                        membubarkan Peta dan Gyu-Gun,
                        sedangkan polisi tetap bertugas, termasuk waktu Soekarno-Hatta memproklamasikan kemerdekaan
                        Indonesia pada tanggal 17
                        Agustus 1945. Secara resmi kepolisian menjadi kepolisian Indonesia yang merdeka.</p>
                    <br>
                    <p>Inspektur Kelas I (Letnan Satu) Polisi Mochammad Jassin, Komandan Polisi di Surabaya, pada
                        tanggal 21 Agustus 1945
                        memproklamasikan Pasukan Polisi Republik Indonesia sebagai langkah awal yang dilakukan selain
                        mengadakan pembersihan dan
                        pelucutan senjata terhadap tentara Jepang yang kalah perang, juga membangkitkan semangat moral
                        dan patriotik seluruh
                        rakyat maupun satuan-satuan bersenjata yang sedang dilanda depresi dan kekalahan perang yang
                        panjang. Sebelumnya pada
                        tanggal 19 Agustus 1945 dibentuk Badan Kepolisian Negara (BKN) oleh Panitia Persiapan
                        Kemerdekaan Indonesia (PPKI). Pada
                        tanggal 29 September 1945 Presiden Soekarno melantik R.S. Soekanto Tjokrodiatmodjo menjadi
                        Kepala Kepolisian Negara
                        (KKN).</p>
                    <br>
                    <p>Pada awalnya kepolisian berada dalam lingkungan Kementerian Dalam Negeri dengan nama Djawatan
                        Kepolisian Negara yang
                        hanya bertanggung jawab masalah administrasi, sedangkan masalah operasional bertanggung jawab
                        kepada Jaksa Agung.</p>
                    <br>
                    <p>Kemudian mulai tanggal 1 Juli 1946 dengan Penetapan Pemerintah tahun 1946 No. 11/S.D. Djawatan
                        Kepolisian Negara yang
                        bertanggung jawab langsung kepada Perdana Menteri. Tanggal 1 Juli inilah yang setiap tahun
                        diperingati sebagai Hari
                        Bhayangkara hingga saat ini.</p>
                    <br>
                    <p>Sebagai bangsa dan negara yang berjuang mempertahankan kemerdekaan maka Polri di samping bertugas
                        sebagai penegak hukum
                        juga ikut bertempur di seluruh wilayah RI. Polri menyatakan dirinya “combatant” yang tidak
                        tunduk pada Konvensi Jenewa.
                        Polisi Istimewa diganti menjadi Mobile Brigade, sebagai kesatuan khusus untuk perjuangan
                        bersenjata, seperti dikenal
                        dalam pertempuran 10 November di Surabaya, di front Sumatera Utara, Sumatera Barat, penumpasan
                        pemberontakan PKI di
                        Madiun, dan lain-lain.</p>
                    <br>
                    <p>Pada masa kabinet presidential, pada tanggal 4 Februari 1948 dikeluarkan Tap Pemerintah No.
                        1/1948 yang menetapkan bahwa
                        Polri dipimpin langsung oleh presiden/wakil presiden dalam kedudukan sebagai perdana
                        menteri/wakil perdana menteri.</p>
                    <br>
                    <p>Pada masa revolusi fisik, Kapolri Jenderal Polisi R.S. Soekanto telah mulai menata organisasi
                        kepolisian di seluruh
                        wilayah RI. Pada Pemerintahan Darurat RI (PDRI) yang diketuai Mr. Sjafrudin Prawiranegara
                        berkedudukan di Sumatera
                        Tengah, Jawatan Kepolisian dipimpin KBP Umar Said (tanggal 22 Desember 1948).</p>
                    <br>
                    <p>Hasil Konferensi Meja Bundar antara Indonesia dan Belanda dibentuk Republik Indonesia Serikat
                        (RIS), maka R.S. Sukanto
                        diangkat sebagai Kepala Jawatan Kepolisian Negara RIS dan R. Sumanto diangkat sebagai Kepala
                        Kepolisian Negara RI
                        berkedudukan di Yogyakarta.</p>
                    <br>
                    <p>Dengan Keppres RIS No. 22 tahun 1950 dinyatakan bahwa Jawatan Kepolisian RIS dalam kebijaksanaan
                        politik polisional
                        berada di bawah perdana menteri dengan perantaraan jaksa agung, sedangkan dalam hal administrasi
                        pembinaan,
                        dipertanggungjawabkan pada menteri dalam negeri.</p>
                    <br>
                    <p>Umur RIS hanya beberapa bulan. Sebelum dibentuk Negara Kesatuan RI pada tanggal 17 Agustus 1950,
                        pada tanggal 7 Juni
                        1950 dengan Tap Presiden RIS No. 150, organisasi-organisasi kepolisian negara-negara bagian
                        disatukan dalam Jawatan
                        Kepolisian Indonesia. Dalam peleburan tersebut disadari adanya kepolisian negara yang dipimpin
                        secara sentral, baik di
                        bidang kebijaksanaan siasat kepolisian maupun administratif, organisatoris.</p><br>

                    {{-- Periode 1950 - 1959 --}}
                    <h6 class="font-weight-bolder">Periode 1950 - 1959</h6>
                    <p>Dengan dibentuknya negara kesatuan pada 17 Agustus 1950 dan diberlakukannya UUDS 1950 yang
                        menganut sistem parlementer,
                        Kepala Kepolisian Negara tetap dijabat R.S. Soekanto yang bertanggung jawab kepada perdana
                        menteri/presiden.</p>
                    <br>
                    <p>Waktu kedudukan Polri kembali ke Jakarta, karena belum ada kantor digunakan bekas kantor Hoofd
                        van de Dienst der
                        Algemene Politie di Gedung Departemen Dalam Negeri. Kemudian R.S. Soekanto merencanakan kantor
                        sendiri di Jalan
                        Trunojoyo 3, Kebayoran Baru, Jakarta Selatan, dengan sebutan Markas Besar Djawatan Kepolisian
                        Negara RI (DKN) yang
                        menjadi Markas Besar Kepolisian sampai sekarang. Ketika itu menjadi gedung perkantoran termegah
                        setelah Istana Negara.</p>
                    <br>
                    <p>Sampai periode ini kepolisian berstatus tersendiri antara sipil dan militer yang memiliki
                        organisasi dan peraturan gaji
                        tersendiri. Anggota Polri terorganisir dalam Persatuan Pegawai Polisi Republik Indonesia (P3RI)
                        tidak ikut dalam Korpri,
                        sedangkan bagi istri polisi semenjak zaman revolusi sudah membentuk organisasi yang sampai
                        sekarang dikenal dengan nama
                        Bhayangkari tidak ikut dalam Dharma Wanita ataupun Dharma Pertiwi. Organisasi P3RI dan
                        Bhayangkari ini memiliki ketua
                        dan pengurus secara demokratis dan pernah ikut Pemilu 1955 yang memenangkan kursi di
                        Konstituante dan Parlemen. Waktu
                        itu semua gaji pegawai negeri berada di bawah gaji angkatan perang, namun P3RI memperjuangkan
                        perbaikan gaji dan
                        berhasil melahirkan Peraturan Gaji Polisi (PGPOL) di mana gaji Polri relatif lebih baik
                        dibanding dengan gaji pegawai
                        negeri lainnya (mengacu standar PBB).</p><br>

                    {{-- Masa Orde Lama --}}
                    <h6 class="font-weight-bolder">Masa Orde Lama</h6>
                    <p>Dengan Dekrit Presiden 5 Juli 1959, setelah kegagalan Konstituante, Indonesia kembali ke UUD
                        1945, namun dalam
                        pelaksanaannya kemudian banyak menyimpang dari UUD 1945. Jabatan Perdana Menteri (Alm. Ir.
                        Juanda) diganti dengan
                        sebutan Menteri Pertama, Polri masih tetap di bawah pada Menteri Pertama sampai keluarnya
                        Keppres No. 153/1959,
                        tertanggal 10 Juli di mana Kepala Kepolisian Negara diberi kedudukan Menteri Negara ex-officio.
                    </p>
                    <br>
                    <p>Pada tanggal 13 Juli 1959 dengan Keppres No. 154/1959 Kapolri juga menjabat sebagai Menteri Muda
                        Kepolisian dan Menteri
                        Muda Veteran. Pada tanggal 26 Agustus 1959 dengan Surat Edaran Menteri Pertama No. 1/MP/RI1959,
                        ditetapkan sebutan
                        Kepala Kepolisian Negara diubah menjadi Menteri Muda Kepolisian yang memimpin Departemen
                        Kepolisian (sebagai ganti dari
                        Djawatan Kepolisian Negara).</p>
                    <br>
                    <p>Waktu Presiden Soekarno menyatakan akan membentuk ABRI yang terdiri dari Angkatan Perang dan
                        Angkatan Kepolisian, R.S.
                        Soekanto menyampaikan keberatannya dengan alasan untuk menjaga profesionalisme kepolisian. Pada
                        tanggal 15 Desember 1959
                        R.S. Soekanto mengundurkan diri setelah menjabat Kapolri/Menteri Muda Kepolisian, sehingga
                        berakhirlah karier Bapak
                        Kepolisian RI tersebut sejak 29 September 1945 hingga 15 Desember 1959.</p>
                    <br>
                    <p>Dengan Tap MPRS No. II dan III tahun 1960 dinyatakan bahwa ABRI terdiri atas Angkatan Perang dan
                        Polisi Negara.
                        Berdasarkan Keppres No. 21/1960 sebutan Menteri Muda Kepolisian ditiadakan dan selanjutnya
                        disebut Menteri Kepolisian
                        Negara bersama Angkatan Perang lainnya dan dimasukkan dalam bidang keamanan nasional.</p>
                    <br>
                    <p>Tanggal 19 Juni 1961, DPR-GR mengesahkan UU Pokok kepolisian No. 13/1961. Dalam UU ini dinyatakan
                        bahwa kedudukan Polri
                        sebagai salah satu unsur ABRI yang sama sederajat dengan TNI AD, AL, dan AU.</p>
                    <br>
                    <p>Dengan Keppres No. 94/1962, Menteri Kapolri, Menteri/KASAD, Menteri/KASAL, Menteri/KSAU,
                        Menteri/Jaksa Agung, Menteri
                        Urusan Veteran dikoordinasikan oleh Wakil Menteri Pertama bidang pertahanan keamanan. Dengan
                        Keppres No. 134/1962
                        menteri diganti menjadi Menteri/Kepala Staf Angkatan Kepolisian (Menkasak).</p>
                    <br>
                    <p>Kemudian Sebutan Menkasak diganti lagi menjadi Menteri/Panglima Angkatan Kepolisian (Menpangak)
                        dan langsung bertanggung
                        jawab kepada presiden sebagai kepala pemerintahan negara. Dengan Keppres No. 290/1964 kedudukan,
                        tugas, dan tanggung
                        jawab Polri ditentukan sebagai berikut :</p>
                    <ul style="list-style-type: circle; margin-left: 40px">
                        <li>Alat Negara Penegak Hukum.</li>
                        <li>Koordinator Polsus.</li>
                        <li>Ikut serta dalam pertahanan.</li>
                        <li>Pembinaan Kamtibmas.</li>
                        <li>Kerkaryaan.</li>
                        <li>Sebagai alat revolusi.</li>
                    </ul>
                    <br>
                    <p>Berdasarkan Keppres No. 155/1965 tanggal 6 Juli 1965, pendidikan AKABRI disamakan bagi Angkatan
                        Perang dan Polri selama
                        satu tahun di Magelang. Sementara pada tahun 1964 dan 1965, pengaruh PKI bertambah besar karena
                        politik NASAKOM Presiden
                        Soekarno, dan PKI mulai menyusupi memengaruhi sebagian anggota ABRI dari keempat angkatan.</p>
                    <br>

                    {{-- Masa Orde Baru --}}
                    <h6 class="font-weight-bolder">Masa Orde Baru</h6>
                    <p>Karena pengalaman yang pahit dari peristiwa G30S/PKI yang mencerminkan tidak adanya integrasi
                        antar unsur-unsur ABRI,
                        maka untuk meningkatkan integrasi ABRI, tahun 1967 dengan SK Presiden No. 132/1967 tanggal 24
                        Agustus 1967 ditetapkan
                        Pokok-Pokok Organisasi dan Prosedur Bidang Pertahanan dan Keamanan yang menyatakan ABRI
                        merupakan bagian dari organisasi
                        Departemen Hankam meliputi AD, AL, AU , dan AK yang masing-masing dipimpin oleh Panglima
                        Angkatan dan bertanggung jawab
                        atas pelaksanaan tugas dan kewajibannya kepada Menhankam/Pangab. Jenderal Soeharto sebagai
                        Menhankam/Pangab yang pertama.</p>
                    <br>
                    <p>Setelah Soeharto dipilih sebagai presiden pada tahun 1968, jabatan Menhankam/Pangab berpindah
                        kepada Jenderal M.
                        Panggabean. Kemudian ternyata betapa ketatnya integrasi ini yang dampaknya sangat menyulitkan
                        perkembangan Polri yang
                        secara universal memang bukan angkatan perang.</p>
                    <br>
                    <p>Pada tahun 1969 dengan Keppres No. 52/1969 sebutan Panglima Angkatan Kepolisian diganti kembali
                        sesuai UU No. 13/1961
                        menjadi Kepala Kepolisian Negara RI, namun singkatannya tidak lagi KKN tetapi Kapolri.
                        Pergantian sebutan ini diresmikan
                        pada tanggal 1 Juli 1969.</p>
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
