-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 07:40 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `bankid` int(11) DEFAULT NULL,
  `branchid` int(11) DEFAULT NULL,
  `cardno` bigint(20) DEFAULT NULL,
  `cardholder` varchar(50) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expmonth` int(11) DEFAULT NULL,
  `expyear` int(11) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `bankid`, `branchid`, `cardno`, `cardholder`, `cvv`, `expmonth`, `expyear`, `amount`) VALUES
(3000, 1500, 2500, 1212121212121212, 'Vishnu R', 122, 12, 2030, '999996000.00'),
(3001, 1500, 2500, 1111111111111111, 'Admin', 111, 12, 2030, '5000004000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankid` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankid`, `bname`, `logo`) VALUES
(1500, 'South Indian Bank', 'sib.jpg'),
(1505, 'State Bank of India', 'SBI.jpg'),
(1510, 'Federal Bank', 'fb.jpg'),
(1515, 'HDFC', 'hdfc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `bankid` int(11) DEFAULT NULL,
  `brname` varchar(50) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `ifsc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `bankid`, `brname`, `address`, `phone`, `ifsc`) VALUES
(2500, 1500, 'SIB Kottayam', 'K.K Road, Kottayam', 9447854854, 'SIB-F3425');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trid` bigint(20) NOT NULL,
  `tdate` varchar(50) DEFAULT NULL,
  `cardno` bigint(20) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trid`, `tdate`, `cardno`, `amount`) VALUES
(1, '16-08-2019', 1212121212121212, '1000.00'),
(2, '16-08-2019', 1212121212121212, '1000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
