-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2023 at 03:49 AM
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
(1, 1, 'null', 'null', 'null'),
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
(1, 'Pradyumn', 'prad@gmail.com', '12345', '011.jpg', 'Haraia Basantpur,Deoria ', '2023-06-08 22:30:12'),
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `req_id` int NOT NULL AUTO_INCREMENT,
  `appli_no` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `roll_no` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `distance` int DEFAULT NULL,
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
  `verification_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_verified` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `dor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`req_id`),
  UNIQUE KEY `appli_no` (`appli_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`req_id`, `appli_no`, `roll_no`, `distance`, `branch`, `name`, `fname`, `mname`, `aadhar`, `dob`, `gender`, `mobile`, `email`, `password`, `rank`, `obt_mark`, `address`, `stu_img`, `rank_card`, `status`, `verification_code`, `is_verified`, `dor`) VALUES
(1, '220100126214', '220100126214', 250, 'mp', 'Arjoo Gupta', 'INDRESH BHOOSHAN GUPTA', 'Shusila Gupta ', 784596123645, '2006-06-08', 'male', 8858552635, 'arjoo@givmail.com', '12345', 29884, 94, 'Shahjahanpur', 'IMG_20221122_215655_560.jpg', 'Polytechnic college.pdf', '2', 'e1a9db04f6e57936028d24a707cb3f5d', '1', '2023-06-23 07:35:58'),
(2, '21011183507', '21011183507', 200, 'CSE', 'Amit', 'Rambujh', 'PREMSHILA DEVI', 929604179916, '2003-01-01', 'male', 8874596347, 'amit@dropjar.com', '$%^&&$%^hostel', 19776, 150, 'Maharajganj', '20230616_063236 - QUICK TEACH POINT.jpg', '1000009454 - QUICK TEACH POINT.PDF', '2', '3377b4834b13159a0d8e3051cdf1fe30', '1', '2023-06-23 08:45:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
