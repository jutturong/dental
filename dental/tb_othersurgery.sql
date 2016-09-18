-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2016 at 09:36 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

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
-- Table structure for table `tb_othersurgery`
--

CREATE TABLE IF NOT EXISTS `tb_othersurgery` (
  `id_othersurgery` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `doctor` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename1` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename2` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  PRIMARY KEY (`id_othersurgery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_othersurgery`
--

INSERT INTO `tb_othersurgery` (`id_othersurgery`, `id_history_patient`, `id_tab`, `doctor`, `begin_date`, `tool`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(1, 21, 1, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-11 23:19:32.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 10:35:51.png', 1),
(2, 21, 2, 'พญ.กาญจนา ด่านภักดี', '2015-02-04', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-08 10:35:51.png', 'Screenshot from 2016-09-10 13:16:06.png', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
