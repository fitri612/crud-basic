-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 13.18
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `nomor_id` int(10) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `jumlah_halaman` int(10) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`nomor_id`, `judul_buku`, `pengarang`, `jumlah_halaman`, `stok`) VALUES
(10001, 'Python untuk Program Pemula', 'Jubilee Enterprise', 239, 400),
(10002, 'HTML, CSS, PHP, MySQL & Javasc', 'Didik Setiawan', 217, 120),
(10003, '7 in 1 Pemrograman Web Tingkat', 'Rohi Abdulloh', 340, 85),
(10004, 'Kalkulus untuk Perguruan Tingg', 'Mhd. Daud Pinem', 250, 100),
(10005, 'The Pragmatic Programmer', 'Andy Hunt, Dave Thomas', 320, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`nomor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
