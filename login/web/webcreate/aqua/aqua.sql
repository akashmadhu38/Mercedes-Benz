-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 02:14 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `addboat`
--

CREATE TABLE `addboat` (
  `bid` int(4) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `des` varchar(200) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `meals` varchar(10) NOT NULL,
  `bedtype` varchar(20) NOT NULL,
  `bedno` varchar(10) NOT NULL,
  `staffno` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `trano` varchar(10) NOT NULL,
  `sp` varchar(30) NOT NULL,
  `dp` varchar(30) NOT NULL,
  `route` varchar(30) NOT NULL,
  `kf` varchar(20) NOT NULL,
  `balc` varchar(20) NOT NULL,
  `acco` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lake` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `loginid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addboat`
--

INSERT INTO `addboat` (`bid`, `bname`, `des`, `regno`, `rate`, `meals`, `bedtype`, `bedno`, `staffno`, `ac`, `trano`, `sp`, `dp`, `route`, `kf`, `balc`, `acco`, `type`, `lake`, `photo`, `loginid`) VALUES
(1, 'Jalarani', 'This is a super delux house boat.', '4656', '27000', 'yes', 'Double bedrooms', 'Two', 'Three', 'AC', '10-20', 'Kochi', 'Kumarakom', 'Alappey-kumarakom', 'no', 'yes', 'no', 'Delux', 'gtyry', 'download.jpg', '7'),
(2, 'Cochin Queen', 'We provides special dishes', '5657', '20999', 'yes', 'Double bedrooms', 'Three', 'More than ', 'AC', '5-10', 'Thumboly', 'Kochi', 'Kochi-alappey', 'no', 'yes', 'no', 'Delux', 'ghfgh', 'e.jpg', '7'),
(3, 'navya', 'This Boat is Nice', '200', '4566', 'yes', 'Double bedrooms', 'Two', 'Two', 'AC', '10-20', 'Kumarakom', 'Kumarakom', 'Kumarakom-alappey', 'yes', 'yes', 'yes', 'Premium', 'vemand', 'e.jpg', '7');

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `aid` int(4) NOT NULL,
  `bal` varchar(100) NOT NULL,
  `dateofpay` varchar(30) NOT NULL,
  `loginid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`aid`, `bal`, `dateofpay`, `loginid`) VALUES
(3, '2099.9', '09/12/2017', 2),
(4, '2099.9', '09/12/2017', 2),
(5, '2700', '11/12/2017', 2),
(6, '2700', '06/01/2018', 2),
(7, '2700', '06/01/2018', 2),
(8, '2700', '06/01/2018', 2),
(9, '2700', '06/01/2018', 2),
(10, '2700', '06/01/2018', 2),
(11, '2700', '06/01/2018', 2),
(12, '2700', '06/01/2018', 2);

-- --------------------------------------------------------

--
-- Table structure for table `adminplan`
--

