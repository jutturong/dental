-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2016 at 11:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bonegraft`
--

CREATE TABLE `tb_bonegraft` (
  `id_bonegraft` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf32_bin NOT NULL,
  `date1` date NOT NULL,
  `technic` varchar(100) COLLATE utf32_bin NOT NULL,
  `file1` text COLLATE utf32_bin NOT NULL,
  `file2` text COLLATE utf32_bin NOT NULL,
  `file3` text COLLATE utf32_bin NOT NULL,
  `dentalcast` int(10) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `complication` int(5) NOT NULL,
  `other_complication` varchar(100) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `tb_bonegraft`
--

INSERT INTO `tb_bonegraft` (`id_bonegraft`, `id_history_patient`, `doctor`, `date1`, `technic`, `file1`, `file2`, `file3`, `dentalcast`, `id_tab`, `complication`, `other_complication`) VALUES
(24, 24, 'อ.ธนศักดิ์ เชวงสันติสุข', '2010-05-12', '', '', '', '', 1, 1, 0, ''),
(25, 25, 'อ.สัญญา', '2012-08-07', '', '', '', '', 1, 1, 0, ''),
(27, 28, 'อ.ศิริพงศ์', '2006-08-25', '', '', '', '', 1, 1, 0, ''),
(28, 33, '', '2000-11-15', '', '', '', '', 2, 1, 0, ''),
(29, 34, 'อ.วรัญญู', '2013-12-03', '', '', '', '', 1, 1, 0, ''),
(30, 35, 'อ.วรัญญู/อ.สุภาพร', '2009-02-20', '', '', '', '', 1, 1, 0, ''),
(32, 36, 'อ.สัญญา,อ.สุภาพร', '2013-03-12', '', '', '', '', 1, 1, 0, ''),
(33, 37, 'อ.สุปรียา,อ.ภัทรมน', '2015-03-03', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(34, 38, 'อ.สุภาพร,อ.เสาวลักษณ์', '2010-11-30', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(35, 39, 'อ.สุภาพร,อ.สุทิน', '2013-06-25', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(37, 40, 'อ.ศิริพงศ์', '2011-10-11', 'ABG with ICBG', '', '', '', 1, 1, 0, ''),
(38, 36, 'อ.วรัญญู/อ.สุภาพร', '2010-08-02', '', '', '', '', 1, 1, 1, ''),
(42, 35, '', '2014-02-11', '', '', '', '', 1, 2, 1, ''),
(43, 35, '', '2014-02-11', '', '', '', '', 1, 2, 1, ''),
(44, 35, '', '2014-02-19', '', '', '', '', 1, 3, 1, ''),
(45, 35, '', '2011-01-10', '', '', '', '', 1, 3, 1, ''),
(46, 42, 'รพ.ศรีนครินทร์', '2004-03-26', '', '', '', '', 0, 1, 0, ''),
(47, 42, 'อ.สุภาพร/อ.เอกสิทธิ์', '2005-01-06', '', '', '', '', 0, 2, 0, ''),
(48, 49, 'jhkjjk', '0000-00-00', 'bvjghv', '', '', '', 1, 1, 1, 'jhoih'),
(49, 51, 'รพ.ศรีนครินทร์', '2004-03-26', '', '', '', '', 0, 1, 0, ''),
(50, 51, 'อ.สุภาพร', '2005-01-06', '', '', '', '', 0, 2, 0, ''),
(51, 53, 'อ.เสาวลักษณ์', '2014-06-10', '', '', '', '', 0, 1, 0, ''),
(52, 53, 'อ.เสาวลักษณ์', '2015-04-07', '', '', '', '', 0, 2, 0, ''),
(53, 55, 'อ.ศิริพงษ์, อ.เสาวลักษณ์', '2007-03-17', '', '', '', '', 0, 1, 0, ''),
(54, 55, 'อ.ศิริพงษ์', '2007-03-17', '', '', '', '', 0, 2, 0, ''),
(55, 58, 'อ.วรัญญู', '2007-03-16', '', '', '', '', 0, 1, 0, ''),
(56, 59, 'อ.เสาวลักษณ์', '2015-06-23', '', '', '', '', 0, 1, 0, ''),
(57, 60, 'อ.ศิริพงษ์', '2012-07-24', 'ABG with ICBG', '', '', '', 0, 1, 0, ''),
(58, 60, 'อ.ศิริพงษ์', '2013-05-16', '', '', '', '', 0, 2, 0, ''),
(62, 61, 'อ.สุภาพร', '2012-05-22', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(63, 62, 'อ.สุภาพร', '2014-11-04', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(64, 63, 'อ.สุปรียา', '2016-09-20', 'Repair Left ABG with ICBG', '', '', '', 0, 1, 2, ''),
(65, 64, 'อ.สุปรียา', '2016-04-26', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(66, 67, 'อ.สุทิน', '2015-07-21', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(67, 68, 'อ.ศิริพงศ์', '2014-06-03', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(68, 71, 'อ.ศิริพงศ์', '2014-01-07', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(69, 72, 'นพ.ธนศักดิ์', '2002-08-07', '', '', '', '', 0, 1, 0, ''),
(70, 73, 'อ.สัญญา', '2004-10-11', '', '', '', '', 0, 1, 2, ''),
(71, 74, 'อ.สุปรียา', '2014-10-05', 'ABG with ICBG', '', '', '', 0, 1, 2, ''),
(72, 75, 'อ.สุภาพร, อ.เสาวลักษณ์', '2006-07-21', 'ABG with ICBG', '', '', '', 0, 1, 0, ''),
(74, 77, 'อ.ธนศักดิ์ (รพ.ศูนย์ขอนแก่น)', '0000-00-00', '', '', '', '', 0, 1, 0, ''),
(75, 78, 'kry', '0000-00-00', '', '', '', '', 0, 1, 0, ''),
(76, 79, 'อ.วรัญญู, อ.สุภาพร', '2009-02-20', 'ABG with ICBG', '', '', '', 0, 1, 0, ''),
(83, 95, 'นพ.ธนศักดิ์ (รพ.ขอนแก่น)', '2010-05-11', '', '', '', '', 0, 1, 0, ''),
(84, 96, 'อ.สุภาพร, อ.เสาวลักษณ์', '2014-07-08', 'ABG with ICBG', '', '', '', 0, 1, 0, ''),
(90, 76, 'อ.ศิริพงศ์', '2008-03-01', 'ABG with ICBG', '', '', '', 0, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_corrective`
--

