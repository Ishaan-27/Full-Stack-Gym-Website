-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 07:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regsyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `click_count`
--

CREATE TABLE `click_count` (
  `id` int(100) NOT NULL,
  `online1` int(100) NOT NULL,
  `basic1` int(100) NOT NULL,
  `standard1` int(100) NOT NULL,
  `premium1` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `click_count`
--

INSERT INTO `click_count` (`id`, `online1`, `basic1`, `standard1`, `premium1`) VALUES
(0, 24, 26, 29, 6);

-- --------------------------------------------------------

--
-- Table structure for table `onlineform`
--

CREATE TABLE `onlineform` (
  `on_id` int(11) NOT NULL,
  `on_first_name` varchar(100) NOT NULL,
  `on_last_name` varchar(100) NOT NULL,
  `on_gender` varchar(20) NOT NULL,
  `on_current_weight` int(11) NOT NULL,
  `on_height` int(11) NOT NULL,
  `on_home_address` varchar(50) NOT NULL,
  `on_city` varchar(20) NOT NULL,
  `on_state` varchar(20) NOT NULL,
  `on_code` int(20) NOT NULL,
  `on_email` varchar(40) NOT NULL,
  `on_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlineform`
--

INSERT INTO `onlineform` (`on_id`, `on_first_name`, `on_last_name`, `on_gender`, `on_current_weight`, `on_height`, `on_home_address`, `on_city`, `on_state`, `on_code`, `on_email`, `on_phone`) VALUES
(0, 'Akash', 'Gorkar', 'male', 67, 167, 'Jijamata Chowk', 'Beed', 'Maharashtra', 431122, 'akash@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `trainer` varchar(20) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `training_type` varchar(20) NOT NULL,
  `current_weight` int(20) NOT NULL,
  `height` int(20) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `code` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `plan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`id`, `first_name`, `last_name`, `gender`, `trainer`, `slot`, `training_type`, `current_weight`, `height`, `home_address`, `city`, `state`, `code`, `email`, `phone`, `plan`) VALUES
(0, 'Sarthak', 'Atre', 'male', 't1', '5am', 'htrain', 74, 173, 'Padampura', 'Aurangabad', 'Maharashtra', 431001, 'sarthaksatre@gmail.com', 2147483647, 'PP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `click_count`
--
ALTER TABLE `click_count`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `basic` (`basic1`),
  ADD UNIQUE KEY `basic_2` (`basic1`);

--
-- Indexes for table `onlineform`
--
ALTER TABLE `onlineform`
  ADD PRIMARY KEY (`on_id`),
  ADD UNIQUE KEY `id` (`on_id`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `onlineform`
--
ALTER TABLE `onlineform`
  MODIFY `on_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
