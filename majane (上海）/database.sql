-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 12, 2019 at 10:05 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Challenge`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(50) NOT NULL,
  `product_reference` varchar(50) NOT NULL,
  `supplier_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_reference`, `supplier_code`) VALUES
('iPhoneX', 'Phone10', '001'),
('iPhoneXs', 'Phone10s', '001'),
('Television S100', 'TeleS100', '003');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_name` varchar(50) NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_name`, `supplier_code`, `city`) VALUES
('Apple', '001', 'Shanghai'),
('Pear', '002', 'Paris'),
('Peach', '003', 'Beijing'),
('Melon', '004', 'Troyes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_reference`),
  ADD KEY `CE_SUPPLIER_CODE` (`supplier_code`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `CE_SUPPLIER_CODE` FOREIGN KEY (`supplier_code`) REFERENCES `suppliers` (`supplier_code`);
