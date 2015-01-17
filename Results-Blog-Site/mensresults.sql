-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2014 at 12:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mensresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `british ameteur`
--

CREATE TABLE IF NOT EXISTS `british ameteur` (
  `Name` int(11) NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `R3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mensclose`
--

CREATE TABLE IF NOT EXISTS `mensclose` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Location` mediumtext NOT NULL,
  `Date` text NOT NULL,
  `PastChampion` int(11) NOT NULL,
  `Name` text NOT NULL,
  `RoundOne` int(11) NOT NULL DEFAULT '0',
  `RoundTwo` int(11) NOT NULL DEFAULT '0',
  `RoundThree` int(11) NOT NULL DEFAULT '0',
  `RoundFour` int(11) NOT NULL DEFAULT '0',
  `Total` int(11) DEFAULT NULL,
  `Par` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spanish ameteur`
--

CREATE TABLE IF NOT EXISTS `spanish ameteur` (
  `Name` int(11) NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `R3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `the east`
--

CREATE TABLE IF NOT EXISTS `the east` (
  `Name` int(11) NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `R3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `the north`
--

CREATE TABLE IF NOT EXISTS `the north` (
  `Name` int(11) NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `R3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `the south`
--

CREATE TABLE IF NOT EXISTS `the south` (
  `Name` int(11) NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `R3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `the west`
--

CREATE TABLE IF NOT EXISTS `the west` (
  `Name` int(11) NOT NULL,
  `Roundone` int(11) NOT NULL,
  `RoundTwo` int(11) NOT NULL,
  `Roundthree` int(11) NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
