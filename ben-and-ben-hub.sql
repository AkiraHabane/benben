-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 06:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ben-and-ben-hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `adminId` int(11) UNSIGNED NOT NULL,
  `adminUsername` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminHashedPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`adminId`, `adminUsername`, `adminPassword`, `adminHashedPassword`) VALUES
(7, 'admin@gmail.com', 'admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `customerlists`
--

CREATE TABLE `customerlists` (
  `customerId` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `age` int(20) UNSIGNED NOT NULL,
  `contactNum` varchar(20) NOT NULL,
  `emailAdd` varchar(100) NOT NULL,
  `homeAdd` varchar(100) NOT NULL,
  `foodAllergies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlists`
--

INSERT INTO `customerlists` (`customerId`, `firstName`, `lastName`, `age`, `contactNum`, `emailAdd`, `homeAdd`, `foodAllergies`) VALUES
(1, 'Joselito Joshua', 'PHNAEMYT', 21, '081519343389', 'joshuaabrera31@gmail.com', 'Jl. P. Jayakarta 141 Blok A No.12, Mangga Dua Selatan', 'Seafood'),
(2, 'MARIA JOSEPHINE', 'ABRERA', 23, '09052202841', 'josephineabrera@yahoo.com', 'L 21 Blk 29 Pegasus St. Phase 2 Palmera Springs, Caloocan', 'Crab'),
(3, 'Akira', 'Habane', 23, '09208067060', 'jjjsabrera2020@plm.edu.ph', 'Intramuros, Manila', 'Dogfood'),
(4, 'Jesus', 'Fries', 29, '0975426521', 'oppailover691@gmail.com', 'Lazada', 'fish'),
(5, 'Luka', 'Doncic', 23, '698431262', 'mavericksdallas@gmail.com', 'America', 'Lebron James');

-- --------------------------------------------------------

--
-- Table structure for table `tablereservation`
--

CREATE TABLE `tablereservation` (
  `reserveId` int(11) UNSIGNED NOT NULL,
  `reserveDate` date NOT NULL,
  `reserveTime` varchar(10) NOT NULL,
  `reserveType` char(50) NOT NULL,
  `numGuests` int(50) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tablereservation`
--

INSERT INTO `tablereservation` (`reserveId`, `reserveDate`, `reserveTime`, `reserveType`, `numGuests`) VALUES
(1, '2023-06-21', '4:30 PM', 'Regular', 4),
(2, '2023-06-12', '9:30 AM', 'Celebration', 6),
(3, '2023-06-26', '8:00 PM', 'Celebration', 30),
(4, '2023-06-17', '12:00 PM', 'Celebration', 30),
(5, '2023-06-21', '7:30 PM', 'Celebration', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customerlists`
--
ALTER TABLE `customerlists`
  ADD UNIQUE KEY `unique_customerId` (`customerId`);

--
-- Indexes for table `tablereservation`
--
ALTER TABLE `tablereservation`
  ADD UNIQUE KEY `unique_reserveId` (`reserveId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `adminId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customerlists`
--
ALTER TABLE `customerlists`
  MODIFY `customerId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tablereservation`
--
ALTER TABLE `tablereservation`
  MODIFY `reserveId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
