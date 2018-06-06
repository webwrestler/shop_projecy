-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2018 г., 18:38
-- Версия сервера: 5.6.38
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `alias`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'm_bags', 'Man bags', 1, NULL, NULL),
(2, 'm_wallets', 'Man Wallets', 1, NULL, NULL),
(3, 'w_bags', 'Woman bags', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_30_132458_create_categories_table', 1),
(4, '2018_05_30_132521_create_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `id_category`, `title`, `short_description`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Leather bag', 'Vel vitae aperiam nobis recusandae est sed ut.', 'Aspernatur ut ea laboriosam dolorum aut autem et. Quam laboriosam exercitationem eum est autem dolores. Sit expedita ipsam vel sit autem aut autem et.', 'images\\pics16.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(2, 3, 'Leather bag', 'Odit non eum molestias culpa sit occaecati quasi exercitationem.', 'Quidem soluta laudantium sint. Rerum sit at quia eos. Corporis amet nostrum ex cumque voluptas corrupti. Enim distinctio blanditiis nihil. Culpa et cum officiis consequatur autem.', 'images\\pics13.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(3, 1, 'Leather bag', 'Corrupti quo sed est hic aut corrupti qui.', 'Nemo dolore cupiditate recusandae ad. Sed suscipit ea cum non non veritatis. Fuga in repellendus aut pariatur recusandae rerum.', 'images\\pics15.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(4, 3, 'Leather bag', 'Sint nihil est consequatur temporibus.', 'Ipsa ipsa nihil quis rerum odio tenetur eius. Harum distinctio sed qui voluptatem id quis. Sequi modi excepturi est delectus.', 'images\\pics18.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(5, 1, 'Leather bag', 'Itaque iure at ad perspiciatis omnis.', 'Et voluptatem optio et laboriosam dolore. Consectetur quasi porro molestias et reprehenderit omnis. Delectus quia nisi qui incidunt aut et. Saepe qui dolore consequatur qui.', 'images\\pics16.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(6, 3, 'Leather bag', 'Occaecati adipisci quis illum. Et aperiam aspernatur fugiat tempora.', 'Eum et et eaque eligendi. Itaque et autem explicabo eum eveniet excepturi itaque. Nobis dignissimos quae quis sit eos rerum laborum.', 'images\\pics13.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(7, 1, 'Leather bag', 'Voluptatem laboriosam eos earum magnam nesciunt.', 'Beatae amet ipsum suscipit omnis impedit odio. Aut adipisci dignissimos ea ut. Ex praesentium sit hic consequatur.', 'images\\pics14.jpg', '2018-06-04 14:47:45', '2018-06-04 14:47:45'),
(8, 2, 'Leather wallet', 'Veritatis natus quia et.', 'Cum nisi sed laboriosam tempore dolor ab. Itaque omnis quia sit veritatis distinctio officiis. Quia sed qui velit minus ipsum. Voluptate quod rerum ipsum sunt.', 'images\\pics10.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(9, 2, 'Leather wallet', 'Sit et esse temporibus ducimus laboriosam et provident.', 'Accusamus officia nam ipsam eos sapiente pariatur. Vitae nulla iste rerum repellat illum. Aliquid voluptatem culpa repellendus et enim necessitatibus suscipit neque.', 'images\\pics11.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(10, 2, 'Leather wallet', 'Voluptatem est ea distinctio. Iure facere consequatur facere quo.', 'Consequatur reprehenderit quod blanditiis harum est. Sit labore asperiores qui et voluptatem est. Perferendis quia delectus odio voluptate ut provident. Quia fuga culpa pariatur.', 'images\\pics12.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(11, 2, 'Leather wallet', 'Quis consequuntur dicta est fugit. Ut totam vitae illum minima.', 'Neque ut nesciunt ratione cumque est neque minus. Corporis voluptatibus et ut cum. Consequatur possimus ducimus impedit pariatur.', 'images\\pics17.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(12, 2, 'Leather wallet', 'Nesciunt ipsam laborum quo. Qui quidem ea dignissimos impedit enim.', 'Quam dolore iure sed autem ipsa. Expedita aliquid blanditiis autem quasi qui voluptas voluptate. Et est voluptatum eos est quo. Omnis qui est recusandae cupiditate.', 'images\\pics11.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(13, 2, 'Leather wallet', 'Quia ea molestias sint et assumenda eveniet.', 'Accusantium dolor totam animi velit sed. Quasi quis porro laudantium tempore corporis. Cumque omnis quisquam quia.', 'images\\pics10.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(14, 2, 'Leather wallet', 'Deserunt culpa dolor quo. Itaque enim rerum omnis ut.', 'Rerum reiciendis consequatur alias non tempora et qui. Qui molestiae maxime dicta amet sit reprehenderit molestias aut. Eos voluptas enim quam et.', 'images\\pics17.jpg', '2018-06-04 14:48:19', '2018-06-04 14:48:19'),
(15, 3, 'Leather bag', 'Quo dolores eligendi nulla voluptas.', 'Cupiditate et quas omnis dolore odit voluptatem dolore. Quia in aut consequatur non id quis. Id autem incidunt repudiandae quas. Esse nihil sit aut commodi expedita quia.', 'images\\pics18.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(16, 3, 'Leather bag', 'Pariatur sit voluptates dolorem mollitia dolor qui.', 'Et sit hic tenetur ut laudantium quod voluptate. Perspiciatis dolore aliquid expedita qui. Autem assumenda quo vel maxime. Aliquid veritatis et quos provident id voluptate.', 'images\\pics13.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(17, 1, 'Leather bag', 'Repellat animi aut et quasi ut sequi expedita.', 'Asperiores sapiente aut nostrum ipsa. Reiciendis deleniti sit iusto officia. Esse culpa similique sunt ut ex. Vel culpa ab quas aut.', 'images\\pics16.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(18, 3, 'Leather bag', 'Enim voluptatum cupiditate cumque est cumque.', 'Iusto dolorem nisi exercitationem. Ipsum et eius voluptate eligendi eaque. Tempora assumenda unde doloremque excepturi.', 'images\\pics18.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(19, 1, 'Leather bag', 'Vel modi et deleniti voluptatem et.', 'Voluptates molestiae eos maiores tempore. Quo et accusantium quod laborum ipsam. Odio ad rerum iste. Eos aut tenetur dolor et sint.', 'images\\pics15.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(20, 1, 'Leather bag', 'Reprehenderit et nisi quia fugit.', 'Repellendus sapiente nisi vel rem repellat modi. Autem aliquam voluptas hic optio ipsum repellat.', 'images\\pics14.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40'),
(21, 3, 'Leather bag', 'Molestiae molestias quo accusantium ducimus. At autem alias libero.', 'Vitae quam voluptates dolores non. Iusto sit ea nisi aperiam omnis voluptas veritatis. Aut et vel iste.', 'images\\pics13.jpg', '2018-06-04 14:48:40', '2018-06-04 14:48:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `activation_code`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Alf Kassulke I', 'madge25@hotmail.com', 'joe75', 'jeW9D\\%7awjG', '0', 0, 'yAy2YIeeeO', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(2, 'Dr. Hector Hand', 'raul89@gmail.com', 'ewell.schmeler', '/[._UA[<?j}2Fs,JLek', '0', 0, 'jeMWeQ5RL0', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(3, 'Noel Osinski', 'ola.stehr@hotmail.com', 'aliya34', '%$r\\~$j\"9E~6~/UN', '0', 0, 'HmPHXNPOQC', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(4, 'Ms. Loraine Bode', 'mcdermott.nick@yahoo.com', 'fmacejkovic', '}g3;WF=', '0', 0, 'sB69IXUP0F', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(5, 'Mrs. Candace Jacobs', 'johns.mackenzie@hotmail.com', 'kadams', 'e3(@$Gy$dP+', '0', 0, 'Y6Qamo1aUr', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(6, 'Mr. Jerry Hills IV', 'ahayes@hotmail.com', 'helen15', '3j$LN2', '0', 0, '3sFqwWad86', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(7, 'Ms. Corrine Schowalter', 'khintz@hotmail.com', 'trace.purdy', '+W`1R8Oc^Vv{{]', '0', 0, 'uw2A17TzCE', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(8, 'Murray Reichel', 'scarlett.feest@hotmail.com', 'gaetano.gislason', ')y!Z\"pmZ+0P=NM~', '0', 0, 'G375BGOLOj', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(9, 'Mr. Judd Cremin Sr.', 'johathan.howe@hotmail.com', 'goodwin.lillie', '\"Q{c6(>l$)]\'+D>Li', '0', 0, 'yZW0FhQ4F4', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(10, 'Rachel Kirlin', 'huel.hallie@gmail.com', 'feil.eliseo', 'XZCz;s\'pt&\'MdQlj', '0', 0, 'IsNa1zboPv', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(11, 'Dr. Kale Gleichner', 'reymundo.ullrich@yahoo.com', 'rubye72', '99d%=hC8~z:\"\'', '0', 0, 'XF7FOYO3Ba', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(12, 'Mossie Stamm', 'marjolaine05@gmail.com', 'geoffrey.boyle', 'JceVCG::<tYSZ+XZH', '0', 0, 'A6ZlLVKZgq', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(13, 'Prof. Angelica Hand V', 'brock.gislason@yahoo.com', 'kristian71', 'ZX%VS5&{8;wAApV2', '0', 0, 'kbMdqOLFPm', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(14, 'Grayson Lebsack', 'donna.dicki@hotmail.com', 'alexys57', 'c0K@{EeKd2_z\\JUT`09', '0', 0, 'BoVgAXvpRa', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(15, 'Vance Welch', 'hpadberg@hotmail.com', 'elehner', '>,bI\'GNx.#K*x', '0', 0, 'tXgepuL5pc', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(16, 'Santina Smitham', 'oortiz@hotmail.com', 'enos.mohr', 'Z!TfvY\'Dzh6.ZTq', '0', 0, 'xgNW2p9brz', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(17, 'Thalia Cormier', 'crystal88@yahoo.com', 'vreichel', '4\"@\"GPh*GQ', '0', 0, 'KLKS0PBNC1', '2018-06-04 14:46:37', '2018-06-04 14:46:37'),
(18, 'Lou Abshire Sr.', 'cschuster@gmail.com', 'reichert.elwyn', 'T*>?Z|j\')o6?', '0', 0, '0OxxZhZOJo', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(19, 'Mr. Westley Jones', 'tyrell.gaylord@hotmail.com', 'vthompson', '{o;)+)qB_}6w3A[\'.l>', '0', 0, 'Y4TgC4Yb0w', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(20, 'Mr. Isaac Heller I', 'westley19@gmail.com', 'mklocko', 'Ilr~gQAD}1l)SfOS>', '0', 0, 'Yt8thVG2MA', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(21, 'Mrs. Zita Emard DVM', 'hickle.rebeca@hotmail.com', 'austen51', '=niN5#6LS\\QA6d', '0', 0, 'GZvYZ3XNQB', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(22, 'Mrs. Donna Kris', 'blanda.boyd@hotmail.com', 'emmerich.ashtyn', 'p08:?1_e5%@#W7)', '0', 0, 'yO8VtX3Cjk', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(23, 'Jennifer Green IV', 'uwyman@hotmail.com', 'graham.vallie', '9$rrp}Kkv,(BP[]Wz)', '0', 0, 'KPW3MNWhtq', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(24, 'Stevie Stroman', 'noemy74@gmail.com', 'madilyn38', '^oJa`Hz.lMdvtVR', '0', 0, 'QwPmr3Iox9', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(25, 'Jermaine Wisozk', 'agustin.bartell@hotmail.com', 'timothy.king', '~.nAwyX,gHji>Tw%i', '0', 0, 'T1uV0vUCSj', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(26, 'Lonzo West V', 'cummings.antonia@hotmail.com', 'fokuneva', 'xc(RK=', '0', 0, 'ymo2bRYtQZ', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(27, 'Karson Schamberger', 'corwin.jordy@gmail.com', 'mrussel', 's](^zNOk$D', '0', 0, 'fjr07s51NT', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(28, 'Jameson Jacobson', 'nella.walter@yahoo.com', 'rosina35', 'w\"ZMeeoJK[m;W]@', '0', 0, 'FIeCwcB6UK', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(29, 'Jonatan Dickens', 'cyrus16@hotmail.com', 'lupe28', 'L_7PMST*t;VxwmECZ', '0', 0, 'C8qsxPiV6i', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(30, 'Eddie Bruen', 'heaney.kameron@yahoo.com', 'lupe.funk', '9~Lr(m', '0', 0, 'bNVoV5MKy2', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(31, 'Prudence Williamson', 'kuhic.newell@hotmail.com', 'ratke.saige', 'iikB$7\"OHft}}f', '0', 0, 'b7wcIZOzUS', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(32, 'Prof. Emmy Wisozk', 'foconner@gmail.com', 'jennings.hand', '~(n&JiU', '0', 0, 'U9jUZhs0ak', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(33, 'Fatima Blick', 'mroberts@gmail.com', 'cschaefer', 'jp\"Rbm', '0', 0, 'coTNSRnqvZ', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(34, 'Mitchell Huel DVM', 'fern44@gmail.com', 'sheila74', 'h5Rn!>h=W', '0', 0, 'fB6eAedYyU', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(35, 'Garret Beatty', 'yundt.retha@yahoo.com', 'julio04', 'HAfQF5cYd1}s:oX{?g.M', '0', 0, '3kXuBgWNwU', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(36, 'Freeda Rutherford', 'koss.trudie@hotmail.com', 'desiree77', 'J8^i|Z#oxG4W7rj', '0', 0, 'kVr1Ub6IXw', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(37, 'Trever Herman', 'alene35@hotmail.com', 'gage.bode', 'QRl*lE]sG=', '0', 0, 'DtsrikRlnF', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(38, 'Ms. Taya Bins II', 'andreane.cruickshank@gmail.com', 'xgibson', ',J!=_cP3v@S_LW(q|5`4', '0', 0, 'Crp1El1Arz', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(39, 'Patience Greenholt PhD', 'andres.okuneva@gmail.com', 'orion.steuber', 'AM1-PJA0U%<bOl+\'rK', '0', 0, 'Y6J3WmiPDw', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(40, 'Dr. Ova Reynolds Jr.', 'sondricka@yahoo.com', 'schowalter.elvie', 'ce.Yg@!kD-Vo<d\'lZ9', '0', 0, 'JppQOfVur4', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(41, 'Woodrow Marvin', 'carter.deangelo@yahoo.com', 'dfriesen', '[IPqk3', '0', 0, 'zOSZix2pAC', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(42, 'Rodger Auer IV', 'pkihn@hotmail.com', 'blick.elva', '%)F1k{xLfhkbklc', '0', 0, 'tLzcKgMxtl', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(43, 'Telly Walker', 'camryn.wisozk@hotmail.com', 'neichmann', '\"AG9wUc?xG%T%.', '0', 0, 'NLje1uPfD5', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(44, 'Dr. Isac McGlynn', 'dion23@gmail.com', 'pkuhn', 'D7}>mYs`8Kp,p*4hO', '0', 0, 'wKBU42iApc', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(45, 'Tabitha Christiansen', 'joanie74@hotmail.com', 'mona.kuhn', '8DmWUK[L<zi-r`tcL~O', '0', 0, '9axiuKFWpK', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(46, 'Wilhelmine Baumbach', 'tcollier@yahoo.com', 'jessica.steuber', 'y/\'k.#6<NW8HQ', '0', 0, 'C5r4oICWl0', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(47, 'Vernie Corkery', 'luther.gulgowski@yahoo.com', 'vmoore', 'Tx&Uamzz\"', '0', 0, 'rSdCXRzxLD', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(48, 'Elisabeth Gorczany', 'thahn@yahoo.com', 'pfannerstill.junius', 'F_?*3b{gb$-YzG\"q<', '0', 0, 'S8sOzpXnfj', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(49, 'Rosamond Rodriguez', 'okreiger@yahoo.com', 'purdy.jonas', 'PmlL\\*&([', '0', 0, 'plEqAgACs0', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(50, 'Ms. Sasha Huels', 'webster87@gmail.com', 'alicia06', '-sGmR0jW*;!@~', '0', 0, 'pViWtRxSQl', '2018-06-04 14:46:38', '2018-06-04 14:46:38'),
(51, 'John', 'searchyou13@gmail.com', 'Jukov', '$2y$10$SWfyFfvfgFwcOliAHCHcleEyv78lXOsayRrXWp7GEUqSu0Be6onsy', 'WJf6XPakhBMMSAv0MXphKzIQVuKUfw1528144366', 0, NULL, NULL, NULL),
(52, 'John', 'searchyou12@gmail.com', 'Jukov', '$2y$10$dEAZpI5d6812XcdkLWZBf.j5Qyze4Dmn/3vfhYCMMpSMPUqY6QYzG', 'OzCA1TQetnigtJWukigxs1MJUjEWjk1528144418', 1, 'd3ZbZnIr0QQdnv7HlCHpWZ53quMNASyLQZriiH3bMqRmeWPJKYBEx4rQqfTY', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
