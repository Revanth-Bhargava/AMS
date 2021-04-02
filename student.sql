-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2020 at 06:21 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `present_days` int NOT NULL,
  `present_percent` int NOT NULL,
  `total_days` int NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `present_days`, `present_percent`, `total_days`) VALUES
(1, 'Kabir', 45, 90, 50),
(2, 'Arjun', 40, 80, 50),
(3, 'Ananya', 50, 100, 50),
(4, 'Ishaan', 37, 74, 50),
(5, 'Shivay', 50, 100, 50),
(6, 'Dhruv', 39, 78, 50),
(7, 'Isha', 42, 84, 50),
(8, 'Akshara', 50, 100, 50),
(9, 'Manohar', 49, 98, 50),
(10, 'Rudrash', 50, 100, 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
