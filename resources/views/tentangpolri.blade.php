<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Tentang Polri | Sentra Pelayanan Kepolisian Terpadu</title>

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
        p,
        li {
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
                data-aos-duration="500">Tentang Polri</h1>
            <div class="row py-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <div class="col-12">
                    <p>Lambang Polisi bernama Rastra Sewakottama yang berarti "Polri adalah Abdi Utama dari pada Nusa
                        dan Bangsa." Sebutan itu
                        adalah Brata pertama dari Tri Brata yang diikrarkan sebagai pedoman hidup Polri sejak 1 Juli
                        1954.</p>
                    <br>

                    <p>Polri yang tumbuh dan berkembang dari rakyat, untuk rakyat, memang harus berinisiatif dan
                        bertindak sebagai abdi
                        sekaligus pelindung dan pengayom rakyat. Harus jauh dari tindak dan sikap sebagai "penguasa".
                        Ternyata prinsip ini
                        sejalan dengan paham kepolisian di semua Negara yang disebut new modern police philosophy,
                        "Vigilant Quiescant" (kami
                        berjaga sepanjang waktu agar masyarakat tentram).</p>
                    <br>

                    <center>
                        <img width="300px" src="{{ asset('assets-user/img/logo-polri.png') }} " alt="Logo Polri"
                            class="mb-3">
                    </center>

                    <p class="d-block mt-3">Prinsip itu diwujudkan dalam bentuk logo dengan rincian makna sebagai
                        berikut :</p>

                    <ul style="list-style-type: circle; margin-left: 30px">
                        <li><strong>Perisai</strong> bermakna pelindung rakyat dan negara.</li>

                        <li><strong>Pancaran obor</strong> bermakna penegasan tugas Polri, disamping memberi sesuluh
                            atau penerangan juga bermakna penyadaran
                            hati
                        <li><strong>Pancaran obor</strong> bermakna penegasan tugas Polri, disamping memberi sesuluh
                            atau penerangan juga bermakna penyadaran hati
                            nurani masyarakat agar selalu sadar akan perlunya kondisi kamtibmas yang mantap.</li>

                        <li><strong>Tangkai padi dan kapas</strong> menggambarkan cita-cita bangsa menuju kehidupan adil
                            dan makmur, sedangkan 29 daun kapas dengan 9
                            putik dan 45 butir padi merupakan suatu pernyataan tanggal pelantikan Kapolri pertama 29
                            September 1945 yang dijabat
                            oleh Jenderal Polisi Raden Said Soekanto Tjokrodiatmodjo.</li>

                        <li><strong>3 Bintang</strong> di atas logo bermakna Tri Brata adalah pedoman hidup Polri.
                            Sedangkan warna hitam dan kuning adalah warna
                            legendaris Polri.</li>

                        <li><strong>Warna hitam</strong> adalah lambang keabadian dan sikap tenang mantap yang bermakna
                            harapan agar Polri selalu tidak goyah dalam
                            situasi dan kondisi apapun; tenang, memiliki stabilitas nasional yang tinggi dan prima agar
                            dapat selalu berpikir
                            jernih, bersih, dan tepat dalam mengambil keputusan.</li>
                    </ul>
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
