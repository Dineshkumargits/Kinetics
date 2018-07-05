-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 02:52 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Kinetic_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Side_Nav_Bar_Headings`
--

CREATE TABLE `Side_Nav_Bar_Headings` (
  `Sl_No` int(100) NOT NULL,
  `Headings` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Side_Nav_Bar_Headings`
--

INSERT INTO `Side_Nav_Bar_Headings` (`Sl_No`, `Headings`) VALUES
(1, 'Home'),
(2, 'Product'),
(3, 'About'),
(4, 'Users'),
(5, 'Login'),
(6, 'SignUp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Side_Nav_Bar_Headings`
--
ALTER TABLE `Side_Nav_Bar_Headings`
  ADD PRIMARY KEY (`Sl_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Side_Nav_Bar_Headings`
--
ALTER TABLE `Side_Nav_Bar_Headings`
  MODIFY `Sl_No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
