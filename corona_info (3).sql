-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 08:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `corona_info`
--

CREATE TABLE `corona_info` (
  `SL.NO` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `NID` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corona_info`
--

INSERT INTO `corona_info` (`SL.NO`, `name`, `NID`, `age`, `Gender`, `address`, `bloodgroup`, `image`, `result`, `date`) VALUES
(3, 'dipto', '1221122522252441', 20, 'Male', 'jail road', 'AB+', 'upload/000001-10.jpg', 'positive', '2020-12-29 19:04:07'),
(4, 'dipto', '1221122522252441', 20, 'Male', 'jail road', 'AB+', 'upload/000001-10.jpg', 'negative', '2020-12-29 19:04:07'),
(5, 'saikan', ' 45555', 20, 'Male', 'rail road', 'o-', 'upload/000001-11.jpg', 'positive', '2020-12-29 19:04:07'),
(6, 'shahriar ', '122112252225244 ', 22, 'Male ', 'mirpur ', 'o+    ', 'upload/000001-1.jpg', 'positive', '2020-12-29 19:04:07'),
(8, 'Rakib', '12222445555', 20, 'Male', 'khulna', 'A+', 'upload/133510120_712473489656848_7701844739166455193_n.jpg', 'negative', '2020-12-29 19:09:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corona_info`
--
ALTER TABLE `corona_info`
  ADD PRIMARY KEY (`SL.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corona_info`
--
ALTER TABLE `corona_info`
  MODIFY `SL.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
