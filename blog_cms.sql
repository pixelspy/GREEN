-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2017 at 11:49 AM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_users`
--

CREATE TABLE `new_users` (
  `n_usr_id` int(11) NOT NULL,
  `n_usr_name` varchar(32) NOT NULL,
  `usr_email` varchar(128) NOT NULL,
  `n_usr_password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_users`
--

INSERT INTO `new_users` (`n_usr_id`, `n_usr_name`, `usr_email`, `n_usr_password`) VALUES
(1, 'olivia', 'olive.ju@go.co', 'jana'),
(2, 'mahanad', 'boudinette@g.co', 'soleil'),
(3, 'maa', 'maa.de@g.cop', 'soso'),
(4, 'maalouise', 'md@gf.ce', 'soso'),
(6, 'ahmadou', 'fefefefefe', 'zebra'),
(7, 'mahana', 'dzdz', 'dzdz'),
(14, 'caro', 'rere', 'rere'),
(15, 'ferara', 'ee', 'ee'),
(16, 'amo', 'rjekfhzerjkhf', 'fff'),
(17, 'pierre', 'pierreg@gmail.com', 'fdfdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `post_articles`
--

CREATE TABLE `post_articles` (
  `art_id` int(11) NOT NULL,
  `art_title` text NOT NULL,
  `art_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_articles`
--

INSERT INTO `post_articles` (`art_id`, `art_title`, `art_content`) VALUES
(1, 'test', 'test article'),
(3, 'dgehjzdgzehjy', 'egzehjygfhjg'),
(4, 'Aloe Vera is great!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Flowers', 'Flowers are amazing\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(9, 'Cactus', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(10, 'Amazing trees!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(13, 'Bushes', 'i love them'),
(16, 'L\'eau pour vos plantes', 'Yes! c\'est génial'),
(17, 'Cactus plantés', 'c est super'),
(18, 'Superbes arbres', 'love it'),
(20, 'j\'adore les sprouts', 'love'),
(21, 'Roses', 'C est beau'),
(22, 'J\'adore les plants de chanvre', 'tututu'),
(23, 'Passiflore', 'C\'est ma fleur préféré . Ca sent bon et ç\'est beau surtout!'),
(24, 'Catus jardore', 'fgdfdsfdsdsf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_password` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_password`) VALUES
(1, 'mahana', 'soleil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_users`
--
ALTER TABLE `new_users`
  ADD PRIMARY KEY (`n_usr_id`),
  ADD UNIQUE KEY `usr_name` (`n_usr_name`),
  ADD UNIQUE KEY `usr_email` (`usr_email`);

--
-- Indexes for table `post_articles`
--
ALTER TABLE `post_articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_users`
--
ALTER TABLE `new_users`
  MODIFY `n_usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `post_articles`
--
ALTER TABLE `post_articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
