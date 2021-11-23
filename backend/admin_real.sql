-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2021 at 03:54 PM
-- Server version: 5.7.36-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_real`
--
CREATE DATABASE IF NOT EXISTS `admin_real` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `admin_real`;

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `id` int(11) NOT NULL,
  `about` varchar(520) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`id`, `about`, `status`) VALUES
(7, '\"PROPERTYFORYOU\" is a startup. This website contains local real-estate & paying guest related information shared by property owners  or agents. Our intention to serve best property related local information to the common people. Presently it\'s an information website only.  ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `admin_id`, `admin_pass`, `status`) VALUES
(1, 'Admin', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `email`, `message`, `status`, `timestamp`) VALUES
(1, 'Nivedita Khanra', 'niveditakhanra007@gmail.com', '1st message', '1', '2021-11-12 18:16:57'),
(3, 'PROMA ROY', 'promamondal1991@gmail.com', 'hi', '1', '2021-11-13 15:06:21'),
(4, 'gg', '22@gg.com', 'fff', '1', '2021-11-13 15:40:04'),
(5, 'Rikth Roy', 'sprsinfotech@gmail.com', 'ssss', '1', '2021-11-14 18:17:00'),
(6, 'Rikth Roy', 'sprsinfotech@gmail.com', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '1', '2021-11-14 18:26:48'),
(7, 'S Roy', 'sunandaroy1952@rediffmail.com', 'hi', '1', '2021-11-16 14:58:42'),
(8, 'Rikth Roy', 'iam@gmail.com', 'Hi i need to contact', '1', '2021-11-16 14:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `description_tbl`
--

CREATE TABLE `description_tbl` (
  `id` int(11) NOT NULL,
  `house_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc1` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc2` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc3` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc4` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `house_dtl_tbl`
--

