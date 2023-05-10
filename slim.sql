-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 08:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slim`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `slno` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`slno`, `fname`, `lname`, `email`, `pass`, `img`) VALUES
(1, 'samin', 'arnob', 'sam@gmail.com', 'iamsam', 'img.jpg'),
(2, 'samin', 'arnob', 'arnov@gmail.bd.com', '', 'saminarnobArray'),
(4, 'samin', 'arnob', 'samin@gm.com', '', 'saminarnobArray'),
(5, 'sammm', 'ammmm', 'arb@gmail.com', '', 'sammmammmmjpg'),
(6, 'bbbbbbbbb', 'bbbbbbbbbbbb', 'asdasdad@gm.com', 'arnoba', 'bbbbbbbbbbbbbbbbbbbbb.jpg'),
(7, 'sdadasd', 'asdasdad', 'asdaa@gma.com', 'aaaaaa', 'sdadasdasdasdad.jpg'),
(8, 'samin', 'amina', 'goku@gmail.com', '$2y$10$rNOwd/LgTQDZ2dc5Opc2L.C0ZC1zp84pgi4zThao125WXV36Rzf4O', 'saminamina.jpg'),
(12, 'samn', 'asdada', 'ada@gmail.com', '$2y$10$80ZNujUrOYkmITE6IMcOqOrplkESXi/HY2SrNmzWcJRs3ikbBh5jW', 'samnasdada.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
