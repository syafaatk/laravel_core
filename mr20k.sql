-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2022 pada 14.59
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

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
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `master_config`
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
-- Dumping data untuk tabel `master_config`
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
-- Struktur dari tabel `master_kategori`
--

CREATE TABLE `master_kategori` (
  `master_kategori_id` int(11) NOT NULL,
  `master_kategori_alias` varchar(6) NOT NULL COMMENT 'Nama Alias / Singkatan',
  `master_kategori_name` varchar(255) NOT NULL COMMENT 'Nama Brand/Merk',
  `master_kategori_status` enum('Active','Non Active') NOT NULL DEFAULT 'Active' COMMENT 'Status Brand/Merk',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_kategori`
--

INSERT INTO `master_kategori` (`master_kategori_id`, `master_kategori_alias`, `master_kategori_name`, `master_kategori_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P', 'Pro', 'Active', '2022-03-29 12:02:29', '2022-03-29 12:02:29', NULL),
(2, 'A', 'Advance', 'Active', '2022-03-29 12:02:41', '2022-03-29 12:02:41', NULL),
(3, 'L', 'Lifestyle', 'Active', '2022-03-29 12:02:53', '2022-03-29 12:02:53', NULL),
(4, 'D', 'Desktop', 'Active', '2022-03-29 12:03:04', '2022-03-29 12:03:04', NULL),
(5, 'C', 'Contoh', 'Active', '2022-03-29 12:27:10', '2022-03-29 12:27:22', '2022-03-29 12:27:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_produk`
--

CREATE TABLE `master_produk` (
  `master_produk_id` int(11) NOT NULL,
  `master_produk_name` varchar(255) NOT NULL COMMENT 'Nama Barang / Bahan Baku',
  `master_produk_deskripsi` text DEFAULT NULL COMMENT 'Deskripsi Produk',
  `master_produk_price` float(11,2) NOT NULL COMMENT 'Harga Modal',
  `master_kategori_id` int(11) NOT NULL COMMENT 'Merk / Brand Ref master_brand',
  `master_produk_file` text NOT NULL COMMENT 'File Upload',
  `master_produk_status` enum('Active','Non Active') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_produk`
--

INSERT INTO `master_produk` (`master_produk_id`, `master_produk_name`, `master_produk_deskripsi`, `master_produk_price`, `master_kategori_id`, `master_produk_file`, `master_produk_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Majoo Pro', 'Loeoeoeo', 2750000.00, 1, 'c373c604c5396134d97a62400b9685e3.png', 'Active', '2022-03-29 12:21:56', '2022-03-29 12:37:40', NULL),
(4, 'Majoo Advance', 'Lorem ipsum', 2750000.00, 2, 'd8b681e1aaf3967cce9fc66bf7cb6cdb.png', 'Active', '2022-03-29 12:31:27', '2022-03-29 12:42:56', NULL),
(5, 'Majoo Lifestyle', 'Lerom ipsum', 2750000.00, 3, '28bc676ef9f29718c6c5e179ea7354ee.png', 'Active', '2022-03-29 12:32:15', '2022-03-29 12:32:15', NULL),
(6, 'Majoo Desktop', 'Lerom ipsum', 2750000.00, 4, '5d47944a11ce42cc0c17fc5c41b94bb1.png', 'Active', '2022-03-29 12:32:49', '2022-03-29 12:32:49', NULL);

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
-- Struktur dari tabel `oauth_access_tokens`
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
-- Dumping data untuk tabel `oauth_access_tokens`
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
-- Struktur dari tabel `oauth_auth_codes`
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
-- Struktur dari tabel `oauth_clients`
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
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'CV. Imarah Printing Personal Access Client', 'G0W9blZGTFWFNVUzMQizz8nX6lab4SttPPW4GtB8', NULL, 'http://localhost', 1, 0, 0, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(2, NULL, 'CV. Imarah Printing Password Grant Client', '8jyLdOimQSP2USexM7CctyMyA8QxHVN9ZIxs0B4N', 'users', 'http://localhost', 0, 1, 0, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(3, NULL, 'CV. Imarah Printing Personal Access Client', 'NrTpBXw4TQyALYLCIV2CvkvPbFwVuT5744N3XyPT', NULL, 'http://localhost', 1, 0, 0, '2020-11-20 04:39:31', '2020-11-20 04:39:31'),
(4, NULL, 'CV. Imarah Printing Password Grant Client', 'QNIIybXP5kupvbzlJN14AmswYuLmOaUFR4sM7ujG', 'users', 'http://localhost', 0, 1, 0, '2020-11-20 04:39:31', '2020-11-20 04:39:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-11-19 08:44:36', '2020-11-19 08:44:36'),
(2, 3, '2020-11-20 04:39:31', '2020-11-20 04:39:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_refresh_tokens`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_google`, `email_facebook`, `email_github`, `email_twitter`, `email_linkedin`, `email_verified_at`, `password`, `remember_token`, `status`, `users_group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Khoirusy Syafaat', 'syafaatkhoirusy@gmail.com', 'syafaatkhoirusy@gmail.com', 'syafaatkhoirusy@gmail.com', 'syafaatkhoirusy@gmail.com', 'syafaatkhoirusy@gmail.com', 'syafaatkhoirusy@gmail.com', NULL, '$2y$10$YD/.3Xf.jClkzYiMx6LmWO.VD6adAfh6BGVp9rOOeRTlAB1jAMyXG', 'cbHp68i1B0N7J7vJpUtt34nl45YItsyAC5Nwi7rLPSiuzX3dYPpSAT74ipui', 'active', 6, '2020-02-03 01:20:37', '2022-03-29 09:59:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_group`
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
-- Dumping data untuk tabel `users_group`
--

INSERT INTO `users_group` (`users_group_id`, `users_group_alias`, `users_group_name`, `users_group_status`, `users_group_access`, `user_group_default_pages`, `users_group_is_default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'SU', 'Super Users', 'Active', '{\"Dashboard\":{\"Grafik\":\"true\",\"SPL\":{\"RekapLembur\":\"true\",\"Reload Data\":\"true\",\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\"}},\"Data Master\":{\"Access Control\":{\"Users\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Reset Password\":\"true\",\"Active Nonactive\":\"true\",\"Detail Sales\":\"true\",\"Detail Karyawan\":\"true\"},\"User Group\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"}},\"Master Penjualan\":{\"Gudang\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Brand\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Satuan\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Supplier\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Kategori\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"},\"Produk\":{\"Tambah\":\"true\",\"Edit\":\"true\",\"Hapus\":\"true\",\"Filter\":\"true\",\"Reload Data\":\"true\",\"Active Nonactive\":\"true\"}}},\"Whatsapp\":{\"WhatsappLogin\":\"true\",\"LogError\":{\"Status\":\"true\",\"Reload Data\":\"true\",\"DetailLogError\":\"true\",\"Filter\":\"true\",\"Hapus\":\"true\",\"SettingWhatsapp\":\"true\"}}}', '/home/dashboard', 'Non Active', '2020-04-02 04:04:50', '2022-03-29 11:51:48', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_menu`
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
-- Struktur dari tabel `users_menu_action`
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
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_config`
--
ALTER TABLE `master_config`
  ADD PRIMARY KEY (`master_config_id`);

--
-- Indeks untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`master_kategori_id`);

--
-- Indeks untuk tabel `master_produk`
--
ALTER TABLE `master_produk`
  ADD PRIMARY KEY (`master_produk_id`),
  ADD UNIQUE KEY `master_produk_name` (`master_produk_name`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_group`
--
ALTER TABLE `users_group`
  ADD PRIMARY KEY (`users_group_id`);

--
-- Indeks untuk tabel `users_menu`
--
ALTER TABLE `users_menu`
  ADD PRIMARY KEY (`users_menu_id`);

--
-- Indeks untuk tabel `users_menu_action`
--
ALTER TABLE `users_menu_action`
  ADD PRIMARY KEY (`users_menu_action_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_config`
--
ALTER TABLE `master_config`
  MODIFY `master_config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `master_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_produk`
--
ALTER TABLE `master_produk`
  MODIFY `master_produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `users_group`
--
ALTER TABLE `users_group`
  MODIFY `users_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users_menu`
--
ALTER TABLE `users_menu`
  MODIFY `users_menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users_menu_action`
--
ALTER TABLE `users_menu_action`
  MODIFY `users_menu_action_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
