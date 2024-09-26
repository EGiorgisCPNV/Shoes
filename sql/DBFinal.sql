-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.17 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `shoes`;

-- Listage des données de la table shoes.shoes : ~5 rows (environ)
-- Dumping database structure for shoes
CREATE DATABASE IF NOT EXISTS `shoes` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `shoes`;


-- Dumping structure for table shoes.shoes
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `qtyAvailable` smallint(6) NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '0',
  `price` float unsigned NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `active` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `shoes_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=UTF8;


/*!40000 ALTER TABLE `shoes` DISABLE KEYS */;
INSERT INTO `shoes` (`id`, `code`, `brand`, `model`, `qtyAvailable`, `description`, `price`, `photo`, `active`) VALUES
	(1, 'p1', 'Nike', 'Blazer Low Leather', 10, 'Inspired by heritage basketball looks, the Nike Blazer Low features a leather upper and low-cut collar for comfort and durability.', 119, 'view/img/product/p1.jpg', 1),
	(2, 'p2', 'Nike', 'Air Vapor Max', 10, 'Featuring a VaporMax Air unit, the Nike Air VaporMax 360 gives you remarkable underfoot comfort with bold 2000s style inspired by the Air Max 360.', 129, 'view/img/product/p2.jpg', 1),
	(3, 'p3', 'Nike', 'SuperRep Go', 10, 'The Nike SuperRep Go combines comfortable foam cushioning, flexibility and support to get you moving in circuit-based fitness classes or while streaming workouts at home.', 115, 'view/img/product/p3.jpg', 1),
	(4, 'p4', 'Nike', 'Air Max 2090', 10, 'Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90.', 245, 'view/img/product/p4.jpg', 1),
	(5, 'p5', 'Nike', 'Zoom Pegasus Turbo 2', 10, 'The Nike Zoom Pegasus Turbo 2 is updated with a feather-light upper, while innovative foam brings revolutionary responsiveness to your long-distance training.', 234, 'view/img/product/p5.jpg', 1);
/*!40000 ALTER TABLE `shoes` ENABLE KEYS */;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userType` VARCHAR(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`, `userType`) VALUES
	(1, 'admin.cpnv@cpnv.ch', 'Pa$$w0rd', '1'),
	(8, 's', '$2y$10$uWGGcqrFSoH8/UKQmIef0OSvNhWgrmYRAz/M7aaTphGM7v9VFh5cK', '0'),
	(9, 'a', '$2y$10$tHxz2DiqdTbYdNwcM5L2pOX6UbnX7B3Rsdf9iFLOGLNFwbBuoA7M6', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
