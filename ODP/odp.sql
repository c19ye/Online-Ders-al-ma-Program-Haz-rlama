-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 24 Haz 2019, 22:48:30
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `odp`
--
CREATE DATABASE IF NOT EXISTS `odp` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `odp`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sifre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `adi` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `mail`, `sifre`, `adi`) VALUES
(7, 'emre@hotmail.com', '111', 'YunusEmre'),
(8, 'a@hotmail.com', '123', 'a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `pazartesi1` text COLLATE utf8_turkish_ci,
  `pazartesi2` text COLLATE utf8_turkish_ci,
  `pazartesi3` text COLLATE utf8_turkish_ci,
  `pazartesi4` text COLLATE utf8_turkish_ci,
  `pazartesi5` text CHARACTER SET latin1,
  `pazartesi6` text CHARACTER SET latin1,
  `sali1` text CHARACTER SET latin1,
  `sali2` text CHARACTER SET latin1,
  `sali3` text CHARACTER SET latin1,
  `sali4` text CHARACTER SET latin1,
  `sali5` text CHARACTER SET latin1,
  `sali6` text CHARACTER SET latin1,
  `carsamba1` text CHARACTER SET latin1,
  `carsamba2` text CHARACTER SET latin1,
  `carsamba3` text CHARACTER SET latin1,
  `carsamba4` text CHARACTER SET latin1,
  `carsamba5` text CHARACTER SET latin1,
  `carsamba6` text CHARACTER SET latin1,
  `persembe1` text CHARACTER SET latin1,
  `persembe2` text CHARACTER SET latin1,
  `persembe3` text CHARACTER SET latin1,
  `persembe4` text CHARACTER SET latin1,
  `persembe5` text CHARACTER SET latin1,
  `persembe6` text CHARACTER SET latin1,
  `cuma1` text CHARACTER SET latin1,
  `cuma2` text CHARACTER SET latin1,
  `cuma3` text CHARACTER SET latin1,
  `cuma4` text CHARACTER SET latin1,
  `cuma5` text CHARACTER SET latin1,
  `cuma6` text CHARACTER SET latin1,
  `cumartesi1` text CHARACTER SET latin1,
  `cumartesi2` text CHARACTER SET latin1,
  `cumartesi3` text CHARACTER SET latin1,
  `cumartesi4` text CHARACTER SET latin1,
  `cumartesi5` text CHARACTER SET latin1,
  `cumartesi6` text CHARACTER SET latin1,
  `pazar1` text CHARACTER SET latin1,
  `pazar2` text CHARACTER SET latin1,
  `pazar3` text CHARACTER SET latin1,
  `pazar4` text CHARACTER SET latin1,
  `pazar5` text CHARACTER SET latin1,
  `pazar6` text CHARACTER SET latin1,
  `kid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `not` text COLLATE utf8_turkish_ci,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `rnd` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
