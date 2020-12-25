-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2020 at 09:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `rId` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `gender` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`rId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`rId`, `name`, `email`, `password`, `gender`, `address`) VALUES
(1, 'akshata', 'anc@gmail.com', '12345', 'Female', 'hello'),
(2, 'rman', 'rman@gmail.com', '12345', 'Male ', 'hiii'),
(3, 'admin', 'admin@gmail.com', '12345', 'Female', 'it is my website'),
(4, 'akshu', 'akshu@gmail.com', '12345', 'Female', 'its me'),
(5, 'nidhi', 'anc@gmail.com', '12345', 'female', 'jai shree ram'),
(6, 'geetika', 'anc@gmail.com', '12345', 'Female', 'hii'),
(12, 'Akshata Mandloi', 'akshu@gmail.com', 'abcsdd', 'Female', '201\r\n199,Manavta nagar indore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `message`) VALUES
(2, 'Akshata Mandloi', 'anc@gmail.com', 'hello');
