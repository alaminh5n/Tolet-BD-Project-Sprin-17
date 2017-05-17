-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 08:29 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `adminpassword` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminpassword`, `name`) VALUES
('tas', 'admin', 'Tasfia Mehraj'),
('jui', 'admin', 'Atia Jui');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('Ruby', 'ruby@gmail.com', 'I want to register. But facing some kind of problems in sign up issue. its saying that email ID is i'),
('lamin', 'lamin@yahoo.com', 'my add are not posted yet');

-- --------------------------------------------------------

--
-- Table structure for table `postadd`
--

CREATE TABLE `postadd` (
  `userid` varchar(20) NOT NULL,
  `hometype` text NOT NULL,
  `rent` int(7) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` int(12) NOT NULL,
  `area` varchar(25) NOT NULL,
  `floor` int(2) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postalcode` int(6) NOT NULL,
  `description` varchar(100) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postadd`
--

INSERT INTO `postadd` (`userid`, `hometype`, `rent`, `address`, `phone`, `area`, `floor`, `city`, `postalcode`, `description`, `picture`) VALUES
('alamin3030', 'Flat', 17500, 'J-165', 1914258280, 'Mohakhali Wirelessgate ', 5, 'Dhaka', 1212, 'Attached Bath and Balcony with Master Bed, 2 other Bathroom, 1 other Balcony', ''),
('tas123', 'Room', 5000, 'Block-B, House-6', 1911052548, 'Bashundhora', 2, 'Dhaka', 1213, 'Attached Bath and Balcony, 24 hour Wifi, Maid-service Available', ''),
('tas123', 'House', 25000, 'Road-13, House-16', 1714546525, 'Banani', 3, 'Dhaka', 1213, '3 bed, 3 bath, 3 balcony, master bed attach with bath and balcony', ''),
('tas123', 'Flat', 38000, 'Road 71, House 223', 181545654, 'Gulshan 2 ', 5, 'Dhaka', 1212, 'Nice well furnished flat', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fname`, `lname`, `email`, `phone`, `password`, `image`) VALUES
('alamin3030', 'Al-amin', 'Hossain', 'alamin.hossain@north', 1674517811, '123456', ''),
('tas123', 'Tasfia', 'Mehraj', 'tasmeh@gmail.com', 1674517811, '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
