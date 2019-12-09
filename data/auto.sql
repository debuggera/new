-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2019 г., 03:54
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addit`
--

CREATE TABLE `addit` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `addit`
--

INSERT INTO `addit` (`id`, `name`) VALUES
(1, 'АБС'),
(2, 'Электростеклоподъемники'),
(3, 'Климат-контроль'),
(4, 'Подогрев сидений'),
(5, 'Люк');

-- --------------------------------------------------------

--
-- Структура таблицы `addit_for_auto`
--

CREATE TABLE `addit_for_auto` (
  `id` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_addit` int(11) NOT NULL,
  `connect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `addit_for_auto`
--

INSERT INTO `addit_for_auto` (`id`, `id_auto`, `id_addit`, `connect`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(4, 1, 5, 1),
(5, 2, 1, 1),
(6, 3, 1, 1),
(7, 3, 2, 1),
(8, 3, 3, 1),
(9, 4, 3, 4),
(10, 4, 4, 1),
(11, 5, 1, 1),
(12, 5, 2, 1),
(13, 5, 4, 1),
(14, 6, 4, 1),
(15, 6, 5, 1),
(16, 7, 1, 1),
(17, 7, 2, 1),
(18, 7, 3, 1),
(19, 7, 4, 1),
(20, 7, 5, 1),
(21, 2, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` int(11) NOT NULL,
  `additions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ads`
--

INSERT INTO `ads` (`id`, `brand`, `model`, `mileage`, `additions`, `price`, `phone`, `photo`) VALUES
(1, 'Audi', 'A4', 155000, '1,3,4,5', 799000, '9286431255', 3),
(2, 'Audi', 'A6', 35000, '2,3,4', 1950000, '9284516799', 3),
(3, 'Audi', 'A8', 158000, '1,3,4,5', 899000, '9620549875', 3),
(4, 'BMW', '3 серия', 206000, '', 630000, '9054613288', 3),
(5, 'BMW', '5 серия', 81000, '', 1199000, '9034651288', 3),
(6, 'BMW', '7 серия', 160000, '', 1150000, '9054568732', 3),
(7, 'Mercedes', 'C-klasse', 107000, '', 900000, '9058493211', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `brand_model_connect`
--

CREATE TABLE `brand_model_connect` (
  `id` int(11) NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brand_model_connect`
--

INSERT INTO `brand_model_connect` (`id`, `brand`, `model`) VALUES
(1, 'Audi', 'A4'),
(2, 'Audi', 'A6'),
(3, 'Audi', 'A8'),
(4, 'BMW', '3 серия'),
(5, 'BMW', '5 серия'),
(6, 'BMW', '7 серия'),
(7, 'Mercedes', 'C-klasse'),
(8, 'Mercedes', 'E-klasse'),
(9, 'Mercedes', 'S-klasse');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addit`
--
ALTER TABLE `addit`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `addit_for_auto`
--
ALTER TABLE `addit_for_auto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand_model_connect`
--
ALTER TABLE `brand_model_connect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addit`
--
ALTER TABLE `addit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `addit_for_auto`
--
ALTER TABLE `addit_for_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `brand_model_connect`
--
ALTER TABLE `brand_model_connect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
