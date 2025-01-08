-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 12:58 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `serial_no` varchar(20) NOT NULL,
  `date_in` date NOT NULL,
  `from_field` varchar(100) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `ref_no` varchar(50) NOT NULL,
  `uadlifu_no` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sender_comment` text DEFAULT NULL,
  `action_officer` varchar(100) NOT NULL,
  `date_out` date NOT NULL,
  `memo_image` varchar(255) DEFAULT NULL,
  `to_field` varchar(100) NOT NULL,
  `receiver_comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `serial_no`, `date_in`, `from_field`, `document_type`, `ref_no`, `uadlifu_no`, `subject`, `sender_comment`, `action_officer`, `date_out`, `memo_image`, `to_field`, `receiver_comment`, `created_at`) VALUES
(1, 'ODPP/001/2024', '2024-11-08', 'cdcfs', 'memo', '12345', '12345', 'internships', 'received', 'brian', '2024-11-15', NULL, 'gitahi', 'me', '2024-11-08 12:32:41'),
(2, 'ODPP/002/2024', '2024-11-08', 'cdcfs', 'memo', '12345', '12345', 'internships', 'received', 'brian', '2024-11-15', NULL, 'gitahi', 'me', '2024-11-08 12:32:52'),
(3, 'ODPP/003/2024', '2024-11-08', 'cdcfs', 'memo', '12345', '12345', 'attachments', 'consider', 'brian', '2024-11-11', NULL, 'gitahi', 'received', '2024-11-08 12:35:16'),
(4, 'ODPP/004/2024', '2024-11-08', 'cdcfs', 'memo', '12345', '12345', 'attachments', 'consider', 'brian', '2024-11-11', NULL, 'gitahi', 'received', '2024-11-08 12:35:22'),
(5, 'ODPP/005/2024', '2024-11-08', 'cdcfs', 'memo', '12345', '12345', 'attachments', 'eeee', 'brian', '2024-11-09', NULL, 'gitahi', 'eeee', '2024-11-08 13:42:37'),
(6, 'ODPP/006/2024', '2024-11-11', 'cdcfs', 'memo', '12345', '12345', 'internships', 'herer', 'brian', '2024-11-12', NULL, 'gitahi', 'gdggdg', '2024-11-11 07:26:08'),
(7, 'ODPP/007/2024', '2024-11-11', 'cdcfs', 'memo', '12345', '12345', 'internships', 'herer', 'brian', '2024-11-12', NULL, 'gitahi', 'gdggdg', '2024-11-11 07:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'mmuthomibrian@gmail.com', '$2y$10$TM8yATd7xGchduC07/9zveCqEvEeS/e75wISk9f2mPrkVAhbeIgWC', '2024-11-08 05:47:17'),
(2, 'mutwiri002.brian@gmail.com', '$2y$10$I03MestwUnpvq06AfdAcROwFD4xmgPqCaVy2Ch6gVhtchWq4wojZq', '2024-11-08 09:10:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
