-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 03:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `box_tb`
--

CREATE TABLE `box_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `box_tb`
--

INSERT INTO `box_tb` (`id`, `fname`, `lname`, `email`, `phone`, `country`, `city`, `title`, `category`, `info`, `time_stamp`) VALUES
(1, 'Telma Okpetue', 'okpetue', 'eephiechima@gmail.com', '08033115934', 'Nigeria', 'Abuja', 'Miss', 'Safe', 'hi', '2017-05-14 20:04:35'),
(2, 'ifeyinwa', 'chinke', 'chinkeifeyinwa@gmail.com', '08033115934', 'USA', '30 douglasville, Atlanta. USA', 'Miss', 'mobile development', 'i need a mobile application that send emergency messages', '2017-05-14 20:12:52'),
(3, 'ifeyinwa', 'Chinke', 'chinkeifeyinwa@gmail.com', '08033115934', 'Ireland', '780 mougbe street, dublin city', 'miss', 'web development', 'i need an accounting software for my organization', '2017-05-14 20:14:05'),
(4, 'Awolowo', 'victor', 'awo@gmail.com', '1234567890', 'Nigeria', '12 missipi stree, Maitama. Abuja, Nigeria', 'Mr', 'mobile development', 'i need a mobile app that controls the sensors in my house', '2017-05-14 20:15:29'),
(5, 'Kenneth ', 'Ohaa', 'Aryken@gmail.com', '1234567890', 'Ireland', 'dublin city, Ireland', 'mr', 'web development', 'i need an interactive website for my company', '2017-05-14 20:17:36'),
(6, 'Helen', 'okpetue', 'helenokpetue@gmail.com', '1234567890', 'Nigeria', 'Abuja, Nigeria', 'Mrs', 'mobile development', 'i need an educational mobile game application developed for my kids. ', '2017-05-14 20:18:47'),
(7, 'Enyinnaya', 'Abengowe', 'gallymore@yahoo.com', '1234567890', 'Nigeria', 'Abuja, Nigeria', 'Mr', 'web development', 'i need a website', '2017-05-14 20:20:16'),
(8, 'Cynthia', 'Chinke', 'okpetuechinedum@gmail.com', '1234567890', 'Ghana', 'Accra, Ghana', 'Miss', 'mobile development', 'i need a fashion mobile application', '2017-05-14 20:21:27'),
(9, 'ibk', 'Afolabi', 'ibk@gmail.com', '09899988888', 'Nigeria', 'Ogun', 'Dr', 'Staff', 'jjkkklllo', '2017-06-13 14:44:57'),
(10, 'HNG', 'Internship', 'addie@gmail.com', '09899988888', 'Nigeria', 'Lagos', 'Miss', 'postgrad', 'HNG Internship', '2017-08-18 13:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`id`, `fullname`, `gender`, `dob`, `phone`, `email`, `password`, `time_stamp`) VALUES
(2, 'Ify', 'Female', '1995-08-01', '08033115934', 'chinkeifeyinwa@gmail.com', '1234567', '2017-05-11 10:42:17'),
(3, 'Telma Okpetue', 'Female', '2001-09-28', '08101774268', 'telmaokpetue@gmail.com', '1234567', '2017-05-11 13:15:12'),
(4, 'Kenneth Ohaa', 'Male', '1992-03-10', '56789900', 'Aryken@gmail.com', '1234567', '2017-05-11 13:25:59'),
(5, 'Awolowo', 'Male', '1994-04-25', '1234567890', 'awo@gmail.com', '12345678', '2017-05-13 18:05:04'),
(6, 'onosu Dafe', 'Male', '2001-09-28', '1234567890', 'great@gmail.com', '1234567', '2017-05-14 19:12:41'),
(7, 'ruth', 'Female', '1995-08-01', '08058999042', 'eephiechima@gmail.com', '123456789', '2017-06-13 14:43:47'),
(8, 'addie', 'Female', '1994-08-17', '08096332585', 'addie@gmail.com', '1234567890', '2017-08-18 13:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box_tb`
--
ALTER TABLE `box_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box_tb`
--
ALTER TABLE `box_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
