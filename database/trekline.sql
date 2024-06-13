-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 06:05 AM
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
-- Database: `trekline`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`username`, `password`) VALUES
('kiran', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` varchar(100) NOT NULL,
  `booking_date` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `package` varchar(30) NOT NULL,
  `persons` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_date`, `name`, `num`, `email`, `package`, `persons`, `price`, `status`) VALUES
('654a77c813c26', '2023-11-07 18:45:44', 'chandra', '9859388', 'pichikasaisantosh@gmail.com', 'Explore Paris', '5 ', '$9000', 'approved'),
('654a77e0cd3e2', '2023-11-09', 'chandra', '399384982', 'pichikasaisantosh@gmail.com', 'Golden Triangle Tour', '2   ', '$4600', 'Approved'),
('654a7802cef7d', '2023-11-09', 'chandra', '76675654', 'pichikasaisantosh@gmail.com', 'Exotic Kerala Backwaters', '6  ', '$10800', 'Approved'),
('654a7821d6025', '2023-11-07 18:47:13', 'chandra', '2323424', 'pichikasaisantosh@gmail.com', 'Spiritual Journey to Varanasi', '7 ', '$10500', 'Approved'),
('654a785d9ec24', '2023-11-07 18:48:13', 'santosh', '346434', 'saisantosh1799@gmail.com', 'Romantic Getaway in Venice', '4', '$8800', ''),
('654a78737559c', '2023-11-07 18:48:35', 'santosh', '924892364', 'saisantosh1799@gmail.com', 'Spiritual Journey to Varanasi', '5 ', '$7500', 'Approved'),
('654a789144e07', '2023-11-07 18:49:05', 'santosh', '2323424', 'saisantosh1799@gmail.com', 'Spiritual Journey to Varanasi', '4', '$6000', ''),
('654a78ada5f96', '2023-11-07 18:49:33', 'santosh', '9347927', 'saisantosh1799@gmail.com', 'Historical Tour of Athens', '5 ', '$9750', 'Approved'),
('654dc5b94ede7', '10-09-2023', 'santosh', '9347927', 'pichikasaisantosh@gmail.com', 'Majestic Taj Mahal Tour', '6  ', '$7200', 'Declined'),
('654de1972aa43', '10-09-2023', 'chandra', '924892364', 'pichikasaisantosh@gmail.com', 'Romantic Getaway in Venice', '2    ', '$4400', 'Approved'),
('654de7ed3703c', '2023-11-10 09:21:01', 'chandra', '924892364', 'pichikasaisantosh@gmail.com', 'Historical Tour of Athens', '5 ', '$9750', 'Approved'),
('654de8d43e971', '2023-11-10', 'chandra', '2323425', 'pichikasaisantosh@gmail.com', 'Explore Paris', '4', '$7200', ''),
('654df417f0b49', '2023-11-10', 'vaishu', '9347927', 'sreeja@gmail.com', 'Adventure in the Amazon', '4 ', '$10000', 'Approved'),
('6552fedcafb36', '2023-11-14', 'chandra', '924892364', 'pichikasaisantosh@gmail.com', 'Majestic Taj Mahal Tour', '3', '$3600', ''),
('655300d0d3ddc', '2023-11-14', 'chandra', '9347927', 'pichikasaisantosh@gmail.com', 'Spiritual Journey to Varanasi', '3', '$4500', '');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(13) NOT NULL,
  `booking_id` varchar(20) NOT NULL,
  `additional_coments` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`name`, `email`, `number`, `booking_id`, `additional_coments`) VALUES
