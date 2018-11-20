-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 08:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qask`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentbusiness`
--

CREATE TABLE `commentbusiness` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'business',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentbusiness`
--

INSERT INTO `commentbusiness` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(1, 'No, the debt becomes an oligation of the estate.', 'nitin rohilla', 'nnannu5@gmail.com', '2018-11-19 17:38:29', 'business', 1, 0),
(2, 'No, if the person has any assets, they must be used to pay their bill before anything is distributed to heirs.', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:42:24', 'business', 1, 0),
(3, 'No, anything they owned is supposed to be used to pay the debts. If that\'s not enough then the rest dies.', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:47:30', 'business', 1, 0),
(4, 'Sort of. The debt doesn\'t just go away, but it isn\'t inherited either. It has to be paid off by the deceased person\'s left property.', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:49:25', 'business', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentfood`
--

CREATE TABLE `commentfood` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'food',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentfood`
--

INSERT INTO `commentfood` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(2, 'Eating 3 times is very good for health.', 'nitin rohilla', 'nnannu5@gmail.com', '2018-11-19 17:04:40', 'food', 1, 0),
(3, 'three and I eat the most at breakfast and I eat a snack before I workout and then I eat dinner later.', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:10:02', 'food', 1, 0),
(4, 'Usually 3 or 4 with plenty of snacks in between. You should eat when hungry.', 'kapil jaiswal', 'kapiljaiswal94@gmail.com', '2018-11-19 17:17:16', 'food', 1, 0),
(5, 'Enough.', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:22:35', 'food', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commenthealth`
--

CREATE TABLE `commenthealth` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'health',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenthealth`
--

INSERT INTO `commenthealth` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(8, 'You can eat pizza but not much', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:10:50', 'health', 4, 0),
(9, 'Still healthy and still got pizza crust residue.. Try this Domino\'s meatzz pizza or Memphis BBQ chicken pizza both are the \"Dabomb\" .. LoL', 'kapil jaiswal', 'kapiljaiswal94@gmail.com', '2018-11-19 17:16:08', 'health', 4, 0),
(10, 'Why would you do that ? Eat the damn pizza.', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:21:55', 'health', 4, 0),
(11, 'Obviously not. Lol', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:27:16', 'health', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentmovies`
--

CREATE TABLE `commentmovies` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'movies',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentmovies`
--

INSERT INTO `commentmovies` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(4, 'Mine are \r\n1.Gotti \r\n2. The Last Don \r\n3.Reservoir Dogs', 'prince tuteja', 'princetuteja@gmail.com', '2018-11-19 17:33:38', 'movies', 3, 0),
(5, '1. Goodfellas\r\n2. The Departed\r\n3. Scarface', 'nitin rohilla', 'nnannu5@gmail.com', '2018-11-19 17:39:22', 'movies', 3, 0),
(6, 'Knockaround Guys, No country for Old men and City of Gold.', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:43:08', 'movies', 3, 0),
(7, 'The Godfather, Taken and Casino', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:46:21', 'movies', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentscience`
--

CREATE TABLE `commentscience` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'science',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentscience`
--

INSERT INTO `commentscience` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(7, 'Absence of proof is not proof of absence.', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:20:15', 'science', 5, 0),
(8, 'Look into the little flashy-thingy. That Alien patrol you just witnessed never happened.', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:26:50', 'science', 5, 0),
(9, 'No one knows quite yet... but we are looking.', 'prince tuteja', 'princetuteja@gmail.com', '2018-11-19 17:30:57', 'science', 5, 0),
(10, 'It seems improbable that Earth has the only life in the Entire Universe. But it is doubtful we will know for sure in our own lifetimes.', 'nitin rohilla', 'nnannu5@gmail.com', '2018-11-19 17:37:47', 'science', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentsocial`
--

