-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2018 pada 01.52
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusi`
--

CREATE TABLE `distribusi` (
  `id` int(11) NOT NULL,
  `tujuan` int(10) UNSIGNED NOT NULL,
  `smund_id` int(11) UNSIGNED DEFAULT NULL,
  `smumum_id` int(11) UNSIGNED DEFAULT NULL,
  `status_baca` enum('unread','read','') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `distribusi`
--

INSERT INTO `distribusi` (`id`, `tujuan`, `smund_id`, `smumum_id`, `status_baca`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 10, 'unread', '2017-08-20 06:54:06', '2017-08-20 06:54:06'),
(2, 2, 2, NULL, 'unread', '2017-08-20 18:06:25', '2017-08-20 18:06:25'),
(3, 5, 3, NULL, 'unread', '2017-08-20 18:07:20', '2017-08-20 18:07:20'),
(4, 9, 4, NULL, 'unread', '2017-08-20 18:08:04', '2017-08-20 18:08:04'),
(5, 7, 5, NULL, 'unread', '2017-08-20 18:09:22', '2017-08-20 18:09:22'),
(6, 12, 6, NULL, 'unread', '2017-08-20 18:09:50', '2017-08-20 18:09:50'),
(7, 4, 7, NULL, 'unread', '2017-08-20 18:10:19', '2017-08-20 18:10:19'),
(8, 13, 8, NULL, 'unread', '2017-08-20 18:10:38', '2017-08-20 18:10:38'),
(9, 4, 9, NULL, 'unread', '2017-08-20 18:11:12', '2017-08-20 18:11:12'),
(10, 8, 9, NULL, 'unread', '2017-08-20 18:11:12', '2017-08-20 18:11:12'),
(11, 2, 10, NULL, 'unread', '2017-08-20 18:11:43', '2017-08-20 18:11:43'),
(12, 1, 11, NULL, 'read', '2017-08-20 18:12:09', '2017-08-20 18:53:55'),
(13, 2, NULL, 1, 'unread', '2017-08-20 18:18:47', '2017-08-20 18:18:47'),
(14, 2, NULL, 2, 'unread', '2017-08-20 18:20:33', '2017-08-20 18:20:33'),
(15, 7, NULL, 2, 'unread', '2017-08-20 18:20:33', '2017-08-20 18:20:33'),
(16, 4, NULL, 3, 'unread', '2017-08-20 18:21:18', '2017-08-20 18:21:18'),
(17, 8, NULL, 3, 'unread', '2017-08-20 18:21:19', '2017-08-20 18:21:19'),
(18, 2, NULL, 4, 'unread', '2017-08-20 18:21:58', '2017-08-20 18:21:58'),
(19, 8, NULL, 4, 'unread', '2017-08-20 18:21:58', '2017-08-20 18:21:58'),
(20, 2, NULL, 5, 'unread', '2017-08-20 18:23:01', '2017-08-20 18:23:01'),
(21, 8, NULL, 5, 'unread', '2017-08-20 18:23:01', '2017-08-20 18:23:01'),
(22, 2, NULL, 6, 'unread', '2017-08-20 18:23:27', '2017-08-20 18:23:27'),
(23, 1, NULL, 7, 'read', '2017-08-20 18:23:57', '2017-08-20 18:27:51'),
(24, 12, NULL, 8, 'unread', '2017-08-20 18:24:35', '2017-08-20 18:24:35'),
(25, 6, NULL, 9, 'unread', '2017-08-20 18:25:08', '2017-08-20 18:25:08'),
(26, 7, NULL, 9, 'unread', '2017-08-20 18:25:08', '2017-08-20 18:25:08'),
(27, 1, 12, NULL, 'unread', '2017-08-21 00:38:06', '2017-08-21 00:38:06'),
(28, 4, 12, NULL, 'unread', '2017-08-21 00:38:07', '2017-08-21 00:38:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `nama_departemen`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-06-07 15:22:41', '2017-06-07 15:22:41'),
(2, 'KASI PROGRAM & PERENCANAAN UMUM (PROG PU)', '2017-06-07 15:22:55', '2017-06-07 15:22:55'),
(3, 'KASI PELAKSANAAN (PELAK)', '2017-06-07 15:23:22', '2017-06-07 15:23:22'),
(4, 'KASI OPERASI & PEMELIHARAAN (OP)', '2017-06-07 15:23:30', '2017-06-07 15:23:30'),
(5, 'KA.SATKER BWS NT I (SATKER BWS)', '2017-06-07 15:23:36', '2017-06-07 15:23:36'),
(6, 'KA.SATKER OP SDA (SATKER OP SDA)', '2017-06-07 15:23:42', '2017-06-07 15:23:42'),
(7, 'KA.SNVT PELAKSANAAN JARINGAN SUMBER AIR NT I (PJSA)', '2017-06-07 15:23:48', '2017-06-07 15:23:48'),
(8, 'KA.SNVT PELAKSANAAN JARINGAN PEMANFAATAN AIR NT I (PJPA)', '2017-06-07 15:23:56', '2017-06-07 15:23:56'),
(9, 'KA.SNVT PEMBANGUNAN BENDUNGAN NT I (PB NT I)', '2017-06-07 15:24:03', '2017-06-07 15:24:03'),
(10, 'PENGUJI/PEJABAT PEMBUAT SPM (PEJABAT SPM)', '2017-06-07 15:24:25', '2017-06-07 15:24:25'),
(11, 'BENDAHARA PENGELUARAN (BENDAHARA)', '2017-06-07 15:24:32', '2017-06-07 15:24:32'),
(12, 'PEJABAT PELAPORAN', '2017-06-07 15:24:39', '2017-06-07 15:24:39'),
(13, 'UNIT LAYANAAN PENGADAAN (ULP)', '2017-06-07 15:24:45', '2017-06-07 15:24:45'),
(14, 'KETUA BWS NT I', '2017-06-08 04:28:57', '2017-06-08 04:30:28'),
(15, 'Agendaris', '2017-06-08 04:30:42', '2017-06-08 04:30:42'),
(16, 'Arsip BWS NT I', '2017-07-01 04:38:41', '2017-07-01 04:38:41'),
(17, 'Administrator', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_surat_keluar`
--

