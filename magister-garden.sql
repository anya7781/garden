-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 12 2018 г., 22:51
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magister-garden`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Author`
--

CREATE TABLE `Author` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `photo` mediumtext NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Author`
--

INSERT INTO `Author` (`id`, `name`, `photo`, `text`) VALUES
(1, 'Суганеев Павел Владимирович     ', '/images/portret.jpg', '<p> - Организатор и идейный вдохновитель команды профессиональных садовников. </p> <p> - Более 10 лет успешно реализует проекты в ландшафтном дизайне. </p> <p> - Команда «Садовый мастер» специализируется в области дизайна и комплексного ухода за ним. </p> <p> <span class=\"mobile-hide\"> - Она объединяет профессиональных специалистов, которых переполняет любовь к растениям. </span> </p> <p> <span class=\"mobile-hide\"> - Нам нравится реализовывать смелые нестандартные проекты. </span> </p> <p> <span class=\"mobile-hide\"> - Стоимость наших работ доступна и разумна.</span></p>     ');

-- --------------------------------------------------------

--
-- Структура таблицы `Differences`
--

CREATE TABLE `Differences` (
  `id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Differences`
--

INSERT INTO `Differences` (`id`, `text`) VALUES
(1, 'Опыт работы 10 лет'),
(2, 'Любим нестандартные проекты'),
(3, 'Берем проекты и эконом-класса'),
(4, 'Используем экологичные технологии');

-- --------------------------------------------------------

--
-- Структура таблицы `Info`
--

CREATE TABLE `Info` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Info`
--

