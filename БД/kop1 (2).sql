-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2020 г., 14:56
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
-- База данных: `kop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `11`
--

CREATE TABLE `11` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_german2_ci NOT NULL,
  `cod` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `izm` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `opt1` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `opt2` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `opt3` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `poz` varchar(100) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Дамп данных таблицы `11`
--

INSERT INTO `11` (`id`, `name`, `cod`, `izm`, `opt1`, `opt2`, `opt3`, `poz`) VALUES
(5074, 'Штукатурка Cerezit CT-35 фр 35 Кароед', '681efe4e-49f8-11e8-8dbc-1c1b0d3feec4', 'шт', '560', '610', '700', '762'),
(5082, 'Шубка мех натурал. ШМН-100', '5d249536-cd95-11e6-9ce8-e03f49571bb4', 'шт', '12', '13', '14', '15'),
(5083, 'Шубка мех натурал. ШМН-150', '5d249537-cd95-11e6-9ce8-e03f49571bb4', 'шт', '14', '16', '17', '18'),
(5089, 'Шубка меховая. ШМ-250', '5d24953d-cd95-11e6-9ce8-e03f49571bb4', 'шт', '15', '17', '18', '20'),
(5097, 'Шуруп универс. 4х70 (250шт)', '46a13dbc-de6a-11e8-9c16-1c1b0d3feec4', 'кг', '230', '250', '260', '270'),
(5107, 'Щетка проволочная латунная', '76ec77fc-82c6-11ea-8758-1c1b0d3feec4', 'шт', '60', '65', '70', '75'),
(5112, 'Эксцентриковая шлифовальная машинка ЭШМ 125Э Вихрь', '87f23307-ad07-11e9-81c9-1c1b0d3feec4', 'шт', '2000', '2200', '2300', '2450'),
(5115, 'Электроды Арсенал МР-3 д.3 (1кг)', '88f579ca-490e-11e8-8dbc-1c1b0d3feec4', 'упак', '170', '180', '185', '190'),
(5117, 'Электроды Арсенал МР-3С(д4мм) 5 кг', '5d24958d-cd95-11e6-9ce8-e03f49571bb4', 'шт', '625', '635', '645', '650'),
(5119, 'Электроды УОНИ (д 3мм) 2,5кг', 'e5463de0-360a-11e7-8a5e-1c1b0d3feec4', 'шт', '330', '350', '360', '370'),
(5120, 'Электроды УОНИ (д 4мм) 5кг', '88f579e1-490e-11e8-8dbc-1c1b0d3feec4', 'шт', '480', '510', '530', '540'),
(5130, 'Эмаль для пола ПФ-266 \"Status\" красно-коричневая (5,5кг)', '9e0ddbf9-003e-11e9-acc0-1c1b0d3feec4', 'шт', '485', '510', '535', '560'),
(5144, 'Эмаль ПФ-115  серая 1,8 кг', '5d2495df-cd95-11e6-9ce8-e03f49571bb4', 'шт', '185', '190', '197', '205'),
(5153, 'Эмаль ПФ-115 \"Status\"  белая  1,8кг', '9e0ddbfa-003e-11e9-acc0-1c1b0d3feec4', 'шт', '160', '170', '180', '190'),
(5154, 'Эмаль ПФ-115 \"Status\"  серая  0,8кг', '4ca3a4c8-3f08-11e9-9fde-1c1b0d3feec4', 'шт', '88', '95', '100', '110'),
(5157, 'Эмаль ПФ-115 \"Status\" шоколадная 20кг', '6625b092-1e03-11e9-9584-1c1b0d3feec4', 'шт', '1370', '1550', '1600', '1650'),
(5174, 'Эмаль универ. RAL 3005 винно-красный 520 мл', '0cff5cb2-bf58-11e9-a871-1c1b0d3feec4', 'шт', '210', '215', '220', '220'),
(5175, 'Эмаль универ. RAL 6005 зеленый мох 520 мл', '0cff5cb3-bf58-11e9-a871-1c1b0d3feec4', 'шт', '200', '210', '215', '220'),
(5176, 'Эмаль универ. RAL 8017шоколадно-корич 520 мл', '0cff5cb4-bf58-11e9-a871-1c1b0d3feec4', 'шт', '200', '210', '215', '220'),
(5178, 'Эмаль универсальная (черная матовая) 520мл', '8779e317-485a-11e8-8dbc-1c1b0d3feec4', 'шт', '', '', '', ''),
(5179, 'этикет-лента 35*25 Цена', '66269610-7e5f-11e7-8f41-1c1b0d3feec4', 'шт', '', '', '', ''),
(5184, 'Ящик для инструмента', '5d24958e-cd95-11e6-9ce8-e03f49571bb4', 'шт', '310', '330', '340', '350');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `text` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id_chat`, `text`, `id_user`, `date`) VALUES
(221, '22', 21, '2020-09-10 11:24:27'),
(222, 'привет!!!', 21, '2020-09-10 11:25:55'),
(223, 'привет!!!', 21, '2020-09-10 11:26:22'),
(224, '1', 21, '2020-09-10 11:27:23'),
(225, '1234567', 21, '2020-09-10 11:27:40'),
(226, 'vgbbb', 21, '2020-09-10 11:30:24'),
(227, '111111111111111111', 21, '2020-09-10 11:30:28'),
(228, '', 21, '2020-09-10 11:30:32'),
(229, 'vvvvvvvvvvvvvvv', 21, '2020-09-10 11:30:36'),
(230, 'vvvv', 21, '2020-09-10 11:30:40'),
(231, 'Салют', 21, '2020-09-10 11:30:50'),
(232, 'Привет Андрей, как дела?', 25, '2020-09-10 14:39:24'),
(233, 'У меня все окей, как у вас?', 21, '2020-09-10 14:50:39'),
(234, 'Спасибки ЗАМЕЧАТЕЛЬНО!!!', 25, '2020-09-10 14:50:59');

