-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 12:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(25) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jurusan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `jurusan`) VALUES
('1001', 'Kecoak Sakti Officialll', 'Teknik Komputerss'),
('5025201212', 'Davianau', 'Inpomase');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `kode` varchar(5) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `destinasi` varchar(25) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`kode`, `origin`, `destinasi`, `kapasitas`, `seats`, `jadwal`, `harga`) VALUES
('1001', 'Bratang', 'ITS', 30, 17, '2023-05-30', 20000),
('1002', 'Nginden', 'Manyar', 30, 20, '2023-05-31', 15000),
('1003', 'Pocan', 'Kertajaya', 35, 5, '2023-06-01', 20000),
('1004', 'ITS', 'Gubeng', 25, 3, '2023-06-03', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user`, `password`, `balance`) VALUES
('Davian', 'davian', 50000),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
