-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 04:21 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_riffei`
--
CREATE DATABASE IF NOT EXISTS `db_riffei` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_riffei`;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `value` varchar(255) NOT NULL,
  `expiration` datetime NOT NULL,
  `images` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `title`, `description`, `value`, `expiration`, `images`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Lego Azul', 'Denamark', '600,00', '2014-02-10 05:00:00', 'http://gamehousebh.com.br/product_images/u/60922_Ampliada__12487_zoom.jpg', 1, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(3, 'HD Externo', 'Novinho!', '150,00', '2014-02-10 05:00:00', 'http://gamehousebh.com.br/product_images/u/60922_Ampliada__12487_zoom.jpg', 1, '2014-01-03 04:49:44', '2014-01-03 04:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `card_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `card_id_idx` (`card_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `value`, `card_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(2, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(3, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(4, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(5, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(6, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(7, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(8, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(9, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(10, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(11, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(12, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(13, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(14, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(15, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(16, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(17, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(18, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(19, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(20, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(21, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(22, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(23, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(24, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(25, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(26, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(27, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(28, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(29, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(30, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(31, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(32, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(33, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(34, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(35, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(36, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(37, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(38, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(39, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(40, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(41, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(42, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(43, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(44, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(45, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(46, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(47, '', '7.5', 3, 0, '2014-01-03 04:49:44', '2014-01-03 04:49:44'),
(48, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27'),
(49, '', '30', 2, 0, '2014-01-03 04:34:27', '2014-01-03 04:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `cardnumber` varchar(16) NOT NULL,
  `securitycode` varchar(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `age`, `address`, `state`, `phone`, `flag`, `cardnumber`, `securitycode`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Vitor', 'Levi', '27', '10780 Kempwood Dr.', 'São Paulo', '+55 11 997206622', 'Visa', '123456789101112', '258', 'vitor.levi', '7701026868db20ed6a8eb3ddeba6c089', 'vitorlevi.dg@gmail.com', '2014-01-03 04:33:03', '2014-01-03 04:33:03');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_user_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_card_id_card_id` FOREIGN KEY (`card_id`) REFERENCES `card` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
