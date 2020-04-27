-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040052`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `porsi` int(2) NOT NULL,
  `bahan` text NOT NULL,
  `caramasak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `nama`, `foto`, `porsi`, `bahan`, `caramasak`) VALUES
(1, 'Batagor', '1.jpg', 0, '', ''),
(2, 'Mie Pangsit', '2.jpg', 0, '', ''),
(3, 'Martabak Telur', '3.jpg', 0, '', ''),
(4, 'Risoles', '4.jpg', 0, '', ''),
(5, 'Bebek Goreng', '5.jpg', 0, '', ''),
(6, 'Nasi Goreng Telur Ceplok', '6.jpg', 0, '', ''),
(7, 'Gado Gado', '7.jpg', 0, '', ''),
(8, 'Nasi Lemak Sayur Segar', '8.jpg', 0, '', ''),
(9, 'Bakso Bihun', '9.jpg', 0, '', ''),
(10, 'Sop Buntut dan Shumay', '10.jpg', 0, '', ''),
(11, 'Pepes Ikan', '11.jpg', 0, '', ''),
(12, 'Ayam Bakar Madu', '12.jpg', 0, '', ''),
(13, 'Nasi Goreng Seafood', '13.jpg', 0, '', ''),
(14, 'Sate Kambing', '14.jpg', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `terbuat` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama_makanan`, `terbuat`, `tempat`, `harga`) VALUES
(1, '1.png', 'Tahu Crispy', 'Tahu', 'Bandung', 5000),
(2, '2.jpg', 'Daging Panggang', 'Daging Salmon', 'Jakarta', 15000),
(3, '3.jpg', 'Nasi Goreng Spesial', 'Nasi-Lauk pauk', 'Bandung', 12000),
(4, '4.jpg', 'Salad', 'Sayur-sayuran', 'NgopiDulu', 11000),
(5, '5.jpg', 'Pasta', 'Terigu', 'NgopiDulu', 22000),
(6, '6.png', 'Udang Crispy', 'Udang + Terigu', 'NgopiDulu', 10000),
(7, '7.jpg', 'Sayur Udang', 'Udang dan Sayur-sayuran', 'Jl. Pajajaran', 13000),
(8, '8.jpeg', 'Steak', 'Daging Sapi', 'McD', 14500),
(9, '9.jpg', 'Ice Campur', 'Buah-buahan', 'Bandung', 8000),
(10, '10.jpg', 'Lontong', 'Beras', 'Setia Budhi', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'didapatria', '$2y$10$0RdTNPWpSnzRQ0EfsZZFReC90FFGEk4AlackBpqiH4Wdg9mZLQSgm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
