-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 04:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `rName` text NOT NULL,
  `Style` text NOT NULL,
  `Abv` float NOT NULL,
  `Ibu` int(3) NOT NULL,
  `BrewerNames` text NOT NULL,
  `Notes` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `username`, `rName`, `Style`, `Abv`, `Ibu`, `BrewerNames`, `Notes`, `Date`) VALUES
(1, 'wemberlin', 'Buffalo Wheat', 'American Wheat Ale', 6, 22, 'Austin Emberlin and Bob Ross', 'Delicious Summertime Beer', '2022-11-11'),
(2, 'aemberlin', 'Buffalo Wheat 2', 'American Wheat Ale', 5.6, 22, 'Austin Emberlin and Bob Ross', 'Delicious Summertime Beer', '2022-11-12'),
(3, 'wemberlin', 'Pale Buffalo', 'American Pale Ale', 7.6, 44, 'Austin Emberlin and John Johnson', 'Crushable Summertime Beer', '2022-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `fName` varchar(80) NOT NULL,
  `lName` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fName`, `lName`, `email`, `password`) VALUES
(16, 'aemberlin', 'Austin', 'Emberlin', 'wesley.a.emberlin@gmail.com', '$2y$10$Hl02UfsgUAGKuQIwfJ50seKKltjElyU4ogmVtt3lqT4pGoIuY7sqi'),
(17, 'wemberlin2', 'Wesley', 'Emberlin', 'wesley.a.emberlin@gmail.co', '$2y$10$gUxJ/rX.FCX2wdoFVrMmAOsebQWlGsePp10igasat9UECjNuf1oFO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
