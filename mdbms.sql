-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 01:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BILL_NO` int(3) NOT NULL,
  `EMP_ID` varchar(5) NOT NULL,
  `CUST_ID` varchar(5) NOT NULL,
  `PRICE` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`BILL_NO`, `EMP_ID`, `CUST_ID`, `PRICE`) VALUES
(1, '101', '9', 0),
(2, '100', '13', 60),
(3, '104', '', 0),
(4, '100', '13', 65),
(5, '101', '9', 0),
(6, '100', '13', 165),
(7, '100', '13', 0),
(8, '100', '13', 28),
(9, '123', '', 0),
(10, '101', '9', 0),
(11, '101', '9', 110),
(12, '101', '9', 30),
(13, '100', '13', 300),
(14, '100', '13', 202);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUST_ID` int(5) NOT NULL,
  `CUST_NAME` varchar(20) NOT NULL,
  `CUST_PHONE` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `CUST_NAME`, `CUST_PHONE`) VALUES
(3, 'Sai', 112233445),
(4, 'Mrunal', 6789654321),
(5, 'kiran', 5678943210),
(6, 'nish', 8553620581),
(7, 'saba', 897654321),
(8, 'tahir', 987654321),
(9, 'suf', 98764),
(10, 'sai', 123456),
(11, 'sai', 123456),
(12, 'sai', 123456),
(13, 'sai', 98765431);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_ID` varchar(5) NOT NULL,
  `EMP_NAME` varchar(20) NOT NULL,
  `EMP_PHONE` bigint(10) NOT NULL,
  `EMP_ADD` varchar(30) NOT NULL,
  `EMP_SALARY` bigint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_ID`, `EMP_NAME`, `EMP_PHONE`, `EMP_ADD`, `EMP_SALARY`) VALUES
('100', 'Raj', 8553620591, 'R.T.Nagar', 5000),
('101', 'Rajesh', 8443621581, 'Rajajinagar', 6000),
('102', 'Dilip', 9558291173, 'Shivajinagar', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `MED_ID` int(4) NOT NULL,
  `MED_NAME` varchar(20) NOT NULL,
  `COMPANY` varchar(20) NOT NULL,
  `COST` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`MED_ID`, `MED_NAME`, `COMPANY`, `COST`) VALUES
(2, 'imol', 'vipla', 13),
(3, 'electrol', 'silap', 30),
(4, 'deslor', 'hipa', 15),
(5, 'zintac', 'vics', 5),
(6, 'strepcils', 'cipla', 20),
(7, 'voilini', 'vipac', 75);

-- --------------------------------------------------------

--
-- Table structure for table `qty_med`
--

CREATE TABLE `qty_med` (
  `BNO` int(4) NOT NULL,
  `MED_ID` int(4) NOT NULL,
  `QUANTITY` int(3) NOT NULL,
  `COST` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qty_med`
--

INSERT INTO `qty_med` (`BNO`, `MED_ID`, `QUANTITY`, `COST`) VALUES
(1, 1, 3, 30),
(1, 7, 1, 75),
(2, 3, 2, 60),
(4, 1, 2, 20),
(4, 4, 3, 45),
(6, 4, 1, 15),
(6, 7, 2, 150),
(8, 2, 1, 13),
(8, 5, 3, 15),
(11, 1, 2, 20),
(11, 3, 3, 90),
(12, 1, 3, 30),
(13, 1, 4, 40),
(13, 3, 2, 60),
(13, 1, 4, 40),
(13, 3, 2, 60),
(13, 1, 4, 40),
(13, 3, 2, 60),
(14, 2, 4, 52),
(14, 3, 5, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BILL_NO`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`MED_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BILL_NO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
