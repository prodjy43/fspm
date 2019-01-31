-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.1.31-MariaDB - MariaDB Server
-- SE du serveur:                Linux
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour fspm
CREATE DATABASE IF NOT EXISTS `fspm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `fspm`;

-- Export de la structure de la table fspm. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.migrations : ~4 rows (environ)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_03_16_092519_create_news_table', 1),
	(4, '2018_03_16_130621_create_tags_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table fspm. news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_user_id_index` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.news : ~3 rows (environ)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `content`, `image`, `user_id`, `slug`, `created_at`, `updated_at`) VALUES
	(3, 'Huit apprentis neuchâtelois distingués par la FSPM', 'Au 13e étage de la tour de l’OFS, la section neuchâteloise de la Fédération Suisse des Professionnels de la Mécanique a récompensé huit apprentis du canton qui ont brillé aux Industry Skills Romandie fin novembre à Lausanne. Le Conseiller d’Etat Jean-Nath Karakash a souligné l’excellente prestation d’ensemble des jeunes lauréats, lesquels représentent l’avenir de l’industrie mécanique du pays.\r\n</br><a href="http://www.canalalpha.ch/actu/huit-apprentis-neuchatelois-distingue-par-la-fspm">Presentation</a><br/><a href="https://www.dropbox.com/sh/ruhiyt4p4xbktau/AABP1d00Sl6DAVq4fq_swUula?dl=0">Les photos</a>', 'test.jpg', 2, 'huit-apprentis-neuchatelois-distingues-par-la-fspm', '2018-03-30 14:35:51', '2018-03-30 14:35:51'),
	(5, 'Salon des métiers et de la formation', '<h3>Lausanne</h3>\r\nLe lieu de rencontre pour le choix professionnel et la formation</br>\r\nDu 21 au 26 novembre 2017 </br>\r\nExpo Beaulieu Lausanne <br>\r\n<a href="https://www.metiersformation.ch/fr-CH.aspx?utm_source=google&utm_medium=adwords&utm_campaign=suchnetzwerk&utm_term=brand&gclid=Cj0KCQiAlpDQBRDmARIsAAW6-DOtXtxF6waxW0uhqFnaYCUadfqfXMIE8bqJvssFiYTsHSqoriXwTbgaAr-XEALw_wcB">Détails</a>', 'test.jpg', 2, 'salon-des-metiers-et-de-la-formation', '2018-03-30 14:43:42', '2018-03-30 14:43:43'),
	(7, 'Event R\'17 FSPM', '<h3>Visite des ateliers Rubis Control</h3><br>Cette année, nous partirons à la découverte de la métrologie. Dans les locaux de Rubis Control (membre FSPM) nous aurons le privilège de visiter les différents ateliers dédiés à ce domaine très particulier qu’est le contrôle industriel. Monsieur Melnotte et son équipe nous transmettrons toute leur passion que cette jeune entreprise dégage. Grâce à leurs compétences, ils sont partenaires Zeiss pour la Suisse Romande. <br>La participation est limitée à 50 personnes et nous profiterons de l’occasion pour remettre les prix du concours QCM aux apprentis. \r\nLes transports seront organisés par chaque section. Nous vous communiquerons quelques jours avant, les lieux de rendez-vous. \r\nVeuillez-vous inscrire sous le lien Doodle ci-dessous sans oublier de mettre votre email ainsi que numéro de téléphone portable : <br><a href="https://doodle.com/poll/sbbs9arragui2yc7">Inscription</a><br><a href="https://www.dropbox.com/sh/meyj673qmc97365/AABR1_NwXmEJL6aif5arV0Mra?dl=0">Les Photos</a>', 'test.jpg', 2, 'event-r-17-fspm', '2018-03-30 14:47:34', '2018-03-30 14:47:35');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Export de la structure de la table fspm. news_tag
CREATE TABLE IF NOT EXISTS `news_tag` (
  `news_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `news_tag_news_id_index` (`news_id`),
  KEY `news_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `news_tag_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  CONSTRAINT `news_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.news_tag : ~0 rows (environ)
DELETE FROM `news_tag`;
/*!40000 ALTER TABLE `news_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_tag` ENABLE KEYS */;

-- Export de la structure de la table fspm. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.password_resets : ~0 rows (environ)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de la structure de la table fspm. tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.tags : ~0 rows (environ)
DELETE FROM `tags`;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Export de la structure de la table fspm. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table fspm.users : ~1 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Admin', 'admin@fspm.ch', '$2y$10$FIH0P14B5tcGwklFZWAg3O5gNLrNht711fHvcwkv9yqU97P.kGZ0u', NULL, '2018-03-30 12:34:14', '2018-03-30 12:34:14'),
	(3, 'Ivan Biedermann', 'prodjy43@gmail.com', '$2y$10$4O12YoDE8noxXpCX3Q7pu.jNJHQyo6NnlRlOC0KZB47c8JKUKLwTm', 'WDKBLajFT0nOHWHGF1vYMs7zrz070BQANGHaiE5rnfw0C9WbSe7qRTMvZudF', '2018-04-03 10:06:35', '2018-04-03 10:06:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
