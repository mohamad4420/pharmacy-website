-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12 مايو 2020 الساعة 00:43
-- إصدار الخادم: 10.4.10-MariaDB
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
-- بنية الجدول `cart`
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
-- بنية الجدول `prodect`
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `prodect`
--

INSERT INTO `prodect` (`id`, `name`, `information`, `price`, `type`, `pay`, `cart`, `image`) VALUES
(6, 'mohamad', 'Ù…Ù†ØªØ¬ Ø±Ø§Ø¦Ø¹ Ù„Ù„Ø´Ø¹Ø±', '85', 'Ù†Ø³Ø§Ø¡', '5', '88', '895713309.jpg'),
(9, 'Ù…Ø­Ù…ÙˆØ¯', 'Ù‡Ùˆ ÙƒÙ„Ø¨', '0.2', 'ØªØ¬Ù…ÙŠÙ„', '19', '112', '1382437676.jpg'),
(8, 'Ø§Ù†Ø§', 'Ø¬Ù…ÙŠÙ„ Ø¬Ø¯Ø§', '12500000', 'Ø¯ÙˆØ§Ø¡', '13', '31', '1435037697.jpg'),
(13, 'Ø§Ù„Ø£Ø³Ø¨Ø±ÙŠÙ† Aspirin', 'Ù„Ù„Ø§Ù„ØªÙ‡Ø§Ø¨ ÙŠØ³ØªØ®Ø¯Ù… Ù„ØªØ³ÙƒÙŠÙ† Ø§Ù„Ø¢Ù„Ø§Ù…ØŒ ØªØ®ÙÙŠØ¶ Ø¯Ø±Ø¬Ø© Ø§Ù„Ø­Ø±Ø§Ø±Ø©ØŒ ÙˆØªÙ‚Ù„ÙŠÙ„ Ø£Ø¹Ø±Ø§Ø¶ Ø§Ù„ØªÙ‡Ø§Ø¨ Ø§Ù„Ù…ÙØ§ØµÙ„ØŒ', '10', 'Ø¯ÙˆØ§Ø¡', '0', '1', '258739190.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `noCart` varchar(100) NOT NULL DEFAULT '0',
  `gender` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `reg`
--

INSERT INTO `reg` (`userName`, `password`, `email`, `firstName`, `lastName`, `noCart`, `gender`, `id`) VALUES
('m1152580@gmail.com', '0568760233', 'm1152580@gmail.com', 'mohamad', 'Abudaya', '0', 'mail', 22),
('root', '1234', 'root', 'Ø§Ù„Ù…Ø¯ÙŠØ±', 'Ù…Ø­Ù…Ø¯', '0', 'mail', 23);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
