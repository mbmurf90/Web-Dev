-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 07:26 PM
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
-- Table structure for table `Sans_Ans`
--

CREATE TABLE `Sans_Ans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `q_num` int(11) NOT NULL,
  `is_right` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sans_Ans`
--

INSERT INTO `Sans_Ans` (`id`, `q_num`, `is_right`, `text`) VALUES
(1, 1, 1, 'Ustrasana'),
(2, 1, 0, 'Supta Virasana'),
(3, 1, 0, 'Balasana'),
(4, 1, 0, 'Eka Pada Setu Bandhasanasana'),
(5, 1, 0, 'Salamba Sarvangasana'),
(6, 2, 0, 'Salamba Sarvangasana'),
(7, 2, 1, 'Ardha Padmasana'),
(8, 2, 0, 'Supta Virasana'),
(9, 2, 0, 'Ustrasana'),
(10, 2, 0, 'Eka Pada Setu Bandhasanasana'),
(11, 3, 0, 'Tadasana'),
(12, 3, 0, 'Halasana'),
(13, 3, 0, 'Supta Konasana'),
(14, 3, 0, 'Matsyasana'),
(15, 3, 1, 'Trikonasana'),
(16, 4, 0, 'Tadasana'),
(17, 4, 0, 'Uttanasana'),
(18, 4, 1, 'Paschimottasana'),
(19, 4, 0, 'Dandasana'),
(20, 4, 0, 'Ardha Uttanasana'),
(21, 5, 0, 'Kalasana'),
(22, 5, 1, 'Upavistha Konasana'),
(23, 5, 0, 'Sirsana'),
(24, 5, 0, 'Supta Virsana'),
(25, 5, 0, 'Balasana'),
(26, 6, 0, 'Balasana'),
(27, 6, 0, 'Navasana'),
(28, 6, 1, 'Raja Kapotasana'),
(29, 6, 0, 'Vrisikasanna'),
(30, 6, 0, 'Sirsanna'),
(31, 7, 0, 'Sirsanna'),
(32, 7, 0, 'Navasana'),
(33, 7, 0, 'Balasana'),
(34, 7, 0, 'Vrisiksanna'),
(35, 7, 1, 'Utkatasana'),
(36, 8, 0, 'Sirsanna'),
(37, 8, 0, 'Utkatasana'),
(38, 8, 1, 'Akarna Dhanurasana'),
(39, 8, 0, 'Balasana'),
(40, 8, 0, 'Vrisikasana'),
(41, 9, 1, 'Halasana'),
(42, 9, 0, 'Raja Kapotasana'),
(43, 9, 0, 'Ustrasana'),
(44, 9, 0, 'Navasana'),
(45, 9, 0, 'Vrksasana'),
(46, 10, 0, 'Balasana'),
(47, 10, 0, 'Sirsasana'),
(48, 10, 0, 'Supta Virasana'),
(49, 10, 1, 'Upavistha Konasana'),
(50, 10, 0, 'Utkatasana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Sans_Ans`
--
ALTER TABLE `Sans_Ans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Sans_Ans`
--
ALTER TABLE `Sans_Ans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;