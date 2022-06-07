-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 12:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `ID` int(11) NOT NULL,
  `ProvinceID` int(11) NOT NULL,
  `AttractionTypeID` int(11) NOT NULL,
  `ImageURL` varchar(500) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Description` varchar(2000) DEFAULT NULL,
  `Created` datetime DEFAULT NULL,
  `Modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`ID`, `ProvinceID`, `AttractionTypeID`, `ImageURL`, `Name`, `Description`, `Created`, `Modified`) VALUES
(52, 12, 6, 'https://www.tripgether.com/wp-content/uploads/tripgetter/Rai_Dok_Lom_Nao-01.jpg', 'ไร่ดอกลมหนาว', 'ม่อนแจ่ม, เชียงใหม่', '2022-06-06 22:36:16', '2022-06-07 17:07:06'),
(53, 13, 3, 'https://ed.edtfiles-media.com/ud/book/content/1/156/467901/shutterstock_1428596468.jpg', 'วัดร่องขุ่น', 'เชียงราย', '2022-06-06 22:11:40', '2022-06-07 17:07:56'),
(54, 20, 3, 'http://img.painaidii.com/images/20201005_3_1601885241_872661.jpg', 'วัดนาคูหา', 'แพร่', '2022-06-06 22:12:54', '2022-06-07 17:12:35'),
(55, 17, 3, 'https://th.readme.me/f/11903/59a3ede1d677a07e9a6b6803.jpg', 'วัดภูเก็ต', 'น่าน', '2022-06-06 22:13:49', '2022-06-07 17:10:48'),
(56, 16, 6, 'https://blog.bangkokair.com/wp-content/uploads/2018/02/Ban-ruk-thai.jpg', 'หมู่บ้านรักไทย', 'แม่ฮ่องสอน', '2022-06-06 22:15:07', '2022-06-07 17:11:03'),
(57, 77, 1, 'https://centralvimaxcanada.com/wp-content/uploads/2020/07/%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%AB%E0%B8%A5%E0%B8%B2%E0%B9%80%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%A2%E0%B8%87.jpg', 'เกาะมุก และถ้ำมรกต', 'ตรัง', '2022-06-06 22:17:03', '2022-06-07 17:14:20'),
(58, 83, 3, 'https://www.patongcity.go.th/tmp/814982d6051804a9308dc04d2bcef0f0.jpg', 'วัดฉลอง', 'ภูเก็ต', '2022-06-06 22:19:02', '2022-06-07 17:16:39'),
(59, 75, 1, 'https://shopee.co.th/blog/wp-content/uploads/2020/11/%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B5%E0%B9%88.jpg', 'เกาะพีพี', 'กระบี่', '2022-06-06 22:20:20', '2022-06-07 17:13:14'),
(60, 87, 6, 'https://img.kapook.com/u/2020/supattra_wat/surat/s1.jpg', 'สะพานแขวน วัดเขาพัง', 'สุราษฎร์ธานี', '2022-06-06 22:23:54', '2022-06-07 17:17:52'),
(61, 78, 1, 'https://www.chillpainai.com/src/wewakeup/scoop/images/aa7ddc4f0e4cb9be483fd901ff30bfa11ec025d9.jpg', 'สะพานไม้อ่าวเตล็ด', 'นครศรีธรรมราช', '2022-06-06 22:25:33', '2022-06-07 17:15:39'),
(62, 66, 1, 'https://blog.bangkokair.com/wp-content/uploads/2016/12/shutterstock_407493787-e1482490925134.jpg', 'หมู่เกาะรัง', 'ตราด', '2022-06-06 22:26:58', '2022-06-07 17:34:05'),
(63, 69, 3, 'https://travel.mthai.com/app/uploads/2018/09/sakaew.jpg', 'วัดถ้ำเขาฉกรรจ์', 'สระแก้ว', '2022-06-06 22:34:40', '2022-06-07 17:36:29'),
(64, 65, 3, 'https://www.paiduaykan.com/travel/wp-content/uploads/2020/03/DEW_8359.jpg', 'วัดแสนสุข', 'ชลบุรี', '2022-06-06 22:29:05', '2022-06-07 17:32:17'),
(65, 68, 1, 'https://paimayang.com/wp-content/uploads/2020/01/Rayong-840x560.jpg', 'เกาะเสม็ด', 'ระยอง', '2022-06-06 22:31:14', '2022-06-07 17:35:23'),
(66, 63, 5, 'https://www.bloggang.com/data/f/festival/picture/1561023400.jpg', 'จุดชมวิวเนินนางพญา', 'จันทบุรี', '2022-06-06 22:33:49', '2022-06-07 17:31:28'),
(67, 41, 3, 'https://itc.drr.go.th/wp-content/uploads/2019/10/drr-2019-10-10_07-12-19_229721.jpg', 'วัดพระแก้วมรกต', 'กรุงเทพมหานคร ', '2022-06-06 22:37:30', '2022-06-07 17:18:58'),
(68, 49, 3, 'https://www.paiduaykan.com/travel/wp-content/uploads/2020/09/4-DEW_8886.jpg', 'วัดพระศรีสรรเพชญ์', 'อยุธยา', '2022-06-06 22:38:19', '2022-06-07 17:24:08'),
(69, 47, 3, 'https://img.kapook.com/u/2018/wittawat_ch/999/2-2_3.jpg', 'วัดบางไผ่ พระอารามหลวง', 'นนทบุรี', '2022-06-06 22:42:22', '2022-06-07 17:21:12'),
(70, 48, 3, 'https://www.checkinchill.com/wp-content/uploads/checkinchill-16-08-2021-69.jpg', 'วัดป่าคลอง 11', 'ปทุมธานี', '2022-06-06 22:43:28', '2022-06-07 17:22:46'),
(71, 45, 3, 'http://img.painaidii.com/images/20140916_3_1410863939_388824.jpg', 'วัดพระปฐมเจดีย์ราชวรมหาวิหาร', 'นครปฐม', '2022-06-06 22:48:46', '2022-06-07 17:20:05'),
(72, 34, 3, 'https://www.thaihrhub.com/wp-content/uploads/2016/12/10-%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%97%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B9%83%E0%B8%88%E0%B9%83%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C-%E0%B8%9B%E0%B8%A3%E0%B8%B2%E0%B8%AA%E0%B8%B2%E0%B8%97%E0%B8%95%E0%B8%B2%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%99.jpg', 'ปราสาทตาเมือน', 'สุรินทร์', '2022-06-06 22:53:55', '2022-06-07 17:27:51'),
(73, 22, 3, 'https://s.isanook.com/tr/0/ud/187/939568/1.jpg', 'วัดหนองแวง (พระอารามหลวง) ', 'ขอนแก่น', '2022-06-06 22:55:05', '2022-06-07 17:25:15'),
(74, 38, 3, 'http://img.painaidii.com/images/20170621_3_1498016811_928787.jpg', 'วัดป่าภูก้อน', 'อุดรธานี', '2022-06-06 22:55:55', '2022-06-07 17:28:53'),
(75, 33, 3, 'https://cms.dmpcdn.com/travel/2019/12/30/a118d220-2abf-11ea-aa0a-5b4e273aa1a3_original.JPG', 'พญาเต่างอย', 'สกลนคร', '2022-06-06 22:57:42', '2022-06-07 17:26:17'),
(76, 39, 6, 'https://cms.dmpcdn.com/travel/2020/09/30/9d295a10-02f8-11eb-bd7e-6fd5b8777671_original.JPG', 'ผาชะนะได อุทยานแห่งชาติผาแต้ม', 'อุบลราชธานี', '2022-06-06 22:59:23', '2022-06-07 17:30:35'),
(77, 71, 6, 'https://img.kapook.com/u/2019/sutasinee/08/y10.jpg', 'ดอยหลวงตาก', 'ตาก', '2022-06-06 23:00:57', '2022-06-07 17:40:07'),
(78, 70, 2, 'https://www.govivigo.com/content/ideas/5633/56339a3dec60adb92a8b462f-2-full-ideas.jpg', 'น้ำตกเอราวัณ สวรรค์ชั้น 7', 'กาญจนบุรี', '2022-06-06 23:02:05', '2022-06-07 17:38:47'),
(79, 74, 4, 'https://s359.kapook.com/pagebuilder/e99f01af-0ed3-4fcd-87c0-15e656508749.jpg', 'อุทยานหินเขางู', 'ราชบุรี', '2022-06-06 23:03:03', '2022-06-07 17:03:19'),
(80, 73, 4, 'https://s359.kapook.com/pagebuilder/427c65fa-43f1-4a33-9f22-c9a67b619b7f.jpg', 'ถ้ำเขาหลวง', 'เพชรบุรี', '2022-06-06 23:05:20', '2022-06-07 17:44:51'),
(81, 72, 5, 'https://huahin.town/wp-content/uploads/2021/04/e0klmi5v24z1wjs6abho9pdux3ft87qy.jpeg', 'หาดทรายน้อย', 'ประจวบคีรีขันธ์', '2022-06-06 23:06:17', '2022-06-07 17:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `attraction_type`
--

CREATE TABLE `attraction_type` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attraction_type`
--

INSERT INTO `attraction_type` (`ID`, `Name`) VALUES
(1, 'Island'),
(2, 'Waterfall'),
(3, 'Temple'),
(4, 'Cave'),
(5, 'Beach'),
(6, 'Mountain');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `ID` int(11) NOT NULL,
  `RegionID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`ID`, `RegionID`, `Name`) VALUES
