-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 02:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `ACCID` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `accno` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`ACCID`, `uname`, `price`, `accno`, `modelID`, `status`) VALUES
(14, 'akashmadhu890@gmail.com', '', 4, 1, 'pending'),
(15, 'akashmadhu890@gmail.com', '', 4, 1, 'pending'),
(16, 'akashmadhu890@gmail.com', '', 4, 1, 'pending'),
(17, 'akashmadhu890@gmail.com', '', 4, 1, 'pending');

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
(3000, 1500, 2500, 1212121212121212, 'Vishnu R', 122, 12, 2030, '999945330.00'),
(3001, 1500, 2500, 1111111111111111, 'Admin', 111, 12, 2030, '5000054670.00');

-- --------------------------------------------------------

--
-- Table structure for table `accstock`
--

CREATE TABLE `accstock` (
  `accno` int(11) NOT NULL,
  `accname` varchar(1000) NOT NULL,
  `count` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accstock`
--

INSERT INTO `accstock` (`accno`, `accname`, `count`, `image`, `price`) VALUES
(4, 'Alloy Wheels', '10', 'fc.jpg', '20,000');

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
-- Table structure for table `benzclass`
--

CREATE TABLE `benzclass` (
  `Classname` varchar(50) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `ClassID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benzclass`
--

INSERT INTO `benzclass` (`Classname`, `pic`, `ClassID`) VALUES
('C-Class', 'C-class.JPG', 1),
('G-Class', 'g-class.JPG', 2),
('GLC', 'GLC.JPG', 3),
('CLA', 'CLA.JPG', 4),
('E-class', 'S-class.JPG', 5),
('GLA', 'GLA.JPG', 6),
('S-class', 'E-class.JPG', 7),
('V-class', 'V-class.JPG', 8),
('GLS', 'GLS.JPG', 9),
('AMG_GT', 'AMG_GT.JPG', 10),
('GLE-c', 'GLE_C.JPG', 11),
('GLE', 'GLE.JPG', 12),
('GLC_S', 'GLc.JPG', 13),
('CLS', 'CLS.JPG', 14),
('GLC_S', 'GLC_S.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `benzmodel`
--

CREATE TABLE `benzmodel` (
  `modelName` varchar(50) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `modelID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benzmodel`
--

INSERT INTO `benzmodel` (`modelName`, `pic`, `modelID`, `ClassID`) VALUES
('C-200 Prime', 'C200 prime.JPG', 1, 1),
('C 200 progressive', 'C-progressive.JPG', 2, 1),
('C 220d progressive', '220d progressive.JPG', 3, 1),
('C 300d AMG-Line', '300d AMG line.JPG', 4, 1),
('C 63 S AMG', 'G63 AMG.jpg', 5, 1),
('G63 AMG', 'G63 AMG.jpg', 6, 2),
('220d prime', 'prime 220d.jpg', 7, 3),
('220d progressive', '220d progressive.jpg', 8, 3),
('300 progressive', '220d progressive.jpg', 9, 3),
('220 CDI style', '300 progressive.jpg', 10, 4),
('220 pertol sport', '220 CDI style.jpg', 11, 4),
('200 CDI sport', '220 pertol sport.jpg', 12, 4),
('E 200 expression', '	\r\nE 200 expression.jpg', 13, 5),
('E 220d Expression', 'E 220d Expression.jpg', 14, 5),
('E 200 Exclusive', 'E 200 Exclusive.jpg', 15, 5),
('E 220d Exclusive', 'E 220d Exclusive.jpg', 16, 5),
('E 350 d', 'E 350 d.jpg', 17, 5),
('E 63 AMG S 4MATIC +', 'E 63 AMG S 4MATIC +\r\n.jpg', 18, 5),
('200 d Style', '200 d Style.jpg', 19, 6),
('200 Urban Edition', '200 Urban Edition.jpg', 20, 6),
('200 Sport', '200 Urban Edition.jpg', 21, 6),
('2200 d Sport', '2200 d Sport.jpg', 22, 6),
('220 d 4MATIC', '220 d 4MATIC.jpg', 23, 6),
('S 350D', 'S 350D.jpg', 24, 7),
('S 450', 'S 450.jpg', 25, 7),
('Maybach S 560', 'Maybach S 560.jpg', 26, 7),
('Maybach S 650', 'Expression ELWB.jpg', 27, 7),
('Expression ELWB', 'Expression ELWB.jpg', 28, 8),
('Exclusive LWB', 'Exclusive LWB.jpg', 29, 8),
('400 4MATIC', '400 4MATIC.jpg', 30, 9),
('350 d', '400 4MATIC.jpg', 31, 9),
('63 AMG', '63 AMG.jpg', 32, 9),
('Roadster', 'Roadster.jpg', 33, 10),
('R', 'R.jpg', 34, 10),
('43 4MATIC', '43 4MATIC.png', 35, 11),
(' 250 d', '250 d.jpg', 36, 12),
(' 350 d', '350 d.jpg', 37, 12),
('GLE 400 4MATIC', 'GLE 400 4MATIC.jpg', 38, 12),
('Maybach S 650', 'Maybach S 650.jpg', 39, 7),
('300d', '300d.jpg', 40, 14),
('43 AMG', '	\r\n43 AMG.jpg', 41, 13);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(11) NOT NULL,
  `liscense` varchar(50) NOT NULL,
  `modelName` varchar(1000) NOT NULL,
  `adhaarno` bigint(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `scheme` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `House` varchar(11) NOT NULL,
  `location` varchar(11) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `liscense`, `modelName`, `adhaarno`, `color`, `scheme`, `uname`, `dob`, `House`, `location`, `pin`, `occupation`, `mobile`, `status`) VALUES
(14, 'bg.jpg', '2', 12345678902, 'Silver', 'EMI', 'ashwinmadhu890@gmail.com', '2019-12-15', 'manath', 'kochi', 543216, 'SDGRGER', 1234567890, 'pending');

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `logid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `logid`, `itemid`) VALUES
(1, 2, 6),
(2, 2, 7),
(3, 2, 8),
(7, 3, 11),
(8, 3, 4),
(9, 2, 2),
(10, 2, 4),
(11, 3, 2),
(12, 33, 3),
(13, 33, 4),
(14, 33, 4),
(15, 33, 4),
(16, 33, 4);

