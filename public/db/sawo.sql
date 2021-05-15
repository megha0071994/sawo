-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawo`
--

-- --------------------------------------------------------

--
-- Table structure for table `sw_category`
--

CREATE TABLE `sw_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_category`
--

INSERT INTO `sw_category` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'cat dfdf', 1, 1, '2021-05-08 16:29:44', '2021-05-08 16:30:07'),
(2, 'cat 2', 1, 0, '2021-05-08 16:29:50', '2021-05-08 16:29:50'),
(3, 'sfsd', 1, 0, '2021-05-08 16:29:54', '2021-05-08 16:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `sw_users`
--

CREATE TABLE `sw_users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `access` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_users`
--

INSERT INTO `sw_users` (`id`, `name`, `email`, `mobile`, `password`, `access`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sw_category`
--
ALTER TABLE `sw_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_users`
--
ALTER TABLE `sw_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sw_category`
--
ALTER TABLE `sw_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sw_users`
--
ALTER TABLE `sw_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
