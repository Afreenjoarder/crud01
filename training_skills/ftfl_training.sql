-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 01:50 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `training_skills`
--

CREATE TABLE IF NOT EXISTS `training_skills` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `titletraining` varchar(255) NOT NULL,
  `training_Description` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `training_Year` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Experience_category` varchar(255) NOT NULL,
  `skill_Description` varchar(255) NOT NULL,
  `Extracurricular_activities` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `training_skills`
--

INSERT INTO `training_skills` (`ID`, `titletraining`, `training_Description`, `institute_name`, `address`, `training_Year`, `Duration`, `Experience_category`, `skill_Description`, `Extracurricular_activities`) VALUES
(1, 'web design', 'html,css', 'csl', 'dhanmondi', '2013', '3 months', 'Design/creative', 'basic networking', 'sports'),
(3, '$trainingTitle', 'SQL $trainingDescription', '$institute', 't $address', 'd $trainingYear', 'y $Duration', 'Engineer/Architect', '0 $skillDescription', 'a $extracurricularActivities'),
(4, 'android', 'apps developing', 'ssl', 'Mohakhali', '2014', '3 months', 'IT/Communication', 'programming', 'sports'),
(5, 'ERP', 'ERp maintaineous', 'ssli', 'dhanmondi', '2013', '3', 'Engineer/Architect', 'erp', 'debate'),
(10, 'CCNP', 'Network Protocol System', 'fffffffff', 'i', 'xxxx', '3', '', 'adddd', 'mkmk'),
(11, 'RCHE', 'Red hat', 'New horijon', 'Dhanmondi', '2012', '3 months', 'Computer Enginering', 'Linux', 'sports'),
(12, 'wordpress', 'dsfFfsfs', 'faEAEf', '', '', '', 'Computer Enginering', 'html', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
