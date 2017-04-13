-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 24, 2015 at 11:35 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `admin`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_list`
-- 

CREATE TABLE `admin_list` (
  `id` int(11) NOT NULL,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(30) collate latin1_general_ci NOT NULL,
  `name` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `admin_list`
-- 

INSERT INTO `admin_list` VALUES (0, 'foysal', '1209014', 'foysal');
INSERT INTO `admin_list` VALUES (1, 'tuhin', '1211054', 'tuhin');
