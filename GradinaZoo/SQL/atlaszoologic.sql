-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2022 at 10:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlaszoologic`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `class`, `description`) VALUES
(1, 'name1', 'class1', 'description1'),
(2, 'name2', 'class2', 'description2'),
(3, 'Name', 'Class', 'bvhjbjknk'),
(4, 'name4', 'class4', 'description4'),
(5, 'name5', 'class5', 'description5');

-- --------------------------------------------------------

--
-- Table structure for table `persoane`
--

CREATE TABLE `persoane` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persoane`
--

INSERT INTO `persoane` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(6, 'admin', 'admin', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `comment`, `date`) VALUES
(16, 'webdev', 'My first comment ', '2022-06-14 11:19:00'),
(18, 'admin', 'welcome to my website', '2022-06-15 11:16:24'),
(24, 'admin', 'hello', '2022-06-19 20:15:34');

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `date` date NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `ticket` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persoane`
--
ALTER TABLE `persoane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `persoane`
--
ALTER TABLE `persoane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

CREATE TABLE `wanimals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sci_name` varchar(100) NOT NULL,
  `xml_file` varchar(100) NOT NULL,
  `main_image_file` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  UNIQUE(sci_name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  UNIQUE(animal_id,type,value)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `wanimals`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `wanimals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
ALTER TABLE `attributes`
  ADD FOREIGN KEY (`animal_id`) REFERENCES `wanimals`(`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
