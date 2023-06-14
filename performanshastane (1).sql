-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2023, 19:06:57
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `performanshastane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu_sistemi`
--

CREATE TABLE `randevu_sistemi` (
  `Hasta_No` int(40) NOT NULL,
  `Hasta_Ad` varchar(40) NOT NULL,
  `Hasta_Soyad` varchar(40) NOT NULL,
  `Hasta_Mail` varchar(40) NOT NULL,
  `Hastane_Ad` varchar(40) NOT NULL,
  `Hastane_Mesaj` varchar(40) NOT NULL,
  `Hasta_Tarih` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `randevu_sistemi`
--

INSERT INTO `randevu_sistemi` (`Hasta_No`, `Hasta_Ad`, `Hasta_Soyad`, `Hasta_Mail`, `Hastane_Ad`, `Hastane_Mesaj`, `Hasta_Tarih`) VALUES
(5, 'Ali', 'Veli', 'Veli@gmail.com', 'Denemehastaneadı', 'Ağır yaralı', '10.10.2023');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `randevu_sistemi`
--
ALTER TABLE `randevu_sistemi`
  ADD PRIMARY KEY (`Hasta_No`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `randevu_sistemi`
--
ALTER TABLE `randevu_sistemi`
  MODIFY `Hasta_No` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
