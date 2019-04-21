-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 06:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucommunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_email` varchar(80) NOT NULL,
  `admin_pass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_email`, `admin_pass`) VALUES
('admin@gmail.com', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

CREATE TABLE `groupchat` (
  `gchat_id` int(100) NOT NULL,
  `gc_user_id` int(100) NOT NULL,
  `gc_user_name` varchar(100) NOT NULL,
  `gc_user_image` varchar(100) NOT NULL,
  `gchat_cont` varchar(300) NOT NULL,
  `gchat_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupchat`
--

INSERT INTO `groupchat` (`gchat_id`, `gc_user_id`, `gc_user_name`, `gc_user_image`, `gchat_cont`, `gchat_date`) VALUES
(127, 5, 'Muhammad Saeid', 'got.png', 'vai kmn asen?', 'Wed, 17 Apr 2019'),
(128, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'valo apni?', 'Wed, 17 Apr 2019'),
(129, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'valo asen vai', 'Wed, 17 Apr 2019'),
(130, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'sob  tik thak', 'Wed, 17 Apr 2019'),
(131, 5, 'Muhammad Saeid', 'got.png', 'sakdf', 'Wed, 17 Apr 2019'),
(132, 5, 'Muhammad Saeid', 'got.png', 'sd', 'Wed, 17 Apr 2019'),
(133, 5, 'Muhammad Saeid', 'got.png', 'sdf', 'Wed, 17 Apr 2019'),
(134, 5, 'Muhammad Saeid', 'got.png', 'sdfsdaf', 'Wed, 17 Apr 2019'),
(135, 5, 'Muhammad Saeid', 'got.png', 's', 'Wed, 17 Apr 2019'),
(136, 5, 'Muhammad Saeid', 'got.png', 's', 'Wed, 17 Apr 2019'),
(137, 5, 'Muhammad Saeid', 'got.png', 'sadf', 'Wed, 17 Apr 2019'),
(138, 5, 'Muhammad Saeid', 'got.png', 'sadf', 'Wed, 17 Apr 2019'),
(139, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfs', 'Wed, 17 Apr 2019'),
(140, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfs', 'Wed, 17 Apr 2019'),
(141, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsd', 'Wed, 17 Apr 2019'),
(142, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsd', 'Wed, 17 Apr 2019'),
(143, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsad', 'Wed, 17 Apr 2019'),
(144, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsad', 'Wed, 17 Apr 2019'),
(145, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsadf', 'Wed, 17 Apr 2019'),
(146, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsadf', 'Wed, 17 Apr 2019'),
(147, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsadf', 'Wed, 17 Apr 2019'),
(148, 5, 'Muhammad Saeid', 'got.png', 'sadfsdfsfsdfsadf', 'Wed, 17 Apr 2019'),
(149, 5, 'Muhammad Saeid', 'got.png', 'ok vai', 'Wed, 17 Apr 2019'),
(150, 5, 'Muhammad Saeid', 'got.png', 'HI', 'Wed, 17 Apr 2019'),
(151, 5, 'Muhammad Saeid', 'got.png', 'ok tik ase to', 'Wed, 17 Apr 2019'),
(152, 5, 'Muhammad Saeid', 'got.png', 'ki hoilo aita ', 'Wed, 17 Apr 2019'),
(153, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok vai', 'Wed, 17 Apr 2019'),
(154, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'kiya hal ke ', 'Wed, 17 Apr 2019'),
(155, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok bye', 'Wed, 17 Apr 2019'),
(156, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok vai', 'Wed, 17 Apr 2019'),
(157, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vaire ', 'Wed, 17 Apr 2019'),
(158, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'how man', 'Wed, 17 Apr 2019'),
(159, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'thur', 'Wed, 17 Apr 2019'),
(160, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hello', 'Wed, 17 Apr 2019'),
(161, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(162, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(163, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(164, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(165, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hello', 'Wed, 17 Apr 2019'),
(166, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(167, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hire ', 'Wed, 17 Apr 2019'),
(168, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(169, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(170, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(171, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(172, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(173, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vai', 'Wed, 17 Apr 2019'),
(174, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vai', 'Wed, 17 Apr 2019'),
(175, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vai', 'Wed, 17 Apr 2019'),
(176, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vaiya', 'Wed, 17 Apr 2019'),
(177, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'thur mia', 'Wed, 17 Apr 2019'),
(178, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'kire vai', 'Wed, 17 Apr 2019'),
(179, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(180, 5, 'Muhammad Saeid', 'got.png', 'hi vai', 'Wed, 17 Apr 2019'),
(181, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok vai', 'Wed, 17 Apr 2019'),
(182, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(183, 5, 'Muhammad Saeid', 'got.png', 'how are you', 'Wed, 17 Apr 2019'),
(184, 5, 'Muhammad Saeid', 'got.png', 'hi vaiya', 'Wed, 17 Apr 2019'),
(185, 5, 'Muhammad Saeid', 'got.png', 'hi vai', 'Wed, 17 Apr 2019'),
(186, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'habijibi', 'Wed, 17 Apr 2019'),
(187, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vaire', 'Wed, 17 Apr 2019'),
(188, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'asdf', 'Wed, 17 Apr 2019'),
(189, 5, 'Muhammad Saeid', 'got.png', 'sadgasd', 'Wed, 17 Apr 2019'),
(190, 5, 'Muhammad Saeid', 'got.png', 'ok vai', 'Wed, 17 Apr 2019'),
(191, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hello vai', 'Wed, 17 Apr 2019'),
(192, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hello', 'Wed, 17 Apr 2019'),
(193, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'asdf', 'Wed, 17 Apr 2019'),
(194, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'HEllo', 'Wed, 17 Apr 2019'),
(195, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(196, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok', 'Wed, 17 Apr 2019'),
(197, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(198, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hello', 'Wed, 17 Apr 2019'),
(199, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'thur', 'Wed, 17 Apr 2019'),
(200, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'vai aita ki', 'Wed, 17 Apr 2019'),
(201, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'Hi man', 'Wed, 17 Apr 2019'),
(202, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'kire vai', 'Wed, 17 Apr 2019'),
(203, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ohh vai ', 'Wed, 17 Apr 2019'),
(204, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ok vai valo thakben', 'Wed, 17 Apr 2019'),
(205, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(206, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi', 'Wed, 17 Apr 2019'),
(207, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'ohh vai', 'Wed, 17 Apr 2019'),
(208, 10, 'imran hasan', 'Guliakhali-Sea-Beach.jpg', 'hi vai', 'Wed, 17 Apr 2019'),
(209, 6, 'Mredul Orfiaz', 'BU.png', 'HI ', 'Sun, 21 Apr 2019'),
(210, 7, 'Saimum Islam', 'apple-touch-icon.png', 'hi', 'Sun, 21 Apr 2019'),
(211, 7, 'Saimum Islam', 'apple-touch-icon.png', 'hi', 'Sun, 21 Apr 2019'),
(212, 7, 'Saimum Islam', 'apple-touch-icon.png', 'HI', 'Sun, 21 Apr 2019'),
(213, 7, 'Saimum Islam', 'apple-touch-icon.png', 'hello there ', 'Sun, 21 Apr 2019'),
(214, 6, 'Mredul Orfiaz', 'BU.png', 'hello', 'Sun, 21 Apr 2019'),
(215, 6, 'Mredul Orfiaz', 'BU.png', 'hello mister', 'Sun, 21 Apr 2019'),
(216, 6, 'Mredul Orfiaz', 'BU.png', 'hi man', 'Sun, 21 Apr 2019'),
(217, 6, 'Mredul Orfiaz', 'BU.png', 'kire vi', 'Sun, 21 Apr 2019'),
(218, 6, 'Mredul Orfiaz', 'BU.png', 'hello', 'Sun, 21 Apr 2019'),
(219, 6, 'Mredul Orfiaz', 'BU.png', 'hinvai', 'Sun, 21 Apr 2019');

-- --------------------------------------------------------

--
-- Table structure for table `notice_post`
--

CREATE TABLE `notice_post` (
  `notice_id` int(100) NOT NULL,
  `n_user_name` varchar(50) NOT NULL,
  `n_user_image` varchar(50) NOT NULL,
  `noticetitle` varchar(100) NOT NULL,
  `notictopic` varchar(50) NOT NULL,
  `noticecont` varchar(500) NOT NULL,
  `notice_img_name` varchar(200) NOT NULL,
  `notice_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice_post`
--

INSERT INTO `notice_post` (`notice_id`, `n_user_name`, `n_user_image`, `noticetitle`, `notictopic`, `noticecont`, `notice_img_name`, `notice_date`) VALUES
(9, 'Muhammad Saeid', 'got.png', 'Using Build Tools', 'Others', 'Semantic UI packaged Gulp build tools so your project can preserve its own theme changes.\r\n\r\nThe easiest way to install Semantic UI is our NPM package which contains special install scripts to make setup interactive and updates seamless.', 'got.png', 'Tue, 16 Apr 2019'),
(10, 'Muhammad Saeid', 'got.png', 'Install NodeJS', 'Notice', 'Semantic UI uses Gulp to provide command line tools for building themed versions of the library with just the components you need.\r\n\r\nGulp is an NPM module and must be installed globally', '', 'Tue, 16 Apr 2019');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `pcomment_id` int(100) NOT NULL,
  `pcomment_user` varchar(100) NOT NULL,
  `pcomment_uimg` varchar(100) NOT NULL,
  `pcomment_cont` varchar(200) NOT NULL,
  `commentpost_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`pcomment_id`, `pcomment_user`, `pcomment_uimg`, `pcomment_cont`, `commentpost_id`) VALUES
