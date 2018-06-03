-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 01:44 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hodard`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `bname` varchar(300) NOT NULL,
  `bcode` varchar(200) NOT NULL,
  `baddress` varchar(300) NOT NULL,
  `contactname` varchar(300) NOT NULL,
  `homephone` varchar(300) NOT NULL,
  `mobilephone` varchar(300) NOT NULL,
  `pemail` varchar(300) NOT NULL,
  `bemail` varchar(300) NOT NULL,
  `fax` varchar(300) NOT NULL,
  `cin` varchar(300) NOT NULL,
  `tin` varchar(400) NOT NULL,
  `cst` varchar(200) NOT NULL,
  `Excise` varchar(300) NOT NULL,
  `PAN` varchar(200) NOT NULL,
  `tax` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `unite` varchar(300) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `price` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `unite`, `baddress`, `price`, `description`) VALUES
(3, 'item name', 'unite', 'huye', '88', 'dwesc');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `bname` varchar(300) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `siteaddress` varchar(300) NOT NULL,
  `contactname` varchar(300) NOT NULL,
  `homephone` varchar(300) NOT NULL,
  `cin` varchar(300) NOT NULL,
  `tin` varchar(300) NOT NULL,
  `cst` varchar(300) NOT NULL,
  `excise` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `fax` varchar(300) NOT NULL,
  `sdate` varchar(300) NOT NULL,
  `edate` varchar(300) NOT NULL,
  `pamount` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `id` int(11) NOT NULL,
  `ordername` varchar(300) NOT NULL,
  `branch` varchar(300) NOT NULL,
  `project` varchar(300) NOT NULL,
  `vendor` varchar(300) NOT NULL,
  `packing` varchar(300) NOT NULL,
  `insurance` varchar(300) NOT NULL,
  `edate` varchar(300) NOT NULL,
  `adate` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `vendorpayment`
--

CREATE TABLE `vendorpayment` (
  `id` int(11) NOT NULL,
  `vname` varchar(400) NOT NULL,
  `idate` varchar(400) NOT NULL,
  `inumber` varchar(400) NOT NULL,
  `odate` varchar(400) NOT NULL,
  `amount` varchar(400) NOT NULL,
  `damount` varchar(300) NOT NULL,
  `rdate` varchar(300) NOT NULL,
  `dpdate` varchar(300) NOT NULL,
  `who` varchar(300) NOT NULL,
  `reason` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `vname` varchar(300) NOT NULL,
  `vaddress` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `vemail` varchar(300) NOT NULL,
  `fax` varchar(300) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `bemail` varchar(300) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `tin` varchar(30) NOT NULL,
  `cst` varchar(300) NOT NULL,
  `excise` varchar(200) NOT NULL,
  `tax` varchar(300) NOT NULL,
  `bank` varchar(300) NOT NULL,
  `pan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vname`, `vaddress`, `contact`, `phone`, `vemail`, `fax`, `payment`, `bemail`, `cin`, `tin`, `cst`, `excise`, `tax`, `bank`, `pan`) VALUES
(1, 'vname', 'adreess', '9999', '4343434334', 'adiel@gmail.com', '88', '8888', 'ddd@gmail.com', '222', '222', '222', '222', '2222', '2222', '22222'),
(2, 'vname', 'adreess', '9999', '4343434334', 'adiel@gmail.com', '88', '8888', 'ddd@gmail.com', '222', '222', '222', '222', '2222', '2222', '22222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendorpayment`
--
ALTER TABLE `vendorpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendorpayment`
--
ALTER TABLE `vendorpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
