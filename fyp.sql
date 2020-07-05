-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 08:25 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchId` int(100) NOT NULL,
  `batchYear` varchar(100) DEFAULT NULL,
  `opId` int(100) DEFAULT NULL,
  `batchDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `batchStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchId`, `batchYear`, `opId`, `batchDate`, `batchStatus`) VALUES
(1, '2K15', 3, '2019-09-14 00:40:38', 'n'),
(2, '2K16', 3, '2019-09-14 00:40:50', 'y'),
(3, '2K17', 3, '2019-09-14 00:40:57', 'y'),
(4, '2K18', 3, '2019-09-14 00:41:03', 'y'),
(5, '2K19', 3, '2019-09-14 00:41:08', 'y'),
(6, '2K20', 3, '2019-09-26 17:26:53', 'y'),
(7, '2K21', 3, '2019-09-26 17:35:55', 'y'),
(8, '2K13', 3, '2019-09-26 19:51:13', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bId` int(100) NOT NULL,
  `bNo` varchar(100) DEFAULT NULL,
  `bPss` varchar(100) DEFAULT NULL,
  `bFare` int(100) DEFAULT NULL,
  `bDriverId` int(100) DEFAULT NULL,
  `bConId` int(100) DEFAULT NULL,
  `bStopId` int(100) DEFAULT NULL,
  `TotalSeats` int(100) DEFAULT NULL,
  `opId` varchar(11) DEFAULT NULL,
  `bDate` date DEFAULT NULL,
  `bStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bId`, `bNo`, `bPss`, `bFare`, `bDriverId`, `bConId`, `bStopId`, `TotalSeats`, `opId`, `bDate`, `bStatus`) VALUES
(1, 'F16', 'root', 250, 1, 8, 19, 5, '3', '2019-08-21', 'y'),
(2, '122', 'root', 20, 3, 3, 2, 10, '3', '2019-08-21', 'y'),
(3, '444', 'root', 20, 4, 4, 3, 40, '3', '2019-09-05', 'y'),
(4, 'QWE11', 'root', 50, 2, 4, 5, 65, '3', '2019-09-26', 'y'),
(5, 'QWE122', 'root', 30, 1, 1, 1, 22, '3', '2019-09-26', 'y'),
(6, 'MMA222', 'root', 100, 5, 5, 5, 5, '3', '2019-09-26', 'y'),
(7, '555', 'root', 100, 5, 7, 5, 60, '3', '2019-10-20', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `bustransactions`
--

CREATE TABLE `bustransactions` (
  `btId` int(11) NOT NULL,
  `bId` int(100) DEFAULT NULL,
  `btDeposit` int(100) DEFAULT NULL,
  `studentId` int(100) DEFAULT NULL,
  `btwidthdraw` int(100) DEFAULT NULL,
  `opId` varchar(11) DEFAULT NULL,
  `btDate` date DEFAULT NULL,
  `btStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bustransactions`
--

INSERT INTO `bustransactions` (`btId`, `bId`, `btDeposit`, `studentId`, `btwidthdraw`, `opId`, `btDate`, `btStatus`) VALUES
(1, 1, 100, NULL, NULL, '3', '2019-12-28', 'y'),
(2, 1, NULL, NULL, 20, '3', '2019-12-28', 'y'),
(3, 1, 20, 1, NULL, NULL, '2019-12-28', 'n'),
(4, 1, 20, 1, NULL, NULL, '2019-12-29', 'y'),
(5, 1, NULL, NULL, 10, '3', '2020-01-03', 'y'),
(6, 1, NULL, NULL, 10, '3', '2020-01-03', 'y'),
(7, 1, 30, 1, NULL, NULL, '2020-01-07', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `comId` int(11) NOT NULL,
  `comSId` int(11) DEFAULT NULL,
  `comSub` text,
  `comDes` text,
  `comDate` date DEFAULT NULL,
  `comStatus` varchar(22) DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comId`, `comSId`, `comSub`, `comDes`, `comDate`, `comStatus`) VALUES
