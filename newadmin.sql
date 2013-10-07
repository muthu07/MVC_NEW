-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2013 at 02:04 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL,
  `about` varchar(20) NOT NULL,
  `working` varchar(20) NOT NULL,
  `current` varchar(20) NOT NULL,
  `college` varchar(20) NOT NULL,
  `schools` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  KEY `from` (`from`),
  KEY `from_2` (`from`),
  KEY `about` (`about`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dag`
--

CREATE TABLE IF NOT EXISTS `dag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `dag`
--

INSERT INTO `dag` (`id`, `product_name`) VALUES
(102, 'Kevi Shoe polish'),
(103, 'Lovly Moment'),
(159, 'how its'),
(160, 'how its'),
(161, 'how its'),
(162, 'how its'),
(163, 'how its');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `status`) VALUES
(1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(35) NOT NULL,
  `short_desc` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `short_desc`, `status`) VALUES
(1, 'kk', 'klik', ''),
(2, 'hh', 'jjjut', 'on'),
(3, 'jksjsdj', 'kssdjdjd\r\n', ''),
(4, 'rr', 'ttt', ''),
(5, 'jhjd', 'uuwertg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `emailId` varchar(30) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `about` varchar(30) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `about` (`about`),
  KEY `about_2` (`about`),
  KEY `about_3` (`about`),
  KEY `id` (`id`),
  KEY `about_4` (`about`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1027 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`role`, `id`, `username`, `firstname`, `lastname`, `password`, `emailId`, `photo`, `about`, `status`) VALUES
('default', 1026, 'amul', 'amul', 'amul', '3fa5f9ddcb0f4f26bd1e3fdeb66acb26', 'amul@hm.cio', '', '', 1),
('default', 1021, 'kathal', '', '', '1cf841988537e532c1013891b201f194', '', '', '', 1),
('default', 1024, 'mani', 'Chozha', 'Mannan', '9ca173fd0bf143feb3ad3710d051f9ee', 'chozhaarchiteture@chozhabuilde', 'mani.JPG', '', 1),
('owner', 1004, 'muthu', 'muthu', 'elumalai', 'da7b5ec6aabbd9bf940844363b41cbb4', 'ma@gmail.com', 'muthu.jpg', 'wwj', 1),
('owner', 1002, 'vicky', 'Vignesh', 'Babu', '8af433519d6e385e89bb280f8002f2b2', 'vicky@gmail.com', 'vicky.jpg', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
