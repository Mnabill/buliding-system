-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 03:46 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE `accs` (
  `month` int(20) NOT NULL,
  `date` datetime(6) NOT NULL,
  `cost` int(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`month`, `date`, `cost`, `description`) VALUES
(1, '2019-07-01 00:00:00.000000', 120, 'dfghytrfd'),
(2, '2019-07-01 00:00:00.000000', 120, 'dfghytrfd'),
(3, '2019-07-01 00:00:00.000000', 120, 'dfghytrfd'),
(7, '2019-07-01 00:00:00.000000', 2500, 'Fix the Gate');

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `month` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`month`, `name`, `amount`, `reason`, `date`, `balance`) VALUES
(7, 'user2', 201, 'lksndmfds', '2019-07-01', 20120);

-- --------------------------------------------------------

--
-- Table structure for table `departs`
--

CREATE TABLE `departs` (
  `number` int(10) NOT NULL,
  `month` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `elect` int(10) NOT NULL,
  `water` int(10) NOT NULL,
  `monthly` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departs`
--

INSERT INTO `departs` (`number`, `month`, `name`, `elect`, `water`, `monthly`, `status`) VALUES
(1, '7', 'admin', 101, 1452, 215, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fixs`
--

CREATE TABLE `fixs` (
  `month` int(10) NOT NULL,
  `gatekeeper` int(10) NOT NULL,
  `elect` int(10) NOT NULL,
  `clean` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fixs`
--

INSERT INTO `fixs` (`month`, `gatekeeper`, `elect`, `clean`) VALUES
(1, 2500, 100, 212),
(2, 2500, 10, 212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accs`
--
ALTER TABLE `accs`
  ADD PRIMARY KEY (`month`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`month`);

--
-- Indexes for table `departs`
--
ALTER TABLE `departs`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `fixs`
--
ALTER TABLE `fixs`
  ADD PRIMARY KEY (`month`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accs`
--
ALTER TABLE `accs`
  MODIFY `month` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departs`
--
ALTER TABLE `departs`
  MODIFY `number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fixs`
--
ALTER TABLE `fixs`
  MODIFY `month` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
