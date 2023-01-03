-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 09:33 AM
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
(2, '1', 'Widhiawan Agung Kusumo, S.Kom.', 'widhi@upstegal.ac.id', '29452231993', '$2y$10$IsoNH1yV6sYDwkVPk3.mjuskikyPGRIuN74F1Bv5MCC3wtLbnvjiK', '2023-01-02 04:49:17', '2022-12-14 05:37:13', '0000-00-00 00:00:00'),
(12, '2', 'Fahmi Firmansyah, SE., M. Ak.', 'fahmi@upstegal.ac.id', '244541563545', '$2y$10$l/8OWZGFQgQhPjpLzkFAcOMDnZTcC7KMRxycLYJT1PtiT7vVJQJnC', '2023-01-02 15:32:48', '2023-01-02 22:32:48', '0000-00-00 00:00:00'),
(13, '2', 'Catur Wahyudi, S.E.I., M.Si.', 'catur@upstegal.ac.id', '2524658118548', '$2y$10$uB4gI7v8RUUF.uMt7Lq0XO1hKmoRouVhdb4YFUzOGD/jq0qhSWjXa', '2023-01-02 15:35:11', '2023-01-02 22:35:11', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `gs_dosen`
--

INSERT INTO `gs_dosen` (`id`, `id_dosen`, `gs_dosen`, `created_at`, `updated_at`) VALUES
(2, 2, '7izd9wUAAAAJ', '2022-12-27 01:01:15', '2022-12-27 01:01:15');

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

--
-- Dumping data for table `laporan_dosen`
--

INSERT INTO `laporan_dosen` (`id`, `id_dosen`, `kd_tridharma`, `judul`, `sumber`, `dana`, `skala`, `tahun`, `file`, `created_at`, `updated_at`) VALUES
(9, 2, 'penelitian', 'Akun Wifi ku', 'ASEAN', 2500000, 'nasional', 2020, 'asistensi.pdf', '2022-12-22 00:32:01', '2022-12-22 00:32:01'),
(10, 2, 'pengabdian', 'Laporan Penelitian Dengan UMKM batik di kota tegal', 'ASEAN', 125000000, 'internasional', 2022, 'asistensi_1.pdf', '2022-12-22 00:38:11', '2022-12-22 00:38:11'),
(12, 2, 'penelitian', 'Laporan Penelitian Dengan UMKM batik di kota tegal', 'asdf', 2000000, 'Jurnal Nasional Terakreditasi', 2018, 'asistensi_3.pdf', '2022-12-22 01:26:13', '2022-12-22 01:26:13');

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

--
-- Dumping data for table `luaran_dosen`
--

INSERT INTO `luaran_dosen` (`id`, `id_dosen`, `kd_tridharma`, `judul`, `link`, `sumber`, `dana`, `tahun`, `skala`, `file`, `created_at`, `updated_at`) VALUES
(4, 2, 'pengabdian', 'Waktu berlalu begitu cepat 2', 'https://www.youtube.com/watch?v=MNPtqHVGSJQjkhkjhkj', 'ASEAN', 125000000, 2022, 'jurnal internasional bereputasi', 'asistensi_2.pdf', '2022-12-21 23:39:20', '2022-12-21 23:39:20'),
(13, 2, 'pengabdian', 'Laporan Penelitian Dengan UMKM batik di kota tegal', 'https://www.youtube.com/watch?v=MNPtqHVGSJQ', 'ASEAN', 2000000, 2010, 'Seminar Internasional', 'asistensi_4.pdf', '2022-12-23 22:59:50', '2022-12-23 22:59:50'),
(14, 2, 'penelitian', 'Laporan Penelitian Dengan UMKM batik di kota tegal', 'https://www.youtube.com/watch?v=MNPtqHVGSJQ', 'asdf', 2000000, 2002, 'Seminar Internasional', 'asistensi_5.pdf', '2022-12-23 23:01:06', '2022-12-23 23:01:06'),
(15, 2, 'penelitian', 'Waktu berlalu begitu cepat', '-', 'Fakultas', 2000000, 2018, 'Jurnal Nasional Terakreditasi', 'asistensi_6.pdf', '2022-12-23 23:04:24', '2022-12-23 23:04:24'),
(16, 2, 'penelitian', 'Laporan Penelitian Dengan UMKM batik di kota tegal', 'https://www.youtube.com/watch?v=MNPtqHVGSJQjkhkjhkj', 'ASEAN', 2000000, 2010, 'Seminar Internasional', 'asistensi_7.pdf', '2022-12-23 23:04:39', '2022-12-23 23:04:39');

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

--
-- Dumping data for table `rekognisi_dosen`
--

INSERT INTO `rekognisi_dosen` (`id`, `id_dosen`, `kd_tridharma`, `rekognisi`, `oleh`, `skala`, `file`, `tahun`, `created_at`, `updated_at`) VALUES
(4, 2, 'pendidikan', 'Narasumber saja yang penting happy', 'UPS', 'internasional', 'Kesanggupan - yuni_1.pdf', 2020, '2022-12-19 22:17:46', '2022-12-19 22:17:46'),
(12, 2, 'penelitian', 'Narasumber sa', 'Universitas Islam Sultan Agung Semarang', 'nasional', 'asistensi_3.pdf', 2022, '2022-12-22 00:29:57', '2022-12-22 00:29:57'),
(13, 2, 'pengabdian', 'Narasumber saja yang penting bahagia senang dunia akherat', 'UPS', 'nasional', 'asistensi_4.pdf', 2012, '2022-12-22 00:30:28', '2022-12-22 00:30:28'),
(14, 2, 'pengabdian', 'Narasumber saja yang penting happy', 'UPS', 'internasional', 'asistensi_5.pdf', 2020, '2022-12-22 01:38:40', '2022-12-22 01:38:40'),
(15, 2, 'pendidikan', 'Mitra Bestari', 'Universitas Islam Sultan Agung Semarang', 'nasional', 'asistensi_6.pdf', 2023, '2022-12-29 22:24:13', '2022-12-29 22:24:13');

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

--
-- Dumping data for table `riwjafa_dosen`
--

INSERT INTO `riwjafa_dosen` (`id`, `id_dosen`, `jafa_dosen`, `tahun`, `file`, `created_at`, `updated_at`) VALUES
(5, 2, 'GB', 2020, 'SURAT PERNYATAAN LAMARAN(1)_9.pdf', '2022-12-18 06:31:13', '2022-12-18 06:31:13'),
(6, 2, 'LK', 2008, 'SURAT PERNYATAAN LAMARAN(1)_10.pdf', '2022-12-19 06:07:56', '2022-12-19 06:07:56'),
(8, 2, 'AA', 2002, 'asistensi_2.pdf', '2022-12-29 22:19:25', '2022-12-29 22:19:25'),
(9, 2, 'L', 2004, 'asistensi_5.pdf', '2022-12-29 22:19:36', '2022-12-29 22:19:36');

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
(13, 2, 'Universitas Dian Nuswantoro', 'Magister Informasi Pendidikan', 'S2', '2012', 'SURAT PERNYATAAN LAMARAN(1)_5.pdf', '2022-12-17 17:32:47', '2022-12-18 00:32:47', '0000-00-00 00:00:00'),
(14, 2, 'Universitas Semarang', 'Teknologi Informasi', 'S3', '2020', 'asistensi.pdf', '2022-12-21 16:53:02', '2022-12-21 23:53:02', '0000-00-00 00:00:00'),
(15, 2, 'Universitas Padjajaran', 'Teknologi Informasi', 'S1', '2008', 'asistensi_1.pdf', '2022-12-29 15:18:33', '2022-12-29 22:18:33', '0000-00-00 00:00:00'),
(16, 11, 'Universitas Semarang', 'Teknologi Informasi', 'S1', '2012', 'asistensi_7.pdf', '2023-01-02 15:31:10', '2023-01-02 22:31:10', '0000-00-00 00:00:00');

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
-- Dumping data for table `riwprofesi_dosen`
--

INSERT INTO `riwprofesi_dosen` (`id`, `id_dosen`, `penyelenggara`, `kompetensi`, `berlaku`, `skala`, `file`, `created_at`, `updated_at`) VALUES
(1, 2, 'BNSP', 'Digital Marketing', '2023-12-22', 'nasional', 'SURAT PERNYATAAN LAMARAN(1)_15.pdf', '2022-12-19 07:17:35', '2022-12-19 07:17:35'),
(4, 2, 'BNSP', 'Marketing', '2029-02-20', 'internasional', 'asistensi_4.pdf', '2022-12-19 21:07:28', '2022-12-19 21:07:28'),
(5, 2, 'Accountant Internasional', 'Certified Accountant Internasional', '2028-12-22', 'internasional', 'asistensi_6.pdf', '2022-12-29 22:21:55', '2022-12-29 22:21:55');

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
  MODIFY `id_dosen` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gs_dosen`
--
ALTER TABLE `gs_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_dosen`
--
ALTER TABLE `laporan_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `luaran_dosen`
--
ALTER TABLE `luaran_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rekognisi_dosen`
--
ALTER TABLE `rekognisi_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `riwjafa_dosen`
--
ALTER TABLE `riwjafa_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwpendidikan_dosen`
--
ALTER TABLE `riwpendidikan_dosen`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `riwprofesi_dosen`
--
ALTER TABLE `riwprofesi_dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
