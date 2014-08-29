-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2013 at 05:32 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fname`, `mname`, `lname`, `age`, `grade`) VALUES
(1, 'Joe', 'Dinagat', 'Basanta', 19, 89),
(2, 'Fredmar', 'Tan', 'Go', 19, 91),
(3, 'harold', 'bona', 'llagono', 19, 87),
(4, 'femie kate', 'ampo', 'magno', 19, 91),
(5, 'richard', 'ambot', 'torres', 30, 87),
(6, 'robert', 'g', 'quinking', 40, 92),
(7, 'ubuntu', 'thebest', 'linux', 20, 99),
(8, 'infotech', 'dept', 'nonescost', 36, 83),
(9, 'joemar', 'santarin', 'damulag', 20, 98),
(10, 'collins', 'chegero', 'isaac', 21, 90),
(11, 'kennedy', 'muguva', 'omolo', 32, 80),
(12, 'collins', 'isaac', 'Chegero', 22, 90);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_code` varchar(100) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_code`, `district_name`) VALUES
(3, '309', 'Embu East District');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int(11) NOT NULL,
  `hospital_code` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_code`, `hospital_name`) VALUES
(0, '4264', 'Runyenjes DH');

-- --------------------------------------------------------

--
-- Table structure for table `net_issue`
--

CREATE TABLE IF NOT EXISTS `net_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_code` varchar(100) NOT NULL,
  `hospital_code` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `ANC` varchar(100) NOT NULL,
  `CWC` varchar(100) NOT NULL,
  `date_issued` varchar(100) NOT NULL,
  `year_issued` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `net_issue`
--

INSERT INTO `net_issue` (`id`, `district_code`, `hospital_code`, `hospital_name`, `month`, `ANC`, `CWC`, `date_issued`, `year_issued`) VALUES
(1, '309', '4264', 'Runyenjes DH', 'JANUARY', '0', '0', '15-03-2013', '2013'),
(2, '309', '4231', 'ENA DISP', 'Mar', '2', '7', '15-03-2013', '2013'),
(3, '309', '4005', 'UGWERI DISP', 'Mar', '9', '1', '15-03-2013', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `reg_details`
--

CREATE TABLE IF NOT EXISTS `reg_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_code` varchar(100) NOT NULL,
  `hospital_code` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reg_details`
--

INSERT INTO `reg_details` (`id`, `district_code`, `hospital_code`, `hospital_name`) VALUES
(1, '309', '4264', 'Runyenjes DH'),
(2, '309', '4231', 'ENA DISP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'ben', 'b1b9a972ccd8c962a473909b97007eb4'),
(3, 'joe', '5fffc649f786af4404538dda21a1708d'),
(4, 'james', 'e7a58438fa3c342c6fcd5a635c8afd8b'),
(5, 'mar', '43bb4354f759f3b83e7dc5e587e48487'),
(6, 'romulo', '5985c5dc47fdca3abdbca62ca72fd19b'),
(7, 'richard', 'b50ac41ec20631c7b6be72f070d8ff67'),
(12, 'fredmar', '34d1f91fb2e514b8576fab1a75a89a6b');
