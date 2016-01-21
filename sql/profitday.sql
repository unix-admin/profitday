-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 21 2016 г., 23:06
-- Версия сервера: 5.6.27-0ubuntu0.14.04.1
-- Версия PHP: 7.0.1-2+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profitday`
--
CREATE DATABASE IF NOT EXISTS `profitday` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `profitday`;

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fio` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `username`, `fio`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', '$2y$13$jWwoDOw24qwhdTKo5l9zgOFJHUnltCH5t9b57W/6JWAE7VAv3RASK', NULL, 'admin@localhost.com', 10, 0, 0),
(2, 'user', '', '', '$2y$13$gFt7ev8aeJqaTsdjsI7QH.ZohyqKAklcnW6LR/h.JYbwrgbf0iwA2', NULL, 'user@localhost.com', 10, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `title_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `have_event` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `title_uk`, `title_ru`, `title_en`, `have_event`) VALUES
(1, 'Вінниця', 'Винница', 'Vinnytsia', 0),
(2, 'Дніпропетровськ', 'Днепропетровск', 'Dnipropetrovsk', 0),
(3, 'Донецьк', 'Донецк', 'Donetsk', 0),
(4, 'Житомир', 'Житомир', 'Zhytomyr', 0),
(5, 'Запоріжжя', 'Запорожье', 'Zaporizhia', 0),
(6, 'Івано-Франківськ', 'Ивано-франковск', 'Ivano-Frankivsk', 0),
(7, 'Київ', 'Киев', 'Kiev', 0),
(8, 'Кіровоград', 'Кировоград', 'Kirovohrad', 0),
(9, 'Луганськ', 'Луганск', 'Luhansk', 0),
(10, 'Луцьк', 'Луцк', 'Lutsk', 0),
(11, 'Львів', 'Львов', 'Lviv', 0),
(12, 'Миколаїв', 'Николаев', 'Mykolaiv', 0),
(13, 'Одеса', 'Одесса', 'Odessa', 0),
(14, 'Полтава', 'Полтава', 'Poltava', 0),
(15, 'Рівне', 'Ровно', 'Rivne', 0),
(16, 'Суми', 'Сумы', 'Sumy', 0),
(17, 'Тернопіль', 'Тернополь', 'Ternopil', 0),
(18, 'Ужгород', 'Ужгород', 'Uzhhorod', 0),
(19, 'Харків', 'Харьков', 'Kharkiv', 0),
(20, 'Херсон', 'Херсон', 'Kherson', 0),
(21, 'Хмельницький', 'Хмельницкий', 'Khmelnytskyi', 0),
(22, 'Черкаси', 'Черкассы', 'Cherkasy', 0),
(23, 'Чернівці', 'Черновцы', 'Chernivtsi', 0),
(24, 'Чернігів', 'Чернигов', 'Chernihiv', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `need_presentation` tinyint(1) DEFAULT '0',
  `need_training` tinyint(1) DEFAULT '0',
  `pay_agree` tinyint(1) DEFAULT '0',
  `ideas` text COLLATE utf8_unicode_ci,
  `contact_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_organisator` tinyint(1) DEFAULT '0',
  `is_sponsor` tinyint(1) DEFAULT '0',
  `order` int(11) NOT NULL,
  `logo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vk_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name`, `need_presentation`, `need_training`, `pay_agree`, `ideas`, `contact_person`, `telephone`, `e_mail`, `site`, `skype`, `is_organisator`, `is_sponsor`, `order`, `logo_url`, `intro_uk`, `intro_ru`, `intro_en`, `facebook_profile`, `google_profile`, `linkedin_profile`, `vk_profile`) VALUES
(1, 'Вінницька ІТ-Академія', 0, 0, 0, NULL, 'Роман', NULL, NULL, 'http://www.ita.in.ua', NULL, 1, 1, 1, '/files/logo/ita.gif', 'За підтримки Міністерства молоді та спорту України, http://dsmsu.gov.ua', '', '', '', '', '', ''),
(2, 'ІТ Академія ІНТІТА', 0, 0, 0, NULL, 'Роман', NULL, NULL, 'http://www.intita.com', NULL, 1, 1, 2, '/files/logo/intita.png', 'ВМГО «Молодіжний центр працевлаштування», http://www.robotamolodi.org', '', '', '', '', '', ''),
(3, 'Win Interactive LLC', 0, 0, 0, NULL, 'Вася', NULL, NULL, 'http://www.win-interactive.com', NULL, 0, 1, 1, '/files/logo/win-interactive.gif', 'ВМГО «Молодіжний центр працевлаштування», http://www.robotamolodi.org', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_uk` text COLLATE utf8_unicode_ci NOT NULL,
  `content_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `tags_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `title_uk`, `title_ru`, `title_en`, `content_uk`, `content_ru`, `content_en`, `tags_uk`, `tags_ru`, `tags_en`, `type`, `status`) VALUES