CREATE TABLE `house_dtl_tbl` (
  `id` int(11) NOT NULL,
  `house_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `house_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `landmark` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `pin` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc1` varchar(520) COLLATE utf8_bin NOT NULL,
  `desc2` varchar(520) COLLATE utf8_bin NOT NULL,
  `house_rating` int(11) NOT NULL,
  `bedroom` varchar(255) COLLATE utf8_bin NOT NULL,
  `bathroom` varchar(255) COLLATE utf8_bin NOT NULL,
  `dining` varchar(255) COLLATE utf8_bin NOT NULL,
  `kitchen` varchar(255) COLLATE utf8_bin NOT NULL,
  `balcony` varchar(255) COLLATE utf8_bin NOT NULL,
  `garage_avail` varchar(255) COLLATE utf8_bin NOT NULL,
  `electricity_avail` varchar(255) COLLATE utf8_bin NOT NULL,
  `water_avail` varchar(255) COLLATE utf8_bin NOT NULL,
  `habitable` varchar(255) COLLATE utf8_bin NOT NULL,
  `lift` varchar(255) COLLATE utf8_bin NOT NULL,
  `floor` varchar(255) COLLATE utf8_bin NOT NULL,
  `facing` varchar(255) COLLATE utf8_bin NOT NULL,
  `area` varchar(255) COLLATE utf8_bin NOT NULL,
  `garage` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `room` varchar(255) COLLATE utf8_bin NOT NULL,
  `b_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `purpose` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_by` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `con_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_user` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_phn` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `house_dtl_tbl`
--

INSERT INTO `house_dtl_tbl` (`id`, `house_id`, `userid`, `house_name`, `address`, `city`, `landmark`, `state`, `country`, `pin`, `desc1`, `desc2`, `house_rating`, `bedroom`, `bathroom`, `dining`, `kitchen`, `balcony`, `garage_avail`, `electricity_avail`, `water_avail`, `habitable`, `lift`, `floor`, `facing`, `area`, `garage`, `price`, `type`, `room`, `b_date`, `purpose`, `post_by`, `con_name`, `con_user`, `con_email`, `con_phn`, `date`, `status`) VALUES
(1, 'BGL1375', 'riyaroy@gmail.com', 'NVT Stopping By The Woods ', 'Address', 'City', NULL, 'West Bengal', 'INDIA', '', 'New desc here', ' Description 2', 0, '1', '1', '', '', '', '', '', '', '', '', '', '', '240', '', '1', 'commercial', '2', '0-5', 'pg', 'Owner', 'Riya Roy', 'riyaroy@gmail.com', 'riyaroy@gmail.com', '7654567890', '2021-11-08', '1'),
(3, 'BGL8148', 'riya@gmail.com', 'Test round 2 update chek done', 'wwwwwwAddress', 'tarakeswar', 'Add Landmark', 'West Bengal', 'INDIA', '712401', 'Property Description 1 *', 'Property Description 2', 0, 'not_applicable', '', '', '', '', '', '555555', '24', '', '555555', '24', '', '24', '', '555555', 'apartment', '2', '24', 'rent', 'Owner', 'Riya Roy', 'riya@gmail.com', 'riya@gmail.com', '7654567890', '2021-11-10', '1'),
(4, 'BGL3818', 'promamondal1991@gmail.com', 'land', 'basanti highway', 'basaanti', 'river side', 'West Bengal', 'INDIA', '712401', 'basanti', 'north 24 parganas', 0, '2', '2', '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '300', '', '4000000', 'vacant_land', '2', '0-5', 'Sale', 'Owner', 'PROMA ROY', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7407735808', '2021-11-11', '1'),
(5, 'BGL3859', 'promamondal1991@gmail.com', 'LAND 1', 'AIRPORT', 'KOLKTA', 'AIRPORT', 'West Bengal', 'INDIA', '700023', 'AIRPORT', 'KOLKATA', 0, 'not_applicable', '', 'not_applicable', 'not_applicable', 'not_applicable', 'not_applicable', '600000', '10000', 'not_applicable', '600000', '10000', 'not_applicable', '10000', '', '2000000', 'vacant_land', '', '10000', 'Sale', 'Owner', 'PROMA ROY', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7407735808', '2021-11-12', '1'),
(6, 'BGL2273', 'promamondal1991@gmail.com', 'PG', 'HALDIA TOWN', 'HALDIA', 'IOC', 'West Bengal', 'INDIA', '700456', 'HALDIA', 'HALDIA', 0, '1', '1', '1', '1', '1', 'not_applicable', 'yes', 'yes', 'not_applicable', 'yes', 'other', 'north_west', '200', '', '8000', 'house', '', '0-5', 'pg', 'Owner', 'PROMA ROY', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7407735808', '2021-11-13', '1'),
(7, 'BGL4454', 'promamondal1991@gmail.com', 'F1', 'Kolkata', 'Kolkata', 'Kalimandir', 'West Bengal', 'INDIA', '7777777777', 'Kolkata', 'Kolkata', 0, '1', '1', '1', '1', '1', 'not_applicable', 'yes', 'yes', 'yes', 'no', 'ground', 'east', '350', '', '2000', 'apartment', '', '0-1', 'rent', 'Agent', 'Proma', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '982222222222222', '2021-11-13', '1'),
(8, 'BGL6843', 'carlojohndelacruz@gmail.com', 'property title', 'asdf', 'asdfasdf', 'asdf', 'West Bengal', 'INDIA', '123', 'DESC', 'CDESC', 0, '4', '4', '1', '1', '1', '4', '2221', '2', '4', '2221', '2', '4', '2', '', '2221', 'pg', '', '2', 'Sale', 'Agent', 'roycarlo', 'carlojohndelacruz@gmail.com', 'carlojohndelacruz@gmail.com', '02445767482', '2021-11-14', '5'),
(9, 'BGL9415', 'carlojohndelacruz@gmail.com', 'asdfasdf', '87b6t', '876', '87b6', 'West Bengal', '87b6', '876', 'asdfasdf', 'jkh', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '8b 76', '', '123123', 'house', '', '0-1', 'rent', 'Owner', 'roycarlo', 'carlojohndelacruz@gmail.com', 'carlojohndelacruz@gmail.com', '123123123', '2021-11-14', '1'),
(10, 'BGL7628', 'carlojohndelacruz@gmail.com', '987', 'iuby', '98b7', 'iuby', 'West Bengal', '9b87', '987', '9b8y', 'iuyb', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', 'bi ', '', '9876987', 'house', '', '0-1', 'rent', 'Owner', 'asdfad', 'carlojohndelacruz@gmail.com', 'carlojohndelacruz@gmail.com', '123123', '2021-11-14', '1'),
(11, 'BGL5613', 'carlojohndelacruz@gmail.com', 'property title', 'ADFADFADF', 'ASDFASD', 'ASDFASDF', 'West Bengal', 'INDIA', '234123', 'desc', 'DESC', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '52', '', '5525251515', 'lot', '', '0-1', 'pg', 'agent', 'roycarlo', 'carlojohndelacruz@gmail.com', 'carlojohndelacruz@gmail.com', '02424124124142', '2021-11-14', '1'),
(12, 'BGL4850', 'carlojohndelacruz@gmail.com', 'JJJJ', 'asdfa', 'asdf', 'asdfasdf', 'West Bengal', 'INDIA', '12312', 'jjj', 'jjjj', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '123123', '', '123123', 'house', '', '0-1', 'rent', 'Owner', 'roycarlo', 'carlojohndelacruz@gmail.com', 'carlojohndelacruz@gmail.com', '0244252525', '2021-11-14', '1'),
(13, 'BGL8741', 'promamondal1991@gmail.com', 'Jk', 'Jaynagar', 'Jaynagar', 'Station', 'West Bengal', 'INDIA', '742353', 'Jaynagar', 'Jaynagar', 0, '1', '1', 'not_applicable', '1', 'not_applicable', 'yes', 'yes', 'no', 'yes', 'no', 'other', 'south_east', '150', '', '2000', 'complex', '', '0-1', 'rent', 'agent', 'Proma', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '9830111111', '2021-11-14', '1'),
(14, 'BGL4017', 'promamondal1991@gmail.com', 'gh', 'ghj', 'kolkata', 'SHIV MANDIR', 'West Bengal', 'INDIA', '700003', 'kolkata', 'kolkata', 0, 'not_applicable', 'not_applicable', 'not_applicable', '1', '1', 'yes', 'not_applicable', 'not_applicable', 'not_applicable', 'not_applicable', 'not_applicable', 'north_east', '500', '', '5000', 'house', '', 'not_applicable', 'rent', 'agent', 'PROMA ROY', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7407735808', '2021-11-15', '1'),
(15, 'BGL6616', 'promamondal1991@gmail.com', 'House', 'Halishar', 'North 24 Parganas', 'Station', 'West Bengal', 'INDIA', '70000', 'Halishar', 'Halishar', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '1000', '', '3300000', 'apartment', '', '0-1', 'Sale', 'Agent', 'Proma', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7000000000', '2021-11-21', '1'),
(16, 'BGL3700', 'promamondal1991@gmail.com', 'GG', 'BEHALA', 'KOLKTA', 'BEHALA', 'West Bengal', 'INDIA', '700016', 'BEHALA', 'BEHALA', 0, '1', '1', '1', '1', '1', 'yes', 'yes', 'yes', 'yes', 'yes', 'top', 'east', '375', '', '2000000', 'pg', '', '0-1', 'Sale', 'Agent', 'PROMA ROY', 'promamondal1991@gmail.com', 'promamondal1991@gmail.com', '7407735808', '2021-11-22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

CREATE TABLE `image_tbl` (
  `id` int(11) NOT NULL,
  `house_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`id`, `house_id`, `image`, `status`) VALUES
(56, 'BGL1375', '4156606.jpg', '1'),
(57, 'BGL1375', '740176703.jpg', '1'),
(58, 'BGL9920', '1226834722.jpg', '1'),
(59, 'BGL8148', '1539745656.jpg', '1'),
(60, 'BGL3818', '1115755688.jpg', '1'),
(61, 'BGL3859', '1496698611.jpg', '1'),
(62, 'BGL2273', '1393795.jpg', '1'),
(63, 'BGL4454', '1599518787.jpg', '1'),
(64, 'BGL6843', '2015760697.jpeg', '1'),
(65, 'BGL9415', '439375145.jpg', '1'),
(66, 'BGL9415', '2123507184.jpeg', '1'),
(67, 'BGL7628', '1392486727.jpeg', '1'),
(68, 'BGL5613', '1099489803.jpeg', '1'),
(69, 'BGL4850', '1903807258.jpeg', '1'),
(70, 'BGL8741', '443488055.jpg', '1'),
(71, 'BGL4017', '461675093.jpg', '1'),
(72, 'BGL6616', '1244513074.jpg', '1'),
(73, 'BGL3700', '966404870.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_tbl`
--

CREATE TABLE `privacy_tbl` (
  `id` int(11) NOT NULL,
  `privacy` varchar(1024) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `privacy_tbl`
--

INSERT INTO `privacy_tbl` (`id`, `privacy`, `status`) VALUES
(4, 'New privacy file text here', '1'),
(5, 'privacy test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `id` int(11) NOT NULL,
  `house_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` varchar(1024) COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`id`, `house_id`, `name`, `text`, `date`, `status`) VALUES
(1, 'BGL8065', 'Apple Saha', 'Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.', '2021-10-03', '1'),
(4, 'BGL3859', 'wwwww', 'qwqqwwqw', '2021-11-12', '1'),
(5, 'BGL3859', 'wwww', 'ssssssssss', '2021-11-12', '1'),
(6, 'BGL3818', 'ee', 'eeee', '2021-11-12', '1'),
(7, 'BGL3818', '333', '32222222222222222222222', '2021-11-12', '1'),
(8, 'BGL1375', 'PROMA ROY', 'HI', '2021-11-13', '1'),
(9, 'BGL2273', '1', 'test', '2021-11-13', '1'),
(10, 'BGL2273', 'xxam', '<?php echo var_dump($_SESSION); ?>', '2021-11-13', '1'),
(11, 'BGL2273', 'g', '<?php\necho \'test\';\n?>', '2021-11-13', '1'),
(12, 'BGL2273', 'a', '\\<\\?php echo \'test\'; ?>a', '2021-11-13', '1'),
(13, 'BGL2273', 'a', '<?php echo \'test\'; ?>aa', '2021-11-13', '1'),
(14, 'BGL1375', 'test', '<script>alert(\'aa\');</script>', '2021-11-14', '1'),
(15, 'BGL1375', 'test', '<script>alert(document.cookie);</script>', '2021-11-14', '1'),
(16, 'BGL1375', 'g', '<script>alert(document.cookie)</script>', '2021-11-14', '1'),
(17, 'BGL8148', 's', '<script>console.log(document.cookie)</script>', '2021-11-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `site_contact`
--

CREATE TABLE `site_contact` (
  `id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_contact`
--

INSERT INTO `site_contact` (`id`, `details`, `type`, `status`) VALUES
(1, '+91 12345 12345', 'contact', 1),
(2, 'propertyforyou9999@gmail.com', 'site_email', 1),
(3, '8:00 a.m - 9:00 p.m', 'op_hours', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_tbl`
--

CREATE TABLE `social_tbl` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) COLLATE utf8_bin NOT NULL,
  `twitter` varchar(255) COLLATE utf8_bin NOT NULL,
  `insta` varchar(255) COLLATE utf8_bin NOT NULL,
  `youtube` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `social_tbl`
--

INSERT INTO `social_tbl` (`id`, `fb`, `twitter`, `insta`, `youtube`, `status`) VALUES
(1, 'https://www.facebook.com/propertyforyou9999 ', 'https://twitter.com/Property4_you', 'https://www.instagram.com/', 'https://www.youtube.com//', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `state`, `status`) VALUES
(1, 'Rajasthan', '1'),
(2, 'Tamil', '1'),
(3, 'Gujarat', '1'),
(4, 'Assam', '1'),
(5, 'Punjab', '1'),
(6, 'Jammu', '1'),
(7, 'Maharashtra', '1'),
(8, 'UP', '1'),
(9, 'Andhra', '1'),
(10, 'Karnataka', '1'),
(11, 'Jharkhand', '1'),
(12, 'Kerala', '1'),
(13, 'West Bengal', '1'),
(14, 'MP', '1'),
(15, 'Tripura', '1'),
(16, 'Chhattisgarh', '1'),
(17, 'Mizoram', '1'),
(18, 'Goa', '1'),
(19, 'Delhi', '1'),
(20, 'Uttaranchal', '1'),
(21, 'Arunachal', '1'),
(22, 'Bihar', '1'),
(23, 'Haryana', '1'),
(24, 'Lakshadweep', '1'),
(25, 'Dadra', '1'),
(26, 'Orissa', '1'),
(27, 'Manipur', '1'),
(28, 'Himachal', '1'),
(29, 'Meghalaya', '1'),
(30, 'Andaman', '1'),
(31, 'Chandigarh', '1'),
(32, 'Nagaland', '1'),
(33, 'Daman', '1'),
(34, 'Sikkim', '1'),
(35, 'Pondicherry', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_tbl`
--

CREATE TABLE `subscription_tbl` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_code` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_dsc` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_price` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subscription_tbl`
--

INSERT INTO `subscription_tbl` (`id`, `sub_name`, `sub_code`, `sub_dsc`, `sub_price`, `status`) VALUES
(1, 'FREE', 'SLV09', 'MONTHLY PLAN', '00', '1'),
(2, 'GOLD', 'GD09', 'MONTHLY PLAN', '149', '1'),
(3, 'PLATINUM', 'PLAT09', 'MONTHLY PLAN', '399', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `type`, `descp`, `status`) VALUES
(1, 'recever_email_id', 'propertyforyou9999@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_house_dtl_tbl`
--

CREATE TABLE `temp_house_dtl_tbl` (
  `id` int(11) NOT NULL,
  `house_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `house_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `state` varchar(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `bedroom` varchar(255) COLLATE utf8_bin NOT NULL,
  `bathroom` varchar(255) COLLATE utf8_bin NOT NULL,
  `area` varchar(255) COLLATE utf8_bin NOT NULL,
  `garage` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `room` varchar(255) COLLATE utf8_bin NOT NULL,
  `b_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `purpose` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_user` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `con_phn` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `temp_house_dtl_tbl`
--

INSERT INTO `temp_house_dtl_tbl` (`id`, `house_id`, `userid`, `house_name`, `address`, `city`, `state`, `country`, `bedroom`, `bathroom`, `area`, `garage`, `price`, `type`, `room`, `b_date`, `purpose`, `con_name`, `con_user`, `con_email`, `con_phn`, `date`, `status`) VALUES
(1, 'RLE345654', '', 'Real House Luxury Villa', 'Est St, 77 - Central Park South, NYC', '', '', '', '1', '3', '720', '2', '98000', '', '', '', 'sell', '', '', '', '', '2021-02-10', '1'),
(2, 'RLE345655', '', 'Real House Luxury Villa', 'Est St, 77 - Central Park South, NYC', '', '', '', '1', '3', '720', '2', '98000', 'ki ata', '', '', 'sell', '', '', '', '', '2021-02-10', '1'),
(3, 'RLE345650', '', 'Real House Luxury Villa', 'Est St, 77 - Central Park South, NYC', '', '', '', '6', '3', '720', '2', '98000', '', '', '', 'sell', '', '', '', '', '2021-02-10', '1'),
(4, 'RLE345651', '', 'Real House Luxury Villa', 'Est St, 77 - Central Park South, NYC', '', '', '', '6', '3', '720', '2', '98000', '', '', '', 'sell', '', '', '', '', '2021-02-10', '1'),
(7, 'BGL8065', 'riyaroy@gmail.com', 'test property', 'address', 'city', 'state', 'india', '1', '1', '520', '', '50000', 'house', '1', '0-1', 'rent', 'test name', 'test user', 'test@gmail.com', '1234567890', '2021-02-10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `terms_tbl`
--

CREATE TABLE `terms_tbl` (
  `id` int(11) NOT NULL,
  `terms` varchar(1024) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `terms_tbl`
--

INSERT INTO `terms_tbl` (`id`, `terms`, `status`) VALUES
(5, 'The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `dtl` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `userid`, `name`, `phone`, `password`, `code`, `dtl`, `status`, `date`) VALUES
(1, 'riya@gmail.com', 'Riya Roy', '9647418317', '123', '', 'show', '1', '2021-10-05'),
(2, 'nivedita@gmail.com', 'Nivedita', '1234567890', '123', '', 'show', '1', ''),
(3, 'ami@gmail.com', 'ami', '9647418317', '123', '', 'hide', '3', '2021-10-16'),
(4, 'animeshroy83@gmail.com', 'Mani', '07003051389', 'a12345', '', 'hide', '1', '2021-10-21'),
(5, 'rikthroy@gmail.comm', 'sir', '87687053', '123', '9434', 'hide', '1', '2021-10-21'),
(6, 'rikthroy@gmail.com', 'Rikth Roy', '8768937053', '123', '8333', 'hide', '1', '2021-10-21'),
(7, 'promamondal1991@gmail.com', 'Animesh Roy', '07003051389', 'a12345', '7713', 'hide', '1', '2021-10-22'),
(13, 'animeshr84@gmail.com', 'dev', '7003051389', 'a56789', '9356', '', '0', '2021-10-28'),
(14, 'propertyforyou9999@gmail.com', 'Property', '7000000012', '12345', '4703', 'hide', '0', '2021-10-29'),
(15, 'sprsinfotech@gmail.com', 'Rikth Roy', '0511356039', '123', '3713', 'hide', '1', '2021-10-29'),
(16, 'niveditakhanra007@gmail.com', 'Nivedita', '6785434567', '123', '9858', 'hide', '1', '2021-11-12'),
(17, 'sunandaroy1952@rediffmail.com', 'S R', '9903936388', 'a12345', '5534', 'hide', '1', '2021-11-12'),
(18, 'g@g.com', 'xamm', '9453448784', '\' or 1=1#', '7881', 'hide', '0', '2021-11-13'),
(19, 'carlojohndelacruz@gmail.com', 'carlo', '0244265372', 'asd', '6735', 'hide', '1', '2021-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description_tbl`
--
ALTER TABLE `description_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_dtl_tbl`
--
ALTER TABLE `house_dtl_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_tbl`
--
ALTER TABLE `privacy_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_contact`
--
ALTER TABLE `site_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_tbl`
--
ALTER TABLE `social_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_tbl`
--
ALTER TABLE `subscription_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_house_dtl_tbl`
--
ALTER TABLE `temp_house_dtl_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_tbl`
--
ALTER TABLE `terms_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `description_tbl`
--
ALTER TABLE `description_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `house_dtl_tbl`
--
ALTER TABLE `house_dtl_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `image_tbl`
--
ALTER TABLE `image_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `privacy_tbl`
--
ALTER TABLE `privacy_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `site_contact`
--
ALTER TABLE `site_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `social_tbl`
--
ALTER TABLE `social_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subscription_tbl`
--
ALTER TABLE `subscription_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp_house_dtl_tbl`
--
ALTER TABLE `temp_house_dtl_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `terms_tbl`
--
ALTER TABLE `terms_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
