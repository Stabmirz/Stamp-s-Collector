-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2019 at 10:51 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `code` char(3) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`code`, `c_name`) VALUES
('BD', 'Bangladesh'),
('CH', 'Switzerland'),
('DE', 'Germany'),
('UK', 'United Kingdom'),
('USA', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `stamp`
--

CREATE TABLE `stamp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` char(3) NOT NULL,
  `year` year(4) NOT NULL,
  `size` varchar(50) NOT NULL,
  `pic_src` varchar(350) NOT NULL,
  `count` int(5) NOT NULL,
  `glued` char(3) NOT NULL,
  `collector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stamp`
--

INSERT INTO `stamp` (`id`, `name`, `country`, `year`, `size`, `pic_src`, `count`, `glued`, `collector`) VALUES
(1, 'Year of  the Tiger', 'BD', 2018, '22mm * 25mm', 'images/bd1.jpg', 10, 'no', 1),
(2, 'Chittagong Sea Port', 'BD', 1990, '22mm * 25mm', 'images/bd2.jpg', 5, 'no', 2),
(3, 'Court of Justice', 'BD', 1995, '22mm * 25mm', 'images/bd3.jpg', 7, 'yes', 3),
(4, '40th Anniversary of Victory', 'BD', 2011, '22mm * 25mm', 'images/bd4.jpg', 7, 'no', 2),
(5, 'Birds of bangladesh', 'BD', 1941, '22mm * 25mm', 'images/bd5.jpg', 7, 'yes', 3),
(6, 'Waterhen', 'BD', 1987, '22mm * 25mm', 'images/bd6.jpg', 9, 'yes', 1),
(7, 'Munich,Bavaria', 'DE', 1970, '22mm * 25mm', 'images/g1.jpg', 15, 'yes', 1),
(8, 'A. EInstein', 'CH', 1929, '22mm * 25mm', 'images/ch1.jpg', 10, 'yes', 1),
(9, 'Culture', 'UK', 1919, '22mm * 25mm', 'images/UK.jpg', 12, 'yes', 1),
(10, 'Czechoslovakia', 'DE', 1943, '22mm * 25mm', 'images/us.jpg', 5, 'no', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`a_id`, `a_name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123'),
(2, 'anu', 'anu@gmail.com', 'abi123'),
(3, 'tuni', 'tuni@gmail.com', 'tuni123'),
(4, 'Jeme', 'jeme@gmail.com', 'jeme123'),
(5, 'Nijhum', 'nijhum@gmail.com', 'nijhum123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `stamp`
--
ALTER TABLE `stamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stamp`
--
ALTER TABLE `stamp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