CREATE TABLE `file_surat_keluar` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proggress','unread','read','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_surat_keluar`
--

INSERT INTO `file_surat_keluar` (`id`, `staff_bagian`, `perihal`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', 'Pengambilan Data', 'upload/file_surat/1.jpg', 'read', '2017-08-19 00:21:38', '2017-08-19 00:42:36'),
(2, 'KA.SUBAG TATA USAHA (TU)', 'standar satuan harga bahan T.A 2017', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:32:38', '2017-08-20 19:08:24'),
(3, 'KA.SUBAG TATA USAHA (TU)', 'Ttg. penunjukan tenaga pendukung swaklah perencanaan program', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:35:19', '2017-08-20 21:47:04'),
(4, 'KA.SUBAG TATA USAHA (TU)', 'usulan kenaikan pangkat pilihan jafung tertentu', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:37:15', '2017-08-20 21:47:04'),
(5, 'KA.SUBAG TATA USAHA (TU)', 'surat cuti bersalin ahdelena', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:38:19', '2017-08-20 21:46:10'),
(6, 'KA.SUBAG TATA USAHA (TU)', 'permohonan observasi awal', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:39:18', '2017-08-20 21:46:09'),
(7, 'KA.SUBAG TATA USAHA (TU)', 'permohonan pindah tugas', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:40:14', '2017-08-20 21:46:07'),
(10, 'KA.SUBAG TATA USAHA (TU)', 'ttg. pemb. tim/ inventarisasi BMN berupa rumah negara gol.1 dan non status dst.', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:43:07', '2017-08-20 21:46:06'),
(11, 'KA.SUBAG TATA USAHA (TU)', 'surat perjanjian kerja an. sulistya puspita rahayu, S.T', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:44:55', '2017-08-20 21:46:04'),
(12, 'KA.SUBAG TATA USAHA (TU)', 'und. peserta pembinaan generasi muda PUPR anti korupsi & narkoba Gel. III-V', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:47:02', '2017-08-20 21:46:03'),
(13, 'KA.SUBAG TATA USAHA (TU)', 'und. rapat dalam rangka hari air', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:48:00', '2017-08-20 21:46:01'),
(14, 'KA.SUBAG TATA USAHA (TU)', 'permohonan peminjaman tempat kegiatan', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:49:19', '2017-08-20 21:45:58'),
(15, 'KA.SUBAG TATA USAHA (TU)', 'ttg. penunjukan petugas/ pekerja penunjang kegiatan utk. kegiatan lab. mekanika dst.', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:50:53', '2017-08-20 21:45:57'),
(16, 'KA.SUBAG TATA USAHA (TU)', 'pelaksanaan pengawasan dan pengendalian (WASDAPAL) BMN', 'upload/file_surat/1.txt', 'read', '2017-08-20 18:53:01', '2017-08-20 21:45:51'),
(17, 'KA.SUBAG TATA USAHA (TU)', 'Perihal', 'upload/file_surat/1.txt', 'unread', '2017-08-20 23:25:44', '2017-08-20 23:34:47'),
(18, 'KA.SUBAG TATA USAHA (TU)', 'Pesanan spare part dan pemeliharaan suku cadang unit kandis roda 4', 'upload/file_surat/surat.JPG', 'proggress', '2017-08-20 23:38:15', '2017-08-20 23:38:15'),
(19, 'KA.SUBAG TATA USAHA (TU)', 'Bar internal data BMN dst', 'upload/file_surat/SURAT DINAS PU.jpg', 'proggress', '2017-08-20 23:40:17', '2017-08-20 23:40:17'),
(20, 'KA.SUBAG TATA USAHA (TU)', 'Penyusunan RKP 2017 penembusan puk akhir 2015 dan puk awal 2016 dan penyusunan pk ta 2016', 'upload/file_surat/SURAT DINAS PU.jpg', 'proggress', '2017-08-20 23:42:22', '2017-08-20 23:42:22'),
(21, 'KA.SUBAG TATA USAHA (TU)', 'spt.an.ir. gede suardiari.dalam rangka pengumpulan data hujan terkait banjir di bima', 'upload/file_surat/SURAT DINAS PU.jpg', 'proggress', '2017-08-20 23:44:06', '2017-08-20 23:44:06'),
(22, 'KA.SUBAG TATA USAHA (TU)', 'Pesanan barang alat tulis kantor', 'upload/file_surat/SURAT DINAS PU.jpg', 'proggress', '2017-08-20 23:44:57', '2017-08-20 23:44:57'),
(23, 'KA.SUBAG TATA USAHA (TU)', 'penangananan banjir d bima', 'upload/file_surat/SURAT DINAS PU.jpg', 'proggress', '2017-08-21 00:40:21', '2017-08-21 00:40:21');

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
(1, '2017_04_20_051137_admin', 1),
(2, '2017_04_20_051137_tbl_smumum', 1),
(3, '2017_04_20_051137_tbl_smund', 1),
(4, '2017_04_20_051138_tbl_disposisi', 1),
(5, '2017_04_20_051141_tbl_filesk', 1),
(6, '2017_04_20_100626_tbl_distribusi', 1),
(7, '2017_04_29_062016_tbl_sksppd', 1),
(8, '2017_04_29_062330_tbl_skbws', 1),
(9, '2017_04_29_062430_tbl_sksatker', 1),
(10, '2017_04_29_062458_tbl_skppkttl', 1),
(11, '2017_04_29_062531_tbl_sms', 1),
(12, '2017_04_29_062554_tbl_sksppdttl', 1),
(13, '2017_05_17_063341_tbl_divisi', 1),
(14, '2017_05_30_125201_user', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skbws`
--

