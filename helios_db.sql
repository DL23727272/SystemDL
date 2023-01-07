-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 03:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helios_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `deluxe`
--

CREATE TABLE `deluxe` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `CID` varchar(30) NOT NULL,
  `COD` varchar(30) NOT NULL,
  `CIT` varchar(100) DEFAULT NULL,
  `DOS` varchar(100) DEFAULT NULL,
  `Price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deluxe`
--

INSERT INTO `deluxe` (`id`, `fname`, `phone`, `CID`, `COD`, `CIT`, `DOS`, `Price`) VALUES
(1, 'deluxeTest', '0987897', '2022-12-28                    ', ' 2022-12-30                   ', '09:49:13am', '  2', '            20000            ');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `superdeluxe`
--

CREATE TABLE `superdeluxe` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `CID` varchar(30) NOT NULL,
  `COD` varchar(30) NOT NULL,
  `CIT` varchar(100) DEFAULT NULL,
  `DOS` varchar(100) DEFAULT NULL,
  `Price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superdeluxe`
--

INSERT INTO `superdeluxe` (`id`, `fname`, `phone`, `CID`, `COD`, `CIT`, `DOS`, `Price`) VALUES
(1, 'SuperDeluxeTest', '0987897', '2022-12-27                    ', ' 2022-12-31                   ', '09:46:20am', '  4', '            80000            ');

-- --------------------------------------------------------

--
-- Table structure for table `twin`
--

CREATE TABLE `twin` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `CID` varchar(30) NOT NULL,
  `COD` varchar(30) NOT NULL,
  `CIT` varchar(100) DEFAULT NULL,
  `DOS` varchar(100) DEFAULT NULL,
  `Price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `twin`
--

INSERT INTO `twin` (`id`, `fname`, `phone`, `CID`, `COD`, `CIT`, `DOS`, `Price`) VALUES
(1, 'TwinTest', '0987897', '2022-12-30                    ', '2023-01-01                    ', '09:50:46am', '  2', '            10000            ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deluxe`
--
ALTER TABLE `deluxe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superdeluxe`
--
ALTER TABLE `superdeluxe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twin`
--
ALTER TABLE `twin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deluxe`
--
ALTER TABLE `deluxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `superdeluxe`
--
ALTER TABLE `superdeluxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twin`
--
ALTER TABLE `twin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
