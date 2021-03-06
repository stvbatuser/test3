-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2019 at 05:36 PM
-- Server version: 5.7.20
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent`, `alias`) VALUES
(3, 'Смартфоны и аксессуары', 0, 'Smartfony i aksessuary'),
(4, 'Ноутбуки и планшеты', 0, 'Noutbuki i planshety'),
(5, 'ПК и комплектующие', 0, 'PK i komplektuyushchie'),
(6, 'Печатное и сетевое оборудование ', 0, 'Pechatnoe i setevoe oborudovanie '),
(7, 'Смартфоны', 3, 'Smartfony'),
(8, 'Кнопочные телефоны', 3, 'Knopochnye telefony'),
(9, 'Аксессуары', 3, 'Aksessuary'),
(10, 'Ноутбуки', 4, 'Noutbuki'),
(11, 'Планшеты', 4, 'Planshety'),
(12, 'Комплектующие для ноутбуков', 4, 'Komplektuyushchie dlya noutbukov'),
(13, 'Аксессуары для планшетов', 4, 'Aksessuary dlya planshetov'),
(14, 'Компьютеры', 5, 'Kompyuters'),
(15, 'Материнские платы', 5, 'Materinskie platy'),
(16, 'Жесткие диски', 5, 'ZHestkie diski'),
(17, 'Процессоры', 5, 'Processory'),
(18, 'Видео карты', 5, 'Video karty'),
(19, 'Для работы и учебы', 14, 'Dlya rabotyi i uchebyi'),
(20, 'Геймерские', 14, 'Geymerskie'),
(21, 'Socket 1151 ', 15, 'Socket 1151 '),
(22, 'Socket 1150 ', 15, 'Socket 1150 '),
(23, 'Socket AM4 ', 15, 'Socket AM4'),
(24, 'Socket FM2', 15, 'Socket FM2');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash` varchar(32) NOT NULL,
  `expire` int(11) UNSIGNED NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`id`, `hash`, `expire`, `email`) VALUES
