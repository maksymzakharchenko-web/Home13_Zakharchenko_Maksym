-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 25 2020 г., 04:18
-- Версия сервера: 5.7.28-0ubuntu0.18.04.4
-- Версия PHP: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Registration`
--

CREATE TABLE `Registration` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Repeat_pass` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Registration`
--

INSERT INTO `Registration` (`id`, `Username`, `Email`, `Password`, `Repeat_pass`, `First_name`, `Last_name`, `Age`, `Gender`) VALUES
(1, 'Maksym', 'max@mail.ru', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Maksym', 'Zakharchenko', 26, 'Man'),
(2, 'Ivan', 'ivan@mail.ru', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Ivan', 'Ivanov', 20, 'Man'),
(3, 'Kek', 'kek@mail.ru', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Kek', 'Kekovich', 99, 'Woman');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
