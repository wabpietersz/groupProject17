-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 12:09 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ags`
--
CREATE DATABASE IF NOT EXISTS `ags` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ags`;

-- --------------------------------------------------------

--
-- Table structure for table `architect`
--

CREATE TABLE IF NOT EXISTS `architect` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architect`
--

INSERT INTO `architect` (`firstName`, `lastName`, `userName`, `email`, `m_id`, `nic`, `city`) VALUES
('ggg', 'ggggggg', 'ggg', 'gggggg', 'ggg', 'gggg', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `normaluser`
--

CREATE TABLE IF NOT EXISTS `normaluser` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normaluser`
--

INSERT INTO `normaluser` (`firstName`, `lastName`, `userName`, `email`, `nic`, `city`) VALUES
('xxx', 'xxx', 'xxx', 'xxx@xxx', '2354523', 'xxx'),
('aaa', 'aaa', 'aaa', 'aaa@aaaaaa', 'aa', 'aa'),
('pp', 'ppppp', 'pasindu', 'pp@pp', '111', 'tro'),
('ss', 'ss', 'ss', 'ss', 'ss', 'ss'),
('qq', 'qq', 'qqe', 'qq', 'qq', 'qqy'),
('ss', 'ss', 'ss1233', 'ss', 'ss', '123'),
('fefe', 'fefe', 'fefef', 'efef', 'fefefe', 'fefef'),
('wdwd', 'dwd', 'wd', 'dwdwd', 'dwdw', 'wdwd'),
('www', 'www', 'qwerty', 'www', 'www', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE IF NOT EXISTS `researcher` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `researchArea` varchar(50) NOT NULL,
  `uni_id` varchar(20) NOT NULL,
  `university` varchar(40) NOT NULL,
  `nic` int(9) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`firstName`, `lastName`, `userName`, `email`, `researchArea`, `uni_id`, `university`, `nic`, `city`) VALUES
('sad', 'asdad', 'sadd', 'asdad', 'asda', 'asda', 'uni', 0, 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `password`, `userType`) VALUES
('xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 0),
('aaa', 'b59c67bf196a4758191e42f76670ceba', 0),
('ppppp', '202cb962ac59075b964b07152d234b70', 0),
('ss', '3691308f2a4c2f6983f2880d32e29c84', 1),
('ss1233', '202cb962ac59075b964b07152d234b70', 1),
('fefef', 'd41d8cd98f00b204e9800998ecf8427e', 1),
('wd', '3bad6af0fa4b8b330d162e19938ee981', 1),
('w', 'ad57484016654da87125db86f4227ea3', 2),
('w', 'ad57484016654da87125db86f4227ea3', 2),
('trh', '099b3b060154898840f0ebdfb46ec78f', 2),
('trh', '099b3b060154898840f0ebdfb46ec78f', 2),
('trh', '099b3b060154898840f0ebdfb46ec78f', 2),
('trh', 'd41d8cd98f00b204e9800998ecf8427e', 2),
('dwd', '08a4415e9d594ff960030b921d42b91e', 2),
('dwd', '08a4415e9d594ff960030b921d42b91e', 2),
('asasasa', '202cb962ac59075b964b07152d234b70', 2),
('ggg', 'ba248c985ace94863880921d8900c53f', 2),
('asdasd', '202cb962ac59075b964b07152d234b70', 3),
('sadd', 'b6d767d2f8ed5d21a44b0e5886680cb9', 3),
('qwerty', '698d51a19d8a121ce581499d7b701668', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
