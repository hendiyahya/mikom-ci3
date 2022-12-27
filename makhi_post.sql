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
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `body` text NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `excerpt` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `excerpt_awal` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_id` smallint DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbtubes.makhi_posts: ~7 rows (approximately)
REPLACE INTO `makhi_posts` (`id`, `title`, `body`, `pic`, `excerpt`, `excerpt_awal`, `user_id`, `datecreated`) VALUES
	(8, 'Beasiswa Unggulan Kemdikbud Tahun 2022 untuk Mahasiswa Baru & On-Going S1, S2, S3', '<div>Kementerian Pendidikan dan Kebudayaan kembali menawarkan <strong>Beasiswa Unggulan Masyarakat Berprestasi </strong>bagi masyarakat Indonesia. Program ini merupakan beasiswa dalam negeri untuk jenjang Sarjana, Magister, dan Doktoral. Para peserta yang dapat mengikuti program ini adalah <strong>calon mahasiswa (mahasiswa baru) </strong>yang sudah mendapatkan surat diterima di perguruan tinggi maupun mahasiswa yang baru melaksanakan perkuliahan di semester 1 dan belum mendapatkan KHS atau <strong>mahasiswa on-going </strong> yang sudah memulai perkuliahan maksimal semester 3 (semua jenjang) atau masuk perkuliahan pada tahun 2021.</div><div><br></div><div><strong>Beasiswa Unggulan Masyarakat Berprestasi diberikan kepada masyarakat yang:</strong></div><ol><li>berprestasi tingkat internasional dan/atau nasional</li><li>berkontribusi kepada daya saing </li></ol><div><br></div><div><strong>CAKUPAN BEASISWA UNGGULAN:</strong></div><ol><li>Biaya Pendidikan SPP/UKT/Semester</li><li>Biaya hidup</li><li>Biaya buku</li></ol><div><br></div><div><strong>DURASI PEMBERIAN BEASISWA UNGGULAN:</strong></div><ol><li>Jenjang Sarjana (S1) baru, diberikan dengan jangka waktu 4 tahun (8 semester)</li><li>Jenjang Magister (S2) baru, diberikan dengan jangka waktu 2 tahun (4 semester)</li><li>Jenjang Doktoral (S3) baru, diberikan dengan jangka waktu 3 tahun (6 semester)</li><li>Jenjang Sarjana, Magister, Doktoral on-going diberikan untuk sisa masa studi yang akan dilaksanakan sampai batas waktu sesuai periode di atas.</li></ol><div><br></div><div><strong>PERSYARATAN UMUM BEASISWA UNGGULAN:</strong></div><ol><li>Diutamakan bagi peserta yang mempunyai sertifikat yang membuktikan prestasi akademik/non akademik tingkat internasional dan/atau nasional.</li><li>Mendapatkan rekomendasi dari institusi terkait.</li><li>Tidak sedang mendapatkan beasiswa sejenis dari sumber APBN dan/atau APBD dengan komponen pembiayaan yang sama.</li><li>Diterima atau sedang berkuliah pada Perguruan Tinggi dalam negeri di bawah binaan Kemendikbudristek dengan akreditasi institusi dan program studi paling rendah B/Sangat Baik.</li><li>Mahasiswa aktif dan terdaftar di Pangkalan Data Pendidikan Tinggi (PDDikti).</li></ol>', '1672139665.jpg', 'Kementerian Pendidikan dan Kebudayaan kembali menawarkan Beasiswa Unggulan Masyarakat B', 'Kementerian Pendidikan dan Kebudayaan kembali', 3, '2022-12-27'),
	(13, 'Google Punya 10 Ribu Beasiswa Bidang IT, Ini Info Pendaftarannya!', '<div>Google kini tengah membuka peluang <strong>10 ribu beasiswa</strong> bertajuk Google Career Certificates-IT Support Specialist untuk para pemuda, pencari kerja, maupun berbagai komunitas lain di Indonesia yang kurang terlayani.</div><div>Mengutip dari laman Grow with Google, bantuan secara komprehensif mencakup dukungan instruksional untuk menyelesaikan sertifikat, tutor, mentor, dan instruktur untuk penerima manfaat, pelatihan kesiapan kerja, pengembangan keterampilan IT tambahan, pembentukan kelompok dukungan, sampai pencocokan pekerjaan.</div><div><br></div><div>Beberapa materi yang akan dipelajari dalam kursus ini adalah Linux, IPv4, debugging, cloud computing, dukungan pelanggan, dan lainnya. Oleh sebab itu, beasiswa ini terbuka untuk kalian yang ingin mengelola sistem IT dan mencari pekerjaan bidang IT.</div><div><br></div><div>Agar tidak bingung, simak beberapa informasi tentang program ini!</div><div><br></div><div><strong>Materi Beasiswa Google</strong></div><ul><li>Kursus 1: fundamental dukungan teknis, mempelajari dasar-dasar teknologi informasi dan karier bidang teknologi.</li><li>Kursus 2: bit and byte jaringan komputer, mencakup dasar-dasar teknologi jaringan modern.</li><li>Kursus 3: sistem operasi</li><li>Kursus 4: administrasi sistem dan layanan infrastruktur IT</li><li>Keamanan IT</li></ul><div><br></div><div>Selain mendapatkan pengetahuan tentang teknologi, para peserta beasiswa Google nantinya juga akan belajar menangani berbagai tugas penting seperti mengelola perangkat lunak-keras serta pengguna dan mengetahui cara memecahkan masalah umum sebagai Spesialis Dukungan IT.</div><div><br></div><div>Program kesiapan online ini juga mengklaim bahwa peserta akan berkesempatan menunjukkan keterampilan, wawancara dengan portofolio yang berkualitas, dan mempersiapkan jawaban lamaran kerja.</div><div><br></div><div>Program kerja sama antara INCO Group dan Yayasan Plan International Indonesia tersebut dirancang untuk pemula sehingga tidak ada latar belakang teknis yang dibutuhkan. Selain itu, penerima beasiswa tidak dipungut biaya alias gratis.</div><div><br></div><div>Dikatakan dalam laman terkait, INCO Academy Work In Tech, peserta yang tidak lulus tidak akan mendapat konsekuensi finansial. Namun, disebutkan juga bahwa program ini dipersiapkan untuk kaum muda di Jawa Barat dan Jawa Timur.</div>', '1672163274.jpeg', 'Google kini tengah membuka peluang 10 ribu beasiswa bertajuk Google Career Cer', 'Google kini tengah membuka peluang 10', 3, '2022-12-27'),
	(14, 'Beasiswa S2 dan S3: Education for Nature WWF - Russell E. Train Fellowships', '<div>Russell E. Train Fellowships mendukung individu yang mengejar gelar master atau doktoral di bidang konservasi dan bidang terkait. Setiap tahun, WWF mendukung para pemimpin konservasi dan ilmuwan yang berkomitmen dari negara target untuk menerima dukungan keuangan untuk studi dan penelitian mereka.</div><div><br></div><div>Beasiswa 2023: 2023 Fellowship "<strong>Food is Local</strong>"</div><div>Dimensi sosial, budaya, ekonomi, dan lingkungan dari transformasi sistem pangan di tingkat nasional</div><div><br></div><div>EFN mengundang aplikasi dari generasi peneliti dan praktisi saat ini dan berikutnya untuk melanjutkan studi tingkat pascasarjana (master dan PhD) yang diarahkan pada penelitian yang memupuk pemahaman yang lebih baik tentang sifat transformasi sistem pangan berbasis tempat. Ada bukti substansial pada skala global tentang kebutuhan mendesak untuk transformasi sistem pangan, tetapi sedikit perhatian yang diberikan pada bagaimana transformasi menuju sistem pangan yang lebih sehat dan berkelanjutan dapat dilakukan di tingkat nasional. Ini termasuk pemahaman tentang dimensi sosial, politik, budaya, ekonomi, dan lingkungan dari transformasi semacam itu di berbagai negara dan konteks.</div><div><br></div><div>Tujuan dari beasiswa ini adalah untuk mendukung individu untuk mengembangkan penelitian berbasis bukti, inovatif, dan interdisipliner tentang transformasi sistem pangan di tingkat nasional untuk membangun pemahaman yang lebih baik tentang tindakan spesifik negara yang perlu diambil untuk mengubah sistem pangan untuk meningkatkan sumber daya manusia. kesehatan dan mendukung kelestarian lingkungan. </div><div><br></div><div>Beasiswa terbuka untuk warga negara dari negara yang memenuhi syarat dalam bidang prioritas WWF-AS: Belize, Brasil, Bhutan, Bolivia, Kamboja, Kamerun, Republik Afrika Tengah, Chili, Kolombia, Dem. Republik Kongo, Ekuador, Guyana Prancis, Gabon, Guatemala, Guyana, Honduras, Indonesia, Kenya, Laos, Madagaskar, Malaysia, Mozambik, Myanmar, Namibia, Nepal, Paraguay, Peru, Republik Kongo, Suriname, Tanzania, Uganda, Vietnam yang sudah mendaftar/berminat untuk mendaftar di program master atau PhD. Pelamar dapat mengajukan hingga dua tahun pendanaan dan meminta hingga <strong>$ 30.000 </strong>per tahun. Jumlahnya akan bervariasi.</div><div><br></div><div>Batas waktu untuk mengirimkan aplikasi adalah 1 Februari 2023 pukul 23:59 Eastern Time. Pelamar harus mengirimkan proposal lengkap mereka melalui tautan ini. Pelamar dapat mengajukan hingga dua tahun pendanaan dan meminta hingga $30.000 per tahun. Jumlah dana akan bervariasi. Pelamar yang diterima akan diberitahukan pada awal Mei 2023. Setiap pertanyaan tentang proses aplikasi atau program harus ditujukan ke: efn@wwfus.org.</div>', '1672163606.jpg', 'Russell E. Train Fellowships mendukung individu yang mengejar gelar master atau doktoral di bid', 'Russell E. Train Fellowships mendukung indivi', 3, '2022-12-27'),
	(15, 'Ingin Kuliah Gratis Bidang IT Sambil Digaji? Ikuti Beasiswa Semesta', '<div>Bertepatan dengan peringatan<strong> Hari Kebangkitan Nasional ke-113</strong>, Beasiswa Semesta resmi dibuka bagi siswa SMA/SMK sederajat. </div><div><br></div><div>Beasiswa Semesta ini diselenggarakan Komunitas Sevima (PT. Sentra Vidya Utama) dan mendapatkan dukungan dari Kementerian Pendidikan dan Kebudayaan Riset Teknologi (<strong>Kemendikbud Ristek</strong>) khususnya Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti). Beasiswa Semesta merupakan singkatan dari \'Sevima Mencari Siswa Bertalenta\'. Program dengan total hadiah Rp 300 juta ditujukan kepada siswa SMA/SMK sederajat bertalenta unggul.</div><div><br></div><div><strong>Kuliah di kampus favorit dan dapat gaji </strong></div><div><br></div><div>Calon penerima beasiswa bisa berkesempatan kuliah di kampus favorit di Surabaya dengan bantuan berupa bebas biaya uang semester hingga lulus sarjana (S1). Selain itu, calon penerima beasiswa juga akan diajak bekerja di bidang IT (Information Technology) dan memperoleh gaji bulanan. "Saya mengapresiasi inisiatif Sevima yang peduli dan turut mendorong lahirnya talenta di bidang IT. </div><div><br></div><div>Kedepan peran para talenta di bidang IT akan semakin penting dalam kehidupan kita dan kemajuan dunia," tegas Direktur Jenderal Pendidikan Tinggi Kemdikbudristek Prof Nizam, dalam keterangan tertulis yang diterima Kompas.com, Sabtu (22/5/2021).</div><div><br></div><div><strong>Lahirkan talenta unggul di bidang IT</strong> </div><div><br></div><div>Menurut Prof. Nizam, melalui beasiswa Semesta ini bisa mendorong dan melahirkan talenta-talenta unggul di bidang IT. "Saya mengapresiasi inisiatif Sevima yang peduli dan turut mendorong lahirnya talenta-talenta di bidang IT melalui program nyata dalam bentuk Beasiswa Semesta 2021. Semangat gotong royong semacam ini sangat penting untuk mengakselerasi kemajuan SDM di Indonesia," ungkap Prof. Nizam. </div><div><br></div><div><strong>Beasiswa Semesta bangun SDM Unggul </strong></div><div><br></div><div>"Beasiswa Semesta merupakan wujud peran aktif kami di bidang edukasi dalam membangun SDM unggul di Indonesia. Dengan memberikan kesempatan kepada putra-putri bangsa Indonesia mendapatkan pendidikan tinggi berkualitas khususnya di bidang IT," terang Halim.</div><div><br></div><div>Di tahun ketiga diselenggarakannya Beasiswa Semesta, Sevima berusaha memperbanyak kuota penerima, meningkatkan kualitas dan menjalin kerjasama dengan berbagai sekolah, perguruan tinggi dan para pengambil kebijakan di pemerintahan. "Harapannya melalui kerjasama dan penyelenggaraan kolaborasi ini, bisa memberikan manfaat positif bagi pembangunan pendidikan di Indonesia sesuai dengan visi Indonesia Maju," imbuhnya. </div><div><br></div><div><strong>Cara pendaftaran  Persyaratan mendaftar Beasiswa Semesta, antara lain:</strong> </div><ol><li>Warga Negara Indonesia. </li><li>Telah menyelesaikan pendidikan SMA/SMK/sederajat, maksimal lulusan tahun 2019. </li><li>Tidak terikat beasiswa lainnya. </li><li>Bersedia berdomisili di Surabaya. </li><li>Berminat di bidang IT.</li></ol>', '1672165296.jpg', 'Bertepatan dengan peringatan Hari Kebangkitan Nasional ke-113, Beasiswa Semest', 'Bertepatan dengan peringatan Hari Keb', 3, '2022-12-27'),
	(16, 'Google Buka 3.000 Beasiswa IT bagi Lulusan D3-S1 Semua Jurusan', '<div>Pandemi <strong>Covid-19</strong> membuat penggunaan teknologi semakin luas, baik untuk kegiatan belajar mengajar, sistem sekolah, hingga perusahaan dan organisasi pemerintah. Namun, perkembangan teknologi yang kian pesat, kerap tak diimbangi oleh ketersediaan talenta digital. Indonesia sendiri diprediksi kekurangan<strong> 9 juta talenta digital </strong>hingga tahun 2030. </div><div><br></div><div>Guna memenuhi kebutuhan talenta digital, di samping meningkatkan kualitas SDM untuk berkarier di bidang teknologi, Google Indonesia menghadirkan sejumlah program, salah satunya program beasiswa "<strong>IT Support Fresh Graduate Academy</strong>" yang bekerja sama dengan Kementerian Komunikasi dan Informatika Republik Indonesia (<strong>Kominfo</strong>).</div><div><br></div><div><strong>Mengapa IT Support?</strong></div><div><br></div><div>Meski teknologi dapat memudahkan, sering kali, terjadi kendala ketika komputer rusak, sistem gagal, atau telepon mati, membutuhkan seorang ahli untuk memperbaikinya atau IT Support. </div><div><br></div><div>IT Support merupakan bidang tentang pemecahan masalah dan menyediakan layanan untuk pengguna, termasuk menyiapkan komputer untuk karyawan di perusahaan, sekolah atau instansi tertentu, mengawasi sistem komputer, dan men-debug setiap kali masalah muncul. </div><div><br></div><div>Berbagai pekerjaan yang tersedia untuk keahlian ini adalah sebagai Teknisi Help-desk, System Analyst, Support Specialist, Administrator Basis Data, Teknisi IT, User Computer Specialist, dan banyak lagi. Alur karier IT Support telah disiapkan oleh Google untuk memberikan pelatihan mengenai kemampuan seorang ahli dalam menangani berbagai permasalahan IT di instansinya.</div><div><br></div><div>Pada pelatihan ini, peserta akan mendapatkan 5 kelas profesional, yaitu: </div><ol><li>Dasar-Dasar Dukungan Teknis (24 Jam) </li><li>Seluk Beluk Jaringan Komputer (34 Jam) </li><li>Sistem Operasi dan Anda: Menjadi Pengguna yang Berdaya (35 Jam) </li><li>Administrasi Sistem dan Layanan Infrastruktur TI (28 Jam) </li><li>Keamanan IT: Pertahanan terhadap Kejahatan Digital (29 Jam)</li></ol><div><br></div><div><strong>Persyaratan peserta</strong> </div><ol><li>Warga Negara Indonesia. </li><li>Usia Maksimal 27 Tahun pada saat mendaftar. </li><li>Lulusan D3/D4/S1 atau mahasiswa/i Tingkat Akhir dari seluruh jurusan, dibuktikan dengan ijazah/SKL/Transkrip Nilai/Surat Keterangan Sidang. </li><li>Diutamakan bagi lulusan bidang TIK, MIPA, dan teknik lainnya. </li><li>Tidak sedang bekerja. </li><li>Lolos Seleksi Administrasi dan Tes Substansi secara online. </li><li>Sanggup menyediakan sarana pelatihan dengan spesifikasi tertentu sesuai persyaratan masing-masing tema pelatihan (tertulis dalam silabus) Ijazah/SKL/Transkrip Nilai/Surat Keterangan Sidang Surat pernyataan Belum Bekerja. *Bagi calon peserta penyandang disabilitas dapat mendaftar pelatihan dengan menyediakan sarana dan prasarana pendukung pelatihan secara mandiri</li></ol>', '1672165673.jpg', 'Pandemi Covid-19 membuat penggunaan teknologi semakin luas, baik untuk kegiata', 'Pandemi Covid-19 membuat pen', 3, '2022-12-27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
