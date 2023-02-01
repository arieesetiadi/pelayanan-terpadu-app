-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 16.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_sik`
--

CREATE TABLE `laporan_sik` (
  `id` int(11) NOT NULL,
  `nama_organisasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bentuk_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `lokasi_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_lokasi_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dalam_rangka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_undangan` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `proposal_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `izin_tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `izin_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotokopi_paspor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekomendasi_polsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernyataan_keaslian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelapor_id` int(11) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pernyataan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_persetujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilaporkan_pada` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_sik`
--

INSERT INTO `laporan_sik` (`id`, `nama_organisasi`, `nama_penanggung_jawab`, `pekerjaan`, `alamat`, `telepon`, `bentuk_kegiatan`, `waktu_mulai`, `waktu_selesai`, `lokasi_kegiatan`, `detail_lokasi_kegiatan`, `dalam_rangka`, `jumlah_undangan`, `status`, `proposal_kegiatan`, `izin_tempat`, `izin_instansi`, `fotokopi_paspor`, `rekomendasi_polsek`, `pernyataan_keaslian`, `pelapor_id`, `keterangan`, `status_pernyataan`, `dokumen_persetujuan`, `foto_ktp`, `foto_pelapor`, `dilaporkan_pada`) VALUES
(1, 'STT Wibhak', 'Astra Suarriana', 'Laboran', 'Br. Pande Mengwi', '081223748838', 'Konser Musik', '2022-12-12 17:00:00', '2022-12-12 23:00:00', 'Mengwi', 'Lapangan Mengwi', 'HUT STT Wira Bhakti', 200, 1, '1670675545_proposal kegiatan.jpg', '1670675545_izin lokasi kegiatan.jpg', '1670675546_surat rekomendasi.jpg', '', '1670675546_surat rekomendasi.jpg', '1670675727_pernyataan-keaslian astra.pdf', 3, NULL, NULL, '1670675771_laporan sik astra.pdf', '1670675727_foto ktp.jpg', '1670675727_orang dan katp2.png', '2022-12-10 12:32:26'),
(2, 'PT Jaya Sentosa', 'Darin Sofila', 'PNS', 'Br. Batu Kuta Utara', '08455267722', 'Sosialisasi', '2023-01-02 07:00:00', '0023-02-21 11:00:00', 'Kuta Utara', 'Sosialisasi Pentingnya Hand Hygiene', 'HUT ST Ginatri Sadha', 150, 1, '1670676172_proposal kegiatan.jpg', '1670676172_izin lokasi kegiatan.jpg', '1670676173_surat rekomendasi.jpg', '', '1670676173_surat rekomendasi.jpg', '1670676320_pernyataan-keaslian darin.pdf', 3, NULL, NULL, '1670676358_laporan sik darin.pdf', '1670676320_foto ktp.jpg', '1670676320_orang dan ktp.jpg', '2022-12-10 12:42:53'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1670676640_proposal kegiatan.jpg', '1670676640_izin lokasi kegiatan.jpg', '1670676641_surat rekomendasi.jpg', '', '1670676641_surat rekomendasi.jpg', NULL, 3, 'surat izin lokasi dan rekomendasi polsek tidak lengkap', NULL, NULL, NULL, NULL, '2022-12-10 12:47:05'),
(5, 'PT Dika Jaya', 'Dewa Angga', 'PNS', 'Br. Celuk Kapal Mengwi', '08112345678', 'Sosialisasi Covid-19', '2022-12-23 10:00:00', '2022-12-23 13:00:00', 'Petang', 'Jl. Binong Kaja', 'HUT ST Sidhi Dadri', 120, 1, '1670813908validasi-sp2hp..pdf', '1670813908validasi-sp2hpabigail.pdf', '1670813909laporansikdarin.pdf', '', '1670813909laporansikdarin.pdf', '1670814917pernyataan-keasliandika.pdf', 16, NULL, NULL, '1670814981laporansikdewaangga.pdf', '1670814917fotoktp.jpg', '1670814917orangdanktp.jpg', '2022-12-12 02:58:32'),
(6, 'ST. Cura Dharma', 'Dika Widhiatama', 'Guru', 'Br. Serangan Mengwi', '087667637738', 'Konser Live Music', '2023-02-02 19:00:00', '2023-02-02 23:00:00', 'Mengwi', 'Lapangan Mengwi Badung', 'HUT ST Cura Dharma', 200, 1, '1672927441proposalkegiatan.jpg', '1672927441izinlokasikegiatan.jpg', '1672927442suratrekomendasi.jpg', '', '1672927442suratrekomendasi.jpg', '1672927633pernyataan-keasliandika.pdf', 3, NULL, NULL, '1672927691laporansikdika.pdf', '1672927633fotoktp.jpg', '1672927633orangdanktp.jpg', '2023-01-05 14:04:02'),
(7, 'ST Mekar Sari', 'Adi Bimasena', 'PNS', 'Jl. Asoka Ubung Kaja', '087499877837', 'Gotong Royong ST', '2023-03-03 08:00:00', '2023-03-03 11:00:00', 'Kuta Selatan', 'Lapangan Ubung Kaja', 'HUT ST Mekar Sari', 200, 1, '1673057168proposalkegiatan.jpg', '1673057168izinlokasikegiatan.jpg', '1673057168suratrekomendasi.jpg', '', '1673057168suratrekomendasi.jpg', '1673057482pernyataankeaslianadi.pdf', 3, NULL, NULL, '1673057536laporansikadi.pdf', '1673057482fotoktp.jpg', '1673057482orangdanktp.jpg', '2023-01-07 02:06:08'),
(8, 'ST Eka Bhuana', 'Davendra Bayu', 'Guru', 'Jl. Sri Rama Ubung Kaja', '0812335663563', 'Sosialisasi', '2023-02-12 08:00:00', '2023-02-12 11:00:00', 'Kuta Utara', 'Jl. Ameerta no 12', 'HUT Eka Bhuana', 120, 1, '1673057598proposalkegiatan.jpg', '1673057598izinlokasikegiatan.jpg', '1673057598suratrekomendasi.jpg', '', '1673057598suratrekomendasi.jpg', '1673057928pernyataan-keasliandavendra.pdf', 3, NULL, NULL, '1673057968laporansikdavendra.pdf', '1673057928fotoktp.jpg', '1673057928orangdankatp2.png', '2023-01-07 02:13:18'),
(9, 'ST Eka Cita Dharma', 'Ekadanta Karunia Krisna', 'Karyawan Swasta', 'Br. Pamogan Peguyangan Kelod', '08366763734', 'Pergantian Pengurus ST Eka Cita Dharma', '2023-02-22 15:00:00', '2023-02-22 19:00:00', 'Mengwi', 'Br. Pamogan Peguyangan Kelod', 'HUT ST Eka Cita Dharma', 150, 1, '1673058287proposalkegiatan.jpg', '1673058287izinlokasikegiatan.jpg', '1673058287suratrekomendasi.jpg', '', '1673058287suratrekomendasi.jpg', '1673058551pernyataan-keaslianekadanta.pdf', 3, NULL, NULL, '1673058596laporansikstekacitadharma.pdf', '1673058551fotoktp.jpg', '1673058551orangdankatp2.png', '2023-01-07 02:24:47'),
(10, 'ST Semadi Dharma Putra', 'Adhitya Bhirawa', 'PNS', 'Desa Abiansemal Kaja', '087499877837', 'Persembahyangan', '2023-02-20 09:00:00', '2023-02-20 11:00:00', 'Abiansemal', 'Jl. Gajah Mada Abiansemal I', 'HUT Semadi Dharma Putra', 220, 1, '1673058655proposalkegiatan.jpg', '1673058655izinlokasikegiatan.jpg', '1673058655suratrekomendasi.jpg', '', '1673058655suratrekomendasi.jpg', '1673059060pernyataan-keaslianadhitya.pdf', 3, NULL, NULL, '1673059130laporansikstsemadidharmaputra.pdf', '1673059060fotoktp.jpg', '1673059060orangdankatp2.png', '2023-01-07 02:30:55'),
(11, 'ST Dharma Shanti', 'Gede Indra Gautama', 'Perawat', 'Br. Bongkasa Kangin', '0876637676273', 'Konser Musik', '2023-03-10 19:00:00', '2023-03-10 23:00:00', 'Mengwi', 'Jl. Bongkasa Kangin', 'HUT ST Dharma Shanti', 300, 1, '1673059183proposalkegiatan.jpg', '1673059183izinlokasikegiatan.jpg', '1673059183suratrekomendasi.jpg', '', '1673059183suratrekomendasi.jpg', '1673059533pernyataan-keasliangedeindra.pdf', 3, NULL, NULL, '1673059581laporansikstdharmashanti.pdf', '1673059533fotoktp.jpg', '1673059533orangdanktp.jpg', '2023-01-07 02:39:43'),
(12, 'ST Dharmaja', 'Mahesa Putra Irawan', 'Perawat', 'Br. Pande Kuta', '082665367627', 'Lomba HUT ST Dharmaja', '2023-03-09 09:00:00', '2023-03-10 15:00:00', 'Kuta', 'Lapangan Umum Kuta Sanjiwani', 'HUT ST Dharmaja', 170, 1, '1673059656proposalkegiatan.jpg', '1673059656izinlokasikegiatan.jpg', '1673059656suratrekomendasi.jpg', '', '1673059656suratrekomendasi.jpg', '1673059878pernyataan-keaslianmahesa.pdf', 3, NULL, NULL, '1673060019laporansikstdharmaja.pdf', '1673059878fotoktp.jpg', '1673059878orangdanktp.jpg', '2023-01-07 02:47:36'),
(13, 'ST Chandra Yowana', 'I Kadek Prawira Jaya', 'Fisioterapis', 'Br. Dharmasaba Abiansemal', '0877637677283', 'Sosialisasi', '2023-02-13 08:00:00', '2023-02-13 11:00:00', 'Abiansemal', 'Br. Dharmasaba Abiansemal', 'HUT ST Chandra Yowana', 120, 1, '1673060094proposalkegiatan.jpg', '1673060094izinlokasikegiatan.jpg', '1673060094suratrekomendasi.jpg', '', '1673060094suratrekomendasi.jpg', '1673060347pernyataan-keasliankadekprawira.pdf', 3, NULL, NULL, '1673060403laporansikchandrayowana.pdf', '1673060347fotoktp.jpg', '1673060347orangdanktp.jpg', '2023-01-07 02:54:54'),
(14, 'ST Daksa Laksana', 'Pande Janu Artawan', 'PNS', 'Br. Sakti Tibubeneng', '08744584152', 'HUT ST Daksa Laksana', '2023-03-29 15:00:00', '2023-03-29 20:00:00', 'Petang', 'Br. Sakti Tibubeneng', 'HUT ST Daksa Laksana', 120, 1, '1673060741proposalkegiatan.jpg', '1673060741izinlokasikegiatan.jpg', '1673060741suratrekomendasi.jpg', '', '1673060741suratrekomendasi.jpg', '1673060934pernyataan-keaslianpandejanu.pdf', 3, NULL, NULL, '1673060979laporansikstdaksalaksana.pdf', '1673060934fotoktp.jpg', '1673060934orangdanktp.jpg', '2023-01-07 03:05:41'),
(15, 'ST Panca Kumara', 'Handi Giri Putra', 'PNS', 'Br. Dauh Kutuh Kuta', '08778378283', 'Sosialisasi dan Workshop', '2023-03-30 09:00:00', '2023-03-30 11:00:00', 'Kuta', 'Br. Dauh Kutuh Kuta', 'HUT ST Panca Kumara', 120, 1, '1673061034proposalkegiatan.jpg', '1673061034izinlokasikegiatan.jpg', '1673061034suratrekomendasi.jpg', '', '1673061034suratrekomendasi.jpg', '1673061250pernyataan-keaslianhandigiri.pdf', 3, NULL, NULL, '1673066716laporansikstpancakumara.pdf', '1673061250fotoktp.jpg', '1673061250orangdanktp.jpg', '2023-01-07 03:10:34'),
(16, 'ST Eka Pertiwi', 'Prisa Sewagati', 'Guru', 'Br. Permata Anyar Buduk', '082637763782', 'Sosialisasi', '2023-04-24 09:00:00', '2023-04-24 12:00:00', 'Mengwi', 'Br. Permata Anyar Buduk', 'HUT ST Eka Pertiwi', 130, 1, '1673079392proposalkegiatan.jpg', '1673079392izinlokasikegiatan.jpg', '1673079392suratrekomendasi.jpg', '', '1673079392suratrekomendasi.jpg', '1673079583pernyataan-keaslianprisa.pdf', 3, NULL, NULL, '1673079622laporansikstekapertiwi.pdf', '1673079583fotoktp.jpg', '1673079583orangdanktp.jpg', '2023-01-07 08:16:32'),
(17, 'ST Tunjung Sari Yowana', 'Parmi Trika Saiti', 'PNS', 'Br. Tulangampiang Cemagi', '08766355656', 'Penyuluhan', '2023-05-12 09:00:00', '2023-05-12 12:00:00', 'Abiansemal', 'Br. Tulangampiang Cemagi', 'HUT ST Tunjung Sari Yowana', 120, 1, '1673079662proposalkegiatan.jpg', '1673079662izinlokasikegiatan.jpg', '1673079662suratrekomendasi.jpg', '', '1673079662suratrekomendasi.jpg', '1673079852pernyataan-keaslianparmi.pdf', 3, NULL, NULL, '1673079909laporansiksttunjungsariyowana.pdf', '1673079852fotoktp.jpg', '1673079852orangdankatp2.png', '2023-01-07 08:21:02'),
(18, 'ST Satya Kori Kencana', 'Ni Made Danisa Natha', 'PNS', 'Br. Tegal Kori Kuta', '08126637634', 'Penyuluhan', '2023-04-04 09:00:00', '2023-04-04 12:00:00', 'Kuta', 'Br. Tegal Kori Kuta', 'HUT ST Satya Kori Kencana', 120, 1, '1673079943proposalkegiatan.jpg', '1673079944izinlokasikegiatan.jpg', '1673079944suratrekomendasi.jpg', '', '1673079944suratrekomendasi.jpg', '1673080165pernyataan-keasliandanisa.pdf', 3, NULL, NULL, '1673080206laporansikstsatyakorikencana.pdf', '1673080165fotoktp.jpg', '1673080165orangdanktp.jpg', '2023-01-07 08:25:44'),
(19, 'ST Satria Bhuana Shanti', 'Ni Made Adhisti Tavisya', 'PNS', 'Br. Tegal Kangin Kerobokan', '082556647367', 'Sosialisasi', '2023-05-02 10:00:00', '2023-05-02 13:00:00', 'Kuta Utara', 'Br. Tegal Kangin Kerobokan', 'HUT ST Satria Bhuana Shanti', 130, 1, '1673080238proposalkegiatan.jpg', '1673080238izinlokasikegiatan.jpg', '1673080238suratrekomendasi.jpg', '', '1673080238suratrekomendasi.jpg', '1673080430pernyataan-keaslianadhisti.pdf', 3, NULL, NULL, '1673080476laporansikstsatriabhuanashanti.pdf', '1673080430fotoktp.jpg', '1673080430orangdankatp2.png', '2023-01-07 08:30:38'),
(20, 'ST Wira Dharma', 'Alin Chandra Dinata', 'Guru', 'Br. Lili Gundi Tububeneng', '0812243543523', 'Lomba HUT ST Wira Dharma', '2023-05-22 09:00:00', '2023-05-22 15:00:00', 'Kuta Selatan', 'Br. Lili Gundi Tububeneng', 'HUT ST Wira Dharma', 150, 1, '1673080535proposalkegiatan.jpg', '1673080535izinlokasikegiatan.jpg', '1673080535suratrekomendasi.jpg', '', '1673080535suratrekomendasi.jpg', '1673080732pernyataan-keaslianalin.pdf', 3, NULL, NULL, '1673080769laporansikstwiradharma.pdf', '1673080732fotoktp.jpg', '1673080732orangdanktp.jpg', '2023-01-07 08:35:35'),
(21, 'ST Asta Yowana Sari', 'Ekavira Kamini Sari', 'Guru', 'Br. Umasari Penarungan', '08266365273', 'Sosialisasi', '2023-03-15 09:00:00', '2023-03-15 13:00:00', 'Mengwi', 'Br. Umasari Penarungan', 'HUT ST Asta Yowana Sari', 120, 1, '1673081033proposalkegiatan.jpg', '1673080812izinlokasikegiatan.jpg', '1673080812suratrekomendasi.jpg', '', '1673080812suratrekomendasi.jpg', '1673081227pernyataan-keaslianekavira.pdf', 3, NULL, NULL, '1673081266laporansikstastayowanasari.pdf', '1673081227fotoktp.jpg', '1673081227orangdanktp.jpg', '2023-01-07 08:40:12'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1673081328proposalkegiatan.jpg', '1673081328izinlokasikegiatan.jpg', '1673081328suratrekomendasi.jpg', '', '1673081328suratrekomendasi.jpg', NULL, 3, 'Proposal kegiatan tidak mencantumkan jumlah undangan/orang yang menghadiri acara', NULL, NULL, NULL, NULL, '2023-01-07 08:48:48'),
(23, 'ST Yowana Sabha Laksana', 'Chandra Ratmanaya', 'PNS', 'Br. Kepuh Peguyangan', '0854436555623', 'Penyuluhan', '2023-06-11 11:00:00', '2023-06-11 15:00:00', 'Petang', 'Br. Kepuh Peguyangan', 'HUT ST Yowana Sabha Laksana', 125, 1, '1673081409proposalkegiatan.jpg', '1673081409izinlokasikegiatan.jpg', '1673081409suratrekomendasi.jpg', '', '1673081409suratrekomendasi.jpg', '1673081610pernyataan-keaslianchandra.pdf', 3, NULL, NULL, '1673082349laporansikstyowanasabhalaksana.pdf', '1673081610fotoktp.jpg', '1673081610orangdanktp.jpg', '2023-01-07 08:50:09'),
(24, 'ST Dharma Sawitra', 'Yosita Sari Kusuma', 'Perawat', 'Br. Pulu Gambang Mengwi', '087762763763', 'Rapat Banjar', '2023-03-13 11:00:00', '2023-03-13 15:00:00', 'Mengwi', 'Balai Br. Pulu Gambang Mengwi', 'HUT ST Dharma Sawitra', 120, 1, '1673081717proposalkegiatan.jpg', '1673081717izinlokasikegiatan.jpg', '1673081717suratrekomendasi.jpg', '', '1673081717suratrekomendasi.jpg', '1673082255pernyataan-keaslianyosita.pdf', 3, NULL, NULL, '1673082368laporansikstdharmasawitra.pdf', '1673082255fotoktp.jpg', '1673082255orangdanktp.jpg', '2023-01-07 08:55:17'),
(25, 'ST Shanti Dharma', 'Gusti Bina Acarya', 'PNS', 'Br. Pemalukan Peguyangan', '081226354488', 'HUT ST Shanti Dharma', '2023-04-01 15:00:00', '2023-04-01 20:00:00', 'Kuta Selatan', 'Br. Pemalukan Peguyangan', 'HUT ST Shanti Dharma', 200, 1, '1673082435proposalkegiatan.jpg', '1673082435izinlokasikegiatan.jpg', '1673082435suratrekomendasi.jpg', '', '1673082435suratrekomendasi.jpg', '1673082626pernyataan-keasliangustibina.pdf', 3, NULL, NULL, '1673082711laporansikstshantidharma.pdf', '1673082627fotoktp.jpg', '1673082627orangdanktp.jpg', '2023-01-07 09:07:15'),
(26, 'ST Gangga Temaja', 'Dayita Ayu Laksmini', 'Perawat', 'Br. Den Yeh Abiansemal', '082665376424', 'HUT ST Gangga Temaja', '2023-05-12 16:00:00', '2023-05-12 20:00:00', 'Abiansemal', 'Br. Den Yeh Abiansemal', 'HUT ST Gangga Temaja', 250, 1, '1673082749proposalkegiatan.jpg', '1673082749izinlokasikegiatan.jpg', '1673082749suratrekomendasi.jpg', '', '1673082749suratrekomendasi.jpg', '1673082899pernyataan-keasliandayita.pdf', 3, NULL, NULL, '1673082939laporansikstganggatemaja.pdf', '1673082899fotoktp.jpg', '1673082899orangdanktp.jpg', '2023-01-07 09:12:29'),
(27, 'ST Tri Tunggal', 'Arik Satria Jaya', 'PNS', 'Br. Punduh Kulit Peguyangan Kaja', '08133556255634', 'Penyuluhan', '2023-04-20 08:00:00', '2023-04-20 11:00:00', 'Kuta Selatan', 'Br. Punduh Kulit Peguyangan Kaja', 'HUT ST Tri Tunggal', 120, 1, '1673082973proposalkegiatan.jpg', '1673082973izinlokasikegiatan.jpg', '1673082973suratrekomendasi.jpg', '', '1673082973suratrekomendasi.jpg', '1673083238pernyataan-keaslianarik.pdf', 3, NULL, NULL, '1673083284laporansiksttritunggal.pdf', '1673083238fotoktp.jpg', '1673083238orangdankatp2.png', '2023-01-07 09:16:13'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1673183884proposalkegiatan.jpg', '1673183884izinlokasikegiatan.jpg', '1673183888suratrekomendasi.jpg', '', '1673183888suratrekomendasi.jpg', NULL, 3, NULL, NULL, NULL, NULL, NULL, '2023-01-08 13:18:08'),
(29, 'sd', 'Baru', 'Pekerja', 'Mengwi', '082146335727', 'sd', '2023-02-01 23:21:00', '2023-02-02 23:21:00', 'Kuta', 'sd', 'sd', 12, 1, '1675262813pernyataan-keaslian.pdf', '1675262813pernyataan-keaslian.pdf', '1675262813pernyataan-keaslian.pdf', '1675262813pernyataan-keaslian.pdf', '1675262813pernyataan-keaslian.pdf', '1675265002artipenabackground.jpeg', 20, NULL, NULL, NULL, '1675265002witcher.jpg', '1675265002witcher.jpg', '2023-02-01 14:46:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_sktlk`
--

CREATE TABLE `laporan_sktlk` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kejadian` datetime NOT NULL,
  `detail_lokasi_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_hilang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pernyataan_keaslian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelapor_id` int(11) NOT NULL,
  `dokumen_persetujuan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dilaporkan_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_sktlk`
--

INSERT INTO `laporan_sktlk` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `tanggal_kejadian`, `detail_lokasi_kejadian`, `lokasi_kejadian`, `surat_hilang`, `foto_ktp`, `foto_pelapor`, `rekomendasi_instansi`, `dokumen_tambahan`, `pernyataan_keaslian`, `pelapor_id`, `dokumen_persetujuan`, `dilaporkan_pada`) VALUES
(1, 'Darin Sofia', 'Denpasar', '1996-04-04', 'Guru', 'Warga Negara Indonesia', 'Jl. Sri Dewi 09', '089888989897', '2022-05-12 00:00:00', 'Jl. Tri sakti', 'Kuta', 'Akta Tanah', '1669521940_foto ktp.jpg', '1669521940_orang dan katp2.png', '1669521940_surat rekomendasi.jpg', '', '1669521940_pernyataan-keaslian sofia.pdf', 3, '1670216388_laporan sktlk delilah.pdf', '2022-11-27 04:05:40'),
(2, 'Delilah Anabela', 'Semarang', '1995-04-04', 'Guru', 'Warga Negara Indonesia', 'Jl. Nuri no 122', '08787384778', '2022-03-12 00:00:00', 'Jl. Nakula Sadewa no 332', 'Abiansemal', 'SIM', '1670210729_foto ktp.jpg', '1670210729_orang dan katp2.png', '1670210729_surat rekomendasi.jpg', '', '1670210729_pernyataan-keaslian delilah.pdf', 3, '1670216072_laporan sktlk delilah.pdf', '2022-12-05 03:25:29'),
(3, 'Asa Hiba', 'Denpasar', '1992-03-12', 'PNS', 'Warga Negara Indonesia', 'Jl. Jatayu Denpasar II', '08783374663', '2022-07-01 00:00:00', 'Jl. Raya Kuta no 112', 'Kuta', 'SIM', '1670210871_foto ktp.jpg', '1670210871_orang dan katp2.png', '1670210871_surat rekomendasi.jpg', '', '1670210871_pernyataan-keaslian asa.pdf', 3, '1670286829_laporan sktlk asa.pdf', '2022-12-05 03:27:51'),
(4, 'Darin Sofia', 'Badung', '1997-01-31', 'Karyawan', 'Warga Negara Indonesia', 'Jl. Sari Duri no 2', '086736652572', '2022-11-11 00:00:00', 'Jl. Nuri Indah 22', 'Kuta Selatan', 'Akta Tanah', '1670211046_foto ktp.jpg', '1670211046_orang dan katp2.png', '1670211049_surat rekomendasi.jpg', '', '1670211049_pernyataan-keaslian darin.pdf', 3, '1670246368_laporan sktlk darin.pdf', '2022-12-05 03:30:54'),
(5, 'Aron Collin', 'Denpasar', '1996-03-14', 'Guru', 'Warga Negara Indonesia', 'Jl. Markandandia no 2', '08637662733', '2022-08-12 00:00:00', 'Jl. Walmiki Indah II no 22', 'Kuta Utara', 'KTP', '1670213418_foto ktp.jpg', '1670213418_orang dan ktp.jpg', '1670213418_surat rekomendasi.jpg', '', '1670213418_pernyataan-keaslian aron.pdf', 3, '1670246053_laporan sktlk aron.pdf', '2022-12-05 04:10:18'),
(6, 'Adrian Benedi', 'Denpasar', '1997-11-06', 'Karyawan', 'Warga Negara Indonesia', 'Jl. Nusa Indah III', '08133774667', '2022-11-22 00:00:00', 'Jl. Tantular I no 22', 'Mengwi', 'STNK Motor', '1670213536_foto ktp.jpg', '1670213536_orang dan ktp.jpg', '1670213536_surat rekomendasi.jpg', '', '1670213536_pernyataan-keaslian adrian.pdf', 3, '1670244655_laporan sktlk adrian.pdf', '2022-12-05 04:12:16'),
(7, 'Dilan Ferguso', 'Badung', '1998-09-25', 'Perawat', 'Warga Negara Indonesia', 'Jl. Rama Sinta 28', '081334455263', '2022-11-10 00:00:00', 'Jl. Binong Kaja no 233', 'Petang', 'STNK Mobil', '1670213667_foto ktp.jpg', '1670213667_orang dan ktp.jpg', '1670213667_surat rekomendasi.jpg', '', '1670213667_pernyataan-keaslian dilan.pdf', 3, '1670292510_laporan sktlk dilan.pdf', '2022-12-05 04:14:27'),
(8, 'Edwin Hananda', 'Denpasar', '1997-09-05', 'Perawat', 'Warga Negara Indonesia', 'Jl. Tantular II no 32', '08126476374', '2022-08-04 00:00:00', 'Jl. Sayan Baleran 209', 'Petang', 'BPKB', '1670214051_foto ktp.jpg', '1670214051_orang dan katp2.png', '1670214051_surat rekomendasi.jpg', '', '1670214051_pernyataan-keaslian edwin.pdf', 3, '1670577172_invoice # 20.pdf', '2022-12-05 04:20:51'),
(9, 'Geraldi Felix', 'Denpasar', '1996-05-20', 'PNS', 'Warga Negara Indonesia', 'Jl. Gajah Mada 90', '08736637627', '2021-03-21 00:00:00', 'Jl. Legian Utara B', 'Kuta', 'STNK', '1670214210_foto ktp.jpg', '1670214210_orang dan ktp.jpg', '1670214210_surat rekomendasi.jpg', '', '1670214210_pernyataan-keaslian gerardi.pdf', 3, '1670581934_laporan sktlk geraldi.pdf', '2022-12-05 04:23:30'),
(10, 'Gian Joshua', 'Denpasar', '1997-02-18', 'Mahasiswa', 'Warga Negara Indonesia', 'Jl. Walmiki II no 21', '08133664728', '2021-10-02 00:00:00', 'Br. Munggu Mengwi', 'Mengwi', 'Buku Tabungan Koperasi', '1670214505_foto ktp.jpg', '1670214505_orang dan katp2.png', '1670214505_surat rekomendasi.jpg', '', '1670214505_pernyataan-keaslian gian.pdf', 3, '1670581968_laporan sktlk gian.pdf', '2022-12-05 04:28:25'),
(11, 'Geraldi Felix', 'Denpasar', '1996-05-20', 'PNS', 'Warga Negara Indonesia', 'Jl. Gajah Mada 90', '08736637627', '2021-03-21 00:00:00', 'Jl. Legian Utara B', 'Kuta', 'STNK', '1670214761_foto ktp.jpg', '1670214761_orang dan ktp.jpg', '1670214761_surat rekomendasi.jpg', '', '1670214761_pernyataan-keaslian gerardi.pdf', 3, '1670582004_laporan sktlk geraldi.pdf', '2022-12-05 04:32:42'),
(12, 'Ivan Melvin', 'Denpasar', '1999-06-23', 'Mahasiswa', 'Warga Negara Indonesia', 'Br. Batu Mengwi', '082747738332', '2022-09-12 00:00:00', 'Jl. Jati Luwih Kuta Utara', 'Kuta Utara', 'Akta Tanah, SIM', '1670214795_foto ktp.jpg', '1670214795_orang dan katp2.png', '1670214795_surat rekomendasi.jpg', '', '1670214795_pernyataan-keaslian ivan.pdf', 3, '1670582033_laporan sktlk ivan.pdf', '2022-12-05 04:33:15'),
(13, 'Manuel Noah', 'Denpasar', '1992-03-31', 'Guru', 'Warga Negara Indonesia', 'Br. Sayan Ayunan', '08376637223', '2022-09-11 00:00:00', 'Jl. Kuta III', 'Kuta Selatan', 'Sertifikat Rumah I', '1670214995_foto ktp.jpg', '1670214995_orang dan katp2.png', '1670214995_surat rekomendasi.jpg', '', '1670214995_pernyataan-keaslian manuel.pdf', 3, '1670582064_laporan sktlk manuel.pdf', '2022-12-05 04:36:35'),
(14, 'Samuel Solomon', 'Denpasar', '2000-04-07', 'Mahasiswa', 'Warga Negara Indonesia', 'Jl. Gatsu Timur Denpasar', '08126472674', '2022-11-19 00:00:00', 'Jl. Raya Kerobokan Utara', 'Kuta Utara', 'KTM', '1670215165_foto ktp.jpg', '1670215165_orang dan ktp.jpg', '1670215165_surat rekomendasi.jpg', '', '1670215165_pernyataan-keaslian samuel.pdf', 3, '1670582139_laporan sktlk samuel.pdf', '2022-12-05 04:39:25'),
(15, 'Kayika Sidhiana', 'Badung', '1998-08-28', 'Guru', 'Warga Negara Indonesia', 'Jl. Bunga Melati no 22', '08163776473', '2022-02-11 00:00:00', 'Jl. Sunset Road Kuta', 'Kuta', 'STNK, SIM', '1670215385_foto ktp.jpg', '1670215385_orang dan katp2.png', '1670215385_surat rekomendasi.jpg', '', '1670215385_pernyataan-keaslian kayika.pdf', 3, NULL, '2022-12-05 04:43:05'),
(16, 'Chandra Adya', 'Badung', '1997-06-17', 'Karyawan', 'Warga Negara Indonesia', 'Jl. Rama no 33 Peguyangan', '08746648378', '2022-12-03 00:00:00', 'Jl. Cargo II', 'Kuta Selatan', 'Buku Tabungan Bank BRI', '1670215510_foto ktp.jpg', '1670215510_orang dan ktp.jpg', '1670215510_surat rekomendasi.jpg', '', '1670215510_pernyataan-keaslian chandra.pdf', 3, '1670582201_laporan sktlk chandra.pdf', '2022-12-05 04:45:10'),
(17, 'Devi Janitra Eila', 'Denpasar', '1993-09-13', 'Guru', 'Warga Negara Indonesia', 'Jl. Tirta Arum no 9', '081362746732', '2022-02-18 00:00:00', 'Jl. Taman Ayun', 'Mengwi', 'BPKB Mobil', '1670215636_foto ktp.jpg', '1670215636_orang dan ktp.jpg', '1670215636_surat rekomendasi.jpg', '', '1670215636_pernyataan-keaslian devi.pdf', 3, '1670582233_laporan sktlk devi.pdf', '2022-12-05 04:47:16'),
(18, 'Prisa Sewagati', 'Denpasar', '1992-05-20', 'PNS', 'Warga Negara Indonesia', 'Br. Celuk Sengguan', '08763447834', '2021-06-30 00:00:00', 'Jl. Seminyak Kuta', 'Kuta', 'SIM', '1670215734_foto ktp.jpg', '1670215734_orang dan ktp.jpg', '1670215734_surat rekomendasi.jpg', '', '1670215734_pernyataan-keaslian prisa.pdf', 3, '1670582264_laporan sktlk prisa.pdf', '2022-12-05 04:48:54'),
(19, 'Reiki Savian', 'Denpasar', '1996-04-12', 'Guru', 'Warga Negara Indonesia', 'Br. Tansiat Denpasar Kaja', '0876637674637', '2022-09-12 00:00:00', 'Jl. Raya Sunset Road Kuta', 'Kuta', 'SIM', '1671254366fotoktp.jpg', '1671254366orangdankatp2.png', '1671254366suratrekomendasi.jpg', '', '1671254366pernyataan-keaslianreiki.pdf', 17, NULL, '2022-12-17 05:19:26'),
(20, 'Ruri Narendra', 'Denpasar', '1996-03-12', 'Karyawan', 'Warga Negara Indonesia', 'Jl. Nakula Sadewa Denpasar', '0873387783273', '2022-12-12 00:00:00', 'Jl. Sunset Road Kuta', 'Kuta', 'SIM', '1672927167fotoktp.jpg', '1672927167orangdanktp.jpg', '1672927167suratrekomendasi.jpg', '', '1672927167pernyataan-keaslian.pdf', 3, '1672927245laporanspktruri.pdf', '2023-01-05 13:59:27'),
(21, 'Komang Trisna Pompiyana', 'Badung', '1998-07-12', 'Guru', 'Warga Negara Indonesia', 'Br. Poh Gading Penarungan', '0813356625374', '2022-12-24 00:00:00', 'Jl. Raya Penarungan Mengwi', 'Mengwi', 'SIM', '1673083882fotoktp.jpg', '1673083882orangdanktp.jpg', '1673083882suratrekomendasi.jpg', '', '1673083882pernyataan-keasliankomangtrisna.pdf', 3, '1673083937laporansktlkkomangtrisna.pdf', '2023-01-07 09:31:22'),
(22, 'Galuh candra', 'denpasar', '2022-02-09', 'mahasiswa', 'Warga Negara Indonesia', 'Br pande mengwi', '0938846783', '2022-12-12 00:00:00', 'Jl. Asoka', 'Kuta Selatan', 'sim', '1673249667fotoktp.jpg', '1673249667orangdankatp2.png', '1673249667suratrekomendasi.jpg', '', '1673249667pernyataan-keasliangaluh.pdf', 3, '1673251736laporansktlkgaluh.pdf', '2023-01-09 07:34:27'),
(23, 'Galuh Candra', 'denpasar', '1998-12-12', 'Mahasswa', 'Warga Negara Indonesia', 'Br. Pande', '08377468738', '2022-12-12 00:00:00', 'Jl. Nuri', 'Abiansemal', 'SIM', '1673251713fotoktp.jpg', '1673251713orangdankatp2.png', '1673251713suratrekomendasi.jpg', '', '1673251713pernyataan-keasliangaluh.pdf', 3, NULL, '2023-01-09 08:08:33'),
(24, 'sdsd', 'sdsd', '2222-11-11', 'sdasdsd', 'Warga Negara Indonesia', 'sdsd', '1212', '2222-02-11 00:00:00', 'sdsd', 'Denpasar Timur', 'sdsd', '1673364696suratpernyataankeaslianilmiah.pdf', '1673364696suratpernyataankeaslianilmiah.pdf', '1673364696suratpernyataankeaslianilmiah.pdf', '', '1673364696suratpernyataankeaslianilmiah.pdf', 3, NULL, '2023-01-10 15:31:36'),
(25, 'Baru', 'Denpasar', '2000-02-09', 'Pekerja', 'Warga Negara Indonesia', 'Mengwi', '082146335727', '2023-02-01 00:00:00', 'Detail Lokasi', 'Lokasi', 'Surat', '1675262041pernyataan-keaslian.pdf', '1675262041pernyataan-keaslian.pdf', '1675262041pernyataan-keaslian.pdf', '', '1675262041pernyataan-keaslian.pdf', 20, NULL, '2023-02-01 14:34:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_sp2hp`
--

CREATE TABLE `laporan_sp2hp` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `lokasi_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_lokasi_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terlapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saksi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_pemberitahuan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perkembangan` enum('Sedang diproses','Selesai') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nomor_polisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelapor_id` int(11) NOT NULL,
  `dilaporkan_pada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_sp2hp`
--

INSERT INTO `laporan_sp2hp` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `judul_laporan`, `isi_laporan`, `tanggal_kejadian`, `lokasi_kejadian`, `detail_lokasi_kejadian`, `kategori`, `terlapor`, `bukti`, `saksi`, `foto_ktp`, `foto_pelapor`, `lampiran`, `file_pemberitahuan`, `keterangan_pemberitahuan`, `perkembangan`, `status`, `nomor_polisi`, `pelapor_id`, `dilaporkan_pada`) VALUES
(2, 'Rana Aqila', 'Denpasar', '1997-04-02', 'Guru', 'Warga Negara Indonesia', 'Br. Alangkajeng Mengwi', '08327678748', 'Pencurian Motor', 'dad kjadf kshf afl lafj eowihd aoihakf ikdfhak kjxcbakgud fakuhfsjdf afhaig asidfjhskdfjha jhdfajhdf iajhksdjfjbcjbc sdhauhiw isuhfis fsfhs shdfiajhf hfa ajhjhoijhfks wiuh bjsbf kajhbdh', '2022-11-20', 'Kuta', 'Jl. Raya Sunset Road Kuta', 'Pencurian', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1670812842fotoktpjpg', '1670812842orangdankatp2png', '', '1670813027validasi-sp2hppdf', '{\"keterangan\":\"12\\/12\\/2022\",\"uploaded_at\":\"2022-12-12 10:43:56\"}', 'Selesai', 1, 'LP/001/K/XII/2022/Polres Badung', 16, '2022-12-12 02:44:42'),
(3, 'I Putu Dika Widhiatama', 'Badung', '1997-04-18', 'Guru', 'Warga Negara Indonesia', 'Br. Serangan Mengwi', '087766763763', 'Pencurian Sepeda Motor', 'dajh jhadsj jhkadh kjhad kajhsd 23 kjhadhj akjdh jahfs 2022 jhdakjhd kjahfj jhsj fkdjhshf ajhjshf dkjhsdkf ksjhfks dksdfhkjsdhf', '2022-12-10', 'Mengwi', 'Jl. Walmiki Mengwi', 'Pencurian', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1672927870fotoktp.jpg', '1672927870orangdanktp.jpg', '', '1672927951validasi-sp2hpdika.pdf|1672928003pernyataan-keasliandika.pdf', '{\"keterangan\":\"Validasi Laporan Diterima Polres Badung\",\"uploaded_at\":\"2023-01-05 22:12:39\"}|{\"keterangan\":\"Perkembangan terakhir\",\"uploaded_at\":\"2023-01-05 22:13:23\"}', 'Selesai', 1, 'LP/001/K/I/2023/Polres Badung', 3, '2023-01-05 14:14:20'),
(4, 'I Wayan Agus Dananjaya', 'Denpasar', '1996-07-12', 'PNS', 'Warga Negara Indonesia', 'Br. Dharma Shanti Peguyangan', '08276637676323', 'Pencurian Anjing', 'sdad hga fjkhksdhf khdf kjhsd fkjh e iu ceaiuhskjd fjhakjd flcnx dkfhiehhsjdfa uisdf jhefe oiauhsf', '2022-11-02', 'Abiansemal', 'Br. Dharma Shanti Peguyangan', 'Pencurian', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1673083480fotoktp.jpg', '1673083480orangdanktp.jpg', '', '1673083551validasi-sp2hpwayanagus.pdf|1673083611validasi-sp2hpwayanagus.pdf', '{\"keterangan\":\"Validasi Pelaporan\",\"uploaded_at\":\"2023-01-07 17:26:01\"}|{\"keterangan\":\"Proses selanjutnya silahkan datang ke Polres Badung pada tanggal 12 Januari 2023 dan membawa surat validasi pelaporan\",\"uploaded_at\":\"2023-01-07 17:26:51\"}', 'Selesai', 1, 'LP/001/K/I/2023/Polres Badung', 3, '2023-01-07 09:27:05'),
(5, 'Komang Gerry Ardyastika', 'Denpasar', '1996-01-13', 'PNS', 'Warga Negara Indonesia', 'Br. Pregae Mengwi', '0812264764773', 'Pencurian Motor', 'dasf adahk kajhfs dfk khdjfh kahsjd fihekjhd akhsdjf kjahlkjhsd fkjhakjdh fkjhsdkjfh kjhsjkdhf kjhdf a;oiwu wie hisdh jsndc lajhdk', '2022-12-20', 'Kuta', 'Jl. Raya Seminyak Kuta', 'Pencurian', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1673084169fotoktp.jpg', '1673084169orangdanktp.jpg', '', '1673084239validasi-sp2hpgerry.pdf|1673084271validasi-sp2hpgerry.pdf|1673084329pernyataan-keasliandayita.pdf', '{\"keterangan\":\"Validasi Pelaporan SP2HP\",\"uploaded_at\":\"2023-01-07 17:37:27\"}|{\"keterangan\":\"Perkembangan 1\",\"uploaded_at\":\"2023-01-07 17:37:51\"}|{\"keterangan\":\"Perkembangan 2. Silahkan datang ke Polres Badung pada tanggal 10 Januari 2023 serta membawa surat persetujuan validasi pelaporan SP2HP\",\"uploaded_at\":\"2023-01-07 17:38:49\"}', 'Selesai', 1, 'LP/001/K/I/2023/Polres Badung', 3, '2023-01-07 09:39:07'),
(6, 'Ni Luh Ari Partiasih', 'Denpasar', '1998-11-17', 'Guru', 'Warga Negara Indonesia', 'Br Gunung Sari Mengwitani', '08277387283713', 'Kekerasa Dalam Rumah Tangga', 'sdfas afga fgsfg sfgsgsg agasff verfxv afgaergfvg afvrfsv rterfa fgvadfgre arga cv ertafdsfgrg ergfadfgdfg ad gdrevadfvasg', '2023-11-25', 'Kuta Selatan', 'Jl. Sadewa Kuta Selatan', 'KDRT', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1673084581fotoktp.jpg', '1673084581orangdanktp.jpg', '', '1673084647validasi-sp2hparipartiasih.pdf|1673084684laporansktlkkomangtrisna.pdf|1673084710pernyataan-keasliandayita.pdf|1673084756validasi-sp2hpgerry.pdf', '{\"keterangan\":\"js\",\"uploaded_at\":\"2023-01-07 17:44:16\"}|{\"keterangan\":\"Perkembangan 1\",\"uploaded_at\":\"2023-01-07 17:44:44\"}|{\"keterangan\":\"Perkembangan 2\",\"uploaded_at\":\"2023-01-07 17:45:10\"}|{\"keterangan\":\"Silahkan datang ke Polres Badung pada tanggal 20 Februari 2023 untuk proses tindak lanjut serta membawa surat validasi pelaporan SP2HP\",\"uploaded_at\":\"2023-01-07 17:45:56\"}', 'Selesai', 1, 'LP/001/K/I/2023/Polres Badung', 3, '2023-01-07 09:46:20'),
(7, 'Wulan Sri Dewi', 'Badung', '1994-08-18', 'Perawat', 'Warga Negara Indonesia', 'Br. Serangan Mengwi', '0825545563763', 'Pemerkosaan', 'sjdfhkn hhsngd ksuiiehr jjhhsndjc jahsnbdj kjhad ksheu dakjh ackjhsie jksdc ijheu akjhsndi cisdbfi eyugbjai ksbndcue ijhsidf ijhadeui ijhsdkfm ieuhdak jhsdifh akisjhdfiw adihdajkh jehyda', '2022-12-30', 'Kuta Utara', 'Jl. Raya Kerobokan no 23 Dangin Puri', 'Pemerkosaan', 'Gerry Ardyastika', '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[\"Luh Ari Partiasih\",\"Astra Suwarriana\"],\"umur\":[\"22\",null],\"pekerjaan\":[null,\"Dokter\"],\"alamat\":[\"Denpasar\",null]}', '1673084932fotoktp.jpg', '1673084932orangdanktp.jpg', '', '1673085064validasi-sp2hpwulan.pdf|1673085146validasi-sp2hpwulan.pdf', '{\"keterangan\":\"Silahkan menunggu informasi lebih lanjut melalui email\",\"uploaded_at\":\"2023-01-07 17:51:17\"}|{\"keterangan\":\"Silahkan datang ke Polres Badung pada tanggal 10 Januari 2023 serta membawa surat validasi asli dan pas foto 3x4 3 lembar\",\"uploaded_at\":\"2023-01-07 17:52:26\"}', 'Selesai', 1, 'LP/002/K/I/2023/Polres Badung', 3, '2023-01-07 11:45:16'),
(11, 'we', 'we', '0011-11-11', 'sd', 'Warga Negara Asing', '1212', '1212', '1212', '1212', '0012-12-12', 'Kuta', '12', 'Penipuan/Perbuatan Curang', '1212', '{\"namaBukti\":[\"12\"],\"gambarBukti\":[]}', '{\"nama\":[\"12\"],\"umur\":[\"12\"],\"pekerjaan\":[\"12\"],\"alamat\":[\"12\"]}', '1673363087suratpernyataankeaslianilmiah.pdf', '1673363087suratpernyataankeaslianilmiah.pdf', '1673363087suratpernyataankeaslianilmiah.pdf', '1673363123validasi-sp2hp.pdf', '{\"keterangan\":\"qwqwqwqwqwq\",\"uploaded_at\":\"2023-01-10 23:05:31\"}', 'Sedang diproses', 1, 'LP/001/K/I/2023/Polres Badung', 3, '2023-01-10 15:05:31'),
(12, 'Baru', 'Denpasar', '2000-02-09', 'Pekerja', 'Warga Negara Indonesia', 'Mengwi', '082146335727', 'Judul', 'Isi laporan', '2023-01-30', 'Abiansemal', 'Detail lokasi', 'Pencurian', 'A', '{\"namaBukti\":[\"Barang Bukti\"],\"gambarBukti\":[]}', '{\"nama\":[\"B\"],\"umur\":[\"22\"],\"pekerjaan\":[\"Pekerja\"],\"alamat\":[\"Alamat\"]}', '1675265276witcher.jpg', '1675265276witcher.jpg', '1675265276view.png', NULL, NULL, NULL, NULL, NULL, 20, '2023-02-01 15:27:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_07_14_140958_create_laporan_sktlk_table', 1),
(3, '2022_07_15_135449_create_notifikasi_table', 2),
(7, '2022_07_14_141016_create_laporan_sik_table', 3),
(8, '2022_09_17_112352_create_laporan_sp2hp_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telah_dibaca` tinyint(1) NOT NULL,
  `dikirim_kepada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `pelapor_id` int(11) NOT NULL,
  `dikirim_pada` timestamp NOT NULL DEFAULT '2022-07-15 07:10:55'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `judul`, `isi`, `tipe`, `telah_dibaca`, `dikirim_kepada`, `laporan_id`, `pelapor_id`, `dikirim_pada`) VALUES
(1, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 1, 3, '2022-11-27 05:05:40'),
(2, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 2, 3, '2022-12-05 04:25:29'),
(3, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 3, 3, '2022-12-05 04:27:51'),
(4, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 4, 3, '2022-12-05 04:30:54'),
(5, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 5, 3, '2022-12-05 05:10:18'),
(6, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 6, 3, '2022-12-05 05:12:16'),
(7, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 7, 3, '2022-12-05 05:14:27'),
(8, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 8, 3, '2022-12-05 05:20:51'),
(9, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 9, 3, '2022-12-05 05:23:30'),
(10, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 10, 3, '2022-12-05 05:28:25'),
(11, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 11, 3, '2022-12-05 05:32:42'),
(12, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 12, 3, '2022-12-05 05:33:16'),
(13, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 13, 3, '2022-12-05 05:36:35'),
(14, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 14, 3, '2022-12-05 05:39:25'),
(15, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 15, 3, '2022-12-05 05:43:05'),
(16, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 16, 3, '2022-12-05 05:45:10'),
(17, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 17, 3, '2022-12-05 05:47:16'),
(18, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 18, 3, '2022-12-05 05:48:54'),
(19, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 2, 3, '2022-12-05 05:52:59'),
(20, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 2, 3, '2022-12-05 05:54:32'),
(21, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 1, 3, '2022-12-05 05:58:17'),
(22, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 1, 3, '2022-12-05 05:59:48'),
(23, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 6, 3, '2022-12-05 13:50:55'),
(24, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 5, 3, '2022-12-05 14:14:13'),
(25, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 4, 3, '2022-12-05 14:19:28'),
(26, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 3, 3, '2022-12-06 01:20:28'),
(27, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 3, '2022-12-06 01:23:54'),
(28, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 3, '2022-12-06 01:24:57'),
(29, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 3, '2022-12-06 01:27:10'),
(30, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 3, 3, '2022-12-06 01:28:57'),
(31, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 3, 3, '2022-12-06 01:33:49'),
(32, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 3, '2022-12-06 03:08:31'),
(33, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 08:52:00'),
(34, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 08:59:59'),
(35, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:01:31'),
(36, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:06:59'),
(37, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:27:33'),
(38, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:39:32'),
(39, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:42:13'),
(40, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:53:28'),
(41, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:57:11'),
(42, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 09:59:50'),
(43, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:01:19'),
(44, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:02:52'),
(45, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:03:23'),
(46, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:06:27'),
(47, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:09:17'),
(48, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:11:21'),
(49, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 3, '2022-12-09 10:12:52'),
(50, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 9, 3, '2022-12-09 11:32:14'),
(51, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 10, 3, '2022-12-09 11:32:49'),
(52, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 11, 3, '2022-12-09 11:33:25'),
(53, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 12, 3, '2022-12-09 11:33:53'),
(54, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 13, 3, '2022-12-09 11:34:24'),
(55, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 14, 3, '2022-12-09 11:35:39'),
(56, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 16, 3, '2022-12-09 11:36:46'),
(57, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 17, 3, '2022-12-09 11:37:14'),
(58, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 18, 3, '2022-12-09 11:37:44'),
(59, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 1, 3, '2022-12-10 13:32:26'),
(60, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 1, 3, '2022-12-10 13:33:08'),
(61, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 1, 3, '2022-12-10 13:35:27'),
(62, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 1, 3, '2022-12-10 13:36:11'),
(63, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 2, 3, '2022-12-10 13:42:53'),
(64, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 2, 3, '2022-12-10 13:43:06'),
(65, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 2, 3, '2022-12-10 13:45:20'),
(66, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 2, 3, '2022-12-10 13:45:58'),
(67, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 3, 3, '2022-12-10 13:47:05'),
(68, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 3, 3, '2022-12-10 13:47:23'),
(69, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 3, 3, '2022-12-10 13:50:41'),
(70, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 3, 3, '2022-12-10 13:51:09'),
(76, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 2, 16, '2022-12-12 03:40:42'),
(77, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 2, 16, '2022-12-12 03:41:04'),
(78, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 2, 16, '2022-12-12 03:43:56'),
(79, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 2, 16, '2022-12-12 03:44:42'),
(82, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 5, 16, '2022-12-12 03:58:32'),
(83, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 5, 16, '2022-12-12 03:59:26'),
(84, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 5, 16, '2022-12-12 04:15:17'),
(85, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 5, 16, '2022-12-12 04:16:21'),
(86, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 19, 17, '2022-12-17 06:19:26'),
(87, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 20, 3, '2023-01-05 14:59:27'),
(88, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 20, 3, '2023-01-05 15:00:45'),
(89, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 6, 3, '2023-01-05 15:04:02'),
(90, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 6, 3, '2023-01-05 15:04:19'),
(91, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 6, 3, '2023-01-05 15:07:13'),
(92, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 6, 3, '2023-01-05 15:08:11'),
(93, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 3, 3, '2023-01-05 15:11:10'),
(94, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 3, 3, '2023-01-05 15:11:32'),
(95, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 3, 3, '2023-01-05 15:12:39'),
(96, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 3, 3, '2023-01-05 15:13:23'),
(97, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 3, 3, '2023-01-05 15:14:20'),
(98, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 7, 3, '2023-01-07 03:06:08'),
(99, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 7, 3, '2023-01-07 03:06:25'),
(100, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 7, 3, '2023-01-07 03:11:22'),
(101, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 7, 3, '2023-01-07 03:12:16'),
(102, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 8, 3, '2023-01-07 03:13:18'),
(103, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 8, 3, '2023-01-07 03:13:30'),
(104, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 8, 3, '2023-01-07 03:18:48'),
(105, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 8, 3, '2023-01-07 03:19:28'),
(106, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 9, 3, '2023-01-07 03:24:47'),
(107, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 9, 3, '2023-01-07 03:25:09'),
(108, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 9, 3, '2023-01-07 03:29:11'),
(109, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 9, 3, '2023-01-07 03:29:56'),
(110, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 10, 3, '2023-01-07 03:30:55'),
(111, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 10, 3, '2023-01-07 03:31:11'),
(112, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 10, 3, '2023-01-07 03:37:40'),
(113, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 10, 3, '2023-01-07 03:38:50'),
(114, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 11, 3, '2023-01-07 03:39:43'),
(115, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 11, 3, '2023-01-07 03:39:55'),
(116, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 11, 3, '2023-01-07 03:45:33'),
(117, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 11, 3, '2023-01-07 03:46:21'),
(118, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 12, 3, '2023-01-07 03:47:36'),
(119, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 12, 3, '2023-01-07 03:47:49'),
(120, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 12, 3, '2023-01-07 03:51:18'),
(121, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 12, 3, '2023-01-07 03:53:39'),
(122, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 13, 3, '2023-01-07 03:54:54'),
(123, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 13, 3, '2023-01-07 03:55:08'),
(124, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 13, 3, '2023-01-07 03:59:07'),
(125, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 13, 3, '2023-01-07 04:00:04'),
(126, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 14, 3, '2023-01-07 04:05:41'),
(127, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 14, 3, '2023-01-07 04:05:50'),
(128, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 14, 3, '2023-01-07 04:08:54'),
(129, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 14, 3, '2023-01-07 04:09:39'),
(130, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 15, 3, '2023-01-07 04:10:34'),
(131, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 15, 3, '2023-01-07 04:10:48'),
(132, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 15, 3, '2023-01-07 04:14:10'),
(133, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 15, 3, '2023-01-07 05:45:16'),
(134, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 16, 3, '2023-01-07 09:16:32'),
(135, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 16, 3, '2023-01-07 09:16:47'),
(136, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 16, 3, '2023-01-07 09:19:43'),
(137, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 16, 3, '2023-01-07 09:20:22'),
(138, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 17, 3, '2023-01-07 09:21:02'),
(139, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 17, 3, '2023-01-07 09:21:12'),
(140, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 17, 3, '2023-01-07 09:24:12'),
(141, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 17, 3, '2023-01-07 09:25:09'),
(142, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 18, 3, '2023-01-07 09:25:44'),
(143, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 18, 3, '2023-01-07 09:25:57'),
(144, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 18, 3, '2023-01-07 09:29:25'),
(145, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 18, 3, '2023-01-07 09:30:06'),
(146, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 19, 3, '2023-01-07 09:30:38'),
(147, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 19, 3, '2023-01-07 09:30:57'),
(148, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 19, 3, '2023-01-07 09:33:50'),
(149, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 19, 3, '2023-01-07 09:34:36'),
(150, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 20, 3, '2023-01-07 09:35:35'),
(151, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 20, 3, '2023-01-07 09:36:04'),
(152, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 20, 3, '2023-01-07 09:38:52'),
(153, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 20, 3, '2023-01-07 09:39:29'),
(154, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 21, 3, '2023-01-07 09:40:12'),
(155, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 21, 3, '2023-01-07 09:40:52'),
(156, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 21, 3, '2023-01-07 09:43:53'),
(157, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 21, 3, '2023-01-07 09:44:18'),
(158, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 21, 3, '2023-01-07 09:47:07'),
(159, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 21, 3, '2023-01-07 09:47:46'),
(160, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 22, 3, '2023-01-07 09:48:48'),
(161, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 22, 3, '2023-01-07 09:49:24'),
(162, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 23, 3, '2023-01-07 09:50:09'),
(163, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 23, 3, '2023-01-07 09:50:24'),
(164, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 23, 3, '2023-01-07 09:53:30'),
(165, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 24, 3, '2023-01-07 09:55:17'),
(166, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 24, 3, '2023-01-07 09:55:37'),
(167, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 24, 3, '2023-01-07 10:04:15'),
(168, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 23, 3, '2023-01-07 10:05:49'),
(169, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 24, 3, '2023-01-07 10:06:08'),
(170, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 25, 3, '2023-01-07 10:07:15'),
(171, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 25, 3, '2023-01-07 10:07:38'),
(172, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 25, 3, '2023-01-07 10:10:27'),
(173, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 25, 3, '2023-01-07 10:11:51'),
(174, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 26, 3, '2023-01-07 10:12:29'),
(175, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 26, 3, '2023-01-07 10:12:46'),
(176, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 26, 3, '2023-01-07 10:14:59'),
(177, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 26, 3, '2023-01-07 10:15:39'),
(178, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 27, 3, '2023-01-07 10:16:13'),
(179, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 27, 3, '2023-01-07 10:17:27'),
(180, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 27, 3, '2023-01-07 10:20:38'),
(181, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 27, 3, '2023-01-07 10:21:24'),
(182, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 4, 3, '2023-01-07 10:24:40'),
(183, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 4, 3, '2023-01-07 10:24:55'),
(184, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 4, 3, '2023-01-07 10:26:01'),
(185, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 4, 3, '2023-01-07 10:26:51'),
(186, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 4, 3, '2023-01-07 10:27:05'),
(187, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 21, 3, '2023-01-07 10:31:22'),
(188, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 21, 3, '2023-01-07 10:32:17'),
(189, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 5, 3, '2023-01-07 10:36:09'),
(190, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 5, 3, '2023-01-07 10:36:18'),
(191, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 5, 3, '2023-01-07 10:37:27'),
(192, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 5, 3, '2023-01-07 10:37:51'),
(193, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 5, 3, '2023-01-07 10:38:49'),
(194, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 5, 3, '2023-01-07 10:39:07'),
(195, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 6, 3, '2023-01-07 10:43:01'),
(196, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:43:18'),
(197, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:44:16'),
(198, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:44:44'),
(199, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:45:10'),
(200, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:45:56'),
(201, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 6, 3, '2023-01-07 10:46:20'),
(202, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 7, 3, '2023-01-07 10:48:52'),
(203, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 7, 3, '2023-01-07 10:49:02'),
(204, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 7, 3, '2023-01-07 10:50:13'),
(205, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 7, 3, '2023-01-07 10:51:17'),
(206, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 7, 3, '2023-01-07 10:52:26'),
(207, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 7, 3, '2023-01-07 10:52:43'),
(208, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 28, 3, '2023-01-08 14:18:08'),
(209, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 28, 3, '2023-01-08 14:18:54'),
(210, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 28, 3, '2023-01-08 14:20:07'),
(211, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 22, 3, '2023-01-09 08:34:27'),
(212, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 0, 'admin', 23, 3, '2023-01-09 09:08:33'),
(213, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 22, 3, '2023-01-09 09:08:56'),
(214, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 8, 19, '2023-01-09 09:36:32'),
(215, 'Pelaporan SP2HP Tidak Valid', 'Silahkan periksa kembali kelengkapan pelaporan tindak kriminal.', 'sp2hp', 1, 'pelapor', 8, 19, '2023-01-09 09:39:55'),
(216, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 8, 19, '2023-01-09 09:41:25'),
(217, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 8, 19, '2023-01-09 09:42:09'),
(218, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 0, 'pelapor', 8, 19, '2023-01-09 09:55:44'),
(219, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 0, 'pelapor', 8, 19, '2023-01-09 09:57:36'),
(220, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 9, 3, '2023-01-10 14:33:58'),
(221, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 9, 3, '2023-01-10 14:56:40'),
(222, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 9, 3, '2023-01-10 15:01:10'),
(223, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 10, 3, '2023-01-10 15:02:21'),
(224, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 10, 3, '2023-01-10 15:02:42'),
(225, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 1, 'pelapor', 10, 3, '2023-01-10 15:03:26'),
(226, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 11, 3, '2023-01-10 15:04:47'),
(227, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 11, 3, '2023-01-10 15:05:05'),
(228, 'Perkembangan SP2HP', 'Silahkan melihat hasil perkembangan penyidikan pada halaman berikut.', 'sp2hp', 0, 'pelapor', 11, 3, '2023-01-10 15:05:31'),
(229, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 0, 'admin', 24, 3, '2023-01-10 15:31:36'),
(230, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 0, 'admin', 25, 20, '2023-02-01 14:34:01'),
(231, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 29, 20, '2023-02-01 14:46:53'),
(232, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 29, 20, '2023-02-01 14:48:33'),
(233, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 29, 20, '2023-02-01 15:23:22'),
(234, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 12, 20, '2023-02-01 15:27:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_pengguna` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `jenis_kelamin`, `password`, `jenis_pengguna`, `alamat`, `status`) VALUES
(3, 'galuh', 'Galuh', 'galuhcandrawardani@gmail.com', '9000000', 'Denpasar', '2000-02-01', 'Pegawai', 'Warga Negara Indonesia', 'Perempuan', '$2y$10$BqwDjmmf6nuOMnOsw/yG1eYtl/09FDjOfBPkIpGLBQkyecKv4v1M.', 'Pelapor', 'Mengwi', 1),
(8, 'apolres', 'Admin SPKT', 'apolresbadung@gmail.com', '098878787879', 'Denpasar', '2000-02-01', 'Pegawai', 'Warga Negara Indonesia', 'Laki-laki', '$2y$10$pYfB/m6Cj6/91Fnz0L2vO.vZjXnYNou9Fyx35pU8GNgXWwWblpRhK', 'AdminSPKT', 'Badung, Bali, Indonesia', 1),
(14, 'areskrim', 'Reskrim', 'areskrimbadung@gmail.com', '9000000', 'Denpasar', '2000-02-01', 'Pegawai', 'Warga Negara Indonesia', 'Perempuan', '$2y$10$DiKR.ylKPMP0.ivHck2WIu1M/PtyL7SsEJxe6Bjqe0CBLBJa5jFha', 'AdminReskrim', 'Mengwi', 1),
(15, 'kanit', 'Kepala Unit SPKT', 'kanitspktbadung@gmail.com', '9000000', 'Denpasar', '2000-02-01', 'Pegawai', 'Warga Negara Indonesia', 'Perempuan', '$2y$10$0EzMOuUOj4Zyx.0aEMsTaePDUAnOYRZ0UYN0PX8MMDMjPwWErQ7M.', 'KanitSPKT', 'Mengwi', 1),
(20, 'baru', 'Baru', 'ariesetiadi.sm@gmail.com', '082146335727', 'Denpasar', '2000-02-09', 'Pekerja', 'Warga Negara Indonesia', 'Laki-laki', '$2y$10$pOdR1P22bHIbiIw6suPJMObcIjjlB384wlFA7M6Jzlkgfr2BXnh4q', 'Pelapor', 'Mengwi', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_sik`
--
ALTER TABLE `laporan_sik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indeks untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indeks untuk tabel `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`),
  ADD KEY `laporan_id` (`laporan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan_sik`
--
ALTER TABLE `laporan_sik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan_sik`
--
ALTER TABLE `laporan_sik`
  ADD CONSTRAINT `laporan_sik_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  ADD CONSTRAINT `laporan_sktlk_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  ADD CONSTRAINT `laporan_sp2hp_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
