-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 06:34 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblMovies`
--
ALTER TABLE `tblMovies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblMovies`
--
ALTER TABLE `tblMovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
