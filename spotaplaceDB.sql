-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2012 at 11:27 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spotaplaceDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `birth_month` int(2) unsigned NOT NULL,
  `birth_day` int(2) unsigned NOT NULL,
  `birth_year` int(4) unsigned NOT NULL,
  `Email` varchar(150) NOT NULL,
  `EmailVerified` bit(1) NOT NULL DEFAULT b'0',
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `Zip` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  `LastUpdateDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TermID` int(11) NOT NULL,
  `AgreetoTerms` int(11) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT '0',
  `hasBusiness` tinyint(1) NOT NULL,
  `avatar_path` varchar(100) DEFAULT NULL,
  `hash` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `fb` varchar(3) NOT NULL,
  `nov` int(10) unsigned NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` VALUES(5, '', 0, 0, 0, 'testUser1@gmail.com', '', '', '', '11205', 'test1', '5a105e8b9d40e1329780d62ea2265d8a', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 1, NULL, '', 0, '', '', 0);
INSERT INTO `accounts` VALUES(13, '', 0, 0, 0, 'ezelldb@yahoo.com', '\0', 'spring', 'sdsfs', '', '', '77efe19c0d79ef2a1448c557bf0f3447', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 0, NULL, '217eedd1ba8c592db97d0dbe54c7adfc', 0, '', '', 0);
INSERT INTO `accounts` VALUES(14, '', 0, 0, 0, 'shelton.peeples@gmail.com', '\0', 'Jersey City', 'NJ', '', '', 'aec4bbac2fa7e90f478691150adebdb4', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0', 0, NULL, '0d7de1aca9299fe63f3e0041f02638a3', 0, '', '', 0);
INSERT INTO `accounts` VALUES(15, '', 0, 0, 0, 'shelton.peeples@gmail.com', '\0', 'Jersey City', 'NJ', '', '', 'aec4bbac2fa7e90f478691150adebdb4', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0', 0, NULL, '0d3180d672e08b4c5312dcdafdf6ef36', 0, '', '', 0);
INSERT INTO `accounts` VALUES(18, '', 0, 0, 0, 'ezelldb@yahoo.com', '\0', 'Brooklyn', 'New York', '', '', '77efe19c0d79ef2a1448c557bf0f3447', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0', 0, NULL, 'c51ce410c124a10e0db5e4b97fc2af39', 0, '', '', 0);
INSERT INTO `accounts` VALUES(23, 'Ezell Burke', 0, 0, 0, 'ezell@ezellburke.com', '\0', 'Brooklyn', 'New York', '', '', '8674bbebacf051d0c209b05a38291a4a', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 1, NULL, '58ae749f25eded36f486bc85feb3f0ab', 35, 'male', '', 0);
INSERT INTO `accounts` VALUES(66, '', 0, 0, 0, 'mike@mike.com', '', '', '', '', 'mike', '18126e7bd3f84b3f3e4df094def5b7de', '2012-02-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 1, NULL, '18126e7bd3f84b3f3e4df094def5b7de', 0, '', '', 0);
INSERT INTO `accounts` VALUES(126, 'Ezell Burke', 0, 0, 0, 'iamezell@gmail.com', '\0', '', '', '', '', '77efe19c0d79ef2a1448c557bf0f3447', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 1, NULL, 'cbb6a3b884f4f88b3a8e3d44c636cbd8', 0, '', 'yes', 0);
INSERT INTO `accounts` VALUES(124, '', 0, 0, 0, 'iamnotezell.com', '\0', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 0, NULL, '8fecb20817b3847419bb3de39a609afe', 0, '', 'yes', 0);
INSERT INTO `accounts` VALUES(128, 'Vanessa Olivier', 0, 0, 0, 'vanessaolivier@gmail.com', '\0', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '1', 0, NULL, '8e6b42f1644ecb1327dc03ab345e618b', 0, '', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `alert_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `create_date` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alert_type_id` int(11) NOT NULL,
  `is_hidden` bit(1) NOT NULL,
  `message` varchar(255) NOT NULL,
  `fb` varchar(5) NOT NULL,
  PRIMARY KEY (`alert_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alerts`
--


-- --------------------------------------------------------

--
-- Table structure for table `alerttypes`
--

CREATE TABLE `alerttypes` (
  `alert_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`alert_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alerttypes`
