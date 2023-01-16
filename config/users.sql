-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 01:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelsandrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `usersUid` varchar(250) DEFAULT NULL,
  `usersEmail` varchar(250) DEFAULT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `usersPwd` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `usersUid`, `usersEmail`, `firstName`, `lastName`, `gender`, `active`, `usersPwd`) VALUES
(4, 1, 'admin', 'admin@gmail.com', 'admin', 'admin', NULL, 1, '$2y$10$WLN1UpXwRAm3hHI6QgBcNesGOLhvcCqPj.1OiE2W9rRiip5XEkgS.'),
(6, 0, 'john123', 'john@gmail.com', 'john', 'smith', NULL, 1, '$2y$10$nepvkoVgMgGML.T8AqnJ5OUQ02ue2tjJa1xajqiOCRTVV.hwa7r3S'),
(7, 0, 'tester', 'tester@gmail.com', 'tester', 'tester', NULL, 1, '$2y$10$sh0rBvoT.MCyXVUKztjJmeDKzup3eOmbqWWRPLvC.znZecM5Nf48a'),
(8, 0, 'ash', 'ash@gmail.com', 'Ash', 'Ketchum', NULL, 1, '$2y$10$TePSCC35IEhLTm./A0eUSuk6E8XO6zDNMEiv1nrQEiwEV7dM4nVS6'),
(9, 0, 'lucky', 'lucky@gmail.com', 'luky', 'Bil', 'male', 1, '$2y$10$PZb8CJXaJNmhimwwkGkLL.U3fWzaVwzPCVO5T4dGF8ytfSBQbqMWa'),
(10, 0, 'adam23', 'adam@gmail.com', 'Adam', 'Tis', 'others', 1, '$2y$10$XSppOn7/PCC8VRNKi/q1O.zYxOLEWM6k24K6pFsurs6E9B8jCa24e'),
(11, 0, 'Alloy2', 'alloy@gmail.com', 'Alloy', 'RedBeast', 'female', 1, '$2y$10$ooKMHEPafUWlxBaGL2QibOYxxfoJ/8vaET3Y3ZV99O5ggQiyazsya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
