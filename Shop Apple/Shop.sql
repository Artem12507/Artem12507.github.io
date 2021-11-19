-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 16 2021 р., 19:36
-- Версія сервера: 10.4.18-MariaDB
-- Версія PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `onlineshopcar`
--

-- --------------------------------------------------------

--
-- Структура таблиці `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `owner`
--

INSERT INTO `owner` (`id`, `name`, `surname`, `gmail`, `phone`, `city`) VALUES
(39, 'erger', 'erger', 'erger', 32423, 'ergreg');

-- --------------------------------------------------------

--
-- Структура таблиці `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` bigint(20) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `cost`, `img`) VALUES (
  (467, 'MacBook Pro 16', 100000, '16pro.png'),
  (468, 'MacBook Air 13', 30000, 'air 13.png'),
  (469, 'Iphone SE 2020', 11000, 'se.png'),
  (470, 'Iphone 13 Pro', 50000, '13pro.png'),
  (471, 'Iphone 11', 2000, '11.png'),
)
--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблиці `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
