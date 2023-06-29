-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2023 г., 01:26
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `glav`
--

CREATE TABLE `glav` (
  `id` int UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `publish_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `glav`
--

INSERT INTO `glav` (`id`, `filename`, `text`, `publish_time`) VALUES
(1, 'js.png', 'первый проект1', '2023-06-20 17:50:50'),
(3, 'php.png', 'второй проект2', '2023-06-21 17:50:50'),
(4, 'php.png', 'третий проект3', '2023-06-22 17:50:50'),
(5, 'js.png', 'четвертый проект4', '2023-06-23 17:50:50'),
(6, 'test.png', 'пятый проект5', '2023-06-24 17:50:50'),
(7, 'test.png', 'шестой проект6', '2023-06-25 17:50:50'),
(8, 'php.png', 'седьмой проект7', '2023-06-26 20:40:50'),
(9, 'test.png', 'восьмой проект8', '2023-06-27 10:50:50'),
(10, 'js.png', 'девятый проект9', '2023-06-27 17:50:50');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `pass`) VALUES
(13, 'sanja', 'doc', '674033583816e73167b0ca098ca0c65a'),
(3, 'alex', 'lex', '534b44a19bf18d20b71ecc4eb77c572f'),
(5, 'admin', 'admin1', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'ALEKSEY', 'NEALEKSEY', '5d45ab88bc13a5de0d256cb2b8dbf1d7'),
(11, 'aleksey', 'alex321', 'f8d07a83fff06d61529d83cf7d3fc6c6'),
(14, 'asd', 'asd1', '7815696ecbf1c96e6894b779456d330e'),
(19, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(18, 'asdd', 'asd2', '7815696ecbf1c96e6894b779456d330e');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `glav`
--
ALTER TABLE `glav`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `glav`
--
ALTER TABLE `glav`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
