-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 07:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project200`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE `tbl_website` (
  `username` varchar(250) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `passwords` varchar(30) DEFAULT NULL,
  `DOC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DOM` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`username`, `number`, `email`, `birthday`, `passwords`, `DOC`, `DOM`) VALUES
('Jamil Rabbii', '01771880355', 'jamil.rabbii@gmail.com', '2017-12-07', '12345', '2017-12-06 18:52:18', NULL),
('Amitav Debnath', '01771232132', 'tablet@gmail.com', '1996-04-06', '12345', '2017-12-06 18:56:37', NULL),
('Jamil Rabbii', '017756222', 'amran@gmail.com', '2017-05-15', '12345', '2017-12-09 15:23:27', NULL),
('Amran Metro', '01866749596', 'kaziamran4@gmail.com', '1995-08-12', '12345', '2017-12-09 15:31:26', NULL),
('misfack', '017625311513', 'misfak@gmail.com', '2017-05-15', '12345', '2017-12-10 07:04:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
