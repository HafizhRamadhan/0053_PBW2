-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 09:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php0053`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user0053`
--

CREATE TABLE `tb_user0053` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user0053`
--

INSERT INTO `tb_user0053` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `foto`) VALUES
(21, 'Hafizh Ihsan Ramadhan', 'Batang', '0891264738129', 'Laki-laki', '6714a8c1d7454.jpeg'),
(22, 'James Ward-prowse', 'Inggris', '0982516372631', 'Laki-laki', '6714a9422f131.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user0053`
--
ALTER TABLE `tb_user0053`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user0053`
--
ALTER TABLE `tb_user0053`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
