-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-03 03:35:05
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
(42, 28, 'ggg', 'fff', '皮膚のトラブル', '2023-01-02 03:31:00'),
(43, 31, 'aaaa', 'iiii', '肝臓のトラブル', '2023-01-03 02:09:46'),
(44, 27, 'てすと', 'てすとてすと', '下痢,便秘,皮膚のトラブル', '2023-01-03 02:14:43');

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
(27, '02.jpg', '2023-01-01 14:47:19'),
(28, '13309_1.jpeg', '2023-01-01 14:47:25'),
(29, '9e238a933892ad1ce2e4c83d2ddc848e (1).jpg', '2023-01-01 14:47:31'),
(31, 'final-1.jpg', '2023-01-01 14:47:47'),
(33, 'P1050082.jpg', '2023-01-03 02:07:27');

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
(3, '米澤真里奈', '123', '1234'),
(6, '米澤真里奈', '123', '1234'),
(7, '米澤真里奈', '123', '1234'),
(8, '米澤真里奈', '123', '1234'),
(9, '米澤真里奈', '123', '1234'),
(11, '米澤真里奈', '123', '123456');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=45;

--
-- テーブルの AUTO_INCREMENT `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- テーブルの AUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
