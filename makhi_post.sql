-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table dbtubes.makhi_posts
CREATE TABLE IF NOT EXISTS `makhi_posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `body` text NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `excerpt` varchar(250) DEFAULT NULL,
  `excerpt_awal` varchar(100) DEFAULT NULL,
  `user_id` smallint DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbtubes.makhi_posts: ~6 rows (approximately)
REPLACE INTO `makhi_posts` (`id`, `title`, `body`, `pic`, `excerpt`, `excerpt_awal`, `user_id`, `datecreated`) VALUES
	(1, 'aaaaaaaaaaaaaaaa', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaa</div>', NULL, '<div>aaaaaaaaaaaaaaaaaaaaaaaaaa</div>', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaa</div>', 3, '2022-12-26'),
	(2, 'aaaaaaaaaaaaaaaabbb', '<div>bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf</div>', NULL, 'bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf', 'bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf', 3, '2022-12-26'),
	(3, 'aaaaaaaaaaaaaaaaa', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>', NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, '2022-12-26'),
	(4, 'sdgfhgjhkjkl,;.', '<div>szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,trmgrt,gnrrnrjrw4hwardstrd,esreytsjresm</div>', NULL, 'szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,trmgrt,gnrrnrjrw4hwardstrd,esreytsjresm', 'szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,t', 3, '2022-12-26'),
	(5, 'werthhfgersrshghtrwhrsf', '<div>fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsgsrwarfhrwreataeefafafdgae</div>', NULL, 'fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsgsrwarfhrwreataeefafafdgae', 'fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsg', 3, '2022-12-26'),
	(7, 'ffffffffffffffffffffffffffffffffffffffff', '<div>fffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffff rfffffffffffffffffffffffff fffffffffffff</div>', NULL, 'fffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffffffff fffffffffffffffffffffffff', 'fffffffffffffffffffffffff fffffffffffffffffff', 3, '2022-12-26');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
