-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5124
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ml.m_heroes
CREATE TABLE IF NOT EXISTS `m_heroes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  `type` varchar(75) DEFAULT NULL,
  `image` varchar(125) DEFAULT NULL,
  `power` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- Dumping data for table ml.m_heroes: ~79 rows (approximately)
/*!40000 ALTER TABLE `m_heroes` DISABLE KEYS */;
INSERT INTO `m_heroes` (`id`, `name`, `type`, `image`, `power`) VALUES
	(1, 'Akai', 'Tank', 'Akai.png', 85),
	(2, 'Aldous', 'Fighter', 'Aldous.png', 90),
	(3, 'Alice', 'Mage', 'Alice.png', 90),
	(4, 'Alpha', 'Fighter', 'Alpha.png', 80),
	(5, 'Alucard', 'Assassin Fighter', 'Alucard.png', 80),
	(6, 'Angela', 'Support', 'Angela.png', 85),
	(7, 'Argus', 'Fighter', 'Argus.png', 60),
	(8, 'Aurora', 'Mage', 'Aurora.png', 80),
	(9, 'Badang', 'Fighter', 'Badang.png', 70),
	(10, 'Balmond', 'Tank Fighter', 'Balmond.png', 60),
	(11, 'Bane', 'Fighter', 'Bane.png', 70),
	(12, 'Belerick', 'Tank', 'Belerick.png', 85),
	(13, 'Bruno', 'Marksman', 'Bruno.png', 80),
	(14, 'Change', 'Mage', 'Change.png', 80),
	(15, 'Chou', 'Fighter', 'Chou.png', 90),
	(16, 'Claude', 'Marksman', 'Claude.png', 90),
	(17, 'Clint', 'Marksman', 'Clint.png', 80),
	(18, 'Cyclops', 'Mage', 'Cyclops.png', 85),
	(19, 'Diggie', 'Support', 'Diggie.png', 90),
	(20, 'Esmeralda', 'Tank Mage', 'Esmeralda.png', 95),
	(21, 'Estes', 'Support', 'Estes.png', 75),
	(22, 'Eudora', 'Mage', 'Eudora.png', 70),
	(23, 'Fanny', 'Assassin', 'Fanny.png', 90),
	(24, 'Franco', 'Tank', 'Franco.png', 75),
	(25, 'Freya', 'Fighter', 'Freya.png', 70),
	(26, 'Gatotkaca', 'Tank', 'Gatotkaca.png', 80),
	(27, 'Gord', 'Mage', 'Gord.png', 85),
	(28, 'Grock', 'Tank', 'Grock.png', 90),
	(29, 'Guinevere', 'Fighter Mage', 'Guinevere.png', 95),
	(30, 'Gusion', 'Assassin Mage', 'Gusion.png', 90),
	(31, 'Hanabi', 'Marksman', 'Hanabi.png', 85),
	(32, 'Hanzo', 'Assassin', 'Hanzo.png', 80),
	(33, 'Harith', 'Mage', 'Harith.png', 95),
	(34, 'Harley', 'Mage', 'Harley.png', 85),
	(35, 'Hayabusa', 'Assassin', 'Hayabusa.png', 90),
	(36, 'Helcurt', 'Assassin', 'Helcurt.png', 90),
	(37, 'Hilda', 'Tank', 'Hilda.png', 70),
	(38, 'Hylos', 'Tank', 'Hylos.png', 75),
	(39, 'Irithel', 'Marksman', 'Irithel.png', 85),
	(40, 'Jawhead', 'Fighter', 'Jawhead.png', 80),
	(41, 'Johnson', 'Tank', 'Johnson.png', 85),
	(42, 'Kadita', 'Mage', 'Kadita.png', 85),
	(43, 'Kagura', 'Mage', 'Kagura.png', 85),
	(44, 'Kaja', 'Fighter Support', 'Kaja.png', 90),
	(45, 'Karina', 'Assassin Mage', 'Karina.png', 80),
	(46, 'Karrie', 'Marksman', 'Karrie.png', 90),
	(47, 'Khufra', 'Tank', 'Khufra.png', 85),
	(48, 'Kimmy', 'Mage Marksman', 'Kimmy.png', 90),
	(49, 'Lancelot', 'Assassin', 'Lancelot.png', 85),
	(50, 'Lapu Lapu', 'Assassin Fighter', 'Lapu Lapu.png', 90),
	(51, 'Layla', 'Marksman', 'Layla.png', 70),
	(52, 'Leomord', 'Fighter', 'Leomord.png', 85),
	(53, 'Lesley', 'Assassin Marksman', 'Lesley.png', 80),
	(54, 'Lolita', 'Tank Support', 'Lolita.png', 75),
	(55, 'Lunox', 'Mage', 'Lunox.png', 95),
	(56, 'Martis', 'Fighter', 'Martis.png', 85),
	(57, 'Minotaur', 'Tank Support', 'Minotaur.png', 90),
	(58, 'Minsitthar', 'Fighter', 'Minsitthar.png', 85),
	(59, 'Miya', 'Marksman', 'Miya.png', 75),
	(60, 'Moskov', 'Marksman', 'Moskov.png', 85),
	(61, 'Nana', 'Mage', 'Nana.png', 80),
	(62, 'Natalia', 'Assassin', 'Natalia.png', 80),
	(63, 'Odette', 'Mage', 'Odette.png', 80),
	(64, 'Pharsa', 'Mage', 'Pharsa.png', 80),
	(65, 'Rafaela', 'Support', 'Rafaela.png', 75),
	(66, 'Roger', 'Fighter', 'Roger.png', 85),
	(67, 'Ruby', 'Fighter', 'Ruby.png', 85),
	(68, 'Saber', 'Assassin', 'Saber.png', 80),
	(69, 'Selena', 'Assassin Mage', 'Selena.png', 90),
	(70, 'Sun', 'Fighter', 'Sun.png', 85),
	(71, 'Thamuz', 'Fighter', 'Thamuz.png', 85),
	(72, 'Tigreal', 'Tank', 'Tigreal.png', 75),
	(73, 'Uranus', 'Tank', 'Uranus.png', 70),
	(74, 'Vale', 'Mage', 'Vale.png', 80),
	(75, 'Valir', 'Mage', 'Valir.png', 80),
	(76, 'Vexana', 'Mage', 'Vexana.png', 80),
	(77, 'Yi Sun-Shin', 'Marksman', 'Yi Sun-Shin.png', 75),
	(78, 'Zhask', 'Mage', 'Zhask.png', 75),
	(79, 'Zilong', 'Assassin Fighter', 'Zilong.png', 70);
/*!40000 ALTER TABLE `m_heroes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
