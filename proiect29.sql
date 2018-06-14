-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 04:48 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

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
-- Table structure for table `answertype`
--

CREATE TABLE `answertype` (
  `answerType_id` int(7) NOT NULL,
  `answerTypeCol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answertype`
--

INSERT INTO `answertype` (`answerType_id`, `answerTypeCol`) VALUES
(1, 'Yes/no'),
(2, '1..5'),
(3, 'text');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
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
  `musicType` varchar(45) NOT NULL,
  `meniuType` varchar(45) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `user_id`, `eventName`, `theme`, `location`, `noOfPeople`, `musicType`, `meniuType`, `description`) VALUES
(10, 14, 'SaturdayNightCabaret', 'abstract', 'Iasi', 10, '11', '22', 'This is a description'),
(12, 14, 'SaturdayNight', 'abstract', 'Iasi', 20, '11', '22', 'This is a description'),
(13, 14, 'NightCabaret', 'abstract', 'Iasi', 10, '11', '22', 'This is a description'),
(14, 14, 'SaturdayCabaret', 'abstract', 'Iasi', 10, '11', '22', 'This is a description'),
(15, 14, 'fESTIVAlu shaormei  DE  aUR', 'Ghiceste', 'Galati', 25, 'None', 'None', 'bla bla'),
(16, 0, 'Incredible dreams', 'Nop', 'Singapore', 25, 'not classic', 'suedeza', 'Yrp'),
(17, 15, 'What is dead may never die', 'test', 'singapore', 25, 'classic', 'suedeza', 'retcthvj');

-- --------------------------------------------------------

--
-- Table structure for table `formquestions`
--

CREATE TABLE `formquestions` (
  `formQuestions_id` int(7) NOT NULL,
  `events_id` int(7) NOT NULL,
  `question` varchar(45) NOT NULL,
  `questionType_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formquestions`
--

INSERT INTO `formquestions` (`formQuestions_id`, `events_id`, `question`, `questionType_id`) VALUES
(21, 16, 'This should work', 1),
(22, 17, 'WHAT?', 1),
(23, 17, 'Was is thas?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `meniutype`
--

CREATE TABLE `meniutype` (
  `meniuType_id` int(7) NOT NULL,
  `meniuType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meniutype`
--

INSERT INTO `meniutype` (`meniuType_id`, `meniuType`) VALUES
(22, 'suedeza'),
(23, 'vegetarian'),
(24, 'not vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `musictype`
--

CREATE TABLE `musictype` (
  `musicType_id` int(7) NOT NULL,
  `musicType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musictype`
--

INSERT INTO `musictype` (`musicType_id`, `musicType`) VALUES
(11, 'Classic'),
(15, 'classic'),
(16, 'not classic');

-- --------------------------------------------------------

--
-- Table structure for table `questiontypes`
--

CREATE TABLE `questiontypes` (
  `questionType_id` int(7) NOT NULL,
  `questionType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiontypes`
--

INSERT INTO `questiontypes` (`questionType_id`, `questionType`) VALUES
(1, 'Add a question that should be answered as a t'),
(2, 'Add a question that should be answered by cho'),
(3, 'Add a question that should be answered with y'),
(4, 'Add a question that should be answered on a s');

-- --------------------------------------------------------

--
-- Table structure for table `receivedanswers`
--

CREATE TABLE `receivedanswers` (
  `receivedAnswers_id` int(7) NOT NULL,
  `formQuestions_id` int(7) NOT NULL,
  `answer` varchar(45) NOT NULL,
  `answerType_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivedanswers`
--

INSERT INTO `receivedanswers` (`receivedAnswers_id`, `formQuestions_id`, `answer`, `answerType_id`) VALUES
(62, 21, 'Answer', 1),
(63, 22, 'YES', 1),
(64, 22, 'YAS', 1);

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
(14, 'ana', 'ana@gmail.com', '$2y$10$ikVySo6qbx/80jsp13/BSeIKdTxAy97mdmvrDuw72xpxC28XljRNG'),
(15, 'onof.em@gmail.com', 'onof.em@gmail.com', '$2y$10$Nz4J9Hu3joBmYZbnmU3qw.pGtbq/HJkVMX1uauHAGW5KSVk.l0vQ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answertype`
--
ALTER TABLE `answertype`
  ADD PRIMARY KEY (`answerType_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactUs_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `formquestions`
--
ALTER TABLE `formquestions`
  ADD PRIMARY KEY (`formQuestions_id`),
  ADD KEY `events_id` (`events_id`),
  ADD KEY `questionType_id` (`questionType_id`);

--
-- Indexes for table `meniutype`
--
ALTER TABLE `meniutype`
  ADD PRIMARY KEY (`meniuType_id`);

--
-- Indexes for table `musictype`
--
ALTER TABLE `musictype`
  ADD PRIMARY KEY (`musicType_id`);

--
-- Indexes for table `questiontypes`
--
ALTER TABLE `questiontypes`
  ADD PRIMARY KEY (`questionType_id`);

--
-- Indexes for table `receivedanswers`
--
ALTER TABLE `receivedanswers`
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
-- AUTO_INCREMENT for table `answertype`
--
ALTER TABLE `answertype`
  MODIFY `answerType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactUs_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `formquestions`
--
ALTER TABLE `formquestions`
  MODIFY `formQuestions_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `meniutype`
--
ALTER TABLE `meniutype`
  MODIFY `meniuType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `musictype`
--
ALTER TABLE `musictype`
  MODIFY `musicType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questiontypes`
--
ALTER TABLE `questiontypes`
  MODIFY `questionType_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receivedanswers`
--
ALTER TABLE `receivedanswers`
  MODIFY `receivedAnswers_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formquestions`
--
ALTER TABLE `formquestions`
  ADD CONSTRAINT `formQuestions_ibfk_1` FOREIGN KEY (`events_id`) REFERENCES `events` (`events_id`),
  ADD CONSTRAINT `formQuestions_ibfk_2` FOREIGN KEY (`questionType_id`) REFERENCES `questiontypes` (`questionType_id`);

--
-- Constraints for table `receivedanswers`
--
ALTER TABLE `receivedanswers`
  ADD CONSTRAINT `receivedAnswers_ibfk_1` FOREIGN KEY (`formQuestions_id`) REFERENCES `formquestions` (`formQuestions_id`),
  ADD CONSTRAINT `receivedAnswers_ibfk_2` FOREIGN KEY (`answerType_id`) REFERENCES `answertype` (`answerType_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
