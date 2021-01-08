-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 06:01 AM
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
-- Table structure for table `tblSubscribers`
--

CREATE TABLE `tblSubscribers` (
  `sub_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isActive` varchar(5) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystring22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblSubscribers`
--

INSERT INTO `tblSubscribers` (`sub_id`, `firstname`, `lastname`, `username`, `email`, `password`, `isActive`, `randSalt`) VALUES
(1, 'Tywayne', 'Buchanan', 'tywaynebuchanan@gmail.com', 'tywaynebuchanan@gmail.com', 'jamaica1', 'NO', '$2y$10$iusesomecrazystring22'),
(2, 'Tywayne', 'Buchanan', 'tywaynebuchanan@gmail.com', 'tywaynebuchanan@gmail.com', 'jamaica1', 'NO', '$2y$10$iusesomecrazystring22'),
(3, '', '', '', '', '', 'NO', '$2y$10$iusesomecrazystring22'),
(4, 'Tywayne', 'Buchanan', 'tywaynebuchanan@gmail.com', 'tywaynebuchanan@gmail.com', 'jamaica1', 'NO', '$2y$10$iusesomecrazystring22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSubscribers`
--
ALTER TABLE `tblSubscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblSubscribers`
--
ALTER TABLE `tblSubscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
