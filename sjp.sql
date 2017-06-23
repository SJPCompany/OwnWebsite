-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Structuur van  tabel sjp.account wordt geschreven
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `role` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel sjp.account: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id`, `username`, `password`, `role`, `email`) VALUES
	(1, 'test', '$2y$10$kgOVP5z5jOdWIJvMjzAH7eCsAzs3wCWDaM/JhS.9MI.', 'member', 'test'),
	(4, '1', '$2y$10$IE4g943DPQs2y1cvcREogOcFw8XPlcy8v/i2dxAl9Jh', 'member', '1'),
	(5, 'j', '$2y$10$mtTuMJMUMmOuev2UcV8b.eRupyCABA4ETEJiclvK7rv', 'member', 'jan'),
	(6, 'admin', 'admin', 'Admin\r\n', 'admin');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Structuur van  tabel sjp.createform wordt geschreven
CREATE TABLE IF NOT EXISTS `createform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parttype` varchar(50) NOT NULL DEFAULT '0',
  `partserie` int(11) DEFAULT NULL,
  `other` int(11) DEFAULT NULL,
  `manufacturer` varchar(50) NOT NULL DEFAULT '0',
  `barcode` varchar(50) NOT NULL DEFAULT '0',
  `fru` varchar(50) DEFAULT '0',
  `country` varchar(50) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `year` year(4) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `image` varchar(50) DEFAULT '0',
  `uploaddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel sjp.createform: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `createform` DISABLE KEYS */;
INSERT INTO `createform` (`id`, `parttype`, `partserie`, `other`, `manufacturer`, `barcode`, `fru`, `country`, `price`, `year`, `amount`, `image`, `uploaddate`) VALUES
	(1, '0', NULL, NULL, '0', '0', '0', '0', 0, '0000', 0, '0', '2017-05-04 13:59:40');
/*!40000 ALTER TABLE `createform` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