(1, 'b14e90be587c6ac003b84a03660a3db3', 1551375661, 'bat_user@i.ua'),
(2, '8102fde0cc16ff0dbab142d3feb0388d', 1551380326, 'bat_user@i.ua'),
(3, '7c749a793492dc52b0f28ebe7f5f5b6b', 1551380499, 'bat_user@i.ua'),
(4, '9c17976a9abf78e1251a12a3ebf0e904', 1551380596, 'bat_user@i.ua'),
(5, '306efb5f460ff76acda4f7b7f5a7e060', 1551380750, 'bat_user@i.ua'),
(6, 'b1621b44121255d02927bc169e4ca1df', 1551380760, 'bat_user@i.ua'),
(7, 'de75113469b600ec2bcae2e9f2e65fd4', 1551383664, 'bat_user@i.ua'),
(8, '380fd10528c36516336202c37c1d0008', 1551464225, 'bat_user@i.ua'),
(9, 'd1daaf57a782f122a118b07d3cdafcec', 1551464318, 'bat_user@i.ua'),
(10, '265e7a56f94e84fb3da7b098cfb3f890', 1551464430, 'bat_user@i.ua'),
(11, '455505c3bc7fe570eedcca82975a4836', 1551464733, 'bat_user@i.ua'),
(12, '84f06cb16d43b2a697644e52d00038e6', 1551525235, 'bat_user@i.ua'),
(13, '11ec83279b7e724302c31ef6db3e9f4d', 1551530341, 'bat_user@i.ua'),
(14, '67749961fff44a4a5ff6055317e1d6d5', 1551530436, 'bat_user@i.ua'),
(15, 'bf929abd69bf4700cb682be426e6a4b6', 1551536069, 'bat_user@i.ua'),
(16, '0a39c519928954a400b6ecddfd25fae4', 1551538115, 'bat_user@i.ua'),
(17, '34470610e8f56f6bc0ac0ede5aa0966e', 1551538125, 'bat_user@i.ua'),
(18, 'da232b5482988131dc1d822dd2d1b4b8', 1551538166, 'bat_user@i.ua'),
(19, '4bf934e1ef133f27676836904df789a9', 1551539173, 'bat_user@i.ua'),
(20, '8b32d0a3e425edf59355c49943fc4258', 1551540630, 'bat_user@i.ua'),
(21, '5bcd309d98c1926294451446d6e1d9ae', 1551550110, 'bat_user@i.ua'),
(22, 'd1409c487254a867c4e75d2c9bc1d1e8', 1551550198, 'bat_user@i.ua'),
(23, '3b570736026e4a0d3e0be8e12aef5ff5', 1551550335, 'bat_user@i.ua'),
(24, 'c760298ef54292399c9f268abc9b4b86', 1551550395, 'bat_user@i.ua'),
(25, 'a288a2f95f84efd9a153f5bd0f9604ee', 1551897945, 'bat_user@i.ua'),
(26, 'a8583704dc30b40ebf7c1e4c524ff168', 1551898043, 'bat_user@i.ua'),
(27, '677c2549e77f76888cabb8b799362627', 1551898244, 'bat_user@i.ua');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `name`, `value`) VALUES
(1, 'course', 'Курс', '27'),
(2, 'email', 'Контактный email', 'bat_user@i.ua'),
(3, 'pagination', 'Количество товаров на страницу', '6'),
(4, 'site_title', 'Название сайта', 'Каталог техники');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `position` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `text`, `position`) VALUES
(1, 'Главная', 'Текст главной страницы', 1),
(2, 'О компании', 'Это мой учебный сайт, который отображает каталог компьютерной техники.\r\n', 2),
(3, 'Контакты', 'Я, начинающий веб мастер, учусь создавать сайты с помощью php. \r\nМой email: bat_user@i.ua', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `id_cat`, `image`, `price`) VALUES
(1, 'Мобильный телефон Huawei P smart 2019 3/64GB Aurora Blue (51093FTA) ', 'Основные характеристики\r\nФорм-фактор\r\nмоноблок\r\nКоличество SIM-карт\r\n2 SIM\r\nФормат SIM-карты\r\nNano\r\nПоколение связи (2G/3G/4G)\r\n2G, 3G, 4G\r\nСтандарты связи (GSM)\r\n850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея\r\nLTPS IPS\r\nДиагональ экрана\r\n6.21\"\r\nРазрешение экрана\r\n1080 x 2340 pixels\r\nПроцессор\r\nПроцессор\r\nHiSilicon Kirin 710\r\nЧастота процессора\r\n2.2 GHz\r\nКоличество ядер\r\n8 core\r\nФункции памяти\r\nОперативная память\r\n3 Gb\r\nВстроенная память\r\n64 Gb\r\nРасширение памяти\r\nmicroSD (TransFlash), до 512 Gb\r\nКамера\r\nОсновная камера\r\n13 + 2 Mpx\r\nФронтальная камера\r\n8 Mpx\r\nФункции камеры\r\nгеотегинг, панорама, HDR, автофокус, вспышка\r\nПрограммное обеспечение\r\nОперационная система\r\nAndroid OS, v9.0 (Pie)\r\nМультимедиа\r\nвидеоплеер, игры, социальные сети, мобильные сервисы Google, музыкальный плеер, FM-радио\r\nОрганайзер\r\nмировое время, секундомер, будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки\r\nБеспроводные технологии\r\nБеспроводные подключения\r\nBluetooth, WI-FI, NFC\r\nНавигация\r\nBDS, GPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения\r\naudio 3.5 мм, microUSB\r\nАккумулятор\r\nЕмкость аккумулятора\r\n3400 mAh\r\nДополнительно\r\nВстроенные датчики\r\nдатчик приближения, G-sensor, цифровой компас\r\nFingerprint\r\nесть\r\nФизические характеристики\r\nРазмеры (мм)\r\n155.2 x 73.4 x 8 mm\r\nВес\r\n160 грамм\r\nЦвет\r\nBlue\r\nДругие\r\nПроизводитель\r\nHuawei\r\nМодель\r\nP smart 2019 3/64GB Aurora Blue\r\nАртикул\r\n51093FTA\r\nСтрана производства\r\nКитай\r\nГарантия, мес\r\n12\r\n\r\nВсе характеристики', 7, 'empty_thumb.jpg', 1000),
(2, 'Мобильный телефон Motorola Moto G5 (XT1676) 16Gb Blue (PA610107UA) ', 'Основные характеристики\r\nФорм-фактор\r\nмоноблок\r\nКоличество SIM-карт\r\n2 SIM\r\nФормат SIM-карты\r\nNano\r\nПоколение связи (2G/3G/4G)\r\n2G, 3G, 4G\r\nСтандарты связи (GSM)\r\n850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея\r\nIPS\r\nДиагональ экрана\r\n5.0\"\r\nРазрешение экрана\r\nFullHD (1920х1080)\r\nПроцессор\r\nПроцессор\r\nQualcomm MSM8937 Snapdragon 430\r\nЧастота процессора\r\n1.4 GHz\r\nКоличество ядер\r\n8 core\r\nФункции памяти\r\nОперативная память\r\n2 Gb\r\nВстроенная память\r\n16 Gb\r\nРасширение памяти\r\nmicroSD (TransFlash), до 256 Gb\r\nКамера\r\nОсновная камера\r\n13 Mpx\r\nФронтальная камера\r\n5 Mpx\r\nФункции камеры\r\nHDR, автофокус, распознавание лица, вспышка, геотегинг, панорама\r\nПрограммное обеспечение\r\nОперационная система\r\nAndroid OS, v7.0 (Nougat)\r\nМультимедиа\r\nвидеоплеер, игры, социальные сети, мобильные сервисы Google, музыкальный плеер, FM-радио\r\nОрганайзер\r\nмировое время, секундомер, будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки\r\nБеспроводные технологии\r\nБеспроводные подключения\r\nBluetooth, WI-FI\r\nНавигация\r\nGPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения\r\naudio 3.5 мм, microUSB\r\nАккумулятор\r\nЕмкость аккумулятора\r\n2800 mAh\r\nДополнительно\r\nОсобенности\r\nзащищенное стекло от царапин\r\nВстроенные датчики\r\nдатчик приближения, G-sensor, цифровой компас, гироскоп\r\nFingerprint\r\nесть\r\nФизические характеристики\r\nВес\r\n145 г\r\nЦвет\r\nBlue\r\nДругие\r\nПроизводитель\r\nMotorola\r\nМодель\r\nMoto G5 (XT1676) 16Gb Blue\r\nАртикул\r\nPA610107UA\r\nСтрана производства\r\nКитай\r\nГарантия, мес\r\n12\r\n\r\nВсе характеристики', 7, 'empty_thumb.jpg', 1500),
(3, 'Мобильный телефон Xiaomi Redmi 6A 2/16 Black ', 'Oфициальная гарантия, Количество SIM-карт - 2 SIM, тип дисплея - IPS, диагональ экрана - 5.45\", разрешение экрана - 720 x 1440, процессор - Mediatek Helio A22, количество ядер - 4 core, оперативная память - 2 Gb, встроенная память - 16 Gb, основная камера - 13 Mpx, фонтальная камера - 5 Mpx, емкость аккумулятора - 3000 mAh ', 7, 'empty_thumb.jpg', 1200),
(4, 'Мобильный телефон ASUS ZenFone Max (M2) ZB633KL 4/32 GB Midnight Black ', 'Количество SIM-карт - 2 SIM, тип дисплея - IPS, диагональ экрана - 6.26\", разрешение экрана - 1520 х 720, процессор - Qualcomm SDM632 Snapdragon 632, количество ядер - 8 core, оперативная память - 4 Gb, встроенная память - 32 Gb, основная камера - 13 + 2 Mpx, фронтальная камера - 8 Mpx, емкость аккумулятора - 4000 mAh, Fingerprint - есть ', 7, 'empty_thumb.jpg', 700),
(5, 'Мобильный телефон Samsung SM-A730F (Galaxy A8 Plus Duos 2018) Orchid Gray', '\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея Super AMOLED\r\nДиагональ экрана 6.0\"\r\nРазрешение экрана 1080 x 2220 pixels\r\nПроцессор\r\nПроцессор Exynos 7885\r\nЧастота процессора 2.2 GHz\r\nКоличество ядер 8 core\r\nФункции памяти\r\nОперативная память 4 Gb\r\nВстроенная память 32 Gb\r\nРасширение памяти microSD (TransFlash), до 256 Gb\r\nКамера\r\nОсновная камера 16 Mpx\r\nФронтальная камера 16 Mpx + 8 Mpx\r\nФункции камеры HDR, автофокус, вспышка, распознавание лица, геотегинг, панорама\r\nПрограммное обеспечение\r\nОперационная система Android OS, v7.1 (Nougat)\r\nМультимедиа музыкальный плеер, FM-радио, видеоплеер, игры, социальные сети, мобильные сервисы Google\r\nОрганайзер часы, заметки, мировое время, секундомер, будильник, диктофон, календарь, калькулятор, телефонная книга\r\nБеспроводные технологии\r\nБеспроводные подключения Bluetooth, WI-FI, NFC\r\nНавигация BDS, GPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения audio 3.5 мм, USB Type-C\r\nАккумулятор\r\nЕмкость аккумулятора 3500 mAh\r\nДополнительно\r\nОсобенности IP68 certified, Gorilla Glass, Always-on display, Samsung Pay\r\nВстроенные датчики гироскоп, датчик приближения, цифровой компас, G-sens', 7, 'empty_thumb.jpg', 700),
(6, 'Мобильный телефон Huawei P smart 2019 3/64GB Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея LTPS IPS\r\nДиагональ экрана 6.21\"\r\nРазрешение экрана 1080 x 2340 pixels\r\nПроцессор\r\nПроцессор HiSilicon Kirin 710\r\nЧастота процессора 2.2 GHz\r\nКоличество ядер 8 core\r\nФункции памяти\r\nОперативная память 3 Gb\r\nВстроенная память 64 Gb\r\nРасширение памяти microSD (TransFlash), до 512 Gb\r\nКамера\r\nОсновная камера 13 + 2 Mpx\r\nФронтальная камера 8 Mpx\r\nФункции камеры панорама, автофокус, HDR, вспышка, геотегинг\r\nПрограммное обеспечение\r\nОперационная система Android OS, v9.0 (Pie)\r\nМультимедиа социальные сети, мобильные сервисы Google, FM-радио, музыкальный плеер, игры, видеоплеер\r\nОрганайзер будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки, мировое время, секундомер\r\n', 7, 'empty_thumb.jpg', 800),
(7, 'Мобильный телефон Doogee MIX Lite Blue', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея IPS\r\nДиагональ экрана 5.2\"\r\nРазрешение экрана HD (1280х720)\r\nПроцессор\r\nПроцессор MediaTek MT6737\r\nЧастота процессора 1.45 GHz\r\nКоличество ядер 4 core\r\nФункции памяти\r\nОперативная память 2 Gb\r\nВстроенная память 16 Gb\r\nРасширение памяти microSD (TransFlash), до 128 Gb\r\nКамера\r\nОсновная камера Dual 13 Mpx\r\nФронтальная камера 8 Mpx\r\nФункции камеры автофокус, вспышка\r\nПрограммное обеспечение\r\nОперационная система Android OS, v7.0 (Nougat)\r\nМультимедиа видеоплеер, социальные сети, мобильные сервисы Google, музыкальный плеер, игры\r\nОрганайзер мировое время, секундомер, будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки\r\nБеспроводные технологии\r\nБеспроводные подключения WI-FI, Bluetooth\r\nНавигация GPS\r\nИнтерфейсы\r\nИнтерфейсы и подключения audio 3.5 мм, microUSB\r\nАккумулятор\r\nЕмкость аккумулятора 3080 mAh\r\nДополнительно\r\nВстроенные датчики G-sensor, датчик освещения, датчик приближения\r\nFingerprint есть\r\nФизические характеристики\r\nРазмеры (мм) 138*73.2*8.6mm\r\nВес 160 грамм\r\nЦвет Blue\r\nДругие\r\nПроизводитель Doogee\r\nМодель MIX Lite Blue\r\nАртикул 6924351622923\r\nГарантия 12 месяцев\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 7, 'empty_thumb.jpg', 500),
(8, 'Мобильный телефон Apple iPhone 7 32GB Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 1 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея IPS\r\nДиагональ экрана 4.7\"\r\nРазрешение экрана 750 x 1334 pixels\r\nПроцессор\r\nПроцессор Apple A10 Fusion\r\nКоличество ядер 4 core\r\nФункции памяти\r\nОперативная память 2 Gb\r\nВстроенная память 32 Gb\r\nКамера\r\nОсновная камера 12 Mpx\r\nФронтальная камера 7 Mpx\r\nФункции камеры вспышка, распознавание лица, геотегинг, панорама, автофокус, HDR\r\nПрограммное обеспечение\r\nОперационная система iOS 10\r\nМультимедиа игры, музыкальный плеер, видеоплеер, социальные сети\r\nОрганайзер мировое время, секундомер, будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки\r\nБеспроводные технологии\r\nБеспроводные подключения WI-FI, Bluetooth\r\nНавигация GPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения Lightning\r\nАккумулятор\r\nЕмкость аккумулятора 1960 mAh\r\nДополнительно\r\nОсобенности пиловологозахист корпусу, IP67, 3D Touch display & home button\r\nВстроенные датчики датчик приближения, цифровой компас, G-sensor, барометр, гироскоп\r\nFingerprint есть\r\nФизические характеристики\r\nМатериал корпуса металл\r\nРазмеры (мм) 138.3 x 67.1 x 7.1 mm\r\nВес 138 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель Apple\r\nМодель iPhone 7 32GB Black\r\nАртикул MN8X2FS/A/MN8X2RM/A\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 7, 'empty_thumb.jpg', 300),
(9, 'Мобильный телефон SONY G3416 (Xperia XA1 Plus DualSim) Blue', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея IPS\r\nДиагональ экрана 5.5\"\r\nРазрешение экрана FullHD (1920х1080)\r\nПроцессор\r\nПроцессор Mediatek MT6757 Helio P20\r\nЧастота процессора 2.3 GHz\r\nКоличество ядер 8 core\r\nФункции памяти\r\nОперативная память 4 Gb\r\nВстроенная память 32 Gb\r\nРасширение памяти microSD (TransFlash), до 256 Gb\r\nКамера\r\nКоличество модулей основной камеры 1\r\nОсновная камера 23 Mpx\r\nКоличество модулей фронтальной камеры 1\r\nФронтальная камера 8 Mpx\r\nФункции камеры панорама, HDR, автофокус, вспышка, геотегинг\r\nПрограммное обеспечение\r\nОперационная система Android OS, v7.0 (Nougat)\r\nМультимедиа социальные сети, мобильные сервисы Google, музыкальный плеер, FM-радио, видеоплеер, игры\r\nОрганайзер будильник, диктофон, календарь, калькулятор, телефонная книга, часы, заметки, мировое время, секундомер\r\nБеспроводные технологии\r\nБеспроводные подключения Bluetooth, WI-FI, NFC\r\nНавигация GPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения audio 3.5 мм, USB Type-C\r\nАккумулятор\r\nЕмкость аккумулятора 3430 mAh\r\nДополнительно\r\nОсобенности Gorilla Glass 4\r\nВстроенные датчики G-sensor, цифровой компас, датчик приближения\r\nFingerprint есть\r\nФизические характеристики\r\nМатериал корпуса пластик, металл\r\nРазмеры (мм) 155 x 75 x 8.7 mm\r\nВес 189 г\r\nЦвет Blue\r\nДругие\r\nПроизводитель SONY\r\nМодель G3416 (Xperia XA1 Plus DualSim) Blue\r\nАртикул G3416 (Xperia XA1 Plus DualSim) Blue\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 7, 'empty_thumb.jpg', 500),
(10, 'Мобильный телефон ASUS Zenfone Live ZB501KL (ZB501KL-4A053A)', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nФормат SIM-карты Nano\r\nПоколение связи (2G/3G/4G) 2G, 3G, 4G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея IPS\r\nДиагональ экрана 5.0\"\r\nРазрешение экрана HD (1280х720)\r\nПроцессор\r\nПроцессор Qualcomm MSM8916 Snapdragon 410\r\nЧастота процессора 1.2 GHz\r\nКоличество ядер 4 core\r\nФункции памяти\r\nОперативная память 2 Gb\r\nВстроенная память 32 Gb\r\nРасширение памяти microSD (TransFlash), до 256 Gb\r\nКамера\r\nОсновная камера 13 Mpx\r\nФронтальная камера 5 Mpx\r\nФункции камеры автофокус, вспышка, панорама\r\nПрограммное обеспечение\r\nОперационная система Android OS, v6.0 (Marshmallow)\r\nМультимедиа видеоплеер, игры, социальные сети, мобильные сервисы Google, музыкальный плеер, FM-радио\r\nОрганайзер часы, заметки, мировое время, секундомер, будильник, диктофон, калькулятор, телефонная книга, календарь\r\nБеспроводные технологии\r\nБеспроводные подключения WI-FI, Bluetooth\r\nНавигация GPS, A-GPS, ГЛОНАСС\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB, audio 3.5 мм\r\nАккумулятор\r\nЕмкость аккумулятора 2650 mAh\r\nДополнительно\r\nВстроенные датчики цифровой компас, датчик приближения, G-sensor\r\nФизические характеристики\r\nМатериал корпуса металл, стекло\r\nРазмеры (мм) 141.2 x 71.7 x 8 mm\r\nВес 120 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель ASUS\r\nМодель Zenfone Live ZB501KL\r\nАртикул ZB501KL-4A053A\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 7, 'empty_thumb.jpg', 500),
(11, 'Мобильный телефон Nokia Nokia 106 DS New Grey', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nПоколение связи (2G/3G/4G) 2G\r\nДисплей\r\nТип дисплея TFT\r\nДиагональ экрана 1.8\"\r\nРазрешение экрана 120x160\r\nФункции памяти\r\nОперативная память 4 Mb\r\nВстроенная память 4 Mb\r\nПрограммное обеспечение\r\nОперационная система no OS\r\nОрганайзер календарь, телефонная книга, часы, будильник, калькулятор\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB\r\nАккумулятор\r\nЕмкость аккумулятора 800 mAh\r\nВремя работы в режиме разговора 15 часов\r\nВремя работы в режиме ожидания 500 часов\r\nФизические характеристики\r\nМатериал корпуса пластик\r\nРазмеры (мм) 111,15 x 49,5 x 14,4 мм\r\nВес 70 грамм\r\nЦвет Gray\r\nДругие\r\nПроизводитель Nokia\r\nМодель Nokia 106 DS New Grey\r\nАртикул 16NEBD01A02\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 8, 'empty_thumb1.jpg', 0),
(12, 'Мобильный телефон Atel AMP-C800 Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 1 SIM\r\nСтандарты связи (CDMA) CDMA\r\nДисплей\r\nТип дисплея TFT\r\nДиагональ экрана 1.8\"\r\nФункции памяти\r\nОперативная память 64 Mb\r\nВстроенная память 128 Mb\r\nРасширение памяти microSD (TransFlash), до 8 Gb\r\nПрограммное обеспечение\r\nОперационная система no OS\r\nМультимедиа FM-радио\r\nОрганайзер будильник, калькулятор, календарь, телефонная книга, часы\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB\r\nАккумулятор\r\nЕмкость аккумулятора 800 mAh\r\nФизические характеристики\r\nМатериал корпуса пластик\r\nРазмеры (мм) 112 х 45.5 х 14.5 мм\r\nВес 71 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель Atel\r\nМодель AMP-C800 Black\r\nАртикул AMP-C800 Black\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 8, 'empty_thumb1.jpg', 0),
(13, 'Мобильный телефон PHILIPS Xenium E106 Xenium Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nПоколение связи (2G/3G/4G) 2G\r\nСтандарты связи (GSM) 900, 1800, 1900\r\nДисплей\r\nТип дисплея TFT\r\nДиагональ экрана 1.77\"\r\nРазрешение экрана 128x160\r\nФункции памяти\r\nРасширение памяти microSD (TransFlash), до 16 Gb\r\nПрограммное обеспечение\r\nОперационная система no OS\r\nМультимедиа FM-радио\r\nОрганайзер календарь, телефонная книга, часы, будильник, калькулятор\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB, audio 3.5 мм\r\nАккумулятор\r\nЕмкость аккумулятора 1050 mAh\r\nФизические характеристики\r\nМатериал корпуса пластик\r\nРазмеры (мм) 108,3×46,3×15,8 мм\r\nВес 72 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель PHILIPS\r\nМодель Xenium E106 Xenium Black\r\nАртикул Xenium E106 Xenium Black\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 8, 'empty_thumb1.jpg', 0),
(14, 'Мобильный телефон PHILIPS Xenium E106 Xenium Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nПоколение связи (2G/3G/4G) 2G\r\nСтандарты связи (GSM) 900, 1800, 1900\r\nДисплей\r\nТип дисплея TFT\r\nДиагональ экрана 1.77\"\r\nРазрешение экрана 128x160\r\nФункции памяти\r\nРасширение памяти microSD (TransFlash), до 16 Gb\r\nПрограммное обеспечение\r\nОперационная система no OS\r\nМультимедиа FM-радио\r\nОрганайзер календарь, телефонная книга, часы, будильник, калькулятор\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB, audio 3.5 мм\r\nАккумулятор\r\nЕмкость аккумулятора 1050 mAh\r\nФизические характеристики\r\nМатериал корпуса пластик\r\nРазмеры (мм) 108,3×46,3×15,8 мм\r\nВес 72 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель PHILIPS\r\nМодель Xenium E106 Xenium Black\r\nАртикул Xenium E106 Xenium Black\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 8, 'empty_thumb1.jpg', 0),
(15, 'Мобильный телефон PHILIPS Xenium E168 Xenium Black', '\r\nОсновные характеристики\r\nФорм-фактор моноблок\r\nКоличество SIM-карт 2 SIM\r\nПоколение связи (2G/3G/4G) 2G\r\nСтандарты связи (GSM) 850, 900, 1800, 1900\r\nДисплей\r\nТип дисплея TFT\r\nДиагональ экрана 2.4\"\r\nРазрешение экрана 240x320\r\nФункции памяти\r\nРасширение памяти microSD (TransFlash), до 16 Gb\r\nКамера\r\nОсновная камера 0.3 Mpx\r\nПрограммное обеспечение\r\nОперационная система no OS\r\nМультимедиа FM-радио\r\nОрганайзер календарь, телефонная книга, часы, будильник, калькулятор\r\nБеспроводные технологии\r\nБеспроводные подключения Bluetooth\r\nИнтерфейсы\r\nИнтерфейсы и подключения microUSB, audio 3.5 мм\r\nАккумулятор\r\nЕмкость аккумулятора 1600 mAh\r\nФизические характеристики\r\nМатериал корпуса пластик\r\nРазмеры (мм) 122,5 мм x 51,5 мм x 13,9 мм\r\nВес 100 грамм\r\nЦвет Black\r\nДругие\r\nПроизводитель PHILIPS\r\nМодель Xenium E168 Xenium Black\r\nАртикул Xenium E168 Xenium Black\r\nСтрана производства Китай\r\nГарантия, мес 12\r\n', 8, 'empty_thumb1.jpg', 158);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `is_admin` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `is_admin`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'bat_user@i.ua', 'admin', 1),
(2, 'test', '202cb962ac59075b964b07152d234b70', 'bat_user1@i.ua', 'Vasya', 0),
(3, 'Petya', '202cb962ac59075b964b07152d234b70', '123@i.ua', 'Petya', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
