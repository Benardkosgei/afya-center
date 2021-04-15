-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 06:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afya`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE `patient_detail` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `gender` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `height` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `eye_color` varchar(100) NOT NULL,
  `hair_color` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`id`, `email`, `country`, `gender`, `date_of_birth`, `height`, `weight`, `eye_color`, `hair_color`, `image`) VALUES
(1, 'ben@gmail.com', 'Kenya', 'male', '2020-10-08', '1.2', '50', 'black', 'brown', '');

-- --------------------------------------------------------

--
-- Table structure for table `tpatient`
--

CREATE TABLE `tpatient` (
  `user_id` int(250) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonNo` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpatient`
--

INSERT INTO `tpatient` (`user_id`, `fname`, `lname`, `email`, `phonNo`, `password`) VALUES
(1, 'Benaa', 'Kosgei', 'Benaa@gmail.com', 723456, 'qwerty'),
(3, 'Benaa', 'Kos', 'qert@gdhs.com', 123345, '1234'),
(4, 'Benard', 'Kiptoo', 'ben@gmal.co.ke', 1234567, 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(5, 'Hosea', 'Kiplagat', 'hosea@tum.co.ke', 70456789, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Brian', 'Mushinyi', 'briyo@g.com', 12345, '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Allan', 'Kipkoech', 'allan@tum.ke', 723456432, 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Henry', 'Maina', 'henry@gmail.dg', 123456, 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Henry', 'Maina', 'henry@gmail.dg', 123456, '202cb962ac59075b964b07152d234b70'),
(10, 'ben', 'qwer', 'qwert@sdfg.wert', 123456, '202cb962ac59075b964b07152d234b70'),
(11, 'qwer', 'qwer', 'qwer@wet.ghg', 123456, '202cb962ac59075b964b07152d234b70'),
(12, 'qwe', 'qw', 'qwe@sdfg.sdfg', 1234, '76d80224611fc919a5d54f0ff9fba446'),
(13, 'Allan', 'kosgei', 'allan@gmail.com', 1234567890, '202cb962ac59075b964b07152d234b70'),
(14, 'Allan', 'kosgei', 'allan@gmail.com', 1234567890, '202cb962ac59075b964b07152d234b70'),
(15, 'qwerty', 'qwerr', 'wer@sf.erf', 1234565432, '202cb962ac59075b964b07152d234b70'),
(16, 'Joe', 'Kiptoo', 'joe@gmail.com', 1234567890, '202cb962ac59075b964b07152d234b70'),
(17, 'Simon', 'Njiwa', 'simo@gmail.com', 1234567897, '202cb962ac59075b964b07152d234b70'),
(18, 'Petua', 'kosgei', 'petua@gmail.com', 1234567898, '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Joe', 'Kiptoo', 'joekp@gmail.com', 712345432, '202cb962ac59075b964b07152d234b70'),
(20, 'Kipkogei', 'Area', 'kpkogei@gmail.com', 987654323, '202cb962ac59075b964b07152d234b70'),
(21, 'Festus', 'Kosgei', 'festus@gmail.com', 700000000, '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Allan', 'Tum', 'allan@gmail.com', 1234567809, '202cb962ac59075b964b07152d234b70'),
(25, 'Jane', 'Koech', 'jane@gmail.com', 712345677, '202cb962ac59075b964b07152d234b70'),
(24, 'Benaa', 'kiptum', 'ben@gmail.com', 729351717, '202cb962ac59075b964b07152d234b70'),
(26, 'Allan', 'Koech', 'allan@gmail.com', 711111112, '202cb962ac59075b964b07152d234b70'),
(27, 'ELCANA ', 'OTEKI', 'oteki47@gmail.com', 757292631, 'e807f1fcf82d132f9bb018ca6738a19f'),
(28, 'Hildah', 'Kosgei', 'hilda@gmail.com', 723456543, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_detail`
--
ALTER TABLE `patient_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpatient`
--
ALTER TABLE `tpatient`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpatient`
--
ALTER TABLE `tpatient`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
