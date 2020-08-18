-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Nov 2019 pada 01.07
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11302212_db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring`
--

CREATE TABLE `monitoring` (
  `no` int(11) NOT NULL,
  `daya` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `arus` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tegangan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `monitoring`
--

INSERT INTO `monitoring` (`no`, `daya`, `arus`, `tegangan`, `tanggal`) VALUES
(1, '1.00', '0.04', '217.90', '2019-11-12 17:20:46'),
(2, '0.90', '0.04', '217.70', '2019-11-12 17:21:48'),
(3, '0.80', '0.04', '218.30', '2019-11-12 17:22:49'),
(4, '1.30', 'nan', 'nan', '2019-11-12 17:23:52'),
(5, '0.80', '0.04', '216.40', '2019-11-12 17:24:54'),
(6, '0.70', '0.04', '216.70', '2019-11-12 17:25:56'),
(7, '0.70', '0.04', '217.50', '2019-11-12 17:28:04'),
(8, '0.80', '0.04', '217.70', '2019-11-12 17:29:06'),
(9, 'nan', 'nan', 'nan', '2019-11-12 17:30:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `namapelapor` text COLLATE utf8_unicode_ci NOT NULL,
  `masalah` text COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `namapelapor`, `masalah`, `isi`) VALUES
(2, 'wahyu', 'Lain-lain', 'adminnya galau dupl'),
(3, '', '', ''),
(4, 'Dudih', 'Nyala lampu berkedip', 'Terbakar'),
(5, 'Chaewon', 'Nyala lampu berkedip', 'Stop kontak hangus'),
(6, 'wahyu', 'Nyala lampu redup', ''),
(7, 'wahyu', 'Nyala lampu berkedip', 'yu'),
(8, 'wahyu', 'Nyala lampu redup', ''),
(9, 'wahyu', 'Terdapat percikan api', 'test'),
(10, 'Zuhal', 'Nyala lampu berkedip', ''),
(11, 'wahyu', 'Nyala lampu redup', ''),
(12, 'wahyu fajar', 'Nyala lampu redup', 'hmm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'wahyu', 'wahyu'),
(2, 'admin', 'admin'),
(3, 'faris', 'Bandung28'),
(11, 'faris28', '123456'),
(12, 'wahyu21', 'wahyu21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
