-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:25 PM
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
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `user_id` int(5) NOT NULL,
  `vaccine_ref` int(5) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `vaccine_type` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `order_date` date NOT NULL,
  `vaccine_center` varchar(50) NOT NULL,
  `physician` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`user_id`, `vaccine_ref`, `patient_name`, `phone_number`, `vaccine_type`, `age`, `user_address`, `order_date`, `vaccine_center`, `physician`, `status`) VALUES
(1, 1, 'John Doe', '123-456-7890', 'caughf', 22, '', '2023-06-10', 'Kankasanthurei', 'Dr Malith', 'complete'),
(2, 2, 'Jane Doe', '555-555-5555', 'cold', 23, '', '2023-06-11', 'Colombo', 'Dr Silva', 'complete'),
(3, 3, 'Peter Smith', '987-654-3210', 'flu', 25, '', '2023-06-12', 'Gampaha', 'Dr Perera', 'pending'),
(4, 4, 'Mary Jones', '77-123-4567', 'measles', 30, '', '2023-06-13', 'Matara', 'Dr Fernando', 'pending'),
(5, 5, 'David Williams', '77-777-7777', 'chicken pox', 50, '', '2023-06-14', 'Galle', 'Dr Rodrigo', 'complete'),
(6, 6, 'Susan Brown', '77-555-5555', 'typhoid', 35, '', '2023-06-15', 'Ampara', 'Dr Jayawardena', 'pending'),
(1, 7, 'kasun', '0766418699', 'ghgh', 22, 'hgjkghk', '2023-06-22', 'Malabe', 'Dr.Malith', 'Pending'),
(1, 8, 'kasun', '0766418699', 'dcfevfv', 22, 'fvefvf', '2023-07-20', 'Kalutara', 'Dr.Silva', 'Pending'),
(1, 9, 'kasun', '0766418699', 'dcfevfv', 22, 'fvefvf', '2023-07-20', 'Kalutara', 'Dr.Silva', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) DEFAULT NULL,
  `f_id` int(5) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `f_id`, `fullname`, `mail`, `contact`, `content`) VALUES
(1, 1, 'kasun lakshitha', 'kasunlakshitha@998.com', '766418699', 'gbfbgvkjhdgsvkjgbsdgf');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_user`
--

CREATE TABLE `vaccine_user` (
  `user_id` int(5) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `pNumber` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `cpass` varchar(15) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_user`
--

INSERT INTO `vaccine_user` (`user_id`, `fName`, `pNumber`, `email`, `user_name`, `pass`, `cpass`, `user_type`) VALUES
(1, 'kasun lakshitha', '0745425455', 'kasunlakshitha998@gmail.com', 'kasun998', 'kasun@1234', 'kasun@1234', 'user'),
(2, 'admin', '', 'admin@gmail.com', 'admin', 'admin@123', 'admin@123', 'admin'),
(3, 'Doctor', '0745425845', 'doctor@gamail.com', 'hpadmin', 'admin@123', 'admin@123', 'HPadmin'),
(5, 'waruna', '0112458752', 'waruna@gamil.com', 'waruna123', 'Waruna@123', 'Waruna@123', 'user'),
(6, 'Navinda kaviraj', '0745555522', 'naninda@gmail.com', 'Navinda1234', 'navinda123', 'navinda123', 'user'),
(17, 'Denuwan', '0112458752', 'denuwan@gmail.com', 'Denuwan', 'Denuwan@123', 'Denuwan@123', 'user'),
(18, 'chithakshan', '0112458789', 'chithakshan@gmail.com', 'Chithakshan', 'chithakshana@12', 'chithakshana@12', 'HPadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`vaccine_ref`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `vaccine_user`
--
ALTER TABLE `vaccine_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `vaccine_ref` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccine_user`
--
ALTER TABLE `vaccine_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
