-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 09:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(2, 'Dinesh soni', 'dineshdondon1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(53, 'Sweaters', 1),
(55, 'Shirts', 1),
(56, 'T-shirts', 1),
(57, 'Jackets', 1),
(58, 'Hoodies', 1),
(59, 'Vests', 1),
(60, 'Ethnic', 1),
(61, 'Kurtas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` text NOT NULL,
  `email` varchar(75) NOT NULL,
  `message` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `number`, `email`, `message`, `added_on`) VALUES
(1, 'Dinesh Soni', '7878987445', 'soni.dineshds2000@gmail.com', 'asd', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `order_status` int(25) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `mihpayid`, `txnid`, `status`, `added_on`) VALUES
(114, 35, '19 Sitaram Bazar Brahmpuri', 'Jaipur', 302002, 'cod', 500, 'success', 1, '', 'bd1ef411cc73051f11a7', '', '2021-02-11 03:37:26'),
(116, 35, 'sadasd', 'as', 302002, 'cod', 500, 'success', 1, '', 'c07a4eed973d02734e25', '', '2021-02-11 03:43:13'),
(117, 35, 'Panipaich', 'jaipur', 302002, 'cod', 4500, 'success', 1, '', '3143c903ffba4aafcd42', '', '2021-02-11 03:43:56'),
(118, 35, 'asddd', 'Jaipur', 302002, 'cod', 500, 'success', 1, '', 'd93c61f32d7b2e5cd5f2', '', '2021-02-11 03:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(105, 114, 18, 1, 500),
(107, 116, 19, 1, 500),
(108, 117, 21, 8, 500),
(109, 117, 19, 1, 500),
(110, 118, 18, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Cancelled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `genderfor` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `sleeve` varchar(255) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `packof` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `realprice` int(255) NOT NULL,
  `offeredprice` int(255) NOT NULL,
  `necktype` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `image`, `type`, `colour`, `genderfor`, `qty`, `brand`, `sleeve`, `fabric`, `packof`, `size`, `rating`, `realprice`, `offeredprice`, `necktype`, `status`, `category`) VALUES
(18, 56, 'Levis brand', 'images1.jpg', '', '', 'Male', 2, '', '', '', 0, '', 0, 1000, 500, '', 1, 'LIMITED'),
(19, 56, 'Flipkart', 'images3.jpg', '', '', 'Male', 3, '', '', '', 0, '', 0, 1000, 500, '', 1, 'BEST'),
(20, 56, 'Amazon', 'images5.jpg', '', '', 'Male', 4, '', '', '', 0, '', 0, 1000, 500, '', 1, 'BEST'),
(21, 56, 'Myntra', 'images7.jpg', '', '', 'Male', 5, '', '', '', 0, '', 0, 1000, 500, '', 1, 'LIMITED');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `added_on`) VALUES
(34, 'Dinesh Soni', '07597241244', 'soni.dineshds2000@gmail.com', 'asd', '2021-01-22'),
(35, 'Yogesh Soni', '9413345322', 'soni.dineshds2001@gmail.com', 'dineshdondon1', '2021-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
