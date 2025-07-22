-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 05:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(12, 'Arman', 'arkf@gmail.com', '$2y$10$NNPm9tsY2T.vssup8GYkJOeS/7MdWmdzMzLHi5WxJQb6a6mtNW88C', 'user'),
(14, 'Anto', 'Ant@gmail.com', '$2y$10$ea6eSnoECjH64qOOsx8LwO5UB9v8JQTpZfhwrKatfdvK2E5DwJUsy', 'admin'),
(16, 'Anto', 'Anto@gmail.com', '$2y$10$njDJVNprND6YkxZwzX6FyeSjWIqDUZr/TRiASaXp91XCbEihmLUXy', 'user'),
(17, 'Anto', 'antoo@gmail.com', '$2y$10$XjF4aeoLotpZMLFdg7wWNeJ73E4T6Rl9lH0DSVfxm8vT7iueCH/6u', 'user'),
(18, 'Arman', 'arkan@gmail.com', '$2y$10$BFgFcvNI5jofxAd6fIjw9.NB3IgT1Ji604rAEwyD0gjOPIRVtAEe2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
