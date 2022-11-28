-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2022 at 06:42 AM
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
-- Database: `sql12531292`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `name` varchar(50) NOT NULL,
  `Creation Date` date DEFAULT NULL,
  `Updation Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `bid` varchar(5) NOT NULL DEFAULT '101'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`name`, `Creation Date`, `Updation Date`, `bid`) VALUES
('Hero', '2012-01-14', '0000-00-00 00:00:00', '101'),
('Atlas', '2013-01-05', '0000-00-00 00:00:00', '102'),
('HRX', '2017-11-03', '0000-00-00 00:00:00', '103'),
('Avon', '2023-07-30', '0000-00-00 00:00:00', '104'),
('MTB', '2026-06-23', '0000-00-00 00:00:00', '105');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `rollnumber` varchar(10) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `hostelname` varchar(20) NOT NULL,
  `roomnumber` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`firstname`, `lastname`, `rollnumber`, `mobilenumber`, `hostelname`, `roomnumber`, `password`, `cid`) VALUES
('Gaurang', 'Bhutani', '21bcs084', 345, 'H4', 'A301', '.hh', 4),
('Gaurang', 'Bhutani', '21bcs085', 345, 'H4', 'A301', 'k', 5),
('harsh', 'bansal', '21bcs093', 345, 'vivekanand', 'a301', 'harsh123', 6),
('gagan', 'singh', '21bcs080', 345, 'h4', 'a301', 'harsh123', 8),
('ABHI', 'GUPTA', '21BCS089', 345, 'H4', 'A302', '123456', 10),
('harshad', 'patidar', '21bcs095', 345, 'h4', 'a304', '304', 11),
('sdcsdv', 'sdv', 'sd', 345, 'sdv', 'sfs', '1234', 12),
('soda', 'patidar', '21bcs208', 345, 'h4', 'i406', 'jhaa', 13);

-- --------------------------------------------------------

--
-- Table structure for table `cycles`
--

CREATE TABLE `cycles` (
  `cycleid` varchar(5) NOT NULL,
  `model` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL DEFAULT 'non_gear',
  `security_amt` int(11) NOT NULL DEFAULT 100,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cycles`
--

INSERT INTO `cycles` (`cycleid`, `model`, `brand`, `color`, `type`, `security_amt`, `image`) VALUES
('001', 'Mountain bike', 'MTB', 'Grey', 'non_gear', 100, '1.png'),
('002', 'Senapati', 'Avon', 'Black', 'Gear', 100, '2.png'),
('003', 'Buzz', 'Hero', 'Dark Blue', 'non_gear', 100, '3.png'),
('004', 'Rodeo', 'Atlas', 'red', 'non_gear', 100, '4.png'),
('005', 'Lady Bird', 'Hero', 'pink', 'non_gear', 100, '5.png'),
('006', 'KK802', 'HRX', 'Glacier Gr', 'non_gear', 100, '6.png'),
('21', 'kjnjn', 'kjnk', 'kj', 'kjkj', 80, 'mobile-design.jpg'),
('23', 'n', 'jhj', 'jhv', 'jh', 85, 'mobile-design.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `master_login`
--

CREATE TABLE `master_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_login`
--

INSERT INTO `master_login` (`username`, `password`) VALUES
('47617572616E67', '21bcs085'),
('Gagan', '21bcs085'),
('Harsh', '21bcs093');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `oid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `cycleid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `amount`, `cid`, `rollnumber`, `oid`, `status`, `cycleid`) VALUES
('2022-11-04 13:33:56', 200, 4, '21bcs084', 1, 'Cancelled', '001'),
('2022-11-26 08:22:30', 10, 13, '216551', 56, 'Pending', '21'),
('2022-11-26 08:55:14', 250, 5, 'wwe', 62, 'Pending', '004'),
('2022-11-26 09:17:03', 250, 4, '21bcs084', 65, 'Pending', '006'),
('2022-11-28 04:49:20', 250, 6, '21bcs093', 66, 'Confirmed', '003'),
('2022-11-28 04:49:48', 250, 6, '21bcs093', 67, 'Cancelled', '003');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `name` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `contactno` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`name`, `email`, `contactno`, `message`) VALUES
('Harry Den', 'webhosting', 2147483647, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
('shanu', 'wehhamigo@', 954748364, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
('Being Human', 'webhingami', 7263767, 'hgjhGJHAG hgashag'),
('gAGAN', 'weigo@gmai', 8787979, 'HELLO HELLLO'),
('dsv', 'sv', 55654, 'svs'),
('ssv', 'ssv', 6545, 'svsdv');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `emailid` varchar(20) NOT NULL,
  `subbscriptiondate` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`emailid`, `subbscriptiondate`) VALUES
('gaurangbhutani14@gma', '12-11-2003'),
('hars699@gmaill.com', '12-11-2005'),
('kunal2417@gmail.com', '18-11-2007');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `testimonials` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`name`, `email`, `testimonials`, `image`) VALUES
('Harsh', 'hars699@gmail.com', 'solride has just changed my way of living Now i am both physically as well as mentally fit...', 'bansal.jpg'),
('Gaurang', 'gaurangbhutani14@gmail.com', 'I no longer have to walk for so long under that full fledge sun daily inside campus solride helped me a lot...', 'gaurang.jpg'),
('Kunal', 'kunal2417@gmail.com', 'Solridee has just changed my way of living Now i am both physically as well as mentally fit...', 'gagan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cycleid` varchar(5) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`);

--
-- Indexes for table `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`cycleid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`contactno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`cycleid`,`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cycleid`) REFERENCES `cycles` (`cycleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
