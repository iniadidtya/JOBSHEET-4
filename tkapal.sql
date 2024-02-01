-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 03:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud_kapal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tkapal`
--

CREATE TABLE `tkapal` (
  `id_kapal` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tkapal`
--

INSERT INTO `tkapal` (`id_kapal`, `kode`, `nama`, `asal`, `tujuan`, `tanggal`, `keterangan`) VALUES
(1, 'ins-2024-001', 'tongkol', 'jakarta', 'kamal', '2024-02-01', 'berangkat'),
(2, 'ins-2024-002', 'Wonder Of The Seas', 'kamal', 'perak', '2024-02-01', 'sandar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tkapal`
--
ALTER TABLE `tkapal`
  ADD PRIMARY KEY (`id_kapal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
