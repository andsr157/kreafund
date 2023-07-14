-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 09:56 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreafund`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
(1, 'BCA'),
(2, 'MANDIRI'),
(3, 'BNI'),
(4, 'BRI'),
(5, 'PERMATA');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Art'),
(2, 'Music'),
(3, 'Film');

-- --------------------------------------------------------

--
-- Table structure for table `item_temp`
--

CREATE TABLE `item_temp` (
  `item_temp_id` int(11) NOT NULL,
  `reward_item_id` int(11) NOT NULL,
  `item_name` varchar(60) NOT NULL,
  `qty` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
(1, 'Jakarta'),
(2, 'Surabaya'),
(3, 'Bandung'),
(4, 'Solo'),
(5, 'Sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `subtitle` text,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `video` varchar(50) DEFAULT 'default.mp4',
  `goal` int(12) NOT NULL DEFAULT '0',
  `duration` int(11) NOT NULL DEFAULT '30',
  `status` varchar(10) NOT NULL DEFAULT 'creating',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  `finish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `title`, `subtitle`, `description`, `category_id`, `subcat_id`, `location_id`, `image`, `video`, `goal`, `duration`, `status`, `created`, `updated`, `finish`) VALUES
(5, 3, 'Classic Sports Cars Posters', 'Posters of six classic sports cars (and a beetle) for art lovers and petrolheads alike', 'The goal of this project has been to create something for art lovers and petrolheads alike. I chose to depict some of the most classic sports cars that have been made and tried to make the vehicles as accurate as possible, but still give the pictures a dreamy art feel.', 1, 1, 1, '7a2fa7fb633fe42b45ccb04006855529.png', '10b850f23b899ec33bd0d3571bf2a2e1.mp4', 1000000, 30, 'accepted', '2023-06-07 19:33:35', '2023-07-02 18:26:39', '2023-08-03 18:26:39'),
(6, 3, 'Bullet Crash', 'Be a part of the team bringing new, vibrant classical music to the public\'s ears!', '', 1, 2, 1, 'b637688eca6289ebdb06d7dfc827136b.jpg', 'default.mp4', 0, 30, 'accepted', '2023-06-17 12:15:26', '2023-07-02 18:22:50', '2023-07-03 18:22:50'),
(8, 3, 'The Cabinet of Dr. Caligari', 'Austin\'s most adventurous band release their soundtrack for the first feature-length horror film on DVD and other formats!', 'We(The Invincible Czars) were all set to create our score for the world\'s first feature-length horror film, The Cabinet of Dr. Caligari (1920 Robert Wiene) ', 2, 3, 5, '416a0243fe5b22288d9aeadbe1b3e0c9.jpg', 'default.mp4', 0, 30, 'creating', '2023-06-23 09:09:42', '2023-07-02 18:18:20', '2023-07-03 18:18:20'),
(9, 3, 'Gal Project', 'A feature comedy about a group of women who reunite after working together at a discount clothing store in the 80s. ', 'The storyline is about a reunion of four women who worked at a discount clothing store called \"Wallie\'s Big Deals\" back in the \'80s. ', 1, 2, 2, '42766ecdd392863c22227013f87c3014.png', 'default.mp4', 0, 30, 'accepted', '2023-06-23 09:14:07', NULL, '0000-00-00 00:00:00'),
(10, 3, 'Out of Style: all-new winchestermegg artbook!', 'Follow the lives and styles of Mila, Yul, and Hana, as they navigate home, school, and work via stunning illustrations and comics!', 'ShortBox is proud to present \'Out of Style\' a stunning new artbook from the brilliant Devi Putri \'Out of Style\' follows 3 young Muslim women: Mila, Yul, and Hana', 3, 6, 3, '42b875e2f062a310a9e1b21e160cc5b0.png', 'default.mp4', 7000000, 10, 'accepted', '2023-06-23 09:15:48', NULL, '0000-00-00 00:00:00'),
(15, 3, 'Rise of the Gummies', 'A hybrid card game that brings decks to life', 'Henry, Eli and Tyler all met while working at Osmo, a company that makes hybrid-reality educational games for kids. ', 1, 1, 2, 'cd9c5ffecf0f3cf9bbd89ecf162c43c3.png', 'default.mp4', 0, 10, 'accepted', '2023-07-02 19:38:55', '2023-07-04 13:43:41', '2023-07-14 13:43:41'),
(16, 3, 'Limited Edition Hardcover: Legend of the Gods', 'NYTimes Bestselling Author Aaron Hodges brings you over 1000 pages of epic fantasy, gods and dragons!', ' A young woman flees persecution at the hands of the Tsar\'s Stalkers. Three epic fantasy novels - one Limited Edition Omnibus to rule them all!', 1, 2, 4, '16d4f0301346cf6df10a4d49ebbb6afe.png', 'default.mp4', 0, 30, 'creating', '2023-07-02 19:39:21', NULL, '0000-00-00 00:00:00'),
(18, 8, 'My America by Diana Matar', 'A photo book documenting more than 100 locations in the U.S. where a citizen was killed by police.', 'For years, award-winning photographic artist Diana Matar has documented international locations where those in power have perpetrated violence against their citizens', 1, 2, 4, 'c7cc7abcf899e366a6c9f78fb2aec464.jpg', 'ec49cd4c37d86c69e82061d3c01a5f5a.mp4', 4500000, 20, 'rejected', '2023-07-05 19:36:15', NULL, '0000-00-00 00:00:00'),
(19, 3, 'Traditional Lacquer Art & Handicrafts By Ushaz 2.0', 'Bringing traditional lacquer art & handicraft to the modern world. A tribute to the artists by showcasing their talent globally.', 'Ushaz is an art & handicraft company based in the UK. Our goal is to introduce Pakistani Lacquer Art & Handicrafts to the global market. We want to pay tribute to the artisans', 2, 3, 2, 'c8fe76b66ecdc27b67bbd82e35490a2a.jpg', 'default.mp4', 0, 30, 'creating', '2023-07-05 20:41:00', NULL, '0000-00-00 00:00:00'),
(20, 3, 'TEST', 'TEST', 'TEST', 1, 1, 3, '036c761615a5483c75e98597ed59c64a.png', 'df9d8a7a573c1da87a51b9045644b06e.mp4', 5000000, 30, 'creating', '2023-07-06 09:55:17', NULL, '0000-00-00 00:00:00'),
(21, 9, 'Tegar Painting', 'Be a part of the team bringing new, vibrant classical music to the public\'s ears!', 'Be a part of the team bringing new, vibrant classical music to the public\'s ears!e a part ', 1, 2, 4, '438ad50e2993f29107292a17735a6c84.jpg', 'b23e57332daf1db5e0db41186b431d56.mp4', 5000000, 20, 'creating', '2023-07-06 15:33:55', '2023-07-06 10:43:42', '2023-07-26 10:43:42'),
(22, 3, 'film', NULL, '', 1, 2, 4, '54c2264d73eecf848bc944b8b2f54ff6.png', '8a1cb8a35608eca01f3cada537215db5.mp4', 0, 30, 'creating', '2023-07-11 15:13:39', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `p_payment`
--

CREATE TABLE `p_payment` (
  `p_payment_id` int(11) NOT NULL,
  `rekening` int(40) NOT NULL,
  `project_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_payment`
--

INSERT INTO `p_payment` (`p_payment_id`, `rekening`, `project_id`, `bank_id`) VALUES
(1, 2147483647, 10, 2),
(2, 2147483647, 5, 3),
(3, 2147483647, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `reward_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(60) NOT NULL DEFAULT 'default.jpg',
  `description` text,
  `est_delivery` varchar(256) NOT NULL,
  `qty` int(20) NOT NULL,
  `temp_qty` int(20) NOT NULL,
  `time_limit` int(20) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`reward_id`, `title`, `amount`, `image`, `description`, `est_delivery`, `qty`, `temp_qty`, `time_limit`, `project_id`, `created`, `updated`) VALUES
(19, ' AirCard - Early Bird', 10000, '4b1ac059e57849dc4b10ccbef0585469.jpg', '*EARLY BIRD 31% OFF RETAIL* After the end of the campaign you will receive an email to access the survey on Backer Tools, where you will also be able to add additional products at the campaign price.', 'Februari/2024', 49, 48, 99999, 5, '2023-06-17 15:16:21', NULL),
(30, 'AirCard - kickstarter', 20000, '08f25bd69ca4d31cb8342448ea7d915e.jpeg', '*KICKSTARTER 21% OFF RETAIL* After the end of the campaign you will receive an email to access the survey on Backer Tools, where you will also be able to add additional products at the campaign price.', 'Januari/2024', 0, 0, 99999, 5, '2023-06-17 16:02:51', NULL),
(32, 'AirCard - Early Bir', 300000, '8c4a42f35e99475bd2683b79288b78b4.jpg', '*EARLY BIRD 33% OFF RETAIL* After the end of the campaign you will receive an email to access the survey on Backer Tools, where you will also be able to add additional products at the campaign price.', 'Agustus/2023', 99999, 99999, 30, 5, '2023-06-17 17:00:07', NULL),
(34, 'TEST', 1, 'f16ab6a8bec25d285b369f4f3cd2c307.jpg', 'satu', 'Agustus/2023', 99999, 99999, 99999, 5, '2023-06-30 19:58:06', NULL),
(35, 'Two signed books', 100000, '61fe91aa207a7ccd041621a6d7ced127.jpg', 'Two signed copies of the book, one to keep and one to gift for a friend.\r\nTo be shipped on publication', 'Agustus/2023', 0, 0, 99999, 18, '2023-07-05 19:44:01', NULL),
(38, 'test', 10000, 'a92c94a2cb9b088f6bf554f13a4724bf.png', 'test', 'Maret/2024', 50, 50, 99999, 5, '2023-07-06 10:08:23', NULL),
(39, 'reward1', 10000, '0d35148310b69c6b3fb6ec81c1698f2c.jpg', 'adadadadadadadadadadad', 'Agustus/2023', 90, 90, 99999, 21, '2023-07-06 15:37:16', NULL),
(41, 'TEST', 10000, 'f1a37fa6c8b8a80fae85647995b0bd52.png', 'aarsdgfh', 'Agustus/2023', 0, 0, 0, 8, '2023-07-06 16:01:27', NULL),
(42, 'TEST', 10000, 'f1a37fa6c8b8a80fae85647995b0bd52.png', 'aarsdgfh', 'Agustus/2023', 0, 0, 0, 8, '2023-07-11 15:16:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reward_detail`
--

CREATE TABLE `reward_detail` (
  `reward_detail_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  `reward_item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward_detail`
--

INSERT INTO `reward_detail` (`reward_detail_id`, `reward_id`, `reward_item_id`, `qty`) VALUES
(65, 19, 53, 4),
(67, 19, 55, 4),
(68, 19, 57, 6),
(93, 30, 53, 2),
(95, 30, 57, 3),
(97, 30, 54, 4),
(102, 32, 53, 10),
(105, 34, 53, 1),
(106, 35, 60, 3),
(107, 35, 61, 4),
(110, 38, 53, 2),
(111, 38, 65, 3),
(112, 39, 53, 3),
(113, 39, 66, 2),
(116, 41, 68, 1),
(117, 42, 68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reward_item`
--

CREATE TABLE `reward_item` (
  `reward_item_id` int(11) NOT NULL,
  `item_name` varchar(60) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward_item`
--

INSERT INTO `reward_item` (`reward_item_id`, `item_name`, `project_id`) VALUES
(53, 'STICKER', 5),
(54, 'baju', 5),
(55, 'celana', 5),
(57, 'cokelat', 5),
(58, 'a', 5),
(59, 'Gambar', 17),
(60, 'book', 18),
(61, 'pen', 18),
(63, 'TEST1', 20),
(64, 'TEST2', 20),
(65, 'Board game', 5),
(68, 'aaa', 8),
(69, 'test1', 21),
(70, 'dddad', 21);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `risk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `project_id`, `content`, `risk`) VALUES
(4, 5, '<p style=\"text-align: justify;\"><span style=\"color: rgb(33, 37, 41); font-family: maison_neuebook; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Quite unsurprisingly, the most foreseeable issue we may struggle with is the release date. While we optimistically set it to December 2024, we know from experience that a lot can go wrong overnight when you develop a video game. This media involves so many fields that it&#39;s hard to tell which one will cause trouble next! Additionally, we did not have a chance to delve too profoundly into the different console ports yet. Of course we shall do our best to release the game on as many systems and platforms as possible, but be wary that Liam_99 may not make it onto your favorite console! Learn about accountability on Kickstarter Environmental commitments Visit our Environmental Resources Center to learn how Kickstarter encourages sustainable practices. Long-lasting design All-in-one goal of the crowdfunding and core reward for the backers, the game should be playable for years.</span></p>\n\n<div class=\"videoEmbed\">\n<div class=\"videoEmbed\">\n<div class=\"videoEmbed\" style=\"text-align: center;\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/LiUrBGOZaG0\" width=\"640\"></iframe></div>\n</div>\n\n<p style=\"text-align: center;\">&nbsp;<img alt=\"\" height=\"534\" src=\"http://localhost/kreafund/assets/img/story/56613040.jpg\" width=\"343\" /><img alt=\"\" src=\"http://localhost/kreafund/assets/img/story/56613040.jpg\" style=\"width: 300px; height: 534px;\" /></p>\n\n<p>The <span class=\"bold\">original Design Eye is a board game</span> that teaches players about the <span class=\"bold\">six main disciplines of graphic design</span>: <span class=\"text-italic\">branding, print design, package design, experiential (or environmental) design, web design, </span>and<span class=\"text-italic\"> motion design</span>. It also teaches players a few design fundamentals: <span class=\"text-italic\">color theory, form theory, typography, and design history</span>.</p>\n\n<p>Players are students competing for acceptance into a prestigious design school called The Haas. They&#39;re required to create a portfolio by sketching and presenting original ideas for critique or answering flash cards (all related to the disciplines) to earn points which earn them Portfolio Cards. The player who creates their portfolio first (earns the most Portfolio cards) wins the gamee</p>\n\n<div class=\"videoEmbed\" style=\"text-align: center;\">&nbsp;</div>\n\n<div class=\"videoEmbed\" style=\"text-align: center;\">&nbsp;</div>\n\n<div class=\"videoEmbed\" style=\"text-align: center;\">&nbsp;</div>\n\n<p style=\"text-align: center;\">&nbsp;</p>\n</div>\n\n<div class=\"videoEmbed\" style=\"text-align: center;\">&nbsp;</div>\n\n<p style=\"text-align: center;\">&nbsp;</p>\n', 'Quite unsurprisingly, the most foreseeable issue we may struggle with is the release date. While we optimistically set it to December 2024, we know from experience that a lot can go wrong overnight when you develop a video game. This media involves so many fields that it\'s hard to tell which one will cause trouble next! Additionally, we did not have a chance to delve too profoundly into the different console ports yet. Of course we shall do our best to release the game on as many systems and platforms as possible, but be wary that Liam_99 may not make it onto your favorite console! Learn about accountability on Kickstarter Environmental commitments Visit our Environmental Resources Center to learn how Kickstarter encourages sustainable practices. Long-lasting design All-in-one goal of the crowdfunding and core reward for the backers, the game should be playable for years. It\'s especially true as we propose the game DRM-free, which means PC players don\'t have to launch the game through platforms such as Steam or Epic Games. Regarding physical rewards: - We\'ll work with a local print shop to bring the paper posters to life. This shall allow us to check quality and minimize environmental costs linked to transport. - The T-shirts will be produced by a French company. We know from our own experience that they work with lasting materials. - The metallic posters will be handled by Displate. It\'s super sturdy, looks super cool, and the society works with communities in Africa to plant trees and improve the locals\' quality of life. '),
(5, 6, '<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" sandbox=\"\" src=\"https://www.youtube.com/embed/n-PEkx7RSYc?start=331\" width=\"640\"></iframe></p>\n\n<p>adadada</p>\n', 'adada'),
(6, 15, '<p style=\"text-align: justify;\"><img alt=\"\" src=\"http://localhost/kreafund/assets/img/story/2050105997.jpg\" style=\"width: 680px; height: 489px;\" /></p>\n\n<p><img alt=\"\" src=\"http://localhost/kreafund/assets/img/story/1315235739.jpg\" style=\"width: 680px; height: 757px;\" /></p>\n\n<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/XWVkyn_hvpM\" width=\"640\"></iframe></p>\n\n<p style=\"text-align: justify;\">We have &nbsp;pulled some common destinations out into the chart above, but if you&#39;re shipping internationallyelsewhere you can look up your estimated shipping cost <a href=\"https://docs.google.com/spreadsheets/d/1mgaFFAVC4iXAdFwSFXvVW2prcb6GfEX_JJmjxCff0Cg/edit#gid=256602092\" rel=\"noopener\" target=\"_blank\">here</a>. These costs are subject to change by the timewe charge for shipping, but we&#39;ll charge just what it costs us!</p>\n', 'This is the first Kickstarter campaign from Pillow Fort Games, so we\'re bound to run into unexpected challenges - but we have the experience to overcome them! Henry led games to publication for over nine years at Osmo, including successful products such as Pizza Co. and Osmo Math Wizard. Eli previously Kickstarted and delivered Ursa Miner on time to 581 backers, and 100% of backers who completed the post-campaign survey said that they would feel positively about backing him again.'),
(7, 21, '<p><img alt=\"\" src=\"http://localhost/kreafund/assets/img/story/762269851.png\" style=\"width: 680px; height: 928px;\" /></p>\n\n<p>Attack<br />\nAt the end of each Hero&#39;s turn, the opponents&#39; intentions are revealed for the next turn: either to attack,<br />\n&nbsp;defend, move, skip their turn, or prepare a bad trick&hellip;</p>\n\n<p>As you proceed through the adventure, you become more and more seasoned and unlock new skill cards that you can use in future battles.</p>\n\n<p>Choose the type of advantage you want to gain: improve your attack, defense, or practical skills.</p>\n\n<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/k5NMI_DjkGQ\" width=\"640\"></iframe></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 'Attack\nAt the end of each Hero\'s turn, the opponents\' intentions are revealed for the next turn: either to attack,\n defend, move, skip their turn, or prepare a bad trick…\n\nAs you proceed through the adventure, you become more and more seasoned and unlock new skill cards that you can use in future battles.\n\nChoose the type of advantage you want to gain: improve your attack, defense, or practical skills.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcat_name` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `category_id`, `subcat_name`) VALUES
(1, 1, 'Painting'),
(2, 1, 'Digital Art'),
(3, 2, 'Indie'),
(4, 2, 'Rock'),
(5, 3, 'Documentary'),
(6, 3, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `token_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`token_id`, `token`, `email`, `created`) VALUES
(1, '+xBoHLPrXmF9K6RrD2cOJPaS0+qQ0pB5lMHxmlldSKQ=', 'andikasatrio159@gmail.com', '2023-06-04 21:40:09'),
(2, 'gKG2Nhzxut/yJQpYSG3Wa9npAV77RKV9pi+j0dBC1TU=', 'andikasatrio159@gmail.com', '2023-06-04 21:52:34'),
(3, 'qaNgeKdVCCpSHjZJVkwDqgvLIUW7gEiJqFoI7FGAUDc=', 'andikasatrio159@gmail.com', '2023-06-04 21:54:39'),
(4, '0KMZicHOe6FZLZxSFcXB5owmabrM+66Lpw88ZTckIuk=', 'andikasatrio159@gmail.com', '2023-06-04 22:30:20'),
(5, '6o4khER50po2q/svPJdrTnQJcRvK6kogZgGgCpjURso=', 'andikasatrio159@gmail.com', '2023-06-27 16:23:06'),
(6, 'WvEDhjAsEeHtxzqD8Ww+ysFX0lGYyPW1LqmKkm8NXrU=', 'andikasatrio159@gmail.com', '2023-06-29 17:56:17'),
(7, 's39IeafD11gSwkVKxWfyejwl+/7uuJbqHjtRzhp0xjo=', 'duniaselamat1@gmail.com', '2023-06-30 18:21:41'),
(8, 'VMZiTO9uH7mu78jsElQluk0nt+sb4ImTKyCIVj4Jz4k=', 'duniaselamat1@gmail.com', '2023-06-30 18:25:36'),
(9, 'xfoHijFtdwSqpdxLYZAvJymIZI6ezlNX+/cMRsNrjOI=', 'duniaselamat1@gmail.com', '2023-06-30 18:26:50'),
(10, 'psun2KuYnFpix93BlUUtwYP4Nj9LWvDW4QC4WUJMIv0=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:30'),
(11, 'T+nkIMQ08+Gm3Gnq/2xOVtvYB8rUSDI8d+ZAfuSaatk=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:35'),
(12, 'YamXdXdQKTj0O6rr0S/1OXT5h3ImvoF+wOSLf5H8xTo=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:39'),
(13, 'dLih6YF4Htx921pGaYUPthyTm6pY+26vCW5y3OsIWDk=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:42'),
(14, 'FoyGKCWLU7DrA6q5qjZWx5SGoqb9fYPQsSgr7NBEfUA=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:46'),
(15, 'lPUUlRQHwg+2T3lZpgkIpPPkGM77LWAPA9kbUg3oFX0=', 'duniaselamat1@gmail.com', '2023-07-06 16:08:54'),
(16, 'cryeTgzybnbjr/Ns/4PXNHdIZdMDGoYZLgHCxbHplM8=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:07'),
(17, 'dtielgegA8vsg955AqdUvx3sichh4tqGORXZjf2UriU=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:12'),
(18, 'zfojo0ssDSHSLf1JsQY2CMQC0ukR8x0SDZ9KOHRB/RA=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:16'),
(19, 'iqknLi5g20u2dnE/Ol8fwvLU5aVJxpQxBpz6LyEy2Ms=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:21'),
(20, 's749cXeTnrvSF8b9qR+2N0FF5+p3pSnr5YyrkDXI5LY=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:25'),
(21, 'qzMyG7csjXMP0JyT93ZgFpopnh6Fa3VQyLOjjWZ5/c4=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:29'),
(22, 'j6S4GcxjDQ7YMcEopaqrPgudH1H4jcs50X2k/OGSB38=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:33'),
(23, 'kddRYp72Ym6MD587fObFukL4mcGMSlNCzye0K+5R608=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:37'),
(24, 'n/yjjcpZLbnsiDEEJdApEKaOq+NHaK2rBX726x7jNdM=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:41'),
(25, 'yt/XbtXjTk7lTTu9+kxbni9/Enm7CpJPVjYEcqXK0bo=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:46'),
(26, 'SOv2FHhdEynyhJl8T5r7BOqjOB2QlJoyIisVtf5Kvqw=', 'andikasatrio159@gmail.com', '2023-07-11 15:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `order_id` char(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_type` varchar(13) NOT NULL,
  `transaction_time` varchar(20) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_number` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(5) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`order_id`, `amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`, `project_id`, `user_id`, `reward_id`) VALUES
('1111482000', 26000, 'bank_transfer', '2023-07-03 16:02:50', 'bca', '16336977975', 'https://app.sandbox.midtrans.com/snap/v1/transactions/5eed24cd-0338-48c5-ab41-64ac52fd72a6/pdf', '201', 5, 3, 0),
('1202644034', 20000, 'bank_transfer', '2023-07-02 00:54:41', 'bca', '16336901423', 'https://app.sandbox.midtrans.com/snap/v1/transactions/adf59d80-5169-402e-b28e-d7ed6ad51a6b/pdf', '200', 5, 1, 30),
('1304009249', 20000, 'bank_transfer', '2023-07-01 22:55:23', 'bca', '16336542867', 'https://app.sandbox.midtrans.com/snap/v1/transactions/393dcfca-db52-4121-b6be-59d5843fc14b/pdf', '201', 5, 3, 30),
('1514521535', 26000, 'bank_transfer', '2023-07-03 16:02:15', 'bca', '16336309397', 'https://app.sandbox.midtrans.com/snap/v1/transactions/35b5b436-ebf0-4cb7-8ecc-cf21902ea54c/pdf', '201', 5, 3, 0),
('1563777887', 10000, 'bank_transfer', '2023-06-26 08:05:15', 'bca', '16336834970', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8fe3ecfb-b8da-4051-9ad3-68af7cec03a0/pdf', '201', 5, 3, 30),
('1710913657', 50000, 'bank_transfer', '2023-06-27 15:51:43', 'bca', '16336287054', 'https://app.sandbox.midtrans.com/snap/v1/transactions/dae7eed8-3688-4f3d-98b5-812425935f69/pdf', '201', 11, 3, 30),
('1782162175', 100000, 'bank_transfer', '2023-07-03 15:56:38', 'bca', '16336611966', 'https://app.sandbox.midtrans.com/snap/v1/transactions/f8efceb5-dfe5-440b-82c2-830c9a77d165/pdf', '201', 5, 3, 0),
('1943623365', 10000, 'bank_transfer', '2023-07-11 15:22:45', 'bca', '16336001260', 'https://app.sandbox.midtrans.com/snap/v1/transactions/4a682d5b-51f1-4dfb-80b4-3f5fa3678acf/pdf', '201', 5, 3, 19),
('387721692', 10000, 'bank_transfer', '2023-06-26 23:11:37', 'bca', '16336204147', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a4525f74-517c-451f-88b0-2cca1af6c082/pdf', '201', 5, 3, 30),
('430765084', 50000, 'bank_transfer', '2023-06-27 15:57:05', 'bca', '16336250346', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1ebeb931-517d-413f-a721-a7afee3cadd4/pdf', '200', 11, 3, 30),
('437833234', 10000, 'bank_transfer', '2023-06-26 22:31:57', 'bca', '16336988507', 'https://app.sandbox.midtrans.com/snap/v1/transactions/4dee466a-8365-4cc2-b115-ab9f54d20cb8/pdf', '200', 5, 4, 30),
('5003893', 300000, 'bank_transfer', '2023-06-25 21:05:28', 'bca', '16336479208', 'https://app.sandbox.midtrans.com/snap/v1/transactions/7057ff86-9639-403a-8bd8-62c430e51101/pdf', '200', 5, 1, 30),
('694396871', 10000, 'bank_transfer', '2023-06-26 23:08:21', 'bca', '16336577664', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1a817569-2201-493f-b6d5-3bba477f2bc2/pdf', '201', 5, 3, 30),
('74514391', 10000, 'bank_transfer', '2023-07-06 15:45:08', 'bca', '16336159534', 'https://app.sandbox.midtrans.com/snap/v1/transactions/361b0dc4-170f-4163-a690-865e0ef78547/pdf', '201', 5, 3, 19),
('905813773', 10000, 'bank_transfer', '2023-07-02 00:54:19', 'bca', '16336574958', 'https://app.sandbox.midtrans.com/snap/v1/transactions/d86ed129-7098-4eb0-b0ae-efa46fa8d710/pdf', '200', 5, 5, 19),
('972568447', 1, 'bank_transfer', '2023-07-05 21:20:16', 'bca', '16336463405', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1b1ec918-c61e-40a8-8e66-21731eed3c82/pdf', '200', 5, 3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `biography` text,
  `address` varchar(256) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `avatar` varchar(40) NOT NULL DEFAULT 'default_profile.png',
  `facebook` varchar(128) DEFAULT NULL,
  `twitter` varchar(128) DEFAULT NULL,
  `instagram` varchar(128) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `biography`, `address`, `level`, `avatar`, `facebook`, `twitter`, `instagram`, `website`, `created`) VALUES
(1, 'andsr157', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'test', 'and@and.com', NULL, NULL, 2, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-05-19 08:26:35'),
(3, 'Jimi12', '197420eed007b02559839d01b731cf9e0425a8b7', 'jimi montini', 'andikasatrio159@gmail.com', 'Quite unsurprisingly, the most foreseeable issue we may struggle with is the release date. While we optimistically set it to December 2024, we know from experience that a lot can go wrong overnight when you develop a video game. This media involves so many fields that it\'s hard to tell which one will cause trouble next! Additionally, we didq', 'Gabahan , Sukoharjo', 2, 'b77c232f90ba42471c494e0d208592a3.jpg', 'https://www.facebook.com/profile.php?id=100011086082150&mibextid=ZbWKwL', 'https://twitter.com/i/flow/login', 'https://www.instagram.com', 'https://bsi.ac.id', '2023-05-19 10:03:08'),
(4, 'andsr', '197420eed007b02559839d01b731cf9e0425a8b7', 'andsr', 'and@a.com', NULL, NULL, 2, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-05-25 07:33:29'),
(5, 'user2', '197420eed007b02559839d01b731cf9e0425a8b7', 'andika', 'user2@user.com', NULL, NULL, 2, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-06-19 08:14:31'),
(6, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin', 'admin@kreafund.com', NULL, NULL, 1, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-06-19 09:53:27'),
(7, 'intel99', '197420eed007b02559839d01b731cf9e0425a8b7', 'Dimas', 'dimas@intel.solo', NULL, NULL, 1, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-06-19 10:56:48'),
(8, 'user', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', NULL, 'user@gmail.com', NULL, NULL, 2, 'default_profile.png', NULL, NULL, NULL, NULL, '2023-06-30 16:17:37'),
(9, 'tegar12', '437225b8f92838a976e16b634a7d187a493d6200', 'tegar', 'duniaselamat1@gmail.com', '', 'solo', 2, 'f189cccf6fe525e430a56d07fefe2c1f.jpg', '', '', '', 'bsi.ac,id', '2023-07-06 15:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `verification_id` int(11) NOT NULL,
  `verification_desc` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`verification_id`, `verification_desc`, `project_id`, `type`, `created`) VALUES
(1, '<p>test</p>\n', 9, 'revisi', '2023-07-02 20:26:59'),
(2, '<p>Tolong revisi lagi tentang reward dan pendaanaa anda karena terkesan tidak masuk akal dan mengada- ada kami bisa mempertimbanghkan ini sebagai scam dan ini peringatan dari kami tolong jika anda tidak ingin kami<em> <strong>reject</strong></em></p>\n\n<p><img alt=\"\" src=\"http://localhost/kreafund/assets/img/story/1321770707.png\" style=\"width: 300px; height: 169px;\" /></p>\n', 9, 'revisi', '2023-07-02 21:14:06'),
(3, '<p>Project melanggar aturan kami , project anda mengandung tentang kekerasan dan rasisme</p>\n', 16, 'rejected', '2023-07-02 21:18:14'),
(4, '<p>belum sesuai</p>\n', 21, 'revisi', '2023-07-06 15:43:20'),
(5, '<p>dokumen tidak sesuai</p>\n', 18, 'rejected', '2023-07-11 15:25:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `item_temp`
--
ALTER TABLE `item_temp`
  ADD PRIMARY KEY (`item_temp_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `p_payment`
--
ALTER TABLE `p_payment`
  ADD PRIMARY KEY (`p_payment_id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `reward_detail`
--
ALTER TABLE `reward_detail`
  ADD PRIMARY KEY (`reward_detail_id`);

--
-- Indexes for table `reward_item`
--
ALTER TABLE `reward_item`
  ADD PRIMARY KEY (`reward_item_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`verification_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_temp`
--
ALTER TABLE `item_temp`
  MODIFY `item_temp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `p_payment`
--
ALTER TABLE `p_payment`
  MODIFY `p_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `reward_detail`
--
ALTER TABLE `reward_detail`
  MODIFY `reward_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `reward_item`
--
ALTER TABLE `reward_item`
  MODIFY `reward_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `verification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
