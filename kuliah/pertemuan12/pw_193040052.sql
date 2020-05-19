-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 08:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nama` varchar(30) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Adinda Fadhil Patria', '193040052', 'didapatria3@gmail.com', 'Teknik Informatika', 'g1.png'),
(2, 'Salsabila Nada Adzani', '193040050', 'salsa@gmail.com', 'Teknik Informatika', 'g2.png'),
(3, 'Aldi Ageng Tri Seftian', '193040054', 'aldiageng48@gmail.com', 'Teknik Informatika', 'g3.png'),
(4, 'Muhammad Angga Saputra', '193040070', 'angga@gmail.com', 'Teknik Informatika', 'g4.png'),
(5, 'Tresna Eka Widiana', '193040071', 'eka@gmail.com', 'Teknik Informatika', 'g5.png'),
(6, 'Aji Nuansa Sengarie', '193040046', 'aji@gmail.com', 'Teknik Informatika', 'g6.png'),
(7, 'Hannan Fakhrul Hakim', '193040073', 'hannan@gmail.com', 'Teknik Informatika', 'g7.png'),
(8, 'Dian Nuryana', '193040045', 'dian@gmail.com', 'Teknik Informatika', 'g8.png'),
(9, 'Fauzan Nursalma', '193040053', 'fauzann@gmail.com', 'Teknik Informatika', 'g9.png'),
(10, 'Rifky Gema Fauzi', '193040062', 'rifkigema@gmail.com', 'Teknik Informatika', 'g10.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$YR3x4Uoh4NPba.KzULwp3.EeYHQn0NmVxAmTq4A6x8rVOJx9JJN3a'),
(2, 'didapatria', '$2y$10$Kh.nTlTluhwuoGhhz6JeAOHx6ZrtZ0N7J44s.wZ5QnIXszxME3pWa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
