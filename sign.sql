-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 31, 2023 at 11:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `name` varchar(255) NOT NULL,
  `location` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`name`, `location`) VALUES
('A.jpg', 0x75706c6f61642f),
('B.jpg', 0x75706c6f61642f),
('C.jpg', 0x75706c6f61642f),
('D.jpg', 0x75706c6f61642f),
('E.jpg', 0x75706c6f61642f),
('F.jpg', 0x75706c6f61642f),
('G.jpg', 0x75706c6f61642f),
('H.jpg', 0x75706c6f61642f),
('I.jpg', 0x75706c6f61642f),
('J.jpg', 0x75706c6f61642f),
('K.jpg', 0x75706c6f61642f),
('L.jpg', 0x75706c6f61642f),
('M.jpg', 0x75706c6f61642f),
('N.jpg', 0x75706c6f61642f),
('nothing.jpg', 0x75706c6f61642f),
('O.jpg', 0x75706c6f61642f),
('P.jpg', 0x75706c6f61642f),
('Q.jpg', 0x75706c6f61642f),
('R.jpg', 0x75706c6f61642f),
('S.jpg', 0x75706c6f61642f),
('T.jpg', 0x75706c6f61642f),
('U.jpg', 0x75706c6f61642f),
('V.jpg', 0x75706c6f61642f),
('W.jpg', 0x75706c6f61642f),
('X.jpg', 0x75706c6f61642f),
('Y.jpg', 0x75706c6f61642f),
('Z.jpg', 0x75706c6f61642f),
('0.JPG', 0x75706c6f61642f),
('1.jpg', 0x75706c6f61642f),
('2.jpg', 0x75706c6f61642f),
('3.jpg', 0x75706c6f61642f),
('4.jpg', 0x75706c6f61642f),
('5.jpg', 0x75706c6f61642f),
('6.jpg', 0x75706c6f61642f),
('7.jpg', 0x75706c6f61642f),
('8.jpg', 0x75706c6f61642f),
('9.jpg', 0x75706c6f61642f),
('0.JPG', 0x75706c6f61642f);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `Upassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `email`, `Upassword`) VALUES
('sanjida akter', 'samnjidasamanta277@gmail.com', '12345'),
('sariful habib', 'abc@gmail.com', 'dhrubo'),
('Sumaiya begum', 'sumaiya@gmail.com', 'binte'),
('Mehedi hasan', 'mehedirafi@gmail.com', 'r@fi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
