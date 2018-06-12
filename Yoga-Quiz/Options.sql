-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 07:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assignment_Yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `Options`
--

CREATE TABLE `Options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `q_num` int(11) NOT NULL,
  `is_right` int(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Options`
--

INSERT INTO `Options` (`id`, `q_num`, `is_right`, `text`) VALUES
(1, 1, 1, 'Camel Flow'),
(2, 1, 0, 'Downward Dog'),
(3, 1, 0, 'Half Loftus'),
(4, 1, 0, 'Plough Flow'),
(5, 1, 0, 'Vinyasa Split'),
(6, 2, 0, 'Downward Dog'),
(7, 2, 1, 'Half Loftus'),
(8, 2, 0, 'Camel Flow'),
(9, 2, 0, 'Inner Groin'),
(10, 2, 0, 'Hero to Pigeon'),
(12, 3, 0, 'Hero to Pigeon'),
(13, 3, 0, 'Vinyasa Split'),
(14, 3, 0, 'Down to Earth Hips'),
(15, 3, 0, 'Camel Flow'),
(16, 3, 1, 'Triangle to Warrior'),
(17, 4, 0, 'Half Loftus'),
(18, 4, 0, 'Camel Flow'),
(19, 4, 1, 'Side Shoulderstand'),
(20, 4, 0, 'Triangle to Warrior'),
(21, 4, 0, 'Down to Earth Hips'),
(22, 5, 0, 'Side Shoulderstand'),
(23, 5, 1, 'Vinyasa Split'),
(24, 5, 0, 'Downward Dog'),
(25, 5, 0, 'Hero to Pigeon'),
(26, 5, 0, 'Half Loftus'),
(27, 6, 0, 'Camel Flow'),
(28, 6, 0, 'Triangle to Warrior'),
(29, 6, 1, 'Hero to Pigeon'),
(30, 6, 0, 'Groin Opening to Cat'),
(31, 6, 0, 'Down to Earth Hips'),
(32, 7, 0, 'Half Loftus'),
(33, 7, 0, 'Camel Flow'),
(34, 7, 0, 'Hero to Pigeon'),
(35, 7, 0, 'Plough Flow'),
(36, 7, 1, 'Down to Earth Hips'),
(37, 8, 0, 'Side Shoulderstand'),
(38, 8, 0, 'Plough Flow'),
(39, 8, 1, 'Groin Opening to Cat'),
(40, 8, 0, 'Downward Dog'),
(41, 8, 0, 'Hero to Pigeon'),
(42, 9, 1, 'Plough Flow'),
(43, 9, 0, 'Camel Flow'),
(44, 9, 0, 'Half Loftus'),
(45, 9, 0, 'Triangle to Warrior'),
(46, 9, 0, 'Down to Earth Hips'),
(47, 10, 0, 'Vinyasa Split'),
(48, 10, 0, 'Groin Opening to Cat'),
(49, 10, 0, 'Half Loftus'),
(50, 10, 1, 'Inner Groin'),
(51, 10, 0, 'Plough Flow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Options`
--
ALTER TABLE `Options`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Options`
--
ALTER TABLE `Options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;