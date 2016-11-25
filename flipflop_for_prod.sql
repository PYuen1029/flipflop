-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.12-0ubuntu1.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table flipflop.flipflops
CREATE TABLE IF NOT EXISTS `flipflops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flip` longtext COLLATE utf8_unicode_ci NOT NULL,
  `flop` longtext COLLATE utf8_unicode_ci NOT NULL,
  `source_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `flip_source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flop_source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `politician_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flipflops_politician_id_foreign` (`politician_id`),
  CONSTRAINT `flipflops_politician_id_foreign` FOREIGN KEY (`politician_id`) REFERENCES `politicians` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.flipflops: ~3 rows (approximately)
/*!40000 ALTER TABLE `flipflops` DISABLE KEYS */;
INSERT INTO `flipflops` (`id`, `title`, `summary`, `flip`, `flop`, `source_type`, `flip_source`, `flop_source`, `created_at`, `updated_at`, `politician_id`) VALUES
	(1, 'Supporting TPP', 'Hillary Clinton claims to be opposed to the TPP during the 2016 election cycle but originally supported it as secretary of state.', 'So it\'s fair to say that our economies are entwined, and we need to keep upping our game both bilaterally and with partners across the region through agreements like the Trans-Pacific Partnership or TPP. Australia is a critical partner. This TPP sets the gold standard in trade agreements to open free, transparent, fair trade, the kind of environment that has the rule of law and a level playing field. And when negotiated, this agreement will cover 40 percent of the world\'s total trade and build in strong protections for workers and the environment.', 'And make no mistake, we will defend American jobs and American workers by saying no to the assault on the right to organize and bargain collectively.\n				<br />\n				And we’re going to say no to attacks on working families and no to bad trade deals and unfair trade practices, including the Trans- Pacific Partnership.', 'text', '08/11/2012 - <a href=\'http://www.state.gov/secretary/20092013clinton/rm/2012/11/200565.htm\'> state.gov transcript  </a>', '07/12/2016 - <a href =\'http://time.com/4403264/bernie-sanders-hillary-clinton-endorsement-full-transcript/\'> Full transcript of Bernie Sanders\' endorsement of Hillary Clinton </a>', NULL, NULL, 2),
	(2, 'Accepting the Outcome of the Election', 'Donald Trump switches positions on whether he would accept the results of the election.', 'I want to make America great again. I\'m going to be able to do it, I don\'t believe Hillary will. The answer is if she wins, I will absolutely support her.', 'Chris Wallace: There is a tradition in this country, in fact one of the prides of this country, is the peaceful transition of power, and that no matter how hard fought a campaign is, that at the end of the campaign, that the loser concedes to the winner.  Are you saying that you\'re not prepared to -- <br/> Donald Trump: What I\'m saying is that I will tell you at the time, I\'ll keep you in suspense. Okay?', 'text', '09/26/2016 - <a href=\'https://www.youtube.com/watch?v=ZEHPrYUcoi0\'> First Presidential Debate </a>', '10/19/2016 - <a href=\'https://www.youtube.com/watch?v=cP0G4vJ5OMw\'> Third Presidential Debate </a>', NULL, NULL, 1),
	(3, 'On abortion', 'Mitt Romney flip-flops from pro-choice to pro-life when running for president in 2012.', 'I believe that abortion should be safe and legal in this country. I believe that since Roe v. Wade has been the law for 20 years, it should be sustained and supported. And I sustain and support that law and support the right of a woman to make that choice.', 'I am pro-life and believe that abortion should be limited to only instances of rape, incest, or to save the life of the mother. I support the reversal of Roe v. Wade, because it is bad law and bad medicine. Roe was a misguided ruling that was a result of a small group of activist federal judges legislating from the bench. I support the Hyde Amendment, which broadly bars the use of federal funds for abortions. And as president, I will support efforts to prohibit federal funding for any organization like Planned Parenthood, which primarily performs abortions or offers abortion-related services.', 'text', '10/25/1994 - <a href=\'https://www.youtube.com/watch?v=ECVyuz5iNyQ\'> 1994 Senatorial Debate between Mitt Romney and Edward Kennedy', '06/18/2011 - <a href=\'http://www.nationalreview.com/corner/269984/my-pro-life-pledge-mitt-romney\'> Mitt Romney op-ed about his pro-life position for National Review </a>', NULL, NULL, 3);
/*!40000 ALTER TABLE `flipflops` ENABLE KEYS */;

-- Dumping structure for table flipflop.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(65, '2014_10_12_000000_create_users_table', 1),
	(66, '2014_10_12_100000_create_password_resets_table', 1),
	(67, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
	(68, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
	(69, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
	(70, '2016_06_01_000004_create_oauth_clients_table', 1),
	(71, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
	(72, '2016_11_05_154710_create_politicians_table', 1),
	(73, '2016_11_06_154950_create_flipflops_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table flipflop.oauth_access_tokens
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.oauth_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;

-- Dumping structure for table flipflop.oauth_auth_codes
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.oauth_auth_codes: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;

-- Dumping structure for table flipflop.oauth_clients
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.oauth_clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;

-- Dumping structure for table flipflop.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.oauth_personal_access_clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;

-- Dumping structure for table flipflop.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.oauth_refresh_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;

-- Dumping structure for table flipflop.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table flipflop.politicians
CREATE TABLE IF NOT EXISTS `politicians` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flip_background` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default_red.png',
  `flop_background` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default_blue.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.politicians: ~3 rows (approximately)
/*!40000 ALTER TABLE `politicians` DISABLE KEYS */;
INSERT INTO `politicians` (`id`, `first_name`, `last_name`, `flip_background`, `flop_background`, `created_at`, `updated_at`) VALUES
	(1, 'Donald', 'Trump', 'donald_trump_red.png', 'donald_trump_blue.png', NULL, NULL),
	(2, 'Hillary Rodham', 'Clinton', 'hillary_clinton_red.png', 'hillary_clinton_blue.png', NULL, NULL),
	(3, 'Mitt', 'Romney', 'mitt_romney_red.png', 'mitt_romney_blue.png', NULL, NULL);
/*!40000 ALTER TABLE `politicians` ENABLE KEYS */;

-- Dumping structure for table flipflop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table flipflop.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
