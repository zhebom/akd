-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 12:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen_febups`
--

INSERT INTO `dosen_febups` (`id_dosen`, `role_dosen`, `nama_dosen`, `email_dosen`, `nidn_dosen`, `pass_dosen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '2', 'Widhiawan Agung Kusumo', 'widhi@upstegal.ac.id', '123456789', '$2y$10$sDBtdvaZNxSEBkYTmiSMHuOegV7gwwb8u4KgI/6DWJyrkctafPqtG', '2022-12-16 08:29:33', '2022-12-14 05:37:13', '0000-00-00 00:00:00'),
(8, '2', 'Agus Prasetyono', 'admin@upstegal.ac.id', '1234567890', '$2y$10$QeGWIMVTYZwZGnSY/r2bduAWfB7tAUE1cGfY4w5B36n3wbsupYp1y', '2022-12-14 18:05:39', '2022-12-15 01:05:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `riwjafa_dosen`
--

CREATE TABLE `riwjafa_dosen` (
  `id` bigint(255) NOT NULL,
  `id_dosen` int(255) NOT NULL,
  `jafa_dosen` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwjafa_dosen`
--

INSERT INTO `riwjafa_dosen` (`id`, `id_dosen`, `jafa_dosen`, `tahun`, `file`, `created_at`, `updated_at`) VALUES
(5, 2, 'GB', 2020, 'SURAT PERNYATAAN LAMARAN(1)_9.pdf', '2022-12-18 06:31:13', '2022-12-18 06:31:13'),
(6, 2, 'LK', 2008, 'SURAT PERNYATAAN LAMARAN(1)_10.pdf', '2022-12-19 06:07:56', '2022-12-19 06:07:56'),
(7, 2, '', 0, 'SURAT PERNYATAAN LAMARAN(1)_12.pdf', '2022-12-19 07:14:50', '2022-12-19 07:14:50');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwpendidikan_dosen`
--

INSERT INTO `riwpendidikan_dosen` (`id`, `id_dosen`, `universitas`, `jurusan`, `tingkat`, `tahun`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 2, 'Universitas Pancasakti Tegal', 'Teknik Informatika', 'S1', '2014', 'SURAT PERNYATAAN LAMARAN(1)_2.pdf', '2022-12-17 02:06:55', '2022-12-17 09:06:55', '0000-00-00 00:00:00'),
(12, 2, 'Universitas Dian Nuswantoro', 'Universitas Dian Nuswantoro', 'S3', '2020', 'SURAT PERNYATAAN LAMARAN(1)_4.pdf', '2022-12-17 13:05:33', '2022-12-17 20:05:33', '0000-00-00 00:00:00'),
(13, 2, 'Universitas Dian Nuswantoro', 'Magister Informasi Pendidikan', 'S2', '2012', 'SURAT PERNYATAAN LAMARAN(1)_5.pdf', '2022-12-17 17:32:47', '2022-12-18 00:32:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `riwprofesi_dosen`
--

CREATE TABLE `riwprofesi_dosen` (
  `id` bigint(20) NOT NULL,
  `id_dosen` bigint(20) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `berlaku` date NOT NULL,
  `skala` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwprofesi_dosen`
--

INSERT INTO `riwprofesi_dosen` (`id`, `id_dosen`, `penyelenggara`, `kompetensi`, `berlaku`, `skala`, `file`, `created_at`, `updated_at`) VALUES
(1, 2, 'BNSP', 'Digital Marketing', '2023-12-22', 'nasional', 'SURAT PERNYATAAN LAMARAN(1)_15.pdf', '2022-12-19 07:17:35', '2022-12-19 07:17:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `riwjafa_dosen`
--
ALTER TABLE `riwjafa_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwprofesi_dosen`
--
ALTER TABLE `riwprofesi_dosen`
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
-- AUTO_INCREMENT for table `riwjafa_dosen`
--
ALTER TABLE `riwjafa_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `riwprofesi_dosen`
--
ALTER TABLE `riwprofesi_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
