-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2017 at 02:46 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omt`
--
CREATE DATABASE IF NOT EXISTS `omt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `omt`;

-- --------------------------------------------------------

--
-- Table structure for table `muskarci`
--

DROP TABLE IF EXISTS `muskarci`;
CREATE TABLE `muskarci` (
  `id` int(11) NOT NULL,
  `naziv` varchar(256) DEFAULT NULL,
  `slika` varchar(256) DEFAULT NULL,
  `cena` decimal(9,2) DEFAULT NULL,
  `boja` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muskarci`
--

INSERT INTO `muskarci` (`id`, `naziv`, `slika`, `cena`, `boja`) VALUES
(1, 'Indian', 'men1.jpg', '1300.00', 'bela'),
(2, 'Indian', 'men2.jpg', '1300.00', 'crna'),
(3, 'Indian', 'men3.jpg', '1300.00', 'bordo'),
(4, 'Indian(sa ruapama)', 'men4.jpg', '1300.00', 'bela'),
(5, 'Spartan', 'men5.jpg', '1300.00', 'crna'),
(6, 'Spartan', 'men6.jpg', '1300.00', 'bela'),
(7, 'Skull', 'men8.jpg', '1300.00', 'bela'),
(8, 'Skull', 'men9.jpg', '1300.00', 'crna'),
(9, 'Skull(sa kapuljacom)', 'men10.jpg', '1500.00', 'crna'),
(10, 'Skull(sa kapuljacom)', 'men11.jpg', '1500.00', 'bela'),
(11, 'Punisher (sa kapuljacom)', 'men12.jpg', '1500.00', 'crna'),
(12, 'Punisher (sa kapuljacom)', 'men13.jpg', '1500.00', 'bordo'),
(13, 'OMT (sa kapuljacom)', 'men14.jpg', '1500.00', 'bela'),
(14, 'OMT (sa kapuljacom)', 'men15.jpg', '1500.00', 'crna'),
(15, 'indian', 'men16.jpg', '1300.00', 'crvena'),
(32, 'Indian', 'men17.jpg', '1300.00', 'siva'),
(33, 'Punisher(komplet)', 'kompleti1.jpg', '4000.00', 'crna');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ime` varchar(512) DEFAULT NULL,
  `nadimak` varchar(512) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `nadimak`, `email`, `password`, `status`) VALUES
(1, 'davor', 'admin', 'dachi79@gmail.com', 'f4d0571df7406384f3e92216e57abb19', 2),
(2, 'dakifaki', 'daki', 'daki@aol.com', '66fa4d8d79fb64c9dc7e801c83797008', 1),
(3, 'maja', 'majce', 'maja@gmail.com', 'c7c9bbd655701ff843ed3741c7eb989f', 1),
(4, 'natasa', 'nataly', 'natasa@gmail.com', '01e2fd6665add005a499c9ce0df39a55', 1),
(5, 'batalaza', 'fucker', 'batalaza@yahoo.com', '1ebc498e4d4a2e0cd0ad4a6189543cad', 1),
(6, 'Aleksa', 'Aleksa', 'aleksa@gmail.com', 'ce4cde742c04b6a51149dc7b75bf6a49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zene`
--

DROP TABLE IF EXISTS `zene`;
CREATE TABLE `zene` (
  `id` int(11) NOT NULL,
  `naziv` varchar(256) DEFAULT NULL,
  `slika` varchar(256) DEFAULT NULL,
  `cena` decimal(9,2) DEFAULT NULL,
  `boja` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zene`
--

INSERT INTO `zene` (`id`, `naziv`, `slika`, `cena`, `boja`) VALUES
(1, 'Skull', 'woman1.jpg', '1300.00', 'bela'),
(2, 'Skull(suknja)', 'woman2.jpg', '2000.00', 'crna'),
(3, 'Military', 'woman3.jpg', '2000.00', 'kamuflaža'),
(4, 'Indian(hole)', 'woman4.jpg', '1300.00', 'crvena'),
(5, 'Skull', 'woman5.jpg', NULL, 'crna'),
(6, 'Indian Skull', 'woman6.jpg', '1300.00', 'bela'),
(7, 'Skull', 'woman7.jpg', '1300.00', 'crvena'),
(8, 'Skull & Rose dress', 'woman8.jpg', '2000.00', 'siva'),
(9, 'Skull(sa kapuljacom)', 'woman9.jpg', '1500.00', 'maslinasto zelena'),
(10, 'Skull & Rose dress', 'woman10.jpg', '2500.00', 'crna'),
(11, 'Skull(sa kapuljacom)', 'woman11.jpg', '1500.00', 'bela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `muskarci`
--
ALTER TABLE `muskarci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zene`
--
ALTER TABLE `zene`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muskarci`
--
ALTER TABLE `muskarci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `zene`
--
ALTER TABLE `zene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
