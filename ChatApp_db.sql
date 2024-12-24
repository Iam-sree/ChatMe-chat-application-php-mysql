-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 03:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `reciever_id` int(20) NOT NULL,
  `sent_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `message`, `sender_id`, `reciever_id`, `sent_on`) VALUES
(63, 'hey max!', 20, 21, '2020-06-28 23:25:49'),
(64, 'hello tf', 20, 22, '2020-06-28 23:26:10'),
(65, 'hey hey hey!', 21, 20, '2020-06-28 23:26:36'),
(66, 'yow!', 21, 23, '2020-06-28 23:26:43'),
(67, ':D', 21, 22, '2020-06-28 23:26:48'),
(68, 'hey max ', 23, 21, '2020-06-28 23:27:44'),
(69, 'hahahah ', 23, 20, '2020-06-28 23:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat_users`
--

CREATE TABLE `tbl_chat_users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat_users`
--

INSERT INTO `tbl_chat_users` (`user_id`, `fname`, `lname`, `username`, `password`, `profile_image`) VALUES
(20, 'alj', 'code', 'al', '123', 'uploads/vector.jpg'),
(21, 'max', 'payne', 'max', '123', 'uploads/max.png'),
(22, 'twisted', 'fate', 'tf', '123', 'uploads/tf.jpg'),
(23, 'alexander', 'hamilton', 'alex', '123', 'uploads/6b4caa5e-0b89-11ea-bf03-06551cb39bc6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_chat_users`
--
ALTER TABLE `tbl_chat_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_chat_users`
--
ALTER TABLE `tbl_chat_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
