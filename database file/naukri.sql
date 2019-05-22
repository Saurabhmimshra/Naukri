-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2019 at 08:07 PM
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
-- Database: `naukri`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`) VALUES
(12, 1, 2),
(13, 1, 3),
(14, 1, 1),
(15, 5, 3),
(16, 5, 2),
(17, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `education` varchar(200) NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `password`, `education`, `mobile`) VALUES
(1, 'Saurabh Mishra', 'saurabhmimshra@gmail.com', 'dosomething', 'b.tech.', '9891496927'),
(3, 'Saurabh Mishra', 'saurabhmimsra@gmail.com', '123456789', 'dfasdgsg', '9891496927'),
(4, 'Saurabh Mishra', 'shmimsra@gmail.com', '1234567890', 'dfasdgsg', '9891496927'),
(5, 'Mausam', 'mausam.awesome4@gmail.com', 'qwerty', 'kjflkasjflkjdl', '9891496927'),
(6, 'testtest', 'abc@gmail.com', 'hello', 'B.Sc.', '9876543210'),
(7, 'Saurabh Mishra', 'shra@gmail.com', 'qwerty', 'fklsajlkjasklfdj', '9891496927'),
(8, 'fjaslkjfslkj', 'jfksaj@gmai.com', '852456', 'dfdjkashfkjsfa', '9891496927'),
(9, 'Abcd Abcd', 'abc@abc.com', 'abcdefg', 'abcsdd', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `qualifications` varchar(300) NOT NULL,
  `experience` int(11) NOT NULL,
  `location` varchar(300) NOT NULL,
  `skills` varchar(300) NOT NULL,
  `recid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `qualifications`, `experience`, `location`, `skills`, `recid`) VALUES
(1, 'Software Developer', 'B.Tech. ,  M.Tech.', 2, 'Delhi, Mumbai', 'C, C++, Java', 3),
(2, 'Web Developer', 'B.Tech. ,  M.Tech., BE', 3, 'Pune, Delhi', 'PHP', 3),
(3, 'klfjlakj', 'fjalskjflk', 6, 'kdfjlksajlk', 'adfksalkjdf ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `email`, `password`, `cname`, `name`, `designation`, `address`, `mobile`) VALUES
(1, 'test@test.com', 'testpass', 'Test Pvt. Ltd.', 'Test Sharma', 'Founder', 'Test No : 45, Test Vihar, Test', '9876543210'),
(3, 'saurabhmimshra@gmail.com', 'qwerty', 'my company', 'Saurabh Mishra', 'Manager', 'E - 140, Krishan Vihar', '9891496927'),
(4, 'jfkljsaf@kkjflkasj.com', '852456', 'fjaslkjf lksa', 'kjflkasj f', 'lakjflksj adfajl', 'skdf alskjfklj', '1564654646');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
