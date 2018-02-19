-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 05:03 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclelisting`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `sellerid` int(6) NOT NULL,
  PRIMARY KEY (`feedbackid`),
  KEY `sellerid` (`sellerid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `name`, `email`, `comment`, `sellerid`) VALUES
(1, 'Carl', 'aaa@bbb.com', 'guytuiuyuitutyu', 4),
(2, 'Fred', 'fdagg@gmail.com', 'hello.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

DROP TABLE IF EXISTS `listing`;
CREATE TABLE IF NOT EXISTS `listing` (
  `listingid` int(6) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `year` varchar(4) NOT NULL,
  `price` varchar(12) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `sellerid` int(6) NOT NULL,
  PRIMARY KEY (`listingid`),
  KEY `sellerId` (`sellerid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`listingid`, `type`, `make`, `model`, `year`, `price`, `image`, `sellerid`) VALUES
(3, 'Saloon/Sedan', 'Bentley', 'Amage', '2006', '1000000', '2005-Bentley-Arnage-Limousine-FA-1024x768.jpg', 4),
(4, 'Convertible', 'Aston martin', 'DB5 Vantage', '1965', '90000', '1965 Aston Martin DB5 Vantage.jpg', 5),
(5, 'Full size SUV', 'Nissan', 'Patrol', '2006', '40000', '7907929nissan-patrol-04.jpg', 5),
(6, 'Sports Car', 'Maserati', 'Sebring', '1966', '50000', 'images.jpg', 5),
(7, 'Saloon/Sedan', 'Bentley', 'MUlsanne', '2016', '2000000', 'mulsane.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `sellerid` int(6) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sellerid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerid`, `fname`, `lname`, `email`, `phone`, `address`, `username`, `password`) VALUES
(4, 'Carl', 'Halliburton', 'carl.halliburton@gmail.com', '0211010459', '76 main street', 'carlhalliburton', 'qwertyu'),
(5, 'Fred', 'Dagg', 'fdagg@gmail.com', '049729138', '98 Main Street NZ', 'FredDagg', 'asdfghjk'),
(6, 'Bob', 'Dagg', 'bob@gmail.com', '049729138', '98 Main Street NZ', 'bobDagg', 'zxcvbnm'),
(7, 'Bober', 'bobyt', 'aaa@bbb.com', '049729138', '56 Tahapie road', 'bobBobyt', 'qazwsxedcrfv');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listing`
--
ALTER TABLE `listing`
  ADD CONSTRAINT `seller_listing_fk` FOREIGN KEY (`sellerid`) REFERENCES `seller` (`sellerid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
