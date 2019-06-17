-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2019 г., 15:27
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lev13`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `marka` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `bodywork` varchar(30) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `engine` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `Pcylinders` varchar(30) NOT NULL,
  `Ncylinders` int(11) NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `speed` int(11) NOT NULL,
  `acceleration` int(11) NOT NULL,
  `highway` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `data` date NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `marka` (`marka`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `marka`, `model`, `bodywork`, `length`, `width`, `height`, `engine`, `power`, `Pcylinders`, `Ncylinders`, `fuel`, `speed`, `acceleration`, `highway`, `city`, `year`, `data`, `img`) VALUES
(1, 'Aston Martin', 'DB9 Coupe', 'Купе', 4710, 1875, 1270, 5935, 477, 'V-образный двигатель', 12, 'АИ-95', 306, 5, 12, 25, 2009, '2013-04-20', '/images/auto/aston.png'),
(2, 'Audi', 'A8 L W12', 'Седан', 5267, 1949, 1462, 6299, 500, 'W-образный двигатель', 12, 'АИ-95', 250, 5, 9, 18, 2012, '2013-04-20', '/images/auto/audi.png'),
(3, 'Bentley', 'Mulsanne II', 'Седан', 5575, 2208, 1521, 6752, 505, 'V-образный двигатель', 8, 'АИ-98', 296, 5, 12, 26, 2013, '2013-04-20', '/images/auto/bentley.png'),
(4, 'BMW', '7er (F01/F02)', 'Седан', 5212, 1902, 1478, 4395, 407, 'V-образный двигатель', 8, 'АИ-98', 250, 5, 13, 18, 2012, '2013-04-20', '/images/auto/bmw7.png'),
(5, 'Bugatti', 'EB 16.4 Veyron', 'Купе', 4465, 2000, 1205, 7993, 1200, 'W-образный двигатель', 16, 'АИ-98', 415, 3, 15, 37, 2013, '2013-04-20', '/images/auto/bugatti.png'),
(6, 'Cadillac', 'Escalade III', 'Внедорожник', 5144, 2007, 1887, 6156, 409, 'V-образный двигатель', 8, 'АИ-95', 170, 7, 12, 23, 2011, '2013-04-20', '/images/auto/cadillac.png'),
(7, 'Chevrolet', 'Corvette Coupe (Z06/C6)', 'Купе', 4435, 1845, 1245, 7011, 513, 'V-образный двигатель', 8, 'АИ-95', 322, 3, 11, 17, 2006, '2013-04-20', '/images/auto/corvette.png');

-- --------------------------------------------------------

--
-- Структура таблицы `benzin`
--

CREATE TABLE IF NOT EXISTS `benzin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `benzin`
--

INSERT INTO `benzin` (`id`, `type`) VALUES
(1, 'АИ-91'),
(2, 'АИ-92'),
(3, 'АИ-95'),
(4, 'АИ-98');

-- --------------------------------------------------------

--
-- Структура таблицы `bodywork`
--

CREATE TABLE IF NOT EXISTS `bodywork` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `bodywork`
--

INSERT INTO `bodywork` (`id`, `type`) VALUES
(1, 'Седан'),
(2, 'Купе'),
(3, 'Хэтчбек'),
(4, 'Универсал'),
(5, 'Внедорожник');

-- --------------------------------------------------------

--
-- Структура таблицы `marki`
--

CREATE TABLE IF NOT EXISTS `marki` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `marka` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `marka` (`marka`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `marki`
--

INSERT INTO `marki` (`id`, `marka`) VALUES
(1, 'Aston Martin'),
(2, 'Audi'),
(3, 'Bentley'),
(4, 'BMW'),
(5, 'Bugatti'),
(6, 'Cadillac'),
(7, 'Chevrolet'),
(8, 'Chrysler'),
(9, 'Maserati'),
(10, 'Mercedes-benz');

-- --------------------------------------------------------

--
-- Структура таблицы `ncylinders`
--

CREATE TABLE IF NOT EXISTS `ncylinders` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `number` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `ncylinders`
--

INSERT INTO `ncylinders` (`id`, `number`) VALUES
(1, 3),
(2, 4),
(3, 5),
(4, 6),
(5, 8),
(6, 10),
(7, 12),
(8, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `pcylinders`
--

CREATE TABLE IF NOT EXISTS `pcylinders` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `pcylinders`
--

INSERT INTO `pcylinders` (`id`, `type`) VALUES
(1, 'Рядный двигатель'),
(2, 'V-образный двигатель'),
(3, 'Оппозитный двигатель'),
(4, 'VR-двигатель'),
(5, 'W-образный двигатель');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'lev13', 'd41d8cd98f00b204e9800998ecf842'),
(2, 'LEV13', '827ccb0eea8a706c4c34a16891f84e'),
(3, '', 'd41d8cd98f00b204e9800998ecf842'),
(4, '', 'd41d8cd98f00b204e9800998ecf842'),
(5, 'vertigo', '827ccb0eea8a706c4c34a16891f84e'),
(6, 'vertigo', '202cb962ac59075b964b07152d234b'),
(7, 'vertigo', '827ccb0eea8a706c4c34a16891f84e'),
(8, 'vertigo', '827ccb0eea8a706c4c34a16891f84e'),
(9, 'lev13', '827ccb0eea8a706c4c34a16891f84e'),
(10, 'lev13', '827ccb0eea8a706c4c34a16891f84e'),
(11, 'lev13', '827ccb0eea8a706c4c34a16891f84e'),
(12, 'LEV13', '827ccb0eea8a706c4c34a16891f84e'),
(13, 'LEV13', '202cb962ac59075b964b07152d234b'),
(14, 'LEV13', '827ccb0eea8a706c4c34a16891f84e'),
(15, 'LEV13', '827ccb0eea8a706c4c34a16891f84e'),
(16, 'lev133333', 'bdffaa51d8720d8a778b1d4398159e');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `marki` (`marka`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
