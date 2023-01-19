-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 19:27:32
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
-- テーブルの構造 `ankert`
--

CREATE TABLE `ankert` (
  `id` int(20) NOT NULL,
  `namea` text NOT NULL,
  `address` text NOT NULL,
  `tel` int(20) NOT NULL,
  `dogname` text NOT NULL,
  `koumoku` text NOT NULL,
  `naiyou` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `syokuyoku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ankert`
--

INSERT INTO `ankert` (`id`, `namea`, `address`, `tel`, `dogname`, `koumoku`, `naiyou`, `date`, `syokuyoku`) VALUES
(23, '米澤', 'test', 11, 'test', 'testtest', 'testtest', '2023-01-12 17:24:29', ''),
(31, '田中', 'testtest', 111, 'test', 'test', 'test', '2023-01-19 18:09:12', 'すぐに完食する');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ankert`
--
ALTER TABLE `ankert`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ankert`
--
ALTER TABLE `ankert`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
