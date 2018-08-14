-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 08:48 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `phone_no` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `street_address` text NOT NULL,
  `reg_office` varchar(300) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `rolecode` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `company_name`, `phone_no`, `email`, `logo`, `street_address`, `reg_office`, `state`, `city`, `pincode`, `gst_no`, `rolecode`, `status`, `created`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Patel And Sons Krishi Sewa Kendra', '9589236338', 'patel.virendra.patel@gmail.com', '5b5c40ddf26e5.png', 'ward no. 5 near galla mandi ,NH 12 main road mandideep', 'ward no. 5 near galli mandi ,NH 12 main road mandideep', 0, 'Thane', '400614', '23AZNPP3888M1ZH', 'admin', 1, '2017-07-27 01:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `ip_address`, `browser`, `date_time`) VALUES
(1, 'pawansut', '110.225.19.255', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '2018-05-02 01:12:28'),
(2, 'pawansut', '223.191.5.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '2018-05-05 02:45:00'),
(3, 'pawansut', '106.203.183.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '2018-05-15 10:00:38'),
(4, 'pawansut', '106.203.133.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '2018-05-16 06:10:50'),
(5, 'pawansut', '47.15.88.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-19 06:45:22'),
(6, 'pawansut', '139.5.230.185', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-19 06:46:37'),
(7, 'pawansut', '106.206.84.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-26 09:22:54'),
(8, 'admin', '95.76.0.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-27 08:06:30'),
(9, 'admin', '106.203.142.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-31 04:39:11'),
(10, 'admin', '14.102.121.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-31 04:40:09'),
(11, 'admin', '14.102.121.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-31 05:04:13'),
(12, 'admin', '157.41.162.210', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-05-31 08:28:17'),
(13, 'admin', '120.89.75.29', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-01 02:52:06'),
(14, 'admin', '122.170.225.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-01 06:12:19'),
(15, 'admin', '189.153.31.87', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-03 15:24:14'),
(16, 'admin', '37.38.78.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-04 04:02:59'),
(17, 'admin', '106.203.181.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-04 12:52:57'),
(18, 'admin', '139.5.229.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-08 01:16:52'),
(19, 'admin', '139.5.229.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-08 01:29:29'),
(20, 'admin', '162.158.154.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-09 15:32:20'),
(21, 'admin', '141.101.69.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-09 15:32:41'),
(22, 'admin', '108.162.212.100', 'Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0', '2018-06-09 17:13:59'),
(23, 'admin', '108.162.212.100', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-09 17:14:56'),
(24, 'admin', '162.158.155.13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-11 01:16:03'),
(25, 'admin', '162.158.155.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-11 01:20:35'),
(26, 'admin', '162.158.155.13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-11 01:43:55'),
(27, 'admin', '141.101.107.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-11 06:59:40'),
(28, 'admin', '162.158.58.68', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-11 23:47:31'),
(29, 'admin', '141.101.99.94', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '2018-06-12 01:35:17'),
(30, 'admin', '172.68.144.252', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-12 20:22:22'),
(31, 'admin', '172.68.144.252', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-12 21:16:59'),
(32, 'admin', '172.69.134.80', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-13 04:03:30'),
(33, 'admin', '162.158.166.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-13 08:31:59'),
(34, 'admin', '162.158.166.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-14 03:29:45'),
(35, 'admin', '162.158.166.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-14 03:37:27'),
(36, 'admin', '162.158.167.83', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-14 03:47:16'),
(37, 'admin', '162.158.167.83', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-14 05:00:33'),
(38, 'admin', '103.21.59.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-14 12:37:38'),
(39, 'admin', '162.158.88.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134', '2018-06-16 15:14:08'),
(40, 'admin', '162.158.165.237', 'Mozilla/5.0 (Linux; Android 7.1.2; Mi A1 Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.158 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/167.0.0.28.94;]', '2018-06-21 03:38:09'),
(41, 'admin', '162.158.155.91', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-21 03:41:11'),
(42, 'admin', '162.158.165.237', 'Mozilla/5.0 (Linux; Android 7.1.2; Mi A1 Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.158 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/167.0.0.28.94;]', '2018-06-21 09:06:30'),
(43, 'admin', '162.158.165.147', 'Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-21 10:27:13'),
(44, 'admin', '141.101.69.38', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-22 13:39:35'),
(45, 'Admin', '162.158.165.249', 'Mozilla/5.0 (Linux; Android 8.1.0; Nexus 6P Build/OPM6.171019.030.B1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36', '2018-06-23 01:50:08'),
(46, 'admin', '162.158.134.9', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-23 10:48:15'),
(47, 'admin', '162.158.167.227', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-23 23:36:19'),
(48, 'admin', '162.158.202.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-24 00:39:37'),
(49, 'admin', '162.158.166.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-24 07:19:53'),
(50, 'admin', '108.162.246.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-06-24 13:19:32'),
(51, 'admin', '197.234.242.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-24 13:32:48'),
(52, 'admin', '108.162.221.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-25 20:30:11'),
(53, 'admin', '198.41.226.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-06-27 10:02:48'),
(54, 'admin', '172.69.134.32', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-06-27 14:35:37'),
(55, 'admin', '172.69.134.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-06-28 01:13:24'),
(56, 'admin', '162.158.154.228', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-06-28 07:10:26'),
(57, 'admin', '108.162.229.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-06-28 10:54:41'),
(58, 'admin', '162.158.165.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-29 04:38:56'),
(59, 'admin', '162.158.165.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2018-06-29 05:55:50'),
(60, 'Admin', '141.101.88.75', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J120G Build/LMY47X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/170.0.0.39.87;]', '2018-06-29 12:32:13'),
(61, 'admin', '141.101.88.75', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.99', '2018-06-29 12:55:54'),
(62, 'admin', '141.101.98.159', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', '2018-06-30 03:48:56'),
(63, 'admin', '197.234.242.117', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.110', '2018-06-30 09:20:21'),
(64, 'admin', '141.101.98.219', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-01 12:41:58'),
(65, 'admin', '141.101.99.64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-02 03:17:46'),
(66, 'admin', '162.158.166.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-03 01:34:56'),
(67, 'admin', '141.101.102.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '2018-07-03 08:29:45'),
(68, 'Admin', '162.158.154.72', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]', '2018-07-03 23:38:03'),
(69, 'admin', '172.68.144.132', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-04 06:42:53'),
(70, 'admin', '162.158.165.117', 'Mozilla/5.0 (Linux; Android 6.0.1; SM-J710F Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.36', '2018-07-04 06:56:56'),
(71, 'admin', '162.158.50.153', 'Mozilla/5.0 (Linux; Android 7.0; Lenovo K33a42 Build/NRD90N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36', '2018-07-04 07:03:57'),
(72, 'Admin', '172.69.134.80', 'Mozilla/5.0 (Linux; Android 7.0; Lenovo K33a42 Build/NRD90N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36', '2018-07-04 07:39:57'),
(73, 'Admin', '162.158.154.114', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]', '2018-07-04 13:29:58'),
(74, 'Admin', '162.158.154.114', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]', '2018-07-04 13:29:59'),
(75, 'admin', '162.158.154.198', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-05 09:27:50'),
(76, 'admin', '172.68.6.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-05 11:23:03'),
(77, 'admin', '162.158.42.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-05 17:36:58'),
(78, 'admin', '172.69.134.50', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-07 05:08:00'),
(79, 'admin', '172.69.42.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-07 17:36:52'),
(80, 'admin', '108.162.215.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-08 23:35:44'),
(81, 'admin', '162.158.165.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-11 04:10:55'),
(82, 'admin', '162.158.167.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0', '2018-07-11 10:00:18'),
(83, 'admin', '197.234.242.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-14 09:38:55'),
(84, 'admin', '162.158.165.99', 'Mozilla/5.0 (Linux; Android 7.0; SM-C701F Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36', '2018-07-14 20:28:39'),
(85, 'admin', '108.162.229.243', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-14 20:36:46'),
(86, 'admin', '162.158.22.15', 'Mozilla/5.0 (Linux; Android 5.0; Micromax Q345 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36', '2018-07-15 22:56:58'),
(87, 'admin', '108.162.229.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-16 00:05:57'),
(88, 'admin', '162.158.158.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-17 00:23:23'),
(89, 'admin', '141.101.99.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-17 00:27:49'),
(90, 'admin', '162.158.167.35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-17 08:25:02'),
(91, 'admin', '162.158.154.192', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-17 14:13:04'),
(92, 'admin', '162.158.50.21', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-18 00:13:05'),
(93, 'admin', '162.158.167.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-18 11:05:36'),
(94, 'admin', '162.158.167.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134', '2018-07-19 08:12:03'),
(95, 'admin', '172.68.144.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-20 12:17:20'),
(96, 'admin', '141.101.88.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-22 02:14:40'),
(97, 'admin', '162.158.167.53', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-22 02:57:29'),
(98, 'admin', '172.68.146.169', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-22 03:11:01'),
(99, 'admin', '172.68.144.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134', '2018-07-22 07:46:39'),
(100, 'admin', '172.68.144.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134', '2018-07-22 07:53:12'),
(101, 'admin', '162.158.166.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-23 02:02:27'),
(102, 'admin', '162.158.158.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-23 03:26:10'),
(103, 'admin', '162.158.167.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-23 03:57:37'),
(104, 'admin', '162.158.155.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54', '2018-07-23 06:01:27'),
(105, 'admin', '141.101.99.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.60', '2018-07-25 06:08:30'),
(106, 'admin', '162.158.155.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-25 07:50:31'),
(107, 'admin', '198.41.226.123', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-26 09:30:40'),
(108, 'admin', '197.234.242.117', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-27 08:41:59'),
(109, 'admin', '162.158.167.35', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-27 11:19:15'),
(110, 'admin', '141.101.88.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-28 04:22:14'),
(111, 'admin', '172.69.134.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-29 00:51:25'),
(112, 'admin', '172.69.69.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15', '2018-07-29 11:12:38'),
(113, 'admin', '162.158.167.191', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.75 Safari/537.36', '2018-07-30 01:44:39'),
(114, 'admin', '141.101.88.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-30 01:50:48'),
(115, 'admin', '172.69.226.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-30 08:42:16'),
(116, 'admin', '162.158.166.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-07-31 00:21:02'),
(117, 'admin', '172.68.144.144', 'Mozilla/5.0 (Linux; U; Android 7.1.2; en-in; Redmi 4 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.7.3', '2018-08-01 00:30:54'),
(118, 'admin', '141.101.88.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-08-01 08:39:21'),
(119, 'admin', '162.158.166.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-08-01 10:02:21'),
(120, 'admin', '141.101.88.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '2018-08-02 03:35:25'),
(121, 'admin', '162.158.165.243', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2018-08-02 05:46:47'),
(122, 'admin', '162.158.167.35', 'Mozilla/5.0 (Linux; Android 6.0; Lenovo A7000-a Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36', '2018-08-02 05:47:22'),
(123, 'admin', '162.158.166.76', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2018-08-02 05:49:19'),
(124, 'admin', '162.158.167.137', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2018-08-02 05:55:31'),
(125, 'admin', '162.158.167.35', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J200G Build/LMY47X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2018-08-02 06:03:38'),
(126, 'admin', '162.158.165.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.84 Safari/537.36', '2018-08-02 06:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `gst_no` varchar(20) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `sub_total` decimal(12,3) DEFAULT NULL,
  `total_taxable_amount` decimal(12,3) DEFAULT NULL,
  `total` decimal(12,3) DEFAULT NULL,
  `invoice_date` date NOT NULL,
  `tpt_co` varchar(20) NOT NULL,
  `gr_no` varchar(20) NOT NULL,
  `way_bill_ref` varchar(20) NOT NULL,
  `place_of_order` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `client_id`, `invoice_no`, `contact`, `email`, `address`, `state`, `city`, `pincode`, `gst_no`, `bill_date`, `sub_total`, `total_taxable_amount`, `total`, `invoice_date`, `tpt_co`, `gr_no`, `way_bill_ref`, `place_of_order`, `status`, `created`) VALUES
(6, 5, 'PS-006', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '2018-07-25', '28050.000', '5049.000', '33099.000', '2018-07-25', '', '', '', '', 'pending', '2018-07-25 13:22:15'),
(7, 5, 'PS-007', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '2018-07-27', '2110.000', '379.800', '2489.800', '2018-07-27', '', '', '', '', 'pending', '2018-07-27 16:59:03'),
(8, 6, 'PS-008', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '2018-07-27', '9840.000', '1771.200', '11611.200', '2018-07-27', '', '', '', '', 'pending', '2018-07-27 17:10:35'),
(9, 8, 'PS-009', '8510895089', 'ritronixtechnology17@gmail.com', '122, sector \"C\" near R.K. Hospital Bhopal', 'M.P.', 'Bhopal', 462046, '', '2018-07-28', '700.000', '0.000', '700.000', '2018-07-28', '', '', '', '', 'pending', '2018-07-28 09:57:08'),
(10, 5, NULL, '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2268.000', '36.000', '2304.000', '0000-00-00', '', 'zxzx', 'cxc', 'sdsds', NULL, NULL),
(11, 5, '456', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '335.000', '45.000', '380.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(12, 5, '456', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '335.000', '45.000', '380.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(13, 5, '456', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '335.000', '45.000', '380.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(14, 5, '456', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '335.000', '45.000', '380.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(18, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '0.000', '0.000', '0.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(19, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(20, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(21, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(22, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(23, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(24, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(25, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(26, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(27, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(28, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(29, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(30, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(31, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(32, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(33, 5, '7899', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2520.000', '1008.000', '3528.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(34, 5, '8989', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '706.500', '162.000', '868.500', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(35, 5, '8989', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '706.500', '162.000', '868.500', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(36, 5, '8989', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '706.500', '162.000', '868.500', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(39, 5, '5656', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '0.000', '0.000', '0.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(40, 5, '5656', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '0.000', '0.000', '0.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(41, 5, '5656', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '0.000', '0.000', '0.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(42, 5, '5656', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2744.000', '493.920', '3237.920', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(43, 5, '5656', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '2744.000', '493.920', '3237.920', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(44, 5, '5454', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '180.000', '32.400', '212.400', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(45, 5, '5454', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '180.000', '32.400', '212.400', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(46, 6, '789', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '0000-00-00', '4073.340', '733.201', '4806.541', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(47, 6, '09', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '0000-00-00', '16000.000', '2880.000', '18880.000', '0000-00-00', 'xxz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(48, 5, '4545', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '0000-00-00', '16000.000', '2880.000', '18880.000', '0000-00-00', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '0000-00-00 00:00:00'),
(49, 6, '43343', '8583019463', 'ajaysweet01@gmail.com', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '2018-08-14', '112000.000', '20160.000', '132160.000', '2018-08-14', 'zz', 'zxzx', 'cxc', 'sdsds', NULL, '2018-08-14 08:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_detail_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `rate` decimal(12,3) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `quantity` decimal(12,3) DEFAULT NULL,
  `basic_amount` decimal(12,3) NOT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `cgst` decimal(12,3) DEFAULT NULL,
  `cgst_amount` decimal(12,3) NOT NULL,
  `sgst` decimal(12,3) DEFAULT NULL,
  `sgst_amount` decimal(12,3) NOT NULL,
  `igst` decimal(12,3) DEFAULT NULL,
  `igst_amount` decimal(12,3) NOT NULL,
  `taxable_amount` decimal(12,3) NOT NULL,
  `total` decimal(12,3) DEFAULT NULL,
  `pay_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_detail_id`, `bill_id`, `product_id`, `product_code`, `rate`, `weight`, `quantity`, `basic_amount`, `gst_type`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `taxable_amount`, `total`, `pay_status`) VALUES
(10, 6, 11, '', '2100.000', 'PCS.', '10.000', '21000.000', 'CGST SGST', '9.000', '1890.000', '9.000', '1890.000', '0.000', '0.000', '3780.000', '24780.000', 0),
(11, 6, 12, '', '470.000', 'BAG', '15.000', '7050.000', 'CGST SGST', '9.000', '634.500', '9.000', '634.500', '0.000', '0.000', '1269.000', '8319.000', 0),
(12, 7, 11, '', '2110.000', 'PCS.', '1.000', '2110.000', 'CGST SGST', '9.000', '189.900', '9.000', '189.900', '0.000', '0.000', '379.800', '2489.800', 0),
(13, 8, 11, '', '2100.000', 'PCS.', '3.000', '6300.000', 'CGST SGST', '9.000', '567.000', '9.000', '567.000', '0.000', '0.000', '1134.000', '7434.000', 0),
(14, 8, 13, '', '1400.000', 'PCS.', '1.000', '1400.000', 'CGST SGST', '9.000', '126.000', '9.000', '126.000', '0.000', '0.000', '252.000', '1652.000', 0),
(15, 8, 11, '', '2140.000', 'PCS.', '1.000', '2140.000', 'CGST SGST', '9.000', '192.600', '9.000', '192.600', '0.000', '0.000', '385.200', '2525.200', 0),
(20, 9, 13, '', '700.000', '', '1.000', '700.000', '', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', '0.000', '700.000', 0),
(24, 18, 13, '7001', '45.000', NULL, '0.000', '0.000', 'CGST SGST', '9.000', '0.000', '9.000', '0.000', '0.000', '0.000', '0.000', '0.000', 0),
(25, 19, 13, '7001', '45.000', NULL, '56.000', '2520.000', 'CGST SGST', '9.000', '504.000', '9.000', '504.000', '0.000', '0.000', '1008.000', '3528.000', 0),
(26, 20, 13, '7001', '45.000', NULL, '56.000', '2520.000', 'CGST SGST', '9.000', '504.000', '9.000', '504.000', '0.000', '0.000', '1008.000', '3528.000', 0),
(27, 21, 13, '7001', '45.000', NULL, '56.000', '2520.000', 'CGST SGST', '9.000', '504.000', '9.000', '504.000', '0.000', '0.000', '1008.000', '3528.000', 0),
(28, 22, 13, '7001', '45.000', NULL, '56.000', '2520.000', 'CGST SGST', '9.000', '504.000', '9.000', '504.000', '0.000', '0.000', '1008.000', '3528.000', 0),
(29, 35, 13, '7001', '78.500', NULL, '9.000', '706.500', 'CGST SGST', '9.000', '81.000', '9.000', '81.000', '0.000', '0.000', '162.000', '868.500', 0),
(30, 36, 13, '7001', '78.500', NULL, '9.000', '706.500', 'CGST SGST', '9.000', '81.000', '9.000', '81.000', '0.000', '0.000', '162.000', '868.500', 0),
(31, 37, 13, '7001', '78.500', NULL, '9.000', '706.500', 'CGST SGST', '9.000', '81.000', '9.000', '81.000', '0.000', '0.000', '162.000', '868.500', 0),
(33, 39, 13, '7001', '343.000', NULL, '0.000', '0.000', 'CGST SGST', '9.000', '0.000', '9.000', '0.000', '0.000', '0.000', '0.000', '0.000', 0),
(34, 40, 13, '7001', '343.000', NULL, '0.000', '0.000', 'CGST SGST', '9.000', '0.000', '9.000', '0.000', '0.000', '0.000', '0.000', '0.000', 0),
(35, 41, 13, '7001', '343.000', NULL, '0.000', '0.000', 'CGST SGST', '9.000', '0.000', '9.000', '0.000', '0.000', '0.000', '0.000', '0.000', 0),
(36, 42, 13, '7001', '343.000', NULL, '8.000', '2744.000', 'CGST SGST', '9.000', '246.960', '9.000', '246.960', '0.000', '0.000', '493.920', '3237.920', 0),
(37, 43, 13, '7001', '343.000', NULL, '8.000', '2744.000', 'CGST SGST', '9.000', '246.960', '9.000', '246.960', '0.000', '0.000', '493.920', '3237.920', 0),
(38, 44, 13, '7001', '45.000', NULL, '4.000', '180.000', 'CGST SGST', '9.000', '16.200', '9.000', '16.200', '0.000', '0.000', '32.400', '212.400', 0),
(39, 45, 13, '7001', '45.000', NULL, '4.000', '180.000', 'CGST SGST', '9.000', '16.200', '9.000', '16.200', '0.000', '0.000', '32.400', '212.400', 1),
(40, 46, 13, '7001', '678.890', NULL, '6.000', '4073.340', 'CGST SGST', '9.000', '366.601', '9.000', '366.601', '0.000', '0.000', '733.201', '4806.541', 1),
(41, 47, 13, '7001', '2000.000', NULL, '8.000', '16000.000', 'CGST SGST', '9.000', '1440.000', '9.000', '1440.000', '0.000', '0.000', '2880.000', '18880.000', 0),
(42, 48, 13, '7001', '2000.000', NULL, '8.000', '16000.000', 'CGST SGST', '9.000', '1440.000', '9.000', '1440.000', '0.000', '0.000', '2880.000', '18880.000', 0),
(43, 49, 13, '7001', '2000.000', NULL, '56.000', '112000.000', 'CGST SGST', '9.000', '10080.000', '9.000', '10080.000', '0.000', '0.000', '20160.000', '132160.000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `street_address` text NOT NULL,
  `state` int(11) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_job` text CHARACTER SET utf8 NOT NULL,
  `user_qrcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ci_users';

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`user_id`, `user_username`, `user_password`, `user_name`, `gender`, `user_email`, `user_address`, `user_job`, `user_qrcode`) VALUES
(1, 'webeasystep', 'ce1c343dcwrwr2sfsfsf324', 'ahmed fakhr', 'male', 'info@webeasystep.com', 'Cairo,Egypt', 'php developer', '1.png'),
(2, 'sara', 'ce1c343dcwrwr2sfsfsf324', 'sara ahmed', 'female', 'sara@webeasystep.com', 'Cairo,Egypt', 'codeigniter developer', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `name`, `email`, `contact`, `address`, `city`, `state`, `pincode`, `gst_no`, `date`, `status`, `created`) VALUES
(5, 'Rahul Singh', 'ajaysweet01@gmail.com', '8583019463', 'Kolkata', 'kolkata', 'kolkata', 700011, '123456789123456', '2018-07-25', 1, '2018-07-27 11:32:48'),
(6, 'madhu fertilizer ', 'ajaysweet01@gmail.com', '8583019463', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '2018-07-27', 1, '2018-08-01 08:52:05'),
(7, 'anil', 'ajaysweet01@gmail.com', '8583019463', 'Kolkata', 'kolkata', 'kolkata', 700011, '', '2018-07-27', 1, '2018-07-27 11:37:23'),
(8, 'Ramesh jha', 'ritronixtechnology17@gmail.com', '8510895089', '122, sector \"C\" near R.K. Hospital Bhopal', 'Bhopal', 'M.P.', 462046, '', '2018-07-28', 1, '2018-07-28 04:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `client_order`
--

CREATE TABLE `client_order` (
  `client_order_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_order`
--

INSERT INTO `client_order` (`client_order_id`, `client_id`, `date`, `status`, `created`) VALUES
(1, 7, '0000-00-00', 0, '0000-00-00 00:00:00'),
(2, 8, '0000-00-00', 0, '0000-00-00 00:00:00'),
(3, 7, '2018-08-14', 1, '2018-08-14 08:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `client_order_details`
--

CREATE TABLE `client_order_details` (
  `client_order_detail_id` int(11) NOT NULL,
  `client_order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(50) NOT NULL,
  `quantity` decimal(12,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_order_details`
--

INSERT INTO `client_order_details` (`client_order_detail_id`, `client_order_id`, `product_id`, `weight`, `quantity`) VALUES
(1, 1, 13, 'CFT', '6.000'),
(2, 2, 13, 'CFT', '8.000'),
(3, 3, 13, 'CFT', '8.000');

-- --------------------------------------------------------

--
-- Table structure for table `client_product_rate`
--

CREATE TABLE `client_product_rate` (
  `client_product_rate_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_product_rate`
--

INSERT INTO `client_product_rate` (`client_product_rate_id`, `client_id`, `date`, `status`, `created`) VALUES
(1, 7, '2018-07-22', 1, '2018-07-22 07:54:23'),
(12, 6, '0000-00-00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_product_rate_description`
--

CREATE TABLE `client_product_rate_description` (
  `client_product_rate_description_id` int(11) NOT NULL,
  `client_product_rate_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(50) NOT NULL,
  `rate` decimal(12,3) DEFAULT NULL,
  `gst_type` varchar(20) NOT NULL,
  `cgst` decimal(12,3) NOT NULL,
  `sgst` decimal(12,3) NOT NULL,
  `igst` decimal(12,3) NOT NULL,
  `added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_product_rate_description`
--

INSERT INTO `client_product_rate_description` (`client_product_rate_description_id`, `client_product_rate_id`, `product_id`, `weight`, `rate`, `gst_type`, `cgst`, `sgst`, `igst`, `added`) VALUES
(1, 1, 11, 'TON', '2000.000', 'CGST SGST', '9.000', '10.000', '0.000', '2018-07-22 07:54:23'),
(12, 12, 11, 'TON', '0.000', 'CGST SGST', '0.000', '9.000', '0.000', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `rate` decimal(12,3) DEFAULT NULL,
  `weight` varchar(50) NOT NULL,
  `gst_type` varchar(20) NOT NULL,
  `cgst` decimal(12,3) NOT NULL,
  `sgst` decimal(12,3) NOT NULL,
  `igst` decimal(12,3) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `product_code`, `rate`, `weight`, `gst_type`, `cgst`, `sgst`, `igst`, `status`, `created`) VALUES
(11, 'ALIKA', '', '2100.000', 'TON', 'CGST', '0.000', '0.000', '9.000', 0, '2018-07-22 08:48:39'),
(13, 'patela', '7001', '1000.000', 'BAG', 'CGST SGST', '9.000', '9.000', '0.000', 1, '2018-07-27 16:51:20'),
(9091, 'Himanshu lal', '9090', '45.000', 'TON', 'CGST', '45.000', '56.000', '67.000', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `gst_no` varchar(20) DEFAULT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `sub_total` decimal(12,3) DEFAULT NULL,
  `total_taxable_amount` decimal(12,3) DEFAULT NULL,
  `total` decimal(12,3) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `supplier_id`, `contact`, `email`, `address`, `state`, `city`, `pincode`, `gst_no`, `invoice_no`, `purchase_date`, `sub_total`, `total_taxable_amount`, `total`, `status`, `created`) VALUES
(5, 6, '986653635', '', 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', '2018-07-27', '43600.000', '7848.000', '51448.000', 'pending', '2018-07-27 16:57:00'),
(6, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '522.000', '46.980', '568.980', NULL, '0000-00-00 00:00:00'),
(10, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(11, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(12, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(13, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(14, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(15, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '7897', NULL, '270.000', '48.600', '318.600', '1', '0000-00-00 00:00:00'),
(16, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '7898', NULL, '456.000', '82.080', '538.080', '1', '0000-00-00 00:00:00'),
(17, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '7898', NULL, '456.000', '82.080', '538.080', '1', '0000-00-00 00:00:00'),
(18, 6, '986653635', NULL, 'mumbai', 'maharsts', 'mumbai', 0, '23AZNPP3888M1ZH', '7898', NULL, '456.000', '82.080', '538.080', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `purchase_product_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `rate` decimal(12,3) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `quantity` decimal(12,3) DEFAULT NULL,
  `basic_amount` decimal(12,3) NOT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `cgst` decimal(12,3) DEFAULT NULL,
  `cgst_amount` decimal(12,3) NOT NULL,
  `sgst` decimal(12,3) DEFAULT NULL,
  `sgst_amount` decimal(12,3) NOT NULL,
  `igst` decimal(12,3) DEFAULT NULL,
  `igst_amount` decimal(12,3) NOT NULL,
  `taxable_amount` decimal(12,3) NOT NULL,
  `total` decimal(12,3) DEFAULT NULL,
  `pay_status` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`purchase_product_id`, `purchase_id`, `product_id`, `product_code`, `rate`, `weight`, `quantity`, `basic_amount`, `gst_type`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `taxable_amount`, `total`, `pay_status`, `Date`) VALUES
(5, 5, 11, '', '2180.000', 'PCS.', '20.000', '43600.000', 'CGST SGST', '9.000', '3924.000', '9.000', '3924.000', '0.000', '0.000', '7848.000', '51448.000', 0, '0000-00-00'),
(9, 10, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(10, 11, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(11, 12, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(12, 13, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(13, 14, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(14, 15, 13, '7001', NULL, 'BAG', '6.000', '270.000', 'CGST SGST', '9.000', '24.300', '9.000', '24.300', '0.000', '0.000', '48.600', '318.600', 0, '0000-00-00'),
(15, 16, 13, '7001', '76.000', 'BAG', '6.000', '456.000', 'CGST SGST', '9.000', '41.040', '9.000', '41.040', '0.000', '0.000', '82.080', '538.080', 0, '0000-00-00'),
(16, 17, 13, '7001', '76.000', 'BAG', '6.000', '456.000', 'CGST SGST', '9.000', '41.040', '9.000', '41.040', '0.000', '0.000', '82.080', '538.080', 0, '0000-00-00'),
(17, 18, 13, '7001', '76.000', 'BAG', '6.000', '456.000', 'CGST SGST', '9.000', '41.040', '9.000', '41.040', '0.000', '0.000', '82.080', '538.080', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sales_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `discount` decimal(12,3) NOT NULL,
  `bill_amount` decimal(12,3) NOT NULL,
  `gst_type` varchar(20) NOT NULL,
  `igst_amount` decimal(12,3) NOT NULL,
  `single_cgstsgst` decimal(12,3) NOT NULL,
  `cgst_amount` decimal(12,3) NOT NULL,
  `sgst_amount` decimal(12,3) NOT NULL,
  `taxable_amount` decimal(12,3) NOT NULL,
  `payable_amount` decimal(12,3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `email`, `contact`, `address`, `city`, `state`, `pincode`, `gst_no`, `date`, `status`, `created`) VALUES
(6, 'pi', '', '986653635', 'mumbai', 'mumbai', 'maharsts', 0, '23AZNPP3888M1ZH', '2018-07-27', 1, '2018-07-27 11:23:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_detail_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_order`
--
ALTER TABLE `client_order`
  ADD PRIMARY KEY (`client_order_id`);

--
-- Indexes for table `client_order_details`
--
ALTER TABLE `client_order_details`
  ADD PRIMARY KEY (`client_order_detail_id`);

--
-- Indexes for table `client_product_rate`
--
ALTER TABLE `client_product_rate`
  ADD PRIMARY KEY (`client_product_rate_id`);

--
-- Indexes for table `client_product_rate_description`
--
ALTER TABLE `client_product_rate_description`
  ADD PRIMARY KEY (`client_product_rate_description_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`purchase_product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_order`
--
ALTER TABLE `client_order`
  MODIFY `client_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_order_details`
--
ALTER TABLE `client_order_details`
  MODIFY `client_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_product_rate`
--
ALTER TABLE `client_product_rate`
  MODIFY `client_product_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client_product_rate_description`
--
ALTER TABLE `client_product_rate_description`
  MODIFY `client_product_rate_description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9092;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `purchase_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
