-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 12 2022 г., 17:31
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailPassword` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `best_sellers`
--

CREATE TABLE `best_sellers` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `name`, `autor`, `tags`, `file`, `price`) VALUES
(1, 'Don\'t stop', 'None', 'Don\'t stop', 'shop9.jpg', 7),
(2, 'Fly Away', 'None', 'Fly Away', 'shop10.jpg', 7.5),
(3, 'Crow UP', 'None', 'Crow UP', 'shop11.jpg', 6.5),
(4, 'Be GOOD', 'None', 'Be GOOD', 'shop12.jpg', 7.5),
(5, 'Donuts', 'None', 'Donuts', 'shop2.jpg', 8.9);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `colors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_sellers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `autor`, `tags`, `file`, `price`, `colors`, `best_sellers`) VALUES
(1, 'Cupcake', 'None', 'Cupcake', 'shop1.jpg', 8.9, 'blue', 0),
(2, 'Donuts', 'None', 'Donuts', 'shop2.jpg', 8.9, 'red', 0),
(3, 'Ice Cream', 'None', 'Ice Cream', 'shop3.jpg', 8.9, 'purple', 0),
(4, 'Ice Cream', 'None', 'Ice Cream', 'shop4.jpg', 8.9, 'orange', 1),
(5, 'Purple Face', 'None', 'Purple Face', 'shop5.jpg', 6, 'purple', 1),
(6, 'Red Face', 'None', 'Face,Red,Red Face', 'shop6.jpg', 5, 'red', 1),
(7, 'Blue Face', 'None', 'Blue Face', 'shop7.jpg', 5, 'blue', 1),
(8, 'Green Face', 'None', 'Green Face', 'shop8.jpg', 5, 'green', 0),
(9, 'Fly Away', 'None', 'Fly Away', 'shop9.jpg', 7.5, 'blue', 0),
(10, 'Dont Stop', 'None', 'Dont Stop', 'shop10.jpg', 7, 'orange', 0),
(11, 'Grow UP', 'None', 'Grow UP', 'shop11.jpg', 6.5, 'green', 0),
(13, 'Be GOOD', 'None', 'Be GOOD', 'shop12.jpg', 7.5, 'yellow', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `best_sellers`
--
ALTER TABLE `best_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
