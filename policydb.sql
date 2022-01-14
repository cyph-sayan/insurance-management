-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 05:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `adhar_no` varchar(12) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email_id` varchar(25) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `name`, `date_of_birth`, `adhar_no`, `phone`, `email_id`, `salary`, `join_date`, `branch_id`) VALUES
(101, 'Swami Nandan', '2000-08-20', ' 87459654785', '9852367458', 'swami@gmail.com', 25000, '2017-11-16', 2),
(102, 'Rahul Saraf', '2000-01-12', ' 78456320120', '6520147895', 'rahul@gmail.com', 25000, '2014-07-17', 3),
(103, 'Himanshu Attri', '2001-01-10', ' 85741020369', '8952031275', 'himanshu@gmail.com', 18000, '2021-11-17', 1),
(104, 'Sayan Manna', '2000-08-11', ' 56980698741', '6290801075', 'sayan@gmail.com', 45000, '2012-06-11', 5),
(105, 'Siddhant Agrawal', '2002-01-10', ' 81022574030', '9820202010', 'sidhhant@gmail.com', 11000, '2022-01-02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `phone`, `address`) VALUES
(1, '7898654512', 'RR NAGAR'),
(2, '8598745874', 'BANASHANKARI'),
(3, '9236501425', 'KSR LAYOUT'),
(4, '7410369852', 'MARATHALLI'),
(5, '6589741236', 'MALESHWARAM');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `adhar` varchar(12) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `policy_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_no` int(11) NOT NULL,
  `coverage` varchar(5) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `term_price` varchar(5) DEFAULT NULL,
  `deduciton` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_no`, `coverage`, `issue_date`, `term_price`, `deduciton`) VALUES
(1001, '10000', '2021-09-07', '100', '1%'),
(1002, '30000', '2013-01-30', '300', '3%'),
(1003, '50000', '2017-06-21', '1000', '8%'),
(1004, '80000', '2010-01-07', '5000', '12%'),
(1005, '75000', '2022-01-02', '500', '0%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `policy_no` (`policy_no`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`policy_no`) REFERENCES `policy` (`policy_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`agent_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
