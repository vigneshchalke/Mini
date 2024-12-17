-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 07:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555556, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-03-30 08:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomputers`
--

CREATE TABLE `tblcomputers` (
  `ID` int(10) NOT NULL,
  `ComputerName` varchar(120) DEFAULT NULL,
  `ComputerLocation` varchar(120) DEFAULT NULL,
  `IPAdd` varchar(120) DEFAULT NULL,
  `EntryDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcomputers`
--

INSERT INTO `tblcomputers` (`ID`, `ComputerName`, `ComputerLocation`, `IPAdd`, `EntryDate`) VALUES
(1, 'Acer', 'Cabin101', '127.0.0.1', '2024-03-31 09:25:58'),
(2, 'ASUS', 'Cabin102', '127.0.0.2', '2024-03-31 09:25:58'),
(3, 'DELL', 'Cabin103', '127.0.0.2', '2024-03-31 09:25:58'),
(4, 'DELL', 'Cabin104', '127.0.0.3', '2024-03-31 09:25:58'),
(5, 'Asus Gaming Laptop', 'Cabin 10', '127.0.0.01', '2024-03-31 09:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `EntryID` varchar(20) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `UserAddress` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `ComputerName` varchar(120) DEFAULT NULL,
  `IDProof` varchar(120) DEFAULT NULL,
  `InTime` timestamp NULL DEFAULT current_timestamp(),
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Fees` varchar(120) DEFAULT NULL,
  `Remark` varchar(120) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `EntryID`, `UserName`, `UserAddress`, `MobileNumber`, `Email`, `ComputerName`, `IDProof`, `InTime`, `OutTime`, `Fees`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, '398365517', 'Pushkar Mishra', 'B-120,Govindpuram, Ghaziabad', 4646464646, 'abc@gmail.com', '1', 'EG5866655', '2024-04-03 06:30:01', '2024-04-23 18:13:20', '20', 'Ok', 'Out', '2024-04-23 18:13:20'),
(2, '285255862', 'Shanu Dev', 'g-110,govindpuram ghaziabad', 6546464646, 'shanu@gmail.com', '2', 'FG9777977', '2024-04-04 09:30:10', '2024-04-23 15:07:08', '50', 'NA', 'Out', '2024-04-23 15:07:08'),
(3, '305642534', 'Khushi Chaursia', '456 falt', 7575757575, 'k@gmail.com', '4', 'et686876878', '2024-04-10 05:44:06', '2024-04-23 15:07:16', '80', 'Ok', 'Out', '2024-04-23 15:07:16'),
(4, '634737642', 'Test user', 'New Delhi India', 1234567890, 'test@test.com', '1', '184716461', '2024-04-20 07:55:41', '2024-04-23 15:07:13', '30', 'Check out', 'Out', '2024-04-23 15:07:13'),
(5, '777476809', 'Test Sample', 'K-890, ABC', 9798798789, 'test@gmail.com', '1', 'hj4567', '2024-04-24 04:49:35', NULL, NULL, NULL, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE tblbilling (
    id int(10) AUTO_INCREMENT PRIMARY KEY,
    Bill_id int(10) NOT NULL,
    start_time timestamp NULL DEFAULT current_timestamp(),
    end_time timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
    total_amount decimal(10, 2)NOT NULL
);
INSERT INTO `tblbilling` (id,Bill_id,start_time,end_time,total_amount) VALUES(
);
delete from tblbilling where id=5;

ALTER TABLE `tblbilling`
  ADD PRIMARY KEY (`id`);
UPDATE tblbilling
SET user_id =103
WHERE user_id = 23;
drop table tblbilling;
  commit;