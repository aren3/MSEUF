-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 11:39 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bed`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_teach`
--

CREATE TABLE IF NOT EXISTS `acc_teach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `acc_teach`
--

INSERT INTO `acc_teach` (`id`, `username`, `password`) VALUES
(2, 'T11-14140', 'T11-14140'),
(3, '12345', '12345'),
(4, '', '6b8d7de8b8d2c0f6e750c2ee782ded0d'),
(5, '', '6b8d7de8b8d2c0f6e750c2ee782ded0d'),
(6, '', '6b8d7de8b8d2c0f6e750c2ee782ded0d'),
(7, '', '6b8d7de8b8d2c0f6e750c2ee782ded0d'),
(8, '', '6b8d7de8b8d2c0f6e750c2ee782ded0d'),
(9, 'teacher', '6e2dd1670d1d789524116bbb802a266e'),
(10, 'adobo', 'fbd2a2ad4cb8a26cea59558ca4647019');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('jose procopio', 'admin', 'admin'),
('name', 'admin', 'e0910234e20f3c918deeb3606026658d'),
('name', 'lala', 'b13673be7ab6c87b6df8840079e244f4'),
('name', 'jaja', '745059cf19b64bd531eed72bdb1a7c68'),
('name', 'hello', '6f3718c76c20288f17e47020ba21c33b'),
('name', 'jezrel', 'abefabfca2130c559ed3182feb05bff2');

-- --------------------------------------------------------

--
-- Table structure for table `grade7secgumamela`
--

CREATE TABLE IF NOT EXISTS `grade7secgumamela` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `grade7secgumamela`
--

INSERT INTO `grade7secgumamela` (`id`, `studnum`, `name`, `gender`) VALUES
(1, 'S14-12346', 'Maximo Barrera', 'male'),
(2, 'S14-12350', 'Melany Buckley', 'female'),
(3, 'S14-12354', 'Lindsey Davila', 'female'),
(4, 'S14-12358', 'Giovani Finley', 'male'),
(5, 'S14-12362', 'Peter Guerra', 'male'),
(6, 'S14-12366', 'Jensen Jarvis', 'female'),
(7, 'S14-12370', 'Julius Leblanc', 'male'),
(8, 'S14-12374', 'Eliezer Pineda', 'male'),
(9, 'S14-12378', 'Adison Small', 'female'),
(10, 'S14-12382', 'Donte Wagner', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `grade7secmakahiya`
--

CREATE TABLE IF NOT EXISTS `grade7secmakahiya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `grade7secmakahiya`
--

