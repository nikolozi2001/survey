-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 06:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_command`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `saxeoba` varchar(30) NOT NULL,
  `erteuli` varchar(30) NOT NULL,
  `sabazrotve` varchar(50) DEFAULT NULL,
  `winatve` varchar(50) DEFAULT NULL,
  `mimdinaretve` varchar(50) DEFAULT NULL,
  `komentari` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `saxeoba`, `erteuli`, `sabazrotve`, `winatve`, `mimdinaretve`, `komentari`) VALUES
(1, 'neovic', 'devierte', NULL, NULL, NULL, NULL),
(3, 'lee', 'ann', NULL, NULL, NULL, NULL),
(4, 'nika', 'kachibaia', NULL, NULL, NULL, NULL),
(8, 'saxeoba', 'erteuli', 'sabazrotve', 'winatve', 'mimdinaretve', 'komentari'),
(9, '', '', '', '', '', 'asufuahfuiashuifhasiuhfuiashfiuasfhasiuhfasihfiuas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;