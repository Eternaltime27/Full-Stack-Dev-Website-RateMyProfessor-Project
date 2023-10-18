-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 02:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_projectis448`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(4) DEFAULT NULL,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'Kamran', '1234567'),
(2, 'test', 'test'),
(5, 'user', 'passsword');

-- --------------------------------------------------------

--
-- Table structure for table `tblpcourse`
--

CREATE TABLE `tblpcourse_OD41212` (
  `pcid` int(6) UNSIGNED NOT NULL,
  `pcourse` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpcourse`
--

INSERT INTO `tblpcourse` (`pcid`, `pcourse`) VALUES
(1, 'IS610'),
(2, 'IS410'),
(3, 'IS448'),
(4, 'IS127'),
(5, 'IS450');

-- --------------------------------------------------------

--
-- Table structure for table `tblpname`
--

CREATE TABLE `tblpname_OD41212` (
  `pnid` int(6) UNSIGNED NOT NULL,
  `pname` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpname`
--

INSERT INTO `tblpname_OD41212` (`pnid`, `pname`) VALUES
(1, 'Kamran Fayyaz'),
(2, 'Kamran Fayyaz'),
(3, 'Christine Smith'),
(4, 'James Edgar'),
(5, 'Kumar Sagar'),
(6, 'Robert Jackson');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofessor`
--

CREATE TABLE `tblprofessor` (
  `pid` int(6) UNSIGNED NOT NULL,
  `pname` varchar(300) NOT NULL,
  `pemail` varchar(300) NOT NULL,
  `pcourse` varchar(100) NOT NULL,
  `puniversity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblprofessor`
--

INSERT INTO `tblprofessor_OD41212` (`pid`, `pname`, `pemail`, `pcourse`, `puniversity`) VALUES
(1, 'Kamran', 'kfayyaz@umbc.edu', 'IS448', 'UMBC'),
(2, 'Kamran', 'kfayyaz@umbc.edu', 'IS127', 'UMBC'),
(3, 'James', 'james@umgc.edu', 'IS448', 'UMGC'),
(4, 'Kim', 'kim@towson.edu', 'IS605', 'Towson'),
(5, 'Smith', 'smith@umbc.edu', 'IS605', 'UMBC'),
(6, 'Smith', 'smith@umbc.edu', 'IS448', 'UMBC'),
(7, 'Smith', 'smith@umgc.edu', 'IS127', 'UMGC'),
(14, 'Kamran Fayyaz', 'kfayyaz@umbc.edu', 'IS610', 'College Park'),
(15, 'Christine Smith', 'smith@umbc.edu', 'IS127', 'UMBC');

-- --------------------------------------------------------

--
-- Table structure for table `tblpuniversity`
--

CREATE TABLE `tblpuniversity_OD41212` (
  `puid` int(6) UNSIGNED NOT NULL,
  `puniversity` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpuniversity`
--

INSERT INTO `tblpuniversity_OD41212` (`puid`, `puniversity`) VALUES
(1, 'College Park'),
(2, 'UMBC'),
(3, 'UMGC'),
(4, 'Towson'),
(5, 'John Hopkins');

-- --------------------------------------------------------

--
-- Table structure for table `tblrating`
--

CREATE TABLE `tblrating_OD41212` (
  `rid` int(6) UNSIGNED NOT NULL,
  `p_fk` int(6) NOT NULL,
  `rdate` datetime DEFAULT NULL,
  `rrating` int(2) DEFAULT NULL,
  `rdifficulty` int(2) DEFAULT NULL,
  `rtag` varchar(50) DEFAULT NULL,
  `ragain` varchar(3) DEFAULT NULL,
  `rcomments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblrating`
--

INSERT INTO `tblrating_OD41212` (`rid`, `p_fk`, `rdate`, `rrating`, `rdifficulty`, `rtag`, `ragain`, `rcomments`) VALUES
(17, 1, '2023-04-27 00:00:00', 4, 4, 'Tough_Grader   Test_Heavy   Amazing_Lectures   ', '1', 'test'),
(18, 1, '2023-04-27 00:00:00', 5, 3, 'Tough_Grader   Test_Heavy   Respected   ', 'Yes', '   Discuss the professors professional abilities including teaching style\r\nand ability to convey the material clearly'),
(19, 1, '2023-04-27 00:00:00', 1, 1, 'Tough Grader   Test Heavy   ', 'Yes', ' ghghghf'),
(20, 1, '2023-04-27 00:00:00', 1, 1, 'Tough Grader   :   Test Heavy   :   Respected   : ', 'Yes', ' hryhryhrtyrtyr'),
(21, 1, '2023-04-27 00:00:00', 3, 3, 'Tough Grader   :   Test Heavy   :   Lecture Heavy ', 'Yes', ' Test All Good'),
(22, 1, '2023-04-27 00:00:00', 3, 3, 'Tough Grader   :   Test Heavy   :   Lecture Heavy ', 'Yes', ' Test All Good'),
(23, 2, '2023-04-27 00:00:00', 4, 4, 'Tough Grader   :   Test Heavy   :   Lecture Heavy ', 'Yes', ' I really love the teaching method and his style.'),
(24, 2, '2023-04-27 00:00:00', 5, 5, 'Test Heavy   :   Respected   :   Lecture Heavy   :', 'Yes', 'Best Best Best Best Best Best Best \r\nBest Best Best Best Best Best Best \r\nBest Best Best Best Best Best Best '),
(25, 7, '2023-04-27 00:00:00', 3, 5, 'Tough Grader   :   Test Heavy   :   ', 'No', ' Ok Professor  Ok Professor  Ok Professor  Ok Professor \r\n Ok Professor  Ok Professor  Ok Professor  Ok Professor \r\n Ok Professor  Ok Professor  Ok Professor '),
(26, 7, '2023-04-27 06:35:13', 1, 5, 'Tough Grader   :   Test Heavy   :   Respected   : ', 'No', ' Ok Professor  Ok Professor  Ok Professor  Ok Professor \r\n Ok Professor  Ok Professor  Ok Professor  Ok Professor \r\n Ok Professor  Ok Professor  Ok Professor '),
(28, 2, '2023-04-27 06:29:56', 1, 1, 'Tough Grader   :   ', 'Yes', ' Your rating could be removed if you use profanity or derogatory terms.'),
(29, 1, '2023-04-27 06:30:27', 1, 1, 'Tough Grader   :   ', 'Yes', ' teaching '),
(30, 1, '2023-04-28 06:23:15', 5, 5, 'Tough Grader   :   Test Heavy   :   Respected   : ', 'Yes', ' rating sdfsdfsd AAA Updated'),
(31, 1, '2023-04-28 06:54:12', 1, 1, 'Test Heavy   :   Amazing Lectures   :   Lecture He', 'Yes', ' removed if you use profanity or derogatory terms.'),
(32, 1, '2023-04-28 07:02:10', 5, 1, 'Tough Grader   :   Respected   :   Amazing Lecture', 'Yes', ' Amazing Awesome \r\n Amazing Awesome \r\n Amazing Awesome \r\n Amazing Awesome '),
(33, 1, '2023-04-28 10:43:52', 5, 1, 'Respected   :   Amazing Lectures   :   ', 'Yes', ' Awesome Love him'),
(34, 1, '2023-04-28 10:44:11', 5, 1, 'Respected   :   ', 'Yes', ' test'),
(35, 1, '2023-04-29 01:47:18', 3, 3, 'Tough Grader   :   Test Heavy   :   Respected   : ', 'Yes', ' test 123'),
(36, 14, '2023-04-29 02:03:44', 5, 5, 'Test Heavy   :   Respected   :   ', 'Yes', ' the material clearly'),
(37, 1, '2023-04-29 02:07:12', 2, 3, '', 'Yes', ' '),
(38, 1, '2023-04-29 02:11:19', 1, 1, '', 'Yes', ' '),
(39, 1, '2023-04-29 02:15:41', 1, 1, '', 'Yes', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpcourse`
--
ALTER TABLE `tblpcourse`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `tblpname`
--
ALTER TABLE `tblpname`
  ADD PRIMARY KEY (`pnid`);

--
-- Indexes for table `tblprofessor`
--
ALTER TABLE `tblprofessor`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tblpuniversity`
--
ALTER TABLE `tblpuniversity`
  ADD PRIMARY KEY (`puid`);

--
-- Indexes for table `tblrating`
--
ALTER TABLE `tblrating`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpcourse`
--
ALTER TABLE `tblpcourse`
  MODIFY `pcid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpname`
--
ALTER TABLE `tblpname`
  MODIFY `pnid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblprofessor`
--
ALTER TABLE `tblprofessor`
  MODIFY `pid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblpuniversity`
--
ALTER TABLE `tblpuniversity`
  MODIFY `puid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblrating`
--
ALTER TABLE `tblrating`
  MODIFY `rid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `tblstyle_OD41212` (
  `styleid` int(6) UNSIGNED NOT NULL,
  `tag` varchar(30) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstyle`
--

INSERT INTO `tblstyle` (`styleid`, `tag`, `value`) VALUES
(1, 'H1', '#f34160'),
(2, 'A', '#1adf37'),
(3, 'Avisited', '#bcbcbc');

--
-- Indexes for table `tblstyle`
--
ALTER TABLE `tblstyle`
  ADD PRIMARY KEY (`styleid`);
  
 -- Table ContactUs
 
 CREATE TABLE `tblcontactus_OD41212` (
  `cid` int(6) UNSIGNED NOT NULL,
  `cname` varchar(60) NOT NULL,
  `ccountry` varchar(50) DEFAULT NULL,
  `csubject` varchar(30) DEFAULT NULL,
  `ccomments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblcontactus_OD41212` (`cid`, `cname`, `ccountry`, `csubject`, `ccomments`) VALUES
(1, 'Kamran', 'USA', 'IS448', 'UMBC'),
(2, 'Kamran', 'CANADA', 'IS127', 'UMBC'),
(3, 'James', 'CANADA', 'IS448', 'UMGC'),

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`cid`);