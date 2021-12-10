-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `account_id` varchar(20) NOT NULL,
  `Person_id` varchar(20) NOT NULL,
  `account_type` varchar(50) DEFAULT NULL,
  `account_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`account_id`, `Person_id`, `account_type`, `account_description`) VALUES
('A003', 'ME001', 'Tithe', 'monthly tithe');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Country` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `Landmark` varchar(100) DEFAULT NULL,
  `Digital_address` varchar(50) DEFAULT NULL,
  `Branch_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `email_address` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`email_address`, `password`) VALUES
('gyimahrichida@gmail.com', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_id` varchar(20) NOT NULL,
  `Branch_name` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branchrole`
--

CREATE TABLE `branchrole` (
  `role_id` varchar(10) NOT NULL,
  `Branch_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `church_role`
--

CREATE TABLE `church_role` (
  `role_id` char(10) NOT NULL,
  `Person_id` varchar(20) NOT NULL,
  `role_title` varchar(50) DEFAULT NULL,
  `role_status` enum('vacant','occupied') DEFAULT NULL,
  `role_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `edu_id` varchar(20) NOT NULL,
  `Person_id` varchar(20) NOT NULL,
  `Level_education` varchar(100) DEFAULT NULL,
  `current_institution` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `employment_status` enum('employed','unemployed') DEFAULT NULL,
  `employer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`edu_id`, `Person_id`, `Level_education`, `current_institution`, `occupation`, `employment_status`, `employer`) VALUES
('ED001', 'ME001', 'Degree', 'Ashesi', 'Lawyer', 'employed', 'Self employed');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Person_id` char(10) NOT NULL,
  `salary` decimal(10,0) DEFAULT NULL,
  `employment_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Person_id`, `salary`, `employment_date`) VALUES
('EMP001', '3000', '2021-12-10'),
('ME001', '2000', '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `family_life`
--

CREATE TABLE `family_life` (
  `Family_id` varchar(20) NOT NULL,
  `Person_id` varchar(20) NOT NULL,
  `marital_status` enum('married','single','divorced','widow/widower') DEFAULT NULL,
  `number_children` tinyint(4) DEFAULT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `date_marriage` date DEFAULT NULL,
  `marriage_type` enum('Customary','Ordinance') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leader_profile`
--

CREATE TABLE `leader_profile` (
  `Person_id` varchar(30) NOT NULL,
  `Position` varchar(40) DEFAULT NULL,
  `date_of_commencement` date DEFAULT NULL,
  `date_of_completion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Person_id` varchar(20) NOT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `place_birth` varchar(50) DEFAULT NULL,
  `hometown` varchar(50) DEFAULT NULL,
  `emergency_contactName` varchar(50) DEFAULT NULL,
  `emergency_Contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Person_id`, `mother_name`, `father_name`, `place_birth`, `hometown`, `emergency_contactName`, `emergency_Contact`) VALUES
('ME001', 'Rose Abrefi', 'Yaw Danso', 'Accra', 'Apedwa', 'Augustina Antwi', '0243788668');

-- --------------------------------------------------------

--
-- Table structure for table `minister`
--

CREATE TABLE `minister` (
  `Person_id` char(10) NOT NULL,
  `branch_name` varchar(50) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `projects_taken` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minister`
--

INSERT INTO `minister` (`Person_id`, `branch_name`, `qualification`, `date_joined`, `projects_taken`) VALUES
('MI001', 'Dominion Congregation', 'degree', '2021-12-09', 'building'),
('MI002', 'Dominion Congregation', 'degree', '0000-00-00', 'building');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `Person_id` varchar(20) NOT NULL,
  `account_id` varchar(20) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_description` text DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `payment_type` enum('mobile money','cash','bank account') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Person_id` varchar(30) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_id`, `Fname`, `Lname`, `DOB`, `email`, `phone`) VALUES
('EMP001', 'Richida', 'Gyimah', '2021-12-07', 'gyimahrichida@gmail.com', '0542885046'),
('ME001', 'Hannah', 'Armah', '2021-12-09', 'gyimahrichida@gmail.com', '0542885046'),
('ME005', 'Richida', 'Gyimah', '2021-12-24', 'gyimahrichida@gmail.com', '0542885046'),
('ME010', 'Ernest', 'Boakye', '2021-12-09', 'gyimahrichida@gmail.com', '0542885046'),
('ME012', 'Ernest', 'Adam', '2021-12-10', 'gyimahrichida@gmail.com', '0542885046'),
('MI001', 'Richida', 'Gyimah', '2021-12-01', 'gyimahrichida@gmail.com', '+233542885046'),
('MI002', 'Richida', 'Gyimah', '2021-12-10', 'gyimahrichida@gmail.com', '0542885046');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `Person_id` (`Person_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `Branch_id` (`Branch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Branch_id`);

--
-- Indexes for table `branchrole`
--
ALTER TABLE `branchrole`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `Branch_id` (`Branch_id`);

--
-- Indexes for table `church_role`
--
ALTER TABLE `church_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `Role_info` (`Person_id`,`role_title`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`edu_id`),
  ADD UNIQUE KEY `Person_id` (`Person_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Person_id`);

--
-- Indexes for table `family_life`
--
ALTER TABLE `family_life`
  ADD PRIMARY KEY (`Family_id`),
  ADD UNIQUE KEY `Person_id` (`Person_id`);

--
-- Indexes for table `leader_profile`
--
ALTER TABLE `leader_profile`
  ADD PRIMARY KEY (`Person_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Person_id`),
  ADD KEY `Member_Info` (`emergency_contactName`,`emergency_Contact`);

--
-- Indexes for table `minister`
--
ALTER TABLE `minister`
  ADD PRIMARY KEY (`Person_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `PayDetails_Info` (`Person_id`,`account_id`,`payment_date`,`amount`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_id`),
  ADD KEY `Personal_Info` (`Fname`,`Lname`,`phone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_details`
--
ALTER TABLE `account_details`
  ADD CONSTRAINT `account_details_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`Branch_id`) REFERENCES `branch` (`Branch_id`);

--
-- Constraints for table `branchrole`
--
ALTER TABLE `branchrole`
  ADD CONSTRAINT `branchrole_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `church_role` (`role_id`),
  ADD CONSTRAINT `branchrole_ibfk_2` FOREIGN KEY (`Branch_id`) REFERENCES `branch` (`Branch_id`);

--
-- Constraints for table `church_role`
--
ALTER TABLE `church_role`
  ADD CONSTRAINT `church_role_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `family_life`
--
ALTER TABLE `family_life`
  ADD CONSTRAINT `family_life_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `leader_profile`
--
ALTER TABLE `leader_profile`
  ADD CONSTRAINT `leader_profile_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `minister`
--
ALTER TABLE `minister`
  ADD CONSTRAINT `minister_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_details` (`account_id`),
  ADD CONSTRAINT `payment_details_ibfk_2` FOREIGN KEY (`Person_id`) REFERENCES `person` (`Person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
