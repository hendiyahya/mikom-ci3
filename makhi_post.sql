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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbtubes.makhi_posts: ~8 rows (approximately)
REPLACE INTO `makhi_posts` (`id`, `title`, `body`, `pic`, `excerpt`, `excerpt_awal`, `user_id`, `datecreated`) VALUES
	(2, 'aaaaaaaaaaaaaaaabbb', '<div>bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf</div>', NULL, 'bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf', 'bdbdfgfhfgjhfdgerdfvrdfgrfgtrferfgrtfgrshf', 3, '2022-12-26'),
	(3, 'aaaaaaaaaaaaaaaaa', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>', NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, '2022-12-26'),
	(4, 'sdgfhgjhkjkl,;.', '<div>szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,trmgrt,gnrrnrjrw4hwardstrd,esreytsjresm</div>', NULL, 'szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,trmgrt,gnrrnrjrw4hwardstrd,esreytsjresm', 'szdfxcgb,nm.,./ghhgjgkgjkhjjhkjlkjftfrutmtr,t', 3, '2022-12-26'),
	(5, 'werthhfgersrshghtrwhrsf', '<div>fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsgsrwarfhrwreataeefafafdgae</div>', NULL, 'fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsgsrwarfhrwreataeefafafdgae', 'fwafdgshdtjtdheafgaehewyaehrstgaethesgaesgdsg', 3, '2022-12-26'),
	(7, 'ffffffffffffffffffffffffffffffffffffffff', '<div>fffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffff rfffffffffffffffffffffffff fffffffffffff</div>', NULL, 'fffffffffffffffffffffffff fffffffffffffffffffffffffffffffffffffffffff fffffffffffffffffffffffff', 'fffffffffffffffffffffffff fffffffffffffffffff', 3, '2022-12-26'),
	(8, 'Beasiswa Unggulan Kemdikbud Tahun 2022 untuk Mahasiswa Baru & On-Going S1, S2, S3', '<div>Kementerian Pendidikan dan Kebudayaan kembali menawarkan <strong>Beasiswa Unggulan Masyarakat Berprestasi </strong>bagi masyarakat Indonesia. Program ini merupakan beasiswa dalam negeri untuk jenjang Sarjana, Magister, dan Doktoral. Para peserta yang dapat mengikuti program ini adalah <strong>calon mahasiswa (mahasiswa baru) </strong>yang sudah mendapatkan surat diterima di perguruan tinggi maupun mahasiswa yang baru melaksanakan perkuliahan di semester 1 dan belum mendapatkan KHS atau <strong>mahasiswa on-going </strong> yang sudah memulai perkuliahan maksimal semester 3 (semua jenjang) atau masuk perkuliahan pada tahun 2021.</div><div><br></div><div><strong>Beasiswa Unggulan Masyarakat Berprestasi diberikan kepada masyarakat yang:</strong></div><ol><li>berprestasi tingkat internasional dan/atau nasional</li><li>berkontribusi kepada daya saing </li></ol><div><br></div><div><strong>CAKUPAN BEASISWA UNGGULAN:</strong></div><ol><li>Biaya Pendidikan SPP/UKT/Semester</li><li>Biaya hidup</li><li>Biaya buku</li></ol><div><br></div><div><strong>DURASI PEMBERIAN BEASISWA UNGGULAN:</strong></div><ol><li>Jenjang Sarjana (S1) baru, diberikan dengan jangka waktu 4 tahun (8 semester)</li><li>Jenjang Magister (S2) baru, diberikan dengan jangka waktu 2 tahun (4 semester)</li><li>Jenjang Doktoral (S3) baru, diberikan dengan jangka waktu 3 tahun (6 semester)</li><li>Jenjang Sarjana, Magister, Doktoral on-going diberikan untuk sisa masa studi yang akan dilaksanakan sampai batas waktu sesuai periode di atas.</li></ol><div><br></div><div><strong>PERSYARATAN UMUM BEASISWA UNGGULAN:</strong></div><ol><li>Diutamakan bagi peserta yang mempunyai sertifikat yang membuktikan prestasi akademik/non akademik tingkat internasional dan/atau nasional.</li><li>Mendapatkan rekomendasi dari institusi terkait.</li><li>Tidak sedang mendapatkan beasiswa sejenis dari sumber APBN dan/atau APBD dengan komponen pembiayaan yang sama.</li><li>Diterima atau sedang berkuliah pada Perguruan Tinggi dalam negeri di bawah binaan Kemendikbudristek dengan akreditasi institusi dan program studi paling rendah B/Sangat Baik.</li><li>Mahasiswa aktif dan terdaftar di Pangkalan Data Pendidikan Tinggi (PDDikti).</li></ol>', NULL, 'Kementerian Pendidikan dan Kebudayaan kembali menawarkan Beasiswa Unggulan Masyarakat B', 'Kementerian Pendidikan dan Kebudayaan kembali', 3, '2022-12-27'),
	(9, 'aaaaaaaaaaaaa', '<div>aaaaaaaaaaaaaaaaaaaaaaaa</div>', '1672119396.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 3, '2022-12-27'),
	(10, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '<div>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>', '1672119455.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, '2022-12-27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
