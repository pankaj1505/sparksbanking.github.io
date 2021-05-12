-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 12:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Aniket', 'Prajval', 12),
('Aniket', 'Prajval', 12),
('Rohit', 'Derek', 20),
('Aniket', 'Prajval', 23),
('Sayali', 'Aniket', 50),
('Sahil', 'Kiara', 30),
('Sahil', 'Shrushti', 70),
('Prajval', 'Derek', 100),
('Rohit', 'Sayali', 20),
('Rohit', 'Aniket', 60),
('Saakshi', 'Sahil', 30),
('Aaryan', 'Aniket', 30),
('Kiara', 'Aaryan', 58),
('Derek', 'Rohit', 10),
('Derek', 'Sahil', 20),
('Rohit', 'Kiara', 20),
('Saakshi', 'Sayali', 10),
('Aniket', 'Kiara', 20),
('Rohit', 'Kiara', 20),
('Aniket', 'Sayali', 20),
('Aaryan', 'Derek', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Aniket', 'aniket35@gmail.com', 1063),
('Prajval', 'prajval11@gmail.com', 937),
('Aaryan', 'aaryan10@gmail.com', 1008),
('Rohit', 'sharmaji@gmail.com', 820),
('Shrushti', 'shrushti18@gmail.com', 1070),
('Saakshi', 'saakshi17@gmail.com', 960),
('Sayali', 'sayali35@gmail.com', 1000),
('Derek', 'derek@gmail.com', 1160),
('Sahil', 'sahil13@gmail.com', 750),
('Kiara', 'advani@gmail.com', 1232);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
