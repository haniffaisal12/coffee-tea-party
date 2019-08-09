-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 10:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoteh`
--

-- --------------------------------------------------------

--
-- Table structure for table `kopis`
--

CREATE TABLE `kopis` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_kopi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_kopi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kopis`
--

INSERT INTO `kopis` (`id`, `jenis_kopi`, `merk_kopi`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(3, 'Kopi Luwak', 'Jantan Liar', 12, '350000.00', '2019-08-08 23:57:55', '2019-08-08 23:57:55'),
(5, 'Robusta', 'Popo', 3, '75000.00', '2019-08-09 00:40:16', '2019-08-09 00:40:50'),
(6, 'Arabicayu', 'Sultonic', 650, '500000.00', '2019-08-09 00:57:27', '2019-08-09 00:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '10516194', '$2y$10$zmS/y6ZDC0WGFzOx7DiKxebrenBXHK5lm7kXmIJAV5qKYKgM9ygiK', 'gvPAW8usrZXiuj8c5Y7lXQRnqRtl7Hnxx96NXCklAz0NsGBKFmOXz7KcpZ1u', '2019-08-06 19:31:16', '2019-08-06 19:31:16'),
(4, '10516191', '10516191', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_07_020145_create_login_table', 1),
(3, '2019_08_07_023756_create_teh_table', 2),
(4, '2019_08_09_025804_create_kopis_table', 3),
(5, '2019_08_09_030648_add_stok_to_teh', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teh`
--

CREATE TABLE `teh` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_teh` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_teh` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teh`
--

INSERT INTO `teh` (`id`, `jenis_teh`, `merk_teh`, `harga`, `created_at`, `updated_at`, `stok`) VALUES
(2, 'Teh Celup', 'Sari Wangi', '10000.00', '2019-08-08 20:47:57', '2019-08-08 20:48:14', 4),
(4, 'Lemon Tea', 'Max Tea', '37900.00', '2019-08-08 23:49:29', '2019-08-08 23:49:29', 43),
(6, 'Teh Botol', 'Teh Pucuk Harum', '2500.00', '2019-08-09 00:25:25', '2019-08-09 00:26:16', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kopis`
--
ALTER TABLE `kopis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teh`
--
ALTER TABLE `teh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kopis`
--
ALTER TABLE `kopis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teh`
--
ALTER TABLE `teh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
