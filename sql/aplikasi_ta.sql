-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2022 pada 17.32
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

INSERT INTO `laporan_sik` (`id`, `nama_organisasi`, `nama_penanggung_jawab`, `pekerjaan`, `alamat`, `telepon`, `bentuk_kegiatan`, `waktu_mulai`, `waktu_selesai`, `lokasi_kegiatan`, `dalam_rangka`, `jumlah_undangan`, `status`, `proposal_kegiatan`, `izin_tempat`, `izin_instansi`, `fotokopi_paspor`, `rekomendasi_polsek`, `pernyataan_keaslian`, `pelapor_id`, `keterangan`, `status_pernyataan`, `dokumen_persetujuan`, `foto_ktp`, `foto_pelapor`, `created_at`, `updated_at`) VALUES
(1, 'STT Wibhak', 'Astra Swar', 'Pensiunan', 'Br. Pande Abs', '', 'Peringatan Ultah', '2022-09-09 05:00:00', '2022-09-09 07:00:00', 'Balai Banjar', 'Ultah STT Wibhak', 10, 1, '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', '1658591977_ni putu eny suryantini.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-07-23 15:59:37', '2022-07-29 16:38:01'),
(5, 'Resso', 'Maria', 'Nun', 'Jalan psgi', '', 'Ceramah', '2022-09-09 00:35:00', '2022-09-09 02:34:00', 'Church', 'Ultah Romo', 20, 1, '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', '1659190024_laporan.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-07-30 14:07:04', '2022-07-30 14:35:26'),
(7, 'Yakuza', 'Nakamoto Yuta', 'Guru', 'Kyoto, Japan', '', 'Bisnis Obat', '2022-09-09 23:52:00', '2022-09-09 01:54:00', 'Gudang Obat', 'Distribusi Obat', 100, 1, '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', '1659454703_laporan.pdf', NULL, 1, NULL, NULL, NULL, '', '', '2022-08-02 15:38:23', '2022-08-02 15:57:41'),
(24, 'PT Jaya Sentosa', 'Mawar Suwarno', 'Ibu Rumah Tangga', 'Jakarta', '0876767556434', 'Pertemuan Sekte', '2022-09-09 03:01:00', '2022-09-09 04:01:00', 'Rumah Susun', 'Ulang Tahun Rominum', 100, 1, '1660316280_dokumen-pernyataan-keaslian (1).pdf', '1660316280_dokumen-pernyataan-keaslian.pdf', '1660316280_laporan.pdf', '1660316280_qq.jpg', '1660316280_dokumen-pernyataan-keaslian.pdf', '1660401824_pernyataan-keaslian.ibu.pdf', 1, NULL, NULL, '1661180935_800_1318_kominfo.pdf', '', '', '2022-08-12 14:58:00', '2022-08-22 15:08:55'),
(25, 'Galaxy Team', 'Dewa Angga', 'PNS', 'Br. Sunia Werdi Bhuana', '09889788887', 'Pertandingan voli', '2022-09-09 18:00:00', '2022-09-09 21:00:00', 'Lapangan voli Sunia', 'Memperingati Hari Ulang Tahun Desa Werdi Bhuana', 300, 1, '1662531673_proposal kegiatan.jpg', '1662531673_izin lokasi kegiatan.jpg', '1662531673_surat rekomendasi.jpg', '', '1662531673_surat rekomendasi.jpg', '1662532168_pernyataan-keaslian (1).pdf', 1, NULL, NULL, '1662532306_sik sah.pdf', '', '', '2022-09-07 06:21:13', '2022-09-07 06:31:46'),
(27, 'sdsd', 'sdsd', 'sdsd', 'ssd', 'sdsd', 'sdsd', '2022-09-09 01:01:00', '2022-09-09 02:02:00', 'wewe', 'wewe', 1212, 1, '1662693462_izin lokasi kegiatan.jpg', '1662693462_izin lokasi kegiatan.jpg', '1662693462_nikolas.jpg', '1662693462_orang dan katp2.png', '1662693462_proposal kegiatan.jpg', '1662694029_pernyataan-keaslian.pdf', 1, NULL, NULL, NULL, '1662694029_foto ktp.jpg', '1662694029_orang dan katp2.png', '2022-09-09 03:17:42', '2022-09-09 03:27:09'),
(28, 'STT Wibhak', 'Dika Widya', 'Mahasiswa', 'Br. Pande Mengwi', '08787873892', 'Lomba', '2022-12-12 09:00:00', '2022-12-12 13:00:00', 'Balai Banjar', 'Ultah STT Wibhak', 250, 1, '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662695875_pernyataan-keaslian.pdf', '1662731233_proposal kegiatan.jpg', 1, NULL, NULL, NULL, '1662731233_foto ktp.jpg', '1662731233_orang dan katp2.png', '2022-09-09 03:57:55', '2022-09-09 13:47:13'),
(29, 'qw', 'qw', 'qw', 'qw', '12', 'qw', '0001-01-01 01:01:00', '0011-01-01 01:02:00', 'aas', 'as', 121212, 1, '1662731319_izin lokasi kegiatan.jpg', '1662731319_surat rekomendasi.jpg', '1662731319_proposal kegiatan.jpg', '1662731319_maudy.jpeg', '1662731319_orang dan katp2.png', '1662731655_maudy.jpeg', 1, NULL, NULL, NULL, '1662731655_foto ktp.jpg', '1662731655_izin lokasi kegiatan.jpg', '2022-09-09 13:48:39', '2022-09-09 13:54:15'),
(30, 'hjh', 'gjg', 'hkk', 'da', '898', 'tgwsgd', '2022-09-19 09:00:00', '2022-09-22 20:00:00', 'hgkjbk', 'esfca', 344, 1, '1662733730_proposal kegiatan.jpg', '1662733730_izin lokasi kegiatan.jpg', '1662733730_surat rekomendasi.jpg', '1662733730_foto ktp.jpg', '1662733730_surat rekomendasi.jpg', '1662733924_pernyataan-keaslian.pdf', 1, NULL, NULL, NULL, '1662733924_foto ktp.jpg', '1662733924_orang dan ktp.jpg', '2022-09-09 14:28:50', '2022-09-09 14:32:04'),
(32, 'Dupa Harum', 'Winayanti', 'PNS', 'Badung, Bali', '0987789897989', 'Sosialisasi', '2022-12-10 09:00:00', '2022-12-10 13:00:00', 'Balai Desa', 'HUT Kecamatan Mengwi', 300, 1, '1662969759_proposal kegiatan.jpg', '1662969759_izin lokasi kegiatan.jpg', '1662969759_surat rekomendasi.jpg', '1662969759_orang dan ktp.jpg', '1662969759_surat rekomendasi.jpg', '1662970221_pernyataan-keaslian_2.pdf', 6, NULL, NULL, '1662970278_sik winayanti.pdf', '1662970221_foto ktp.jpg', '1662970221_orang dan katp2.png', '2022-09-12 08:02:39', '2022-09-12 08:11:18'),
(36, 'Viva liga', 'Wira Pratama', 'PNS', 'Kapal, Badung', '087789898898', 'Sosialisasi', '2022-12-10 08:00:00', '2022-12-10 10:00:00', 'Balai Desa', 'HUT Desa Kapal', 250, 1, '1663127694_proposal kegiatan.jpg', '1663127694_izin lokasi kegiatan.jpg', '1663127694_surat rekomendasi.jpg', '1663127694_foto ktp.jpg', '1663127694_surat rekomendasi.jpg', '1663128065_pernyataan-keaslian_3.pdf', 8, NULL, NULL, '1663128149_sik wira.pdf', '1663128065_foto ktp.jpg', '1663128065_orang dan katp2.png', '2022-09-14 04:54:54', '2022-09-14 05:02:29'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1663140685_proposal kegiatan.jpg', '1663140685_izin lokasi kegiatan.jpg', '1663140685_izin lokasi kegiatan.jpg', '1663140685_foto ktp.jpg', '1663140685_surat rekomendasi.jpg', NULL, 8, NULL, NULL, NULL, NULL, NULL, '2022-09-14 08:31:25', '2022-09-14 08:31:25'),
(39, 'aa', 'aa', 'aa', 'aa', '098878787999', 'aa', '2022-12-12 10:00:00', '2022-12-12 11:00:00', 'aa', 'aa', 200, 1, '1663141668_proposal kegiatan.jpg', '1663141668_izin lokasi kegiatan.jpg', '1663141668_surat rekomendasi.jpg', '1663141668_foto ktp.jpg', '1663141668_surat rekomendasi.jpg', '1663141811_pernyataan-keaslian_3.pdf', 8, NULL, NULL, '1663141862_1663141562_aa.pdf', '1663141811_foto ktp.jpg', '1663141811_orang dan katp2.png', '2022-09-14 08:47:48', '2022-09-14 08:51:02'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1663142037_proposal kegiatan.jpg', '1663142037_izin lokasi kegiatan.jpg', '1663142037_surat rekomendasi.jpg', '1663142037_foto ktp.jpg', '1663142037_surat rekomendasi.jpg', NULL, 8, 'proposal kegiatan kurang lengkap', NULL, NULL, NULL, NULL, '2022-09-14 08:53:57', '2022-09-14 08:54:28'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1663143856_tugas_akhir_180030048_final.pdf', '1663143856_tugas_akhir_180030048_final.pdf', '1663143856_tugas_akhir_180030048_final.pdf', '', '1663143856_tugas_akhir_180030048_final.pdf', NULL, 8, NULL, NULL, NULL, NULL, NULL, '2022-09-14 09:24:16', '2022-09-14 09:24:16');

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
(2, 'Porsche Pachara Nattiwingpat', 'Chaopraya', '1994-02-28', 'bb', 'Warga Negara Indonesia', 'Thailand', '08112345678', '2022-07-12', 'Taman Ayun', 'KTM', '1657811738_foto profil.jpg', '1657811738_foto profil2.jpg', '1657811738_800_1318_kominfo.pdf', '', '', 1, '1663081281_cetak kartu rencana studi.pdf', '2022-07-14 15:15:38'),
(4, 'Kinn Tanakul', 'Guangshou', '1992-06-22', 'oio', 'Warga Negara Asing', 'Thailand', '0876767556', '2022-07-05', 'Depan indomart', 'STNK', '1657812418_foto profil.jpg', '1657812418_foto profil2.jpg', '1657812418_800_1318_kominfo.pdf', '1657812418_800_1318_kominfo.pdf', '', 1, '1658331803_laporan.pdf', '2022-07-14 15:26:58'),
(9, 'Olivia Rodrigo', 'Tapesan', '2011-11-11', 'Penyanyi', 'Warga Negara Asing', 'Br. Yangapi', '088988373939', '2020-05-07', 'Taman Ayun', 'Driver License', '1660314675_qq.jpg', '1660314675_qq.jpg', '1660314675_laporan.pdf', '', '1660314675_dokumen-pernyataan-keaslian (1).pdf', 1, NULL, '2022-08-12 14:31:15'),
(10, 'Mila Karmila', 'Badung', '1995-08-12', 'PNS', 'Warga Negara Indonesia', 'Kapal', '087887878789', '2021-06-22', 'Taman Ayun', 'Sertifikat Tanah', '1660315306_taeyang.jpg', '1660315306_qq.jpg', '1660315306_taeyang.jpg', '', '1660315306_dokumen-pernyataan-keaslian (1).pdf', 1, NULL, '2022-08-12 14:41:46'),
(11, 'Dewi Sandra', 'Kupang', '1989-12-12', 'Guru', 'Warga Negara Indonesia', 'NTT, Kupang', '08988989800', '2022-09-02', 'Depan Bank BCA Kupang', 'SIM', '1662530568_foto ktp.jpg', '1662530568_orang dan katp2.png', '1662530568_surat rekomendasi.jpg', '', '1662530568_pernyataan-keaslian.pdf', 1, '1662531079_sktlk sah.pdf', '2022-09-07 06:02:48'),
(12, 'Anjasmara', 'Bandung', '1993-09-10', 'Karyawan', 'Warga Negara Indonesia', 'Bogor', '089883789', '2022-01-08', 'Depan Indomart Bogor', 'Sertifikat Rumah', '1662605373_foto ktp.jpg', '1662605373_orang dan ktp.jpg', '1662605373_surat rekomendasi.jpg', '', '1662605373_pernyataan-keaslian.pdf', 1, '1662605575_laporan.pdf', '2022-09-08 02:49:33'),
(13, 'Adi Jaya', 'Denpasar', '1998-12-12', 'PNS', 'Warga Negara Indonesia', 'Denpasar, Bali', '0987789897989', '2022-12-08', 'Depan Indomart', 'KTP', '1662965019_foto ktp.jpg', '1662965019_orang dan ktp.jpg', '1662965019_surat rekomendasi.jpg', '', '1662965019_pernyataan-keaslian.pdf', 6, '1662969654_sktlk adi.pdf', '2022-09-12 06:43:39'),
(15, 'onastatia', 'nganjuk', '1998-12-06', 'PNS', 'Warga Negara Indonesia', 'Nganjuk, Jatim', '0867763883787', '2022-12-08', 'Depan Bank BCA', 'KTM', '1663125131_foto ktp.jpg', '1663125131_orang dan katp2.png', '1663125131_surat rekomendasi.jpg', '', '1663125131_pernyataan-keaslian.pdf', 6, '1663125296_sktlkonas.pdf', '2022-09-14 03:12:11'),
(16, 'Wira Pratama', 'Badung', '1992-12-12', 'PNS', 'Warga Negara Indonesia', 'Kapal, Badung', '087787768778', '2022-02-08', 'Depan Bank BCA', 'Kartu keluarga', '1663127302_foto ktp.jpg', '1663127302_orang dan katp2.png', '1663127302_surat rekomendasi.jpg', '', '1663127302_pernyataan-keaslian_2.pdf', 8, '1663127422_sktlk wira.pdf', '2022-09-14 03:48:22'),
(17, 'aa', 'aa', '1998-11-11', 'aa', 'Warga Negara Indonesia', 'bd', '09099988', '2022-12-10', 'aa', 'ktm', '1663140572_foto ktp.jpg', '1663140572_orang dan ktp.jpg', '1663140572_surat rekomendasi.jpg', '', '1663140572_pernyataan-keaslian.pdf', 8, NULL, '2022-09-14 07:29:32'),
(18, 'aa', 'aa', '1999-12-12', 'aa', 'Warga Negara Indonesia', 'aa', '09099988', '1999-12-12', 'aa', 'ktm', '1663141486_foto ktp.jpg', '1663141486_orang dan katp2.png', '1663141486_surat rekomendasi.jpg', '', '1663141486_pernyataan-keaslian_2.pdf', 8, '1663141562_aa.pdf', '2022-09-14 07:44:46'),
(19, 'galuh', 'denpasar', '2000-12-02', 'Mahasiswa', 'Warga Negara Indonesia', 'Badung, Bali', '087889900', '2022-12-08', 'Depan Indomart', 'KTM', '1663143317_foto ktp.jpg', '1663143317_orang dan katp2.png', '1663143317_surat rekomendasi.jpg', '', '1663143317_pernyataan-keaslian.pdf', 8, '1663143384_laporan galuh.pdf', '2022-09-14 08:15:17');

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
(67, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 26, 1, '2022-09-09 03:14:01'),
(68, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 27, 1, '2022-09-09 03:17:42'),
(69, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 27, 1, '2022-09-09 03:20:27'),
(70, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 27, 1, '2022-09-09 03:27:09'),
(71, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 28, 1, '2022-09-09 03:57:55'),
(72, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 28, 1, '2022-09-09 03:58:24'),
(73, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 28, 1, '2022-09-09 13:47:13'),
(74, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 29, 1, '2022-09-09 13:48:39'),
(75, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 29, 1, '2022-09-09 13:49:01'),
(76, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 29, 1, '2022-09-09 13:54:15'),
(77, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 30, 1, '2022-09-09 14:28:50'),
(78, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 30, 1, '2022-09-09 14:29:48'),
(79, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 30, 1, '2022-09-09 14:32:04'),
(80, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 31, 1, '2022-09-09 14:33:47'),
(81, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 13, 6, '2022-09-12 06:43:39'),
(82, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 13, 6, '2022-09-12 06:43:39'),
(83, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 13, 6, '2022-09-12 08:00:54'),
(84, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 32, 6, '2022-09-12 08:02:39'),
(85, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 32, 6, '2022-09-12 08:03:36'),
(86, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 32, 6, '2022-09-12 08:10:21'),
(87, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 32, 6, '2022-09-12 08:11:18'),
(88, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 33, 6, '2022-09-13 06:42:38'),
(89, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:02:17'),
(90, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:08:25'),
(91, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:09:50'),
(92, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:24:45'),
(93, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:26:42'),
(94, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:29:27'),
(95, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 33, 6, '2022-09-13 08:48:48'),
(96, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 34, 1, '2022-09-13 15:33:21'),
(97, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 35, 7, '2022-09-13 15:36:57'),
(98, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 35, 7, '2022-09-13 15:39:11'),
(99, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 0, 'pelapor', 35, 7, '2022-09-13 15:44:14'),
(100, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 0, 'pelapor', 35, 7, '2022-09-13 15:48:26'),
(101, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 0, 'pelapor', 35, 7, '2022-09-13 15:49:07'),
(102, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 0, 'pelapor', 14, 7, '2022-09-13 15:53:17'),
(103, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 14, 7, '2022-09-13 15:53:17'),
(104, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 0, 'pelapor', 2, 1, '2022-09-13 16:01:22'),
(105, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 0, 'pelapor', 14, 7, '2022-09-13 16:03:32'),
(106, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 0, 'pelapor', 14, 7, '2022-09-13 16:04:40'),
(107, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 15, 6, '2022-09-14 04:12:12'),
(108, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 15, 6, '2022-09-14 04:12:12'),
(109, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 0, 'pelapor', 15, 6, '2022-09-14 04:14:57'),
(110, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 16, 8, '2022-09-14 04:48:22'),
(111, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 16, 8, '2022-09-14 04:48:22'),
(112, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 16, 8, '2022-09-14 04:50:22'),
(113, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 36, 8, '2022-09-14 04:54:54'),
(114, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 36, 8, '2022-09-14 04:55:38'),
(115, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 36, 8, '2022-09-14 05:01:05'),
(116, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 36, 8, '2022-09-14 05:02:30'),
(117, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 37, 8, '2022-09-14 05:04:43'),
(118, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 37, 8, '2022-09-14 05:05:03'),
(119, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 17, 8, '2022-09-14 08:29:32'),
(120, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 17, 8, '2022-09-14 08:29:32'),
(121, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 38, 8, '2022-09-14 08:31:26'),
(122, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 1, 'pelapor', 18, 8, '2022-09-14 08:44:47'),
(123, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 18, 8, '2022-09-14 08:44:47'),
(124, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 1, 'pelapor', 18, 8, '2022-09-14 08:46:02'),
(125, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 39, 8, '2022-09-14 08:47:48'),
(126, 'Dokumen SIK Disetujui', 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.', 'sik', 1, 'pelapor', 39, 8, '2022-09-14 08:48:13'),
(127, 'Data Pelaporan SIK Masuk', 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.', 'sik', 1, 'admin', 39, 8, '2022-09-14 08:50:12'),
(128, 'Surat Izin Keramaian Diterima', 'Surat izin keramaian dapat diunduh disini.', 'sik', 1, 'pelapor', 39, 8, '2022-09-14 08:51:02'),
(129, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 1, 'admin', 40, 8, '2022-09-14 08:53:58'),
(130, 'Dokumen SIK Ditolak', 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.', 'sik', 1, 'pelapor', 40, 8, '2022-09-14 08:54:28'),
(131, 'Pelaporan SKTLK Berhasil', 'Anda berhasil melakukan pelaporan SKTLK dan sedang dalam proses.', 'sktlk', 0, 'pelapor', 19, 8, '2022-09-14 09:15:17'),
(132, 'Pelaporan SKTLK Masuk', 'Pelaporan perlu diproses.', 'sktlk', 1, 'admin', 19, 8, '2022-09-14 09:15:17'),
(133, 'Pelaporan SKTLK Telah Disetujui', 'Dokumen persetujuan SKTLK dapat diunduh disini.', 'sktlk', 0, 'pelapor', 19, 8, '2022-09-14 09:16:24'),
(134, 'Dokumen Persyaratan SIK Masuk', 'Dokumen perlu pengecekkan kelengkapan.', 'sik', 0, 'admin', 41, 8, '2022-09-14 09:24:16');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
