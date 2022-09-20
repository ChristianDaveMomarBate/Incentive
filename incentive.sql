-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 03:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incentive`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `buyername` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `incentive` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `quantity`, `total`, `buyername`, `seller`, `product`, `amount`, `incentive`, `date`) VALUES
(21, '23', '23000', 'Christian Dave Momar Bate', 'Christian Dave Momar Bate', 'Product # 1', '1000', '2    ', '2030-09-21'),
(22, '25', '25000', 'Philip Estobo', 'Christian Dave Momar Bate', 'Product # 1', '1000', '2    ', '2030-09-21'),
(25, '12', '3600', 'Philip Estobo', 'Abdul Pangandaman', 'Product # 3', '300', '2  ', '2030-09-21'),
(26, '10', '1000', 'John Loyd Samonte', 'Philip Estobo', 'Product # 2', '100', '0.08     ', '2001-10-21'),
(29, '20', '2000', 'John Loyd Samonte', 'Philip Estobo', 'Product # 2', '100', '0.08     ', '2001-10-21'),
(30, '20', '20000', 'John Loyd Samonte', 'Christian Dave Momar Bate', 'Product # 1', '1000', '2    ', '2001-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(10) NOT NULL,
  `completename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `incentive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `completename`, `age`, `address`, `product`, `amount`, `incentive`) VALUES
(2, 'Christian Dave Momar Bate', '21', 'poctoy', 'Product # 1', '1000', '2   '),
(6, 'Philip Estobo', '22', 'brgy san roque', 'Product # 2', '100', '0.08    '),
(19, 'Abdul Pangandaman', '25', 'Serna', 'Product # 3', '300', '2 ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `completename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `mobilenumber`, `password`, `position`, `completename`) VALUES
(1, 'admin', 'adminemail@gmail.com', '09518221227', 'admin', 'Administrator', 'Christian Dave Momar Bate'),
(2, 'seller', 'selleremail@gmail.com', '09518221227', 'seller', 'Seller', 'Philip Estobo'),
(3, 'customer', 'costumer@gmail.com', '09123456789', 'customer', 'Customer', 'John Loyd Samonte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
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
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
