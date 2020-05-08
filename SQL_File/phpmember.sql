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
-- 資料庫： `phpmember`
--

-- --------------------------------------------------------

--
-- 資料表結構 `memberdata`
--

DROP TABLE IF EXISTS `memberdata`;
CREATE TABLE IF NOT EXISTS `memberdata` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_passwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_sex` enum('男','女') COLLATE utf8_unicode_ci NOT NULL,
  `m_birthday` date DEFAULT NULL,
  `m_level` enum('admin','member') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `m_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_login` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `m_logintime` datetime DEFAULT NULL,
  `m_jointime` datetime NOT NULL,
  PRIMARY KEY (`m_id`),
  UNIQUE KEY `m_username` (`m_username`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `memberdata`
--

INSERT INTO `memberdata` (`m_id`, `m_name`, `m_username`, `m_passwd`, `m_sex`, `m_birthday`, `m_level`, `m_email`, `m_url`, `m_phone`, `m_address`, `m_login`, `m_logintime`, `m_jointime`) VALUES
(1, '系統管理員', 'admin', '$2y$10$FO70lc.3/vTeE0Vaf7O3Jes.UArylzLnnxfZffTF7410vndnvhScm', '男', NULL, 'admin', NULL, NULL, NULL, NULL, 22, '2016-09-10 11:36:30', '2008-10-20 16:36:15'),
(2, '張惠玲', 'elven', '$2y$10$YdUhOvUTvwK5oWp/i3LafOd2ImwsE/85YmmoY2konsxdmMSsvczFO', '女', '1987-04-05', 'member', 'elven@superstar.com', '', '0966765556', '台北市濟洲北路12號2樓', 12, '2016-08-29 11:44:33', '2008-10-21 12:03:12'),
(3, '彭建志', 'jinglun', '$2y$10$WqB2bnMSO/wgBiHSOBV2iuLbrUCsp8VmNJdK2AyIW6IANUL9jeFjC', '男', '1987-07-01', 'member', 'jinglun@superstar.com', '', '0918181111', '台北市敦化南路93號5樓', 0, NULL, '2008-10-21 12:06:08'),
(4, '謝耿鴻', 'sugie', '$2y$10$6uWtdYATI3b/wMRk.AaqIei852PLf.WjeKm8X.Asl0VTmpxCkqbW6', '男', '1987-08-11', 'member', 'edreamer@gmail.com', '', '0914530768', '台北市中央路201號7樓', 2, '2016-08-29 14:03:53', '2008-10-21 12:06:08'),
(5, '蔣志明', 'shane', '$2y$10$pWefN9xkeXOKCx59GF6ZJuSGNnIFBY4q/DCmCvAwOFtnoTCujb3Te', '男', '1984-06-20', 'member', 'shane@superstar.com', NULL, '0946820035', '台北市建國路177號6樓', 0, NULL, '2008-10-21 12:06:08'),
(6, '王佩珊', 'ivy', '$2y$10$RPrt3YfaSs0d82inYIK6he.JaPqOrisWMqASuxN5g62EyRio.lyEa', '女', '1988-02-15', 'member', 'ivy@superstar.com', NULL, '0920981230', '台北市忠孝東路520號6樓', 0, NULL, '2008-10-21 12:06:08'),
(7, '林志宇', 'zhong', '$2y$10$pee.jvO6f4sSKahlc4cLLO9RUMyx8aphyqkSUdwHTNSy4Ax7YPdpq', '男', '1987-05-05', 'member', 'zhong@superstar.com', NULL, '0951983366', '台北市三民路1巷10號', 0, NULL, '2008-10-21 12:06:08'),
(8, '李曉薇', 'lala', '$2y$10$oiC9CaGiOdWu.6w5b3.b/Ora6fSuh8Lrbj8Kg5BUPT15O3QptksQS', '女', '1985-08-30', 'member', 'lala@superstar.com', NULL, '0918123456', '台北市仁愛路100號', 0, NULL, '2008-10-21 12:06:08'),
(9, '賴秀英', 'crystal', '$2y$10$8Q0.JEGILRM91qAlMmWnB.wpcY.rJEbgNgV5ntIlqZmdGaHPwikji', '女', '1986-12-10', 'member', 'crystal@superstar.com', NULL, '0907408965', '台北市民族路204號', 0, NULL, '2008-10-21 12:06:08'),
(10, '張雅琪', 'peggy', '$2y$10$RNqnXDNHkcTI2Zh2bkTKnOesz0FLXhihhT8ZL8OHoMeYSq7jsILMi', '女', '1988-12-01', 'member', 'peggy@superstar.com', NULL, '0916456723', '台北市建國北路10號', 0, NULL, '2008-10-21 12:06:08'),
(11, '陳燕博', 'albert', '$2y$10$seMLwqcQRQiWa0jMBAcMMertjLbrPLRGNZoKc0NZ5FxTwWha7W3lm', '男', '1993-08-10', 'member', 'albert@superstar.com', NULL, '0918976588', '台北市北環路2巷80號', 0, NULL, '2008-10-21 12:06:08'),
(13, '黃信溢', 'dkdreamer', '$2y$10$Fx0rLJtV5mVtJzAJ52B/hup1AmviTe7Ciu0mtWBCZAkYC0qmg6OJy', '女', '1987-04-05', 'member', 'edreamer@gmail.com', '', '955648889', '愛蘭里梅村路213巷8號', 1, '2016-08-29 17:42:24', '2016-08-29 17:41:46'),
(124, '6', 'a123456', '$2y$10$ZXqBOt66sEVVN2PEezJ39OovvsWh.uFBMfxFthMNj75dsxg2oI4O6', '女', '2015-12-12', 'member', '16@163.com', '', '', '', 69, '2020-05-08 14:27:47', '2017-06-19 11:52:05'),
(125, '545', 'w56464664', '$2y$10$Djh0TL1rlBnfa0Y6/ZplRejmyp6sTtgNE1LfpacPub7I0vgI8mEVi', '女', '2015-12-12', 'member', 'vev@123.com', '', '', '', 0, NULL, '2017-06-19 15:08:46'),
(126, '51', 'a1345646', '$2y$10$bELJcX32hfDQKRPh.XgtqOA5Mu3uXqOV1QI78oU3eqcCPWbzETaGu', '女', '2015-02-03', 'member', '6565@146.com', '', '', '', 0, NULL, '2017-06-19 15:11:23'),
(127, '511', 'a789456123', '$2y$10$yzyMhAEExmD9SRwfEU0UDezsbvKFx3FKYRCfy0QbmojWbYF.nxYXy', '女', '2015-02-03', 'member', '6565@146.com', '', '', '', 1, '2017-06-19 15:14:41', '2017-06-19 15:13:15'),
(128, '464646', 'a789456124', '$2y$10$u4wdbphztDyKIrAJSWE/G.xw3N.DPqmNR.KMxUFU52NU4Hgd6W3hO', '女', '2015-02-02', 'member', '64@153.com', '', '', '', 0, NULL, '2017-06-19 15:15:38'),
(129, 'reg', 'q123456', '$2y$10$B7FaBwH.eDnaQlq1CU.aV.qEiTam74sMdtkOPOeh31qTGwIc2FIBq', '女', '2015-12-12', 'member', '545@6.com', '', '', '', 5, '2017-06-21 09:15:14', '2017-06-21 08:27:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
