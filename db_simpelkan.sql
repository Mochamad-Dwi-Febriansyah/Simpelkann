-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2023 pada 15.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpelkan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `child_users`
--

CREATE TABLE `child_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('lk','pr') NOT NULL,
  `kode_akses_anak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `child_users`
--

INSERT INTO `child_users` (`id`, `user_id`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `kode_akses_anak`) VALUES
(1, 1, 'inez radya azzahra', '2020-09-03', 'pr', '230921020'),
(2, 1, 'inez radya azzahra', '2023-09-01', 'pr', '230948811'),
(3, 1, 'sava', '2023-09-01', 'lk', '230949815'),
(4, 2, 'Mochamad Dwi Febriansyah', '2020-01-28', 'lk', '230923813'),
(5, 2, 'Alexander Rakic', '2022-12-01', 'lk', '230922411'),
(6, 3, 'Mochamad Dwi Febriansyah', '2023-05-05', 'lk', '230935917');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasies`
--

CREATE TABLE `imunisasies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(25) UNSIGNED DEFAULT NULL,
  `child_users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `klinik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL,
  `antrian_ke` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `imunisasies`
--

INSERT INTO `imunisasies` (`id`, `user_id`, `child_users_id`, `klinik_id`, `tanggal`, `antrian_ke`) VALUES
(6, 2, 4, 2, '2023-09-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_imunisasies`
--

CREATE TABLE `jadwal_imunisasies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` bigint(20) NOT NULL,
  `nama_imunisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_imunisasies`
--

INSERT INTO `jadwal_imunisasies` (`id`, `bulan`, `nama_imunisasi`) VALUES
(1, 0, 'Stunting'),
(2, 2, 'Rabies, Kaki Gajah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_beritas`
--

CREATE TABLE `kelola_beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` varchar(1020) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelola_beritas`
--

INSERT INTO `kelola_beritas` (`id`, `judul_berita`, `isi_berita`, `gambar_berita`, `created_at`, `updated_at`) VALUES
(9, 'Dampak Radiasi Barang Elektronik', 'Radiasi elektromagnetik yang ditimbulkan dari penggunaan telepon seluler berpotensi dapat menyebabkan beberapa gangguan terhadap kesehatan. Gangguan kesehatan tersebut dapat berupa tumbuhnya tumor dan kanker pada otak, dapat meyebabkan stress, terganggunya sperma, glioma dan juga terganggunya sel darah merah.', '20230912175945.jpeg', '2023-09-12 10:59:46', '2023-09-12 10:59:46'),
(10, 'Hal Positif yang dapat dilakukan saat Sore Hari', 'Hal Positif yang dapat dilakukan saat Sore Hari antara lain Membaca Buku, Mencoba Resep Baru, Berkebun atau Merawat Tanaman, Menulis atau Mengekspresikan Diri, Berolahraga atau Berjalan-Jalan, dan Menghabiskan Waktu Bersama Keluarga atau Teman.', '20230912180147.jpeg', '2023-09-12 11:01:47', '2023-09-12 11:01:47'),
(11, 'Kasih Sayang Ibu', 'Ibu Ibaratnya Sebagai Guru yang Harus Bisa Mendidik Anak-Anaknya Agar Bisa Cerdas dan Berkepribadian Baik Layaknya seorang guru, ibu memiliki peran penting dalam mendidik anak-anaknya mengenai pendidikan iman, moral, fisik dan jasmani, intelektual, psikologis, dan juga sosial.', '20230912180238.png', '2023-09-12 11:02:38', '2023-09-12 11:02:38'),
(12, 'Efek Buruk tidur di sore hari', 'Tidur di sore hari ternyata dapat menyebabkan disorientasi serta sakit kepala ketika bangun dan mengganggu kualitas tidur di malam hari. Untuk lebih memahaminya, ketahui alasan kenapa tidak boleh tidur sore dari sisi kesehatan dan cara menghindarinya berikut ini.', '20230912180315.jpeg', '2023-09-12 11:03:16', '2023-09-12 11:03:16'),
(13, 'Bersosialisasi', 'Kemampuan bersosialisasi adalah hubungan dengan dua individu atau lebih yang ditandai dengan kemampuan beradaptasi dan proses pembentukan individu untuk belajar menyesuaikan diri, bagaimana cara hidup dan berpikir agar dapat berperan serta berfungsi dalam kelompoknya.', '20230912180404.jpeg', '2023-09-12 11:04:04', '2023-09-12 11:04:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kliniks`
--

CREATE TABLE `kliniks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regional_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_klinik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kliniks`
--

INSERT INTO `kliniks` (`id`, `regional_id`, `nama_klinik`, `alamat`) VALUES
(1, 2, 'Klinik Sejahtera', 'jl kenanga blok 4'),
(2, 2, 'Rumah Sehat Bunda', 'kampung melati barat rt01/rw04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medis`
--

CREATE TABLE `medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','doctor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medis`
--

INSERT INTO `medis` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$WOXO03MQIgRsy6wfwj1odunikSkypwpqJFlUGTRWyjhxsB1KmsmvO', 'admin'),
(2, 'doctor1', '$2y$10$xXW9GcZedbLNAFZUoM1Tk.hV4/PwEBdQ7csOWKKNP47Yot6ifl7.e', 'doctor'),
(3, 'doctor1', '$2y$10$So21/P1Sb5oTdt0HTSD1Pu6ExGXzYEIE.YCaPpKj6sXoMdVhnszTW', 'doctor'),
(4, 'doctor1', '$2y$10$2VJiPv/nDF5Xpz6VUtauf./gQO40gZ50f0zecszmCkqrSbB6LGSVi', 'doctor'),
(5, 'doctor2', '$2y$10$ayjuSnjXiDBuJP1HT2yHYuGNO5csJxGZf5Tosz3JE/ZJ3AYmqNKTy', 'doctor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medis_identitas`
--

CREATE TABLE `medis_identitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `klinik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `medis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medis_identitas`
--

INSERT INTO `medis_identitas` (`id`, `klinik_id`, `medis_id`, `name`) VALUES
(1, 2, 2, 'Aida Rasysa'),
(2, 1, 5, 'Mochamad dwi Febriansyah');

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
(1, '2013_09_11_021940_create_regionals_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_09_09_053404_create_medis_table', 1),
(5, '2023_09_11_021722_create_kliniks_table', 1),
(6, '2023_09_11_022437_create_medis__identitas_table', 1),
(7, '2023_09_11_060433_create_child__users_table', 1),
(8, '2023_09_12_010741_create_imunisasies_table', 1),
(9, '2023_09_12_011226_create_riwayat_imunisasies_table', 1),
(10, '2023_09_12_013239_create_jadwal_imunisasies_table', 1),
(11, '2023_09_12_131942_create_kelola_beritas_table', 2);

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
-- Struktur dari tabel `regionals`
--

CREATE TABLE `regionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regionals`
--

INSERT INTO `regionals` (`id`, `kabupaten`, `kecamatan`) VALUES
(1, 'Demak', 'betokan'),
(2, 'Wedung', 'bonang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_imunisasies`
--

CREATE TABLE `riwayat_imunisasies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal_kedatangan` date NOT NULL,
  `imunisasi_ke` bigint(20) NOT NULL,
  `keterangan_imunisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `regional_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tanggal_lahir`, `alamat`, `regional_id`, `kode_akses`) VALUES
(1, 'Eri', '$2y$10$E3AEvGorexfHXu18OzPJE.rsAY.iOh9QTHqFgwZh/nQQxkgmbXZw6', '2022-11-08', 'bango', 2, '230915010'),
(2, 'user1', '$2y$10$3X.rHi.GUs/yCZeCKzx7v.hU1lS7TohlNq2tGNSZm6hIMWct1SjeC', '2023-09-01', 'jl kenanga blok 4', 2, '23091622'),
(3, 'bastian', '$2y$10$idwRAOpnMOGHrni95GZzlObupsA2fIOslqxVJ.q/frTOX3YdWH5p6', '2022-09-29', 'jl kenanga blok 4', 2, '230917510');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `child_users`
--
ALTER TABLE `child_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_users_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `imunisasies`
--
ALTER TABLE `imunisasies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imunisasies_child_users_id_index` (`child_users_id`),
  ADD KEY `imunisasies_klinik_id_index` (`klinik_id`),
  ADD KEY `imunisasies_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jadwal_imunisasies`
--
ALTER TABLE `jadwal_imunisasies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_beritas`
--
ALTER TABLE `kelola_beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kliniks`
--
ALTER TABLE `kliniks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kliniks_regional_id_index` (`regional_id`);

--
-- Indeks untuk tabel `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `medis_identitas`
--
ALTER TABLE `medis_identitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medis_identitas_klinik_id_index` (`klinik_id`),
  ADD KEY `medis_identitas_medis_id_index` (`medis_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `regionals`
--
ALTER TABLE `regionals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_imunisasies`
--
ALTER TABLE `riwayat_imunisasies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_imunisasies_child_users_id_index` (`child_users_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_regional_id_index` (`regional_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `child_users`
--
ALTER TABLE `child_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `imunisasies`
--
ALTER TABLE `imunisasies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal_imunisasies`
--
ALTER TABLE `jadwal_imunisasies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelola_beritas`
--
ALTER TABLE `kelola_beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kliniks`
--
ALTER TABLE `kliniks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `medis`
--
ALTER TABLE `medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `medis_identitas`
--
ALTER TABLE `medis_identitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `regionals`
--
ALTER TABLE `regionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_imunisasies`
--
ALTER TABLE `riwayat_imunisasies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `child_users`
--
ALTER TABLE `child_users`
  ADD CONSTRAINT `child_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `imunisasies`
--
ALTER TABLE `imunisasies`
  ADD CONSTRAINT `imunisasies_child_users_id_foreign` FOREIGN KEY (`child_users_id`) REFERENCES `child_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `imunisasies_klinik_id_foreign` FOREIGN KEY (`klinik_id`) REFERENCES `kliniks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `imunisasies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kliniks`
--
ALTER TABLE `kliniks`
  ADD CONSTRAINT `kliniks_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `medis_identitas`
--
ALTER TABLE `medis_identitas`
  ADD CONSTRAINT `medis_identitas_klinik_id_foreign` FOREIGN KEY (`klinik_id`) REFERENCES `kliniks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medis_identitas_medis_id_foreign` FOREIGN KEY (`medis_id`) REFERENCES `medis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat_imunisasies`
--
ALTER TABLE `riwayat_imunisasies`
  ADD CONSTRAINT `riwayat_imunisasies_child_users_id_foreign` FOREIGN KEY (`child_users_id`) REFERENCES `child_users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