CREATE TABLE `skbws` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skbws`
--

INSERT INTO `skbws` (`id`, `staff_bagian`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `filesk_id`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KU', '2/UM.02.07/BWS NT I/002/2017', '2', 2, '2017-08-20 19:01:06', '2017-08-20 19:01:06'),
(2, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '3/003/KPTS/BWS-NT I/2017', '3', 3, '2017-08-20 19:15:06', '2017-08-20 19:15:06'),
(3, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '4/KP.03.02/BWS NT I/2017', '4', 4, '2017-08-20 19:22:49', '2017-08-20 19:22:49'),
(4, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '5/SC/BWS NT /2017', '5', 5, '2017-08-20 21:01:11', '2017-08-20 21:01:11'),
(5, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'PD', '6/PD.02.04-AS/BWS NT I/2017', '6', 6, '2017-08-20 21:05:08', '2017-08-20 21:05:08'),
(6, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '7/KP.03.04-AS/BWS-NT I/007/2017', '7', 7, '2017-08-20 21:11:55', '2017-08-20 21:11:55'),
(7, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '10/KPTS/BWS NT I/2017', '10', 10, '2017-08-20 21:13:46', '2017-08-20 21:13:46'),
(8, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'IK', '11/IK.02.04-AS/SPK-TL/Sat.BWS-NTI/2017', '11', 11, '2017-08-20 21:15:52', '2017-08-20 21:15:52'),
(9, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'UM', '12/UM.02.06-AS/BWS NT I/2017', '12', 12, '2017-08-20 21:18:00', '2017-08-20 21:18:00'),
(10, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'UM', '13/UM.02.06.AS/2017', '13', 13, '2017-08-20 21:19:17', '2017-08-20 21:19:17'),
(11, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'PR', '14/PR.01.04-AS/BWS NT I/2017', '14', 14, '2017-08-20 21:28:22', '2017-08-20 21:28:22'),
(12, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'KP', '15/KPTS/Sat. BWS NT I/2017', '15', 15, '2017-08-20 21:30:06', '2017-08-20 21:30:06'),
(13, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'PW', '16/PW.01.02-AS/BWS NT I/2017', '16', 16, '2017-08-20 21:33:06', '2017-08-20 21:33:52'),
(14, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'HK', '17/HK.01.04/VI/17', '17', 17, '2017-08-20 23:33:47', '2017-08-20 23:33:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skppd`
--

