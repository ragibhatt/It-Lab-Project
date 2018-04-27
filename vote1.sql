-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 09:38 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `id` varchar(12) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sec` int(10) NOT NULL,
  `vote` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `name`, `sec`, `vote`) VALUES
('2015cse21', 'avan', 0, 4),
('2015cse16', 'amit', 0, 3),
('2015cse999', 'some', 0, 1),
('2015cse002', 'xyz', 1, 4),
('2015cse005', 'xzy2', 1, 4),
('2015cse0022', 'res', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` varchar(12) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `voted` tinyint(1) NOT NULL,
  `sec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `user`, `pass`, `voted`, `sec`) VALUES
('2015cse001', 'ronak', '123', 3, 1),
('2015cse0011', 'avan', '11', 1, 2),
('2015cse002', 'xyz', '456', 1, 1),
('2015cse003', 'asd', 'asd', 1, 2),
('2015cse004', 'rr', 'rr', 1, 2),
('2015cse0055', 'a1', 'a1', 1, 2),
('2015cse009', 'rrrr', 'rr', 1, 1),
('2015cse0111', 'dfs', 'dsf', 0, 0),
('2015cse014', 'sas', 'sas', 0, 0),
('2015cse045', 'naz', '10', 1, 1),
('as', '2015cse001', '2015cse001', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
