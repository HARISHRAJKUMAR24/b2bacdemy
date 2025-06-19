-- phpMyAdmin SQL Dump
-- version 5.2.2-1.fc42
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2025 at 02:57 AM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2bacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseName` text NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `offerPrice` decimal(10,2) DEFAULT NULL,
  `enroll` int(11) DEFAULT 0,
  `active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseName`, `price`, `offerPrice`, `enroll`, `active`) VALUES
(1, 'All Subjects Tuition', 0.00, 0.00, 0, 0),
(2, 'Spoken English', 0.00, 0.00, 4, 0),
(3, 'Calligraphy (Handwriting)', 0.00, 0.00, 0, 0),
(4, 'Art & Craft', 0.00, 0.00, 2, 2),
(5, 'Vocal Music', 0.00, 0.00, 0, 0),
(6, 'Drawing', 0.00, 0.00, 1, 0),
(7, 'LSRW (English, Tamil, Hindi & Mathematics)', 0.00, 0.00, 0, 0),
(8, 'Chess', 0.00, 0.00, 0, 0),
(9, 'Moral Values', 0.00, 0.00, 0, 0),
(10, 'Language Club (English, Tamil & Hindi)', 0.00, 0.00, 0, 0),
(11, 'Flute / Violin', 0.00, 0.00, 0, 0),
(15, 'Spoken Hindi', 0.00, 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentPhoto` text DEFAULT NULL,
  `rollNo` varchar(25) DEFAULT NULL,
  `studentName` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bloodGroup` varchar(5) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `fatherName` varchar(100) DEFAULT NULL,
  `motherName` varchar(100) DEFAULT NULL,
  `fatherOccupation` varchar(100) DEFAULT NULL,
  `motherOccupation` varchar(100) DEFAULT NULL,
  `contactNumber` varchar(15) DEFAULT NULL,
  `alternateContact` varchar(15) DEFAULT NULL,
  `stdStudying` varchar(50) DEFAULT NULL,
  `boardStudy` varchar(50) DEFAULT NULL,
  `camp` varchar(50) DEFAULT NULL,
  `joiningDate` date DEFAULT NULL,
  `referrer` varchar(100) DEFAULT NULL,
  `residentialAddress` text DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentPhoto`, `rollNo`, `studentName`, `dob`, `bloodGroup`, `age`, `course`, `status`, `fatherName`, `motherName`, `fatherOccupation`, `motherOccupation`, `contactNumber`, `alternateContact`, `stdStudying`, `boardStudy`, `camp`, `joiningDate`, `referrer`, `residentialAddress`, `updated_at`) VALUES
(7, NULL, '', 'Mark', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '6369800627', NULL, '12', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(8, NULL, '', 'mark', NULL, NULL, NULL, 2, 0, NULL, NULL, NULL, NULL, '9890', NULL, '188', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(9, NULL, '', 'sfdsf', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '23232', NULL, '2332', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(10, 'student_6850408d50a0a.png', '', 'mark', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '88', NULL, '89', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(11, 'student_6850e4563792a.png', 'B2B25SID01', 'Mark', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '0909', NULL, '12', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(12, NULL, 'B2B25SID02', 'mark', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '89090', NULL, '0909', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(13, 'student_6852ad30b0441.jpg', 'B2B25SID03', 'Mark', '2025-06-17', 'A+', 1212, 2, 0, 'wewe', 'siojo', 'sf', '-ewwr', '898', '-32323ewr', '12', 'uohuihi', 'summer', '2025-06-12', 'iiuiu', 'iuhiuhiu-                                                                                                                                                                                                                                ', '2025-06-18 18:44:37'),
(14, NULL, 'B2B25SID04', 'Mark', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '99', NULL, '12', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(15, 'student_6852adbfa5d2a.png', 'B2B25SID05', 'Mark', NULL, NULL, NULL, 2, 1, NULL, NULL, NULL, NULL, '82998', NULL, '12', NULL, NULL, NULL, NULL, NULL, '2025-06-18 18:44:37'),
(16, 'student_6852c028e083e.png', 'B2B25SID006', 'sdffa', '2025-06-17', 'B+', 11, 2, 0, '-asdf', '-sadf', '-asdf', '-sadf', '324', '-', 'sdf', '-asdf', 'summer', '2025-06-17', '-sadf', '-', '2025-06-18 19:20:35'),
(17, 'student_6852c03ed2451.png', 'B2B25SID006', 'sdffa', '2025-06-17', 'B+', 11, 2, NULL, '-asdf', '-sadf', '-asdf', '-sadf', '324', '-', 'sdf', '-asdf', 'summer', '2025-06-17', '-sadf', '-', '2025-06-18 19:20:35'),
(18, 'student_6852c469d4f14.png', 'B2B25SID006', 'NAVEEN BHARATH', NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, '9808', NULL, '12', NULL, NULL, NULL, NULL, NULL, '2025-06-18 19:21:37'),
(19, 'student_6852c726daf90.png', 'B2B25SID007', 'B.NAVEEN BHARATHI', '2025-04-21', 'A+', 20, 6, 1, 'BALA MURALI', 'MURUGESWARI', 'COOK', 'HOME', '6369800627', '6369800627', 'COLLEGE', 'AU', 'reqular', '2025-06-18', 'INSTAGRAM', '12,/4 IHIOUO', '2025-06-18 19:33:38'),
(20, 'student_6852cabc25a6e.png', 'B2B25SID008', 'asdfasdf', NULL, NULL, NULL, 4, 1, NULL, NULL, NULL, NULL, '112', NULL, 'sdafsadf', NULL, NULL, NULL, NULL, NULL, '2025-06-18 19:59:13'),
(21, 'student_6852cd8b46aa1.jpg', 'B2B25SID009', 'asdf', NULL, NULL, NULL, 4, 1, NULL, NULL, NULL, NULL, '12', NULL, 'asfd', NULL, NULL, NULL, NULL, NULL, '2025-06-18 22:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_course` (`course`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_student_course` FOREIGN KEY (`course`) REFERENCES `courses` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
