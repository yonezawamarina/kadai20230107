-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-05 17:59:12
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
(56, 28, '・白菜\r\n・大根', '・ゆでる\r\n・もる', '便秘,免疫サポート', '2023-01-05 16:26:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `images`
--

INSERT INTO `images` (`id`, `file_name`, `create_date`) VALUES
(28, '13309_1.jpeg', '2023-01-01 14:47:25'),
(31, 'final-1.jpg', '2023-01-01 14:47:47'),
(33, 'P1050082.jpg', '2023-01-03 02:07:27'),
(39, '02.jpg', '2023-01-05 16:22:30'),
(40, '481433bf2f522416da6e3b51045c988a-1280x820.jpg', '2023-01-05 16:22:41');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(128) NOT NULL,
  `u_id` varchar(64) NOT NULL,
  `u_pw` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `u_name`, `u_id`, `u_pw`) VALUES
(6, '米澤真里奈', '123', '1234'),
(12, '田中', '12345', '12345');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=57;

--
-- テーブルの AUTO_INCREMENT `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- テーブルの AUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
