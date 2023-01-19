-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 19:27:41
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `imageposting`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `image_id` int(11) NOT NULL COMMENT '画像ID',
  `comment` varchar(255) NOT NULL COMMENT 'コメント',
  `comment2` varchar(255) NOT NULL,
  `symptoms` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '作成日'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `image_id`, `comment`, `comment2`, `symptoms`, `create_date`) VALUES
(52, 40, '.鮭\r\n・いも\r\n・たまご', '・きる\r\n・ゆでる', '下痢,肝臓のトラブル', '2023-01-05 16:24:14'),
(53, 39, '・とまと\r\n・大根\r\n・ブロッコリー', '・ゆでる\r\n・もる', '泌尿器のトラブル,免疫サポート', '2023-01-05 16:24:56'),
(54, 33, '・卵\r\n・鶏肉', '・ゆでる\r\n・もる', '皮膚のトラブル,心臓のトラブル', '2023-01-05 16:25:29'),
(55, 31, '・人参\r\n・大根', '・煮る\r\n・ゆでる', '皮膚のトラブル,肝臓のトラブル', '2023-01-05 16:25:52'),
(56, 28, '・白菜\r\n・大根', '・ゆでる\r\n・もる', '便秘,免疫サポート', '2023-01-05 16:26:16'),
(57, 31, 'gggggggg', 'ggggggg', '下痢,便秘', '2023-01-07 04:06:55'),
(58, 39, 'ccc', 'cccc', '下痢,便秘', '2023-01-07 04:09:52'),
(59, 33, 'ｈｈｈｈ', 'ｈｈｈｈ', '下痢,皮膚のトラブル', '2023-01-07 04:47:32');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
