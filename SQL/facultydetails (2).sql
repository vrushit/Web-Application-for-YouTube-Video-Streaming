-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2019 at 06:13 AM
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
-- Database: `facultydetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultydata`
--

DROP TABLE IF EXISTS `facultydata`;
CREATE TABLE IF NOT EXISTS `facultydata` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultydata`
--

INSERT INTO `facultydata` (`id`, `Name`, `Subject`, `Email`, `Mobile`) VALUES
(1001, 'Dhruvil Dalal', 'Science', 'dalaldhruvil@gmail.com', 1234567890),
(1002, 'Vrushit Bharucha', 'English', 'vb@gmail.com', 1234567890),
(1003, 'Pratik Patidar', 'Maths', 'patel@gmail.com', 987654321),
(1004, 'Smit Mistry', 'Economics', 'smitmistry@gmail.com', 987654321),
(1005, 'Harsh Mehta', 'Physic', 'harshmehta@gmail.com', 98765432);

-- --------------------------------------------------------

--
-- Table structure for table `facultyform`
--

DROP TABLE IF EXISTS `facultyform`;
CREATE TABLE IF NOT EXISTS `facultyform` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyform`
--

INSERT INTO `facultyform` (`id`, `name`, `email`, `subject`) VALUES
('dbhdsbv', 'jbdvbvb', 'jkbdsvbksdfvb', 'sdbvkjsdbv'),
('17DIT035', 'Dhruvil Dalal', 'DhruvilDalal@gmailcom', 'Maths'),
('17dit035', 'Dhruvil Dalal', 'DhruvilDalal@gmailcom', 'Maths'),
('17dit004', 'Dhruvil Dalal', 'dalaldhruvil@gmail.com', 'Maths'),
('17dit005', 'Rajvi', 'dalalkashmira@ymail.com', 'English');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
