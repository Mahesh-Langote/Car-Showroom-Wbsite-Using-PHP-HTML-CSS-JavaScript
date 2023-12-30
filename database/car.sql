-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 07:05 PM
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
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `carid` varchar(4) NOT NULL,
  `username` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `carid`, `username`) VALUES
(1, '6', 'vishi@gmail.com'),
(2, '7', 'vishi@gmail.com'),
(3, '7', 'vishi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `img` varchar(400) NOT NULL,
  `originalprice` varchar(50) NOT NULL,
  `discountprice` varchar(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `mileage` varchar(50) NOT NULL,
  `enginesize` varchar(50) NOT NULL,
  `fueltype` varchar(50) NOT NULL,
  `gearbox` varchar(50) NOT NULL,
  `numberofseats` varchar(50) NOT NULL,
  `doors` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `breaktype` varchar(50) NOT NULL,
  `steeringtype` varchar(50) NOT NULL,
  `seattype` varchar(50) NOT NULL,
  `headlight` varchar(50) NOT NULL,
  `vehiclediscription` varchar(1000) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `img`, `originalprice`, `discountprice`, `carname`, `type`, `companyname`, `model`, `mileage`, `enginesize`, `fueltype`, `gearbox`, `numberofseats`, `doors`, `color`, `power`, `breaktype`, `steeringtype`, `seattype`, `headlight`, `vehiclediscription`, `img1`, `img2`) VALUES
(6, '../uploads/Coursera FY39GFB3QF83_page-0001.jpg', '2.05 Lakh', '2 Lakh', 'Nanoxcvbnm,', 'Sport Car', 'Tata', 'BS4', '25.39 kmpl', '624', 'Petrol', 'Manual', '5', '4', 'Blue', '25hp', 'ABS', 'Power', 'leather', 'headlight', 'Tata Nano Price: Tata Nano price starts at Rs. 2.05 Lakh and goes upto Rs. 2.97 Lakh. The price of Petrol variant for Nano ranges between Rs. 2.05 Lakh - Rs. 2.50 Lakh and the price of CNG variant for Nano ranges between Rs. 2.40 Lakh - Rs. 2.97 Lakh.', '../uploads/Mahesh_Langote_Aptitude.jpg', '../uploads/idenetity_150.jpg'),
(7, '../uploads/product-1-720x480.jpg', '10 Lakh', '9 Lakh', 'That', 'New Car', 'Mahindra', 'Bs6', '10', '800cc', 'petrol', 'Manual', '5', '4', 'black', '25hp', 'abs', 'power', 'leather', 'head', 'asdfvbnm,', '../uploads/product-2-720x480.jpg', '../uploads/product-5-720x480.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Mahesh Langote', 'maheshlangote776@gmail.com', 'hi', 'Vishu Madrchod'),
(2, 'Tejas Sonawane', 'tejassonawane850@gmail.com', 'mnbvcxz', 'mnbvcx'),
(3, 'Tejas Sonawane', 'tejassonawane850@gmail.com', 'mnbvcxz', 'mnbvcx'),
(4, 'Tejas Sonawanebnm', 'tejassonawane850@gmail.com', 'mnbvcxz', 'mnbvcx'),
(5, 'Mahesh Langote', 'tejassonawane850@gmail.com', 'bvcx', 'jnbvcxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `mastertask`
--

CREATE TABLE `mastertask` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mastertask`
--

INSERT INTO `mastertask` (`id`, `name`, `parent`) VALUES
('1', 'Mahesh', 'Maruti'),
('1', 'Mahesh', 'Maruti'),
('2', 'Sushant', 'Maruti'),
('3', 'Pranit', 'Krushna');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(59) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(4, 'Vishu', 'vishi@gmail.com', 'vishu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
