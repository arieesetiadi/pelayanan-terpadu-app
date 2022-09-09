-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2022 pada 06.05
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_organisasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bentuk_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
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
  `pelapor_id` tinyint(4) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pernyataan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_persetujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_sik`
--

INSERT INTO `laporan_sik` (`id`, `nama_organisasi`, `nama_penanggung_jawab`, `pekerjaan`, `alamat`, `telepon`, `bentuk_kegiatan`, `tanggal_kegiatan`, `waktu_mulai`, `waktu_selesai`, `lokasi_kegiatan`, `dalam_rangka`, `jumlah_undangan`, `status`, `proposal_kegiatan`, `izin_tempat`, `izin_instansi`, `fotokopi_paspor`, `rekomendasi_polsek`, `pernyataan_keaslian`, `pelapor_id`, `keterangan`, `status_pernyataan`, `dokumen_persetujuan`, `foto_ktp`, `foto_pelapor`, `created_at`, `updated_at`) VALUES
(1, 'STT Wibhak', 'Astra Swar', 'Pensiunan', 'Br. Pande Abs', '', 'Peringatan Ultah', '2022-08-10', '05:00:00', '07:00:00', 'Balai Banjar', 'Ultah STT Wibhak', 10, 1, '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-07-23 15:59:37', '2022-07-29 16:38:01'),
(5, 'Resso', 'Maria', 'Nun', 'Jalan psgi', '', 'Ceramah', '2022-08-06', '00:35:00', '02:34:00', 'Church', 'Ultah Romo', 20, 1, '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-07-30 14:07:04', '2022-07-30 14:35:26'),
(7, 'Yakuza', 'Nakamoto Yuta', 'Guru', 'Kyoto, Japan', '', 'Bisnis Obat', '2022-08-17', '23:52:00', '01:54:00', 'Gudang Obat', 'Distribusi Obat', 100, 1, '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-08-02 15:38:23', '2022-08-02 15:57:41'),
(24, 'PT Jaya Sentosa', 'Mawar Suwarno', 'Ibu Rumah Tangga', 'Jakarta', '0876767556434', 'Pertemuan Sekte', '2023-04-17', '03:01:00', '04:01:00', 'Rumah Susun', 'Ulang Tahun Rominum', 100, 1, '1660316280_dokumen-pernyataan-keaslian (1).pdf', '1660316280_dokumen-pernyataan-keaslian.pdf', '1660316280_laporan.pdf', '1660316280_qq.jpg', '1660316280_dokumen-pernyataan-keaslian.pdf', '1660401824_pernyataan-keaslian.ibu.pdf', 1, NULL, NULL, '1661180935_800_1318_kominfo.pdf', '', '', '2022-08-12 14:58:00', '2022-08-22 15:08:55'),
(25, 'Galaxy Team', 'Dewa Angga', 'PNS', 'Br. Sunia Werdi Bhuana', '09889788887', 'Pertandingan voli', '2022-10-14', '18:00:00', '21:00:00', 'Lapangan voli Sunia', 'Memperingati Hari Ulang Tahun Desa Werdi Bhuana', 300, 1, '1662531673_proposal kegiatan.jpg', '1662531673_izin lokasi kegiatan.jpg', '1662531673_surat rekomendasi.jpg', '', '1662531673_surat rekomendasi.jpg', '1662532168_pernyataan-keaslian (1).pdf', 1, NULL, NULL, '1662532306_sik sah.pdf', '', '', '2022-09-07 06:21:13', '2022-09-07 06:31:46'),
(27, 'sdsd', 'sdsd', 'sdsd', 'ssd', 'sdsd', 'sdsd', '0001-11-01', '01:01:00', '02:02:00', 'wewe', 'wewe', 1212, 1, '1662693462_izin lokasi kegiatan.jpg', '1662693462_izin lokasi kegiatan.jpg', '1662693462_nikolas.jpg', '1662693462_orang dan katp2.png', '1662693462_proposal kegiatan.jpg', '1662694029_pernyataan-keaslian.pdf', 1, NULL, NULL, NULL, '1662694029_foto ktp.jpg', '1662694029_orang dan katp2.png', '2022-09-09 03:17:42', '2022-09-09 03:27:09'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-09 03:57:55', '2022-09-09 03:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_sktlk`
--

