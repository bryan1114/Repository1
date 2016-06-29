-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2016 at 06:11 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`, `firstname`, `lastname`, `position`) VALUES
(1, 'user', 'pass', 'Bryan', 'Estevez', 'Librarian'),
(2, 'user', 'pass123', 'Johnny Ray', 'Benjamin', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `local_gov_prop`
--

CREATE TABLE IF NOT EXISTS `local_gov_prop` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `local_no` int(200) NOT NULL,
  `accession_no` int(200) NOT NULL,
  `title_of_books` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `local_gov_prop`
--

INSERT INTO `local_gov_prop` (`id`, `local_no`, `accession_no`, `title_of_books`) VALUES
(19, 0, 12312, 'Javascript'),
(20, 0, 12312, 'Javascript'),
(35, 12, 3, 'Python'),
(36, 22, 3, 'Python'),
(39, 4, 4, 'Math II'),
(40, 4232151, 4, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `national`
--

CREATE TABLE IF NOT EXISTS `national` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `local_no` int(200) NOT NULL,
  `item_no` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `accesion_no` int(200) NOT NULL,
  `call_no` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `date_acquired` varchar(50) NOT NULL,
  `amount` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `national`
--

INSERT INTO `national` (`id`, `local_no`, `item_no`, `title`, `author`, `accesion_no`, `call_no`, `quantity`, `unit`, `date_acquired`, `amount`) VALUES
(1, 1, 1, 'Algebra', 'Bryan', 1, 922233344, 1, 'vol', 'January 08, 2012', 0),
(2, 0, 0, '', '', 0, 0, 0, '', '', 0),
(5, 3, 3, 'Tell Me How?', 'Bryan', 3, 922233344, 1, 'vol', 'January 08, 2012', 0),
(6, 5, 5, 'English', 'Bryan', 1, 922233344, 1, 'vol', 'January 08, 2012', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
