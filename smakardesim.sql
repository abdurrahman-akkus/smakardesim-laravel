-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                5.7.9 - MySQL Community Server (GPL)
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- smakardesim için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `smakardesim` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `smakardesim`;

-- tablo yapısı dökülüyor smakardesim.bankabilgileri
CREATE TABLE IF NOT EXISTS `bankabilgileri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cocuk_id` int(11) NOT NULL,
  `banka` varchar(255) DEFAULT NULL,
  `birim` char(3) DEFAULT NULL,
  `iban` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bankaBilgileri_FK` (`cocuk_id`),
  CONSTRAINT `bankaBilgileri_FK` FOREIGN KEY (`cocuk_id`) REFERENCES `cocuk` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- smakardesim.bankabilgileri: ~9 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `bankabilgileri` DISABLE KEYS */;
INSERT INTO `bankabilgileri` (`id`, `cocuk_id`, `banka`, `birim`, `iban`) VALUES
	(1, 1, 'Ziraat Bankası', 'USD', 'TR123456789012345678901234'),
	(2, 1, 'Yapı ve Kredi Bankası', 'TRY', 'TR678901234567890123412345'),
	(4, 1, 'Deneme Bankası', 'USD', 'YT14234234234234234345345'),
	(7, 2, 'Ziraat Bankası', 'USD', '1231231231312'),
	(8, 12, 'Akbank A.Ş.', 'EUR', 'TR1231231231231231'),
	(9, 12, 'Başka Banka', 'USD', 'US21312312313213'),
	(10, 12, 'Diğer Banka', 'USD', 'TR123325344564576567'),
	(11, 9, 'Ziraat Bankası', 'TRY', 'TR213412345345435345435'),
	(12, 9, 'Akbank A.Ş.', 'USD', 'TR235345643675786768678');
/*!40000 ALTER TABLE `bankabilgileri` ENABLE KEYS */;

-- tablo yapısı dökülüyor smakardesim.cocuk
CREATE TABLE IF NOT EXISTS `cocuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `yetkili_adi` varchar(255) DEFAULT NULL,
  `yetkili_soyadi` varchar(100) DEFAULT NULL,
  `faaliyet_no` varchar(100) DEFAULT NULL,
  `iletisim` varchar(100) DEFAULT NULL,
  `sma_tip` char(5) DEFAULT NULL,
  `valilik_izin_baslangic` date DEFAULT NULL,
  `valilik_izin_bitis` date DEFAULT NULL,
  `toplanacak` bigint(20) DEFAULT NULL,
  `toplanan` bigint(20) DEFAULT NULL,
  `yuzde` tinyint(4) DEFAULT NULL,
  `birim` char(3) DEFAULT NULL,
  `guncelleme_ani` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kisa_aciklama` text,
  `aciklama` text,
  `valilik_izni_url` text,
  `hastalik_raporu_url` text,
  `kardes_sayisi` int(11) DEFAULT NULL,
  `resim_url` text,
  `tamamlandi_mi` tinyint(4) DEFAULT NULL,
  `yetkili_kullanici` int(11) DEFAULT NULL,
  `valilik_izin_turu` varchar(15) DEFAULT NULL,
  `hastalik_raporu_turu` varchar(15) DEFAULT NULL,
  `aktif_mi` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- smakardesim.cocuk: ~8 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `cocuk` DISABLE KEYS */;
INSERT INTO `cocuk` (`id`, `ad`, `yetkili_adi`, `yetkili_soyadi`, `faaliyet_no`, `iletisim`, `sma_tip`, `valilik_izin_baslangic`, `valilik_izin_bitis`, `toplanacak`, `toplanan`, `yuzde`, `birim`, `guncelleme_ani`, `kisa_aciklama`, `aciklama`, `valilik_izni_url`, `hastalik_raporu_url`, `kardes_sayisi`, `resim_url`, `tamamlandi_mi`, `yetkili_kullanici`, `valilik_izin_turu`, `hastalik_raporu_turu`, `aktif_mi`) VALUES
	(1, 'Abdurrahman AKKUŞ(Örnek)', 'Semih', 'Baykul', '21-577', '+90 123 123 45 78', 'SMA-1', '2021-01-01', '2021-06-01', 1000000, 900000, 90, 'TRY', '2021-07-29 23:38:50', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-valilik-izni-1627064027.png', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-hastalık-raporu-1627064352.pdf', 155, 'dosyalar/baby3.jpg', 0, 1, 'image', 'pdf', 1),
	(2, 'Deneme2(Örnek)', 'Ahmet AKKUŞ', NULL, NULL, '+90 123 123 45 78', 'SMA-2', '2021-01-01', '2021-06-01', 1000000, 9000, 9, 'USD', '2021-07-24 17:32:37', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', 'dosyalar/valilik_izni_ornek.pdf', 'dosyalar/hastalik_raporu_ornek.pdf', 10, 'dosyalar/baby2.jpg', 0, 1, 'image', 'pdf', 1),
	(3, 'Deneme3(Örnek)', 'Ahmet AKKUŞ', NULL, NULL, '+90 123 123 45 78', 'SMA-2', '2021-01-01', '2021-06-01', 1000000, 100000, 10, 'EUR', '2021-07-24 17:32:37', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', 'dosyalar/valilik_izni_ornek.pdf', 'dosyalar/hastalik_raporu_ornek.pdf', 10, 'dosyalar/baby3.jpg', 1, 1, 'pdf', 'pdf', 1),
	(9, 'Abdurrahman AKKUŞ2', 'Şeyma AKKUŞ', NULL, NULL, '+90 123 123 45 78', 'SMA-1', '2021-01-01', '2021-06-01', 1000000, 900000, 90, 'TRY', '2021-07-29 23:30:22', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', NULL, NULL, NULL, 'dosyalar/baby2.jpg', NULL, 1, NULL, NULL, 1),
	(11, 'Deniz ASLAN', 'Ahmet ASLAN', NULL, NULL, '+90 123 123 45 78', 'SMA-1', '2021-01-01', '2021-06-01', 1000000, 900000, 90, 'TRY', '2021-07-30 00:12:40', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-valilik-izni-1627064027.png', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-hastalık-raporu-1627064352.pdf', 0, 'dosyalar/baby2.jpg', NULL, 2, 'image', 'pdf', 1),
	(12, 'Meryem Beyza', 'Abdurrahman AKKUŞ', NULL, NULL, '+90 123 123 45 78', 'SMA-1', '2021-01-01', '2021-06-01', 1000000, 999999, 99, 'TRY', '2021-07-29 23:30:13', 'Bu parçada kısaca hastanın özet bilgisi paylaşılacaktır.', 'Bu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.\nBu kısımda hasta ile ilgili detaylı açıklama yapılacaktır. \nAçıklama içerisinde hikayesinden bahsedilmesi uygun olacaktır. \nOnun dışında bahsedilmek istenen bir şey varsa da eklenebilir.\nAyrıca <code>html</code> kodları da eklenebilir.', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-valilik-izni-1627074316.jpeg', 'dosyalar/Abdurrahman-AKKUŞ(Örnek)-hastalık-raporu-1627074295.pdf', 0, 'dosyalar/baby3.jpg', 0, 1, 'image', 'pdf', 1),
	(16, 'asdasdasd', '', NULL, NULL, '', 'SMA-1', '2020-06-23', '2022-08-25', 100, 1, 1, 'USD', '2021-07-29 23:30:15', '', '', 'dosyalar/Beybo-AKKUŞ-valilik-izni-1627083519.pdf', 'dosyalar/Beybo-AKKUŞ-hastalık-raporu-1627083563.jpeg', 0, 'dosyalar/baby3.jpg', 1, 1, 'pdf', 'image', 1),
	(17, 'sdfsdf', 'sdfsdf', NULL, NULL, '', 'SMA-1', '2021-07-23', '2021-07-23', 1, 1, 100, 'USD', '2021-07-29 23:30:30', '', '', '', '', 0, 'dosyalar/baby2.jpg', 1, 1, 'pdf', 'pdf', 1);
/*!40000 ALTER TABLE `cocuk` ENABLE KEYS */;

-- tablo yapısı dökülüyor smakardesim.kullanici
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `eposta` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sifre` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `yetki` int(11) DEFAULT NULL,
  `aktif_mi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kullanici_UN` (`kullanici_adi`),
  UNIQUE KEY `eposta_UN` (`eposta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- smakardesim.kullanici: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` (`id`, `kullanici_adi`, `eposta`, `sifre`, `yetki`, `aktif_mi`) VALUES
	(1, 'a', NULL, 'a', 2, 1),
	(2, 'akkus', 'a', 'a', 1, 1);
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;

-- tablo yapısı dökülüyor smakardesim.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- smakardesim.migrations: 0 rows tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- tablo yapısı dökülüyor smakardesim.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- smakardesim.users: 0 rows tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
