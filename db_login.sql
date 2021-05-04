-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2021 pada 07.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukkan`
--

CREATE TABLE `masukkan` (
  `No_masukkan` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Komentar` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masukkan`
--

INSERT INTO `masukkan` (`No_masukkan`, `Nama`, `Email`, `Komentar`, `Username`, `Alamat`) VALUES
(2, 'Andi Nurahman', 'Kucing@gmail.com', 'Wah Hebat Sekali', 'sadasdas', 'jl Delima'),
(3, 'Andini Firmansyah', 'Halo@gmail.com', 'Airnya jernih seperti tanpa kaca', 'antum.123', 'jl thomas and friend');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `No_pengunjung` int(50) NOT NULL,
  `Nama` varchar(90) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `No_telp` int(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`No_pengunjung`, `Nama`, `Alamat`, `Email`, `No_telp`, `password`) VALUES
(1, 'Farhanang Wahyu Aprian', 'JL P Sudirman', 'farhanang@student.com', 81929302, 'anjay'),
(3, 'meong', 'meong@gmail.com', 'kucing123@gmailc.om', 81992773, 'sdasdsadas'),
(4, 'meong1', 'meong@gmail.com', 'kucing123@gmailc.om', 81992773, 'Kucing123'),
(5, 'kucing12', 'kucing madiun', 'kucing@gmail.com', 8192034, 'kucing12'),
(6, 'Khoirul Diantoro', 'jl delima', 'khoirul@gmail.com', 8192213, 'khoirul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masukkan`
--
ALTER TABLE `masukkan`
  ADD PRIMARY KEY (`No_masukkan`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`No_pengunjung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masukkan`
--
ALTER TABLE `masukkan`
  MODIFY `No_masukkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `No_pengunjung` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
