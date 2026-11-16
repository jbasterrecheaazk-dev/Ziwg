-- --------------------------------------------------------
-- Ostalaria:                    127.0.0.1
-- Zerbitzariaren bertsioa:      10.4.32-MariaDB - mariadb.org binary distribution
-- Zerbitzariaren SE:            Win64
-- HeidiSQL bertsioa:            12.21.0.7344
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- etxegabetzeak datu-basearen egitura
CREATE DATABASE IF NOT EXISTS `etxegabetzeak` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `etxegabetzeak`;

-- etxegabetzeak.auziak taularen egitura
CREATE TABLE IF NOT EXISTS `auziak` (
  `id_auzia` int(11) NOT NULL AUTO_INCREMENT,
  `kaltetutako_familia` varchar(150) NOT NULL,
  `etxebizitza_helbidea` varchar(255) NOT NULL,
  `hiria` varchar(100) NOT NULL,
  `aurreikusitako_lege_gastuak` decimal(10,2) NOT NULL,
  `egoera` enum('Prozesuan','Etenda','Geldituta','Amaituta') DEFAULT 'Prozesuan',
  PRIMARY KEY (`id_auzia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- etxegabetzeak.auziak taularen datuak: ~3 errenkada (gutxi gorabehera)
INSERT INTO `auziak` (`id_auzia`, `kaltetutako_familia`, `etxebizitza_helbidea`, `hiria`, `aurreikusitako_lege_gastuak`, `egoera`) VALUES
	(1, 'García Pérez familia', 'Kale Nagusia 45, 2.B', 'Madril', 3500.00, 'Etenda'),
	(2, 'Ahmed Benali familia', 'Hegoaldeko etorbidea 12, 1.A', 'Bartzelona', 1800.00, 'Geldituta'),
	(3, 'Martínez López familia', 'Gurutzearen kalea 8, 3.C', 'Valentzia', 3100.00, 'Prozesuan');

-- etxegabetzeak.ekarpenak taularen egitura
CREATE TABLE IF NOT EXISTS `ekarpenak` (
  `id_ekarpena` int(11) NOT NULL AUTO_INCREMENT,
  `id_auzia` int(11) NOT NULL,
  `emaile_izena` varchar(150) NOT NULL,
  `emaile_emaila` varchar(150) DEFAULT NULL,
  `emandako_zenbatekoa` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_ekarpena`),
  KEY `fk_auzia` (`id_auzia`),
  CONSTRAINT `fk_auzia` FOREIGN KEY (`id_auzia`) REFERENCES `auziak` (`id_auzia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- etxegabetzeak.ekarpenak taularen datuak: ~5 errenkada (gutxi gorabehera)
INSERT INTO `ekarpenak` (`id_ekarpena`, `id_auzia`, `emaile_izena`, `emaile_emaila`, `emandako_zenbatekoa`) VALUES
	(1, 1, 'Carlos Redondo', 'carlos@email.com', 150.00),
	(2, 1, 'Erdialdeko Auzo Elkartea', 'contacto@vecinos.org', 500.00),
	(3, 2, 'María Luisa Gómez', 'mluisa@email.com', 200.00),
	(4, 2, 'Maizterren Sindikatua', 'info@sindicato.org', 600.00),
	(5, 3, 'Ezezaguna', NULL, 50.00);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