INSERT INTO `Info` (`id`, `description`, `photo`, `phone`, `email`) VALUES
(1, 'Команда профессионалов предоставляет услуги ландшафтного дизайна в Краснодарском крае  ', '/images/header/new27209.jpg', '8 (918) - 57 - 90 - 191', 'some_email@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `Main_photos`
--

CREATE TABLE `Main_photos` (
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Main_photos`
--

INSERT INTO `Main_photos` (`photo`) VALUES
('new2223.jpg'),
('new27209.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Portfolio`
--

CREATE TABLE `Portfolio` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Portfolio`
--

INSERT INTO `Portfolio` (`id`, `photo`) VALUES
(1, 'images/portfolio/img1.jpg'),
(2, 'images/portfolio/img2.jpg'),
(3, 'images/portfolio/img3.jpg'),
(4, 'images/portfolio/img4.jpg'),
(5, 'images/portfolio/img5.jpg'),
(6, 'images/portfolio/img6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Pricelist`
--

CREATE TABLE `Pricelist` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `service` varchar(256) NOT NULL,
  `Description` text NOT NULL,
  `unit` varchar(10) NOT NULL,
  `price` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Pricelist`
--

INSERT INTO `Pricelist` (`id`, `section_id`, `service`, `Description`, `unit`, `price`) VALUES
(1, 1, 'Скарификация <br>\r\nМульчирование', 'Очистка от мха и соломы с применением <br> специального оборудования. <br> Подсев. Равномерное внесение <br> мульчирующего материала. Внесение удобрений.\r\n', '1 м^2', 'От 60 р.'),
(2, 1, 'Аэрация', 'Прокалывание поверхностного слоя дёрна. (почвы)', '1 м^2', 'От 60 р.'),
(3, 1, 'Реконструкция усохшего, <br> пожелтевшего газона', 'Стрижка. Вырезка отмерших участков в ручную, <br> подсев семян или укладка газона, в места плешей, <br> мульчирование. Полив. Прикатывание.', '', 'Индивидуально'),
(4, 2, 'Цветники из <br>однолетних растений', 'Подготовка посадочных мест, <br> внесение удобрений, полив, <br> внекорневая подкормка.', '1 м^2', 'От 300 р.'),
(5, 2, 'Цветники из <br> многолетних растений', 'Подготовка посадочных мест, <br> внесение удобрений, полив, <br> внекорневая подкормка.', '1 шт.', 'От 50 р.'),
(6, 3, 'Высадка лиственных деревьев <br> и кустарников', 'Подготовка посадочного места, посадка, <br> внесение удобрений, полив, внекорневая подкормка.', '1 шт.', 'От 90р.'),
(7, 3, 'Высадка хвойных деревьев <br> и кустарников', 'Подготовка посадочного места, посадка, <br>внесение удобрений , полив, чистка от сухой хвои, <br> внекорневая подкормка.', '1 шт.', 'От 180р.'),
(8, 3, 'Высадка лиственных деревьев <br> высотой до 2 х метров', 'Подготовка посадочного места, посадка, <br> внесение удобрений, полив, внекорневая подкормка.', '1 шт.', 'От 300р.'),
(9, 3, 'Высадка хвойных деревьев <br> высотой до 2х метров.', 'Подготовка посадочного места, посадка, <br> внесение удобрений , полив, чистка от сухой хвои, <br> внекорневая подкормка.', '1 шт.', 'От 800р'),
(10, 3, 'Высадка лиственных деревьев <br> выше 2х метров', 'Подготовка посадочного места, посадка, <br> внесение удобрений, полив, внекорневая подкормка.', '1 шт.', 'От 1200р'),
(11, 3, 'Высадка хвойных деревьев <br> выше 2х метров.', 'Подготовка посадочного места, посадка, <br> внесение удобрений , полив, чистка от сухой хвои, <br> внекорневая подкормка.', '1 шт.', 'От 1500р.'),
(12, 4, 'Обрезка  деревьев <br> (от 150 до 200см)', 'Обрезка плодовых и декоративных   деревьев.', '1 шт.', 'От 150р.'),
(13, 4, 'Обрезка  деревьев (от 2 до 3м)', 'Обрезка плодовых и декоративных   деревьев.', '1 шт.', 'От 500 р.'),
(14, 4, 'Обрезка деревьев (выше 3 м)', 'Обрезка плодовых и декоративных   деревьев.', '1 шт.', 'Договорная'),
(15, 4, 'Обрезка плодовых и <br> декоративных лиан', 'Санитарная или формирующая обрезка <br> плодовых (ВИНОГРАД, АКТИНИДИЯ) <br> и декоративных лиан.', '1 шт.', 'Договорная'),
(16, 4, 'Обрезка кустарников <br> ( До 30 см)', 'Обрезка плодовых и декоративных кустарников', '1 шт.', 'От 50 р.'),
(17, 4, 'Обрезка  кустарников <br> (от 30 до 50 см)', 'Обрезка плодовых и декоративных кустарников.', ' 1 шт.', 'От 100 р.'),
(18, 4, 'Обрезка кустарников <br> (От 50 до 100 см)', 'Обрезка плодовых и декоративных кустарников.', '1 шт.', 'От 200 р'),
(19, 4, 'Чистка хвойников', 'Удаление сухой, отмершей хвои и ветвей. \r\n <br> (санитарная обрезка)', '1 шт.', 'Договорная'),
(20, 5, 'Скарификация<br>\r\nМульчирование ', 'Очистка (вычёсывание) от мха и соломы с применением специального оборудования. <br> Подсев.\r\nРавномерное внесение мульчирующего материала. Внесение удобрений.\r\n', '1 м^2', 'От 60 р'),
(21, 5, 'Аэрация', 'Прокалывание поверхностного слоя дёрна. (почвы)', '1 м^2', 'От 60 р'),
(22, 5, 'Реконструкция усохшего, <br> пожелтевшего газона', 'Стрижка. Вырезка плешей ( отмерших участков) в ручную, <br> подсев семян или  укладка газона в места плешей, <br> мульчирование. Полив. Прикатывание.', '', 'индивидуально'),
(23, 6, 'Стрижка', 'Стрижка газона.', '1 м^2', 'От 15р'),
(24, 6, 'Ручная прополка', 'Удаление сорняков в ручную. Чаще применяется для удаления порея <br> и др. сорняков, не поддающихся гербицидам избирательного действия.', '1 м^2', 'От 80р.'),
(25, 6, 'Внекорневая обработка', 'Опрыскивание вегетирующего газона, <br> препаратами для подкормки и лечения.', '1 м^2', 'От 15р');

-- --------------------------------------------------------

--
-- Структура таблицы `Price_section`
--

CREATE TABLE `Price_section` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Price_section`
--

INSERT INTO `Price_section` (`id`, `title`, `image`) VALUES
(1, 'Устройство газона', 'images/pricelist/1.jpg'),
(2, 'Создание цветников', 'images/pricelist/2.jpg'),
(3, 'Высадка деревьев и кустарников', 'images/pricelist/3.jpg'),
(4, 'Обрезка деревьев и кустарников', 'images/pricelist/4.jpg'),
(5, 'Уход за газоном весной-осенью', 'images/pricelist/5.jpg'),
(6, 'Уход за газоном летом', 'images/pricelist/6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Review`
--

CREATE TABLE `Review` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Review`
--

INSERT INTO `Review` (`id`, `photo`, `name`, `text`) VALUES
(1, 'images/отзывы/портрет1.jpg', 'Анна Попова', 'Всё прошло отлично. У Павла очень хороший вкус и оперативность. <br> Все договорённости по срокам и стоимости работ были соблюдены. Оценка – пять. Всем рекомендую!'),
(2, 'images/отзывы/портрет2.jpg', 'Виктория Макарова', 'Большое спасибо за такой чудесный газон, дети все нарадоваться не могут. <br>\r\n                            За 3 дня ребята сделали мне весь задний двор. Все очень аккуратно и в рамках договора.'),
(3, 'images/отзывы/портрет3.jpg', 'Иван Кононец', 'Большое Вам спасибо за выполненные ландшафтные работы на участке! <br> \r\nСоседи приходят фотографировать) Абсолютно все растения прижились!');

-- --------------------------------------------------------

--
-- Структура таблицы `Services`
--

CREATE TABLE `Services` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Services`
--

INSERT INTO `Services` (`id`, `name`, `photo`) VALUES
(1, 'Озеленение участков', 'images/services/1.jpg'),
(2, 'Уход за садом', 'images/services/2.jpg'),
(3, 'Благоустройство и строительство', 'images/services/3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Services_date`
--

CREATE TABLE `Services_date` (
  `id` int(11) NOT NULL,
  `phrase` varchar(256) NOT NULL,
  `id_service` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Services_date`
--

INSERT INTO `Services_date` (`id`, `phrase`, `id_service`, `details`) VALUES
(1, 'Высадка деревьев и кустарников', 1, ''),
(2, 'Укладка газона', 1, ''),
(3, 'Устройство розариев', 1, ''),
(4, 'Устройство сада-огорода', 1, ''),
(5, 'Устройство миксбордеров', 1, ''),
(6, 'Устройcтво партерных цветников', 1, ''),
(7, 'Устройcтво цветников из многолетних растений', 1, ''),
(8, 'Устройcтво цветников из однолетних растений', 1, ''),
(9, 'Закладка плодового сада', 1, ''),
(10, 'Уход за газоном', 2, ' - Скарификация <br> - Аэрация <br> - Мульчирование <br> - Стрижка газона'),
(11, 'Уход за деревьями, кустарниками и лианами', 2, '- Обрезка деревьев и кустарников <br> - Обрезка лиан <br> - Обрезка винограда\r\n                                            <br> - Стрижка кустарников и живых изгородей <br> - Чистка хвойников\r\n                                            <br> - Создание топиарных форм <br> - Вертикальное озеленение <br>\r\n                                           - Арбористика <br> - Обработка от вредителей и болезней <br> - Внекормлевая подкормка'),
(12, 'Уход за цветниками', 2, '- Чистка <br> - Рыхление почвы <br> - Внесение удобрений <br> - Мульчирование почвы <br>\r\n                                            - Обработка от вредителей и болезней'),
(13, 'Устройство систем автополива', 3, ''),
(14, 'Устройство зеленых парковок', 3, ''),
(15, 'Устройство водоемов', 3, ''),
(16, 'Устройство подпорных стенок', 3, ''),
(17, 'Устройство каскадов', 3, ''),
(18, 'Устройство каменистых горок, рокариев, сухих ручьев', 3, ''),
(19, 'Расчистка территории от строительного мусора и сорной растительности', 3, ''),
(20, 'Подготовка почвы, культивация <br>\r\n                                        Устройство дорожно-тропиночной сети и функциональных зон', 3, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Differences`
--
ALTER TABLE `Differences`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Info`
--
ALTER TABLE `Info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Main_photos`
--
ALTER TABLE `Main_photos`
  ADD PRIMARY KEY (`photo`(30)) USING BTREE;

--
-- Индексы таблицы `Portfolio`
--
ALTER TABLE `Portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Pricelist`
--
ALTER TABLE `Pricelist`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_price` (`section_id`);

--
-- Индексы таблицы `Price_section`
--
ALTER TABLE `Price_section`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Services_date`
--
ALTER TABLE `Services_date`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_services` (`id_service`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Author`
--
ALTER TABLE `Author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Differences`
--
ALTER TABLE `Differences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Info`
--
ALTER TABLE `Info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Portfolio`
--
ALTER TABLE `Portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Pricelist`
--
ALTER TABLE `Pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `Price_section`
--
ALTER TABLE `Price_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Review`
--
ALTER TABLE `Review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Services_date`
--
ALTER TABLE `Services_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Pricelist`
--
ALTER TABLE `Pricelist`
  ADD CONSTRAINT `FK_price` FOREIGN KEY (`section_id`) REFERENCES `Price_section` (`id`);

--
-- Ограничения внешнего ключа таблицы `Services_date`
--
ALTER TABLE `Services_date`
  ADD CONSTRAINT `fk_services` FOREIGN KEY (`id_service`) REFERENCES `Services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
