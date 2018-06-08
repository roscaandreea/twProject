-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2018 at 07:25 PM
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
-- Database: `proiect29`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerType`
--

CREATE TABLE `answerType` (
  `answerType_id` int(7) NOT NULL,
  `answerTypeCol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactUs`
--

CREATE TABLE `contactUs` (
  `contactUs_id` int(7) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `eventName` varchar(45) NOT NULL,
  `theme` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `noOfPeople` int(7) DEFAULT NULL,
  `musicType` int(7) NOT NULL,
  `meniuType` int(7) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `user_id`, `eventName`, `theme`, `location`, `noOfPeople`, `musicType`, `meniuType`, `description`) VALUES
(10, 14, 'SaturdayNightCabaret', 'abstract', 'Iasi', 10, 11, 22, 'This is a description'),
(12, 14, 'SaturdayNight', 'abstract', 'Iasi', 20, 11, 22, 'This is a description'),
(13, 14, 'NightCabaret', 'abstract', 'Iasi', 10, 11, 22, 'This is a description'),
(14, 14, 'SaturdayCabaret', 'abstract', 'Iasi', 10, 11, 22, 'This is a description');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackForm`
--

CREATE TABLE `feedbackForm` (
  `feedbackForm_id` int(7) NOT NULL,
  `events_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formQuestions`
--

CREATE TABLE `formQuestions` (
  `formQuestions_id` int(7) NOT NULL,
  `feedbackForm_id` int(7) NOT NULL,
  `question` varchar(45) NOT NULL,
  `questionType_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meniuType`
--

CREATE TABLE `meniuType` (
  `meniuType_id` int(7) NOT NULL,
  `meniuType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meniuType`
--

INSERT INTO `meniuType` (`meniuType_id`, `meniuType`) VALUES
(22, 'suedeza');

-- --------------------------------------------------------

--
-- Table structure for table `musicType`
--

CREATE TABLE `musicType` (
  `musicType_id` int(7) NOT NULL,
  `musicType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musicType`
--

INSERT INTO `musicType` (`musicType_id`, `musicType`) VALUES
(11, 'Classic');

-- --------------------------------------------------------

--
-- Table structure for table `questionTypes`
--

CREATE TABLE `questionTypes` (
  `questionType_id` int(7) NOT NULL,
  `questionType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receivedAnswers`
--

CREATE TABLE `receivedAnswers` (
  `receivedAnswers_id` int(7) NOT NULL,
  `formQuestions_id` int(7) NOT NULL,
  `answer` varchar(45) NOT NULL,
  `answerType_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, 'andreea', 'andreea@gmail.com', '$2y$10$opQxCpKYtNvyJn.kTtuhOettTLSGPASkmaeZL/HRpCMNPyC/KD10q'),
(14, 'ana', 'ana@gmail.com', '$2y$10$ikVySo6qbx/80jsp13/BSeIKdTxAy97mdmvrDuw72xpxC28XljRNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerType`
--
ALTER TABLE `answerType`
  ADD PRIMARY KEY (`answerType_id`);

--
-- Indexes for table `contactUs`
--
ALTER TABLE `contactUs`
  ADD PRIMARY KEY (`contactUs_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);
 

--
-- Indexes for table `feedbackForm`
--
ALTER TABLE `feedbackForm`
  ADD PRIMARY KEY (`feedbackForm_id`),
  ADD KEY `events_id` (`events_id`);

--
-- Indexes for table `formQuestions`
--
ALTER TABLE `formQuestions`
  ADD PRIMARY KEY (`formQuestions_id`),
  ADD KEY `feedbackForm_id` (`feedbackForm_id`),
  ADD KEY `questionType_id` (`questionType_id`);

--
-- Indexes for table `meniuType`
--
ALTER TABLE `meniuType`
  ADD PRIMARY KEY (`meniuType_id`);

--
-- Indexes for table `musicType`
--
ALTER TABLE `musicType`
  ADD PRIMARY KEY (`musicType_id`);

--
-- Indexes for table `questionTypes`
--
ALTER TABLE `questionTypes`
  ADD PRIMARY KEY (`questionType_id`);

--
-- Indexes for table `receivedAnswers`
--
ALTER TABLE `receivedAnswers`
  ADD PRIMARY KEY (`receivedAnswers_id`),
  ADD KEY `formQuestions_id` (`formQuestions_id`),
  ADD KEY `answerType_id` (`answerType_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactUs`
--
ALTER TABLE `contactUs`
  MODIFY `contactUs_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedbackForm`
--
ALTER TABLE `feedbackForm`
  MODIFY `feedbackForm_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `meniuType`
--
ALTER TABLE `meniuType`
  MODIFY `meniuType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `musicType`
--
ALTER TABLE `musicType`
  MODIFY `musicType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--

--
-- Constraints for table `feedbackForm`
--
ALTER TABLE `feedbackForm`
  ADD CONSTRAINT `feedbackForm_ibfk_1` FOREIGN KEY (`events_id`) REFERENCES `events` (`events_id`);

--
-- Constraints for table `formQuestions`
--
ALTER TABLE `formQuestions`
  ADD CONSTRAINT `formQuestions_ibfk_1` FOREIGN KEY (`feedbackForm_id`) REFERENCES `feedbackForm` (`feedbackForm_id`),
  ADD CONSTRAINT `formQuestions_ibfk_2` FOREIGN KEY (`questionType_id`) REFERENCES `questionTypes` (`questionType_id`);

--
-- Constraints for table `receivedAnswers`
--
ALTER TABLE `receivedAnswers`
  ADD CONSTRAINT `receivedAnswers_ibfk_1` FOREIGN KEY (`formQuestions_id`) REFERENCES `formQuestions` (`formQuestions_id`),
  ADD CONSTRAINT `receivedAnswers_ibfk_2` FOREIGN KEY (`answerType_id`) REFERENCES `answerType` (`answerType_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
