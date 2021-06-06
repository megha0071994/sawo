-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 10:08 PM
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
(2, 'cat 1', 1, 0, '2021-05-08 16:29:50', '2021-05-08 16:29:50'),
(3, 'cat 2', 1, 0, '2021-05-08 16:29:54', '2021-05-10 08:00:30'),
(4, 'cat 3', 1, 0, '2021-05-10 08:39:00', '2021-05-15 09:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `sw_contact_request`
--

CREATE TABLE `sw_contact_request` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobileNo` varchar(250) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_contact_request`
--

INSERT INTO `sw_contact_request` (`id`, `name`, `email`, `mobileNo`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(0, 'Deependra', 'deependra@gmail.com', '9698989898', 'testing Comment', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sw_driver`
--

CREATE TABLE `sw_driver` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `alt_mobile_no` varchar(20) DEFAULT NULL,
  `franchise_mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `adhar_card_front` varchar(255) DEFAULT NULL,
  `adhar_card_back` varchar(255) DEFAULT NULL,
  `bank_passbook` varchar(255) DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `police_verification` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_driver`
--

INSERT INTO `sw_driver` (`id`, `fname`, `lname`, `mobile_no`, `alt_mobile_no`, `franchise_mobile_no`, `email`, `address`, `state`, `profile_pic`, `adhar_card_front`, `adhar_card_back`, `bank_passbook`, `license`, `police_verification`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Megha', 'Shrivastava', '9074287431', '9074287422', '9074287478', 'megha0071994@gmail.com', 'C-131 IG Nehru Nagar bhopal', 'm.p.', '/assets/driver/profile-pic/20210515121246.png', '/assets/driver/adhaar-card/20210515121246_1.png', '/assets/driver/adhaar-card/20210515121246_2.png', '/assets/driver/bank-passbook/20210515121246.png', '/assets/driver/license/20210515121246.png', '/assets/driver/police-verification/20210515121246.png', 1, 0, '2021-05-15 12:12:46', '2021-05-15 12:23:36'),
(2, 'Shanu', 'Shrivastava', '9074287431', '9074287428', '9074287429', 'megha0071994@gmail.com', 'C-131 IG Nehru Nagar bhopal', 'm.p.', '/assets/driver/profile-pic/20210515172007.png', '/assets/driver/adhaar-card/20210515171902_1.png', '/assets/driver/adhaar-card/20210515171902_2.png', '/assets/driver/bank-passbook/20210515171939.png', '/assets/driver/license/20210515171939.png', '/assets/driver/police-verification/20210515171939.png', 1, 0, '2021-05-15 12:24:37', '2021-05-15 17:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `sw_settings`
--

CREATE TABLE `sw_settings` (
  `id` int(11) NOT NULL,
  `key_text` varchar(250) DEFAULT NULL,
  `value_text` varchar(250) DEFAULT NULL,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_settings`
--

INSERT INTO `sw_settings` (`id`, `key_text`, `value_text`, `created_at`, `updated_at`) VALUES
(1, 'site_title', 'qq', NULL, '2021-05-11 17:01:24'),
(2, 'site_author', '55', NULL, '2021-05-11 17:01:24'),
(3, 'site_metddesc', 'www5w5w5 5w 5w5', NULL, '2021-05-11 17:01:24'),
(4, 'site_metakeyword', '5,5,5,5,5,5,5', NULL, '2021-05-11 17:01:24'),
(5, 'contact_email', 'sss@gmail.com', NULL, '2021-05-11 17:02:49'),
(6, 'contact_mobile', '9859898989', NULL, '2021-05-11 17:02:49'),
(7, 'contact_address', 'ddsdsd', NULL, '2021-05-11 17:02:49'),
(8, 'contact_time', 'DASD', NULL, '2021-05-11 17:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `sw_sub_category`
--

CREATE TABLE `sw_sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_sub_category`
--

INSERT INTO `sw_sub_category` (`id`, `cat_id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'sub-cat 2 ', 0, 0, '2021-05-10 14:26:24', '2021-05-14 07:49:37'),
(2, 2, 'sub-cat 21', 1, 0, '2021-05-10 14:28:55', '2021-05-10 14:32:58'),
(3, 3, 'sub-cat-2', 1, 0, '2021-05-14 10:31:39', '2021-05-15 09:12:52');

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
(1, 'SAWO Admin', 'admin@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sw_vehicle`
--

CREATE TABLE `sw_vehicle` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `vehicle_type_id` int(11) DEFAULT NULL,
  `vehicle_no` varchar(255) DEFAULT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `max_loading` varchar(50) DEFAULT NULL,
  `work_location` varchar(255) DEFAULT NULL,
  `rc_doc` varchar(255) DEFAULT NULL,
  `insurance_doc` varchar(255) DEFAULT NULL,
  `insurance_valid_from` date DEFAULT NULL,
  `insurance_valid_to` date DEFAULT NULL,
  `permit_doc` varchar(255) DEFAULT NULL,
  `permit_valid_from` date DEFAULT NULL,
  `permit_valid_to` date DEFAULT NULL,
  `PermitValidfrom` date DEFAULT NULL,
  `PermitValidto` date DEFAULT NULL,
  `PoliceverificationDoc` varchar(255) DEFAULT NULL,
  `tax_doc` varchar(255) DEFAULT NULL,
  `tax_from` date DEFAULT NULL,
  `tax_to` date DEFAULT NULL,
  `puc_doc` varchar(255) DEFAULT NULL,
  `puc_from` date DEFAULT NULL,
  `puc_to` date DEFAULT NULL,
  `verification` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_vehicle`
--

INSERT INTO `sw_vehicle` (`id`, `driver_id`, `cat_id`, `sub_cat_id`, `vehicle_type_id`, `vehicle_no`, `vehicle_name`, `description`, `length`, `width`, `height`, `max_loading`, `work_location`, `rc_doc`, `insurance_doc`, `insurance_valid_from`, `insurance_valid_to`, `permit_doc`, `permit_valid_from`, `permit_valid_to`, `PermitValidfrom`, `PermitValidto`, `PoliceverificationDoc`, `tax_doc`, `tax_from`, `tax_to`, `puc_doc`, `puc_from`, `puc_to`, `verification`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 2, NULL, 'MP 04 9999', 'CAR', 'test desc 123', 'lenght', 'width', 'height', 'max-loading', 'In City', 'rc_doc_1621106620.PNG', 'ins_doc_1621106620.png', '2021-05-17', '2021-05-17', 'pdoc_1621106620.png', '2021-05-17', '2021-05-17', '2021-05-17', '2021-05-17', 'pvdoc_1621106620.png', 'tax_doc_1621106620.PNG', '2021-05-17', '2021-05-17', 'pub_doc_1621106620.png', '2021-05-17', '2021-05-17', 1, 1, 0, '2021-05-15 19:23:40', '2021-05-15 19:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `sw_vehicle_type`
--

CREATE TABLE `sw_vehicle_type` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_vehicle_type`
--

INSERT INTO `sw_vehicle_type` (`id`, `cat_id`, `sub_cat_id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'MP 04 7775', 0, 0, '2021-05-14 07:37:24', '2021-05-14 10:30:51'),
(2, 3, 3, 'MP 04 7777', 1, 0, '2021-05-14 10:31:47', '2021-05-14 10:31:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sw_category`
--
ALTER TABLE `sw_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_driver`
--
ALTER TABLE `sw_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_settings`
--
ALTER TABLE `sw_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_sub_category`
--
ALTER TABLE `sw_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_users`
--
ALTER TABLE `sw_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_vehicle`
--
ALTER TABLE `sw_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_vehicle_type`
--
ALTER TABLE `sw_vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sw_category`
--
ALTER TABLE `sw_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sw_driver`
--
ALTER TABLE `sw_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sw_settings`
--
ALTER TABLE `sw_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sw_sub_category`
--
ALTER TABLE `sw_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sw_users`
--
ALTER TABLE `sw_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sw_vehicle`
--
ALTER TABLE `sw_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sw_vehicle_type`
--
ALTER TABLE `sw_vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
