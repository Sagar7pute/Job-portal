-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 05:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dai`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `aid` int(11) NOT NULL,
  `eeid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`aid`, `eeid`, `jid`, `status`) VALUES
(14, 2, 5, 1),
(34, 3, 7, 1),
(41, 1, 6, 1),
(45, 4, 5, 1),
(46, 4, 6, 1),
(47, 4, 6, 1),
(51, 4, 10, 1),
(52, 5, 11, 1),
(53, 6, 12, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `emp`
-- (See below for the actual view)
--
CREATE TABLE `emp` (
`eeid` int(11)
,`jid` int(11)
,`date` timestamp
,`desg` varchar(100)
,`descr` varchar(100)
,`location` varchar(100)
,`payment` int(11)
,`requirement` int(5)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `empj`
-- (See below for the actual view)
--
CREATE TABLE `empj` (
`eeid` int(11)
,`jid` int(11)
,`date` timestamp
,`desg` varchar(100)
,`descr` varchar(100)
,`location` varchar(100)
,`payment` int(11)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eeid` int(11) NOT NULL,
  `eename` varchar(50) NOT NULL,
  `Skill` varchar(50) NOT NULL,
  `eadd` varchar(50) NOT NULL,
  `econ` varchar(100) NOT NULL,
  `epass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eeid`, `eename`, `Skill`, `eadd`, `econ`, `epass`) VALUES
(1, 'sagar', 'plumber', 'beed', '9822746407', 3344),
(2, 'Bhanu', 'handyman', 'pune', '9404135387', 4455),
(3, 'parag', 'carpenter', 'beed', '9999999999', 8888),
(4, 'Shiva', 'Driver', 'Baramati', '5555555555', 1111),
(5, 'Parag', 'Electrician', 'Beed', '9999955555', 4444),
(6, 'Shalini', 'Cook', 'Hadapsar', '9999999999', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eid` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `eph` varchar(100) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eid`, `ename`, `eph`, `pass`) VALUES
(1, 'Shyaam', '5566778855', 2233),
(2, 'RAM', '6666666666', 3333),
(3, 'anish', '3333333333', 3333),
(4, 'Modi', '7777777777', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `desg` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `payment` int(11) NOT NULL,
  `requirement` int(5) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `date`, `desg`, `descr`, `location`, `payment`, `requirement`, `eid`) VALUES
(5, '2021-07-27 04:54:25', 'Handy man', 'We need Handy man to clean our lawn .', 'Koregaon,Pune', 500, 2, 1),
(6, '2021-07-28 18:30:00', 'Plumber', 'We need a plumber to fix our drainage .', 'Chinchwad,Pune', 1000, 0, 1),
(7, '2021-07-27 18:30:00', 'Carpenter', 'we need car painter', 'Satara', 1000, 2, 2),
(10, '2021-08-13 18:30:00', 'painter', 'we', 'pune', 1000, 0, 1),
(11, '2021-08-16 18:30:00', 'Electrician', 'WE need good electricians', 'Pimpri', 1000, 1, 3),
(12, '2021-08-30 18:30:00', 'MAid', 'WE need a good maid for our house.', 'Hadapsar,Pune', 3000, 1, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `req`
-- (See below for the actual view)
--
CREATE TABLE `req` (
`jid` int(11)
,`eeid` int(11)
,`eename` varchar(50)
,`eadd` varchar(50)
,`econ` varchar(100)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `emp`
--
DROP TABLE IF EXISTS `emp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `emp`  AS SELECT `employee`.`eeid` AS `eeid`, `job`.`jid` AS `jid`, `job`.`date` AS `date`, `job`.`desg` AS `desg`, `job`.`descr` AS `descr`, `job`.`location` AS `location`, `job`.`payment` AS `payment`, `job`.`requirement` AS `requirement`, `application`.`status` AS `status` FROM ((`job` join `employee`) join `application`) WHERE `employee`.`eeid` = `application`.`eeid` AND `job`.`jid` = `application`.`jid` AND `application`.`status` = 0 ;

-- --------------------------------------------------------

--
-- Structure for view `empj`
--
DROP TABLE IF EXISTS `empj`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `empj`  AS SELECT `employee`.`eeid` AS `eeid`, `job`.`jid` AS `jid`, `job`.`date` AS `date`, `job`.`desg` AS `desg`, `job`.`descr` AS `descr`, `job`.`location` AS `location`, `job`.`payment` AS `payment`, `application`.`status` AS `status` FROM ((`application` join `job`) join `employee`) WHERE `employee`.`eeid` = `application`.`eeid` AND `job`.`jid` = `application`.`jid` AND `application`.`status` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `req`
--
DROP TABLE IF EXISTS `req`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `req`  AS SELECT `job`.`jid` AS `jid`, `employee`.`eeid` AS `eeid`, `employee`.`eename` AS `eename`, `employee`.`eadd` AS `eadd`, `employee`.`econ` AS `econ`, `application`.`status` AS `status` FROM ((`application` join `job`) join `employee`) WHERE `job`.`jid` = `application`.`jid` AND `employee`.`eeid` = `application`.`eeid` AND `job`.`eid` = 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `eeid` (`eeid`),
  ADD KEY `jid` (`jid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eeid`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `eid` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `eeid` FOREIGN KEY (`eeid`) REFERENCES `employee` (`eeid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jid` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `eid` FOREIGN KEY (`eid`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
