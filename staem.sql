-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staem`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `sdt` varchar(10) DEFAULT NULL,
  `cccd` varchar(12) DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `thanhpho` varchar(50) DEFAULT NULL,
  `quan` varchar(50) DEFAULT NULL,
  `phuong` varchar(50) DEFAULT NULL,
  `sonha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `sdt`, `cccd`, `gioitinh`, `thanhpho`, `quan`, `phuong`, `sonha`) VALUES
(1, 'admin', '', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'jane.doe', 'jane.doe@email.com', 'myp@$$word', 0, '987654321', '987654321098', 'female', 'Los Angeles', 'Hollywood', 'Beverly Hills', '5678 XYZ Avenue'),
(3, 'mark.smith', 'mark.smith@email.com', 'secret123', 0, '555666777', '555666777012', 'male', 'Chicago', 'Loop', 'River North', '7890 ABCD Street'),
(4, 'susan.johnson', 'susan.johnson@email.com', 'myp@$$', 0, '111222333', '111222333045', 'female', 'San Francisco', 'SOMA', 'Mission', '4321 XYZD Street'),
(5, 'michael.nguyen', 'michael.nguyen@email.com', 'p@$$w0rd', 0, '999888777', '999888777098', 'male', 'Houston', 'Downtown', 'Montrose', '9876 ABCD Avenue'),
(12, 'nhocletai', 'nhocletai123@gmail.com', '1', 0, '123', '123', 'nam', '123', '123', '123', '123'),
(13, 'asd', '', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
