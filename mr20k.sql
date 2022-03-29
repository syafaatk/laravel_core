-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mr20k`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_brand`
--

CREATE TABLE `master_brand` (
  `master_brand_id` int(11) NOT NULL,
  `master_brand_alias` varchar(6) NOT NULL COMMENT 'Nama Alias / Singkatan',
  `master_brand_name` varchar(255) NOT NULL COMMENT 'Nama Brand/Merk',
  `master_brand_status` enum('Active','Non Active') NOT NULL DEFAULT 'Active' COMMENT 'Status Brand/Merk',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_brand`
--

INSERT INTO `master_brand` (`master_brand_id`, `master_brand_alias`, `master_brand_name`, `master_brand_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Umum', 'Umum', 'Active', '2020-08-14 04:18:19', '2020-08-14 04:18:19', NULL),
(2, '555', '555 Thai Tea', 'Active', '2020-08-22 02:08:49', '2020-08-25 07:12:03', '2020-08-25 07:12:03'),
(3, 'UMKM', 'UMKM', 'Active', '2020-08-25 07:08:43', '2020-09-10 05:03:51', '2020-09-10 05:03:51'),
(4, '7dream', '7 dream', 'Active', '2020-08-26 07:33:06', '2020-08-26 07:33:06', NULL),
(5, '555', '555 Thai Tea', 'Active', '2020-08-26 08:36:58', '2020-08-26 08:36:58', NULL),
(6, 'Barber', 'Barbershop', 'Active', '2020-08-26 08:37:58', '2020-09-10 05:03:14', '2020-09-10 05:03:14'),
(7, 'Minko', 'Minko Barbershop', 'Active', '2020-08-26 08:44:25', '2020-08-26 08:44:25', NULL),
(8, 'L2D', 'L2D', 'Active', '2020-08-26 08:52:38', '2020-09-02 07:34:34', NULL),
(9, 'Deyco', 'Deyco Creative', 'Active', '2020-08-26 09:15:10', '2020-09-02 07:34:23', NULL),
(10, 'Ext', 'Extract Studio', 'Active', '2020-08-26 09:40:07', '2020-08-26 09:40:07', NULL),
(11, 'JNE', 'JNE', 'Active', '2020-08-26 10:05:51', '2020-08-26 10:05:51', NULL),
(12, 'KKJ', 'KOPDIT KARYA JASA', 'Active', '2020-08-26 12:52:31', '2020-08-26 12:52:31', NULL),
(13, 'BS', 'Berkah Store', 'Active', '2020-08-27 02:22:29', '2020-08-27 02:22:29', NULL),
(14, 'BS', 'Berkah Store', 'Active', '2020-08-27 02:23:23', '2020-09-10 04:59:40', '2020-09-10 04:59:40'),
(15, 'Awin', 'Awin', 'Active', '2020-08-27 02:32:17', '2020-09-02 07:36:29', NULL),
(16, 'Aufa', 'Aufamedia', 'Active', '2020-08-27 07:00:55', '2020-09-02 07:35:11', NULL),
(17, 'FOOD', 'FOODPEDIA', 'Active', '2020-08-27 07:52:01', '2020-08-27 07:52:01', NULL),
(18, '555', '555 Thai Tea', 'Active', '2020-08-28 01:55:27', '2020-09-10 04:59:20', '2020-09-10 04:59:20'),
(19, 'Azzura', 'Azzura', 'Active', '2020-08-28 04:11:30', '2020-08-28 04:11:30', NULL),
(20, 'BRI', 'BRI', 'Active', '2020-08-28 06:25:15', '2020-08-28 06:25:15', NULL),
(21, 'Cha', 'Cha Boba', 'Active', '2020-08-28 10:51:48', '2020-08-28 10:51:48', NULL),
(22, 'Shoes', 'Saddam Shoes', 'Active', '2020-08-28 11:13:55', '2020-08-28 11:13:55', NULL),
(23, 'JA', 'Joglo Art', 'Active', '2020-08-28 12:06:42', '2020-08-28 12:06:42', NULL),
(24, 'Pizza', 'Pizza Hut', 'Active', '2020-08-29 01:26:59', '2020-08-29 01:26:59', NULL),
(25, 'Shopee', 'Shopee', 'Active', '2020-08-29 03:15:55', '2020-09-10 05:02:53', '2020-09-10 05:02:53'),
(26, 'PLab', 'Pramita Lab', 'Active', '2020-08-29 05:32:46', '2020-08-29 05:32:46', NULL),
(27, 'KP', 'Klinik Pramitha', 'Active', '2020-08-29 06:32:03', '2020-08-29 06:32:03', NULL),
(28, 'BRI', 'BRI', 'Active', '2020-08-31 02:55:11', '2020-09-10 04:59:43', '2020-09-10 04:59:43'),
(29, 'Kvlh', 'Kovilah', 'Active', '2020-08-31 13:39:41', '2020-08-31 13:39:41', NULL),
(30, 'Moba', 'Moba La Tansa', 'Active', '2020-09-01 03:27:19', '2020-09-01 03:27:19', NULL),
(31, 'Suzuki', 'Suzuki', 'Active', '2020-09-01 07:50:19', '2020-09-01 07:50:19', NULL),
(32, 'Plgi', 'Pelangi', 'Active', '2020-09-01 08:09:54', '2020-09-01 08:09:54', NULL),
(33, 'Dka', 'Dekor Akikah', 'Active', '2020-09-01 08:26:08', '2020-09-01 08:26:08', NULL),
(34, 'SM', 'Sosco Melissa', 'Active', '2020-09-01 09:31:57', '2020-09-01 09:31:57', NULL),
(35, 'VPR', 'Viper', 'Active', '2020-09-02 08:32:24', '2020-09-10 05:02:01', '2020-09-10 05:02:01'),
(36, 'Fpr', 'Fiper', 'Active', '2020-09-02 08:35:15', '2020-09-10 05:00:36', NULL),
(37, 'Boba', 'Cha Boba', 'Active', '2020-09-02 09:36:48', '2020-09-10 04:59:47', '2020-09-10 04:59:47'),
(38, 'NYM', 'nyummy_in', 'Active', '2020-09-02 09:44:44', '2020-09-02 09:44:44', NULL),
(39, 'Astra', 'PT. Astra International Tbk', 'Active', '2020-09-02 10:40:05', '2020-09-02 10:40:05', NULL),
(40, 'Astra', 'PT. Astra International Tbk', 'Active', '2020-09-02 10:58:49', '2020-09-10 05:01:56', '2020-09-10 05:01:56'),
(41, '555', '555 Thai Tea', 'Active', '2020-09-03 15:16:49', '2020-09-10 04:59:17', '2020-09-10 04:59:17'),
(42, '555', '555 Thai tea', 'Active', '2020-09-07 03:04:29', '2020-09-10 04:59:12', '2020-09-10 04:59:12'),
(43, 'AC', 'Rand Tekhnik AC', 'Active', '2020-09-07 03:08:17', '2020-09-07 03:08:17', NULL),
(44, 'loko', 'Lokomotif Energi', 'Active', '2020-09-07 03:28:10', '2020-09-07 03:28:10', NULL),
(45, 'AC', 'Rand Tekhnik AC', 'Active', '2020-09-07 03:41:05', '2020-09-07 03:41:05', NULL),
(46, '555', 'Thai tea', 'Active', '2020-09-07 03:42:06', '2020-09-07 03:42:06', NULL),
(47, 'Barber', 'Barbershop', 'Active', '2020-09-07 03:51:37', '2020-09-10 04:59:31', '2020-09-10 04:59:31'),
(48, 'TK', 'TK Cahaya Permata', 'Active', '2020-09-07 04:38:25', '2020-09-07 04:38:25', NULL),
(49, 'TK', 'TK Kreatif Bangsa', 'Active', '2020-09-07 05:41:41', '2020-09-07 05:41:41', NULL),
(50, 'Tea', 'SoRaei', 'Active', '2020-09-07 06:28:36', '2020-09-07 06:28:36', NULL),
(51, 'TK', 'TK Kreatif Bangsa', 'Active', '2020-09-07 07:31:07', '2020-09-10 05:01:51', '2020-09-10 05:01:51'),
(52, 'TK', 'TK Kreatif Bangsa', 'Active', '2020-09-07 07:59:32', '2020-09-10 05:01:45', '2020-09-10 05:01:45'),
(53, 'PHD', 'PIZZA HUT', 'Active', '2020-09-09 09:47:25', '2020-09-09 09:47:25', NULL),
(54, 'ES', 'Extract Studio', 'Active', '2020-09-10 07:09:23', '2020-09-10 07:09:23', NULL),
(55, 'GTT', 'GT Travel', 'Active', '2020-09-10 07:14:10', '2020-09-10 07:14:10', NULL),
(56, 'SWJ', 'Sriwijaya Grafika', 'Active', '2020-09-10 08:41:36', '2020-09-10 08:41:36', NULL),
(57, 'SP', 'Sambal Petir Latansa', 'Active', '2020-09-10 08:43:04', '2020-09-10 08:43:04', NULL),
(58, 'MA', 'Madu Annamlah', 'Active', '2020-09-10 08:45:00', '2020-09-10 08:45:00', NULL),
(59, 'PI', 'Palembang icon', 'Active', '2020-09-11 01:25:15', '2020-09-11 01:25:15', NULL),
(60, 'TAHU', 'Tahu Hot Kriuk', 'Active', '2020-09-11 01:34:24', '2020-09-11 01:34:24', NULL),
(61, 'PH', 'Pizza Hut PIM', 'Active', '2020-09-11 02:11:21', '2020-09-11 02:11:21', NULL),
(62, 'Pempek', 'Pempek Al-Fatih', 'Active', '2020-09-12 06:11:55', '2020-09-12 06:11:55', NULL),
(63, 'bersih', 'Bersihke Sepatu', 'Active', '2020-09-12 08:04:07', '2020-09-12 08:04:07', NULL),
(64, 'RSS', 'RS Siti Fatimah', 'Active', '2020-09-12 09:21:04', '2020-09-12 09:21:04', NULL),
(65, 'MGC', 'MG Collection', 'Active', '2020-09-14 06:00:04', '2020-09-14 06:00:04', NULL),
(66, 'ATK', 'ATK', 'Active', '2020-09-14 09:41:51', '2020-09-14 09:41:51', NULL),
(67, 'PCN', 'PICON', 'Active', '2020-09-14 09:59:12', '2020-09-14 09:59:12', NULL),
(68, 'FMM', 'FAJAR MAS MURNI', 'Active', '2020-09-15 07:00:48', '2020-09-15 07:00:48', NULL),
(69, 'UTS', 'UNIVERSITAS TAMANSISWA PALEMBANG', 'Active', '2020-09-15 10:58:55', '2020-09-15 10:58:55', NULL),
(70, 'K3B', 'Kreasi tiga Bintang', 'Active', '2020-09-15 11:43:24', '2020-09-15 11:43:24', NULL),
(71, 'ID', 'I\'m Dekor', 'Active', '2020-09-15 12:29:26', '2020-09-15 12:29:26', NULL),
(72, 'makeup', 'makeup', 'Active', '2020-09-16 12:24:11', '2020-09-16 12:24:11', NULL),
(73, 'PaLJeK', 'Palembang Ojek', 'Active', '2020-09-17 02:47:29', '2020-09-17 02:47:29', NULL),
(74, 'ovo', 'ovo', 'Active', '2020-09-17 09:12:44', '2020-09-17 09:12:44', NULL),
(75, 'EZP', 'Eazy Print', 'Active', '2020-09-17 11:03:58', '2020-09-17 11:03:58', NULL),
(76, 'MDU', 'Madu Arrayan', 'Active', '2020-09-19 14:14:19', '2020-09-19 14:14:19', NULL),
(77, 'SAD', 'Serasi Advertising', 'Active', '2020-09-21 03:10:10', '2020-09-21 03:10:10', NULL),
(78, 'KN', 'Kantor Notaris', 'Active', '2020-09-23 03:20:44', '2020-09-23 03:20:44', NULL),
(79, 'thr', 'THREE', 'Active', '2020-09-23 05:55:27', '2020-09-23 05:55:27', NULL),
(80, 'Kayu', 'Furniture', 'Active', '2020-09-24 04:51:40', '2020-09-24 04:51:40', NULL),
(81, 'TEES', 'Simple Tees', 'Active', '2020-09-24 07:46:38', '2020-09-24 07:46:38', NULL),
(82, 'baju', 'SimpelTees', 'Active', '2020-09-24 07:47:00', '2020-09-24 07:47:00', NULL),
(83, 'HA', 'HOTEL AMARIS', 'Active', '2020-09-25 12:49:07', '2020-09-25 12:49:07', NULL),
(84, 'ST', 'Soundtrac', 'Active', '2020-09-26 05:08:22', '2020-09-26 05:08:22', NULL),
(85, 'Kopi', '2 Tak Coffee', 'Active', '2020-09-26 06:48:20', '2020-09-26 06:48:20', NULL),
(86, 'PME', 'Paket Mu Express', 'Active', '2020-09-26 08:09:57', '2020-09-26 08:09:57', NULL),
(87, 'CDK', 'CAFE DE KAFFCHA', 'Active', '2020-09-26 13:40:14', '2020-09-26 13:40:14', NULL),
(88, 'PP', 'Palapa Photo', 'Active', '2020-09-28 07:15:04', '2020-09-28 07:15:04', NULL),
(89, 'BRB', 'Bimbel Rumah Belajar', 'Active', '2020-09-28 10:37:53', '2020-09-28 10:37:53', NULL),
(90, 'SK', 'Sari Kurma Afiqah', 'Active', '2020-10-01 04:26:48', '2020-10-01 04:26:48', NULL),
(91, 'BMG', 'Bim Group', 'Active', '2020-10-02 06:45:20', '2020-10-02 06:45:20', NULL),
(92, 'DM', 'Dapur Merah', 'Active', '2020-10-03 09:51:48', '2020-10-03 09:51:48', NULL),
(93, 'CBC', 'Cobuci', 'Active', '2020-10-06 12:10:11', '2020-10-06 12:10:11', NULL),
(94, 'PS', 'Palembang Square', 'Active', '2020-10-08 05:17:21', '2020-10-08 05:17:21', NULL),
(95, 'AMZ', 'Amanzi', 'Active', '2020-10-12 05:01:15', '2020-10-12 05:01:15', NULL),
(96, 'MyF', 'My Feet', 'Active', '2020-10-14 04:54:37', '2020-10-14 04:54:37', NULL),
(97, 'Galaxi', 'Galaxi', 'Active', '2020-10-16 08:12:27', '2020-10-16 08:12:27', NULL),
(98, 'AP', 'AK PRO', 'Active', '2020-10-21 03:41:38', '2020-10-21 03:41:38', NULL),
(99, 'TKR', 'TRIKORA', 'Active', '2020-10-24 02:27:18', '2020-10-24 02:27:18', NULL),
(100, 'SNT', 'soundtrack', 'Active', '2020-10-27 11:34:04', '2020-10-27 11:34:04', NULL),
(101, 'f18', 'f18 digital printing', 'Active', '2020-10-31 05:10:26', '2020-10-31 05:10:26', NULL),
(102, 'LBB', 'Lula Boba', 'Active', '2020-10-31 05:10:42', '2020-10-31 05:10:42', NULL),
(103, 'IMP', 'Imarah Promosindo', 'Active', '2020-11-02 09:54:27', '2020-11-02 09:54:27', NULL),
(104, 'TTL', 'TOTAL PRINT', 'Active', '2020-11-04 04:06:25', '2020-11-04 04:06:25', NULL),
(105, 'SPC', 'Sign Production', 'Active', '2020-11-11 10:54:19', '2020-11-11 10:54:19', NULL),
(106, 'GTN', 'Green Tectona', 'Active', '2020-11-12 13:37:18', '2020-11-12 13:37:18', NULL),
(107, 'TAG', 'TUNAS AUTO GRAHA (TOYOTA', 'Active', '2020-11-13 14:54:02', '2020-11-13 14:54:02', NULL),
(108, 'PNM', 'Print Mate', 'Active', '2020-11-16 07:04:44', '2020-11-16 07:04:44', NULL),
(109, 'SG', 'SRIWIJAYA GALERI', 'Active', '2020-11-19 06:38:17', '2020-11-19 06:38:17', NULL),
(110, 'MH', 'MLATIHARJO', 'Active', '2020-11-21 07:16:38', '2020-11-21 07:16:38', NULL),
(111, 'MF', 'Homade Production', 'Active', '2020-11-27 08:35:39', '2020-11-27 08:35:39', NULL),
(112, 'OM', 'One More', 'Active', '2020-11-28 06:00:08', '2020-11-28 06:00:08', NULL),
(113, 'CSI', 'CSI', 'Active', '2020-12-03 07:59:10', '2020-12-03 07:59:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_city`
--

CREATE TABLE `master_city` (
  `master_city_id` int(11) NOT NULL,
  `master_city_alias` varchar(6) NOT NULL COMMENT 'Singkatan Kota',
  `master_city_name` varchar(255) NOT NULL COMMENT 'Nama Kota',
  `master_city_status` enum('Active','Non Active') NOT NULL COMMENT 'Status Kota',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_city`
--

INSERT INTO `master_city` (`master_city_id`, `master_city_alias`, `master_city_name`, `master_city_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PLG', 'Palembang', 'Active', '2020-04-09 07:26:18', '2020-04-14 07:22:15', NULL),
(2, 'JKT', 'Jakarta', 'Active', '2020-10-14 04:55:03', '2020-10-14 04:55:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_config`
--

CREATE TABLE `master_config` (
  `master_config_id` int(11) NOT NULL,
  `master_config_name` varchar(128) NOT NULL,
  `master_config_status` enum('Active','Non Active') NOT NULL,
  `master_config_json` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_config`
--

INSERT INTO `master_config` (`master_config_id`, `master_config_name`, `master_config_status`, `master_config_json`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'master_config.sales.retail.tax', 'Active', '{\"sales_selling_ppn_name\":\"PPN\",\"sales_selling_ppn_percent\":\"0\",\"sales_selling_pph_name\":\"PPh Final\",\"sales_selling_pph_percent\":\"0.5\"}', '2020-02-25 04:04:18', '2020-08-17 11:11:27', NULL),
(2, 'master_config.sales.coorporate.tax', 'Active', '{\"sales_selling_ppn_name\":\"PPN\",\"sales_selling_ppn_percent\":\"10\",\"sales_selling_pph_name\":\"PPh Normal\",\"sales_selling_pph_percent\":\"2\"}', '2020-02-25 04:04:18', '2020-03-28 18:16:26', NULL),
(3, 'master_config.sales.retail.spk', 'Active', '{\"master_employee_id\":\"4\",\"master_employee_name\":\"Nazar Ahmad A.Md.Des\",\"master_position_id\":\"2\",\"master_position_name\":\"Manager Produksi & Pemasangan\",\"master_employee_id2\":\"27\",\"master_employee_name2\":\"I Gusti Cahyo Bendoro\",\"master_position_id2\":\"3\",\"master_position_name2\":\"SPV Sales Marketing\"}', '2020-02-25 04:04:18', '2020-08-27 16:01:38', NULL),
(4, 'master_config.sales.coorporate.spk', 'Active', '{\"master_employee_id\":\"4\",\"master_employee_name\":\"Nazar Ahmad A.Md.Des\",\"master_position_id\":\"2\",\"master_position_name\":\"Manager Produksi & Pemasangan\",\"master_employee_id2\":\"5\",\"master_employee_name2\":\"Niko Wijaya, A.Md\",\"master_position_id2\":\"3\",\"master_position_name2\":\"SPV Sales Marketing\"}', '2020-02-25 04:04:18', '2020-07-28 03:02:18', NULL),
(5, 'master_config.sales.retail.defaultInput', 'Active', '{\"sales_selling_status_client\":\"Progress\",\"sales_selling_method_payment\":\"Sebelum Pekerjaan Selesai (DP)\",\"master_unit_id\":\"18\",\"master_unit_name\":\"Ls\",\"master_city_id\":\"1\",\"master_city_name\":\"Palembang\",\"master_brand_id\":\"1\",\"master_brand_name\":\"Umum\"}', '2020-02-25 04:04:18', '2020-08-20 08:47:01', NULL),
(6, 'master_config.sales.coorporate.defaultInput', 'Active', '{\"sales_selling_status_client\":\"Penawaran\",\"sales_selling_method_payment\":\"Sebelum Pekerjaan Selesai (DP)\",\"master_unit_id\":\"3\",\"master_unit_name\":\"Ls\",\"master_city_id\":\"1\",\"master_city_name\":\"Palembang\",\"master_brand_id\":\"2\",\"master_brand_name\":\"UMUM\"}', '2020-02-25 04:04:18', '2020-07-28 03:01:53', NULL),
(7, 'master_config.sales.advertising.tax', 'Active', '{\"sales_selling_ppn_name\":\"PPN\",\"sales_selling_ppn_percent\":\"0\",\"sales_selling_pph_name\":\"PPh Final\",\"sales_selling_pph_percent\":\"0.5\"}', '2020-02-25 04:04:18', '2020-08-17 11:11:27', NULL),
(8, 'master_config.sales.advertising.spk', 'Active', '{\"master_employee_id\":\"4\",\"master_employee_name\":\"Nazar Ahmad A.Md.Des\",\"master_position_id\":\"2\",\"master_position_name\":\"Manager Produksi & Pemasangan\",\"master_employee_id2\":\"27\",\"master_employee_name2\":\"I Gusti Cahyo Bendoro\",\"master_position_id2\":\"3\",\"master_position_name2\":\"SPV Sales Marketing\"}', '2020-02-25 04:04:18', '2020-08-27 16:01:38', NULL),
(9, 'master_config.sales.advertising.defaultInput', 'Active', '{\"sales_selling_status_client\":\"Progress\",\"sales_selling_method_payment\":\"Sebelum Pekerjaan Selesai (DP)\",\"master_unit_id\":\"18\",\"master_unit_name\":\"Ls\",\"master_city_id\":\"1\",\"master_city_name\":\"Palembang\",\"master_brand_id\":\"1\",\"master_brand_name\":\"Umum\"}', '2020-02-25 04:04:18', '2020-08-20 08:47:01', NULL),
(10, 'master_config.wa.it', 'Active', '{\"host\":\"100.8.15.20\",\"port\":\"3001\",\"timeout\":\"30\",\"phone\":\"62895623526803\",\"status\":\"Active\",\"token\":\"eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiYWxkb19rIiwiZXhwIjoxOTE4MjgzNzE0fQ.TlTG54qTSD7ftxXdbv3rOfkiraGUvIlu-zoR3Eti6DLgILEf8H2-CIyf9C2x22wxnO62t8vYtK-nsba2rHplchHO1OTUGfTualemBPMkW8heVgRYCAuDhX0J9h69MNTdVeA5Zn-blIrb_UeIQ5u9ru-qACfBd16mu7wA-qGpdnEmkgGYPKxJ3apq4gQ0h25gVjO1xldvM32h4Nh87BWT8rXRw26Fy5T1BdPwmdxH4wokbaJS8shWxlBBr_3BFsKoAadBiV_Zcl4NDE7gD3hi1yp70gUpMraO4uu6n9b1w-EdavE_ix4QMfZq8kv9l8DeQmLrGj4RdhS7eHKLSN8RiA\"}', '2020-02-25 04:04:18', '2020-11-11 08:35:14', NULL),
(11, 'master_config.wa.hr', 'Active', '{\"host\":\"100.8.15.20\",\"port\":\"3000\",\"timeout\":\"30\",\"phone\":\"6285268940076\",\"status\":\"Active\",\"token\":\"eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiYWxkb19rIiwiZXhwIjoxOTE4Mjg0MTgxfQ.nlleY7KWUim1LdRPREOQo0ilqe8PbQ9JYC_9mxSOwGHdSpWoTCfgny8eQxAOYOxp227k4FS6fu-wW7ggNDuyqt-dyTGocpIUZOmgW_KG-zFhymNENjJHiCg44cI87e8AMiIjuJpn4KxxiqR8ppzwNl7kQjeSOZHJtuWCCzP4An27tV12vWi7B74h92jkSVqhlG18DbyQG1xRKTCTStMwJ5dMbCXWZsXh6-nLqG7H9B-5vvjwO1-9dFRIyjODkV3_cEES-uaGPY25w-RHDBtrbsaYkjUXjxw_vuWjSVe7FcnWVhkSHPYYb8kpb74jkfgHPf8O99fjWA816rTQDYHdzg\"}', '2020-11-11 08:43:01', '2020-11-11 08:43:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_item`
--

CREATE TABLE `master_item` (
  `master_item_id` int(11) NOT NULL,
  `master_item_name` varchar(255) NOT NULL COMMENT 'Nama Barang / Bahan Baku',
  `master_unit_id` int(11) NOT NULL COMMENT 'Unit Ref master_unit',
  `master_item_price` float(11,2) NOT NULL COMMENT 'Harga Modal',
  `master_item_bottom_price` float(11,2) NOT NULL COMMENT 'Bottom Price / Harga Terendah',
  `master_item_price_retail` float(11,2) NOT NULL COMMENT 'Harga Rekomendasi Retail',
  `master_item_price_coorporate` float(11,2) NOT NULL COMMENT 'Harga Rekomendasi Coorporate',
  `master_brand_id` int(11) NOT NULL COMMENT 'Merk / Brand Ref master_brand',
  `master_warehouse_id` int(11) NOT NULL COMMENT 'Gudang Ref master_warehouse',
  `master_item_price_last_update` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Tgl Update Harga Terakhir',
  `master_supplier_id` int(11) NOT NULL COMMENT 'Supplier Ref master_supplier',
  `master_item_file` text NOT NULL COMMENT 'File Upload',
  `master_item_stock` float(9,2) NOT NULL COMMENT 'Stok',
  `master_item_stock_minimum` float(9,2) NOT NULL COMMENT 'Stok Minimum',
  `master_item_status` enum('Active','Non Active') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_item`
--

INSERT INTO `master_item` (`master_item_id`, `master_item_name`, `master_unit_id`, `master_item_price`, `master_item_bottom_price`, `master_item_price_retail`, `master_item_price_coorporate`, `master_brand_id`, `master_warehouse_id`, `master_item_price_last_update`, `master_supplier_id`, `master_item_file`, `master_item_stock`, `master_item_stock_minimum`, `master_item_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HVS 70gr', 1, 936.00, 1200.00, 1300.00, 1625.00, 1, 1, '2020-08-14 06:12:01', 1, '0e2b83e9852c7cfcbc6eaa9ddc637e33.jpeg', 999581.50, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 12:17:47', NULL),
(2, 'HVS 80gr', 1, 1010.00, 1300.00, 1400.00, 1750.00, 1, 1, '2020-08-14 06:12:01', 1, '6539f0d70e73655e36c628b3e14c0dab.jpeg', 999921.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 09:36:05', NULL),
(3, 'HVS 100gr', 1, 1090.00, 1500.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, 'cc10623cb452d5c87fc1dd2661a9a724.jpeg', 999989.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 14:09:37', NULL),
(4, 'Konstruk 120 gr', 2, 1225.00, 1600.00, 1700.00, 2125.00, 1, 1, '2020-08-14 06:12:01', 1, '27f67f7883ec0740d1246c7342094c07.jpeg', 996860.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:22:46', NULL),
(5, 'Konstruk 150 gr', 2, 1300.00, 1700.00, 1800.00, 2250.00, 1, 1, '2020-08-14 06:12:01', 1, '34b12076a68ececbe456f8edbdd80b89.jpeg', 995905.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 07:16:02', NULL),
(6, 'Konstruk 190 gr', 2, 1425.00, 1800.00, 1900.00, 2375.00, 1, 1, '2020-08-14 06:12:01', 1, '59ae14c8a44de738834983e7bd6c9eae.jpeg', 998458.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:22:46', NULL),
(7, 'Konstruk 210 gr', 2, 1475.00, 1900.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '26d9a6faa18cc4cb207327e614412f1f.jpeg', 998829.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 10:40:15', NULL),
(8, 'Konstruk 230 gr', 2, 1550.00, 2000.00, 2100.00, 2625.00, 1, 1, '2020-08-14 06:12:01', 1, '6e236e706f427887a62ad13b66e0a6a5.jpeg', 999321.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 07:50:34', NULL),
(9, 'Konstruk 260 gr', 2, 1625.00, 2100.00, 2200.00, 2750.00, 1, 1, '2020-08-14 06:12:01', 1, '9256b999c6a7ea2bad701a0449a29723.jpeg', 995901.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 07:04:54', NULL),
(10, 'Concorde', 2, 2225.00, 2650.00, 2750.00, 3438.00, 1, 1, '2020-08-14 06:12:01', 1, 'be481126364540bbb710c9424fac9118.jpeg', 999925.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 07:23:06', NULL),
(11, 'Linen', 2, 2225.00, 2400.00, 2400.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '83c492b6362673d3d70f9096d3814dd5.jpeg', 998883.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:22:46', NULL),
(12, 'Jasmine', 8, 1075.00, 2000.00, 2500.00, 6000.00, 1, 1, '2020-08-14 06:12:01', 1, 'd0aa7e1d2daa47de444baedb0237a0c0.jpeg', 1000.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-04 02:35:02', NULL),
(13, 'Stiker HVS', 2, 2050.00, 2400.00, 2500.00, 3125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999907.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 13:10:12', NULL),
(14, 'Stiker Kromo A3', 2, 2050.00, 2400.00, 2500.00, 3125.00, 1, 1, '2020-08-14 06:12:01', 1, '85418c10ec22c7538e19d35fe6caef23.jpeg', 995250.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 05:57:58', NULL),
(15, 'Stiker PVC doff A3', 2, 4350.00, 5000.00, 6000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '2a2e34f12b754eb6105e9ff09a78e3f4.jpeg', 999763.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-30 05:01:30', NULL),
(16, 'Stiker PVC glossy A3', 2, 4350.00, 5000.00, 6000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '026943bf9cede87102e0b66a2e245a48.jpeg', 999363.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 02:08:25', NULL),
(17, 'Stiker Transparant A3', 2, 4350.00, 5500.00, 6000.00, 10000.00, 1, 1, '2020-08-14 06:12:01', 1, '5f6d71cab555bf4790fbe47ec31c0837.jpeg', 999812.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-01 05:10:42', NULL),
(18, 'ID CARD 1 sisi', 3, 1000.00, 3500.00, 4000.00, 8000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999910.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-25 02:49:25', NULL),
(19, 'ID CARD 2 sisi', 3, 2000.00, 4500.00, 5000.00, 10000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999286.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 11:32:39', NULL),
(20, 'Finishing - Cutting Kiss Cut A3+ Pola (Kotak, Bulat, Oval, Segitiga)', 2, 300.00, 1000.00, 1000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 997577.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 14:59:03', NULL),
(21, 'Finishing - Cutting Die Cut A3+', 2, 300.00, 3000.00, 5000.00, 3750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999882.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 05:46:00', NULL),
(22, 'Finishing - Jilid Buku Spiral - tebal 1 sd 9 lbr ap 260', 4, 1450.00, 2500.00, 3000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999823.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 13:51:01', NULL),
(23, 'Finishing - Jilid Buku Spiral - tebal 10 sd 15 lbr ap 260', 4, 1600.00, 4500.00, 5000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999922.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 11:42:31', NULL),
(24, 'Finishing - Jilid Buku Spiral - tebal 16 sd 35 lbr ap 260', 4, 2900.00, 7500.00, 8000.00, 10000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999983.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-16 06:01:22', NULL),
(25, 'Finishing - Jilid Buku Lem per cm P x T (cm)', 5, 50.00, 60.00, 75.00, 100.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999700.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-15 02:36:58', NULL),
(26, 'Finishing - Jilid Buku Lem Panas a5', 6, 1000.00, 1800.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-22 13:49:46', '2020-09-22 13:49:46'),
(27, 'Finishing - Jilid Buku Lem Panas a4', 7, 2000.00, 3750.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-22 13:49:43', '2020-09-22 13:49:43'),
(28, 'Finishing - Jilid Buku Lem Panas a3/a3+', 8, 4000.00, 7500.00, 8000.00, 10000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-22 13:49:41', '2020-09-22 13:49:41'),
(29, 'Finishing - Steples', 4, 250.00, 850.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(30, 'Finishing - Steples + Cover + Lakban samping', 4, 2500.00, 3500.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(31, 'Finishing - Cacah/Tekuk', 4, 250.00, 900.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999974.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-30 08:04:10', NULL),
(32, 'Kartu Nama (Konstruk 260gr + Kotak) 1 Sisi isi 100pcs', 3, 17800.00, 25000.00, 35000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999978.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 11:37:28', NULL),
(33, 'Kartu Nama (Konstruk 260gr + Laminasi + Kotak) 1 Sisi isi 100pcs', 3, 21800.00, 35000.00, 45000.00, 68750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999993.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-09 05:03:52', NULL),
(34, 'Kartu Nama (Konstruk 260gr + Kotak) 2 Sisi isi 100pcs', 3, 25800.00, 35000.00, 45000.00, 81250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999994.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 01:31:07', NULL),
(35, 'Kartu Nama (Konstruk 260gr + Laminasi + Kotak) 2 Sisi isi 100pcs', 3, 29800.00, 45000.00, 55000.00, 93750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-17 13:24:03', NULL),
(36, 'ID Card 1 Sisi + Cover + Tali', 15, 7000.00, 13500.00, 15000.00, 18750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-02 08:39:46', NULL),
(37, 'ID Card 1 Sisi + Cover + Yoyo', 15, 8000.00, 23500.00, 25000.00, 31250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(38, 'ID Card 1 Sisi + Cover + Tali Custom/Branding', 15, 19000.00, 30000.00, 35000.00, 43750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(39, 'ID Card 2 Sisi + Cover + Tali', 15, 8000.00, 17500.00, 20000.00, 25000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(40, 'ID Card 2 Sisi + Cover + Yoyo', 15, 9000.00, 27500.00, 30000.00, 37500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(41, 'ID Card 2 Sisi + Cover + Tali Custom/Branding', 15, 20000.00, 37500.00, 40000.00, 50000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(42, 'Kalender Gantung Jepit seng 1  Halaman Konstruk A3 Potrait Ap 260gr', 14, 1825.00, 4000.00, 5000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '6273ce38b47d154f4c50e288993be2ce.jpeg', 999987.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 14:31:06', NULL),
(43, 'Kalender Gantung Jepit seng 3 Halaman Konstruk A3 Potrait Ap 120gr', 14, 5075.00, 7000.00, 8000.00, 10000.00, 1, 1, '2020-08-14 06:12:01', 1, 'a10af95164c67a3599c84b6da73f8f0d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-10 13:59:45', NULL),
(44, 'Kalender Gantung Jepit seng 6 Halaman Konstruk A3 Potrait Ap 120gr', 14, 9950.00, 12000.00, 13000.00, 15000.00, 1, 1, '2020-08-14 06:12:01', 1, '586a8ee0d6efde4c0e817fb64ed2dc5d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-10 13:59:38', NULL),
(45, 'Kalender Gantung Jepit seng 12 Halaman Konstruk A3 Potrait Ap 120gr', 14, 19700.00, 22000.00, 23000.00, 30000.00, 1, 1, '2020-08-14 06:12:01', 1, '7f835df40529aad2e8e2cb0aa9a5829a.jpeg', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-10 13:59:30', NULL),
(46, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A3', 12, 612500.00, 800000.00, 850000.00, 1062500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(47, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A3', 12, 1037500.00, 1300000.00, 1350000.00, 1687500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(48, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A4', 12, 306250.00, 400000.00, 425000.00, 531250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(49, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A4', 12, 518750.00, 650000.00, 675000.00, 843750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(50, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A5', 12, 153125.00, 200000.00, 212500.00, 265625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999990.50, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-09 12:59:17', NULL),
(51, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A5', 12, 259375.00, 325000.00, 337500.00, 421875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-23 10:45:37', NULL),
(52, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A6', 12, 77175.00, 100000.00, 107100.00, 133875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(53, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A6', 12, 130725.00, 162500.00, 170100.00, 212625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(54, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A4/3 (10cm x 21cm)', 12, 102083.33, 133333.00, 141667.00, 177083.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(55, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A4/3 (10cm x 21cm)', 12, 172916.67, 216667.00, 225000.00, 281250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(56, 'Finishing - Laminasi Doff/Glossy 1 sisi A3+', 2, 161.50, 1000.00, 1000.00, 1000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 997531.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 11:42:31', NULL),
(57, 'Finishing - Laminating Keras', 7, 1780.00, 3000.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999887.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-14 09:24:41', NULL),
(58, 'Cetak 2 Sisi A3+', 2, 850.00, 950.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 997594.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 10:22:03', NULL),
(59, 'BAHAN- Vinyl Frontlite China 280gr', 13, 5500.00, 7500.00, 8500.00, 10625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999964.38, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-01 03:13:29', NULL),
(60, 'BAHAN - Vinyl Frontlite China 340gr', 13, 7400.00, 8400.00, 10400.00, 13000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.31, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-01 06:55:04', NULL),
(61, 'BAHAN - Vinyl Frontlite Korcin 440gr', 13, 10500.00, 12500.00, 13500.00, 16875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999992.06, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-16 11:10:36', NULL),
(62, 'Vinyl Frontlite China 280gr', 13, 8000.00, 12000.00, 13000.00, 16250.00, 1, 1, '2020-08-14 06:12:01', 1, '97fdbd7d74dde9220918e072311a8162.jpeg', 994364.12, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:42:45', NULL),
(63, 'Vinyl Frontlite China 340gr', 13, 9900.00, 16000.00, 18000.00, 22500.00, 1, 1, '2020-08-14 06:12:01', 1, 'aaab8f9f2bcd34d900e44363d49c7b5d.jpeg', 998596.75, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 14:36:28', NULL),
(64, 'Vinyl Frontlite Korcin 440gr', 13, 15500.00, 25000.00, 35000.00, 43750.00, 1, 1, '2020-08-14 06:12:01', 1, '632207ebcc0a84ba007a385614a15019.jpeg', 999379.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 11:09:03', NULL),
(65, 'Vinyl Frontlite jerman 510gr', 13, 36500.00, 80000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999969.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-16 04:27:55', NULL),
(66, 'Vinyl Backlite 610gr', 13, 25500.00, 75000.00, 80000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '7e3e0275f2dac413392138c1504d34f5.jpeg', 999959.69, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-09 02:42:00', NULL),
(67, 'Cloth Banner', 13, 14500.00, 23000.00, 25000.00, 31250.00, 1, 1, '2020-08-14 06:12:01', 1, '42706561e29068399e863fd42ddbce83.jpeg', 999952.75, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 07:11:15', NULL),
(68, 'Cloth Banner Outdoor', 13, 13500.00, 23000.00, 25000.00, 31250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 02:34:55', '2020-08-29 02:34:55'),
(69, 'Canvas', 13, 95000.00, 120000.00, 230000.00, 287500.00, 1, 1, '2020-08-14 06:12:01', 1, '43e152952dfc5ac092ceac858571dcb1.jpeg', 999998.19, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-16 09:37:42', NULL),
(70, 'Fabric- Mimaki', 13, 85000.00, 230000.00, 230000.00, 287500.00, 1, 1, '2020-08-14 06:12:01', 1, '84bbd28e09466e1295687123cbe8ca7f.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 07:47:35', NULL),
(71, 'Duratrans/Backlite Film Korea - Mimaki', 13, 65000.00, 180000.00, 230000.00, 287500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.62, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-09 04:00:49', NULL),
(72, 'Sticker Vynil - Indoor (Mimaki)', 13, 15000.00, 60000.00, 80000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '2bfd0ab9432caeff0ff37e840dd60fd8.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 13:14:34', NULL),
(73, 'Sticker Ritrama Ekonomis (Mimaki)', 13, 26000.00, 70000.00, 90000.00, 112500.00, 1, 1, '2020-08-14 06:12:01', 1, 'a3a5a8e0c419d444bcd26d169c801021.jpeg', 999945.56, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 07:42:08', NULL),
(74, 'Sticker Ritrama Premium (Mimaki)', 13, 34000.00, 80000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '725f3e42ce1c36c8e0ede6f4d848a138.jpeg', 999966.25, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 07:21:04', NULL),
(75, 'Sticker Vynil (outdoor)', 13, 15000.00, 50000.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, 'f1b7f387647709b652a475778f5adbe7.jpeg', 999991.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-05 04:56:10', NULL),
(76, 'Sticker Ritrama Ekonomis (outdoor)', 13, 26000.00, 60000.00, 80000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '3da976d49c442d15f2dc0437f8390bea.jpeg', 999889.75, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-30 05:01:30', NULL),
(77, 'Sticker Ritrama Premium (outdoor)', 13, 34000.00, 70000.00, 90000.00, 112500.00, 1, 1, '2020-08-14 06:12:01', 1, '3b60a7bea29c135232a22eb27ec7a5eb.jpeg', 999992.94, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-14 05:51:00', NULL),
(78, 'Cutting Sticker Scotlite', 17, 11.83, 40.00, 65.00, 81.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(79, 'Cutting Sticker Oracal', 17, 11.83, 35.00, 55.00, 69.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(80, 'Cutting Stiker Vynil', 17, 7.00, 30.00, 45.00, 56.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(81, 'Stiker Ritrama Premium Print & Cut', 13, 54000.00, 130000.00, 150000.00, 187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 11:48:04', '2020-08-29 11:48:04'),
(82, 'Sticker One Way', 13, 25500.00, 70000.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '8f1a618d6f826b00048167404d3d6cd6.jpeg', 999968.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 06:21:26', NULL),
(83, 'Sticker Transparant', 13, 19000.00, 90000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '2fbed29529ffbb5166e94e169f3d09cf.jpeg', 999994.62, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-10 08:48:32', NULL),
(84, 'Sticker Sandblast Print', 13, 33000.00, 90000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 12:13:38', '2020-08-29 12:13:38'),
(85, 'Stiker Backlite', 13, 40000.00, 90000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, 'd8b07d1bee04c5b25c071ae75cd636c0.jpeg', 999974.75, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-31 08:06:19', NULL),
(86, 'Stiker Ritrama Blockout Ekonomis 80mic', 13, 40000.00, 95000.00, 105000.00, 131250.00, 1, 1, '2020-08-14 06:12:01', 1, '2315a5019cd3fb79246ea848d8a9808d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 11:59:31', NULL),
(87, 'Stiker Ritrama Blockout Ekonomis 100mic', 13, 50000.00, 100000.00, 110000.00, 137500.00, 1, 1, '2020-08-14 06:12:01', 1, '2e723790d7806dedba31802d553b84dd.jpeg', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 11:54:31', NULL),
(88, 'Stiker Ritrama Blockout Premium 100mic', 13, 52000.00, 110000.00, 120000.00, 150000.00, 1, 1, '2020-08-14 06:12:01', 1, 'ce980d5574a8c53e07a239cebf6211d7.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 07:51:28', NULL),
(89, 'Albatros', 13, 27500.00, 70000.00, 80000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '6e42f683242e274eb3c4554ab01a1c5a.jpeg', 999975.31, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 06:42:13', NULL),
(90, 'Luster', 13, 50000.00, 90000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '979556e4b0f17c5f7bf1e740fabfdfaa.jpeg', 999996.69, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-26 08:10:18', NULL),
(91, 'Photo Paper', 13, 34000.00, 80000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '53f6790520339e0c2a72fc799b5197c8.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 07:57:15', NULL),
(92, 'PVC', 13, 36500.00, 80000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(93, 'Finishing - Laminasi 3D Bulat m2', 13, 25000.00, 40000.00, 45000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 09:59:04', NULL),
(94, 'Finishing - Laminasi 3D Kotak m2', 13, 25000.00, 40000.00, 45000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 09:58:58', NULL),
(95, 'Finishing - Laminasi Doff/Glossy m2', 13, 5800.00, 12000.00, 20000.00, 25000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999822.31, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 07:42:08', NULL),
(96, 'PASANG ke Media', 13, 5800.00, 10000.00, 20000.00, 25000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999911.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 12:07:47', '2020-08-28 12:07:47'),
(97, 'Rangka X-Banner Fiber 60x160', 14, 14000.00, 27500.00, 30000.00, 37500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999931.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-30 12:00:43', NULL),
(98, 'Rangka X-Banner Alumunium 60x160', 14, 22000.00, 30000.00, 40000.00, 50000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999993.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-09 08:57:47', NULL),
(99, 'Cover X-banner flexi 280grm 60X160', 14, 16000.00, 24000.00, 25000.00, 32500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999908.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-30 12:00:43', NULL),
(100, 'Cover X-banner flexi 340grm 60X160', 14, 19800.00, 32000.00, 35000.00, 45000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999976.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-18 13:22:54', NULL),
(101, 'Cover X-banner flexi 440grm 60X160', 14, 25000.00, 50000.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-09 04:52:51', NULL),
(102, 'Cover X-banner albatros laminasi doff/gloss 60x160', 14, 75600.00, 96000.00, 96000.00, 144000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-24 12:27:10', NULL),
(111, 'Rangka Mini X-Banner Ekonomis', 14, 5000.00, 8000.00, 10000.00, 12500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 07:32:44', NULL),
(112, 'Rangka Mini X-Banner Premium', 14, 7000.00, 12000.00, 14000.00, 17500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-14 06:09:20', NULL),
(113, 'Cover Mini X-Banner - Flexi 280gr', 14, 1000.00, 3000.00, 3500.00, 4375.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(114, 'Cover Mini X-Banner - Konstruk 260gr', 14, 1625.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 07:32:44', NULL),
(119, 'Rangka Roll Up Banner 60x160', 14, 95000.00, 125000.00, 145000.00, 181250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-04 06:25:33', NULL),
(120, 'Rangka Roll Up Banner 80x200', 14, 105000.00, 135000.00, 155000.00, 193750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-12 07:05:14', NULL),
(121, 'Rangka Roll Up Banner 85x200', 14, 115000.00, 145000.00, 165000.00, 206250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(122, 'Cover Roll Up Banner 60x160 - Flexi 440gr', 14, 25000.00, 50000.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 07:54:52', NULL),
(123, 'Cover Roll Up Banner 60x160 - Albatros Laminasi', 14, 75600.00, 96000.00, 160000.00, 200000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(124, 'Cover Roll Up Banner 80x200 - Flexi 440gr', 14, 25000.00, 56000.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 09:57:33', NULL),
(125, 'Cover Roll Up Banner 80x200 - Albatros Laminasi', 14, 100000.00, 160000.00, 200000.00, 250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(126, 'Cover Roll Up Banner 85x200 - Flexi 440gr', 14, 25000.00, 59500.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(127, 'Cover Roll Up Banner 85x200 - Albatros Laminasi', 14, 100000.00, 170000.00, 200000.00, 250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(134, 'Stand Tripod (kaki tripod)', 14, 50000.00, 100000.00, 125000.00, 156250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999947.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:03:33', NULL),
(135, 'Banner Tripod (Impraboard 60x83cm 5mm Putih + Flexy 280gr)', 14, 42000.00, 80000.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(136, 'Banner Tripod (Impraboard 60x83cm 5mm Putih + Stiker Vynil Laminasi)', 14, 50000.00, 135000.00, 150000.00, 187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999952.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 09:25:05', NULL),
(137, 'Banner Tripod (KD Board uk. A1 5mm Putih + Stiker Vynil Laminasi)', 14, 50000.00, 135000.00, 150000.00, 187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(138, 'Banner Tripod (Impraboard 60x83cm 5mm Putih + Flexy 280gr) 2 Sisi', 14, 63000.00, 115000.00, 127500.00, 159375.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(139, 'Banner Tripod (Impraboard 60x83cm 5mm Putih + Stiker Vynil Laminasi) 2 Sisi', 14, 75000.00, 200000.00, 225000.00, 281250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(140, 'Banner Tripod (KD Board uk. A1 5mm Putih + Stiker Vynil Laminasi) 2 Sisi', 14, 75000.00, 200000.00, 225000.00, 281250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(147, 'Event Desk Polos', 14, 460000.00, 575000.00, 600000.00, 735000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-06 12:49:11', NULL),
(148, 'Stiker Event Desk (Ritrama laminasi doff/glossy)', 14, 100000.00, 200000.00, 240000.00, 240000.00, 1, 1, '2020-08-14 06:12:01', 1, '4f06ef234c03865c72a03c63b7960394.jpeg', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-06 12:49:11', NULL),
(150, 'Tent Card Acrylic uk. A4 Portrait +sisipan / tanpa sisipan AP 120-260grm', 14, 35000.00, 52500.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 05:46:17', NULL),
(151, 'Tent Card Acrylic uk. A4 Landscape +sisipan / tanpa sisipan AP 120-260grm', 14, 35000.00, 52500.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(152, 'Tent Card Acrylic uk. A5 Portrait +sisipan / tanpa sisipan AP 120-260grm', 14, 26000.00, 38000.00, 52000.00, 65000.00, 1, 1, '2020-08-14 06:12:01', 1, '8b04a6fdefd8a25b7736a3bd7089804c.jpeg', 999519.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-24 09:00:32', NULL),
(153, 'Tent Card Acrylic uk. A5 Landscape +sisipan / tanpa sisipan AP 120-260grm', 14, 26000.00, 38000.00, 52000.00, 65000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(154, 'Tent Card Acrylic uk. A6 Portrait +sisipan / tanpa sisipan AP -120-260grm', 14, 12500.00, 18750.00, 25000.00, 31250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999985.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-24 04:59:52', NULL),
(155, 'Tent Card Acrylic uk. A6 Landscape +sisipan / tanpa sisipan AP 120-260grm', 14, 12500.00, 18750.00, 25000.00, 31250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(156, 'Tent Card A-Card A4 Konstruk 310gr 1 sisi', 14, 6000.00, 6500.00, 12500.00, 15625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 02:36:03', NULL),
(157, 'Tent Card A-Card A4 Konstruk 310gr 2 sisi', 14, 6000.00, 8000.00, 15000.00, 18750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(158, 'Tent Card A-Card A5 Konstruk 310gr 1 sisi', 14, 4000.00, 6500.00, 8500.00, 10625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(159, 'Tent Card A-Card A5 Konstruk 310gr 2 sisi', 14, 4000.00, 6000.00, 10000.00, 12500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(160, 'Wobbler d.14cm (Konstruk 310gr + Mika + Double tape)', 14, 1500.00, 3000.00, 7500.00, 9375.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(161, 'Impraboard Putih 2mm uk. 125cm x 150cm', 14, 39000.00, 60000.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999989.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 07:14:54', NULL),
(162, 'Impraboard Putih 3mm uk. 125cm x 150cm', 14, 45000.00, 70000.00, 80000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999995.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-01 09:20:53', NULL),
(163, 'Impraboard Putih 3mm uk. 122cm x 244cm', 14, 80000.00, 110000.00, 120000.00, 150000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-27 07:03:14', NULL),
(164, 'Impraboard Putih 5mm uk. 125cm x 150cm', 14, 75000.00, 90000.00, 100000.00, 125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999951.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-20 07:28:02', NULL),
(165, 'Impraboard Putih 5mm uk. 60cm x 83cm', 14, 21000.00, 29500.30, 42500.00, 53125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999991.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-30 06:45:11', NULL),
(166, 'KD Board Putih 5mm uk. 122cm x 244cm', 14, 90000.00, 155000.00, 175000.00, 218750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-03 11:43:28', NULL),
(167, 'Sandblast Polos', 13, 35000.00, 50000.00, 70000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999994.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-17 07:46:23', NULL),
(168, 'Oracal Polos', 14, 65000.00, 75000.00, 85000.00, 106250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(169, '\"(PMMA) - Acrylic Transparan 1,5mm uk. 122cm x 244cm\"', 14, 310000.00, 356500.00, 403000.00, 503750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(170, '(PMMA) - Acrylic Transparan 2mm uk. 122cm x 244cm', 14, 380000.00, 437000.00, 494000.00, 617500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(171, '(PMMA) - Acrylic Putih Susu 2mm uk. 122cm x 244cm', 14, 400000.00, 460000.00, 520000.00, 650000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(172, '(PMMA) - Acrylic Hitam 2mm uk. 122cm x 244cm', 14, 420000.00, 483000.00, 546000.00, 682500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 08:25:44', '2020-08-28 08:25:44'),
(173, '(PMMA) - Acrylic Transparan 3mm uk. 122cm x 244cm', 14, 555000.00, 655000.00, 721500.00, 901875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(174, '(PMMA) - Acrylic Putih Susu 3mm uk. 122cm x 244cm', 14, 575000.00, 661250.00, 747500.00, 934375.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(175, '(PMMA) - Acrylic Hitam 3mm uk. 122cm x 244cm', 14, 595000.00, 684250.00, 773500.00, 966875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 08:25:48', '2020-08-28 08:25:48'),
(176, '(PMMA) - Acrylic Transparan 5mm uk. 122cm x 244cm', 14, 925000.00, 1063750.00, 1202500.00, 1503125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(177, '(PMMA) - Acrylic Putih Susu 5mm uk. 122cm x 244cm', 14, 950000.00, 1092500.00, 1235000.00, 1543750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(178, '(PS) - Acrylic Transparan 2mm uk. 122cm x 244cm', 14, 310000.00, 356500.00, 403000.00, 503750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(179, '(PS) - Acrylic Putih Susu 2mm uk. 122cm x 244cm', 14, 310000.00, 356500.00, 403000.00, 503750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(180, '(PS) - Acrylic Transparan 3mm uk. 122cm x 244cm', 14, 445000.00, 511750.00, 578500.00, 723125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(181, '(PS) - Acrylic Putih Susu 3mm uk. 122cm x 244cm', 14, 445000.00, 511750.00, 578500.00, 723125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(182, '(PS) - Acrylic Transparan 5mm uk. 122cm x 244cm', 14, 725000.00, 833750.00, 942500.00, 1178125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(183, '(PS) - Acrylic Putih Susu 5mm uk. 122cm x 244cm', 14, 725000.00, 833750.00, 942500.00, 1178125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(184, '(MIRROR) - Acrylic Gold 2mm uk. 122cm x 244cm', 14, 625000.00, 718750.00, 812500.00, 1015625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 08:24:19', '2020-08-28 08:24:19'),
(185, '(MIRROR) - Acrylic Silver 2mm uk. 122cm x 244cm', 14, 625000.00, 718750.00, 812500.00, 1015625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-28 08:24:25', '2020-08-28 08:24:25'),
(186, 'Acrylic Polos Custom PMMA 2mm transparant (cm) pxl', 14, 30.00, 40.00, 50.00, 60.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 969695.25, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-27 07:32:52', NULL),
(187, 'Acrylic Polos Custom PMMA 3mm transparant (cm) pxl', 14, 40.00, 50.00, 60.00, 70.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 984267.25, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:55:25', NULL),
(188, 'Acrylic Polos Custom PMMA 5mm transparant (cm) pxl', 14, 50.00, 60.00, 70.00, 80.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999453.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-04 11:52:22', NULL),
(189, 'Undangan - Art Carton 260grm A4 2 sisi lipat 2 laminasi doff/gloss + Plastik', 14, 1750.00, 5000.00, 6000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(190, 'Undangan - Kode 8811', 14, 2000.00, 2250.00, 3000.00, 3750.00, 1, 1, '2020-08-14 06:12:01', 1, '9d6da9c3e924f9258e5d7e241fcf00e4.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:49:48', NULL),
(191, 'Undangan - Kode 8820', 14, 3500.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '4c6e90b849a6c20ac332931679280418.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:51:01', NULL),
(192, 'Undangan - Kode 8842', 14, 1750.00, 1875.00, 2500.00, 3125.00, 1, 1, '2020-08-14 06:12:01', 1, 'ba40c6fa81b16c5ad3ef729c62ac58e8.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:49:08', NULL),
(193, 'Undangan - Kode 8879', 14, 1050.00, 825.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '2c3adcb6b6974faca0d0ee89f7904b8e.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:48:20', NULL),
(194, 'Undangan - Kode 8882', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, 'c880923c0ff524696c72004358e99411.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:52:24', NULL),
(195, 'Undangan - Kode 8887', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999799.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 11:00:41', NULL),
(196, 'Undangan - Kode W-1802', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, 'b877a327317c87c1f367ec9d22b8e7e0.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:50:23', NULL),
(197, 'Undangan - Kode 88103', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '3c19d2ef13295caff9fd583f6cc942eb.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:53:10', NULL),
(198, 'Undangan - Kode 88110', 14, 1400.00, 1350.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '453ec27e02de0836b40b7661767734df.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:53:45', NULL),
(199, 'Undangan - Kode 88125', 14, 1400.00, 1350.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, 'be822f8aff75746f0437bc41fe415271.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:54:07', NULL),
(200, 'Undangan - Kode 88126', 14, 1250.00, 1125.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '5756ecf41718a0e3172dcd4b5778db2a.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:54:29', NULL),
(201, 'Undangan - Kode 88132', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '0d3aeee99e9749a76ad87d3b6f4182f3.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:55:22', NULL),
(202, 'Undangan - Kode 88133', 14, 1250.00, 1125.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '1719406280c0f0b395e9dfeccbdcf968.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:55:56', NULL),
(203, 'Undangan - Kode 88134', 14, 3500.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '1bcaf84df6c7aee06da25454b839d47c.jpeg', 999949.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-23 07:37:46', NULL),
(204, 'Undangan - Kode H-88136', 14, 2600.00, 3150.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, 'aeaf76b2116d765f4dcfc9c8df18a425.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:56:48', NULL),
(205, 'Undangan - Kode 88147', 14, 1200.00, 1050.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '6e3732f5258a66f98886104e4d8b16a8.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:57:19', NULL),
(206, 'Undangan - Kode 88149', 14, 1050.00, 825.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999899.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:28:04', NULL),
(207, 'Undangan - Kode 88150', 14, 1300.00, 1200.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, '784c481adf576dd018dfa4d7a6d9a944.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:57:41', NULL),
(208, 'Undangan - Kode 88157', 14, 1300.00, 1200.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, '2ee0566b98045c221763f7669cf8fd8d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:58:05', NULL),
(209, 'Undangan - Kode 88160', 14, 2100.00, 2400.00, 3500.00, 4375.00, 1, 1, '2020-08-14 06:12:01', 1, '28b35b503c7f941e5b239b21175b2524.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:58:28', NULL),
(210, 'Undangan - Kode 88162', 14, 3000.00, 3750.00, 4500.00, 5625.00, 1, 1, '2020-08-14 06:12:01', 1, 'c76434fc5a38ac51f1871bcc72d443f1.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:59:11', NULL),
(211, 'Undangan - Kode 88164', 14, 1050.00, 825.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, 'ec4cac746c01b5e69a129f6101691114.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:00:10', NULL),
(212, 'Undangan - Kode 88166', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '02178fa1e9275a25a055e69a7c492aac.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:59:47', NULL),
(213, 'Undangan - Kode 88169', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'fafcda3fad3357765edbb971ab2cba8c.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:00:35', NULL),
(214, 'Undangan - Kode 88170', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '13735f9258f5ed3c180ba91237bf79e7.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:01:10', NULL),
(215, 'Undangan - Kode 88171', 14, 1700.00, 1800.00, 2500.00, 3125.00, 1, 1, '2020-08-14 06:12:01', 1, 'ada471b25699ffbabef1b821b21c6e37.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:01:36', NULL),
(216, 'Undangan - Kode 88172', 14, 1150.00, 975.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '4661026a6a0821f4d573baeb1aa21459.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:02:00', NULL),
(217, 'Undangan - Kode 88174', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'a86908f876da37978272786ff0bb7c9d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:25:36', NULL),
(218, 'Undangan - Kode 88175', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'aefd2c2159e48c9f7795e028ec89b50d.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:02:21', NULL),
(219, 'Undangan - Kode 88176', 14, 3500.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '517b05209e4748e3b88b252c7dbde4e1.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:12:32', NULL),
(220, 'Undangan - Kode 88178', 14, 2500.00, 3000.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '0b5c6712ad96aff845f9dbb306a3a4a2.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:03:18', NULL),
(221, 'Undangan - Kode 88180', 14, 3500.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '37bf0a086f8d9618ae2bb42b0b73aca5.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:03:40', NULL),
(222, 'Undangan - Kode 88181', 14, 1150.00, 975.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '4a5f5cb5825dc3f62a5c6f353f09e0cd.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:04:01', NULL),
(223, 'Undangan - Kode 88182', 14, 3500.00, 4500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '8f077d3cc1abe0e2326684c2e00d1fe9.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:04:30', NULL),
(224, 'Undangan - Kode 88183', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '6404ba316d0987ac48f7eac4b8265cd6.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:04:58', NULL),
(225, 'Undangan - Kode 88184', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '61d907e2e2d3b90637f02fdfad90f876.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:05:20', NULL),
(226, 'Undangan - Kode 88185', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'e5971580547ee90120bfec43235863a4.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:05:40', NULL),
(227, 'Undangan - Kode 88186', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '21326c6bc22987367a8ebdfbfa32cf79.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:12:08', NULL),
(228, 'Undangan - Kode 88188', 14, 1300.00, 1200.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, 'a96193e10588a0b15861ee1a16d29d33.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:11:24', NULL),
(229, 'Undangan - Kode 88189', 14, 1050.00, 825.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '24d1e5245e05290f5217fbdaf666e166.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:10:54', NULL),
(230, 'Undangan - Kode 88190', 14, 1050.00, 825.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, 'bd7767d5fd9f6385bccad6325bd4f6ca.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:10:22', NULL),
(231, 'Undangan - Kode 88191', 14, 1250.00, 1125.00, 1500.00, 1875.00, 1, 1, '2020-08-14 06:12:01', 1, '2ac9115ab0ddcf3b95501c19c607351e.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:09:48', NULL),
(232, 'Undangan - Kode H-9912', 14, 2200.00, 2550.00, 3000.00, 3750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(233, 'Undangan - Kode H-9913', 14, 6000.00, 8250.00, 8500.00, 10625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(234, 'Undangan - Kode H-9914', 14, 7000.00, 9750.00, 9500.00, 11875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL);
INSERT INTO `master_item` (`master_item_id`, `master_item_name`, `master_unit_id`, `master_item_price`, `master_item_bottom_price`, `master_item_price_retail`, `master_item_price_coorporate`, `master_brand_id`, `master_warehouse_id`, `master_item_price_last_update`, `master_supplier_id`, `master_item_file`, `master_item_stock`, `master_item_stock_minimum`, `master_item_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(235, 'Undangan - Kode 88193', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'bc467cbeda943a7225eda31dc79a7f2a.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 13:35:46', NULL),
(236, 'Undangan - Kode 88194', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'cc9566e0c3246d12336fb067730a267a.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:56:34', NULL),
(237, 'Undangan - Kode 88195', 14, 1300.00, 1200.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, '0e1583516adfd611491f0be3cc42c5f4.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:55:54', NULL),
(238, 'Undangan - Kode 88196', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, '4289be5045a8c5e90e7b8e8362ad9b75.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:07:09', NULL),
(239, 'Undangan - Kode 88197', 14, 1600.00, 1650.00, 2200.00, 2750.00, 1, 1, '2020-08-14 06:12:01', 1, '7ab72a7eecc94774370268d39ff4cdc9.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:55:22', NULL),
(240, 'Undangan - Kode 88198', 14, 1600.00, 1650.00, 2200.00, 2750.00, 1, 1, '2020-08-14 06:12:01', 1, '324abf8d19aa2e016951fc7828ab0e52.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:06:02', NULL),
(241, 'Undangan - Kode 88199', 14, 1800.00, 1950.00, 2750.00, 3438.00, 1, 1, '2020-08-14 06:12:01', 1, '69d135a315d2941de60bee1903fe0a35.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:18:38', NULL),
(242, 'Undangan - Kode 88200', 14, 3100.00, 3900.00, 4500.00, 5625.00, 1, 1, '2020-08-14 06:12:01', 1, 'e68e9269763aa1c92fba8b8afb994bf6.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:19:05', NULL),
(243, 'Undangan - Kode 88201', 14, 800.00, 450.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'd3637f5af4c803d439e3c6eab57edcee.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:16:31', NULL),
(244, 'Undangan - Kode 88202', 14, 800.00, 450.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'a7e44ec036d5c01b4b5fb27cdda46607.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:15:54', NULL),
(245, 'Undangan - Kode 88203', 14, 800.00, 450.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'cc2d432cd7bed411fa441f13fbcce1ae.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:15:00', NULL),
(246, 'Undangan - Kode 88204', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'dea587d0256a09cdbe15d3002ba8694a.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:14:31', NULL),
(247, 'Undangan - Kode 88205', 14, 1300.00, 1200.00, 1600.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, 'b02a1c4ab7801ec6349d03586989ffce.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:14:02', NULL),
(248, 'Undangan - Kode 88206', 14, 3100.00, 3900.00, 4500.00, 5625.00, 1, 1, '2020-08-14 06:12:01', 1, 'db0c19a5031f2b4d062f9e5c5ddc8e64.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:13:02', NULL),
(249, 'Undangan - Kode 88207', 14, 800.00, 450.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '9c9d1eb877c87aa74899b5a0b8dfa46f.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 09:02:52', NULL),
(250, 'Undangan - Kode 88208', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'abd7720541fa2b2493f02cb7fa786f99.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:45:08', NULL),
(251, 'Undangan - Kode 88209', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '000dc8d6c45ba63a7d6c10961498d46b.jpeg', 999449.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-30 07:42:06', NULL),
(252, 'Undangan - Kode 88210', 14, 900.00, 600.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, '38a0abb88e6cc5d5f554e9e2bc461df3.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:45:44', NULL),
(253, 'Undangan - Kode 88211', 14, 950.00, 675.00, 1000.00, 1250.00, 1, 1, '2020-08-14 06:12:01', 1, 'efd7f078caf93e0904bd83351d2c5ef3.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 10:24:56', NULL),
(254, 'Undangan - Kode 88212', 14, 1500.00, 1500.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, 'cd31a90600c26476258608c219e0cf5a.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:52:45', NULL),
(255, 'Undangan - Kode 88213', 14, 1400.00, 1350.00, 2000.00, 2500.00, 1, 1, '2020-08-14 06:12:01', 1, 'f73215da663abe8e9bb749021972cc00.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:46:56', NULL),
(256, 'Undangan - Kode 88214', 14, 2400.00, 2850.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '703f2c38fe1992dfcfeb590c8e2798a0.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:51:28', NULL),
(257, 'Undangan - Kode HC-9915', 14, 2400.00, 2850.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '3e3aa94e2813bccd03916025343996cf.jpeg', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 08:52:01', NULL),
(258, '\"YASIN - Ekonomis (isi 96 hal, 2 hal custom, cover ap 210)\"', 14, 0.00, 5000.00, 7000.00, 8750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999829.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-31 04:04:57', NULL),
(259, '\"YASIN - Standar (isi 140 hal, 4 hal custom, cover ap 210)\"', 14, 0.00, 9000.00, 11000.00, 13750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999799.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 12:01:04', NULL),
(260, '\"YASIN - Eksklusif (isi 210 hal ap 120, 4 hal custom, hardcover emboss hotprint)\"', 14, 0.00, 16000.00, 18000.00, 22500.00, 1, 1, '2020-08-14 06:12:01', 1, '8c0bebf996148f1a7739f6e43635f088.jpeg', 999629.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-22 09:51:56', NULL),
(261, 'PIN 44mm doff', 14, 2500.00, 2500.00, 4000.00, 5000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(262, 'PIN 58mm doff', 14, 3500.00, 3500.00, 5000.00, 6250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(263, 'PIN 75mm doff', 14, 5000.00, 5000.00, 6500.00, 8125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(264, 'PIN 44mm gloss', 14, 2000.00, 2000.00, 3500.00, 4375.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(265, 'PIN 58mm gloss', 14, 4000.00, 4000.00, 4500.00, 5625.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(266, 'PIN 75mm gloss', 14, 5500.00, 5500.00, 6000.00, 7500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(267, 'MUG + PUTIH', 14, 20000.00, 21000.00, 22000.00, 27500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(268, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A3', 12, 502000.00, 575000.00, 650000.00, 812500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(269, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A3', 12, 774000.00, 875000.00, 950000.00, 1187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(270, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A4', 12, 251000.00, 287500.00, 325000.00, 406250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(271, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A4', 12, 387000.00, 437500.00, 475000.00, 593750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(272, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A5', 12, 125500.00, 143750.00, 162500.00, 203125.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999994.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-27 08:30:02', NULL),
(273, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A5', 12, 193500.00, 218750.00, 237500.00, 296875.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(274, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A6', 12, 62750.00, 71875.00, 81250.00, 101563.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-17 04:24:09', NULL),
(275, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A6', 12, 96750.00, 109375.00, 118750.00, 148438.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(276, 'Brosur/Flyer (Konstruk 120gr) 1 Sisi uk. A4/3 (10cm x 21cm)', 12, 83666.67, 95833.33, 108333.00, 135417.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(277, 'Brosur/Flyer (Konstruk 120gr) 2 Sisi uk. A4/3 (10cm x 21cm)', 12, 129000.00, 145833.33, 158333.00, 197917.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(278, 'Cap / Stempel ukuran 2cm sd 5cm 1 warna', 14, 30000.00, 40000.00, 50000.00, 70000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999984.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-01 09:58:52', NULL),
(279, 'Cap / Stempel ukuran 6cm x ….. 1 warna', 14, 40000.00, 50000.00, 60000.00, 80000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-23 14:40:46', NULL),
(280, 'Name Tag Magnet', 14, 35000.00, 43500.00, 45000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(281, 'Name Tag Jepit/Peniti', 14, 35000.00, 43500.00, 45000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(282, 'Penjepit Kalender Seng', 14, 200000.00, 800.00, 2000.00, 2000.00, 1, 1, '2020-08-14 06:12:01', 1, '6252356888c6d1837132f6767025ac08.jpeg', 999931.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-20 02:43:20', NULL),
(283, 'HVS 70grm 1 warna', 12, 101000.00, 125000.00, 150000.00, 187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(284, 'Nota NCR 2 ply 1 warna 1 rim folio', 12, 179000.00, 250000.00, 275000.00, 343750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999991.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 03:38:10', NULL),
(285, 'Nota NCR 3 ply 1 warna 1 rim folio', 12, 233000.00, 300000.00, 325000.00, 406250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999982.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-13 03:58:57', NULL),
(286, 'Nota NCR 4 ply 1 warna 1 rim folio', 12, 287000.00, 350000.00, 375000.00, 468750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(287, '\"PNT MINIMALIS : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 340gr 1 sisi\"', 13, 300000.00, 325000.00, 350000.00, 437500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(288, '\"PNT MINIMALIS : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 340gr 2 sisi\"', 13, 325000.00, 350000.00, 375000.00, 468750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(289, '\"PNT MEDIUM : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 440gr (Korea) List siku Alma, Cover Belakang Plat alma/galvanis 1 sisi\"', 13, 350000.00, 425000.00, 450000.00, 562500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999979.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-26 09:13:20', NULL),
(290, '\"PNT MEDIUM : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 440gr (Korea) List siku Alma, Cover Belakang Plat alma/galvanis 2 sisi\"', 13, 400000.00, 475000.00, 500000.00, 625000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(291, '\"PNT HIGH : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 510gr (Jerman), List siku Alma, Cover Belakang Plat alma/galvanis 1 sisi\"', 13, 500000.00, 525000.00, 550000.00, 687500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(292, '\"PNT HIGH : Rangka Besi hollow 3x3, Cover Vinyl Frontlite 510gr (Jerman), List siku Alma, Cover Belakang Plat alma/galvanis 2 sisi\"', 13, 600000.00, 675000.00, 700000.00, 875000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(293, '\"PNT HIGH : Rangka Besi hollow 3x3, Cover Vinyl Stiker Ritrama Laminasi, List siku Alma, Cover Belakang Plat alma/galvanis 1 sisi\"', 13, 500000.00, 525000.00, 550000.00, 687500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-14 05:44:56', NULL),
(294, '\"PNT HIGH : Rangka Besi hollow 3x3, Cover Vinyl Stiker Ritrama Laminasi, List siku Alma, Cover Belakang Plat alma/galvanis 2 sisi\"', 13, 600000.00, 675000.00, 700000.00, 875000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(295, 'Lampu Sorot 50watt+ Rangka pistolan + kabel maks 10m + colokan', 14, 650000.00, 725000.00, 750000.00, 937500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(296, 'Tiang neonbox/pnt = pipa besi 3inch fin.cat anti karat + cat top color + cor', 14, 650000.00, 800000.00, 1200000.00, 1500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999994.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-20 04:49:35', NULL),
(297, 'Tiang neonbox/pnt = pipa besi 4inch fin.cat anti karat + cat top color + cor', 13, 850000.00, 1200000.00, 1600000.00, 2000000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(298, 'Tiang Pistolan dudukan tempel dinding besi siku', 14, 150000.00, 250000.00, 300000.00, 375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(299, '\"Neonbox Galvanis Cover Korea 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan)\"', 13, 700000.00, 850000.00, 900000.00, 1125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(300, '\"Neonbox Galvanis Cover Korea 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan)\"', 13, 730000.00, 900000.00, 950000.00, 1187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(301, '\"Neonbox Galvanis Cover Backlite 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan)\"', 13, 770000.00, 950000.00, 1000000.00, 1250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(302, '\"Neonbox Galvanis Cover Backlite 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan)\"', 13, 800000.00, 1000000.00, 1050000.00, 1312500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(303, '\"Neonbox Alumunium Cover Korea 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 770000.00, 950000.00, 1000000.00, 1250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(304, '\"Neonbox Alumunium Cover Korea 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 845000.00, 1050000.00, 1100000.00, 1375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(305, '\"Neonbox Alumunium Cover Backlite 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 925000.00, 1150000.00, 1200000.00, 1500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(306, '\"Neonbox Alumunium Cover Backlite 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 1000000.00, 1250000.00, 1300000.00, 1625000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-03 07:08:16', NULL),
(307, '\"Neonbox Alumunium Cover Acrylic + Stiker Ritrama/Backlite(Laminasi)/Oracal Cutting 1 sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 1230000.00, 1550000.00, 1600000.00, 2000000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(308, '\"Neonbox Alumunium Cover Acrylic + Stiker Ritrama/Backlite(Laminasi)/Oracal Cutting 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 1385000.00, 1750000.00, 1800000.00, 2250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(309, '\"Neonbox Alumunium Cover double Acrylic + Duratrans 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 1920000.00, 2450000.00, 2500000.00, 3125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(310, '\"Neonbox Alumunium Cover double Acrylic + Duratrans 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 2700000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(311, '\"Neonbox Alumunium Cover Bahan Fabric 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 1900000.00, 2450000.00, 2500000.00, 3125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(312, '\"Neonbox Alumunium Cover Bahan Fabric 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, alma 0.8)\"', 13, 2700000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(313, '\"Neonbox Stainless Cover Backlite 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 900000.00, 1150000.00, 1200000.00, 1500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(314, '\"Neonbox Stainless Cover Backlite 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 1100000.00, 1350000.00, 1400000.00, 1750000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-09-15 11:53:02', NULL),
(315, '\"Neonbox Stainless Cover Acrylic + Stiker Ritrama/Backlite(Laminasi)/Oracal Cutting 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 1400000.00, 1750000.00, 1800000.00, 2250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(316, '\"Neonbox Stainless Cover Acrylic + Stiker Ritrama/Backlite(Laminasi)/Oracal Cutting 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 1550000.00, 1950000.00, 2000000.00, 2500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(317, '\"Neonbox Stainless Cover double Acrylic + Duratrans 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 2700000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(318, '\"Neonbox Stainless Cover double Acrylic + Duratrans 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 3450000.00, 4450000.00, 4500000.00, 5625000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(319, '\"Neonbox Stainless Cover Bahan Fabric LED strip + adaptor + kabel maks 10m + colokan 1 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 2700000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(320, '\"Neonbox Stainless Cover Bahan Fabric LED strip + adaptor + kabel maks 10m + colokan 2 Sisi (rangka besi hollow 3x3 cat dasar, lampu tl/tl led, ballast, kabel maks 10m.colokan, stainless 0.3)\"', 13, 3500000.00, 4450000.00, 4500000.00, 5625000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(321, '\"Neonbox Full Acrylic + Cutting Stiker Oracal/stiker backlite + LED Strip + Adaptor 1 sisi (acrylic susu 3mm sd 5mm, led strip + adaptor, kabel maks.10m + colokan)\"', 13, 1900000.00, 2450000.00, 2500000.00, 3125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999986.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-20 06:54:45', NULL),
(322, '\"Neonbox Full Acrylic + Cutting Stiker Oracal/stiker backlite + LED Strip + Adaptor 2 sisi (acrylic susu 3mm sd 5mm, led strip + adaptor, kabel maks.10m + colokan)\"', 13, 2300000.00, 2950000.00, 3000000.00, 3750000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(323, '\"Neonbox Bulat diameter 0-100cm, plat besi lampu tl/tl led/led strip + tiang pistolan, kabel 10m, colokan, acrylic + stiker backlite/oracal\"', 13, 2500000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(324, '\"Neonbox Bulat diameter 0-100cm, plat besi lampu tl/tl led/led strip + tiang pistolan, kabel 10m, colokan, acrylic + flexi backlite\"', 13, 1800000.00, 2450000.00, 2500000.00, 3125000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(325, 'Neonbox Custom', 13, 2500000.00, 3450000.00, 3500000.00, 4375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999977.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-22 10:35:57', NULL),
(326, 'Neonflex', 13, 0.00, 0.00, 0.00, 0.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(327, 'Letter Timbul Galvanis', 16, 6000.00, 9000.00, 10000.00, 12500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(328, 'Letter Timbul Stainless', 16, 8000.00, 12000.00, 18000.00, 22500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(329, 'Letter Timbul Acrylic', 16, 12000.00, 15000.00, 20000.00, 25000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(330, 'Letter Timbul Acrylic + Lampu (<80cm)', 16, 25000.00, 27500.00, 30000.00, 37500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(331, 'Letter Timbul Acrylic + Lampu (>80cm)', 16, 27500.00, 32500.00, 35000.00, 43750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(332, 'Letter Timbul Galvanis + Acrylic + Lampu <80cm', 16, 27500.00, 32500.00, 35000.00, 43750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(333, 'Letter Timbul Galvanis + Acrylic + Lampu >80cm', 16, 30000.00, 35000.00, 40000.00, 50000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(334, 'Letter Timbul Stainless + Acrylic + Lampu <80cm', 16, 27500.00, 35000.00, 40000.00, 50000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(335, 'Letter Timbul Stainless + Acrylic + Lampu >80cm', 16, 32500.00, 40000.00, 45000.00, 56250.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(336, 'Tbanner (Besi/Bambu) + Pondasi Portable', 14, 60000.00, 100000.00, 120000.00, 150000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:25:01', NULL),
(337, 'Tbanner (Besi/Bambu)  Adv', 14, 30000.00, 50000.00, 70000.00, 87500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:26:01', NULL),
(338, 'Umbul-umbul (kain/cloth banner) Adv', 14, 15000.00, 30000.00, 50000.00, 62500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999997.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:26:51', NULL),
(339, 'Wall Sticker (Melaminto + Stiker Ritrama Tanpa Laminasi) Adv', 13, 200000.00, 375000.00, 450000.00, 450000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:27:21', NULL),
(340, 'Wall Sticker (Stiker Ritrama Tanpa Laminasi) Adv', 13, 100000.00, 120000.00, 150000.00, 150000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:27:50', NULL),
(341, 'Spanduk Flexible Adv', 14, 12000.00, 20000.00, 30000.00, 50000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999818.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-20 04:41:07', NULL),
(342, 'Spanduk Diatas 2m Adv', 14, 35000.00, 50000.00, 100000.00, 100000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999996.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-13 05:36:24', NULL),
(343, 'Graphic Hoarding Mall Adv', 13, 15000.00, 20000.00, 35000.00, 35000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:33:00', NULL),
(344, 'Backdrop Mall Adv', 13, 20000.00, 25000.00, 35000.00, 35000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:33:46', NULL),
(345, 'Backdrop Hotel (Besi)  Adv', 13, 50000.00, 120000.00, 150000.00, 200000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:34:49', NULL),
(346, 'Standing Poster Mall (Palembang Icon) Adv', 14, 20000.00, 50000.00, 70000.00, 80000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:31:44', NULL),
(347, 'Backdrop Kayu Sento + Banner Flexi 280grm Adv', 13, 100000.00, 120000.00, 150000.00, 200000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:36:26', NULL),
(348, 'Backdrop Kayu Sento + Multiplex 3mm + Banner Fexi 280grm Adv', 13, 130000.00, 150000.00, 200000.00, 250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:37:49', NULL),
(349, 'Stiker Dinding Adv', 13, 20000.00, 50000.00, 50000.00, 70000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:40:53', NULL),
(350, 'Booth Mall reposisi Adv', 14, 1000000.00, 1500000.00, 2000000.00, 3000000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:42:37', NULL),
(351, 'Stiker Mobil Pickup Adv', 14, 1300000.00, 1800000.00, 2500000.00, 3500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:45:29', NULL),
(352, 'Stiker Mobil Medium Adv', 14, 2500000.00, 2800000.00, 4500000.00, 5500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999998.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:47:57', NULL),
(353, 'Stiker Mobil BIG Adv', 14, 3500000.00, 7500000.00, 8500000.00, 10000000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 03:49:26', NULL),
(354, '\"Baliho Dinding - Rangka Besi Hollow 3x3/4x4, besi siku, Plat alma, Flexi 280grm)\"', 13, 482500.00, 550000.00, 750000.00, 937500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(355, '\"Baliho Dinding - Rangka Besi Hollow 3x3/4x4, besi siku, Plat alma, Flexi 440grm)\"', 13, 582500.00, 650000.00, 850000.00, 1062500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(356, '\"Baliho Dinding Ekonomis (PNT model) Rangka Besi Hollow 3x3/4x4, besi siku, Plat alma, Flexi 280grm)\"', 13, 382500.00, 400000.00, 650000.00, 812500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(357, '\"Lampu Sorot 50/100watt.Pistolan, Kabel 10m+colokan\"', 14, 732500.00, 800000.00, 1200000.00, 1500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(358, '\"Wall Acrylic a5 ( acrylic 3mm+2mm clear, 2 baut acrylic) + sisipan a5 ap120grm\"', 14, 80000.00, 125000.00, 150000.00, 187500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(359, '\"Wall Acrylic a4 ( acrylic 3mm+2mm clear, 4 baut acrylic) + sisipan a4 ap120grm\"', 14, 135000.00, 150000.00, 175000.00, 218750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-31 13:25:30', NULL),
(360, '\"Wall Acrylic a3 ( acrylic 3mm+2mm clear, 4 baut acrylic) + sisipan a3 ap120grm\"', 14, 220000.00, 275000.00, 300000.00, 375000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-31 13:25:40', NULL),
(361, '\"Wall Acrylic a2 ( acrylic 3mm+2mm clear, 6 baut acrylic) + sisipan a2 albatros\"', 14, 440000.00, 525000.00, 600000.00, 750000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-31 13:25:48', NULL),
(362, '\"Wall Acrylic a1 ( acrylic 3mm+2mm clear, 8 baut acrylic) + sisipan a1 albatros\"', 14, 780000.00, 850000.00, 1200000.00, 1500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-10-31 13:25:54', NULL),
(363, '\"Paper Bag (AP 210, LAMINASI DOFF/GLOSS, TALI KUR) A4/A5\"', 14, 9000.00, 10000.00, 15000.00, 18750.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999968.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-11-28 06:00:15', NULL),
(364, '\"Plang Nama (Plat besi/alma 1mm, branding cat) 1 sisi + tiang 3inch\"', 13, 1500000.00, 1500000.00, 1850000.00, 2312500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(365, '\"Plang Nama (Plat besi/alma 1mm, branding cat) 2sisi + tiang 3inch\"', 13, 1800000.00, 2000000.00, 2350000.00, 2937500.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(366, 'Folding gate Cat 1  sd 2 warna', 13, 150000.00, 200000.00, 230000.00, 250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 05:21:39', NULL),
(367, 'Folding gate Cat 3 sd 5 warna', 13, 250000.00, 350000.00, 450000.00, 550000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 05:22:26', NULL),
(368, 'Neonbox ACP Huruf timbul', 13, 1200000.00, 2300000.00, 2500000.00, 3500000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 11:36:39', NULL),
(369, 'Cutting stiker adv', 16, 10.00, 20.00, 40.00, 50.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 02:38:11', NULL),
(370, '\"Tenda Lipat Kerucut 3x3, Korea Printing\"', 14, 2300000.00, 2500000.00, 3000000.00, 3750000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-14 06:12:01', NULL),
(371, 'Bahan 280grm (buang bahan)', 13, 5500.00, 7000.00, 7000.00, 0.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999851.62, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 08:42:45', NULL),
(372, 'Bahan 340grm (buang bahan)', 13, 8000.00, 9000.00, 9000.00, 0.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999883.62, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-02 15:03:30', NULL),
(373, 'Bahan 440grm (buang bahan)', 13, 12000.00, 15000.00, 15000.00, 0.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 04:56:15', NULL),
(374, 'Bahan Stiker Ritrama/Vinyl/Blockout (buang bahan)', 13, 27000.00, 35000.00, 35000.00, 0.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999965.12, 5.00, 'Active', '2020-08-14 06:12:01', '2020-12-03 07:42:08', NULL),
(375, 'Scafolding  set 10pcs, Delivery/Pickup 1 Month Adv', 14, 200000.00, 800000.00, 1000000.00, 1250000.00, 1, 1, '2020-08-14 06:12:01', 1, '47041439bc8b0f808be1460e250e73f9.png', 999999.00, 5.00, 'Active', '2020-08-14 06:12:01', '2020-08-29 04:04:30', NULL),
(376, 'Flexi 280grm lebar lbh dari 3,2m tanpa sambungan', 13, 33000.00, 42500.00, 45000.00, 56250.00, 1, 1, '2020-08-26 09:04:49', 1, 'bb9c14b0966ac02d5bf082e1cb4a208a.jpeg', 999999.00, 5.00, 'Active', '2020-08-26 09:04:49', '2020-08-26 09:06:52', NULL),
(377, 'Flexi 440grm lebar lbh dari 3,2m tanpa sambungan', 13, 49000.00, 57500.00, 60000.00, 75000.00, 1, 1, '2020-08-26 09:06:26', 1, 'be524cfe8a7dce7a3ea3a187cc398519.jpeg', 9999999.00, 5.00, 'Active', '2020-08-26 09:06:26', '2020-08-26 09:06:26', NULL),
(378, 'Korea backlite single print 510', 13, 110000.00, 145000.00, 150000.00, 187500.00, 1, 1, '2020-08-26 09:08:03', 1, '5807f682297f32ebaa64a855ded785ec.jpeg', 9999999.00, 5.00, 'Active', '2020-08-26 09:08:03', '2020-08-26 09:08:03', NULL),
(379, 'Korea backlite double print 510', 13, 110000.00, 150000.00, 175000.00, 218750.00, 1, 1, '2020-08-26 09:09:33', 1, 'b27ffa4be617e6ea557b6e93494d47fb.jpeg', 9999999.00, 5.00, 'Active', '2020-08-26 09:09:33', '2020-08-26 09:09:33', NULL),
(380, 'stiker laminasi doff/glossy impraboard/kdboard 2-5mm per cm (max 125x150cm) cutting kotak', 17, 16.00, 25.00, 35.00, 40.00, 1, 1, '2020-08-26 09:10:52', 1, 'dc29315d81c22a15afc03e753460b513.jpeg', 799704.75, 5.00, 'Active', '2020-08-26 09:10:52', '2020-12-02 03:27:05', NULL),
(381, 'stiker laminasi doff/glossy impraboard/kdboard 2-5mm per cm (max 125x150cm) cutting pola', 17, 14.00, 30.00, 40.00, 50.00, 1, 1, '2020-08-26 09:12:03', 1, '8262c040a683766829848d883190a677.jpeg', 9991711.00, 5.00, 'Active', '2020-08-26 09:12:03', '2020-11-07 06:37:23', NULL),
(382, 'Acrylic Polos Custom PMMA 2mm transparant (cm) pxl', 14, 15.00, 20.00, 20.00, 25.00, 1, 1, '2020-08-26 09:13:11', 1, 'af839d1c7722a79f7cc6b5151cf5b7c0.jpeg', 999999.00, 5.00, 'Active', '2020-08-26 09:13:11', '2020-08-28 08:28:51', '2020-08-28 08:28:51'),
(383, 'Acrylic Polos Custom PMMA 3mm transparant (cm) pxl', 14, 20.00, 25.00, 30.00, 45.00, 1, 1, '2020-08-26 09:15:48', 1, '78d9b288a44f0729945a1d7234f28979.jpeg', 999999.00, 5.00, 'Active', '2020-08-26 09:15:48', '2020-08-28 08:28:56', '2020-08-28 08:28:56'),
(384, 'Acrylic Polos Custom PMMA 5mm transparant (cm) pxl', 14, 25.00, 35.00, 50.00, 75.00, 1, 1, '2020-08-26 09:16:32', 1, 'd2f56452e0f82335f7e6134e75cfc4db.jpeg', 999999.00, 5.00, 'Active', '2020-08-26 09:16:32', '2020-08-28 08:28:59', '2020-08-28 08:28:59'),
(385, 'Custom', 18, 0.00, 0.00, 0.00, 0.00, 1, 1, '2020-08-26 09:57:41', 1, 'fb5697f03a957e74b23d454b585c5033.png', 9878264.00, 0.00, 'Active', '2020-08-26 09:57:41', '2020-12-03 08:34:18', NULL),
(386, 'Kartu Nama 1 sisi Bahan Linen', 19, 9500.00, 25000.00, 35000.00, 45000.00, 1, 1, '2020-08-28 07:25:07', 1, '1daff4dfc472b3b34f3273904d877b1a.jpeg', 9993.00, 1.00, 'Active', '2020-08-28 07:25:07', '2020-10-30 02:04:12', NULL),
(387, 'Kartu Nama 2 sisi Bahan Linen', 19, 13500.00, 35000.00, 45000.00, 55000.00, 1, 1, '2020-08-28 07:26:13', 1, '426ff195f5ead8d7c18cfd034188bd95.jpeg', 9998.00, 1.00, 'Active', '2020-08-28 07:26:13', '2020-08-29 05:27:29', NULL),
(388, 'Finishing - Laminasi Doff/Glossy 2 sisi A3+', 18, 323.00, 2000.00, 2000.00, 2000.00, 1, 1, '2020-08-28 08:42:01', 1, 'b0ce27f0adcb9079a7f73f66dfa3efc1.jpeg', 9999.00, 1.00, 'Active', '2020-08-28 08:42:01', '2020-08-28 08:42:01', NULL),
(389, 'Finishing - potong kotak a3+ 4 potong - a5', 1, 100.00, 200.00, 200.00, 1000.00, 1, 1, '2020-08-28 09:08:35', 1, '90d99d7c7861a6f99c868c84aac4e050.jpeg', 9177.00, 1.00, 'Active', '2020-08-28 09:08:35', '2020-12-02 04:35:32', NULL),
(390, 'Finishing - potong kotak a3+ 8 potong - a6', 2, 200.00, 400.00, 400.00, 1000.00, 1, 1, '2020-08-28 09:09:07', 1, 'a57233ea5a9f049b55a2f2bb4e825a0f.jpeg', 9662.00, 1.00, 'Active', '2020-08-28 09:09:07', '2020-11-28 03:49:59', NULL),
(391, 'Finishing - potong kotak a3+ 16 potong - a7', 2, 300.00, 600.00, 600.00, 1000.00, 1, 1, '2020-08-28 09:12:00', 1, 'c32ac16f31f35b15791c609c85ea311e.jpeg', 9831.00, 1.00, 'Active', '2020-08-28 09:12:00', '2020-11-28 11:35:01', NULL),
(392, 'Plastik Bening + Label a5', 6, 50.00, 100.00, 100.00, 500.00, 1, 1, '2020-08-28 09:14:23', 1, '7250e3a625c80f5e5edb237d998dfa34.jpeg', 9799.00, 1.00, 'Active', '2020-08-28 09:14:23', '2020-09-11 12:13:00', NULL),
(393, 'Plastik Bening + Label a4', 7, 100.00, 200.00, 200.00, 1000.00, 1, 1, '2020-08-28 09:18:39', 1, 'd50762647edc152230c0f257456cb04d.jpeg', 9799.00, 1.00, 'Active', '2020-08-28 09:18:39', '2020-10-27 05:11:11', NULL),
(394, 'Mdf / Multiplex 1mm-6 mm cutting per cm2', 17, 20.00, 25.00, 30.00, 50.00, 1, 1, '2020-08-28 11:59:35', 1, '69a3153afd6f34bdfde1ee282ee790ab.jpeg', 91058.00, 1.00, 'Active', '2020-08-28 11:59:35', '2020-11-28 12:01:04', NULL),
(395, 'Vinyl Frontlite jerman 510gr (buang bahan)', 13, 26500.00, 53000.00, 53000.00, 0.00, 1, 1, '2020-08-29 04:35:05', 1, 'd98b167353cd7fb9a29f90a260b0ee06.jpeg', 99999.00, 1.00, 'Active', '2020-08-29 04:35:05', '2020-08-29 04:36:53', NULL),
(396, 'Vinyl Backlite 610gr (buang bahan)', 13, 15500.00, 31000.00, 31000.00, 0.00, 1, 1, '2020-08-29 04:36:12', 1, '378d3a5faa62c5ec27de048700f0a3a5.jpeg', 99999.00, 1.00, 'Active', '2020-08-29 04:36:12', '2020-08-31 07:58:35', NULL),
(397, 'Cloth Banner (buang bahan)', 13, 12000.00, 24000.00, 24000.00, 0.00, 1, 1, '2020-08-29 04:38:06', 1, 'f47b8c893ea29855a514837bcd8b594a.jpeg', 99998.84, 1.00, 'Active', '2020-08-29 04:38:06', '2020-11-13 08:22:30', NULL),
(398, 'Canvas (buang bahan)', 13, 85000.00, 170000.00, 170000.00, 0.00, 1, 1, '2020-08-29 04:39:16', 1, '8b30b4dec08283d61aa952607957f982.jpeg', 99996.60, 1.00, 'Active', '2020-08-29 04:39:16', '2020-11-18 07:06:57', NULL),
(399, 'Fabric- Mimaki (buang bahan)', 13, 55000.00, 110000.00, 110000.00, 0.00, 1, 1, '2020-08-29 04:40:41', 1, 'b5104b5a21d70b1889473929ac184d01.jpeg', 9999.00, 1.00, 'Active', '2020-08-29 04:40:41', '2020-08-29 04:40:41', NULL),
(400, 'Duratrans/Backlite Film Korea - Mimaki (buang bahan)', 13, 45000.00, 90000.00, 90000.00, 0.00, 1, 1, '2020-08-29 04:41:37', 1, '53936e55a7fd1e681aa53df33dabcf02.jpeg', 99999.00, 1.00, 'Active', '2020-08-29 04:41:37', '2020-08-29 04:41:37', NULL),
(401, 'Sticker One Way (buang bahan)', 13, 20500.00, 41000.00, 41000.00, 0.00, 1, 1, '2020-08-29 04:42:34', 1, 'eff3d4aa5ee9af10579bd7523604009a.jpeg', 9988.69, 1.00, 'Active', '2020-08-29 04:42:34', '2020-12-03 06:21:26', NULL),
(402, 'Sticker Transparant (buang bahan)', 13, 14000.00, 28000.00, 28000.00, 0.00, 1, 1, '2020-08-29 04:43:23', 1, 'a142c7a0f9c9fe0ceaa4243e4b654f8d.jpeg', 99998.20, 1.00, 'Active', '2020-08-29 04:43:23', '2020-11-10 04:03:25', NULL),
(403, 'Sticker Sandblast Print (buang bahan)', 13, 30000.00, 60000.00, 60000.00, 0.00, 1, 1, '2020-08-29 04:44:19', 1, '447ef701241769a6bce21f194cc1e33b.jpeg', 9999.00, 1.00, 'Active', '2020-08-29 04:44:19', '2020-08-29 12:11:52', '2020-08-29 12:11:52'),
(404, 'Stiker Backlite (buang bahan)', 13, 25000.00, 50000.00, 50000.00, 0.00, 1, 1, '2020-08-29 04:45:13', 1, '94f8d3a7905752349c4701808d422418.jpeg', 9992.74, 1.00, 'Active', '2020-08-29 04:45:13', '2020-10-30 09:28:35', NULL),
(405, 'Albatros (buang bahan)', 13, 12500.00, 25000.00, 25000.00, 0.00, 1, 1, '2020-08-29 04:46:06', 1, '2d932d24492e6cbed04f7f614c5990e1.jpeg', 99993.91, 1.00, 'Active', '2020-08-29 04:46:06', '2020-12-01 13:12:57', NULL),
(406, 'Luster (buang bahan)', 13, 35000.00, 70000.00, 70000.00, 0.00, 1, 1, '2020-08-29 04:47:27', 1, 'b7bd1f4f7bdfa7853433e6a89dee2114.jpeg', 9998.60, 1.00, 'Active', '2020-08-29 04:47:27', '2020-10-22 14:58:20', NULL),
(407, 'Photo Paper (buang bahan)', 13, 19000.00, 38000.00, 38000.00, 0.00, 1, 1, '2020-08-29 04:53:40', 1, 'ce17e567d80875240b2f5b371ff35cfa.jpeg', 99999.00, 1.00, 'Active', '2020-08-29 04:53:40', '2020-08-31 07:57:31', NULL),
(408, 'PVC (buang bahan)', 13, 21500.00, 43000.00, 43000.00, 0.00, 1, 1, '2020-08-29 04:54:33', 1, '73786484394e6e89cf1419946f03aa6c.jpeg', 9999.00, 1.00, 'Active', '2020-08-29 04:54:33', '2020-08-29 04:54:33', NULL),
(409, 'Menu Hardcover Besar A3 (Kertas Padi 30, Stiker Kromo Laminasi Doff/Glossy 2sisi)', 14, 32000.00, 33500.00, 35000.00, 50000.00, 1, 1, '2020-09-05 08:24:35', 1, 'fc05ea9948e9152dffa7c88a42984b85.jpeg', 99927.00, 1.00, 'Active', '2020-09-05 08:24:35', '2020-12-02 07:06:09', NULL),
(410, 'Menu Hardcover Sedang A4 (Kertas Padi 40, Stiker Kromo Laminasi Doff/Glossy 2sisi)', 14, 16000.00, 20000.00, 25000.00, 35000.00, 1, 1, '2020-09-05 08:28:41', 1, '88c828cf3f6a5aef437b4ac19504ecb3.jpeg', 9952.00, 1.00, 'Active', '2020-09-05 08:28:41', '2020-11-14 07:14:49', NULL),
(411, 'Menu Hardcover Kecil A5 (Kertas Padi 40, Stiker Kromo Laminasi Doff/Glossy 2sisi)', 14, 10000.00, 13000.00, 15000.00, 20000.00, 1, 1, '2020-09-05 08:30:31', 1, '287bc64ef8dbdcd5fbcbb779f9475e6d.jpeg', 9999.00, 1.00, 'Active', '2020-09-05 08:30:31', '2020-09-05 08:30:31', NULL),
(412, 'Numerator per rim', 12, 50000.00, 75000.00, 100000.00, 150000.00, 1, 1, '2020-09-07 06:01:38', 1, '07898499193969ecb8ba6b85bc7a7eb3.jpeg', 99999.00, 1.00, 'Active', '2020-09-07 06:01:38', '2020-09-07 06:28:10', NULL),
(413, 'Ring', 14, 1000.00, 5000.00, 6000.00, 10000.00, 1, 1, '2020-09-07 06:13:13', 1, '341221caf8f365e1a12e206b5463447e.jpeg', 99968.00, 1.00, 'Active', '2020-09-07 06:13:13', '2020-10-14 08:24:59', NULL),
(414, 'Pajak Dispenda', 18, 0.00, 0.00, 0.00, 0.00, 1, 1, '2020-09-07 06:51:52', 1, '3b969e0b97613c17ea20422b9c76082d.jpeg', 99989.00, 1.00, 'Active', '2020-09-07 06:51:52', '2020-09-07 13:19:37', NULL),
(415, 'Ekstra Kabel Listrik', 18, 0.00, 0.00, 0.00, 0.00, 1, 1, '2020-09-07 07:03:54', 1, '6849f042fad2381131d47b1d54981dbf.jpeg', 99998.00, 1.00, 'Active', '2020-09-07 07:03:54', '2020-09-07 12:59:12', NULL),
(416, 'Pajak Dispenda', 18, 0.00, 0.00, 0.00, 0.00, 1, 1, '2020-09-07 07:18:05', 1, '6417480d86621175136ef52371028b3f.jpeg', 999999.00, 999999.00, 'Active', '2020-09-07 07:18:05', '2020-09-07 07:18:54', '2020-09-07 07:18:54'),
(417, 'Kromo Paper', 2, 2175.00, 2300.00, 2300.00, 5000.00, 1, 1, '2020-09-15 13:29:02', 1, '2f7cbbf68db9105378c7f5c041a9f3dd.jpeg', 99967.00, 9.00, 'Active', '2020-09-15 13:29:02', '2020-11-23 02:46:18', NULL),
(418, 'Tik Paper', 8, 2000.00, 2200.00, 2200.00, 5000.00, 1, 1, '2020-09-15 13:31:35', 1, 'd4ac64c07ac97ed8b8fd7936992c909e.jpeg', 99949.00, 1.00, 'Active', '2020-09-15 13:31:35', '2020-09-18 06:35:12', NULL),
(419, 'Eazy Banner', 13, 23000.00, 80000.00, 100000.00, 120000.00, 1, 1, '2020-09-15 13:34:39', 1, 'c7392c8064251146037d40e09186f6a4.jpeg', 99998.40, 1.00, 'Active', '2020-09-15 13:34:39', '2020-11-18 14:29:01', NULL),
(420, 'Finishing - Cutting Kiss Cut A3+ Custom (Selain Kotak, Bulat, Oval, Segitiga)', 18, 1000.00, 1000.00, 2000.00, 5000.00, 1, 1, '2020-09-22 13:38:32', 1, '307c3873c7321280fed7d89216951081.jpeg', 999981.00, 1.00, 'Active', '2020-09-22 13:38:32', '2020-11-26 11:40:09', NULL),
(421, 'Tekuk Acrylic', 17, 50.00, 100.00, 200.00, 300.00, 1, 1, '2020-09-23 03:37:17', 1, '0b4bfc72c261ea3d0172c74ed7782108.jpeg', 99999.00, 1.00, 'Active', '2020-09-23 03:37:17', '2020-09-23 03:37:17', NULL),
(422, 'Cap / Stempel ukuran 7cm x ….. 1 warna', 14, 50000.00, 60000.00, 70000.00, 90000.00, 1, 1, '2020-09-23 14:41:35', 1, 'd3760f07db2c0cc82afc319bb1a213df.jpeg', 999999.00, 5.00, 'Active', '2020-09-23 14:41:35', '2020-09-23 14:41:35', NULL),
(423, 'Cap / Stempel ukuran 8cm x ….. 1 warna', 14, 60000.00, 70000.00, 80000.00, 100000.00, 1, 1, '2020-09-23 14:43:07', 1, '1d97b79c4669a2f168d86bd947378a06.jpeg', 999999.00, 5.00, 'Active', '2020-09-23 14:43:07', '2020-09-23 14:43:07', NULL),
(424, 'Tambah Warna Cap / Stampel', 14, 5000.00, 10000.00, 10000.00, 10000.00, 1, 1, '2020-09-23 14:43:41', 1, 'c07f9993293af665248d95c5de6ca1fd.jpeg', 99998.00, 5.00, 'Active', '2020-09-23 14:43:41', '2020-10-01 02:45:12', NULL);
INSERT INTO `master_item` (`master_item_id`, `master_item_name`, `master_unit_id`, `master_item_price`, `master_item_bottom_price`, `master_item_price_retail`, `master_item_price_coorporate`, `master_brand_id`, `master_warehouse_id`, `master_item_price_last_update`, `master_supplier_id`, `master_item_file`, `master_item_stock`, `master_item_stock_minimum`, `master_item_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(425, 'ganci acrylic 3mm print uv 1 sisi', 14, 3000.00, 4500.00, 7000.00, 10000.00, 1, 1, '2020-10-22 13:35:08', 1, '76697dd790595ce44750ce7c0fca03bc.jpeg', 999800.00, 1.00, 'Active', '2020-10-22 13:35:08', '2020-11-11 10:56:59', NULL),
(426, 'ganci acrylic 3mm print uv 2 sisi', 14, 4000.00, 7000.00, 12000.00, 15000.00, 1, 1, '2020-10-22 13:35:53', 1, '26d16015f6545663f1193f0eece46538.jpeg', 100000.00, 1.00, 'Active', '2020-10-22 13:35:53', '2020-10-22 13:35:53', NULL),
(427, 'Easy Banner', 13, 60000.00, 90000.00, 100000.00, 120000.00, 1, 1, '2020-10-31 11:32:43', 1, '8d96d4050f2baeaad4d4c7d7694feaf0.jpeg', 999997.25, 1.00, 'Active', '2020-10-31 11:32:43', '2020-11-28 06:31:16', NULL),
(428, 'Easy Banner (Buang Bahan)', 13, 30000.00, 35000.00, 35000.00, 35000.00, 1, 1, '2020-10-31 11:40:06', 1, '54186f629e5664eab22fbac089f1e0db.jpeg', 99997.89, 1.00, 'Active', '2020-10-31 11:40:06', '2020-11-28 06:31:16', NULL),
(429, 'Print uv per cm2', 17, 50.00, 100.00, 200.00, 300.00, 1, 1, '2020-11-02 09:38:15', 1, 'b4a63be36d0ea8191e4c1a8cc3ed7616.jpeg', 983804.38, 1.00, 'Active', '2020-11-02 09:38:15', '2020-11-28 03:35:03', NULL),
(430, 'Custome Case (Print UV only)', 14, 10000.00, 15000.00, 30000.00, 50000.00, 1, 1, '2020-11-02 09:39:49', 1, '7b4be30de273b38543816428237101f1.jpeg', 999999.00, 1.00, 'Active', '2020-11-02 09:39:49', '2020-11-04 14:02:41', NULL),
(431, 'Custome Case (With case)', 14, 8000.00, 25000.00, 45000.00, 75000.00, 1, 1, '2020-11-02 09:40:48', 1, '66a65368f32aa2f18e5f9dc9cc527f48.jpeg', 999987.00, 1.00, 'Active', '2020-11-02 09:40:48', '2020-12-01 04:14:18', NULL),
(432, 'Print UV case hp PO (7 hari)', 14, 33000.00, 50000.00, 50000.00, 55000.00, 1, 1, '2020-11-02 09:41:35', 1, '931cdb1265b56a56acd19eb87586064b.jpeg', 99999.00, 1.00, 'Active', '2020-11-02 09:41:35', '2020-11-04 13:57:59', '2020-11-04 13:57:59'),
(433, 'Setup UV Print Case HP', 14, 10000.00, 15000.00, 15000.00, 25000.00, 1, 1, '2020-11-02 10:36:31', 1, '5ea71a88234d9b934284e293376ed6c3.jpeg', 99999.00, 1.00, 'Active', '2020-11-02 10:36:31', '2020-11-04 13:49:06', '2020-11-04 13:49:06'),
(434, 'Ganci acrylic 3mm print uv 1 sisi Reseller', 14, 0.00, 4500.00, 4500.00, 0.00, 1, 1, '2020-11-02 12:24:40', 1, '1c1f5f582883c642f8b7839dfb73af06.jpeg', 999999.00, 1.00, 'Active', '2020-11-02 12:24:40', '2020-11-02 12:24:40', NULL),
(435, 'Ganci acrylic 3mm print uv 2 sisi reseller', 14, 0.00, 7000.00, 7000.00, 0.00, 1, 1, '2020-11-02 12:25:09', 1, '10f745a861e58eba93cc0902f47bb0f7.jpeg', 9999999.00, 1.00, 'Active', '2020-11-02 12:25:09', '2020-11-02 12:25:09', NULL),
(436, 'Cutting/Grafir Laser Adv', 20, 500.00, 1000.00, 3500.00, 5000.00, 1, 1, '2020-11-04 10:20:17', 1, '9623b6689cef8d09f12c884b715a93ad.jpeg', 999969.00, 9.00, 'Active', '2020-11-04 10:20:17', '2020-12-03 08:55:25', NULL),
(437, 'Cutting/Grafir Laser Adv Reseller', 20, 500.00, 1000.00, 1000.00, 0.00, 1, 1, '2020-11-04 10:24:56', 1, 'ca352a380e3dcf676a042c99fa9e89d5.jpeg', 987749.00, 1.00, 'Active', '2020-11-04 10:24:56', '2020-12-02 11:30:45', NULL),
(438, 'Sambung Bahan Polos', 13, 1000.00, 1000.00, 1000.00, 2000.00, 1, 1, '2020-11-09 10:13:25', 1, '318cba5bc8135b38e954fd8cb34c2893.jpeg', 999999.00, 1.00, 'Active', '2020-11-09 10:13:25', '2020-11-09 10:13:25', NULL),
(439, 'Kalender Gantung Jepit seng 4 Halaman Konstruk A3 Potrait Ap 120gr', 14, 7800.00, 8000.00, 9000.00, 15000.00, 1, 1, '2020-11-10 13:35:18', 1, 'cd6ad745f09a32c7111bfdbf55689506.jpeg', 999887.00, 1.00, 'Active', '2020-11-10 13:35:18', '2020-12-03 02:28:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `master_supplier_id` int(11) NOT NULL,
  `master_supplier_name` varchar(255) NOT NULL COMMENT 'Nama Supplier',
  `master_brand_id` int(11) NOT NULL COMMENT 'Brand Ref master_brand',
  `master_supplier_address` text NOT NULL COMMENT 'Alamat',
  `master_city_id` int(11) NOT NULL COMMENT 'Kota Referensi master_city',
  `master_supplier_phone_office` varchar(14) DEFAULT NULL COMMENT 'No Kantor',
  `master_supplier_phone_mobile` varchar(14) NOT NULL COMMENT 'No HP',
  `master_supplier_pic` varchar(255) DEFAULT NULL COMMENT 'Penanggungjawab',
  `master_supplier_section` varchar(128) NOT NULL COMMENT 'Bagian',
  `master_supplier_email` varchar(255) DEFAULT NULL COMMENT 'Email Client',
  `master_supplier_date_of_reg` date NOT NULL COMMENT 'Tanggal Daftar',
  `master_supplier_category_id` int(11) NOT NULL COMMENT 'Kategori Supplier Ref master_supplier_category',
  `master_supplier_status` enum('Active','Non Active') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`master_supplier_id`, `master_supplier_name`, `master_brand_id`, `master_supplier_address`, `master_city_id`, `master_supplier_phone_office`, `master_supplier_phone_mobile`, `master_supplier_pic`, `master_supplier_section`, `master_supplier_email`, `master_supplier_date_of_reg`, `master_supplier_category_id`, `master_supplier_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kaki Lima', 1, '-', 1, '-', '-', '-', '-', '-', '2020-08-14', 1, 'Active', '2020-08-14 04:18:45', '2020-08-14 04:18:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier_category`
--

CREATE TABLE `master_supplier_category` (
  `master_supplier_category_id` int(11) NOT NULL,
  `master_supplier_category_alias` varchar(6) NOT NULL COMMENT 'Nama Alias / Singkatan',
  `master_supplier_category_name` varchar(128) NOT NULL COMMENT 'Nama Kategori Supplier',
  `master_supplier_category_status` enum('Active','Non Active') NOT NULL COMMENT 'Status Kategori Supplier',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_supplier_category`
--

INSERT INTO `master_supplier_category` (`master_supplier_category_id`, `master_supplier_category_alias`, `master_supplier_category_name`, `master_supplier_category_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DPRINT', 'Digital Printing', 'Active', '2020-08-14 04:17:54', '2020-08-14 04:17:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_unit`
--

CREATE TABLE `master_unit` (
  `master_unit_id` int(11) NOT NULL,
  `master_unit_alias` varchar(6) NOT NULL COMMENT 'Nama Alias / Singkatan',
  `master_unit_name` varchar(255) NOT NULL COMMENT 'Nama Satuan',
  `master_unit_status` enum('Active','Non Active') NOT NULL DEFAULT 'Active' COMMENT 'Status Satuan',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_unit`
--

INSERT INTO `master_unit` (`master_unit_id`, `master_unit_alias`, `master_unit_name`, `master_unit_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A3', 'Kertas A3', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(2, 'A3+', 'Kertas A3+', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(3, '9x5.5', '9cm x 5.5cm', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(4, 'A3-6', 'A6/A5/A4/A3', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:07:54', NULL),
(5, 'A6', 'Kertas A6', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(6, 'A5', 'Kertas A5', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(7, 'A4', 'Kertas A4', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(8, 'A3/A3+', 'Kertas A3/A3+', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(9, 'ASize', 'All Size\r\n', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(10, 'Cstm', 'Custom', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(11, 'Unit', 'Unit', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(12, 'RIM', 'RIM', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(13, 'M2', 'M2', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(14, 'PCS', 'PCS', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(15, 'SET', 'SET', 'Active', '2020-08-14 06:12:01', '2020-08-14 07:02:03', NULL),
(16, 'cm', 'cm', 'Active', '2020-08-14 06:12:01', '2020-08-14 08:29:16', NULL),
(17, 'cm2', 'cm2', 'Active', '2020-08-14 06:12:01', '2020-08-14 08:29:16', NULL),
(18, 'LS', 'Ls', 'Active', '2020-08-17 05:20:10', '2020-08-17 05:20:10', NULL),
(19, 'Ktk', 'Kotak', 'Active', '2020-08-28 07:23:46', '2020-08-28 07:23:46', NULL),
(20, 'mnt', 'Menit', 'Active', '2020-11-04 10:15:36', '2020-11-04 10:15:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_warehouse`
--

CREATE TABLE `master_warehouse` (
  `master_warehouse_id` int(11) NOT NULL,
  `master_warehouse_alias` varchar(6) NOT NULL COMMENT 'Singkatan Gudang',
  `master_warehouse_name` varchar(255) NOT NULL COMMENT 'Nama Gudang',
  `master_warehouse_status` enum('Active','Non Active') NOT NULL COMMENT 'Status Gudang',
  `master_city_id` int(11) NOT NULL COMMENT 'Kota Ref master_city',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_warehouse`
--

INSERT INTO `master_warehouse` (`master_warehouse_id`, `master_warehouse_alias`, `master_warehouse_name`, `master_warehouse_status`, `master_city_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GD PLG', 'Gudang Ruko Palembang', 'Active', 2, '2020-04-14 06:56:47', '2020-08-14 04:12:19', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0f5efd71b52f5ec1ac83c0bc7d11a1e0c811374bb24c337e7d85edd1c3aed7b103afbe530b1d89cb', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:25:45', '2020-11-20 03:25:45', '2020-12-05 10:25:45'),
('2bb55f8f12b68a54c37e3b56e975b79af32ceb87999aa46e2c9bf6c1f4641c1c05e86bf6a398f3c0', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 06:32:35', '2020-11-20 06:32:35', '2020-12-05 13:32:35'),
('39f4b4b9559c11494647ef06aeab48924f0d5e3f6560c4b32ce4bcfda288e1fc3eb1081e6c90ef50', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:25:02', '2020-11-20 03:25:02', '2020-12-05 10:25:02'),
('53fbb2385bf68216757f8af0b33353b833347764716d17c7e6dd3f664dc28ab1ea61a65ba528e7ec', 1, 1, 'Personal Access Token', '[]', 0, '2020-11-20 02:30:25', '2020-11-20 02:30:25', '2021-05-20 09:30:25'),
('564580be3897eea52a8d47cc1d4ab442c9d3c91842e324242aba086d2b11e8dbf7e98c1ca7ec3494', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:25:55', '2020-11-20 03:25:55', '2020-12-05 10:25:55'),
('700808c7dc9fdefb516868115713ce942874124c3628029637b093300758516bfae57f3b178c2f11', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:26:34', '2020-11-20 03:26:34', '2020-12-05 10:26:34'),
('7e94d331a23feafe7befba3bf4d1d1c08f7b58fd3d473578c88d8910dce646d0d5fc0d846e928977', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:21:08', '2020-11-20 03:21:08', '2020-12-05 10:21:08'),
('8a9b744d600c5f4c8c9d26b02e97be264eb00ed305aa8985b0b1dd5ddc4ceba31053d4be605fc4c1', 1, 1, 'Personal Access Token', '[]', 0, '2020-11-20 02:29:51', '2020-11-20 02:29:51', '2021-05-20 09:29:51'),
('8e75f1393687c7ca566b02b08f191c1f21c9af79e561a468a4568730e437e9d6f9b3ff46ef7273ee', 1, 2, NULL, '[\"*\"]', 1, '2020-11-20 04:40:08', '2020-11-20 04:40:08', '2020-12-05 11:40:08'),
('8ed12a9a937591d353a992b1d617f04494bab206a7f10d405e9840b8865b47a8f57e1e66ba8ee51a', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:29:47', '2020-11-20 03:29:47', '2020-12-05 10:29:47'),
('b0f53e6617ec35ce5a1db959711f8e1195fc159f41eb9aac8bd53f9f2d2ccc63650100c9c953fd24', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:22:56', '2020-11-20 03:22:56', '2020-12-05 10:22:56'),
('b3fb43f4e67c64a1aa8ebb5d305482f9debf2c0c1cc7316e0d87bf2a3740b72f04fae054209df971', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:23:47', '2020-11-20 03:23:47', '2020-12-05 10:23:47'),
('b4bf935491a0b1f9b0a4c3972438c1f05e7c7506b179c4519c4b66cdfdd76be7bff69f62e57bc1e6', 1, 2, NULL, '[\"*\"]', 1, '2020-11-20 06:32:26', '2020-11-20 06:32:26', '2020-12-05 13:32:26'),
('be447a6e2f63cf555907e9a343a4d36bedffac6366e5b645fc309404f9a0ac7c35e3ecea181f6dee', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:35:34', '2020-11-20 03:35:34', '2020-12-05 10:35:34'),
('c17345833203af2bfa329bb1204de9d5e61420c5bbdb728a3fa0ad4db54ab9b35b3832824d55d864', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 04:40:12', '2020-11-20 04:40:12', '2020-12-05 11:40:12'),
('c2ee02ad2d64e074e3f15a864dc57510a61777367e96f72193f25713bac7e485dcc908897e0bbc44', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:22:37', '2020-11-20 03:22:37', '2020-12-05 10:22:37'),
('c3400ba41a3324e10726933e6d06486a2f4aaa3eb2559f6e69f75d8053051171ab6e2f28dc751d0d', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:26:17', '2020-11-20 03:26:17', '2020-12-05 10:26:17'),
('d5b73be2ee65ba44a38320aebf3bc32ef87d19743291dc0e506cea1ddd781b881146c99265e67825', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 03:26:41', '2020-11-20 03:26:41', '2020-12-05 10:26:41'),
('e19fc977b8c2df4e8343af2c52a085863a4e2549418fbdf3b891009fc52ffd64eee71e3e9a347bee', 1, 2, NULL, '[\"*\"]', 0, '2020-11-20 06:24:55', '2020-11-20 06:24:55', '2020-12-05 13:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'CV. Imarah Printing Personal Access Client', 'G0W9blZGTFWFNVUzMQizz8nX6lab4SttPPW4GtB8', NULL, 'http://localhost', 1, 0, 0, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(2, NULL, 'CV. Imarah Printing Password Grant Client', '8jyLdOimQSP2USexM7CctyMyA8QxHVN9ZIxs0B4N', 'users', 'http://localhost', 0, 1, 0, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(3, NULL, 'CV. Imarah Printing Personal Access Client', 'NrTpBXw4TQyALYLCIV2CvkvPbFwVuT5744N3XyPT', NULL, 'http://localhost', 1, 0, 0, '2020-11-20 04:39:31', '2020-11-20 04:39:31'),
(4, NULL, 'CV. Imarah Printing Password Grant Client', 'QNIIybXP5kupvbzlJN14AmswYuLmOaUFR4sM7ujG', 'users', 'http://localhost', 0, 1, 0, '2020-11-20 04:39:31', '2020-11-20 04:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(2, 3, '2020-11-20 04:39:31', '2020-11-20 04:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('0fa8b8800006be0e96eaba2557b1419722e85e909cb84a98cd05028038f09651c34a65e8dd49d8bc', 'e19fc977b8c2df4e8343af2c52a085863a4e2549418fbdf3b891009fc52ffd64eee71e3e9a347bee', 0, '2020-12-20 13:24:55'),
('136355b011463c0babb02626da252ff6954f7b344ec45cfa0b951a77eec78d5bda1dac60d60d8664', '8ed12a9a937591d353a992b1d617f04494bab206a7f10d405e9840b8865b47a8f57e1e66ba8ee51a', 0, '2020-12-20 10:29:47'),
('16131bcd32a6fcf18a2f0f95d8393d902bcd4f83de02b990643bb0e3708dfb129fcebafc51bc37c5', 'b3fb43f4e67c64a1aa8ebb5d305482f9debf2c0c1cc7316e0d87bf2a3740b72f04fae054209df971', 0, '2020-12-20 10:23:47'),
('1bf8e96ebb2c174845c68b6a4002155431b68b79d4a1941e428cbee9fcd704454b16afbf2388d05a', 'be447a6e2f63cf555907e9a343a4d36bedffac6366e5b645fc309404f9a0ac7c35e3ecea181f6dee', 0, '2020-12-20 10:35:34'),
('451aab10518f96f1c2ec6a817c4d07221a08bb5ace89b4deb0b97268c2d5c8b01943deb69f1da858', '564580be3897eea52a8d47cc1d4ab442c9d3c91842e324242aba086d2b11e8dbf7e98c1ca7ec3494', 0, '2020-12-20 10:25:55'),
('47b2657ee5a49d4a315f916574f53e1af54417f0e7776daf01edbab9dd4971d06930a5baa52fb896', 'c17345833203af2bfa329bb1204de9d5e61420c5bbdb728a3fa0ad4db54ab9b35b3832824d55d864', 0, '2020-12-20 11:40:12'),
('4c26956ec097f3ee3a783fd1000a9c1630feee478f735037c239af1d387575cbfd0fe7cbe435b096', 'b0f53e6617ec35ce5a1db959711f8e1195fc159f41eb9aac8bd53f9f2d2ccc63650100c9c953fd24', 0, '2020-12-20 10:22:56'),
('5eff94b0b7cc171e631128a1d075475d6da183559223419f1f56fa57554d39c1cc73b69a17b89a3b', 'c3400ba41a3324e10726933e6d06486a2f4aaa3eb2559f6e69f75d8053051171ab6e2f28dc751d0d', 0, '2020-12-20 10:26:17'),
('6d572cd27deb08e7d1058e5f86ba86f04ef64d23c84fd62fcbd2d5ccdf704c28436bebc045583439', '8e75f1393687c7ca566b02b08f191c1f21c9af79e561a468a4568730e437e9d6f9b3ff46ef7273ee', 1, '2020-12-20 11:40:08'),
('75f310a4d1ef5459fec6755446b069d7af6fd7c68823d94a84abfede908468a38acb0bec2bef089c', 'd5b73be2ee65ba44a38320aebf3bc32ef87d19743291dc0e506cea1ddd781b881146c99265e67825', 0, '2020-12-20 10:26:41'),
('aa361d2bc6ca27b8457c191cfc138e7316521964c8dea7767badcee4ead5e399112a835d02c2b51b', 'b4bf935491a0b1f9b0a4c3972438c1f05e7c7506b179c4519c4b66cdfdd76be7bff69f62e57bc1e6', 1, '2020-12-20 13:32:26'),
('c45148f5941fc9db2e469f8a875cfdfa801ec6a3cc04b449dcee9bac6ba8b531fb931aa124e4cd04', '700808c7dc9fdefb516868115713ce942874124c3628029637b093300758516bfae57f3b178c2f11', 0, '2020-12-20 10:26:34'),
('d13c59eb162e844e89d79292c0c6fa792a2827e725207b52b3bbe5f00acdaf085ca569458a576131', '0f5efd71b52f5ec1ac83c0bc7d11a1e0c811374bb24c337e7d85edd1c3aed7b103afbe530b1d89cb', 0, '2020-12-20 10:25:45'),
('d469b8a00bdd114bc1bd36b85862b4bcd38f10e64162610e644e071c63d3d5144048d32ac6d69c96', 'c2ee02ad2d64e074e3f15a864dc57510a61777367e96f72193f25713bac7e485dcc908897e0bbc44', 0, '2020-12-20 10:22:37'),
('db196fa563fa407cadaf3252d869cbb09da19e97ae0bf2bf4fc500c2f66b811f2ad1f1888a7a5317', '7e94d331a23feafe7befba3bf4d1d1c08f7b58fd3d473578c88d8910dce646d0d5fc0d846e928977', 0, '2020-12-20 10:21:08'),
('ef6eb6a9ca3a2f65f3ab5077fb95dc16fee99bf1ba9ff9e6d96f178bcb9009beff7f994e6954f04b', '2bb55f8f12b68a54c37e3b56e975b79af32ceb87999aa46e2c9bf6c1f4641c1c05e86bf6a398f3c0', 0, '2020-12-20 13:32:35'),
('f095d6a1387fb69c402b0cf32186c1eb743d0fef3a9358bedd2a1a49635dd3f29f7031dc730eaabb', '39f4b4b9559c11494647ef06aeab48924f0d5e3f6560c4b32ce4bcfda288e1fc3eb1081e6c90ef50', 0, '2020-12-20 10:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Email Google',
  `email_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Email Facebook',
  `email_github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Email Github',
  `email_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','nonactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nonactive',
  `users_group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_google`, `email_facebook`, `email_github`, `email_twitter`, `email_linkedin`, `email_verified_at`, `password`, `remember_token`, `status`, `users_group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Khoirusy Syafaat', 'akarendra835@gmail.com', 'akarendra835@gmail.com', 'akarendra835@gmail.com', 'akarendra835@gmail.com', 'akarendra835@gmail.com', 'akarendra835@gmail.com', NULL, '$2y$10$p/BMp9FYbaGe6lYffjQykONEyrVSanSvTXkVgtniIqshaRCtHl876', 'q6b1XAXOt0rUZVncbLKyiAMhu91Yqicn2g27NLM8D2AAKTAFSKWF39ORKMOJ', 'active', 6, '2020-02-03 01:20:37', '2020-11-30 08:46:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_group`
--

CREATE TABLE `users_group` (
  `users_group_id` int(11) NOT NULL,
  `users_group_alias` varchar(8) NOT NULL,
  `users_group_name` varchar(128) NOT NULL,
  `users_group_status` enum('Active','Non Active') NOT NULL,
  `users_group_access` text DEFAULT NULL,
  `user_group_default_pages` varchar(255) NOT NULL,
  `users_group_is_default` enum('Active','Non Active') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_group`
--

INSERT INTO `users_group` (`users_group_id`, `users_group_alias`, `users_group_name`, `users_group_status`, `users_group_access`, `user_group_default_pages`, `users_group_is_default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'SU', 'Super Users', 'Active', '{\"Dashboard\":{\"Grafik\":\"true\",\"SPL\":{\"RekapLembur\":\"true\",\"Reload Data\":\"true\",\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\"}},\"Data Master\":{\"Access Control\":{\"Users\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Reset Password\":\"true\",\"Active Nonactive\":\"true\",\"Detail Sales\":\"true\",\"Detail Karyawan\":\"true\"},\"User Group\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"}},\"Master Penjualan\":{\"Gudang\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Brand\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Satuan\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Supplier\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Kategori Supplier\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Item\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"}}},\"Whatsapp\":{\"WhatsappLogin\":\"true\",\"LogError\":{\"Status\":\"true\",\"Reload Data\":\"true\",\"DetailLogError\":\"true\",\"Filter\":\"true\",\"Hapus\":\"true\",\"SettingWhatsapp\":\"true\"}}}', '/home/dashboard', 'Non Active', '2020-04-02 11:04:50', '2020-12-03 15:33:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_menu`
--

CREATE TABLE `users_menu` (
  `users_menu_id` int(11) NOT NULL,
  `users_menu_name` varchar(123) NOT NULL,
  `users_menu_status` enum('Active','Non Active') NOT NULL,
  `user_menu_parent` int(11) DEFAULT NULL,
  `users_menu_have_child` enum('Yes','No') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_menu_action`
--

CREATE TABLE `users_menu_action` (
  `users_menu_action_id` int(11) NOT NULL,
  `users_menu_action_name` varchar(128) NOT NULL,
  `users_menu_action_status` enum('Yes','No') NOT NULL,
  `users_menu_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_brand`
--
ALTER TABLE `master_brand`
  ADD PRIMARY KEY (`master_brand_id`);

--
-- Indexes for table `master_city`
--
ALTER TABLE `master_city`
  ADD PRIMARY KEY (`master_city_id`);

--
-- Indexes for table `master_config`
--
ALTER TABLE `master_config`
  ADD PRIMARY KEY (`master_config_id`);

--
-- Indexes for table `master_item`
--
ALTER TABLE `master_item`
  ADD PRIMARY KEY (`master_item_id`);

--
-- Indexes for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`master_supplier_id`);

--
-- Indexes for table `master_supplier_category`
--
ALTER TABLE `master_supplier_category`
  ADD PRIMARY KEY (`master_supplier_category_id`);

--
-- Indexes for table `master_unit`
--
ALTER TABLE `master_unit`
  ADD PRIMARY KEY (`master_unit_id`);

--
-- Indexes for table `master_warehouse`
--
ALTER TABLE `master_warehouse`
  ADD PRIMARY KEY (`master_warehouse_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_group`
--
ALTER TABLE `users_group`
  ADD PRIMARY KEY (`users_group_id`);

--
-- Indexes for table `users_menu`
--
ALTER TABLE `users_menu`
  ADD PRIMARY KEY (`users_menu_id`);

--
-- Indexes for table `users_menu_action`
--
ALTER TABLE `users_menu_action`
  ADD PRIMARY KEY (`users_menu_action_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_brand`
--
ALTER TABLE `master_brand`
  MODIFY `master_brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `master_city`
--
ALTER TABLE `master_city`
  MODIFY `master_city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_config`
--
ALTER TABLE `master_config`
  MODIFY `master_config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_item`
--
ALTER TABLE `master_item`
  MODIFY `master_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `master_supplier`
--
ALTER TABLE `master_supplier`
  MODIFY `master_supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_supplier_category`
--
ALTER TABLE `master_supplier_category`
  MODIFY `master_supplier_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_unit`
--
ALTER TABLE `master_unit`
  MODIFY `master_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `master_warehouse`
--
ALTER TABLE `master_warehouse`
  MODIFY `master_warehouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users_group`
--
ALTER TABLE `users_group`
  MODIFY `users_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users_menu`
--
ALTER TABLE `users_menu`
  MODIFY `users_menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_menu_action`
--
ALTER TABLE `users_menu_action`
  MODIFY `users_menu_action_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
