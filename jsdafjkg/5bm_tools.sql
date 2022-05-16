-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 08:56 PM
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
-- Database: `5bm_tools`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `stuname` varchar(30) NOT NULL,
  `stuid` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `booldgrp` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `stuname`, `stuid`, `phone`, `gender`, `booldgrp`, `dob`, `pass`, `address`, `created_at`) VALUES
(20, 'Nimur Rashid', 'C193066', '01706610237', 'male', 'A+', '03/03/2000', '', 'Belar Baper Bari,Khowaznagar,A', '2022-05-16 17:58:33'),
(21, 'Mainuddin Hasan', 'C193070', '011984178179', 'male', 'AB+', '03/03/1999', '', 'kdsafjbkjsadbfbuiqre qiuwjrbf', '2022-05-16 17:59:38'),
(23, 'Rahat', 'C193075', '01706610237', 'male', 'A+', '03/03/1999', '', 'fasdf', '2022-05-16 18:32:56'),
(25, 'Rahat', 'C193075', '01706610237', 'male', 'A+', '03/03/1999', '', 'fasdf', '2022-05-16 18:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
