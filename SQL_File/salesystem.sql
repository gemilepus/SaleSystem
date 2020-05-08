-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 
-- 伺服器版本: 5.7.23
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `salesystem`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cuinfo`
--

DROP TABLE IF EXISTS `cuinfo`;
CREATE TABLE IF NOT EXISTS `cuinfo` (
  `CU_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_Name` varchar(26) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_Tel` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_Mtel` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `CU_Email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `CU_Staf` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_Adrs` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_Txno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CU_No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `cuinfo`
--

INSERT INTO `cuinfo` (`CU_No`, `CU_Name`, `CU_Tel`, `CU_Mtel`, `CU_Email`, `CU_Staf`, `CU_Adrs`, `CU_Txno`) VALUES
('00001', 'Acer', '4999848', '4984894', 'Acer@561.com', '阿基師', '菲律賓', '6464484'),
('00002', 'Asus', '084464593', '094648548', 'Asus@565.com', '水蛙師', '呆丸', '54484884'),
('00004', 'Apple', '27275222', '671675115', 'Apple@169.com', '戈登拉姆齊', '英國', '54646544'),
('00003', 'TOSHIBA', '08646460', '09544545', 'TOSHIBA@156.com', '江振誠', '新加坡', '15615611'),
('00005', 'Fujitus', '023333333', '645646444', 'Fujitus@789.com', '松久信幸', '日本', '1515615'),
('00006', 'Dell', '045840488', '516651561', 'Dell@156.com', '阿基師', '米國', '16161561');

-- --------------------------------------------------------

--
-- 資料表結構 `cuquout`
--

DROP TABLE IF EXISTS `cuquout`;
CREATE TABLE IF NOT EXISTS `cuquout` (
  `PD_No` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PD_Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PD_Pr` int(10) NOT NULL,
  `PD_Note` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`PD_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cuquout`
--

INSERT INTO `cuquout` (`PD_No`, `PD_Name`, `PD_Pr`, `PD_Note`) VALUES
('30001', 'iPad', 10000, ''),
('00001', 'iMac', 25000, '12吋'),
('00002', 'iPhone', 29999, '7'),
('00003', 'iPod', 4999, ''),
('00004', 'Macbook', 35000, ''),
('00005', 'iCar', 2200000, ''),
('00006', 'iPhone4', 10000, ''),
('00007', 'iPhone4S', 11000, ''),
('00008', 'iPhone5', 20000, ''),
('00009', 'iPhone6', 15000, ''),
('00010', 'iPhone6S', 16000, '');

-- --------------------------------------------------------

--
-- 資料表結構 `rcdtl`
--

DROP TABLE IF EXISTS `rcdtl`;
CREATE TABLE IF NOT EXISTS `rcdtl` (
  `CS_Blno` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CS_Date` date DEFAULT NULL,
  `CS_Amt` bigint(20) DEFAULT '0',
  `RD_Amt` bigint(20) DEFAULT '0',
  `TR_Note` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UP_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CS_Blno`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `rcdtl`
--

INSERT INTO `rcdtl` (`CS_Blno`, `CU_No`, `CS_Date`, `CS_Amt`, `RD_Amt`, `TR_Note`, `UP_Time`) VALUES
('', '00001', '0000-00-00', 10000, 0, 'T', '2018-09-12 06:22:15');

-- --------------------------------------------------------

--
-- 資料表結構 `rcpay`
--

DROP TABLE IF EXISTS `rcpay`;
CREATE TABLE IF NOT EXISTS `rcpay` (
  `CU_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `PR_Upamt` bigint(20) DEFAULT '0',
  `CR_Spamt` bigint(20) DEFAULT '0',
  `CR_Csamt` bigint(20) DEFAULT '0',
  `CR_Upamt` bigint(20) DEFAULT '0',
  `UP_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CU_No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `rcpay`
--

INSERT INTO `rcpay` (`CU_No`, `PR_Upamt`, `CR_Spamt`, `CR_Csamt`, `CR_Upamt`, `UP_Time`) VALUES
('00001', 8000100, 8000000, 10000, 15990100, '2018-09-12 06:22:15'),
('00002', 7700000, 0, 0, 7700000, '2017-06-21 00:55:24'),
('00003', 50000, 500000, 0, 550000, '2018-09-12 06:22:15'),
('00004', 4900001, 0, 0, 4900001, '2017-06-21 00:55:24'),
('00005', 13888888, 220000, 0, 14108888, '2018-09-12 06:22:15'),
('00006', 0, 0, 0, 0, '2018-09-12 07:01:00');

-- --------------------------------------------------------

--
-- 資料表結構 `spbill`
--

DROP TABLE IF EXISTS `spbill`;
CREATE TABLE IF NOT EXISTS `spbill` (
  `SP_Blno` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `SP_Date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UP_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`SP_Blno`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `splist`
--

DROP TABLE IF EXISTS `splist`;
CREATE TABLE IF NOT EXISTS `splist` (
  `SP_Blno` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CU_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PD_No` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `SP_Qty` int(11) DEFAULT '0',
  `TR_Note` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UP_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`SP_Blno`,`PD_No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `splist`
--

INSERT INTO `splist` (`SP_Blno`, `CU_No`, `PD_No`, `SP_Qty`, `TR_Note`, `UP_Time`) VALUES
('00001', '00001', '00002', 500, 'T', '2018-09-12 06:02:37'),
('', '00003', '00002', 50, 'T', '2018-09-12 06:22:15'),
('', '00005', '00004', 22, 'T', '2018-09-12 06:22:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
