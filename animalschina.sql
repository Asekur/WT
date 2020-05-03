-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2020 г., 13:42
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yearchina`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animalschina`
--

CREATE TABLE `animalschina` (
  `year` int(4) UNSIGNED NOT NULL,
  `animal_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `animalschina`
--

INSERT INTO `animalschina` (`year`, `animal_name`) VALUES
(2016, 'Monkey'),
(2017, 'Rooster'),
(2018, 'Dog'),
(2019, 'Pig'),
(2020, 'Rat'),
(2021, 'Bull'),
(2022, 'Tiger'),
(2023, 'Rabbit'),
(2024, 'Dragon'),
(2025, 'Snake'),
(2026, 'Horse'),
(2027, 'Sheep');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animalschina`
--
ALTER TABLE `animalschina`
  ADD PRIMARY KEY (`year`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animalschina`
--
ALTER TABLE `animalschina`
  MODIFY `year` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2028;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
