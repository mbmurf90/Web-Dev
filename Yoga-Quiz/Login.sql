-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 07:24 PM
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
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Name` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Name`, `Password`) VALUES
('Jim', 'hello'),
('Hank', 'test'),
('', ''),
('David', 'yeow'),
('', ''),
('Lynn', 'hello'),
('Jimmy', 'hello'),
('Conor', 'test'),
('Tom', 'trying'),
('Alan', 'yup'),
('Sean', 'aa'),
('John', 'jim'),
('Bob', 'Jim'),
('Harry', 'po'),
('Peter', 'h'),
('Mike', 'mo'),
('Seamus', 'howdo'),
('Harry', 'hn'),
('Eoin', 'hna'),
('Ronald', 'mcd'),
('Eoin', 'nc'),
('Eoin', 'ngha'),
('Mark', 'hello'),
('Mark', 'buttons'),
('Stephen', 'buttons'),
('Markus', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;