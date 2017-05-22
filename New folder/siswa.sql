-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 11:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`nomor` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nisn` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `usia` varchar(8) NOT NULL,
  `telepon` int(10) NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(2) NOT NULL,
  `kewarganegaraan` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=910 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nomor`, `nama`, `nisn`, `jenis_kelamin`, `tempat`, `usia`, `telepon`, `sekolah`, `alamat`, `agama`, `kewarganegaraan`) VALUES
(1, 'laily', 91912719, 'P', 'jakarta', '16 tahun', 2147483647, 'jambi', 'jln kramat pulo dalam 2 rt 007', 'Is', 'indonesia'),
(2, 'Dessy', 2147483647, 'P', 'papua', '19 tahun', 2147483647, 'maluku', 'jl. condong catur nologaten no.3', 'Is', 'indonesia'),
(3, 'Anugerah Anjas', 2147483647, 'L', 'kalimantan', '20 tahun', 2147483647, 'smk satya bhakti', 'jln. matraman 1 no 32 jakarta timur', 'Is', 'indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=910;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