(1, 'День кар`єри «PROFITDAY»', '', '', '  <div class="row">\r\n                    <!--<div class="col-md-12">-->\r\n                        <div class="col-md-8 col-md-offset-2">\r\n                            <h3 class="mainName">День кар’єри «PROFITDAY»</h3>\r\n                            <div class="col-md-1 col-sm-1 col-xs-1 orange-line"></div>\r\n                            <hr class="col-md-10" style="margin-top: 2px;">\r\n                        </div>\r\n                    <!--</div>-->\r\n                </div>\r\n                <div class="row">\r\n                    <!--<div class="col-md-12">-->\r\n                        <div class="col-md-8 col-md-offset-2">\r\n                            <p class="index-text">призначений для тих, хто шукає можливості працевлаштування чи бажає визначитись із майбутньою роботою в сфері інформаційних технологій.\r\n                            Компанії тут мають нагоду знайти собі фахівців.\r\n                            Навчальні заклади, які готують спеціалістів - презентувати себе та запросити потенційних абітурієнтів.\r\n                            Молоді люди – більше дізнатися про професії або навіть зробити спробу працевлаштування.\r\n                            Під час<span style="color: #f07c00"> «PROFIТDAY» </span>представники передових компаній влаштовують презентації, проводять семінари, тренінги, майстер-класи, та приймають резюме від кандидатів.\r\n                            Освітні заклади знайомлять з умовами вступу та навчання, перспективами напрямків, за якими вони готують фахівців, а також здійснюватимуть попередній відбір анкет потенційних студентів.</p><br>\r\n                            <ul type="square" style="color: #f07c00;">\r\n                                <li><span class="index-text">Якщо ти працюєш за невелику зарплатню, але хочеш працювати в гідній компанії, розвиватись і заробляти більше.</span></li>\r\n                                <li><span class="index-text">Якщо ти студент, чи школяр, який робить свої перші кроки до пошуку роботи чи просто цікавишся працевлаштуванням в ІТ-сфері, то</span><span class="index-text" style="color: #f07c00"> «PROFIТDAY» </span><span class="index-text">саме для тебе.</span></li>\r\n                            </ul>\r\n                            <span class="index-text">Приходь та отримай можливість дізнатись, що потрібно вміти і знати, та які перспективи чекають тих, хто пов’яже себе із сучасними професіями.</span>\r\n                        </div>\r\n                    <!--</div>-->\r\n                </div>', '', '', '', '', '', 'index', 1),
(2, 'День кар`єри «PROFITDAY»', '', '', '<div class="row">\r\n        <div class="col-lg-offset-3 col-lg-7 " id="aboutCompany_careerDay">\r\n            <h2>День кар''єри &laquo;PROFI DAY&raquo;</h2>\r\n            <hr class="aboutCompany_hr-normal">\r\n            <hr class="aboutCompany_hr-yellow">\r\n        </div>\r\n    </div>\r\n\r\n    <div class="row">\r\n        <div class="col-lg-offset-3 col-lg-7 " id="aboutCompany_mainContent">\r\n            <p>\r\n                організується з метою пошуку працівників компаніями, рекламування навчальних закладів і курсів, які     <br>\r\n                готують спеціалістів та для популяризації IT сфери і IT професій (тестувальник, програміст, системній   <br>\r\n                адміністратор та інші) серед молоді.                                                                    <br>\r\n                Даний захід представляє собою-поєднання дня кар''єри і ярмарки вакансій для спеціалістів, виставку       <br>\r\n                навчальних закладів, які готують спеціалістів для ринку праці та презентації компаній (їх напрямки      <br>\r\n                діяльності та технології з якими вони працюють, умови роботи, партнери, замовники, корпоративні         <br>\r\n                особливості, плани на майбутнє тощо)\r\n            </p>\r\n            <h2 class="aboutCompany_contentH2">В програмі</h2>\r\n            <p>\r\n                передові компанії проводитимуть презентациї, прийматимуть CV від кандидатів, проводитимуть семінари,    <br>\r\n                тренінги та майстер-класи.                                                                              <br>\r\n                Навчальні заклади також презентуватимуть умови прийому та навчання, перспективи напрямків за якими      <br>\r\n                вони готують.\r\n            </p>\r\n            <h2 class="aboutCompany_contentH2">Для вас</h2>\r\n            <span>презентація своєї компанії та кар''єрних можливостей для молодих спеціалістів;</span>\r\n            <ul id="aboutCompany_ul">\r\n                <li class="aboutCompany_li"><span>підбір талановитих та кар''єрних можливостей для молодих свеціалістів;</span></li>\r\n                <li class="aboutCompany_li"><span>налагодження нових бізнес-контаків із потенціальними парнтерами та клієнтами;</span></li>\r\n                <li class="aboutCompany_li"><span>розповсюдження власних рекламних матеріалів;</span></li>\r\n                <li class="aboutCompany_li"><span>реклама компанії в рамках потужної промо-компанії проекту по Україні;</span></li>\r\n                <li class="aboutCompany_li"><span>набір кадрового резерву на сезонні періоди та тимчасові роботи;</span></li>\r\n                <li class="aboutCompany_li"><span>покращення іміджу компанії серед молоді;</span></li>\r\n            </ul>\r\n            На <span id="aboutCompany_PDOrange">&laquo;PROFIDAY&raquo;</span> запрошені молоді люди, які шукають чи хочуть змінити\r\n            роботу, студенти та школярі.\r\n        </div>\r\n    </div>\r\n\r\n    <div class="row">\r\n        <div class=" col-lg-offset-4 col-lg-7" id="aboutCompany_motoWord">\r\n            Участь у проекті надасть можливість створити позитивний імідж соціально-відповідальної <br>\r\n            компанії яка підтримує молодь, а також внутрішньо переміщених осіб\r\n        </div>\r\n    </div>', '', '', '', '', '', 'company', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `event_date` datetime DEFAULT NULL,
  `title_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `event_auditories`
--

DROP TABLE IF EXISTS `event_auditories`;
CREATE TABLE `event_auditories` (
  `id` int(11) NOT NULL,
  `title_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `event_program`
--

DROP TABLE IF EXISTS `event_program`;
CREATE TABLE `event_program` (
  `event_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `auditory_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `event_sections`
--

DROP TABLE IF EXISTS `event_sections`;
CREATE TABLE `event_sections` (
  `id` int(11) NOT NULL,
  `title_uk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayed_default` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1453415431),
('m140506_102106_rbac_init', 1453417550),
('m151221_085857_init_database', 1453415435),
('m160103_104242_alter_content', 1453415435),
('m160113_183159_alter_events', 1453415435),
('m160121_210224_init_data', 1453415435);

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `how_know_about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ideas` text COLLATE utf8_unicode_ci,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vk_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `event_id` int(11) NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `registration_by_cities`
--

DROP TABLE IF EXISTS `registration_by_cities`;
CREATE TABLE `registration_by_cities` (
  `city_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `registration_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `registration_by_event_sections`
--

DROP TABLE IF EXISTS `registration_by_event_sections`;
CREATE TABLE `registration_by_event_sections` (
  `section_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `registration_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event_auditories`
--
ALTER TABLE `event_auditories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event_sections`
--
ALTER TABLE `event_sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `event_auditories`
--
ALTER TABLE `event_auditories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `event_sections`
--
ALTER TABLE `event_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
