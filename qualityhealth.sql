-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 07:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualityhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `appointment_date` date DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `client_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`appointment_date`, `time`, `client_id`) VALUES
('2010-01-28', '14:00 - 15:00', '2012190284086'),
('2010-07-10', '13:00 - 14:00', '7212170290085'),
('2010-07-19', '7:00 - 9:00', '8807130418086'),
('2010-08-01', '9:00 - 10:00', '8807130418086'),
('2010-08-05', '9:00 - 10:00', '8807130418086'),
('2010-08-13', '9:00 - 10:00', '9003280235085'),
('2011-01-01', '10:00 - 12:00', '2808250506083');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(15) NOT NULL,
  `client_tel_h` varchar(10) NOT NULL,
  `client_tel_w` varchar(10) NOT NULL,
  `client_tel_c` varchar(10) NOT NULL,
  `cleint_email` varchar(50) NOT NULL,
  `client_pass` varchar(255) NOT NULL,
  `client_reference` varchar(50) NOT NULL,
  `client_age` tinyint(4) NOT NULL,
  `client_address` varchar(60) NOT NULL,
  `client_gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_tel_h`, `client_tel_w`, `client_tel_c`, `cleint_email`, `client_pass`, `client_reference`, `client_age`, `client_address`, `client_gender`) VALUES
('1311240354085', '0618254242', '0618254242', '0618254242', 'brooke.logan@yahoo.com', 'logan@brooke', 'myself', 46, '7000 bondu estate george', 'Female'),
('1512140600088', '0118944278', '0764499070', '0764499070', 'molepor@mweb.co.za', '19820505p', 'myself', 37, '8909 Ext 1 olifantsfontein', 'Female'),
('1908150375082', '0136539637', '0722226836', '0722226836', 'albertchosi33@gmail.com', 'alison1982', 'website', 21, '980 good street ferndale', 'Male'),
('2012190284086', '0118293746', '0764499070', '0744499070', 'phosar@webmail.co.za', '888888880p', 'word-of-mouth', 32, '164 eddie street fourways', 'Male'),
('2808250506083', '0665463890', '0665463890', '0665463890', 'ribag@ymail.com', 'rebabedi', 'Mother in Law', 38, '456 forest hill PE', 'Female'),
('4003100886084', '0745272826', '0745272826', '0745272826', 'zwaibala@iburst.co.za', 'theezwaibala', 'Mother in Law', 57, '453 khutsong carltonville', 'Male'),
('4708110702087', '0879653489', '0879653489', '0879653489', 'adrianbasson@gmail.com', '2567158464', 'facebook', 50, '1946 bree estates dainfern', 'Male'),
('4804180882084', '0818210178', '0818210178', '0818210178', 'melbah@gmail.com', 'koketxo', 'word-of-mouth', 27, '12 savana estate midrand', 'Female'),
('5507140417085', '0849373483', '0849373483', '0849373483', 'andries999@mweb.co.za', 'kholo259', 'Mother in Law', 19, '3272 ext 2 tembisa', 'Male'),
('630710012087', '0114845778', '0766553310', '0766553310', 'kbees75@gmail.com', 'twilight@111', 'website', 35, '1222 the parks riverside view', 'Female'),
('650402056081', '0113908987', '0113908987', '0737540869', 'brianndara@hotmail.com', 'brian4', 'website', 40, '654 chiawelo soweto', 'Male'),
('7212170290085', '0715740098', '0715740098', '0715740098', 'maureen@murray&roberts.co.za', 'thom1675', 'facebook', 24, '2 allen street polokwane', 'Female'),
('7312050486084', '0603789673', '0603789673', '0603789673', 'karen.viljoen@santech.co.za', 'babajie45', 'facebook', 53, '7 diamond ave boksburg', 'Female'),
('7902150410084', '0125436899', '0835386961', '0835386961', 'lesedi@telkomsa.net', 'kolelesedi', 'word-of-mouth', 39, '234 east complex dainfern', 'Male'),
('8009100659085', '0823345283', '0823345283', '0823345283', 'nonhlanhla@rrservices.co.za', 'lsebola', 'youtube', 44, '123 ridge road bartlett', 'Female'),
('8610120779086', '0733221330', '0733221330', '0733221330', 'mapula@homail.com', 'roses56', 'word-of-mouth', 33, '38 sekhwama village gapolata', 'Female'),
('8807130418086', '0765332412', '0765332412', '0765332412', 'dg@gmail.com', '000000000', 'website', 30, 'cosmos city', 'Male'),
('9003280235085', '0798835600', '0798835600', '0798835600', 'fiona123@gmail.com', '4444444888', 'facebook', 29, '707 Ext 5 Ranburg', 'Female'),
('9202010527088', '0216936738', '0217342873', '0797697798', 'damiensmith1@hotmail.com', 'smithjunior', 'website', 48, '4040 hermanas', 'Male'),
('9710230788081', '0156808760', '0845550998', '0845550998', 'dibonarams@hotmail.com', 'ramashiap', 'word-of-mouth', 26, '7675 turfloop polokwane', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consult_id` int(11) NOT NULL,
  `consult_name` varchar(50) DEFAULT NULL,
  `consult_desc` varchar(255) DEFAULT NULL,
  `consult_price` decimal(7,2) DEFAULT NULL,
  `client_id` varchar(15) DEFAULT NULL,
  `hcp_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hcp`
