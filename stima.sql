-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 07:11 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stima`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gamesPlayed` varchar(50) NOT NULL,
  `goals` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `gamesPlayed`, `goals`, `contact`, `description`) VALUES
(1, 'Maryam Wangechi', '20', '5', 'wangeshi@gmail.com', 'Maryam is a French professional footballer who plays as a centre-back and captains both Division 1 Féminine club Lyon and the France national team. A goal-scoring defender, Renard is one of the most decorated players in modern women\'s club football'),
(2, 'Stacy Chebet', '12', '6', 'stacy@gmail.com', 'Stacy is a Kenyan professional footballer who plays as a centre-back and captains both Division 1 Féminine club Lyon and the France national team. A goal-scoring defender, Renard is one of the most decorated players in modern women\'s club football'),
(3, 'John Munene', '10', '9', 'john@gmail.com', 'John is a French professional footballer who plays as a midfielder and captains both Division 1 Féminine club Lyon and the France national team. A goal-scoring defender, John is one of the most decorated players.'),
(4, 'Susan Jane', '6', '2', 'susan@gmail.com', 'Susan is a French professional footballer who plays as a centre-back and captains both Division 1 Féminine club Lyon and the France national team. A goal-scoring defender, Renard is one of the most decorated players in modern women\'s club football');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Stacy Chebet', 'staceychebet23@gmail.com', '0746899230', 'maryjoseck5', 1),
(2, 'maryam', 'maryam@gmail.com', '0712345678', 'maryam6', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
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
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
