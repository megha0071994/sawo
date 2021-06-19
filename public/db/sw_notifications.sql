-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 09:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `sw_notifications`
--

CREATE TABLE `sw_notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `payment` varchar(255) NOT NULL DEFAULT '0',
  `respond` int(11) DEFAULT NULL COMMENT '1=yes,0=no',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_notifications`
--

INSERT INTO `sw_notifications` (`id`, `user_id`, `driver_id`, `message`, `payment`, `respond`, `created_at`, `updated_at`) VALUES
(1, 2, 2, NULL, '500', NULL, '2021-06-10 18:27:26', '2021-06-10 19:01:58'),
(2, 2, 1, NULL, '400', NULL, '2021-06-10 18:27:26', '2021-06-10 19:01:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sw_notifications`
--
ALTER TABLE `sw_notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sw_notifications`
--
ALTER TABLE `sw_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
