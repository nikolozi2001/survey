-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 07:24 AM
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
-- Database: `kitxvari`
--

-- --------------------------------------------------------

--
-- Table structure for table `sawarmo`
--

CREATE TABLE `sawarmo` (
  `userid` int(11) NOT NULL,
  `kodi` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dasaxeleba` varchar(30) CHARACTER SET utf8 NOT NULL,
  `imisamarti` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `fmisamarti` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `regioni` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `raioni` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sforma` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `osforma` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `saxe` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `gvari` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sawarmo`
--

INSERT INTO `sawarmo` (`userid`, `kodi`, `dasaxeleba`, `imisamarti`, `fmisamarti`, `regioni`, `raioni`, `sforma`, `osforma`, `saxe`, `gvari`, `phone`) VALUES
(10, '', '', '', '', '', 'es aris chemi komentari', NULL, NULL, NULL, NULL, NULL),
(11, 'produqti', 'product', 'products', 'productionio', 'product', 'production', NULL, NULL, NULL, NULL, NULL),
(12, '651651561', 'dasjndaisndis', 'asfhbashfbhuasbh', 'jnfisbdifbsdihbi', 'nfajnfnasini', 'ijndfsibsdibfib', 'ionfdijdnbsifnsdijb', 'jninfidnibn', 'onfodnsondson', 'nikakachibaia', 555214342),
(13, '654564984894', 'jisdnfuisduibu', 'iubfsasfasfasf', 'jisfiunfiubdsiub', 'inbdsibisdbiub', 'isndgisdibfiudsb', 'ondfigbdsifbidsb', 'infdisbifbdibfdsibi', 'onfdoigndfoigodfhio', 'nikakachibaia', 555214342);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sawarmo`
--
ALTER TABLE `sawarmo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sawarmo`
--
ALTER TABLE `sawarmo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