CREATE TABLE `skppd` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skppd`
--

INSERT INTO `skppd` (`id`, `staff_bagian`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `filesk_id`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'PD', '21/PD.01.04/VIII/17', '21', 21, '2017-08-20 23:47:04', '2017-08-20 23:47:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skppdttl`
--

CREATE TABLE `skppdttl` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skppdttl`
--

INSERT INTO `skppdttl` (`id`, `staff_bagian`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `filesk_id`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'UM', '22/UM.02.04/VIII/17', '22', 22, '2017-08-20 23:48:56', '2017-08-20 23:48:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skppkttl`
--

CREATE TABLE `skppkttl` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skppkttl`
--

INSERT INTO `skppkttl` (`id`, `staff_bagian`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `filesk_id`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'UM', '18/UM.12.04/VIII/17', '18', 18, '2017-08-20 23:50:09', '2017-08-20 23:50:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sksatker`
--

CREATE TABLE `sksatker` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sksatker`
--

INSERT INTO `sksatker` (`id`, `staff_bagian`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `filesk_id`, `created_at`, `updated_at`) VALUES
(1, 'KA.SUBAG TATA USAHA (TU)', '2017-08-21', 'PD', '20/PD.24.14/VIII/17', '20', 20, '2017-08-20 23:51:52', '2017-08-20 23:51:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smumum`
--

