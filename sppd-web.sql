-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 03:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppd-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instansis`
--

CREATE TABLE `instansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domisili` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansis`
--

INSERT INTO `instansis` (`id`, `nama`, `alamat`, `no_hp`, `email`, `kode_pos`, `domisili`, `image`, `created_at`, `updated_at`) VALUES
(1, 'DINAS PERPUSTAKAAN', 'Jl. Kesuma Bangsa No. 5', '(0541)412777', 'dinpus.kotasamarinda@gmail.com', '75123', 'SAMARINDA (KALIMANTAN TIMUR)', 'instansi-images/dwpqUuoTQ2UAI36cCJBnwYQn3LpPXRYFXuaOW6zq.png', '2022-01-15 10:34:07', '2022-01-15 10:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Dinas', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(2, 'Sekretaris', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(3, 'Sub Bagian Umum dan Kepegawaian', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(4, 'Sub Bagian Program dan Keuangan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(5, 'Kabid. Layanan Automasi dan Kerjasama Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(6, 'Kabid. Pengembangan Koleksi, Pengolahan dan Konservasi Bahan Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(7, 'Kabid. Pengembangan Perpustakaan dan Pembudayaan Kegemaran Membaca', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(8, 'Kasi. Layanan Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(9, 'Kasi. Otomasi Perpustakaan dan Alih Media', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(10, 'Kasi. Kerjasama dan Promosi Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(11, 'Kasi. Pengembangan Koleksi', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(12, 'Kasi. Pengolahan Bahan Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(13, 'Kasi. Konservasi', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(14, 'Kasi. Pembinaan dan Pembudayaan Kegemaran Membaca', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(15, 'Kasi. Pembinaan dan Pengembangan Tenaga Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(16, 'Kasi. Pengembangan dan Pembudayaan Membaca', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(17, 'Staff. Layanan Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(18, 'Staff. Otomasi Perpustakaan dan Alih Media', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(19, 'Staff. Kerjasama dan Promosi Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(20, 'Staff. Pengembangan Koleksi', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(21, 'Staff. Pengolahan Bahan Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(22, 'Staff. Konservasi', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(23, 'Staff. Pembinaan dan Pembudayaan Kegemaran Membaca', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(24, 'Staff. Pembinaan dan Pengembangan Tenaga Perpustakaan', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(25, 'Staff. Pengembangan dan Pembudayaan Membaca', '2022-01-15 10:34:07', '2022-01-15 10:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraans`
--

CREATE TABLE `kendaraans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kendaraans`
--

INSERT INTO `kendaraans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Dinas / Umum', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(2, 'Mobil Pribadi', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(3, 'Mobil Dinas', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(4, 'Bus Umum', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(5, 'Bus Dinas', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(6, 'Kereta Rel Listrik', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(7, 'Kapal Laut', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(8, 'Pesawat', '2022-01-15 10:34:07', '2022-01-15 10:34:07');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_05_041111_create_pegawais_table', 1),
(6, '2021_12_05_041152_create_perjalanans_table', 1),
(7, '2021_12_05_041315_create_pangkats_table', 1),
(8, '2021_12_05_041333_create_jabatans_table', 1),
(9, '2021_12_05_053939_create_surats_table', 1),
(10, '2021_12_05_054449_create_kendaraans_table', 1),
(11, '2021_12_05_55049_create_statuses_table', 1),
(12, '2021_12_05_564143_create_instansis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pangkats`
--

CREATE TABLE `pangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` enum('I','II','III','IV') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` enum('a','b','c','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pangkats`
--

INSERT INTO `pangkats` (`id`, `golongan`, `ruang`, `created_at`, `updated_at`) VALUES
(1, 'IV', 'a', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(2, 'IV', 'b', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(3, 'IV', 'c', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(4, 'IV', 'd', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(5, 'III', 'a', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(6, 'III', 'b', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(7, 'III', 'c', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(8, 'III', 'd', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(9, 'II', 'a', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(10, 'II', 'b', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(11, 'II', 'c', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(12, 'II', 'd', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(13, 'I', 'a', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(14, 'I', 'b', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(15, 'I', 'c', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(16, 'I', 'd', '2022-01-15 10:34:07', '2022-01-15 10:34:07');

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
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanans`
--

CREATE TABLE `perjalanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kendaraan_id` bigint(20) UNSIGNED NOT NULL,
  `lama_perjalanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Samarinda',
  `tempat_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Menunggu', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(2, 'Disetujui', '2022-01-15 10:34:07', '2022-01-15 10:34:07'),
(3, 'Ditolak', '2022-01-15 10:34:07', '2022-01-15 10:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `perjalanan_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator Perpustakaan', 'admin.perpustakaan@gmail.com', '2022-01-15 10:34:06', '$2y$10$1JRQgKL98IFDUElhulEXc.ePzn7hzZPWQOnxnTKlqyqIwSWJSQuBq', 1, 'moZroxtb8F', '2022-01-15 10:34:07', '2022-01-15 10:34:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instansis`
--
ALTER TABLE `instansis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraans`
--
ALTER TABLE `kendaraans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkats`
--
ALTER TABLE `pangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`nip`);

--
-- Indexes for table `perjalanans`
--
ALTER TABLE `perjalanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansis`
--
ALTER TABLE `instansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kendaraans`
--
ALTER TABLE `kendaraans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perjalanans`
--
ALTER TABLE `perjalanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
