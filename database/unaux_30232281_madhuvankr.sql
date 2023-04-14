-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.unaux.com
-- Generation Time: Oct 21, 2022 at 02:54 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_30232281_madhuvankr`
--

-- --------------------------------------------------------

--
-- Table structure for table `custoname`
--

CREATE TABLE `custoname` (
  `id` int(11) NOT NULL,
  `custonm` varchar(50) NOT NULL,
  `custonum` bigint(20) NOT NULL,
  `custocity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custoname`
--



-- --------------------------------------------------------

--
-- Table structure for table `karigarname`
--

CREATE TABLE `karigarname` (
  `id` int(10) NOT NULL,
  `krname` varchar(50) NOT NULL,
  `krnumber` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karigarname`
-
-- --------------------------------------------------------

--
-- Table structure for table `krissue`
--

CREATE TABLE `krissue` (
  `id` int(11) NOT NULL,
  `krvrno` int(10) NOT NULL,
  `ovrno` int(10) NOT NULL,
  `krname` varchar(50) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proweight` varchar(20) NOT NULL,
  `prosize` varchar(10) NOT NULL,
  `prodetail` varchar(100) NOT NULL,
  `krgdate` date NOT NULL,
  `krdisdate` date NOT NULL,
  `prodisdate` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krissue`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderpro`
--

CREATE TABLE `orderpro` (
  `id` int(11) NOT NULL,
  `vrno` int(11) NOT NULL DEFAULT 1,
  `partyname` varchar(40) NOT NULL,
  `proname` varchar(40) NOT NULL,
  `pweight` varchar(20) NOT NULL,
  `psize` varchar(10) NOT NULL,
  `prodetail` varchar(100) NOT NULL,
  `orderno` int(10) NOT NULL,
  `orderdt` date NOT NULL,
  `disdate` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'mga', 'madhuvangold916@gmail.com', 'madhuvan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custoname`
--
ALTER TABLE `custoname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karigarname`
--
ALTER TABLE `karigarname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krissue`
--
ALTER TABLE `krissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderpro`
--
ALTER TABLE `orderpro`
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
-- AUTO_INCREMENT for table `custoname`
--
ALTER TABLE `custoname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `karigarname`
--
ALTER TABLE `karigarname`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `krissue`
--
ALTER TABLE `krissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `orderpro`
--
ALTER TABLE `orderpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;