CREATE TABLE `smumum` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_terima` date NOT NULL,
  `asal_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diteruskan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_disposisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_smumum` enum('proggress','unread','read','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `smumum`
--

INSERT INTO `smumum` (`id`, `tgl_terima`, `asal_surat`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `diteruskan`, `isi_disposisi`, `status_smumum`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '2017-01-03', 'ISOLV', '2016-12-05', 'PL', 'SPP-CTR/0112016/WW', 'pengenalan Produk', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)"]', 'mohon di cek / dipelajari sesuai kebutuhan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:13:25', '2017-08-20 18:16:06'),
(2, '2017-01-03', 'KADES POTO - SUMBAWA', '2017-01-03', 'SI', '692.1/01/DS-PT/1/2017', 'usulan pengamanan tebing bronjong parapel & pemasangan talud', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)","KA.SNVT PELAKSANAAN JARINGAN SUMBER AIR NT I (PJSA)"]', 'mohon di cek dan diusulkan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:16:05', '2017-08-20 18:16:12'),
(3, '2017-01-03', 'CAMAT PALIBELO', '2017-12-26', 'PR', '610/319/06.F/2016', 'Usulan tambahan marcu', '["KASI OPERASI & PEMELIHARAAN (OP)","KA.SNVT PELAKSANAAN JARINGAN PEMANFAATAN AIR NT I (PJPA)"]', 'mohon untuk diusulkan untuk prioritas', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:18:10', '2017-08-20 18:16:18'),
(4, '2017-01-03', 'KADES BEBER LOTENG', '2017-01-01', 'PR', '-', 'Proposal: Rehab saluran DAM mertak wareng', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)","KA.SNVT PELAKSANAAN JARINGAN PEMANFAATAN AIR NT I (PJPA)"]', 'mohon untuk dicek dan diprog sesuai kewenangan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:22:57', '2017-08-20 18:16:00'),
(5, '2017-01-03', 'KADES BUNUT BAOK', '2017-01-02', 'PR', '-', 'proposal: Rehab normalisasi DAM Tangluk bunut baok', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)","KA.SNVT PELAKSANAAN JARINGAN PEMANFAATAN AIR NT I (PJPA)"]', 'mohon untuk di cek dan di prog. sesuai kewenangan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:25:41', '2017-08-20 18:15:50'),
(6, '2017-01-03', 'KADES SANTONG - KLU', '2016-12-19', 'PR', '021/PAMDES-BB/STG/XII/2016', 'Permohonan bantuan dana', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)"]', 'di cek tolong bisa di programkan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:29:21', '2017-08-20 18:15:38'),
(7, '2017-01-04', 'FAJRI SANTOSO', '2017-01-04', 'KP', '-', 'Permohonan pindah data', '["KA.SUBAG TATA USAHA (TU)"]', 'Bag. Kepegawaian (P. Yamin, P.Udin) tolong proses sesuai prosedur', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:41:05', '2017-08-20 18:15:13'),
(8, '2016-12-27', 'BUPATI SUMBAWA BARAT', '2017-01-04', 'TN', '593/530/ASET', 'Permohonan pinjam pakai tanah', '["KA.SUBAG TATA USAHA (TU)","PEJABAT PELAPORAN"]', 'Bag. BMN tolong di mnitor proses selanjutnya', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:43:29', '2017-08-20 18:15:02'),
(9, '2017-01-04', 'LURAH TANJUNG KARANG', '2016-12-27', 'SI', '104/TJK/XII/2016', 'Bantuan pemasangan & pembukaan bronjong', '["KA.SATKER OP SDA (SATKER OP SDA)","KA.SNVT PELAKSANAAN JARINGAN SUMBER AIR NT I (PJSA)"]', 'mohon bisa di bantu penanganannya', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 04:52:30', '2017-08-20 18:14:57'),
(10, '2017-01-04', 'PPK BENDUNGAN III', '2016-12-26', 'IK', 'UM.01.03-AS/PB.III/1367/2016', 'Perpanjangan pinjam pakai atas BMN', '["KASI PELAKSANAAN (PELAK)"]', 'mohon dimontor pelaks. kegiatan di lapangan', 'read', 'upload/file_suratmasuk/SURAT DINAS PU.jpg', '2017-08-20 05:11:15', '2017-08-20 18:14:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smund`
--

