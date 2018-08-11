DROP TABLE admin;

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","202cb962ac59075b964b07152d234b70","Patel And Sons Krishi Sewa Kendra","9589236338","patel.virendra.patel@gmail.com","5b5c40ddf26e5.png","ward no. 3 near galla mandi ,NH 12 main road mandideep","ward no. 3 near galla mandi ,NH 12 main road mandideep","0","Thane","400614","23AZNPP3888M1ZH","admin","1","2017-07-27 06:36:01");



DROP TABLE admin_login;

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

INSERT INTO admin_login VALUES("1","pawansut","110.225.19.255","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36","2018-05-02 06:42:28");
INSERT INTO admin_login VALUES("2","pawansut","223.191.5.107","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36","2018-05-05 08:15:00");
INSERT INTO admin_login VALUES("3","pawansut","106.203.183.22","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36","2018-05-15 15:30:38");
INSERT INTO admin_login VALUES("4","pawansut","106.203.133.67","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36","2018-05-16 11:40:50");
INSERT INTO admin_login VALUES("5","pawansut","47.15.88.106","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-19 12:15:22");
INSERT INTO admin_login VALUES("6","pawansut","139.5.230.185","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-19 12:16:37");
INSERT INTO admin_login VALUES("7","pawansut","106.206.84.92","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-26 14:52:54");
INSERT INTO admin_login VALUES("8","admin","95.76.0.146","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-27 13:36:30");
INSERT INTO admin_login VALUES("9","admin","106.203.142.37","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-31 10:09:11");
INSERT INTO admin_login VALUES("10","admin","14.102.121.101","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-31 10:10:09");
INSERT INTO admin_login VALUES("11","admin","14.102.121.101","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-31 10:34:13");
INSERT INTO admin_login VALUES("12","admin","157.41.162.210","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-05-31 13:58:17");
INSERT INTO admin_login VALUES("13","admin","120.89.75.29","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-01 08:22:06");
INSERT INTO admin_login VALUES("14","admin","122.170.225.129","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-01 11:42:19");
INSERT INTO admin_login VALUES("15","admin","189.153.31.87","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-03 20:54:14");
INSERT INTO admin_login VALUES("16","admin","37.38.78.62","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-04 09:32:59");
INSERT INTO admin_login VALUES("17","admin","106.203.181.207","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-04 18:22:57");
INSERT INTO admin_login VALUES("18","admin","139.5.229.159","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-08 06:46:52");
INSERT INTO admin_login VALUES("19","admin","139.5.229.159","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-08 06:59:29");
INSERT INTO admin_login VALUES("20","admin","162.158.154.6","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-09 21:02:20");
INSERT INTO admin_login VALUES("21","admin","141.101.69.164","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-09 21:02:41");
INSERT INTO admin_login VALUES("22","admin","108.162.212.100","Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0","2018-06-09 22:43:59");
INSERT INTO admin_login VALUES("23","admin","108.162.212.100","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-09 22:44:56");
INSERT INTO admin_login VALUES("24","admin","162.158.155.13","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-11 06:46:03");
INSERT INTO admin_login VALUES("25","admin","162.158.155.79","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-11 06:50:35");
INSERT INTO admin_login VALUES("26","admin","162.158.155.13","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-11 07:13:55");
INSERT INTO admin_login VALUES("27","admin","141.101.107.143","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-11 12:29:40");
INSERT INTO admin_login VALUES("28","admin","162.158.58.68","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-12 05:17:31");
INSERT INTO admin_login VALUES("29","admin","141.101.99.94","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36","2018-06-12 07:05:17");
INSERT INTO admin_login VALUES("30","admin","172.68.144.252","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-13 01:52:22");
INSERT INTO admin_login VALUES("31","admin","172.68.144.252","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-13 02:46:59");
INSERT INTO admin_login VALUES("32","admin","172.69.134.80","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-13 09:33:30");
INSERT INTO admin_login VALUES("33","admin","162.158.166.160","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-13 14:01:59");
INSERT INTO admin_login VALUES("34","admin","162.158.166.4","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-14 08:59:45");
INSERT INTO admin_login VALUES("35","admin","162.158.166.4","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-14 09:07:27");
INSERT INTO admin_login VALUES("36","admin","162.158.167.83","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-14 09:17:16");
INSERT INTO admin_login VALUES("37","admin","162.158.167.83","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-14 10:30:33");
INSERT INTO admin_login VALUES("38","admin","103.21.59.28","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-14 18:07:38");
INSERT INTO admin_login VALUES("39","admin","162.158.88.7","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134","2018-06-16 20:44:08");
INSERT INTO admin_login VALUES("40","admin","162.158.165.237","Mozilla/5.0 (Linux; Android 7.1.2; Mi A1 Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.158 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/167.0.0.28.94;]","2018-06-21 09:08:09");
INSERT INTO admin_login VALUES("41","admin","162.158.155.91","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-21 09:11:11");
INSERT INTO admin_login VALUES("42","admin","162.158.165.237","Mozilla/5.0 (Linux; Android 7.1.2; Mi A1 Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.158 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/167.0.0.28.94;]","2018-06-21 14:36:30");
INSERT INTO admin_login VALUES("43","admin","162.158.165.147","Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-21 15:57:13");
INSERT INTO admin_login VALUES("44","admin","141.101.69.38","Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-22 19:09:35");
INSERT INTO admin_login VALUES("45","Admin","162.158.165.249","Mozilla/5.0 (Linux; Android 8.1.0; Nexus 6P Build/OPM6.171019.030.B1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36","2018-06-23 07:20:08");
INSERT INTO admin_login VALUES("46","admin","162.158.134.9","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-23 16:18:15");
INSERT INTO admin_login VALUES("47","admin","162.158.167.227","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-24 05:06:19");
INSERT INTO admin_login VALUES("48","admin","162.158.202.207","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-24 06:09:37");
INSERT INTO admin_login VALUES("49","admin","162.158.166.58","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-24 12:49:53");
INSERT INTO admin_login VALUES("50","admin","108.162.246.160","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-06-24 18:49:32");
INSERT INTO admin_login VALUES("51","admin","197.234.242.147","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-24 19:02:48");
INSERT INTO admin_login VALUES("52","admin","108.162.221.13","Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-26 02:00:11");
INSERT INTO admin_login VALUES("53","admin","198.41.226.81","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-06-27 15:32:48");
INSERT INTO admin_login VALUES("54","admin","172.69.134.32","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-06-27 20:05:37");
INSERT INTO admin_login VALUES("55","admin","172.69.134.38","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-06-28 06:43:24");
INSERT INTO admin_login VALUES("56","admin","162.158.154.228","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-06-28 12:40:26");
INSERT INTO admin_login VALUES("57","admin","108.162.229.171","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-06-28 16:24:41");
INSERT INTO admin_login VALUES("58","admin","162.158.165.129","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-29 10:08:56");
INSERT INTO admin_login VALUES("59","admin","162.158.165.129","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36","2018-06-29 11:25:50");
INSERT INTO admin_login VALUES("60","Admin","141.101.88.75","Mozilla/5.0 (Linux; Android 5.1.1; SM-J120G Build/LMY47X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/170.0.0.39.87;]","2018-06-29 18:02:13");
INSERT INTO admin_login VALUES("61","admin","141.101.88.75","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.99","2018-06-29 18:25:54");
INSERT INTO admin_login VALUES("62","admin","141.101.98.159","Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0","2018-06-30 09:18:56");
INSERT INTO admin_login VALUES("63","admin","197.234.242.117","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.110","2018-06-30 14:50:21");
INSERT INTO admin_login VALUES("64","admin","141.101.98.219","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-01 18:11:58");
INSERT INTO admin_login VALUES("65","admin","141.101.99.64","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-02 08:47:46");
INSERT INTO admin_login VALUES("66","admin","162.158.166.190","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-03 07:04:56");
INSERT INTO admin_login VALUES("67","admin","141.101.102.171","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36","2018-07-03 13:59:45");
INSERT INTO admin_login VALUES("68","Admin","162.158.154.72","Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]","2018-07-04 05:08:03");
INSERT INTO admin_login VALUES("69","admin","172.68.144.132","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-04 12:12:53");
INSERT INTO admin_login VALUES("70","admin","162.158.165.117","Mozilla/5.0 (Linux; Android 6.0.1; SM-J710F Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.36","2018-07-04 12:26:56");
INSERT INTO admin_login VALUES("71","admin","162.158.50.153","Mozilla/5.0 (Linux; Android 7.0; Lenovo K33a42 Build/NRD90N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36","2018-07-04 12:33:57");
INSERT INTO admin_login VALUES("72","Admin","172.69.134.80","Mozilla/5.0 (Linux; Android 7.0; Lenovo K33a42 Build/NRD90N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36","2018-07-04 13:09:57");
INSERT INTO admin_login VALUES("73","Admin","162.158.154.114","Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]","2018-07-04 18:59:58");
INSERT INTO admin_login VALUES("74","Admin","162.158.154.114","Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/171.0.0.28.108;]","2018-07-04 18:59:59");
INSERT INTO admin_login VALUES("75","admin","162.158.154.198","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-05 14:57:50");
INSERT INTO admin_login VALUES("76","admin","172.68.6.45","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-05 16:53:03");
INSERT INTO admin_login VALUES("77","admin","162.158.42.27","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-05 23:06:58");
INSERT INTO admin_login VALUES("78","admin","172.69.134.50","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-07 10:38:00");
INSERT INTO admin_login VALUES("79","admin","172.69.42.105","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-07 23:06:52");
INSERT INTO admin_login VALUES("80","admin","108.162.215.123","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-09 05:05:44");
INSERT INTO admin_login VALUES("81","admin","162.158.165.9","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-11 09:40:55");
INSERT INTO admin_login VALUES("82","admin","162.158.167.191","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0","2018-07-11 15:30:18");
INSERT INTO admin_login VALUES("83","admin","197.234.242.75","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-14 15:08:55");
INSERT INTO admin_login VALUES("84","admin","162.158.165.99","Mozilla/5.0 (Linux; Android 7.0; SM-C701F Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36","2018-07-15 01:58:39");
INSERT INTO admin_login VALUES("85","admin","108.162.229.243","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-15 02:06:46");
INSERT INTO admin_login VALUES("86","admin","162.158.22.15","Mozilla/5.0 (Linux; Android 5.0; Micromax Q345 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36","2018-07-16 04:26:58");
INSERT INTO admin_login VALUES("87","admin","108.162.229.27","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-16 05:35:57");
INSERT INTO admin_login VALUES("88","admin","162.158.158.86","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-17 05:53:23");
INSERT INTO admin_login VALUES("89","admin","141.101.99.238","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-17 05:57:49");
INSERT INTO admin_login VALUES("90","admin","162.158.167.35","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-17 13:55:02");
INSERT INTO admin_login VALUES("91","admin","162.158.154.192","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-17 19:43:04");
INSERT INTO admin_login VALUES("92","admin","162.158.50.21","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-18 05:43:05");
INSERT INTO admin_login VALUES("93","admin","162.158.167.191","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-18 16:35:36");
INSERT INTO admin_login VALUES("94","admin","162.158.167.191","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134","2018-07-19 13:42:03");
INSERT INTO admin_login VALUES("95","admin","172.68.144.186","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-20 17:47:20");
INSERT INTO admin_login VALUES("96","admin","141.101.88.105","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-22 07:44:40");
INSERT INTO admin_login VALUES("97","admin","162.158.167.53","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-22 08:27:29");
INSERT INTO admin_login VALUES("98","admin","172.68.146.169","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-22 08:41:01");
INSERT INTO admin_login VALUES("99","admin","172.68.144.186","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134","2018-07-22 13:16:39");
INSERT INTO admin_login VALUES("100","admin","172.68.144.144","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134","2018-07-22 13:23:12");
INSERT INTO admin_login VALUES("101","admin","162.158.166.76","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-23 07:32:27");
INSERT INTO admin_login VALUES("102","admin","162.158.158.50","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-23 08:56:10");
INSERT INTO admin_login VALUES("103","admin","162.158.167.137","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-23 09:27:37");
INSERT INTO admin_login VALUES("104","admin","162.158.155.79","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.54","2018-07-23 11:31:27");
INSERT INTO admin_login VALUES("105","admin","141.101.99.238","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 OPR/54.0.2952.60","2018-07-25 11:38:30");
INSERT INTO admin_login VALUES("106","admin","162.158.155.139","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-25 13:20:31");
INSERT INTO admin_login VALUES("107","admin","198.41.226.123","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-26 15:00:40");
INSERT INTO admin_login VALUES("108","admin","197.234.242.117","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-27 14:11:59");
INSERT INTO admin_login VALUES("109","admin","162.158.167.35","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-27 16:49:15");
INSERT INTO admin_login VALUES("110","admin","141.101.88.153","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-28 09:52:14");
INSERT INTO admin_login VALUES("111","admin","172.69.134.158","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-29 06:21:25");
INSERT INTO admin_login VALUES("112","admin","172.69.69.129","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15","2018-07-29 16:42:38");
INSERT INTO admin_login VALUES("113","admin","162.158.167.191","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.75 Safari/537.36","2018-07-30 07:14:39");
INSERT INTO admin_login VALUES("114","admin","141.101.88.81","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-30 07:20:48");
INSERT INTO admin_login VALUES("115","admin","172.69.226.136","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-30 14:12:16");
INSERT INTO admin_login VALUES("116","admin","162.158.166.76","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-07-31 05:51:02");
INSERT INTO admin_login VALUES("117","admin","172.68.144.144","Mozilla/5.0 (Linux; U; Android 7.1.2; en-in; Redmi 4 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.7.3","2018-08-01 06:00:54");
INSERT INTO admin_login VALUES("118","admin","141.101.88.153","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-08-01 14:09:21");
INSERT INTO admin_login VALUES("119","admin","162.158.166.238","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-08-01 15:32:21");
INSERT INTO admin_login VALUES("120","admin","141.101.88.153","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36","2018-08-02 09:05:25");
INSERT INTO admin_login VALUES("121","admin","162.158.165.243","Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1","2018-08-02 11:16:47");
INSERT INTO admin_login VALUES("122","admin","162.158.167.35","Mozilla/5.0 (Linux; Android 6.0; Lenovo A7000-a Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36","2018-08-02 11:17:22");
INSERT INTO admin_login VALUES("123","admin","162.158.166.76","Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1","2018-08-02 11:19:19");
INSERT INTO admin_login VALUES("124","admin","162.158.167.137","Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1","2018-08-02 11:25:31");
INSERT INTO admin_login VALUES("125","admin","162.158.167.35","Mozilla/5.0 (Linux; Android 5.1.1; SM-J200G Build/LMY47X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36","2018-08-02 11:33:38");
INSERT INTO admin_login VALUES("126","admin","162.158.165.9","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.84 Safari/537.36","2018-08-02 11:36:36");