CREATE TABLE `commentsocial` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'social',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsocial`
--

INSERT INTO `commentsocial` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(1, 'You can use Windows photo editors', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:44:28', 'social', 1, 0),
(2, 'Picasa.\r\nIt is no longer updated but still can be downloaded and used.\r\n', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:45:40', 'social', 1, 0),
(3, 'VSCO, Adobe lightroom, Enlight, Photoshop Express etc....', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:50:19', 'social', 1, 0),
(4, 'adobe pixlr, Fotor , GIMP, fhotoroom , Picsart', 'kapil jaiswal', 'kapiljaiswal94@gmail.com', '2018-11-19 17:51:36', 'social', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentsports`
--

CREATE TABLE `commentsports` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'sports',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsports`
--

INSERT INTO `commentsports` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(1, 'The Undertaker', 'kapil jaiswal', 'kapiljaiswal94@gmail.com', '2018-11-19 17:14:28', 'sports', 1, 0),
(2, 'Before 2000: Stone cold steve Austin.\r\n2018: I don\'t know.', 'sourabh manjhu', 'sourabhmanjhu@gmail.com', '2018-11-19 17:20:58', 'sports', 1, 0),
(3, 'Before 2000: The Rock\r\n2018: AJ Styles', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:28:33', 'sports', 1, 0),
(4, 'Before 2000: Roddy Piper\r\n2018: AJ Styles', 'prince tuteja', 'princetuteja@gmail.com', '2018-11-19 17:32:38', 'sports', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commenttechnology`
--

