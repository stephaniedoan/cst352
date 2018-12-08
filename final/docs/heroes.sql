-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2018 at 06:52 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `Superheroes`
--

CREATE TABLE `Superheroes` (
  `hero_id` tinyint(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `powers` varchar(1000) NOT NULL,
  `race` varchar(1000) NOT NULL,
  `universe` varchar(1000) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Superheroes`
--

INSERT INTO `Superheroes` (`hero_id`, `name`, `fullName`, `powers`, `race`, `universe`, `bio`, `img`) VALUES
(1, 'Spider-Man', 'Peter Parker', '1', '1', '1', '', 'https://cdn.vox-cdn.com/thumbor/yvewlXndhBYW1xl690fF9HclFHg=/0x0:1800x2651/1200x800/filters:focal(738x1398:1026x1686)/cdn.vox-cdn.com/uploads/chorus_image/image/60074609/SGEDDON2018000cov.0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `Villians`
--

CREATE TABLE `Villians` (
  `villian_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `powers` varchar(1000) NOT NULL,
  `race` varchar(1000) NOT NULL,
  `universe` varchar(1000) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Superheroes`
--
ALTER TABLE `Superheroes`
  ADD PRIMARY KEY (`hero_id`),
  ADD KEY `hero_id` (`hero_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `Villians`
--
ALTER TABLE `Villians`
  ADD PRIMARY KEY (`villian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Superheroes`
--
ALTER TABLE `Superheroes`
  MODIFY `hero_id` tinyint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Villians`
--
ALTER TABLE `Villians`
  MODIFY `villian_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
