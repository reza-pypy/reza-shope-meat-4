-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2025 at 05:32 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c-meat`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text,
  `title` varchar(40) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `description`, `title`, `price`) VALUES
(53, 'images/Shanml1001071www.tiktarh.com_.jpg', 'برای دامداری', 'شترمرغ پرواری', '20000000'),
(52, 'images/4631024.jpg', 'مناسب ماساژ', 'روغن شترمرغ', '40000'),
(50, 'images/280x280.jpg', 'به صرفه برای مصرف', 'ران شترمرغ', '550000'),
(51, 'images/پر-شترمرغ-نر.webp', 'مناسب برای تزیین', 'پر شترمرغ', '200000'),
(46, 'images/2232080.jpg', 'پر خواص ترین گوشت قرمز مناسب افراد مسن', 'گوشت شترمرغ', '700000'),
(54, 'images/images.jpg', 'مناسب برای کم خونی', 'جگر شترمرغ', '450000');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

DROP TABLE IF EXISTS `name`;
CREATE TABLE IF NOT EXISTS `name` (
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT 'user',
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`name`, `username`, `password`, `role`, `id`) VALUES
('reza', 'rezapayandeh', '[1234]', 'admin', 1),
('reza', 'rezapayandeh', '4145247582', 'user', 3),
('reza', 'rezapayandeh', '4145247582', 'user', 4),
('reza', 'pyreza@gmail.com', '12345', 'user', 5),
('reza', 'rezapayandeh', '1234', 'user', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
