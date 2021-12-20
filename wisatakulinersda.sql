-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2021 pada 04.54
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatakulinersda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori__kuliners`
--

CREATE TABLE `kategori__kuliners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kategori__kuliners`
--

INSERT INTO `kategori__kuliners` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Olahan Daging', '2021-10-06 22:12:05', '2021-12-17 03:07:52'),
(2, 'Olahan Mie', '2021-10-06 22:12:05', '2021-12-17 03:07:25'),
(3, 'Olahan Ayam', '2021-10-06 22:12:05', '2021-12-17 03:11:04'),
(4, 'Olahan Ikan', '2021-10-06 22:12:05', '2021-12-17 03:13:09'),
(5, 'Olahan Nasi', '2021-10-06 22:12:05', '2021-12-17 03:13:28'),
(6, 'Jajanan', '2021-10-06 22:12:05', '2021-12-17 03:13:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2021_10_07_043317_add_kisaranharga_to_nama__kuliners_table', 2),
(9, '2021_10_07_050210_add_kisaranharga_to_nama__kuliners_table', 3),
(10, '2014_10_12_000000_create_users_table', 4),
(11, '2014_10_12_100000_create_password_resets_table', 4),
(12, '2019_08_19_000000_create_failed_jobs_table', 4),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(14, '2021_10_07_033222_create_kategori__kuliners_table', 4),
(15, '2021_10_07_033304_create_nama_tempat__kuliners_table', 4),
(16, '2021_10_07_033343_create_nama__kuliners_table', 5),
(17, '2021_11_10_030638_add_alamat_to_nama_tempat__kuliners_table', 6),
(18, '2021_11_10_031450_add_alamat_to_nama_tempat__kuliners_table', 7),
(19, '2021_11_10_034859_add_alamat_field_to_nama_tempat__kuliners_table', 8),
(20, '2021_12_07_092440_add_no_telp_to_nama_tempat__kuliners_table', 9),
(21, '2021_12_09_022707_update', 10),
(22, '2021_12_09_033851_add_no_telp_to_nama__kuliners_table', 11),
(23, '2021_12_09_060125_add_no_telp_to_nama__kuliners_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_tempat__kuliners`
--

CREATE TABLE `nama_tempat__kuliners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `nama_tempat__kuliners`
--

INSERT INTO `nama_tempat__kuliners` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Wong Solo', 'Ruko Ciputra Indah Blok RE 02, Jalan Kh. Mukmin No.11, Sidokare, Kecamatan Sidoarjo, Kapasan, Sidokare, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213', '0811-6147-228', '2021-10-06 22:12:05', '2021-12-08 19:47:24'),
(2, 'Gacoan', 'Jl. Teuku Umar No.41, Mangersari, Magersari, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212', '-', '2021-10-06 22:12:05', '2021-12-08 19:47:44'),
(3, 'Kober Mie Setan', 'Jl. Raya Ponti No.8, Wismasarinadi, Magersari, Sidoarjo Sub-Distrcit, Sidoarjo Regency, East Java 61212', '0857-0754-9754', '2021-10-06 22:12:05', '2021-12-08 19:48:29'),
(4, 'Rawon Gajah Mada sidoarjo', 'Jl. Gajah Mada, Pekauman, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213', '-', '2021-11-16 22:53:15', '2021-12-08 19:48:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama__kuliners`
--

CREATE TABLE `nama__kuliners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori__kuliners_id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat__kuliners_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `nama__kuliners`
--

INSERT INTO `nama__kuliners` (`id`, `kategori__kuliners_id`, `nama_tempat__kuliners_id`, `nama`, `deskripsi`, `gambar`, `harga`, `no_telp`, `created_at`, `updated_at`) VALUES
(31, 2, 2, 'Mie Iblis', 'ini adalah salah satu menu mie yang paling populer di tempat makan mie gacoan, karena selain pedas rasanya juga bercampur dengan manis, asin, dan gurih dari kecap yang dihasilkan', 'LZwlCh0Wpr0GHie08WAEoJl3fS1rtoi4zk2up23h.jpg', '8.000 - 10.000', NULL, '2021-11-28 17:23:10', '2021-11-28 17:23:10'),
(35, 3, 1, 'Ayam Bakar', 'sebuah masakan ayam yang dibakar dari tempat kuliner wong solo, makanan ini banyak diminati oleh warga karena rasa dari bumbu ayamnya yang meresap sempurna ditambah dengan sambalnya yang pedas membuat sebagian besar orang menyukai makanan ini', 'ZtC57jyN4qEtbQHTepE5jS1xECxuMGBiJHJcERZN.jpg', '15.000 - 40.000', NULL, '2021-11-29 18:12:44', '2021-12-17 03:11:31'),
(36, 1, 4, 'Rawon', 'sebuah warung rumah makan sederhana yang menyediakan rawon sebagai menu utamanya, meskipun warungnya sederhana akan tetapi rasa kauhnya yang melekat, dan potongan dagingnya yang besar membuat orang ingin terus merasakan hidangan ini', 'dtPhsM2ZVcJzNSm2PbnAjxbljyoxrI1NhgxpjYAJ.jpg', '15.000 - 22.000', NULL, '2021-11-29 18:23:13', '2021-12-17 03:08:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rijal Amirudin', 'rijal11059@gmail.com', NULL, '$2y$10$NbJKr2LOk6NvjFSApSCb.uERSBIUGJK6ZA4JE/2vKrwlFv8xxWzR2', 'NHLMiZgxYjsA6SlJw9OH80pcG1cTotFR5X8G2tImNsfDqpLEBsAAaD5AZwDg', '2021-10-06 22:09:17', '2021-10-06 22:09:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori__kuliners`
--
ALTER TABLE `kategori__kuliners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_tempat__kuliners`
--
ALTER TABLE `nama_tempat__kuliners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama__kuliners`
--
ALTER TABLE `nama__kuliners`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori__kuliners`
--
ALTER TABLE `kategori__kuliners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `nama_tempat__kuliners`
--
ALTER TABLE `nama_tempat__kuliners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nama__kuliners`
--
ALTER TABLE `nama__kuliners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
