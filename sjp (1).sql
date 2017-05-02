-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumpen data van tabel sjp.account: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
CREATE TABLE IF NOT EXISTS `account` (
INSERT INTO `account` (`id`, `username`, `password`, `role`, `email`) VALUES
	(1, 'juju125', '$2y$10$j.666Bssis1YND9DIsfR8u25jzgXXtv5l1Snc8cypJqlJwlBG59mq', 'member', 'justin555@live.nl'),
	(2, 'Administrator', 'ihebzinineenbroodje', 'admin', 'admin@admin.nl');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
)