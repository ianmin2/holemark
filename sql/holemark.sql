-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2014 at 03:17 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `holemark`
--
CREATE DATABASE IF NOT EXISTS `holemark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `holemark`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `_title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The School Categories Table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kcpe`
--

CREATE TABLE IF NOT EXISTS `kcpe` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_index` int(11) NOT NULL,
  `_name` int(11) NOT NULL,
  `_marks` int(11) NOT NULL,
  `_scores` int(11) NOT NULL,
  `_year` int(11) NOT NULL,
  `_yob` int(11) NOT NULL,
  `_sex` int(11) NOT NULL,
  `_data` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Students KCPE exam records table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Kcpe_data`
--

CREATE TABLE IF NOT EXISTS `Kcpe_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_kcpe_id` int(9) NOT NULL,
  `_year` int(4) NOT NULL,
  `_math` int(3) NOT NULL,
  `_english` int(3) NOT NULL,
  `_kiswahili` int(3) NOT NULL,
  `_social_studies` int(3) NOT NULL,
  `_science` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Kcpe detailed reports table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_index` varchar(9) NOT NULL,
  `_name` varchar(100) NOT NULL,
  `_addr` varchar(100) NOT NULL,
  `_tel` varchar(50) NOT NULL,
  `_email` varchar(100) NOT NULL,
  `_town` varchar(100) NOT NULL,
  `_candidates` int(255) NOT NULL,
  `_category` int(2) NOT NULL,
  `_status` int(2) NOT NULL,
  `_head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The School''s Master File' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_title` varchar(50) NOT NULL,
  `_abbr` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The School''s Residential Status table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_school_index` int(6) NOT NULL,
  `_candidate_index` int(5) NOT NULL,
  `_kcpe_index` int(9) NOT NULL,
  `_year` int(4) NOT NULL,
  `_subjects` text NOT NULL,
  `_is_candidate` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Students main Table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE IF NOT EXISTS `student_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_sub1` int(4) NOT NULL,
  `_sub2` int(4) NOT NULL,
  `_sub3` int(4) NOT NULL,
  `_sub4` int(4) NOT NULL,
  `_sub5` int(4) NOT NULL,
  `_sub6` int(4) NOT NULL,
  `_sub7` int(4) NOT NULL,
  `_sub8` int(4) NOT NULL,
  `_sub9` int(4) NOT NULL,
  `_sub10` int(4) NOT NULL,
  `_sub11` int(4) NOT NULL,
  `_sub12` int(4) NOT NULL,
  `_school_id` int(6) NOT NULL,
  `student_id` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Student subject data table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_user_` varchar(50) NOT NULL,
  `_key_` varchar(255) NOT NULL,
  `_email_` varchar(75) NOT NULL,
  `_inst_` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Official app Users table' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
