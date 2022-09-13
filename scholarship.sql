-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2022 at 01:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`, `u_type`) VALUES
('Don', 'Don', 'advisor'),
('Dan', 'Dan', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

DROP TABLE IF EXISTS `registration_details`;
CREATE TABLE IF NOT EXISTS `registration_details` (
  `fullname` varchar(20) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `rollno` int(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `yoa` int(4) NOT NULL,
  `semester` int(5) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `hosteller` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `hosteladd` varchar(30) NOT NULL,
  `instituteadd` varchar(30) NOT NULL,
  `entrancerank` int(10) NOT NULL,
  `entrancetry` int(10) NOT NULL,
  `backpaper` int(10) NOT NULL,
  `gpa` float NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `fatherage` int(10) NOT NULL,
  `fatherincome` int(10) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `motherage` int(10) NOT NULL,
  `motherincome` int(10) NOT NULL,
  `sibling1name` varchar(20) NOT NULL,
  `sibling1age` int(10) NOT NULL,
  `sibling1income` int(10) NOT NULL,
  `sibling2name` varchar(20) NOT NULL,
  `sibling2age` int(10) NOT NULL,
  `sibling2income` int(10) NOT NULL,
  `bankreceipt` varchar(20) NOT NULL,
  `otherscholarship` varchar(20) NOT NULL,
  `semfee` int(10) NOT NULL,
  `hostelfee` int(10) NOT NULL,
  `examfee` int(10) NOT NULL,
  `stationaryfee` int(10) NOT NULL,
  `otherfeedetails` varchar(20) NOT NULL,
  `otherfee` int(10) NOT NULL,
  `selected` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`fullname`, `studid`, `rollno`, `dob`, `email`, `mobile`, `gender`, `category`, `yoa`, `semester`, `branch`, `batch`, `hosteller`, `address`, `hosteladd`, `instituteadd`, `entrancerank`, `entrancetry`, `backpaper`, `gpa`, `fathername`, `fatherage`, `fatherincome`, `mothername`, `motherage`, `motherincome`, `sibling1name`, `sibling1age`, `sibling1income`, `sibling2name`, `sibling2age`, `sibling2income`, `bankreceipt`, `otherscholarship`, `semfee`, `hostelfee`, `examfee`, `stationaryfee`, `otherfeedetails`, `otherfee`, `selected`) VALUES
('Don', '2022CS2B45+6', 51, '0000-00-00', 'dongeevarghese44@gma', '15456456456', 'Male', 'General', 2022, 2, 'CS', 'B', 'Yes', 'gfddgfhj', 'xcvhdfh', 'ghkjhjgh', 56, 1, 5, 5, 'fghdfh', 45, 5645, 'jkgfghj', 44, 454545, 'fhfjf', 54, 4254, 'djfjf', 45, 4545, 'yes', 'yes', 456, 156, 45, 56, '456', 456, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
