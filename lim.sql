-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:11 AM
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
-- Database: `lim`
--

-- --------------------------------------------------------

--
-- Table structure for table `lim`
--

CREATE TABLE `lim` (
  `id` int(199) NOT NULL,
  `fname` varchar(199) NOT NULL,
  `lname` varchar(199) NOT NULL,
  `pass` varchar(199) NOT NULL,
  `email` varchar(11) NOT NULL,
  `username` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lim`
--

INSERT INTO `lim` (`id`, `fname`, `lname`, `pass`, `email`, `username`) VALUES
(4, 'therese', 'lim', 'hsfkshfkua', '123@gmail.c', 'BSIT111'),
(5, 'irish', 'reye', 'dssfs', 'ty@gmail.co', 'BSIT112'),
(6, 'example', 'register', 'djshdjks', 'rene@gmail.', 'BSIT1111'),
(8, 'reese', 'lim', 'nb', 'officialckh', 'oodd'),
(9, 'therese', 'lim', 'jhjh', 'admin@gmail', 'BSITAmen11'),
(10, 'therese', 'lim', 'jdhj', 'admin@gmail', 'BSITjadhja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lim`
--
ALTER TABLE `lim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lim`
--
ALTER TABLE `lim`
  MODIFY `id` int(199) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
