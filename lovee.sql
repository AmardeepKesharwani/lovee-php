-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 06:16 PM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lovee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'snapshot', 'f4b2dd03be142b2e3085cfeb5cf194ed'),
(2, 'amardeep', 'f565deb1a94888b64ba87de380c45233');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `seen` char(1) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`, `seen`, `date`) VALUES
(4, 'jitu', 'gshsg@bzhd.kdjd', '9864589468', 'Thanks for watching', '0', '24-Apr-2019'),
(5, 'Amardeep', 'anujkesharwani@gmail.com', '9784676794', 'Dome', '1', '24-Apr-2019'),
(10, 'rahul', '', '6468686886', 'Gs', '0', '26-Apr-2019'),
(11, 'Abhishek', 'anujkeahawani@gmail.com', '96594586758', 'Call me sir Please', '0', '26-Apr-2019');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `img`, `date`) VALUES
(4, 'Summer Python Course', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, \r\n Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, \r\n      ', 'python.jpg', '26-Apr-2019');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `geneder` char(1) NOT NULL,
  `seen` char(1) NOT NULL,
  `date` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `number`, `address`, `course`, `geneder`, `seen`, `date`, `message`) VALUES
(1, 'anuj', 'anujkesharwani@gmail.com', '98646764674', 'dhundhi katra', 'bca', 'm', '1', '24-Apr-2019', 'Thanks'),
(2, 'anvi', 'anvi@gmail.com', '64867606767', 'Bangalor', 'olevel', 'm', '1', '24-Apr-2019', 'I''m programer'),
(3, 'sOnU', 'sonu@gmail.com', '9865349864', 'Ganeshganj', 'tally', 'm', '1', '24-Apr-2019', 'Application'),
(4, 'Amardeep Kesharwani', 'amardeepkesharwani7@gmail.com', '7054966200', 'Dhundhi katra', 'olevel', 'm', '0', '26-Apr-2019', 'I''m interested'),
(5, 'Amit', '', '9686457944', 'Dhundhi katra', 'tally', 'm', '1', '26-Apr-2019', 'Asdflkjg'),
(6, 'sOnU', 'keshari@gmail.com', '', 'Ganeshganj', 'ms', 'm', '0', '26-Apr-2019', ''),
(7, 'Anuj', 'gegege@jdjd.com', '5438649837', 'Ganeshganj', 'ccc', 'm', '0', '26-Apr-2019', ''),
(14, 'alan', 'ajaj@gmail.com', '', 'Bangalor', 'bca', 'm', '0', '26-Apr-2019', ''),
(15, 'Aadi Kesharwani', 'amardeepkesharwani7@gmail.com', '8656754278', 'Dhundhi katra', 'olevel', 'm', '1', '26-Apr-2019', ''),
(16, 'Aditi', 'ajdjdjdj@gmail.com', '9659864575', 'Ganeshganj', 'olevel', 'm', '0', '26-Apr-2019', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
