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
-- Table structure for table `tblPurchase`
--

CREATE TABLE `tblPurchase` (
  `id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `package` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `mov_id` int(10) NOT NULL,
  `datepurchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `packageid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblPurchase`
--

INSERT INTO `tblPurchase` (`id`, `sub_id`, `package`, `price`, `mov_id`, `datepurchased`, `packageid`) VALUES
(1, 34, 'Starter', '20', 10, '2020-12-13 21:37:32', 'ST100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblPurchase`
--
ALTER TABLE `tblPurchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblPurchase`
--
ALTER TABLE `tblPurchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
