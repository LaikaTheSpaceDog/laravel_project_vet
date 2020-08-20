-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	8.0.20-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animal_treatment`
--

DROP TABLE IF EXISTS `animal_treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animal_treatment` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `animal_id` bigint unsigned NOT NULL,
  `treatment_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `animal_treatment_animal_id_foreign` (`animal_id`),
  KEY `animal_treatment_treatment_id_foreign` (`treatment_id`),
  CONSTRAINT `animal_treatment_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `animal_treatment_treatment_id_foreign` FOREIGN KEY (`treatment_id`) REFERENCES `treatments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal_treatment`
--

LOCK TABLES `animal_treatment` WRITE;
/*!40000 ALTER TABLE `animal_treatment` DISABLE KEYS */;
/*!40000 ALTER TABLE `animal_treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animals`
--

DROP TABLE IF EXISTS `animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `weight_kg` double(5,2) NOT NULL,
  `height_m` double(3,2) NOT NULL,
  `biteyness` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `animals_owner_id_foreign` (`owner_id`),
  CONSTRAINT `animals_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animals`
--

LOCK TABLES `animals` WRITE;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;
INSERT INTO `animals` VALUES (1,'Marnie','dog','2002-10-17',10.00,0.40,0,'2020-08-17 10:55:44','2020-08-18 16:30:46',51),(2,'Barry','goldfish','2020-07-15',0.10,0.05,4,'2020-08-17 11:00:23','2020-08-18 10:59:04',5),(3,'Bob','frog','2019-08-12',0.60,0.02,5,'2020-08-17 11:31:49','2020-08-17 11:31:49',1),(6,'Twiggy','Turtle','1900-06-15',50.00,0.40,1,'2020-08-17 16:48:50','2020-08-17 16:48:50',1),(12,'Gregory','cat','1990-07-01',7.00,0.20,2,'2020-08-18 11:35:32','2020-08-18 11:35:32',51),(13,'Gregory','cat','1990-07-01',7.00,0.20,2,'2020-08-18 11:40:57','2020-08-18 11:40:57',51),(14,'Harry','cat','1990-07-01',7.00,0.20,2,'2020-08-18 11:54:33','2020-08-18 11:54:33',51),(15,'Barnie','walrus','2012-10-17',15.00,0.80,4,'2020-08-18 15:35:05','2020-08-18 15:35:05',51),(16,'Barnie','walrus','2012-10-17',15.00,0.80,4,'2020-08-18 15:43:20','2020-08-18 15:43:20',51),(17,'Dizzy','guinea pig','2018-04-09',0.60,0.10,5,'2020-08-18 17:04:06','2020-08-18 17:04:06',2);
/*!40000 ALTER TABLE `animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_08_11_101928_create_owners_table',1),(5,'2020_08_11_103645_add_columns_to_owners_table',1),(6,'2020_08_11_110459_change_length_telephone_column',1),(7,'2020_08_17_102536_create_animals_table',2),(8,'2016_06_01_000001_create_oauth_auth_codes_table',3),(9,'2016_06_01_000002_create_oauth_access_tokens_table',3),(10,'2016_06_01_000003_create_oauth_refresh_tokens_table',3),(11,'2016_06_01_000004_create_oauth_clients_table',3),(12,'2016_06_01_000005_create_oauth_personal_access_clients_table',3),(13,'2020_08_20_101406_create_treatments_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('5d43d5ae89d185a888968d3b81e3eaae7eec4d11c96821450721a3ee6f41489f30bd9c14152b26f7',1,2,NULL,'[]',0,'2020-08-19 16:05:24','2020-08-19 16:05:24','2021-08-19 16:05:24');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','0CJQti9Wp1LZqRCBcQDceey1eUG7avu1vwZZ3MHb',NULL,'http://localhost',1,0,0,'2020-08-19 15:56:07','2020-08-19 15:56:07'),(2,NULL,'Laravel Password Grant Client','S6oFq5T2ZmdtpkjavEVh04quXsCoBfkcreB4DGNe','users','http://localhost',0,1,0,'2020-08-19 15:56:07','2020-08-19 15:56:07');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2020-08-19 15:56:07','2020-08-19 15:56:07');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
INSERT INTO `oauth_refresh_tokens` VALUES ('39110ce06033bada762adc130ba726667921dc4e911ffd43134d0a7a21c7369e5c563ce8d2332f14','5d43d5ae89d185a888968d3b81e3eaae7eec4d11c96821450721a3ee6f41489f30bd9c14152b26f7',0,'2021-08-19 16:05:24');
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owners`
--

DROP TABLE IF EXISTS `owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `owners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address_2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `postcode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owners`
--

LOCK TABLES `owners` WRITE;
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;
INSERT INTO `owners` VALUES (1,'Alta','Schultz','+6868975325319','ayundt@hermiston.biz','2020-08-13 14:33:31','2020-08-18 10:46:54','9826 Georgiana Creek Suite 450','Suite 495','Lake Davionshire','75681'),(2,'Bernie','Kihn','+4502535181254','aoconnell@bechtelar.biz','2020-08-13 14:33:31','2020-08-13 14:33:31','19691 Zieme Knolls','Suite 491','East Brennan','73132-6574'),(3,'Sabina','Stevenson','+5496122496623','viola.boehm@yahoo.com','2020-08-13 14:33:31','2020-08-14 15:17:00','985 Rachelle Motorway Suite 418','Suite 208','South Jasmintown','49047-4261'),(4,'Antoinette','Jacobs','+2467146201999','feil.theron@yahoo.com','2020-08-13 14:33:31','2020-08-14 16:12:45','266 Beryl Prairies','Apt. 564','East Shannyside','88185-2149'),(5,'Kian','Tremblay','+2659456483369','erin18@jacobi.biz','2020-08-13 14:33:31','2020-08-14 16:56:09','33771 Milton Brooks Apt. 471','Apt. 600','Jovanyberg','22528'),(6,'Monique','Harvey','+8785485998753','ollie78@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','98259 Treutel Alley','Apt. 977','South Michaelfurt','17634-8701'),(7,'Karelle','Connelly','+3195397091803','hillard37@orn.org','2020-08-13 14:33:31','2020-08-13 14:33:31','6621 Yasmin Union Suite 911','Apt. 384','North Lessie','28661-9352'),(8,'Ara','Oberbrunner','+3868655084377','dspinka@hudson.com','2020-08-13 14:33:31','2020-08-13 14:33:31','2887 Ona Coves','Suite 877','West Nestorland','09517'),(9,'Mervin','Tromp','+8554803750608','wlowe@streich.com','2020-08-13 14:33:31','2020-08-13 14:33:31','15308 Kendrick Drive Suite 549','Apt. 140','Beerport','46723'),(10,'Maxime','Considine','+4094888405466','kianna03@jast.com','2020-08-13 14:33:31','2020-08-13 14:33:31','778 Walker Lock Suite 922','Apt. 624','Matteostad','95933-9417'),(11,'Foster','Upton','+2277814821473','ressie19@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','990 Little Expressway','Apt. 850','Cleorafurt','01484'),(12,'Lyda','Koch','+3960523630615','torp.boris@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','37503 Malvina Crescent Apt. 306','Suite 810','Port Dimitrimouth','71320-2480'),(13,'Emil','Pfeffer','+4559506638765','ikuvalis@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','6027 Alyson Highway Suite 330','Apt. 705','Port Ritahaven','33065'),(14,'Jerald','Tromp','+2032073860434','eva55@considine.org','2020-08-13 14:33:31','2020-08-13 14:33:31','45535 Delta Glens Apt. 714','Apt. 341','D\'Amoreshire','08182-7661'),(15,'Tavares','Gottlieb','+3382825597288','hhessel@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','84889 Stracke Throughway Apt. 886','Apt. 623','Lake Abbigailberg','37164'),(16,'Jordane','Huels','+9771279718400','nikolaus.roxane@erdman.net','2020-08-13 14:33:31','2020-08-13 14:33:31','316 Tony Groves','Apt. 718','New Kielmouth','42247'),(17,'Ladarius','Buckridge','+6089877263221','prohaska.orval@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','4554 Fae Divide','Suite 530','Demarcushaven','37158-5044'),(18,'Alvera','Kozey','+5756744550986','thea77@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','9423 Hintz Islands','Suite 677','Jacobiberg','72937'),(19,'Eldridge','Friesen','+8844646948782','ijones@koss.com','2020-08-13 14:33:31','2020-08-13 14:33:31','2679 Adams Street Apt. 005','Apt. 139','Rubyeberg','41662-3635'),(20,'Marge','Hahn','+7417619799171','maiya32@ohara.biz','2020-08-13 14:33:31','2020-08-13 14:33:31','6481 Miller Ridge Suite 538','Suite 075','East Terrill','20214-1093'),(21,'Janie','Welch','+3875233917960','gorczany.jeanne@becker.com','2020-08-13 14:33:31','2020-08-13 14:33:31','882 Pfannerstill Fork','Suite 150','Lake Jennie','60691'),(22,'Otis','Lowe','+6861382739263','lhamill@tremblay.com','2020-08-13 14:33:31','2020-08-13 14:33:31','320 Hodkiewicz Tunnel','Suite 879','South Clintside','69748'),(23,'Foster','Jast','+8427204279331','rodriguez.kristina@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','467 Celestino Vista Apt. 945','Suite 711','Rafaelmouth','03807'),(24,'Michel','Larkin','+4715752970927','melody05@schmidt.info','2020-08-13 14:33:31','2020-08-13 14:33:31','27245 Gaetano Green Suite 853','Suite 464','North Allietown','46081'),(25,'Milton','Koss','+9631408890631','nella92@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','61749 Bridgette Plain','Suite 321','Mariellebury','82136-5889'),(26,'Taya','Auer','+3060347281413','sandrine78@brown.com','2020-08-13 14:33:31','2020-08-13 14:33:31','22028 Weissnat Plaza Suite 011','Apt. 778','West Zachery','22946-5464'),(27,'Emelia','Kovacek','+6366061538565','elsa85@nienow.info','2020-08-13 14:33:31','2020-08-13 14:33:31','7173 Treutel Brook Apt. 074','Suite 620','Creminside','90768'),(28,'Cora','Gleichner','+6544459790442','eda16@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','9465 Ole Rest Suite 365','Suite 464','Lake Kaleighton','11653-1724'),(29,'Hulda','Raynor','+3810949334958','lesch.alexa@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','66084 Kautzer Cape','Suite 697','Scottyborough','25144-6792'),(30,'Lawson','Swaniawski','+8641575255836','armstrong.ariane@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','6333 Cristobal Knolls Suite 121','Apt. 043','Marksburgh','29148'),(31,'Alexandria','Bauch','+4934969671991','zena.huels@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','620 Tyrese Alley','Apt. 798','Hillburgh','54609'),(32,'Isaiah','Waters','+3094142478932','nbecker@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','5015 Alejandrin Vista','Apt. 984','Pollyborough','75013'),(33,'Haleigh','Dach','+4290275057097','hazel.pacocha@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','28998 Vida Center','Suite 646','North Imamouth','19686'),(34,'Heather','Veum','+2353345195679','ortiz.clotilde@schamberger.org','2020-08-13 14:33:31','2020-08-13 14:33:31','9771 Rice Common Apt. 107','Suite 368','Gregorioville','91348-4419'),(35,'Michelle','Rutherford','+8453224168021','osborne56@zemlak.com','2020-08-13 14:33:31','2020-08-13 14:33:31','9409 Eliezer Landing','Apt. 865','South Deangelo','16779-3912'),(36,'Noelia','Pouros','+6758124017537','savanah.nitzsche@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','7546 Bert Point','Suite 204','Stromanstad','89005'),(37,'Melvin','Johnston','+4429690063362','magnolia93@runolfsdottir.net','2020-08-13 14:33:31','2020-08-13 14:33:31','95133 Wilber Freeway','Suite 237','Joshuaville','95490-8615'),(38,'Kacey','Hegmann','+5394766421833','frosenbaum@stoltenberg.com','2020-08-13 14:33:31','2020-08-13 14:33:31','31521 Kerluke Mills','Suite 979','Alexaneland','45872-9840'),(39,'Joanie','D\'Amore','+6686111381091','wilfrid43@stehr.net','2020-08-13 14:33:31','2020-08-13 14:33:31','919 Zemlak Valley','Apt. 557','South Abigailport','62903-2550'),(40,'Freda','Marvin','+5731562632219','jude14@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','94865 Kessler Rapid Apt. 260','Apt. 888','Rhiannaview','87524'),(41,'Maya','Kuhn','+1009488516529','nicholaus62@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','2189 Jace Cove Apt. 925','Apt. 165','Ferneville','60745'),(42,'Brandon','Luettgen','+2537904954530','arlo.kautzer@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','9321 Okey Trafficway Suite 218','Suite 432','Wolfville','06434'),(43,'Fletcher','Effertz','+3454893894177','faustino91@yahoo.com','2020-08-13 14:33:31','2020-08-13 14:33:31','982 Cielo Unions','Apt. 859','Grimesland','63042'),(44,'Braden','Stoltenberg','+6109566773830','velva16@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','81981 Parker Islands Apt. 090','Apt. 909','Dickiport','33018-7416'),(45,'Rhoda','Crist','+3402589609385','rosemarie.flatley@deckow.biz','2020-08-13 14:33:31','2020-08-13 14:33:31','3066 Kunde Creek','Apt. 217','New Jefferystad','49970'),(46,'Laurine','Wiza','+3552853553455','rokeefe@gibson.com','2020-08-13 14:33:31','2020-08-13 14:33:31','91594 Kemmer Parkways','Apt. 877','Dickinsonstad','15658'),(47,'Autumn','Harvey','+8415182992952','abdiel.considine@paucek.com','2020-08-13 14:33:31','2020-08-13 14:33:31','6615 Virginie Rapid','Apt. 316','Lake Jabarimouth','23049-1657'),(48,'Godfrey','Dietrich','+2486761031647','johnston.francesca@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','4046 Weber Harbor Apt. 856','Suite 525','Elenorashire','05565'),(49,'Marlen','Hegmann','+7460685444881','gibson.newton@hotmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','542 Collins Gardens Apt. 523','Apt. 960','West Melyna','24599'),(50,'Clovis','Feest','+8386615989108','evan.roob@gmail.com','2020-08-13 14:33:31','2020-08-13 14:33:31','20640 Frida River Apt. 783','Apt. 721','South Ferne','28894'),(51,'Oscar','Wales','07849971842','oscarjwales@gmail.com','2020-08-14 09:17:10','2020-08-14 09:17:10','1D Gillbrook Road',NULL,'Manchester','M10 6WH'),(53,'Barry','Jordan','12345678910','barry@jordan.com','2020-08-18 10:50:34','2020-08-18 10:50:34','Lala Street','Unit 4','Lala Land','LA1 LA4'),(54,'Larry','David','3749389678','larry@david.com','2020-08-18 14:18:26','2020-08-18 14:18:26','1 Main Street','Flat 2','New York','NY1749');
/*!40000 ALTER TABLE `owners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatments`
--

DROP TABLE IF EXISTS `treatments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `treatments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatments`
--

LOCK TABLES `treatments` WRITE;
/*!40000 ALTER TABLE `treatments` DISABLE KEYS */;
/*!40000 ALTER TABLE `treatments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'An Author','an.author@gmail.com',NULL,'$2y$10$DHvC.6n0ZZ4mOzvp4zQEcOiRRMwbt7cCJ99JCeIf9YaSwwagma0Tm',NULL,'2020-08-19 16:03:09','2020-08-19 16:03:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-20 14:18:24
