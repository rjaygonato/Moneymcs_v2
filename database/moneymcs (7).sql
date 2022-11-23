-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 07:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
  `type` enum('Business Credit Builder','Direct Funding','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `email`, `phonenum`, `state`, `type`) VALUES
(1, 'Rex John', 'Aban', 'rexaban.vaprocareers@gmail.com', '09123456789', 'Alabama', 'Business Credit Builder');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, 0, '99.00', '', '4DX37952TC4956155', '', '', 1, '2022-11-03', '0000-00-00');

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
(1, 'mGa7XKgXX', '', 'admin@admin.com', '$2y$10$Rc6lsESCDG9Vf.Vf2.Nm/OXA92RoC9pM1FWLbnLwuvoEQZGvzSrWS', 1, 'Agent', 'RJ', 'Gonato', '', '', 'testimonials-5.jpg', 1, '', '3Qg6AIKEkGSDyUP', '2022-10-27', '2022-11-08', '', '::1'),
(14, 'mGa7XKgFSv5NJp9', '26435', 'Test15@Test15.com', '$2y$10$tmVerDI3/jN71V6HUjn8o.4yiU5pQ7JmT3NaK8egpkMnri1W.efr2', 1, '', 'Test15', 'Test15', '', '', '', 1, '', '', '2022-11-01', '0000-00-00', '::1', ''),
(15, 'mGa7XKgXX', '', 'sadmin@sadmin.com', '$2y$10$Rc6lsESCDG9Vf.Vf2.Nm/OXA92RoC9pM1FWLbnLwuvoEQZGvzSrWS', 0, 'Super User', 'System', 'U', '', '', 'defaultx.jpg', 1, '', '3Qg6AIKEkGSDyUP', '2022-10-27', '2022-11-07', '', '::1'),
(16, 'DtVl1vxiLw7ufnm', '34810', 'rtes@ad.com', '$2y$10$nAKIjGJLbBGHGH1hTFvRkOEjdr5TrXymM.oHwVtmmWOxOFZ8CpoTy', 1, '', 'rtes', 'rtes', '', '343sd', '', 1, '', '', '2022-11-07', '0000-00-00', '::1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
