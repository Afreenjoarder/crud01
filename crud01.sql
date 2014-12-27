-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 01:53 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `std_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `Form`
--

CREATE TABLE IF NOT EXISTS `Form` (
  `ID` int(110) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_Name` varchar(255) NOT NULL,
  `mother_Name` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `National_ID` varchar(255) NOT NULL,
  `Present_Address` varchar(255) NOT NULL,
  `Permanent_Address` varchar(255) NOT NULL,
  `District` varchar(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Preferred_Track` varchar(255) NOT NULL,
  `S.S.C_Roll` varchar(255) NOT NULL,
  `S.S.C_Board` varchar(255) NOT NULL,
  `H.S.C_Roll` varchar(255) NOT NULL,
  `H.S.C_Board` varchar(255) NOT NULL,
  `Preferred_Exam_Center` varchar(255) NOT NULL,
  `last_level_of_education` varchar(255) NOT NULL,
  `Exam_title` varchar(255) NOT NULL,
  `Group_sub` varchar(255) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Passing_year` varchar(255) NOT NULL,
  `Experience_category` varchar(255) NOT NULL,
  `skill_Description` varchar(255) NOT NULL,
  `Extracurricular_activities` varchar(255) NOT NULL,
  `Reference_Name` varchar(255) NOT NULL,
  `Organization` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `mobile_No` varchar(11) NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `Relation` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Form`
--

INSERT INTO `Form` (`ID`, `name`, `father_Name`, `mother_Name`, `Religion`, `Date_of_Birth`, `Gender`, `Nationality`, `National_ID`, `Present_Address`, `Permanent_Address`, `District`, `Mobile`, `Email`, `Preferred_Track`, `S.S.C_Roll`, `S.S.C_Board`, `H.S.C_Roll`, `H.S.C_Board`, `Preferred_Exam_Center`, `last_level_of_education`, `Exam_title`, `Group_sub`, `Institution`, `Result`, `Passing_year`, `Experience_category`, `skill_Description`, `Extracurricular_activities`, `Reference_Name`, `Organization`, `Address`, `mobile_No`, `Email_id`, `Relation`) VALUES
(1, 'afrin', 'mahibul', 'jahan', 'islam', '2-7-89', 'female', 'Bangladeshi', '265437896543', 'Mirpur', 'mirpur', '0', 176542246, 'simu_ete@yahoo.com', 'ITS', '345666', 'Dhaka', '5679988', 'Dhaka', 'BCC', 'Graduation', 'B.sc in ETE', 'ETE', 'DIU', '3.5', '2012', 'networking', 'web Application', 'sports', 'abu jafrul', 'bank', 'motijheel', '0112457654', 'ssh@yahoo.com', 'relative'),
(2, 'sasa', 'a.khan', 'j.khan', 'islam', '3-4-89', 'female', 'Bangladeshi', '982464678986', 'Dhaka', 'motijheel', 'dhaka', 986521234, 'ff@gmail.com', 'ITS', '765', 'Dhaka', '12345', 'dhaka', 'bcc', 'Bachelor', 'Science', 'Computer & Communication Engineering (CCE) ', 'DU', '3', '2012', '11', 'html', 'sports', 'jj', 'k.company', 'Ghulshan', '01724536729', 'kk@yahoo.com', 'academic'),
(3, 'sharmin', 'ahad khan', 'afsana', 'islam', '7-8-90', 'female', 'Bangladeshi', '9876543', 'Dhanmondi', 'Dhanmondi', 'Dhaka', 1865432476, 'sharmin@yahoo.com', 'ITES', '5679', 'ctg', '9807', 'ctg', 'bcc', 'Masters', ' ', 'Computer Engineering', 'UIU', '3.6', '2014', '1', 'android', 'debate', 'akram', 's.company', 'Dhanmondi', '01111345456', 'akram@gmail.com', 'relative');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
