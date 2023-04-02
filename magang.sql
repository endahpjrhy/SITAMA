-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2023 pada 05.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Created Data', 'App\\Models\\User', 1, NULL, NULL, '{\"id\":1,\"nama\":null,\"table\":\"users\"}', '2023-03-13 08:34:14', '2023-03-13 08:34:14'),
(2, 'default', 'Created Data', 'App\\Models\\User', 2, NULL, NULL, '{\"id\":2,\"nama\":null,\"table\":\"users\"}', '2023-03-13 08:49:21', '2023-03-13 08:49:21'),
(3, 'default', 'Created Data', 'App\\Models\\User', 3, NULL, NULL, '{\"id\":3,\"nama\":\"Hanang\",\"table\":\"users\"}', '2023-03-13 08:54:37', '2023-03-13 08:54:37'),
(4, 'default', 'Created Data', 'App\\Models\\User', 4, NULL, NULL, '{\"id\":4,\"nama\":\"Hanang\",\"table\":\"users\"}', '2023-03-13 08:55:09', '2023-03-13 08:55:09'),
(5, 'default', 'Updated Data', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"user\"}', '2023-03-14 06:48:49', '2023-03-14 06:48:49'),
(6, 'default', 'Updated Data', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"user\"}', '2023-03-14 06:51:20', '2023-03-14 06:51:20'),
(7, 'default', 'Updated Data', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"user\"}', '2023-03-14 06:56:51', '2023-03-14 06:56:51'),
(8, 'default', 'Updated Data', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"user\"}', '2023-03-14 06:58:12', '2023-03-14 06:58:12'),
(9, 'default', 'Updated Data', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"user\"}', '2023-03-14 07:01:06', '2023-03-14 07:01:06'),
(10, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":1,\"table\":\"user\"}', '2023-03-14 07:11:25', '2023-03-14 07:11:25'),
(11, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":1,\"table\":\"user\"}', '2023-03-14 07:13:42', '2023-03-14 07:13:42'),
(12, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":1,\"table\":\"user\"}', '2023-03-14 07:28:33', '2023-03-14 07:28:33'),
(13, 'default', 'Created Data', 'App\\Models\\HasilProjek', 1, 'App\\Models\\User', 1, '{\"name\":\"Judu;\",\"id\":1,\"table\":\"hasil_projek\"}', '2023-03-14 08:21:47', '2023-03-14 08:21:47'),
(14, 'default', 'Created Data', 'App\\Models\\HasilProjek', 2, 'App\\Models\\User', 1, '{\"name\":\"Berhasil\",\"id\":2,\"table\":\"hasil_projek\"}', '2023-03-14 08:27:08', '2023-03-14 08:27:08'),
(15, 'default', 'Created Data', 'App\\Models\\User', 5, NULL, NULL, '{\"id\":5,\"nama\":\"Hanang\",\"table\":\"users\"}', '2023-03-14 09:58:55', '2023-03-14 09:58:55'),
(16, 'default', 'Created Data', 'App\\Models\\User', 6, NULL, NULL, '{\"id\":6,\"nama\":\"VITA PRATAMA PUTRI\",\"table\":\"users\"}', '2023-03-15 07:37:20', '2023-03-15 07:37:20'),
(17, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 6, '{\"name\":null,\"id\":6,\"table\":\"user\"}', '2023-03-16 06:25:57', '2023-03-16 06:25:57'),
(18, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 3, 'App\\Models\\User', 6, '{\"name\":\"hh\",\"id\":3,\"table\":\"hasil_projek\"}', '2023-03-16 06:28:40', '2023-03-16 06:28:40'),
(19, 'default', 'Created Data', 'App\\Models\\User', 7, 'App\\Models\\User', 1, '{\"id\":7,\"nama\":\"Nanda mey\",\"table\":\"users\"}', '2023-03-16 19:26:25', '2023-03-16 19:26:25'),
(20, 'default', 'Created Data', 'App\\Models\\User', 8, NULL, NULL, '{\"id\":8,\"nama\":\"endah\",\"table\":\"users\"}', '2023-03-16 19:27:40', '2023-03-16 19:27:40'),
(21, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 7, '{\"name\":null,\"id\":7,\"table\":\"user\"}', '2023-03-16 19:32:11', '2023-03-16 19:32:11'),
(22, 'default', 'Created Data', 'App\\Models\\User', 9, NULL, NULL, '{\"id\":9,\"nama\":\"EKI DWI PRESTYI\",\"table\":\"users\"}', '2023-03-16 23:41:48', '2023-03-16 23:41:48'),
(23, 'default', 'Created Data', 'App\\Models\\User', 10, NULL, NULL, '{\"id\":10,\"nama\":\"VITA PRATAMA PUTRI\",\"table\":\"users\"}', '2023-03-17 00:05:46', '2023-03-17 00:05:46'),
(24, 'default', 'Created Data', 'App\\Models\\User', 11, NULL, NULL, '{\"id\":11,\"nama\":\"VITA PRATAMA PUTRI\",\"table\":\"users\"}', '2023-03-17 00:06:43', '2023-03-17 00:06:43'),
(25, 'default', 'Created Data', 'App\\Models\\User', 12, NULL, NULL, '{\"id\":12,\"nama\":\"Alvin\",\"table\":\"users\"}', '2023-03-17 00:07:32', '2023-03-17 00:07:32'),
(26, 'default', 'Created Data', 'App\\Models\\User', 13, NULL, NULL, '{\"id\":13,\"nama\":\"kiky\",\"table\":\"users\"}', '2023-03-17 00:09:03', '2023-03-17 00:09:03'),
(27, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:43:22', '2023-03-17 07:43:22'),
(28, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:43:52', '2023-03-17 07:43:52'),
(29, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:45:00', '2023-03-17 07:45:00'),
(30, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:46:19', '2023-03-17 07:46:19'),
(31, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:46:46', '2023-03-17 07:46:46'),
(32, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:47:33', '2023-03-17 07:47:33'),
(33, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:47:49', '2023-03-17 07:47:49'),
(34, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:52:02', '2023-03-17 07:52:02'),
(35, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":null,\"id\":null,\"table\":\"User\"}', '2023-03-17 07:52:11', '2023-03-17 07:52:11'),
(36, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":\"Admin Lebih Super\",\"id\":1,\"table\":\"User\"}', '2023-03-17 07:53:32', '2023-03-17 07:53:32'),
(37, 'default', 'Ganti Password', 'App\\Models\\User', NULL, 'App\\Models\\User', 1, '{\"name\":\"Admin Vita\",\"id\":1,\"table\":\"User\"}', '2023-03-17 07:54:54', '2023-03-17 07:54:54'),
(38, 'default', 'Created Data', 'App\\Models\\User', 14, NULL, NULL, '{\"id\":14,\"nama\":\"Bayu\",\"table\":\"users\"}', '2023-03-24 03:04:33', '2023-03-24 03:04:33'),
(39, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 14, '{\"name\":null,\"id\":14,\"table\":\"user\"}', '2023-03-24 04:20:48', '2023-03-24 04:20:48'),
(40, 'default', 'Created Data', 'App\\Models\\User', 15, NULL, NULL, '{\"id\":15,\"nama\":\"putra\",\"table\":\"users\"}', '2023-03-24 04:39:51', '2023-03-24 04:39:51'),
(41, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 15, '{\"name\":null,\"id\":15,\"table\":\"user\"}', '2023-03-24 04:41:12', '2023-03-24 04:41:12'),
(42, 'default', 'Created Data', 'App\\Models\\User', 16, NULL, NULL, '{\"id\":16,\"nama\":\"fedra\",\"table\":\"users\"}', '2023-03-24 04:54:28', '2023-03-24 04:54:28'),
(43, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 16, '{\"name\":null,\"id\":16,\"table\":\"user\"}', '2023-03-24 04:55:41', '2023-03-24 04:55:41'),
(44, 'default', 'Created Data', 'App\\Models\\User', 17, NULL, NULL, '{\"id\":17,\"nama\":\"Mey\",\"table\":\"users\"}', '2023-03-24 05:02:50', '2023-03-24 05:02:50'),
(45, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 17, '{\"name\":null,\"id\":17,\"table\":\"user\"}', '2023-03-24 05:05:37', '2023-03-24 05:05:37'),
(46, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 4, 'App\\Models\\User', 14, '{\"name\":\"nanda mey\",\"id\":4,\"table\":\"hasil_projek\"}', '2023-03-24 05:24:40', '2023-03-24 05:24:40'),
(47, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 5, 'App\\Models\\User', 14, '{\"name\":\"dfd\",\"id\":5,\"table\":\"hasil_projek\"}', '2023-03-24 05:32:57', '2023-03-24 05:32:57'),
(48, 'default', 'Created Data', 'App\\Models\\User', 18, NULL, NULL, '{\"id\":18,\"nama\":\"niken\",\"table\":\"users\"}', '2023-03-26 19:57:37', '2023-03-26 19:57:37'),
(49, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 18, '{\"name\":null,\"id\":18,\"table\":\"user\"}', '2023-03-26 19:59:56', '2023-03-26 19:59:56'),
(50, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 14, '{\"name\":null,\"id\":14,\"table\":\"user\"}', '2023-03-26 20:24:46', '2023-03-26 20:24:46'),
(51, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 14, '{\"name\":null,\"id\":14,\"table\":\"user\"}', '2023-03-26 20:38:03', '2023-03-26 20:38:03'),
(52, 'default', 'Created Data', 'App\\Models\\User', 19, NULL, NULL, '{\"id\":19,\"nama\":\"wati\",\"table\":\"users\"}', '2023-03-26 20:41:27', '2023-03-26 20:41:27'),
(53, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 19, '{\"name\":null,\"id\":19,\"table\":\"user\"}', '2023-03-26 20:43:01', '2023-03-26 20:43:01'),
(54, 'default', 'Created Data', 'App\\Models\\User', 20, NULL, NULL, '{\"id\":20,\"nama\":\"vita\",\"table\":\"users\"}', '2023-03-27 06:47:40', '2023-03-27 06:47:40'),
(55, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 6, 'App\\Models\\User', 19, '{\"name\":\"Iki lho projek e\",\"id\":6,\"table\":\"hasil_projek\"}', '2023-03-27 07:10:15', '2023-03-27 07:10:15'),
(56, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 1, 'App\\Models\\User', 1, '{\"name\":\"Bidang Sekretaris\",\"id\":1,\"table\":\"bidang\"}', '2023-03-27 08:18:02', '2023-03-27 08:18:02'),
(57, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 2, 'App\\Models\\User', 1, '{\"name\":\"Bidang informasi Komunikasi Publik\",\"id\":2,\"table\":\"bidang\"}', '2023-03-27 08:18:31', '2023-03-27 08:18:31'),
(58, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 3, 'App\\Models\\User', 1, '{\"name\":\"Administrasi Perkantoran\",\"id\":3,\"table\":\"bidang\"}', '2023-03-27 08:18:50', '2023-03-27 08:18:50'),
(59, 'default', 'Penghapusan Bidang Kriteria', 'App\\Models\\Bidang', 3, 'App\\Models\\User', 1, '{\"name\":\"Administrasi Perkantoran\",\"id\":3,\"table\":\"bidang\"}', '2023-03-27 08:41:14', '2023-03-27 08:41:14'),
(60, 'default', 'Update Bidang Kriteria', 'App\\Models\\Bidang', 1, 'App\\Models\\User', 1, '{\"name\":\"Bidang Sekretaris 1\",\"id\":1,\"table\":\"bidang\"}', '2023-03-27 08:57:22', '2023-03-27 08:57:22'),
(61, 'default', 'Update Bidang Kriteria', 'App\\Models\\Bidang', 1, 'App\\Models\\User', 1, '{\"name\":\"Bidang Sekretaris\",\"id\":1,\"table\":\"bidang\"}', '2023-03-27 08:57:44', '2023-03-27 08:57:44'),
(62, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 7, 'App\\Models\\User', 20, '{\"name\":\"jhch\",\"id\":7,\"table\":\"hasil_projek\"}', '2023-03-27 09:24:59', '2023-03-27 09:24:59'),
(63, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 8, 'App\\Models\\User', 20, '{\"name\":\"jkgtyhhtgy5rdgh\",\"id\":8,\"table\":\"hasil_projek\"}', '2023-03-27 09:26:36', '2023-03-27 09:26:36'),
(64, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 20, '{\"name\":null,\"id\":20,\"table\":\"user\"}', '2023-03-27 18:12:29', '2023-03-27 18:12:29'),
(65, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 9, 'App\\Models\\User', 20, '{\"name\":\"dfd\",\"id\":9,\"table\":\"hasil_projek\"}', '2023-03-27 18:15:23', '2023-03-27 18:15:23'),
(66, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 4, 'App\\Models\\User', 1, '{\"name\":\"Jurnalistik\",\"id\":4,\"table\":\"bidang\"}', '2023-03-27 18:33:28', '2023-03-27 18:33:28'),
(67, 'default', 'Created Data', 'App\\Models\\User', 21, NULL, NULL, '{\"id\":21,\"nama\":\"VITA PRATAMA PUTRI\",\"table\":\"users\"}', '2023-03-27 23:11:03', '2023-03-27 23:11:03'),
(68, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 21, '{\"name\":null,\"id\":21,\"table\":\"user\"}', '2023-03-28 08:10:54', '2023-03-28 08:10:54'),
(69, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 5, 'App\\Models\\User', 1, '{\"name\":\"Desain dan komunikasi visual\",\"id\":5,\"table\":\"bidang\"}', '2023-03-28 08:32:03', '2023-03-28 08:32:03'),
(70, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 6, 'App\\Models\\User', 1, '{\"name\":\"Komunikasi\",\"id\":6,\"table\":\"bidang\"}', '2023-03-28 08:32:17', '2023-03-28 08:32:17'),
(71, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 7, 'App\\Models\\User', 1, '{\"name\":\"Bidang Aplikasi Informatika\",\"id\":7,\"table\":\"bidang\"}', '2023-03-28 08:33:13', '2023-03-28 08:33:13'),
(72, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 8, 'App\\Models\\User', 1, '{\"name\":\"Teknik komputer\\/sistem informasi\",\"id\":8,\"table\":\"bidang\"}', '2023-03-28 08:33:31', '2023-03-28 08:33:31'),
(73, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 9, 'App\\Models\\User', 1, '{\"name\":\"Infrastruktur jaringan\",\"id\":9,\"table\":\"bidang\"}', '2023-03-28 08:33:57', '2023-03-28 08:33:57'),
(74, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 10, 'App\\Models\\User', 1, '{\"name\":\"Aplikasi\",\"id\":10,\"table\":\"bidang\"}', '2023-03-28 08:34:12', '2023-03-28 08:34:12'),
(75, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 11, 'App\\Models\\User', 1, '{\"name\":\"Bidang Persandian Statistik\",\"id\":11,\"table\":\"bidang\"}', '2023-03-28 08:34:33', '2023-03-28 08:34:33'),
(76, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 12, 'App\\Models\\User', 1, '{\"name\":\"Telekomunikasi\",\"id\":12,\"table\":\"bidang\"}', '2023-03-28 08:34:45', '2023-03-28 08:34:45'),
(77, 'default', 'Penambahan Bidang Kriteria', 'App\\Models\\Bidang', 13, 'App\\Models\\User', 1, '{\"name\":\"Statistiki\",\"id\":13,\"table\":\"bidang\"}', '2023-03-28 08:34:57', '2023-03-28 08:34:57'),
(78, 'default', 'Update Bidang Kriteria', 'App\\Models\\Bidang', 13, 'App\\Models\\User', 1, '{\"name\":\"Statistik\",\"id\":13,\"table\":\"bidang\"}', '2023-03-28 08:35:04', '2023-03-28 08:35:04'),
(79, 'default', 'Update Bidang Kriteria', 'App\\Models\\Bidang', 13, 'App\\Models\\User', 1, '{\"name\":\"Statistik\",\"id\":13,\"table\":\"bidang\"}', '2023-03-28 08:35:24', '2023-03-28 08:35:24'),
(80, 'default', 'Created Data', 'App\\Models\\User', 22, NULL, NULL, '{\"id\":22,\"nama\":\"putri\",\"table\":\"users\"}', '2023-03-28 08:36:10', '2023-03-28 08:36:10'),
(81, 'default', 'Created Data', 'App\\Models\\User', 23, NULL, NULL, '{\"id\":23,\"nama\":\"puji\",\"table\":\"users\"}', '2023-03-28 18:28:58', '2023-03-28 18:28:58'),
(82, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 23, '{\"name\":null,\"id\":23,\"table\":\"user\"}', '2023-03-28 18:30:48', '2023-03-28 18:30:48'),
(83, 'default', 'Send Hasil Projek', 'App\\Models\\HasilProjek', 10, 'App\\Models\\User', 23, '{\"name\":\"projectku\",\"id\":10,\"table\":\"hasil_projek\"}', '2023-03-28 18:35:07', '2023-03-28 18:35:07'),
(84, 'default', 'Created Data', 'App\\Models\\User', 24, NULL, NULL, '{\"id\":24,\"nama\":\"mey\",\"table\":\"users\"}', '2023-03-28 18:42:59', '2023-03-28 18:42:59'),
(85, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 24, '{\"name\":null,\"id\":24,\"table\":\"user\"}', '2023-03-28 18:46:44', '2023-03-28 18:46:44'),
(86, 'default', 'Update Bidang Kriteria', 'App\\Models\\Bidang', 3, 'App\\Models\\User', 1, '{\"name\":\"Administrasi Perkantoran\",\"id\":3,\"table\":\"bidang\"}', '2023-03-28 19:41:30', '2023-03-28 19:41:30'),
(87, 'default', 'Created Data', 'App\\Models\\User', 25, NULL, NULL, '{\"id\":25,\"nama\":\"jiahh\",\"table\":\"users\"}', '2023-03-29 00:14:45', '2023-03-29 00:14:45'),
(88, 'default', 'Created Data', 'App\\Models\\User', 26, NULL, NULL, '{\"id\":26,\"nama\":\"anggit\",\"table\":\"users\"}', '2023-03-30 07:55:10', '2023-03-30 07:55:10'),
(89, 'default', 'Registrasi Magang', 'App\\Models\\User', NULL, 'App\\Models\\User', 26, '{\"name\":null,\"id\":26,\"table\":\"user\"}', '2023-03-30 07:58:31', '2023-03-30 07:58:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangs`
--

CREATE TABLE `bidangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL COMMENT '1 = induk; 2 = anak',
  `induk` bigint(20) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bidangs`
--

INSERT INTO `bidangs` (`id`, `status`, `induk`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', NULL, 'Bidang Sekretaris', '2023-03-27 08:18:02', '2023-03-27 08:57:44', NULL),
(2, '1', NULL, 'Bidang informasi Komunikasi Publik', '2023-03-27 08:18:31', '2023-03-27 08:18:31', NULL),
(3, '1', 1, 'Administrasi Perkantoran', '2023-03-27 08:18:50', '2023-03-28 19:41:30', NULL),
(4, '2', 2, 'Jurnalistik', '2023-03-27 18:33:28', '2023-03-27 18:33:28', NULL),
(5, '2', 2, 'Desain dan komunikasi visual', '2023-03-28 08:32:03', '2023-03-28 08:32:03', NULL),
(6, '2', 2, 'Komunikasi', '2023-03-28 08:32:17', '2023-03-28 08:32:17', NULL),
(7, '1', NULL, 'Bidang Aplikasi Informatika', '2023-03-28 08:33:13', '2023-03-28 08:33:13', NULL),
(8, '2', 7, 'Teknik komputer/sistem informasi', '2023-03-28 08:33:31', '2023-03-28 08:33:31', NULL),
(9, '2', 7, 'Infrastruktur jaringan', '2023-03-28 08:33:57', '2023-03-28 08:33:57', NULL),
(10, '2', 7, 'Aplikasi', '2023-03-28 08:34:12', '2023-03-28 08:34:12', NULL),
(11, '1', NULL, 'Bidang Persandian Statistik', '2023-03-28 08:34:33', '2023-03-28 08:34:33', NULL),
(12, '2', 11, 'Telekomunikasi', '2023-03-28 08:34:45', '2023-03-28 08:34:45', NULL),
(13, '2', 11, 'Statistik', '2023-03-28 08:34:57', '2023-03-28 08:35:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_projeks`
--

CREATE TABLE `hasil_projeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_registers`
--

CREATE TABLE `history_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `history_registers`
--

INSERT INTO `history_registers` (`id`, `users_id`, `status`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 6, '1', 'Pendaftaran peserta magang', '2023-03-16 06:25:56', '2023-03-16 06:25:56', NULL),
(5, 6, '4', 'Perubahan status oleh admin', '2023-03-16 06:27:01', '2023-03-16 06:27:01', NULL),
(6, 6, '3', 'Perubahan status oleh admin', '2023-03-16 19:22:58', '2023-03-16 19:22:58', NULL),
(7, 7, '1', 'Pendaftaran peserta magang', '2023-03-16 19:32:11', '2023-03-16 19:32:11', NULL),
(8, 7, '3', 'Perubahan status oleh admin', '2023-03-16 19:47:21', '2023-03-16 19:47:21', NULL),
(9, 14, '1', 'Pendaftaran peserta magang', '2023-03-24 04:20:47', '2023-03-24 04:20:47', NULL),
(10, 15, '1', 'Pendaftaran peserta magang', '2023-03-24 04:41:12', '2023-03-24 04:41:12', NULL),
(11, 16, '1', 'Pendaftaran peserta magang', '2023-03-24 04:55:41', '2023-03-24 04:55:41', NULL),
(12, 17, '1', 'Pendaftaran peserta magang', '2023-03-24 05:05:37', '2023-03-24 05:05:37', NULL),
(13, 18, '1', 'Pendaftaran peserta magang', '2023-03-26 19:59:56', '2023-03-26 19:59:56', NULL),
(14, 14, '1', 'Pendaftaran peserta magang', '2023-03-26 20:24:46', '2023-03-26 20:24:46', NULL),
(15, 14, '1', 'Pendaftaran peserta magang', '2023-03-26 20:38:03', '2023-03-26 20:38:03', NULL),
(16, 19, '1', 'Pendaftaran peserta magang', '2023-03-26 20:43:01', '2023-03-26 20:43:01', NULL),
(17, 19, '3', 'Perubahan status oleh admin', '2023-03-27 07:04:27', '2023-03-27 07:04:27', NULL),
(18, 20, '1', 'Pendaftaran peserta magang', '2023-03-27 18:12:29', '2023-03-27 18:12:29', NULL),
(19, 20, '3', 'Perubahan status oleh admin', '2023-03-27 18:13:50', '2023-03-27 18:13:50', NULL),
(20, 21, '1', 'Pendaftaran peserta magang', '2023-03-28 08:10:54', '2023-03-28 08:10:54', NULL),
(21, 23, '1', 'Pendaftaran peserta magang', '2023-03-28 18:30:48', '2023-03-28 18:30:48', NULL),
(22, 23, '2', 'Perubahan status oleh admin', '2023-03-28 18:32:23', '2023-03-28 18:32:23', NULL),
(23, 23, '3', 'Perubahan status oleh admin', '2023-03-28 18:33:10', '2023-03-28 18:33:10', NULL),
(24, 24, '1', 'Pendaftaran peserta magang', '2023-03-28 18:46:44', '2023-03-28 18:46:44', NULL),
(25, 26, '1', 'Pendaftaran peserta magang', '2023-03-30 07:58:31', '2023-03-30 07:58:31', NULL),
(26, 26, '3', 'Perubahan status oleh admin', '2023-03-30 08:00:12', '2023-03-30 08:00:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_10_164956_create_history_register_table', 1),
(6, '2023_03_10_165529_create_activity_log_table', 1),
(7, '2023_03_10_170029_create_hasil_projek_table', 1),
(8, '2023_03_27_143232_create_bidangs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `jurusan` varchar(250) DEFAULT NULL,
  `universitas` varchar(250) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `periode_masuk` date DEFAULT NULL,
  `periode_keluar` date DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `file_pengantar` varchar(250) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` bigint(20) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `bidang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `nim`, `jurusan`, `universitas`, `jenis_kelamin`, `periode_masuk`, `periode_keluar`, `telp`, `status`, `file_pengantar`, `email`, `email_verified_at`, `password`, `role`, `desc`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `semester`, `photo`, `bidang_id`) VALUES
(1, 'Admin Vita', 'Sukoharjo', NULL, NULL, NULL, 'Laki-laki', NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$JtifMiJIz17gxqwNGNCMpeKPaDQ7pQqgLM.W2fSI8nKn87T.6Ik8W', 1, NULL, NULL, '2023-03-13 08:34:14', '2023-03-17 07:54:54', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indeks untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasil_projeks`
--
ALTER TABLE `hasil_projeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history_registers`
--
ALTER TABLE `history_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_projeks`
--
ALTER TABLE `hasil_projeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `history_registers`
--
ALTER TABLE `history_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
