-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2026 at 01:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbumkmsejahtera`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `stok`, `gambar`) VALUES
(82, 'Es Teh', 7000, 24, '1776128353_1774504281_es_teh'),
(85, 'Pizza', 50000, 15, '1776132500_1774504450_pizza'),
(89, 'Tes', 40000, 45, '1779716622_1774504391_jilbab');

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuk`
--

CREATE TABLE `produk_masuk` (
  `id_masuk` int NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_staf` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_masuk`
--

INSERT INTO `produk_masuk` (`id_masuk`, `tanggal`, `id_staf`) VALUES
(13, '2026-04-14 09:21:25', 4),
(14, '2026-04-14 09:22:46', 4),
(15, '2026-04-14 09:24:04', 4),
(16, '2026-04-14 09:26:04', 4),
(17, '2026-05-25 20:45:23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuk_detail`
--

CREATE TABLE `produk_masuk_detail` (
  `id_detail` int NOT NULL,
  `id_masuk` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_masuk_detail`
--

INSERT INTO `produk_masuk_detail` (`id_detail`, `id_masuk`, `id_produk`, `jumlah`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 3),
(3, 2, 5, 4),
(4, 3, 6, 3),
(5, 3, 7, 1),
(6, 3, 8, 5),
(7, 4, 78, 2),
(8, 5, 2, 1),
(9, 5, 78, 2),
(10, 6, 6, 1),
(11, 8, 6, 1),
(12, 10, 2, 1),
(13, 12, 82, 12),
(14, 17, 89, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'jijahhh', 'Admin'),
(4, 'staf', '482ad9d7f7183511bd37f6b92dab9a1b', 'sakuya', 'Staf'),
(7, 'jenoww', '37693cfc748049e45d87b8c7d8b9aacd', 'jenoo', 'Admin'),
(11, 'nana', '518d5f3401534f5c6c21977f12f60989', 'nana', 'Staf'),
(15, 'lilu', 'cd442b615c1e61faecfd1e9a49aaca56', 'lilu', 'Staf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `produk_masuk_detail`
--
ALTER TABLE `produk_masuk_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id_masuk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk_masuk_detail`
--
ALTER TABLE `produk_masuk_detail`
  MODIFY `id_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
