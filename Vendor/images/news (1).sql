-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 08:25 PM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `headline`, `date`, `description`, `image`, `author`) VALUES
(23, 'This is dinesh soni roaming around in a marriage', '2020-12-08', 'Enjoying partying in a marriage in the pre covoid situation where everything was just good enough and undescribable.', 'k (1).jpg', 'Dinesh soni');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `number`) VALUES
(1, '', '', '', 0),
(2, 'This is to inform you that i am', 'Dinesh soni', 'soni.dineshds2000@gmail.com', 7597241244),
(3, 'This is to inform you that i am', 'Dinesh soni', 'soni.dineshds2000@gmail.com', 7597241244);

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE `headlines` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `uploadon` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `image`, `headline`, `description`, `category`, `uploadon`, `author`) VALUES
(170, 'jpg.png', 'PM Modi lays foundation for Ram temple in Ayodhya', 'The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.The city of ayodhya is all set to bring the most awaited mandir in the india.', 'Entertainment', '2020-12-03', 'John Green'),
(171, 'product1.png', 'New product launch by baba ramdev', 'This is the new product launched by baba ramdev on the eve of christmas.', 'Entertainment', '2020-12-02', 'Baba Ramdev'),
(172, 'download1.jpg', 'up', 'sasd', 'Start-ups', '2020-12-03', 'John Green'),
(173, 'download (1).jpg', '', 'asdddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Education', '2020-12-25', ''),
(175, 'images.jpg', '', 'asdddddddasdasdasdasdaaaaaaaaaaaaaaaaaaaaaaaaasd asdasdddddddddddda asdasdddddddddda  asd', 'Sports', '2020-12-21', ''),
(176, 'cristofer-jeschke-TwG3vThQS9Y-unsplash.jpg', '', 'Health newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth newsHealth news', 'Health', '2020-12-21', ''),
(177, 'images.jpg', '', 'Politics', 'Politics', '2020-12-17', ''),
(178, 'cristofer-jeschke-TwG3vThQS9Y-unsplash.jpg', '', 'kk', 'Health', '2020-12-21', ''),
(179, 'jpg.png', '', 'jf', 'Health', '2020-12-21', ''),
(180, 'product1.png', '', 'asdasdasdas asdaaaaaaaaaaaaaaaaaaaaaaaa asdasd asdasdasdasd asdasdasdasd', 'Education', '2020-12-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `top3`
--

CREATE TABLE `top3` (
  `id` int(200) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uploadon` date NOT NULL,
  `category` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top3`
--

INSERT INTO `top3` (`id`, `headline`, `image`, `uploadon`, `category`, `author`) VALUES
(12, 'PM Modi lays foundation for Ram temple in Ayodhya', 'jpg.png', '2020-12-01', 'Entertainment', 'John Green'),
(13, 'Dinesh soni', 'product1.png', '2020-12-03', 'Start-ups', 'John Green'),
(14, 'This is new phone launched by patanjali.', 'product4.png', '2020-12-03', 'Health And Technology', 'Dinesh soni');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `gender`) VALUES
(3, 'Gaurav mehta', 7597241243, 'soni.dineshds2001@gmail.com', 'f1f7f9c29fd2669175266508f3d82185', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headlines`
--
ALTER TABLE `headlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top3`
--
ALTER TABLE `top3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headlines`
--
ALTER TABLE `headlines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `top3`
--
ALTER TABLE `top3`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
