-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 04:58 AM
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
(1, 'aemberlin', 'Austin', 'Emberlin', 'austinfbcm@gmail.com', '*E2837CAF6D0AE8287D882C3EA6192E56FD1DAD1C'),
(2, 'wemberlin', 'Wesley', 'Emberlin', 'wesley.a.emberlin@gmail.com', '*DF50B75CB48401512E378AAEB45284BF3A792338'),
(4, 'BRoss', 'Bob', 'Ross', 'bross@gmail.com', '*86CE1C082FFC4C2CC7D5D9ACF2C767370865FE9E'),
(5, 'John', 'John', 'John', 'john@john.com', '*F1B33BB9B4E671BFAC0D002725ADF9E504626745'),
(6, 'Japple', 'Johnny', 'Apple', 'japple@gmail.com', '243e61e9410a9f577d2d662c67025ee9'),
(7, 'Tom', 'Tom', 'Tom', 'Tom@tom.com', '243e61e9410a9f577d2d662c67025ee9');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
