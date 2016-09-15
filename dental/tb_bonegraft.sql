-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 11:42 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bonegraft`
--

CREATE TABLE IF NOT EXISTS `tb_bonegraft` (
  `id_bonegraft` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf32_bin NOT NULL,
  `date1` date NOT NULL,
  `technic` varchar(100) COLLATE utf32_bin NOT NULL,
  `file1` int(100) NOT NULL,
  `file2` int(100) NOT NULL,
  `file3` int(100) NOT NULL,
  `dentalcast` int(10) NOT NULL,
  PRIMARY KEY (`id_bonegraft`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_bonegraft`
--

INSERT INTO `tb_bonegraft` (`id_bonegraft`, `id_history_patient`, `doctor`, `date1`, `technic`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(6, 21, 'พญ.ภัทรราพร วรรณวดี', '0000-00-00', 'เทคนิคการผ่าตัด', 0, 0, 0, 0),
(7, 21, 'พญ.ภัทรราพร วรรณวดี', '0000-00-00', 'เทคนิคการผ่าตัด', 0, 0, 0, 0),
(14, 21, 'พญ.ภัทรราพร วรรณวดี', '0000-00-00', 'เทคนิคการผ่าตัด', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
