-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 11.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2023_12_11_040837_user', 1),
(48, '2023_12_29_084146_produk', 1),
(49, '2024_01_03_134407_udang', 2),
(50, '2024_01_05_144316_ikan', 3),
(51, '2024_01_05_113504_create_contactuses_table', 4),
(52, '2024_01_05_133638_pemesanan', 4),
(53, '2024_01_05_165245_ikan', 4),
(54, '2024_01_08_163856_user_id', 5),
(55, '2024_01_08_170328_pemesanan', 6),
(56, '2024_01_09_092046_hapus_harga_dari_pemesanan', 7),
(57, '2024_01_09_102221_pemesanan', 8),
(58, '2024_01_09_122728_pemesanan', 9),
(59, '2024_01_09_143724_pesanan', 10),
(60, '2024_01_09_195446_create_pemesanan_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pesanan` varchar(255) NOT NULL,
  `Jumlahpesanan` float NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `tanggal_penangkapan` date NOT NULL,
  `stok` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `tanggal_penangkapan`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Ikan Belukang', 25000, '2024-01-01', 18.5, '1704831351.jpg', '2024-01-01 06:42:41', '2024-01-15 02:57:31'),
(3, 'Ikan Terubuk', 30000, '2024-01-01', 19, '1704116681.jpg', '2024-01-01 06:44:41', '2024-01-09 13:23:54'),
(4, 'Ikan Biang', 25000, '2024-01-08', 21.5, '1704123995.jpg', '2024-01-01 08:46:35', '2024-01-15 01:29:12'),
(6, 'Ikan Bawal', 31500, '2024-01-04', 19, '1704124199.jpg', '2024-01-01 08:49:59', '2024-01-01 08:49:59'),
(7, 'Ikan Tongkol', 28000, '2024-01-05', 10, '1704470196.jpg', '2024-01-01 08:51:35', '2024-01-05 08:56:36'),
(8, 'Ikan Layur', 26000, '2024-01-05', 10, '1704470310.jpg', '2024-01-01 08:52:28', '2024-01-05 08:58:30'),
(9, 'Ikan Selar', 38000, '2024-01-05', 12, '1704470342.jpg', '2024-01-01 08:53:23', '2024-01-05 08:59:02'),
(10, 'Ikan Kembung', 34000, '2024-01-06', 21, '1704470385.jpg', '2024-01-01 08:56:39', '2024-01-05 08:59:45'),
(15, 'Ikan Gerut', 42000, '2024-01-05', 10, '1704470426.jpg', '2024-01-05 04:38:14', '2024-01-05 09:00:26'),
(16, 'Ikan Jejo', 15000, '2024-01-05', 10, '1704470495.jpg', '2024-01-05 04:39:17', '2024-01-05 09:01:35'),
(17, 'Ikan Krapu', 42000, '2024-01-05', 14, '1704470535.jpg', '2024-01-05 04:40:21', '2024-01-05 09:02:15'),
(18, 'Ikan Maco', 28000, '2024-01-05', 19, '1704470822.jpg', '2024-01-05 04:41:19', '2024-01-05 09:07:02'),
(19, 'Ikan Parang', 32000, '2024-01-05', 20, '1704470906.jpg', '2024-01-05 04:41:56', '2024-01-05 09:08:26'),
(21, 'Ikan Siakap', 35000, '2024-01-05', 10, '1704470978.jpg', '2024-01-05 04:43:29', '2024-01-05 09:09:38'),
(22, 'Ikan Gelama', 20000, '2024-01-05', 10, '1704471018.jpg', '2024-01-05 04:44:09', '2024-01-05 09:10:18'),
(23, 'Ikan Tirusan', 28000, '2024-01-05', 20, '1705025434.jpg', '2024-01-05 04:44:52', '2024-01-11 19:10:34'),
(24, 'Ikan Kakap Merah', 36000, '2024-01-05', 18, '1704471143.jpg', '2024-01-05 04:45:43', '2024-01-05 09:12:23'),
(25, 'Ikan  Tenggiri', 30000, '2024-01-05', 15, '1704471176.jpg', '2024-01-05 04:46:28', '2024-01-05 09:12:56'),
(26, 'Ikan Pari', 50000, '2024-01-05', 15, '1704471228.jpg', '2024-01-05 04:47:05', '2024-01-05 09:13:48'),
(27, 'Ikan Lomek', 10000, '2024-01-05', 16, '1704471260.jpg', '2024-01-05 04:48:10', '2024-01-05 09:14:20'),
(28, 'Ikan Serai', 17000, '2024-01-05', 18, '1704471290.jpg', '2024-01-05 04:49:01', '2024-01-05 09:14:50'),
(29, 'Ikan Puput', 24000, '2024-01-05', 17, '1704471321.jpg', '2024-01-05 04:49:54', '2024-01-05 09:15:21'),
(30, 'Udang Gogo', 120000, '2024-01-05', 17, '1704471351.jpg', '2024-01-05 07:27:22', '2024-01-10 09:36:14'),
(31, 'Udang Belang', 35000, '2024-01-05', 18, '1704471387.jpg', '2024-01-05 07:28:14', '2024-01-05 09:16:27'),
(32, 'Udang Putih', 28000, '2024-01-05', 18, '1704471422.jpg', '2024-01-05 07:29:01', '2024-01-05 09:17:02'),
(33, 'Udang Pepai', 15000, '2024-01-05', 17, '1704471480.jpg', '2024-01-05 07:29:35', '2024-01-05 09:18:00'),
(34, 'Udang Kibi', 24000, '2024-01-05', 18, '1704471515.jpg', '2024-01-05 07:30:15', '2024-01-05 09:18:35'),
(35, 'Udang Merah', 28000, '2024-01-05', 14, '1704471540.jpg', '2024-01-05 07:31:03', '2024-01-11 18:52:19'),
(36, 'Ikan Senangin', 38000, '2024-01-10', 20, '1704829773.jpg', '2024-01-09 12:49:33', '2024-01-09 12:49:33'),
(37, 'Ikan Debuk', 35000, '2024-01-12', 30, '1705025359.jpg', '2024-01-11 19:09:19', '2024-01-11 19:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `jenis_kelamin` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `jenis_kelamin`, `nomor_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(6, 'nelayan', 'nelayan01@gmail.com', '$2y$12$KUqDix7MSo.h4aMWpwpfCuwlSG2asOf0ECHb2nRf6xiHyP5d1lImO', 'admin', 'Laki-laki', '62895418128121', 'jalan pramuka Gg H. Ramlah', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
