-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Dec 15, 2022 at 06:49 AM

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
  `description` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `Tagline` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Visibility` varchar(255) NOT NULL,
  `devlogImg` varchar(255) NOT NULL,
  `gameName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devlog`
--

INSERT INTO `devlog` (`devLogID`, `publishDate`, `description`, `name`, `Tagline`, `Type`, `Visibility`, `devlogImg`, `gameName`) VALUES
(83, '2022-12-15 05:30:53', 'fef', 'df', 'f', 'Game Design', 'public', '', 'fef'),
(84, '2022-12-15 05:32:47', 'geg', 'fg', 'ge', 'Tutorial', 'public', '$SS-fg.jpg', 'geg'),
(85, '2022-12-15 05:34:05', 'geg', 'fg', 'ge', 'Tutorial', 'public', '$SS-fg.jpg', 'geg'),
(86, '2022-12-15 05:43:06', 'bfbfb', 'bf', 'bf', 'Game Design', 'public', 'SS-bf.jpg', ''),
(87, '2022-12-15 05:44:06', 'dwdw', 'dwd', 'ddw', 'Major Update', 'public', 'SS-dwd.jpg', '');

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
(28, 'Lisa Model', '', '', '', '', 'Hi Cutie', '', '', '', '', '', 'Cover-Lisa Model.jpg', 0, '', '', '', 1),
(29, 'New Assets 11', '', '', '', '', 'Buy this one ASAP', '', '', '', '', '', 'Cover-New Assets 11.jpg', 0, '', '', '', 1),
(30, 'New Asset 12', '', '', '', '', 'Buy this one ASAP', 'visualEffects', '', '', '', '', 'Cover-New Asset 12.jpg', 0, '', '', '', 1),
(31, 'Food Icons', '', 'Food Icons - 50+ Stylized Anime Food Art Pack contains 50+ food icons:\r\n\r\n\r\nFeatures:\r\n\r\n- 53 Food Icons\r\n\r\n- Sorted named, easy to read\r\n\r\n- Hand Painted Stylized\r\n\r\n- High and low-resolution sizes\r\n\r\n- Mobile Ready\r\n\r\n- Demo Scene', 'Cover-Food Icons.png', '', '50+ Stylized Anime Food Art Pack', '2d', 'Prototype', 'food, sprites, icons', '', 'copyleft', 'Cover-Food Icons.png', 0, '', '', '', 5),
(32, 'Food Icons 2', '', '50+ Stylized Anime Food Art Pack', 'SS-Food Icons 2.png', '', '50+ Stylized Anime Food Art Pack', 'textures', 'Prototype', 'food, sprites, icons', '', 'permissive', 'Cover-Food Icons 2.png', 0, '', '', '', 5),
(33, 'New Asset 44', '', 'gtehyjr j  jyj yjy jyjyj y', '', '', 'Buy this one ASAP', '2d', 'released', 'j jyjyj', '', 'proprietary', '', 0, '', '', '', 5),
(34, 'New Asset 44', '', 'gtehyjr j  jyj yjy jyjyj y', 'SS-New Asset 44.jpg', '', 'Buy this one ASAP', '2d', 'released', 'j jyjyj', '', 'proprietary', '', 0, '', '', '', 5),
(35, 'e frgeg', '', 'thy5jh uju', 'SS-e frgeg.png', '', 'ggethth', '2d', 'Prototype', 'j uju', '', 'proprietary', 'Cover-e frgeg.png', 0, '', '', '', 5),
(36, 'New Asset 23', '', 'tyj k k k ki kik i', 'SS-New Asset 23.png', '', '5h5jk jk', '2d', 'Prototype', 'h h hyjyj jyj', '', 'proprietary', 'Cover-New Asset 23.png', 0, '', '', '', 5),
(37, 'New Asset 333', '', 'gh h jukj kiki l oil ', 'SS-New Asset 333.png', '', 'Buy this one ASAP', '2d', 'Upcoming', 'h hy jjuj ', '', 'permissive', 'Cover-New Asset 333.png', 0, '', '', '', 5),
(38, 'fe feg', '', 'tr htrh h yhj y j', 'SS-fe feg.png', '', 'rgrgr', '2d', 'Prototype', 'yt jj', 'Asset-fe feg.txt', 'proprietary', 'Cover-fe feg.png', 0, '', '', '', 5),
(39, 'New Asset 15', '', '', 'SS-New Asset 15-0.jpg', '', 'jkkkkkkkkkkkkkkkkkkk', 'visualEffects', 'Prototype', 'm mmrfmlr', '', 'permissive', 'Cover-New Asset 15.jpg', 0, '', 'character', '16bit', 9);

INSERT INTO `freeasset` (`assetID`, `assetName`, `assetGenre`, `assetDetails`, `assetScreenshots`, `assetTitle`, `assetTagline`, `assetClasification`, `assetReleaseStatus`, `assetTags`, `assetFile`, `assetLicense`, `assetCoverImg`, `assetVisibility`, `assetVideoURL`, `assetType`, `assetStyle`, `assetCreatorID`, `created_date`) VALUES
(55, 'Sprout Lands', '', '', 'SS-Sprout Lands-0.png,SS-Sprout Lands-1.png', '', 'cute pixel pastel farming asset pack', '2d', 'released', 'pixelart, sprout lan', 'Asset-Sprout Lands.zip', 'open-source', 'Cover-Sprout Lands.png', 0, 'https://www.youtube.com/watch?v=dnJUE2ptB5U', 'tileset', 'pixelart', 12, '2022-12-15');

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
(22, 'Ghost Of Tsushima', 'early access', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'SS-Ghost Of Tsushima.jpg', 'https://www.youtube.com/watch?v=zqkhNPJuDIE', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'racing', 'cdcdcdc', 'qaaaqqq', '', 0, 'Cover-Ghost Of Tsushima.jpg', 7, 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', ' English Language Support', 'Windows10', 'Intel Core I5', '8 GB', '14 GB', 'Nvidia GeForce 1660', 'English Language Support');

(26, 'Stray', 'early access', 'Stray is a 2022 adventure game developed by BlueTwelve Studio and published by Annapurna Interactive. The story follows a stray cat who falls into a walled city populated by robots, machines, and mutant bacteria, and sets out to return to the surface with the help of a drone companion, B-12. The game is presented through a third-person perspective. The player traverses by leaping across platforms and climbing up obstacles, and can interact with the environment to open new paths. Using B-12, they can store items found throughout the world and hack into technology to solve puzzles. Throughout the game, the player must evade the antagonistic Zurks and Sentinels, which attempt to kill them.', 'SS-Stray.jpg', 'https://www.youtube.com/watch?v=dnJUE2ptB5U', 'follows a stray cat who falls into a walled city populated by robots, machines', 'action', 'cat, game, 3d', 'singleplayer', 'Game-Stray.zip', 0, 'Cover-Stray.jpg', 12, 'windows 7', 'Intel Core I3', '4 GB', '5 GB', 'mx330', 'English', 'windows 10', 'Intel Core I5', '8 GB', '10 GB', 'mx1650', 'English');


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
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' hththth', '0000-00-00 00:00:00', 'GTML', 'rgrger', 'Non-Ranked', 'grg', 'Draft', 0, 1, 5, 'Submitters Only', 'hh', 'Cover-GTML.png');

(46, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ' hrth', '0000-00-00 00:00:00', 'thrt', 'thtr', '', 'thtrh', 'Draft', 0, 1, 12, 'Submitters Only', 'thr', 'Cover-thrt.png');


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


INSERT INTO `gamer` (`gamerID`, `email`, `password`, `accountStatus`, `avatar`, `username`, `firstName`, `lastName`, `loginDate`, `logoutTime`, `verified`, `token`) VALUES
(1, '7prend@gmail.com', '1234', 0, '', 'prend', 'kavindu', 'priyanath', '2022-11-07 12:13:20', '2022-11-07 12:13:20', '', ''),
(5, 'kavindupriyanath@gmail.com', '1234', 0, '', 'pren', 'kimal', 'rasanka', '2022-11-07 16:34:23', '2022-11-07 16:34:23', '', ''),
(6, 'Hima@gmail.com', '1234', 0, '', 'Hima', 'ds', 'as', '2022-11-09 07:14:35', '2022-11-09 07:14:35', '', ''),
(7, 'nadeedarshi1999@gmail.com', '1234', 0, '', 'darshi', 'nadee', 'darshika', '2022-11-10 20:59:51', '2022-11-10 20:59:51', '', ''),
(8, 'ruwanhanska99@gmail.com', '$2y$10$TopLDJh0cj5QpTInxA', 0, '', 'nadee_darshika', '', '', '2022-12-15 00:54:45', '2022-12-15 00:54:45', '', 'cd7e19e6f7f9052401c702779aa9e55099f749ccbe321c6aeb8509576cfc378b8a1dc6b8663a4fd44786a23cecc3f8d438bd'),
(9, 'sandaru@gmail.com', '$2y$10$jb5pQ6XABhahq5AoikJlX.7xMOrOokm70wR0aweGHvAYaQ1TQA46W', 0, '', 'sandaru', '', '', '2022-12-15 01:02:02', '2022-12-15 01:02:02', '', '1d7e1f28864e6fae354d895a57faaafb1d3837b691cfd45856d9a2e8d6cd1c3ca7582fa16b4a8fca2e827b5cdd105db1baed');
INSERT INTO `gamer` (`gamerID`, `email`, `password`, `accountStatus`, `avatar`, `username`, `firstName`, `lastName`, `loginDate`, `logoutTime`) VALUES
(12, 'kavindupriyanath@gmail.com', 'Kimalrasanka123!', 0, '', 'prend', 'kavindu', 'priyanath', '2022-12-14 15:12:16', '2022-12-14 15:12:16');

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
  ADD PRIMARY KEY (`devLogID`);

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
  ADD PRIMARY KEY (`gameJamID`),
  ADD KEY `jamHostID` (`jamHostID`);

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
  MODIFY `devLogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `freeasset`
--
ALTER TABLE `freeasset`
  MODIFY `assetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;


--
-- AUTO_INCREMENT for table `freegame`
--
ALTER TABLE `freegame`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gamejam`
--
ALTER TABLE `gamejam`
  MODIFY `gameJamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;


--
-- AUTO_INCREMENT for table `gamer`
--
ALTER TABLE `gamer`
  MODIFY `gamerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Constraints for table `downloadasset`
--
ALTER TABLE `downloadasset`
  ADD CONSTRAINT `downloadasset_ibfk_1` FOREIGN KEY (`assetID`) REFERENCES `freeasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadasset_ibfk_2` FOREIGN KEY (`assetID`) REFERENCES `paidasset` (`assetID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downloadasset_ibfk_3` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
