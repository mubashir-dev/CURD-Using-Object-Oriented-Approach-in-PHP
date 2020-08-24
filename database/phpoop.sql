-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 01:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `rollno`, `program`, `address`) VALUES
(8, 'Asad Zubair Khan', 'MLT-4-EE', 'Bs Medical Lab Technology', 'Abbottabad'),
(9, 'Haider Khan Tareen', 'IT-34-CE', 'BS CS', 'Wah Cantt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `program`, `age`, `address`) VALUES
(1, 'Mubashir Ali', 'dsadad', 0, 'Abbottabad'),
(2, 'Asad Ali', 'BS Electrical Engineering', 21, 'Abbottabad'),
(3, 'adsad', 'dasd', 22, 'Abbottabad'),
(4, 'sdasd', 'asdas', 22, 'sadas'),
(5, 'sdassds', 'sdas', 22, 'asdas'),
(6, 'wqewqq', 'qweqw', 33, 'qweqwe'),
(7, 'asdasd', 'sadas', 33, 'sadas'),
(8, 'Mubashir Ali', 'BS', 22, 'SDSAD'),
(9, 'Mubashir Ali', 'BS', 22, 'SDSAD'),
(10, 'sdfs', 'dsfs', 23, 'sdfs'),
(11, 'sdfs', 'dsfs', 23, 'sdfs'),
(12, 'sadasd', 'sadas', 33, 'dsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
