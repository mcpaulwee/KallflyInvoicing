-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 02:29 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kallflyinv`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_deleted` enum('yes','no') NOT NULL DEFAULT 'no',
  `company` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `contact`, `email`, `is_deleted`, `company`, `status`, `country`, `note`) VALUES
(12, 'McPaul John', 'Wee', '54c Don P. Cui, Cebu City', 2147483647, 'mcpaulwee@gmail.com', 'yes', 'Kallfly', 'Active', 'Philippines', 'Good Feedback'),
(13, 'Charlene Marie', 'Buena', 'Pit-os talamban, Cebu', 2147483647, 'charlenemarie@gmail.com', 'no', 'City Savings', 'Active', 'Philippines', 'Good Feedback'),
(14, 'Zester', 'Albano', 'Cebu City', 2147483647, 'muta@gmail.com', 'no', 'Z Company', 'Active', 'philippines', 'Good Feedback'),
(15, 'Carmicheal', 'Cabreros', 'Basak, Singapore', 2147483647, 'car@gmail.com', 'no', 'Car Company', 'Active', 'Singapore', 'Nice nice'),
(16, 'Marc', 'Sevilla', 'cebu', 2147483647, 'marc@gmail.com', 'no', 'Glabsss', 'Active', 'Philippines', 'Good Feedback'),
(17, 'Mark Anthony', 'Lapus', 'Cebu City', 2147483647, 'mark@gmai.com', 'no', 'Kallflyy', 'Active', 'Philippines', 'Good Feedback'),
(18, 'Yong', 'Wee', '54c Don P. Cui, Cebu Cityy', 2147483647, 'yong@gmail.com', 'yes', 'Kallfly', 'Active', 'Philippines', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` int(11) NOT NULL,
  `is_deleted` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_price`, `is_deleted`) VALUES
(1, 'Wordpress Blog', 500, 'no'),
(3, 'VOIP minutes', 2050, 'no'),
(9, 'Kallfly Services', 250, 'no'),
(10, 'Encode', 250, 'no'),
(11, 'Call', 1500, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
