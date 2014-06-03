-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2014 at 02:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'jeffrey', 'cabrera');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `q_number` int(3) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `question`, `a`, `b`, `c`, `d`, `answer`, `q_number`) VALUES
(9, 'Who is the current president of the United States?', 'Barrack Obama', 'Ninoy Aquino', 'George Bush', 'BIll Clinton', 'A', 7),
(13, 'What are the 2 main ingredients of Adobo?', 'Soy sauce & Vinegar', 'Water & Fish sauce', 'Fish sauce & vinegar', 'Salt & Soy sauce', 'A', 5),
(17, 'Who is the CEO of Microsoft?', 'Steve Gates', 'Bill Gates', 'Henry Sy', 'Steve Jobs', 'B', 8),
(18, 'In geography, which country is also a continent?', 'China', 'Indonesia', 'America', 'Russia', 'D', 9),
(19, 'What keeps the doctor away?', 'Mosquitoes', 'Banana', 'Fever', 'Apple', 'D', 4),
(21, 'What is my name?', 'Jocel', 'Jeffrey', 'Jonathan', 'Jonas', 'B', 3),
(22, 'which bird is able to swim?', 'Parrot', 'Humming bird', 'Penguin', 'Eagle', 'C', 2),
(24, 'Which one is different?', 'Eagle', 'Fish', 'Octopus', 'Shark', 'A', 1),
(26, '9 x 9', '81', '91', '71', '101', 'A', 6),
(27, 'He is the founder of the Apple Company.', 'Steve Jobs', 'Bill Gates', 'Henry Sy', 'Bill Jobs', 'A', 10);

-- --------------------------------------------------------

--
-- Table structure for table `examinee`
--

CREATE TABLE IF NOT EXISTS `examinee` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `confirm` varchar(1000) NOT NULL,
  `score` int(3) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `examinee`
--

INSERT INTO `examinee` (`user_id`, `firstname`, `lastname`, `email`, `password`, `confirm`, `score`) VALUES
(1, 'jeff', 'cabrera', 'mail@mail.com', 'pass', 'pass', 10),
(2, 'koko', 'koko', 'koko@koko.com', 'koko', 'koko', 3),
(3, 'jeff', 'cabrera', 'mail2@mail.com', 'pass', 'pass', 0),
(4, 'jeffrey', 'cabrera', 'mail3@mail.com', 'pass', 'pass', 0),
(5, 'jeffrey', 'cabrera', 'mail4@mail.com', 'pass', 'pass', 0),
(6, 'jeffrey', 'cabrera', 'mail5@mail.com', 'pass', 'pass', 0),
(7, 'je', 'cabrera', 'mail7@mail.com', 'pass', 'pass', 0),
(8, 'asdasd', 'asdasd', 'asdasd@mail.com', 'pass', 'pass', 0),
(9, 'lkl;k', 'lk', 'mail8@mail.com', 'pass', 'pass', 0),
(10, 'g', 'g', 'my@mail.com', 'pass', 'pass', 0),
(11, 'gaga', 'agag', 'mi@mail.com', 'pass', 'pass', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
