-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 11:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang_obat`
--

CREATE TABLE `gudang_obat` (
  `kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang_obat`
--

INSERT INTO `gudang_obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `stok`) VALUES
(1, 'Paracetamol', 'tablet', 15),
(2, 'Antalgin', 'tablet', 20),
(3, 'Ibuprofen', 'tablet', 20),
(4, 'Asam Mefenamat', 'tablet', 20),
(5, 'ctm', 'tablet', 20),
(6, 'gg', 'tablet', 20),
(7, 'Ambroxol', 'tablet', 20),
(8, 'Antasida', 'tablet', 20),
(9, 'Amoxicilin', 'tablet', 20),
(10, 'Tetraclin', 'tablet', 20),
(11, 'Siproploxacin', 'tablet', 20),
(12, 'Cefadroxil', 'tablet', 20),
(13, 'loperamid', 'tablet', 20),
(14, 'salbutamol', 'tablet', 20),
(15, 'prednison', 'tablet', 20),
(16, 'dexametason', 'tablet', 20),
(17, 'captopril', 'tablet', 20),
(18, 'B1', 'tablet', 20),
(19, 'B Complex', 'tablet', 20),
(20, 'B6', 'tablet', 20),
(21, 'Ranitidin', 'tablet', 20),
(22, 'Metronidazol', 'tablet', 20),
(23, 'Amoxicilin Syrup', 'syrup', 24),
(24, 'Paracetamol Syrup', 'syrup', 24),
(25, 'Ibufropen Syrup', 'syrup', 24),
(26, 'OBH Syrup', 'syrup', 24),
(27, 'Zink Syrup', 'syrup', 24),
(28, 'Antasid Syrup', 'syrup', 24),
(29, 'Hufabetamin Syrup', 'syrup', 24),
(30, 'Ambroxol Syrup', 'syrup', 24);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `akses`) VALUES
('klinik1', '12345', 'klinik1');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran1`
--

CREATE TABLE `pendaftaran1` (
  `id_pasien` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `tekanan_darah` varchar(255) NOT NULL,
  `resep` text NOT NULL,
  `diagnosa` text NOT NULL,
  `poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran1`
--

INSERT INTO `pendaftaran1` (`id_pasien`, `nama`, `umur`, `tgl_masuk`, `jenis_kelamin`, `alamat`, `keluhan`, `berat_badan`, `tekanan_darah`, `resep`, `diagnosa`, `poli`) VALUES
('A1', 'Ikma', '20 th', '2017-05-30', 'P', 'Bandung', 'mules', '49 kg', '100/90', 'Paracetamol', 'Sakit kepala', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama_pengguna` varchar(255) NOT NULL,
  `nip` int(11) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama_pengguna`, `nip`, `hak_akses`) VALUES
('Fenny Martia', 16798, 'Admin'),
('Dr. Asep Dudung', 26798, 'Poli umum, Poli gigi'),
('Rinca Agustiani SF.', 36798, 'Farmasi');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(255) NOT NULL,
  `nama_penyakit` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `id`) VALUES
('A03', 'Disentri', 1),
('A09', 'Diare', 2),
('G44', 'Sakit kepala', 3),
('i10', 'hipertensi', 4),
('J00', 'Influenza', 5),
('J02', 'Paringitis/sakit tenggorokan', 6),
('J03', 'Amandel', 7),
('J06', 'Ispa', 8),
('K04', 'Sakit Gigi', 9),
('K29.9', 'Gastritis', 10),
('L98', 'Gatal-gatal', 11),
('M790', 'Rematisme', 12),
('M79i', 'Mialgia', 13);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `kode_resep` int(255) NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`kode_resep`, `nama_resep`, `jumlah`, `dosis`, `tgl`) VALUES
(1, 'Paracetamol', 1, '3x1', '2017-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang_obat`
--
ALTER TABLE `gudang_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pendaftaran1`
--
ALTER TABLE `pendaftaran1`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`kode_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudang_obat`
--
ALTER TABLE `gudang_obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`kode_resep`) REFERENCES `gudang_obat` (`kode_obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
