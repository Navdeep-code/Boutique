-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Feb 26, 2023 at 03:09 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33366024_Boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `Item_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Sale` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`Item_id`, `Name`, `Price`, `Sale`, `Rating`, `Img`) VALUES
(1, 'LOVE&LEMONADE One Shoulder Cut-out Split Thigh Sequin Formal Gown', 92, 30, 5, 'https://img.ltwebstatic.com/images3_pi/2022/08/03/1659503400c9833608299a5f9be90d53ec7484aa7b.webp'),
(5, 'Crisscross Backless Geo Sequins Mermaid Hem Formal Evening Gown', 94, 0, 4, 'https://img.ltwebstatic.com/images3_pi/2021/10/28/16353844523ddabab9ab30b27e7de7efc629769fc6_thumbnail_900x.webp'),
(6, 'Off Shoulder Split Thigh Sequin Formal Evening Gown', 102, 10, 3, 'https://img.ltwebstatic.com/images3_pi/2022/07/28/165897976252b7fd808d6bba38c3ad347b19a5761c_thumbnail_900x.webp'),
(7, 'LOVE&LEMONADE Contrast Sequin Backless Mesh Tube Bridesmaid Formal Gown', 87, 20, 2, 'https://img.ltwebstatic.com/images3_pi/2022/07/11/165751608646435d01126174e2334f820d0597893e_thumbnail_810x.webp'),
(8, 'LOVE&LEMONADE Cold Shoulder Ombre Sequin Floor Length Formal Gown', 98, 0, 5, 'https://img.ltwebstatic.com/images3_pi/2022/03/22/1647917418c9bfee80cc4aff5af89444c3891067ac_thumbnail_900x.webp'),
(10, 'Contrast Mesh Sequin Mermaid Hem Cami Evening Gown', 68, 0, 4, 'https://img.ltwebstatic.com/images3_pi/2022/06/07/165457833631cc07ae3baa64cdaff1013704a8e42f_thumbnail_900x.webp'),
(11, 'High Split Sequin Cami Evening Gown', 84, 25, 3, 'https://img.ltwebstatic.com/images3_pi/2022/04/19/1650338903672b066cc603343ccfe441713af04180_thumbnail_900x.webp');

-- --------------------------------------------------------

--
-- Table structure for table `LogIn`
--

CREATE TABLE `LogIn` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `LogIn`
--
ALTER TABLE `LogIn`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `Item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `LogIn`
--
ALTER TABLE `LogIn`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
