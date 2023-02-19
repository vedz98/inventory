-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 09:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL,
  `brand_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Sime Darby Industrial Sdn Bhd', 1, 1),
(2, 'Sime Darby Industrial (B) S/B', 1, 1),
(3, 'Sime Darby Industrial Power', 1, 1),
(4, 'Sime Darby Industrial Academy', 1, 1),
(5, 'Sime Darby TMA Sdn. Bhd', 1, 1),
(6, 'Sime Darby Electropack Sdn Bhd', 1, 1),
(7, 'Sime Darby Offshore Eng S/B', 1, 1),
(8, 'Sime Kubota Sdn Bhd', 1, 1),
(9, 'SD CEL Machinery(GX)Co Ltd', 1, 1),
(10, 'Chubb Malaysia S/B', 1, 1),
(11, 'Mecomb Malaysia S/B', 1, 1),
(12, 'Mecomb Singapore Limited', 1, 1),
(13, 'Tractors Petroleum Services', 1, 1),
(14, 'Tractors Singapore Limited', 1, 1),
(15, 'Tractors Material Handling S/B', 1, 1),
(16, 'Terberg Tractors Sdn Bhd', 1, 1),
(17, 'Associated Equipment Division', 1, 1),
(18, 'Foshan Shunde CEL Machinery Co', 1, 1),
(51, 'SIME DARBY', 1, 1),
(52, 'trt', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_active` int(3) DEFAULT NULL,
  `category_status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_active`, `category_status`) VALUES
(17, 'EU_ALL_NIOSH CSPS COurse - Electrical Work', 1, 1),
(18, 'satria', 1, 1),
(19, 'Test Case', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `product_id` int(3) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `noOfProducts` int(3) DEFAULT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` varchar(11) NOT NULL,
  `payment_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `product_id`, `product_name`, `noOfProducts`, `sub_total`, `vat`, `discount`, `total_amount`, `paid`, `due`, `payment_type`, `payment_status`) VALUES
(21, '2021-08-16', 'Tun Dr Mahahahathir', '012345678', 15, 'Mushaf Restu', 5, '500', '13%', '5', '559.35', '500', '59', 'ebanking', 'partial');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `brand_id`, `category_id`, `division`, `startDate`, `endDate`, `location`, `active`, `status`) VALUES
(1, 'Max Verstappen', 10, 17, 'Red Bull Racing', '2021-04-14', '2021-06-25', 'Netherlands', 1, 1),
(69, 'Fikri Boii', 18, 17, 'Fikri Industrial Tech Kaspersky', '2021-07-12', '2021-06-15', 'Shah Alam', 1, 1),
(9794, 'Fadzil Hafizi', 14, 17, 'Sime Darby Industrial\r\n', '2022-01-20', '2022-01-16', 'Putrajaya', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(2, 'Fikri', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
