-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 01:46 PM
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
(22, 'Dave', 'Starfield', 7889888, 'dave@gmail.com'),
(23, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(24, 'Stannis', 'Baratheon', 200200, 'kingstannis@westeros.org'),
(25, 'Benjen', 'Stark', 8989898, 'benstark@westeros.org'),
(26, 'Barack', 'Obama', 8999, 'obama@gmail.com'),
(27, 'Barack', 'Obama', 8999, 'obama@gmail.com'),
(28, 'Barack', 'Obama', 8999, 'obama@gmail.com'),
(29, 'George', 'Bush', 123, 'bushy@gmail.com'),
(30, 'Bernie', 'Sanders', 3002, 'bernie@bern.org'),
(31, 'Hillary', 'Clinton', 630023, 'hc@weakservers.org'),
(32, 'Donald', 'Trump', 78889, 'donald@trump.co'),
(33, 'Robert', 'Baratheon', 20020, 'deadb@gmail.com'),
(35, 'Emma', 'Watson', 2002, 'ewatson@gmail.com'),
(36, 'Chicha', 'Ron', 123123, 'charon@pig.com'),
(37, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(38, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(39, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(40, 'Goldy', 'Lunesa', 9988949125, 'gmlunesa@gmail.com'),
(41, 'Stannis', 'Baratheon', 3002332, 'onetrueking@westeros.org'),
(42, 'Star', 'Bucks', 2002, 'starbucks@gmail.com');

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
  `Size` varchar(255) DEFAULT NULL,
  `Color` text,
  `Type` text,
  `Quantity` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Claimed` tinyint(4) NOT NULL DEFAULT '0',
  `Cust_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Prod_ID`, `Prod_Name`, `Prod_Desc`, `Prod_Design`, `Design_Price`, `Pickup_Date`, `Width`, `Height`, `Shape`, `Size`, `Color`, `Type`, `Quantity`, `Total_Price`, `Claimed`, `Cust_ID`) VALUES
(40, 'Bag Tag', '--', 'Kanye.jpg', 30, '2016-06-23', NULL, NULL, NULL, NULL, NULL, 'Rubber', 5, 150, 0, 35),
(41, 'Bag Tag', 'desc1', 'desc1.jpg', 200, '2016-05-30', NULL, NULL, NULL, NULL, NULL, 'Clear Plastic', 2, 400, 0, 36),
(42, 'Keychain', '--', 'desc2.', 300, '2016-06-09', NULL, NULL, 'Circle', NULL, NULL, 'Glass', 2, 600, 0, 36),
(43, 'Keychain', 'a', 'aa.', 300, '2016-06-08', NULL, NULL, 'a', NULL, NULL, 'Rubber', 2, 600, 0, 36),
(44, 'Keychain', 'a', 'aa.', 300, '2016-06-08', NULL, NULL, 'a', NULL, NULL, 'Rubber', 2, 600, 0, 36),
(45, 'Keychain', 'a', 'aa.', 300, '2016-06-08', NULL, NULL, 'a', NULL, NULL, 'Rubber', 2, 600, 0, 36),
(46, 'Keychain', 'xc', 'please.', 22200, '2016-06-07', NULL, NULL, 'xc', NULL, NULL, 'Rubber', 2, 44400, 0, 38),
(47, 'Bag Tag', '1', 'new1.jpg', 100, '2016-05-31', NULL, NULL, NULL, NULL, NULL, 'Rubber', 10, 1000, 0, 39),
(48, 'Keychain', 'Update', 'newww.jpg', 300, '2016-05-30', NULL, NULL, 'Update', NULL, NULL, 'Glass', 10, 3000, 0, 39),
(49, 'Tarpaulin', 'Change', 'new3.jpg', 300, '2016-05-30', 69, 69, NULL, NULL, NULL, NULL, 10, 3000, 0, 39),
(50, 'Shirt', 'Black', 'new4.jpg', 100, '2016-05-30', NULL, NULL, NULL, NULL, 'Orange', NULL, 10, 1000, 0, 39),
(51, 'Tumbler', 'Nice', 'new5.jpg', 300, '2016-05-30', NULL, NULL, NULL, 'Medium', NULL, NULL, 10, 3000, 0, 39),
(52, 'Keychain', 'mm', 'fileee.jpg', 100, '2016-05-27', NULL, NULL, 'circle', NULL, NULL, 'Rubber', 10, 1000, 1, 40),
(53, 'Keychain', 'Keep it clean', 'StannisBear.jpg', 30, '2016-06-03', NULL, NULL, 'Circle', NULL, NULL, 'Glass', 5, 150, 0, 41),
(54, 'Keychain', 'okay', 'Bearsbux.jpg', 300, '2016-05-17', NULL, NULL, 'Circle', NULL, NULL, 'Rubber', 2, 600, 0, 42);

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
  MODIFY `Cust_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Prod_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
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
