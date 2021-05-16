-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 12:00 PM
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
(3, 'Dinesh Soni', '1234567890', 'abc@gmail.com', 'The order is not delivered yet.', '2021-03-20'),
(4, 'Adam', '1234567890', 'abc@gmail.com', 'Quality is not upto the mark', '2021-03-20'),
(5, 'Jofra', '1234567890', 'abc@gmail.com', 'Delivery charge is very high', '2021-03-20'),
(6, 'Ruby', '1234567890', 'abc@gmail.com', 'Coupon code is not applicable.', '2021-03-20');

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
  `size` varchar(5) NOT NULL,
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

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `size`, `payment_status`, `order_status`, `mihpayid`, `txnid`, `status`, `added_on`) VALUES
(129, 35, '101 Independence Avenue, S.E.', 'Washington', 36303, 'cod', 1500, '', 'success', 1, '', '54b610fcda47cb1e3ee2', '', '2021-03-20 03:23:30'),
(130, 35, 'Panipaich', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', '345f8085f3b099050307', '', '2021-04-11 07:18:00'),
(131, 36, 'asddd', 'Jaipur', 302002, 'cod', 1000, '', 'success', 1, '', 'ba2a898b5d10ac4f68d7', '', '2021-04-30 06:08:23'),
(132, 35, 'Panipaich', 'jaipur', 302002, 'payu', 500, '', 'pending', 1, '', 'd91d63ab7e6187b141a9', '', '2021-04-30 06:13:25'),
(133, 35, 'Bananna', 'Chapra', 841301, 'payu', 500, '', 'pending', 1, '', 'e878b1df6b0324b403dd', '', '2021-04-30 06:13:33'),
(134, 35, '114a laxmi nagar mangori ki bagichi bhrampuri', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', '7c80a989d358d741cd3c', '', '2021-04-30 06:18:58'),
(135, 35, 'asddd', 'Jaipur', 302002, 'payu', 500, '', 'pending', 1, '', '193ba5d1dbc7508d5ba9', '', '2021-04-30 06:19:35'),
(136, 36, '19,Sitaram Bazar,Brahmpuri, 19,Sitaram Bazar,Brahmpuri', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', '0121b273153b7292ce88', '', '2021-05-08 08:59:57'),
(137, 36, 'asdsadsad', 'jaipur', 302002, 'cod', 4500, '', 'success', 3, '', '0109a4b6b8b3b94bbdfa', '', '2021-05-09 04:40:53'),
(138, 36, '101 Independence Avenue, S.E.', 'Washington', 36303, 'cod', 1000, '', 'success', 1, '', '688c2b5c8f3c82c1030f', '', '2021-05-09 04:42:43'),
(139, 36, 'sfd', '12', 123, 'cod', 0, '', 'success', 1, '', '55bb6a3309d8f0c8a5b4', '', '2021-05-13 10:06:06'),
(140, 36, '19,Srdgsftaram Bazar,Brahmpuri, 19,Sitaram Bazar,Brahmpuri', 'jaipur', 302002, 'cod', 0, '', 'success', 1, '', 'ec8e01df2098b9d6ca5b', '', '2021-05-13 10:07:21'),
(141, 36, 'e', 'ew', 23, 'cod', 2000, '', 'success', 1, '', 'ceb19b1f035b5b113eef', '', '2021-05-13 10:10:22'),
(142, 36, '123', '123', 123, 'cod', 1000, '', 'success', 1, '', '9c27d85a9fd40b6b1f96', '', '2021-05-13 10:10:51'),
(143, 36, 'sdfg', 'dgf', 0, 'cod', 2000, '', 'success', 1, '', '0b3575cd5f0aefc30c26', '', '2021-05-13 01:27:41'),
(144, 36, 'hell', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', 'e0f1559c9380888bcb84', '', '2021-05-13 01:31:29'),
(145, 36, '1233mpuri', 'jaipur', 302002, 'cod', 3000, '', 'success', 1, '', '24eb7dbe422138652cb3', '', '2021-05-13 01:33:27'),
(146, 36, 'dinsss', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', 'fcce452839c2fc7031f1', '', '2021-05-13 01:49:48'),
(147, 36, 'zxczxc', 'a', 0, 'cod', 2000, '', 'success', 1, '', '990bbfed8f74b8624e15', '', '2021-05-13 01:52:21'),
(148, 36, '19,Sitaram Bazar,Brahmpuri, 19,Sitaram Bazar,Brahmpuri', 'jaipur', 302002, 'cod', 500, '', 'success', 1, '', '16ecd7df2100aca8e11b', '', '2021-05-13 01:53:23'),
(149, 36, '114a laxmi nagar mangori ki bagichi bhrampuri', 'jaipur', 302002, 'cod', 500, 'XL', 'success', 1, '', '78c371d5a41ee336856f', '', '2021-05-13 01:55:28'),
(150, 36, 'dinsss', 'jaipur', 302002, 'cod', 5000, 'M', 'success', 1, '', '7907791484533391079d', '', '2021-05-13 01:58:01'),
(151, 36, '114a laxmi nagar mangori ki bagichi bhrampuri', 'jaipur', 302002, 'payu', 2500, 'XL', 'pending', 1, '', 'ca287d4da454b4be012c', '', '2021-05-13 02:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `size`, `price`) VALUES
(111, 119, 20, 7, '', 500),
(112, 120, 20, 1, '', 500),
(113, 120, 19, 1, '', 500),
(114, 121, 19, 6, '', 500),
(115, 122, 19, 1, '', 500),
(116, 123, 19, 1, '', 500),
(117, 124, 19, 1, '', 500),
(118, 125, 21, 1, '', 500),
(119, 126, 19, 1, '', 500),
(120, 127, 21, 1, '', 500),
(121, 128, 21, 1, '', 500),
(122, 128, 18, 1, '', 500),
(123, 128, 19, 1, '', 500),
(124, 129, 18, 1, '', 500),
(125, 129, 20, 1, '', 500),
(126, 129, 21, 1, '', 500),
(127, 130, 19, 1, '', 500),
(128, 131, 18, 1, '', 500),
(129, 131, 21, 1, '', 500),
(130, 132, 21, 1, '', 500),
(131, 133, 20, 1, '', 500),
(132, 134, 18, 1, '', 500),
(133, 135, 18, 1, '', 500),
(134, 136, 20, 1, '', 500),
(135, 137, 20, 9, '', 500),
(136, 138, 19, 2, '', 500),
(137, 139, 21, 0, '', 500),
(138, 140, 20, 0, '', 500),
(139, 141, 21, 4, '', 500),
(140, 142, 18, 2, '', 500),
(141, 143, 21, 0, '', 500),
(142, 144, 20, 0, '', 500),
(143, 145, 19, 0, '', 500),
(144, 146, 20, 1, 'L', 500),
(145, 147, 18, 4, 'M', 500),
(146, 148, 20, 1, 'S', 500),
(147, 149, 20, 1, 'XL', 500),
(148, 150, 20, 10, 'M', 500),
(149, 151, 21, 5, 'XL', 500);

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
(18, 60, 'World\'s okayest coder tshirt Levis', 'images1.jpg', '', '', 'Male', 2, '', '', '', 0, '', 0, 1000, 500, '', 1, 'LIMITED'),
(19, 60, 'Github Blue tshirt rounded neck', 'images3.jpg', '', '', 'Male', 3, '', '', '', 0, '', 0, 1000, 500, '', 1, 'BEST'),
(20, 60, 'White Rounded C++ Code Tshirt', 'images5.jpg', '', '', 'Male', 4, '', '', '', 0, '', 0, 1000, 500, '', 1, 'BEST'),
(21, 60, 'Yellow algorithm Tshirt', 'images8.jpg', '', '', 'Male', 5, '', '', '', 0, '', 0, 1000, 500, '', 1, 'LIMITED');

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
(35, 'Yogesh Soni', '9413345322', 'soni.dineshds2001@gmail.com', 'dineshdondon1', '2021-02-10'),
(36, 'Dinesh Soni', '07597241244', 'soni.dineshds2002@gmail.com', 'dineshdondon1', '2021-02-13');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
