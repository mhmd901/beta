-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 01:56 PM
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
(1, 'first post', '27/4/2024, 10:55 AM', '12345\r\n'),
(2, '1234', '', '1234');

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
(1018, 'csaj', 12),
(1019, '', 0),
(1020, 'ccna', 12),
(1021, 'ccna', 12),
(1025, 'husam', 123);

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
('ali', 'mjm', '10014@beta', '10014mm', '2024-04-03', 'Male', 10014, 0, '', ''),
('ali', 'amer', '10015@beta', '10015mm', '2024-04-25', 'Male', 10015, 0, '', ''),
('ali', 'bxzvxx', '10016@beta', '10016mm', '2024-04-25', 'Male', 10016, 0, '', ''),
('fsdds', 'bxzvxx', '10017@beta', '10017mm', '2024-04-25', 'Male', 10017, 81370450, '', ''),
('ali', 'amer', '10018@beta', '10018mm', '2024-04-04', 'Male', 10018, 8137045, 'sarafand', ''),
('adam', 'hdy', '10019@beta', '10019mm', '2024-04-03', 'Male', 10019, 8137045, 'sarafand', ''),
('omar', 'aka', '10020@beta', '10020mm', '2024-04-05', 'Male', 10028, 5687, 'sarafand', ''),
('ali', 'amer', '10029@beta', '10029mm', '2024-04-04', 'Male', 10029, 81370450, 'sarafand', ''),
('rashed', 'yagxysgu', '10030@beta', '10030mm', '2024-04-21', 'Male', 10030, 2147483647, 'sarafand', ''),
('ranim', 'cegvduhnigyudew', '10031@beta', '10031mm', '2024-04-11', 'Female', 10031, 9783749, 'sarafand', ''),
('husam', 'huso', '10032@beta', '10032mm', '2024-05-01', 'Other', 10032, 70596274, 'saksakyee', ''),
('ali', 'mhmd', '10033@beta', '1234', '2024-05-09', 'Male', 10033, 63421, 'sarafand', ''),
('', '', '10034@beta', '10034mm', '0000-00-00', '', 10034, 0, '', ''),
('mhmd', 'yassein', '10035@beta', '10035mm', '2024-05-30', 'Other', 10035, 643849509, 'germany', ''),
('husam', 'cheb', '10036@beta', '10036mm', '2024-05-17', 'Other', 10036, 78349, 'sarafand', ''),
('jawad', 'shhade', '10037@beta', '10037mm', '2024-05-23', 'Female', 10037, 8482, 'saksakyee', ''),
('ali', 'amer', '10038@beta', '10038mm', '2024-05-22', 'Male', 10038, 81370450, 'sarafand', ''),
('ali', 'amer', '10039@beta', '10039mm', '2024-05-07', 'Male', 10039, 81370450, 'sarafand', ''),
('husam', 'lhafe', '10040@beta', '10040mm', '0000-00-00', '', 10040, 0, '', ''),
('husam', 'lhafe', '10041@beta', '10041mm', '0000-00-00', 'Male', 10041, 0, '', ''),
('ali', 'amer', '10042@beta', '10042mm', '2024-05-15', 'Female', 10042, 81370450, 'sarafand', ''),
('ali', 'amer', '10043@beta', '10043mm', '2024-05-09', 'Male', 10043, 81370450, 'sarafand', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `in_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentcrs`
--

CREATE TABLE `studentcrs` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `grades` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL
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
  ADD KEY `crs_id` (`crs_id`),
  ADD KEY `in_id` (`in_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `crs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;

--
-- AUTO_INCREMENT for table `pr_info`
--
ALTER TABLE `pr_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10044;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`crs_id`) REFERENCES `course` (`crs_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`in_id`) REFERENCES `instructorinfo` (`in_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentcrs`
--
ALTER TABLE `studentcrs`
  ADD CONSTRAINT `studentcrs_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`crs_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentcrs_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `pr_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentcrs_ibfk_3` FOREIGN KEY (`sec_id`) REFERENCES `section` (`sec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
