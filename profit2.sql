-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2021 г., 16:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profit2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
(1, 'Видео посадки ровера \"Персеверанс\" на Марс', 'Американское управление по аэронавтике и космическим исследованиями обнародовало захватывающие кадры посадки нового марсохода на поверхность Красной планеты.'),
(2, 'Астрономы надеялись найти одну черную дыру.', 'Космический телескоп \"Хаббл\" помог обнаружить скопление черных дыр в шаровом кластере в созвездии Жертвенника.'),
(3, 'Разработку сверхтяжелой космической ракеты \"Енисей\" приостановили.', '\"Здесь ситуация достаточно сложная… Сегодня возможна коррекция ее облика, поэтому сейчас этот вопрос еще до конца не решен. Возможна коррекция именно технического облика ракеты, - заявил гендиректор центра \"Прогресс\" Дмитрий Баранов (цитата по РИА Новости). - Поэтому сейчас работы, я бы так сказал, поставлены на паузу. Мы готовы продолжить работу после того, как соответствующее решение будет принято. Я думаю, что это вопрос нескольких месяцев, я бы так сказал\".');

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`author_id`, `firstname`, `lastname`) VALUES
(1, 'Пупкин', 'Иван'),
(2, 'Петров', 'Игорь'),
(3, 'Сидоров', 'Максим');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `headline`, `content`, `author_id`) VALUES
(1, 'Кто изобрел первый компьютер в мире?', ' Однако еще в 1822 году изобретатель Чарльз Бэббидж выпустил счетную машину, которую с большой натяжкой можно назвать компьютером. Уже в 1941 году компанией IBM при участии математика Говарда Эйксона была разработана и выпущена усовершенствованная машина «Марк 1» (по чертежам Чарльза Бэббиджа). Это первый в США программируемый аппарат, который применялся для разработки военного оборудования.', ''),
(2, 'Raspberry Pi 400 – полноценный компьютер за $70, который умещается в клавиатуре', 'Pi 400 почти полностью соответствует стандартным размерам обычной клавиатуры и представляет собой концентратор с набором всех портов и разъемов, необходимых для превращения его в полноценный ПК. Он оснащен четырехъядерным процессором ВСМ2711, располагает 4 Гб оперативной памяти, двухдиапазонным Wi-Fi, Bluetooth 5.1, гигабитным Ethernet и тремя USB-портами (два USB 3.0 и один USB 2.0).', '3'),
(3, 'Банк JPMorgan Chase использует видеоигры для подбора персонала', 'Стажеры, которые хотят получить работу в банке JPMorgan, должны играть в видеоигры. Такая пилотная программа была разработана стартапом Pymetrics — она использует искусственный интеллект для оценки кандидатов по различным показателям, включая внимание, память и склонность к альтруизму. Нужно показать себя в деле, пусть и решая игровые задачи, и это оказалось куда эффективнее анкет и собеседований.', '1'),
(4, 'Ученые создали компьютер на основе ДНК', 'Идея использовать для вычислений ДНК впервые была озвучена в 1994 году. По сравнению с классическим кремнием подобная технология имеет целый ряд преимуществ. Самое значительное из них – возможность самокопирования. В вычислительных терминах это означает, что ДНК-компьютер может делать одновременно произвольное количество вычислений, что очень важно при решении сложных задач.', ''),
(5, 'Российским учёным удалось смоделировать виртуального человека на суперкомпьютере', 'Сразу стоит отметить, что перед учёными Нижегородского государственного университета им. Лобачевского стояла непростая задача по моделированию виртуального человеческого клона. В их распоряжение был предоставлен суперкомпьютер, входящий в сотню самых мощных компьютеров мира – «Лобачевский», с помощью которого были обработаны десятки миллионов параметров человеческого организма.', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `newss`
--

CREATE TABLE `newss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `newss`
--

INSERT INTO `newss` (`id`, `headline`, `content`) VALUES
(1, 'Кто изобрел первый компьютер в мире?', ' Однако еще в 1822 году изобретатель Чарльз Бэббидж выпустил счетную машину, которую с большой натяжкой можно назвать компьютером. Уже в 1941 году компанией IBM при участии математика Говарда Эйксона была разработана и выпущена усовершенствованная машина «Марк 1» (по чертежам Чарльза Бэббиджа). Это первый в США программируемый аппарат, который применялся для разработки военного оборудования.'),
(2, 'Raspberry Pi 400 – полноценный компьютер за $70, который умещается в клавиатуре', 'Pi 400 почти полностью соответствует стандартным размерам обычной клавиатуры и представляет собой концентратор с набором всех портов и разъемов, необходимых для превращения его в полноценный ПК. Он оснащен четырехъядерным процессором ВСМ2711, располагает 4 Гб оперативной памяти, двухдиапазонным Wi-Fi, Bluetooth 5.1, гигабитным Ethernet и тремя USB-портами (два USB 3.0 и один USB 2.0).'),
(3, 'Банк JPMorgan Chase использует видеоигры для подбора персонала', 'Стажеры, которые хотят получить работу в банке JPMorgan, должны играть в видеоигры. Такая пилотная программа была разработана стартапом Pymetrics — она использует искусственный интеллект для оценки кандидатов по различным показателям, включая внимание, память и склонность к альтруизму. Нужно показать себя в деле, пусть и решая игровые задачи, и это оказалось куда эффективнее анкет и собеседований.'),
(4, 'Ученые создали компьютер на основе ДНК', 'Идея использовать для вычислений ДНК впервые была озвучена в 1994 году. По сравнению с классическим кремнием подобная технология имеет целый ряд преимуществ. Самое значительное из них – возможность самокопирования. В вычислительных терминах это означает, что ДНК-компьютер может делать одновременно произвольное количество вычислений, что очень важно при решении сложных задач.'),
(5, 'Российским учёным удалось смоделировать виртуального человека на суперкомпьютере', 'Сразу стоит отметить, что перед учёными Нижегородского государственного университета им. Лобачевского стояла непростая задача по моделированию виртуального человеческого клона. В их распоряжение был предоставлен суперкомпьютер, входящий в сотню самых мощных компьютеров мира – «Лобачевский», с помощью которого были обработаны десятки миллионов параметров человеческого организма.');

-- --------------------------------------------------------

--
-- Структура таблицы `papers`
--

CREATE TABLE `papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `papers`
--

INSERT INTO `papers` (`id`, `heading`, `content`) VALUES
(70, 'В России оценили требование о предустановке российских поисковиков на смартфоны', 'Директор Регионального общественного центра интернет-технологий (РОЦИТ) Сергей Гребенников прокомментировал предложения Минцифры, согласно которым производители всех смартфонов и планшетов обязаны будут предоставить пользователям возможность выбора поисковика в браузерах. В разговоре с «Лентой.ру» он назвал действия государства оправданными.'),
(71, 'Исследование: Жизнь на Землю была доставлена при помощи молний', 'Геологи из Университета Лидса выдвинули альтернативную теорию происхождения жизни на Земле, которая гласит, что ключевую роль в этом процессе сыграли не только и не столько метеориты, но и удары молний.'),
(72, 'На МКС будут искать место утечки воздуха с помощью бумаги', 'Экипаж Международной космической станции (МКС) продолжает поиски места утечки воздуха в российском модуле \"Звезда\" с помощью маленьких бумажных полосок. Об этом стало известно из транслируемых НАСА переговоров космонавтов с Землей.'),
(73, 'Юрий Гагарин с испытателями космической техники', 'Далеко не все знают, что значительно раньше первого отряда космонавтов был образован другой отряд - испытателей. Так, постановлением Совета Министров СССР от 24 октября 1952 года предписывалось: \"Создать специальную команду испытателей для испытания костюмов, скафандров, одежды и разработки других вопросов, связанных с обеспечением жизнедеятельности и работоспособности экипажей самолетов с большими скоростями и высотами\".');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`) VALUES
(1, 'Nokia N73', 17129),
(2, 'Sony', 17200),
(3, 'Windows Phone', 13250),
(4, 'Motorolla', 14459),
(36, 'Yota Phone X', 35000);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `price`) VALUES
(1, 'Настройка IOS', 1500),
(2, 'Настройка Motorolla', 1350),
(3, 'Настройка Windows Phone', 950);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Vasya', '123456'),
(2, 'Petya', 'qwerty'),
(3, 'Igor', '123456qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `autor_id` (`author_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `newss`
--
ALTER TABLE `newss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `newss`
--
ALTER TABLE `newss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
