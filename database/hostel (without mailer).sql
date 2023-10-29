-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2023 at 03:10 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Hostel Warden', 'admin@admin.com', '@admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alloted_room`
--

DROP TABLE IF EXISTS `tbl_alloted_room`;
CREATE TABLE IF NOT EXISTS `tbl_alloted_room` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_no` int NOT NULL,
  `s1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `s2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `s3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_alloted_room`
--

INSERT INTO `tbl_alloted_room` (`room_id`, `room_no`, `s1`, `s2`, `s3`) VALUES
(1, 1, '098765432234567', '123456789', '147852369'),
(2, 2, 'null', 'null', 'null'),
(3, 3, 'null', 'null', 'null'),
(4, 4, 'null', 'null', 'null'),
(5, 5, 'null', 'null', 'null'),
(6, 6, 'null', 'null', 'null'),
(7, 7, 'null', 'null', 'null'),
(8, 8, 'null', 'null', 'null'),
(9, 9, 'null', 'null', 'null'),
(10, 10, 'null', 'null', 'null'),
(11, 11, 'null', 'null', 'null'),
(12, 12, 'null', 'null', 'null'),
(13, 13, 'null', 'null', 'null'),
(14, 14, 'null', 'null', 'null'),
(15, 15, 'null', 'null', 'null'),
(16, 16, 'null', 'null', 'null'),
(17, 17, 'null', 'null', 'null'),
(18, 18, 'null', 'null', 'null'),
(19, 19, 'null', 'null', 'null'),
(20, 20, 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `date` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `attendance` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `time` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `doa` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `email`, `date`, `attendance`, `time`, `doa`) VALUES
(1, 'prad@gmail.com', '23-06-22', 'Present', '12:05:14am', '2023-06-22 00:05:20'),
(2, 'prad@gmail.com', '23-06-22', 'Absent', '12:06:42am', '2023-06-22 00:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

DROP TABLE IF EXISTS `tbl_fee`;
CREATE TABLE IF NOT EXISTS `tbl_fee` (
  `f_id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `f_email` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `f_mobile` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `amount` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `f_branch` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `order_id` varchar(155) COLLATE utf8mb4_bin DEFAULT NULL,
  `razorpay_payment_id` varchar(155) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `month` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `dorp` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`f_id`, `f_name`, `f_email`, `f_mobile`, `amount`, `f_branch`, `order_id`, `razorpay_payment_id`, `status`, `month`, `dorp`) VALUES
(1, 'Prad', 'prad@gmail.com', '9876543212', '2500', 'CSE', 'order_M3rGXOU1rLR5iu', 'pay_M3rH1OPUUOPtxZ', 'success', 'january', '2023-06-19 22:12:27'),
(2, 'Prad', 'prad@gmail.com', '9876543212', '2500', 'CSE', 'order_M3s6fN57pK52VO', 'pay_M3s73PQW8VEUcT', 'success', 'february', '2023-06-19 23:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grievance`
--

DROP TABLE IF EXISTS `tbl_grievance`;
CREATE TABLE IF NOT EXISTS `tbl_grievance` (
  `g_id` int NOT NULL AUTO_INCREMENT,
  `g_name` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `g_sub` varchar(144) COLLATE utf8mb4_bin DEFAULT NULL,
  `g_sms` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `g_email` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `g_mobile` varchar(13) COLLATE utf8mb4_bin DEFAULT NULL,
  `g_branch` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `date` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `Dor` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_grievance`
--

INSERT INTO `tbl_grievance` (`g_id`, `g_name`, `g_sub`, `g_sms`, `g_email`, `g_mobile`, `g_branch`, `status`, `date`, `Dor`) VALUES
(1, 'Prad', 'About hand pump ', 'hostel me jo handpump lga hai wo kharab ho gya hai plese ese thik  krwa dijiye ', 'prad@gmail.com', '9876543212', 'CSE', 'seen', '2023-06-13', '2023-06-13 21:37:10'),
(2, 'Prad', 'ffufhduf', 'heiufhsufhufuh', 'prad@gmail.com', '9876543212', 'CSE', 'seen', '2023-06-14', '2023-06-14 13:57:21'),
(3, 'Prad', 'Fight with Student in Room 1 & 2', '1. Vinay \r\n2. Vinay kumar \r\n3. Pradyumn \r\n\r\n\r\npradyumn ne vinay ko bahut mara', 'prad@gmail.com', '9876543212', 'CSE', 'seen', '2023-06-14', '2023-06-14 13:57:50'),
(4, 'prad', 'dfghhgfdadfgh', 'wefdghbvcxz', 'prad@gmail.com', '4567876543', 'CSE', 'Pending...', '2023-06-21', '2023-06-21 23:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

DROP TABLE IF EXISTS `tbl_member`;
CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_name` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `member_email` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `member_pass` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `member_img` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `member_add` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `dor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `member_name`, `member_email`, `member_pass`, `member_img`, `member_add`, `dor`) VALUES
(1, 'Pradyumn', 'prad@gmail.com', '12345', '011.jpg', 'Haraia Basantpur, Gotha Rasulpur, Deoria (U.P.) 274201', '2023-06-08 22:30:12'),
(2, 'Ayush Singh', 'ayu@gmail.com', '12345', 'DSC_3086.JPG', 'New colony, Deoria', '2023-06-09 15:13:32'),
(3, 'Ravi Kumar', 'ravi@gmail.com', '12345', 'DSC_2791.JPG', 'Samastipur Bihar', '2023-06-09 15:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mesh_notification`
--

DROP TABLE IF EXISTS `tbl_mesh_notification`;
CREATE TABLE IF NOT EXISTS `tbl_mesh_notification` (
  `noti_id` int NOT NULL AUTO_INCREMENT,
  `notification` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`noti_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_mesh_notification`
--

INSERT INTO `tbl_mesh_notification` (`noti_id`, `notification`, `date`) VALUES
(1, 'Today is Mess Clossed', '2023-06-12 08:06:21'),
(2, '2nd August mess is open', '2023-06-12 08:43:48'),
(3, 'today mess is closed', '2023-06-22 00:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `req_id` int NOT NULL AUTO_INCREMENT,
  `appli_no` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `distance` int DEFAULT NULL,
  `roll_no` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `branch` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `fname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `aadhar` bigint DEFAULT NULL,
  `dob` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `gender` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mobile` bigint DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `obt_mark` int DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `stu_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `rank_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `dor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`req_id`),
  UNIQUE KEY `roll_no` (`roll_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`req_id`, `appli_no`, `distance`, `roll_no`, `branch`, `name`, `fname`, `mname`, `aadhar`, `dob`, `gender`, `mobile`, `email`, `password`, `rank`, `obt_mark`, `address`, `stu_img`, `rank_card`, `status`, `dor`) VALUES
(1, '2345678909876543', 200, '098765432234567', 'CSE', 'prad', 'prad dad', 'prad mom', 234567890876543, '2023-06-04', 'male', 4567876543, 'prad@gmail.com', '12345', 2345, 98, 'hata road deoria', 'DSC_2972.JPG', 'Polytechnic college.pdf', 'alloted', '2023-06-21 08:46:00'),
(2, '123456789', 250, '123456789', 'mp', 'Arjoo Gupta', 'FArjoo ', 'MArjoo', 1236547889, '2007-01-01', 'male', 9873214560, 'arjoo@gmail.com', '12345', 225, 388, 'Sahajhanpur', 'IMG_20221122_215655_560.jpg', 'Polytechnic college.pdf', 'alloted', '2023-06-22 07:48:45'),
(3, '147852369', 300, '147852369', 'CSE', 'Amit Sahani', 'Famit', 'Mamit', 1478523688, '2004-05-02', 'male', 3698521470, 'amit@gmail.com', '12345', 121, 450, 'Gorakhpur ', '20230616_063236 - QUICK TEACH POINT.jpg', 'Polytechnic college.pdf', 'alloted', '2023-06-22 07:56:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
