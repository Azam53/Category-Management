-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2017 at 10:10 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE IF NOT EXISTS `contact_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `company` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `company`, `birthday`, `created_at`, `updated_at`, `status`) VALUES
(1, 4, 'Adam Saleh', 'adam.saleh@gmail.com', '873662552', 'yururuihrijoir', 'Mr. Digital', '4/ 12/ 1993', '2017-04-23 00:47:53', '2017-04-23 04:03:41', '1'),
(2, 4, 'Francis', 'francis.dam@yahoo.com', '524244232', 'kjnckjnjkcnjskcn', 'Dam Pvt Ltd', '3/ 12/ 1992', '2017-04-23 00:50:50', '2017-04-23 00:50:50', '0'),
(3, 4, 'Tom Bill', 'tom.bill@gmail.com', '253537737', 'jkkjcnkjckl', 'Dan Bosco', '23/12/1997', '2017-04-23 01:39:28', '2017-04-23 01:39:28', '0'),
(4, 4, 'Sam Rizvi', 'sam1234@yahoo.com', '234444222', 'Mumbai India', 'Jungle Coders', '23/1/1990', '2017-04-23 07:55:40', '2017-04-23 07:56:43', '1'),
(5, 3, 'John Conners', 'john.conners@gmail.com', '234555111', 'Rome , Italy', 'Accenture', '1/12/1995', '2017-04-23 07:59:05', '2017-04-23 07:59:05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_21_045248_create_user_table', 2),
('2017_04_22_163414_create_contact_data_table', 3),
('2017_04_22_182735_update_user_table', 4),
('2017_04_22_183113_update_contact_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(3, 'Azam53', 'aliazam005@gmail.com', '$2y$10$622AzoR4i/E/Yv5DdrkYLOrX6cM7utozBXn7DbrRAHb.bzkN8hvZ2', '2017-04-22 00:07:09', '2017-04-23 08:06:59', 'mofa6JbqQviFqY48uT5nzFS57RWyKy6uFXroiaYM2q3zykvMsqd6OYvqB3xq'),
(4, 'John45', 'john@gmail.com', '$2y$10$DMOjs0pfflHKKYygD/vGMejCVEuBDiMoVzAINNrW/x3d0A6xcpAZq', '2017-04-22 00:55:10', '2017-04-23 11:04:41', 'uiQ5zynPXGSBnbX7QE0F3d7G0vRAVPJa4Te2gPB8oRVqWYw7R5l0jfsda4KT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
