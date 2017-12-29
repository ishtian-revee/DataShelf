-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 12:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `pp_path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `name`, `email`, `password`, `phone`, `gender`, `hire_date`, `pp_path`) VALUES
('Admin', 'Admin Admin', 'admin@admin.com', 'admin@11', '01911111111', 'Female', '2008-06-06', NULL),
('admin_rev', 'Admin Rev', 'rev@admin.com', 'admin@rev', '01911111111', 'Male', '2005-05-05', NULL),
('admin_swarna', 'Admin Swarna', 'swarna@dshelf.ccom', 'admin@swarna', '01754545499', 'Female', '2009-03-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `username` varchar(30) NOT NULL,
  `mds_id` int(11) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`username`, `mds_id`, `price`) VALUES
('', 23, 0.99),
('', 24, 0),
('', 25, 20),
('', 28, 120),
('', 31, 17);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_view`
-- (See below for the actual view)
--
CREATE TABLE `cart_view` (
`mds_id` int(11)
,`username` varchar(30)
,`title` varchar(200)
,`uploader` varchar(80)
,`price` float
);

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `cds_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `reward` float DEFAULT NULL,
  `uploader` varchar(50) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `overview_id` int(11) DEFAULT NULL,
  `discussion_id` int(11) DEFAULT NULL,
  `tags` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`cds_id`, `title`, `description`, `reward`, `uploader`, `upload_date`, `deadline`, `overview_id`, `discussion_id`, `tags`, `status`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `discussion_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_datasets`
--

CREATE TABLE `marketplace_datasets` (
  `mds_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `short_description` text,
  `price` float DEFAULT NULL,
  `uploader` varchar(80) DEFAULT NULL,
  `upload_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `context` text,
  `content` text,
  `data_path` varchar(200) DEFAULT NULL,
  `ss_path` varchar(200) DEFAULT NULL,
  `discussion_id` int(11) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `downloads` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `uploader_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_datasets`
--

INSERT INTO `marketplace_datasets` (`mds_id`, `title`, `short_description`, `price`, `uploader`, `upload_date`, `context`, `content`, `data_path`, `ss_path`, `discussion_id`, `tags`, `downloads`, `status`, `uploader_name`) VALUES
(23, 'Netflix  User Statistics', 'Dataset of user movie preferences collected over 5 years', 2, 'niaz_ds', '2017-12-01 16:36:16', 'USA regional user prefrences', 'Hello from Content', '../../uploads/niaz_ds/1514025376.0947/DemoData.zip', '../../uploads/niaz_ds/1514025376.0947/Demo.png', NULL, 'movie,drama,thriller', 7, 1, NULL),
(24, 'Titanic Passenger Information', 'Essential data for predicting the death by machine learning', 0, 'niaz_ds', '2017-12-24 01:57:29', 'Data of legendary ship titanic', 'Physical measurement of over 10K abalons on 8 different Characterstics', '../../uploads/niaz_ds/1514059049.691/DemoData.zip', '../../uploads/niaz_ds/1514059049.691/Demo.png', NULL, 'Ship,titanic', 2, 0, NULL),
(28, 'Wine Reviews', 'Wine Review From 100k customers', 120, 'niaz_ds', '2017-12-28 09:18:03', 'Test', 'test', '../../uploads/niaz_ds/1514431083.627/Info.txt', '../../uploads/niaz_ds/1514431083.627/Wine.png', NULL, 'wine,wine taste', 0, 0, NULL),
(29, 'TED Talks', ' Data about TED Talks on the TED.com website until September 21st, 2017', 29, 'ishtian.reev', '2017-12-28 09:34:35', 'hese datasets contain information about all audio-video recordings of TED Talks uploaded to the official TED.com website \r\nuntil September 21st, 2017. The TED main dataset contains information about all talks including number of views, number of comments, \r\ndescriptions, speakers and titles. The TED transcripts dataset contains the transcripts for all talks available on TED.com.\r\n', 'The official name of the TED Talk. Includes the title and the speaker.\r\ntitle: The title of the talk\r\ndescription: A blurb of what the talk is about.\r\nmain_speaker: The first named speaker of the talk.\r\nspeaker_occupation: The occupation of the main speaker.\r\nnum_speaker: The number of speakers in the talk.\r\nduration: The duration of the talk in seconds.\r\nevent: The TED/TEDx event where the talk took place.\r\nfilm_date: The Unix timestamp of the filming.\r\npublished_date: The Unix timestamp for the publication of the talk on TED.com\r\ncomments: The number of first level comments made on the talk.\r\ntags: The themes associated with the talk.\r\nlanguages: The number of languages in which the talk is available.\r\nratings: A stringified dictionary of the various ratings given to the talk (inspiring, fascinating, jaw dropping, etc.)\r\nrelated_talks: A list of dictionaries of recommended talks to watch next.\r\nurl: The URL of the talk.\r\nviews: The number of views on the talk.', '../../uploads/ishtian.reev/1514432075.6274/abalone-des.arff', '../../uploads/ishtian.reev/1514432075.6274/abalone.PNG', NULL, 'Speech,TED talks', 0, 0, NULL),
(30, 'Global Terrorism Database', 'More than 170,000 terrorist attacks worldwide, 1970-2016', 50, 'ishtian.reev', '2017-12-28 09:36:51', 'Information on more than 170,000 Terrorist Attacks\r\n\r\nThe Global Terrorism Database (GTD) is an open-source database including information on terrorist attacks around the world from 1970 through \r\n\r\n', '\r\nTime period: 1970-2016, except 1993 (2017 in progress, publication expected June 2018)\r\n\r\nUnit of analysis: Attack\r\n\r\nVariables: >100 variables on location, tactics, perpetrators, targets, and outcomes\r\n\r\nSources: Unclassified media articles (Note: Please interpret changes over time with caution. Global patterns are driven by diverse trends in particular regions, and data collection is influenced by fluctuations in access to media coverage over both time and place.)\r\n', '../../uploads/ishtian.reev/1514432211.5665/analysisxlsx.xlsx', '../../uploads/ishtian.reev/1514432211.5665/BayesNet accuracy.PNG', NULL, 'terrorisom,crime,finance', 2, 1, NULL),
(31, ' Football Events', 'More than 170,000 terrorist attacks worldwide, 1970-2016', 17, 'Raihana', '2017-12-28 09:44:36', '\r\nMost publicly available football (soccer) statistics are limited to aggregated data such as Goals, Shots, Fouls, Cards. When assessing performance \r\nor building predictive models, this simple aggregation, without any context, can be misleading. For example, a team that produced 10 shots on target \r\nfrom long range has a lower chance of scoring than a club that produced the same amount of shots from inside the box. However, metrics derived from \r\nthis simple count of shots will similarly asses the two teams.', 'This dataset is a result of a very tiresome effort of webscraping and integrating different data sources. The central element is the text \r\ncommentary. ', '../../uploads/Raihana/1514432676.3066/DemoData.zip', '../../uploads/Raihana/1514432676.3066/Demo.png', NULL, 'football,soccer', 2, 1, NULL),
(32, 'UFO Sightings', 'Reports of unidentified flying object reports in the last century', 150, 'Shawarna', '2017-12-28 09:57:32', 'This dataset contains over 80,000 reports of UFO sightings over the last century.', 'There are two versions of this dataset: scrubbed and complete. The complete data includes entries where the location of the sighting was not \r\nfound or blank (0.8146%) or have an erroneous or blank time (8.0237%). Since the reports date back to the 20th century, some older data might \r\nbe obscured. Data contains city, state, time, description, and duration of each sighting.', '../../uploads/Shawarna/1514433452.3383/DemoData.zip', '../../uploads/Shawarna/1514433452.3383/LMTtree.PNG', NULL, 'UFO,Alien', 0, 0, NULL),
(33, 'DSRC Vehicle Communications Data Set', 'This set Provides data regarding wireless communications between vehicles and road side units. two separate data sets are provided (normal scenario) and in the presence of attacker (jammer).', 65, 'Marry', '2017-12-28 14:05:45', 'Communications were setup based on IEEE 802.11p standards at 5.9Ghz. 10BSM (Basic Service messages) per second. Using Control Channel (Ch172) a 10 Mhz channel.', 'Txnid Transmitted node ID number\r\nRxnid- Received Node Id number\r\nRSS- Received Signal Strength in dbm ', '../../uploads/Marry/1514448345.5337/micro.zip', '../../uploads/Marry/1514448345.5337/dataset.png', NULL, 'Wireless,Radio', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `overview_id` int(11) NOT NULL,
  `description` text,
  `evaluation` text,
  `submission_files` text,
  `prizes` float DEFAULT NULL,
  `timeline` text,
  `competition_data` varchar(100) DEFAULT NULL,
  `data_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `username` varchar(30) NOT NULL,
  `mds_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`username`, `mds_id`, `price`, `purchase_date`) VALUES
('niaz_ds', 24, 0, '2017-12-28 09:28:47'),
('niaz_ds', 30, 50, '2017-12-28 14:23:45'),
('niaz_ds', 31, 17, '2017-12-28 14:22:31'),
('Shawarna', 23, 2, '2017-12-28 09:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `pp_path` varchar(50) DEFAULT '../common/website/ic_user_5.png',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `last_login_time` datetime DEFAULT NULL,
  `login_count` int(11) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`, `phone`, `profession`, `gender`, `dob`, `pp_path`, `status`, `last_login_time`, `login_count`, `registration_date`) VALUES
