-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Dec 15, 2022 at 06:46 PM

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
  `publishDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `Tagline` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Visibility` varchar(255) NOT NULL,
  `devlogImg` varchar(255) NOT NULL,
  `gameName` varchar(255) NOT NULL,
  `devLogID` int(11) NOT NULL,
  `ReleaseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devlog`
--


INSERT INTO `devlog` (`publishDate`, `description`, `name`, `Tagline`, `Type`, `Visibility`, `devlogImg`, `gameName`, `devLogID`, `ReleaseDate`) VALUES
('2022-12-15 14:59:25', 'sfvdfbdf fdbdzgbdb fb dfxb df b dfbfdfb', 'devlog test', 'tagline vdfv', 'Tutorial', 'public', 'SS-devlog test.jpg', 'NFS', 9, NULL),
('2022-12-15 15:05:45', 'jyjguyg', 'hgjk', 'lkkjnl', 'Tutorial', 'public', 'SS-hgjk.jpg', 'kk', 10, NULL),
('2022-12-15 15:29:49', 'fbdfbcnb bcvn dfhbdfddgnfgn', 'devtest77', 'dghnfdg', 'Major Update', 'draft', 'SS-devtest77.jpg', 'IGI', 11, NULL),
('2022-12-15 16:02:28', 'dsvvv xdvfvv ', 'dev6666', 'dsvfx', 'Tutorial', 'draft', 'SS-dev6666.jpg', 'saan', 12, '2023-01-02'),
('2022-12-15 16:18:25', 'gdfgbdfb\r\nghgfhnv\r\ngygjhmvnmjk,\r\nhjghmjm', 'dev testing', 'dgdg', 'Tutorial', 'draft', 'SS-dev testing.jpg', 'IGI', 13, '2023-01-08');


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