--


-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid_proposal` varchar(400) NOT NULL,
  `bid_price` int(15) NOT NULL,
  `bid_place` int(10) unsigned NOT NULL,
  `bid_time_limit` int(10) unsigned NOT NULL,
  `business_id` int(10) unsigned NOT NULL,
  `request_id` int(11) NOT NULL,
  `bid_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=204 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` VALUES(188, 'this is an example bid', 0, 0, 0, 113, 171, '2012-08-16 17:56:28');
INSERT INTO `bids` VALUES(189, 'I should see this dynamically', 0, 0, 0, 113, 171, '2012-08-17 23:26:03');
INSERT INTO `bids` VALUES(190, 'I should see this dynamically one time', 0, 0, 0, 113, 171, '2012-08-17 23:27:36');
INSERT INTO `bids` VALUES(191, 'I should see this dynamically one time 2', 0, 0, 0, 113, 171, '2012-08-17 23:31:15');
INSERT INTO `bids` VALUES(192, 'I will sell it', 0, 0, 0, 107, 172, '2012-09-02 00:02:46');
INSERT INTO `bids` VALUES(193, 'boo', 0, 0, 0, 118, 172, '2012-09-25 22:51:39');
INSERT INTO `bids` VALUES(194, 'boo', 0, 0, 0, 118, 172, '2012-09-25 22:55:16');
INSERT INTO `bids` VALUES(195, 'hey', 0, 0, 0, 118, 172, '2012-09-25 23:04:03');
INSERT INTO `bids` VALUES(196, 'hey', 0, 0, 0, 118, 172, '2012-09-25 23:23:01');
INSERT INTO `bids` VALUES(197, 'booya', 0, 0, 0, 118, 172, '2012-09-25 23:27:35');
INSERT INTO `bids` VALUES(198, 'karateeeea!!', 0, 0, 0, 118, 172, '2012-09-25 23:40:40');
INSERT INTO `bids` VALUES(199, 'karateeeea!!2', 0, 0, 0, 118, 172, '2012-09-25 23:42:53');
INSERT INTO `bids` VALUES(200, 'karateeeea!!3', 0, 0, 0, 118, 172, '2012-09-25 23:49:05');
INSERT INTO `bids` VALUES(201, 'karateeeea!!4', 0, 0, 0, 118, 172, '2012-09-25 23:49:36');
INSERT INTO `bids` VALUES(202, 'karateeeea!!5', 0, 0, 0, 118, 172, '2012-09-25 23:56:42');
INSERT INTO `bids` VALUES(203, 'I can give it you', 0, 0, 0, 118, 172, '2012-09-26 16:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `bizztoindustry`
--

CREATE TABLE `bizztoindustry` (
  `bizztoindustry_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  PRIMARY KEY (`bizztoindustry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `bizztoindustry`
--

INSERT INTO `bizztoindustry` VALUES(48, 101, 2);
INSERT INTO `bizztoindustry` VALUES(49, 101, 7);
INSERT INTO `bizztoindustry` VALUES(50, 102, 2);
INSERT INTO `bizztoindustry` VALUES(51, 106, 1);
INSERT INTO `bizztoindustry` VALUES(52, 107, 1);
INSERT INTO `bizztoindustry` VALUES(53, 107, 4);
INSERT INTO `bizztoindustry` VALUES(54, 107, 6);
INSERT INTO `bizztoindustry` VALUES(55, 107, 9);
INSERT INTO `bizztoindustry` VALUES(56, 107, 17);
INSERT INTO `bizztoindustry` VALUES(57, 108, 1);
INSERT INTO `bizztoindustry` VALUES(58, 108, 2);
INSERT INTO `bizztoindustry` VALUES(59, 108, 3);
INSERT INTO `bizztoindustry` VALUES(60, 108, 14);
INSERT INTO `bizztoindustry` VALUES(61, 108, 15);
INSERT INTO `bizztoindustry` VALUES(62, 108, 16);
INSERT INTO `bizztoindustry` VALUES(63, 108, 17);
INSERT INTO `bizztoindustry` VALUES(64, 109, 1);
INSERT INTO `bizztoindustry` VALUES(65, 110, 1);
INSERT INTO `bizztoindustry` VALUES(66, 110, 9);
INSERT INTO `bizztoindustry` VALUES(67, 111, 1);
INSERT INTO `bizztoindustry` VALUES(68, 111, 8);
INSERT INTO `bizztoindustry` VALUES(69, 112, 1);
INSERT INTO `bizztoindustry` VALUES(70, 112, 2);
INSERT INTO `bizztoindustry` VALUES(71, 112, 3);
INSERT INTO `bizztoindustry` VALUES(72, 113, 1);
INSERT INTO `bizztoindustry` VALUES(73, 115, 1);
INSERT INTO `bizztoindustry` VALUES(74, 116, 1);
INSERT INTO `bizztoindustry` VALUES(75, 117, 1);
INSERT INTO `bizztoindustry` VALUES(76, 118, 1);
INSERT INTO `bizztoindustry` VALUES(77, 118, 18);

-- --------------------------------------------------------

--
-- Table structure for table `BizzToUser`
--

CREATE TABLE `BizzToUser` (
  `btu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `business_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`btu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `BizzToUser`
--


-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `business_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name_of_business` varchar(50) NOT NULL,
  `ein` varchar(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(15) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `phone_1` varchar(20) DEFAULT NULL,
  `phone_2` varchar(20) DEFAULT NULL,
  `fax` varchar(10) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `email_1` varchar(50) DEFAULT NULL,
  `email_2` varchar(50) DEFAULT NULL,
  `avatar` binary(1) NOT NULL DEFAULT '0',
  `descrip` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `avatar_path` varchar(100) NOT NULL,
  `icon_path` varchar(200) NOT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` VALUES(107, 7, 'Ezell''s bizz part two', '', '464 Pine st', 'Brooklyn', 'New York', 11208, 0, NULL, NULL, '2324555556', NULL, '2324555556', 'www.ezelltwo.com', 'iamezell@gmail.com', NULL, '0', 'This is my business there are many like it but this is mine!', 0, 'business_accounts/business_id_107/avatar_img/57584690-12092244-400225.jpg', '');
INSERT INTO `businesses` VALUES(103, 66, 'mikes Bizz', '', 'doesn''t matter', 'doesn''t matter', 'doesn''t matter', 11111, 1, NULL, NULL, 'doesn''t matter', 'doesn''t matter', 'doesn''t ma', 'doesn''t matter', 'doesn''t matter', 'doesn''t matter', '0', 'doesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matterdoesn''t matter', 0, '', '');
INSERT INTO `businesses` VALUES(106, 7, 'ezells bizz', '', '5050 ezells great street St', 'Brooklyn', 'New York', 0, 1, NULL, NULL, '555-5555', NULL, '', 'www.ezellisthebest.com', 'ezell@ezellisthebest.com', NULL, '0', 'yoyo', 0, '', '');
INSERT INTO `businesses` VALUES(108, 7, 'Ezell''s 3rd business', '', '464 Pine st', 'Brooklyn', 'New York', 11208, 0, NULL, NULL, '444-444-6678', NULL, '444-444-66', 'www.part3.com', 'iamezell@gmail.com', NULL, '0', 'Hi its working somewhat now', 0, '', '');
INSERT INTO `businesses` VALUES(109, 0, 'eeee', '', '', '', '', 0, 0, NULL, NULL, '', NULL, '', '', '', NULL, '0', 'esdfdfz', 0, '', '');
INSERT INTO `businesses` VALUES(110, 72, 'Ezell''s 4th business', '', '464 Pine st', 'Brooklyn', 'New York', 11208, 0, NULL, NULL, '', NULL, '', '', 'iamezell@gmail.com', NULL, '0', 'this is the fourth try', 0, '', '');
INSERT INTO `businesses` VALUES(111, 73, 'Ezell''s 5th busines5', '', '464 Pine st', 'Brooklyn', 'New York', 11208, 0, NULL, NULL, '', NULL, '', '', 'iamezell@gmail.com', NULL, '0', '', 0, '', '');
INSERT INTO `businesses` VALUES(112, 73, 'Ezell''s 8th busines', '', '', '', '', 0, 0, NULL, NULL, '', NULL, '', '', '', NULL, '0', 'this is my next business', 0, '', '');
INSERT INTO `businesses` VALUES(113, 95, 'ezell in the house', '', '464 Pine st', 'Brooklyn', 'New York', 0, 0, NULL, NULL, '666-777-8888', NULL, '666-777-88', '', 'ezell@stillcoo.com', NULL, '0', 'This is really one of the greatest test hbusineses since the inception of the business model', 0, '', '');
INSERT INTO `businesses` VALUES(114, 95, 'ezell really in the house', '', '', '', '', 0, 0, NULL, NULL, '', NULL, '', '', '', NULL, '0', '', 0, '', '');
INSERT INTO `businesses` VALUES(115, 95, 'Ezell''s crazy sales', '', '464', '', 'New York', 11208, 0, NULL, NULL, '3479895141', NULL, '3479895141', 'Burke', 'iamezell@gmail.com', NULL, '0', '', 0, '', '');
INSERT INTO `businesses` VALUES(116, 95, 'Ezell''s crazy sales', '', '464', '', 'New York', 11208, 0, NULL, NULL, '3479895141', NULL, '3479895141', 'Burke', 'iamezell@gmail.com', NULL, '0', '', 0, '', '');
INSERT INTO `businesses` VALUES(117, 95, 'Ezell''s crazy sales', '', '464', '', 'New York', 11208, 0, NULL, NULL, '3479895141', NULL, '3479895141', 'Burke', 'iamezell@gmail.com', NULL, '0', '', 0, '', '');
INSERT INTO `businesses` VALUES(118, 126, 'Nobody beats the Bizz!', '', '464 Pine st', 'Brooklyn', 'NY', 11208, 0, NULL, NULL, '3479895141', NULL, '', 'Burke', 'iamezell@gmail.com', NULL, '0', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `businessMail`
--

CREATE TABLE `businessMail` (
  `business_mail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `message_body` varchar(100) NOT NULL,
  `token` int(11) NOT NULL,
  `reply` int(1) NOT NULL DEFAULT '0',
  `belongs_to` int(10) NOT NULL,
  `sead` int(1) NOT NULL DEFAULT '0',
  `read` int(1) NOT NULL DEFAULT '0',
  `delete` int(1) NOT NULL DEFAULT '0',
  `thread_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  PRIMARY KEY (`business_mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `businessMail`
--

INSERT INTO `businessMail` VALUES(17, 69, 56, 'hello', 0, 0, 0, 1, 0, 0, 11, '2011-07-29 18:13:41', 'manifest_jones');

-- --------------------------------------------------------

--
-- Table structure for table `businessprofile`
--

CREATE TABLE `businessprofile` (
  `business_profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `avatar_path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`business_profile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `businessprofile`
--

INSERT INTO `businessprofile` VALUES(1, 1, NULL);
INSERT INTO `businessprofile` VALUES(2, 2, NULL);
INSERT INTO `businessprofile` VALUES(3, 3, NULL);
INSERT INTO `businessprofile` VALUES(4, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friend_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `thefriend_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` VALUES(1, 4, 5);
INSERT INTO `friends` VALUES(2, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `industries_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`industries_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` VALUES(1, 'Appliances', '');
INSERT INTO `industries` VALUES(2, 'Auto parts', '');
INSERT INTO `industries` VALUES(3, 'Babies and Kids', '');
INSERT INTO `industries` VALUES(4, 'Books', '');
INSERT INTO `industries` VALUES(5, 'Cameras', '');
INSERT INTO `industries` VALUES(6, 'Clothing', '');
INSERT INTO `industries` VALUES(7, 'Computers', '');
INSERT INTO `industries` VALUES(8, 'Electronics', '');
INSERT INTO `industries` VALUES(9, 'Flowers and Gifts', '');
INSERT INTO `industries` VALUES(10, 'Furniture', '');
INSERT INTO `industries` VALUES(11, 'Grocery and Gourmet', '');
INSERT INTO `industries` VALUES(12, 'Health and Beauty', '');
INSERT INTO `industries` VALUES(13, 'Indoor Living', '');
INSERT INTO `industries` VALUES(14, 'Software', '');
INSERT INTO `industries` VALUES(15, 'Sporting Goods', '');
INSERT INTO `industries` VALUES(16, 'Toys', '');
INSERT INTO `industries` VALUES(17, 'Video Games', '');
INSERT INTO `industries` VALUES(18, 'Accessories', '');
INSERT INTO `industries` VALUES(19, 'Art', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `message_body` varchar(500) NOT NULL,
  `sender_id` int(10) unsigned NOT NULL,
  `senders_name` varchar(50) NOT NULL,
  `token` int(11) NOT NULL,
  `reply` int(1) NOT NULL DEFAULT '0',
  `belongs_to` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` VALUES(1, 4, 'this isi your first message', 5, '', 0, 0, 0);
INSERT INTO `message` VALUES(2, 6, 'this isi your first message', 7, '', 0, 0, 0);
INSERT INTO `message` VALUES(3, 4, 'this another message', 5, '', 0, 0, 0);
INSERT INTO `message` VALUES(4, 5, 'this is a reply', 4, 'Ezell', 1, 1, 1);
INSERT INTO `message` VALUES(5, 5, 'I dont know', 4, 'Ezell', 1, 1, 1);
INSERT INTO `message` VALUES(6, 5, 'this is the third reply', 4, 'Ezell', 3, 1, 1);
INSERT INTO `message` VALUES(7, 5, 'this is rthe fourth message reply', 4, 'Ezell', 4, 1, 1);
INSERT INTO `message` VALUES(8, 0, 'this isi your first message', 4, '', 5, 1, 1);
INSERT INTO `message` VALUES(9, 56, 'hello this is amessafg', 12, 'ezell', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `news_feed_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `sender_pic_path` varchar(100) NOT NULL,
  `message_body` varchar(100) NOT NULL,
  PRIMARY KEY (`news_feed_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` VALUES(1, 4, 5, 'testUser1', '', 'This is the first test newsfeed messsage');
INSERT INTO `newsfeed` VALUES(2, 4, 5, 'testUser1', '', 'this is the second news feed message');
INSERT INTO `newsfeed` VALUES(3, 4, 5, 'testUser1', '', 'This is the third and last newsfeed message from user 5');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeedcomments`
--

CREATE TABLE `newsfeedcomments` (
  `nfc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_feed_id` int(10) unsigned NOT NULL,
  `comment_message` varchar(100) NOT NULL,
  `senders_id` int(10) unsigned NOT NULL,
  `senders_name` varchar(50) NOT NULL,
  PRIMARY KEY (`nfc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `newsfeedcomments`
--

INSERT INTO `newsfeedcomments` VALUES(1, 1, 'this is a new comment for the comment', 5, '');
INSERT INTO `newsfeedcomments` VALUES(2, 1, 'This is a comment for the 1 section', 5, 'Ezell');
INSERT INTO `newsfeedcomments` VALUES(3, 1, 'this is me', 4, 'Ezell');
INSERT INTO `newsfeedcomments` VALUES(4, 1, 'this is me again', 4, 'Ezell');
INSERT INTO `newsfeedcomments` VALUES(5, 1, 'hello', 4, 'Ezell');

-- --------------------------------------------------------

--
-- Table structure for table `privacyflags`
--

CREATE TABLE `privacyflags` (
  `privacy_flag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `privacy_flag_type_id` int(10) unsigned NOT NULL,
  `profile_id` int(10) unsigned NOT NULL,
  `visibility_level_id` int(10) unsigned NOT NULL,
  `time_stamp` timestamp NULL DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`privacy_flag_id`),
  UNIQUE KEY `profile_id` (`profile_id`),
  UNIQUE KEY `visibility_level_id` (`visibility_level_id`),
  UNIQUE KEY `privacy_flag_type_id` (`privacy_flag_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `privacyflags`
--


-- --------------------------------------------------------

--
-- Table structure for table `privacyflagtypes`
--

CREATE TABLE `privacyflagtypes` (
  `privacy_flag_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fielld_name` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`privacy_flag_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `privacyflagtypes`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` VALUES(1, 'Appliances', 'Some Keywords here');
INSERT INTO `product` VALUES(2, 'Auto Parts', '');
INSERT INTO `product` VALUES(3, 'Babies and Kids', '');
INSERT INTO `product` VALUES(4, 'Books', '');
INSERT INTO `product` VALUES(5, 'Cameras', '');
INSERT INTO `product` VALUES(6, 'Clothings', '');
INSERT INTO `product` VALUES(7, 'Computers ', '');
INSERT INTO `product` VALUES(8, 'Electronics', '');
INSERT INTO `product` VALUES(9, 'Flowers and Gifts', '');
INSERT INTO `product` VALUES(10, 'Furniture', '');
INSERT INTO `product` VALUES(11, 'Grocery and Gourmet', '');
INSERT INTO `product` VALUES(12, 'Health and Beauty', '');
INSERT INTO `product` VALUES(13, 'Indoor and Living', '');
INSERT INTO `product` VALUES(14, 'Software', '');
INSERT INTO `product` VALUES(15, 'Sporting Goods', '');
INSERT INTO `product` VALUES(16, 'Toys', '');
INSERT INTO `product` VALUES(17, 'Video Games', '');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `profile_name` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  `im_msn` varchar(40) NOT NULL,
  `im_aol` varchar(40) NOT NULL,
  `im_gim` varchar(40) NOT NULL,
  `im_yim` varchar(40) NOT NULL,
  `im_icq` varchar(40) NOT NULL,
  `skype` varchar(40) NOT NULL,
  `signiture` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `profiles`
--


-- --------------------------------------------------------

--
-- Table structure for table `requestreplies`
--

CREATE TABLE `requestreplies` (
  `request_reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `reply_message` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`request_reply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `requestreplies`
--

INSERT INTO `requestreplies` VALUES(3, 69, 85, 'I will one up that guy', 50);
INSERT INTO `requestreplies` VALUES(4, 69, 86, 'I would love to reply to this', 50);
INSERT INTO `requestreplies` VALUES(5, 69, 85, 'I would reply to this once again', 50);
INSERT INTO `requestreplies` VALUES(6, 69, 85, 'this is a description', 50);
INSERT INTO `requestreplies` VALUES(7, 69, 85, 'here it is', 60);
INSERT INTO `requestreplies` VALUES(8, 69, 85, 'more pliances', 50);
INSERT INTO `requestreplies` VALUES(9, 69, 85, 'hey and ', 500);
INSERT INTO `requestreplies` VALUES(10, 69, 86, 'These are tyhe best pliances\r\n', 1000);
INSERT INTO `requestreplies` VALUES(11, 69, 85, 'yeah boy', 50);
INSERT INTO `requestreplies` VALUES(12, 69, 85, 'let them beat me', 3);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `business_id` int(10) unsigned NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `industry` varchar(10) NOT NULL,
  `message_body` varchar(100) NOT NULL,
  `request_pic` varchar(100) NOT NULL,
  `avatar_path` varchar(50) DEFAULT NULL,
  `time_committed` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `chanel` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `winner_id` int(11) NOT NULL,
  `service_id` int(4) unsigned NOT NULL,
  `product_id` int(4) unsigned NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` VALUES(183, 126, 0, 2, 'products', 'I want some pampers', '', NULL, 'Sep 29, 2012 16:32:14 -0400', '', '', '0cc42c70e414fb62002add8b1739dd21', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(182, 126, 0, 0, 'products', 'this is a appliances need', '', NULL, 'Sep 28, 2012 22:33:43 -0400', '', '', '88a2f7b4a7aba677f5f569d0f3381050', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(181, 126, 0, 18, 'services', '', '', NULL, 'Sep 23, 2012 11:45:45 -0400', '', '', 'a5771bce93e200c36f7cd9dfd0e5deaa', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(180, 126, 0, 18, 'services', '', '', NULL, 'Sep 23, 2012 11:42:32 -0400', '', '', '17e62166fc8586dfa4d1bc0e1742c08b', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(179, 126, 0, 18, 'services', '', '', NULL, 'Sep 23, 2012 11:40:52 -0400', '', '', 'd3d9446802a44259755d38e6d163e820', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(178, 126, 0, 18, 'services', '', '', NULL, 'Sep 23, 2012 11:31:24 -0400', '', '', 'fe9fc289c3ff0af142b6d3bead98a923', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(177, 126, 0, 18, 'services', '', '', NULL, 'Sep 23, 2012 11:31:10 -0400', '', '', '32bb90e8976aab5298d5da10fe66f21d', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(176, 126, 0, 18, 'services', 'work', '', NULL, 'Sep 23, 2012 11:29:39 -0400', '', '', 'ac4a5cc454017037b8a489aa55213135', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(174, 126, 0, 18, 'services', 'work', '', NULL, 'Sep 23, 2012 11:25:35 -0400', '', '', '540baa4af4b7be69e9a119ffe4f1d354', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(175, 126, 0, 18, 'services', 'work', '', NULL, 'Sep 23, 2012 11:26:53 -0400', '', '', '30c53e06c7c299cae399a8e378d26a0f', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(173, 126, 0, 17, 'services', 'I want to repair my shoes.', '', NULL, 'Sep 22, 2012 17:32:20 -0400', 'Brooklyn', 'New York', '8ba6475f4cfe33510d4648a9b48ebfb3', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(172, 126, 0, 1, 'products', 'I want a car 79 jeep cherokee', '', NULL, 'Sep 4, 2012 23:59:45 -0400', '', '', '83db4f32f0f1a86838f292c33cfaccda', 1, 0, 0, 0);
INSERT INTO `requests` VALUES(171, 126, 0, 1, 'products', 'This is the first request that I have made.', '', NULL, 'Aug 19, 2012 10:26:09 -0400', 'Brooklyn', 'New York', '0a6d707e6fa25b8b98e33ac4dd4e58d5', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `votesup` int(11) NOT NULL,
  `votesdown` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` VALUES(1, 'This is a test review', 23, 118, 1, 0);
INSERT INTO `review` VALUES(2, 'This is another review', 23, 118, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `servicemessage`
--

CREATE TABLE `servicemessage` (
  `service_message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `message_body` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`service_message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `servicemessage`
--

INSERT INTO `servicemessage` VALUES(1, 0, 0, 4, '', '', '');
INSERT INTO `servicemessage` VALUES(2, 1, 1, 4, 'this is another test for this damn thing', 'Brooklyn', 'New York');
INSERT INTO `servicemessage` VALUES(3, 0, 5, 4, 'this is just a test', '', '');
INSERT INTO `servicemessage` VALUES(4, 0, 4, 4, 'this another', '', '');
INSERT INTO `servicemessage` VALUES(5, 0, 8, 4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` VALUES(1, 'Repair', '');
INSERT INTO `services` VALUES(2, 'Rent', '');
INSERT INTO `services` VALUES(3, 'Medical', '');
INSERT INTO `services` VALUES(4, 'Dining', '');
INSERT INTO `services` VALUES(5, 'Children', '');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `owner` int(11) NOT NULL,
  PRIMARY KEY (`thread_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` VALUES(1, '2011-07-29 14:38:43', 0, 0);
INSERT INTO `thread` VALUES(2, '2011-07-29 14:49:10', 1, 0);
INSERT INTO `thread` VALUES(3, '2011-07-29 14:55:03', 1, 0);
INSERT INTO `thread` VALUES(4, '2011-07-29 16:07:32', 1, 0);
INSERT INTO `thread` VALUES(5, '2011-07-29 16:21:38', 1, 69);
INSERT INTO `thread` VALUES(6, '2011-07-29 17:59:02', 1, 69);
INSERT INTO `thread` VALUES(7, '2011-07-29 18:00:44', 1, 69);
INSERT INTO `thread` VALUES(8, '2011-07-29 18:01:43', 1, 69);
INSERT INTO `thread` VALUES(9, '2011-07-29 18:07:14', 1, 69);
INSERT INTO `thread` VALUES(10, '2011-07-29 18:09:28', 1, 69);
INSERT INTO `thread` VALUES(11, '2011-07-29 18:13:41', 1, 69);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `business_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `videos`
--


-- --------------------------------------------------------

--
-- Table structure for table `visibility_levels`
--

CREATE TABLE `visibility_levels` (
  `visibility_levels_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`visibility_levels_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `visibility_levels`
--

