-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 23 2016 г., 16:09
-- Версия сервера: 5.6.28
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `afanasev-expertphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Телефоны'),
(2, 0, 'Планшеты'),
(5, 1, 'Телефоны Samsung'),
(6, 1, 'Телефоны Apple'),
(7, 2, 'Планшеты Apple'),
(8, 2, 'Планшеты Samsung'),
(9, 2, 'Планшеты Acer');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 5, 'GT-C3560', '                        <p>Закругленные углы и окантовка  вносят стильный штрих в минималистичный дизайн телефона. Металлическая отделка смотрится  элегантно и современно. А благодаря небольшим размерам С3560 удобно лежит в руке и легко помещается в кармане.</p>\n<br />\n\n<p>Спецификации:</p>\n<ul><li>Стандарты сети GSM и EDGE : GSM (850/900/1800/1900)</li><li>Стандарт сети 3G : N/A</li><li>Стандарт сети CDMA : N/A</li><li>TD-SCDMA Band : N/A</li></ul>\n                    ', 3000, '1.png', 1),
(2, 6, 'S5570 Galaxy mini', 'Платформа\n850/900/1800/1900 МГц\nДиапазон 900/2100 МГц\nAndroid 2.2 OS\nИнтернет браузер (Android Browser)\nФизические характеристики\nВес трубки 106,6 г.\nРазмеры трубки: 110,4 x 60,6 x 12,1 мм', 7000, '2.png', 1),
(3, 7, 'GT-E2600', '<p>Тонкий и изящный дизайн телефона E2600? широкий экран и пользовательский интерфейс Paragon UX обеспечивают удобство и комфорт в использовании.  Телефон оснащен интуитивно-понятным пользовательским интерфейсом.  </p>\n<br />\n<p>Спецификации:</p>\n<ul><li>850 / 900 / 1800 / 1900 МГц GSM &amp; EDGE Band</li><li>GPRS Network&amp;Data: 850 / 900 / 1800 / 1900</li><li>EDGE Network&amp;Data: 850 / 900 / 1800 / 1900</li><li>фирменная</li><li>Интернет браузерr ( NetFront 4.2)</li><li>JAVA™ SUN CLDC HotSpot Implementation 1.1 (MIDP 2.0) Platform</li><li>SAR 0,45 Вт./кг.</li></ul>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2600ZKASER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2600ZKASER</a>', 5000, '3.png', 1),
(4, 8, 'E2530 La Fleur', '                        <ul><li>850/900/1800/1900 МГц</li><li>GPRS класс 12</li><li>EDGE Class12(только RX)</li><li>Proprietary (MMP) OS</li><li>Интернет браузер</li><li>MIDP 2,1 / CLDC 1.1</li></ul>\n\n<ul><li>Вес трубки 86 г.</li><li>Размеры трубки: 94.4 x 47.2 x 17.4 мм</li></ul>\n\n<ul><li>Стандартная батарея: до 800 мАч</li><li>До 680 мин. в режиме разговора</li></ul>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2530SRFSER">\nhttp://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-E2530SRFSER</a>\n                    ', 6000, '4.png', 1),
(5, 9, 'S3350 Chat 335', '<p>Samsung Ch@t 335 — самый тонкий QWERTY-телефон на современном рынке, чья толщина составляет всего 11,9&nbsp;мм. Обтекаемый корпус с хромированным покрытием придает модели изысканный классический вид. 2,4-дюймовый LQVGA дисплей идеально подходит для просмотра снимков и чтения длинных сообщений.</p>\n<br />\n<p>Благодаря новой, улучшенной QWERTY-клавиатуре набор текста становится еще более быстрым и удобным, как при печати на ПК. Есть возможность настраивать горячие клавиши для часто используемых приложений (например, A для будильника и т.п.).</p>\n\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-S3350HKASER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-gsm/GT-S3350HKASER</a>', 10000, '5.png', 1),
(6, 5, 'S5380 La Fleur Wave Y', 'Стандарты сети 850/900/1800/1900MHz GSM&EDGE Band\nСтандарты сети: 900/2100МГц 3G\nПоддерживаемые 3G: GPRS Network&Data :850/900/1800/1900 (Slave)\nEDGE Network&Data: стандарты сетей: 850/900/1800/1900 (Master)\nNetwork&Data (3G): HSDPA 7,2Мбит/с.\nBada 2.0\nБраузер Dolfin Browser 3.0\nПлатформа SUN CLDC 1.1\nЗначение SAR: 0,797мВт./г.\n', 12000, '6.png', 1),
(7, 6, 'I9001 Galaxy S Plus', 'Платформа\n850 / 900 / 1800 / 1900 МГц\nGPRS Class12\nEDGE Class12\nИнтернет браузер (Android Browser)\nДисплей\nРазрешение дисплея 480 x 800 WVGA\n<br />\n<br />\n<a href="http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-smart/GT-I9001HKDSER">http://www.samsung.com/ru/consumer/mobile-devices/mobile-phones/hhp-smart/GT-I9001HKDSER</a>', 11000, '7.png', 1),
(8, 7, 'I8350 Omnia W', 'Windows Phone 7.5 Mango\nGSM&EDGE 850 / 900 / 1,800 / 1,900 МГц\n3G 900 / 2,100 MГц\nGPRS: Класс 12\nEDGE: Класс 12\nHSDPA 14.4 / HSUPA 5.76 Мбит/с\nInternet Explorer 9\n', 15000, '8.png', 1),
(11, 8, 'iPhone 3GS', 'Широкоформатный дисплей Multi-Touch с диагональю 3,5 дюйма\nРазрешение 480 x 320 пикселей (163 пикселя/дюйм)\nОлеофобное покрытие, препятствующее появлению отпечатков пальцев\nПоддержка одновременного отображения нескольких языков и наборов символов\n<br /><br />\n<a href="http://www.apple.com/ru/iphone/iphone-3gs/specs.html">http://www.apple.com/ru/iphone/iphone-3gs/specs.html</a>', 20000, '11.PNG', 1),
(12, 9, 'iPhone 4S', '                                                Поддержка международных сетей\nUMTS/HSDPA/HSUPA (850, 900, 1900, 2100 МГц); \nGSM/EDGE (850, 900, 1800, 1900 МГц)\nCDMA EV-DO Rev. A (800, 1900 МГц)3\n802.11b/g/n Wi-Fi (802.11n только 2,4 ГГц)\nБеспроводная технология Bluetooth 4.0\n<br /><br />\n<a href="http://www.apple.com/ru/iphone/specs.html">http://www.apple.com/ru/iphone/specs.html</a>\n                    \n                    ', 25000, '12.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adress` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `name`, `phone`, `adress`) VALUES
(9, 'test1@test.ru', 'e10adc3949ba59abbe56e057f20f883e', '', '', ''),
(8, 'test@test.ru', 'e10adc3949ba59abbe56e057f20f883e', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
