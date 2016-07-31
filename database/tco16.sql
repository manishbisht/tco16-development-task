-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 02:14 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tco16`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `passsword` varchar(500) NOT NULL,
  `resettoken` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `college`, `city`, `country`, `passsword`, `resettoken`) VALUES
(2, 'sas', 'sas', 'sas', 'sas', 'sas', 'sas', ''),
(3, 'sasdsd', 'sa', 'sa', 'ssas', 'sas', 'qq', ''),
(4, '', '', '', '', '', '', ''),
(5, 'ssss', 'ss', 'ss', 'ss', 'ss', 'ss', ''),
(6, 'sassss', 'sssssss', 'ss', 'ss', 'ss', 'ss', ''),
(7, 'jh', 'jhj', 'hj', 'hjhj', 'jh', 'qq', ''),
(8, 'manishbisht', 'manish.bisht490@gmail.com', 'SKIT', 'Jaipur', 'India', '$2y$10$q3UZoHbHdrJeNAvisU0PkOyvchTTRVXjmZn6YwH.DiOrxb14S8XKC', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
