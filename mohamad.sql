-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2020 at 10:05 AM
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_prodect`, `id_user`, `count`) VALUES
('19', '26', '1');

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

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`userid`, `prodectid`, `date`, `count`) VALUES
('26', '21', 'Tuesday, May 26, 2020 , 8:26:27', '3'),
('26', '19', 'Tuesday, May 26, 2020 , 8:26:27', '2'),
('26', '20', 'Tuesday, May 26, 2020 , 8:26:26', '1'),
('23', '19', 'Tuesday, May 26, 2020 , 8:26:5', '2'),
('23', '17', 'Tuesday, May 26, 2020 , 8:26:4', '2'),
('23', '21', 'Tuesday, May 26, 2020 , 8:23:21', '3');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`id`, `name`, `information`, `price`, `type`, `pay`, `cart`, `image`) VALUES
(19, 'Pampers', 'ÙÙˆØ· Ù„Ù„Ø§Ø·ÙØ§Ù„', '6.99', 'Ø§Ø·ÙØ§Ù„', '34', '60', '842077872.jpg'),
(20, 'Lenses', 'Ù„ØªØºÙŠÙŠØ± Ù„ÙˆÙ† Ø§Ù„Ø¹ÙŠÙ†', '10.99', 'Ù†Ø³Ø§Ø¡', '49', '52', '1994364436.jpg'),
(21, 'Nivea men', 'Ù…Ù†ØªØ¬ Ù„Ø§Ø²Ø§Ù„Ù‡ Ø§Ù„Ø¹Ø±Ù‚', '5.99', 'Ø±Ø¬Ø§Ù„', '20', '17', '242511131.jpg'),
(17, 'Acamol', 'Ù…Ø³ÙƒÙ† Ù„Ù„Ø§Ù„Ù…', '3.3', 'Ø¯ÙˆØ§Ø¡', '8', '3', '1171386943.jpg');

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
('aljeep', '0568760233', 'aser_alhob2@hotmail.com', 'mohamad', 'abudaya', '1', 'mail', 26, '0568760233', 'user'),
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
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soldout`
--

INSERT INTO `soldout` (`id`, `name`, `namep`, `date`) VALUES
(101, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Pampers', 'Friday, May 22, 2020 , 19:39:48'),
(102, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Trofen', 'Friday, May 22, 2020 , 19:43:58'),
(103, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Pampers', 'Friday, May 22, 2020 , 19:43:59'),
(104, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Nivea men', 'Saturday, May 23, 2020 , 18:22:7'),
(105, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Nivea men', 'Saturday, May 23, 2020 , 18:42:18'),
(106, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Acamol', 'Saturday, May 23, 2020 , 18:44:48'),
(107, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Lenses', 'Saturday, May 23, 2020 , 18:44:52'),
(110, 'mohamad abudaya', 'Nivea men', 'Tuesday, May 26, 2020 , 8:19:35'),
(109, 'Ø§Ù„Ù…Ø¯ÙŠØ± Ù…Ø­Ù…Ø¯', 'Pampers', 'Saturday, May 23, 2020 , 18:44:53'),
(111, 'Ø§Ù„Ø±Ø¦ÙŠØ³ Ø±Ø§Ù…ÙŠ', 'Acamol', 'Tuesday, May 26, 2020 , 8:19:37'),
(112, 'Ø§Ù„Ø±Ø¦ÙŠØ³ Ø±Ø§Ù…ÙŠ', 'Pampers', 'Tuesday, May 26, 2020 , 8:19:37'),
(113, 'Ø§Ù„Ø±Ø¦ÙŠØ³ Ø±Ø§Ù…ÙŠ', 'Lenses', 'Tuesday, May 26, 2020 , 8:19:37'),
(114, 'Ø§Ù„Ø±Ø¦ÙŠØ³ Ø±Ø§Ù…ÙŠ', 'Nivea men', 'Tuesday, May 26, 2020 , 8:19:37'),
(115, 'mohamad abudaya', 'Lenses', 'Tuesday, May 26, 2020 , 8:19:38'),
(116, 'mohamad abudaya', 'Pampers', 'Tuesday, May 26, 2020 , 8:19:38'),
(117, 'mohamad abudaya', 'Acamol', 'Tuesday, May 26, 2020 , 8:19:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
