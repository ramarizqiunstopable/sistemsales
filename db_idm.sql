-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2021 pada 12.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_idm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kasir`
--

CREATE TABLE `t_kasir` (
  `id_kasir` varchar(6) NOT NULL,
  `nm_kasir` varchar(20) NOT NULL,
  `jabatan` enum('Clerk','Senior Clerk') NOT NULL,
  `notlp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sales`
--

CREATE TABLE `t_sales` (
  `id` varchar(6) NOT NULL,
  `kd_toko` varchar(6) NOT NULL,
  `nm_toko` varchar(20) NOT NULL,
  `kasir` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `spd` int(20) NOT NULL,
  `RAB` int(10) NOT NULL,
  `std` int(4) NOT NULL,
  `apc` int(20) NOT NULL,
  `gm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sales`
--

INSERT INTO `t_sales` (`id`, `kd_toko`, `nm_toko`, `kasir`, `tgl`, `spd`, `RAB`, `std`, `apc`, `gm`) VALUES
('', 'TGBV', 'Curug 5', 'Sakura', '2021-08-09', 2345678, 18900987, 456, 45678, 345),
('115', 'TVBB', 'Raya Serang KM 15', 'Tia', '2021-08-11', 23456789, 12345500, 234, 65789, 50),
('116', 'TREW', 'Mutiara Garuda', 'Sinaun', '2021-08-12', 123234, 1234567, 234, 527, 10),
('117', 'TRUI', 'Puri Methland', 'Cici', '2021-08-13', 20897000, 15674000, 543, 38484, 133),
('234', 'TRIU', 'A yani sepatan', 'lila', '2021-08-13', 2345568, 12000345, 432, 234568, 345),
('2341', 'RYUI', 'Cisoka ', 'WIda yani', '2021-08-17', 234567, 13456500, 345, 34, 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stockout`
--

CREATE TABLE `t_stockout` (
  `id` varchar(6) NOT NULL,
  `kd_toko` varchar(6) NOT NULL,
  `nm_toko` varchar(20) NOT NULL,
  `kasir` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `e` int(4) NOT NULL,
  `d` int(4) NOT NULL,
  `s` int(4) NOT NULL,
  `l` int(4) NOT NULL,
  `b` int(4) NOT NULL,
  `total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_stockout`
--

INSERT INTO `t_stockout` (`id`, `kd_toko`, `nm_toko`, `kasir`, `tgl`, `e`, `d`, `s`, `l`, `b`, `total`) VALUES
('', 'TRYL', 'Puri Permai', 'risa', '2021-08-14', 4, 3, 2, 10, 2, 21),
('113', 'THJY', 'Cikokol', 'Sisi', '2021-08-14', 23, 32, 45, 32, 65, 23),
('114', 'TGHY', 'Cipondoh', 'Sisil', '2021-08-13', 4, 5, 6, 4, 6, 25),
('115', 'TROI', 'Cikasungka', 'ela', '2021-08-13', 5, 6, 4, 6, 6, 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_toko`
--

CREATE TABLE `t_toko` (
  `kd_toko` varchar(6) NOT NULL,
  `nm-_tk` varchar(20) NOT NULL,
  `RAB` int(15) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Jns_tk` enum('Reguler','Frenchise') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jabatan` enum('kasir','admin','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `nik`, `password`, `jabatan`) VALUES
(2, 'admin', 2011000703, '12345', 'admin'),
(3, 'manager', 2013128116, '123', 'manager'),
(4, 'kasir', 123456, '1234', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_kasir`
--
ALTER TABLE `t_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `t_sales`
--
ALTER TABLE `t_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_stockout`
--
ALTER TABLE `t_stockout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_toko`
--
ALTER TABLE `t_toko`
  ADD PRIMARY KEY (`kd_toko`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
