-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 02:29 PM
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
(1, 1, '99', '', '0XL33348SU588552X 	', 'test', 'MoneyMCS', 1, '2022-10-27', '2022-11-27'),
(2, 1, '', '', '38161309YB416802W', '', '', 0, '2022-10-28', '0000-00-00'),
(3, 0, '', '', '2TF942302H4710057', '', '', 0, '2022-10-28', '0000-00-00'),
(4, 1, '', '', '7L701098016331209', '', '', 0, '2022-10-28', '0000-00-00'),
(5, 1, '', '', '03N80599JX471754M', '', '', 0, '2022-10-28', '0000-00-00'),
(6, 1, '', '', '85K85413D5211631D', '', '', 0, '2022-10-28', '0000-00-00'),
(7, 1, '', '', '20F5604807527594Y', '', '', 0, '2022-10-29', '0000-00-00'),
(8, 1, '', '', '7W10836811212620Y', '', '', 0, '2022-10-29', '0000-00-00'),
(9, 1, '5', '', '5P400132WJ688002L', '', '', 0, '2022-10-29', '0000-00-00'),
(10, 1, '5', '', '5P400132WJ688002L', '', '', 0, '2022-10-29', '0000-00-00'),
(11, 1, '5', '', '5P400132WJ688002L', '', '', 0, '2022-10-29', '0000-00-00'),
(12, 1, '', '', '97185419LE802045E', '', '', 0, '2022-10-29', '0000-00-00'),
(13, 1, '', '', '7T939541CN791084K', '', '', 0, '2022-10-29', '0000-00-00'),
(14, 1, '', '', '6DT30781LN580980J', '', '', 0, '2022-10-29', '0000-00-00'),
(15, 1, '99.00', '', '6DU99001A05684845', '', '', 0, '2022-10-29', '0000-00-00'),
(16, 1, '99.00', '', '3RC63753C9719243T', '', '', 0, '2022-10-29', '0000-00-00');

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
(1, '', '', 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Member', 'RJ', 'Gonato', '', '', '', 1, '', '3Qg6AIKEkGSDyUP', '2022-10-27', '0000-00-00', '', ''),
(14, 'mGa7XKgFSv5NJp9', '26435', 'Test15@Test15.com', '$2y$10$tmVerDI3/jN71V6HUjn8o.4yiU5pQ7JmT3NaK8egpkMnri1W.efr2', 1, '', 'Test15', 'Test15', '', '', '', 1, '', '', '2022-11-01', '0000-00-00', '::1', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
