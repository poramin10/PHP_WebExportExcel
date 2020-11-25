-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `PlateNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LicensePlateProvinceNo1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Column2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EN1` int(10) NOT NULL,
  `EN2` int(10) NOT NULL,
  `EN3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
