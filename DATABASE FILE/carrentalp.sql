-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 04:49 PM
-- Server version: 5.6.21
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carrentalp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`car_id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_nameplate` varchar(50) NOT NULL,
  `car_img` varchar(50) DEFAULT 'NA',
  `ac_price` float NOT NULL,
  `non_ac_price` float NOT NULL,
  `ac_price_per_day` float NOT NULL,
  `non_ac_price_per_day` float NOT NULL,
  `car_availability` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_nameplate`, `car_img`, `ac_price`, `non_ac_price`, `ac_price_per_day`, `non_ac_price_per_day`, `car_availability`) VALUES
(1, 'Innova', 'GA3KA6969', 'assets/img/innova.jpeg', 33, 25, 4200, 2200, 'yes'),
(2, 'Safari', 'BA2CH2020', 'assets/img/Safari.jpeg', 24, 15, 3100, 2200, 'yes'),
(3, 'BMW-3', 'BA10PA5555', 'assets/img/BMW-3.jpeg', 29, 20, 4550, 3899, 'yes'),
(4, 'Thor', 'BA10CH6009', 'assets/img/thor.jpeg', 45, 30, 5200, 3400, 'yes'),
(5, 'Swift Dzire', 'GA4PA2587', 'assets/img/swift dzire.jpeg', 23, 13, 3690, 2200, 'yes'),
(6, 'Tata Nexon', 'PJ16YX8820', 'assets/img/tata nexon.jpeg', 18, 15, 2100, 1800, 'Yes'),
(7, 'Toyota Yaris', 'GA5KH9669', 'assets/img/toyota yaris.jpeg', 46, 36, 4000, 2999, 'yes'),
(8, 'Tata Safari', 'GA6PA6666', 'assets/img/tata safari.jpeg', 26, 19, 3150, 2700, 'yes'),
(9, 'Honda CR-V', 'TN17MS1997', 'assets/img/cars/hondacr.jpg', 22, 15, 2850, 1400, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `clientcars`
--

CREATE TABLE IF NOT EXISTS `clientcars` (
  `car_id` int(20) NOT NULL,
  `client_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientcars`
--

INSERT INTO `clientcars` (`car_id`, `client_username`) VALUES
(1, 'tanmay'),
(3, 'tanmay'),
(7, 'tanmay'),
(8, 'tanmay'),
(9, 'tanmay'),
(11, 'tanmay'),
(12, 'tanmay'),
(2, 'pradyumna'),
(4, 'pradyumna'),
(6, 'pradyumna'),
(10, 'pradyumna'),
(13, 'pradyumna'),
(14, 'pradyumna');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_username` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `client_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `client_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_username`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_password`) VALUES
('tanmay', 'Tanmay Nayak', '9876543210', 'tanmay@gmail.com', 'Karwar, Ankola', 'tanmay'),
('pradyumna', 'Pradyumna Hulekal', '7850000069', 'pradyumna@gmail.com', 'Sirsi', 'pradyumna');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_username` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `licence_no` varchar(50) NOT NULL,
  `customer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_username`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`,`aadhar`, `licence_no`, `customer_password`) VALUES
