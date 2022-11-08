-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 09:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indieabode`
--

-- --------------------------------------------------------

--
-- Table structure for table `addassetsale`
--

CREATE TABLE `addassetsale` (
  `assetSaleID` int(11) NOT NULL,
  `assetID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `addgamesale`
--

CREATE TABLE `addgamesale` (
  `gameSaleID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assetcart`
--

CREATE TABLE `assetcart` (
  `assetID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assetsale`
--

CREATE TABLE `assetsale` (
  `assetSaleID` int(11) NOT NULL,
  `assetClosingDate` datetime NOT NULL,
  `assetStartingDate` datetime NOT NULL,
  `discountAssetPrice` float NOT NULL,
  `assetPercentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `price` float NOT NULL,
  `capacity` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `gamerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaintID` int(11) NOT NULL,
  `priority` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `gamerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crowdfund`
--

CREATE TABLE `crowdfund` (
  `crowdFundID` int(11) NOT NULL,
  `currentAmount` float NOT NULL,
  `duration` int(11) NOT NULL,
  `expectedAmount` float NOT NULL,
  `gameDeveloperID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `cardNumber` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expireDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `devlog`
--

CREATE TABLE `devlog` (
  `devLogID` int(11) NOT NULL,
  `publishDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `gameID` int(11) NOT NULL,
  `gameDeveloperID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloadasset`
--

CREATE TABLE `downloadasset` (
  `assetID` int(11) NOT NULL,
  `gamerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloadgame`
--

CREATE TABLE `downloadgame` (
  `gamerID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freeasset`
--

CREATE TABLE `freeasset` (
  `assetID` int(11) NOT NULL,
  `assetName` varchar(50) NOT NULL,
  `assetGenre` varchar(50) NOT NULL,
  `assetDetails` text NOT NULL,
  `assetScreenshots` varchar(255) NOT NULL,
  `assetTitle` varchar(50) NOT NULL,
  `assetTagline` varchar(255) NOT NULL,
  `assetClasification` varchar(20) NOT NULL,
  `assetReleaseStatus` varchar(20) NOT NULL,
  `assetTags` varchar(20) NOT NULL,
  `assetFile` varchar(255) NOT NULL,
  `assetLicense` varchar(20) NOT NULL,
  `assetCoverImg` varchar(255) NOT NULL,
  `assetVisibility` tinyint(1) NOT NULL,
  `assetVideoURL` varchar(255) NOT NULL,
  `assetType` varchar(30) NOT NULL,
  `assetStyle` varchar(20) NOT NULL,
  `assetCreatorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freeasset`
--

INSERT INTO `freeasset` (`assetID`, `assetName`, `assetGenre`, `assetDetails`, `assetScreenshots`, `assetTitle`, `assetTagline`, `assetClasification`, `assetReleaseStatus`, `assetTags`, `assetFile`, `assetLicense`, `assetCoverImg`, `assetVisibility`, `assetVideoURL`, `assetType`, `assetStyle`, `assetCreatorID`) VALUES
(1, 'Skybox pack for Unity', '', '', '', '', 'This consists of various skyboxes', '', '', '', '', '', '', 0, '', 'Skybox', '', 1),
(14, 'New Asset', '', '', '', '', 'Buy thus one', '', '', '', '', '', '', 0, '', '', '', 5),
(16, 'New Asset 1', '', '', '', '', 'hytjytjtyjytjy', '', '', '', '', '', '', 0, '', '', '', 5),
(20, 'New Asset 2', '', '', '', '', 'h9', '', '', '', '', '', '', 0, '', '', '', 5),
(22, 'New Assets 4', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', '', 0, '', '', '', 5),
(23, 'New Assets 5', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', '', 0, '', '', '', 5),
(24, 'New Assets 6', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', 'Cover-New Assets 6.jpg', 0, '', '', '', 5),
(25, 'New Assets 7', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', 'Cover-New Assets 7.jpg', 0, '', '', '', 5),
(26, 'sword pack', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', 'Cover-sword pack.jpg', 0, '', '', '', 5),
(27, 'Red Hat Boy', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', 'Cover-Red Hat Boy.png', 0, '', '', '', 5),
(28, 'Lisa Model', '', '', '', '', 'Hi Cutie', '', '', '', '', '', 'Cover-Lisa Model.jpg', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `freegame`
--

CREATE TABLE `freegame` (
  `gameID` int(11) NOT NULL,
  `gameName` varchar(255) NOT NULL,
  `releaseStatus` varchar(50) NOT NULL,
  `gameDetails` text NOT NULL,
  `gameScreenshots` varchar(255) NOT NULL,
  `gameTrailor` varchar(255) NOT NULL,
  `gameTitle` varchar(50) NOT NULL,
  `gameTagline` varchar(255) NOT NULL,
  `gameClassification` varchar(50) NOT NULL,
  `gamePlatform` varchar(20) NOT NULL,
  `gameFeatures` varchar(30) NOT NULL,
  `gameTags` varchar(30) NOT NULL,
  `gameFile` varchar(255) NOT NULL,
  `gameVisibility` tinyint(1) NOT NULL,
  `gameCoverImg` varchar(255) NOT NULL,
  `gameDeveloperID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gamecart`
--

CREATE TABLE `gamecart` (
  `gameID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gamegenre`
--

CREATE TABLE `gamegenre` (
  `gameID` int(11) NOT NULL,
  `gameGenre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gamejam`
--

CREATE TABLE `gamejam` (
  `gameJamID` int(11) NOT NULL,
  `submissionStartDate` datetime NOT NULL,
  `submissionEndDate` datetime NOT NULL,
  `jamContent` text NOT NULL,
  `votingEndDate` datetime NOT NULL,
  `jamTitle` varchar(255) NOT NULL,
  `jamTagline` varchar(255) NOT NULL,
  `jamType` varchar(10) NOT NULL,
  `jamCriteria` varchar(255) NOT NULL,
  `jamVisibility` tinyint(1) NOT NULL,
  `maxParticipants` int(11) NOT NULL,
  `canJoinAfterStarted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gamer`
--

CREATE TABLE `gamer` (
  `gamerID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `accountStatus` tinyint(1) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `loginDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamer`
--

INSERT INTO `gamer` (`gamerID`, `email`, `password`, `accountStatus`, `avatar`, `username`, `firstName`, `lastName`, `loginDate`, `logoutTime`) VALUES
(1, '7prend@gmail.com', '1234', 0, '', 'prend', 'kavindu', 'priyanath', '2022-11-07 12:13:20', '2022-11-07 12:13:20'),
(5, 'kavindupriyanath@gmail.com', '1234', 0, '', 'pren', 'kimal', 'rasanka', '2022-11-07 16:34:23', '2022-11-07 16:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `gamesale`
--

CREATE TABLE `gamesale` (
  `gameSaleID` int(11) NOT NULL,
  `saleClosingDate` datetime NOT NULL,
  `saleStartingDate` datetime NOT NULL,
  `discountGamePrice` float NOT NULL,
  `gamePercentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gig`
--

CREATE TABLE `gig` (
  `gigID` int(11) NOT NULL,
  `gigName` varchar(50) NOT NULL,
  `gigTrailor` varchar(255) NOT NULL,
  `gigScreenshot` varchar(255) NOT NULL,
  `gigDetails` text NOT NULL,
  `gameID` int(11) NOT NULL,
  `gameDeveloperID` int(11) NOT NULL,
  `gamePublisherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `handlecomplaint`
--

CREATE TABLE `handlecomplaint` (
  `complaintID` int(11) NOT NULL,
  `gamerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `joinjam`
--

CREATE TABLE `joinjam` (
  `gamerID` int(11) NOT NULL,
  `gameJamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organizegamejam`
--

CREATE TABLE `organizegamejam` (
  `gameJamID` int(11) NOT NULL,
  `gameJamOrganizerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paidasset`
--

CREATE TABLE `paidasset` (
  `assetID` int(11) NOT NULL,
  `assetName` varchar(50) NOT NULL,
  `assetGenre` varchar(50) NOT NULL,
  `assetDetails` text NOT NULL,
  `assetScreenshots` varchar(255) NOT NULL,
  `assetTitle` varchar(50) NOT NULL,
  `assetTagline` varchar(255) NOT NULL,
  `assetClasification` varchar(50) NOT NULL,
  `assetReleaseStatus` varchar(20) NOT NULL,
  `assetTags` varchar(20) NOT NULL,
  `assetFile` varchar(255) NOT NULL,
  `assetLicence` varchar(255) NOT NULL,
  `assetCoverImg` varchar(255) NOT NULL,
  `assetVisibility` tinyint(1) NOT NULL,
  `assetVideoURL` varchar(255) NOT NULL,
  `assetType` varchar(30) NOT NULL,
  `assetStyle` varchar(50) NOT NULL,
  `assetPrice` float NOT NULL,
  `assetCreatorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paidgame`
--

CREATE TABLE `paidgame` (
  `gameID` int(11) NOT NULL,
  `gameName` varchar(50) NOT NULL,
  `releaseStatus` varchar(30) NOT NULL,
  `gameDetails` varchar(255) NOT NULL,
  `gameScreenshots` varchar(255) NOT NULL,
  `gameTrailor` varchar(255) NOT NULL,
  `gameTitle` varchar(50) NOT NULL,
  `GameTagline` varchar(255) NOT NULL,
  `gameClassification` varchar(50) NOT NULL,
  `gamePlatform` varchar(30) NOT NULL,
  `gameFeatures` varchar(50) NOT NULL,
  `gameTags` varchar(30) NOT NULL,
  `gameFile` varchar(255) NOT NULL,
  `gameVisibility` varchar(50) NOT NULL,
  `gameCoverImg` varchar(255) NOT NULL,
  `gamePrice` float NOT NULL,
  `gameDeveloperID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participatecrowdfund`
--

CREATE TABLE `participatecrowdfund` (
  `crowdFundID` int(11) NOT NULL,
  `gamerID` int(11) NOT NULL,
  `cardNumber` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expireDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `paymentAmount` float NOT NULL,
  `cardNumber` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expireDate` date NOT NULL,
  `gameID` int(11) NOT NULL,
  `assetID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `gigID` int(11) NOT NULL,
  `crowdFundID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolioID` int(11) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `postCount` int(11) NOT NULL,
  `followerCount` int(11) NOT NULL,
  `followingCount` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `gamerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rategame`
--

CREATE TABLE `rategame` (
  `gamerID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratesubmission`
--

CREATE TABLE `ratesubmission` (
  `gamerID` int(11) NOT NULL,
  `submissionID` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(11) NOT NULL,
  `submissionDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `gameJamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `gamerID` int(11) NOT NULL,
  `gameDeveloperFlag` tinyint(1) NOT NULL,
  `gamePublisherFlag` tinyint(1) NOT NULL,
  `gameJamOrgernizerFlag` tinyint(1) NOT NULL,
  `adminFlag` tinyint(1) NOT NULL,
  `assetCreatorFlag` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addassetsale`
--
ALTER TABLE `addassetsale`
  ADD PRIMARY KEY (`assetSaleID`,`assetID`),
  ADD KEY `assetID` (`assetID`);

--
-- Indexes for table `addgamesale`
--
ALTER TABLE `addgamesale`
  ADD PRIMARY KEY (`gameSaleID`),
  ADD KEY `gameID` (`gameID`);

--
-- Indexes for table `assetcart`
--
ALTER TABLE `assetcart`
  ADD PRIMARY KEY (`assetID`,`cartID`),
  ADD KEY `cartID` (`cartID`);

--
-- Indexes for table `assetsale`
--
ALTER TABLE `assetsale`
  ADD PRIMARY KEY (`assetSaleID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `crowdfund`
--
ALTER TABLE `crowdfund`
  ADD PRIMARY KEY (`crowdFundID`),
  ADD KEY `gameDeveloperID` (`gameDeveloperID`),
  ADD KEY `gameID` (`gameID`);

--
-- Indexes for table `devlog`
--
ALTER TABLE `devlog`
  ADD PRIMARY KEY (`devLogID`),
  ADD KEY `gameID` (`gameID`),
  ADD KEY `gameDeveloperID` (`gameDeveloperID`);

--
-- Indexes for table `downloadasset`
--
ALTER TABLE `downloadasset`
  ADD PRIMARY KEY (`assetID`,`gamerID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `downloadgame`
--
ALTER TABLE `downloadgame`
  ADD PRIMARY KEY (`gamerID`,`gameID`),
  ADD KEY `gameID` (`gameID`);

--
-- Indexes for table `freeasset`
--
ALTER TABLE `freeasset`
  ADD PRIMARY KEY (`assetID`),
  ADD KEY `assetCreatorID` (`assetCreatorID`);

--
-- Indexes for table `freegame`
--
ALTER TABLE `freegame`
  ADD PRIMARY KEY (`gameID`),
  ADD KEY `gameDeveloperID` (`gameDeveloperID`);

--
-- Indexes for table `gamecart`
--
ALTER TABLE `gamecart`
  ADD PRIMARY KEY (`gameID`,`cartID`),
  ADD KEY `cartID` (`cartID`);

--
-- Indexes for table `gamegenre`
--
ALTER TABLE `gamegenre`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `gamejam`
--
ALTER TABLE `gamejam`
  ADD PRIMARY KEY (`gameJamID`);

--
-- Indexes for table `gamer`
--
ALTER TABLE `gamer`
  ADD PRIMARY KEY (`gamerID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gamesale`
--
ALTER TABLE `gamesale`
  ADD PRIMARY KEY (`gameSaleID`);

--
-- Indexes for table `gig`
--
ALTER TABLE `gig`
  ADD PRIMARY KEY (`gigID`),
  ADD KEY `gameID` (`gameID`),
  ADD KEY `gameDeveloperID` (`gameDeveloperID`),
  ADD KEY `gamePublisherID` (`gamePublisherID`);

--
-- Indexes for table `handlecomplaint`
--
ALTER TABLE `handlecomplaint`
  ADD PRIMARY KEY (`complaintID`,`gamerID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `joinjam`
--
ALTER TABLE `joinjam`
  ADD PRIMARY KEY (`gamerID`,`gameJamID`),
  ADD KEY `gameJamID` (`gameJamID`);

--
-- Indexes for table `organizegamejam`
--
ALTER TABLE `organizegamejam`
  ADD PRIMARY KEY (`gameJamID`,`gameJamOrganizerID`),
  ADD KEY `gameJamOrganizerID` (`gameJamOrganizerID`);

--
-- Indexes for table `paidasset`
--
ALTER TABLE `paidasset`
  ADD PRIMARY KEY (`assetID`),
  ADD KEY `assetCreatorID` (`assetCreatorID`);

--
-- Indexes for table `paidgame`
--
ALTER TABLE `paidgame`
  ADD PRIMARY KEY (`gameID`),
  ADD KEY `gameDeveloperID` (`gameDeveloperID`);

--
-- Indexes for table `participatecrowdfund`
--
ALTER TABLE `participatecrowdfund`
  ADD PRIMARY KEY (`crowdFundID`,`gamerID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `gameID` (`gameID`),
  ADD KEY `assetID` (`assetID`),
  ADD KEY `cartID` (`cartID`),
  ADD KEY `crowdFundID` (`crowdFundID`),
  ADD KEY `gigID` (`gigID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolioID`),
  ADD UNIQUE KEY `gamerID` (`gamerID`);

--
-- Indexes for table `rategame`
--
ALTER TABLE `rategame`
  ADD PRIMARY KEY (`gamerID`,`gameID`),
  ADD KEY `gameID` (`gameID`);

--
-- Indexes for table `ratesubmission`
--
ALTER TABLE `ratesubmission`
  ADD PRIMARY KEY (`gamerID`,`submissionID`),
  ADD KEY `submissionID` (`submissionID`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submissionID`),
  ADD KEY `gameJamID` (`gameJamID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`gamerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assetsale`
--
ALTER TABLE `assetsale`
  MODIFY `assetSaleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crowdfund`
--
ALTER TABLE `crowdfund`
  MODIFY `crowdFundID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devlog`
--
ALTER TABLE `devlog`
  MODIFY `devLogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freeasset`
--
ALTER TABLE `freeasset`
  MODIFY `assetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `freegame`
--
ALTER TABLE `freegame`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamejam`
--
ALTER TABLE `gamejam`
  MODIFY `gameJamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamer`
--
ALTER TABLE `gamer`
  MODIFY `gamerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gamesale`
--
ALTER TABLE `gamesale`
  MODIFY `gameSaleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gig`
--
ALTER TABLE `gig`
  MODIFY `gigID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paidasset`
--
ALTER TABLE `paidasset`
  MODIFY `assetID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paidgame`
--
ALTER TABLE `paidgame`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submissionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addassetsale`
--
ALTER TABLE `addassetsale`
  ADD CONSTRAINT `addassetsale_ibfk_1` FOREIGN KEY (`assetID`) REFERENCES `paidasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `addgamesale`
--
ALTER TABLE `addgamesale`
  ADD CONSTRAINT `addgamesale_ibfk_1` FOREIGN KEY (`gameSaleID`) REFERENCES `gamesale` (`gameSaleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addgamesale_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assetcart`
--
ALTER TABLE `assetcart`
  ADD CONSTRAINT `assetcart_ibfk_1` FOREIGN KEY (`assetID`) REFERENCES `freeasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assetcart_ibfk_2` FOREIGN KEY (`assetID`) REFERENCES `paidasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assetcart_ibfk_3` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crowdfund`
--
ALTER TABLE `crowdfund`
  ADD CONSTRAINT `crowdfund_ibfk_1` FOREIGN KEY (`gameDeveloperID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crowdfund_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crowdfund_ibfk_3` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `devlog`
--
ALTER TABLE `devlog`
  ADD CONSTRAINT `devlog_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `devlog_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `devlog_ibfk_3` FOREIGN KEY (`gameDeveloperID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `downloadasset`
--
ALTER TABLE `downloadasset`
  ADD CONSTRAINT `downloadasset_ibfk_1` FOREIGN KEY (`assetID`) REFERENCES `freeasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadasset_ibfk_2` FOREIGN KEY (`assetID`) REFERENCES `paidasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadasset_ibfk_3` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `downloadgame`
--
ALTER TABLE `downloadgame`
  ADD CONSTRAINT `downloadgame_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadgame_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadgame_ibfk_3` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `freeasset`
--
ALTER TABLE `freeasset`
  ADD CONSTRAINT `freeasset_ibfk_1` FOREIGN KEY (`assetCreatorID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `freegame`
--
ALTER TABLE `freegame`
  ADD CONSTRAINT `freegame_ibfk_1` FOREIGN KEY (`gameDeveloperID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gamecart`
--
ALTER TABLE `gamecart`
  ADD CONSTRAINT `gamecart_ibfk_1` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gamecart_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gamecart_ibfk_3` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gamegenre`
--
ALTER TABLE `gamegenre`
  ADD CONSTRAINT `gamegenre_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gamegenre_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gig`
--
ALTER TABLE `gig`
  ADD CONSTRAINT `gig_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gig_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gig_ibfk_3` FOREIGN KEY (`gameDeveloperID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gig_ibfk_4` FOREIGN KEY (`gamePublisherID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `handlecomplaint`
--
ALTER TABLE `handlecomplaint`
  ADD CONSTRAINT `handlecomplaint_ibfk_1` FOREIGN KEY (`complaintID`) REFERENCES `complaint` (`complaintID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `handlecomplaint_ibfk_2` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joinjam`
--
ALTER TABLE `joinjam`
  ADD CONSTRAINT `joinjam_ibfk_1` FOREIGN KEY (`gameJamID`) REFERENCES `gamejam` (`gameJamID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joinjam_ibfk_2` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organizegamejam`
--
ALTER TABLE `organizegamejam`
  ADD CONSTRAINT `organizegamejam_ibfk_1` FOREIGN KEY (`gameJamID`) REFERENCES `gamejam` (`gameJamID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organizegamejam_ibfk_2` FOREIGN KEY (`gameJamOrganizerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paidasset`
--
ALTER TABLE `paidasset`
  ADD CONSTRAINT `paidasset_ibfk_1` FOREIGN KEY (`assetCreatorID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paidgame`
--
ALTER TABLE `paidgame`
  ADD CONSTRAINT `paidgame_ibfk_1` FOREIGN KEY (`gameDeveloperID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participatecrowdfund`
--
ALTER TABLE `participatecrowdfund`
  ADD CONSTRAINT `participatecrowdfund_ibfk_1` FOREIGN KEY (`crowdFundID`) REFERENCES `crowdfund` (`crowdFundID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participatecrowdfund_ibfk_2` FOREIGN KEY (`gamerID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participatecrowdfund_ibfk_3` FOREIGN KEY (`gamerID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`assetID`) REFERENCES `paidasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_4` FOREIGN KEY (`crowdFundID`) REFERENCES `crowdfund` (`crowdFundID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_5` FOREIGN KEY (`gigID`) REFERENCES `gig` (`gigID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rategame`
--
ALTER TABLE `rategame`
  ADD CONSTRAINT `rategame_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rategame_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `freegame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rategame_ibfk_3` FOREIGN KEY (`gameID`) REFERENCES `paidgame` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratesubmission`
--
ALTER TABLE `ratesubmission`
  ADD CONSTRAINT `ratesubmission_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratesubmission_ibfk_2` FOREIGN KEY (`submissionID`) REFERENCES `submission` (`submissionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`gameJamID`) REFERENCES `gamejam` (`gameJamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usertype`
--
ALTER TABLE `usertype`
  ADD CONSTRAINT `usertype_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
