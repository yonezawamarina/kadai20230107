-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 19:27:52
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
(12, '田中', '12345', '12345'),
(14, '鈴木', '12', '123'),
(39, 'ppp', 'pp', 'pp'),
(40, 'ｈｈｈ', 'ｈｈ', 'ｈｈ'),
(41, 'たかはし', '５５', '５５'),
(42, 'kk', 'kk', 'kk'),
(44, 'test', 'hh', 'hh'),
(45, 'ｂｂ', 'ｂｂ', 'ｂｂ'),
(46, 'gg', 'gg', 'gg'),
(47, 'bbbb', 'bbbb', 'bbbb'),
(48, 'nnnn', 'nnn', 'nnnn'),
(49, 'nnnn', 'nnn', 'nnnn'),
(50, 'kkkk', 'kkkk', 'kkkk'),
(51, 'llll', 'llll', 'llll'),
(52, 'pppp', 'pppp', 'pppp'),
(53, 'nnnn', 'nnnn', 'nnnn'),
(55, 'uu', 'uu', 'uu'),
(58, 'nnn', 'nn', 'nn'),
(60, 'いとう', '666', '666'),
(61, '佐藤', '777', '777'),
(62, 'ppp', 'ppp', 'ppp'),
(63, 'rrr', 'rrr', 'rrr');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
