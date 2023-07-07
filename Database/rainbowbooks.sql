-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2022 at 02:17 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbowbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=20223 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`) VALUES
(20221, 'admin'),
(20222, 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bookID` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `author` varchar(400) NOT NULL,
  `adminID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `title`, `price`, `description`, `author`, `adminID`, `catID`) VALUES
('ISBM-000001', 'talking heads', 780, 'romance book', 'adeline polmerston', 20221, 20221),
('ISBM-000002', 'our last summer', 980, 'romance book', 'caroline sumit', 20221, 20221),
('ISBM-000003', 'love at first sights', 700, 'romance book', 'cloudia wilson', 20221, 20221),
('ISBM-000009', 'Nefarious Games', 700, 'crime book', 'anna park', 20221, 20222),
('ISBM-000010', 'fast life', 980, 'crime', 'von', 20221, 20222),
('ISBM-000015', 'A big bubble in the sky', 700, 'fantasy', 'estelle darcy', 20221, 20223),
('ISBM-000016', 'summer in town', 880, 'fantasy', 'harper ruso', 20221, 20223),
('ISBM-000019', 'factory rest', 710, 'science', 'carolina', 20221, 20224),
('ISBM-000017', 'medusa', 920, 'science', 'chad gibbona', 20221, 20224);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `adminID` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=MyISAM AUTO_INCREMENT=202213 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `name`, `adminID`, `password`) VALUES
(20221, 'romance', '20221', 'admin'),
(20222, 'crime and thriller', '20221', 'admin'),
(20223, 'fantasy', '20221', 'admin'),
(20224, 'science fiction', '20221', 'admin'),
(20225, 'poetry', '20221', 'admin'),
(20226, 'historical', '20221', 'admin'),
(20227, 'religion', '20221', 'admin'),
(20228, 'fairy tales', '20221', 'admin'),
(20229, 'mystery', '20221', 'admin'),
(202210, 'biography', '20221', 'admin'),
(202211, 'art', '20221', 'admin'),
(202212, 'academic and educational', '20221', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Email` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Email` varchar(50) NOT NULL,
  `Fullname` varchar(150) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Fullname`, `Contact`, `Password`) VALUES
('uia@gmail.com', 'UIA', '1234', '12345'),
('a@gmail.com', 'aaa', '1234', '12345'),
('u@gmail.com', 'uuu', '12', '12'),
('kka@gmail.com', 'kka', '12345', '12345'),
('q@gmail.com', 'q', '1234567891', 'q'),
('p@gmail.com', 'p', '1234567891', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