INSERT INTO `grade7secmakahiya` (`id`, `studnum`, `name`, `gender`) VALUES
(1, 'S14-12347', 'Lizbeth Bowers', 'female'),
(2, 'S14-12351', 'Lilian Conley', 'female'),
(3, 'S14-12355', 'Nathaniel Dominguez', 'male'),
(4, 'S14-12359', 'Jordin Gates', 'female'),
(5, 'S14-12363', 'Serenity Hartman', 'female'),
(6, 'S14-12367', 'Braden Kennedy', 'male'),
(7, 'S14-12371', 'Urijah Moyer', 'female'),
(8, 'S14-12375', 'Marisol Richmond', 'female'),
(9, 'S14-12379', 'Reese Strong', 'female'),
(10, 'S14-12383', 'Finn Washington', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `grade7secrosal`
--

CREATE TABLE IF NOT EXISTS `grade7secrosal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `prev` text NOT NULL,
  `fquarter` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `filipino` int(11) NOT NULL,
  `makabayan` int(11) NOT NULL,
  `mapeh` int(11) NOT NULL,
  `tle` int(11) NOT NULL,
  `aralpan` int(11) NOT NULL,
  `edukpag` int(11) NOT NULL,
  `squarter` int(11) NOT NULL,
  `science2` int(11) NOT NULL,
  `english2` int(11) NOT NULL,
  `math2` int(11) NOT NULL,
  `filipino2` int(11) NOT NULL,
  `makabayan2` int(11) NOT NULL,
  `mapeh2` int(11) NOT NULL,
  `tle2` int(11) NOT NULL,
  `aralpan2` int(11) NOT NULL,
  `edukpag2` int(11) NOT NULL,
  `tquarter` int(11) NOT NULL,
  `science3` int(11) NOT NULL,
  `english3` int(11) NOT NULL,
  `math3` int(11) NOT NULL,
  `filipino3` int(11) NOT NULL,
  `makabayan3` int(11) NOT NULL,
  `mapeh3` int(11) NOT NULL,
  `tle3` int(11) NOT NULL,
  `aralpan3` int(11) NOT NULL,
  `edukpag3` int(11) NOT NULL,
  `ffquarter` int(11) NOT NULL,
  `science4` int(11) NOT NULL,
  `english4` int(11) NOT NULL,
  `math4` int(11) NOT NULL,
  `filipino4` int(11) NOT NULL,
  `makabayan4` int(11) NOT NULL,
  `mapeh4` int(11) NOT NULL,
  `tle4` int(11) NOT NULL,
  `aralpan4` int(11) NOT NULL,
  `edukpag4` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `grade7secrosal`
--

INSERT INTO `grade7secrosal` (`id`, `studnum`, `name`, `gender`, `address`, `prev`, `fquarter`, `science`, `english`, `math`, `filipino`, `makabayan`, `mapeh`, `tle`, `aralpan`, `edukpag`, `squarter`, `science2`, `english2`, `math2`, `filipino2`, `makabayan2`, `mapeh2`, `tle2`, `aralpan2`, `edukpag2`, `tquarter`, `science3`, `english3`, `math3`, `filipino3`, `makabayan3`, `mapeh3`, `tle3`, `aralpan3`, `edukpag3`, `ffquarter`, `science4`, `english4`, `math4`, `filipino4`, `makabayan4`, `mapeh4`, `tle4`, `aralpan4`, `edukpag4`, `username`) VALUES
(1, 'S14-12345', 'Dominador Dimasaling', 'male', 'Brgy. castillo Pagbilao, Quezon', 'Pagbilao Central Elementary School', 88, 100, 100, 85, 86, 80, 80, 79, 78, 85, 90, 90, 87, 88, 97, 86, 91, 90, 90, 85, 85, 85, 85, 85, 85, 85, 85, 90, 90, 85, 90, 85, 85, 85, 85, 85, 85, 90, 90, 85, ''),
(2, 'S14-12349', 'Kamari Briggs', 'female', 'qwerty', 'asdfbn', 89, 88, 78, 89, 98, 87, 75, 66, 76, 77, 77, 75, 87, 75, 86, 90, 75, 75, 75, 77, 90, 77, 88, 66, 78, 75, 76, 95, 85, 84, 90, 98, 89, 78, 78, 88, 88, 84, 85, 86, ''),
(3, 'S14-12353', 'Fabian Davenport', 'male', '', '', 80, 78, 89, 88, 88, 85, 86, 84, 75, 85, 90, 90, 95, 95, 87, 15, 56, 78, 86, 89, 97, 89, 85, 86, 84, 78, 88, 90, 97, 98, 80, 90, 78, 75, 89, 87, 88, 75, 75, 80, ''),
(4, 'S14-12357', 'Nick Farrell', 'male', '', '', 96, 89, 88, 95, 85, 98, 98, 82, 85, 96, 90, 98, 85, 96, 95, 87, 88, 87, 88, 89, 85, 90, 91, 88, 96, 89, 78, 89, 85, 85, 98, 85, 85, 78, 90, 85, 85, 98, 89, 98, ''),
(5, 'S14-12361', 'Keith Gregory', 'male', '', '', 85, 98, 78, 98, 89, 88, 98, 89, 85, 85, 98, 90, 94, 98, 95, 90, 88, 90, 88, 98, 86, 98, 98, 98, 98, 89, 98, 78, 85, 86, 84, 87, 89, 85, 86, 84, 82, 81, 85, 85, ''),
(6, 'S14-12365', 'Dylan Hickman', 'male', '', '', 85, 89, 78, 78, 85, 89, 87, 87, 85, 88, 85, 90, 95, 98, 85, 86, 94, 85, 84, 85, 97, 90, 82, 8, 90, 78, 78, 85, 85, 97, 98, 89, 89, 87, 90, 97, 94, 95, 98, 97, ''),
(7, 'S14-12369', 'Kasey Lee', 'female', '', '', 94, 85, 98, 78, 85, 85, 78, 96, 97, 94, 90, 97, 95, 96, 93, 78, 97, 95, 97, 89, 88, 97, 97, 85, 86, 88, 84, 81, 83, 87, 80, 87, 84, 85, 86, 89, 77, 75, 76, 79, ''),
(8, 'S14-12373', 'Caleb Petersen', 'male', '', '', 82, 78, 78, 98, 87, 85, 86, 8, 85, 87, 98, 83, 84, 84, 87, 78, 75, 76, 79, 77, 88, 88, 77, 99, 75, 7, 87, 78, 78, 87, 85, 88, 98, 87, 87, 88, 97, 87, 85, 75, ''),
(9, 'S14-12377', 'Eden Ross', 'female', '', '', 87, 89, 87, 78, 75, 85, 78, 89, 86, 84, 98, 88, 87, 85, 86, 84, 83, 82, 81, 85, 87, 88, 75, 76, 78, 79, 85, 82, 83, 81, 93, 87, 85, 87, 85, 78, 89, 90, 91, 97, ''),
(10, 'S14-12381', 'Vaughn Villanueva', 'male', '', '', 78, 78, 79, 79, 96, 97, 97, 85, 85, 87, 81, 99, 85, 85, 87, 89, 86, 84, 82, 83, 90, 87, 87, 87, 85, 78, 98, 89, 82, 81, 78, 89, 87, 82, 81, 83, 84, 86, 87, 88, '');

-- --------------------------------------------------------

--
-- Table structure for table `quartergrade`
--

CREATE TABLE IF NOT EXISTS `quartergrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstq` int(11) NOT NULL,
  `secondq` int(11) NOT NULL,
  `thirdq` int(11) NOT NULL,
  `fourthq` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `quartergrade`
--

INSERT INTO `quartergrade` (`id`, `firstq`, `secondq`, `thirdq`, `fourthq`) VALUES
(12, 12, 12, 23, 23),
(13, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studlist`
--

CREATE TABLE IF NOT EXISTS `studlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `studlist`
--

INSERT INTO `studlist` (`id`, `studnum`, `name`, `gender`, `age`, `grade`) VALUES
(1, 'S14-12345', 'Nathaniel Aguilar', 'male', 13, 7),
(2, 'S14-12346', 'Maximo Barrera', 'male', 14, 8),
(3, 'S14-12347', 'Lizbeth Bowers', 'female', 15, 9),
(4, 'S14-12348', 'Miracle Bowman', 'female', 16, 10),
(5, 'S14-12349', 'Kamari Briggs', 'female', 13, 7),
(6, 'S14-12350', 'Melany Buckley', 'female', 14, 8),
(7, 'S14-12351', 'Lilian Conley', 'female', 15, 9),
(8, 'S14-12352', 'Valentino Daniels', 'male', 16, 10),
(9, 'S14-12353', 'Fabian Davenport', 'male', 13, 7),
(10, 'S14-12354', 'Lindsey Davila', 'female', 14, 8),
(11, 'S14-12355', 'Nathaniel Dominguez', 'male', 15, 9),
(12, 'S14-12356', 'Kimberly Duke', 'female', 16, 10),
(13, 'S14-12357', 'Nick Farrell', 'male', 13, 7),
(14, 'S14-12358', 'Giovani Finley', 'male', 14, 8),
(15, 'S14-12359', 'Jordin Gates', 'female', 15, 9),
(16, 'S14-12360', 'Jazmin Greene', 'female', 16, 10),
(17, 'S14-12361', 'Keith Gregory', 'male', 13, 7),
(18, 'S14-12362', 'Peter Guerra', 'male', 14, 8),
(19, 'S14-12363', 'Serenity Hartman', 'female', 15, 9),
(20, 'S14-12364', 'Mira Henry', 'female', 16, 10),
(21, 'S14-12365', 'Dylan Hickman', 'male', 13, 7),
(22, 'S14-12366', 'Jensen Jarvis', 'female', 14, 8),
(23, 'S14-12367', 'Braden Kennedy', 'male', 15, 9),
(24, 'S14-12368', 'Angel Landry', 'female', 16, 10),
(25, 'S14-12369', 'Kasey Lee', 'female', 13, 7),
(26, 'S14-12370', 'Julius Leblanc', 'male', 14, 8),
(27, 'S14-12371', 'Urijah Moyer', 'female', 15, 9),
(28, 'S14-12372', 'Adelaide Oconnell', 'female', 16, 10),
(29, 'S14-12373', 'Caleb Petersen', 'male', 13, 7),
(30, 'S14-12374', 'Eliezer Pineda', 'male', 14, 8),
(31, 'S14-12375', 'Marisol Richmond', 'female', 15, 9),
(32, 'S14-12376', 'Angie Rodriguez', 'female', 16, 10),
(33, 'S14-12377', 'Eden Ross', 'female', 13, 7),
(34, 'S14-12378', 'Adison Small', 'female', 14, 8),
(35, 'S14-12379', 'Reese Strong', 'female', 15, 9),
(36, 'S14-12380', 'Madilynn Vaughan', 'female', 16, 10),
(37, 'S14-12381', 'Vaughn Villanueva', 'male', 13, 7),
(38, 'S14-12382', 'Donte Wagner', 'male', 14, 8),
(39, 'S14-12383', 'Finn Washington', 'male', 15, 9),
(40, 'S14-12384', 'Pedro Wells', 'male', 16, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
