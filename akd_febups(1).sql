-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 11:06 AM
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
(2, '2', 'Widhiawan Agung Kusumo', 'widhi@upstegal.ac.id', '123456789', '$2y$10$sDBtdvaZNxSEBkYTmiSMHuOegV7gwwb8u4KgI/6DWJyrkctafPqtG', '2022-12-16 08:29:33', '2022-12-14 05:37:13', '0000-00-00 00:00:00'),
(8, '2', 'Agus Prasetyono', 'admin@upstegal.ac.id', '1234567890', '$2y$10$QeGWIMVTYZwZGnSY/r2bduAWfB7tAUE1cGfY4w5B36n3wbsupYp1y', '2022-12-14 18:05:39', '2022-12-15 01:05:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `riwpendidikan_dosen`
--

CREATE TABLE `riwpendidikan_dosen` (
  `id` bigint(255) NOT NULL,
  `id_dosen` bigint(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwpendidikan_dosen`
--

INSERT INTO `riwpendidikan_dosen` (`id`, `id_dosen`, `universitas`, `jurusan`, `tingkat`, `tahun`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'Universitas Pancasakti Tegal', 'Teknik Industri', '', '2014', 'asistensi.pdf', '2022-12-15 19:00:04', '2022-12-16 02:00:04', '0000-00-00 00:00:00'),
(2, 123456789, 'ups teagl', 'teknik informatika', '', '2010', '2.1.1.2.Evaluasi_Renstra_dan_Renop.pdf', '2022-12-15 19:32:15', '2022-12-16 02:32:15', '0000-00-00 00:00:00'),
(3, 123456789, 'ups teagl', 'teknik informatika', '', '2010', '2.1.1.2.Evaluasi_Renstra_dan_Renop_1.pdf', '2022-12-15 19:33:16', '2022-12-16 02:33:16', '0000-00-00 00:00:00'),
(4, 123456789, 'ups', 'teknik sipil', '', '2012', 'asistensi_1.pdf', '2022-12-15 19:34:48', '2022-12-16 02:34:48', '0000-00-00 00:00:00'),
(5, 123456789, 'Universitas Pancasakti Tegal', 'Teknik Industri', '', '2012', 'csiro.jpg', '2022-12-15 19:43:47', '2022-12-16 02:43:47', '0000-00-00 00:00:00'),
(6, 123456789, 'ups teagl', 'teknik informatika', 'S3', '2123', 'csiro_1.jpg', '2022-12-15 19:44:54', '2022-12-16 02:44:54', '0000-00-00 00:00:00'),
(7, 123456789, 'Universitas Pancasakti Tegal', 'teknik informatika', 'S2', '2004', 'asistensi_2.pdf', '2022-12-15 20:07:16', '2022-12-16 03:07:16', '0000-00-00 00:00:00'),
(8, 123456789, 'Universitas Pancasakti Tegal', 'teknik informatika', 'S3', '2014', 'Laporan LCD.pdf', '2022-12-15 20:37:41', '2022-12-16 03:37:41', '0000-00-00 00:00:00'),
(9, 123456789, 'Universitas Pancasakti Tegal', 'Teknik Industri', 'S2', '2004', 'FAKTOR YANG BERPENGARUH TERHADAP KUALITAS LAPORAN KEUANGAN.pdf', '2022-12-15 20:38:13', '2022-12-16 03:38:13', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  MODIFY `id_dosen` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
