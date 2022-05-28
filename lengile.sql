-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lengile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Photo` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Photo`, `Email`) VALUES
('lengile', 'lengile', 'passports/lengile-passport.png', 'lengile@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Fullname` text NOT NULL,
  `Email` text NOT NULL,
  `Messagebody` text NOT NULL,
  `Interested` text NOT NULL,
  `Datee` text NOT NULL,
  `Status` text NOT NULL,
  `Phone` text NOT NULL,
  `Messageno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `Dateofcreation` date NOT NULL,
  `Nofapartment` text NOT NULL,
  `Purpose` text NOT NULL,
  `Bed` int(11) NOT NULL,
  `Garage` int(11) NOT NULL,
  `Bathroom` int(11) NOT NULL,
  `Areacovered` text NOT NULL,
  `Price` double NOT NULL,
  `Description` text NOT NULL,
  `Address` text NOT NULL,
  `Country` text NOT NULL,
  `State` text NOT NULL,
  `City` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `Nofapartment` text NOT NULL,
  `Price` double NOT NULL,
  `Address` text NOT NULL,
  `Country` text NOT NULL,
  `State` text NOT NULL,
  `City` text NOT NULL,
  `Photo` text NOT NULL,
  `Purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
