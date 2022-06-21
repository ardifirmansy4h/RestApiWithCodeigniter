-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 09:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumahsakit`
--

CREATE TABLE `tb_rumahsakit` (
  `id` int(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `nama_pendiri` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tahun_berdiri` varchar(255) NOT NULL,
  `izin` varchar(255) NOT NULL,
  `no_hp` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rumahsakit`
--

INSERT INTO `tb_rumahsakit` (`id`, `nama_rs`, `nama_pendiri`, `alamat`, `tahun_berdiri`, `izin`, `no_hp`) VALUES
(12, 'RS Bunda ', 'Doe', 'Jati', '2002', 'Kementerian Kesehatan 1991', 1823123),
(14, 'RS Lord Ardi Guys', 'Ardi Firmansyah', 'Batu bara', '2001', 'Kemenkes 2001', 852812931),
(15, 'RS Zaa', 'Erliza', 'Marelan', '2030', 'Kementerian Kesehatan 2031 ', 8230432),
(16, 'SD12', 'SADSADSA', 'SDASDA', 'SDSAD', 'AASD', 212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