(1, 0, '', '', '2019-12-29', 'y'),
(2, 1, 'First Subject', 'my complaint', '2019-12-29', 'y'),
(3, 1, 'First Subject', 'my complaint number q2', '2019-12-29', 'y'),
(4, 1, 'First Subject', 'my complaint number q2', '2019-12-29', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `conductor`
--

CREATE TABLE `conductor` (
  `conId` int(100) NOT NULL,
  `conName` varchar(100) NOT NULL,
  `conCnic` varchar(100) NOT NULL,
  `opId` varchar(11) DEFAULT NULL,
  `conDate` date NOT NULL,
  `conStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conductor`
--

INSERT INTO `conductor` (`conId`, `conName`, `conCnic`, `opId`, `conDate`, `conStatus`) VALUES
(1, 'Daniyal Ali', '4424443133', NULL, '2019-08-20', 'n'),
(2, 'Pannu Khan', '4113123123', NULL, '2019-08-20', 'y'),
(3, 'Fatima Zehra', '232131223123', NULL, '2019-08-21', 'y'),
(4, 'Noor Ali', '24242424', '3', '2019-09-05', 'y'),
(5, 'DSWW', '343242342', '3', '2019-09-26', 'y'),
(6, 'Zeeshan', '45454554554', '3', '2019-09-26', 'y'),
(7, 'Yahyah', '4242424242', '3', '2019-09-26', 'y'),
(8, 'Gulshair', '424242424242', '3', '2019-09-26', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` int(11) NOT NULL,
  `deptName` varchar(100) DEFAULT NULL,
  `deptShortName` varchar(100) DEFAULT NULL,
  `opId` int(100) DEFAULT NULL,
  `deptDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deptStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptId`, `deptName`, `deptShortName`, `opId`, `deptDate`, `deptStatus`) VALUES
(1, 'SOFTWARE ', 'SWE', 3, '2019-09-14 00:18:43', 'y'),
(2, 'INFORMATION TECHNOLOGY', 'IT', 3, '2019-09-14 00:35:00', 'y'),
(3, 'ELECTRONICS', 'ELE', 3, '2019-09-14 00:35:15', 'y'),
(4, 'TELECOMMUNICATION ', 'TELCOM', 3, '2019-09-14 00:38:03', 'y'),
(5, 'Microbiology', 'MB', 3, '2019-09-18 13:46:44', 'y'),
(6, 'Microbiology', 'MB', 3, '2019-09-18 13:48:19', 'y'),
(7, 'PHYSICS', 'PHY', 3, '2019-09-26 14:53:47', 'y'),
(8, 'Computer Science', 'CS', 3, '2019-09-26 14:56:01', 'y'),
(9, 'Zoology', 'ZL', 3, '2019-09-26 14:56:46', 'y'),
(10, 'Pakistan Study', 'PS', 3, '2019-09-26 14:58:57', 'n'),
(11, 'Biotechnology', 'BT', 3, '2019-09-26 15:01:03', 'y'),
(12, 'English', 'Eng', 3, '2019-09-26 17:18:53', 'y'),
(13, 'Biochemistry', 'BIC', 3, '2019-09-26 17:21:23', 'y'),
(14, 'Civil', 'CV', 3, '2019-09-26 17:27:58', 'y'),
(15, 'D-Pharmacy', 'D-Ph', 3, '2019-09-26 19:50:37', 'y'),
(16, 'Mass Communication', 'MASC', 3, '2019-09-30 21:51:00', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `dId` int(100) NOT NULL,
  `dName` varchar(100) NOT NULL,
  `dCnic` varchar(100) NOT NULL,
  `opId` varchar(11) DEFAULT NULL,
  `dDate` date NOT NULL,
  `dStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dId`, `dName`, `dCnic`, `opId`, `dDate`, `dStatus`) VALUES
(1, 'Dodo ', '42332320022', NULL, '2019-08-20', 'n'),
(2, 'Arbab', '413213123', NULL, '2019-08-20', 'y'),
(3, 'Mariam Pathan', '2332323232323', NULL, '2019-08-21', 'y'),
(4, 'Tanveer', '41414241414124', '3', '2019-09-05', 'y'),
(5, 'Tikka Khan', '42424242424242', '3', '2019-09-26', 'y'),
(6, 'Azam Khan', '42424242424', '3', '2019-09-26', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `oId` int(50) NOT NULL,
  `oName` varchar(50) DEFAULT NULL,
  `oType` varchar(50) DEFAULT NULL,
  `oUsername` varchar(50) NOT NULL,
  `oPassword` varchar(50) NOT NULL,
  `oPhoto` longblob,
  `oDate` date NOT NULL,
  `oStatus` varchar(50) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`oId`, `oName`, `oType`, `oUsername`, `oPassword`, `oPhoto`, `oDate`, `oStatus`) VALUES
(1, 'Muhammad Haaris', 'admin', 'haaris', 'root', NULL, '2019-07-07', 'y'),
(2, 'Muhammad Aquib', 'Admin', 'aquib', 'root', 0x4d7568616d6d6164204171756962313937332e6a7067, '2019-07-27', 'y'),
(3, 'Saqib Ali', 'Deposit', 'saqib', 'root', 0x536171696220416c6932393836372e6a7067, '2019-07-27', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `stop`
--

CREATE TABLE `stop` (
  `stopId` int(100) NOT NULL,
  `stopName` varchar(100) DEFAULT NULL,
  `opId` varchar(11) DEFAULT NULL,
  `stopCreatedDate` date DEFAULT NULL,
  `stopStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stop`
--

INSERT INTO `stop` (`stopId`, `stopName`, `opId`, `stopCreatedDate`, `stopStatus`) VALUES
(1, 'Latifabad UNIT - 75', NULL, '2019-08-21', 'n'),
(2, 'Latifabad UNIT - 5 ', NULL, '2019-08-21', 'y'),
(3, 'Old Campus evening', '3', '2019-09-05', 'y'),
(4, 'City gate', '3', '2019-09-05', 'y'),
(5, 'Mirpurkhas', '3', '2019-09-14', 'y'),
(19, 'Karachi', '3', '2019-09-26', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sId` int(100) NOT NULL,
  `sName` varchar(100) DEFAULT NULL,
  `sFName` varchar(100) DEFAULT NULL,
  `sBatch` int(100) DEFAULT NULL,
  `sRollNo` varchar(100) DEFAULT NULL,
  `sDept` int(100) DEFAULT NULL,
  `sEmail` varchar(100) DEFAULT NULL,
  `sPassword` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `sCnic` varchar(100) DEFAULT NULL,
  `sAc` varchar(100) DEFAULT NULL,
  `sPhoto` longblob,
  `opId` varchar(11) DEFAULT NULL,
  `sDate` date DEFAULT NULL,
  `sStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sId`, `sName`, `sFName`, `sBatch`, `sRollNo`, `sDept`, `sEmail`, `sPassword`, `phone`, `sCnic`, `sAc`, `sPhoto`, `opId`, `sDate`, `sStatus`) VALUES
(1, 'Muhammad Haaris', 'Ainul Huda', 2, '42', 1, 'syedhaaris97', 'root', '03113757136', '4141414141414141', '42982019', 0x4d7568616d6d616420486161726973383435367069632d312e706e67, '3', '2019-12-29', 'y'),
(2, 'Mariam Fatima', 'Ishrat Hussain Khan', 2, '30', 1, 'mariam', 'root', '332423424', '312313131', '30242019', 0x4d617269616d20466174696d383437367069632d322e706e67, '3', '2019-12-29', 'y'),
(3, 'Imran', 'Irfan', 3, '22', 1, 'imran00', 'root', '03000000000', '424242422424242', '22252020', 0x496d72616e39383038362e6a7067, '3', '2020-01-08', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `studentbalance`
--

CREATE TABLE `studentbalance` (
  `sBId` int(100) NOT NULL,
  `sId` int(100) DEFAULT NULL,
  `sBDeposit` int(100) DEFAULT NULL,
  `sBWithdraw` int(100) DEFAULT NULL,
  `sBBusId` int(100) DEFAULT NULL,
  `sBOpId` int(100) DEFAULT NULL,
  `sBDate` date DEFAULT NULL,
  `sBStatus` varchar(100) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentbalance`
--

INSERT INTO `studentbalance` (`sBId`, `sId`, `sBDeposit`, `sBWithdraw`, `sBBusId`, `sBOpId`, `sBDate`, `sBStatus`) VALUES
(1, 1, 50, NULL, NULL, 3, '2019-12-28', 'y'),
(2, 1, NULL, 22, NULL, 3, '2019-12-28', 'y'),
(5, 1, 12, NULL, NULL, 3, '2020-01-02', 'y'),
(8, 1, NULL, 20, 1, NULL, '2020-01-03', 'y'),
(9, 1, NULL, 10, NULL, 3, '2020-01-03', 'y'),
(10, 1, 20, NULL, NULL, 3, '2020-01-03', 'y'),
(11, 1, NULL, 30, 1, NULL, '2020-01-07', 'n'),
(12, 1, 10, NULL, NULL, 3, '2020-01-09', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchId`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `bustransactions`
--
ALTER TABLE `bustransactions`
  ADD PRIMARY KEY (`btId`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`conId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `stop`
--
ALTER TABLE `stop`
  ADD PRIMARY KEY (`stopId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `studentbalance`
--
ALTER TABLE `studentbalance`
  ADD PRIMARY KEY (`sBId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bustransactions`
--
ALTER TABLE `bustransactions`
  MODIFY `btId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `conductor`
--
ALTER TABLE `conductor`
  MODIFY `conId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `dId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `oId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stop`
--
ALTER TABLE `stop`
  MODIFY `stopId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentbalance`
--
ALTER TABLE `studentbalance`
  MODIFY `sBId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
