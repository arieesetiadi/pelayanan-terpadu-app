-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 06:56 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `diunggah_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2022_07_14_141016_create_laporan_sik_table', 3);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`),
  ADD KEY `laporan_id` (`laporan_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_sktlk`
--
ALTER TABLE `laporan_sktlk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notifikasi_ibfk_2` FOREIGN KEY (`laporan_id`) REFERENCES `laporan_sktlk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