INSERT INTO `freeasset` (`assetID`, `assetName`, `assetGenre`, `assetDetails`, `assetScreenshots`, `assetTitle`, `assetTagline`, `assetClasification`, `assetReleaseStatus`, `assetTags`, `assetFile`, `assetLicense`, `assetCoverImg`, `assetVisibility`, `assetVideoURL`, `assetType`, `assetStyle`, `assetCreatorID`, `created_date`) VALUES
(55, 'Sprout Lands', '', '', 'SS-Sprout Lands-0.png,SS-Sprout Lands-1.png', '', 'cute pixel pastel farming asset pack', '2d', 'released', 'pixelart, sprout lan', 'Asset-Sprout Lands.zip', 'open-source', 'Cover-Sprout Lands.png', 0, 'https://www.youtube.com/watch?v=dnJUE2ptB5U', 'tileset', 'pixelart', 12, '2022-12-15'),
(56, 'New Asset', '', '', 'SS-New Asset-0.jpg,SS-New Asset-1.jpg', '', 'cute pixel pastel farming asset pack', '3d', 'released', 'food, sprites, icons', 'Asset-New Asset.zip', 'open-source', 'Cover-New Asset.jpg', 0, 'https://www.youtube.com/watch?v=dnJUE2ptB5U', 'sprite', 'pixelart', 13, '2022-12-15');


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
  `gameTagline` varchar(255) NOT NULL,
  `gameClassification` varchar(50) NOT NULL,
  `gameTags` varchar(30) NOT NULL,
  `gameFeatures` varchar(255) NOT NULL,
  `gameFile` varchar(255) NOT NULL,
  `gameVisibility` tinyint(1) NOT NULL,
  `gameCoverImg` varchar(255) NOT NULL,
  `gameDeveloperID` int(11) NOT NULL,
  `minOS` varchar(255) NOT NULL,
  `minProcessor` varchar(255) NOT NULL,
  `minMemory` varchar(255) NOT NULL,
  `minStorage` varchar(255) NOT NULL,
  `minGraphics` varchar(255) NOT NULL,
  `minOther` varchar(255) NOT NULL,
  `recommendOS` varchar(255) NOT NULL,
  `recommendProcessor` varchar(255) NOT NULL,
  `recommendMemory` varchar(255) NOT NULL,
  `recommendStorage` varchar(255) NOT NULL,
  `recommendGraphics` varchar(255) NOT NULL,
  `recommendOther` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freegame`
--

INSERT INTO `freegame` (`gameID`, `gameName`, `releaseStatus`, `gameDetails`, `gameScreenshots`, `gameTrailor`, `gameTagline`, `gameClassification`, `gameTags`, `gameFeatures`, `gameFile`, `gameVisibility`, `gameCoverImg`, `gameDeveloperID`, `minOS`, `minProcessor`, `minMemory`, `minStorage`, `minGraphics`, `minOther`, `recommendOS`, `recommendProcessor`, `recommendMemory`, `recommendStorage`, `recommendGraphics`, `recommendOther`) VALUES
(1, 'New Game', '', '', '', '', 'Download this ASAP', '', '', '', '', 0, 'Cover-New Game.jpg', 1, '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'New Game 1', '', '', '', '', 'Download this ASAP', '', '', '', '', 0, 'Cover-New Game 1.jpg', 1, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'fregrt', '', '', '', '', 'grhrgbrt', '', '', '', '', 0, 'Cover-fregrt.jpg', 6, '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Ghost Of Tsushima', 'not released', 'mssssssssssssssssssssssssssssdddddddddddddddddddddeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeffffffffffffffffffffffff', 'SS-Ghost Of Tsushima.png', '', 'A strikingly beautiful, featuring a gorgeous game world that is teeming with life and splendor, even during some truly dark story arcs.', 'simulation', 'ffffffffffffffffffffffffff', '', 'Game-Ghost Of Tsushima.zip', 0, 'Cover-Ghost Of Tsushima.jpg', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support'),
(19, 'ndffgfhg', 'early access', 'cccccccccccccccccccccccccccccccccccc', 'SS-ndffgfhg.png', 'https://www.youtube.com/watch?v=zqkhNPJuDIE', 'mnbjknmecrvvgb', 'RPG', 'cccccxz', '', '', 0, 'Cover-ndffgfhg.png', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support'),
(20, 'Ghost Of Tsushima', 'early access', 'qqqqqqqqqqqqqqqqsxxxxxxxxxxxxxlllllllllllllllllllll', 'SS-Ghost Of Tsushima.png', 'https://www.youtube.com/watch?v=zqkhNPJuDIE', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'simulation', 'cccccxz', 'qaaaqqq', '', 0, '', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support'),
(21, 'Ghost Of Tsushima', 'early access', 'qqqqqqqqqqqqqqqqsxxxxxxxxxxxxxlllllllllllllllllllll', 'SS-Ghost Of Tsushima.png', 'https://www.youtube.com/watch?v=zqkhNPJuDIE', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'simulation', 'cccccxz', 'qaaaqqq', '', 0, '', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support'),
(22, 'Ghost Of Tsushima', 'early access', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'SS-Ghost Of Tsushima.jpg', 'https://www.youtube.com/watch?v=zqkhNPJuDIE', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'racing', 'cdcdcdc', 'qaaaqqq', '', 0, 'Cover-Ghost Of Tsushima.jpg', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support'),
(0, 'aaaaaa', 'released', 'aaaaaaaaa', 'SS-aaaaaa.jpg', 'https://www.youtube.com/watch?v=dnJUE2ptB5U', 'aaaaaaaa', 'action', 'a', 'a', 'Game-aaaaaa.zip', 0, 'Cover-aaaaaa.jpg', 5, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

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
  `jamType` varchar(20) NOT NULL,
  `jamCriteria` varchar(255) NOT NULL,
  `jamVisibility` varchar(20) NOT NULL,
  `maxParticipants` int(11) NOT NULL,
  `canJoinAfterStarted` int(11) NOT NULL,
  `jamHostID` int(11) NOT NULL,
  `jamVoters` varchar(30) NOT NULL,
  `jamTwitter` varchar(255) NOT NULL,
  `jamCoverImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamejam`
--

INSERT INTO `gamejam` (`gameJamID`, `submissionStartDate`, `submissionEndDate`, `jamContent`, `votingEndDate`, `jamTitle`, `jamTagline`, `jamType`, `jamCriteria`, `jamVisibility`, `maxParticipants`, `canJoinAfterStarted`, `jamHostID`, `jamVoters`, `jamTwitter`, `jamCoverImg`) VALUES
(38, '2020-10-05 12:00:00', '2020-10-20 12:00:00', ' dsf fdvs', '2020-11-01 12:00:00', 'wreg', 'gergrs', 'Non-Ranked', 'qewfq erer', 'Public', 20, 1, 6, 'Submitters Only', 'sfads', ''),
(41, '2022-11-25 00:00:00', '2022-12-08 13:30:00', ' fre rfer', '2022-12-30 01:00:00', 'gtrgtrh', 'rgtrgrt', 'Non-Ranked', 'lhoil', 'Public', 10, 1, 6, 'Moderators Only', 'j,', ''),
(42, '2022-11-30 00:00:00', '2022-12-08 13:30:00', ' fer', '2022-12-30 01:00:00', 'dsfd', 'vfdvs', 'Non-Ranked', 'qewfq erer', 'Public', 20, 1, 6, 'Moderators Only', '#gmtk', ''),
(44, '2020-10-05 12:00:00', '2022-07-08 13:30:00', ' gfs ', '2020-11-01 12:00:00', 'efwreggg', 'gwr', 'Ranked', 'sdfv', 'Draft', 20, 1, 6, 'Submitters Only', 'svd', 'Cover-efwreggg.jpg'),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' hththth', '0000-00-00 00:00:00', 'GTML', 'rgrger', 'Non-Ranked', 'grg', 'Draft', 0, 1, 5, 'Submitters Only', 'hh', 'Cover-GTML.png'),
(0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' edef rgr rr', '0000-00-00 00:00:00', 'dededede', 'ded', 'Ranked', 'edef ', 'Public', 0, 1, 5, 'Public', 'edef', 'Cover-dededede.jpg'),
(0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' a', '0000-00-00 00:00:00', 'hello', 'aaaaaa', 'Ranked', 'a', 'Public', 0, 0, 5, 'Public', 'a', 'Cover-hello.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamer`
--

CREATE TABLE `gamer` (
  `gamerID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accountStatus` tinyint(1) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `loginDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamer`
--


INSERT INTO `gamer` (`gamerID`, `email`, `password`, `accountStatus`, `avatar`, `username`, `firstName`, `lastName`, `loginDate`, `logoutTime`) VALUES
(12, 'kavindupriyanath@gmail.com', 'Kimalrasanka123!', 0, '', 'prend', 'kavindu', 'priyanath', '2022-12-14 15:12:16', '2022-12-14 15:12:16'),
(13, 'kavindupriyanath1@gmail.com', 'Kimalrasanka123!', 0, '', 'pren11', 'kavindu', 'Alwis', '2022-12-15 06:22:50', '2022-12-15 06:22:50');


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
-- Indexes for table `devlog`
--
ALTER TABLE `devlog`
  ADD PRIMARY KEY (`devLogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devlog`
--
ALTER TABLE `devlog`

  MODIFY `devLogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
