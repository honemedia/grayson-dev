-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2012 at 12:34 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `honemedi_grayson`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locname` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(65) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(3) NOT NULL,
  `postal` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `web` varchar(200) NOT NULL,
  `hours1` varchar(50) NOT NULL,
  `hours2` varchar(50) NOT NULL,
  `hours3` varchar(50) NOT NULL,
  `collections` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` VALUES(1, 'Zaman - DBA Direct Furniture', '38.860012', '-77.303520', '10390 Fairfax Blvd', '', 'Fairfax', 'VA', '22030', '703-293-9727', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE,7020-67-61-45030-VENICE-BURLAP');
INSERT INTO `dealers` VALUES(3, 'Furniture Outlets', '43.602972', '-96.724108', '140 E. Hinks Lane', '', 'Sioux Falls', 'DS', '57104', '605-977-7848', 'http://www.furnitureoutletsusa.com/', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');
INSERT INTO `dealers` VALUES(4, 'Hennen Furniture', '45.589657', '-94.200923', '1995 State Hwy. 15', '', 'St. Cloud', 'MN', '56303', '320-252-8484', 'http://hennenfurniture.com/', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');
INSERT INTO `dealers` VALUES(5, 'Spec Furniture / Underpriced Furniture', '33.908926', '-84.229609', '1030 Norcross Indust. Court', '', 'Norcross', 'GA', '30071', '320-252-8484', 'http://www.underpricedfurniture.com/directions.html', '', '', '', '7020-67-61-45030-VENICE-BURLAP,7030-60-64-62-GENR-35292-GROOVY-SMOKE');
INSERT INTO `dealers` VALUES(6, 'Factory Direct', '34.832986', '-82.588910', '829 East Main Street', '', 'Easley', 'SC', '29640', '864-442-6054', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');
INSERT INTO `dealers` VALUES(7, 'Barrow Mgmt. -  Sleep Cheap', '33.870237', '-78.630573', '1008 Hwy. 17 North', '', 'Little River', 'SC', '29566', '843-281-2337', 'http://www.furnituremattresses.net/', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');
INSERT INTO `dealers` VALUES(8, 'Home Again', '34.233377', ' -77.824453', '6766 Wrightsville Ave. Suite Q', '', 'Wilmington', 'NC', '28403', '910-679-4302', 'http://www.homeagainwilmington.com/', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');
INSERT INTO `dealers` VALUES(9, 'B E L Furniture', '29.719942', '-95.570522', '11155 West Park', '', 'Houston', 'TX', '77043', '832-358-8899', 'http://www.belfurniture.com/cart.html', '', '', '', '7020-67-61-45030-VENICE-BURLAP');
