-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 06:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `order_no` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `lease_duration` int(11) NOT NULL,
  `total_rent` int(11) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `pickup_date` date DEFAULT NULL,
  `payment_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`order_no`, `username`, `car_id`, `lease_duration`, `total_rent`, `contact_no`, `delivery_date`, `delivery_address`, `pickup_date`, `payment_mode`) VALUES
(1, NULL, 7, 7, 3500, 9874563210, '2018-07-25', 'qwerty', NULL, 'E-Wallet'),
(2, NULL, 8, 7, 0, 9874563210, '2018-07-18', 'qwerty', NULL, 'COD'),
(3, NULL, 8, 3, 0, 0, '0000-00-00', '', NULL, ''),
(4, NULL, 8, 7, 4900, 9874563210, '2018-07-04', 'qwerty', '2013-07-18', 'Card'),
(5, NULL, 8, 7, 4900, 9874563210, '2018-07-31', 'qwerty', '2018-07-13', 'COD'),
(6, NULL, 9, 7, 3500, 9874563210, '2018-07-11', 'qwerty', '2018-07-17', 'Card'),
(7, NULL, 9, 7, 3500, 9818514402, '2018-07-31', 'qwertyui', '2018-07-17', 'E-Wallet'),
(8, 'admin', 9, 7, 3500, 9874563210, '2018-07-11', 'qwertyui', '2018-07-17', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `query_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`query_no`, `name`, `email`, `contact_no`, `message`) VALUES
(1, 'amit gupta', 'a.gupta9598@gmail.com', 9818514402, 'hello'),
(2, 'jatin', '98@gmail.com', 9874563210, 'hi there');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `car_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `rent` int(11) NOT NULL,
  `reg_year` year(4) NOT NULL,
  `fuel_type` varchar(10) NOT NULL,
  `seats` int(11) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `automatic_gear` tinyint(1) NOT NULL,
  `air_bag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`car_id`, `image`, `car_name`, `rent`, `reg_year`, `fuel_type`, `seats`, `ac`, `automatic_gear`, `air_bag`) VALUES
(9, 'Swift.jpg', 'SWIFT', 500, 2009, 'CNG', 5, 1, 0, 0),
(10, 'DP(6).jpg', 'VERNA', 950, 2014, 'Petrol', 4, 1, 1, 1),
(11, 'DP(3).jpg', 'FIGO', 850, 2013, 'CNG', 8, 0, 1, 0),
(12, 'DP(4).jpg', 'ELITE I20', 450, 2009, 'CNG', 5, 1, 0, 0),
(13, 'DP(7).jpg', 'MAHINDRA SCORPIO', 900, 2009, 'Diesel', 9, 1, 0, 1),
(14, 'DP.jpg', 'ford ecosport', 650, 2014, 'Petrol', 5, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `ref_number` varchar(10) DEFAULT NULL,
  `number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `username`, `password`, `gender`, `city`, `ref_number`, `number`) VALUES
('amit gupta', 'a.gupta9598@gmail.com', 'a9598', 'qwerty', 'male', 'jaipur', '', 9818514404),
('gniu', '98@gmail.com', 'admin', 'qwerty', 'female', 'jaipur', '', 2591478545),
('jatin', 'jatin_510@gmail.com', 'jatin_510', 'qsxdrfvgy', 'male', 'jodhpur', '', 9874563214),
('asdf', 'd@fg.cn', 'qazxsw', 'qazxsw', 'female', 'jaipur', 'dnish', 2591478545),
('amit9598', 'b@as.com', 'qwerty', 'qwerty', 'male', 'jaipur', '', 9314504372);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`query_no`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `query_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
