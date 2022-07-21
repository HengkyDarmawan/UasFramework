-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 04:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pencipta` varchar(255) NOT NULL,
  `tglterbit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `nama`, `pencipta`, `tglterbit`) VALUES
(1, 'JavaScript', 'Alexia', '09 Febuari 2018'),
(2, 'PHP & MYSQL', 'hengky', '7 Januari 2000'),
(4, 'HTML', 'Niko', '01 september 2022'),
(7, 'Jquery', 'Andi', '22 maret 2003');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_chart`
--

CREATE TABLE `data_buku_chart` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenbuku` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku_chart`
--

INSERT INTO `data_buku_chart` (`id`, `nama`, `jenbuku`) VALUES
(1, 'HTML', 'TI'),
(2, 'CSS', 'TI'),
(3, 'PHP', 'TI'),
(4, 'MYSQL', 'TI'),
(5, 'Neraca laba rugi', 'AK'),
(6, 'Buku Besar', 'AK'),
(7, 'Arus Kas', 'AK'),
(8, 'Cara Ekspor', 'BS'),
(9, 'Cara negosiasi dengan supplier', 'BS'),
(10, 'Cara pilih kontainer', 'BS'),
(11, 'Cara Efektif Berkomunikasi', 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku_chart`
--
ALTER TABLE `data_buku_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_buku_chart`
--
ALTER TABLE `data_buku_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
