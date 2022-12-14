-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 02:41 PM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reconn`
--
CREATE DATABASE IF NOT EXISTS `reconn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reconn`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(40) NOT NULL AUTO_INCREMENT,
  `about_pic` text NOT NULL,
  `about_description` text NOT NULL,
  `about_designation` varchar(500) NOT NULL,
  `about_name` varchar(500) NOT NULL,
  `about_status` varchar(40) NOT NULL,
  `about_date` date NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_pic`, `about_description`, `about_designation`, `about_name`, `about_status`, `about_date`) VALUES
(8, 'b7ac65cbcbce11dde1685b0385c8bfe0.jpg', '', 'usadvisoryboard', 'mhjm', '1', '2020-06-23'),
(19, 'ff7fd621be6b6294989ce34af76ba3b6.jpg', '', 'executiveboard', 'h', '', '2020-06-23'),
(24, '707638bd2b0a44f1a7ee993215d107a1.jpg', '', 'executiveboard', 'namemy', '1', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `about_whatwedo`
--

CREATE TABLE IF NOT EXISTS `about_whatwedo` (
  `whatwedo_id` int(40) NOT NULL AUTO_INCREMENT,
  `whatwedo_vision` text NOT NULL,
  `whatwedo_knowhow` text NOT NULL,
  `whatwedo_date` date NOT NULL,
  PRIMARY KEY (`whatwedo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about_whatwedo`
--

INSERT INTO `about_whatwedo` (`whatwedo_id`, `whatwedo_vision`, `whatwedo_knowhow`, `whatwedo_date`) VALUES
(1, 'Reconnaissance Research is dedicated to strengthening Kuwait’s role as a constructive international mediator on both a regional and global scale. We aim to promote peace and prosperity in the Gulf and beyond through open discussions, independent thought, and targeted expertise. By facilitating calm discussions on challenging issues, Reconnaissance Research seeks to shape a more open and more engaged world.', 'The Center relies on several mechanisms such as seminars, assigning writers to produce articles in their field of expertise as well as organizing workshops in cooperation with various research entities in the world, NGO’s as well as private advocacy groups.nel', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `articles_id` int(40) NOT NULL AUTO_INCREMENT,
  `articles_title` varchar(1000) NOT NULL,
  `articles_date` date NOT NULL,
  `articles_pic` text NOT NULL,
  `articles_desc` text NOT NULL,
  `articles_status` varchar(40) NOT NULL,
  `articles_insdate` date NOT NULL,
  PRIMARY KEY (`articles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articles_id`, `articles_title`, `articles_date`, `articles_pic`, `articles_desc`, `articles_status`, `articles_insdate`) VALUES
(1, 'cv', '2020-06-03', '0a39d8a8f7720c272f13ee87c1a52e18.jpg', 'cvc', '1', '2020-06-24'),
(3, 'uyi', '2020-06-03', '20feaf26b2d8d08cca608d06cec6322e.mp4', '', '0', '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_mail1` varchar(50) NOT NULL,
  `contact_mail2` varchar(50) NOT NULL,
  `contact_phone1` varchar(25) NOT NULL,
  `contact_phone2` varchar(25) NOT NULL,
  `contact_msg` text NOT NULL,
  `contact_fax` varchar(25) NOT NULL,
  `contact_address` varchar(1000) NOT NULL,
  `contact_locationsrc` text NOT NULL,
  `contact_date` date NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail1`, `contact_mail2`, `contact_phone1`, `contact_phone2`, `contact_msg`, `contact_fax`, `contact_address`, `contact_locationsrc`, `contact_date`) VALUES
(1, 'dfg', 'g@h.in', 'e@g.com', '345455', '5464546', 'fdgdfgdfgfgfgfghghghhjjkljklklk', 'saf@', 'dfdgfnew', 'src', '0000-00-00'),
(2, 'fgnamenew', 'bg@e.in', 'h@w.in', '43533434', '34343', 'fqwerrtytyuu', 'hfjuy', 'yffddss', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `forums_id` int(40) NOT NULL AUTO_INCREMENT,
  `forums_title` varchar(1000) NOT NULL,
  `forums_date` date NOT NULL,
  `forums_pic` text NOT NULL,
  `forums_desc` text NOT NULL,
  `forums_status` varchar(40) NOT NULL,
  `forums_insdate` date NOT NULL,
  PRIMARY KEY (`forums_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forums_id`, `forums_title`, `forums_date`, `forums_pic`, `forums_desc`, `forums_status`, `forums_insdate`) VALUES
(4, '', '2020-06-10', '9259aa8829db83e55c6fd4bc139c6a7b.jpg', '', '', '2020-06-23'),
(5, '', '2020-06-12', '8dd0ef9f432a41a5a54d49e83976db13.jpg', '', '', '2020-06-23'),
(6, 'hgh', '2020-06-04', '635a464c9ce65db9793f57aa29e0ceae.jpg', '', '', '2020-06-24'),
(7, 'xzx', '2020-06-09', '515a3973d64e086c352b4a9559e23a63.jpg', '', '', '2020-06-24'),
(8, 'ef', '2020-06-12', '4fc2de7c531a49cb0d247578b3fe3eba.mp4', '', '', '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `mediacoverageimg`
--

CREATE TABLE IF NOT EXISTS `mediacoverageimg` (
  `mediacoverageimg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mediacoverageimg_pic` text NOT NULL,
  `mediacoverageimg_title` text NOT NULL,
  `mediacoverageimg_status` varchar(40) NOT NULL,
  `mediacoverageimg_date` date NOT NULL,
  PRIMARY KEY (`mediacoverageimg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mediacoverageimg`
--

INSERT INTO `mediacoverageimg` (`mediacoverageimg_id`, `mediacoverageimg_pic`, `mediacoverageimg_title`, `mediacoverageimg_status`, `mediacoverageimg_date`) VALUES
(14, 'bf2f70c532cc365ab85cb2b023782c76.mp4', '5', '', '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `mediacoveragetitle`
--

CREATE TABLE IF NOT EXISTS `mediacoveragetitle` (
  `mediacoverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `mediacoverage_title` varchar(1000) NOT NULL,
  `mediacoverage_insdate` date NOT NULL,
  `mediacoverage_status` varchar(40) NOT NULL,
  `mediacoverage_date` date NOT NULL,
  PRIMARY KEY (`mediacoverage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mediacoveragetitle`
--

INSERT INTO `mediacoveragetitle` (`mediacoverage_id`, `mediacoverage_title`, `mediacoverage_insdate`, `mediacoverage_status`, `mediacoverage_date`) VALUES
(1, 'corona', '0000-00-00', '', '0000-00-00'),
(3, '<p>dfgd</p>', '0000-00-00', '', '2020-06-22'),
(4, '<p>newytyyt</p>', '0000-00-00', '', '2020-06-22'),
(5, 'abcd', '2020-06-23', '1', '2020-06-23'),
(7, 'bj', '2020-06-23', '', '2020-06-02'),
(8, 'qqqq', '2020-06-23', '', '2020-06-02'),
(9, '', '2020-06-23', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `reports_id` int(40) NOT NULL AUTO_INCREMENT,
  `reports_title` varchar(1000) NOT NULL,
  `reports_date` date NOT NULL,
  `reports_pic` text NOT NULL,
  `reports_desc` text NOT NULL,
  `reports_status` varchar(40) NOT NULL,
  `reports_insdate` date NOT NULL,
  PRIMARY KEY (`reports_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reports_id`, `reports_title`, `reports_date`, `reports_pic`, `reports_desc`, `reports_status`, `reports_insdate`) VALUES
(2, 'dfsdfdfg', '2020-06-09', 'de9e22eabbd71f5c428af39d9a84a5f9.jpg', 'xdfgsd', '', '2020-06-24'),
(4, 'hhj', '2020-06-12', '0f5ccef494b08882cd62f7356446f10f.mp4', '', '', '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `workshops_id` int(40) NOT NULL AUTO_INCREMENT,
  `workshops_title` varchar(1000) NOT NULL,
  `workshops_subtitle` text NOT NULL,
  `workshops_date` date NOT NULL,
  `workshops_pic` text NOT NULL,
  `workshops_desc` text NOT NULL,
  `workshops_status` varchar(40) NOT NULL,
  `workshops_insdate` date NOT NULL,
  PRIMARY KEY (`workshops_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshops_id`, `workshops_title`, `workshops_subtitle`, `workshops_date`, `workshops_pic`, `workshops_desc`, `workshops_status`, `workshops_insdate`) VALUES
(3, 'hj', 'jkr', '2020-06-12', '02b229f13b4c802d028b2baf1dc78629.jpg', '', '1', '2020-06-23'),
(4, '', '', '2020-06-02', '4b04309c9c5b7da1eaa4e0d4ff7f17fb.jpg', '', '', '2020-06-23'),
(5, 'n', 'h', '0000-00-00', '13772e615a0746f3f3949cd1b2272b19.jpg', '', '', '2020-06-24'),
(6, 'g', 'g', '2020-06-02', '08d90ebf41b098f2010b8b01eeb4abc5.mp4', '', '', '2020-06-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
