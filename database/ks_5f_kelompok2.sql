-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2021 pada 07.22
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks_5f_kelompok2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_motor`
--

CREATE TABLE `data_motor` (
  `id_motor` varchar(7) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `plat_no` varchar(9) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun_pembuatan` year(4) NOT NULL,
  `masa_berlaku_stnk` date NOT NULL,
  `pajak` date NOT NULL,
  `harga_asli` bigint(20) NOT NULL,
  `harga_jual` bigint(20) NOT NULL,
  `odometer` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('Booked','Tersedia','Terjual') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_motor`
--

INSERT INTO `data_motor` (`id_motor`, `nama_pemilik`, `plat_no`, `merk`, `type`, `warna`, `tahun_pembuatan`, `masa_berlaku_stnk`, `pajak`, `harga_asli`, `harga_jual`, `odometer`, `foto`, `status`) VALUES
('MTR0002', 'Versys X 250 Tourer', 'B4585RC', 'Kawasaki', 'Manual', 'Silver', 2021, '2021-12-10', '2022-01-01', 50000000, 52000000, 40234, '61bb605eb89a6.jpg', 'Booked'),
('MTR0003', 'Ramadhan Chandraditio', 'T4524RC', 'Honda', 'Supra GTR', 'Hitam', 2021, '2022-01-01', '2021-12-04', 19000000, 20000000, 18000, '61c6965085423.png', 'Tersedia'),
('MTR0004', 'Ibrohim Husain', 'B4585RC', 'Honda', 'CB500X', 'Hitam', 2021, '2021-12-25', '2022-01-01', 160000000, 165000000, 10000, '61c696794def9.jpg', 'Terjual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(7) NOT NULL,
  `id_motor` varchar(7) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status_transaksi` enum('Waiting','Selesai','Batal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_motor`, `id_user`, `tgl_transaksi`, `bukti_transfer`, `status_transaksi`) VALUES
('TRN0001', 'MTR0002', 'cust1', '2021-12-25', '61c69fbe099b4.jpg', 'Batal'),
('TRN0002', 'MTR0002', 'cust1', '2021-12-25', '61c6a613d5385.png', 'Waiting'),
('TRN0003', 'MTR0004', 'cust1', '2021-12-25', '61c6a6542f7e1.jpg', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hak_akses` enum('Pemilik','Staff Toko','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `no_hp`, `alamat`, `hak_akses`) VALUES
('cust1', '202cb962ac59075b964b07152d234b70', 'Customer 1', '081312345678', 'Karawang', 'Customer'),
('pemilik1', '202cb962ac59075b964b07152d234b70', 'Pemilik', '081212341234', 'Karawang', 'Pemilik'),
('staff1', '202cb962ac59075b964b07152d234b70', 'Staff 1', '081212341234', 'Karawang', 'Staff Toko');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_motor`
--
ALTER TABLE `data_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `data_motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
