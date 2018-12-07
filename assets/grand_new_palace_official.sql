-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018 年 12 月 07 日 16:07
-- 伺服器版本: 5.5.57-MariaDB
-- PHP 版本： 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `grand_new_palace_official`
--

-- --------------------------------------------------------

--
-- 資料表結構 `advisory`
--

CREATE TABLE `advisory` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `question` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '询问',
  `status` int(1) NOT NULL COMMENT '0=未处理1=已处理',
  `remark` varchar(256) CHARACTER SET utf8 DEFAULT NULL COMMENT '处理补充',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `advisory`
--

INSERT INTO `advisory` (`id`, `name`, `phone`, `question`, `status`, `remark`, `create_date`, `update_date`) VALUES
(1, '陈晨沈', '0987654321', '有多人优惠吗？', 0, NULL, '2018-12-05 00:00:00', '2018-12-05 00:00:00'),
(2, '吴柄玉', '0987654321', '请问是可以预约看场地吗？', 0, NULL, '2018-12-06 00:00:00', '2018-12-06 00:00:00'),
(3, '罗赖把', '0987654345', '想要看场可否预约', 0, NULL, '2018-12-07 00:00:00', '2018-12-07 00:00:00'),
(4, '黄小琥', '0982273645', '我是明星可以给我优惠吗', 1, '我丟你老母你這個傻豬，想要優惠跪下來求我啊，在唧唧歪歪的我讓你不能見人', '2018-12-08 00:00:00', '2018-12-08 00:00:00'),
(5, '陈文将', '0982278999', '萨柯买地壳', 0, NULL, '2018-12-09 00:00:00', '2018-12-09 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `banquet`
--

CREATE TABLE `banquet` (
  `id` int(11) NOT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `money` int(6) NOT NULL,
  `detail` varchar(256) CHARACTER SET utf8 NOT NULL,
  `sequence` float NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `banquet`
--

INSERT INTO `banquet` (`id`, `img_url`, `title`, `money`, `detail`, `sequence`, `create_date`, `update_date`) VALUES
(2, '2banquet.png?315011538', '1233', 1234, '41233214', 0, '0000-00-00 00:00:00', '2018-12-04 02:25:44'),
(3, '3banquet.png?1013923143', 'qqq', 0, 'qqq', 1, '2018-12-03 09:33:32', '2018-12-03 09:33:32');

-- --------------------------------------------------------

--
-- 資料表結構 `banquet_img`
--

CREATE TABLE `banquet_img` (
  `id` int(11) NOT NULL,
  `banquet_id` int(11) NOT NULL,
  `path` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sequence` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `banquet_img`
--

INSERT INTO `banquet_img` (`id`, `banquet_id`, `path`, `sequence`) VALUES
(9, 2, '2-9-banquet.jpeg', 1),
(6, 2, '2-6-banquet.jpeg', 2),
(11, 3, '3-11-banquet.jpeg', 0),
(10, 2, '2-10-banquet.jpeg', 0),
(12, 3, '3-12-banquet.jpeg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mId` int(11) NOT NULL,
  `memberId` varchar(20) NOT NULL,
  `memberPassword` varchar(20) NOT NULL,
  `mName` varchar(20) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`mId`, `memberId`, `memberPassword`, `mName`, `createDate`, `updateDate`) VALUES
(1, 'admin', 'admin', 'xxx', '2018-11-14 00:00:00', '2018-11-14 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0=预约弹窗,1=第三方平台',
  `active_url` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '第三方网址',
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sub_title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `detail` varchar(256) CHARACTER SET utf8 NOT NULL,
  `hot_num` int(5) NOT NULL COMMENT '人气指数',
  `order_num` int(5) NOT NULL COMMENT '已参与人数',
  `active_time` date NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `type`, `active_url`, `img_url`, `title`, `sub_title`, `detail`, `hot_num`, `order_num`, `active_time`, `create_date`, `update_date`) VALUES
(1, 1, 'https://www.google.com/', '1news.jpeg?1417212563', '微感雙眼皮成型術', 'EYES MAKE', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 100, 100, '2018-12-31', '2018-12-04 07:47:55', '2018-12-06 10:15:32'),
(2, 0, NULL, '2news.jpeg?1445767268', '日落前的浪漫', 'sunset romantic', '名聲響亮的時尚明星男作家，為了找尋小說的靈感與養份，遠離喧囂的巴黎，來到地中海小島—「伊比薩Ibiza」，島上的時光彷彿凝結在失落的嬉皮年代，面對大海與落日感到悵然若失的他，邂逅了一名神秘的少女，她成為他靈感來源的謬思女神，他們的愛情萌芽在柔 和的海風與絢麗的夕陽間。然而，少女漸漸變的若即若離、無法捉摸；同時，男作家在巴黎原有的生活也頻頻召喚著他…，他們之間的愛情，會僅僅只是一場美夢嗎？', 999, 999, '2019-01-01', '2018-12-04 08:00:02', '2018-12-06 10:15:00');

-- --------------------------------------------------------

--
-- 資料表結構 `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `english_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `chiness_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `sub_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `money` int(7) NOT NULL,
  `table_num` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '容纳桌数',
  `detail` varchar(512) CHARACTER SET utf8 NOT NULL,
  `schedule` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '档期',
  `offer` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '优惠',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `sequence` float NOT NULL COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `venue`
--

INSERT INTO `venue` (`id`, `img_url`, `english_name`, `chiness_name`, `sub_title`, `money`, `table_num`, `detail`, `schedule`, `offer`, `create_date`, `update_date`, `sequence`) VALUES
(5, '5venue.jpeg?1096104899', 'SHANGHAI', '上海厅', '"时尚豪华" 可容纳10-26桌', 5999, '10~26', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis commodi aspernatur eos distinctio nostrum similique repellendus?', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, '8venue.jpeg?97067108', 'VERSAILLES', '凡尔赛厅', '"精美浪漫" 可容纳10-24桌', 5999, '10-24', 'qweuoqwjeljljkljasldjalsjdlkaslkdjasldjlasjdlajslkdjlajldajskldjalksjdlasjldjaslkjkldjaskljdklasjdjaskldjlasjdajslkdjaslkdjlsajd', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(9, '9venue.jpeg?649065430', 'BAROQUE', '巴洛克厅', '欧洲的典型艺术风格，可容纳10-14桌', 5999, '10-14', 'asdjlasjdkjasldjlaksjdljasljdlkasjlkdjaskljdklasdasdsadasdsad', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(10, '10venue.jpeg?1880441940', 'PARIS', '巴黎厅', '"时尚豪华" 可容纳10-26桌', 6999, '10-26', 'asjdkasjdk dlkjaslkdklaslkdjaslk asdjlkajsldjlaskjdlasjl djlasjldkjaslkjdlasjldjlasjdklja askjdjaslkdjaskldjlkas', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(11, '11venue.jpeg?1402065098', 'SANATHENS', '圣雅典厅', '古文明力与美，可容纳10-26桌', 6999, '10-26', 'asdjasljdlajsldjaskljdl dasdas das d as das d as das dasdas dasd asdas das das das d as d as dasdasdasdas dasasdasasd ', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(12, '12venue.jpeg?1521668897', 'MILAN', '米兰厅', '欧洲的典型艺术风格，可容纳10-14桌', 5999, '10-14', 'wqejqwkljelkqwjlejqwkjelk qwjel jqwljelqwl eqwjejwqlkjelkqwj ejqw jel qwjlejqwlelqw eljqwle qwklekljqweljqwlejqwlk ejkqwjelqj lejqwlkewqe', '~', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `venue_img`
--

CREATE TABLE `venue_img` (
  `id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0=3张排样子,1=1张,2=3张并排',
  `venue_id` int(11) NOT NULL,
  `path` varchar(256) CHARACTER SET utf8 DEFAULT NULL COMMENT '用逗号分割',
  `sequence` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `venue_img`
--

INSERT INTO `venue_img` (`id`, `type`, `venue_id`, `path`, `sequence`) VALUES
(12, 2, 5, '5-12-venue_img1.jpeg?1822841479', 2),
(13, 3, 5, '5-13-venue_img1.jpeg?1164917928,5-13-venue_img2.jpeg?323145626,5-13-venue_img3.jpeg?1430502933', 4),
(16, 2, 5, '5-16-venue_img1.jpeg?109827404', 3),
(15, 2, 5, '5-15-venue_img1.jpeg?1584843169', 1),
(11, 1, 5, '5-11-venue_img1.jpeg?2117615278,5-11-venue_img2.jpeg?2070982990,5-11-venue_img3.jpeg?67855758', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1=影片2=轮拨图',
  `path` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sequence` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `video`
--

INSERT INTO `video` (`id`, `type`, `path`, `sequence`) VALUES
(1, 2, '1video.jpeg?493690501', 0),
(2, 1, '2video.mp4?685464378', 1),
(10, 1, '10video.mp4?956355357', 0),
(5, 2, '5video.jpeg?2085072402', 1),
(6, 2, '6video.jpeg?1893356627', 2),
(7, 2, '7video.jpeg?98084206', 4),
(8, 2, '8video.jpeg?248808802', 3);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `advisory`
--
ALTER TABLE `advisory`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `banquet`
--
ALTER TABLE `banquet`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `banquet_img`
--
ALTER TABLE `banquet_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mId`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `venue_img`
--
ALTER TABLE `venue_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `advisory`
--
ALTER TABLE `advisory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `banquet`
--
ALTER TABLE `banquet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `banquet_img`
--
ALTER TABLE `banquet_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `venue_img`
--
ALTER TABLE `venue_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用資料表 AUTO_INCREMENT `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
