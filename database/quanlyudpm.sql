-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 11:53 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyudpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `chungloai`
--

CREATE TABLE IF NOT EXISTS `chungloai` (
  `ID_cate` int(11) NOT NULL,
  `namecate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chungloai`
--

INSERT INTO `chungloai` (`ID_cate`, `namecate`) VALUES
(22, 'Nike'),
(23, 'Gucci'),
(24, 'Anta');

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE IF NOT EXISTS `dangky` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`ID`, `name`, `gender`, `address`, `phone`, `email`, `hobby`, `img`) VALUES
(39, 'van', 'Nữ', 'Chọn quê', '0123456', 'van@gmail.com', 'GameMusicFilmTravel', 'anh1.jpg'),
(40, 'Van123', 'Nữ', 'Hà Nội', '0123456', 'van123@gmail.com', 'GameMusicTravel', ''),
(41, 'Thu Vân Vân', 'Nữ', 'Bắc Ninh', '01234455', 'thuvanvan@gmail.com', 'GameFilm', 'anh1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE IF NOT EXISTS `dangnhap` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`email`, `pass`) VALUES
('admin@gmail.com', 'admin'),
('thuvanvan@gmail.com', '12345'),
('van@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `quequan`
--

CREATE TABLE IF NOT EXISTS `quequan` (
  `ID_ad` int(11) NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quequan`
--

INSERT INTO `quequan` (`ID_ad`, `Address`) VALUES
(38, 'Bắc Ninh'),
(39, 'Hưng Yên'),
(40, 'Bắc Giang'),
(41, 'Cao Bằng'),
(42, 'Bắc Giang'),
(43, 'Hưng Yên');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`name`, `code`, `category`, `money`, `description`, `picture`) VALUES
('Hoa hồng', 'HH1', 'Choice category', 10000, 'Hoa hồng Pháp', 'HH1.jpg'),
('Hoa hồng', 'HH2', 'Choice category', 20000, 'Hoa hồng ngoại', 'HH2.jpg'),
('Hoa hồng', 'HH3', 'Choice category', 30000, 'Hoa hồng Việt Nam', 'HH3.jpg'),
('Hoa hồng', 'HH4', 'Choice category', 40000, 'Hoa hồng Pháp', 'HH2.jpg'),
('Hoa hồng', 'HH5', 'Choice category', 2000, 'Hoa hồng Việt Nam', 'HH3.jpg'),
('Hoa hồng', 'HH6', 'Choice category', 40000, 'Hoa hồng Việt Nam', 'HH2.jpg'),
('Hoa hồng', 'HH7', 'Choice category', 20000, 'Hoa hồng Pháp', 'HH1.jpg'),
('Hoa hồng', 'HH8', 'Choice category', 10000, 'Hoa hồng Pháp', 'HH2.jpg'),
('Hoa hồng', 'HH9', 'Choice category', 10000, 'hoa', 'HH3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chungloai`
--
ALTER TABLE `chungloai`
  ADD PRIMARY KEY (`ID_cate`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quequan`
--
ALTER TABLE `quequan`
  ADD PRIMARY KEY (`ID_ad`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chungloai`
--
ALTER TABLE `chungloai`
  MODIFY `ID_cate` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `quequan`
--
ALTER TABLE `quequan`
  MODIFY `ID_ad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
