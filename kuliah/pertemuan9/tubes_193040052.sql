-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:24 PM
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
(10, '10.jpg', 'Lontong', 'Beras', 'Setia Budhi', 10000),
(11, '1.png', 'Tahu Crispy', 'Tahu', 'Bandung', 5000),
(12, '2.jpg', 'Daging Panggang', 'Daging Salmon', 'Jakarta', 15000),
(13, '3.jpg', 'Nasi Goreng Spesial', 'Nasi-Lauk pauk', 'Bandung', 12000),
(14, '4.jpg', 'Salad', 'Sayur-sayuran', 'NgopiDulu', 11000),
(15, '5.jpg', 'Pasta', 'Terigu', 'NgopiDulu', 22000),
(16, '6.png', 'Udang Crispy', 'Udang + Terigu', 'NgopiDulu', 10000),
(17, '7.jpg', 'Sayur Udang', 'Udang dan Sayur-sayuran', 'Jl. Pajajaran', 13000),
(18, '8.jpeg', 'Steak', 'Daging Sapi', 'McD', 14500),
(19, '9.jpg', 'Ice Campur', 'Buah-buahan', 'Bandung', 8000),
(20, '10.jpg', 'Lontong', 'Beras', 'Setia Budhi', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
