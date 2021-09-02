-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 04:20 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `pid` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pid`, `username`, `email`, `data_time`) VALUES
(1, 'Kunal', 'kunal.g15@gmail.com', 'Wed Jun 16 2021 09:54:42 GMT+0530 (India Standard Time)'),
(2, 'Kunal', 'kunal.g15@gmail.com', 'Thu Jun 17 2021 09:16:34 GMT+0530 (India Standard Time)'),
(2, 'Kunal', 'kunal.g15@gmail.com', 'Thu Jun 17 2021 09:17:13 GMT+0530 (India Standard Time)'),
(2, 'Kunal', 'kunal.g15@gmail.com', 'Thu Jun 17 2021 09:20:08 GMT+0530 (India Standard Time)');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `pic` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gen` varchar(10) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`name`, `address`, `email`, `mobile`, `pic`, `dob`, `gen`, `lang`) VALUES
('kunal', 'lalpur ranchi\r\n834001', 'kunal.g15@gmail.com', '9534149880', 'Dany.jpg', '1998-07-12', 'M', 'English'),
('Rohit', 'Ratu Road ', 'nikkisoni5421@gmail.com', '9534149880', 'images (11).jpg', '1998-05-12', 'M', 'Nagpuri'),
('lk;j', 'klm', 'lkm', 'lkm', 'Dany.jpg', '1998-05-12', 'M', 'Hindi'),
('l,mn', 'lkj', 'klj', '9534149880', 'Dany.jpg', '1998-02-12', 'M', 'English'),
('ioj', 'kljmn', 'kunal.g15@gmail.com', '9534149880', 'Dany.jpg', '1998-07-12', 'M', 'English'),
('kunal', 'pokl;k', 'kunal.g15@gmail.com', '9534149880', 'account.txt', '1998-07-12', 'M', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `pname` varchar(30) DEFAULT NULL,
  `desc1` varchar(500) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `pic1` varchar(50) DEFAULT NULL,
  `pic2` varchar(50) DEFAULT NULL,
  `pic3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pname`, `desc1`, `price`, `id`, `pic1`, `pic2`, `pic3`) VALUES
('Cloths', 'For the sake of providing a consistent user experience, keep the length and amount of data in your product descriptions the same across each category. ', '1200', 1, 'cloth2.jpg', 'cloth3.jpg', 'colth1.jpg'),
('Mobile', 'About this item\r\nRear quad camera setup having 48MP main camera with Sony IMX586 sensor, 16MP ultra wide angle Lends, 5MP macro lens, 2MP monochrome lens | 16MP front camera with Sony IMX471 sensor', '8000', 2, 'm1.jpg', 'm2.jpg', 'm3.jpg'),
('Mobile', 'About this item\r\nRear quad camera setup having 48MP main camera with Sony IMX586 sensor, 16MP ultra wide angle Lends, 5MP macro lens, 2MP monochrome lens | 16MP front camera with Sony IMX471 sensor', '8000', 2, 'm1.jpg', 'm2.jpg', 'm3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE IF NOT EXISTS `stu` (
  `name` varchar(10) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`name`, `roll`) VALUES
('kunal', 1),
('Rohit', 12);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) DEFAULT NULL,
  `roll` int(11) NOT NULL DEFAULT '0',
  `course` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fee` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `roll`, `course`, `dob`, `fee`) VALUES
('rohit', 2, 'bca', '0000-00-00', NULL),
('sumit', 3, 'bca', '0000-00-00', NULL),
('mohit', 4, 'bca', '0000-00-00', NULL),
('sumit', 5, 'bca', '1999-02-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `address`, `email`, `mobile`, `pic`) VALUES
('Rohit', 'Lalpur ranchi 834001', 'kunal.g15@gmail.com', '9534149880', 'Dany.jpg'),
('Sumit', 'Main Road Ranchi', 'sumit12@gmail.com', '9534149880', 'images (8).jpg'),
('Cloths', 'For the sake of providing a consistent user experience, keep the length and amount of data in your p', '1200', '1', 'cloth2.jpg'),
('Kunal', 'lalpur', 'kunal.g15@gmail.com', '9534149880', 'Dany.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
