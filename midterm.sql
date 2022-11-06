-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-11-06 09:49:58
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `midterm`
--

-- --------------------------------------------------------

--
-- 資料表結構 `shopping cart`
--

CREATE TABLE `shopping cart` (
  `ID` smallint(5) UNSIGNED NOT NULL,
  `commodity` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `inventory` int(20) NOT NULL DEFAULT 0,
  `cart` int(11) NOT NULL DEFAULT 0,
  `checkout` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shopping cart`
--

INSERT INTO `shopping cart` (`ID`, `commodity`, `price`, `inventory`, `cart`, `checkout`) VALUES
(1, '檸檬塔', 80, 100, 0, 0),
(2, '千層蛋糕', 150, 120, 0, 0),
(3, '泡芙', 40, 80, 0, 0),
(4, '可麗露', 60, 150, 0, 0),
(5, '生巧克力', 200, 50, 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `shopping cart`
--
ALTER TABLE `shopping cart`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopping cart`
--
ALTER TABLE `shopping cart`
  MODIFY `ID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
