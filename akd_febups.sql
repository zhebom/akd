-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akd_febups`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_febups`
--

CREATE TABLE `dosen_febups` (
  `id_dosen` bigint(255) NOT NULL,
  `role_dosen` varchar(100) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `email_dosen` varchar(255) NOT NULL,
  `nidn_dosen` varchar(255) NOT NULL,
  `pass_dosen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen_febups`
--

INSERT INTO `dosen_febups` (`id_dosen`, `role_dosen`, `nama_dosen`, `email_dosen`, `nidn_dosen`, `pass_dosen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '2', 'Widhiawan Agung Kusumo', 'widhi@upstegal.ac.id', '', '$2y$10$sDBtdvaZNxSEBkYTmiSMHuOegV7gwwb8u4KgI/6DWJyrkctafPqtG', '2022-12-13 22:37:13', '2022-12-14 05:37:13', '0000-00-00 00:00:00'),
(8, '2', 'Agus Prasetyono', 'admin@upstegal.ac.id', '1234567890', '$2y$10$QeGWIMVTYZwZGnSY/r2bduAWfB7tAUE1cGfY4w5B36n3wbsupYp1y', '2022-12-14 18:05:39', '2022-12-15 01:05:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  ADD PRIMARY KEY (`id_dosen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  MODIFY `id_dosen` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
