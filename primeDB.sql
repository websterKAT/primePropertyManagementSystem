-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2017 at 11:34 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primeDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdminUsers`
--

CREATE TABLE `AdminUsers` (
  `idAdminUsers` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AdminUsers`
--

INSERT INTO `AdminUsers` (`idAdminUsers`, `email`, `userName`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `idproperty` int(11) NOT NULL,
  `propertyType` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `addressLine1` varchar(45) DEFAULT NULL,
  `addressLine2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `revenue` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `imgName` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `postState` varchar(25) NOT NULL DEFAULT 'PENDING',
  `Users_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`idproperty`, `propertyType`, `district`, `addressLine1`, `addressLine2`, `city`, `revenue`, `description`, `imgName`, `Date`, `postState`, `Users_username`) VALUES
(22, 'Apartments', 'Jaffna', 'no 900', 'Kilinichchi road', 'Jaffna', '8999999999', 'this is just an Apartment', 'apart1.jpg', '2017-10-22', 'APPROVED', 'abc'),
(23, 'Commercial Property', 'Nuwara Eliya', 'No 924', 'Pattipola road', 'Nuwara Eliya', '500000', 'this is just a commercial property\r\nvery Attractive', 'green.jpg', '2017-10-22', 'APPROVED', 'abc'),
(24, 'Holiday and Short-Term Rental', 'Kandy', 'No 5/678', 'Peradeniaya road', 'Hanthana', '800000000', 'this is insane', 'ddd.jpg', '2017-10-22', 'APPROVED', 'abc'),
(25, 'Houses', 'Colombo', 'no 9876', 'Nugegoda road', 'Colombo 7', '95014112', 'this is indian Ocean', 'sea.jpg', '2017-10-22', 'APPROVED', 'abc'),
(26, 'Other', 'Mannar', 'dddd', 'ddddd', 'Nugegoda', '78550000', 'this is test', 'land1.png', '2017-10-22', 'APPROVED', 'costa'),
(27, 'Houses', 'Ampara', 'efeaf', 'vasvasv', 'savasvasv', '80000', 'aafafasasfasfasfasf', 'apart1.jpg', '2017-10-23', 'APPROVED', 'abc'),
(28, 'Houses', 'Anuradhapura', 'hdhgs', 'ssss', 'gshg', 'ahag', 'dhhhh', 'green.jpg', '2017-10-23', 'PENDING', 'abc'),
(29, 'Houses', 'Anuradhapura', 'hghg', 'hgh', 'gshw', '1466', 'hfvdurn', 'green.jpg', '2017-10-23', 'PENDING', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `username` varchar(25) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`username`, `firstName`, `lastName`, `email`, `telephone`, `password`) VALUES
('abc', 'Tha', 'la', 'lakshankat@gmail.com', '0313313261', '900150983cd24fb0d6963f7d28e17f72'),
('costa', 'Thilan', 'Costa', 'costa@gmail.com', '0312247188', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AdminUsers`
--
ALTER TABLE `AdminUsers`
  ADD PRIMARY KEY (`idAdminUsers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `userName_UNIQUE` (`userName`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`idproperty`,`Users_username`),
  ADD KEY `fk_property_Users_idx` (`Users_username`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password_UNIQUE` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AdminUsers`
--
ALTER TABLE `AdminUsers`
  MODIFY `idAdminUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `idproperty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_property_Users` FOREIGN KEY (`Users_username`) REFERENCES `Users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
