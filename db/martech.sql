-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 01:43 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martech`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `produktetcount`()
    NO SQL
SELECT COUNT(DISTINCT Id) FROM produktet$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE IF NOT EXISTS `produktet` (
  `Id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `cmimi` int(10) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`Id`, `emri`, `cmimi`, `description`, `foto`) VALUES
(1, 'LG G5', 431, '"Titani që shkëlqen bashkë me diellin" LG G5 është një ndër celularët e mençur më inovativ në treg i cili vjen me dizajn tejet elegant dhe...\n ', 'image\\product\\katalogu\\G5-medium01.jpg'),
(3, 'Lenovo Vibe S1 Lite 5 "- 16 GB, LTE', 266, '"Superior, elegant dhe i fuqishëm" Celular i mençur Lenovo Vibe S1 Lite vjen në treg me performancë superiore, kamerë të përmisuar 8MP, procesor...', 'image\\product\\katalogu\\lenovo.jpg'),
(4, 'Dell Inspiron 3542-6333BK', 330, 'Intel Core i3-4005U 1.7 GHz / 15.6" HD Display / 4 GB / 500 GB / Intel HD Graphics Webcam, HDMI, USB 3.0, WiFi, SD Card, Operating System : Windows 8.1 64 Bit Genuine  ', 'image\\product\\katalogu\\dell.jpg'),
(5, 'Apple Wired Keyboard, US', 62, '“Elegante dhe e bardhë si bora” E jashtëzakonshme sikur të gjitha produktet nga Apple. Ka taste me klikim të shpejtë dhe që reagon leht ë, përmban...', 'image\\product\\katalogu\\applekey.jpg'),
(6, 'Beats By Dr. Dre Solo 2', 151, '"Përjeto muzikën ndryshe" Zhyte veten në një përvojë tjetër emocionale duke përdorur Beats By Dr. Dre Solo 2. Kufjet palosëse t ë kualitetit të lartë...', 'image\\product\\katalogu\\dre2.jpg'),
(7, 'ASUS T100HA-FU026T', 344, '"Praktik dhe elegant"Transformer Book nga ASUS është seri hibride që kombinon funskionet e laptopëve dhe tabletëve në një paisje të vetme.', 'image\\product\\katalogu\\asus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post_code` int(11) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `mbiemri`, `mail`, `company`, `address`, `city`, `post_code`, `password`) VALUES
(13, 'elvudin', 'basha', 'elvudin7@gmail.com', 'Telcomm', 'Azem Hajdari', 'Prizren', 20000, 'elvudin123'),
(15, 'Artan', 'Xhaha', 'artan.xhaha@gmail.com', 'Euro-Food', 'wasdds', 'Prizren', 20000, 'artan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
