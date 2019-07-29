-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2019 at 04:48 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(5, 2, 'Javascript(updated)', 'Javascript', '2019-06-28 05:48:03'),
(6, 2, 'Php', 'Php is the light and easiest coding(updated)', '2019-06-28 05:49:12'),
(7, 2, 'React', 'React js was invented by Mark(updated)', '2019-06-28 17:15:47'),
(9, 2, 'demo1', 'demo1', '2019-06-29 15:56:46'),
(10, 2, 'demo2', 'demo2\r\n', '2019-06-29 15:56:58'),
(11, 2, 'demo3', 'demo3', '2019-06-29 15:57:08'),
(12, 2, 'demo4', 'demo4', '2019-06-29 15:57:25'),
(13, 2, 'demo5', 'demo5', '2019-06-29 15:57:34'),
(14, 2, 'demo6', 'demo6', '2019-06-29 15:57:43'),
(15, 2, 'demo7', 'demo7', '2019-06-29 15:57:53'),
(16, 2, 'demo8', 'demo8', '2019-06-29 15:58:08'),
(17, 2, 'demo9', 'demo9', '2019-06-29 15:58:19'),
(18, 2, 'demo10', 'demo10', '2019-06-29 15:58:32'),
(19, 2, 'Naveen', 'Naveen', '2019-07-03 05:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `due_date` date DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `task_name`, `task_body`, `due_date`, `date_created`) VALUES
(1, 1, 'Oops updated', 'Oops is must to write a code', '2019-06-07', '2019-06-27 09:51:23'),
(2, 3, 'Oops', 'Hello Oops', '2019-06-21', '2019-06-27 11:05:58'),
(3, 1, 'Oops afds', 'Oops is must to write a code', '2019-06-07', '2019-06-27 12:08:03'),
(4, 2, 'Oops 5555555555', 'Hello Oops', '2019-06-21', '2019-06-27 12:09:24'),
(5, 1, 'Oops 11111111111111', 'Oops is must to write a code', '2019-06-07', '2019-06-27 12:10:27'),
(6, 1, 'Oops', 'Oops is must to write a code', '2019-06-07', '2019-06-27 12:19:34'),
(7, 1, 'Oops 777777', 'Oops is must to write a code', '2019-06-07', '2019-06-27 12:22:38'),
(8, 5, '', '', '0000-00-00', '2019-06-30 06:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `regdate`) VALUES
(1, 'Alex', 'Naveen', 'alex@gmail.com', 'alex', '$2y$12$XRbiozTusS27OEMbDWNlRukBkXa5onl5QClVASTlcIEVSaDEgW7PG', '2019-07-01 14:51:53'),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin', '$2y$12$FTAQ1.3Isj5hQRz9T8Zf4.nAqCkicTUp2FQBAiKVu4RI5FHE3FnIC', '2019-06-24 14:51:53'),
(3, 'naveen', 'naveen', 'naveen@gmail.com', 'naveen', 'naveen123', '2019-06-11 14:51:53'),
(4, 'george', 'george', 'george@gmail.com', 'george', 'george123', '2019-06-29 14:51:53'),
(5, 'juhin', 'raja', 'juhin@gmail.com', 'juhin', 'juhin123', '2019-06-02 14:51:53'),
(6, 'rohit', 'rohit', 'rohit@gmail.com', 'rohit', 'rohit123', '2019-06-29 14:51:53'),
(7, 'juhin', 'raja', 'raja@gmail.com', 'raja', '$2y$12$6lWF2EFJ9dv9cEBUIyx3zOFdqDwx0s7agijwktzPsO5/6rDI964Ku', '2019-06-30 14:51:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
