-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<<< HEAD:database/beta (5).sql
-- Generation Time: Jun 09, 2024 at 01:16 AM
========
-- Generation Time: Jun 08, 2024 at 08:00 PM
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql
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
(1020, 'ccna', 12),
(1028, 'cs21', 12);

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
('ali', 'ali', 'ali@beta', '12mm', '2024-06-26', 'male', 5543, 0, 'tripoli', 'instructor'),
('ali', 'amer', '1@beta', '1mm', '2024-04-03', 'Male', 10013, 0, '', 'admin'),
<<<<<<<< HEAD:database/beta (5).sql
('ali', 'mjm', '10014@beta', '10014mm', '2024-04-03', 'Male', 10014, 0, '', 'admin\r\n'),
('ali', 'amer', '10015@beta', '10015mm', '2024-04-25', 'Male', 10015, 0, '', 'instractor'),
('ahmad', 'hdy', '10050@beta', '10050mm', '2024-06-20', 'Female', 10050, 81370450, 'germany', 'student'),
('ahmad', 'hdy', '10051@beta', '10051mm', '2024-06-20', 'Female', 10051, 81370450, 'germany', 'instractor'),
('ali', 'hdy', '10052@beta', '10052mm', '2024-06-20', 'Female', 10052, 81370450, 'germany', 'admin'),
('ali', 'amer', '10053@beta', '10053mm', '2024-05-27', 'Male', 10053, 81370450, 'sarafand', 'instractor'),
('ali', 'bhn', '10054@beta', '10054mm', '2024-05-27', 'Male', 10054, 654, 'sarafand', 'student'),
('hassan', 'bhn', '10055@beta', '10055mm', '2024-05-27', 'Male', 10055, 654, 'sarafand', 'student');
========
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
('ali', 'amer', '10043@beta', '10043mm', '2024-05-09', 'Male', 10043, 81370450, 'sarafand', 'student'),
('jawad', 'shehadi', 'ja@beta', '1234', '2024-05-22', 'male', 105018, 8172781, 'nabatye', 'instructor');
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql

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
<<<<<<<< HEAD:database/beta (5).sql
  `date` varchar(100) NOT NULL,
========
  `day` varchar(100) NOT NULL,
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

<<<<<<<< HEAD:database/beta (5).sql
INSERT INTO `section` (`sec_id`, `sec_name`, `in_id`, `class`, `crs_id`, `date`, `time`) VALUES
(123, '', 10051, 2, 1020, '123', '123'),
(124, 'new', 10015, 0, 1028, 'Tuesday', '8:00 to 10:30'),
(125, 'new', 10051, 0, 1028, 'Tuesday', '8:00 to 10:30'),
(126, '', 10015, 0, 1020, 'Monday', '8:00 to 10:30'),
(127, '', 10015, 0, 1020, 'Monday', '8:00 to 10:30'),
(128, 'newq', 10051, 0, 1028, 'Tuesday', '11:00 to 13:30'),
(129, 'newq', 10051, 0, 1020, 'Monday', '8:00 to 10:30');
========
INSERT INTO `section` (`sec_id`, `in_id`, `class`, `crs_id`, `day`, `time`) VALUES
(45, 105018, 555, 1018, 'monday', '8:00'),
(88, 105018, 234, 1018, 'monday', '8:00'),
(123, 10504, 345, 23344, '', '0'),
(124, 105018, 345, 23344, 'monday', '8:00->10:00'),
(234, 5543, 234, 1018, 'mon', '8'),
(444, 5543, 345, 1018, 'monday', '8:00->1:30'),
(1993, 10504, 345, 1018, '', '0'),
(1995, 10504, 345, 1018, 'Monday', '11'),
(1997, 10504, 345, 1018, 'Monday', '8'),
(1998, 10504, 345, 1018, 'Monday', '11AM'),
(2000, 10504, 345, 1018, 'Monday', '11:00 to 13:30'),
(2001, 10504, 345, 1018, 'Monday', '14:00 to 16:30'),
(2002, 10504, 345, 1018, 'Monday', '11:00 to 13:30'),
(2003, 10504, 345, 1018, 'Monday', '8:00 to 10:30'),
(2004, 10504, 555, 1018, 'Monday', '8:00 to 10:30'),
(2005, 10504, 555, 1018, 'Monday', '8:00 to 10:30'),
(3435, 10504, 555, 1018, 'Monday', '8:00 to 10:30');
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql

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
-- Dumping data for table `studentcrs`
--

<<<<<<<< HEAD:database/beta (5).sql
INSERT INTO `studentcrs` (`student_id`, `course_id`, `sec_id`, `grade`) VALUES
(123, 1020, 123, '0'),
(10050, 1020, 123, '0'),
(10050, 1028, 125, '0'),
(10055, 1028, 125, '0');
========
INSERT INTO `studentcrs` (`student_id`, `course_id`, `grades`, `sec_id`) VALUES
(333, 1018, 0, 88),
(546, 1018, 0, 123),
(10013, 0, 0, 1993),
(10013, 1021, 0, 1997),
(10013, 1025, 0, 2002),
(10031, 1021, 0, 1998),
(10036, 1021, 0, 444),
(54688, 1018, 0, 88),
(123434, 34556, 0, 88);
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `crs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT for table `pr_info`
--
ALTER TABLE `pr_info`
<<<<<<<< HEAD:database/beta (5).sql
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10056;
========
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105019;
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
<<<<<<<< HEAD:database/beta (5).sql
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

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
========
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3436;
>>>>>>>> 5eb921b16a5e04b85dfb36769177ea5f88b72710:database/beta (2).sql
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