DROP TABLE bill;

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO bill VALUES("6","5","PS-006","8583019463","ajaysweet01@gmail.com","Kolkata","kolkata","kolkata","700011","123456789123456","2018-07-25","28050.000","5049.000","33099.000","2018-07-25","","","","","pending","2018-07-25 13:22:15");
INSERT INTO bill VALUES("7","5","PS-007","8583019463","ajaysweet01@gmail.com","Kolkata","kolkata","kolkata","700011","123456789123456","2018-07-27","2110.000","379.800","2489.800","2018-07-27","","","","","pending","2018-07-27 16:59:03");
INSERT INTO bill VALUES("8","6","PS-008","8583019463","ajaysweet01@gmail.com","Kolkata","kolkata","kolkata","700011","","2018-07-27","9840.000","1771.200","11611.200","2018-07-27","","","","","pending","2018-07-27 17:10:35");
INSERT INTO bill VALUES("9","8","PS-009","8510895089","ritronixtechnology17@gmail.com","122, sector \"C\" near R.K. Hospital Bhopal","M.P.","Bhopal","462046","","2018-07-28","700.000","0.000","700.000","2018-07-28","","","","","pending","2018-07-28 09:57:08");



DROP TABLE bill_details;

CREATE TABLE `bill_details` (
  `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`bill_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO bill_details VALUES("10","6","11","","2100.000","PCS.","10.000","21000.000","CGST SGST","9.000","1890.000","9.000","1890.000","0.000","0.000","3780.000","24780.000");
INSERT INTO bill_details VALUES("11","6","12","","470.000","BAG","15.000","7050.000","CGST SGST","9.000","634.500","9.000","634.500","0.000","0.000","1269.000","8319.000");
INSERT INTO bill_details VALUES("12","7","11","","2110.000","PCS.","1.000","2110.000","CGST SGST","9.000","189.900","9.000","189.900","0.000","0.000","379.800","2489.800");
INSERT INTO bill_details VALUES("13","8","11","","2100.000","PCS.","3.000","6300.000","CGST SGST","9.000","567.000","9.000","567.000","0.000","0.000","1134.000","7434.000");
INSERT INTO bill_details VALUES("14","8","13","","1400.000","PCS.","1.000","1400.000","CGST SGST","9.000","126.000","9.000","126.000","0.000","0.000","252.000","1652.000");
INSERT INTO bill_details VALUES("15","8","11","","2140.000","PCS.","1.000","2140.000","CGST SGST","9.000","192.600","9.000","192.600","0.000","0.000","385.200","2525.200");
INSERT INTO bill_details VALUES("20","9","13","","700.000","","1.000","700.000","","0.000","0.000","0.000","0.000","0.000","0.000","0.000","700.000");



DROP TABLE branch;

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `street_address` text NOT NULL,
  `state` int(11) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE client;

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("5","Rahul Singh","ajaysweet01@gmail.com","8583019463","Kolkata","kolkata","kolkata","700011","123456789123456","2018-07-25","1","2018-07-27 17:02:48");
INSERT INTO client VALUES("6","madhu fertilizer ","ajaysweet01@gmail.com","8583019463","Kolkata","kolkata","kolkata","700011","","2018-07-27","1","2018-08-01 14:22:05");
INSERT INTO client VALUES("7","anil","ajaysweet01@gmail.com","8583019463","Kolkata","kolkata","kolkata","700011","","2018-07-27","1","2018-07-27 17:07:23");
INSERT INTO client VALUES("8","Ramesh jha","ritronixtechnology17@gmail.com","8510895089","122, sector \"C\" near R.K. Hospital Bhopal","Bhopal","M.P.","462046","","2018-07-28","1","2018-07-28 09:55:12");



DROP TABLE client_order;

CREATE TABLE `client_order` (
  `client_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`client_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE client_order_details;

CREATE TABLE `client_order_details` (
  `client_order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(50) NOT NULL,
  `quantity` decimal(12,3) DEFAULT NULL,
  PRIMARY KEY (`client_order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE client_product_rate;

CREATE TABLE `client_product_rate` (
  `client_product_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`client_product_rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO client_product_rate VALUES("1","4","2018-07-22","1","2018-07-22 07:54:23");



DROP TABLE client_product_rate_description;

CREATE TABLE `client_product_rate_description` (
  `client_product_rate_description_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_product_rate_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `weight` varchar(50) NOT NULL,
  `rate` decimal(12,3) DEFAULT NULL,
  `gst_type` varchar(20) NOT NULL,
  `cgst` decimal(12,3) NOT NULL,
  `sgst` decimal(12,3) NOT NULL,
  `igst` decimal(12,3) NOT NULL,
  `added` datetime NOT NULL,
  PRIMARY KEY (`client_product_rate_description_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO client_product_rate_description VALUES("1","1","10","TON","2000.000","CGST SGST","9.000","9.000","0.000","2018-07-22 07:54:23");



DROP TABLE product;

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("11","ALIKA","","2100.000","BAG","IGST","0.000","0.000","9.000","1","2018-07-22 08:48:39");
INSERT INTO product VALUES("12","SIXER","","470.000","BAG","CGST SGST","9.000","9.000","0.000","1","2018-07-22 08:50:01");
INSERT INTO product VALUES("13","patela","7001","1000.000","BAG","CGST SGST","9.000","9.000","0.000","1","2018-07-27 16:51:20");



DROP TABLE purchase;

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO purchase VALUES("5","6","986653635","","mumbai","maharsts","mumbai","0","23AZNPP3888M1ZH","","2018-07-27","43600.000","7848.000","51448.000","pending","2018-07-27 16:57:00");



DROP TABLE purchase_product;

CREATE TABLE `purchase_product` (
  `purchase_product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`purchase_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO purchase_product VALUES("5","5","11","","2180.000","PCS.","20.000","43600.000","CGST SGST","9.000","3924.000","9.000","3924.000","0.000","0.000","7848.000","51448.000");



DROP TABLE sales;

CREATE TABLE `sales` (
  `sales_id` int(255) NOT NULL AUTO_INCREMENT,
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
  `ip_address` varchar(255) NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE state;

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE supplier;

CREATE TABLE `supplier` (
  `supplier_id` int(255) NOT NULL AUTO_INCREMENT,
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO supplier VALUES("6","pi","","986653635","mumbai","mumbai","maharsts","0","23AZNPP3888M1ZH","2018-07-27","1","2018-07-27 16:53:23");



