-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 09.40
-- Versi server: 5.7.33
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_audy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id` char(36) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penghargaan`
--

INSERT INTO `penghargaan` (`id`, `foto`, `nama`, `tahun`, `created_at`, `updated_at`) VALUES
('9c2466aa-c58f-4903-a538-b0095f126dd9', 'app/images/foto/9c2466aa-c58f-4903-a538-b0095f126dd9-1716801552-csG9o.jpg', 'juara 2', '2018', '2024-05-27 02:19:12', '2024-05-27 09:33:02'),
('9c246cb0-1933-4a55-9ecb-477cb2c21fa0', 'app/images/foto/9c246cb0-1933-4a55-9ecb-477cb2c21fa0-1716802562-d6QZi.jpg', 'juara 2', '2020', '2024-05-27 02:36:02', '2024-05-27 02:36:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `nama`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
('9c1a9c24-fa00-4a34-9bee-12ff2484a0b3', 'Naga Belimbur', 'app/images/gambar/9c1a9c24-fa00-4a34-9bee-12ff2484a0b3-1716381027-ZioKc.png', '<p style=\"text-align: justify; \"><span style=\"color: rgb(33, 37, 41); font-family: Poppins; font-size: 18px;\">Kabupaten Ketapang memiliki corak kain batik yang khas. Secara historis, motifnya berasal dari Kerajaan Matan. Motif-motif kain terinpirasi dari tanaman alam yang terlihat dari balik jendela. Di jaman kerajaan, gadis-gadis yang baru mendapat haid, tidak boleh keluar rumah. Mereka membatik dari dalam kamar.</span><br></p>', '2024-05-22 05:30:27', '2024-05-27 01:32:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `foto`, `username`, `type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('977fd25a-4ab4-4a95-a818-aa996f91ee3e', 'Admin', NULL, 'admin', 'ADMIN', 'admin@gmail.com', '$2y$10$iQ6py9S0iojytOdFoHihzu35yi2UjYButdHVfh6fvV6B3uv8.GSL2', NULL, '2022-10-14 06:00:57', '2024-05-22 10:45:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