('lkwnoriwo', 'pichikasaisantosh@gmail.com', 2147483647, 'sdsfdgfhgjh', 'cdfdgfhgjmh'),
('dharma', 'pichikasaisantosh@gmail.com', 2147483647, 'dsfdgfhgjhk', 'xzcxvbn'),
('dharma', 'pichikasaisantosh@gmail.com', 2147483647, 'dsfdgfhgjhk', 'xzcxvbn'),
('dharma', 'pichikasaisantosh@gmail.com', 2147483647, 'dsfdgfhgjhk', 'xzcxvbn'),
('chandra', 'pichikasaisantosh@gmail.com', 435643, 'ssfhsntjr', 'accident happend please send support ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(40) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `rating`, `comments`) VALUES
('chandra', '5', 'nice ui'),
('chandra', '5', 'good'),
('kiran', '5', 'good'),
('chandra', '5', 'excellent'),
('chandra', '5', 'excellent ui'),
('chandra', '5', 'superb page');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `name` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `persons` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `chkin` varchar(30) NOT NULL,
  `chkout` varchar(30) NOT NULL,
  `booking_id` varchar(30) NOT NULL,
  `booking_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`name`, `num`, `email`, `day`, `persons`, `price`, `chkin`, `chkout`, `booking_id`, `booking_date`, `status`) VALUES
(' dcsfbnb', '123456', 'ravi@vsm.edu.in', '6', '5', '$150', '2023-11-20', '2023-11-21', '6549c8d9b5268', '2023-11-07 06:19:21', ''),
(' dcsfbnb', '123456', 'ravi@vsm.edu.in', '6', '5', '$150', '2023-11-20', '2023-11-21', '6549c90da6e25', '2023-11-07 06:20:13', ''),
('satish', '123456', 'ravi@vsm.edu.in', '6', '5', '$150', '2023-11-20', '2023-11-21', '6549c9f5981e0', '2023-11-07 06:24:05', ''),
('satish', '123456', '2033rgnb1a0435@vsm.edu.in', '7', '5', '$175', '2023-11-18', '2023-11-17', '6549d794d709b', '2023-11-07 07:22:12', ''),
('chandra', '9347927', 'saisantosh1799@gmail.com', '4  ', '5', '$100', '2023-11-14', '2023-11-29', '654b774de10b6', '2023-11-09', 'Approved'),
('chandra', '924892364', 'pichikasaisantosh@gmail.com', '6 ', '5', '$150', '2023-11-22', '2023-11-23', '654bd4564efc9', '2023-11-08 19:32:54', 'Approved'),
('chandra', '9347927', 'saisantosh1799@gmail.com', '3 ', '2', '$30', '2023-11-10', '2023-11-13', '654de2064fe28', '2023-11-10 08:55:50', 'Declined'),
('santosh', '2323424', 'saisantosh1799@gmail.com', '3 ', '2', '$30', '2023-11-10', '2023-11-13', '654de23094f25', '2023-11-10 08:56:32', 'Approved'),
('chandra', '9347927', 'pichikasaisantosh@gmail.com', '2', '2', '$20', '2023-11-10', '2023-11-12', '654de868b7b42', '2023-11-10 09:23:04', ''),
('vaishu', '2323424', 'sreeja@gmail.com', '2 ', '2', '$20', '2023-11-10', '2023-11-12', '654df4fd56093', '2023-11-10', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `message`) VALUES
('chandra', 'saisantosh1799@gmail.com', 'hi i want to connect with ou for bulk order'),
('chandra', 'pichikasaisantosh@gmail.com', 'i have huge order please contact me'),
('vaishu', 'sreeja@gmail.com', 'advwrewr'),
('chandra', 'pichikasaisantosh@gmail.com', 'please contact'),
('chandra', 'pichikasaisantosh@gmail.com', 'bulk order'),
('chandra', 'pichikasaisantosh@gmail.com', 'we having a trip');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `booking_id` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `comment` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`booking_id`, `username`, `rating`, `comment`) VALUES
('', 'chandra', '5', 'akdnviqeoivbqoebb'),
('lvkfnrownoreoni', 'chandra', '5', 'akdnviqeoivbqoebb'),
('ljdnvojwnoenv', 'santosh', '5', 'mdvmweviweviv'),
('654de23094f25', 'santosh', '5', 'excelllent amenties'),
('654a77c813c26', 'chandra', '5', 'super trip we enjoyed a lot lookinng forward to plan more'),
('	654df417f0b49', 'vaishu', '5', 'super trip'),
('654de23094f25', 'chandra', '5', 'superb amenties');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('ajith', '81dc9bdb52d04dc20036dbd8313ed055'),
('chandra', 'a29bac723ca2d59ed78a2d715e17e92f'),
('dharma', '81dc9bdb52d04dc20036dbd8313ed055'),
('reddy', '81dc9bdb52d04dc20036dbd8313ed055'),
('santosh', 'a29bac723ca2d59ed78a2d715e17e92f'),
('satish', 'ddb30680a691d157187ee1cf9e896d03'),
('vaishu', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `name` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `booking_id` varchar(30) NOT NULL,
  `booking_date` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`name`, `num`, `email`, `vehicle`, `day`, `price`, `booking_id`, `booking_date`, `status`) VALUES
(' dcsfbnb', '12345', 'satish@vsm.edu.in', '0', '3', '$150', '6549bdd631ba8', '2023-11-07', ''),
(' dcsfbnb', '12345', 'satish@vsm.edu.in', '0', '3', '$150', '6549be9239919', '2023-11-07', ''),
(' dcsfbnb', '12345', 'satish@vsm.edu.in', 'Compact Car', '3', '$150', '6549bfa93e279', '2023-11-07', ''),
(' dcsfbnb', '123456', 'ravi@vsm.edu.in', 'Compact Car', '2', '$100', '6549c0b4c3421', '2023-11-07', ''),
(' dcsfbnb', '5464', 'satish@vsm.edu.in', 'Compact Car', '6', '$300', '6549c11bce000', '2023-11-07', ''),
(' dcsfbnb', '12345', 'satish@vsm.edu.in', 'Compact Car', '2', '$100', '6549c169867f0', '2023-11-07', ''),
('satish', '12345', 'ravi@vsm.edu.in', 'Compact Car', '6', '$300', '6549c64663e45', '2023-11-07', ''),
('chandra', '924892364', 'saisantosh1799@gmail.com', 'Luxury Sedan', '5   ', '$500', '654b770c55058', '2023-11-08', 'Approved'),
('vaishu', '2323424', 'sreeja@gmail.com', 'Luxury Sedan', '4 ', '$400', '654df44747092', '2023-11-10', 'Declined');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
