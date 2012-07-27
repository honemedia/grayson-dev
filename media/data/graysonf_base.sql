-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2012 at 01:28 PM
-- Server version: 5.1.63
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `graysonf_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
CREATE TABLE IF NOT EXISTS `collections` (
  `collectionName` varchar(100) NOT NULL,
  `collectionType` varchar(500) NOT NULL,
  `itemID` varchar(100) NOT NULL,
  `order` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `featured` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`collectionName`, `collectionType`, `itemID`, `order`, `photo`, `featured`) VALUES
('albert', 'vienna walnut', '9583-00-GENS-53516-VIENNA-WALNUT', 1, 'albert-vienna.jpg', 'y'),
('leon', 'vienna pecan', '9691-00-GENS-53526-VIENNA-PECAN', 2, 'leon-vienna.jpg', 'n'),
('madival', 'venice burlap', '7020-67-61-45030-VENICE-BURLAP ', 3, 'madival-venice.jpg', 'y'),
('mayfair', 'nova scotia mushroom', '9618-00-GENS-38595-NOVA-SCOTIA-MUSHROOM', 4, 'mayfair-novascotia.jpg', 'y'),
('metropolitan', 'gaga charcoal', '7010-67-62-GENR-119573-GAGA-CHARCOAL', 5, 'metropolitan-gaga.jpg', 'n'),
('metropolitan', 'lake como chocolate', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 6, 'metropolitan-lakecomo.jpg', 'n'),
('metropolitan', 'premier dove', '7010-67-62-GENR-62592-PREMIER-DOVE', 7, 'metropolitan-premier.jpg', 'n'),
('sydney', 'groovy smoke', '7030-60-64-62-GENR-35292-GROOVY-SMOKE', 8, 'sydney-groovy.jpg', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

DROP TABLE IF EXISTS `dealers`;
CREATE TABLE IF NOT EXISTS `dealers` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `locname`, `lat`, `lng`, `address`, `address2`, `city`, `state`, `postal`, `phone`, `web`, `hours1`, `hours2`, `hours3`, `collections`) VALUES
(1, 'Zaman - DBA Direct Furniture', '38.860012', '-77.303520', '10390 Fairfax Blvd', '', 'Fairfax', 'VA', '22030', '703-293-9727', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE,7020-67-61-45030-VENICE-BURLAP'),
(3, 'Furniture Outlets', '43.602972', '-96.724108', '140 E. Hinks Lane', '', 'Sioux Falls', 'DS', '57104', '605-977-7848', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE'),
(4, 'Hennen Furniture', '45.589657', '-94.200923', '1995 State Hwy. 15', '', 'St. Cloud', 'MN', '56303', '320-252-8484', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE'),
(5, 'Spec Furniture / Underpriced Furniture', '33.908926', '-84.229609', '1030 Norcross Indust. Court', '', 'Norcross', 'GA', '30071', '320-252-8484', '', '', '', '', '7020-67-61-45030-VENICE-BURLAP,7030-60-64-62-GENR-35292-GROOVY-SMOKE'),
(6, 'Factory Direct', '34.832986', '-82.588910', '829 East Main Street', '', 'Easley', 'SC', '29640', '864-442-6054', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE'),
(8, 'Home Again', '34.233377', ' -77.824453', '6766 Wrightsville Ave. Suite Q', '', 'Wilmington', 'NC', '28403', '910-679-4302', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE'),
(9, 'B E L Furniture', '29.601260', '-95.345799', '11155 West Park', '', 'Houston', 'TX', '77043', '832-358-8899', '', '', '', '', '7020-67-61-45030-VENICE-BURLAP'),
(11, 'Barrow Mgmt Furniture', '33.870237', '-78.630573', '1008 Hwy. 17 North', '', 'Little River', 'SC', '29566', '843-281-2337', '', '', '', '', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE,7010-67-62-GENR-119573-GAGA-CHARCOAL,7010-67-62-GENR-62592-PREMIER-DOVE');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `collectionID` varchar(200) NOT NULL,
  `collectionName` varchar(500) NOT NULL,
  `collectionType` varchar(50) NOT NULL,
  `itemID` varchar(500) NOT NULL,
  `itemType` varchar(300) NOT NULL,
  `itemName` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `dimensions` varchar(500) NOT NULL,
  `cubic` varchar(500) NOT NULL,
  `fabricContent` varchar(500) NOT NULL,
  `fabricFeatured` varchar(300) NOT NULL,
  `fabricOptions` varchar(500) NOT NULL,
  `schematics` varchar(900) NOT NULL,
  `featherBlend` varchar(500) NOT NULL,
  `disclaimer` varchar(500) NOT NULL,
  `priceRange` varchar(500) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`UID`, `collectionID`, `collectionName`, `collectionType`, `itemID`, `itemType`, `itemName`, `description`, `photo`, `dimensions`, `cubic`, `fabricContent`, `fabricFeatured`, `fabricOptions`, `schematics`, `featherBlend`, `disclaimer`, `priceRange`) VALUES
(1, '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 'metropolitan', 'lake como chocolate', '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 'sofa', 'sofa', 'Classic tuxedo styling and supremely comfortable Pacific Coast Featherblend cushions will have you floating in a cloud of relaxation on the Metropolitan sofa. The luxurious throw pillows are included, and add a special flair to any living room.', 'metropolitan-lakecomo-sofa.jpg', '99x45x38', '88', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'lakecomo', 'venicescarlet,gagacharcoal,premierdove,veniceburlapmetro', 'metropolitan-sofa.png,metropolitan-loveseat.png,metropolitan-sofa-laf.png,metropolitan-loveseat-laf.png', 'Y', '', '$1199-$1399'),
(2, '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 'metropolitan', 'lake como chocolate', '7010-10-GENR-49521-LAKE-COMO-CHOCOLATE', 'loveseat', 'loveseat', 'Classic tuxedo styling and supremely comfortable Pacific Coast Featherblend cushions will have you floating in a cloud of relaxation on the Metropolitan loveseat. The luxurious throw pillows are included, and add a special flair to any living room.', 'metropolitan-lakecomo-loveseat.jpg', '74x45x38', '66', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'lakecomo', 'gagacharcoal,premierdove,veniceburlapmetro,venicescarlet', 'metropolitan-loveseat.png,metropolitan-loveseat-laf.png', 'Y', '', '$1149-1349'),
(3, '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 'metropolitan', 'lake como chocolate', '7010-20-GENR-49521-LAKE-COMO-CHOCOLATE', 'chair', 'swivel chair', 'Metropolitan swivel chair works great in any room, enveloping you in a swirl of Featherblend comfort.  Luxurious throw pillow is included.', 'metropolitan-lakecomo-chair.jpg', '48x45x38', '43', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'lakecomochair', 'gagacharcoal,premierdove,veniceburlapmetro,venicescarlet', 'metropolitan-chair.png', 'Y', '', '$799-$899'),
(4, '7010-00-GENR-49521-LAKE-COMO-CHOCOLATE', 'metropolitan', 'mozambique earth', '7010-32-GENR-105073-MOZAMBIQUE-EARTH', 'ottoman', 'cocktail ottoman', 'Eye-catching cocktail ottoman covered in a richly detailed jacquard will spice up any room in the house, adding an elegant compliment to the Metropolitan collection.', 'metropolitan-lakecomo-ottoman.jpg', '40x34x18', '12', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'mozambiqueearth', 'lakecomochocolate,premierdoveonly,gagacharcoalonly,veniceburlaponly,venicescarletonly', 'metropolitan-ottoman.png', 'N', '', '$499-$599'),
(5, '7010-67-62-GENR-119573-GAGA-CHARCOAL', 'metropolitan', 'gaga charcoal', '7010-67-62-GENR-119573-GAGA-CHARCOAL', 'sofa', 'sectional', 'Classic tuxedo styling is writ large on this sumptuous Metropolitan sectional.  Supremely comfortable Pacific Coast Featherblend cushions will have you floating in a cloud of relaxation.  The luxurious throw pillows are included adding a special flair to any living room.', 'metropolitan-gaga-sofa.jpg', '130x102x38', '165', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'gagacharcoal', 'lakecomo,premierdove,veniceburlapmetro,venicescarlet', 'metropolitan-sofa.png,metropolitan-loveseat.png,metropolitan-sofa-laf.png,metropolitan-loveseat-laf.png', 'Y', '', '$2399-$2599'),
(6, '7010-67-62-GENR-119573-GAGA-CHARCOAL', 'metropolitan', 'gaga charcoal', '7010-27-GENR-119573-GAGA-CHARCOAL', 'chair', 'swivel chair', 'Metropolitan swivel chair works great in any room, enveloping you in a swirl of Featherblend comfort.  Luxurious throw pillow is included.', 'metropolitan-gaga-chair.jpg', '48x44.5x38', '43', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'gagacharcoalchair', 'premierdove,lakecomo,veniceburlapmetro,venicescarlet', 'metropolitan-chair.png', 'Y', '', '$799-$899'),
(7, '7010-67-62-GENR-119573-GAGA-CHARCOAL', 'metropolitan', 'beaver creek', '7010-32-GENR-119515-BEAVER-CREEK', 'ottoman', 'cocktail ottoman', 'Eye-catching cocktail ottoman covered in a richly detailed jacquard will spice up any room in the house, adding an elegant compliment to the Metropolitan collection.', 'metropolitan-gaga-ottoman.jpg', '40x34x18', '12', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'beavercreek', 'mozambiqueearth,premierdoveonly,gagacharcoalonly,lakecomochocolate,veniceburlaponly,venicescarletonly', 'metropolitan-ottoman.png', 'N', '', '$499-$599'),
(8, '7010-67-62-GENR-62592-PREMIER-DOVE', 'metropolitan', 'premier dove', '7010-67-62-GENR-62592-PREMIER-DOVE', 'sofa', 'sectional', 'Classic tuxedo styling is writ large on this sumptuous Metropolitan sectional.  Supremely comfortable Pacific Coast Featherblend cushions will have you floating in a cloud of relaxation.  The luxurious throw pillows are included, and add a special flair to any living room.', 'metropolitan-premier-sofa.jpg', '130x102x38', '165', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'premierdove', 'gagacharcoal,lakecomo,veniceburlapmetro,venicescarlet', 'metropolitan-sofa.png,metropolitan-loveseat.png,metropolitan-sofa-laf.png,metropolitan-loveseat-laf.png', 'Y', '', '$2399-$2599'),
(9, '7010-67-62-GENR-62592-PREMIER-DOVE', 'metropolitan', 'premier dove', '7010-27-GENR-62592-PREMIER-DOVE', 'chair', 'swivel chair', 'Metropolitan swivel chair works great in any room, enveloping you in a swirl of Featherblend comfort.  Luxurious throw pillow is included.', 'metropolitan-premier-chair.jpg', '48x44.5x38', '43', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'premierdovechair', 'gagacharcoal,lakecomo,veniceburlapmetro,venicescarlet', 'metropolitan-chair.png', 'Y', '', '$799-$899'),
(10, '7020-67-61-45030-VENICE-BURLAP', 'madival', 'venice burlap', '7020-67-61-45030-VENICE-BURLAP', 'sofa', 'sectional', 'This sectional is like a Royal with the palatial Madival sectional featuring exquisite craftsmanship and the supreme comfort of Pacific Coast Featherblend cushions. Luxurious throw pillows complete the regal look.', 'madival-venice-sofa.jpg', '144x44x36', '172', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'veniceburlap', 'gagacharcoal,premierdove,lakecomo,venicescarlet', 'madival-sofa.png,madival-loveseat.png,madival-sofa-laf.png,madival-sofa-raf.png', 'Y', '', '$2599-$2799'),
(11, '7020-67-61-45030-VENICE-BURLAP', 'madival', 'venice burlap', '7020-20-GENR-45030-VENICE-BURLAP', 'chair', 'chair and 1/2', 'Palatial Madival chair features exquisite crafsmanship and the supreme comfort of Pacific Coast Featherblend cushions. The luxurious throw pillows complete the regal look.', 'madival-venice-chair.jpg', '61.5x44x36', '53', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'veniceburlap', 'premierdove,gagacharcoal,lakecomo,venicescarlet', 'madival-chair.png', 'Y', '', '$999-$1199'),
(12, '7020-67-61-45030-VENICE-BURLAP', 'madival', 'venice burlap', '7020-30-GENR-45030 VENICE-BURLAP', 'ottoman', 'cocktail ottoman', 'Exquisitely crafted Madival cocktail ottoman completes your regal surroundings.', 'madival-venice-ottoman.jpg', '54x44x18', '21', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'veniceburlaponly', 'premierdoveonly,gagacharcoalonly,lakecomochocolateonly,venicescarletonly', 'madival-ottoman.png', 'N', '', '$499-$599'),
(13, '7030-60-64-62-GENR-35292-GROOVY-SMOKE', 'sydney', 'groovy smoke', '7030-60-64-62-GENR-35292-GROOVY-SMOKE', 'sofa', 'sectional', 'Contemporary bliss describes the mammoth Sydney sectional, and its plush microfiber fabric and supremely comfortable Featherblend cushions. Graphic throw pillows complete your modern oasis', 'sydney-groovy-sofa.jpg', '167x105x41', '226', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'groovysmoke', 'groovychocolate', 'sydney-sofa.png,sydney-loveseat.png,sydney-loveseat-laf-raf.png,sydney-sofa-laf.png,sydney-sofa-raf.png,sydney-sofa-armless.png', 'Y', '', '$2999-$3499'),
(14, '7030-60-64-62-GENR-35292-GROOVY-SMOKE', 'sydney', 'big swirl smoke', '7030-32-GENR-89596-BIG SWIRL-SMOKE', 'ottoman', 'cocktail ottoman', 'Graphic Sydney cocktail ottoman completes your modern oasis.', 'sydney-groovy-ottoman.jpg', '46x46x20', '21', '100 % Polyester                 S Cleaning code  When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier ', 'bigswirlsmoke', 'bigswirlchocolate', 'sydney-ottoman-cocktail.png,sydney-ottoman.png', 'N', '', '$399-$499'),
(15, '9583-00-GENS-53516-VIENNA-WALNUT', 'albert', 'vienna walnut', '9583-00-GENS-53516-VIENNA-WALNUT', 'sofa', 'tufted sofa', 'Live in old-world comfort with the finely crafted Albert sofa, featuring hand-tufted upholstery accented with antiqued braids. Featherblend throw pillows are included.', 'albert-vienna-sofa.jpg', '89.5x40x33', '65', 'Leather Blend and Polyurethane Combo', 'viennawalnut', '', '', 'N', 'Imported product may not be available in all locations.', '$999-$1099'),
(16, '9583-00-GENS-53516-VIENNA-WALNUT', 'albert', 'vienna walnut', '9583-20-GENS-53516-VIENNA-WALNUT', 'chair', 'tufted chair', 'Live in old-world comfort with the finely crafted Albert chair, featuring hand-tufted upholstery accented with antiqued braids. Featherblend throw pillows are included.', 'albert-vienna-chair-tufted.jpg', '49x40x33', '36.5', 'Leather Blend and    Polyurethane Combo', 'viennawalnut', '', '', 'N', 'Imported product may not be available in all locations.', '$599'),
(17, '9583-00-GENS-53516-VIENNA-WALNUT', 'albert', 'vienna walnut', '9583-31-GENS-53516-VIENNA-WALNUT', 'ottoman', 'storage ottoman', 'Finely crafted Albert storage ottoman completes the old-world ambience.', 'albert-vienna-ottoman.jpg', '48x29x18', '14', 'Leather Bonded     Polyurethane Combo', 'viennawalnutonly', '', '', 'N', 'Imported product may not be available in all locations.', '$399-$499'),
(18, '9583-00-GENS-53516-VIENNA-WALNUT', 'wentworth', 'winter park', '9102-20-GENS-92219-WINTER-PARK', 'chair', 'wing chair', 'Timeless Wentworth wing chair upholstered in a rich jacquard complements the old-world feel of the Albert collection.', 'albert-vienna-chair-wing.jpg', '31.5x38x44', '17', '100% Polyester                       S Cleaning Code', 'winterpark', '', '', 'N', 'Imported product may not available in all locations.', '$499-$599'),
(19, '9618-00-GENS-38595-NOVA-SCOTIA-MUSHROOM', 'mayfair', 'nova scotia mushroom', '9618-00-GENS-38595-NOVA-SCOTIA-MUSHROOM', 'sofa', 'tufted sofa', 'Elegant lines and handcrafted upholstery are hallmarks of the sophisticated Mayfair sofa. Featuring hand-tufted upholstery and Featherblend throw pillows, this sofa has a timeless elegance.', 'mayfair-novascotia-sofa.jpg', '100x41x35', '71', '100% Polyester                       S Cleaning Code', 'novascotiamushroom', '', '', 'N', 'Imported product may not be available in all locations.', '$999-$1099'),
(20, '9618-00-GENS-38595-NOVA-SCOTIA-MUSHROOM', 'mayfair', 'nova scotia mushroom', '9618-20-GENS-38595-NOVA-SCOTIA-MUSHROOM', 'chair', 'chair and 1/2', 'Elegant lines and handcrafted upholstery are hallmarks of the sophisticated Mayfair chair. Featuring  hand-tufted upholstery and Featherblend throw pillows, this chair is generously proportioned.', 'mayfair-novascotia-chair.jpg', '65.5x42x36', '48.5', '100% Polyester                       S Cleaning Code', 'novascotiamushroom', '', '', 'N', 'Imported product may not be available in all locations.', '$699-$799'),
(21, '9618-00-GENS-38595-NOVA-SCOTIA-MUSHROOM', 'lords', 'lima harvest', '9618-37-GENC-57728-LIMA-HARVEST', 'ottoman', 'tufted ottoman', 'The Lords tufted ottoman is a conversation piece, featuring superior craftmanship designed to elevate the dÃ©cor of any room.', 'mayfair-novascotia-ottoman.jpg', '45x45x19', '22', 'LeatherandBlend', 'novascotialeatheronly', '', '', 'N', 'Imported product may not be available in all locations.', '$499-$599'),
(22, '9691-00-GENS-53526-VIENNA-PECAN', 'leon', 'vienna pecan', '9691-00-GENS-53526-VIENNA-PECAN', 'sofa', 'sofa', 'A visual feast of texture and craftmanship, the Leon sofa brings a rich patina to your home. Decadent throw pillows complete the picture.', 'leon-vienna-sofa.jpg', '93x38.5x37', '73', 'Leather andBlend  Outside       100% Polyester Inside S Cleanability', 'viennapecan', '', '', 'N', 'Imported product may not be available in all locations.', '$999-$1099'),
(23, '9691-00-GENS-53526-VIENNA-PECAN', 'leon', 'vienna pecan', '9691-20-GENS-53526-VIENNA-PECAN', 'chair', 'chair and 1/2', 'The grand scale of the Leon chair is an impressive feast for the eyes. Decadent throw pillows complete the picture.', 'leon-vienna-chair.jpg', '59x38.5x37', '47', 'Leather andBlend  Outside 100% Polyester Inside S Cleanability', 'viennapecanchair', '', '', 'N', 'Imported product may not be available in all locations.', '$699-$799'),
(24, '9691-00-GENS-53526-VIENNA-PECAN', 'leon', 'vienna pecan', '9691-31-GENS-53526-VIENNA-PECAN', 'ottoman', 'storage ottoman', 'The Leon storage ottoman combines rich detailing with modern function.', 'leon-vienna-ottoman.jpg', '46x27x18', '16', 'Polyester Blend                      WS Cleaning Code     When upholstery cleaning is required, remove your natural filled upholstery interior prior to any steam cleaning or applications of any soil guard barrier process.', 'viennawalnutonly', '', '', 'N', 'Imported product may not be available in all locations.', '$399-$499'),
(25, '9691-00-GENS-53526-VIENNA-PECAN', 'alhambra', 'suzzani mocha', '9429-86-GENS-49519-SUZZANI-MOCHA', 'chair', 'recliner', 'Complete the tapestry of your home with the Alhambra recliner, a perfect complement to the Leon collection.', 'leon-suzzani-recliner.jpg', '37x39x39', '22.5', '100% Polyester                       S Cleaning Code', 'suzzanimocha', '', '', 'N', 'Imported product may not be available in all locations.', '$599-$699');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
