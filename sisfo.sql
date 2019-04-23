-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 07:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporanbarang`
--

CREATE TABLE `laporanbarang` (
  `no_laporan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporansdm`
--

CREATE TABLE `laporansdm` (
  `no_laporan` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id` int(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `gaji` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporanuang`
--

CREATE TABLE `laporanuang` (
  `no_laporan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `date` date NOT NULL,
  `total` int(100) NOT NULL,
  `sisa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporanbarang`
--
ALTER TABLE `laporanbarang`
  ADD PRIMARY KEY (`no_laporan`);

--
-- Indexes for table `laporansdm`
--
ALTER TABLE `laporansdm`
  ADD PRIMARY KEY (`no_laporan`);

--
-- Indexes for table `laporanuang`
--
ALTER TABLE `laporanuang`
  ADD PRIMARY KEY (`no_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporanbarang`
--
ALTER TABLE `laporanbarang`
  MODIFY `no_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporansdm`
--
ALTER TABLE `laporansdm`
  MODIFY `no_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanuang`
--
ALTER TABLE `laporanuang`
  MODIFY `no_laporan` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
