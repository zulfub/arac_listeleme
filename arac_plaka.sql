-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 Haz 2019, 20:49:35
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arac_plaka`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_plaka`
--

DROP TABLE IF EXISTS `tbl_plaka`;
CREATE TABLE IF NOT EXISTS `tbl_plaka` (
  `Plaka_No` varchar(10) NOT NULL,
  `Birim_Adi` varchar(20) NOT NULL,
  `Marka` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Model_Yil` smallint(4) NOT NULL,
  `Cesit` varchar(20) NOT NULL,
  `Tur` varchar(20) NOT NULL,
  `Arac_Durum` varchar(20) NOT NULL,
  PRIMARY KEY (`Plaka_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_plaka`
--

INSERT INTO `tbl_plaka` (`Plaka_No`, `Birim_Adi`, `Marka`, `Model`, `Model_Yil`, `Cesit`, `Tur`, `Arac_Durum`) VALUES
('35AZB68', 'Bilgi_Islem', 'FIAT', 'DOBLO', 2008, 'BINEK', 'KAMYONET', 'BEKLEMEDE'),
('35AL985', 'Binek', 'HONDA', 'Civic', 2012, 'on', 'on', 'on'),
('35AY378', 'Binek', 'HYUNDAI', 'ATOS', 2008, 'Oznel', '', ''),
('34AT912', 'Binek', 'HONDA', 'ATOS', 2014, 'Oznel', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
