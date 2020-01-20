-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 11:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_duration` varchar(50) NOT NULL,
  `c_batch` varchar(50) NOT NULL,
  `c_date` varchar(50) NOT NULL,
  `c_fees` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`c_id`, `c_name`, `c_duration`, `c_batch`, `c_date`, `c_fees`) VALUES
(334, 'PHP', '2 Months', '1:00 pm to 3:00 pm', '2020-02-11', '10,000/-'),
(335, 'JAVA', '5 Months', '9.00 am - 12.00 pm', '2020-02-01', '20,000/-');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `s_id`, `username`, `password`, `image`) VALUES
(1, 1, 'pratiksha', 'ab', '1578293305.png'),
(2, 2, '123', '123', '1579161566.png'),
(3, 4, '1', '2', '1579161682.jpg'),
(4, 5, '1111', '123', '1579171330.png'),
(5, 6, '12', '12', '1579257392.png');

-- --------------------------------------------------------

--
-- Table structure for table `new_student`
--

CREATE TABLE `new_student` (
  `s_id` int(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_mobno` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_dob` varchar(50) NOT NULL,
  `s_gender` varchar(50) NOT NULL,
  `s_course` varchar(50) NOT NULL,
  `s_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_student`
--

INSERT INTO `new_student` (`s_id`, `s_name`, `s_mobno`, `s_email`, `s_dob`, `s_gender`, `s_course`, `s_address`) VALUES
(1, 'Pratiksha Ghate', '94927437573', 'pratiksha25ghate@gmail.com', '1998-06-25', 'Female', 'Full Stack', 'Kothrud,Pune');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `st_id` int(50) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_lang` varchar(50) NOT NULL,
  `st_mob` varchar(50) NOT NULL,
  `st_address` varchar(50) NOT NULL,
  `st_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`st_id`, `st_name`, `st_lang`, `st_mob`, `st_address`, `st_image`) VALUES
(1, 'Vaishnavi ', 'Python', '94927437573', 'Kothrud,Pune', '1579161566.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `s_id` int(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_mobno` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_dob` varchar(50) NOT NULL,
  `s_gender` varchar(50) NOT NULL,
  `s_course` varchar(50) NOT NULL,
  `s_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s_id`, `s_name`, `s_mobno`, `s_email`, `s_dob`, `s_gender`, `s_course`, `s_address`) VALUES
(1, 'Pratiksha Ghate', '9492743757', 'pratiksha25ghate@gmail.com', '1998-06-25', 'Female', 'Full Stack', 'PUNE'),
(2, 'Vaishnavi Tibe', '94927437121', 'prtiksha25ghate@gmail.com', '2020-01-12', 'Female', 'Web Development', 'eee'),
(3, 'GHATE PRATHAMESH VINAYANK', '94927437512', 'prajakta.v.ghate@gmail.com', '0011-01-12', 'Female', 'Web Development', 'we'),
(4, 'GHATE PRATHAMESH VINAYANK', '94927437512', 'prajakta.v.ghate@gmail.com', '0011-01-12', 'Female', 'Web Development', 'we'),
(5, 'Pratiksha Ghate', '94927437573', 'pratiksha25ghate@gmail.com', '0121-12-12', 'Female', 'Web Development', 'eree'),
(6, 'Prat Ghate', '94927437573', 'pratiksha25ghate@gmail.com', '0065-06-07', 'Female', 'Web Development', '568');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `new_student`
--
ALTER TABLE `new_student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`st_id`) USING BTREE;

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_student`
--
ALTER TABLE `new_student`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `st_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
