-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 04:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('manhar_dangar', '364260');

-- --------------------------------------------------------

--
-- Table structure for table `ind_reg`
--

CREATE TABLE `ind_reg` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `teach` varchar(20) NOT NULL,
  `background` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `class_offer` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind_reg`
--

INSERT INTO `ind_reg` (`id`, `name`, `mobile`, `email`, `teach`, `background`, `address`, `city`, `class_offer`, `password`) VALUES
(1, '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, 'manhar', '7096750532', 'ahirmanhar111@gmail.com', 'gujarati', 'ham hkis', 'maidhar', 'baroda', '', ''),
(5, 'manhar', '7096750532', 'ahirmanhar111@gmail.com', 'nbvnbv', 'ham hkis', 'xcjhvbxkaBXAVJHVVJAX', 'gandhinagar', '', ''),
(6, 'manhar', '9737207346', 'ahirmanhar111@gmail.com', 'nbvnbv', 'cvkjdbkjb', 'TO-MAIDHAR TA-PALITANA DIST-BHAVNAGAR', 'baroda', '', ''),
(7, 'manhar dangar', '9737207346', 'ahirmanhar111@gmail.com', 'nbvnbv', 'cvkjdbkjb', 'TO-MAIDHAR TA-PALITANA DIST-BHAVNAGAR', 'bhav', '', ''),
(8, 'manhar dangar', '7096750532', 'manhardangar12@gmail.com', 'gujarati', 'man', 'MANINAGAR SHERI,DEVALIYA ROAD,RANGHOLA', 'gandhinagar', '', ''),
(9, 'manhar', '7096750532', 'ahirmanhar111@gmail.com', 'secondary', 'I teaching from the last 8 years ,I completed my under graduation in BSC and post graduation in MSC ', 'TO-MAIDHAR TA-PALITANA DIST-BHAVNAGAR', 'bhav', '', ''),
(10, '', '7096750532', 'ahirmanhar111@gmail.com', 'ug', 'i have been teaching from last 12years.i have been teaching from last 12years.i have been teaching f', '', 'bhav', 'BBA,BCA', ''),
(11, 'manhar dangar', '7096750532', 'ahirmanhar111@gmail.com', 'ug', 'i have been teaching from last 12years.i have been teaching from last 12years.i have been teaching f', 'nirmal plaza,kaliyabid,bhavnagar-gujarat', 'bhav', 'BBA,BCA', ''),
(12, 'manhar dangar', '7096750532', 'ahirmanhar111@gmail.com', 'ug', 'i have been teaching from last 12years.i have been teaching from last 12years.i have been teaching f', 'nirmal plaza,kaliyabid,bhavnagar-gujarat', 'bhav', 'BBA,BCA', ''),
(13, 'manhar dangar', '7096750532', 'ahirmanhar111@gmail.com', 'compe_Exam', 'i have been teaching from last 12years.i have been teaching from last 12years.i have been teaching f', 'TO-MAIDHAR TA-PALITANA DIST-BHAVNAGAR', 'bhav', 'All Gujarat government job exam', '123456'),
(14, 'Arvind Desai', '8213165612', 'arvinddesai12@gmail.com', 'secondary', 'i have been teaching from last 12years,complete my under graduation BSC and Msc in chemistry', 'Bhoomi Apartment,Annant vadi,bhavnagar-Gujarat.', 'bhav', 'All Subjects for 9std to 10std', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `inst_reg`
--

CREATE TABLE `inst_reg` (
  `id` int(11) NOT NULL,
  `institutename` varchar(50) NOT NULL,
  `ownername` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `teach_categories` varchar(50) NOT NULL,
  `owerview` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `class_offer` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inst_reg`
--

INSERT INTO `inst_reg` (`id`, `institutename`, `ownername`, `mobile`, `email`, `teach_categories`, `owerview`, `address`, `city`, `class_offer`, `password`) VALUES
(142, 'Krishna IT career coaching', 'Rohit Sharma', '8140523344', 'kri_it_career@gmail.com', 'IT_skill classes', 'This institute provide student to best environment for study. we provide the all the material regarding students study.This institute provide student to best environment for study. we provide the all ', 'Anant vadi ,near jail ground,bhavnagar-gujarat', 'bhav', 'C language,Python,Java and web designing', ''),
(143, 'Bansi Musical institute', 'Gopal Sharma', '7045325469', 'bansi_music@gmail.com', 'hobby classes', 'This institute provide student to best environment for study. we provide the all the material regarding students study.This institute provide student to best environment for study. we provide the all ', 'Subham plaza,waghavadi road,bhavnagar-gujarat', 'bhav', 'All types of musical courses', '789456'),
(144, 'Alpha IT Career Institute', 'Rahul Dangar', '7096750532', 'alpha_it_career@gmail.com', 'IT_skill classes', 'Alpha institute Provide best Lab and well experience teachers to students Here is the best Environment for study. ', 'nirmalplaza,sanskarmandal,bhavanagar-Gujarat', 'bhav', 'C language,Python,Java and web designing.', '123rahul'),
(147, 'NAJ competitive classes', 'Narendra Jogadiya', '7359055621', 'naj_competative_class@gmail.co', 'competitive exam  classes', 'This institute provide student to best environment for study. we provide the all the material regarding students study.', 'Kaliyabid,bhavnagar-gujarat', 'bhav', 'All Gujarat government job exam And All banking Related Job', 'naj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ind_reg`
--
ALTER TABLE `ind_reg`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `inst_reg`
--
ALTER TABLE `inst_reg`
  ADD PRIMARY KEY (`id`,`institutename`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ind_reg`
--
ALTER TABLE `ind_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inst_reg`
--
ALTER TABLE `inst_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
