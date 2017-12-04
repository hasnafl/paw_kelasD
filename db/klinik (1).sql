-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 11:18 AM
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
(1, 'Paracetamol', 'tablet', 20),
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
('klinik1', '12345', 'klinik1'),
('klinik2', '54321', 'klinik2'),
('admin', '123', 'admin');

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
('A1', 'Hasna', '19 th', '2017-05-12', 'P', 'Bandung', 'Pusing', '50 kg', '100/90', '-', 'A01', 'umum'),
('A2', 'Indah', '20 th', '2017-05-14', 'P', 'Bandung', '-', '50 kg', '100/90', '-', 'A00', 'umum'),
('A3', 'Ikma', '20 th', '2017-05-14', 'P', 'Bandung', '-', '50 kg', '100/90', '-', 'A01', 'umum'),
('A4', 'Malati', '19 th', '2017-05-14', 'P', 'Bandung', '-', '50 kg', '100/90', '-', 'A00', 'umum'),
('A5', 'Devi', '20 th', '2017-05-14', 'P', 'Bekasi', 'Mual', '50 kg', '100/90', '-', 'A02', 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran2`
--

CREATE TABLE `pendaftaran2` (
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

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` int(11) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `nip`, `hak_akses`) VALUES
('001', 'Rinca Agustiani Amd,Keb.', 16798, 'admin'),
('002', 'Dr. Asep Dudung', 36798, 'Poli Gigi'),
('004', 'Diana Rahmawati SF.', 46798, 'Farmasi'),
('003', 'Dr. Asep Dudung', 36798, 'Poli Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(255) NOT NULL,
  `nama_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`) VALUES
('A03', 'Disentri'),
('A09', 'Diare'),
('G44', 'Sakit kepala'),
('i10', 'hipertensi'),
('J00', 'Influenza'),
('J02', 'Paringitis/sakit tenggorokan'),
('J03', 'Amandel'),
('J06', 'Ispa'),
('K04', 'Sakit Gigi'),
('K29.9', 'Gastritis'),
('L98', 'Gatal-gatal'),
('M790', 'Rematisme'),
('M79i', 'Mialgia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang_obat`
--
ALTER TABLE `gudang_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudang_obat`
--
ALTER TABLE `gudang_obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
