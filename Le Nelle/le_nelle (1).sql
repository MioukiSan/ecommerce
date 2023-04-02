-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 05:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `le nelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(2) NOT NULL,
  `item_img` varchar(25) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_price` bigint(23) NOT NULL,
  `item_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'His Collection'),
(2, 'Her Collection');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `item_id` int(2) NOT NULL,
  `item_name` varchar(122) NOT NULL,
  `date_ordered` datetime NOT NULL DEFAULT current_timestamp(),
  `order_status` text NOT NULL DEFAULT 'P' COMMENT 'D-Delivered\r\nP-Pending',
  `total_price` bigint(100) NOT NULL,
  `item_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `item_id`, `item_name`, `date_ordered`, `order_status`, `total_price`, `item_qty`) VALUES
(1, 0, 0, '', '2023-03-28 15:03:47', 'P', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(41) NOT NULL,
  `item_price` bigint(255) NOT NULL COMMENT 'A-active\r\nI-inactive',
  `item_status` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'A',
  `product_rating` int(2) NOT NULL,
  `item_description` text NOT NULL,
  `category_id` int(2) NOT NULL,
  `item_rating` int(2) NOT NULL,
  `item_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `item_price`, `item_status`, `product_rating`, `item_description`, `category_id`, `item_rating`, `item_img`) VALUES
(4, 'we', 12, 'A', 0, 'sdfghjkmnbvcxdfghjkl,\r\nmnbvcdfghjkmnbvcdfk,mnbv\r\ncdfhjkmnbvcdtyjmnbvdth', 2, 5, 'image.png'),
(6, 'lame', 200, 'A', 0, '', 0, 0, ''),
(7, 'lame', 200, 'A', 0, '', 0, 0, ''),
(8, 'cooker', 200, 'A', 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `cellnumber` int(11) NOT NULL,
  `usertype` text NOT NULL DEFAULT 'user' COMMENT 'user=userpage\r\nadmin=adminpage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `address`, `cellnumber`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', NULL, 0, 'admin'),
(4, 'Renz Palma', 'Nice', 'renzranoco12@gmail.com', 'asd', 'Balogo, Oas, Albay', 2147483647, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
