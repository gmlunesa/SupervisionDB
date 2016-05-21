-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 05:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supervisionv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` bigint(20) UNSIGNED NOT NULL,
  `Cust_FName` varchar(50) NOT NULL,
  `Cust_LName` varchar(20) NOT NULL,
  `Cust_Num` bigint(20) NOT NULL,
  `Cust_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Cust_FName`, `Cust_LName`, `Cust_Num`, `Cust_Email`) VALUES
(18, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(19, 'Daenerys', 'Targaryen', 89989, 'dany@gmail.com'),
(20, 'John', 'Doe', 654321, 'jd@gmail.com'),
(21, 'Barack', 'Obama', 911, 'obama@gmail.com'),
(22, 'Dave', 'Starfield', 7889888, 'dave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Prod_ID` bigint(20) UNSIGNED NOT NULL,
  `Prod_Name` text NOT NULL,
  `Prod_Desc` text NOT NULL,
  `Prod_Design` varchar(255) NOT NULL,
  `Design_Price` float NOT NULL,
  `Pickup_Date` date NOT NULL,
  `Width` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Shape` text,
  `Size` int(11) DEFAULT NULL,
  `Color` text,
  `Type` text,
  `Quantity` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Cust_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Prod_ID`, `Prod_Name`, `Prod_Desc`, `Prod_Design`, `Design_Price`, `Pickup_Date`, `Width`, `Height`, `Shape`, `Size`, `Color`, `Type`, `Quantity`, `Total_Price`, `Cust_ID`) VALUES
(11, 'Bag Tag', '-', '#20', 80, '2016-05-21', NULL, NULL, NULL, NULL, NULL, 'Rubber', 5, 400, 18),
(12, 'Bag Tag', 'Gold', '#2', 50, '2016-05-23', NULL, NULL, NULL, NULL, NULL, 'Clear Plastic', 3, 150, 18),
(13, 'Bag Tag', 'Yes, the design is this', '#31', 60, '2016-05-17', NULL, NULL, NULL, NULL, NULL, 'Rubber', 4, 240, 18),
(14, 'Bag Tag', 'Thick', '#5', 80, '2016-05-17', NULL, NULL, NULL, NULL, NULL, 'Rubber', 1, 80, 19),
(15, 'Bag Tag', 'Cloudy', '#34', 70, '2016-05-17', NULL, NULL, NULL, NULL, NULL, 'Glass', 3, 210, 19),
(17, 'Bag Tag', 'Painted', '#4', 30, '2016-05-21', NULL, NULL, NULL, NULL, NULL, 'Glass', 4, 120, 20),
(19, 'Bag Tag', 'Smooth', '#80', 50, '2016-05-22', NULL, NULL, NULL, NULL, NULL, 'Glass', 5, 250, 21),
(20, 'Bag Tag', 'Something', '#23', 80, '2016-05-18', NULL, NULL, NULL, NULL, NULL, 'Glass', 5, 400, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD UNIQUE KEY `Cust_ID` (`Cust_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Prod_ID`),
  ADD UNIQUE KEY `Prod_ID` (`Prod_ID`),
  ADD KEY `Cust_ID` (`Cust_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Prod_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
