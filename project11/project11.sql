-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 04:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `adname` varchar(15) NOT NULL,
  `adpass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`adname`, `adpass`) VALUES
('EVARISTOLIWA', 'MIMIMFANYAKAZI');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `student id` int(11) NOT NULL,
  `officeid` varchar(20) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `item` varchar(50) NOT NULL,
  `issuer` varchar(50) NOT NULL,
  `signature` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `student id`, `officeid`, `comments`, `item`, `issuer`, `signature`, `date`) VALUES
(2, 29108, 'Department', 'nil', 'none', 'JUMA MTIRO', 'J.Mtiro', '2023-11-02'),
(4, 29108, 'Library', 'nil', 'none', 'EVE MWAKUNI', 'E.MWK', '2023-11-03'),
(6, 29108, 'Survey', 'nil', 'none', 'FREEMAN LIMA', 'F.lima', '2023-11-04'),
(8, 29108, 'Games', 'nil', 'none', 'JOANNA MINADI', 'J.minadi', '2023-11-05'),
(10, 29108, 'Residence', 'nil', 'none', 'MARK ROBIN', 'M.Robin', '2023-11-06'),
(12, 29108, 'Accounts', 'nil', 'none', 'MADINA RAMADHAN', 'M.Rama', '2023-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `forget`
--

CREATE TABLE `forget` (
  `id` int(11) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `registration` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `registration`, `email`, `phonenumber`, `password`, `confirmpassword`, `gender`) VALUES
(1, 'BERTHA ABRAHAM MAGESSE', '29108/T.2020', 'bertha@gmail.com', 714838308, 'iambertha', 'iambertha', 'female'),
(2, 'SAID NYANGARI NASSORO', '29109/T.2017', 'said@gmail.com', 743856571, 'iamsaid', 'iamsaid', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `completed` bigint(4) NOT NULL,
  `regno` varchar(12) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`id`, `surname`, `firstname`, `middlename`, `department`, `completed`, `regno`, `gender`) VALUES
(1, 'MAGESSE', 'BERTHA', 'ABRAHAM', 'CSM', 2023, '29108/T.2020', 'female'),
(2, 'NASSORO', 'SAID', 'NYANGARI', 'Arch', 2023, '29109/T.2017', 'male'),
(28, '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget`
--
ALTER TABLE `forget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `forget`
--
ALTER TABLE `forget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