(12, 1, 'Chiang Mai'),
(13, 1, 'Chiang Rai'),
(14, 1, 'Lampang'),
(15, 1, 'Lamphun'),
(16, 1, 'Mae Hong Son'),
(17, 1, 'Nan'),
(18, 1, 'Phayao'),
(19, 1, 'Uttaradit'),
(20, 1, 'Phrae'),
(21, 4, 'Kalasin'),
(22, 4, 'Khon Kaen'),
(23, 4, 'Chaiyaphum'),
(24, 4, 'Nakhon Phanom'),
(25, 4, 'Nakhon Ratchasima'),
(26, 4, 'Bueng Kan'),
(27, 4, 'Buriram'),
(28, 4, 'Maha Sarakham'),
(29, 4, 'Mukdahan'),
(30, 4, 'Yasothon'),
(31, 4, 'Roi Et'),
(32, 4, 'Loei'),
(33, 4, 'Sakon Nakhon'),
(34, 4, 'Surin'),
(35, 4, 'Sisaket'),
(36, 4, 'Nong Khai'),
(37, 4, 'Nong Bua Lamphu'),
(38, 4, 'Udon Thani'),
(39, 4, 'Ubon Ratchathani'),
(40, 4, 'Amnat Charoen'),
(41, 3, 'Bangkok'),
(42, 3, 'Kamphaeng Phet'),
(43, 3, 'Chai Nat'),
(44, 3, 'Nakhon Nayok'),
(45, 3, 'Nakhon Pathom'),
(46, 3, 'Nakhon Sawan'),
(47, 3, 'Nonthaburi'),
(48, 3, 'Pathum Thani'),
(49, 3, 'Phra Nakhon Si Ayutthaya'),
(50, 3, 'Phichit'),
(51, 3, 'Phitsanulok'),
(52, 3, 'Phetchabun'),
(53, 3, 'Lopburi'),
(54, 3, 'Samut Prakan'),
(55, 3, 'Samut Songkhram'),
(56, 3, 'Samut Sakhon'),
(57, 3, 'Sing Buri'),
(58, 3, 'Sukhothai'),
(59, 3, 'Suphan Buri'),
(60, 3, 'Saraburi'),
(61, 3, 'Ang Thong'),
(62, 3, 'Uthai Thani'),
(63, 5, 'Chanthaburi'),
(64, 5, 'Chachoengsao'),
(65, 5, 'Chonburi'),
(66, 5, 'Trat'),
(67, 5, 'Prachinburi'),
(68, 5, 'Rayong'),
(69, 5, 'Sa Kaeo'),
(70, 6, 'Kanchanaburi'),
(71, 6, 'Tak'),
(72, 6, 'Prachuap Khiri Khan'),
(73, 6, 'Phetchaburi'),
(74, 6, 'Ratchaburi'),
(75, 2, 'Krabi'),
(76, 2, 'Chumphon'),
(77, 2, 'Trang'),
(78, 2, 'Nakhon Si Thammarat'),
(79, 2, 'Narathiwat'),
(80, 2, 'Pattani'),
(81, 2, 'Phang Nga'),
(82, 2, 'Phatthalung'),
(83, 2, 'Phuket'),
(84, 2, 'Ranong'),
(85, 2, 'Satun'),
(86, 2, 'Songkhla'),
(87, 2, 'Surat Thani'),
(88, 2, 'Yala');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`ID`, `Name`) VALUES
(1, 'Northern'),
(2, 'Southern'),
(3, 'Central'),
(4, 'Northeastern'),
(5, 'Eastern'),
(6, 'Western');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ProvinceID` (`ProvinceID`) USING BTREE,
  ADD KEY `AttractionTypeID` (`AttractionTypeID`) USING BTREE;

--
-- Indexes for table `attraction_type`
--
ALTER TABLE `attraction_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RegionID` (`RegionID`) USING BTREE;

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `attraction_type`
--
ALTER TABLE `attraction_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attraction`
--
ALTER TABLE `attraction`
  ADD CONSTRAINT `foreign key AttractionTypeID` FOREIGN KEY (`AttractionTypeID`) REFERENCES `attraction_type` (`ID`),
  ADD CONSTRAINT `foreign key ProvinceID` FOREIGN KEY (`ProvinceID`) REFERENCES `province` (`ID`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `foreign key RegionID` FOREIGN KEY (`RegionID`) REFERENCES `region` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
