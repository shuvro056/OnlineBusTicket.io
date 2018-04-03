-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `booked_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `customer_name` varchar(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `selected_seat_number` int(11) NOT NULL,
  `booked_date` date NOT NULL,
  `payable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`booked_id`, `schedule_id`, `customer_name`, `last_name`, `contact`, `quantity`, `selected_seat_number`, `booked_date`, `payable`) VALUES
(7, 59, 'adfa', 'sdf', 1682530174, 4, 0, '0000-00-00', 0),
(8, 59, 'adfa', 'sdf', 1676917146, 1, 0, '0000-00-00', 0),
(9, 59, 'adfa', 'sdf', 1676917146, 1, 0, '2016-05-01', 0),
(10, 59, 'adfa', 'sdf', 1676917146, 1, 0, '2016-05-01', 0),
(11, 59, 'adfa', 'sdf', 1676917146, 3, 0, '2016-05-01', 0),
(12, 59, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 0),
(13, 59, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 0),
(14, 59, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 0),
(15, 59, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 0),
(16, 0, '', '', 0, 0, 0, '0000-00-00', 0),
(17, 0, '', '', 0, 0, 0, '0000-00-00', 0),
(18, 0, '', '', 0, 0, 0, '0000-00-00', 0),
(19, 59, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 0),
(20, 60, 'Mamun', 'Sheikh', 1676917146, 1, 0, '2016-05-01', 0),
(21, 62, '', '', 0, 1, 0, '2016-05-01', 0),
(22, 61, 'adfa', 'sdf', 0, 3, 0, '2016-05-01', 0),
(23, 62, 'adfa', 'sdf', 1682530174, 1, 0, '2016-05-01', 800),
(24, 62, 'adfa', 'sdf', 1676917146, 4, 0, '2016-05-01', 800),
(25, 62, 'adfa', 'sdf', 1676917146, 4, 0, '2016-05-01', 800),
(26, 62, 'adfa', 'sdf', 1676917146, 4, 0, '2016-05-01', 800),
(27, 62, 'adfa', 'sdf', 1676917146, 2, 0, '2016-05-01', 800),
(28, 61, 'Raju', 'md', 1676917146, -1, 0, '2016-05-01', 800),
(32, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(33, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(34, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(35, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(36, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(37, 60, 'adfa', 'sdf', 1729535488, 2, 0, '2016-05-01', 800),
(38, 78, 'adfa', 'sdf', 1676917146, 1, 0, '2016-05-04', 550),
(39, 112, 'Rakesh', 'Das', 1676917146, 2, 0, '2016-05-05', 1000),
(40, 112, 'Rakesh', 'Das', 1676917146, 2, 0, '2016-05-05', 1000),
(41, 111, 'dd', 'gg', 999, 2, 0, '2016-05-05', 1000),
(42, 112, 'adfa', 'sdf', 1676917146, 4, 0, '2016-05-05', 1000),
(43, 122, 'mm', 'mn', 11, 2, 0, '0000-00-00', 500),
(44, 122, 'Al', 'Mosabbir', 1749147777, 1, 0, '0000-00-00', 500),
(45, 122, 'Al', 'Mosabbir', 1749147777, 1, 0, '0000-00-00', 500),
(46, 122, 'Sa', 'T', 1749147777, 1, 0, '0000-00-00', 500),
(47, 123, 'Al', 'Mosabbir', 1749147777, 1, 0, '0000-00-00', 480),
(48, 78, 'gg', 'jj', 1749147777, 1, 0, '0000-00-00', 550),
(49, 78, 'gg', 'jj', 1749147777, 1, 0, '0000-00-00', 550),
(50, 78, 'gg', 'jj', 1749147777, 1, 0, '0000-00-00', 550),
(51, 78, 'Akash', 'Rumi', 1943217004, 1, 0, '0000-00-00', 550),
(52, 81, 'Al-Mosabbir', 'Rakib', 1749147777, 1, 0, '0000-00-00', 700);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `class` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `schedule_id` int(50) NOT NULL,
  `departure_time` time NOT NULL,
  `total_seat` int(50) NOT NULL,
  `booked_seat` int(11) NOT NULL,
  `available_seat` int(50) NOT NULL,
  `start_from` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `journey_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `bk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`class`, `name`, `schedule_id`, `departure_time`, `total_seat`, `booked_seat`, `available_seat`, `start_from`, `destination`, `journey_date`, `price`, `bk`) VALUES
('', '', 76, '00:00:00', 0, 0, 0, '', '', '0000-00-00', 0, 0),
('', '', 77, '00:00:00', 0, 0, 0, '', '', '0000-00-00', 0, 0),
('Ac', 'Eagle Paripahan', 78, '10:00:00', 32, 0, 29, 'Dhaka', 'Khulna', '2016-05-04', 550, 3),
('Ac', 'Dibjol paripahan', 79, '12:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-04', 700, 0),
('Non Ac', 'Dibjol paripahan', 80, '12:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-04', 700, 0),
('Ac', 'Dibjol paripahan', 81, '12:00:00', 32, 0, 31, 'Dhaka', 'Rajshahi', '2016-05-04', 700, 1),
('Ac', 'Dibjol paripahan', 82, '00:00:00', 32, 0, 32, 'Dhaka', 'Rajshahi', '2016-05-04', 700, 0),
('Ac', 'Dibjol paripahan', 83, '12:00:00', 32, 0, 32, 'Dhaka', 'Barishal', '2016-05-04', 800, 0),
('Non Ac', 'Dibjol paripahan', 84, '12:00:00', 32, 0, 32, 'Dhaka', 'Barishal', '2016-05-04', 700, 0),
('Ac', 'Tr travels', 85, '08:00:00', 32, 0, 32, 'Dhaka', 'Barishal', '2016-05-04', 1200, 0),
('Non Ac', 'Tr travels', 86, '08:00:00', 32, 0, 32, 'Dhaka', 'Chittagong', '2016-05-04', 700, 0),
('Non Ac', 'Tuba Line', 87, '17:00:00', 32, 0, 32, 'Dhaka', 'Chittagong', '2016-05-04', 650, 0),
('Ac', 'Tr travels', 88, '07:00:00', 32, 0, 32, 'Dhaka', 'Chittagong', '2016-05-04', 1300, 0),
('Ac', 'Hanif Paribahan', 89, '08:00:00', 32, 0, 32, 'Dhaka', 'Chittagong', '2016-05-04', 1200, 0),
('Ac', 'Shohag Paribahan', 91, '07:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1200, 0),
('Ac', 'Eagle Paribahan', 92, '07:45:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1000, 0),
('Ac', 'Eagle Paribahan', 93, '07:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1200, 0),
('Ac', 'Eagle Paribahan', 94, '08:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1200, 0),
('Ac', 'Eagle Paribahan', 95, '18:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1200, 0),
('Ac', 'Eagle Paribahan', 96, '20:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1200, 0),
('Non Ac', 'Shohag Paribahan', 97, '07:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 550, 0),
('Non Ac', 'Dibjol paripahan', 98, '10:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 600, 0),
('Non Ac', 'Dibjol paripahan', 99, '22:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 600, 0),
('Ac', 'Hanif Paribahan', 100, '10:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 1300, 0),
('Ac', 'Ak travels', 101, '21:00:00', 32, 0, 17, 'Dhaka', 'Khulna', '2016-05-05', 1300, 15),
('Ac', 'Dibjol paripahan', 102, '10:30:00', 32, 0, 32, 'khulna', 'Dhaka', '2016-05-05', 1200, 0),
('Ac', 'Dibjol paripahan', 103, '10:00:00', 32, 0, 32, 'khulna', 'Dhaka', '2016-05-05', 1200, 0),
('Ac', 'Tr travels', 104, '20:00:00', 32, 0, 32, 'khulna', 'Dhaka', '2016-05-05', 1300, 0),
('Ac', 'Eagle Paribahan', 105, '08:00:00', 32, 0, 32, 'khulna', 'Dhaka', '2016-05-05', 1200, 0),
('Ac', 'Tr travels', 106, '06:00:00', 32, 0, 32, 'Khulna', 'Dhaka', '2016-05-04', 1200, 0),
('Non Ac', 'Dibjol paripahan', 107, '06:00:00', 32, 0, 32, 'Khulna', 'Dhaka', '2016-05-05', 600, 0),
('Non Ac', 'Tr travels', 108, '08:00:00', 32, 0, 32, 'khulna', 'Dhaka', '2016-05-05', 600, 0),
('Non Ac', 'Shohag Paribahan', 109, '09:00:00', 32, 0, 32, 'Khulna', 'Dhaka', '2016-05-05', 550, 0),
('Non Ac', 'Eagle Paribahan', 110, '19:15:00', 32, 0, 32, 'Khulna', 'Dhaka', '2016-05-05', 550, 0),
('Ac', 'Dibjol paripahan', 111, '23:00:00', 32, 0, 30, 'Dhaka', 'Rajshahi', '2016-05-05', 1000, 2),
('Ac', 'Hanif Paribahan', 112, '17:00:00', 32, 0, 26, 'Dhaka', 'Rajshahi', '2016-05-05', 1000, 6),
('Ac', 'Shyamoly paribahan', 113, '12:00:00', 32, 0, 29, 'Dhaka', 'Rajshahi', '2016-05-05', 1000, 3),
('Ac', 'Tr travels', 114, '10:00:00', 32, 0, 32, 'Dhaka', 'ra', '0000-00-00', 0, 0),
('Ac', 'Tr travels', 115, '10:00:00', 32, 0, 32, 'Dhaka', 'Rajshahi', '2016-05-05', 1000, 0),
('Non Ac', 'Shyamoly paribahan', 116, '09:00:00', 32, 0, 32, 'Dhaka', 'Rajshahi', '2016-05-05', 550, 0),
('Non Ac', 'Tr travels', 117, '23:00:00', 32, 0, 32, 'Dhaka', 'Rajshahi', '2016-05-05', 550, 0),
('Non Ac', 'Sr paripahan', 118, '09:00:00', 32, 0, 32, 'Dhaka', 'Rajshahi', '2016-05-05', 550, 0),
('Non Ac', 'Eagle', 119, '00:00:00', 32, 0, 32, 'Dhaka', 'Khulna', '2016-05-05', 600, 0),
('Non Ac', 'Dibjol paripahan', 120, '12:00:00', 32, 0, 32, 'Rajshahi', 'Dhaka', '2016-05-05', 550, 0),
('Non Ac', 'Eagle Paribahan', 121, '03:00:00', 32, 0, 32, 'Rajshahi', 'Dhaka', '2016-05-05', 550, 0),
('Non Ac', 'hanif', 122, '14:00:00', 42, 0, 37, 'dhaka', 'rajshahi', '2016-08-31', 500, 5),
('Non Ac', 'Desh Travels', 123, '21:00:00', 32, 0, 31, 'Dhaka', 'Rajshahi', '2016-08-31', 480, 1),
('Non Ac', 'tarik', 124, '11:01:00', 100, 0, 78, 'dhaka', 'rajshahi', '2016-12-31', 134, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, '', 'rakesh', '12345', ''),
(2, 'mamun', 'mamun', '12345', 'mamun@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`booked_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD UNIQUE KEY `schedule_id` (`schedule_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `booked_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