CREATE TABLE `tb_corrective` (
  `id_corrective` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(11) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `tool` text NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_corrective`
--

INSERT INTO `tb_corrective` (`id_corrective`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `tool`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(2, 21, 'ทพญ.กาญจนา ด่านภักดี', '2012-02-01', '2005-02-02', 5, 4, 3, 'ชนิดของเครื่องมือ :', '10690103_764556926991167_1787453937051832021_n.jpg', 'd89cdfec85eb868a2abe1b1cc5e568d5.png', '12102555214751.jpg', 1),
(3, 21, '8457', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', '', 0),
(4, 23, 'อ.ชุติมาพร', '2010-07-02', '2016-03-22', 1, 0, 3, '', '', '', '', 1),
(5, 25, 'อ.พูนศักดิ์', '2012-10-05', '2016-09-25', 1, 4, 3, 'Fixed orthodontic appliance', '', '', '', 1),
(6, 26, 'วัลลภ อ.มนเฑียร', '1998-07-02', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(7, 26, 'วัลลภ อ.มนเฑียร', '1998-07-02', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(8, 28, 'อัจฉริยาพร อ.ทัศนีย์', '2006-08-25', '2016-09-25', 1, 4, 3, '', '', '', '', 1),
(9, 30, 'อ.ธนพร', '2009-01-14', '2014-01-19', 1, 4, 3, 'Band, Active spring and plate', '', '', '', 1),
(10, 33, 'อ.นิธิภาวี', '2002-01-31', '2016-09-26', 1, 1, 3, 'Fixed appliance', '', '', '', 1),
(11, 33, 'อ.นิธิภาวี', '2002-01-31', '2016-09-26', 1, 1, 3, 'Fixed appliance', '', '', '', 1),
(12, 34, 'อ.พูนศักดิ์', '2011-07-15', '2016-09-26', 1, 4, 3, 'Fixed appliance', '', '', '', 1),
(13, 35, 'อ.ชุติมาพร', '2014-06-03', '2016-07-25', 1, 4, 3, '', '', '', '', 1),
(14, 40, 'อ.มนเฑียร', '2014-06-03', '2016-09-26', 1, 4, 3, 'removable plate/FB', '', '', '', 1),
(15, 0, 'อ.ชุติมาพร', '2010-07-16', '2016-10-03', 1, 4, 3, '', '', '', '', 0),
(16, 0, 'อ.ชุติมาพร', '2010-07-16', '2016-10-03', 1, 4, 3, '', '', '', '', 0),
(17, 0, 'อ.ชุติมาพร', '2010-07-16', '2016-10-03', 1, 4, 3, '', '', '', '', 0),
(18, 0, 'อ.ชุติมาพร', '2010-07-16', '2016-10-03', 1, 4, 3, '', '', '', '', 0),
(19, 0, 'อ.ชุติมาพร', '2014-10-20', '0000-00-00', 1, 4, 3, '', '', '', '', 0),
(20, 0, 'อ.ชุติมาพร', '2008-08-01', '0000-00-00', 1, 4, 3, '', '', '', '', 0),
(21, 0, 'อ.ชุติมาพร', '2013-05-21', '0000-00-00', 1, 4, 3, 'fixed+posterior rest bite', '', '', '', 0),
(22, 0, 'อ.ชุติมาพร', '2013-06-24', '2016-08-08', 1, 0, 0, '', '', '', '', 1),
(23, 0, 'อ.ชุติมาพร', '2012-03-04', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(24, 0, 'อ.ชุติมาพร', '2013-12-02', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(25, 0, 'อ.ชุติมาพร', '2013-12-02', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(26, 0, 'อ.ชุติมาพร', '2013-12-02', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(27, 0, 'อ.ชุติมาพร', '2015-07-13', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(28, 0, 'อ.ชุติมาพร', '2015-02-09', '0000-00-00', 1, 4, 3, 'Fixed appliance', '', '', '', 1),
(29, 0, 'อ.ชุติมาพร', '2016-01-23', '0000-00-00', 1, 1, 1, 'Fixed appliance', '', '', '', 0),
(30, 0, '', '2011-07-31', '0000-00-00', 1, 4, 3, 'Quad helix,Fixed appliance', '', '', '', 0),
(31, 0, 'อ.ชุติมาพร', '2015-04-30', '0000-00-00', 1, 4, 3, '', '', '', '', 0),
(32, 0, 'อ.ชุติมาพร', '2003-08-13', '2013-06-18', 1, 4, 3, 'Quad helix,Fixed appliance', '', '', '', 0),
(33, 0, 'อ.ชุติมาพร', '2002-05-05', '2009-02-11', 1, 4, 3, '', '', '', '', 0),
(34, 0, 'อ.ชุติมาพร', '2002-05-05', '2009-02-11', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(35, 0, 'อ.ชุติมาพร', '2014-12-22', '0000-00-00', 1, 4, 3, 'Posterior raise bite,Quad helix,Fixed appliance', '', '', '', 0),
(36, 0, 'อ.ชุติมาพร', '2009-03-01', '2010-10-15', 1, 4, 3, 'Fixed appliance', '', '', '', 0),
(37, 0, 'อ.สุลัยนี', '2014-05-01', '2014-11-02', 1, 4, 3, 'Fixed appliance, Posterior raise bite', '', '', '', 0),
(38, 0, 'อ.ชุติมาพร', '2008-09-05', '2011-06-03', 1, 1, 1, '', '', '', '', 0),
(39, 0, 'อ.ชุติมาพร', '2008-09-05', '2011-06-03', 1, 4, 3, '', '', '', '', 0),
(40, 0, 'อ.ชุติมาพร', '2008-09-05', '2011-06-03', 1, 1, 1, '', '', '', '', 0),
(41, 0, 'dsagrga', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', '', 0),
(42, 79, 'อ.ชุติมาพร', '2014-06-03', '2016-07-25', 0, 4, 3, '', '', '', '', 0),
(45, 95, 'อ.ชุติมาพร', '2010-07-02', '2016-03-22', 0, 0, 0, '', '', '', '', 0),
(46, 97, 'อ.มนเทียรม, อ.ชุติมาพร', '2013-12-09', '0000-00-00', 0, 4, 3, '', '', '', '', 0),
(50, 76, 'อ.ชุติมาพร', '2014-03-06', '2016-01-04', 0, 4, 3, 'Fixed appliance', '14650738_809676195802332_3450461126110528049_n.jpg', '14691138_809676182469000_4026168360789918002_n.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dentalprocedure`
--

CREATE TABLE `tb_dentalprocedure` (
  `id_dentalprocedure` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `tooth` varchar(60) COLLATE utf16_bin NOT NULL,
  `dental` varchar(60) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `fileupload1` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload2` varchar(100) COLLATE utf16_bin NOT NULL,
  `fileupload3` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_dentalprocedure`
--

INSERT INTO `tb_dentalprocedure` (`id_dentalprocedure`, `id_history_patient`, `tooth`, `dental`, `begin_date`, `tool`, `fileupload1`, `fileupload2`, `fileupload3`) VALUES
(1, 23, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2013-02-06', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-13 21:21:13.png'),
(2, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2016-09-07', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 11:58:51.png'),
(5, 21, 'Tooth', 'ทพญ.กาญจนา ด่านภักดี', '2014-02-05', 'ครื่องมือที่ใช้', 'Screenshot from 2016-09-13 21:21:13.png', 'Screenshot from 2016-09-11 23:34:40.png', 'Screenshot from 2016-09-11 23:19:32.png'),
(6, 21, '', '5555555', '0000-00-00', '', '', '', ''),
(7, 21, '', '88888', '0000-00-00', '', '', '', ''),
(8, 33, '22', '', '2004-11-11', '', '', '', ''),
(9, 37, '21', '', '0000-00-00', '', '', '', ''),
(10, 42, '', 'jgh', '0000-00-00', '', '', '', ''),
(11, 74, '24', 'อ.ภาณุพงษ์', '2014-09-10', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `result_analysis` text COLLATE utf8mb4_bin NOT NULL,
  `facialcleft` int(2) NOT NULL,
  `otherfacialcleft` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_history_patient`, `result_analysis`, `facialcleft`, `otherfacialcleft`) VALUES
(1, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(2, 21, 'Bilateral cleft lip with alveolus', 2, 'ระบุ Facial cleft'),
(3, 21, 'Complete hard palate cleft', 2, 'ระบุ Facial cleft'),
(4, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(6, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(7, 21, 'Bilateral cleft lip', 2, 'ระบุ Facial cleft'),
(9, 21, '', 0, ''),
(10, 21, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 0, ''),
(11, 23, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(12, 24, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(13, 25, 'Complete left unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(14, 26, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(15, 27, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(16, 28, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(17, 29, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(18, 30, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(19, 31, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(20, 33, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(21, 34, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(22, 35, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(23, 36, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(24, 37, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(25, 38, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(26, 39, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(27, 40, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(28, 42, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(29, 42, '', 0, ''),
(30, 49, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(31, 50, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(32, 51, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(33, 52, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 2, 'craniofacial syndrome'),
(34, 52, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 2, 'craniofacial syndrome'),
(35, 53, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, 'craniofacial syndrome'),
(36, 54, 'Complete left unilateral cleft lip with alveolus and  complete hard palate cleft', 1, ''),
(37, 55, 'Complete left unilateral cleft lip with alveolus and  complete hard palate cleft', 1, ''),
(38, 57, 'Complete Bilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(39, 58, 'Complete right unilateral cleft lip with alveolus and complete hard palate cleft', 1, ''),
(40, 59, 'Complete left unilateral cleft lip with alveolus and  complete hard palate cleft', 1, ''),
(41, 60, 'Complete left unilateral cleft lip with alveolus and  complete hard palate cleft', 1, ''),
(42, 61, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(43, 62, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(44, 63, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(45, 64, 'Complete Bilateral cleft lip with alveolus and complete  cleft', 1, ''),
(46, 64, 'Complete Bilateral cleft lip with alveolus and complete  cleft', 1, ''),
(47, 65, '', 1, ''),
(48, 66, '', 1, ''),
(49, 67, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(50, 68, 'Complete Bilateral cleft lip with alveolus and complete  cleft', 1, ''),
(51, 69, '', 1, ''),
(52, 70, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(53, 71, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(54, 72, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(55, 73, '', 1, ''),
(56, 74, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(57, 75, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(58, 76, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(59, 78, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(60, 79, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(61, 95, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(62, 96, 'Complete left unilateral cleft lip with alveolus and  complete  cleft', 1, ''),
(63, 97, 'Complete right unilateral cleft lip with alveolus and complete  cleft', 1, ''),
(64, 98, 'Complete right unilateral cleft lip with alveolus and complete  cleft palate', 1, ''),
(65, 100, 'Complete right unilateral cleft lip with alveolus and complete  cleft palate', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_distraction`
--

CREATE TABLE `tb_distraction` (
  `id_distraction` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(70) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `technic` int(5) NOT NULL,
  `othertechnic` varchar(50) COLLATE utf16_bin NOT NULL,
  `mandible` int(10) NOT NULL,
  `othermandible` text COLLATE utf16_bin NOT NULL,
  `tool` varchar(80) COLLATE utf16_bin NOT NULL,
  `file1` varchar(80) COLLATE utf16_bin NOT NULL,
  `file2` varchar(80) COLLATE utf16_bin NOT NULL,
  `file3` varchar(80) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_distraction`
--

INSERT INTO `tb_distraction` (`id_distraction`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`) VALUES
(5, 21, 'ทพญ.กาญจนา ด่านภักดี', '2011-02-08', '2014-02-05', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', 'Screenshot from 2016-09-03 21:24:31.png', 'Screenshot from 2016-09-10 13:15:24.png', 'Screenshot from 2016-09-11 23:41:50.png'),
(6, 21, '5555555555', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', ''),
(7, 23, '', '2015-04-09', '0000-00-00', 1, 4, 0, 1, '1 Jaw', 1, '', 'Internal distraction', '', '', ''),
(8, 25, '', '2014-12-09', '2015-03-24', 1, 4, 0, 1, '', 1, '', '', '', '', ''),
(9, 26, 'อ.ภัทรมน', '2016-07-12', '2016-09-25', 1, 4, 3, 1, 'Maxillary distraction osteogenesis', 1, '', '', '', '', ''),
(10, 72, 'นพ.ธนศักดิ์', '2011-07-27', '2011-12-20', 1, 4, 3, 1, 'Lefort I', 0, '', 'Internal distraction maxilla', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `id_doctor` int(5) NOT NULL,
  `doctor_detail` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`id_doctor`, `doctor_detail`) VALUES
(1, 'อ.ชุติมาพร'),
(2, 'อ.มนเทียร'),
(3, 'อ.พูนศักดิ์'),
(4, 'อ.ทัศนีย์'),
(5, 'อ.อมรรัตน์'),
(6, 'อ.เอกสิทธิ์'),
(7, 'อ.ณัฐวีร์'),
(8, 'อ.สมศักดิ์'),
(9, 'อ.สุปราณี'),
(10, 'อ.ธิติวัฒน์');

-- --------------------------------------------------------

--
-- Table structure for table `tb_growth`
--

CREATE TABLE `tb_growth` (
  `id_growth` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(60) COLLATE utf32_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `goslon` int(10) NOT NULL,
  `incisor` int(10) NOT NULL,
  `skeletal` int(10) NOT NULL,
  `typetool` int(10) NOT NULL,
  `other_typetool` text COLLATE utf32_bin NOT NULL,
  `appliance` int(10) NOT NULL,
  `other_appliance` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename1` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename2` varchar(60) COLLATE utf32_bin NOT NULL,
  `filename3` varchar(60) COLLATE utf32_bin NOT NULL,
  `dentalcast` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `tb_growth`
--

INSERT INTO `tb_growth` (`id_growth`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeletal`, `typetool`, `other_typetool`, `appliance`, `other_appliance`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(4, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(5, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(6, 21, 'นพ.รณชัย ทองภูมิ', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 'Facial mask     ระบุ', 1, 'Functional appliance', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(7, 21, '45218', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', 0),
(8, 34, 'อ.พูนศักดิ์', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 1, 'RME', '', '', '', 1),
(9, 35, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 1, 3, 1, '', 1, '', '', '', '', 1),
(10, 55, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 1, 0, 0, '', 1, 'REM+fixed', '', '', '', 0),
(11, 61, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(12, 61, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(13, 65, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 1, 'Rapid maxillary expansion', '', '', '', 0),
(14, 67, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(15, 74, 'อ.ชุคิมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(16, 75, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(17, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 1, 4, 3, 1, '', 0, '', '', '', '', 0),
(18, 79, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 4, 3, 1, '', 0, '', '', '', '', 0),
(19, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 4, 3, 1, '', 0, '', 'retainer.jpg', 'retainer.jpg', 'retainer.jpg', 0),
(20, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 0, '', '', '', '', 0),
(21, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 0, '', 'retainer.jpg', 'retainer.jpg', 'retainer.jpg', 0),
(22, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 0, 3, 1, '', 0, '', '', '', '', 0),
(23, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 4, 3, 1, '', 0, '', '', '', '', 0),
(24, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 4, 3, 1, '', 0, '', '', '', '', 0),
(25, 76, 'อ.ชุติมาพร', '0000-00-00', '0000-00-00', 0, 4, 3, 1, '', 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_patient`
--

CREATE TABLE `tb_history_patient` (
  `id_history_patient` int(11) NOT NULL,
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
  `otherevertreat` text NOT NULL,
  `treatmentfacility` varchar(60) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `developmentallevel` int(10) NOT NULL,
  `otherdevelopmentallevel` text NOT NULL,
  `daterecord` date NOT NULL,
  `id_user` int(5) NOT NULL,
  `sex` int(2) NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_history_patient`
--

INSERT INTO `tb_history_patient` (`id_history_patient`, `HN`, `DN`, `othnumber`, `CN`, `seriesnumber`, `firstname`, `lastname`, `filename`, `birthdate`, `address`, `nationality`, `race`, `religion`, `namefather`, `fatherlastname`, `career`, `birthdatefahter`, `age1`, `disease`, `mothername`, `motherlastname`, `mothercareer`, `birthdatemother`, `age2`, `diseasemother`, `spousename`, `spouselastname`, `benefits`, `otherbenefits`, `numberbenefits`, `evertreat`, `otherevertreat`, `treatmentfacility`, `doctor`, `developmentallevel`, `otherdevelopmentallevel`, `daterecord`, `id_user`, `sex`, `tel`) VALUES
(51, 'EB2937', '421013', 'C41/42', 'D10-2009-01233', '1102001968211', 'ณัฐพล', 'แพ่งศรีสาร', '', '1993-07-30', '106 ม.1 ต.หนองเสาเล้า อ.ชุมแพ จ.ขอนแก่น', 'ไทย', 'ไทย', 'พุทธ', 'พิทยาสรรน์', 'แพ่งศรีสาร', 'รับราชการ', '0000-00-00', 0, '', 'เนตรนภา', 'แพ่งศรีสาร', 'แม่บ้าน', '0000-00-00', 0, '', '', '', 0, '', '', '3', 'รพ.ศิริราช', 'รพ.ศิริราช', '1', 1, '', '2016-10-12', 0, 1, '083-1517171'),
(52, 'C32156', '562663', 'C32/56', 'D10-2009-00155', '1419902277904', 'พัชรพล', 'พรมมี', '', '2005-03-28', '67/2 ร้านเสริมสวยบูมบูม ซ.คุ้มสร้างแก้ว ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000', 'ไทย', 'ไทย', 'พุทธ', 'สุรเดช', 'พรมมี', 'ธุรกิจส่วนตัว', '0000-00-00', 0, '', 'รุ่งนิรัตน์', 'พรมโคตร', 'ช่างเสริมสวย', '0000-00-00', 0, '', '', '', 2, '', 'ท7124033271', '3', 'รพ.ศูนย์อุดรธานี', 'รพ.ศูนย์อุดรธานี', '1', 1, '', '2016-10-12', 0, 1, ''),
(53, 'EW4998', '433187', 'C1/43', 'D10-2008-01143', '1459900768331', 'จิตยากร', 'กางแก้ว', '', '1999-09-03', '51 ม.10 ต.โหรา อ.อาจสามารถ จ.ร้อยเอ็ด 45160', 'ไทย', 'ไทย', 'พุทธ', 'ทองดี', 'กางแก้ว', 'รับจ้างขับรถ', '0000-00-00', 0, '', 'สุพรรษา', 'กางแก้ว', '-', '0000-00-00', 0, '', '', '', 2, '', 'ท21339079', '3', 'รพ.ศรีนครินทร์', 'รพ.ศรีนครินทร์', '1', 0, '', '2016-10-12', 0, 2, '085-7536719, 081-9741558'),
(54, '', '572132', 'C15/57', 'D10-2014-05359', '1209702104676', 'ภัทรพล', 'แซ่โง้ว', '', '2003-05-16', '34 ม.4 ต.ปทุมวาปี อ.ส่องดาว จ.สกลนคร 47190', 'ไทย', 'ไทย', 'พุทธ', 'จักรพล', 'แซ่โง้ว', 'ทำงานโรงงาน', '0000-00-00', 0, '', 'ณัฐพิมล', 'กัลยา', 'ทำงานโรงงาน', '0000-00-00', 0, '', '', '', 2, '', 'ท7111793027', '', '', '', '1', 0, '', '2016-10-12', 0, 1, '091-8674485, 089-5504908'),
(55, '', '471930', 'C30/47', 'D10-2009-00365', '1219900511391', 'พิสิทธิ์', 'หิรัญยศเลิศกุล', '', '1995-10-03', '105 ม.11 บ.หมากก่อง ต.บ้านเดื่อ อ.เมือง จ.หนองคาย 43000', 'ไทย', 'ไทย', 'พุทธ', 'สมชาย', '', '', '0000-00-00', 0, '', 'ณัชชารีย์', '', 'ประกอบธุรกิจส่วนตัว', '0000-00-00', 0, '', '', '', 0, '', '', '3', '', 'รพ.ราชวิถี', '1', 0, '', '2016-10-12', 0, 1, '080-7134320'),
(57, '', '571323', 'C10/57', 'D10-2007-02689', '1409600408003', 'ปัญญา', 'ปีหมอก', '', '2006-05-12', '23 ม.10 ต.หนองไผ่ อ.ชุมแพ จ.ขอนแก่น 40130', '', '', '', 'ไม่ทราบชื่อ', '', '', '0000-00-00', 0, '', 'ศิริวิมล', 'ปีหมอก', 'รับจ้าง', '0000-00-00', 0, '', '', '', 0, '', '', '3', 'รพ.ศูนย์ของแก่น, รพ.ศรีนครินทร์', 'รพ.ศูนย์ของแก่น, รพ.ศรีนครินทร์', '1', 0, '', '2016-10-12', 0, 1, '093-7282812'),
(58, '', '460158', 'C22/46', 'D10-2007-19203', '1419901817778', 'อัครวัฒน์', 'ศรีเพ็ญชัย', '', '1998-12-30', '358/6 ม.14 ซ.เก่าจาน1 ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000', '', '', '', 'กิจจา', '', 'ค้าขาย', '0000-00-00', 0, '', 'ประภาภรณ์', '', 'ค้าขาย', '0000-00-00', 0, '', '', '', 5, 'ยิ้ิมสวยเสียงใส', 'R73410004278', '3', 'คลินิกอ.เมือง จ.อุดร', '', '1', 0, '', '2016-10-12', 0, 1, '093-4753443'),
(59, 'IE5605', '553224', 'C24/55', 'D10-2012-03390', '1478600071547', 'ชลลดา', 'เทวิญญา', '', '2004-10-01', '250 ม.16 ต.สว่างแดนดิน อ.สว่างแดนดิน จ.สกลนคร 47110', '', '', '', 'ณัฐกร', 'เทวิญญา', 'ทำสวน', '0000-00-00', 0, '', 'อำภา', 'เทวิญญา', 'ทำสวน', '0000-00-00', 0, '', '', '', 2, '', 'ท7119174754', '3', '', 'รพ.อุดรธานี, รพ.สกลนคร', '1', 0, '', '2016-10-12', 0, 2, '082-2857009'),
(60, '', '525239', 'C32/52', 'D10-2009-00893', '1329900611883', 'ตรีเพชร', 'ทรัพย์เจริญ', '', '1995-11-01', '30 ม.8 ต.ประทัดบุ อ.ปราสาท จ.สุรินทร์ 32140', 'ไทย', 'ไทย', 'พุทธ', 'ปรีชา', 'ทรัพย์เจริญ', 'รับจ้าง', '0000-00-00', 0, 'ภูมิแพ้', 'จุฑามณี', 'ทรัพย์เจริญ', 'รับจ้าง', '0000-00-00', 0, 'ธาลัสซีเมีย', '', '', 2, '', 'ท8977276879', '3', '', 'รพ.สุรินทร์', '1', 0, '', '2016-10-12', 0, 1, '098-1793486'),
(61, 'FB3144', '436691', 'C47/43', 'D10-2007-07687', '1409902967153', 'วีรชัย', 'คงแสง', '', '2000-09-30', '134 หมู่ 1 ต.กุดน้ำใส อ.น้ำพอง จ.ขอนแก่น 40310', 'ไทย', 'ไทย', 'พุทธ', 'สมชาย', 'คงแสง', 'ทำนา', '0000-00-00', 0, '', 'ทองใส', 'คงแสง', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท0005039370', '', '', '', '1', 0, '', '2016-10-16', 0, 1, '085-6053911,098-1805472'),
(62, 'IK0901', '562840', 'C50/56', 'D10-2013-04239', '1480500219715', 'อาทิตา', 'ต้นสวรรค์', '', '1997-11-28', '119 หมู่ 7 ต.กุดฉิม อ.ธาตุพนม จ.นครพนม 48110', 'ไทย', 'ไทย', 'พุทธ', 'ปราโมท', 'ต้นสวรรค์', 'ผู้ช่วยผู้ใหญ่บ้าน', '0000-00-00', 0, '', 'วันนิดา', 'ต้นสวรรค์', 'รับราขการ', '0000-00-00', 0, '', '', '', 2, '', '', '3', '', 'โรงพยาบาลนครพนม', '1', 0, '', '2016-10-16', 0, 2, '084-9533814,088-3214250'),
(63, '', '584587', 'C56/58', 'D10-2015-06476', '1360500191412', 'กนกวรรณ', 'จำรัสไว', '', '1993-01-15', '21 หมู่ 4 ตำบลถ้ำวัวแดง อ.หนองบัวแดง จ.ชัยภูมิ 36213', 'ไทย', 'ไทย', 'พุทธ', 'บุญเลิศ', 'จำรัสไว', '', '0000-00-00', 0, '', 'เขียว', 'เนืองหนองคู', '', '0000-00-00', 0, '', '', '', 2, '', '8998165165', '3', '', 'โรงพยาบาลศรีนครินทร์', '1', 0, '', '2016-10-16', 0, 2, '098-1589504'),
(64, 'GH1016', '516930', 'C12/49', 'D10-2008-00817', '1449400034371', 'ศักดา', 'ธิธรรม', '', '2006-04-07', '211 หมู่ 18 ต.เชียงยืน อ.เชียงยืน จ.มหาสารคาม 44160', 'ไทย', 'ไทย', 'พุทธ', 'ฐานัน', 'ธิธรรม', 'ซ่อมรถยนต์/รับจ้าง', '0000-00-00', 0, '', 'สุภาภรณ์', 'กลิ่นพยอม', 'ซ่อมรถยนต์/รับจ้าง', '0000-00-00', 0, '', '', '', 2, '', 'ท7134110539', '3', '', 'รพ.เชียงยืน,รพ.ศรีนครินทร์', '1', 0, '', '2016-10-16', 0, 1, '089-5722644,043-781717'),
(65, 'GR2718', '491742', 'C9/49', 'D10-2007-04468', '1449900825488', 'ณัฏฐนิชา', 'สายบัณฑิต', '', '2006-02-21', '33 หมู่ 12 ต.โคกพระ อ.กันทรวิชัย จ.มหาสารคาม 44150', 'ไทย', 'ไทย', 'พุทธ', 'พยุง', 'สายบัณฑิต', 'ธุรกิจส่วนตัว', '0000-00-00', 0, '', 'ศศิวิมล', 'สายบัณฑิต', 'ธุรกิจส่วนตัว', '0000-00-00', 0, '', '', '', 2, '', 'ท7134110464', '', '', '', '1', 0, '', '2016-10-16', 0, 2, '080-4118543,086-8982276'),
(66, '', '574843', 'C41/57', 'D10-2007-19585', '144960056735', 'ศุภชัย', 'ลุนหล้า', '', '2007-08-25', '99 หมู่ 1 ตำบลเหล่าบัวบาน อ.เชียงยืน จ.มหาสารคาม 44160', 'ไทย', 'ไทย', 'พุทธ', 'รณชัย', 'ลุนหล้า', 'ทำนา', '0000-00-00', 0, '', 'เตือนใจ', 'คูลาดพล', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'R71440019606', '', '', '', '1', 1, '', '2016-10-16', 0, 1, '082-0525132,091-3747015'),
(67, 'FR7553', '464586', 'C56/46', 'D10-2007-07657', '149900388881', 'ปานทิพย์', 'วิเศษศรี', '', '2003-06-14', '125 หมู่ 2 ต.หนองสูง อ.หนองสูง จ.มุกดาหาร 49160', 'ไทย', 'ไทย', 'พุทธ', 'อนุรักษ์', 'วิเศษศรี', 'ทำนา', '0000-00-00', 0, '', 'จงกล', 'วิเศษศรี', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท7300525873', '2', '', '', '1', 0, '', '2016-10-16', 0, 2, '086-0649038'),
(68, '', '532928', 'C59/49', 'D10-2007-08091', '1679000041999', 'พีรพัฒน์', 'ใจดี', '', '2003-11-27', '49 หมู่ 1 ต.บ้านม่วง อ.สังคม จ.หนองคาย 43160', 'ไทย', 'ไทย', 'พุทธ', 'จักรรินทร์', 'ใจดี', 'ทำไร่', '0000-00-00', 0, '', 'คำผอง', 'ใจดี', 'ทำไร่', '0000-00-00', 0, '', '', '', 2, '', 'ท7122092703', '3', 'Lip repair,palate repair', 'โรงพยาบาลศรีนครินทร์', '1', 0, '', '2016-10-16', 0, 1, '093-4652731'),
(69, '', '572201', 'C16/57', 'D10-2007-01537', '1429900602662', 'ชนม์ชนก', 'รัตนพลแสน', '', '2006-12-05', '287 หมู่ 10 ต.แวงน่าง อ.เมือง จ.มหาสารคาม 44000', 'ไทย', 'ไทย', 'พุทธ', 'สมบูรณ์', 'รัตนพลแสน', 'รับราชการ', '0000-00-00', 0, '', 'พิมพ์กานต์', 'รัตนพลแสน', 'ลูกจ้างส่วนราชการ', '0000-00-00', 0, '', '', '', 2, '', '', '3', 'Lip repair', 'โรงพยาบาลศรีนครินทร์', '1', 0, '', '2016-10-16', 0, 2, '086-4115668'),
(70, '', '538624', 'C3/54', 'D10-2011-02287', '1320701345221', 'จิตอารีย์', 'คำแพงศรี', '', '2000-01-04', '244/7 หมู่ 12 ต.รัตนบุรี อ.รัตนบุรี จ.สุรินทร์ 32130', 'ไทย', 'ไทย', 'พุทธ', 'เกียรติประวัติ', 'คำแพงศรี', 'ตำรวจ', '0000-00-00', 0, '', 'มะลิวัลย์', 'คำแพงศรี', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', '', '', '', '', '1', 0, '', '2016-10-16', 0, 2, '089-8492868,083-3641168'),
(71, 'IH7222', '559020', 'C75/55', 'D10-2013-02995', '1468900009049', 'อรุณรัตน์', 'เพ็ชรไชย', '', '2003-04-06', '55 หมู่ 10 ต.บ่อแก้ว อ.นาคู  จ.กาฬสินธุ์ 46160', 'ไทย', 'ไทย', 'พุทธ', 'จาตุรงค์', 'เพ็ชรไชย', 'ทำนา', '0000-00-00', 0, '', 'ช่อเอื้อง', 'เพ็ขรไชย', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท7100514378', '3', '', 'โรงพยาบาลเขาวง', '1', 0, '', '2016-10-16', 0, 1, '085-7428665'),
(72, '', '452054', 'C18/45', 'D10-2008-00592', '1409900414877', 'วัชราภรณ์', 'อรัญวาส', '', '1992-07-03', '62/1 หมู่ 9 ต.ท่าพระ อ.เมือง  จ.ขอนแก่น 40260', 'ไทย', 'ไทย', 'พุทธ', 'สรรเสริญ', 'อรัญวาส', 'ทำไร่ทำนา', '0000-00-00', 0, '', 'อุลัย', 'อรัญวาส', 'ทำไร่ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท7417509612', '3', '', 'โรงพยาบาลศูนย์ขอนแก่น', '1', 0, '', '2016-10-16', 0, 2, '082-7420643,084-7907588'),
(73, '', '451296', 'C10/45', 'D10-2007-10561', '', 'วันวิสา', 'เพ็งนรินทร์', '', '1985-11-11', 'ุ69 ถ.สัมพันธมิตร อ.เมือง จ.อุดรธานี 41000', 'ไทย', 'ไทย', 'พุทธ', 'สุพล', 'เพ็งนรินทร์', 'ค้าขาย', '0000-00-00', 0, '', 'จันทร์เพ็ญ', 'เพ็งนรินทร์', 'ค้าขาย', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '1', 0, '', '2016-10-16', 0, 2, ''),
(74, 'IT1921', '569034', 'C78/56', 'D10-2013-05012', '1439900455422', 'รินรดา', 'หารินไถล', '', '2003-09-10', '87 หมู่ 3 ต.บ้านฝาง อ.สระใคร จ.หนองคาย 43100', 'ไทย', 'ไทย', 'พุทธ', '', '', '', '0000-00-00', 0, '', 'บัวผัน', 'หารินไถล', 'รับจ้าง', '0000-00-00', 0, 'คอพอก', '', '', 2, '', 'ท7119718428', '3', 'Lip surgery,Palate surgery', 'รพ.จุฬาฯ', '1', 1, '', '2016-10-16', 0, 2, '081-7297431'),
(75, 'ER1906', '420607', 'C17/42', 'D10-2009-00450', '1119900684343', 'เจษรินทร์', 'เทพจั้ง', '', '1997-03-28', '136 ม.8 ต.บ้านไผ่ อ.บ้านไผ่ จ.ขอนแก่น 40110', 'ไทย', 'ไทย', 'พุทธ', 'อมรเทพ', 'เทพจั้ง', 'ทำนา', '0000-00-00', 0, '', 'อรวรรณ', 'เทพจั้ง', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท122054557', '3', 'lip and palate surgery', 'รพ.สมุทรปราการ', '1', 0, '', '2016-10-16', 0, 1, '086-2362834'),
(76, '', '461843', 'C46/46', 'D10-2009-00375', '2349900039197', 'ธนิพงษ์', 'เหมือนชาติ', '', '1996-05-26', '33 ซ.แจ้งสนิท3 ต.ในเมือง อ.เมือง จ.ยโสธร 35000', 'ไทย', 'ไทย', 'พุทธ', 'พงษ์ศิริ', 'เหมือนชาติ', 'ทนายความ', '0000-00-00', 0, '', 'อมรรัตน์', 'เหมือนชาติ', 'รับราชการ', '0000-00-00', 0, '', '', '', 3, '', '', '', '', '', '1', 0, '', '2016-10-16', 0, 1, '081-8787567'),
(77, '', '495630', 'C43/49', 'D10-2008-00611', '1100501370053', 'วิวัฒน์', 'บุญผิว', '', '1996-12-13', '62 ม.1 ต.ภูเวียง อ.ภูเวียง จ.ขอนแก่น 40150', 'ไทย', 'ไทย', 'พุทธ', 'วินัย', 'บุญผิว', 'ทำไร่', '0000-00-00', 0, '', 'ไม่ทราบ', '', 'ทำงานโรงงาน-รับจ้างทั่วไป', '0000-00-00', 0, '', '', '', 2, '', 'ท10118467', '3', '', 'รพ.ศูนย์ขอนแก่น', '1', 0, '', '2016-10-16', 0, 1, '086-1361834'),
(79, 'HG3004', '520928', 'C8/52', 'D10-2009-00391', '1419901931988', 'สุปัญญา', 'บุสุวะ', 'Screen Shot 2559-10-09 at 9.58.05 PM.png', '2000-07-07', '8/1 ม.5 ต.หนองขอนกว้าง อ.เมือง จ.อุดรธานี 41000', 'ไทย', 'ไทย', 'พุทธ', 'พรชัย', 'บุสุวะ', 'ทำนา', '0000-00-00', 0, '', 'วาสนา', 'บุสุวะ', 'ทำนา/ค้าขาย', '0000-00-00', 0, 'โลหิตจาง', '', '', 2, '', 'ท0026830477', '3', '', 'รพ.อุดรธานี', '1', 1, '', '2016-10-18', 0, 1, '083-5999120'),
(95, '', '511505', 'C24/51', 'D10-2008-00637', '1409900916411', 'ปณิตา', 'คำอ้อ', '', '1992-07-13', '48 ม.3 ต.หนองกุง อ.น้ำพอง จ.ขอนแก่น 40140', 'ไทย', 'ไทย', 'พุทธ', 'พงษ์ศักดิ์', 'คำอ้อ', 'ก่อสร้าง', '0000-00-00', 0, '', 'ศรีวิไล', 'ดำอ้อ', 'ทำนา', '0000-00-00', 0, '', '', '', 2, '', 'ท8248520060', '', '', '', '1', 1, '', '2016-10-18', 0, 2, '098-1036644, 086-0976646'),
(96, 'FY9551', '487042', 'C62/48', 'D10-2007-19254', '1449900759782', 'วุฒิชัย', 'ลาโพธิ์', '', '2004-08-17', '61 ม.10 ต.เมืองทอง อ.เมือง จ.ร้อยเอ็ด', 'ไทย', 'ไทย', 'พุทธ', 'สุวิทย์', 'ลาโพธิ์', 'รับจ้าง', '0000-00-00', 0, '', 'ยวนใจ', 'ไหลหาโคตร', 'รับจ้าง', '0000-00-00', 0, '', '', '', 2, '', 'ท7136696919', '3', 'lip and palate repair', 'รพ.ศรีนครินทร์', '1', 0, '', '2016-10-18', 0, 1, '087-0524256'),
(98, '', '565940', 'C60/56', 'D10-2013-04544', '1400600187114', 'สุวรรณี', 'หนันมาก', '', '1997-06-14', '189 ม.3 ต.วังเพิ่ม อ.สีชมพู จ.ขอนแก่น 40000', 'ไทย', 'ไทย', 'พุทธ', 'ปรีชา', 'สีมาวงษ์', '', '0000-00-00', 0, '', 'ถาวร', 'อนันมาก', '', '0000-00-00', 0, '', '', '', 5, 'บัตรคนพิการ', '', '', '', '', '1', 0, '', '2016-10-18', 0, 2, '093-4373235');

-- --------------------------------------------------------

--
-- Table structure for table `tb_interceptive`
--

CREATE TABLE `tb_interceptive` (
  `id_interceptive` int(11) NOT NULL,
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
  `procedure_detail` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_interceptive`
--

INSERT INTO `tb_interceptive` (`id_interceptive`, `id_history_patient`, `doctor`, `begin_date`, `end_date`, `goslon`, `incisor`, `skeleta`, `filename1`, `filename2`, `filename3`, `dentalcast`, `procedure_detail`) VALUES
(44, 21, 'พญ.กานดา สิทธิ', '2013-02-05', '2013-02-20', 4, 2, 2, '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 1, ''),
(45, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0, ''),
(46, 21, '888', '0000-00-00', '0000-00-00', 1, 0, 0, '', '', '', 0, ''),
(47, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(48, 35, 'อ.ชุติมาพร', '2016-09-26', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(49, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(50, 35, 'อ.ชุติมาพร', '2011-11-15', '2014-06-17', 1, 0, 0, '', '', '', 1, ''),
(51, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1, ''),
(52, 37, 'อ.พูนศักดิ์', '2011-03-30', '0000-00-00', 1, 3, 0, '', '', '', 1, ''),
(53, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1, ''),
(54, 40, 'อ.มนเฑียร', '2007-06-15', '0000-00-00', 1, 4, 3, '', '', '', 1, ''),
(55, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(56, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(57, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(58, 0, 'อ.ชุติมาพร', '2002-08-26', '2004-01-07', 1, 0, 0, '', '', '', 0, ''),
(59, 79, 'อ.ชุติมาพร', '2009-11-01', '2014-06-17', 0, 4, 3, '', '', '', 0, ''),
(60, 79, 'อ.ชุติมาพร', '2009-11-01', '2014-06-17', 0, 4, 3, '', '', '', 0, ''),
(61, 96, 'อ.ชุติมาพร', '2012-10-12', '0000-00-00', 0, 0, 0, '', '', '', 0, 'ใส่ lower posterior bite plane'),
(62, 96, 'อ.ชุติมาพร', '2012-10-12', '0000-00-00', 0, 0, 0, '', '', '', 0, 'ใส่ lower posterior bite plane'),
(63, 97, 'อ.ชุติมาพร', '2014-02-11', '0000-00-00', 0, 4, 3, '', '', '', 0, ''),
(64, 97, 'อ.ชุติมาพร', '2014-02-11', '0000-00-00', 0, 4, 3, '', '', '', 0, ''),
(65, 98, 'อ.ชุติมาพร', '2014-02-11', '0000-00-00', 0, 4, 3, '', '', '', 0, ''),
(66, 98, 'อ.ชุติมาพร', '2014-02-11', '0000-00-00', 0, 4, 3, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orthognathic`
--

CREATE TABLE `tb_orthognathic` (
  `id_orthognathic` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` text COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `goslon` int(5) NOT NULL,
  `incisor` int(5) NOT NULL,
  `skeletal` int(5) NOT NULL,
  `technic` int(5) NOT NULL,
  `othertechnic` text COLLATE utf16_bin NOT NULL,
  `mandible` int(5) NOT NULL,
  `othermandible` text COLLATE utf16_bin NOT NULL,
  `tool` text COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `file2` text COLLATE utf16_bin NOT NULL,
  `file3` text COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_orthognathic`
--

INSERT INTO `tb_orthognathic` (`id_orthognathic`, `id_history_patient`, `doctor`, `begin_date`, `goslon`, `incisor`, `skeletal`, `technic`, `othertechnic`, `mandible`, `othermandible`, `tool`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(8, 21, 'พญ.กันยากร โนนสูง', '2014-02-04', 4, 3, 1, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'ชนิดเครื่องมือ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(9, 21, '141111', '0000-00-00', 1, 1, 0, 0, '', 0, '', '', '', '', '', 0),
(10, 21, 'ดดดดดดดดดดดด', '2016-09-07', 5, 3, 2, 1, 'Maxilla ระบุ', 1, 'Mandible ระบุ', 'นิดเครื่องมือ', '648498.jpg', '648502.jpg', '648588.jpg', 1),
(11, 28, 'รพ.ศูนย์ขอนแก่น', '2016-02-10', 1, 4, 3, 0, '', 1, 'mandibular set back+rotation', '', '', '', '', 1),
(12, 33, '', '2007-06-18', 1, 1, 0, 1, '', 1, '', '', '', '', '', 1),
(13, 42, 'อ.สุภาพร', '2015-08-28', 1, 4, 3, 1, 'Le fort I osteotomy', 1, 'BSSRO set back', '', '', '', '', 0),
(14, 55, 'อ.ศิริพงษ์', '2015-09-25', 1, 4, 3, 0, '', 0, '', '', '', '', '', 0),
(15, 60, 'อ.ศิริพงษ์', '2015-08-28', 1, 4, 3, 1, 'Le fort I osteotomy', 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_othersurgery`
--

CREATE TABLE `tb_othersurgery` (
  `id_othersurgery` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `id_tab` int(5) NOT NULL,
  `doctor` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `tool` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename1` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename2` varchar(100) COLLATE utf16_bin NOT NULL,
  `filename3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_othersurgery`
--

INSERT INTO `tb_othersurgery` (`id_othersurgery`, `id_history_patient`, `id_tab`, `doctor`, `begin_date`, `tool`, `filename1`, `filename2`, `filename3`, `dentalcast`) VALUES
(1, 21, 1, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-11 23:19:32.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-08 10:35:51.png', 1),
(5, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(6, 21, 5, 'พญ.กาญจนา ด่านภักดี', '2014-02-05', 'กรรไกร', 'Screenshot from 2016-09-10 13:15:58.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-11 23:34:40.png', 2),
(7, 21, 6, 'พญ.กาญจนา ด่านภักดี', '2014-02-11', 'กรรไกร', 'Screenshot from 2016-09-08 11:58:51.png', 'Screenshot from 2016-09-11 23:41:50.png', 'Screenshot from 2016-09-10 13:15:58.png', 2),
(8, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', 'usa.jpg', 1),
(9, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2013-02-06', 'เครื่องมือที่ใช้', '629255.jpg', 'logo-tawanchai.png', '629415.jpg', 2),
(13, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(14, 21, 1, 'ทันตแพทย์ผู้ทำการรักษา', '2012-02-15', 'เครื่องมือที่ใช้', '$_35.JPG', '12190112484.gif', 'TAT-Logo_500x300.jpg', 1),
(17, 21, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2012-02-14', 'กรรไกร', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(18, 21, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-04', 'กรรไกร', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', '632244.jpg', 1),
(19, 21, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-04', 'กรรไกร', '632244.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(21, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 1),
(22, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 2),
(23, 21, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-18', 'กรรไกร', '632241.jpg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(24, 23, 1, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-05', 'กรรไกร', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(27, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 1),
(28, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 2),
(29, 21, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-03', 'กรรไกร', '632243.jpg', 'a9d49d30c30d297df9478e0bbeacc259.jpeg', 'ce30ed7a38cd09f913289cc59a99d54a.jpeg', 1),
(30, 21, 1, '1452', '0000-00-00', '', '', '', '', 0),
(31, 21, 1, '85964', '0000-00-00', '', '', '', '', 0),
(32, 21, 1, '85964', '0000-00-00', '', '', '', '', 0),
(33, 21, 1, '748521', '0000-00-00', '', '', '', '', 0),
(34, 21, 2, '78541', '0000-00-00', '', '', '', '', 0),
(35, 21, 2, '874521', '0000-00-00', '', '', '', '', 0),
(36, 21, 3, '77777', '0000-00-00', '', '', '', '', 0),
(37, 21, 4, '785412', '0000-00-00', '', '', '', '', 0),
(38, 21, 5, '452178', '0000-00-00', '', '', '', '', 0),
(39, 21, 6, '4788510000', '0000-00-00', '', '', '', '', 0),
(40, 28, 2, '', '2008-12-23', '', '', '', '', 0),
(41, 28, 4, '', '2007-05-24', '', '', '', '', 0),
(42, 34, 6, '', '0000-00-00', '', '', '', '', 0),
(43, 23, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-11', '', '', '', '', 1),
(46, 23, 2, '', '2014-11-02', '', '', '', '', 1),
(47, 23, 1, 'นพ.นพคุณ ดวงจินทร์ดา', '2012-03-08', '', '', '', '', 1),
(48, 23, 2, 'นพ.นพคุณ ดวงจินทร์ดา', '2010-03-10', '', '', '', '', 1),
(49, 23, 3, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-11', '', '', '', '', 1),
(50, 23, 4, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-11', '', '', '', '', 1),
(51, 23, 5, 'นพ.นพคุณ ดวงจินทร์ดา', '2014-02-05', '', '', '', '', 1),
(52, 23, 6, 'นพ.นพคุณ ดวงจินทร์ดา', '2015-02-04', '', '', '', '', 1),
(53, 42, 1, '', '2005-10-05', '', '', '', '', 0),
(54, 54, 6, 'อ.สุภาพร', '2016-08-22', '', '', '', '', 0),
(55, 55, 5, 'อ.ศิริพงษ์', '2005-10-01', '', '', '', '', 0),
(56, 58, 5, 'อ.วรัญญู', '2004-02-13', '', '', '', '', 0),
(57, 62, 5, 'อ.สุภาพร', '2014-02-18', '', '', '', '', 0),
(58, 68, 2, 'อ.ศิริพงศ์', '2014-10-21', '', '', '', '', 0),
(59, 68, 6, 'อ.สุปรียา', '2015-09-14', '', '', '', '', 0),
(60, 74, 1, 'อ.สุปรียา', '2015-05-21', '', '', '', '', 0),
(61, 76, 2, 'อ.อมรเทพ/อ.ภัทรมน', '2009-12-04', '', '', '', '', 0),
(62, 77, 2, 'รพ.ศูนย์ขอนแก่น', '2008-05-01', '', '', '', '', 0),
(63, 76, 1, '', '0000-00-00', '', 'retainer.jpg', 'retainer.jpg', 'retainer.jpg', 0),
(65, 76, 2, '', '2009-04-12', '', 'retainer.jpg', 'retainer.jpg', 'retainer.jpg', 0),
(66, 76, 2, 'อ.ภัทรมน, อ.อมรเทพ', '2009-12-04', '', 'retainer.jpg', 'retainer.jpg', 'retainer.jpg', 0),
(67, 76, 2, 'อ.ภัทรมน, อ.อมรเทพ', '2009-04-02', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prosthodontic`
--

CREATE TABLE `tb_prosthodontic` (
  `id_prosthodontic` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `dental` varchar(100) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `appliance` int(5) NOT NULL,
  `otherappliance` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` varchar(100) COLLATE utf16_bin NOT NULL,
  `file2` varchar(100) COLLATE utf16_bin NOT NULL,
  `file3` varchar(100) COLLATE utf16_bin NOT NULL,
  `dentalcast` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_prosthodontic`
--

INSERT INTO `tb_prosthodontic` (`id_prosthodontic`, `id_history_patient`, `dental`, `begin_date`, `appliance`, `otherappliance`, `file1`, `file2`, `file3`, `dentalcast`) VALUES
(10, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(11, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(12, 21, 'พญ.กาญจนา ด่านภักดี', '2013-02-06', 7, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 2),
(13, 21, '412587', '0000-00-00', 1, '', '', '', '', 0),
(14, 21, '748521', '0000-00-00', 1, '', '', '', '', 0),
(15, 23, '', '0000-00-00', 7, 'Pontic22อยู่ในretainer', '', '', '', 1),
(16, 60, 'อ.ดนัย', '2014-04-21', 2, '', '', '', '', 0),
(17, 61, 'อ.จุติพร', '2013-12-13', 7, '', '', '', '', 0),
(18, 61, 'อ.จุติพร', '2013-12-13', 2, '', '', '', '', 0),
(19, 61, 'อ.จุติพร', '2013-12-13', 7, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_psot`
--

CREATE TABLE `tb_psot` (
  `id_psot` int(11) NOT NULL,
  `id_history_patient` int(11) NOT NULL,
  `doctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `joindoctor` varchar(50) COLLATE utf16_bin NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `procedure` int(5) NOT NULL,
  `nasal` int(5) NOT NULL,
  `alveolar` int(5) NOT NULL,
  `simple` int(5) NOT NULL,
  `other_procedure` int(5) NOT NULL,
  `otherprocedure` varchar(100) COLLATE utf16_bin NOT NULL,
  `file1` text COLLATE utf16_bin NOT NULL,
  `file2` text COLLATE utf16_bin NOT NULL,
  `file3` text COLLATE utf16_bin NOT NULL,
  `cast` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tb_psot`
--

INSERT INTO `tb_psot` (`id_psot`, `id_history_patient`, `doctor`, `joindoctor`, `begin_date`, `end_date`, `procedure`, `nasal`, `alveolar`, `simple`, `other_procedure`, `otherprocedure`, `file1`, `file2`, `file3`, `cast`) VALUES
(5, 21, 'นพ.ปราโมทย์  คำชะนินท์', 'พญ.อินทญา  คำชะนินท์', '2014-02-04', '2014-02-05', 5, 0, 0, 0, 0, 'ระบุ', '01af9f16c80633d5c7f66ac3416df666.jpeg', '43c673bfbdb9648cdb1fc35d73789100.jpeg', '632241.jpg', 1),
(6, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', 0),
(7, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', 0),
(8, 21, '2541', '8596', '2016-09-07', '2016-09-28', 0, 1, 1, 1, 1, '', '648498.jpg', '648501.jpg', '648588.jpg', 1),
(9, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 1, 1, 1, 1, '', '', '', '', 1),
(10, 21, '2541', '8596', '0000-00-00', '0000-00-00', 0, 1, 1, 1, 1, '', '', '', '', 1),
(11, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(12, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(13, 21, '2541', '8596', '0000-00-00', '0000-00-00', 1, 1, 1, 1, 1, '', '', '', '', 1),
(14, 21, '85', '95', '2015-02-04', '2014-02-12', 1, 1, 1, 1, 1, '', '', '', '', 1),
(15, 21, '85', '95', '2016-09-01', '2016-09-16', 1, 1, 1, 1, 1, '5.อื่นๆ', 'IMG_2283.JPG', 'IMG_2287.JPG', '04200-2011410121158.jpg', 1),
(16, 21, '85', '95', '2016-09-01', '2016-09-16', 1, 1, 1, 1, 1, '5.อื่นๆ', 'IMG_2283.JPG', 'IMG_2287.JPG', '04200-2011410121158.jpg', 1),
(17, 21, '85', '95', '2016-09-01', '2016-09-29', 1, 1, 1, 1, 1, '5.อื่นๆ', '', '', '', 1),
(18, 24, 'อัจฉริยาพร', 'อ.มนเฑียร', '2015-06-25', '2016-05-17', 0, 0, 0, 0, 0, '', '', '', '', 1),
(19, 27, 'อ.พูนศักดิ์', 'โอภาส', '2013-05-07', '2014-04-22', 0, 0, 0, 0, 0, '', '', '', '', 1),
(20, 29, 'โอภาส', 'อ.พูนศักดิ์', '2013-05-07', '2014-04-22', 1, 1, 1, 1, 0, '', '', '', '', 1),
(21, 31, 'อ.พูนศักดิ์', '', '2015-06-18', '2014-04-22', 1, 1, 1, 1, 0, '', '', '', '', 1),
(22, 34, 'อ.สมศักดิ์', '', '2011-07-07', '0000-00-00', 1, 0, 0, 1, 0, '', '', '', '', 1),
(23, 36, 'รพ.ศรีนครินทร์', '', '2002-09-20', '0000-00-00', 0, 0, 0, 1, 0, '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bonegraft`
--
ALTER TABLE `tb_bonegraft`
  ADD PRIMARY KEY (`id_bonegraft`);

--
-- Indexes for table `tb_corrective`
--
ALTER TABLE `tb_corrective`
  ADD PRIMARY KEY (`id_corrective`);

--
-- Indexes for table `tb_dentalprocedure`
--
ALTER TABLE `tb_dentalprocedure`
  ADD PRIMARY KEY (`id_dentalprocedure`);

--
-- Indexes for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `tb_distraction`
--
ALTER TABLE `tb_distraction`
  ADD PRIMARY KEY (`id_distraction`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indexes for table `tb_growth`
--
ALTER TABLE `tb_growth`
  ADD PRIMARY KEY (`id_growth`);

--
-- Indexes for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  ADD PRIMARY KEY (`id_history_patient`);

--
-- Indexes for table `tb_interceptive`
--
ALTER TABLE `tb_interceptive`
  ADD PRIMARY KEY (`id_interceptive`);

--
-- Indexes for table `tb_orthognathic`
--
ALTER TABLE `tb_orthognathic`
  ADD PRIMARY KEY (`id_orthognathic`);

--
-- Indexes for table `tb_othersurgery`
--
ALTER TABLE `tb_othersurgery`
  ADD PRIMARY KEY (`id_othersurgery`);

--
-- Indexes for table `tb_prosthodontic`
--
ALTER TABLE `tb_prosthodontic`
  ADD PRIMARY KEY (`id_prosthodontic`);

--
-- Indexes for table `tb_psot`
--
ALTER TABLE `tb_psot`
  ADD PRIMARY KEY (`id_psot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bonegraft`
--
ALTER TABLE `tb_bonegraft`
  MODIFY `id_bonegraft` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tb_corrective`
--
ALTER TABLE `tb_corrective`
  MODIFY `id_corrective` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tb_dentalprocedure`
--
ALTER TABLE `tb_dentalprocedure`
  MODIFY `id_dentalprocedure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tb_distraction`
--
ALTER TABLE `tb_distraction`
  MODIFY `id_distraction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `id_doctor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_growth`
--
ALTER TABLE `tb_growth`
  MODIFY `id_growth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_history_patient`
--
ALTER TABLE `tb_history_patient`
  MODIFY `id_history_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `tb_interceptive`
--
ALTER TABLE `tb_interceptive`
  MODIFY `id_interceptive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tb_orthognathic`
--
ALTER TABLE `tb_orthognathic`
  MODIFY `id_orthognathic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_othersurgery`
--
ALTER TABLE `tb_othersurgery`
  MODIFY `id_othersurgery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tb_prosthodontic`
--
ALTER TABLE `tb_prosthodontic`
  MODIFY `id_prosthodontic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_psot`
--
ALTER TABLE `tb_psot`
  MODIFY `id_psot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
