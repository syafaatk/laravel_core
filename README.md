Test Case Majoo Teknologi Indonesia
-------

**Tampilan Test Case berdasarkan mockup**

<img src="/image/tampilan.jpeg" alt="View Produk" title="Produk view">

**Entity Relational Diagram**

<img src="/image/ERD.png" alt="ERD 1" title="Entity Relational Diagram 1">

<img src="/image/erd 2.png" alt="ERD 2" title="Entity Relational Diagram 2">

**Activity Diagram**

<img src="/image/activity.png" alt="Activity" title="Activity Diagram">

**Usecase Diagram**

<img src="/image/usecase.png" alt="Use Case" title="Use Case Diagram">

**Data Manipulation Language (DML)**
1. Tabel master_produk

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

INSERT INTO `master_produk` (`master_produk_id`, `master_produk_name`, `master_produk_deskripsi`, `master_produk_price`, `master_kategori_id`, `master_produk_file`, `master_produk_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Majoo Pro', 'Loeoeoeo', 2750000.00, 1, 'c373c604c5396134d97a62400b9685e3.png', 'Active', '2022-03-29 12:21:56', '2022-03-29 12:37:40', NULL),
(4, 'Majoo Advance', 'Lorem ipsum', 2750000.00, 2, 'd8b681e1aaf3967cce9fc66bf7cb6cdb.png', 'Active', '2022-03-29 12:31:27', '2022-03-29 12:42:56', NULL),
(5, 'Majoo Lifestyle', 'Lerom ipsum', 2750000.00, 3, '28bc676ef9f29718c6c5e179ea7354ee.png', 'Active', '2022-03-29 12:32:15', '2022-03-29 12:32:15', NULL),
(6, 'Majoo Desktop', 'Lerom ipsum', 2750000.00, 4, '5d47944a11ce42cc0c17fc5c41b94bb1.png', 'Active', '2022-03-29 12:32:49', '2022-03-29 12:32:49', NULL);

2. Tabel master_kategori

CREATE TABLE `master_kategori` (
  `master_kategori_id` int(11) NOT NULL,
  `master_kategori_alias` varchar(6) NOT NULL COMMENT 'Nama Alias / Singkatan',
  `master_kategori_name` varchar(255) NOT NULL COMMENT 'Nama Brand/Merk',
  `master_kategori_status` enum('Active','Non Active') NOT NULL DEFAULT 'Active' COMMENT 'Status Brand/Merk',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `master_kategori` (`master_kategori_id`, `master_kategori_alias`, `master_kategori_name`, `master_kategori_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P', 'Pro', 'Active', '2022-03-29 12:02:29', '2022-03-29 12:02:29', NULL),
(2, 'A', 'Advance', 'Active', '2022-03-29 12:02:41', '2022-03-29 12:02:41', NULL),
(3, 'L', 'Lifestyle', 'Active', '2022-03-29 12:02:53', '2022-03-29 12:02:53', NULL),
(4, 'D', 'Desktop', 'Active', '2022-03-29 12:03:04', '2022-03-29 12:03:04', NULL),
(5, 'C', 'Contoh', 'Active', '2022-03-29 12:27:10', '2022-03-29 12:27:22', '2022-03-29 12:27:22');