--

CREATE TABLE `hcp` (
  `hcp_id` varchar(15) NOT NULL,
  `hcp_name` varchar(60) NOT NULL,
  `hcp_spec` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_num` varchar(20) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `client_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_num`, `invoice_date`, `client_id`) VALUES
(1, '0678477', '2019-04-04', '630710012087'),
(2, '0953483', '2019-05-21', '650402056081'),
(3, '5387309', '2019-01-03', '1311240354085'),
(4, '012237', '2019-06-11', '1512140600088'),
(5, '132269', '2019-03-16', '1908150375082'),
(6, '111146', '2019-04-24', '2012190284086');

-- --------------------------------------------------------

--
-- Table structure for table `supplement`
--

CREATE TABLE `supplement` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(50) NOT NULL,
  `sup_price` decimal(7,2) NOT NULL,
  `sup_qty_in_stock` int(11) NOT NULL,
  `sup_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplement_category`
--

CREATE TABLE `supplement_category` (
  `sup_cat_id` int(11) NOT NULL,
  `sup_cat_name` varchar(40) DEFAULT NULL,
  `sup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplement_supplier`
--

CREATE TABLE `supplement_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(40) DEFAULT NULL,
  `supplier_address` varchar(255) DEFAULT NULL,
  `supplier_phone` varchar(10) DEFAULT NULL,
  `sup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consult_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `hcp_id` (`hcp_id`);

--
-- Indexes for table `hcp`
--
ALTER TABLE `hcp`
  ADD PRIMARY KEY (`hcp_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `supplement`
--
ALTER TABLE `supplement`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `supplement_category`
--
ALTER TABLE `supplement_category`
  ADD PRIMARY KEY (`sup_cat_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `supplement_supplier`
--
ALTER TABLE `supplement_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consult_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplement_category`
--
ALTER TABLE `supplement_category`
  MODIFY `sup_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplement_supplier`
--
ALTER TABLE `supplement_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD CONSTRAINT `bookinfo_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`hcp_id`) REFERENCES `hcp` (`hcp_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `supplement_category`
--
ALTER TABLE `supplement_category`
  ADD CONSTRAINT `supplement_category_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `supplement` (`sup_id`);

--
-- Constraints for table `supplement_supplier`
--
ALTER TABLE `supplement_supplier`
  ADD CONSTRAINT `supplement_supplier_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `supplement` (`sup_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
