-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 09:10 AM
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
-- Database: `surveytable`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `userid` int(11) NOT NULL,
  `saxeoba` varchar(30) CHARACTER SET utf8 NOT NULL,
  `erteuli` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sabazrotve` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `winatve` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mimdinaretve` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `komentari` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`userid`, `saxeoba`, `erteuli`, `sabazrotve`, `winatve`, `mimdinaretve`, `komentari`) VALUES
(43, '', '', '', '', '', 'ფასფასფასფასფასგფსდგსდფგ'),
(44, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '', '', '', ''),
(45, 'dasdasda', 'fasfasf', 'fasfasf', 'maiofajfiasjfioja', 'asfasfas', 'asfasf');

-- --------------------------------------------------------

--
-- Table structure for table `productss`
--

CREATE TABLE `productss` (
  `useridd` int(11) NOT NULL,
  `saxeobaa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `erteulii` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sabazrotvee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `winatvee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mimdinaretvee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `komentarii` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productss`
--

INSERT INTO `productss` (`useridd`, `saxeobaa`, `erteulii`, `sabazrotvee`, `winatvee`, `mimdinaretvee`, `komentarii`) VALUES
(38, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ადსდფასფას', 'hjtrjtyjty', '', '', 'ფასფასფასფასფასგფსდგსდფგ'),
(39, 'ახალითეიბლი', 'ადსდფასფას', 'ფასფასფ', 'ასგფასფასფ', 'ასფასფასფ', 'ფასფასფასფასფასგფსდგსდფგ'),
(40, 'mesame channaweri', 'fuernhuihferuihui', 'huiui', 'hui', 'huihuihuihuihui', ''),
(41, 'asdasdasda', 'adsdasd', 'asdas', 'dasda', 'dasdasd', 'adsd');

-- --------------------------------------------------------

--
-- Table structure for table `productsss`
--

CREATE TABLE `productsss` (
  `useriddd` int(11) NOT NULL,
  `saxeobaaa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `erteuliii` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sabazrotveee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `winatveee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mimdinaretveee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `komentariii` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsss`
--

INSERT INTO `productsss` (`useriddd`, `saxeobaaa`, `erteuliii`, `sabazrotveee`, `winatveee`, `mimdinaretveee`, `komentariii`) VALUES
(16, '', '', '', '', '', ''),
(20, '', '', '', '', '', 'ფასფასფასფასფასგფსდგსდფგ');

-- --------------------------------------------------------

--
-- Table structure for table `productssss`
--

CREATE TABLE `productssss` (
  `useridddd` int(11) NOT NULL,
  `saxeobaaaa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `erteuliiii` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sabazrotveeee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `winatveeee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mimdinaretveeee` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `komentariiii` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productssss`
--

INSERT INTO `productssss` (`useridddd`, `saxeobaaaa`, `erteuliiii`, `sabazrotveeee`, `winatveeee`, `mimdinaretveeee`, `komentariiii`) VALUES
(10, '', '', '', '', '', 'es aris chemi komentari'),
(11, 'produqti', 'product', 'products', 'productionio', 'product', 'production'),
(12, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '', '', '', 'ფასფასფასფასფასგფსდგსდფგ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `productss`
--
ALTER TABLE `productss`
  ADD PRIMARY KEY (`useridd`);

--
-- Indexes for table `productsss`
--
ALTER TABLE `productsss`
  ADD PRIMARY KEY (`useriddd`);

--
-- Indexes for table `productssss`
--
ALTER TABLE `productssss`
  ADD PRIMARY KEY (`useridddd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `productss`
--
ALTER TABLE `productss`
  MODIFY `useridd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `productsss`
--
ALTER TABLE `productsss`
  MODIFY `useriddd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `productssss`
--
ALTER TABLE `productssss`
  MODIFY `useridddd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
