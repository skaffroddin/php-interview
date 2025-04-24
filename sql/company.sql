-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2025 at 02:44 PM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `status` enum('Present','Absent','Leave') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `emp_id`, `attendance_date`, `status`) VALUES
(1, 1, '2025-04-01', 'Present'),
(2, 1, '2025-04-02', 'Present'),
(3, 1, '2025-04-03', 'Absent'),
(4, 2, '2025-04-01', 'Leave'),
(5, 2, '2025-04-02', 'Present'),
(6, 2, '2025-04-03', 'Present'),
(7, 3, '2025-04-01', 'Present'),
(8, 3, '2025-04-02', 'Absent'),
(9, 3, '2025-04-03', 'Present'),
(10, 4, '2025-04-01', 'Present'),
(11, 4, '2025-04-02', 'Present'),
(12, 4, '2025-04-03', 'Leave'),
(13, 5, '2025-04-01', 'Absent'),
(14, 5, '2025-04-02', 'Leave'),
(15, 5, '2025-04-03', 'Present'),
(16, 6, '2025-04-01', 'Present'),
(17, 6, '2025-04-02', 'Present'),
(18, 6, '2025-04-03', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'HR'),
(2, 'Finance'),
(3, 'IT'),
(4, 'Marketing'),
(5, 'Operations');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `gender`, `city`, `salary`, `hire_date`, `department_id`, `manager_id`) VALUES
(1, 'Ravi', 'Sharma', 'Male', 'Delhi', 80000.00, '2018-01-10', 3, NULL),
(2, 'Priya', 'Verma', 'Female', 'Mumbai', 75000.00, '2019-04-15', 2, NULL),
(3, 'Amit', 'Patel', 'Male', 'Ahmedabad', 60000.00, '2020-06-01', 3, 1),
(4, 'Neha', 'Singh', 'Female', 'Kolkata', 65000.00, '2021-03-20', 1, 2),
(5, 'Raj', 'Kumar', 'Male', 'Bangalore', 55000.00, '2022-07-10', 4, 1),
(6, 'Sneha', 'Das', 'Female', 'Chennai', 50000.00, '2023-02-05', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee_projects`
--

CREATE TABLE `employee_projects` (
  `emp_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `hours_worked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_projects`
--

INSERT INTO `employee_projects` (`emp_id`, `project_id`, `hours_worked`) VALUES
(1, 1, 150),
(1, 2, 80),
(2, 1, 120),
(3, 2, 90),
(4, 3, 60),
(5, 3, 55),
(6, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `start_date`, `end_date`) VALUES
(1, 'GST Automation', '2023-01-01', '2023-12-31'),
(2, 'Website Redesign', '2022-05-10', '2023-03-30'),
(3, 'Digital India Campaign', '2023-03-15', '2023-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `employee_projects`
--
ALTER TABLE `employee_projects`
  ADD PRIMARY KEY (`emp_id`,`project_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `employee_projects`
--
ALTER TABLE `employee_projects`
  ADD CONSTRAINT `employee_projects_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `employee_projects_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
