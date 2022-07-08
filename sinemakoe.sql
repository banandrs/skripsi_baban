-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 04:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinemakoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$zv6TNkhhB5qejcq9lqjFfuQaxymXeP/6xzBnL7VhbUIQ4FjJJDDYe', '6282358177119', 1, '2021-09-16 02:32:31', '2022-06-06 09:10:38'),
(2, 'Manajer', 'manajer@manajer.com', '$2y$10$JtMiQhN5TV1.s5Tf0rbTSOlMYvQhmErv8q8pPXvh9uIymqGiDhwi.', '', 1, '2022-04-19 08:09:01', '2022-04-19 08:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` enum('indoor','outdoor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'indoor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `gambar`, `kategori`, `created_at`, `updated_at`) VALUES
(7, 'Foto 1', '20220518093039.JPG', 'indoor', '2022-05-18 02:30:39', '2022-05-29 22:45:54'),
(10, 'Foto 2', '20220530070445.jpg', 'indoor', '2022-05-29 22:42:39', '2022-05-30 00:04:45'),
(11, 'Foto 3', '20220530054413.jpg', 'indoor', '2022-05-29 22:44:13', '2022-05-29 22:44:13'),
(12, 'Foto 4', '20220530065619.jpg', 'indoor', '2022-05-29 22:45:32', '2022-05-29 23:56:19'),
(13, 'Foto 5', '20220530064332.JPG', 'outdoor', '2022-05-29 23:43:32', '2022-05-29 23:43:32'),
(14, 'Foto 6', '20220530064425.jpg', 'outdoor', '2022-05-29 23:44:25', '2022-05-29 23:44:25'),
(15, 'Foto 7', '20220530064520.jpg', 'outdoor', '2022-05-29 23:45:20', '2022-05-29 23:45:20'),
(16, 'Foto 8', '20220530065535.jpg', 'outdoor', '2022-05-29 23:46:26', '2022-05-29 23:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_fotos`
--

CREATE TABLE `jadwal_fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bayar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_fotos`
--

INSERT INTO `jadwal_fotos` (`id`, `paket_id`, `user_id`, `slug`, `tanggal`, `waktu`, `catatan`, `jumlah_bayar`, `created_at`, `updated_at`) VALUES
(8, 40, 18, '2022-06-18', '2022-06-18', '11.30 WIB', NULL, NULL, '2022-06-16 05:36:15', '2022-06-16 05:36:15'),
(9, 34, 20, '2022-06-17', '2022-06-17', '09.30 WIB', NULL, NULL, '2022-06-16 11:07:11', '2022-06-16 11:07:11'),
(12, 38, 23, '2022-06-17', '2022-06-17', '13.00 WIB', NULL, NULL, '2022-06-16 11:22:00', '2022-06-16 11:22:00'),
(13, 41, 24, '2022-06-18', '2022-06-18', '13.30 WIB', NULL, NULL, '2022-06-16 11:33:48', '2022-06-16 11:33:48'),
(14, 40, 25, '2022-06-17', '2022-06-17', '16.00 WIB', NULL, NULL, '2022-06-16 11:37:52', '2022-06-16 11:37:52'),
(15, 38, 26, '2022-06-23', '2022-06-23', '10.30 WIB', NULL, NULL, '2022-06-23 08:22:04', '2022-06-23 08:22:04'),
(16, 36, 27, '2022-06-29', '2022-06-29', '10.30 WIB', NULL, NULL, '2022-06-29 01:01:38', '2022-06-29 01:01:38'),
(18, 34, 29, '2022-06-29', '2022-06-29', '20.30 WIB', NULL, NULL, '2022-06-29 13:34:05', '2022-06-29 13:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdasdf', 'ffdsasdf', 'asdfasdf', 'sdfasdf', 'sdfasdf', 1, '2022-03-14 13:23:26', '2022-03-14 13:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(54, '2014_09_22_070234_create_permissions_table', 1),
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2017_06_19_070344_create_posts_table', 1),
(58, '2017_06_19_070731_create_tags_table', 1),
(59, '2017_06_19_070801_create_categories_table', 1),
(60, '2017_06_19_070824_create_category_posts_table', 1),
(84, '2017_06_19_070923_create_post_tags_table', 2),
(85, '2017_06_19_071000_create_admins_table', 2),
(91, '2017_06_19_071103_create_roles_table', 3),
(92, '2017_06_19_071125_create_admin_roles_table', 3),
(93, '2017_08_04_055752_likes', 3),
(94, '2020_02_22_000000_create_users_table', 3),
(95, '2020_02_22_104008_create_paket_fotos_table', 3),
(96, '2020_02_23_021619_create_jadwal_fotos_table', 3),
(97, '2020_03_09_081623_create_log_activity_table', 3),
(99, '2022_03_04_141204_create_pelanggans_table', 4),
(100, '2022_04_19_081134_create_galeris_table', 4),
(101, '2022_05_05_141051_create_bookings_table', 5),
(105, '2021_03_01_085537_create_promo_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `paket_fotos`
--

CREATE TABLE `paket_fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cetak_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_fotos`
--

INSERT INTO `paket_fotos` (`id`, `paket`, `paket_slug`, `harga`, `kapasitas`, `durasi`, `background`, `cetak_foto`, `file_foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(34, 'Paket 1', 'paket-1', '100000', '5', '30 Menit', '20220530051753.jpg', '2 Cetak Foto (8R & 12R)', '1 CD Softcopy All Files', 'Indoor Wisudawan + Keluarga', '2022-05-29 22:17:53', '2022-05-29 22:17:53'),
(35, 'Paket 2', 'paket-2', '200000', '5', '30 Menit', '20220530052121.jpg', '1 Cetak Foto 12R + Frame', '1 CD Softcopy All Files', 'Indoor Wisudawan + Keluarga', '2022-05-29 22:21:21', '2022-05-29 22:21:21'),
(36, 'Paket 3', 'paket-3', '200000', '10', '30 Menit', '20220530052256.jpg', '2 Cetak Foto (8R & 12R)', '1 CD Softcopy All Files', 'Indoor Se-Group/Angkatan/Kampus', '2022-05-29 22:22:56', '2022-05-29 22:22:56'),
(37, 'Paket 4', 'paket-4', '275000', '10', '30 Menit', '20220530052451.jpg', '2 Cetak Foto (8R & 12R)', '1 CD Softcopy All Files', 'Indoor/Outdoor Wisudawan Group/Angkatan', '2022-05-29 22:24:51', '2022-06-16 10:52:06'),
(38, 'Paket 5', 'paket-5', '600000', '25', '60 Menit', '20220530053219.jpg', '2 Cetak Foto (8R & 12R)', '1 CD Softcopy All Files', 'Outdoor Se-Group/Angkatan/Kampus (4 Spot)', '2022-05-29 22:32:19', '2022-05-29 22:34:43'),
(39, 'Paket 6', 'paket-6', '50000', '10', '30 Menit', '20220530053415.jpg', 'No Printed', 'Softcopy All Files', 'Foto Selfie 360° Se-Group/Angkatan/Kampus (Samsung Gear 360°)', '2022-05-29 22:34:15', '2022-05-29 22:34:15'),
(40, 'Paket 7', 'paket-7', '250000', '5', '30 Menit', '20220530053653.jpg', '2 Cetak Foto (8R & 12R)', '1 CD Softcopy All Files', 'Indoor Wisudawan + Keluarga', '2022-05-29 22:36:53', '2022-05-29 22:36:53'),
(41, 'Paket 8', 'paket-8', '350000', '5', '60 Menit', '20220530053917.jpg', '3 Cetak Foto (12R)', '1 CD Softcopy All Files', 'Outdoor Wisudawan + Keluarga (3 Spot)', '2022-05-29 22:39:17', '2022-05-29 22:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(2, 'lihat laporan', 'manajer', '2022-04-19 23:21:13', '2022-04-19 23:21:13'),
(6, 'lihat promo', 'admin', '2022-04-19 23:53:32', '2022-04-19 23:53:32'),
(7, 'lihat paket foto', 'admin', '2022-04-20 09:03:24', '2022-04-20 09:03:24'),
(13, 'lihat reservasi', 'admin', '2022-04-20 22:17:11', '2022-04-20 22:17:11'),
(14, 'lihat galeri', 'admin', '2022-04-20 22:17:26', '2022-04-20 22:17:26'),
(15, 'lihat pelanggan', 'admin', '2022-04-20 22:17:40', '2022-04-20 22:17:40'),
(16, 'lihat user', 'manajer', '2022-04-20 22:17:57', '2022-04-20 22:17:57'),
(17, 'lihat role', 'manajer', '2022-04-20 22:18:14', '2022-04-20 22:18:14'),
(18, 'lihat permission', 'manajer', '2022-04-20 22:18:26', '2022-04-20 22:18:26'),
(19, 'lihat testimoni', 'admin', '2022-04-20 22:45:31', '2022-04-20 22:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 7),
(1, 6),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 18),
(2, 2),
(1, 19),
(2, 16),
(2, 17),
(2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pekerjaan` enum('Siswa','Mahasiswa','Wiraswasta','ASN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_promo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `pekerjaan`, `nama_promo`, `gambar`, `keterangan`, `send_at`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa', 'mahasiswa', '20220708154522.jpg', 'Hallo Sobat Sarjana!\r\n\r\nSelamat wisuda ya.\r\nDimomen sebahagia ini kamu bingung ingin berfoto bersama keluarga? Atau bingung harus memilih ingin foto indoor atau outdoor?\r\n\r\nTahukah kamu di studio foto Sinema Untan kamu bisa dapatkan jawabannya. \r\nKami hadir untuk memberikan rekomendasi apa aja paket foto seru yang bisa kamu dapatkan. Kamu bebas pilih paket foto indoor atau pun outdoor.\r\nBiar hari-harimu makin seru, yuk #FotoBersamaSinemaku untuk melihat paket foto terseru dan menarik yang bisa kamu dapatkan. Yuk buruan reservasi sekarang!\r\n\r\nhttps://baban.demi-toga.com/paket-foto', NULL, '2022-06-27 10:20:09', '2022-07-08 08:45:22'),
(2, 'ASN', 'Awal Bulan Kece', '20220708155929.jpg', 'Hallo sobat pejuang rupiah!\r\n\r\nSelamat gajian ya.\r\nDimomen sebahagia ini kamu bingung ingin berfoto bersama keluarga? Atau bingung harus memilih ingin foto indoor atau outdoor?\r\n\r\nTahukah kamu di studio foto Sinema Untan kamu bisa dapatkan jawabannya. \r\nKami hadir untuk memberikan rekomendasi apa aja paket foto seru yang bisa kamu dapatkan. Kamu bebas pilih paket foto indoor atau pun outdoor.\r\nBiar hari-harimu makin seru, yuk #FotoBersamaSinemaku untuk melihat paket foto terseru dan menarik yang bisa kamu dapatkan. Yuk buruan reservasi sekarang!\r\n\r\nhttps://baban.demi-toga.com/paket-foto', '2022-07-08 16:00:00', '2022-06-28 07:43:48', '2022-07-08 08:59:29'),
(3, 'Wiraswasta', 'Merdeka Dalam Bergaya', '20220628144655.png', 'Hallo sobatku!\r\n\r\nSelamat merayakan Hari Raya Kemerdekaan Indonesia.\r\nDimomen sebahagia ini kamu bingung ingin berfoto bersama keluarga? Atau bingung harus memilih ingin foto indoor atau outdoor?\r\n\r\nTahukah kamu di studio foto Sinema Untan kamu bisa dapatkan jawabannya. \r\nKami hadir untuk memberikan rekomendasi apa aja paket foto seru yang bisa kamu dapatkan. Kamu bebas pilih paket foto indoor atau pun outdoor.\r\nBiar hari-harimu makin seru, yuk #FotoBersamaSinemaku untuk melihat paket foto terseru dan menarik yang bisa kamu dapatkan. Yuk buruan reservasi sekarang!\r\n\r\nhttps://baban.demi-toga.com/paket-foto', NULL, '2022-06-28 07:46:55', '2022-06-28 07:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-09-28 05:58:13', '2021-09-28 05:58:13'),
(2, 'Manajer', '2022-04-19 08:07:49', '2022-04-19 08:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `survei` varchar(191) NOT NULL,
  `rating` enum('5','4','3','2','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `pekerjaan`, `survei`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Dani Kusmeiyadi', 'Mahasiswa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '2021-05-01 08:54:14', '2021-05-01 08:54:14'),
(2, 'Dani Kusmeiyadi', 'Mahasiswa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2', '2021-05-01 08:54:52', '2021-05-01 08:54:52'),
(3, 'Dani Kusmeiyadi', 'Mahasiswa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '3', '2021-05-01 08:55:21', '2021-05-01 08:55:21'),
(4, 'Andreas Nababan', 'Mahasiswa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '2021-05-01 08:56:21', '2021-05-01 08:56:21'),
(5, 'Yoko Bertu', 'Mahasiswa', 'Menurut saya sinemakoe itu', '4', '2021-05-04 00:13:26', '2021-05-04 00:13:26'),
(6, 'yoko', 'yokobertu@gmail.com', 'Pelayanan sudah baik.', '4', '2022-06-16 05:33:45', '2022-06-16 05:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no_hp`, `umur`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(6, 'Andreas Nababan', 'andreasbaban14@gmail.com', '6285750058435', '3', 'Lainnya', NULL, NULL),
(18, 'Dani Kusmeiyadi', 'kusmeiyadi@gmail.com', '6282358177119', '3', 'Siswa', '2022-06-16 05:36:15', '2022-06-16 05:36:15'),
(20, 'Eko Murdianto P.', 'murprakoso@gmail.com', '6289524432340', '4', 'ASN', '2022-06-16 11:07:11', '2022-06-16 11:07:11'),
(23, 'Rendy D.A.P', 'rendyboyz@gmail.com', '6289601212646', '4', 'Wiraswasta', '2022-06-16 11:22:00', '2022-06-16 11:22:00'),
(24, 'yoko', 'yokobertu@gmail.com', '6281257466118', '1', 'Mahasiswa', '2022-06-16 11:33:48', '2022-06-16 11:33:48'),
(25, 'Luiz Dias', 'andreasnababan1214@gmail.com', '6285750058412', '3', 'ASN', '2022-06-16 11:37:52', '2022-06-16 11:37:52'),
(26, 'Hakim Fajar', 'hakimfajar6@student.untan.ac.id', '62895329499092', '2', 'Mahasiswa', '2022-06-23 08:22:04', '2022-06-23 08:22:04'),
(27, 'Fransisca Osela', 'fransiscaosela@gmail.com', '6282153197722', '1', 'Siswa', '2022-06-29 01:01:38', '2022-06-29 01:01:38'),
(29, 'bans', 'babang@gmail.com', '627897987', '2', 'Lainnya', '2022-06-29 13:34:05', '2022-06-29 13:34:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_fotos`
--
ALTER TABLE `jadwal_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_fotos_paket_id_foreign` (`paket_id`),
  ADD KEY `jadwal_fotos_user_id_foreign` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_fotos`
--
ALTER TABLE `paket_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_email_unique` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal_fotos`
--
ALTER TABLE `jadwal_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `paket_fotos`
--
ALTER TABLE `paket_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_fotos`
--
ALTER TABLE `jadwal_fotos`
  ADD CONSTRAINT `jadwal_fotos_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `paket_fotos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_fotos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
