-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 12:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `full_name`, `address`, `phone_no`, `role`) VALUES
(1, 'admin@mail.com', 'admin', 'admin', 'admin', '090009', 'admin'),
(2, 'users@mail.com', 'admins', 'users', 'users', '090123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(50) NOT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `announcement_description` varchar(255) DEFAULT NULL,
  `date_announce` date DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `file_name`, `announcement_description`, `date_announce`, `image`) VALUES
(2, 'UPLOAD-GIN.JPG-20220718-651653-62d4d2f70c4e3.jpg', 'update desc', '2022-07-18', 'upload/UPLOAD-GIN.JPG-20220718-651653-62d4d2f70c4e3.jpg'),
(3, 'UPLOAD-ANNOUCEMENT.PNG-20220718-101480-62d534ef112', 'sample', '2022-07-18', 'upload/UPLOAD-ANNOUCEMENT.PNG-20220718-101480-62d534ef112d7.png');

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(50) NOT NULL,
  `date_recorded` date DEFAULT NULL,
  `complainant` varchar(50) DEFAULT NULL,
  `person_to_complaint` varchar(50) DEFAULT NULL,
  `complaint` varchar(50) DEFAULT NULL,
  `action_taken` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `location_of_incedence` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `date_recorded`, `complainant`, `person_to_complaint`, `complaint`, `action_taken`, `status`, `location_of_incedence`) VALUES
(1, '2022-07-18', 'users', 'b', 'b', 'b', 'pending', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(50) NOT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `date_sent` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `send_by` varchar(50) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `file_name`, `file_type`, `date_sent`, `file`, `send_by`, `status`) VALUES
(1, 'UPLOAD-CV.PDF-20220718-665869-62d52d89d7fa0.pdf', 'barangay_clearance', '2022-07-18', 'upload/UPLOAD-CV.PDF-20220718-665869-62d52d89d7fa0.pdf', 'users', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `civil_status` varchar(15) DEFAULT NULL,
  `citizenship` varchar(20) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `register_voters` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`id`, `name`, `address`, `date_of_birth`, `age`, `gender`, `civil_status`, `citizenship`, `occupation`, `register_voters`) VALUES
(2, 'b', 'a', '2022-07-18', '1', 'male', 'single', 'a', 'a', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