-- --------------------------------------------------------

--
-- Table structure for table `carwash`
--

CREATE TABLE `carwash` (
  `modelID` int(11) NOT NULL,
  `hname` varchar(1000) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `tym` time NOT NULL,
  `dob` date NOT NULL,
  `CWID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `pic` varchar(200) NOT NULL,
  `modelID` int(11) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `clrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`pic`, `modelID`, `colour`, `price`, `clrid`) VALUES
('C-progressive.JPG', 1, 'red', 1000, 1),
('C-progressive.JPG', 1, 'blue', 2000, 2),
('C-progressive.JPG', 2, 'black', 3000, 3),
('C-progressive.JPG', 2, 'silver', 3000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, 'ds', 'gfgf@gdf.com', 'dgrfg'),
(3, 'riya', 'riyamariya@gmail.com', 'mbxhsbhsfkgf');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `cid` int(11) NOT NULL,
  `logid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`cid`, `logid`, `cname`, `phone`, `address`, `state`, `location`, `district`, `status`, `email`, `lastname`) VALUES
(15, 30, 'ammu', '9685744125', 'Kalathypady, Kottayam, Kerala', 'kerala', 'kalathypady', 'kottayam', 1, 'ammu@gmail.com', 'anu'),
(16, 32, 'achu', '9685744124', 'ettumanoor', 'kerala', 'mahadheva temble', 'kottayam', 1, 'achu45@gmail', 's'),
(17, 33, 'asiya', '9685744127', 'erattupetta', 'kerala', 'petta', 'kottayam', 1, 'asiya@gmail', 'y'),
(18, 34, 'justin', '9685744125', 'tdtrse', 'kerala', 'adst', 'kottayam', 0, 'justinjoseph33@gmail.com', 'joseph');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `topup` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `dob` date NOT NULL,
  `tym` time NOT NULL,
  `hname` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `pin` int(11) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `uname`, `pwd`, `utype`) VALUES
(1, 'akashmadhu890@gmail.com', '19891181Aa*', 'user'),
(2, 'admin', 'admin', 'admin'),
(3, '', '', 'user'),
(4, 'ashwinmadhu890@gmail.com', '1234', 'user'),
(5, 'anamikapm248@gmail.com', '12345', 'user'),
(6, 'sree@gmail.com', 'SREE123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `paint`
--

CREATE TABLE `paint` (
  `PID` int(11) NOT NULL,
  `clr` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `tym` time NOT NULL,
  `uname` varchar(100) NOT NULL,
  `modelID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paint`
--

INSERT INTO `paint` (`PID`, `clr`, `dob`, `tym`, `uname`, `modelID`) VALUES
(1, 'thrissur', '2019-11-30', '10:00:00', 'akashmadhu890@gmail.com', 1),
(2, 'thrissur', '2019-11-30', '10:00:00', 'akashmadhu890@gmail.com', 1),
(3, 'Black', '2019-11-30', '10:00:00', '', 5),
(4, 'Black', '2019-11-28', '00:59:00', 'akashmadhu890@gmail.com', 1),
(5, 'Blue', '2019-11-27', '08:59:00', 'akashmadhu890@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `UID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `PAYID` int(11) NOT NULL,
  `accno` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `PROID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `carpic` varchar(50) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwrd` varchar(50) NOT NULL,
  `hname` varchar(1000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UID`, `fname`, `lname`, `mobile`, `email`, `pwrd`, `hname`, `location`, `pin`) VALUES
(1, 'Akash', 'Madhu', 9497630192, 'akashmadhu890@gmail.com', '19891181Aa*', 'manzil', 'kochi', 123456),
(4, 'Ashwin', 'Madhu1', 1234567890, 'ashwinmadhu890@gmail.com', '1234', 'manath', 'kochi', 543216),
(5, 'Akshay', 'Vinod', 1234567890, 'anamikapm248@gmail.com', '12345', '', '', 0),
(6, 'sreevidya ', 'S', 96052024865555, 'sree@gmail.com', 'SREE123', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `servname` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `complaint` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `modelID`, `servname`, `time`, `date`, `uname`, `complaint`, `status`) VALUES
(1, 1, '4', '10:00:00', '2019-11-28', 'akashmadhu890@gmail.com', 'dwdw', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE `spec` (
  `Displacement` varchar(50) NOT NULL,
  `Fuel` varchar(50) NOT NULL,
  `Power` varchar(50) NOT NULL,
  `Torque` varchar(50) NOT NULL,
  `Drivetrain` varchar(50) NOT NULL,
  `Transmission` varchar(50) NOT NULL,
  `Number of Gears` varchar(50) NOT NULL,
  `No Of Cylinder` int(11) NOT NULL,
  `Mileage` int(11) NOT NULL,
  `Fuel Tank Capacity` int(11) NOT NULL,
  `Wheel Type` varchar(50) NOT NULL,
  `Front Tyre Size` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `specID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`Displacement`, `Fuel`, `Power`, `Torque`, `Drivetrain`, `Transmission`, `Number of Gears`, `No Of Cylinder`, `Mileage`, `Fuel Tank Capacity`, `Wheel Type`, `Front Tyre Size`, `modelID`, `specID`) VALUES
