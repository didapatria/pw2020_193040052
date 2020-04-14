-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:42 PM
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
-- Database: `pw_193040052`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Adinda Fadhil Patria', '193040052', 'didapatria3@gmail.com', 'Teknik Informatika', 'g1.jpg'),
(2, 'Salsabila Nada Adzani', '193040050', 'salsa@gmail.com', 'Teknik Informatika', 'g2.jpg'),
(3, 'Aldi Ageng Tri Seftian', '193040054', 'aldiageng48@gmail.com', 'Teknik Informatika', 'g3.jpg'),
(4, 'Muhammad Angga Saputra', '193040070', 'angga@gmail.com', 'Teknik Informatika', 'g4.jpg'),
(5, 'Tresna Eka Widiana', '193040071', 'eka@gmail.com', 'Teknik Informatika', 'g5.jpg'),
(6, 'Aji Nuansa Sengarie', '193040046', 'aji@gmail.com', 'Teknik Informatika', 'g6.jpg'),
(7, 'Hannan Fakhrul Hakim', '193040073', 'hannan@gmail.com', 'Teknik Informatika', 'g7.jpg'),
(8, 'Dian Nuryana', '193040045', 'dian@gmail.com', 'Teknik Informatika', 'g8.jpg'),
(9, 'Fauzan Nursalma', '193040053', 'fauzann@gmail.com', 'Teknik Informatika', 'g9.jpg'),
(10, 'Rifky Gema Fauzi', '193040062', 'rifkigema@gmail.com', 'Teknik Informatika', 'g10.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
