-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2019 at 02:40 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apartment_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `device` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `uname`, `pid`, `price`, `device`, `status`, `rdate`) VALUES
(1, 'raja', 1, 50000, 'camera', 1, '12-3-2019');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('head', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `in_time` varchar(20) NOT NULL,
  `out_time` varchar(20) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `uname`, `in_time`, `out_time`, `rdate`, `month`, `year`) VALUES
(1, 'dinesh', '08:00:08 AM', '08:00:42 AM', '14-03-2019', 3, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `camera` varchar(30) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `camera`, `cost`, `location`) VALUES
(1, 'aa', '50000', 'trichy');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uname`, `feedback`, `rdate`) VALUES
(1, 'raja', 'dssdsd', '14-03-2019');

-- --------------------------------------------------------

--
-- Table structure for table `needs`
--

CREATE TABLE `needs` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `details` varchar(50) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needs`
--

INSERT INTO `needs` (`id`, `uname`, `details`, `rdate`, `status`) VALUES
(1, 'raja', 'require for security', '14-03-2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `apartment` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `apartment`, `address`, `mobile`, `email`, `uname`, `pass`) VALUES
(1, 'Raja', 'AK', '23,2nd cross, Thillai Nagar', 9976570006, 'raja@gmail.com', 'raja', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reg_security`
--

CREATE TABLE `reg_security` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `salary` double NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_security`
--

INSERT INTO `reg_security` (`id`, `name`, `dob`, `address`, `mobile`, `email`, `owner`, `salary`, `uname`, `pass`) VALUES
(1, 'Dinesh', '11-08-1995', 'Kattur', 9123855645, 'dinesh@gmail.com', 'raja', 8000, 'dinesh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reg_worker`
--

CREATE TABLE `reg_worker` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `home` varchar(40) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_worker`
--

INSERT INTO `reg_worker` (`id`, `name`, `dob`, `address`, `mobile`, `email`, `home`, `shift`, `uname`, `pass`) VALUES
(1, 'Arun', '11-08-1998', 'Junction', 9123855645, 'arun@gmail.com', '33,AK', '10am to 4pm', 'arun', '1234');
