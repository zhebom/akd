-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 08:40 AM
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
(1, '1', 'Widhiawan Agung Kusumo, S.Kom.', 'widhi@upstegal.ac.id', '29452231993', '$2y$10$ip3uPq3HkeMYXFwmgS547.aBIaXzlYG.ePhBwR9cSr6k5wqo1kVFG', '2023-01-05 07:27:46', '2023-01-05 01:26:31', '0000-00-00 00:00:00'),
(2, '2', 'Dr. Dien Noviany Rahmatika,, MM., Ak., CA', 'dien@upstegal.ac.id', '', '$2y$10$dKSFuRu0UEL4wC0p3BkGSu1U2dO4WYD/Hx1FZJlK03AhgITRYCTzS', '2023-01-05 18:09:53', '2023-01-06 01:09:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gs_dosen`
--

CREATE TABLE `gs_dosen` (
  `id` bigint(20) NOT NULL,
  `id_dosen` bigint(20) NOT NULL,
  `gs_dosen` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kode_luaran`
--

CREATE TABLE `kode_luaran` (
  `id` int(255) NOT NULL,
  `nama_luaran` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_luaran`
--

INSERT INTO `kode_luaran` (`id`, `nama_luaran`, `created_at`, `updated_at`) VALUES
(4, 'Jurnal Nasional', '2023-01-06 00:57:25', '2023-01-06 00:57:25'),
(5, 'Jurnal Nasional Terakreditasi', '2023-01-06 00:57:33', '2023-01-06 00:57:33'),
(6, 'Jurnal Internasional', '2023-01-06 00:57:39', '2023-01-06 00:57:39'),
(7, 'Jurnal Internasional Terakreditasi', '2023-01-06 00:57:47', '2023-01-06 00:57:47'),
(8, 'Seminar Nasional', '2023-01-06 00:57:54', '2023-01-06 00:57:54'),
(9, 'Seminar Internasional', '2023-01-06 00:58:00', '2023-01-06 00:58:00'),
(10, 'Tulisan Media Massa Cetak', '2023-01-06 00:58:30', '2023-01-06 00:58:30'),
(11, 'Tulisan Media Massa Daring/Online', '2023-01-06 00:58:42', '2023-01-06 00:58:42'),
(12, 'Buku', '2023-01-06 00:58:54', '2023-01-06 00:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_dosen`
--

CREATE TABLE `laporan_dosen` (
  `id` bigint(20) NOT NULL,
  `id_dosen` int(255) NOT NULL,
  `kd_tridharma` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `dana` int(255) NOT NULL,
  `skala` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `luaran_dosen`
--

CREATE TABLE `luaran_dosen` (
  `id` bigint(20) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `kd_tridharma` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `dana` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `skala` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekognisi_dosen`
--

CREATE TABLE `rekognisi_dosen` (
  `id` bigint(255) NOT NULL,
  `id_dosen` bigint(255) NOT NULL,
  `kd_tridharma` varchar(255) NOT NULL,
  `rekognisi` varchar(255) NOT NULL,
  `oleh` varchar(255) NOT NULL,
  `skala` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_febups`
--
ALTER TABLE `dosen_febups`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `gs_dosen`
--
ALTER TABLE `gs_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_luaran`
--
ALTER TABLE `kode_luaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_dosen`
--
ALTER TABLE `laporan_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luaran_dosen`
--
ALTER TABLE `luaran_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekognisi_dosen`
--
ALTER TABLE `rekognisi_dosen`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_dosen` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gs_dosen`
--
ALTER TABLE `gs_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_luaran`
--
ALTER TABLE `kode_luaran`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan_dosen`
--
ALTER TABLE `laporan_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luaran_dosen`
--
ALTER TABLE `luaran_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekognisi_dosen`
--
ALTER TABLE `rekognisi_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwjafa_dosen`
--
ALTER TABLE `riwjafa_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwprofesi_dosen`
--
ALTER TABLE `riwprofesi_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
