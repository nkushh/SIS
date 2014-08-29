-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2005 at 08:03 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.2-1ubuntu4.17

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(9, 'joemar', 'santarin', 'damulag', 20, 98);

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
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'ben', 'b1b9a972ccd8c962a473909b97007eb4'),
(3, 'joe', '5fffc649f786af4404538dda21a1708d'),
(4, 'james', 'e7a58438fa3c342c6fcd5a635c8afd8b'),
(5, 'mar', '43bb4354f759f3b83e7dc5e587e48487'),
(6, 'romulo', '5985c5dc47fdca3abdbca62ca72fd19b'),
(7, 'richard', 'b50ac41ec20631c7b6be72f070d8ff67'),
(12, 'fredmar', '34d1f91fb2e514b8576fab1a75a89a6b');
