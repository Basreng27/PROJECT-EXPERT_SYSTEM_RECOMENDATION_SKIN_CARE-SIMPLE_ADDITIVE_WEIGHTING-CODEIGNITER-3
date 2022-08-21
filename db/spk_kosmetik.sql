-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Agu 2022 pada 11.29
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kosmetik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hak` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`, `hak`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `kode_product` varchar(255) NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `tampung` float NOT NULL,
  `tampung_ranking` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `kode_product`, `kode_kriteria`, `nilai_bobot`, `tampung`, `tampung_ranking`) VALUES
(82, 'AC', 'H', 50, 50, 175),
(83, 'AC', 'HRG', 0, 0, 175),
(84, 'AC', 'KKS', 50, 50, 175),
(85, 'AC', 'KT', 0, 0, 175),
(86, 'AC', 'KWJ', 100, 50, 175),
(87, 'AC', 'MW', 50, 25, 175),
(88, 'EB', 'H', 0, 0, 25),
(89, 'EB', 'HRG', 0, 0, 25),
(90, 'EB', 'KKS', 0, 0, 25),
(91, 'EB', 'KT', 0, 0, 25),
(92, 'EB', 'KWJ', 0, 0, 25),
(93, 'EB', 'MW', 50, 25, 25),
(94, 'E', 'H', 50, 50, 100),
(95, 'E', 'HRG', 25, 0, 100),
(96, 'E', 'KKS', 0, 0, 100),
(97, 'E', 'KT', 0, 0, 100),
(98, 'E', 'KWJ', 0, 0, 100),
(99, 'E', 'MW', 100, 50, 100),
(100, 'ETB', 'H', 0, 0, 0),
(101, 'ETB', 'HRG', 25, 0, 0),
(102, 'ETB', 'KKS', 0, 0, 0),
(103, 'ETB', 'KT', 0, 0, 0),
(104, 'ETB', 'KWJ', 0, 0, 0),
(105, 'ETB', 'MW', 0, 0, 0),
(106, 'SPW', 'H', 0, 0, 50),
(107, 'SPW', 'HRG', 25, 0, 50),
(108, 'SPW', 'KKS', 0, 0, 50),
(109, 'SPW', 'KT', 0, 0, 50),
(110, 'SPW', 'KWJ', 100, 50, 50),
(111, 'SPW', 'MW', 0, 0, 50),
(144, 'AC', 'WB', 0, 0, 175),
(145, 'E', 'WB', 0, 0, 100),
(146, 'EB', 'WB', 0, 0, 25),
(147, 'ETB', 'WB', 0, 0, 0),
(149, 'SPW', 'WB', 0, 0, 50),
(156, 'NN', 'H', 0, 0, 50),
(157, 'NN', 'HRG', 0, 0, 50),
(158, 'NN', 'KKS', 0, 0, 50),
(159, 'NN', 'KT', 0, 0, 50),
(160, 'NN', 'KWJ', 0, 0, 50),
(161, 'NN', 'MW', 0, 0, 50),
(162, 'NN', 'WB', 100, 50, 50),
(163, 'BCA', 'H', 0, 0, 0),
(164, 'BCA', 'HRG', 50, 0, 0),
(165, 'BCA', 'KKS', 0, 0, 0),
(166, 'BCA', 'KT', 0, 0, 0),
(167, 'BCA', 'KWJ', 0, 0, 0),
(168, 'BCA', 'MW', 0, 0, 0),
(169, 'BCA', 'WB', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_remaja`
--

CREATE TABLE `bobot_remaja` (
  `id_bobot_remaja` int(11) NOT NULL,
  `kode_product_remaja` varchar(255) NOT NULL,
  `kode_kriteria_remaja` varchar(255) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `tampung` float NOT NULL,
  `tampung_ranking` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot_remaja`
--

INSERT INTO `bobot_remaja` (`id_bobot_remaja`, `kode_product_remaja`, `kode_kriteria_remaja`, `nilai_bobot`, `tampung`, `tampung_ranking`) VALUES
(2, 'A', 'HR', 75, 0, 0),
(3, 'EBR', 'HR', 25, 0, 75),
(4, 'ER', 'HR', 0, 0, 0),
(5, 'A', 'K', 0, 0, 0),
(6, 'EBR', 'K', 50, 75, 75),
(7, 'ER', 'K', 0, 0, 0),
(8, 'A', 'WK', 0, 0, 0),
(9, 'EBR', 'WK', 0, 0, 75),
(10, 'ER', 'WK', 0, 0, 0),
(20, 'WR', 'HR', 0, 0, 56.25),
(21, 'WR', 'K', 0, 0, 56.25),
(22, 'WR', 'WK', 0, 0, 56.25),
(29, 'A', 'WBR', 0, 0, 0),
(30, 'EBR', 'WBR', 0, 0, 75),
(31, 'ER', 'WBR', 0, 0, 0),
(33, 'WR', 'WBR', 75, 56.25, 56.25),
(43, 'NNR', 'HR', 0, 0, 75),
(44, 'NNR', 'K', 0, 0, 75),
(45, 'NNR', 'WBR', 100, 75, 75),
(46, 'NNR', 'WK', 0, 0, 75),
(47, 'ABCR', 'HR', 25, 0, 0),
(48, 'ABCR', 'K', 0, 0, 0),
(49, 'ABCR', 'WBR', 0, 0, 0),
(50, 'ABCR', 'WK', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `kode_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `usia`, `kode_product`) VALUES
(113, 'a', 0, 'AC'),
(114, 'a', 0, 'AC'),
(115, 'd', 0, 'AC'),
(116, 'd', 0, 'AC'),
(117, 'a', 0, 'AC'),
(118, 'as', 0, 'AC'),
(119, 'wqe', 1212, 'AC'),
(120, 'wqe', 1212, 'AC'),
(121, 'a', 87, 'AC'),
(122, 'a', 87, 'AC'),
(123, 'a', 87, 'AC'),
(124, 'a', 87, 'AC'),
(125, 'a', 87, 'AC'),
(126, 'a', 87, 'AC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_remaja`
--

CREATE TABLE `data_remaja` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `kode_product_remaja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_remaja`
--

INSERT INTO `data_remaja` (`id`, `nama`, `usia`, `kode_product_remaja`) VALUES
(1, 'a', 0, 'EBR'),
(2, 'a', 0, 'EBR'),
(3, 'a', 0, 'EBR'),
(4, 'a', 0, 'EBR'),
(5, 'a', 0, 'EBR'),
(6, 'as', 0, 'EBR'),
(7, 'asd', 0, 'EBR'),
(8, 'as', 14, 'EBR'),
(9, 'as', 18, 'EBR'),
(10, 'as', 18, 'EBR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `kode_jenis` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `jenis`) VALUES
('BW', 'Bedak Wajah'),
('FC', 'Facial Cleanser'),
('FW', 'Facial Wash'),
('SCB', 'Sabun Cuci Muka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `kode_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `sifat_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`kode_kriteria`, `nama_kriteria`, `sifat_kriteria`) VALUES
('H', 'Halus', 'benefit'),
('HRG', 'Harga', 'cost'),
('KKS', 'Kulit Kusam', 'benefit'),
('KT', 'Kulit Tertarik', 'benefit'),
('KWJ', ' kulit wajah jadi lebih bersih', 'benefit'),
('MW', 'Membersihkan Wajah', 'benefit'),
('WB', 'Warna Bedak', 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_remaja`
--

CREATE TABLE `kriteria_remaja` (
  `kode_kriteria_remaja` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `sifat_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_remaja`
--

INSERT INTO `kriteria_remaja` (`kode_kriteria_remaja`, `nama_kriteria`, `sifat_kriteria`) VALUES
('HR', 'Harga', 'cost'),
('K', 'Kulit', 'benefit'),
('WBR', 'Warna Bedak Remaja', 'benefit'),
('WK', 'Warna Kulit', 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `kode_product` varchar(255) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `kode_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`kode_product`, `nama_product`, `harga`, `kode_jenis`) VALUES
('AC', 'Achnes', 20000, 'FC'),
('BCA', 'Bedak Kosmetik Ada', 50000, 'BW'),
('E', 'Emina', 0, 'FW'),
('EB', 'Emina Bedak', 0, 'SCB'),
('ETB', 'ERHA TruWhite Brightening Facial Wash', 0, 'FW'),
('NN', 'Niknak', 0, 'FC'),
('SPW', ' Senka Perfect Whip', 0, 'FW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_remaja`
--

CREATE TABLE `product_remaja` (
  `kode_product_remaja` varchar(255) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `kode_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_remaja`
--

INSERT INTO `product_remaja` (`kode_product_remaja`, `nama_product`, `harga`, `kode_jenis`) VALUES
('A', 'Acnhes', 0, 'FC'),
('ABCR', 'Abak Bidak Roda', 500000, 'BW'),
('EBR', 'Emina Bedak', 20000, 'FW'),
('ER', 'Emina Remaja', 0, 'FW'),
('NNR', 'Niknak Remaja', 0, 'FW'),
('WR', 'Wardah Remaja', 0, 'SCB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_delete`
--

CREATE TABLE `riwayat_delete` (
  `id` int(11) NOT NULL,
  `kode_product` varchar(255) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `kode_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_delete`
--

INSERT INTO `riwayat_delete` (`id`, `kode_product`, `nama_product`, `kode_jenis`) VALUES
(5, 'asd', 'asd', 'FC'),
(14, 'asd', 'asd', 'FC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_delete_remaja`
--

CREATE TABLE `riwayat_delete_remaja` (
  `id` int(11) NOT NULL,
  `kode_product_remaja` varchar(255) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `kode_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_delete_remaja`
--

INSERT INTO `riwayat_delete_remaja` (`id`, `kode_product_remaja`, `nama_product`, `kode_jenis`) VALUES
(2, 'asd', 'asd', 'FC'),
(3, 'asd', 'asd', 'FC'),
(4, 'asd', 'asd', 'BW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nilai` float NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `kode_kriteria`, `nilai`, `bobot`, `keterangan`) VALUES
(23, 'H', 50, 'Cukup', 'Kulit Halus'),
(24, 'H', 100, 'Sangat Bagus', 'Kulit Harus Sekali'),
(25, 'HRG', 25, 'Kurang', 'Rp. 10.000 - Rp. 50.000'),
(26, 'HRG', 50, 'Cukup', 'Rp. 51.000 - Rp. 100.000'),
(27, 'HRG', 75, 'Bagus', 'Rp. 101.000 - Rp. 150.000'),
(28, 'HRG', 100, 'Sangat Bagus', '> Rp. 151.000'),
(29, 'KT', 75, 'Bagus', 'Tidak Terlalu'),
(30, 'KT', 25, 'Kurang', 'Sangat Tertarik'),
(31, 'KKS', 50, 'Cukup', '3x Pemakaian langsung bersih'),
(32, 'KWJ', 100, 'Sangat Bagus', '1x Pakai'),
(33, 'KWJ', 75, 'Bagus', '2x Pakai'),
(37, 'MW', 100, 'Sangat Bagus', '1x Pakai'),
(38, 'MW', 50, 'Cukup', '3x Pakai'),
(39, 'WB', 100, 'Sangat Bagus', 'putih'),
(40, 'WB', 75, 'Bagus', 'coklat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria_remaja`
--

CREATE TABLE `subkriteria_remaja` (
  `id` int(11) NOT NULL,
  `kode_kriteria_remaja` varchar(255) NOT NULL,
  `nilai` float NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria_remaja`
--

INSERT INTO `subkriteria_remaja` (`id`, `kode_kriteria_remaja`, `nilai`, `bobot`, `keterangan`) VALUES
(1, 'HR', 75, 'Bagus', '150 - 200'),
(2, 'HR', 25, 'Kurang', '10 - 50'),
(4, 'K', 75, 'Bagus', 'Putih'),
(5, 'K', 50, 'Cukup', 'Hitam'),
(6, 'WBR', 100, 'Sangat Bagus', 'Putih'),
(7, 'WBR', 75, 'Bagus', 'Coklat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `kode_keterangan` (`kode_kriteria`),
  ADD KEY `kode_product` (`kode_product`),
  ADD KEY `kode_product_2` (`kode_product`);

--
-- Indeks untuk tabel `bobot_remaja`
--
ALTER TABLE `bobot_remaja`
  ADD PRIMARY KEY (`id_bobot_remaja`),
  ADD KEY `kode_product_remaja` (`kode_product_remaja`),
  ADD KEY `kode_kriteria_remaja` (`kode_kriteria_remaja`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_product` (`kode_product`);

--
-- Indeks untuk tabel `data_remaja`
--
ALTER TABLE `data_remaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_product_remaja` (`kode_product_remaja`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indeks untuk tabel `kriteria_remaja`
--
ALTER TABLE `kriteria_remaja`
  ADD PRIMARY KEY (`kode_kriteria_remaja`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kode_product`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- Indeks untuk tabel `product_remaja`
--
ALTER TABLE `product_remaja`
  ADD PRIMARY KEY (`kode_product_remaja`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- Indeks untuk tabel `riwayat_delete`
--
ALTER TABLE `riwayat_delete`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_delete_remaja`
--
ALTER TABLE `riwayat_delete_remaja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indeks untuk tabel `subkriteria_remaja`
--
ALTER TABLE `subkriteria_remaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kriteria_remaja` (`kode_kriteria_remaja`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT untuk tabel `bobot_remaja`
--
ALTER TABLE `bobot_remaja`
  MODIFY `id_bobot_remaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `data_remaja`
--
ALTER TABLE `data_remaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `riwayat_delete`
--
ALTER TABLE `riwayat_delete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `riwayat_delete_remaja`
--
ALTER TABLE `riwayat_delete_remaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `subkriteria_remaja`
--
ALTER TABLE `subkriteria_remaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD CONSTRAINT `bobot_ibfk_2` FOREIGN KEY (`kode_kriteria`) REFERENCES `kriteria` (`kode_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bobot_ibfk_3` FOREIGN KEY (`kode_product`) REFERENCES `product` (`kode_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `bobot_remaja`
--
ALTER TABLE `bobot_remaja`
  ADD CONSTRAINT `bobot_remaja_ibfk_1` FOREIGN KEY (`kode_kriteria_remaja`) REFERENCES `kriteria_remaja` (`kode_kriteria_remaja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bobot_remaja_ibfk_2` FOREIGN KEY (`kode_product_remaja`) REFERENCES `product_remaja` (`kode_product_remaja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`kode_product`) REFERENCES `product` (`kode_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_remaja`
--
ALTER TABLE `data_remaja`
  ADD CONSTRAINT `data_remaja_ibfk_1` FOREIGN KEY (`kode_product_remaja`) REFERENCES `product_remaja` (`kode_product_remaja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_remaja`
--
ALTER TABLE `product_remaja`
  ADD CONSTRAINT `product_remaja_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis` (`kode_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`kode_kriteria`) REFERENCES `kriteria` (`kode_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkriteria_remaja`
--
ALTER TABLE `subkriteria_remaja`
  ADD CONSTRAINT `subkriteria_remaja_ibfk_1` FOREIGN KEY (`kode_kriteria_remaja`) REFERENCES `kriteria_remaja` (`kode_kriteria_remaja`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
