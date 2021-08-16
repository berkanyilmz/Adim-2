-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Ağu 2021, 12:40:26
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `offers`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_adi` text COLLATE utf8_turkish_ci,
  `sifre` text COLLATE utf8_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_adi`, `sifre`) VALUES
('a', '123'),
('b', '345'),
('c', '789'),
('d', '123'),
('e', '123'),
('f', '1'),
('g', '12'),
('h', '4321'),
('q', '123456789');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL COMMENT 'Teklif Id si',
  `productId` int(11) DEFAULT NULL COMMENT 'Ürün Id si',
  `offerHead` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'Teklif açıklaması',
  `offerValue` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'Teklif para değeri',
  `offerCreateTime` datetime DEFAULT NULL COMMENT 'Teklif Oluşturulma Tarihi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `offers`
--

INSERT INTO `offers` (`id`, `productId`, `offerHead`, `offerValue`, `offerCreateTime`) VALUES
(1, 2, '', '20', '2021-08-13 13:00:00'),
(2, 3, '', '13', '2021-08-15 00:00:00'),
(3, 5, '', '45', '2021-08-14 00:00:00'),
(38, 5, 'NULL', '150', '2021-08-16 15:39:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `productcategories`
--

CREATE TABLE `productcategories` (
  `id` int(11) NOT NULL COMMENT 'Ürün Kategori Id si',
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'Ürün Kategori Değeri'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `productcategories`
--

INSERT INTO `productcategories` (`id`, `category`) VALUES
(1, 'DEMİR ÇELİK'),
(2, 'ELEKTRONİK MALZEMELERİ'),
(3, 'ELEKTRİK MOTORLARI'),
(4, 'REDÜKTÖR'),
(5, 'RULMAN, KEÇE VE KAYIŞ'),
(6, 'HIRDAVAT'),
(7, 'LAZER KESİM VE PLAZMA ÜRÜNLERİ'),
(8, 'SANAYİ MAKİNALARI'),
(9, 'KALIP SANAYİ'),
(10, 'DİŞLİ SANAYİ'),
(11, 'ALÜMİNYUM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Ürün Id si',
  `categoryId` int(11) DEFAULT NULL COMMENT 'Ürünün bağlı olduğu kategori id si',
  `productName` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'Ürün adı',
  `offerCreateTime` datetime DEFAULT NULL COMMENT 'Ürün Teklif Oluşturabilme Tarihi',
  `offerFinishedTime` datetime DEFAULT NULL COMMENT 'Ürün teklif süre sonu tarihi',
  `productImage` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'Ürün resim alanı',
  `productDescription` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'Ürün açıklaması',
  `productSubDescription` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL COMMENT 'Ürün alt açıklaması'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `categoryId`, `productName`, `offerCreateTime`, `offerFinishedTime`, `productImage`, `productDescription`, `productSubDescription`) VALUES
(1, 1, 'DEMİR ÇELİK', '2021-08-17 11:48:54', '2021-08-24 11:48:54', '../images/demir/demir1.jpg', 'Lorem', 'Suspendisse'),
(2, 1, 'DEMİR ÇELİK', '2021-08-17 21:48:54', '2021-08-24 21:48:54', '../images/demir/demir2.jpg', 'Lorem', 'Suspendisse'),
(3, 2, 'Elektronik Malzeme', '2021-08-17 21:48:54', '2021-08-24 21:48:54', '../images/elektronik malzeme/diyot.jpg', 'Lorem', 'Suspendisse'),
(4, 2, 'Elektronik Malzeme', '2021-08-17 22:05:13', '2021-08-24 21:45:59', '../images/elektronik malzeme/kart.jpg', 'Lorem', 'Suspendisse'),
(5, 3, 'Elektrik Motorları', '2021-08-16 22:05:13', '2021-08-23 21:45:59', '../images/elektrik motor/motor1.jpg', 'Lorem', 'Suspendisse'),
(6, 3, 'Elektrik Motorları', '2021-08-16 22:05:13', '2021-08-23 21:45:59', '../images/elektrik motor/motor2.jpg', 'Lorem', 'Suspendisse'),
(7, 3, 'Elektrik Motorları', '2021-08-16 22:05:13', '2021-08-23 21:45:59', '../images/elektrik motor/motor3.png', 'Lorem', 'Suspendisse'),
(8, 3, 'Elektrik Motorları', '2021-08-16 22:05:13', '2021-08-23 21:45:59', '../images/elektrik motor/motor4.png', 'Lorem', 'Suspendisse'),
(9, 3, 'Elektrik Motorları', '2021-08-16 22:05:56', '2021-08-23 21:45:59', '../images/elektrik motor/motor5.jpg', 'Lorem', 'Suspendisse'),
(10, 4, 'Redüktör', '2021-08-18 22:05:56', '2021-08-25 21:45:59', '../images/Redüktör/reduktor1.jpg', 'Lorem', 'Suspendisse'),
(11, 4, 'Redüktör', '2021-08-18 22:05:56', '2021-08-25 21:45:59', '../images/Redüktör/reduktor2.jpg', 'Lorem', 'Suspendisse'),
(12, 4, 'Redüktör', '2021-08-18 22:05:56', '2021-08-25 21:45:59', '../images/Redüktör/reduktor3.jpg', 'Lorem', 'Suspendisse'),
(13, 5, 'RULMAN, KEÇE VE KAYIŞ', '2021-08-23 22:05:56', '2021-08-30 21:45:59', '../images/rulman/rulman1.png', 'Lorem', 'Suspendisse'),
(14, 5, 'RULMAN, KEÇE VE KAYIŞ', '2021-08-23 22:05:56', '2021-08-30 21:45:59', '../images/rulman/rulman2.png', 'Lorem', 'Suspendisse'),
(15, 5, 'RULMAN, KEÇE VE KAYIŞ', '2021-08-23 22:05:56', '2021-08-30 21:45:59', '../images/rulman/rulman3.jpg', 'Lorem', 'Suspendisse'),
(16, 6, 'HIRDAVAT', '2021-08-16 22:05:56', '2021-08-23 21:45:59', '../images/hırdavat/hirdavat1.jpg', 'Lorem', 'Suspendisse'),
(17, 6, 'HIRDAVAT', '2021-08-16 22:05:56', '2021-08-23 21:45:59', '../images/hırdavat/hirdavat2.jpg', 'Lorem', 'Suspendisse'),
(18, 7, 'LAZER KESİM VE PLAZMA ÜRÜNLERİ', '2021-08-24 22:05:56', '2021-08-31 21:45:59', '../images/lazer/lazer', 'Lorem', 'Suspendisse'),
(19, 8, 'SANAYİ MAKİNALARI', '2021-08-17 22:05:56', '2021-08-24 21:45:59', '../images/sanayi/sanayi1.jpg', 'Lorem', 'Suspendisse'),
(20, 8, 'SANAYİ MAKİNALARI', '2021-08-17 22:05:56', '2021-08-24 21:45:59', '../images/sanayi/sanayi2.jpg', 'Lorem', 'Suspendisse'),
(21, 9, 'KALIP SANAYİ', '2021-08-15 22:05:56', '2021-08-22 21:45:59', '../images/kalıp/kalip1.jpg', 'Lorem', 'Suspendisse'),
(22, 9, 'KALIP SANAYİ', '2021-08-15 22:05:56', '2021-08-22 21:45:59', '../images/kalıp/kalip2.jpg', 'Lorem', 'Suspendisse'),
(23, 10, 'DİŞLİ SANAYİ', '2021-08-14 22:05:56', '2021-08-21 21:45:59', '../images/disli/disli1.jpg', 'Lorem', 'Suspendisse'),
(24, 10, 'DİŞLİ SANAYİ', '2021-08-14 22:05:56', '2021-08-21 21:45:59', '../images/disli/disli2.jpg', 'Lorem', 'Suspendisse'),
(25, 10, 'DİŞLİ SANAYİ', '2021-08-14 22:05:56', '2021-08-21 21:45:59', '../images/disli/disli3.jpg', 'Lorem', 'Suspendisse'),
(32, 11, 'ALÜMİNYUM', '2021-08-15 22:05:56', '2021-08-23 21:45:59', './images/alüminyum/alüminyum1.jpg', 'Lorem', 'Suspendisse'),
(33, 11, 'ALÜMİNYUM', '2021-08-15 22:05:56', '2021-08-23 21:45:59', './images/alüminyum/alüminyum2.jpg', 'Lorem', 'Suspendisse'),
(34, 11, 'ALÜMİNYUM', '2021-08-15 22:05:56', '2021-08-23 21:45:59', './images/alüminyum/alüminyum3.jpg', 'Lorem', 'Suspendisse'),
(40, 5, 'RULMAN, KEÇE VE KAYIŞ', '2021-08-16 15:39:22', '2021-08-23 12:39:22', 'NULL', 'Lorem', 'Suspendisse');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Teklif Id si', AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Ürün Kategori Id si', AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Ürün Id si', AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
