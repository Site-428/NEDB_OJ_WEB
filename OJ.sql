-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-01-19 18:48:43
-- 服务器版本： 5.7.28-0ubuntu0.18.04.4
-- PHP 版本： 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `NEDB`
--

-- --------------------------------------------------------

--
-- 表的结构 `OJ`
--

CREATE TABLE `OJ` (
  `ID` int(11) NOT NULL,
  `URL` text NOT NULL,
  `SCHOOL_ID` text NOT NULL,
  `SCH_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `MAJOR_ID` text NOT NULL,
  `MAJ_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `BEGIN` date NOT NULL,
  `END` date NOT NULL,
  `TERM` enum('1-1','1-2','1-3','2-1','2-2','2-3','3-1','3-2','3-3','4-1','4-2','4-3','5-1','5-2','5-3','0-0') NOT NULL,
  `STU_NUM` int(11) NOT NULL,
  `OJ_TYPE` enum('SPOJ','MOOJ') NOT NULL,
  `PUB_URL` text NOT NULL,
  `APP_URL` text NOT NULL,
  `CLA` tinyint(1) NOT NULL,
  `CODE` tinyint(1) NOT NULL,
  `LAN` text NOT NULL,
  `STAT` tinyint(1) NOT NULL,
  `GRD` tinyint(1) NOT NULL,
  `MSC` tinyint(1) NOT NULL,
  `WSC` tinyint(1) NOT NULL,
  `SEX` tinyint(1) NOT NULL,
  `LOC` tinyint(1) NOT NULL,
  `KNO` tinyint(1) NOT NULL,
  `SPJ` tinyint(1) NOT NULL,
  `LOG` text NOT NULL,
  `USER` text NOT NULL,
  `TEST` text NOT NULL,
  `PROBLEM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `OJ`
--

INSERT INTO `OJ` (`ID`, `URL`, `SCHOOL_ID`, `SCH_NAME`, `MAJOR_ID`, `MAJ_NAME`, `BEGIN`, `END`, `TERM`, `STU_NUM`, `OJ_TYPE`, `PUB_URL`, `APP_URL`, `CLA`, `CODE`, `LAN`, `STAT`, `GRD`, `MSC`, `WSC`, `SEX`, `LOC`, `KNO`, `SPJ`, `LOG`, `USER`, `TEST`, `PROBLEM`) VALUES
(5, 'http://share.bmeonline.cn/NEDB/oj-005', '10286', '东南大学', '0807', '电子信息类', '2019-10-09', '2020-01-01', '1-1', 26, 'SPOJ', '', 'http://share.bmeonline.cn/admin-and-development/oj-p2s', 1, 1, 'C++', 0, 1, 1, 1, 0, 0, 1, 0, 'http://share.bmeonline.cn/NEDB/oj-005/raw/master/LOG.csv', 'http://share.bmeonline.cn/NEDB/oj-005/raw/master/USER.csv', 'http://share.bmeonline.cn/NEDB/oj-005/raw/master/TEST.csv', 'http://share.bmeonline.cn/NEDB/oj-005/raw/master/PROBLEM.csv');

--
-- 转储表的索引
--

--
-- 表的索引 `OJ`
--
ALTER TABLE `OJ`
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
