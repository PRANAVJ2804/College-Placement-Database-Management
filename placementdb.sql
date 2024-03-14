-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobapply_tbl`
--

CREATE TABLE `jobapply_tbl` (
  `StuID` varchar(40) NOT NULL,
  `JobID` int(11) NOT NULL,
  `Qualified` int(11) NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `placement_tbl`
--

CREATE TABLE `placement_tbl` (
  `JobID` int(11) NOT NULL,
  `JobDesc` varchar(300) NOT NULL,
  `CompanyName` varchar(300) NOT NULL,
  `PostDate` date NOT NULL,
  `InterviewDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `Stream` varchar(20) NOT NULL,
  `Qualification` varchar(25) NOT NULL,
  `OtherReq` varchar(300) NOT NULL,
  `SalPackage` varchar(20) NOT NULL,
  `Location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stureg_tbl`
--

CREATE TABLE `stureg_tbl` (
  `userName` varchar(40) NOT NULL,
  `StuID` int(11) NOT NULL,
  `StuName` varchar(50) NOT NULL,
  `StuFName` varchar(50) NOT NULL,
  `StuDOB` date NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `StuEmail` varchar(50) NOT NULL,
  `Stream` varchar(40) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `LastScore` float NOT NULL,
  `AreaOfInterest` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;