CREATE TABLE `laporan_sktlk` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `pelapor_id` tinyint(4) NOT NULL,
  `dokumen_persetujuan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diunggah_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_sktlk`
--

INSERT INTO `laporan_sktlk` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `alamat`, `telepon`, `tanggal_kejadian`, `lokasi_kejadian`, `surat_hilang`, `foto_ktp`, `foto_pelapor`, `rekomendasi_instansi`, `dokumen_tambahan`, `pernyataan_keaslian`, `pelapor_id`, `dokumen_persetujuan`, `diunggah_pada`) VALUES
(2, 'Porsche Pachara Nattiwingpat', 'Chaopraya', '1994-02-28', 'bb', 'Warga Negara Indonesia', 'Thailand', '08112345678', '2022-07-12', 'Taman Ayun', 'KTM', '1657811738_foto profil.jpg', '1657811738_foto profil2.jpg', '1657811738_800_1318_kominfo.pdf', '', '', 1, '1658331017_laporan.pdf', '2022-07-14 15:15:38'),
(4, 'Kinn Tanakul', 'Guangshou', '1992-06-22', 'oio', 'Warga Negara Asing', 'Thailand', '0876767556', '2022-07-05', 'Depan indomart', 'STNK', '1657812418_foto profil.jpg', '1657812418_foto profil2.jpg', '1657812418_800_1318_kominfo.pdf', '1657812418_800_1318_kominfo.pdf', '', 1, '1658331803_laporan.pdf', '2022-07-14 15:26:58'),
(9, 'Olivia Rodrigo', 'Tapesan', '2011-11-11', 'Penyanyi', 'Warga Negara Asing', 'Br. Yangapi', '088988373939', '2020-05-07', 'Taman Ayun', 'Driver License', '1660314675_qq.jpg', '1660314675_qq.jpg', '1660314675_laporan.pdf', '', '1660314675_dokumen-pernyataan-keaslian (1).pdf', 1, NULL, '2022-08-12 14:31:15'),
(10, 'Mila Karmila', 'Badung', '1995-08-12', 'PNS', 'Warga Negara Indonesia', 'Kapal', '087887878789', '2021-06-22', 'Taman Ayun', 'Sertifikat Tanah', '1660315306_taeyang.jpg', '1660315306_qq.jpg', '1660315306_taeyang.jpg', '', '1660315306_dokumen-pernyataan-keaslian (1).pdf', 1, NULL, '2022-08-12 14:41:46'),
(11, 'Dewi Sandra', 'Kupang', '1989-12-12', 'Guru', 'Warga Negara Indonesia', 'NTT, Kupang', '08988989800', '2022-09-02', 'Depan Bank BCA Kupang', 'SIM', '1662530568_foto ktp.jpg', '1662530568_orang dan katp2.png', '1662530568_surat rekomendasi.jpg', '', '1662530568_pernyataan-keaslian.pdf', 1, '1662531079_sktlk sah.pdf', '2022-09-07 06:02:48'),
(12, 'Anjasmara', 'Bandung', '1993-09-10', 'Karyawan', 'Warga Negara Indonesia', 'Bogor', '089883789', '2022-01-08', 'Depan Indomart Bogor', 'Sertifikat Rumah', '1662605373_foto ktp.jpg', '1662605373_orang dan ktp.jpg', '1662605373_surat rekomendasi.jpg', '', '1662605373_pernyataan-keaslian.pdf', 1, '1662605575_laporan.pdf', '2022-09-08 02:49:33');

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
(7, '2022_07_14_141016_create_laporan_sik_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telah_dibaca` tinyint(1) NOT NULL,
  `dikirim_kepada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan_id` tinyint(20) UNSIGNED NOT NULL,
  `pelapor_id` tinyint(4) NOT NULL,
  `dikirim_pada` timestamp NOT NULL DEFAULT '2022-07-15 07:10:55'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `judul`, `isi`, `tipe`, `telah_dibaca`, `dikirim_kepada`, `laporan_id`, `pelapor_id`, `dikirim_pada`) VALUES
