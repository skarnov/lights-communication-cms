-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 08:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lights_communication`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_level` tinyint(1) DEFAULT NULL,
  `admin_status` tinyint(1) DEFAULT '0',
  `admin_type` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date_time`, `admin_level`, `admin_status`, `admin_type`) VALUES
(1, 'Admin', 'admin@lights.com', '111111', '2017-06-11 12:41:16', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business`
--

CREATE TABLE `tbl_business` (
  `business_id` int(2) NOT NULL,
  `business_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_business`
--

INSERT INTO `tbl_business` (`business_id`, `business_name`) VALUES
(1, 'Project Development');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashbook`
--

CREATE TABLE `tbl_cashbook` (
  `cashbook_id` int(10) NOT NULL,
  `admin_id` int(2) NOT NULL,
  `sale_id` int(4) NOT NULL,
  `current_balance` float(10,2) NOT NULL,
  `income_amount` float(10,2) DEFAULT NULL,
  `expense_amount` float(10,2) DEFAULT NULL,
  `cashbook_entry_time` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(3) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_password` varchar(32) NOT NULL,
  `client_mobile` varchar(11) NOT NULL,
  `client_address` text NOT NULL,
  `client_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `file_id` int(7) NOT NULL,
  `project_id` int(2) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notification_id` int(4) NOT NULL,
  `client_id` int(2) NOT NULL,
  `notification_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(2) NOT NULL,
  `client_id` int(3) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `instruction_box` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `sale_id` int(4) NOT NULL,
  `client_id` int(2) NOT NULL,
  `subtotal` float(10,2) DEFAULT NULL,
  `discount` float(10,2) DEFAULT NULL,
  `ground_total` float(10,2) NOT NULL,
  `date` varchar(11) NOT NULL,
  `sale_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale_details`
--

CREATE TABLE `tbl_sale_details` (
  `sale_details_id` int(5) NOT NULL,
  `sale_id` int(4) NOT NULL,
  `sale_description` text NOT NULL,
  `unit_price` float(10,2) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `survey_id` int(7) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `institution_name` varchar(200) NOT NULL,
  `institution_type` varchar(100) NOT NULL,
  `client_mobile` varchar(20) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_address` text NOT NULL,
  `current_pos` varchar(100) NOT NULL,
  `client_experience` varchar(50) NOT NULL,
  `computer_user_status` varchar(10) NOT NULL,
  `interested_in_digitalized` varchar(10) NOT NULL,
  `client_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_survey`
--

INSERT INTO `tbl_survey` (`survey_id`, `serial_no`, `date`, `client_name`, `institution_name`, `institution_type`, `client_mobile`, `client_email`, `client_address`, `current_pos`, `client_experience`, `computer_user_status`, `interested_in_digitalized`, `client_comment`) VALUES
(1, '232', '2017-08-09', 'adasasdasd', 'sdasd', 'asdasd', '234', 'admin@evis.com', 'asdasd', 'adasdasd', 'Smartphone', '2', '3', 'sdsdsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_business`
--
ALTER TABLE `tbl_business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `tbl_cashbook`
--
ALTER TABLE `tbl_cashbook`
  ADD PRIMARY KEY (`cashbook_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `file` (`file`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `tbl_sale_details`
--
ALTER TABLE `tbl_sale_details`
  ADD PRIMARY KEY (`sale_details_id`);

--
-- Indexes for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_business`
--
ALTER TABLE `tbl_business`
  MODIFY `business_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_cashbook`
--
ALTER TABLE `tbl_cashbook`
  MODIFY `cashbook_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `file_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  MODIFY `sale_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sale_details`
--
ALTER TABLE `tbl_sale_details`
  MODIFY `sale_details_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `survey_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
