-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2016 at 04:02 PM
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
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `result_analysis` text COLLATE utf8mb4_bin NOT NULL,
  `facialcleft` int(2) NOT NULL,
  `otherfacialcleft` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_diagnosis`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_history_patient`, `result_analysis`, `facialcleft`, `otherfacialcleft`) VALUES
(1, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(2, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(3, 21, 'Complete hard palate cleft', 2, 'ระบุ Facial cleft'),
(4, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(6, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(7, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_patient`
--

CREATE TABLE IF NOT EXISTS `tb_history_patient` (
  `id_history_patient` int(11) NOT NULL AUTO_INCREMENT,
  `HN` varchar(20) NOT NULL,
  `DN` varchar(20) NOT NULL,
  `othnumber` varchar(20) NOT NULL,
  `CN` varchar(20) NOT NULL,
  `seriesnumber` varchar(20) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `race` varchar(30) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `namefather` varchar(35) NOT NULL,
  `fatherlastname` varchar(50) NOT NULL,
  `career` varchar(50) NOT NULL,
  `birthdatefahter` date NOT NULL,
  `age1` float NOT NULL,
  `disease` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motherlastname` varchar(50) NOT NULL,
  `mothercareer` varchar(50) NOT NULL,
  `birthdatemother` date NOT NULL,
  `age2` int(11) NOT NULL,
  `diseasemother` varchar(50) NOT NULL,
  `spousename` varchar(50) NOT NULL,
  `spouselastname` varchar(50) NOT NULL,
  `benefits` int(5) NOT NULL,
  `otherbenefits` varchar(50) NOT NULL,
  `numberbenefits` varchar(20) NOT NULL,
  `evertreat` varchar(20) NOT NULL,
  `otherevertreat` int(5) NOT NULL,
  `treatmentfacility` varchar(60) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `developmentallevel` int(10) NOT NULL,
  `otherdevelopmentallevel` text NOT NULL,
  `daterecord` date NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_history_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tb_history_patient`
--

INSERT INTO `tb_history_patient` (`id_history_patient`, `HN`, `DN`, `othnumber`, `CN`, `seriesnumber`, `firstname`, `lastname`, `filename`, `birthdate`, `address`, `nationality`, `race`, `religion`, `namefather`, `fatherlastname`, `career`, `birthdatefahter`, `age1`, `disease`, `mothername`, `motherlastname`, `mothercareer`, `birthdatemother`, `age2`, `diseasemother`, `spousename`, `spouselastname`, `benefits`, `otherbenefits`, `numberbenefits`, `evertreat`, `otherevertreat`, `treatmentfacility`, `doctor`, `developmentallevel`, `otherdevelopmentallevel`, `daterecord`, `id_user`) VALUES
(21, 'ER2315', 'RT2136', 'TY2316', 'RY2135', '1111111111111', 'สมเกียรติ', 'สุขเจริญ', '', '0000-00-00', '123 ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002', 'ไทย', 'ไทย', 'พุทธ', 'สุรพงษ์', 'สุขเจริญ', 'รับจ้างทั่วไป', '0000-00-00', 36, 'โรคลมชัก', 'นวลฉวี', 'สุขเจริญ', 'บริษัทเอกชน', '0000-00-00', 41, 'ความดันสูง', 'อาทิตยา', 'นามวงศ์', 1, 'ระบุสวัสดิการการรักษา', 'TR145287', '3', 0, 'รพ.พยาบาลศรีนครินทร์', 'นพ.นพคุณ ดวงจินทร์ดา', 2, 'ระบุระดับพัฒนาการผู้ป่วย', '2016-09-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_interceptive`
--

CREATE TABLE IF NOT EXISTS `tb_interceptive` (
  `id_interceptive` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf8_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeleta` int(5) NOT NULL,
  `filename1` text COLLATE utf8_bin NOT NULL,
  `filename2` text COLLATE utf8_bin NOT NULL,
  `filename3` text COLLATE utf8_bin NOT NULL,
  `dentalcast` int(5) NOT NULL,
  PRIMARY KEY (`id_interceptive`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tb_interceptive`
--

INSERT INTO `tb_interceptive` (`id_interceptive`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeleta`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(40, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1),
(42, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1),
(43, 21, 'พญ.กานดา สิทธิ', '0000-00-00', '0000-00-00', 1, 2, 1, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_psot`
--

CREATE TABLE IF NOT EXISTS `tb_psot` (
  `id_psot` int(11) NOT NULL AUTO_INCREMENT,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `joindoctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `procedure` int(5) NOT NULL,
  `otherprocedure` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `file2` text COLLATE utf16_bin NOT NULL,
  `file3` int(11) NOT NULL,
  `cast` int(5) NOT NULL,
  PRIMARY KEY (`id_psot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_psot`
--

INSERT INTO `tb_psot` (`id_psot`, `id_history_patient`, `doctor`, `joindoctor`, `begin_date`, `end_date`, `procedure`, `otherprocedure`, `file1`, `file2`, `file3`, `cast`) VALUES
(1, 21, 'นพ.ปราโมทย์  คำชะนินท์', 'พญ.อินทญา  คำชะนินท์', '1993-02-09', '2011-02-08', 5, 'ระบุ', '641603.jpg', '641604.jpg', 641607, 1),
(2, 21, 'นพ.ปราโมทย์  คำชะนินท์', 'พญ.อินทญา  คำชะนินท์', '1993-02-09', '2011-02-08', 5, 'ระบุ', '641603.jpg', '641604.jpg', 641607, 1),
(3, 21, 'นพ.ปราโมทย์  คำชะนินท์', 'พญ.อินทญา  คำชะนินท์', '1993-02-09', '2011-02-08', 5, 'ระบุ', '641603.jpg', '641604.jpg', 641607, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
