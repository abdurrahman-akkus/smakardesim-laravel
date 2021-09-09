-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: smakardesim
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bankaBilgileri`
--
USE smakardesim;
DROP TABLE IF EXISTS `bankaBilgileri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `bankaBilgileri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cocuk_id` int NOT NULL,
  `banka` varchar(255) DEFAULT NULL,
  `birim` char(3) DEFAULT NULL,
  `iban` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bankaBilgileri_FK` (`cocuk_id`),
  CONSTRAINT `bankaBilgileri_FK` FOREIGN KEY (`cocuk_id`) REFERENCES `cocuk` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bankaBilgileri`
--

LOCK TABLES `bankaBilgileri` WRITE;
/*!40000 ALTER TABLE `bankaBilgileri` DISABLE KEYS */;
INSERT INTO `bankaBilgileri` VALUES (1,1,'Ziraat Bankası','USD','TR123456789012345678901234'),(4,1,'Deneme Bankası','USD','YT14234234234234234345345'),(8,12,'Akbank A.Ş.','EUR','TR1231231231231231'),(11,15,'Ziraat Bankası','TRY','TR213412345345435345435'),(12,15,'Akbank A.Ş.','USD','TR235345643675786768678'),(13,1,'Yapı Kredi','TRY','TR234342342354435345');
/*!40000 ALTER TABLE `bankaBilgileri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cocuk`
--

DROP TABLE IF EXISTS `cocuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `cocuk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `yetkili_adi` varchar(255) DEFAULT NULL,
  `yetkili_soyadi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `faaliyet_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `iletisim` varchar(100) DEFAULT NULL,
  `sma_tip` char(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `valilik_izin_baslangic` date DEFAULT NULL,
  `valilik_izin_bitis` date DEFAULT NULL,
  `toplanacak` bigint DEFAULT NULL,
  `toplanan` bigint DEFAULT NULL,
  `yuzde` tinyint DEFAULT NULL,
  `birim` char(3) DEFAULT NULL,
  `guncelleme_ani` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kisa_aciklama` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `aciklama` text,
  `valilik_izni_url` text,
  `hastalik_raporu_url` text,
  `kardes_sayisi` int DEFAULT NULL,
  `resim_url` text,
  `tamamlandi_mi` tinyint DEFAULT NULL,
  `yetkili_kullanici` int DEFAULT NULL,
  `valilik_izin_turu` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `hastalik_raporu_turu` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `aktif_mi` tinyint DEFAULT '0',
  `onaylayan_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cocuk`
--

LOCK TABLES `cocuk` WRITE;
/*!40000 ALTER TABLE `cocuk` DISABLE KEYS */;
INSERT INTO `cocuk` VALUES (1,'Zeynep Sare BAYKUL','Semih','Baykul','21-577','+90 123 123 45 78','SMA-1','2021-02-01','2021-06-01',1000001,950000,94,'TRY','2021-09-05 12:39:10','<p>Bu parçada kısaca hastanın <strong><span style=\"color: rgb(255, 255, 255);\"><span style=\"background-color: rgb(31, 73, 125);\">özet</span></span></strong> bilgisi paylaşılacaktır.</p>','Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.','/dosyalar/Zeynep-Sare BAYKUL-valilik-izni-1627203611.png','/dosyalar/Zeynep-Sare BAYKUL-hastalık-raporu-1627203622.pdf',0,'/dosyalar/Zeynep-Sare BAYKUL-fotograf-1627203594.jpeg',0,2,'image','pdf',0,NULL),(11,'Deniz ASLAN','Ahmet','ASLAN','23-999','+90 123 123 45 78','SMA-1','2021-01-01','2021-06-01',1000000,900000,90,'TRY','2021-09-05 06:54:33','Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.','Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.','/dosyalar/Deniz-ASLAN-valilik-izni-1627203121.pdf','/dosyalar/Deniz-ASLAN-hastalık-raporu-1627203122.pdf',0,'/dosyalar/Deniz-ASLAN-fotograf-1627203119.jpeg',0,2,'pdf','pdf',1,NULL),(12,'Eslem NİLÜFER','Abdurrahman AKKUŞ',NULL,NULL,'+90 123 123 45 78','SMA-1','2021-01-01','2021-06-01',1000000,80000,8,'TRY','2021-08-24 11:13:10','Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.','Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.','/dosyalar/Abdurrahman-AKKUŞ(Örnek)-valilik-izni-1627074316.jpeg','/dosyalar/Abdurrahman-AKKUŞ(Örnek)-hastalık-raporu-1627074295.pdf',2,'/dosyalar/Abdurrahman-AKKUŞ(Örnek)-fotograf-1627074266.jpeg',0,1,'image','pdf',1,NULL),(15,'İkra Deniz PAMUK','Abdurrahman AKKUŞ',NULL,NULL,'+65636465465','SMA-1','2020-06-23','2022-08-25',1000000,90000,9,'EUR','2021-08-24 14:58:04','<p>Çocuğumuz şöyle biri böyle iyi.<strong>Çocuğumuz şöyle biri böyle iyi</strong>.<span style=\"background-color: rgb(31, 73, 125);\">Çocuğumuz</span> şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğu<br></p>','<p>Çocuğumuz şöyle biri böyle iyi.<strong>Çocuğumuz şöyle biri böyle iyi</strong>.<span style=\"background-color: rgb(31, 73, 125);\">Çocuğumuz</span> şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğum</p><p>Çocuğumuz şöyle biri böyle iyi.<strong>Çocuğumuz şöyle biri böyle iyi</strong>.<span style=\"background-color: rgb(31, 73, 125);\">Çocuğumuz</span> şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğumuz şöyle biri böyle iyi.Çocuğu</p>','/dosyalar/Beybo-AKKUŞ-valilik-izni-1627083519.pdf','/dosyalar/Beybo-AKKUŞ-hastalık-raporu-1627083563.jpeg',1,'/dosyalar/Beybo-AKKUŞ-fotograf-1627083505.jpeg',0,1,'pdf','image',1,NULL),(18,'Ahmet AKKUŞ','Abdurrahman','AKKUŞ','21-577',NULL,'SMA-1','2021-09-06','2021-09-09',0,0,NULL,'USD','2021-09-05 11:34:05',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,'pdf','pdf',0,NULL),(19,'Ahmet AKKUŞ','Abdurrahman','AKKUŞ','21-577',NULL,'SMA-1','2021-09-06','2021-09-09',0,0,NULL,'USD','2021-09-05 11:41:44',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(20,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,NULL,'USD','2021-09-05 11:42:42',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(21,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,NULL,'USD','2021-09-05 11:44:01',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(22,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,0,'USD','2021-09-05 11:44:40',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(23,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,0,'USD','2021-09-05 11:45:46',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(24,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,0,'USD','2021-09-05 12:00:13',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(25,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,0,'USD','2021-09-05 12:00:38',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(26,'asdasd','asdasd','asdasd','12312',NULL,'SMA-1','2021-09-02','2021-09-01',0,0,0,'USD','2021-09-05 12:01:17',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(27,'asfdasfas','asf','asfasf','asfdasf','asfasf','SMA-1','2021-09-03','2021-09-15',10000,1000,10,'USD','2021-09-05 12:08:49',NULL,NULL,NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL),(28,'SASASA','ERTERT','TRUU','UIYUIUYO','32423423','SMA-2','2021-09-01','2021-09-30',20000,2000,10,'EUR','2021-09-05 12:33:07','<p>SDASDASD</p>','<p>ASDASDASDSA<br></p>',NULL,NULL,0,NULL,0,2,'pdf','pdf',0,NULL);
/*!40000 ALTER TABLE `cocuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `connection` text COLLATE utf8_general_ci NOT NULL,
  `queue` text COLLATE utf8_general_ci NOT NULL,
  `payload` longtext COLLATE utf8_general_ci NOT NULL,
  `exception` longtext COLLATE utf8_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;  
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `kullanici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eposta` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sifre` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `yetki` int DEFAULT NULL,
  `aktif_mi` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kullanici_UN` (`kullanici_adi`),
  UNIQUE KEY `eposta_UN` (`eposta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanici`
--

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` VALUES (1,'a',NULL,'a',2,1),(2,'akkus','a','a',1,1);
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_08_07_125705_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('a.rahmanakkus@hotmail.com','$2y$10$c9OkLjr9lRNrri4f5nX4..IBi6WNWUHvGG0nESPYGSrpE/DqO32qi','2021-08-25 15:45:56');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_general_ci NOT NULL,
  `abilities` text COLLATE utf8_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_general_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_general_ci,
  `payload` text COLLATE utf8_general_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('dlqtYv41h0xEWfrAg3sQfLmlznQoLRDZtg8utQoo',2,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoieVJ2OWNidnpCbGNEdnJrd1J1RFFxNG1xSzlteW5hRHhHSjVmTXJGcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYmFua2EvZXlKcGRpSTZJbmxoYjJaVmNHbHhVRUkyUjNvemJVZDBZbnB4YjNjOVBTSXNJblpoYkhWbElqb2lVR0Z1YUdKaVRrSldOVXhUZFd4VVduUmpSbE0zVVQwOUlpd2liV0ZqSWpvaVlUWmtNMkUyWldNeFpEbGhabU5tTWpJell6Z3dZamMxTlRrNVl6ZzBNVE00TjJFM05UVTJNVGhqTlRNeFlqY3hOR014TmpoaU1XRTVPR1JrWkRneVpDSjkiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkOGduWXNnT3dNRHhWYlgvOUdiQm55dUVLQlNCdEtJSzlkcEc1UGEvQUUyU01GTFMzY2dpLkMiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDhnbllzZ093TUR4VmJYLzlHYkJueXVFS0JTQnRLSUs5ZHBHNVBhL0FFMlNNRkxTM2NnaS5DIjt9',1630851639),('QmM8nwqvpSYcydBmLaf3FpCF3SbBFEJV8o3gJvWX',2,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMlA3ZHJWTnM1OW9scVgyVUFTVFNteUpFSmdxeWZPZVhiNUVnd2NYSyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2JhbmthL2V5SnBkaUk2SWpBek1YRmlNRE5rTmtoMVZsWkdUMHBDTldoWWEzYzlQU0lzSW5aaGJIVmxJam9pUW05Q1pVUmxlbTFpZEVkRmMyVTNhV3czWVc0dlp6MDlJaXdpYldGaklqb2lZakZrTW1Fell6STBOemczWVRReFpHUmhNVFZtTTJKa01UazFZakZsTm1VeFpUYzFZbU0wTVRGaE1UTXhaamN6T1RabFltUmtZVFUzWVRFNE5UZGhNU0o5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDhnbllzZ093TUR4VmJYLzlHYkJueXVFS0JTQnRLSUs5ZHBHNVBhL0FFMlNNRkxTM2NnaS5DIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ4Z25Zc2dPd01EeFZiWC85R2JCbnl1RUtCU0J0S0lLOWRwRzVQYS9BRTJTTUZMUzNjZ2kuQyI7fQ==',1630861878);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8_general_ci,
  `two_factor_recovery_codes` text COLLATE utf8_general_ci,
  `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8_general_ci DEFAULT NULL,
  `role` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'a.akkus','a.rahmanakkus@hotmail.com',NULL,'$2y$10$IDuv6KTeCOh4NcSVVlChCuJZQWQDJk4.OPKUdaCV/waaSoXpkqdCq',NULL,NULL,'B1YAfEWjeYXrq5ysLFYvgx8tdBujwaJDuh0T0KR3NBcwLngGf3PUdYDsIdTm',NULL,NULL,0,'2021-08-07 10:42:39','2021-08-25 12:54:45'),(2,'Abdurrahman AKKUŞ','a.rahmanakkus@gmail.com',NULL,'$2y$10$8gnYsgOwMDxVbX/9GbBnyuEKBSBtKIK9dpG5Pa/AE2SMFLS3cgi.C',NULL,NULL,'cJWhbCgfN860zzrhTPxfUgJixYdXmxRm5RzcD87eoWIZAhYUloNA98ruhIXo',NULL,NULL,2,'2021-08-25 17:52:23','2021-08-31 16:53:26'),(3,'kullanici','k@k.k',NULL,'$2y$10$6oa36mfoHLrHJ1c.U4GE2OXYu/ivFZBXF.8ecGqiCk3jMyOr6lh5S',NULL,NULL,NULL,NULL,NULL,NULL,'2021-09-04 05:50:34','2021-09-04 05:50:34'),(4,'a','a@a.a',NULL,'$2y$10$WbeolU0VF9EVM3I.q9ti.eWhSIz7SI6TUvpDgqyZ6THqXUN6VZxTa',NULL,NULL,NULL,NULL,NULL,1,'2021-09-04 05:54:29','2021-09-04 05:54:29');
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

-- Dump completed on 2021-09-05 20:13:28