(9, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'this is the new post', 5),
(10, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'what is the tag?', 6),
(11, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'this is a tag you sure ', 6),
(12, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'ki hoitace', 5),
(13, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'kire vai', 6),
(14, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'its ok ', 6),
(15, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'nice tag', 6),
(16, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'what is the place ', 5),
(17, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'nice vai', 6),
(18, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'amr sonar bang alami tomat valobasi cilo din tomar aksh tomar agsdfasdgasgafsgadg', 6),
(19, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg ', 'nice', 9),
(20, 'Shafiur Rahman', 'IMG_20180323_172850.jpg ', 'hello', 12),
(21, 'imranmia mia', 'Guliakhali-Sea-Beach.jpg ', 'hello', 7),
(22, 'Saimum Islam', 'apple-touch-icon.png ', 'Hi', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `ppic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fname`, `sname`, `pass`, `email`, `gender`, `birthday`, `ppic`) VALUES
(5, 'Muhammad', 'Saeid', 'saeid@bu.edu.bd', 'saeid@bu.edu.bd', 'Male', '2-February-2013', 'got.png'),
(6, 'Mredul', 'Orfiaz', 'mredulorfiaz@bu.edu.bd', 'mredulorfiaz@bu.edu.bd', 'Male', '1-February-2013', 'BU.png'),
(7, 'Saimum', 'Islam', 'saimum@bu.edu.bd', 'saimum@bu.edu.bd', 'Male', '1-February-2013', 'apple-touch-icon.png'),
(8, 'Kamrul', 'Hasan', 'kamrul@bu.edu.bd', 'kamrul@bu.edu.bd', 'Male', '2-February-2013', 'project-7.jpg'),
(9, 'Al', 'Rimon', 'rimon@bu.edu.bd', 'rimon@bu.edu.bd', 'Male', '2-February-2013', 'download.jpg'),
(10, 'imranmia', 'mia', 'imran@bu.edu.bd', 'imran@bu.edu.bd', 'Male', '1-February-2013', 'Guliakhali-Sea-Beach.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(100) NOT NULL,
  `puser_name` varchar(50) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `user_post` varchar(1000) NOT NULL,
  `post_image` varchar(250) NOT NULL,
  `post_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `puser_name`, `user_image`, `user_post`, `post_image`, `post_date`) VALUES
(5, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'What a Moment ', 'Guliakhali-Sea-Beach.jpg', 'April 8 2019'),
(6, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'This is tag', 'project-7.jpg', 'April 8 2019'),
(7, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'this is bu logo', 'BU.png', 'Mon, 08 Apr 2019 13:17:02 +020'),
(8, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'He is Shafiur', 'IMG_20180323_172850.jpg', 'Mon, 08 Apr 2019 23:01PM'),
(9, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'this is apple logo', 'apple-touch-icon.png', 'Mon, 08 Apr 2019 01:27PM'),
(10, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'favicon ', 'favicon.ico', 'Mon, 08 Apr 2019'),
(11, 'Shafiur Rahman', 'IMG_20180323_172850.jpg', 'This is the first post of shafiur', 'project-7.jpg', 'Mon, 08 Apr 2019'),
(12, 'Muhammad Saeid', 'Guliakhali-Sea-Beach.jpg', 'vu', 'BU.png', 'Wed, 10 Apr 2019'),
(13, 'iqbal mia', 'BU.png', 'wow..', '12108168_1232696203412928_7414158571324889875_n.jpg', 'Thu, 11 Apr 2019'),
(14, 'Muhammad Saeid', 'got.png', 'GOT', 'got.png', 'Tue, 16 Apr 2019');

-- --------------------------------------------------------

--
-- Table structure for table `valid_user_info`
--

CREATE TABLE `valid_user_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `ppic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `valid_user_info`
--

INSERT INTO `valid_user_info` (`id`, `fname`, `sname`, `pass`, `email`, `gender`, `birthday`, `ppic`) VALUES
(5, 'Muhammad', 'Saeid', 'saeid@bu.edu.bd', 'saeid@bu.edu.bd', 'Male', '2-February-2013', 'got.png'),
(6, 'Mredul', 'Orfiaz', 'mredulorfiaz@bu.edu.bd', 'mredulorfiaz@bu.edu.bd', 'Male', '1-February-2013', 'BU.png'),
(7, 'Saimum', 'Islam', 'saimum@bu.edu.bd', 'saimum@bu.edu.bd', 'Male', '1-February-2013', 'apple-touch-icon.png'),
(8, 'Kamrul', 'Hasan', 'kamrul@bu.edu.bd', 'kamrul@bu.edu.bd', 'Male', '2-February-2013', 'project-7.jpg'),
(9, 'Al', 'Rimon', 'rimon@bu.edu.bd', 'rimon@bu.edu.bd', 'Male', '2-February-2013', 'download.jpg'),
(10, 'imran', 'hasan', 'imran@bu.edu.bd', 'imran@bu.edu.bd', 'Male', '1-February-2013', 'Guliakhali-Sea-Beach.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `warning_massage`
--

CREATE TABLE `warning_massage` (
  `wm_id` int(100) NOT NULL,
  `wm_user_id` varchar(100) NOT NULL,
  `wm_cont` varchar(1000) NOT NULL,
  `wm_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warning_massage`
--

INSERT INTO `warning_massage` (`wm_id`, `wm_user_id`, `wm_cont`, `wm_date`) VALUES
(1, '6', 'this is first massage', 'Wed, 17 Apr 2019'),
(2, '6', 'this is first massage', 'Wed, 17 Apr 2019'),
(3, '6', 'hi you doing something wrong', 'Wed, 17 Apr 2019'),
(4, '6', 'hi you doing something  ki koren vai', 'Wed, 17 Apr 2019'),
(5, '10', 'get out', 'Sun, 21 Apr 2019'),
(6, '5', 'hi', 'Sun, 21 Apr 2019'),
(7, '5', 'HI', 'Sun, 21 Apr 2019'),
(8, '7', 'hi theere ', 'Sun, 21 Apr 2019'),
(9, '7', 'hi theere ', 'Sun, 21 Apr 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`gchat_id`);

--
-- Indexes for table `notice_post`
--
ALTER TABLE `notice_post`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`pcomment_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `valid_user_info`
--
ALTER TABLE `valid_user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warning_massage`
--
ALTER TABLE `warning_massage`
  ADD PRIMARY KEY (`wm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `gchat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `notice_post`
--
ALTER TABLE `notice_post`
  MODIFY `notice_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `pcomment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `valid_user_info`
--
ALTER TABLE `valid_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warning_massage`
--
ALTER TABLE `warning_massage`
  MODIFY `wm_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