-- --------------------------------------------------------

--
-- Структура таблицы `kor`
--

CREATE TABLE `kor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `kol` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kor`
--

INSERT INTO `kor` (`id`, `name`, `id_tovar`, `kol`, `summa`, `id_user`) VALUES
(55, 'Штукатурка Cerezit CT-35 фр 35 Кароед', 5074, 1, 762, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `soed`
--

CREATE TABLE `soed` (
  `id_zak` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `itog` int(11) NOT NULL,
  `obr` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `stat`
--

CREATE TABLE `stat` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=koi8r;

--
-- Дамп данных таблицы `stat`
--

INSERT INTO `stat` (`id`, `title`, `text`) VALUES
(1, 'Название ', 'Первая СТАТЬЯ!'),
(2, 'Название ', 'Первая СТАТЬЯ!'),
(3, '<br><h3>Я УЧУ ООП</h3>', 'Это сложно но возможно!!!');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `password`, `tel`, `email`) VALUES
(21, 'Андрей', 'nan09', '123', '89276810874', 'nan09@yandex.ru'),
(24, '222', '222', '222', '222', 'nan09@yandex.ru'),
(25, 'Света', 'sv', '123', '7777777', 'nan09@yandex.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `zak`
--

CREATE TABLE `zak` (
  `id` int(11) NOT NULL,
  `id_zak` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kol` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `itog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `11`
--
ALTER TABLE `11`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Индексы таблицы `kor`
--
ALTER TABLE `kor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `soed`
--
ALTER TABLE `soed`
  ADD PRIMARY KEY (`id_zak`);

--
-- Индексы таблицы `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zak`
--
ALTER TABLE `zak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `11`
--
ALTER TABLE `11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5185;

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT для таблицы `kor`
--
ALTER TABLE `kor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `soed`
--
ALTER TABLE `soed`
  MODIFY `id_zak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `zak`
--
ALTER TABLE `zak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