CREATE TABLE `commenttechnology` (
  `sno` int(11) NOT NULL,
  `COMMENT` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'technology',
  `postid` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttechnology`
--

INSERT INTO `commenttechnology` (`sno`, `COMMENT`, `user`, `email`, `date`, `category`, `postid`, `parent`) VALUES
(3, 'Better camera, more battery life and bigger screen.', 'yash nain', 'yashnain@gmail.com', '2018-11-19 17:25:41', 'technology', 4, 0),
(4, 'That is something called you can look up.', 'prince tuteja', 'princetuteja@gmail.com', '2018-11-19 17:31:36', 'technology', 4, 0),
(5, 'The plus is bigger and has a cooler camera.', 'nitin rohilla', 'nnannu5@gmail.com', '2018-11-19 17:36:18', 'technology', 4, 0),
(6, 'The name', 'gulshan garg', 'aggarwal922@gmail.com', '2018-11-19 17:43:34', 'technology', 4, 0),
(7, 'This post has been removed', 'kapil jaiswal', 'kapiljaiswal94@gmail.com', '2018-11-20 06:14:16', 'technology', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT NULL,
  `parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblbusiness`
--

CREATE TABLE `tblbusiness` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'business',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbusiness`
--

INSERT INTO `tblbusiness` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(1, 'When someone dies do their credit card dept dies as well?', '', 'princetuteja@gmail.com', '2018-11-19 17:35:19', 'business', 'prince tuteja');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'food',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(1, 'How many meals a day for you to eat?', '', 'princetuteja@gmail.com', '2018-11-19 17:02:53', 'food', 'prince tuteja');

-- --------------------------------------------------------

--
-- Table structure for table `tblhealth`
--

CREATE TABLE `tblhealth` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'health',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhealth`
--

INSERT INTO `tblhealth` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(4, 'Is pizza healthy meal if i do this?', 'If I just eat the toppings and cheese and throw out the crust, is it considered healthy food?', 'nnannu5@gmail.com', '2018-11-19 17:06:10', 'health', 'nitin rohilla');

-- --------------------------------------------------------

--
-- Table structure for table `tblmovies`
--

CREATE TABLE `tblmovies` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'movies',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmovies`
--

INSERT INTO `tblmovies` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(3, 'What is your top three favourite crime movies?', '', 'yashnain@gmail.com', '2018-11-19 17:29:54', 'movies', 'yash nain');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotifications`
--

CREATE TABLE `tblnotifications` (
  `sno` int(11) NOT NULL,
  `commenter` varchar(50) DEFAULT NULL,
  `poster` varchar(50) DEFAULT NULL,
  `postno` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT 'unread',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotifications`
--

INSERT INTO `tblnotifications` (`sno`, `commenter`, `poster`, `postno`, `category`, `STATUS`, `DATE`) VALUES
(2, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:16:04'),
(3, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(4, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(5, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(6, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(7, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(8, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(9, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(10, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-15 16:42:59'),
(11, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 2, 'health', 'read', '2018-11-16 01:50:41'),
(12, 'sourabh manjhu', 'sourabh.manjhu@gmail.com', 1, 'movies', 'read', '2018-11-16 02:10:08'),
(13, 'sourabh manjhu', 'aggarwal922@gmail.com', 3, 'health', 'read', '2018-11-16 04:55:52'),
(14, 'sourabh manjhu', 'nnannu5@gmail.com', 2, 'food', 'read', '2018-11-16 05:16:51'),
(15, 'kapil jaiswal', 'aggarwal922@gmail.com', 3, 'technology', 'read', '2018-11-19 17:07:16'),
(16, 'prince tuteja', 'sourabh.manjhu@gmail.com', 1, 'health', 'read', '2018-11-19 01:31:44'),
(17, 'kapil jaiswal', 'sourabh.manjhu@gmail.com', 3, 'science', 'read', '2018-11-19 07:57:12'),
(18, 'sourabh manjhu', 'kapiljaiswal94@gmail.com', 2, 'movies', 'read', '2018-11-19 07:49:11'),
(19, 'kapil jaiswal', 'kapiljaiswal94@gmail.com', 2, 'movies', 'read', '2018-11-19 07:50:29'),
(20, 'sourabh manjhu', 'kapiljaiswal94@gmail.com', 4, 'science', 'read', '2018-11-19 07:59:59'),
(21, 'nitin rohilla', 'princetuteja@gmail.com', 1, 'food', 'unread', '2018-11-19 17:04:39'),
(22, 'gulshan garg', 'princetuteja@gmail.com', 1, 'food', 'unread', '2018-11-19 17:10:02'),
(23, 'gulshan garg', 'nnannu5@gmail.com', 4, 'health', 'unread', '2018-11-19 17:10:50'),
(24, 'kapil jaiswal', 'aggarwal922@gmail.com', 1, 'sports', 'unread', '2018-11-19 17:14:28'),
(25, 'kapil jaiswal', 'nnannu5@gmail.com', 4, 'health', 'unread', '2018-11-19 17:16:08'),
(26, 'kapil jaiswal', 'princetuteja@gmail.com', 1, 'food', 'unread', '2018-11-19 17:17:16'),
(27, 'sourabh manjhu', 'kapiljaiswal94@gmail.com', 5, 'science', 'read', '2018-11-20 06:14:24'),
(28, 'sourabh manjhu', 'aggarwal922@gmail.com', 1, 'sports', 'unread', '2018-11-19 17:20:58'),
(29, 'sourabh manjhu', 'nnannu5@gmail.com', 4, 'health', 'unread', '2018-11-19 17:21:55'),
(30, 'sourabh manjhu', 'princetuteja@gmail.com', 1, 'food', 'unread', '2018-11-19 17:22:35'),
(31, 'yash nain', 'sourabhmanjhu@gmail.com', 4, 'technology', 'read', '2018-11-20 02:31:21'),
(32, 'yash nain', 'kapiljaiswal94@gmail.com', 5, 'science', 'read', '2018-11-20 06:14:24'),
(33, 'yash nain', 'nnannu5@gmail.com', 4, 'health', 'unread', '2018-11-19 17:27:16'),
(34, 'yash nain', 'aggarwal922@gmail.com', 1, 'sports', 'unread', '2018-11-19 17:28:33'),
(35, 'prince tuteja', 'kapiljaiswal94@gmail.com', 5, 'science', 'read', '2018-11-20 06:14:24'),
(36, 'prince tuteja', 'sourabhmanjhu@gmail.com', 4, 'technology', 'read', '2018-11-20 02:31:21'),
(37, 'prince tuteja', 'aggarwal922@gmail.com', 1, 'sports', 'unread', '2018-11-19 17:32:37'),
(38, 'prince tuteja', 'yashnain@gmail.com', 3, 'movies', 'unread', '2018-11-19 17:33:38'),
(39, 'nitin rohilla', 'sourabhmanjhu@gmail.com', 4, 'technology', 'read', '2018-11-20 02:31:21'),
(40, 'nitin rohilla', 'kapiljaiswal94@gmail.com', 5, 'science', 'read', '2018-11-20 06:14:24'),
(41, 'nitin rohilla', 'princetuteja@gmail.com', 1, 'business', 'unread', '2018-11-19 17:38:29'),
(42, 'nitin rohilla', 'yashnain@gmail.com', 3, 'movies', 'unread', '2018-11-19 17:39:22'),
(43, 'gulshan garg', 'princetuteja@gmail.com', 1, 'business', 'unread', '2018-11-19 17:42:24'),
(44, 'gulshan garg', 'yashnain@gmail.com', 3, 'movies', 'unread', '2018-11-19 17:43:08'),
(45, 'gulshan garg', 'sourabhmanjhu@gmail.com', 4, 'technology', 'read', '2018-11-20 02:31:21'),
(46, 'gulshan garg', 'nnannu5@gmail.com', 1, 'social', 'unread', '2018-11-19 17:44:28'),
(47, 'yash nain', 'nnannu5@gmail.com', 1, 'social', 'unread', '2018-11-19 17:45:40'),
(48, 'yash nain', 'princetuteja@gmail.com', 1, 'business', 'unread', '2018-11-19 17:47:29'),
(49, 'sourabh manjhu', 'princetuteja@gmail.com', 1, 'business', 'unread', '2018-11-19 17:49:25'),
(50, 'sourabh manjhu', 'nnannu5@gmail.com', 1, 'social', 'unread', '2018-11-19 17:50:19'),
(51, 'kapil jaiswal', 'nnannu5@gmail.com', 1, 'social', 'unread', '2018-11-19 17:51:35'),
(52, 'kapil jaiswal', 'sourabhmanjhu@gmail.com', 4, 'technology', 'unread', '2018-11-20 06:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblscience`
--

CREATE TABLE `tblscience` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'science',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblscience`
--

INSERT INTO `tblscience` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(5, 'Are we alone in the Universe, are there \'others\'?', '', 'kapiljaiswal94@gmail.com', '2018-11-19 17:19:25', 'science', 'kapil jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `tblsocial`
--

CREATE TABLE `tblsocial` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'social',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsocial`
--

INSERT INTO `tblsocial` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(1, 'What are some good free photo editors for Windows 10?', '', 'nnannu5@gmail.com', '2018-11-19 17:40:40', 'social', 'nitin rohilla'),
(2, 'Which food is hisar famous for?', '', 'kapiljaiswal94@gmail.com', '2018-11-20 06:13:24', 'social', 'kapil jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `tblsports`
--

CREATE TABLE `tblsports` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'sports',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsports`
--

INSERT INTO `tblsports` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(1, 'Who is your favorite WWE wrestler before the year 2000 and in 2018?', '', 'aggarwal922@gmail.com', '2018-11-19 17:13:12', 'sports', 'gulshan garg');

-- --------------------------------------------------------

--
-- Table structure for table `tbltechnology`
--

CREATE TABLE `tbltechnology` (
  `srno` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT 'technology',
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltechnology`
--

INSERT INTO `tbltechnology` (`srno`, `question`, `description`, `email`, `DATE`, `category`, `user`) VALUES
(4, 'What is the difference between iphone 8 and 8 plus?', '', 'sourabhmanjhu@gmail.com', '2018-11-19 17:24:39', 'technology', 'sourabh manjhu');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `srno` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT 'user',
  `preference1` varchar(50) DEFAULT NULL,
  `preference2` varchar(50) DEFAULT NULL,
  `preference3` varchar(50) DEFAULT NULL,
  `preference4` varchar(50) DEFAULT NULL,
  `preference5` varchar(50) DEFAULT NULL,
  `preference6` varchar(50) DEFAULT NULL,
  `preference7` varchar(50) DEFAULT NULL,
  `preference8` varchar(50) DEFAULT NULL,
  `block` varchar(50) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`srno`, `firstname`, `lastname`, `email`, `pwd`, `question`, `answer`, `mobile`, `type`, `preference1`, `preference2`, `preference3`, `preference4`, `preference5`, `preference6`, `preference7`, `preference8`, `block`) VALUES
(1, 'sourabh', 'manjhu', 'sourabh.manjhu@gmail.com', 'adminlogin', 'favorite number', '3316', 7015971394, 'admin', 'technology', 'science', 'health', 'sports', 'business', 'food', 'social', 'movies', 'no'),
(2, 'sourabh', 'manjhu', 'sourabhmanjhu@gmail.com', 'pass1234', 'favorite number', '3316', 7015971394, 'user', 'technology', 'science', 'health', 'sports', '', '', '', '', 'yes'),
(8, 'prince', 'tuteja', 'princetuteja@gmail.com', 'pass1234', 'favorite car', 'audi', 9586485785, 'user', '', 'science', 'health', '', '', '', '', '', 'no'),
(9, 'kapil', 'jaiswal', 'kapiljaiswal94@gmail.com', 'pass1234', 'favorite bike', 'duke', 9868948578, 'user', 'technology', 'science', '', 'sports', '', '', '', '', 'no'),
(10, 'yash', 'nain', 'yashnain@gmail.com', 'pass1234', 'favorite book', 'gulliver\'s travel', 9859684852, 'user', '', '', '', '', '', 'food', 'social', 'movies', 'no'),
(11, 'gulshan', 'garg', 'aggarwal922@gmail.com', 'aman', 'school??', 'lord shiva', 8059130363, 'user', 'technology', 'science', '', '', 'business', '', '', 'movies', 'no'),
(12, 'nitin', 'rohilla', 'nnannu5@gmail.com', 'nitin', 'nitin', 'nitin', 1, 'user', '', '', '', '', '', 'food', '', '', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentbusiness`
--
ALTER TABLE `commentbusiness`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commentfood`
--
ALTER TABLE `commentfood`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commenthealth`
--
ALTER TABLE `commenthealth`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commentmovies`
--
ALTER TABLE `commentmovies`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commentscience`
--
ALTER TABLE `commentscience`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commentsocial`
--
ALTER TABLE `commentsocial`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commentsports`
--
ALTER TABLE `commentsports`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `commenttechnology`
--
ALTER TABLE `commenttechnology`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblbusiness`
--
ALTER TABLE `tblbusiness`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblhealth`
--
ALTER TABLE `tblhealth`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblmovies`
--
ALTER TABLE `tblmovies`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tblscience`
--
ALTER TABLE `tblscience`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblsocial`
--
ALTER TABLE `tblsocial`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tblsports`
--
ALTER TABLE `tblsports`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tbltechnology`
--
ALTER TABLE `tbltechnology`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentbusiness`
--
ALTER TABLE `commentbusiness`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commentfood`
--
ALTER TABLE `commentfood`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commenthealth`
--
ALTER TABLE `commenthealth`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `commentmovies`
--
ALTER TABLE `commentmovies`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `commentscience`
--
ALTER TABLE `commentscience`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commentsocial`
--
ALTER TABLE `commentsocial`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commentsports`
--
ALTER TABLE `commentsports`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commenttechnology`
--
ALTER TABLE `commenttechnology`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblbusiness`
--
ALTER TABLE `tblbusiness`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblhealth`
--
ALTER TABLE `tblhealth`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblmovies`
--
ALTER TABLE `tblmovies`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tblscience`
--
ALTER TABLE `tblscience`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsocial`
--
ALTER TABLE `tblsocial`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsports`
--
ALTER TABLE `tblsports`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbltechnology`
--
ALTER TABLE `tbltechnology`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