CREATE TABLE `adminplan` (
  `aid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rate` varchar(30) NOT NULL,
  `meals` varchar(30) NOT NULL,
  `bedtype` varchar(30) NOT NULL,
  `nobed` varchar(30) NOT NULL,
  `ac` varchar(20) NOT NULL,
  `ea` varchar(10) NOT NULL,
  `ca` varchar(10) NOT NULL,
  `nop` varchar(10) NOT NULL,
  `start` varchar(20) NOT NULL,
  `desti` varchar(20) NOT NULL,
  `route` varchar(30) NOT NULL,
  `kf` varchar(20) NOT NULL,
  `balc` varchar(20) NOT NULL,
  `cance` varchar(20) NOT NULL,
  `night` varchar(20) NOT NULL,
  `days` varchar(20) NOT NULL,
  `acco` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminplan`
--

INSERT INTO `adminplan` (`aid`, `name`, `rate`, `meals`, `bedtype`, `nobed`, `ac`, `ea`, `ca`, `nop`, `start`, `desti`, `route`, `kf`, `balc`, `cance`, `night`, `days`, `acco`, `type`, `photo`) VALUES
(1, 'special package', 'below Rs.10000/-', 'Breakfast-Dinner', 'Double bedroom', 'One', 'AC', 'yes', 'yes', '5-10', 'Kumarakom', 'Kumarakom', 'Kochi', 'no', 'yes', 'no', 'Two', 'Two', 'yes', 'Delux', 'g.jpg'),
(2, 'Honey moon pacakage', 'Rs.10000', 'Breakfast-Dinner', 'Double bedroom', 'One', 'NON Ac', 'no', 'no', '5-10', 'Kumarakom', 'Kumarakom', 'kochi', 'no', 'yes', 'no', 'Two', 'Two', 'r', 'r', 'g.jpg'),
(4, 'Season Package', 'Rs.10000/- to Rs.15000/-', 'All meals', 'Double bedroom', 'Two', 'NON AC', 'yes', 'yes', '5-10', 'Kumarakom', 'Alappey', 'Kumarakom', 'yes', 'no', 'no', 'Two', 'One', 'yes', 'Delux', 'g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boattoplan`
--

CREATE TABLE `boattoplan` (
  `boatid` varchar(10) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `planid` varchar(11) NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boattoplan`
--

INSERT INTO `boattoplan` (`boatid`, `loginid`, `planid`, `id`) VALUES
('1 ', '7', '1', 1),
('1', '7', '1', 2),
('1', '7', '6 ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(4) NOT NULL,
  `bid` int(4) NOT NULL,
  `loginid` int(4) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `amt` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `bid`, `loginid`, `ctype`, `exp`, `cvv`, `amt`, `date`) VALUES
(1, 2, 2, 'Credit card', '2017-12-19', '666', '25000/- ', '2019-03-20'),
(2, 2, 2, 'Credit card', '2017-12-19', '666', '25000/- ', '2019-03-20'),
(3, 2, 2, 'Credit card', '2017-12-19', '887', '20999/- ', '2019-03-26'),
(4, 2, 2, 'Visa card', '2017-12-26', '56', '20999/- ', '2019-03-19'),
(5, 1, 2, 'Debit card', '2017-12-19', '3543', '27000/- ', '2019-03-13'),
(6, 1, 2, 'Credit card', '2018-01-25', '564', '27000 ', '2019-03-13'),
(7, 1, 2, 'Debit card', '2018-01-18', '321', '27000 ', '2019-03-18'),
(9, 1, 2, 'Credit card', '', 'd', '27000 ', '2019-03-11'),
(10, 1, 2, 'Debit card', '', '234', '27000 ', '2019-03-16'),
(11, 1, 0, 'Visa card', '2018-01-25', '55', '27000 ', '2019-03-17'),
(12, 1, 2, 'Credit card', '2018-01-25', '555', '27000 ', '2019-03-23'),
(13, 1, 2, 'Credit card', '2018-01-25', '555', '27000 ', '2019-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `companyplan`
--

CREATE TABLE `companyplan` (
  `cid` int(4) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `des` varchar(300) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `status` int(4) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyplan`
--

INSERT INTO `companyplan` (`cid`, `pname`, `rate`, `des`, `loginid`, `status`, `photo`) VALUES
(1000, 'Honeymoon special', 'Rs.67886', 'In this package we provide special facilities like more entertainment programs like cycling,fishing', '7', 1, 's.jpg'),
(1001, 'vacation special', 'Rs.10000/- to Rs.150', 'In this package we provide special facilities like more entertainment programs like cycling,fishing', '7', 1, 't.jpg'),
(1002, 'Season Special', 'Rs.10000', 'In this package we provide special facilities like more entertainment programs like cycling,fishing', '7', 0, 't.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` int(4) NOT NULL,
  `floginid` int(4) NOT NULL,
  `comp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `floginid`, `comp`) VALUES
(1, 2, 'services are very poor'),
(2, 17, 'the ac in this boat is not working');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sub` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `sub`, `msg`) VALUES
(1, 'Saritha', 'saritha@gmail.com', 'i need to know more ', 'i need to contact to this site'),
(4, 'Name', 'Email', 'Subject', 'Message'),
(5, 'Name', 'Email', 'Subject', 'Message'),
(6, 'Name', 'saintgitsstudents@gm', 'Subject', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'Henry', 'Henry', 'user', 1),
(3, 'pkcompany', 'pk', 'owner', 1),
(7, 'Kurian', 'Kurian', 'owner', 1),
(8, 'Thomas', 'Thomas', 'user', 0),
(9, 'anu', 'anu', 'owner', 0),
(10, 'laya', 'laya', 'user', 0),
(11, 'anu', 'anu', 'user', 0),
(12, 'anu', 'anu', 'owner', 1),
(17, 'laya', 'laya', 'user', 1),
(18, 's', 's', 'owner', 0),
(19, 'george', 'george', 'owner', 0),
(20, 'anjus', 'anjus', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `owneraccount`
--

CREATE TABLE `owneraccount` (
  `oid` int(4) NOT NULL,
  `bal` varchar(20) NOT NULL,
  `floginid` int(4) NOT NULL,
  `paydate` varchar(20) NOT NULL,
  `ownid` int(4) NOT NULL,
  `boatname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owneraccount`
--

INSERT INTO `owneraccount` (`oid`, `bal`, `floginid`, `paydate`, `ownid`, `boatname`) VALUES
(1, '18899.1', 2, '09/12/2017', 7, 'queen'),
(2, '24300', 2, '11/12/2017', 7, 'paradise'),
(4, '24300', 2, '06/01/2018', 7, 'Jalarani'),
(5, '24300', 2, '06/01/2018', 7, 'Jalarani'),
(6, '24300', 2, '06/01/2018', 7, 'Jalarani');

-- --------------------------------------------------------

--
-- Table structure for table `ownerreg`
--

CREATE TABLE `ownerreg` (
  `oid` int(4) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ownname` varchar(50) NOT NULL,
  `licno` varchar(20) NOT NULL,
  `lmark` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `loginid` int(4) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerreg`
--

INSERT INTO `ownerreg` (`oid`, `cname`, `ownname`, `licno`, `lmark`, `district`, `location`, `email`, `contact`, `date`, `loginid`, `status`) VALUES
(1, 'P.K.company of houseboats', 'James varghese', 'Rt57873', 'P.K group of company,kottayam', 'Cochin', 'Cochin', 'pkcompany@gmail.com', '7896847874', '30-12-2017', 3, 1),
(2, 'Allapey Beauty', 'N.M Narayanan', 'Rt7898', 'Allapey beauty company,Thumboly po', 'Alapuzha', 'Alapuzha', 'allapey@gmail.com', '788565884', '01-01-2018', 4, 1),
(6, 'Mary Rani', 'Thomas p.K', 'RF457334', 'Thomas villa', 'kottayam', 'pala', 'thomas@gmail.com', '78957756736', '18/11/2017', 7, 1),
(8, 'pk company', 'anu', '4562222', 'nammahhhggg', 'kottayam', 'puthuppally', 'anumariamkurian@gmai', '1234567890', '06/01/2018', 12, 1),
(11, 'Elizabeth', 'George P.B', 'LY563', 'near church', 'thrissur', 'Peechi', 'george@gmail.com', '7883452674', '11/03/2018', 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(4) NOT NULL,
  `floginid` int(10) NOT NULL,
  `boatid` int(10) NOT NULL,
  `review` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `floginid`, `boatid`, `review`) VALUES
(1, 2, 2, 'superb'),
(2, 2, 2, 'Very good'),
(3, 2, 3, 'superb');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `uid` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `loginid` int(4) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`uid`, `Name`, `hname`, `Email`, `contact`, `loginid`, `status`) VALUES
(1, 'Henry', 'henry villa,Kottayam p.o', 'henry@gmail.com', '789645456', 2, 1),
(2, 'Laya', 'laya nivas', 'laya@gmail.com', '789055675', 3, 1),
(3, 'anna', 'anna nivas', 'anna@gmail.com', '9961995468', 8, 0),
(4, 'anumariam', 'pallayill', 'anumariamkurian@gmail.com', '9745248381', 10, 0),
(8, 'Saniya', 'Panaparambil house\r\n', 'sanarshi777@gmail.com', '1234567899', 16, 0),
(9, 'laya', 'layanivas', 'layanivas@gmail.com', '7894561237', 17, 1),
(10, 'Anju S nair', 'anju villa', 'anju@gmail.com', '7883452674', 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addboat`
--
ALTER TABLE `addboat`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `adminplan`
--
ALTER TABLE `adminplan`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `boattoplan`
--
ALTER TABLE `boattoplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `companyplan`
--
ALTER TABLE `companyplan`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `owneraccount`
--
ALTER TABLE `owneraccount`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `ownerreg`
--
ALTER TABLE `ownerreg`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addboat`
--
ALTER TABLE `addboat`
  MODIFY `bid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `adminplan`
--
ALTER TABLE `adminplan`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boattoplan`
--
ALTER TABLE `boattoplan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companyplan`
--
ALTER TABLE `companyplan`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `owneraccount`
--
ALTER TABLE `owneraccount`
  MODIFY `oid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ownerreg`
--
ALTER TABLE `ownerreg`
  MODIFY `oid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
