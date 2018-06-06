-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2018 at 01:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project29`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_id` int(7) NOT NULL,
  `first_last_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `acc_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_id`, `first_last_name`, `e_mail`, `acc_password`) VALUES
(10, 'Mike Targoviste', 'mike_tag@yahoo.com', '$2y$10$MR9mheiW7MZK5CQGnsazse.vbjywLTwYWlV2nC43z4x0bYsuhRVEa'),
(11, 'Damian Sinclaire', 'dam_sin@gmail.com', '$2y$10$H6yqAIiPdlTkmFAsyrtn9enV7PNXgw1nFSQSJxe7/CzxbbcB0uBJG'),
(12, 'gigi', 'gigi@gmail.com', '$2y$10$JPI205Vt8./fZa5zVwoI5e4vcEFOm7TMBRO2G1YoOj8J0mz3jTcZy'),
(13, 'andreea', 'andreea@gmail.com', '$2y$10$opQxCpKYtNvyJn.kTtuhOettTLSGPASkmaeZL/HRpCMNPyC/KD10q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
