-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2019 at 06:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videolink`
--

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

DROP TABLE IF EXISTS `english`;
CREATE TABLE IF NOT EXISTS `english` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sets` varchar(100) NOT NULL,
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `link3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `sets`, `link1`, `link2`, `link3`) VALUES
(1, 'set1', 'https://www.youtube.com/embed/N-ka2vzQuWk', 'https://www.youtube.com/embed/N-ka2vzQuWk', ''),
(2, 'set2', 'https://www.youtube.com/embed/hNheC7lvgVQ', '', ''),
(3, 'set3', 'https://www.youtube.com/embed/cTWHSGEhk3o', 'https://www.youtube.com/embed/546MuzQYyUA', ''),
(4, 'set4', 'https://www.youtube.com/embed/a411UDFeboo', '', ''),
(5, 'set5', 'https://www.youtube.com/embed/qs_ocKHpZ10', '', ''),
(6, 'set6', 'https://www.youtube.com/embed/JXQMbUoNgvQ', '', ''),
(7, 'set7', 'https://www.youtube.com/embed/Oaa925OjH1A', '', ''),
(8, 'set8', 'https://www.youtube.com/embed/NPVpcXfh6Xo', '', ''),
(9, 'set9', 'https://www.youtube.com/embed/L2JaADcWegA', '', ''),
(10, 'set10', 'https://www.youtube.com/embed/Y_nnJyOsdBs', '', ''),
(11, 'set11', 'https://www.youtube.com/embed/ZluEsxntQ-8', '', ''),
(12, 'set12', 'https://www.youtube.com/embed/Grj96ia_HTU', 'https://www.youtube.com/embed/UsyKx40lRDM', ''),
(13, 'set13', 'https://www.youtube.com/embed/brWjz-cBrro', '', ''),
(14, 'set14', 'https://www.youtube.com/embed/8saAq057gbU', '', ''),
(15, 'set15', 'https://www.youtube.com/embed/OmRX2qD1QBw', 'https://www.youtube.com/embed/AlPitxpEbvE', '');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

DROP TABLE IF EXISTS `math`;
CREATE TABLE IF NOT EXISTS `math` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sets` varchar(100) NOT NULL,
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `link3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`id`, `sets`, `link1`, `link2`, `link3`) VALUES
(1, 'set1', 'https://www.youtube.com/embed/lJaikI1xbU8', '', ''),
(2, 'set2', 'https://www.youtube.com/embed/a5oQs_Uq8XU', '', ''),
(13, ' set3', 'https://www.youtube.com/embed/pXvRGkKNTSE', '', ''),
(4, 'set4', '	https://www.youtube.com/embed/Q6wXEq3wOlA', '', ''),
(5, 'set5', 'https://www.youtube.com/embed/itrXYg41-V0', '', ''),
(6, 'set6', 'https://www.youtube.com/embed/kDGjP0BJE00', '', ''),
(7, 'set7', '	https://www.youtube.com/embed/ytVneQUA5-c', '', ''),
(8, 'set8', 'https://www.youtube.com/embed/NybHckSEQBI', '', ''),
(9, 'set9', 'https://www.youtube.com/embed/w8wdKOsUD-4', '', ''),
(10, 'set10', 'https://www.youtube.com/embed/6s4RCFMm0AQ', '', ''),
(11, 'set11', 'https://www.youtube.com/embed/X4phgZk-LsI', '', ''),
(12, 'set12', 'https://www.youtube.com/embed/cTVnVEE6YBo', 'https://www.youtube.com/embed/ve8VoexQGkQ', ''),
(14, ' set13', 'https://www.youtube.com/embed/-RlLVQYhJt8', 'https://www.youtube.com/embed/H4ZuDBBGoGU', ''),
(15, ' set14', 'https://www.youtube.com/embed/p_ANRNgKTc8', '', ''),
(16, ' set15', 'https://www.youtube.com/embed/X4phgZk-LsI', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `topic1`
--

DROP TABLE IF EXISTS `topic1`;
CREATE TABLE IF NOT EXISTS `topic1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `link3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic1`
--

INSERT INTO `topic1` (`id`, `link1`, `link2`, `link3`) VALUES
(6, 'https://classroom.google.com/u/1/h', 'https://www.youtube.com/embed/tTfF5klskmo', 'https://www.youtube.com/embed/58r8MDf5sxQ'),
(7, 'https://www.youtube.com/embed/58r8MDf5sxQ', 'https://www.youtube.com/embed/LrnynQqYFXo', 'https://www.youtube.com/embed/jz_i0loQPb8');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `set1` varchar(100) NOT NULL,
  `link1` varchar(1000) NOT NULL,
  `link2` varchar(1000) NOT NULL,
  `link3` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `set1`, `link1`, `link2`, `link3`) VALUES
(6, ' set4', 'https://www.youtube.com/embed/32IeaSUe4kc', 'https://www.youtube.com/embed/A5J8nvFaA1c', 'https://www.youtube.com/embed/CmYUOrINZ78');

-- --------------------------------------------------------

--
-- Table structure for table `video2`
--

DROP TABLE IF EXISTS `video2`;
CREATE TABLE IF NOT EXISTS `video2` (
  `id` varchar(100) NOT NULL,
  `link1` varchar(1000) NOT NULL,
  `link2` varchar(1000) NOT NULL,
  `link3` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video2`
--

INSERT INTO `video2` (`id`, `link1`, `link2`, `link3`) VALUES
(' Set1', 'https://www.youtube.com/embed/VCm4Hzw9kr0', 'https://www.youtube.com/embed/kw4tT7SCmaY', 'https://www.youtube.com/embed/8v-TWxPWIWc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
