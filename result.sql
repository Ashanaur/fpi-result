-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 09:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_db`
--

CREATE TABLE `result_db` (
  `id` int(11) NOT NULL,
  `db_session` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `db_semester` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `db_shift` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `db_roll` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `db_gpa` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result_db`
--

INSERT INTO `result_db` (`id`, `db_session`, `db_semester`, `db_shift`, `db_roll`, `db_gpa`, `created`) VALUES
(21, '2017-18', '2', 'S', '346555', '3.89', '2019-04-17 07:22:02'),
(22, '2017-18', '2', '1', '346439', '3.80', '2019-04-17 07:23:14'),
(27, '2019-20', '1', '1', '346581', '3.82', '2019-04-17 07:29:03'),
(28, '2017-18', '1', '1', '234567', '3.89', '2019-04-17 07:32:10'),
(30, '2016-17', '2', '1', '346544', '3.52', '2019-04-17 07:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result_db`
--
ALTER TABLE `result_db`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_roll` (`db_roll`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result_db`
--
ALTER TABLE `result_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
