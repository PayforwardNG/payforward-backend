-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 06:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payforward`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_Number` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Referrals` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`ID`, `UserID`, `Firstname`, `Lastname`, `Email`, `Mobile_Number`, `Password`, `Referrals`) VALUES
(1, '00217732', 'MOJEED', 'KUSIMO', 'mkusimo90@gmail.com', 2147483647, '123', 'payforwardng.com/MOJEED_KUSIMO'),
(2, '22803997', 'Maryam', 'Bello', 'maryam.bello@yahoo.com', 2147483647, '123', 'payforwardng.com/Maryam_Bello'),
(3, '92992283', 'Tunde', 'Akanbi', 'tunde.sulaiman@yahoo.com', 2147483647, '1234', 'payforwardng.com/Tunde_Akanbi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
