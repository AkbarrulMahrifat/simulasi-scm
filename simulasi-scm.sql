-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 09:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasi-scm`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_sapi` int(11) DEFAULT NULL,
  `id_makanan` int(11) DEFAULT NULL,
  `bulan_laktasi` int(11) DEFAULT NULL,
  `jumlah_makanan` int(11) DEFAULT NULL,
  `hasil` varchar(225) DEFAULT NULL,
  `susu_jadi` int(11) DEFAULT NULL,
  `toko1` int(11) DEFAULT NULL,
  `toko2` int(11) DEFAULT NULL,
  `toko3` int(11) DEFAULT NULL,
  `pendapatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_sapi`, `id_makanan`, `bulan_laktasi`, `jumlah_makanan`, `hasil`, `susu_jadi`, `toko1`, `toko2`, `toko3`, `pendapatan`) VALUES
(1, 2, 2, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 3, 2, 5, 6, '347', 174, 58, 58, 58, 2262000),
(25, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 3, 2, 2, 22, '367', 184, 61, 61, 61, 2392000),
(28, 1, 1, 3, 23, '475', 238, 79, 79, 79, 3094000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_makanan`
--

CREATE TABLE `jenis_makanan` (
  `id_makanan` int(11) NOT NULL,
  `jenis_makanan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_makanan`
--

INSERT INTO `jenis_makanan` (`id_makanan`, `jenis_makanan`) VALUES
(1, 'Rumput Hijau'),
(2, 'Rumput Gajah'),
(3, 'Gabah Padi');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sapi`
--

CREATE TABLE `jenis_sapi` (
  `id_sapi` int(11) NOT NULL,
  `jenis_sapi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sapi`
--

INSERT INTO `jenis_sapi` (`id_sapi`, `jenis_sapi`) VALUES
(1, 'Friesien Holstein (FH)'),
(2, 'Jersey'),
(3, 'Guenersey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_sapi` (`id_sapi`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `jenis_makanan`
--
ALTER TABLE `jenis_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `jenis_sapi`
--
ALTER TABLE `jenis_sapi`
  ADD PRIMARY KEY (`id_sapi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jenis_makanan`
--
ALTER TABLE `jenis_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_sapi`
--
ALTER TABLE `jenis_sapi`
  MODIFY `id_sapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `jenis_makanan` (`id_makanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_sapi`) REFERENCES `jenis_sapi` (`id_sapi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
