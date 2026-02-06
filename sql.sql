-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2026 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Hire_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Department`, `Salary`, `Hire_Date`) VALUES
(1, 'Angel Claire', 'HR', 525485.00, '2025-01-29'),
(2, 'Juan Dela Cruz', 'IT', 28000.00, '2021-03-15'),
(3, 'Maria Santos', 'HR', 25000.00, '2020-07-10'),
(4, 'Pedro Reyes', 'Finance', 32000.00, '2019-11-22'),
(5, 'Ana Lopez', 'Marketing', 27000.00, '2022-01-05'),
(6, 'Mark Villanueva', 'IT', 35000.00, '2018-06-18'),
(7, 'Grace Mendoza', 'HR', 26000.00, '2021-09-30'),
(8, 'James Lim', 'Finance', 40000.00, '2017-04-12'),
(9, 'Sophia Cruz', 'Marketing', 29000.00, '2022-08-20'),
(10, 'Daniel Aquino', 'IT', 33000.00, '2020-02-14'),
(11, 'Karen Flores', 'Admin', 24000.00, '2023-01-09'),
(12, 'Michael Tan', 'Finance', 45000.00, '2016-12-01'),
(13, 'Rachel Gomez', 'HR', 27500.00, '2019-05-27'),
(14, 'Paul Navarro', 'IT', 36000.00, '2021-10-11'),
(15, 'Nicole Bautista', 'Marketing', 30000.00, '2020-03-08'),
(16, 'Anthony Ramos', 'Admin', 25500.00, '2022-06-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