('Erlich', 'Erlich Bachman', 'bman@valley.com', 'Bachman@1234', '01818888223', 'Enterpreneur', 'Male', '1990-05-11', '../common/website/ic_user_5.png', 0, NULL, NULL, '2017-12-28 14:42:33'),
('ishtian.reev', 'Istian Reeve', 'ish.rev@dshelf.net', 'Niaz@1234', '01754545495', 'Programmer', 'Male', '1996-02-02', '../../uploads/pp/rev.png', 0, NULL, NULL, '2017-12-28 09:31:41'),
('Marry', 'Merry Ann', 'marryme@gmail.com', 'marry@me', '01815599384', 'Data Scientist', 'Male', '1980-02-02', '../../uploads/pp/test.png', 0, NULL, NULL, '2017-12-28 13:57:19'),
('niaz_ds', 'Niaz Ahmed', 'niaz@dshelf.net', 'Niaz@1234', '01754545492', 'SQA', 'Male', '1994-01-01', '../../uploads/pp/151438409362818.png', 0, NULL, NULL, '2017-09-19 19:30:54'),
('Raihana', 'Raihana Rahim', 'raihana@gmail.com', 'raihana@11', '01754545499', 'Deaigner', 'Male', '1990-01-01', '../../uploads/pp/ic_user_2.png', 0, NULL, NULL, '2017-12-28 09:38:29'),
('Shawarna', 'Fatema Swarna', 'shwarna@dshelf.net', 'Niaz@1234', '01815599384', 'Student', 'Male', '1992-09-11', '../../uploads/pp/ic_user_6.png', 0, NULL, NULL, '2017-12-28 09:55:31'),
('test1234', 'asdfa asdfasdf', 'test@testing.com', 'Niaz@1234', '01754545499', 'Testing', 'Male', '1996-02-02', '../../uploads/pp/abalone.PNG', 0, NULL, NULL, '2017-12-28 07:04:26');

-- --------------------------------------------------------

--
-- Structure for view `cart_view`
--
DROP TABLE IF EXISTS `cart_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_view`  AS  select `c`.`mds_id` AS `mds_id`,`c`.`username` AS `username`,`md`.`title` AS `title`,`md`.`uploader` AS `uploader`,`md`.`price` AS `price` from (`carts` `c` join `marketplace_datasets` `md`) where (`c`.`mds_id` = `md`.`mds_id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`username`,`mds_id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`cds_id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `marketplace_datasets`
--
ALTER TABLE `marketplace_datasets`
  ADD PRIMARY KEY (`mds_id`),
  ADD UNIQUE KEY `mds_id` (`mds_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`username`,`mds_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `cds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marketplace_datasets`
--
ALTER TABLE `marketplace_datasets`
  MODIFY `mds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
