-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 04.50
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
-- Database: `spkt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_lokasi_kejadian`
--

CREATE TABLE `detail_lokasi_kejadian` (
  `ID_LOKASI_KEJADIAN` char(3) NOT NULL,
  `ID_KECAMATAN` char(3) DEFAULT NULL,
  `NAMA_LOKASI_KEJADIAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `ID_DIVISI` char(3) NOT NULL,
  `NAMA_DIVISI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_j`
--

CREATE TABLE `d_j` (
  `ID_JABATAN` char(3) NOT NULL,
  `ID_DIVISI` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `ID_JABATAN` char(3) NOT NULL,
  `NAMA_JABATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `ID_KECAMATAN` char(3) NOT NULL,
  `NAMA_KECAMATAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_sik`
--

CREATE TABLE `lapor_sik` (
  `ID_SIK` char(3) NOT NULL,
  `ID_LOKASI_KEJADIAN` char(3) NOT NULL,
  `ID_PELAPOR` char(3) NOT NULL,
  `NAMA_ORGANISASI` varchar(255) DEFAULT NULL,
  `BENTUK_KEGIATAN` varchar(255) DEFAULT NULL,
  `WAKTU_MULAI` datetime(3) DEFAULT NULL,
  `WAKTU_SELESAI` datetime(3) DEFAULT NULL,
  `DALAM_RANGKA` varchar(255) DEFAULT NULL,
  `JUMLAH_UNDANGAN` varchar(3) DEFAULT NULL,
  `PROPOSAL_KEGIATAN` varchar(255) DEFAULT NULL,
  `IZIN_TEMPAT` varchar(255) DEFAULT NULL,
  `IZIN_INSTANSI` varchar(255) DEFAULT NULL,
  `REKOMENDASI_POLSEK` varchar(255) DEFAULT NULL,
  `TGL_LAPOR_SIK` binary(8) DEFAULT NULL,
  `FOTO_KTP_SIK` varchar(255) DEFAULT NULL,
  `STATUS_LAPOR_SIK` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_sktlk`
--

CREATE TABLE `lapor_sktlk` (
  `ID_SKTLK` char(3) NOT NULL,
  `ID_PELAPOR` char(3) NOT NULL,
  `ID_LOKASI_KEJADIAN` char(3) NOT NULL,
  `SURAT_HILANG` varchar(255) DEFAULT NULL,
  `FOTO_KTP_PELAPOR_SKTLK` varchar(255) DEFAULT NULL,
  `TGL_LAPOR_SKTLK` binary(8) DEFAULT NULL,
  `TGL_KEJADIAN_SKTLK` datetime(3) DEFAULT NULL,
  `STATUS_LAPOR_SKTLK` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_sp2hp`
--

CREATE TABLE `lapor_sp2hp` (
  `ID_SP2HP` char(3) NOT NULL,
  `ID_LOKASI_KEJADIAN` char(3) NOT NULL,
  `ID_PELAPOR` char(3) NOT NULL,
  `JUDUL_LAPORAN` varchar(255) DEFAULT NULL,
  `ISI_LAPORAN` varchar(255) DEFAULT NULL,
  `DETAIL_LOKASI_KEJADIAN` varchar(255) DEFAULT NULL,
  `KATEGORI` varchar(255) DEFAULT NULL,
  `TERLAPOR` varchar(255) DEFAULT NULL,
  `BUKTI` varchar(255) DEFAULT NULL,
  `SAKSI` varchar(255) DEFAULT NULL,
  `FILE_PEMBERITAHUAN_SP2HP` varchar(255) DEFAULT NULL,
  `NOMOR_POLISI` varchar(255) DEFAULT NULL,
  `TANGGAL_KEJADIAN_SP2HP` datetime(3) DEFAULT NULL,
  `FOTO_KTP_SP2HP` varchar(255) DEFAULT NULL,
  `TGL_LAPOR_SP2HP` datetime(3) DEFAULT NULL,
  `STATUS_LAPOR_SP2HP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `ID_NOTIFIKASI` char(3) NOT NULL,
  `NAMA_NOTIFIKASI` varchar(255) DEFAULT NULL,
  `ISI_NOTIFIKASI` varchar(255) DEFAULT NULL,
  `STATUS_NOTIFIKASI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_hist_sik`
--

CREATE TABLE `notif_hist_sik` (
  `ID_NOTIFIKASI` char(3) NOT NULL,
  `ID_SIK` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP_SIK` char(3) NOT NULL,
  `TGL_NOTIF_SIK` datetime(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_hist_sktlk`
--

CREATE TABLE `notif_hist_sktlk` (
  `ID_NOTIFIKASI` char(3) NOT NULL,
  `ID_SKTLK` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP` char(3) NOT NULL,
  `TGL_NOTIF_SKTLK` datetime(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_hist_sp2hp`
--

CREATE TABLE `notif_hist_sp2hp` (
  `ID_SP2HP` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP_SP2HP` char(3) NOT NULL,
  `ID_NOTIFIKASI` char(3) NOT NULL,
  `TGL_NOTIF_SP2HP` datetime(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_JABATAN` char(3) NOT NULL,
  `ID_DIVISI` char(3) NOT NULL,
  `NAMA_PEGAWAI` varchar(255) DEFAULT NULL,
  `EMAIL_PEGAWAI` varchar(255) DEFAULT NULL,
  `ALAMAT_PEGAWAI` varchar(255) DEFAULT NULL,
  `TELEPON_PEGAWAI` varchar(13) DEFAULT NULL,
  `USERNAME_PEGAWAI` varchar(255) DEFAULT NULL,
  `PASSWORD_PEGAWAI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `ID_PELAPOR` char(3) NOT NULL,
  `NAMA_LENGKAP` varchar(255) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(255) DEFAULT NULL,
  `TANGGAL_LAHIR` datetime(3) DEFAULT NULL,
  `TELEPON_PELAPOR` varchar(13) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(255) DEFAULT NULL,
  `ALAMAT_PELAPOR` varchar(255) DEFAULT NULL,
  `USERNAME_PELAPOR` varchar(255) DEFAULT NULL,
  `PASSWORD_PELAPOR` varchar(255) DEFAULT NULL,
  `EMAIL_PELAPOR` varchar(255) DEFAULT NULL,
  `STATUS_PELAPOR` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`ID_PELAPOR`, `NAMA_LENGKAP`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `TELEPON_PELAPOR`, `JENIS_KELAMIN`, `ALAMAT_PELAPOR`, `USERNAME_PELAPOR`, `PASSWORD_PELAPOR`, `EMAIL_PELAPOR`, `STATUS_PELAPOR`) VALUES
('P06', 'Robert', 'New York', '2000-12-12 00:00:00.000', '089222111222', 'Laki-laki', 'New York', 'robert', '$2y$10$P7frH6YE0a8H6YSZZjbaMeweU7XlmEa4LuSNF0kD9SY28Y/Z6643q', 'ariesetiadi.edu@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `r_p_sik`
--

CREATE TABLE `r_p_sik` (
  `ID_SIK` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP_SIK` char(3) NOT NULL,
  `TGL_PROSES_SIK` datetime(3) DEFAULT NULL,
  `TGL_NOTIFIKASI_SIK` datetime(3) DEFAULT NULL,
  `KETERANGAN_SIK` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `r_p_sktlk`
--

CREATE TABLE `r_p_sktlk` (
  `ID_SKTLK` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP` char(3) NOT NULL,
  `TGL_PROSES` datetime(3) DEFAULT NULL,
  `TGL_NOTIFIKASI` datetime(3) DEFAULT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `r_p_sp2hp`
--

CREATE TABLE `r_p_sp2hp` (
  `ID_SP2HP` char(3) NOT NULL,
  `ID_PEGAWAI` char(3) NOT NULL,
  `ID_RP_SP2HP` char(3) NOT NULL,
  `TGL_PROSES_SP2HP` datetime(3) DEFAULT NULL,
  `TGL_NOTIFIKASI_SP2HP` datetime(3) DEFAULT NULL,
  `KETERANGAN_SP2HP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_lokasi_kejadian`
--
ALTER TABLE `detail_lokasi_kejadian`
  ADD PRIMARY KEY (`ID_LOKASI_KEJADIAN`),
  ADD KEY `MELIPUTI_5_FK` (`ID_KECAMATAN`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`ID_DIVISI`);

--
-- Indeks untuk tabel `d_j`
--
ALTER TABLE `d_j`
  ADD PRIMARY KEY (`ID_JABATAN`,`ID_DIVISI`),
  ADD KEY `MEMILIKI_FK` (`ID_DIVISI`),
  ADD KEY `MEMPUNYAI_FK` (`ID_JABATAN`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`ID_KECAMATAN`);

--
-- Indeks untuk tabel `lapor_sik`
--
ALTER TABLE `lapor_sik`
  ADD PRIMARY KEY (`ID_SIK`),
  ADD KEY `RELATION_224_FK` (`ID_LOKASI_KEJADIAN`),
  ADD KEY `MELAKUKAN_FK` (`ID_PELAPOR`);

--
-- Indeks untuk tabel `lapor_sktlk`
--
ALTER TABLE `lapor_sktlk`
  ADD PRIMARY KEY (`ID_SKTLK`),
  ADD KEY `MELAPORKAN_1_FK` (`ID_PELAPOR`),
  ADD KEY `RELATION_377_FK` (`ID_LOKASI_KEJADIAN`);

--
-- Indeks untuk tabel `lapor_sp2hp`
--
ALTER TABLE `lapor_sp2hp`
  ADD PRIMARY KEY (`ID_SP2HP`),
  ADD KEY `MELIPUTI_3_FK` (`ID_LOKASI_KEJADIAN`),
  ADD KEY `MELAPORKAN_3_FK` (`ID_PELAPOR`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`ID_NOTIFIKASI`);

--
-- Indeks untuk tabel `notif_hist_sik`
--
ALTER TABLE `notif_hist_sik`
  ADD PRIMARY KEY (`ID_NOTIFIKASI`,`ID_SIK`,`ID_PEGAWAI`,`ID_RP_SIK`),
  ADD KEY `MENGHASILKAN_6_FK2` (`ID_NOTIFIKASI`),
  ADD KEY `MENGHASILKAN_6_FK` (`ID_SIK`,`ID_PEGAWAI`,`ID_RP_SIK`);

--
-- Indeks untuk tabel `notif_hist_sktlk`
--
ALTER TABLE `notif_hist_sktlk`
  ADD PRIMARY KEY (`ID_NOTIFIKASI`,`ID_SKTLK`,`ID_PEGAWAI`,`ID_RP`),
  ADD KEY `MENGHASILKAN_3_FK2` (`ID_NOTIFIKASI`),
  ADD KEY `MENGHASILKAN_3_FK` (`ID_SKTLK`,`ID_PEGAWAI`,`ID_RP`);

--
-- Indeks untuk tabel `notif_hist_sp2hp`
--
ALTER TABLE `notif_hist_sp2hp`
  ADD PRIMARY KEY (`ID_SP2HP`,`ID_PEGAWAI`,`ID_RP_SP2HP`,`ID_NOTIFIKASI`),
  ADD KEY `RELATION_374_FK2` (`ID_SP2HP`,`ID_PEGAWAI`,`ID_RP_SP2HP`),
  ADD KEY `RELATION_374_FK` (`ID_NOTIFIKASI`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`),
  ADD KEY `MENGHASILKAN_FK` (`ID_JABATAN`,`ID_DIVISI`);

--
-- Indeks untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`ID_PELAPOR`);

--
-- Indeks untuk tabel `r_p_sik`
--
ALTER TABLE `r_p_sik`
  ADD PRIMARY KEY (`ID_SIK`,`ID_PEGAWAI`,`ID_RP_SIK`),
  ADD KEY `MENGHASILKAN_4_FK` (`ID_PEGAWAI`),
  ADD KEY `MENGHASILKAN_5_FK` (`ID_SIK`);

--
-- Indeks untuk tabel `r_p_sktlk`
--
ALTER TABLE `r_p_sktlk`
  ADD PRIMARY KEY (`ID_SKTLK`,`ID_PEGAWAI`,`ID_RP`),
  ADD KEY `MENGHASILKAN_2_FK` (`ID_PEGAWAI`),
  ADD KEY `MEMPROSES_2_FK` (`ID_SKTLK`);

--
-- Indeks untuk tabel `r_p_sp2hp`
--
ALTER TABLE `r_p_sp2hp`
  ADD PRIMARY KEY (`ID_SP2HP`,`ID_PEGAWAI`,`ID_RP_SP2HP`),
  ADD KEY `MEMPROSES_3_FK` (`ID_SP2HP`),
  ADD KEY `MENGHASILKAN_7_FK` (`ID_PEGAWAI`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_lokasi_kejadian`
--
ALTER TABLE `detail_lokasi_kejadian`
  ADD CONSTRAINT `FK_DETAIL_L_MELIPUTI__KECAMATA` FOREIGN KEY (`ID_KECAMATAN`) REFERENCES `kecamatan` (`ID_KECAMATAN`);

--
-- Ketidakleluasaan untuk tabel `d_j`
--
ALTER TABLE `d_j`
  ADD CONSTRAINT `FK_D_J_MEMILIKI_DIVISI` FOREIGN KEY (`ID_DIVISI`) REFERENCES `divisi` (`ID_DIVISI`),
  ADD CONSTRAINT `FK_D_J_MEMPUNYAI_JABATAN` FOREIGN KEY (`ID_JABATAN`) REFERENCES `jabatan` (`ID_JABATAN`);

--
-- Ketidakleluasaan untuk tabel `lapor_sik`
--
ALTER TABLE `lapor_sik`
  ADD CONSTRAINT `FK_LAPOR_SI_MELAKUKAN_PELAPOR` FOREIGN KEY (`ID_PELAPOR`) REFERENCES `pelapor` (`ID_PELAPOR`),
  ADD CONSTRAINT `FK_LAPOR_SI_RELATION__DETAIL_L` FOREIGN KEY (`ID_LOKASI_KEJADIAN`) REFERENCES `detail_lokasi_kejadian` (`ID_LOKASI_KEJADIAN`);

--
-- Ketidakleluasaan untuk tabel `lapor_sktlk`
--
ALTER TABLE `lapor_sktlk`
  ADD CONSTRAINT `FK_LAPOR_SK_MELAPORKA_PELAPOR` FOREIGN KEY (`ID_PELAPOR`) REFERENCES `pelapor` (`ID_PELAPOR`),
  ADD CONSTRAINT `FK_LAPOR_SK_RELATION__DETAIL_L` FOREIGN KEY (`ID_LOKASI_KEJADIAN`) REFERENCES `detail_lokasi_kejadian` (`ID_LOKASI_KEJADIAN`);

--
-- Ketidakleluasaan untuk tabel `lapor_sp2hp`
--
ALTER TABLE `lapor_sp2hp`
  ADD CONSTRAINT `FK_LAPOR_SP_MELAPORKA_PELAPOR` FOREIGN KEY (`ID_PELAPOR`) REFERENCES `pelapor` (`ID_PELAPOR`),
  ADD CONSTRAINT `FK_LAPOR_SP_MELIPUTI__DETAIL_L` FOREIGN KEY (`ID_LOKASI_KEJADIAN`) REFERENCES `detail_lokasi_kejadian` (`ID_LOKASI_KEJADIAN`);

--
-- Ketidakleluasaan untuk tabel `notif_hist_sik`
--
ALTER TABLE `notif_hist_sik`
  ADD CONSTRAINT `FK_NOTIF_HI_MENGHASIL_R_P_SIK` FOREIGN KEY (`ID_SIK`,`ID_PEGAWAI`,`ID_RP_SIK`) REFERENCES `r_p_sik` (`ID_SIK`, `ID_PEGAWAI`, `ID_RP_SIK`),
  ADD CONSTRAINT `FK_NOTIF_HI_NOTIF_SIK` FOREIGN KEY (`ID_NOTIFIKASI`) REFERENCES `notifikasi` (`ID_NOTIFIKASI`);

--
-- Ketidakleluasaan untuk tabel `notif_hist_sktlk`
--
ALTER TABLE `notif_hist_sktlk`
  ADD CONSTRAINT `FK_NOTIF_HI_MENGHASIL_R_P_SKTL` FOREIGN KEY (`ID_SKTLK`,`ID_PEGAWAI`,`ID_RP`) REFERENCES `r_p_sktlk` (`ID_SKTLK`, `ID_PEGAWAI`, `ID_RP`),
  ADD CONSTRAINT `FK_NOTIF_HI_NOTIF_SKTLK` FOREIGN KEY (`ID_NOTIFIKASI`) REFERENCES `notifikasi` (`ID_NOTIFIKASI`);

--
-- Ketidakleluasaan untuk tabel `notif_hist_sp2hp`
--
ALTER TABLE `notif_hist_sp2hp`
  ADD CONSTRAINT `FK_NOTIF_HI_NOTIF_HIS_NOTIFIKA` FOREIGN KEY (`ID_NOTIFIKASI`) REFERENCES `notifikasi` (`ID_NOTIFIKASI`),
  ADD CONSTRAINT `FK_NOTIF_HI_RELATION__R_P_SP2H` FOREIGN KEY (`ID_SP2HP`,`ID_PEGAWAI`,`ID_RP_SP2HP`) REFERENCES `r_p_sp2hp` (`ID_SP2HP`, `ID_PEGAWAI`, `ID_RP_SP2HP`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_PEGAWAI_MENGHASIL_D_J` FOREIGN KEY (`ID_JABATAN`,`ID_DIVISI`) REFERENCES `d_j` (`ID_JABATAN`, `ID_DIVISI`);

--
-- Ketidakleluasaan untuk tabel `r_p_sik`
--
ALTER TABLE `r_p_sik`
  ADD CONSTRAINT `FK_R_P_SIK_MENGHASIL_LAPOR_SI` FOREIGN KEY (`ID_SIK`) REFERENCES `lapor_sik` (`ID_SIK`),
  ADD CONSTRAINT `FK_R_P_SIK_MENGHASIL_PEGAWAI` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Ketidakleluasaan untuk tabel `r_p_sktlk`
--
ALTER TABLE `r_p_sktlk`
  ADD CONSTRAINT `FK_R_P_SKTL_MEMPROSES_LAPOR_SK` FOREIGN KEY (`ID_SKTLK`) REFERENCES `lapor_sktlk` (`ID_SKTLK`),
  ADD CONSTRAINT `FK_R_P_SKTL_MENGHASIL_PEGAWAI` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Ketidakleluasaan untuk tabel `r_p_sp2hp`
--
ALTER TABLE `r_p_sp2hp`
  ADD CONSTRAINT `FK_R_P_SP2H_MEMPROSES_LAPOR_SP` FOREIGN KEY (`ID_SP2HP`) REFERENCES `lapor_sp2hp` (`ID_SP2HP`),
  ADD CONSTRAINT `FK_R_P_SP2H_MENGHASIL_PEGAWAI` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
