-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2022 pada 06.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
(3, 'ass', 'ass', 'ass', 'ass', '2121', 'add', '2020-12-12 10:00:00', '2020-12-12 12:00:00', 'Mengwi', '', 'ads', 1212, 1, '1664286064_proposal kegiatan.jpg', '1664286064_izin lokasi kegiatan.jpg', '1664286064_izin lokasi kegiatan.jpg', '1664286064_foto ktp.jpg', '1664286064_surat rekomendasi.jpg', '1664286251_pernyataan-keaslian.pdf', 8, NULL, NULL, '1664286319_laporan sktlk.pdf', '1664286251_foto ktp.jpg', '1664286251_orang dan katp2.png', '2022-09-27 13:41:04'),
(4, 'wewe', 'hgh', 'jgk', 'jhgj', '878', 'ghj', '0122-12-12 12:00:00', '1999-12-12 12:00:00', 'Abiansemal', '', 'jbmn', 656, 1, '1664288769_proposal kegiatan.jpg', '1664288769_izin lokasi kegiatan.jpg', '1664288769_surat rekomendasi.jpg', '1664288769_maudy.jpeg', '1664288769_surat rekomendasi.jpg', '1664289357_pernyataan-keaslian.pdf', 8, NULL, 'draft', '1666188262_sik garda.pdf', '1664289357_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664289357_whatsapp image 2022-09-27 at 09.46.45.jpeg', '2022-09-27 04:41:49'),
(5, 'STT Wira Bhakti', 'Astra Swarriana', 'Laboran', 'Br. Pande Mengwi', '087889889898', 'Sosialisasi Pengetahuan Hand Hygiene', '2022-12-12 09:00:00', '2022-12-12 13:00:00', 'Mengwi', 'Jl. Walmiki no 23 B', 'HUT Desa Mengwi', 250, 1, '1665244012_pernyataan-keaslian.pdf', '1665244012_pernyataan-keaslian.pdf', '1665244012_pernyataan-keaslian.pdf', '1665244012_pernyataan-keaslian.pdf', '1665244012_pernyataan-keaslian.pdf', '1665244387_pernyataan-keaslian (1).pdf', 8, NULL, NULL, '1666185868_cream white minimalist real estate for sale instagram story (1).pdf', '1665244387_foto ktp.jpg', '1665244387_orang dan katp2.png', '2022-10-08 15:46:52'),
(6, 'Sentosa Abadi', 'Abel Alteesa', 'Guru', 'Gang Nuri no 22', '09889898898', 'Sosialisasi Pengaruh Hand Hygene pada Masyarakat Umum', '2022-12-12 10:00:00', '2022-12-12 14:00:00', 'Kuta', 'Balai Desa Kuta Jl Nuri no 109', 'HUT Kecamatan Kuta', 200, 1, '1666100136_proposal kegiatan.jpg', '1666100136_izin lokasi kegiatan.jpg', '1666100136_surat rekomendasi.jpg', '', '1666100136_surat rekomendasi.jpg', '1666100478_pernyataan-keaslian (1).pdf', 8, NULL, NULL, '1666102470_validasi-sp2hp.pdf', '1666100478_foto ktp.jpg', '1666100478_orang dan katp2.png', '2022-10-18 13:35:36'),
(7, 'PT Amanda Abadi', 'Garda Ranggi', 'PNS', 'Jl Merdeka Abadi 220', '08898989890', 'Sosialisasi Kebutuhan Pokok', '2022-11-15 08:00:00', '2022-11-16 10:00:00', 'Kuta Selatan', 'Jl. Munggu Kelod Kuta Selatan', 'HUT Kecamatan Kuta Selatan', 150, 1, '1666187859_proposal kegiatan.jpg', '1666187860_izin lokasi kegiatan.jpg', '1666187860_surat rekomendasi.jpg', '1666187860_foto ktp.jpg', '1666187860_surat rekomendasi.jpg', '1666188175_pernyataan-keaslian (6).pdf', 8, NULL, 'draft', '1666188221_sik garda.pdf', '1666188175_foto ktp.jpg', '1666188175_orang dan katp2.png', '2022-10-19 13:57:40'),
(8, 'PT Indah CItrabudi', 'Jayadi Basunjaya Putra', 'Pengusaha', 'Jalan Peguyangan Denpasar Selatan', '083764887838', 'Penyuluhan Bahasa Narkoba', '2022-12-20 08:00:00', '2022-12-20 10:00:00', 'Kuta Utara', 'Jl. Garuda II B2', 'Peringatan Hari Narkoba Sedunia', 180, 1, '1666188455_proposal kegiatan.jpg', '1666188455_izin lokasi kegiatan.jpg', '1666188455_surat rekomendasi.jpg', '', '1666188455_surat rekomendasi.jpg', '1666188765_pernyataan-keaslian (7).pdf', 8, NULL, NULL, '1666188798_sik jayadi.pdf', '1666188765_foto ktp.jpg', '1666188765_orang dan ktp.jpg', '2022-10-19 14:07:35'),
(9, 'PT Sentosa Abadi', 'Kenzie Alharon', 'PNS', 'Jl Dr.Sutomo-Gatot Subroto', '087889889898', 'Gotong royong', '2023-01-04 08:00:00', '2023-01-06 10:00:00', 'Kuta Selatan', 'Jl Surapati 33', 'Kerja bakti membersihkan lingkungan desa', 200, 1, '1666188924_proposal kegiatan.jpg', '1666188924_izin lokasi kegiatan.jpg', '1666188924_surat rekomendasi.jpg', '', '1666188924_surat rekomendasi.jpg', '1666189179_pernyataan-keaslian (8).pdf', 8, NULL, NULL, '1666189214_sik kenzie.pdf', '1666189179_foto ktp.jpg', '1666189179_orang dan ktp.jpg', '2022-10-19 14:15:24'),
(10, 'PT. Bumisejahtera Abadi.', 'Fajar Ahsa', 'PNS', 'Jl K.H. Samanhudi 212', '098778766878', 'Penggalangan dana', '2022-11-02 09:00:00', '2022-11-02 10:00:00', 'Petang', 'Sp Tl Nitimandala 321', 'Penggalangan dana LPD Petang', 120, 1, '1666189267_proposal kegiatan.jpg', '1666189267_izin lokasi kegiatan.jpg', '1666189267_surat rekomendasi.jpg', '', '1666189267_surat rekomendasi.jpg', '1666189478_pernyataan-keaslian (9).pdf', 8, NULL, NULL, '1666189549_sik fajar.pdf', '1666189478_foto ktp.jpg', '1666189478_orang dan ktp.jpg', '2022-10-19 14:21:07'),
(11, 'PT. Sederhana Industri Makmur.', 'Abdul Jasim', 'Laboran', 'Jl Cok Agung Tresna Nitimandala 98', '098778766878', 'Penyuluhan Sosial', '2022-11-03 09:00:00', '2022-11-04 11:00:00', 'Kuta Utara', 'Jl Basuki Rahmat Nitimandala B 65', 'Penyuluhan Sosial Kuta', 220, 1, '1666189512_proposal kegiatan.jpg', '1666189512_izin lokasi kegiatan.jpg', '1666189512_surat rekomendasi.jpg', '', '1666189512_surat rekomendasi.jpg', '1666190039_pernyataan-keaslian (10).pdf', 8, NULL, NULL, '1666190078_sik abdul.pdf', '1666190039_foto ktp.jpg', '1666190039_orang dan ktp.jpg', '2022-10-19 14:25:12'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1667271610_sertifikat sertifikasi bisma_compressed.pdf', '1667271610_sertifikat sertifikasi bisma_compressed.pdf', '1667271610_sertifikat sertifikasi bisma_compressed.pdf', '1667271610_sertifikat sertifikasi bisma_compressed.pdf', '1667271610_sertifikat sertifikasi bisma_compressed.pdf', NULL, 3, NULL, NULL, NULL, NULL, NULL, '2022-11-01 03:00:10');

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
(1, 'qwerty', 'nb', '2020-02-12', 'aps', 'Warga Negara Indonesia', 'kg', '878', '2011-12-12 00:00:00', '', 'Abiansemal', 'fyjh', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '', '1664287627_pernyataan-keaslian.pdf', 8, NULL, '2022-09-27 03:43:29'),
(2, 'Arie', 'Denpasar', '2000-02-12', 'Mahasiswa', 'Warga Negara Indonesia', 'Mengwi', '082146335727', '2011-12-12 00:00:00', '', 'Mengwi', 'STNK, Surat Tanah', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664287627_whatsapp image 2022-09-27 at 09.46.45.jpeg', '', '1664287627_pernyataan-keaslian.pdf', 8, '1666185745_pengesahan.pdf', '2022-10-08 03:43:29'),
(3, 'Wulan Sari', 'Denpasar', '2000-08-18', 'PNS', 'Warga Negara Indonesia', 'Br. Serangan Mengwi', '08789987898', '2022-09-20 00:00:00', 'Gang Rama no. 16 mengwi', 'Mengwi', 'Surat akta tanah', '1665242756_foto ktp.jpg', '1665242756_orang dan katp2.png', '1665242756_surat rekomendasi.jpg', '', '1665242756_pernyataan-keaslian.pdf', 8, NULL, '2022-10-11 15:25:56'),
(4, 'Arwan Singgih', 'Singaraja', '1988-04-13', 'PNS', 'Warga Negara Indonesia', 'Br. Pande Abiansemal', '098778766878', '2022-09-17 00:00:00', 'Jl. Sugi no 12', 'Abiansemal', 'SIM', '1666099172_foto ktp.jpg', '1666099172_orang dan ktp.jpg', '1666099172_surat rekomendasi.jpg', '', '1666099172_pernyataan-keaslian.pdf', 8, '1666099698_laporan sktlk1.pdf', '2022-10-18 13:19:32'),
(5, 'Ardiman Wirawan', 'Gianyar', '1980-02-03', 'PNS', 'Warga Negara Indonesia', 'Jl Sumbawa no 33', '081223889892', '2020-10-10 00:00:00', 'Jl Nusa Indah B 22', 'Kuta Utara', 'Akta tanah', '1666182205_foto ktp.jpg', '1666182205_orang dan katp2.png', '1666182205_surat rekomendasi.jpg', '', '1666182205_pernyataan-keaslian (2).pdf', 8, '1666183300_laporan agam.pdf', '2022-10-19 12:23:25'),
(6, 'Agam Narapati', 'Denpasar', '1997-09-08', 'Laboran', 'Warga Negara Indonesia', 'Gang Nangka II 100', '08988989898', '2022-03-12 00:00:00', 'Jalan Nuri Desa Kapal', 'Kuta Utara', 'KTP', '1666182636_foto ktp.jpg', '1666182636_orang dan ktp.jpg', '1666182636_surat rekomendasi.jpg', '', '1666182636_pernyataan-keaslian (3).pdf', 8, '1666184395_laporan agam.pdf', '2022-10-19 12:30:36'),
(7, 'Bambang Perwira', 'Denpasar', '1990-05-20', 'PNS', 'Warga Negara Indonesia', 'Br. Serangan Abiansemal', '087767676224', '2022-02-11 00:00:00', 'Br. Delod Peken Abiansemal', 'Abiansemal', 'STNK', '1666182759_foto ktp.jpg', '1666182759_orang dan katp2.png', '1666182759_surat rekomendasi.jpg', '', '1666182759_pernyataan-keaslian (4).pdf', 8, '1666184365_laporan sktlk bambang.pdf', '2022-10-19 12:32:39'),
(8, 'Endra Respati', 'Badung', '1996-06-04', 'PNS', 'Warga Negara Indonesia', 'Br. Munggu Mengwi', '098878799879', '2022-07-03 00:00:00', 'Jl. Gajahmada 223 B', 'Kuta', 'Akta kelahiran', '1666182883_foto ktp.jpg', '1666182883_orang dan ktp.jpg', '1666182883_surat rekomendasi.jpg', '', '1666182883_pernyataan-keaslian (5).pdf', 8, '1666184333_laporan sktlk endra.pdf', '2022-10-19 12:34:43');

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
-- Dumping data untuk tabel `laporan_sp2hp`
--

INSERT INTO `laporan_sp2hp` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `judul_laporan`, `isi_laporan`, `tanggal_kejadian`, `lokasi_kejadian`, `detail_lokasi_kejadian`, `kategori`, `terlapor`, `bukti`, `saksi`, `foto_ktp`, `foto_pelapor`, `lampiran`, `file_pemberitahuan`, `keterangan_pemberitahuan`, `perkembangan`, `status`, `nomor_polisi`, `pelapor_id`, `dilaporkan_pada`) VALUES
(2, 'asa', 'werre', '1999-12-02', 'dfgg', 'Warga Negara Indonesia', 'jhj', '878', 'kjjjk', 'gcvbn', '1999-12-04', 'Mengwi', 'asdfsde', 'KDRT', 'Dimas Revaldi, Farhan Dimas, Alif Rajab 2', '{\"namaBukti\":[\"sfsf 222222\",\"sffafd 222\"],\"gambarBukti\":[\"1664894423_foto ktp.jpg\",\"1664894423_foto ktp.jpg\"]}', '{\"nama\":[\"afsdf 2\",\"sfafa 22\"],\"umur\":[\"122\",\"2222\"],\"pekerjaan\":[\"weqe 2\",\"ewrw 2 2\"],\"alamat\":[\"weqe 2\",\"ewrw 2 2\"]}', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', '1664290004_whatsapp image 2022-09-27 at 09.46.45.jpeg', NULL, NULL, NULL, 1, 'LP/005/K/IX/2022/Polres Badung', 8, '2022-10-08 14:48:59'),
(3, 'asas 23', 'sdad 23', '0002-02-02', 'daa 23', 'Warga Negara Asing', 'fdafs 2', '121 2', 'ada 2', 'afdsdf 2', '0022-02-02', 'Abiansemal', 'zczvsd 2', 'Penganiayaan', 'Dimas Revaldi, Farhan Dimas, Alif Rajab 2', '{\"namaBukti\":[\"sfsf 222222\",\"sffafd 222\"],\"gambarBukti\":[\"1664894423_foto ktp.jpg\",\"1664894423_foto ktp.jpg\"]}', '{\"nama\":[\"afsdf 2\",\"sfafa 22\"],\"umur\":[\"122\",\"2222\"],\"pekerjaan\":[\"weqe 2\",\"ewrw 2 2\"],\"alamat\":[\"weqe 2\",\"ewrw 2 2\"]}', '1664894423_foto ktp.jpg', '1664894423_orang dan katp2.png', '1664894423_proposal kegiatan.jpg', NULL, NULL, NULL, 0, NULL, 8, '2022-10-11 13:24:30'),
(4, 'Kamio Eichii', 'Kyoto', '1999-12-12', 'PNS', 'Warga Negara Indonesia', 'Kyoto, Jepang', '989889899', 'Pencurian Sepeda Ontel', 'Menurut Imran, pelaku biasa mengincar rumah kosong dan menggasak barang yang ada milik korban. “Salah satu pelaku ini residivis kasus serupa. Pada tahun 2020 yang bersangkutan sudah melakukan masa penahannya di LP, kali ini tertangkap lagi. Pada aksinya kemarin, pelaku menggasak dua sepeda senilai Rp260 juta. “Harga sepeda ini satu unitnya Rp130 juta, kalau dua berarti Rp260 juta. Selanjutnya sepeda hasil curian dijual ke pembeli dengan sistem COD. Atas perbuatannya kedua pelaku akan dijerat Pasal 363 KUHP tentang Pencurian dengan ancaman hukuman di atas lima tahun penjara.', '2020-12-12', 'Mengwi', ' Jalan Merdeka No 21 A III', 'Pencurian', 'Mamoko Ikenega', '{\"namaBukti\":[\"Buku Kerja\",\"Kertas merah\"],\"gambarBukti\":[\"1664977167_7.jpeg\",\"1664977167_7.jpeg\"]}', '{\"nama\":[\"Kenta Takeshi\",\"Kansai Ryokuse\"],\"umur\":[\"40\",\"44\"],\"pekerjaan\":[\"PNS\",\"PNS\"],\"alamat\":[\"Mengwi\",\"Petang\"]}', '1664977167_11.jpeg', '', '', '1667710136_pedoman_ta_fti_final.pdf|1667710342_pengumuman wisuda xxx_221028_193234.pdf|1667713132_pedoman_ta_fti_final.pdf', '{\"keterangan\":\"Keterangan perkembangan 1\",\"uploaded_at\":\"2022-11-06 12:48:57\"}|{\"keterangan\":\"Keterangan perkembangan 2\",\"uploaded_at\":\"2022-11-06 12:52:22\"}|{\"keterangan\":\"Keterangan perkembangan 3\",\"uploaded_at\":\"2022-11-06 13:38:52\"}', 'Sedang diproses', 1, 'LP/002/K/X/2022/Polres Badung', 8, '2022-11-06 05:38:52'),
(5, 'Ruri Narendra', 'Jambi', '1990-03-22', 'PNS', 'Warga Negara Indonesia', 'Jl. Indah Surya no 100', '0877898989898', 'Pencurian Motor', 'Meski begitu, fitur tersebut rupanya tidak 100 persen aman dari tindak kejahatan. Aksi mereka biasanya hanya bermodalkan sebuah instalasi elektrikal sederhana yang berfungsi untuk membuka akses kunci motor, dengan melakukan bypass ECU motor.Menanggapi ramainya kasus PCX 150 yang jadi incaran maling, General Manager Corporate Communication PT Astra Honda Motor (AHM) Ahmad Muhibbuddin, mengatakan, pihaknya mengaku belum pernah menerima laporan tersebut.', '2022-07-02', 'Kuta Selatan', 'Jl Nangka Gading no 220', 'Pencurian', NULL, '{\"namaBukti\":[\"Kipas\"],\"gambarBukti\":[\"1666101080_contoh laporan per daerah.jpg\"]}', '{\"nama\":[\"Ardana Putra\",\"Desi Ratnasari\"],\"umur\":[\"22\",\"21\"],\"pekerjaan\":[\"PNS\",\"PNS\"],\"alamat\":[\"PNS\",\"PNS\"]}', '1666101080_foto ktp.jpg', '1666101080_orang dan katp2.png', '', '', 'tes', 'Selesai', 1, 'LP/001/K/X/2022/Polres Badung', 8, '2022-10-18 14:31:55'),
(6, 'wewewe', 'wewew', '1212-01-02', 'qwqw', 'Warga Negara Indonesia', 'qwqqw', '1212', 'dfsdsd', 'sdsd', '0011-11-11', 'Petang', 'wdwd', 'Pemerkosaan', NULL, '{\"namaBukti\":[null],\"gambarBukti\":[]}', '{\"nama\":[null],\"umur\":[null],\"pekerjaan\":[null],\"alamat\":[null]}', '1666148535_user.png', '1666148535_user.png', '1666148535_user.png', NULL, NULL, 'Selesai', NULL, NULL, 8, '2022-10-19 13:40:46');

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
(26, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 4, 8, '2022-10-07 03:13:33'),
(27, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 3, 8, '2022-10-08 15:25:56'),
(28, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 3, 8, '2022-10-08 15:25:56'),
(29, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 5, 8, '2022-10-08 15:46:52'),
(30, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 5, 8, '2022-10-08 15:47:21'),
(31, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 5, 8, '2022-10-08 15:53:07'),
(32, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 4, 8, '2022-10-18 13:19:32'),
(33, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 4, 8, '2022-10-18 13:19:32'),
(34, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 4, 8, '2022-10-18 13:28:18'),
(35, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 6, 8, '2022-10-18 13:35:36'),
(36, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 6, 8, '2022-10-18 13:36:02'),
(37, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 6, 8, '2022-10-18 13:41:18'),
(38, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 6, 8, '2022-10-18 13:42:37'),
(39, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 6, 8, '2022-10-18 13:43:28'),
(40, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 6, 8, '2022-10-18 13:44:18'),
(41, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 5, 8, '2022-10-18 13:51:20'),
(42, 'Pelaporan SP2HP Telah Divalidasi', 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:12:19'),
(43, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 6, 8, '2022-10-18 14:14:30'),
(44, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:15:54'),
(45, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:17:01'),
(46, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:26:09'),
(47, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:26:50'),
(48, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:31:05'),
(49, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 5, 8, '2022-10-18 14:31:55'),
(50, 'Pelaporan Tindak Kriminal Masuk', 'Pelaporan perlu diproses.', 'sp2hp', 1, 'admin', 6, 8, '2022-10-19 03:02:15'),
(51, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 5, 8, '2022-10-19 12:23:25'),
(52, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 5, 8, '2022-10-19 12:23:25'),
(53, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 6, 8, '2022-10-19 12:30:36'),
(54, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 6, 8, '2022-10-19 12:30:36'),
(55, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 7, 8, '2022-10-19 12:32:39'),
(56, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 7, 8, '2022-10-19 12:32:39'),
(57, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:34:43'),
(58, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 8, 8, '2022-10-19 12:34:43'),
(59, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 5, 8, '2022-10-19 12:37:51'),
(60, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 5, 8, '2022-10-19 12:38:39'),
(61, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 5, 8, '2022-10-19 12:40:00'),
(62, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 6, 8, '2022-10-19 12:40:45'),
(63, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 5, 8, '2022-10-19 12:41:40'),
(64, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 8, '2022-10-19 12:42:46'),
(65, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 8, '2022-10-19 12:45:18'),
(66, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 8, '2022-10-19 12:46:11'),
(67, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:47:18'),
(68, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:47:51'),
(69, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:48:48'),
(70, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:52:15'),
(71, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 8, 8, '2022-10-19 12:58:53'),
(72, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 7, 8, '2022-10-19 12:59:25'),
(73, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 6, 8, '2022-10-19 12:59:55'),
(74, 'Pelaporan SP2HP Telah selesai diproses', 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.', 'sp2hp', 1, 'pelapor', 6, 8, '2022-10-19 13:02:19'),
(75, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 2, 8, '2022-10-19 13:22:25'),
(76, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 5, 8, '2022-10-19 13:24:28'),
(77, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 7, 8, '2022-10-19 13:57:40'),
(78, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 7, 8, '2022-10-19 13:59:09'),
(79, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 7, 8, '2022-10-19 14:02:55'),
(80, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 7, 8, '2022-10-19 14:03:41'),
(81, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 4, 8, '2022-10-19 14:04:22'),
(82, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 8, 8, '2022-10-19 14:07:35'),
(83, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 8, 8, '2022-10-19 14:08:05'),
(84, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 8, 8, '2022-10-19 14:12:45'),
(85, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 8, 8, '2022-10-19 14:13:18'),
(86, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 9, 8, '2022-10-19 14:15:24'),
(87, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 9, 8, '2022-10-19 14:15:37'),
(88, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 9, 8, '2022-10-19 14:19:39'),
(89, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 9, 8, '2022-10-19 14:20:14'),
(90, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 10, 8, '2022-10-19 14:21:07'),
(91, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 10, 8, '2022-10-19 14:21:21'),
(92, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 10, 8, '2022-10-19 14:24:38'),
(93, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 11, 8, '2022-10-19 14:25:12'),
(94, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 10, 8, '2022-10-19 14:25:49'),
(95, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 11, 8, '2022-10-19 14:26:09'),
(96, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 11, 8, '2022-10-19 14:33:59'),
(97, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 11, 8, '2022-10-19 14:34:38'),
(98, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 12, 3, '2022-11-01 03:00:11'),
(99, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 03:11:49'),
(100, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 03:45:15'),
(101, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 03:50:06'),
(102, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:26:13'),
(103, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:27:41'),
(104, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:39:19'),
(105, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:40:13'),
(106, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:45:18'),
(107, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:45:48'),
(108, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:48:57'),
(109, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 04:52:22'),
(110, 'Perkembangan SP2HP', 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.', 'sp2hp', 0, 'pelapor', 4, 8, '2022-11-06 05:38:52');

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
  `jenis_kelamin` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_pengguna` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `telepon`, `jenis_kelamin`, `password`, `jenis_pengguna`, `alamat`, `status`) VALUES
(3, 'galuh', 'galuh', 'galuhcandrawardani@gmail.com', '9000000', 'Perempuan', '$2y$10$BqwDjmmf6nuOMnOsw/yG1eYtl/09FDjOfBPkIpGLBQkyecKv4v1M.', 'Pelapor', 'Mengwi', 1),
(8, 'apolres', 'Admin Polres', 'apolresbadung@gmail.com', '098878787878', 'Laki-laki', '$2y$10$pYfB/m6Cj6/91Fnz0L2vO.vZjXnYNou9Fyx35pU8GNgXWwWblpRhK', 'AdminSPKT', 'Badung, Bali', 1),
(14, 'areskrim', 'Reserse Kriminal', 'areskrimbadung@gmail.com', '9000000', 'Perempuan', '$2y$10$DiKR.ylKPMP0.ivHck2WIu1M/PtyL7SsEJxe6Bjqe0CBLBJa5jFha', 'AdminReskrim', 'Mengwi', 1),
(15, 'kanit', 'Kepala Unit SPKT', 'kanitspktbadung@gmail.com', '9000000', 'Perempuan', '$2y$10$0EzMOuUOj4Zyx.0aEMsTaePDUAnOYRZ0UYN0PX8MMDMjPwWErQ7M.', 'KanitSPKT', 'Mengwi', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `laporan_sp2hp`
--
ALTER TABLE `laporan_sp2hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