CREATE TABLE `smund` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_terima` date NOT NULL,
  `asal_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `kd_klasifikasi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diteruskan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_disposisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_smund` enum('proggress','unread','read','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `smund`
--

INSERT INTO `smund` (`id`, `tgl_terima`, `asal_surat`, `tgl_surat`, `kd_klasifikasi`, `no_surat`, `perihal`, `diteruskan`, `isi_disposisi`, `status_smund`, `gambar`, `created_at`, `updated_at`) VALUES
(2, '2017-01-05', 'INACID', '2017-08-01', 'UM', '-', 'Kongres rapat anggota tahunan & Seminar Nasional INACID - Jambi 10-11 Maret 2017', NULL, NULL, 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:24:13', '2017-08-20 18:13:01'),
(3, '2017-01-05', 'SEKDA NTB', '2017-01-04', 'UM', '005/006/BPBD-RR/I/2017', 'Und. Raker rencana aksi penanggulangan banjir bandang bima', '["KA.SATKER BWS NT I (SATKER BWS)"]', 'akan dihadiri oleh kepala balai', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:28:01', '2017-08-20 18:14:04'),
(4, '2017-01-11', 'DIRJEN SDA', '2017-01-10', 'UM', 'UM.02.06-AS/028', 'Rekonsiliasi dan penyusunan laporan keuangan sistem akuntansi instansi dst.', '["KA.SNVT PEMBANGUNAN BENDUNGAN NT I (PB NT I)"]', 'agar dihadiri petugas yang diminta', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:30:59', '2017-08-20 18:14:16'),
(5, '2017-01-16', 'DPU & PENATAAN RUANG', '2017-01-17', 'UM', '005/334/PUPR-LB/04/2017', 'Sosialisasi hasil penyusunan rencana air minum kab. Lobar', '["KA.SNVT PELAKSANAAN JARINGAN SUMBER AIR NT I (PJSA)"]', 'P. Mahsun (BMN) konsultasikan kallau . Ka Balai apa bisa dilanjutkan', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:33:49', '2017-08-20 18:14:09'),
(6, '2017-01-17', 'LPJK PROV NTB', '2017-01-18', 'UM', '02/LPJK.NTB/P/I/2017', 'Permohonan pinjam pakai bangunan', '["PEJABAT PELAPORAN"]', 'p. mahsun (BMN): konsultasikan ke ka balai apa bisa di lanjut', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:36:11', '2017-08-20 18:13:56'),
(7, '2017-01-19', 'DIRJEN SDA', '2017-01-18', 'UM', 'UM.02.06-AB.1/18', 'Sosialisasi eprocedurement dan pembahasan permasalahan pengadaan barang / jasa, dst.', '["KASI OPERASI & PEMELIHARAAN (OP)"]', 'tugaskan orang untuk menghadiir acara tsb', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:40:06', '2017-08-20 18:13:27'),
(8, '2017-01-17', 'SEKJEN KEMENTRIAN PUPR', '2017-01-19', 'UM', 'UM.02.06-SB/18', 'Peningkatan pemahaman auditor internal di unit hidrologi dan kualitas air', '["UNIT LAYANAAN PENGADAAN (ULP)"]', 'p. erwin rosdianto: berangkat mengahadiri acara tersebut', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-19 07:43:55', '2017-08-20 18:13:13'),
(9, '2017-01-20', 'PUSAT AT AB', '2017-01-19', 'UM', 'UM.02.06-AK/41', 'Undangan penyusunan prog. air baku', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)","KA.SNVT PELAKSANAAN JARINGAN PEMANFAATAN AIR NT I (PJPA)"]', 'mohon untuk hadir pada acara tersebut dan siapkan data - data yang diperlukan', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-20 02:55:59', '2017-08-20 18:13:06'),
(10, '2017-01-23', 'KOREM 162 / WIRA BHAKTI', '2017-01-23', 'UM', 'B/99/5/2017', 'Undangan UPB US Swapang tahun 2017', '["KASI PROGRAM & PERENCANAAN UMUM (PROG PU)"]', 'mohon untuk hadir pada acara tsb', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-20 03:00:08', '2017-08-20 18:12:51'),
(11, '2017-01-23', 'SETDA PROV. NTB', '2017-01-20', 'UM', '005/062/BPBD.NTB/2017', 'Und. Pem. rencana aksi pasca banjir bandang di kota bima', '["KA.SUBAG TATA USAHA (TU)"]', 'mohon untuk di tindak lanjuti dan dihadiri acara tsb', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-20 04:08:12', '2017-08-20 18:12:38'),
(12, '2017-08-21', 'STMIK Bumigora Mataram', '2017-08-19', 'PD', '100/STMIK/VIII/2017', 'SEMINAR IT 2017', '["KA.SUBAG TATA USAHA (TU)","KASI OPERASI & PEMELIHARAAN (OP)"]', 'mohon di hadiri acara tersebut', 'read', 'upload/file_suratundangan/SURAT DINAS PU.jpg', '2017-08-21 00:32:32', '2017-08-21 00:38:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `divisi`, `divisi_id`, `username`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Denda Afriliani', 'Agendaris', 15, 'agendaris', '$2y$10$FUFoKlBMOJZq7SbvtfJ7Ruegxb8Pv7.d7Hi.Aflm8PcRtzfuZQHDq', 'upload/profile/Denda Afriliani_1410330034.JPG', 'EsAQsgOk9GN208L3ltteW3jAUN2AhVU05HnCsclob7kKzbShpY9he8d5Xuwi', '2017-06-03 05:41:30', '2017-08-16 08:12:06'),
(4, 'Administrator', 'Administrator', 2, 'admin', '$2y$10$x5wXUpWci25pfScZbqIdjOu3GAdiZUYK7I9huvLMtiEy/BU67RXkO', 'upload/profile/profile.png', 'kWuxO3YYHmq4TD2629NffoEjVZ9wzhNbU98v1J4ba4VjmvvHDyy10uGJ6Jo8', '2017-06-01 13:13:36', '2017-08-11 00:43:44'),
(5, 'Ir. Suryo Edi Purnomo', 'KETUA BWS NT I', 14, 'ketua', '$2y$10$J6/V7gJoyOLLNslxKFFf7.028OKYFq/hSrDYsBQXozkusXLQtMNRi', 'upload/profile/profile.png', 'pgz0bV341esU4FbSOIBloU3zkRdBPti7xbqNSYcgWhc9hWGqePNyZ7wzj7rl', '2017-06-07 20:55:34', '2017-08-11 00:52:17'),
(6, 'Agus Susanto', 'KA.SUBAG TATA USAHA (TU)', 1, 'tu', '$2y$10$p6CD/gN4UAoc67MXYqvAD.3elHjiL7y94k.Ec3OT4DcIbBJJOCW.2', 'upload/profile/B612_20161116_150138.jpg', 'ZP1YvT2S0t4f32l5qSK2oyujVv3oklV8gZqWKoJPJQuTMJ34zqHCDM3yHTDq', '2017-06-11 23:22:40', '2017-08-11 00:53:16'),
(7, 'Linda Lestari', 'Arsip BWS NT I', 16, 'arsip', '$2y$10$pznWuAoPFzCkXJlKuMebM.lvdL1cqXwSzmZuZybEwkh.01i1tzsMy', 'upload/profile/profile.png', 'vt9oarGGe3YE87nwPrEVVn7hTQXcu4YpFMn0tkFlsjAFnWDRaihwzVt7jCU5', '2017-06-30 20:39:36', '2017-08-11 00:53:50'),
(8, 'bang mo', 'BENDAHARA PENGELUARAN (BENDAHARA)', 11, 'uang', '$2y$10$VJc7kq7qGon2Lyao1wAbPOqmziSl887O.z7h/Qh7tTU1YxjFmL2OW', 'asset(''assets/images/profile.png'')', 'Xes6Jn3fp2FEKshV4iGzVNOFQpv3WrSDKZy6a2wx8PkTK6MzfQMK0JTHJvNz', '2017-08-11 00:59:08', '2018-04-27 11:20:59'),
(9, 'Surya Rinjani', '', 2, 'surya', '$2y$10$fiWHHdpCD0lKe.7QGZ2Fc.aBmjBY3gRxHO5yr7ydFh5AbS7/O2A2G', 'asset(''assets/images/profile.png'')', NULL, '2017-08-11 01:14:03', '2017-08-11 01:14:03'),
(10, 'Guntur Febrian', 'KASI OPERASI & PEMELIHARAAN (OP)', 4, 'guntur', '$2y$10$Lj731awkQvHOCVObfXrpFOR635Ci/OrDQABvMjizBwaJ2AllMshRm', 'asset(''assets/images/profile.png'')', NULL, '2017-08-11 01:25:52', '2017-08-11 01:25:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smund_id` (`smund_id`),
  ADD KEY `smumum_id` (`smumum_id`),
  ADD KEY `tujuan` (`tujuan`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_surat_keluar`
--
ALTER TABLE `file_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skbws`
--
ALTER TABLE `skbws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_skbws_filesk_id_foreign` (`filesk_id`);

--
-- Indexes for table `skppd`
--
ALTER TABLE `skppd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_skppd_filesk_id_foreign` (`filesk_id`);

--
-- Indexes for table `skppdttl`
--
ALTER TABLE `skppdttl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_skppdttl_filesk_id_foreign` (`filesk_id`);

--
-- Indexes for table `skppkttl`
--
ALTER TABLE `skppkttl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_skppkttl_filesk_id_foreign` (`filesk_id`);

--
-- Indexes for table `sksatker`
--
ALTER TABLE `sksatker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_sksatker_filesk_id_foreign` (`filesk_id`);

--
-- Indexes for table `smumum`
--
ALTER TABLE `smumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smund`
--
ALTER TABLE `smund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisi_id` (`divisi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `file_surat_keluar`
--
ALTER TABLE `file_surat_keluar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `skbws`
--
ALTER TABLE `skbws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `skppd`
--
ALTER TABLE `skppd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skppdttl`
--
ALTER TABLE `skppdttl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skppkttl`
--
ALTER TABLE `skppkttl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sksatker`
--
ALTER TABLE `sksatker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `smumum`
--
ALTER TABLE `smumum`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `smund`
--
ALTER TABLE `smund`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  ADD CONSTRAINT `smumum_id` FOREIGN KEY (`smumum_id`) REFERENCES `smumum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `smund_id` FOREIGN KEY (`smund_id`) REFERENCES `smund` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tujuan` FOREIGN KEY (`tujuan`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skbws`
--
ALTER TABLE `skbws`
  ADD CONSTRAINT `tbl_skbws_filesk_id_foreign` FOREIGN KEY (`filesk_id`) REFERENCES `file_surat_keluar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skppd`
--
ALTER TABLE `skppd`
  ADD CONSTRAINT `tbl_skppd_filesk_id_foreign` FOREIGN KEY (`filesk_id`) REFERENCES `file_surat_keluar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skppdttl`
--
ALTER TABLE `skppdttl`
  ADD CONSTRAINT `tbl_skppdttl_filesk_id_foreign` FOREIGN KEY (`filesk_id`) REFERENCES `file_surat_keluar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skppkttl`
--
ALTER TABLE `skppkttl`
  ADD CONSTRAINT `tbl_skppkttl_filesk_id_foreign` FOREIGN KEY (`filesk_id`) REFERENCES `file_surat_keluar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sksatker`
--
ALTER TABLE `sksatker`
  ADD CONSTRAINT `tbl_sksatker_filesk_id_foreign` FOREIGN KEY (`filesk_id`) REFERENCES `file_surat_keluar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `divisi_id` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
