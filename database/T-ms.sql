-- DROP DATABASE IF EXISTS busscheduledb;

-- CREATE DATABASE busscheduledb;

-- use busscheduledb;

-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 08:02 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- allowed update forgeinkey SET FOREIGN_KEY_CHECKS = 0;
--
-- Database: `busscheduledb`
--
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `users` (
  `id` int NOT NULL primary key auto_increment,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
   `password` varchar(255) NOT NULL,
   `phone` int NOT NULL,
  `imageUrl` varchar(255) NULL,

  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `users` ( `firstname`, `lastname`, `email`, `password`,  `phone`, `role`) VALUES
('Cali', 'Xassan', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '44444444', 'ADMIN'),
('Cismaan', 'farax', 'cismaan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '33939393', 'CLIENT'),
('Jamac', 'sugule', 'marmar@gmail.com', '25d55ad283aa400af464c76d713c07ad', '3939393', 'CLIENT'),
('Diriye', 'Axmed', '	e@gmail.com', '25d55ad283aa400af464c76d713c07ad', '33030303', 'CLIENT'),
('Maxamed', 'Cabdi', 'cabdi@gmail.coschedule_ibfk_1m', '25d55ad283aa400af464c76d713c07ad', '303033030', 'CLIENT');


--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int NOT NULL primary key auto_increment,
  `driverName` varchar(50) NOT NULL,
  `employDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` ( `driverName`, `employDate`) VALUES
('Bebot Baja', '2022-02-02'),
( 'Mon', '2022-10-01'),
( 'BADONG', '2022-11-09'),
('DAROY', '2023-05-15'),
('Von', '2023-10-17'),
( 'Kanor', '2023-06-16');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
   `id` int NOT NULL  primary key auto_increment,
  `busno` varchar(255) NOT NULL,
  `driverId` int NOT NULL,

  FOREIGN KEY  ( `driverId` ) REFERENCES driver( `id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busno`,  `driverId`) VALUES
('AIRCON 99',1),
('AIRCON 1',2),
('Karito',3),
( 'airconzion',4),
('Karito',5),
( 'airconzion',6);
-- --------------------------------------------------------


--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int NOT NULL  primary key auto_increment,
   `busId` int NOT NULL,
  `price` float NOT NULL,
  `start` varchar(50) NOT NULL,
  `finish` varchar(50) NOT NULL,
   `duration` int NOT NULL,
  FOREIGN KEY (`busId`) REFERENCES bus(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`busId`, `price`,`start`, `finish`,`duration`) VALUES
(1, 210, 'Hargeisa', 'burco',8),
(2,  350, 'borma', 'hargeisa',3),
(3, 150, 'berbera', 'burco',5),
(4, 600, 'ceergabo', 'lascaanood',10);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL  primary key auto_increment,
  `departureDate` varchar(255) NOT NULL,
  `departureTime` varchar(255) NOT NULL,
  `routeId` int NOT NULL,

  FOREIGN KEY (`routeId`) REFERENCES route(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`routeId`,`departureTime`,  `departureDate`) VALUES
("4","11:00", '2023-10-04'),
("3","02:00", '2023-10-04'),
("3","02:00", '2023-10-04'),
("2","05:00", '2023-10-04'),
("1","02:00", '2023-10-04'),
("2","08:00", '2023-11-04'),
("3","10:00", '2023-12-04'),
("1	","07:00", '2023-12-08');


-- --------------------------------------------------------

-- --------------------------------------------------------

CREATE TABLE `bookings` (
  `id` int NOT NULL  primary key auto_increment ,
  `userId` int NOT NULL,
  `scheduleId` int NOT NULL,
  `bookedSeat` varchar(100) NOT NULL,
   `booked` boolean default(0),
  `bookingCreated` datetime DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY (`scheduleId`) REFERENCES schedule(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`userId`) REFERENCES users(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

--
-- Dumping data for table `bookings`
--





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
