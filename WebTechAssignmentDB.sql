-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2025 at 05:01 AM
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
-- Database: `webtech_assignment_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `name` text NOT NULL,
  `pt1` text NOT NULL,
  `pt2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`name`, `pt1`, `pt2`) VALUES
('Jack', 'Home Page, footer', 'Tasks 1,2,7, presentation slides'),
('Sammie', 'Jobs page, nav bar, header', 'Tasks 3 and 4'),
('Lachie', 'Apply page', 'Task 5, user table and login'),
('Vethum', 'About page', 'Task 6 except user table and login');

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','prefer_not_to_say') NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `suburb` varchar(20) NOT NULL,
  `postcode` int(4) NOT NULL,
  `state` enum('vic','nsw','qld','nt','wa','sa','tas','act') NOT NULL,
  `skills` set('frontend','backend','database','dataanalysis','projectmanagement') DEFAULT NULL,
  `otherskills` text DEFAULT NULL,
  `status` enum('New','Current','Final') NOT NULL DEFAULT 'New',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_ref` varchar(10) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` text NOT NULL,
  `position_type` varchar(50) NOT NULL,
  `contract_type` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `salary_range` varchar(50) NOT NULL,
  `closing_date` date NOT NULL,
  `qualifications` text NOT NULL,
  `responsibilities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_ref`, `job_title`, `job_description`, `position_type`, `contract_type`, `location`, `salary_range`, `closing_date`, `qualifications`, `responsibilities`) VALUES
(1, 'ST001', 'Marine Research Assistant', 'Assist with water sampling, recording coral reef data, and monitoring marine habitats under the Save The Shrimps program.', 'Part-time', 'Volunteer', 'Melbourne Aquarium', 'Unpaid (Volunteer)', '2025-12-30', 'Interest in marine biology, ability to swim/snorkel, and basic data entry skills.', 'Collect water quality samples, photograph coral reefs, and record data for marine conservation research.'),
(2, 'ST002', 'Public Awareness Coordinator', 'Coordinate social media campaigns, design posters, and plan school visits to spread awareness about marine conservation.', 'Full-time', 'Volunteer', 'Hybrid / Remote', 'Unpaid (Volunteer)', '2025-11-30', 'Excellent communication skills and experience with Canva or social media tools.', 'Organize educational events and manage Save The Shrimps online community initiatives.'),
(3, 'ST003', 'Beach Cleanup Organizer', 'Lead and coordinate local beach cleanup drives to reduce plastic pollution.', 'Casual', 'Volunteer', 'Sydney Beaches', 'Unpaid (Volunteer)', '2025-12-20', 'Leadership and teamwork skills preferred. Comfortable working outdoors.', 'Schedule cleanup events, guide volunteers, and record waste collection data.'),
(4, 'ST004', 'Web Content Developer', 'Maintain and update the Save The Shrimps website by writing blog posts and updating project pages.', 'Part-time', 'Volunteer', 'Remote', 'Unpaid (Volunteer)', '2026-01-15', 'Basic HTML/PHP knowledge and writing skills.', 'Update web pages, publish news about events, and improve accessibility and user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
