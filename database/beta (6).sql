-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 07:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `para` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `date`, `para`) VALUES
(19, 'first post', '9/5/2024, 9:36 PM', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `crs_id` int(11) NOT NULL,
  `crs_name` varchar(100) NOT NULL,
  `crs_crdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crs_id`, `crs_name`, `crs_crdt`) VALUES
(1020, 'ccna', 12),
(1028, 'cs21', 12),
(1044, 'ccna', 12),
(1051, 'csaj', 12),
(1052, 'cpp', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pr_info`
--

CREATE TABLE `pr_info` (
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pr_info`
--

INSERT INTO `pr_info` (`Fname`, `Lname`, `Email`, `Password`, `Date`, `Gender`, `id`, `phone`, `city`, `role`) VALUES
('ali', 'amer', '1@beta', '1mm', '2024-04-03', 'Male', 10013, 0, '', 'admin'),
('ali', 'mjm', '10014@beta', '10014mm', '2024-04-03', 'Male', 10014, 0, '', 'admin\r\n'),
('ahmad', 'hdy', '10050@beta', '10050mm', '2024-06-20', 'Female', 10050, 81370450, 'germany', 'student'),
('ali', 'hdy', '10051@beta', '10051mm', '2024-06-20', 'Female', 10051, 81370450, 'germany', 'instractor'),
('ali', 'hdy', '10052@beta', '10052mm', '2024-06-20', 'Female', 10052, 81370450, 'germany', 'admin'),
('ali', 'amer', '10053@beta', '10053mm', '2024-05-27', 'Male', 10053, 81370450, 'sarafand', 'instractor'),
('ali', 'bhn', '10054@beta', '10054mm', '2024-05-27', 'Male', 10054, 654, 'sarafand', 'student'),
('hassan', 'bhn', '10055@beta', '10055mm', '2024-05-27', 'Male', 10055, 654, 'sarafand', 'student'),
('husam', 'lhafe', '10056@beta', '10056mm', '2024-05-27', 'Male', 10056, 81370450, 'sarafand', 'student'),
('hassan', 'ali', '10057@beta', '10057mm', '2024-06-06', 'Male', 10057, 81370450, 'sarafand', 'instractor'),
('daniel', 'traboulse', '10058@beta', '10058mm', '2024-06-04', 'programer', 10058, 927398273, 'der alzahrane', 'instractor');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(100) NOT NULL,
  `in_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_name`, `in_id`, `class`, `crs_id`, `date`, `time`) VALUES
(137, 'advanced programing', 10058, 0, 1052, 'Wednesday', '11:00 to 13:30'),
(138, 'network', 10058, 0, 1044, 'Wednesday', '11:00 to 13:30');

-- --------------------------------------------------------

--
-- Table structure for table `studentcrs`
--

CREATE TABLE `studentcrs` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `grade` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`crs_id`);

--
-- Indexes for table `pr_info`
--
ALTER TABLE `pr_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`),
  ADD KEY `crs_id` (`crs_id`);

--
-- Indexes for table `studentcrs`
--
ALTER TABLE `studentcrs`
  ADD PRIMARY KEY (`student_id`,`course_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `sec_id` (`sec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `crs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1053;

--
-- AUTO_INCREMENT for table `pr_info`
--
ALTER TABLE `pr_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10059;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`crs_id`) REFERENCES `course` (`crs_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentcrs`
--
ALTER TABLE `studentcrs`
  ADD CONSTRAINT `studentcrs_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`crs_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentcrs_ibfk_3` FOREIGN KEY (`sec_id`) REFERENCES `section` (`sec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
