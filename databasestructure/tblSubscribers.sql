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
  `role` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblSubscribers`
--

INSERT INTO `tblSubscribers` (`sub_id`, `firstname`, `lastname`, `username`, `email`, `password`, `isActive`, `role`, `timestamp`) VALUES
(5, 'Tywayne', 'Buchanan', 'tywaynebuchanan', 'tywaynebuchanan@gmail.com', 'eb3fccf09f9e49fa8d5e9613bedeb93a5b3c4759', 'YES', 'Admin', '2020-12-16 13:21:58'),
(7, 'Test', 'Testing', 'testing@gmail.com', 'testing@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'NO', 'DataEntry', '2020-12-16 13:21:58'),
(8, 'Testing again', 'Testin', 'Test', 'TestingElema', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Admin', '2020-12-16 13:21:58'),
(9, 'Boy', 'Girl', 'BoyGirl', 'boygirl@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'NO', 'Subscriber', '2020-12-16 13:47:26'),
(11, 'Kadia ', 'Smith', 'kadiasmith', 'kadiasmith@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'DataEntry', '2020-12-16 13:21:58'),
(13, 'Murray ', 'Bennett', 'murraybennet', 'murraybennet', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'DataEntry', '2020-12-16 13:21:58'),
(25, 'Help', 'Me', 'helpme', 'helpme@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'NO', 'DataEntry', '2020-12-16 13:21:58'),
(26, 'User', 'User', 'username@gmail.com', 'username@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'NO', 'DataEntry', '2020-12-16 13:21:58'),
(27, 'User', 'User1', 'user@gmail.com', 'user@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'DataEntry', '2020-12-16 13:21:58'),
(28, 'Tywayne', 'Buchanan', 'tywayne', 'tywayne', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Subscriber', '2020-12-16 13:21:58'),
(29, 'Dummy ', 'User', 'dummyuser', 'dummyuser@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Subscriber', '2020-12-18 14:43:01'),
(30, 'Working', 'User', 'superuser', 'superuser@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Subscriber', '2020-12-16 13:21:58'),
(34, 'Mark ', 'Brown', 'markbrown', 'markbrown@gmail.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Subscriber', '2020-12-16 13:21:58'),
(35, 'Trudy', 'Beale', 'trudybeale', 'trudybeale@dashout.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'Subscriber', '2020-12-16 13:21:58'),
(36, 'Chennell', 'Allison', 'callison', 'chennellallison@sexygirls.com', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'YES', 'DataEntry', '2020-12-16 13:21:58'),
(41, 'New ', 'User', 'newuser', 'newuser@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63', 'NO', 'Subscriber', '2020-12-16 13:21:58');

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
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
