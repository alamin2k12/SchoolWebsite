-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 24, 2015 at 11:37 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `class_7`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(30) collate latin1_general_ci NOT NULL,
  `roll` varchar(40) collate latin1_general_ci NOT NULL,
  `name` varchar(40) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'alamin', '1207050', '1207050', 'alamin');
INSERT INTO `users` VALUES (2, 'fattah', '1207059', '1207059', 'FATTAH');
INSERT INTO `users` VALUES (0, 'saif', '1207046', '1207046', 'mahmud');