(5, 'Laporan Telah Disetujui', 'Dokumen persetujuan dapat diunduh disini.', 'sktlk', 1, 'pelapor', 2, 1, '2022-07-20 16:30:17'),
(6, 'Laporan Telah Disetujui', 'Dokumen persetujuan dapat diunduh disini.', 'sktlk', 1, 'pelapor', 4, 1, '2022-07-20 16:43:23'),
(7, 'Laporan Berhasil', 'Anda berhasil melakukan mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 1, 1, '2022-07-23 15:59:37'),
(8, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 1, 1, '2022-07-23 15:59:37'),
(9, 'Laporan Berhasil', 'Anda berhasil melakukan mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 2, 1, '2022-07-26 13:59:08'),
(10, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 2, 1, '2022-07-26 13:59:08'),
(11, 'Laporan Berhasil', 'Anda berhasil mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 3, 1, '2022-07-26 14:31:20'),
(12, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 3, 1, '2022-07-26 14:31:20'),
(13, 'Laporan Berhasil', 'Anda berhasil mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 4, 1, '2022-07-26 14:31:58'),
(14, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 4, 1, '2022-07-26 14:31:58'),
(15, 'Dokumen Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 1, 1, '2022-07-27 15:50:52'),
(16, 'Laporan Berhasil', 'Anda berhasil mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 5, 1, '2022-07-30 14:07:04'),
(17, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 5, 1, '2022-07-30 14:07:04'),
(18, 'Dokumen Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 5, 1, '2022-07-30 14:12:43'),
(19, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 4, 1, '2022-07-30 15:15:23'),
(20, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 2, 1, '2022-07-30 15:41:46'),
(21, 'Laporan Berhasil', 'Anda berhasil mengunggah dokumen dan sedang dalam proses pengecekkan.', 'sik', 1, 'pelapor', 6, 1, '2022-08-02 14:32:53'),
(22, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 6, 1, '2022-08-02 14:32:53'),
(23, 'Dokumen SIK Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 6, 1, '2022-08-02 15:06:46'),
(24, 'Dokumen SIK Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 6, 1, '2022-08-02 15:14:01'),
(25, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 7, 1, '2022-08-02 15:38:23'),
(26, 'Dokumen SIK Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 7, 1, '2022-08-02 15:38:50'),
(27, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 7, 1, '2022-08-02 15:57:41'),
(28, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 8, 1, '2022-08-03 14:42:55'),
(29, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 0, 'pelapor', 8, 3, '2022-08-08 13:25:10'),
(30, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 0, 'pelapor', 8, 3, '2022-08-08 13:29:30'),
(31, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 16, 1, '2022-08-08 13:55:43'),
(32, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 16, 1, '2022-08-08 13:58:03'),
(33, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 16, 1, '2022-08-09 14:23:17'),
(34, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 22, 1, '2022-08-09 14:28:12'),
(35, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 22, 1, '2022-08-09 14:30:35'),
(36, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 22, 1, '2022-08-09 14:43:57'),
(37, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 22, 1, '2022-08-09 14:49:59'),
(38, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 22, 1, '2022-08-09 15:01:54'),
(39, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 22, 1, '2022-08-09 15:04:32'),
(40, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 23, 1, '2022-08-09 15:10:11'),
(41, 'Dokumen Ditolak', 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 23, 1, '2022-08-09 15:10:37'),
(42, 'Dokumen Persyaratan SIK Telah Diperbaharui', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 23, 1, '2022-08-09 15:11:10'),
(43, 'Dokumen Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 0, 'pelapor', 23, 3, '2022-08-09 15:11:45'),
(44, 'Laporan Berhasil', 'Anda berhasil melakukan pengajuan laporan dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 9, 1, '2022-08-12 14:31:15'),
(45, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 9, 1, '2022-08-12 14:31:15'),
(46, 'Laporan Berhasil', 'Anda berhasil melakukan pengajuan laporan dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 10, 1, '2022-08-12 14:41:46'),
(47, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 10, 1, '2022-08-12 14:41:46'),
(48, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 24, 1, '2022-08-12 14:58:00'),
(49, 'Dokumen Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 24, 1, '2022-08-12 14:59:27'),
(50, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 24, 1, '2022-08-13 14:43:44'),
(51, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 24, 1, '2022-08-22 15:01:33'),
(52, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 24, 1, '2022-08-22 15:08:55'),
(53, 'Laporan Berhasil', 'Anda berhasil melakukan pengajuan laporan dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 11, 1, '2022-09-07 06:02:48'),
(54, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 11, 1, '2022-09-07 06:02:48'),
(55, 'Laporan Telah Disetujui', 'Dokumen persetujuan dapat diunduh disini.', 'sktlk', 1, 'pelapor', 11, 1, '2022-09-07 06:11:19'),
(56, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 25, 1, '2022-09-07 06:21:13'),
(57, 'Dokumen Disetujui', 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 25, 1, '2022-09-07 06:22:04'),
(58, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 25, 1, '2022-09-07 06:29:28'),
(59, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 25, 1, '2022-09-07 06:31:46'),
(60, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 26, 1, '2022-09-08 02:02:20'),
(61, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 26, 1, '2022-09-08 02:02:35'),
(62, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 12, 1, '2022-09-08 02:49:33'),
(63, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 12, 1, '2022-09-08 02:49:33'),
(64, 'Laporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 12, 1, '2022-09-08 02:52:55'),
(67, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 0, 'admin', 26, 1, '2022-09-09 03:14:01'),
(68, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 27, 1, '2022-09-09 03:17:42'),
(69, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 27, 1, '2022-09-09 03:20:27'),
(70, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 27, 1, '2022-09-09 03:27:09'),
(71, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 28, 1, '2022-09-09 03:57:55'),
(72, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 28, 1, '2022-09-09 03:58:24');

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
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `telepon`, `jenis_kelamin`, `password`, `jenis_pengguna`, `alamat`) VALUES
(1, 'tuarie', 'Tuarie', 'tuarimb29@gmail.com', '082146335727', 'Laki-laki', '$2y$10$Qp8Lg5oKRDUUesF55nFGjeS9DINemIiDhlDtelLPYBqUpWagxFrie', 'Pelapor', 'Br. Munggu, Mengwi'),
(3, 'galuh', 'galuh', 'galuh@gmail.com', '9000000', 'Perempuan', '$2y$10$BqwDjmmf6nuOMnOsw/yG1eYtl/09FDjOfBPkIpGLBQkyecKv4v1M.', 'Admin', 'Mengwi'),
(4, 'ana', 'ana', 'ana@gmail.com', '999999999', 'Perempuan', '$2y$10$DuRaBSxowXB4BFVTnCmdaeiijut09A9b8o4SHD48oZ3BJhLA6ffBC', 'Pelapor', 'irian jaya'),
(5, 'lisabp', 'lisa', 'lisabp@gmail.com', '08112345678', 'Perempuan', '$2y$10$AZGY7gQMwqbBGo/MUvhpPuYlTaH3vDQdUWS8eWNYVn2q2K7Ad6EPW', 'Pelapor', 'Thailand');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_sik`
--
ALTER TABLE `laporan_sik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
