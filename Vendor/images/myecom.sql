-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 04:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
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

INSERT INTO `product` (`id`, `name`, `image`, `type`, `colour`, `genderfor`, `qty`, `brand`, `sleeve`, `fabric`, `packof`, `size`, `rating`, `realprice`, `offeredprice`, `necktype`, `status`, `category`) VALUES
(21, 'Solid Men Mandarin Collar Green T-Shirt', 'images1.jpg', 'T-shirt', 'Red', 'male', 20, 'Levi\'s', 'Half Sleeve', 'Cotton', 20, 'S', 4, 799, 399, 'Rounded', 0, 'BEST'),
(26, 'Solid Men Hooded Solid Men Hooded N', 'images2.jpg', 'T-shirt', 'Green', 'male', 12, 'Zara', 'Half Sleeve', 'Cotton', 20, 'L', 5, 1200, 900, 'Square', 1, 'FEW'),
(27, 'Color Block Men Hooded Neck RedColor Block Men Hooded Neck Red', 'images4.jpg', 'T-shirt', 'Yellow', 'Male', 12, 'Amazon', 'Half Sleeve', 'Cotton', 12, 'L', 4, 799, 900, 'Collar', 1, 'NEW'),
(28, 'Typography Men HoTypography Men Ho', 'images5.jpg', 'Vests', 'Black', 'Female', 32, 'Lava', 'Full Sleeve', 'Fiber', 11, 'S', 5, 1200, 399, 'Square', 1, 'LIMITED'),
(34, 'Printed Men Hooded Printed Men Hooded ', 'images7.jpg', 'Hoodies', 'Pale Pink', 'Female', 32, 'Flipkart', 'Full Sleeve', 'Synthetic', 43, 'XL', 4, 678, 567, 'Triangle', 1, 'LIMITED'),
(35, 'Striped Men Polo NeStriped Men Polo Ne', 'images8.jpg', 'Full Sleeves', 'Baby Pink', 'Female', 32, 'Xiaomi', 'Half Sleeve', 'Cotton', 11, 'XXL', 4, 899, 699, 'Rounded', 1, 'NEW'),
(36, 'Abstract Men HoodeAbstract Men Hoode', 'images6.jpg', 'Vests', 'Grey', 'Female', 32, 'Lava', 'Half Sleeve', 'Cotton', 20, 'S', 4, 1200, 399, 'Triangle', 1, 'BEST'),
(37, 'Typography Men Hooded Neck Red T-Shirt', 'images3.jpg', 'T-shirt', 'Dark Green', 'Male', 12, 'Amazon', 'Full Sleeve', 'Cotton', 11, 'S', 4, 678, 567, 'Triangle', 1, 'FEW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
