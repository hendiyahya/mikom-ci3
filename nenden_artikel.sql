-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 11:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `nenden_artikel`
--

CREATE TABLE `nenden_artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `ket` text NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nenden_artikel`
--

INSERT INTO `nenden_artikel` (`id`, `nama`, `gambar`, `ket`, `user_id`) VALUES
(1, 'Kemakom Goes To School (KGTS)\r\n', '1.png', 'Kemakom Goes To School atau KGTS merupakan program kerja dari Divisi Pendidikan dan Pelatihan BEM Kemakom Universitas Pendidikan Indonesia. Kegiatan ini menargetkan para siswa SMK khususnya jurusan Teknik Komputer dan Jaringan serta Rekayasa Perangkat Lunak yang bertujuan untuk memberikan pelatihan seputar bidang Teknologi Informasi dan Komunikasi yang diberikan langsung oleh praktisi dari industri sehingga para siswa dapat mengetahui gambaran serta kemampuan apa yang dibutuhkan saat terjun ke dunia profesional.\r\n\r\n\r\n\r\nDalam kegiatan ini, para siswa akan diberikan pemahaman mengenai pentingnya melanjutkan studi ke jenjang yang lebih tinggi, tentunya dalam bidang yang sama. Selain itu, kegiatan ini pun merupakan suatu bentuk pengenalan Departemen Pendidikan Ilmu Komputer dan perkenalan mengenai event tahunan yaitu DINAMIK yang akan dilaksakan pada waktu dekat ini. Kegiatan Kemakom Goes To School dilaksanakan secara online selama 2 hari melalui platform Zoom Meeting. Kegiatan ini diselenggarakan pada hari sabtu dan minggu, tepatnya pada tanggal 7 sampai dengan 8 Agustus 2021. Kemakom Goes To School kali ini mengusung tema “Building Digital World Security”.\r\n\r\n\r\n\r\nPada hari pertama, acara yang dihadiri oleh 100 orang ini dimulai pukul 07.30 yang dibuka dengan pembacaan ayat suci Al-Quran kemudian sambutan dari Ketua Pelaksana, Ketua BEM Kemakom FPMIPA UPI, dan Ketua Program Studi Ilmu Komputer. Acara disambungkan dengan menampilakan cuplikan mengenai perkenalan Departemen Pendidikan Ilmu Komputer, setelah itu dilanjutkan sesi pematerian dari narasumber yang kompeten yaitu M. Arif Fadhly Ridha, S.Kom., M.T., CCNA, MTCNA, MTCRE, MTCIPv6E, MTCWE, MTCSE, CEH, CHFI, ECIH, S-ISF, S-ITSF, S-ITSP, S-EHF, S-EHP, JNCIA selaku dosen Politeknik Caltex Riau, mengenai konsep dasar Cyber Security. Pada hari kedua kegiatan ini, disambung dengan pemberian materi peluang karir seorang Cyber Security Engineer dari narasumber yang sama. Setelah penyampaian materi, acara dilanjutkan dengan sesi tanya jawab yang dilakukan oleh narasumber dan peserta. Sesi tanya jawab berlangsung dengan antusiasme dari para peserta. Acara Kemakom Goes To School diakhiri dengan penyampaian kesan pesan para peserta selama mengikuti kegiatan Kemakom Goes To School, kemudian panitia mengumumkan pemenang dooprize dan ditutup dengan sesi foto bersama.\r\n\r\n\r\n\r\nProgram kerja Kemakom Goes To School pada tahun ini berjalan dengan lancar, diharapkan dengan adanya kegiatan ini peserta dapat menambah wawasan dan pengetahuan serta dapat menumbuhkan semangat para siswa untuk terus memperdalam kemampuan mereka di bidang tersebut agar tidak tertinggal oleh perkembangan Teknologi Informasi dan Komunikasi yang semakin pesat.', 1),
(2, 'Registrasi Anggota Muda', '2.png', 'Memberikan Modal sebagai..', 2),
(3, 'Qurban With Kemakom (Qurma) 2022', '3.jpg', 'Tebar Kebaikan Melalui..', 3),
(4, 'BEAUTY CLASS 2022 X EMINA BEAUTY', '4.1.jpg', '“Be Glow, Be Glamour, and..', 4),
(5, 'Kajian Kaderisasi 2022', '5.jpeg', 'Program kerja kolaborasi..', 5),
(6, 'Interface 2022', '6.jpg', 'Studi banding oleh semua divisi..\r\n\r\n', 1),
(7, 'Kuliah Umum', '7.jpg', '“Empowering Future with..\r\n\r\n', 2),
(8, 'Webinar Advoschool 2021', '8.jpg', 'Membangun Pola Pikir Kritis..', 3),
(10, 'cobalagi', NULL, 'cekcek', 5),
(13, 'coba lagi', NULL, 'edit', 5),
(14, 'Webinar Desember baru', NULL, 'perancangan UI/UX', 1),
(15, 'Interface 2021', NULL, 'Studi banding oleh semua divisi..\r\n\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nenden_artikel`
--
ALTER TABLE `nenden_artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nenden_artikel`
--
ALTER TABLE `nenden_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
