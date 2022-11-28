-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 06:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `state` enum('Alabama','Alaska','Arizona','Arkansas') NOT NULL,
  `status` varchar(5) NOT NULL,
  `type` enum('Business Credit Builder','Direct Funding','','') NOT NULL,
  `date_join` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `email`, `phonenum`, `state`, `status`, `type`, `date_join`) VALUES
(1, 'Test', 'Client', 'Test Client', '12345', 'Alabama', '1', 'Business Credit Builder', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `refer_user`
--

CREATE TABLE `refer_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `refcode` varchar(20) DEFAULT NULL,
  `reflink` varchar(255) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refer_user`
--

INSERT INTO `refer_user` (`id`, `firstname`, `lastname`, `email`, `refcode`, `reflink`, `status`, `date_added`) VALUES
(4, 'Test7xkgxx', 'Test7xkgxx', 'Test7xkgxx@moneymcs.com', 'mGa7XKgXX', 'http://localhost/moneymcs/createref.php?referral=mGa7XKgXX', '1', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `filenames` text NOT NULL,
  `resources` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `filenames`, `resources`, `category`, `type`, `status`, `date_added`) VALUES
(22, 'Test.txt', 'Test', 'Sales Resources', 'text/plain', 1, '0000-00-00'),
(23, 'Test.pptx', 'PP', 'Sales Resources', 'application/vnd.openxmlformats-officedocument.pres', 1, '0000-00-00'),
(27, 'sample.png', 'Test banner', 'Banners', 'image/png', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `resources_type`
--

CREATE TABLE `resources_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources_type`
--

INSERT INTO `resources_type` (`id`, `type`, `status`, `date_added`) VALUES
(1, '.JPEG or .JPG', '1', '2022-11-10'),
(2, '.GIF', '1', '2022-11-10'),
(3, '.SVG', '1', '2022-11-10'),
(4, '.PNG', '1', '2022-11-10'),
(5, '.TIFF or .TIF', '1', '2022-11-10'),
(6, '.PDF', '1', '2022-11-10'),
(7, '.DOC or .DOCX', '1', '2022-11-10'),
(8, '.XLS or .XLSX', '1', '2022-11-10'),
(9, '.TXT', '1', '2022-11-10'),
(10, '.MP4', '1', '2022-11-10'),
(11, '.AVI', '1', '2022-11-10'),
(12, '.PPT or .PPTX', '1', '2022-11-10'),
(13, '.HTML', '1', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `resource_category`
--

CREATE TABLE `resource_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resource_category`
--

INSERT INTO `resource_category` (`id`, `category`, `status`, `date_added`) VALUES
(1, 'Sales Resources', '1', '2022-11-09'),
(7, 'Contracts and Agreements', '1', '0000-00-00'),
(8, 'Finance Resources', '1', '0000-00-00'),
(9, 'Marketing Emails', '1', '0000-00-00'),
(10, 'Marketing Flyers', '1', '0000-00-00'),
(11, 'Marketing Powerpoints', '1', '0000-00-00'),
(12, 'Marketing Social Media', '1', '0000-00-00'),
(13, 'All Marketing Videos', '1', '0000-00-00'),
(14, 'Marketing Website Template', '1', '0000-00-00'),
(15, 'Marketing Ebooks', '1', '0000-00-00'),
(16, 'Marketing Press Releases', '1', '0000-00-00'),
(17, 'Banners', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `totalp` varchar(10) NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `paypal_subsid` varchar(50) NOT NULL,
  `subs_name` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `date_added` date NOT NULL,
  `date_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `totalp`, `pay_id`, `trans_id`, `paypal_subsid`, `subs_name`, `status`, `date_added`, `date_expired`) VALUES
(35, 11, '599.00', '', '7RD35808GF717222C', '', 'Pro Membership - Monthly', 0, '2022-11-22', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `training_category`
--

CREATE TABLE `training_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_category`
--

INSERT INTO `training_category` (`id`, `category`, `date_added`) VALUES
(1, 'January Courses', '0000-00-00'),
(2, 'February Courses', '0000-00-00'),
(3, 'March Courses', '0000-00-00'),
(4, 'April Courses', '0000-00-00'),
(5, 'May Courses', '0000-00-00'),
(6, 'June Courses', '0000-00-00'),
(7, 'July Courses', '0000-00-00'),
(8, 'August Courses', '0000-00-00'),
(9, 'September Courses', '0000-00-00'),
(10, 'October Courses', '0000-00-00'),
(11, 'November Courses', '0000-00-00'),
(12, 'December Courses', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `training_resources`
--

CREATE TABLE `training_resources` (
  `id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(10) NOT NULL,
  `features` varchar(250) NOT NULL,
  `filenames` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_resources`
--

INSERT INTO `training_resources` (`id`, `course_name`, `category`, `description`, `price`, `features`, `filenames`, `type`, `status`) VALUES
(1, 'ITIN', 'January Courses', 'Objective(s):\r\nThis course provides comprehensive tax preparer training on the specifics of dealing with non-citizen taxpayers and their tax identification numbers, or ITINs (Individual Taxpayer Identification Numbers).', '299.00', ' Includes: Online system training\r\n 3 hours (online classes)\r\n Certification Acceptance Agent\r\n Book:\r\n Language:', 'itintax.jpeg', 'image/jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `id` int(11) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `commission` float NOT NULL,
  `wallet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `regcode` varchar(50) NOT NULL,
  `moneymcid` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `level` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL,
  `last_login` date NOT NULL,
  `ip` varchar(50) NOT NULL,
  `last_login_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regcode`, `moneymcid`, `email`, `password`, `type`, `level`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `last_login`, `ip`, `last_login_ip`) VALUES
(1, 'mGa7XKgXX', '', 'admin@admin.com', '$2y$10$9TyuvDQNLvO0TJ7YOFB9OuM08Ud2eP1dxxWnSCOkeApePr4M7suWu', 1, 'Agent', 'RJ', 'Gonato', '', '', '5.png', 1, '', '3Qg6AIKEkGSDyUP', '2022-10-27', '2022-11-27', '', '::1'),
(14, 'mGa7XKgFSv5NJp9', '26435', 'Test15@Test15.com', '$2y$10$tmVerDI3/jN71V6HUjn8o.4yiU5pQ7JmT3NaK8egpkMnri1W.efr2', 1, '', 'Test15', 'Test15', '', '', '', 1, '', '', '2022-11-01', '0000-00-00', '::1', ''),
(15, 'mGa7XKgXX', '', 'sadmin@sadmin.com', '$2y$10$Rc6lsESCDG9Vf.Vf2.Nm/OXA92RoC9pM1FWLbnLwuvoEQZGvzSrWS', 0, 'Super User', 'System', 'U', '', '', 'defaultx.jpg', 1, '', '3Qg6AIKEkGSDyUP', '2022-10-27', '2022-11-27', '', '::1'),
(16, 'DtVl1vxiLw7ufnm', '34810', 'rtes@ad.com', '$2y$10$nAKIjGJLbBGHGH1hTFvRkOEjdr5TrXymM.oHwVtmmWOxOFZ8CpoTy', 1, '', 'rtes', 'rtes', '', '343sd', '', 1, '', '', '2022-11-07', '0000-00-00', '::1', ''),
(17, 'ujE4i32UQ9BkgpA', '81297', 'TestMGA7@moneymcs.com', '$2y$10$me0D7J.2Q7kuyaBarD7UxOA4zi0y1p6vKwFBk6wTJOreVF0jB0htu', 1, '', 'TestMGA7', 'TestMGA7', '', '091111111', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', ''),
(18, '9e4j7FOs6ikmZlG', '53148', 'Testrefmga7@moneymcs.com', '$2y$10$G.o.1NjZuDDUWftNzgpZT.MSxePfdcyn2IF6Fgg.14HG1VNSJ41rq', 1, '', 'Testrefmga7', 'Testrefmga7', '', '010101111010', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', ''),
(19, 'ukeqcWfNVjv4abs', '41962', 'Testrefmga7x@moneymcs.com', '$2y$10$M8Oz95iGYe1Qi6./Yjx/9OKIfqJ.7iYcVBRArefwCl67toYaHacHW', 1, '', 'Testrefmga7x', 'Testrefmga7x', '', '091000000212', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', ''),
(20, 'BdCWQwr2TPnmziU', '59302', 'Testlocalmga7@moneymcs.com', '$2y$10$B.2/dbMF0ejRJaHSWnqhIObq0zU5LwuKK1t670s.JctxUA6jZIkHu', 1, '', 'Testlocalmga7', 'Testlocalmga7', '', '0910000221', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', ''),
(21, 'qsYFDrKIZL2balQ', '67593', 'Testxxmga7@moneymcs.com', '$2y$10$hUKfZLxRKV0jtgJ2A.HIpO2tZnhsY4JCE1uvfoqwgO2w3UXXORTYa', 1, '', 'Testxxmga7', 'Testxxmga7', '', '091111215212', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', ''),
(22, 'bixDztJKsOFfX2W', '45638', 'Test7xkgxx@moneymcs.com', '$2y$10$aS6MKsIFCRRdAsOLtABy4.KOCUx5fQyQuGmk9c.jF3IRc9K0Vue3u', 1, '', 'Test7xkgxx', 'Test7xkgxx', '', '0641211212', '', 1, '', '', '2022-11-14', '0000-00-00', '::1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refer_user`
--
ALTER TABLE `refer_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources_type`
--
ALTER TABLE `resources_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_category`
--
ALTER TABLE `resource_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_category`
--
ALTER TABLE `training_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_resources`
--
ALTER TABLE `training_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_type`
--
ALTER TABLE `transaction_type`
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
-- AUTO_INCREMENT for table `refer_user`
--
ALTER TABLE `refer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `resources_type`
--
ALTER TABLE `resources_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `resource_category`
--
ALTER TABLE `resource_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `training_category`
--
ALTER TABLE `training_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `training_resources`
--
ALTER TABLE `training_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
