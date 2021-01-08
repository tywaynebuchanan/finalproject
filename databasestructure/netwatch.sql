-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 06:11 PM
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
-- Table structure for table `tblMovieList`
--

CREATE TABLE `tblMovieList` (
  `sub_id` varchar(11) NOT NULL,
  `movie_id` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date_purchased` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblMovies`
--

CREATE TABLE `tblMovies` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `actor` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mov_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblMovies`
--

INSERT INTO `tblMovies` (`id`, `title`, `description`, `year`, `publisher`, `actor`, `category`, `country`, `duration`, `image`, `mov_id`) VALUES
(15, 'The Mummy', 'Movie about white people that too fass and dig up dead people', '2005', 'Warner Bros', 'Brandon Frazer, Juliet Robert', 'Drama', 'Jamaica', '2hr', 'https://i.pinimg.com/236x/6a/98/cc/6a98cc1448a763fa5e607dd2bd0bb502.jpg', 1),
(16, 'Baby Driver', 'This movie is about a guy that is deaf and is bad ass and kills people but ends up in jail afterwards', '2010', 'Universal Studios', 'Jamie Foxx, Kevin Spacey', 'Drama', 'USA', '00:00:10.000000', 'https://i.pinimg.com/564x/d1/c6/cc/d1c6ccd5257312fcb467c1ae50354ff1.jpg', 2),
(18, 'Movie Edit', 'Baby about a movie trying to see if everything works', '2010', 'Universal Studios', 'Jamie Foxx', 'Action', 'USA', '00:00:10.000000', 'https://i.pinimg.com/564x/d1/c6/cc/d1c6ccd5257312fcb467c1ae50354ff1.jpg', 3),
(20, 'The Mummy', 'Movie about white people that too fass and dig up dead people 2', '2005', 'Warner Bros', 'Brandon Frazer, Juliet Robert, Tiffany Wallace', 'Action', 'USA', '1hr', 'https://i.pinimg.com/236x/6a/98/cc/6a98cc1448a763fa5e607dd2bd0bb502.jpg', 4),
(24, 'Bad Boys', 'This movie about bad boys please leave me alone works', '2018', 'Warners', 'Jamie Foxx', 'Action', 'UK', '1hr', 'https://i.pinimg.com/564x/d1/c6/cc/d1c6ccd5257312fcb467c1ae50354ff1.jpg', 5),
(26, 'Tenet', 'Movie that the youth weh mek Batman did ', '2020', 'Warner Studios', 'Black person', 'Action', 'USA', '1hr', 'https://i.pinimg.com/564x/65/61/dc/6561dcdf046278c71187643b63b0eabc.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblPackages`
--

CREATE TABLE `tblPackages` (
  `packageid` varchar(10) NOT NULL,
  `packagename` varchar(20) NOT NULL,
  `features` varchar(225) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblPackages`
--

INSERT INTO `tblPackages` (`packageid`, `packagename`, `features`, `cost`) VALUES
('PREM', 'Premium', 'Watch 10 Movies Stream on Two Devices Connect Anywhere', '20'),
('STND', 'Standard', 'Watch some moives', '10');

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

-- --------------------------------------------------------

--
-- Table structure for table `tblSubData`
--

CREATE TABLE `tblSubData` (
  `id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `mov_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `firstname`, `lastname`, `role`) VALUES
(1, 'tywaynebuchanan@gmail.com', 'EB3FCCF09F9E49FA8D5E9613BEDEB93A5B3C4759', 'Tywayne', 'Buchanan', 'Data_entry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblMovies`
--
ALTER TABLE `tblMovies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblPackages`
--
ALTER TABLE `tblPackages`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `tblPayments`
--
ALTER TABLE `tblPayments`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `tblPurchase`
--
ALTER TABLE `tblPurchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblSubData`
--
ALTER TABLE `tblSubData`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblSubscribers`
--
ALTER TABLE `tblSubscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblMovies`
--
ALTER TABLE `tblMovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblPurchase`
--
ALTER TABLE `tblPurchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblSubData`
--
ALTER TABLE `tblSubData`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblSubscribers`
--
ALTER TABLE `tblSubscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
