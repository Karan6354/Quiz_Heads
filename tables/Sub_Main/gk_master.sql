-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2022 at 10:16 AM
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
-- Database: `qh_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `gk_master`
--

DROP TABLE IF EXISTS `gk_master`;
CREATE TABLE IF NOT EXISTS `gk_master` (
  `gk_ID` int NOT NULL AUTO_INCREMENT,
  `gk_question` varchar(160) NOT NULL,
  `gk_option1` varchar(160) NOT NULL,
  `gk_option2` varchar(160) NOT NULL,
  `gk_option3` varchar(160) NOT NULL,
  `gk_option4` varchar(160) NOT NULL,
  `gk_answer` varchar(160) NOT NULL,
  PRIMARY KEY (`gk_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
