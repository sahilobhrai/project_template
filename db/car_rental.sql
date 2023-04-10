-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 08:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_number` text NOT NULL,
  `seating_capacity` int(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `is_booked` tinyint(4) NOT NULL DEFAULT 0,
  `booking_date` date NOT NULL,
  `booking_total_days` int(255) NOT NULL,
  `booking_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent`, `is_booked`, `booking_date`, `booking_total_days`, `booking_by`) VALUES
(1, 'asdasd1234', '98765432102', 42, '33332', 1, '2024-04-23', 1, 'v@v'),
(2, 'rr45ndjs ', 'uk34', 5, '200', 1, '2004-04-23', 7, 'v@v'),
(3, 'sas', '1234567890', 6, '2222', 0, '0000-00-00', 0, ''),
(4, 'rr45ndjs ss', 'ss', 3, '33', 0, '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `is_agency_member` tinytext NOT NULL DEFAULT '0',
  `date_of_joining` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `name`, `email`, `password`, `is_agency_member`, `date_of_joining`) VALUES
(2, 'Sahil Obhrai', 'v@v', '6d43db78b85db4caca4f40cf99819566', '0', '2023-04-04'),
(3, 'mukesh', 'v@v1', 'ce35db0314a13a2f4cf5572bb3137b70', '1', '2023-04-04'),
(4, 'party', 'v@v3', '5bbcd9a8be8e15bc0841c7a595c18b04', '1', '2023-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
