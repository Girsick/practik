-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 23 2022 г., 23:41
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `itog`
--

CREATE TABLE `itog` (
  `iditog` int NOT NULL,
  `nameclient` varchar(100) NOT NULL,
  `tarif` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `addressclient` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `itog`
--

INSERT INTO `itog` (`iditog`, `nameclient`, `tarif`, `phone`, `addressclient`) VALUES
(1, 'Евкуров Юнусбек Баматгиреевич', 'Игровой', '+7(896) 339-9973', 'г Санкт-Петербург ул Восстания д 30');

-- --------------------------------------------------------

--
-- Структура таблицы `lichnoe`
--

CREATE TABLE `lichnoe` (
  `idclient` int NOT NULL,
  `clientnum` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` int NOT NULL,
  `itogbal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `lichnoe`
--

INSERT INTO `lichnoe` (`idclient`, `clientnum`, `name`, `balance`, `itogbal`) VALUES
(1, '0060606', 'Евкуров Юнусбек Баматгиреевич', 550, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tarifs`
--

CREATE TABLE `tarifs` (
  `idtarif` int NOT NULL,
  `nametarif` varchar(100) NOT NULL,
  `speed` varchar(100) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tarifs`
--

INSERT INTO `tarifs` (`idtarif`, `nametarif`, `speed`, `price`) VALUES
(1, 'Игровой', '800 Мб/сек', 990),
(2, 'Домашний интернет', '200 Мб/сек', 200),
(3, 'Беспонтовый', '300 Мб/сек', 300);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `itog`
--
ALTER TABLE `itog`
  ADD PRIMARY KEY (`iditog`);

--
-- Индексы таблицы `lichnoe`
--
ALTER TABLE `lichnoe`
  ADD PRIMARY KEY (`idclient`);

--
-- Индексы таблицы `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`idtarif`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `itog`
--
ALTER TABLE `itog`
  MODIFY `iditog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `lichnoe`
--
ALTER TABLE `lichnoe`
  MODIFY `idclient` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `idtarif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
