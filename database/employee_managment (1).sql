-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 02:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `joiningdate` date DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `emp_id`, `username`, `password`, `firstname`, `lastname`, `department_id`, `email`, `phone`, `birthdate`, `joiningdate`, `photo`, `address`) VALUES
(31, 1012, 'Krupali', 'krupali', 'krupali', 'ladva', 4, 'krupali@gmail.com', '7984763487', '2024-10-13', '2024-10-12', 'login.png', 'zanzarda road ,Junagadh'),
(32, 1008, 'axita', 'axita', 'axita', 'gohel', 5, 'axita@gmail.com', '7984763487', '2024-09-09', '2024-10-10', '', 'zanzarda road ,Junagadh'),
(35, 1005, 'dikshit', 'dikshit', 'dikshit', 'solanki', 4, 'dikshitsolanki01@gmail.com', '7984763487', '2024-10-13', '2024-10-03', 'man.jpg', 'zanzarda road ,Junagadh');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Human Resource'),
(2, 'QA Testter'),
(3, 'Accounting'),
(4, 'Web Developr'),
(5, 'Wordpress Developer'),
(6, 'Engineering'),
(7, 'Co-founder'),
(8, 'UI UX Designer'),
(9, 'Flutter Developer'),
(10, 'Front end Developer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `type`, `status`) VALUES
(1, 'Dikshit', 'Solanki', 'dikshitsolanki01@gmail.com', 'dikshit', 'dikshit', 'Employee', 'Pending'),
(34, 'axita', 'gohel', 'axita@gmail.com', 'axita', 'axita', 'Employee', 'Pending'),
(35, 'krupali', 'ladva', 'krupali@gmail.com', 'krupali', 'krupali', 'Employee', 'Pending'),
(43, 'rinkal', 'gadhiya', 'gadhiyarinkal66@gmail.com', 'rinkal', 'rinkal', 'Admin', 'Approved'),
(55, 'manisha', 'gadhiya', 'manisha@gmail.com', 'manisha', 'manisha', 'Employee', 'Pending'),
(61, 'vyoma', 'vyoma', 'vyoma@gmail.com', 'vyoma', 'vyoma', 'Employee', 'Pending'),
(63, 'bhautik', 'jogiya', 'bhautik@gmail.com', 'bhautik', 'bhautik', 'User', 'Pending'),
(64, 'parv', 'gadhiya', 'parvgadhiya1711@gmail.com', 'parv', 'parv', 'User', 'Pending'),
(65, 'pratik', 'jogiya', 'pratik@gmail.com', 'pratik', 'pratik', 'Employee', 'Pending'),
(66, 'disha', 'solanki', 'disha@gmail.com', 'disha', 'disha', 'User', 'Pending'),
(67, 'neha', 'fataniya', 'neha@gmail.com', 'neha', 'neha', 'User', 'Pending'),
(68, 'abhay', 'fataniya', 'abhay@gmail.com', 'abhay', 'abhay', 'Employee', 'pending'),
(69, 'mahadev', 'mahadev', 'mahadev@gmail.com', 'mahadev', 'mahadev', 'User', 'Pending'),
(70, 'krishna', 'krishna', 'krishna@gmail.com', 'krishna', 'krishna', 'Employee', 'pending'),
(71, 'prisha', 'mehta', 'prisha@gmail.com', 'prisha', 'prisha', 'Employee', 'pending'),
(77, 'n', 'n', 'n@gmail.com', 'n', 'n', 'Employee', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
