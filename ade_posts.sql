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


-- Dumping database structure for dbtubes
CREATE DATABASE IF NOT EXISTS `dbtubes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbtubes`;

-- Dumping structure for table dbtubes.hendi_users
CREATE TABLE IF NOT EXISTS `hendi_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table dbtubes.hendi_users: ~7 rows (approximately)
REPLACE INTO `hendi_users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
	(1, 'Hendi', 'yahyahendi35@gmail.com', 'hendiyahya', '5f4dcc3b5aa765d61d8327deb882cf99'),
	(2, 'Alghi', 'alghifary@gmail.com', 'alghifary', '5f4dcc3b5aa765d61d8327deb882cf99'),
	(3, 'makhi', 'makhi@gmail.com', 'makhi', '202cb962ac59075b964b07152d234b70'),
	(4, 'arumnenden', 'arumnenden@gmail.com', 'arumnenden', '5f4dcc3b5aa765d61d8327deb882cf99'),
	(5, 'ade ariyansyah', 'ariyansyah@gmail.com', 'ariyansyah', '5f4dcc3b5aa765d61d8327deb882cf99'),
	(7, 'zainul urfi', 'zainulurfi@gmail.com', 'urfi', '5f4dcc3b5aa765d61d8327deb882cf99'),
	(8, 'Ade Ariyansyah', 'adeariyan@upi.edu', 'adeariyan', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
