-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-11-12 11:44
-- 서버 버전: 10.4.11-MariaDB
-- PHP 버전: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `skill`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `boards`
--

CREATE TABLE `boards` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `writer` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `boards`
--

INSERT INTO `boards` (`id`, `title`, `content`, `writer`, `date`, `image`) VALUES
(1, '안녕하세요', 'dasd', 'gondr', '2020-11-03', ''),
(2, '안녕하세요', '213123', 'gondr', '2020-11-03', ''),
(3, '안녕하세요', 'asdf', 'gondr', '2020-11-03', ''),
(4, '안녕하세요', 'vcxvw', 'gondr', '2020-11-03', ''),
(5, '안녕하세요', 'acvxz', 'gondr', '2020-11-03', ''),
(6, '안녕하세요', 'wer', 'gondr', '2020-11-03', ''),
(7, '안녕하세요', 'fhdac', 'gondr', '2020-11-03', ''),
(8, '안녕하세요', 'erxcafd', 'gondr', '2020-11-03', ''),
(9, '안녕하세요123132', 'weqwts', 'LeeChangYeon', '2020-11-04', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `profile`) VALUES
('abc', '이로롱', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', ''),
('ckddus', '이창연', '*A4B6157319038724E3560894F7F932C8886EBFCF', ''),
('dlckddus', '이창연', '*A4B6157319038724E3560894F7F932C8886EBFCF', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
