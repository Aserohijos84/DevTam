-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2021 at 12:14 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnpvirtualhub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `pnp_account_no` int(8) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `rank` varchar(50) NOT NULL,
  `pnp_unit_id` int(8) NOT NULL,
  PRIMARY KEY (`pnp_account_no`),
  UNIQUE KEY `email_address` (`email_address`),
  KEY `pnp_unit_id` (`pnp_unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20210011 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`pnp_account_no`, `email_address`, `password`, `first_name`, `middle_name`, `last_name`, `birth_date`, `rank`, `pnp_unit_id`) VALUES
(20210000, 'cardo.dalisay@gmail.com', '5fa9d5bfb1c18d0ff472cf0e3b24fff0288299c0', 'Ricardo', '', 'De Leon', '1992-07-30', 'PO1', 1),
(20210003, 'Juan.Delacruz@pnp.gov.ph', 'd11a8158c5afb09fb7f9749a39c6dd6d366c814a', 'Juan', '', 'Dela Cruz', '1990-12-01', 'PLTCOL', 3),
(20210004, 'Rey.Bautista@pnp.gov.ph', 'b466ef012430d7abb52a4bd29d7c13452d28965a', 'Rey', '', 'Bautista', '1989-02-23', 'PMGEN', 2),
(20210005, 'Jen.Mercado@pnp.gov.ph', '2d532b809bdec43a77c0c65087ff761ec1e3ef4b', 'Jen', '', 'Mercado', '1990-03-23', 'PBGEN', 3),
(20210006, 'Sam.Hernandez@pnp.gov.ph', '409855b16e2f92150e7d04eea03a4ea656809751', 'Sam', 'Alonzo', 'Hernandez', '1993-05-27', 'PMAJ', 1),
(20210007, 'Jerome.Lopez@pnp.gov.ph', 'cb82a20cc2637c563a98d7034297970dd85d1433', 'Jerome', 'Hermoso', 'Lopez', '1995-09-09', 'PLT', 2),
(20210008, 'Jake.Morales@pnp.gov.ph', 'b3d64257e4d1d3df239185d706796b5b14aa926d', 'Jake', 'Vitales', 'Morales', '1996-08-17', 'PLT', 1),
(20210009, 'Andrea.Felipe@pnp.gov.ph', 'b5a48c6b6adc5f09546e13664e973249263e903e', 'Andrea', 'De Dios', 'Felipe', '1994-04-21', 'PCPT', 3),
(20210010, 'Juan.Luna@pnp.gov.ph', '45d401efd72b52f9ca23e10e3288865cb8017147', 'Juan', 'Inares', 'Luna', '1993-12-14', 'PCOL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pnp_unit`
--

DROP TABLE IF EXISTS `pnp_unit`;
CREATE TABLE IF NOT EXISTS `pnp_unit` (
  `pnp_unit_id` int(8) NOT NULL AUTO_INCREMENT,
  `pnp_unit_name` varchar(50) NOT NULL,
  PRIMARY KEY (`pnp_unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnp_unit`
--

INSERT INTO `pnp_unit` (`pnp_unit_id`, `pnp_unit_name`) VALUES
(1, 'Information Technology Management Service'),
(2, 'Communications and Electronics Service'),
(3, 'Finance Service');

-- --------------------------------------------------------

--
-- Table structure for table `shared_files`
--

DROP TABLE IF EXISTS `shared_files`;
CREATE TABLE IF NOT EXISTS `shared_files` (
  `file_id` int(8) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` mediumblob NOT NULL,
  `pnp_account_no` int(8) NOT NULL,
  `pnp_unit_id` int(8) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `pnp_account_no` (`pnp_account_no`) USING BTREE,
  KEY `pnp_unit_id` (`pnp_unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shared_files`
--

INSERT INTO `shared_files` (`file_id`, `filename`, `date_created`, `file`, `pnp_account_no`, `pnp_unit_id`) VALUES
(15, 'ITMS-Hackathon-2021-PNP_UNIT-Data.txt', '2021-10-13 07:14:21', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 1),
(16, 'ITMS-Hackathon-2021-VideoConferences-Data.txt', '2021-10-13 07:14:32', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 1),
(17, 'ITMS-Hackathon-2021-SharedFiles-Data.txt', '2021-10-13 07:14:40', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 1),
(18, 'ITMS-Hackathon-2021-Employee-Data.txt', '2021-10-13 07:14:51', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 1),
(19, 'Network_Blueprint_April_2021.txt', '2021-10-13 07:15:03', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 2),
(20, 'Network_Blueprint_March_2021.txt', '2021-10-13 07:15:45', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 2),
(21, 'Network_Blueprint_February_2021.txt', '2021-10-13 07:16:24', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 2),
(22, 'Network_Blueprint_January_2021.txt', '2021-10-13 07:16:49', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 2),
(25, 'Financial-Report-2018.txt', '2021-10-13 07:17:11', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210000, 3),
(26, 'Financial-Report-2019.txt', '2021-10-13 07:17:22', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210000, 3),
(27, 'Financial-Report-2020.txt', '2021-10-13 07:17:28', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210000, 3),
(28, 'Financial-Report-2021.txt', '2021-10-13 07:17:34', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210000, 3),
(29, 'ITMS-Hackathon-2021-Employee-Data.txt', '2021-10-13 07:32:05', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 1),
(30, 'ITMS-Hackathon-2021-SharedFiles-Data.txt', '2021-10-13 07:32:12', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 1),
(31, 'ITMS-Hackathon-2021-VideoConferences-Data.txt', '2021-10-13 07:32:17', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 1),
(32, 'ITMS-Hackathon-2021-PNP_UNIT-Data.txt', '2021-10-13 07:32:23', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 1),
(33, 'ITMS-Hackathon-2021-Task-Data.txt', '2021-10-13 07:32:28', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 1),
(34, 'Network_Blueprint_April_2021.txt', '2021-10-13 07:32:37', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 2),
(35, 'Network_Blueprint_March_2021.txt', '2021-10-13 07:32:42', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 2),
(36, 'Network_Blueprint_February_2021.txt', '2021-10-13 07:32:48', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 2),
(37, 'Network_Blueprint_January_2021.txt', '2021-10-13 07:32:53', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210003, 2),
(38, 'Financial-Report-2016.txt', '2021-10-13 07:33:02', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(39, 'Financial-Report-2017.txt', '2021-10-13 07:33:06', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(40, 'Financial-Report-2018.txt', '2021-10-13 07:33:11', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(41, 'Financial-Report-2019.txt', '2021-10-13 07:33:16', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(42, 'Financial-Report-2020.txt', '2021-10-13 07:33:24', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(43, 'Financial-Report-2021.txt', '2021-10-13 07:33:32', 0x53616d706c652066696e616e6369616c207265706f72742e, 20210003, 3),
(44, 'ITMS-Hackathon-2021-Task-Data.txt', '2021-10-13 07:53:49', 0x53616d706c65206e6574776f726b20626c75657072696e74207265706f72742e, 20210000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `todo_list`
--

DROP TABLE IF EXISTS `todo_list`;
CREATE TABLE IF NOT EXISTS `todo_list` (
  `todo_list_id` int(12) NOT NULL AUTO_INCREMENT,
  `task_heading` varchar(300) NOT NULL,
  `task_description` varchar(1000) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDone` tinyint(1) NOT NULL,
  `pnp_account_no` int(8) NOT NULL,
  PRIMARY KEY (`todo_list_id`),
  KEY `pnp_account_no` (`pnp_account_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo_list`
--

INSERT INTO `todo_list` (`todo_list_id`, `task_heading`, `task_description`, `date_created`, `isDone`, `pnp_account_no`) VALUES
(1, 'Update files in ITMS Shared files', 'try upload and download files in shared files', '2021-10-11 20:28:40', 1, 20210000),
(2, 'Configure account', 'update login credentials.', '2021-10-11 20:36:41', 1, 20210000);

-- --------------------------------------------------------

--
-- Table structure for table `video_conferences`
--

DROP TABLE IF EXISTS `video_conferences`;
CREATE TABLE IF NOT EXISTS `video_conferences` (
  `pnp_account_no` int(8) NOT NULL,
  `pnp_unit_id` int(8) NOT NULL,
  `video_conference_link` varchar(300) NOT NULL,
  KEY `video_conference_key` (`pnp_account_no`,`pnp_unit_id`) USING BTREE,
  KEY `pnp_unit_id` (`pnp_unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_conferences`
--

INSERT INTO `video_conferences` (`pnp_account_no`, `pnp_unit_id`, `video_conference_link`) VALUES
(20210000, 1, 'https://meet.google.com/uih-naoj-cze'),
(20210000, 2, 'https://meet.google.com/jtk-avwt-spf'),
(20210000, 3, 'https://meet.google.com/gog-zktu-ygp');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`pnp_unit_id`) REFERENCES `pnp_unit` (`pnp_unit_id`) ON DELETE NO ACTION;

--
-- Constraints for table `shared_files`
--
ALTER TABLE `shared_files`
  ADD CONSTRAINT `shared_files_ibfk_1` FOREIGN KEY (`pnp_account_no`) REFERENCES `employee` (`pnp_account_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `shared_files_ibfk_2` FOREIGN KEY (`pnp_unit_id`) REFERENCES `pnp_unit` (`pnp_unit_id`) ON DELETE CASCADE;

--
-- Constraints for table `todo_list`
--
ALTER TABLE `todo_list`
  ADD CONSTRAINT `todo_list_ibfk_1` FOREIGN KEY (`pnp_account_no`) REFERENCES `employee` (`pnp_account_no`) ON DELETE CASCADE;

--
-- Constraints for table `video_conferences`
--
ALTER TABLE `video_conferences`
  ADD CONSTRAINT `video_conferences_ibfk_1` FOREIGN KEY (`pnp_unit_id`) REFERENCES `pnp_unit` (`pnp_unit_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `video_conferences_ibfk_2` FOREIGN KEY (`pnp_account_no`) REFERENCES `employee` (`pnp_account_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
