-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Апр 17 2026 г., 21:41
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ylaro_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `author_id`, `name`, `text`, `created_at`, `img`) VALUES
(1, 1, 'Чето', 'Чето (итал. Ceto) — коммуна в Италии, располагается в провинции Брешиа области Ломбардия.', '2026-03-20 11:01:11', 'uploads/Panorama_di_Ceto_(Foto_Luca_Giarelli).jpg'),
(2, 2, 'Ломбардия', 'Ломбардия - область на севере Италии.\r\n\r\n', '2026-03-20 11:01:11', 'uploads/imh1.jpg'),
(3, 3, 'Брешиа (провинция)', 'Брешиа — провинция в Италии, в регионе Ломбардия.', '2026-04-17 21:37:30', 'uploads/img325.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_confirmed` tinyint(1) DEFAULT '0',
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `is_confirmed`, `role`, `password_hash`, `auth_token`, `created_at`) VALUES
(1, 'Nick', 'odinmail@mail.com', 1, 'user', 'dfgdfgdfg', 'dfgdfgdfg', '2026-03-20 10:20:13'),
(2, 'root', 'rootmail@mail.com', 0, 'admin', 'toor', 'sdfsdf', '2026-03-20 10:24:49'),
(3, 'user1', 'usermail@mail.ru', 1, 'user', '$2y$10$jMBrp0KFM8POjEqHrTeCOOsKke2a5hWfXL55lGYWPPCxjgLo1ty8m', '316efadeb61f0c71c15ecc11a7b5f37c9bf28a47db639ae5cf5e4a4f8def712d262dd2a8eed7ad48a52e95c99ba6884231bc41459715501417868213', '2026-04-17 21:07:09'),
(4, 'Ylaro', 'ylaro@gmail.com', 1, 'user', '$2y$10$xiSU6uupfqKHeznUSIUKAuj/rLdBej6CiaZjxMu8u6clmFopADs0K', '8744c88c019aaba19d552cd9c3219778f983617ac894a781e831663d96b5f61e033cca0fe54addaff2c1146909e6db934d41c286775ce727f5c7020d', '2026-04-17 21:16:03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
