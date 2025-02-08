-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2025 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khelombm`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `sport` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `dept`, `rollno`, `phone`, `email`, `year`, `gender`, `sport`) VALUES
(1, 'Shally', 'CSE', '24MCA10016', 1231231231, 'shally@gmail.com', '2nd', 'GIRL', 'BADMINTON'),
(2, 'dipanshu solanki', 'ARCHITECTURE', '24MCA10007', 1231231231, 'dipanshusolanki131@gmail.com', '2nd', 'BOY', 'CRICKET,FOOTBALL'),
(3, 'Balkishan Goyal', 'CSE', '24MCA10002', 1231231231, 'balkishan@gmail.com', '2nd', 'BOY', 'VOLLEYBALL,KHO-KHO,CARROM,BADMINTON'),
(4, 'Nihal Singh', 'CSE', '24MCA100015', 1231231231, 'nihal@gmail.com', '2nd', 'BOY', 'CRICKET,BASKETBALL,VOLLEYBALL,HANDBALL,FOOTBALL,KHO-KHO,TABLE-TENNIS,CHESS,CARROM,KABADDI,BADMINTON,POWERLIFTING,ATHLETICS'),
(6, 'Vandana', 'CSE', '24MCA10022', 1231231231, 'vandana@gmail.com', '2nd', 'GIRL', 'CRICKET,HANDBALL,KHO-KHO,CHESS,KABADDI'),
(7, 'Sapna', 'ELECTRICAL', '24MCA10011', 1231231231, 'sapna@gmail.com', '1st', 'GIRL', 'CRICKET,VOLLEYBALL,FOOTBALL,TABLE-TENNIS,KABADDI,POWERLIFTING');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `team1` enum('ARCHITECTURE','BCT+STRUCTURAL','CHEMICAL','CIVIL','CSE','ECC','ECE','EEE','ELECTRICAL','MECHANICAL','MININIG','P&I','PETROLEUM','1 YR CIVIL','1 YR MECH','ECB') NOT NULL,
  `team2` enum('ARCHITECTURE','BCT+STRUCTURAL','CHEMICAL','CIVIL','CSE','ECC','ECE','EEE','ELECTRICAL','MECHANICAL','MININIG','P&I','PETROLEUM','1 YR CIVIL','1 YR MECH','ECB') NOT NULL,
  `game` enum('CRICKET','BASKETBALL','VOLLEYBALL','HANDBALL','FOOTBALL','KHO-KHO','TABLE-TENNIS','CHESS','CARROM','KABADDI','BADMINTON','POWERLIFTING','ATHLETICS') NOT NULL,
  `result` enum('-','WIN','LOSS','DRAW') NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `team1`, `team2`, `game`, `result`, `date`, `time`) VALUES
(1, 'CHEMICAL', 'CIVIL', 'CRICKET', '-', '2024-01-27', '08:00:00'),
(2, 'ELECTRICAL', 'MININIG', 'CRICKET', '-', '2024-01-26', '14:00:00'),
(3, 'MECHANICAL', 'PETROLEUM', 'CRICKET', '-', '2024-01-28', '14:00:00'),
(4, 'CSE', 'ECC', 'CRICKET', '-', '2024-01-27', '14:00:00'),
(5, 'ECE', 'BCT+STRUCTURAL', 'CRICKET', '-', '2024-01-26', '12:00:00'),
(6, '1 YR MECH', 'EEE', 'CRICKET', '-', '2024-01-28', '11:00:00'),
(7, 'P&I', '1 YR CIVIL', 'CRICKET', '-', '2024-01-28', '08:00:00'),
(8, 'ECB', 'ARCHITECTURE', 'CRICKET', '-', '2024-01-27', '11:00:00'),
(9, 'EEE', 'ARCHITECTURE', 'KABADDI', '-', '2024-01-27', '09:00:00'),
(12, 'BCT+STRUCTURAL', '1 YR MECH', 'KABADDI', '-', '2024-01-27', '14:00:00'),
(13, 'CSE', 'PETROLEUM', 'KABADDI', '-', '2024-01-28', '09:30:00'),
(14, 'ECB', 'MECHANICAL', 'KABADDI', '-', '2024-01-27', '08:00:00'),
(15, 'MININIG', 'CIVIL', 'KABADDI', '-', '2024-01-27', '11:00:00'),
(16, 'ECE', '1 YR CIVIL', 'KABADDI', '-', '2024-01-28', '11:00:00'),
(17, 'P&I', 'ECC', 'KABADDI', '-', '2024-01-27', '03:20:00'),
(18, 'ELECTRICAL', 'CHEMICAL', 'KABADDI', '-', '2024-01-27', '13:30:00'),
(19, 'MININIG', 'EEE', 'KHO-KHO', '-', '2024-01-27', '11:00:00'),
(20, 'ECE', 'BCT+STRUCTURAL', 'KHO-KHO', '-', '2024-01-27', '12:00:00'),
(21, 'CIVIL', 'ARCHITECTURE', 'KHO-KHO', '-', '2024-01-27', '13:00:00'),
(22, 'ECC', 'P&I', 'KHO-KHO', '-', '2024-01-27', '10:00:00'),
(23, '1 YR CIVIL', 'MECHANICAL', 'KHO-KHO', '-', '2024-01-27', '09:00:00'),
(24, 'CSE', 'CHEMICAL', 'KHO-KHO', '-', '2024-01-28', '11:00:00'),
(25, 'ECB', 'PETROLEUM', 'KHO-KHO', '-', '2024-01-28', '10:00:00'),
(26, 'ELECTRICAL', '1 YR MECH', 'KHO-KHO', '-', '2024-01-27', '08:00:00'),
(27, 'CIVIL', 'EEE', 'HANDBALL', '-', '2024-01-27', '15:00:00'),
(28, 'ARCHITECTURE', 'ECC', 'HANDBALL', '-', '2024-01-28', '12:00:00'),
(29, 'MECHANICAL', 'ECE', 'HANDBALL', '-', '2024-01-27', '16:00:00'),
(30, 'CHEMICAL', '1 YR MECH', 'HANDBALL', '-', '2024-01-28', '15:00:00'),
(31, '1 YR CIVIL', 'ECB', 'HANDBALL', '-', '2024-01-27', '14:00:00'),
(32, 'MININIG', 'PETROLEUM', 'HANDBALL', '-', '2024-01-28', '13:00:00'),
(33, 'CSE', 'P&I', 'HANDBALL', '-', '2024-01-28', '14:00:00'),
(34, 'ELECTRICAL', 'BCT+STRUCTURAL', 'HANDBALL', '-', '2024-01-28', '16:00:00'),
(35, 'BCT+STRUCTURAL', 'CSE', 'BASKETBALL', '-', '2024-01-27', '08:00:00'),
(36, 'P&I', 'PETROLEUM', 'BASKETBALL', '-', '2024-01-27', '11:00:00'),
(37, '1 YR CIVIL', '1 YR MECH', 'BASKETBALL', '-', '2024-01-27', '03:20:00'),
(38, 'ARCHITECTURE', 'MECHANICAL', 'BASKETBALL', '-', '2024-01-27', '02:00:00'),
(39, 'EEE', 'CIVIL', 'BASKETBALL', '-', '2024-01-27', '12:20:00'),
(40, 'ELECTRICAL', 'ECC', 'BASKETBALL', '-', '2024-01-27', '09:30:00'),
(41, 'ECE', 'CHEMICAL', 'BASKETBALL', '-', '2024-01-28', '09:30:00'),
(42, 'MININIG', 'ECB', 'BASKETBALL', '-', '2024-01-27', '08:00:00'),
(43, 'ECE', 'EEE', 'FOOTBALL', '-', '2024-01-27', '08:00:00'),
(44, '1 YR CIVIL', 'CSE', 'FOOTBALL', '-', '2024-01-27', '11:00:00'),
(45, 'ARCHITECTURE', 'ECC', 'FOOTBALL', '-', '2024-01-28', '08:00:00'),
(46, 'MININIG', 'ECB', 'FOOTBALL', '-', '2024-01-27', '15:00:00'),
(47, 'BCT+STRUCTURAL', 'P&I', 'FOOTBALL', '-', '2024-01-27', '13:00:00'),
(48, 'CIVIL', 'CHEMICAL', 'FOOTBALL', '-', '2024-01-28', '10:00:00'),
(49, 'PETROLEUM', 'ELECTRICAL', 'FOOTBALL', '-', '2024-01-28', '12:00:00'),
(50, 'MECHANICAL', '1 YR MECH', 'FOOTBALL', '-', '2024-01-27', '10:00:00'),
(51, '1 YR CIVIL', 'ECC', 'BADMINTON', '-', '2024-01-28', '11:00:00'),
(52, 'ELECTRICAL', 'MECHANICAL', 'BADMINTON', '-', '2024-01-28', '15:00:00'),
(53, '1 YR MECH', 'MININIG', 'BADMINTON', '-', '2024-01-29', '10:00:00'),
(54, 'PETROLEUM', 'MININIG', 'BADMINTON', '-', '2024-01-29', '12:00:00'),
(55, 'ECB', 'CSE', 'BADMINTON', '-', '2024-01-28', '08:00:00'),
(56, 'BCT+STRUCTURAL', 'CHEMICAL', 'BADMINTON', '-', '2024-01-28', '12:00:00'),
(57, 'ARCHITECTURE', 'CIVIL', 'BADMINTON', '-', '2024-01-27', '15:00:00'),
(58, 'P&I', 'ECE', 'BADMINTON', '-', '2024-01-28', '09:00:00'),
(59, 'ECE', 'EEE', 'TABLE-TENNIS', '-', '2024-01-27', '09:00:00'),
(60, 'PETROLEUM', '1 YR MECH', 'TABLE-TENNIS', '-', '2024-01-27', '12:00:00'),
(61, 'BCT+STRUCTURAL', 'ELECTRICAL', 'TABLE-TENNIS', '-', '2024-01-28', '12:00:00'),
(62, 'ARCHITECTURE', '1 YR CIVIL', 'TABLE-TENNIS', '-', '2024-01-29', '09:00:00'),
(63, 'MININIG', 'P&I', 'TABLE-TENNIS', '-', '2024-01-27', '15:00:00'),
(64, 'ECB', 'ECC', 'TABLE-TENNIS', '-', '2024-01-28', '09:00:00'),
(65, 'MECHANICAL', 'CIVIL', 'TABLE-TENNIS', '-', '2024-01-28', '15:00:00'),
(66, 'CSE', 'CHEMICAL', 'TABLE-TENNIS', '-', '2024-01-29', '12:00:00'),
(67, 'ECC', 'P&I', 'VOLLEYBALL', '-', '2024-01-27', '08:00:00'),
(68, 'MININIG', 'ECB', 'VOLLEYBALL', '-', '2024-01-27', '09:30:00'),
(69, 'PETROLEUM', 'ELECTRICAL', 'VOLLEYBALL', '-', '2024-01-27', '12:20:00'),
(70, 'MECHANICAL', 'CSE', 'VOLLEYBALL', '-', '2024-01-28', '08:00:00'),
(71, '1 YR MECH', 'CHEMICAL', 'VOLLEYBALL', '-', '2024-01-27', '11:00:00'),
(72, 'ARCHITECTURE', 'BCT+STRUCTURAL', 'VOLLEYBALL', '-', '2024-01-27', '03:20:00'),
(73, 'EEE', '1 YR CIVIL', 'VOLLEYBALL', '-', '2024-01-28', '03:20:00'),
(74, 'CIVIL', 'ECE', 'VOLLEYBALL', '-', '2024-01-27', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `pass`, `active`) VALUES
(1, 'balkishan', 'balkishan@gmail.com', 1231231231, '123', 1),
(2, 'Shally', 'shally@gmail.com', 1231231231, '123', 1),
(3, 'dipanshu', 'dipanshusolanki131@gmail.com', 1231231231, '123', 1),
(4, 'Shally', 'shally121@gmail.com', 1231231231, '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
