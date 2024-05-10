-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 12:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPass` varchar(200) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL DEFAULT 'files/Default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `FullName`, `Email`, `PhoneNumber`, `Password`, `ConfirmPass`, `Pincode`, `Address`, `ProfilePic`) VALUES
(1, 'JatinMaster', 'Jatin@j.ja', 11, '$2y$10$ZBSDP/jis1qW1JXXKg284OZKiQl8EuvbIkPSKts9XJZOzCx0o8t9u', '$2y$10$hoqXDo0zsi3qh1wv5Ji6SudgODLMlwsFREZh05Pys18b5SDMwbK1S', 364240, 'sihor213', ''),
(32, 'jatin', 'j@a.c', 1230012312, '$2y$10$sj6eDS.7.kMa5n/HG.TqTupm0Vnf/9SYdn4sHRUk8XY/nsgy1KmFm', '$2y$10$Lh3fYTNixpI7EGN3PI5YJuoc7xX8ICsObq.7VJhHLnrACmMM8KzNO', 0, '', ''),
(33, 'Admin_Jatin', 'a@a.a', 2147483647, '$2y$10$aOU9YpISap1Je0z3kTPxt.g6FPyHPf4zgVIuE.g/LjmFCSS2tX8oK', '$2y$10$E1cQPZGS3drNRrVlEfozNOUECCOwhARO.X9gMlj58UVTItxf1CK8W', 364240, 'bhavnagar', 'files/Admin_Jatin.jpg'),
(34, 'ADMIN01', 'a@b.c', 2147483647, '$2y$10$kHkgS/CXV2tLy3JBj/HvkuYZpioa4llswJd/svzoXPfTsvBJS9qeS', '$2y$10$56f0MyLoN5CiEKWDM5Jd3Ozy.e/bMF8pX1ZfE2cjdvrDZmckVhyMa', 0, '', 'files/ADMIN01.jpg'),
(35, 'test1', 't1@t.t', 0, '$2y$10$rakZ.Q5bM.OVdP9og.s4D.ZLdjz2JFhuNPZtCa842l3E39V/DfnGG', '$2y$10$lyJMdjebcQn/TKOV9tlZvuaP/syw16ZEvKp6iVVPO3L59NKFaTN7m', 0, '', ''),
(36, 'jaja', 'jaja@ja.ja', 1234567890, '$2y$10$RKvkY/ihc4xJc54irH3VFeVFLqDK/5NPLN4rJ/JNlvSmYgW5sJ2iO', '$2y$10$oGlxJ14rGsCf7v/67sbwO.LPtsnwnO64CXdudj.7DntJ3h9yPFnby', 0, '', 'files/Default.jpg'),
(37, 'OMom', 'om@om.om', 1010101212, '$2y$10$RhBmNDDoirGGhtf1sb/tTujT9DOOPDTidfeIIFgsWeWUs26eApDi6', '$2y$10$J0keG2gT9m47YA8MpRwR1uf/RnA7D45v5aHOJ5W35ecLJyDNgKbo2', 0, '', 'files/OMom.jpg'),
(38, 'Jatin Galdhariya', 'jatin@mail.com', 2147483647, '$2y$10$XQvg347TwQbxg6A6WZXozemxZ4w/Nkt.ec91XqZdOpzwyivaeCoFy', '$2y$10$OctMCONlfMF1su8Uda2f6.y3xwdj2j4x2LqyGgZr4zF6zRkH8LAqK', 0, '', 'files/Default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `spid` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `SpProfilePic` varchar(255) DEFAULT NULL,
  `Service` varchar(50) NOT NULL,
  `WorkExp` varchar(50) NOT NULL,
  `Fees` int(100) NOT NULL,
  `Discription` varchar(500) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceproviders`
--

INSERT INTO `serviceproviders` (`spid`, `FullName`, `Email`, `PhoneNumber`, `SpProfilePic`, `Service`, `WorkExp`, `Fees`, `Discription`, `Password`, `ConfirmPass`) VALUES
(1, 'D1', 'd1@d.d', 2147483647, 'files/1.png', 'barber', '0-1 year', 100, 'dummy1', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(2, 'D2', 'd2@d.d', 2147483647, 'files/2.png', 'other', '0-1 year', 200, 'dummy2', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(3, 'D3', 'd3@d.d', 2147483647, 'files/3.png', 'repairservice', '0-1 year', 100, 'dummy3', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(4, 'D4', 'd4@d.d', 2147483647, 'files/4.jpg\r\n', 'plumber', '0-1 year', 400, 'dummy4', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(5, 'D5', 'd5@d.d', 2147483647, 'files/5.png', 'mechanic', '0-3 year', 600, 'dummy5', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(6, 'D6', 'd6@d.d', 2147483647, 'files/6.png', 'electrician', '0-2 year', 400, 'dummy6', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(7, 'D7', 'd7@d.d', 2147483647, 'files/7.jpg', 'carpenter', '0-1 year', 700, 'dummy7', '$2y$10$H7Q3tI7/xksDn9vPu0.jbeMhGjNZ0OGxNVHl04JAXAd6X6blAuwIG', '$2y$10$s/l1w/GtYLnrNfwUfu5v7OflYf4tnZk7Qg5HeFLVrhK9b90cEvAlu'),
(10, 'D8', 'd8@d.d', 2147483647, 'files/images2.jpg', 'barber', '5+ years', 100000, 'Dummy8', '$2y$10$oP7zVrt4zgQK4wekXFfdy.Ie7HYuRud3xu9qeygjecs.liVXIabC2', '$2y$10$Q8Ryv60DLoMVzg11HcdcDe8LF77.bMLN85X6UjL9/oKkeg6N6oyxm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`spid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
