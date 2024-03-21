-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2020 pada 04.24
-- Versi server: 8.0.21
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasurvey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_olah`
--

CREATE TABLE `data_olah` (
  `Id` int NOT NULL,
  `data` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_olah`
--

INSERT INTO `data_olah` (`Id`, `data`) VALUES
(1, 10),
(2, 18),
(3, 20),
(4, 33),
(5, 33),
(6, 42),
(7, 43),
(8, 45),
(9, 50),
(10, 71),
(11, 82),
(12, 100),
(13, 129),
(14, 164),
(15, 186),
(16, 198),
(17, 250),
(18, 250),
(19, 256),
(20, 256),
(21, 296),
(22, 355),
(23, 476),
(24, 489),
(25, 500),
(26, 533),
(27, 608),
(28, 625),
(29, 637),
(30, 742),
(31, 819),
(32, 845),
(33, 890),
(34, 930),
(35, 943),
(36, 990),
(37, 1050),
(38, 1200),
(39, 1328),
(40, 1500),
(41, 1565),
(42, 1890),
(43, 1906),
(44, 1960),
(45, 2020),
(46, 2676),
(47, 3321),
(48, 3868),
(49, 4365),
(50, 4532);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_olah`
--
ALTER TABLE `data_olah`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_olah`
--
ALTER TABLE `data_olah`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
