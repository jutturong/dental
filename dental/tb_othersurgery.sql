-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2016 at 11:30 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_othersurgery`
--

INSERT INTO `tb_othersurgery` (`id_othersurgery`, `id_history_patient`, `id_tab`, `doctor`, `begin_date`, `tool`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(1, 21, 1, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-11 23:19:32.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 10:35:51.png', 1),
(3, 21, 3, 'พญ.กาญจนา ด่านภักดี', '2016-09-13', 'กรรไกร', 'Screenshot from 2016-09-08 10:35:51.png', 'Screenshot from 2016-09-10 13:16:06.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(4, 21, 4, 'พญ.กาญจนา ด่านภักดี', '2016-09-06', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:24.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-03 21:24:31.png', 1),
(5, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(6, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(7, 21, 6, 'พญ.กาญจนา ด่านภักดี', '2014-02-11', 'กรรไกร', 'Screenshot from 2016-09-08 11:58:51.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-10 13:15:58.png', 2),
(8, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', 'usa.jpg', 1),
(9, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', '629415.jpg', 2),
(13, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(14, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(17, 21, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2012-02-14', 'กรรไกร', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
