-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 06 2017 г., 17:43
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php1_lesson9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `fileType` varchar(3) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `fileType`, `title`) VALUES
(1, 'jpg', 'Картинка 1'),
(2, 'jpg', 'Картиночка 2'),
(3, 'jpg', 'test'),
(4, 'png', 'test2');

-- --------------------------------------------------------

--
-- Структура таблицы `pageContent`
--

CREATE TABLE IF NOT EXISTS `pageContent` (
  `id` int(11) NOT NULL,
  `contentName` varchar(10) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pageContent`
--

INSERT INTO `pageContent` (`id`, `contentName`, `text`) VALUES
(1, 'index', '        Добро пожаловать в наш славный город Кикиморовск!!!    ');

-- --------------------------------------------------------

--
-- Структура таблицы `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL,
  `dateStart` datetime NOT NULL,
  `dateFinish` datetime NOT NULL,
  `finishCity` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trains`
--

INSERT INTO `trains` (`id`, `dateStart`, `dateFinish`, `finishCity`) VALUES
(1, '2017-01-08 00:35:00', '2017-01-09 02:25:00', 'Мишка'),
(2, '2017-01-09 11:00:00', '2017-01-09 19:20:00', 'Резков 2'),
(4, '2017-01-22 23:07:00', '2017-01-23 20:00:00', 'Леон'),
(5, '2017-01-06 16:56:49', '2017-01-06 16:56:49', 'Романов');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pageContent`
--
ALTER TABLE `pageContent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pageContent`
--
ALTER TABLE `pageContent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
