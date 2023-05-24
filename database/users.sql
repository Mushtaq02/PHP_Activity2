-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 مايو 2023 الساعة 20:41
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(70) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(20) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`Id`, `FullName`, `UserName`, `Password`, `Email`, `Country`, `Phone`) VALUES
(967000001, 'Mohammed Mushtaq', 'mushtaq02', 'm7732', 'mohammedpasher@gmail.com', 'Egypt', '773237060'),
(967000002, 'Ahomed Moneer', 'a7med', 'a7ned', 'ahmed7727@gmail.com', 'Iraq', '773487964'),
(967000012, 'Osama Mustafa', '5rtjgfcjst', 'sgfvb', 'jtyghjdhf@srdfgg.hvk', 'Oman', '776246500'),
(967000014, 'Mohammed Abdul-Rawof', 'fawof', 'rawof', 'mohammedabdul-rawof7766@gmail.com', 'Bahrain', '776653731'),
(967000016, 'Abdul-Haq Khaled', 'haq776', 'haq776', 'haq776@gmail.com', 'Syria', '776158990'),
(967000105, '', '', '', '', 'Yemen', ''),
(967000106, '', '', '', '', 'Yemen', ''),
(967000107, '', '', '', '', 'Yemen', ''),
(967000108, '', '', '', '', 'Yemen', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=967000109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
