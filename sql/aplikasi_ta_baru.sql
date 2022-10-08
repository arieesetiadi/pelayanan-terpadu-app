-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `laporan_sik`
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
-- Dumping data for table `laporan_sik`
--

INSERT INTO `laporan_sik` (`id`, `nama_organisasi`, `nama_penanggung_jawab`, `pekerjaan`, `alamat`, `telepon`, `bentuk_kegiatan`, `waktu_mulai`, `waktu_selesai`, `lokasi_kegiatan`, `dalam_rangka`, `jumlah_undangan`, `status`, `proposal_kegiatan`, `izin_tempat`, `izin_instansi`, `fotokopi_paspor`, `rekomendasi_polsek`, `pernyataan_keaslian`, `pelapor_id`, `keterangan`, `status_pernyataan`, `dokumen_persetujuan`, `foto_ktp`, `foto_pelapor`, `dilaporkan_pada`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '1663822167_proposal kegiatan.jpg', '1663822167_izin lokasi kegiatan.jpg', '1663822167_surat rekomendasi.jpg', '1663822167_foto ktp.jpg', '1663822167_surat rekomendasi.jpg', NULL, 8, NULL, NULL, NULL, NULL, NULL, '2022-09-22 04:49:27'),
(3, 'ass', 'ass', 'ass', 'ass', '2121', 'add', '2020-12-12 10:00:00', '2020-12-12 12:00:00', 'asa', 'ads', 1212, 1, '1664286064_proposal kegiatan.jpg', '1664286064_izin lokasi kegiatan.jpg', '1664286064_izin lokasi kegiatan.jpg', '1664286064_foto ktp.jpg', '1664286064_surat rekomendasi.jpg', '1664286251_pernyataan-keaslian.pdf', 8, NULL, NULL, '1664286319_laporan sktlk.pdf', '1664286251_foto ktp.jpg', '1664286251_orang dan katp2.png', '2022-09-27 13:41:04'),
(4, 'wewe', 'hgh', 'jgk', 'jhgj', '878', 'ghj', '0122-12-12 12:00:00', '1999-12-12 12:00:00', 'mnm', 'jbmn', 656, 1, '1664288769_proposal kegiatan.jpg', '1664288769_izin lokasi kegiatan.jpg', '1664288769_surat rekomendasi.jpg', '1664288769_maudy.jpeg', '1664288769_surat rekomendasi.jpg', '1664289357_pernyataan-keaslian.pdf', 8, NULL, 'draft', NULL, '1664289357_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664289357_whatsapp image 2022-09-27 at 09.46.45.jpeg', '2022-09-27 04:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sktlk`
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
  `tanggal_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Dumping data for table `laporan_sktlk`
--

INSERT INTO `laporan_sktlk` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `tanggal_kejadian`, `lokasi_kejadian`, `surat_hilang`, `foto_ktp`, `foto_pelapor`, `rekomendasi_instansi`, `dokumen_tambahan`, `pernyataan_keaslian`, `pelapor_id`, `dokumen_persetujuan`, `dilaporkan_pada`) VALUES
(1, 'qwerty', 'nb', '2020-02-12', 'aps', 'Warga Negara Indonesia', 'kg', '878', '2011-12-12', 'jhjh', 'fyjh', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '', '1664287627_pernyataan-keaslian.pdf', 8, NULL, '2022-09-27 03:43:29'),
(2, 'Arie', 'Denpasar', '2000-02-12', 'Mahasiswa', 'Warga Negara Indonesia', 'Mengwi', '082146335727', '2011-12-12', 'Depan Indomaret', 'STNK, Surat Tanah', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '', '1664287627_pernyataan-keaslian.pdf', 8, NULL, '2022-10-08 03:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sp2hp`
--

CREATE TABLE `laporan_sp2hp` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Dumping data for table `laporan_sp2hp`
--

INSERT INTO `laporan_sp2hp` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `judul_laporan`, `isi_laporan`, `tanggal_kejadian`, `lokasi_kejadian`, `detail_lokasi_kejadian`, `kategori`, `terlapor`, `bukti`, `saksi`, `foto_ktp`, `foto_pelapor`, `lampiran`, `file_pemberitahuan`, `keterangan_pemberitahuan`, `perkembangan`, `status`, `nomor_polisi`, `pelapor_id`, `dilaporkan_pada`) VALUES
(2, 'asa', 'werre', '1999-12-02', 'dfgg', 'Warga Negara Indonesia', 'jhj', '878', 'kjjjk', 'gcvbn', '1999-12-04', 'Mengwi', 'asdfsde', 'KDRT', 'Dimas Revaldi, Farhan Dimas, Alif Rajab 2', '{\"namaBukti\":[\"sfsf 222222\",\"sffafd 222\"],\"gambarBukti\":[\"1664894423_foto ktp.jpg\",\"1664894423_foto ktp.jpg\"]}', '{\"nama\":[\"afsdf 2\",\"sfafa 22\"],\"umur\":[\"122\",\"2222\"],\"pekerjaan\":[\"weqe 2\",\"ewrw 2 2\"],\"alamat\":[\"weqe 2\",\"ewrw 2 2\"]}', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', NULL, NULL, NULL, 1, 'LP/005/K/IX/2022/Polres Badung', 8, '2022-10-08 14:48:59'),
(3, 'asas 23', 'sdad 23', '0002-02-02', 'daa 23', 'Warga Negara Asing', 'fdafs 2', '121 2', 'ada 2', 'afdsdf 2', '0022-02-02', 'Abiansemal', 'zczvsd 2', 'Penganiayaan', 'Dimas Revaldi, Farhan Dimas, Alif Rajab 2', '{\"namaBukti\":[\"sfsf 222222\",\"sffafd 222\"],\"gambarBukti\":[\"1664894423_foto ktp.jpg\",\"1664894423_foto ktp.jpg\"]}', '{\"nama\":[\"afsdf 2\",\"sfafa 22\"],\"umur\":[\"122\",\"2222\"],\"pekerjaan\":[\"weqe 2\",\"ewrw 2 2\"],\"alamat\":[\"weqe 2\",\"ewrw 2 2\"]}', '1664894423_foto ktp.jpg', '1664894423_orang dan katp2.png', '1664894423_proposal kegiatan.jpg', NULL, NULL, NULL, 0, NULL, 8, '2022-10-04 14:43:36'),
(4, 'Kamio Eichii', 'Kyoto', '1999-12-12', 'PNS', 'Warga Negara Indonesia', 'Kyoto, Jepang', '989889899', 'Pencurian Sepeda Ontel', 'Menurut Imran, pelaku biasa mengincar rumah kosong dan menggasak barang yang ada milik korban. “Salah satu pelaku ini residivis kasus serupa. Pada tahun 2020 yang bersangkutan sudah melakukan masa penahannya di LP, kali ini tertangkap lagi. Pada aksinya kemarin, pelaku menggasak dua sepeda senilai Rp260 juta. “Harga sepeda ini satu unitnya Rp130 juta, kalau dua berarti Rp260 juta. Selanjutnya sepeda hasil curian dijual ke pembeli dengan sistem COD. Atas perbuatannya kedua pelaku akan dijerat Pasal 363 KUHP tentang Pencurian dengan ancaman hukuman di atas lima tahun penjara.', '2020-12-12', 'Abiansemal', ' Jalan Merdeka No 21 A III', 'Pencurian', 'Mamoko Ikenega', '{\"namaBukti\":[\"Buku Kerja\",\"Kertas merah\"],\"gambarBukti\":[\"1664977167_7.jpeg\",\"1664977167_7.jpeg\"]}', '{\"nama\":[\"Kenta Takeshi\",\"Kansai Ryokuse\"],\"umur\":[\"40\",\"44\"],\"pekerjaan\":[\"PNS\",\"PNS\"],\"alamat\":[\"PNS\",\"PNS\"]}', '1664977167_11.jpeg', '', '', '1665066780_339901002-blangko-laporan-polisi-doc.pdf', 'Laporan Anda telah diterima. Silahkan menunggu jadwal pertemuan langsung ke Polres Badung', 'Selesai', 1, 'LP/002/K/X/2022/Polres Badung', 8, '2022-10-07 04:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_07_14_140958_create_laporan_sktlk_table', 1),
(3, '2022_07_15_135449_create_notifikasi_table', 2),
(7, '2022_07_14_141016_create_laporan_sik_table', 3),
(8, '2022_09_17_112352_create_laporan_sp2hp_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
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
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `judul`, `isi`, `tipe`, `telah_dibaca`, `dikirim_kepada`, `laporan_id`, `pelapor_id`, `dikirim_pada`) VALUES
(1, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 2, 8, '2022-09-22 04:49:27'),
(2, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 2, 8, '2022-09-22 04:49:45'),
(4, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 3, 8, '2022-09-27 13:41:04'),
(5, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 3, 8, '2022-09-27 13:41:25'),
(6, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 3, 8, '2022-09-27 13:44:11'),
(7, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 3, 8, '2022-09-27 13:45:19'),
(8, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 1, 8, '2022-09-27 14:07:07'),
(9, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 1, 8, '2022-09-27 14:07:07'),
(10, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 4, 8, '2022-09-27 14:26:09'),
(11, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 4, 8, '2022-09-27 14:26:35'),
(12, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 4, 8, '2022-09-27 14:35:57'),
(13, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 2, 8, '2022-09-27 14:46:44'),
(14, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP Telah Divalidasi. Dokumen validasi SP2HP dapat diunduh disini.', 'sp2hp', 1, 'pelapor', 2, 8, '2022-09-29 01:45:16'),
(15, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 3, 8, '2022-10-04 03:29:38'),
(16, 'Pelaporan SP2HP Tidak Valid', 'Pelaporan SP2HP Tidak Valid', 'sp2hp', 1, 'pelapor', 3, 8, '2022-10-04 13:43:53'),
(17, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 3, 8, '2022-10-04 14:39:03'),
(18, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 3, 8, '2022-10-04 14:40:23'),
(19, 'Pelaporan SP2HP Tidak Valid', 'Silahkan periksa kembali kelengkapan pelaporan tindak kriminal.', 'sp2hp', 1, 'pelapor', 3, 8, '2022-10-04 14:46:38'),
(20, 'Pelaporan SP2HP Tidak Valid', 'Silahkan periksa kembali kelengkapan pelaporan tindak kriminal.', 'sp2hp', 1, 'pelapor', 3, 8, '2022-10-04 14:49:46'),
(21, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 4, 8, '2022-10-05 13:39:27'),
(22, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP Telah Divalidasi. Dokumen validasi SP2HP dapat diunduh disini.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-05 13:41:36'),
(23, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-05 13:53:49'),
(24, 'Perkembangan SP2HP', 'Progres penyidikan tindak kriminal dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-06 14:21:18'),
(25, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-06 14:33:00'),
(26, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-07 03:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_pengguna` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `telepon`, `jenis_kelamin`, `password`, `jenis_pengguna`, `alamat`, `status`) VALUES
(1, 'tuarie', 'Tuarie', 'tuarimb29@gmail.com', '082146335727', 'Laki-laki', '$2y$10$Qp8Lg5oKRDUUesF55nFGjeS9DINemIiDhlDtelLPYBqUpWagxFrie', 'Pelapor', 'Br. Munggu, Mengwi', 1),
(3, 'galuh', 'galuh', 'galuh@gmail.com', '9000000', 'Perempuan', '$2y$10$BqwDjmmf6nuOMnOsw/yG1eYtl/09FDjOfBPkIpGLBQkyecKv4v1M.', 'Admin', 'Mengwi', 1),
(4, 'ana', 'ana', 'ana@gmail.com', '999999999', 'Perempuan', '$2y$10$DuRaBSxowXB4BFVTnCmdaeiijut09A9b8o4SHD48oZ3BJhLA6ffBC', 'Pelapor', 'irian jaya', 1),
(5, 'lisabp', 'lisa', 'lisabp@gmail.com', '08112345678', 'Perempuan', '$2y$10$AZGY7gQMwqbBGo/MUvhpPuYlTaH3vDQdUWS8eWNYVn2q2K7Ad6EPW', 'Pelapor', 'Thailand', 1),
(6, 'adijaya', 'Adi Jaya', 'adijaya@gmail.com', '098989889898', 'Laki-laki', '$2y$10$MiQKI/4r6pEuQ9FXH7NOQO8Gw.3Hpof9QessOOgguN1hJhLyX8OFq', 'Pelapor', 'Denpasar', 1),
(7, 'winayanti', 'winayanti', 'galuhcandrawardani@gmail.com', '087878773388', 'Perempuan', '$2y$10$14pTkQEUJ0y4fO0BB79i1OTfacA16GxCz9Nok6iQM0.snHv8SBXLy', 'Pelapor', 'Denpasar', 1),
(8, 'apolres', 'Admin Polres', 'apolresbadung@gmail.com', '098878787878', 'Laki-laki', '$2y$10$pYfB/m6Cj6/91Fnz0L2vO.vZjXnYNou9Fyx35pU8GNgXWwWblpRhK', 'Pelapor', 'Badung, Bali', 1),
(13, 'arie', 'Arie', 'ariesetiadi.sm@gmail.com', '1234', 'Laki-laki', '$2y$10$Grr6WITHk0UJf0AeWExOBONjE3owdQIOsVqBpzfr8E5NdLsK9PUDu', 'Pelapor', 'Bali', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_sik`
--
ALTER TABLE `laporan_sik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indexes for table `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indexes for table `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_sik`
--
ALTER TABLE `laporan_sik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_sik`
--
ALTER TABLE `laporan_sik`
  ADD CONSTRAINT `laporan_sik_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  ADD CONSTRAINT `laporan_sktlk_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
