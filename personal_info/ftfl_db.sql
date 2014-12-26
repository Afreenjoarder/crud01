-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 01:49 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_Name` varchar(255) NOT NULL,
  `mother_Name` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `National_ID` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`ID`, `name`, `father_Name`, `mother_Name`, `Religion`, `Date_of_Birth`, `Gender`, `Nationality`, `National_ID`) VALUES
(1, 'shimu', ' Mahibul ', ' jahan ', ' islam', ' 02-07-1989 ', ' Female', 'Bangladeshi', ' 987654321345678'),
(2, 'm.hoque', '  r.khan  ', '  taijul ', '  islam', '  12-12-14  ', '  male', 'Bangladeshi', '  98765432'),
(5, 'Manha Ahmed', '  Dr.Farid  ', '  Dr.Sharmin  ', '  Islam', '  21-10-2014  ', '  Female', 'Bangladeshi', '  120974398'),
(6, 'Nasmiya', ' j.Ahmed ', ' S.Ahmed ', ' Islam', ' 23-10-1990 ', ' Female', 'Bangladeshi', ' 12979866566');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
