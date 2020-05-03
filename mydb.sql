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
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `competitions`
--

CREATE TABLE `competitions` (
  `ID` int(8) UNSIGNED NOT NULL,
  `name_competition` varchar(20) NOT NULL,
  `stable_winner` varchar(20) NOT NULL,
  `amount_medals` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `competitions`
--

INSERT INTO `competitions` (`ID`, `name_competition`, `stable_winner`, `amount_medals`) VALUES
(1, '\"Hello\"', 'Ratomka', 23),
(2, '\"Klause\"', 'Ratomka', 15),
(3, '\"The winner\"', 'Urojainiy', 41);

-- --------------------------------------------------------

--
-- Структура таблицы `stables`
--

CREATE TABLE `stables` (
  `ID` int(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `heads` int(8) UNSIGNED NOT NULL,
  `establishment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stables`
--

INSERT INTO `stables` (`ID`, `name`, `heads`, `establishment`) VALUES
(1, 'Ratomka', 1209, '1990-04-03'),
(2, 'Urojainiy', 131, '2000-05-05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `stables`
--
ALTER TABLE `stables`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `competitions`
--
ALTER TABLE `competitions`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `stables`
--
ALTER TABLE `stables`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
