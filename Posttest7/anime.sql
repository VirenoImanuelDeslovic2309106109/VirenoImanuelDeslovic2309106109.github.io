-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2024 pada 17.18
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_gambar1`
--

CREATE TABLE `komentar_gambar1` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `rating` int(4) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar_gambar1`
--

INSERT INTO `komentar_gambar1` (`id`, `nama`, `rating`, `review`) VALUES
(2, 'john smith', 2, ''),
(3, 'john smithss', 4, 'mlxnw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_pengguna`
--

CREATE TABLE `login_pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun_bergabung` int(4) NOT NULL,
  `anime_favorit` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_pengguna`
--

INSERT INTO `login_pengguna` (`id_pengguna`, `email`, `nama`, `tahun_bergabung`, `anime_favorit`, `password`, `foto`, `role`) VALUES
(14, 'coba@gmail.com', 'sari suri', 12121, 'sasasa', '$2y$10$glHGrsjFFOZcJ6WG5aN78uF9rPiAXGJLyE3.uFjlaVB', '', 'Admin'),
(15, 'coba@gmail.com', 'saya', 212121, 'saya', '$2y$10$p9hb5B56vP3SuDEdCQ/4vONfvVnqsnKriX/LGcROsxd', '', 'Admin'),
(17, 'coba@gmail.com', 'bagus', 21211, 'sasa', '$2y$10$JEubcKH55GD45zT6.abpZufC6417KbE8P0DP0aKX/UV', '', 'User'),
(18, 'coba@gmail.com', 'zidan', 12121, 'asasa', '$2y$10$ShOxPjHqsUnA0fQuo7GvSuXxFBlUKgJ/ErH09YfdJ8K', '', 'User'),
(19, 'coba@gmail.com', 'nopal', 1212, 'asasa', '$2y$10$OKtsi2pXjvVK2BkBL4Os4eSyAIKeOXX53zUJzPsgiRs', '', 'User'),
(20, 'coba@gmail.com', 'coba', 1212, 'sasas', '$2y$10$vTmaZhrPZK5Yo6Ip2w/OY.AKEZlM7Zer1DUsn0/Aedm', '', 'Admin'),
(21, 'coba@gmail.com', 'santoso', 212121, 'aas', '$2y$10$yyYDt1dY832nCMN8LfG3NeF4VAguY4GvlaoZHpgh/p0', '', 'Admin'),
(22, 'coba@gmail.com', 'pandy', 221, 'asasa', '$2y$10$TP1Opl6Re/9FCBJogYXFPurU5jCd7NtoezpoTHtOyEV', '', 'Admin'),
(23, 'coba@gmail.com', 'nopal1', 21212, 'qwqw', '$2y$10$2TkDFBQ9zbyWjidyqALYIubs4XiL7jN1ef2g2P8soOd', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar_gambar1`
--
ALTER TABLE `komentar_gambar1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_pengguna`
--
ALTER TABLE `login_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar_gambar1`
--
ALTER TABLE `komentar_gambar1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `login_pengguna`
--
ALTER TABLE `login_pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
