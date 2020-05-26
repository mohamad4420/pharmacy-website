-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2020 at 11:29 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohamad`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_prodect` varchar(255) NOT NULL,
  `id_user` varchar(250) NOT NULL,
  `count` varchar(2500) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_prodect`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

DROP TABLE IF EXISTS `pay`;
CREATE TABLE IF NOT EXISTS `pay` (
  `userid` varchar(250) NOT NULL,
  `prodectid` varchar(250) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `count` varchar(250) NOT NULL,
  PRIMARY KEY (`prodectid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodect`
--

DROP TABLE IF EXISTS `prodect`;
CREATE TABLE IF NOT EXISTS `prodect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `information` varchar(5000) NOT NULL,
  `price` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pay` varchar(255) NOT NULL DEFAULT '0',
  `cart` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`id`, `name`, `information`, `price`, `type`, `pay`, `cart`, `image`) VALUES
(22, 'Sanosan', 'Ø´Ø§Ù…Ø¨Ùˆ Ù„Ù„Ø§Ø·ÙØ§Ù„', '15', 'Ø§Ø·ÙØ§Ù„', '0', '0', '681762751.jpg'),
(19, 'Pampers', 'ÙÙˆØ· Ù„Ù„Ø§Ø·ÙØ§Ù„', '6.99', 'Ø§Ø·ÙØ§Ù„', '34', '62', '842077872.jpg'),
(20, 'Lenses', 'Ù„ØªØºÙŠÙŠØ± Ù„ÙˆÙ† Ø§Ù„Ø¹ÙŠÙ†', '10.99', 'Ù†Ø³Ø§Ø¡', '61', '53', '1994364436.jpg'),
(21, 'Nivea men', 'Ù…Ù†ØªØ¬ Ù„Ø§Ø²Ø§Ù„Ù‡ Ø§Ù„Ø¹Ø±Ù‚', '5.99', 'Ø±Ø¬Ø§Ù„', '32', '17', '242511131.jpg'),
(23, 'ANTIHAIR LOSS', 'Ù…Ù†ØªØ¬ Ù„Ø§ÙŠÙ‚Ø§Ù ØªØ³Ø§Ù‚Ø· Ø§Ù„Ø´Ø¹Ø±', '55', 'ØªØ¬Ù…ÙŠÙ„', '0', '0', '1071548220.png'),
(17, 'Acamol', 'Ù…Ø³ÙƒÙ† Ù„Ù„Ø§Ù„Ù…', '3.3', 'Ø¯ÙˆØ§Ø¡', '10', '3', '1171386943.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `noCart` varchar(100) NOT NULL DEFAULT '0',
  `gender` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `what` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`address`, `password`, `email`, `firstName`, `lastName`, `noCart`, `gender`, `id`, `phone`, `what`) VALUES
('aljeep', '0568760233', 'aser_alhob2@hotmail.com', 'mohamad', 'abudaya', '0', 'mail', 26, '0568760233', 'user'),
('jarusalem/aljeep', '1234', 'root', 'Ø§Ù„Ø±Ø¦ÙŠØ³', 'Ø±Ø§Ù…ÙŠ', '0', 'mail', 23, '0568760233', 'admin'),
('ramallah/is', '0568760233', 'm1152580@gmail.com', 'abudaya', 'mohamad', '0', 'mail', 25, '0568760233', 'driver'),
('Ø§Ù„Ø¬ÙŠØ¨', '1', 'm@g.com', 'Ù…Ø­Ù…Ø¯', 'Ø§Ø¨ÙˆØ¯ÙŠÙ‡', '0', 'mail', 27, '0568760233', 'user'),
('Ø¨ØªÙˆÙ†ÙŠØ§', '1234', 'mari@g.com', 'Ù…Ø§Ø±ÙŠ', 'Ø±Ø§Ù…ÙŠ', '0', 'female', 28, '0568784555', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `soldout`
--

DROP TABLE IF EXISTS `soldout`;
CREATE TABLE IF NOT EXISTS `soldout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `namep` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
