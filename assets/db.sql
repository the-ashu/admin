-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 05:25 AM
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
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Patel And Sons Krishi Sewa  ', '9919345589', 'ashu@gmail.com', '', 'chunar', 'ward no. 5 near galli mandi ,NH 12 main road mandideep', 0, 'Thane', '400614', '23AZNPP3888M1ZH', 'admin', 1, '2017-07-27 01:06:01');

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
  `full_total` decimal(12,3) NOT NULL,
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

INSERT INTO `bill` (`bill_id`, `client_id`, `invoice_no`, `contact`, `email`, `address`, `state`, `city`, `pincode`, `gst_no`, `bill_date`, `sub_total`, `total_taxable_amount`, `total`, `full_total`, `invoice_date`, `tpt_co`, `gr_no`, `way_bill_ref`, `place_of_order`, `status`, `created`) VALUES
(189, 9, '61', '890809809809', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-24', '2856.000', '514.080', '3370.080', '23026.080', '2018-09-24', 'xxz', 'zxzx', 'xzxz', 'zxzx', NULL, '2018-09-24 20:21:39'),
(190, 9, '61', '890809809809', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-24', '12600.000', '7056.000', '19656.000', '23026.080', '2018-09-24', 'xxz', 'zxzx', 'xzxz', 'zxzx', NULL, '2018-09-24 20:21:39'),
(191, 9, '123', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-26', '680.000', '122.400', '802.400', '927.200', '2018-09-26', 'xxz', 'zzx', 'xzxz', 'zxzx', NULL, '2018-09-26 21:14:31'),
(192, 9, '123', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-26', '80.000', '44.800', '124.800', '927.200', '2018-09-26', 'xxz', 'zzx', 'xzxz', 'zxzx', NULL, '2018-09-26 21:14:32'),
(193, 9, '126', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-27', '120.000', '21.600', '141.600', '26349.600', '2018-09-27', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-09-27 06:00:55'),
(194, 9, '126', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-27', '16800.000', '9408.000', '26208.000', '26349.600', '2018-09-27', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-09-27 06:00:55'),
(195, NULL, '189', '7068439075', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-09-27', '680.000', '122.400', '802.400', '86314.400', '2018-09-27', 'xxz', 'zzx', 'op', 'zxzx', NULL, '2018-09-27 06:22:31'),
(196, NULL, '189', '7068439075', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-09-27', '12600.000', '7056.000', '19656.000', '86314.400', '2018-09-27', 'xxz', 'zzx', 'op', 'zxzx', NULL, '2018-09-27 06:22:31'),
(197, NULL, '189', '7068439075', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-09-27', '16800.000', '3024.000', '19824.000', '86314.400', '2018-09-27', 'xxz', 'zzx', 'op', 'zxzx', NULL, '2018-09-27 06:22:31'),
(198, NULL, '189', '7068439075', 'ashuspoj@gmail.com', ' xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-09-27', '16800.000', '3024.000', '19824.000', '86314.400', '2018-09-27', 'xxz', 'zzx', 'op', 'zxzx', NULL, '2018-09-27 06:24:07'),
(199, NULL, '189', '7068439075', 'ashuspoj@gmail.com', ' xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-09-27', '16800.000', '9408.000', '26208.000', '86314.400', '2018-09-27', 'xxz', 'zzx', 'op', 'zxzx', NULL, '2018-09-27 06:24:08'),
(200, 9, '126', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-27', '120.000', '21.600', '141.600', '26349.600', '2018-09-27', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-09-27 06:34:13'),
(201, 9, '126', '890809809809', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '93449038490482039', '2018-09-27', '16800.000', '9408.000', '26208.000', '26349.600', '2018-09-27', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-09-27 06:34:13'),
(203, NULL, '345', '8583019463', NULL, NULL, 'kolkata', 'kolkata', 700011, '123456789123456', '2018-09-30', '160.000', '89.600', '249.600', '249.600', '2018-09-30', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-09-30 12:37:09'),
(204, NULL, '60', '7068439075', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-10-07', '8000.000', '10560.000', '18560.000', '18560.000', '2018-10-07', 'xxz', 'op', 'op', 'sdsds', NULL, '2018-10-07 23:26:12'),
(205, NULL, '60', '7068439075', NULL, NULL, 'jsksjdkj', 'kjkjksdsk', 231304, '123456789123456', '2018-10-07', '8000.000', '10560.000', '18560.000', '18560.000', '2018-10-07', 'xxz', 'op', 'op', 'sdsds', NULL, '2018-10-07 23:26:50'),
(206, 7, '12', '8583019463', NULL, NULL, 'kolkata', 'kolkata', 700011, '343435455', '2018-10-07', '80.000', '105.600', '185.600', '185.600', '2018-10-07', 'xxz', 'zzx', 'op', 'sdsds', NULL, '2018-10-07 23:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_detail_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `invoice_no` int(255) NOT NULL,
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
  `full_total` decimal(12,3) NOT NULL,
  `paid_amount` decimal(12,3) NOT NULL,
  `pending_amount` decimal(12,3) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `manufacture` date NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_detail_id`, `bill_id`, `invoice_no`, `product_id`, `product_code`, `rate`, `weight`, `quantity`, `basic_amount`, `gst_type`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `taxable_amount`, `total`, `full_total`, `paid_amount`, `pending_amount`, `batch`, `manufacture`, `expire`) VALUES
(183, 189, 61, 9108, '9090', '84.000', 'jk', '34.000', '2856.000', 'CGST', '9.000', '257.040', '9.000', '257.040', '0.000', '0.000', '514.080', '3370.080', '23026.080', '15000.000', '8026.080', '', '0000-00-00', '0000-00-00'),
(184, 190, 61, 9109, '9090', '2100.000', 'uy', '6.000', '12600.000', 'IGST', '0.000', '0.000', '56.000', '7056.000', '0.000', '0.000', '7056.000', '19656.000', '23026.080', '15000.000', '8026.080', '', '0000-00-00', '0000-00-00'),
(185, 191, 123, 9108, '9090', '20.000', 'jk', '34.000', '680.000', 'CGST', '9.000', '61.200', '9.000', '61.200', '0.000', '0.000', '122.400', '802.400', '927.200', '0.000', '0.000', '', '0000-00-00', '0000-00-00'),
(186, 192, 123, 9109, '9090', '20.000', 'uy', '4.000', '80.000', 'IGST', '0.000', '0.000', '56.000', '44.800', '0.000', '0.000', '44.800', '124.800', '927.200', '0.000', '0.000', '', '0000-00-00', '0000-00-00'),
(187, 193, 126, 9108, '9090', '20.000', 'jk', '6.000', '120.000', 'CGST', '9.000', '10.800', '9.000', '10.800', '0.000', '0.000', '21.600', '141.600', '26349.600', '26000.000', '349.600', '', '0000-00-00', '0000-00-00'),
(188, 194, 126, 9109, '9090', '2100.000', 'uy', '8.000', '16800.000', 'IGST', '0.000', '0.000', '56.000', '9408.000', '0.000', '0.000', '9408.000', '26208.000', '26349.600', '26000.000', '349.600', '', '0000-00-00', '0000-00-00'),
(189, 195, 189, 9108, '9090', '20.000', 'jk', '34.000', '680.000', 'CGST', '9.000', '61.200', '9.000', '61.200', '0.000', '0.000', '122.400', '802.400', '86314.400', '4345.000', '81969.400', '', '0000-00-00', '0000-00-00'),
(190, 196, 189, 9109, '9090', '2100.000', 'uy', '6.000', '12600.000', 'IGST', '0.000', '0.000', '56.000', '7056.000', '0.000', '0.000', '7056.000', '19656.000', '86314.400', '4345.000', '81969.400', '', '0000-00-00', '0000-00-00'),
(191, 197, 189, 9108, '9090', '2100.000', 'jk', '8.000', '16800.000', 'CGST', '9.000', '1512.000', '9.000', '1512.000', '0.000', '0.000', '3024.000', '19824.000', '86314.400', '4345.000', '81969.400', '', '0000-00-00', '0000-00-00'),
(192, 198, 189, 9108, '9090', '2100.000', NULL, '8.000', '16800.000', 'CGST', '9.000', '1512.000', '9.000', '1512.000', '0.000', '0.000', '3024.000', '19824.000', '86314.400', '4345.000', '81969.400', '', '0000-00-00', '0000-00-00'),
(193, 199, 189, 9109, '9090', '2100.000', NULL, '8.000', '16800.000', 'IGST', '0.000', '0.000', '56.000', '9408.000', '0.000', '0.000', '9408.000', '26208.000', '86314.400', '4345.000', '81969.400', '', '0000-00-00', '0000-00-00'),
(194, 200, 126, 9108, '9090', '20.000', 'jk', '6.000', '120.000', 'CGST', '9.000', '10.800', '9.000', '10.800', '0.000', '0.000', '21.600', '141.600', '26349.600', '26000.000', '349.600', '', '0000-00-00', '0000-00-00'),
(195, 201, 126, 9109, '9090', '2100.000', 'uy', '8.000', '16800.000', 'IGST', '0.000', '0.000', '56.000', '9408.000', '0.000', '0.000', '9408.000', '26208.000', '26349.600', '26000.000', '349.600', '', '0000-00-00', '0000-00-00'),
(197, 203, 345, 9109, '9090', '20.000', 'uy', '8.000', '160.000', 'IGST', '0.000', '0.000', '56.000', '89.600', '0.000', '0.000', '89.600', '249.600', '249.600', '0.000', '249.600', '', '0000-00-00', '0000-00-00'),
(198, 205, 60, 9111, '12345', '1000.000', 'jgj', '8.000', '8000.000', 'IGST', '9.000', '720.000', '56.000', '4480.000', '67.000', '5360.000', '10560.000', '18560.000', '18560.000', '0.000', '0.000', '456', '2018-09-01', '2018-06-05'),
(199, 206, 12, 9111, '12345', '20.000', 'jgj', '4.000', '80.000', 'IGST', '9.000', '7.200', '56.000', '44.800', '67.000', '53.600', '105.600', '185.600', '185.600', '78.900', '106.700', '456', '2018-09-01', '2018-06-05');

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
(7, 'anil', 'ajaysweet01@gmail.com', '8583019463', 'Kolkata', 'kolkata', 'kolkata', 700011, '343435455', '2018-07-27', 0, '2018-09-24 18:23:56'),
(9, 'yuyu', 'ashuspoj@gmail.com', '890809809809', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '93449038490482039', '2018-09-19', 0, '2018-09-19 12:12:01');

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
(3, 7, '2018-08-14', 0, '2018-08-14 08:31:26'),
(4, 6, '2018-09-19', 0, '2018-09-19 14:09:35'),
(5, 6, '2018-09-19', 1, '2018-09-19 14:10:11'),
(6, 6, '2018-09-19', 1, '2018-09-19 14:10:29'),
(7, 6, '2018-09-19', 1, '2018-09-19 14:10:59'),
(8, 7, '2018-09-19', 1, '2018-09-19 14:30:37');

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
(3, 3, 13, 'CFT', '8.000'),
(4, 4, 9109, 'TON', '8.000'),
(5, 5, 9109, 'CFT', '8.000'),
(6, 6, 9108, 'CFT', '8.000'),
(7, 7, 9109, 'CFT', '8.000'),
(8, 8, 9109, 'TON', '8.000');

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
(3, 6, '2018-08-22', 1, '2018-08-22 06:52:13'),
(4, 6, '2018-08-22', 1, '2018-08-22 06:54:50'),
(5, 6, '2018-08-22', 1, '2018-08-22 06:55:46'),
(6, 6, '2018-08-22', 1, '2018-08-22 06:56:05'),
(7, 7, '2018-09-19', 1, '2018-09-19 15:46:04');

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
(3, 3, 9108, 'TON', '2100.000', 'CGST', '0.000', '0.000', '9.000', '2018-09-19 14:09:13'),
(4, 4, 11, 'TON', '2100.000', 'CGST', '0.000', '0.000', '9.000', '2018-08-22 06:54:50'),
(5, 5, 11, 'TON', '2100.000', 'CGST', '0.000', '0.000', '9.000', '2018-08-22 06:55:46'),
(6, 6, 11, 'TON', '2100.000', 'CGST', '0.000', '0.000', '9.000', '2018-08-22 06:56:05'),
(7, 7, 9108, 'jk', '45.000', 'CGST', '9.000', '9.000', '0.000', '2018-09-19 15:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `full_bills`
--

CREATE TABLE `full_bills` (
  `id` int(255) NOT NULL,
  `bill_id` int(255) NOT NULL,
  `bill_detail_id` int(255) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `total` decimal(12,3) NOT NULL,
  `paid_amount` decimal(12,3) NOT NULL,
  `pending_amount` decimal(12,3) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `tpt_co` varchar(255) NOT NULL,
  `gr_no` varchar(255) NOT NULL,
  `way_bill_ref` varchar(255) NOT NULL,
  `place_of_order` varchar(255) NOT NULL,
  `sub_total` decimal(12,3) NOT NULL,
  `taxable_amount` double(12,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_bills`
--

INSERT INTO `full_bills` (`id`, `bill_id`, `bill_detail_id`, `invoice_no`, `name`, `email`, `date`, `contact`, `address`, `city`, `state`, `pincode`, `total`, `paid_amount`, `pending_amount`, `gst_no`, `tpt_co`, `gr_no`, `way_bill_ref`, `place_of_order`, `sub_total`, `taxable_amount`) VALUES
(32, 190, 184, 61, 'yuyu', 'ashuspoj@gmail.com', '2018-09-24', '890809809809', ' xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '23026.080', '15000.000', '8026.080', '93449038490482039', 'xxz', 'zxzx', 'xzxz', 'zxzx', '15456.000', 7570.080),
(33, 197, 191, 189, 'Ashutosh Singh', 'ashuspoj@gmail.com', '2018-09-27', '7068439075', '        xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '86314.400', '4345.000', '81969.400', '123', 'xxz', 'zzx', 'op', 'zxzx', '63680.000', 12432.000),
(34, 201, 195, 126, 'yuyu', 'ashuspoj@gmail.com', '2018-09-27', '890809809809', ' xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '26349.600', '26000.000', '349.600', '93449038490482039', 'xxz', 'zzx', 'op', 'sdsds', '33840.000', 18859.200),
(35, 202, 196, 60, 'yuyu', 'ashuspoj@gmail.com', '2018-09-30', '890809809809', '  xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '0.000', '0.000', '0.000', '93449038490482039', 'xxz', 'zzx', 'op', 'sdsds', '0.000', 0.000),
(36, 203, 197, 345, 'Ashutosh Sing', 'ajaysweet01@gmail.com', '2018-09-30', '8583019463', ' Kolkata', 'kolkata', 'kolkata', 700011, '249.600', '0.000', '249.600', '123456789123456', 'xxz', 'zzx', 'op', 'sdsds', '160.000', 89.600),
(37, 205, 198, 60, 'yuyu', 'ashuspoj@gmail.com', '2018-10-07', '890809809809', '  xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '0.000', '0.000', '0.000', '93449038490482039', 'xxz', 'zzx', 'op', 'sdsds', '0.000', 0.000),
(38, 206, 199, 12, 'anil', 'ajaysweet01@gmail.com', '2018-10-07', '8583019463', ' Kolkata', 'kolkata', 'kolkata', 700011, '185.600', '78.900', '106.700', '343435455', 'xxz', 'zzx', 'op', 'sdsds', '80.000', 105.600);

-- --------------------------------------------------------

--
-- Table structure for table `full_purchase`
--

CREATE TABLE `full_purchase` (
  `id` int(255) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `gst_no` int(255) NOT NULL,
  `basic_amount` decimal(12,3) NOT NULL,
  `total_taxable_amount` decimal(12,3) NOT NULL,
  `total` decimal(12,3) NOT NULL,
  `paid_amount` decimal(12,3) NOT NULL,
  `pending_amount` decimal(12,3) NOT NULL,
  `purchase_id` int(255) NOT NULL,
  `purchase_product_id` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_purchase`
--

INSERT INTO `full_purchase` (`id`, `invoice_no`, `name`, `contact`, `email`, `address`, `city`, `state`, `pincode`, `gst_no`, `basic_amount`, `total_taxable_amount`, `total`, `paid_amount`, `pending_amount`, `purchase_id`, `purchase_product_id`, `date`) VALUES
(8, 132, 'pi2', '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 2147483647, 24, '25788.000', '4641.840', '30429.840', '15025.000', '15404.840', 81, 105, '2018-09-17');

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
  `created` datetime DEFAULT NULL,
  `batch` varchar(255) NOT NULL,
  `manufacture` date NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `product_code`, `rate`, `weight`, `gst_type`, `cgst`, `sgst`, `igst`, `status`, `created`, `batch`, `manufacture`, `expire`) VALUES
(9108, 'four', '9090', '45.000', 'jk', 'CGST', '9.000', '9.000', '0.000', 0, '2018-09-06 14:27:03', '', '0000-00-00', '0000-00-00'),
(9109, 'six', '9090', '2000.000', 'uy', 'IGST', '0.000', '56.000', '0.000', 0, '2018-09-09 06:57:04', '', '0000-00-00', '0000-00-00'),
(9110, 'gyg', '12345', '456.000', 'rty', 'CGST', '9.000', '56.000', '0.000', 0, '2018-10-07 23:08:57', '456', '2018-09-01', '0000-00-00'),
(9111, 'badman420', '12345', '45.000', 'jgj', 'IGST', '9.000', '56.000', '67.000', 0, '2018-10-07 23:09:52', '456', '2018-09-01', '2018-06-05');

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
  `full_total` decimal(12,3) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `supplier_id`, `contact`, `email`, `address`, `state`, `city`, `pincode`, `gst_no`, `invoice_no`, `purchase_date`, `sub_total`, `total_taxable_amount`, `total`, `full_total`, `status`, `created`) VALUES
(80, 6, '986653635', NULL, 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23AZNPP3888M1ZH', '132', NULL, '12600.000', '2268.000', '14868.000', '15654.240', '1', '2018-09-17 11:15:41'),
(81, 6, '986653635', NULL, 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23AZNPP3888M1ZH', '132', NULL, '588.000', '105.840', '693.840', '15654.240', '1', '2018-09-17 11:15:41'),
(82, 6, '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23', '132', NULL, '12600.000', '2268.000', '14868.000', '0.000', NULL, '2018-09-17 11:23:27'),
(83, 6, '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23', '132', NULL, '12600.000', '2268.000', '14868.000', '0.000', NULL, '2018-09-17 11:27:01'),
(84, 6, '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23', '132', NULL, '16800.000', '3024.000', '19824.000', '0.000', NULL, '2018-09-17 11:27:01'),
(85, 6, '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23', '132', NULL, '672.000', '120.960', '792.960', '0.000', NULL, '2018-09-17 11:27:01'),
(86, 6, '986653635', 'ashuspoj@gmail.com', 'xnjkcnjkcnkjcn', 'jsksjdkj', 'kjkjksdsk', 231304, '23', '132', NULL, '16800.000', '3024.000', '19824.000', '0.000', NULL, '2018-09-17 11:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `purchase_product_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `invoice_no` int(255) NOT NULL,
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
  `full_total` double(12,3) NOT NULL,
  `paid_amount` decimal(12,3) NOT NULL,
  `pending_amount` decimal(12,3) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`purchase_product_id`, `purchase_id`, `product_id`, `product_code`, `invoice_no`, `rate`, `weight`, `quantity`, `basic_amount`, `gst_type`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `taxable_amount`, `total`, `full_total`, `paid_amount`, `pending_amount`, `Date`) VALUES
(104, 80, 9108, '9090', 132, '2100.000', 'jk', '6.000', '12600.000', 'CGST', '9.000', '1134.000', '9.000', '1134.000', '0.000', '0.000', '2268.000', '14868.000', 15654.240, '15025.000', '15404.840', '2018-09-17'),
(105, 81, 9108, NULL, 132, '84.000', NULL, '7.000', '588.000', NULL, '9.000', '0.000', '9.000', '0.000', '0.000', '0.000', '105.840', '693.840', 15654.240, '15025.000', '15404.840', '2018-09-17'),
(106, 166, 9108, '9090', 132, '2100.000', NULL, '6.000', '12600.000', 'CGST', '9.000', '1134.000', '9.000', '1134.000', '0.000', '0.000', '2268.000', '14868.000', 0.000, '15025.000', '15404.840', '0000-00-00');

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
(6, 'pi2', 'ashuspoj@gmail.com', '986653635', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '23AZNPP3888M1ZH', '2018-07-27', 1, '2018-08-18 10:48:02'),
(7, 'badman420', 'ashuspoj@gmail.com', '890809809809', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '93449038490482039', '0000-00-00', 0, '2018-08-18 10:48:04'),
(8, 'gyg', 'ajaysweet01@gmail.com', '8583019463', 'Kolkata', 'kolkata', 'kolkata', 700011, '93449038490482039', '2018-08-18', 0, '2018-08-18 18:40:33'),
(9, 'yuyu', 'ashuspoj@gmail.com', '890809809809', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '93449038490482039', '2018-08-18', 1, '2018-08-18 18:41:54'),
(10, 'shivang ', 'ashuspoj@gmail.com', '890809809809', 'xnjkcnjkcnkjcn', 'kjkjksdsk', 'jsksjdkj', 231304, '93449038490482039', '2018-09-05', 0, '2018-09-05 17:58:21');

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
-- Indexes for table `full_bills`
--
ALTER TABLE `full_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_purchase`
--
ALTER TABLE `full_purchase`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

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
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_order`
--
ALTER TABLE `client_order`
  MODIFY `client_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_order_details`
--
ALTER TABLE `client_order_details`
  MODIFY `client_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_product_rate`
--
ALTER TABLE `client_product_rate`
  MODIFY `client_product_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_product_rate_description`
--
ALTER TABLE `client_product_rate_description`
  MODIFY `client_product_rate_description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `full_bills`
--
ALTER TABLE `full_bills`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `full_purchase`
--
ALTER TABLE `full_purchase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9112;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `purchase_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
  MODIFY `supplier_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
