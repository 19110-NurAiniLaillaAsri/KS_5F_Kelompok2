-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 16.14
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
-- Database: `penjualan_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_motor`
--

CREATE TABLE `identitas_motor` (
  `id` int(20) NOT NULL,
  `no_registrasi` varchar(20) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `plat_no` varchar(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `tahun_pembuatan` date NOT NULL,
  `isi_silinder` varchar(20) NOT NULL,
  `bahan_bakar` varchar(20) NOT NULL,
  `warna_tnkb` varchar(20) NOT NULL,
  `tahun_registrasi` date NOT NULL,
  `no_bpkb` varchar(20) NOT NULL,
  `kode_lokasi` varchar(20) NOT NULL,
  `masa_berlaku_stnk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('Pemilik','Teller','Customer','Teknisi') NOT NULL,
  `create_date` date NOT NULL,
  `manager` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
