-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 06:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblPayments`
--

CREATE TABLE `tblPayments` (
  `paymentid` varchar(255) NOT NULL,
  `sub_id` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `datepurchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `packageid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblPayments`
--

INSERT INTO `tblPayments` (`paymentid`, `sub_id`, `firstname`, `lastname`, `amount`, `datepurchased`, `packageid`) VALUES
('2455', '29', 'Dummy ', 'User', '30', '2020-12-18 14:39:44', 'PREM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblPayments`
--
ALTER TABLE `tblPayments`
  ADD PRIMARY KEY (`packageid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