('guru', 'Guruprasad G', '0785556580', 'guru@gmail.com', 'Gokarna U.K', '123456789', 'ab1234', 'password'),
('vivek', 'Vivek B', '8544444444', 'venki@gmail.com', 'Manglore D.K','34876789', 'be54324', 'password'),
('ashvith', 'Ashvith H', '69741111110', 'ashu@gmail.com', 'Udupi','987561149', 'kf5678', 'password'),
('sukesh', 'Sukesh V', '0258786969', 'sukesh@gmail.com', 'Banglore','4321115789', 'ut65774', 'password'),
('ramesh', 'Ramesh S', '7003658500', 'ramesh@gmail.com', 'Belgum','09765655789', 'op89765', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
`driver_id` int(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `dl_number` varchar(50) NOT NULL,
  `driver_phone` varchar(15) NOT NULL,
  `driver_address` varchar(50) NOT NULL,
  `driver_gender` varchar(10) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `driver_availability` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `dl_number`, `driver_phone`, `driver_address`, `driver_gender`, `client_username`, `driver_availability`) VALUES
(1, 'Amrut', '27840218658 ', '9547863157', 'Ankola', 'Male', 'tanmay', 'yes'),
(2, 'Sayam', '03191563155 ', '9147523684', 'Karwar', 'Male', 'tanmay', 'yes'),
(3, 'Nikhil', '32346288078 ', '9147523682', 'Kumta', 'Male', 'tanmay', 'yes'),
(4, 'Niraja', '04316015965 ', '9187563240', 'Honnavara', 'Female', 'pradyumna', 'no'),
(5, 'Anu', '68799466631 ', '7584960123', 'Murudeshwara', 'Female', 'pradyumna', 'yes'),
(6, 'Sanat', '36740186040 ', '8421025476', 'Sirsi', 'Male', 'tanmay', 'no'),
(7, 'Vijay', '44919316260 ', '7541023695', 'Siddapura', 'Male', 'tanmay', 'yes'),
(8, 'Shashank', '94592817723', '5215557850', 'Yellapura', 'Male', 'pradyumna', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `rentedcars`
--

CREATE TABLE IF NOT EXISTS `rentedcars` (
`id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `car_id` int(20) NOT NULL,
  `driver_id` int(20) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `car_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT 'days',
  `distance` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=574681260 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentedcars`
--

INSERT INTO `rentedcars` (`id`, `customer_username`, `car_id`, `driver_id`, `booking_date`, `rent_start_date`, `rent_end_date`, `car_return_date`, `fare`, `charge_type`, `distance`, `no_of_days`, `total_amount`, `return_status`) VALUES
(574681245, 'guru', 4, 2, '2023-07-18', '2023-07-01', '2023-07-02', '2023-07-18', 11, 'km', 244, 1, 5884, 'R'),
(574681246, 'vivek', 6, 6, '2023-07-18', '2023-06-01', '2023-06-28', '2023-07-18', 15, 'km', 69, 27, 5035, 'R'),
(574681247, 'ashvith', 3, 1, '2023-07-18', '2023-07-19', '2023-07-22', '2023-07-20', 13, 'km', 421, 3, 5473, 'R'),
(574681248, 'guru', 1, 2, '2023-07-20', '2023-07-28', '2023-07-29', '2023-07-20', 10, 'km', 69, 1, 690, 'R'),
(574681249, 'vivek', 1, 2, '2023-07-23', '2023-07-24', '2023-07-25', '2023-07-23', 10, 'km', 500, 1, 5000, 'R'),
(574681250, 'sukesh', 3, 2, '2023-07-23', '2023-07-23', '2023-07-24', '2023-07-23', 2600, 'days', NULL, 1, 2600, 'R'),
(574681251, 'vivek', 10, 1, '2023-07-23', '2023-07-25', '2023-07-30', '2023-07-23', 10, 'km', 60, 2, 600, 'R'),
(574681252, 'ramesh', 11, 2, '2023-07-23', '2023-07-23', '2023-07-23', '2023-07-23', 13, 'km', 200, 0, 2600, 'R'),
(574681253, 'ramesh', 6, 7, '2023-07-23', '2023-07-23', '2023-08-03', '2023-07-23', 2600, 'days', NULL, 11, 28600, 'R'),
(574681254, 'guru', 12, 5, '2023-07-23', '2023-07-23', '2023-07-26', '2023-07-23', 3200, 'days', NULL, 3, 9600, 'R'),
(574681255, 'ramesh', 8, 5, '2023-07-23', '2023-07-23', '2023-08-08', '2023-07-23', 2400, 'days', NULL, 16, 38400, 'R'),
(574681257, 'vivek', 7, 4, '2023-08-11', '2023-08-13', '2023-08-17', NULL, 14, 'km', NULL, NULL, NULL, 'NR'),
(574681258, 'sukesh', 3, 1, '2023-08-24', '2023-08-24', '2023-08-25', '2023-08-24', 2600, 'days', NULL, 1, 2600, 'R'),
(574681259, 'sukesh', 14, 8, '2023-08-24', '2023-08-24', '2023-08-26', '2023-08-24', 6100, 'days', NULL, 2, 12200, 'R');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`car_id`), ADD UNIQUE KEY `car_nameplate` (`car_nameplate`);

--
-- Indexes for table `clientcars`
--
ALTER TABLE `clientcars`
 ADD PRIMARY KEY (`car_id`), ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`client_username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
 ADD PRIMARY KEY (`driver_id`), ADD UNIQUE KEY `dl_number` (`dl_number`), ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `rentedcars`
--
ALTER TABLE `rentedcars`
 ADD PRIMARY KEY (`id`), ADD KEY `customer_username` (`customer_username`), ADD KEY `car_id` (`car_id`), ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rentedcars`
--
ALTER TABLE `rentedcars`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=574681260;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientcars`
--
ALTER TABLE `clientcars`
ADD CONSTRAINT `clientcars_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`),
ADD CONSTRAINT `clientcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`);

--
-- Constraints for table `rentedcars`
--
ALTER TABLE `rentedcars`
ADD CONSTRAINT `rentedcars_ibfk_1` FOREIGN KEY (`customer_username`) REFERENCES `customers` (`customer_username`),
ADD CONSTRAINT `rentedcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
ADD CONSTRAINT `rentedcars_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