('1950 CC', 'petrol', '181 bhp@5800-6100 rpm', '280 Nm@3000-4000 rpm', 'RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 225, 1, 1),
('1950 CC', 'petrol', '181 bhp@5800-6100 rpm', '280 Nm@3000-4000 rpm', 'RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 225, 2, 2),
('	1950 CC', 'petrol', '	192 bhp@3800 rpm', '	400 Nm@1600 rpm', '	RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 225, 3, 3),
('	1950 CC', 'petrol', '	192 bhp@3800 rpm', '	400 Nm@1600 rpm', '	RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 225, 4, 4),
('3982 CC', 'petrol', '510 bhp@5500-6250 rpm', '700 Nm@1750-4500 rpm', '	RWD', 'Automatic', '7', 8, 15, 66, 'Alloy Wheels', 245, 5, 5),
('3998 CC', 'petrol', '577 bhp@5500 rpm', '760 Nm@2000-5000 rpm', '4WD', 'Automatic', '9', 8, 9, 96, 'Alloy Wheels', 275, 6, 6),
('	2143 cc', 'Diesel', '	168 bhp @ 3000 rpm', '400 Nm @ 1400 rpm', 'AWD', 'Automatic', '9', 4, 18, 66, 'Alloy Wheels', 235, 7, 7),
('2143 cc', 'Diesel', '	168 bhp @ 3000 rpm', '400 Nm @ 1400 rpm', 'AWD', 'Automatic', '9', 4, 18, 66, 'Alloy Wheels', 235, 8, 8),
(' 2143 cc', 'Diesel', ' 168 bhp @ 3000 rpm', '	370 Nm @ 1300 rpm', 'AWD', 'Automatic', '9', 4, 18, 66, 'Alloy Wheels', 235, 9, 9),
(' 2143 cc', 'Diesel', ' 168 bhp @ 3000 rpm', '400 Nm @ 1400 rpm', 'RWD', 'Automatic', '7', 4, 19, 66, 'Alloy Wheels', 225, 10, 10),
(' 2143 cc', 'Petrol', '181 bhp @ 5500 rpm', '300 Nm @ 1200 rpm', 'FWD', 'Automatic', '7', 4, 15, 66, 'Alloy Wheels', 225, 11, 11),
(' 2143 cc', 'Diesel', '134 bhp @ 3600 rpm', '300 Nm @ 1600 rpm', 'FWD', 'Automatic', '7', 4, 18, 66, 'Alloy Wheels', 225, 12, 12),
('1991cc', 'Petrol', '194 bhp @ 5800 rpm', '320 Nm @ 1600 rpm', 'RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 245, 13, 13),
('1950 cc', 'Diesel', '192 bhp @ 3800 rpm', '400 Nm @ 1600 rpm', 'RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 245, 14, 14),
('1991 cc', '	Petrol', '194 bhp @ 5800 rpm', '300 Nm @ 1600 rpm', 'RWD', 'Automatic', '9', 4, 12, 66, 'Alloy Wheels', 245, 15, 15),
('1950 cc', 'Diesel', '192 bhp @ 3800 rpm', '400 Nm @ 1600 rpm', 'RWD', 'Automatic', '9', 4, 12, 80, '	Alloy', 245, 16, 16),
('2987 cc', '	Diesel', '255 bhp @ 3400 rpm', '	620 Nm @ 1600 rpm', 'RWD', 'Automatic', '9', 6, 18, 80, 'Alloy', 245, 17, 17),
('3982 cc', 'Petrol', '612 bhp @ 5750 rpm', '850 Nm @ 2500 rpm', 'RWD', 'Automatic', '9', 8, 11, 66, 'Alloy', 285, 18, 18),
('2143 cc', 'Diesel', '134 bhp @ 3600 rpm', '300 Nm @ 1600 rpm', 'FWD', '	Automatic', '7', 4, 18, 50, 'Alloy', 235, 19, 19),
('1991 cc', '	Petrol', '181 bhp @ 5500 rpm', '	300 Nm @ 1200 rpm', 'FWD', '	Automatic', '7', 4, 14, 50, 'Alloy', 235, 20, 20),
('1991cc', 'Petrol', '181 bhp @ 5500 rpm', '300 Nm @ 1200 rpm', 'FWD', '	Automatic', '7', 4, 14, 50, 'Alloy', 235, 21, 21),
('2143 cc', 'Diesel', '168 bhp @ 3400 rpm', '300 Nm @ 1600 rpm', 'FWD', '	Automatic', '7', 4, 18, 50, 'Alloy', 235, 22, 22),
('2143 cc', '	Diesel', '181 bhp @ 5500 rpm', '350 Nm @ 1400 rpm', '4WD /AWD', 'Automatic', '7', 4, 19, 50, 'Alloy', 235, 23, 23),
('2925 cc', 'Diesel', '282 bhp @ 3600 rpm', '600 Nm @ 1600 rpm', 'RWD', 'Automatic', '7', 6, 12, 70, 'Alloy', 245, 24, 24),
('2996 cc', 'Petrol', '362 bhp @ 5250 rpm', '	500 Nm @ 1800 rpm', 'RWD', 'Automatic', '9', 6, 8, 70, 'Alloy', 245, 25, 25),
('3982 cc', 'Petroll', '	463 bhp @ 5250 rpm', '700 Nm @ 2000 rpm', 'RWD', 'Automatic', '9', 8, 7, 70, 'Alloy', 245, 26, 26),
('5980 cc', 'Petrol', '621 bhp @ 5000 rpm', '	1000 Nm @ 2300 rpm', 'RWD', 'Automatic', '7', 12, 7, 70, 'Alloy', 245, 27, 27),
('2143 cc', '	Diesel', '160 bhp @ 3800 rpm', '380 Nm @ 1600 rpm', 'RWD', 'Automatic', '7', 4, 10, 93, '	Alloy', 245, 28, 28),
('2143 cc', '	Diesel', '160 bhp @ 3800 rpm', '380 Nm @ 1600 rpm', 'RWD', 'Automatic', '7', 4, 10, 93, '	Alloy', 245, 29, 29),
('2996 cc', '	Petrol', '329 bhp @ 5250 rpm', '	480 Nm @ 1600 rpm', 'AWD', 'Automatic', '9', 6, 11, 100, '	Alloy', 265, 30, 30),
('2987 cc', '	Petrol', '255 bhp @ 3400 rpm', '620 Nm @ 1600 rpm', 'AWD', 'Automatic', '9', 6, 12, 100, '	Alloy', 275, 31, 31),
('5461 cc', '	Petrol', '577 bhp @ 5500 rpm', '760 Nm @ 1750 rpm', ' AWD', 'Automatic', '9', 8, 10, 100, 'Alloy', 295, 32, 32),
('3982 cc', 'Petrol', '469 bhp @ 6000 rpm', '630 Nm @ 1700 rpm', '	RWD', 'Automatic', '7', 8, 13, 65, 'Alloy', 295, 33, 33),
('3982 cc', 'Petrol', '469 bhp @ 6000 rpm', '630 Nm @ 1700 rpm', '	RWD', 'Automatic', '7', 8, 9, 65, 'Alloy', 275, 34, 34),
('	2996 cc', 'Petrol', '362 bhp @ 5500 rpm', '520 Nm @ 2000 rpm', 'AWD', 'Automatic', '9', 4, 9, 93, '	Alloy', 275, 35, 35),
('2143 cc', '	Diesel', '	201 bhp @ 3800 rpm', '500 Nm @ 1600 rpm', '4WD / AWD', '	Automatic', '9', 4, 18, 93, '	Alloy', 255, 36, 36),
('2987 cc', '	Diesel', '255 bhp @ 3400 rpm', '620 Nm @ 1600 rpm', '4WD / AWD', '	Automatic', '9', 6, 18, 93, '	Alloy', 265, 37, 37),
('2996cc', 'Petrol', '	333 bhp @ 5250 rpm', '480 Nm @ 1600 rpm', '4WD / AWD', '	Automatic', '7', 4, 18, 93, 'Alloy', 265, 38, 38),
('	5980 cc', 'Petrol', '	621 bhp @ 5000 rpm', '1000 Nm @ 2300 rpm', 'RWD', 'Automatic', '7', 12, 9, 70, '	Alloy Wheels', 275, 39, 39),
('	1950 cc', 'Diesel', '241 bhp @ 4200 rpm', '	500 Nm @ 1600 rpm', '	RWD', '	Automatic', '9', 4, 19, 66, 'Alloy Wheels', 225, 40, 40),
('2996 cc', 'Petrol', '362 bhp @ 5500 rpm', '520 Nm @ 2000 rpm', 'RWD', '	Automatic', '9', 6, 9, 66, 'Alloy Wheels', 255, 41, 41);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock` int(11) NOT NULL,
  `colour` varchar(11) NOT NULL,
  `modelName` varchar(100) NOT NULL,
  `Classname` varchar(1000) NOT NULL,
  `stID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock`, `colour`, `modelName`, `Classname`, `stID`) VALUES
(5, 'assistant p', '20', '2', 2),
(5, 'placement', '19', '9', 3),
(10, 'placement', '1', '7', 4);

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `TPID` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `tym` time NOT NULL,
  `tdate` date NOT NULL,
  `complaint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`TPID`, `modelID`, `uname`, `tym`, `tdate`, `complaint`) VALUES
(1, 1, 'akashmadhu890@gmail.com', '11:00:00', '2019-11-30', '				sssssssssssssssssssssssss				'),
(2, 1, 'akashmadhu890@gmail.com', '10:00:00', '2019-11-29', '						mmmmmmmmmmmmmmm		'),
(3, 8, 'ashwinmadhu890@gmail.com', '12:59:00', '2019-12-15', '								JGKGJGJHJH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`ACCID`),
  ADD KEY `accno` (`accno`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `accstock`
--
ALTER TABLE `accstock`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `benzclass`
--
ALTER TABLE `benzclass`
  ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `benzmodel`
--
ALTER TABLE `benzmodel`
  ADD PRIMARY KEY (`modelID`),
  ADD KEY `classID` (`ClassID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `carwash`
--
ALTER TABLE `carwash`
  ADD PRIMARY KEY (`CWID`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`clrid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`topup`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `paint`
--
ALTER TABLE `paint`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `classID` (`classID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`PROID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`specID`),
  ADD KEY `modelID` (`modelID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stID`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`TPID`),
  ADD KEY `modelID` (`modelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `ACCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `accstock`
--
ALTER TABLE `accstock`
  MODIFY `accno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benzclass`
--
ALTER TABLE `benzclass`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `benzmodel`
--
ALTER TABLE `benzmodel`
  MODIFY `modelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `carwash`
--
ALTER TABLE `carwash`
  MODIFY `CWID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `clrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `topup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paint`
--
ALTER TABLE `paint`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `PROID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spec`
--
ALTER TABLE `spec`
  MODIFY `specID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `TPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`accno`) REFERENCES `accstock` (`accno`),
  ADD CONSTRAINT `accessories_ibfk_2` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `benzmodel`
--
ALTER TABLE `benzmodel`
  ADD CONSTRAINT `benzmodel_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `benzclass` (`ClassID`);

--
-- Constraints for table `carwash`
--
ALTER TABLE `carwash`
  ADD CONSTRAINT `carwash_ibfk_1` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `paint`
--
ALTER TABLE `paint`
  ADD CONSTRAINT `paint_ibfk_1` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `register` (`UID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`classID`) REFERENCES `benzclass` (`ClassID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `spec`
--
ALTER TABLE `spec`
  ADD CONSTRAINT `spec_ibfk_1` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_1` FOREIGN KEY (`modelID`) REFERENCES `benzmodel` (`modelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
