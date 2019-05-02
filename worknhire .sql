-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 12:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worknhire`
--

-- --------------------------------------------------------

--
-- Table structure for table `browsecontest`
--

CREATE TABLE `browsecontest` (
  `cid` varchar(50) NOT NULL,
  `cuser` varchar(30) NOT NULL,
  `ouser` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `browsejob`
--

CREATE TABLE `browsejob` (
  `jid` varchar(30) NOT NULL,
  `ouser` varchar(30) NOT NULL,
  `cuser` varchar(30) NOT NULL,
  `type` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `odate` varchar(50) NOT NULL,
  `cdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `browseproj`
--

CREATE TABLE `browseproj` (
  `pname` varchar(30) NOT NULL,
  `woner_user` varchar(30) NOT NULL,
  `emp_user` varchar(50) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `money` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `pid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `contestname` varchar(100) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `document` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `noofday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `document` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `noofday` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `document` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
