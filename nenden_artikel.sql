-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:16 AM
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
(1, 'Kemakom Goes To School (KGTS)\r\n', '1.png', 'Kemakom Goes To School atau KGTS merupakan program kerja dari Divisi Pendidikan dan Pelatihan BEM Kemakom Universitas Pendidikan Indonesia. Kegiatan ini menargetkan para siswa SMK khususnya jurusan Teknik Komputer dan Jaringan serta Rekayasa Perangkat Lunak yang bertujuan untuk memberikan pelatihan seputar bidang Teknologi Informasi dan Komunikasi yang diberikan langsung oleh praktisi dari industri sehingga para siswa dapat mengetahui gambaran serta kemampuan apa yang dibutuhkan saat terjun ke dunia profesional.\r\n\r\n\r\n\r\nDalam kegiatan ini, para siswa akan diberikan pemahaman mengenai pentingnya melanjutkan studi ke jenjang yang lebih tinggi, tentunya dalam bidang yang sama. Selain itu, kegiatan ini pun merupakan suatu bentuk pengenalan Departemen Pendidikan Ilmu Komputer dan perkenalan mengenai event tahunan yaitu DINAMIK yang akan dilaksakan pada waktu dekat ini. Kegiatan Kemakom Goes To School dilaksanakan secara online selama 2 hari melalui platform Zoom Meeting. Kegiatan ini diselenggarakan pada hari sabtu dan minggu, tepatnya pada tanggal 7 sampai dengan 8 Agustus 2021. Kemakom Goes To School kali ini mengusung tema “Building Digital World Security”.\r\n\r\n\r\n\r\nPada hari pertama, acara yang dihadiri oleh 100 orang ini dimulai pukul 07.30 yang dibuka dengan pembacaan ayat suci Al-Quran kemudian sambutan dari Ketua Pelaksana, Ketua BEM Kemakom FPMIPA UPI, dan Ketua Program Studi Ilmu Komputer. Acara disambungkan dengan menampilakan cuplikan mengenai perkenalan Departemen Pendidikan Ilmu Komputer, setelah itu dilanjutkan sesi pematerian dari narasumber yang kompeten yaitu M. Arif Fadhly Ridha, S.Kom., M.T., CCNA, MTCNA, MTCRE, MTCIPv6E, MTCWE, MTCSE, CEH, CHFI, ECIH, S-ISF, S-ITSF, S-ITSP, S-EHF, S-EHP, JNCIA selaku dosen Politeknik Caltex Riau, mengenai konsep dasar Cyber Security. Pada hari kedua kegiatan ini, disambung dengan pemberian materi peluang karir seorang Cyber Security Engineer dari narasumber yang sama. Setelah penyampaian materi, acara dilanjutkan dengan sesi tanya jawab yang dilakukan oleh narasumber dan peserta. Sesi tanya jawab berlangsung dengan antusiasme dari para peserta. Acara Kemakom Goes To School diakhiri dengan penyampaian kesan pesan para peserta selama mengikuti kegiatan Kemakom Goes To School, kemudian panitia mengumumkan pemenang dooprize dan ditutup dengan sesi foto bersama.\r\n\r\n\r\n\r\nProgram kerja Kemakom Goes To School pada tahun ini berjalan dengan lancar, diharapkan dengan adanya kegiatan ini peserta dapat menambah wawasan dan pengetahuan serta dapat menumbuhkan semangat para siswa untuk terus memperdalam kemampuan mereka di bidang tersebut agar tidak tertinggal oleh perkembangan Teknologi Informasi dan Komunikasi yang semakin pesat.', 4),
(2, 'Registrasi Anggota Muda', '2.png', 'Pengenalan lingkungan dan budaya perkuliahan kepada mahasiswa baru memiliki urgensi yang menjadi langkah awal perjalanan mahasiswa baru kedepannya. Oleh karena itu, Registrasi Anggota Muda atau biasa disingkat RAM ini hadir dikalangan mahasiswa baru sebagai gerbang awal dalam menempuh dunia perkuliahan. RAM (Registrasi Anggota Muda) merupakan pintu gerbang yang menyambut mahasiswa baru di awal perkuliahan. Dengan beberapa tujuan, yaitu: mengenalkan lingkungan kampus, memberikan ilmu yang perlu dipersiapkan, dan mendata mahasiswa baru untuk keperluan departemen. Dari beberapa tujuan tersebut, di ambillah sebuah tema pada tahun ini yaitu “Memberi Modal, Membagi Bekal”. Besar harapan, kegiatan ini dapat menjadi modal awal bagi seluruh mahasiswa baru dalam menempuh perjalanan panjang di dunia baru perkuliahan.\r\n\r\nPelaksanaan RAM (Registrasi Anggota Muda) dilakukan selama tiga kali menyesuaikan dengan jalur masuk yang ada di Universitas Pendidikan Indonesia. Kegiatan pertama dilaksanakan pada 09 April 2022 bagi mahasiswa baru jalur SNMPTN, kegiatan kedua dilaksanakan pada 02 Juli 2022 bagi para mahasiswa baru jalur SBMPTN, dan kegiatan terakhir dilaksanakan pada 12 Agustus 2022 untuk mahasiswa baru jalur SM, PI, dan SMMPTN Barat.\r\n\r\nKegiatan dibuka pada pukul 08.00 WIB dengan beberapa rangkaian pembukaan, dilanjutkan dengan penayangan video 3D dan animasi yang berisi penyambutan kepada seluruh mahasiswa baru yang hadir. Dengan suasana yang meriah dan menyenangkan, kegiatan dilanjutkan dengan memperkenalkan seluruh komponen panitia kepada mahasiswa baru. Setelah mengenal dengan panitia, MC memandu ice breaking yang bertujuan mempererat pertemanan di antara para mahasiswa baru. Kegiatan pun masuk ke rangkaian inti, yaitu teknis pengisian data dan sesi diskusi bersama panitia di breakout room yang membahas hal-hal yang perlu dipersiapkan selama perkuliahan. Setelah rangkaian inti dilaksanakan, panitia memberikan kesempatan kepada mahasiswa baru untuk menyampaikan kesan pesannya melalui Google Jamboard. Sebelum menutup kegiatan, panitia mempersilahkan peserta untuk mengisi presensi sekaligus angket. “Kakak-kakaknya seru sehingga acaranya tidak membosankan dan juga menambah pengetahuan seputar perkuliahan” kutipan salah satu feedback mahasiswa baru pada angket yang diberikan, menjadi bukti keberhasilan dan meriahnya kegiatan RAM (Registrasi Anggota Muda) ini.', 4),
(3, 'Qurban With Kemakom (Qurma) 2022', '3.jpg', 'Qurban with Kemakom atau biasa disebut dengan QURMA merupakan salah satu kegiatan yang diselenggarakan oleh divisi kerohanian BEM Kemakom FPMIPA UPI dengan tema “TEBAR KEBAIKAN MELALUI SEMANGAT BERKURBAN”. Kegiatan tersebut dilaksanakan pada saat bulan Dzulhijjah yang dikepalai oleh salah satu anggota divisi kerohanian yaitu saudara Galvin Eka Nurullah. Kegiatan Qurma tahun ini ditujukan untuk memberikan gambaran dan pembelajaran tentang ibadah Qurban khususnya kepada warga Kemakom dan juga turut serta melaksanakan anjuran untuk berQurban.\r\n\r\nSecara garis besar kegiatan Qurma ini dirancang sedemikian rupa sesuai dengan pelaksanaan kegiatan Qurban pada umumnya. Terdapat kegiatan-kegiatan yang juga dilaksanakan melalui kerjasama tim panitia Qurma dengan warga sekitar, yaitu di daerah Gang Cempaka RT 02/RW 06. Adapun sebelum kegiatan ini dimulai, tim panitia membuka donasi bagi para dermawan yang bisa langsung menyumbangkan rezekinya dalam bentuk uang atau menitipkan langsung hewan qurban untuk bisa diqurbankan melalui acara Qurban ini.\r\n\r\nSecara umum, Qurma tahun ini dilaksanakan pada tanggal 11 Juli 2022 dengan rincian kegiatan diawali dengan pembukaan Donasi yang dibuka mulai pada tanggal 3 Juni sd. 3 Juli 2022 dengan mengunggah poster open donasi di Instagram @kemakom, @i.credia dan whatsapp KEMAKOM. Setelah mendapatkan dana dan juga amanah dari Shahibul Qurban, tim panitia Qurma langsung mencari dan membeli hewan Qurban yang terbaik ke beberapa tempat jual beli hewan Qurban di daerah Bandung. Kemudia kegiatan puncak pada tanggal 11 Juli 2022 diawali dengan penyerahan hewan Qurban dari tim panitia Qurma kepada perwakilan warga Gang Cempaka RT 02/RW 06 untuk disembelih dan disaksikan bersama. Dilanjut dengan pemotongan daging dan distribusi yang ditujukan kepada warga Kemakom yang hadir di tempat, warga sekitar Gang Cempaka dan disalurkan kepada Yayasan Mizan Amanah.\r\n\r\nKegiatan Qurma 2022 ini berjalan dengan baik dari awal hingga akhir sesuai dengan konsep yang sudah dibentuk oleh tim panitia Qurma 2022. Setelah pendistribusian selesai, kegiatan Qurma dilanjut dengan doa penutup dan ucapan singkat oleh perwakilan warga Gang Cempaka RT 02/RW 06. Rangkaian acara Qurma 2022 ini diakhiri dengan kegiatan kebersamaan antara tim panitia Qurma 2022 dengan beberapa mahasiswa Kemakom yang turut hadir selama rangkaian acara Qurma 2022 selesai.', 4),
(4, 'BEAUTY CLASS 2022 X EMINA BEAUTY', '4.1.jpg', 'Beauty class adalah salah satu program kerja tahunan yang diselenggarakan oleh divisi pengembangan minat dan bakat (DPMB) BEM KEMAKOM UPI 2022. Program kerja ini baru diadakan satu tahun periode kepengurusan BEM KEMAKOM tepatnya pada tahun 2021. Dengan adanya Beauty class ini, diharapkan dapat meningkatkan, mengelola, dan membudayakan bidang minat bakat dikalangan mahasiswa dan mahasiswi FPMIPA sebagai suatu wadah apresiasi untuk mengembangkan potensi dan kreativitas mahasiswa. Serta menyediakan ruang untuk setiap mahasiswa FPMIPA dalam merawat dan menjaga kecantikannya, dan juga sebagai ajang silaturahmi antara mahasiswa FPMIPA.\r\n\r\nTahun ini, Beauty class bekerjasama dengan brand Emina Cosmetics yang memberikan materi mengenai Personal Branding, basic skincare, dan ditutup dengan tutorial make up daily. Dengan memperoleh ilmu ini maka peserta akan semakin percaya diri dan tampil menarik serta peserta akan semakin mengetahui bagaimana cara bersikap yang benar sehingga membuatnya menjadi lebih anggun, bagaimana memilih produk skincare yang sesuai dengan kondisi wajah sehingga tidak salah pilih jenis skincare, dan tentunya bagaimana memakai make up yang benar dan sesuai dengan bentuk dan warna kulitnya.\r\n\r\nAcara ini dilaksanakan pada tanggal 24 April 2022 dan dimulai pada pukul 13.00 WIB melalui platform Zoom meeting, acara diawali dengan pembukaan oleh MC yang dilanjut dengan pembacaan ayat suci Al-Qur’an. Acara kemudian dilanjutkan dengan sambutan-sambutan yang diberikan oleh ketua pelaksana, ketua BEM Kemakom, serta perwakilan Dosen Ketua Prodi Ilmu Komputer yaitu ibu Rani Megasari, M.T.. Setelah itu acara kemudian dilanjutkan ke kegiatan inti yaitu pematerian yang diberikan langsung oleh Kak Velin mengenai Personal Branding dan basic skincare.\r\n\r\nSetelah pematerian selesai acara kemudian dilanjutkan dengan kuis menggunakan Quizizz dan pemenang kuis ini diberikan hadiah berupa uang tunai. Setelah itu disambung oleh sesi tanya jawab antara narasumber dan peserta yang dipandu oleh MC, kegiatan tanya jawab ini berlangsung dengan penuh antusias dari para peserta. Setelah sesi tanya jawab kemudian kegiatan dilanjutkan dengan tutorial make up daily yang dipandu oleh kak Asti selaku tim dari Emina Cosmetics selama 10 menit dan peserta mengikuti ber-make up di rumah masing-masing menggunakan alat make up yang tersedia. Peserta dengan make up terbaik diberikan hadiah berupa hampers dari Emina Cosmetics. Kegiatan terakhir dilanjutkan dengan do’a penutup serta foto bersama. Acara ini berakhir pada pukul 15.35 WIB.\r\n\r\nKegiatan Beauty class ini berjalan lancar, acara pun dapat dibilang cukup sukses, dan mendapatkan feedback yang sangat baik dan juga feedback yang mengevaluasi agar kegiatan Beauty class ini dapat berjalan lebih baik kedepannya di tahun yang akan datang.', 4),
(5, 'Kajian Kaderisasi 2022', '5.jpeg', 'Pada Tanggal 2 April 2022, telah dilaksanakan salah satu program kerja kolaborasi antara Divisi Pengembangan Organisasi atau disingkat DPO dengan Dewan Perwakilan Mahasiswa atau disingkat juga dengan DPM. Kegiatan ini diikuti oleh mahasiswa aktif kemakom, alumni kemakom, dan juga dosen perwakilan dari Kemakom yang dilaksanakan melalui video Conference Zoom Meeting.\r\n\r\nKajian Kaderisasi diadakan untuk mengkaji dan mengevaluasi kegiatan kaderisasi tahun-tahun sebelumnya dan juga untuk menampung aspirasi dari warga kemakom yang memiliki pendapat atau aspirasi untuk kegiatan kajian kaderisasi di tahun berikutnya. Kajian Kaderisasi ini bertujuan sebagai sarana sosialisasi, pengumpulan aspirasi, dan pemberian kritik serta saran dari seluruh warga kemakom untuk kegiatan kaderisasi secara keseluruhan di tahun berikutnya.\r\n\r\nKegiatan ini berlangsung dengan cukup lancar tanpa adanya hambatan dan juga cukup menegangkan. Kegiatan ini dimulai pada pukul 13.00 yang diawali dengan pembukaan oleh MC dari DPM, lalu dilanjutkan dengan pembacaan tilawah yang juga oleh DPM. Kemudian, ada pemaparan materi mengenai kaderisasi oleh DPO melalui share screen powerpoint. Setelah pematerian selesai, dilanjutkan dengan sesi tanya jawab yang berlangsung selama 40 menit. Sesi tanya jawab berlangsung secara interaktif dengan adanya keterlibatan dari seluruh pihak baik itu perwakilan dari mahasiswa aktif kemakom, alumni kemakom, dan juga dosen kemakom. Setelah sesi tanya jawab selesai, kegiatan dicukupkan dan ditutup dengan pembacaan doa lalu diakhiri dengan dokumentasi kegiatan.\r\n\r\nKegiatan kajian kaderisasi ini berjalan lancar, acarapun dapat dibilang cukup sukses, dan mendapatkan feedback yang sangat baik dan juga feedback yang mengevaluasi agar kegiatan kajian kaderisasi ini dapat berjalan lebih baik di tahun yang akan datang. Dengan adanya Kajian Kaderisasi ini, diharapkan dapat membantu kegiatan kaderisasi dan mengajak warga kemakom untuk bersosialisasi serta menyampaikan aspirasi dan pendapatnya untuk kaderisasi yang lebih baik di tahun yang akan datang.', 4),
(7, 'Kuliah Umum', '7.jpg', 'Kuliah umum adalah sebuah kegiatan talkshow yang bertujuan untuk memperkenalkan kultur perkuliahan di bidang ilmu komputer bagi mahasiswa baru serta menambah wawasan terkait dunia industri kepada seluruh mahasiswa Departemen Pendidikan Ilmu Komputer. Kuliah umum ini merupakan salah satu dari beberapa program kerja Divisi Pendidikan dan Pelatihan BEM Kemakom Universitas Pendidikan Indonesia. Kegiatannya berlangsung 1 hari melalui platform Zoom Meeting dan dilaksanakan pada hari minggu, tepatnya tanggal 26 September 2021. Kuliah umum tahun ini mengangkat tema “Empowering Future with Technology Innovation Development”.\r\n\r\n\r\n\r\nAcara dimulai pukul 08.00 WIB serta dihadiri oleh 98 orang partisipan. Diawali dengan pembukaan MC disambung tilawah dan saritilawah kemudian sambutan dari Ketua Pelaksana, Ketua BEM Kemakom FPMIPA UPI, dan Ketua Program Studi Ilmu Komputer. Acara ini dimeriahkan dengan adanya penampilan dari Ilkom Voice. Setelah itu, dilanjutkan talkshow yang dipandu oleh moderator dengan 3 narasumber yang kapabel dan berkualitas yaitu Fernaldy Akbar Faudzan, S.Pd., M. T. sebagai Data Engineer di Samsung R&D Indonesia, Gilang A. Ramadan, S.Kom. sebagai UX Researcher di Evermos, dan Ruly Anggriawan, S.Pd. sebagai Software Engineer di Dkatalis. Semua narasumber berbagi pengalaman mulai dari alasan berkuliah, kehidupan masa kuliah sampai capaian yang teraih pada saat sekarang. Sesi talkshow berlangsung secara interaktif serta mampu menggugah inspiratif khususnya bagi mahasiswa Departemen Pendidikan Ilmu Komputer. Setelah sesi ini berakhir, acara diteruskan dengan sesi tanya jawab yang dilakukan oleh narasumber dan peserta. Sesi tanya jawab berlangsung dengan antusiasme. Kemudian acara diakhiri dengan penyampaian kesan pesan para peserta selama mengikuti kegiatan kuliah umum, disambung MC mengumumkan pemenang doorprize. Setelah itu, acara ditutup dengan doa dan sesi foto panitia bersama peserta.\r\n\r\n\r\n\r\nKuliah umum pada kali ini terlaksana dengan baik dan lancar. Diharapkan dengan adanya kegiatan ini bisa memberikan pengetahuan serta wawasan kepada peserta juga dapat membangkitkan motivasi dan gambaran mengenai apa yang akan menjadi fokus mereka untuk menggapai impiannya\r\n', 4),
(8, 'Webinar Advoschool 2021', '8.jpg', 'Minggu, 28 Maret 2021 lalu telah dilaksanakan acara Webinar Advoschool. Webinar Advoschool merupakan program kerja yang bertujuan untuk memberikan pengetahuan dan pencerdasan mengenai advokasi kepada warga Kemakom khususnya anggota BEM Kemakom Kabinet Asmaraloka. Program kerja yang dilaksanakan oleh Divisi Advokasi Sosial dan Politik pada tahun ini mengangkat tema “Membangun Pola Pikir Kritis Mahasiswa dalam Beradvokasi Cerdas di Masa Pandemi”. Acara Webinar Advoschool yang dilaksanakan secara daring melalui platform Zoom Meeting ini berlangsung cukup seru.\r\n\r\n\r\n\r\nAcara ini dimulai pada pukul 09.00 WIB yang diawali dengan pembukaan acara oleh MC kemudian pembacaan ayat suci Al-Qur’an. Dilanjutkan dengan beberapa sambutan yang diberikan oleh Ketua Pelaksana yaitu Aisyah Nursyahidah dan Ketua BEM Kemakom Kabinet Asmaroloka yaitu Fadjrin Diraja Muhammad. Selanjutnya ada pematerian yang disampaikan langsung oleh saudari Retno Ayunda Resmi selaku Menteri Advokasi dan Kesejahteraan Mahasiswa BEM REMA UPI 2020-2021.\r\n\r\nbr>\r\nSetelah pematerian, acara yang dihadiri oleh kurang lebih 40 orang peserta ini dilanjutkan dengan sesi Talkshow yang berlangsung cukup seru. Di acara ini juga, dihadirkan sesi kuis yang membuat suasana acara ini lebih meriah dan terdapat hadiah menarik bagi para pemenang kuisnya juga. Setelah kuis berakhir, dilanjutkan dengan sesi tanya jawab yang berlangsung cukup interaktif antara para peserta dengan pemateri. Akhir acara ditutup dengan pembacaan doa dan dilanjutkan dengan sesi dokumentasi sekaligus simbolisasi penyerahan sertifikat kepada pemateri.\r\n\r\n\r\n\r\nAcara Webinar Advoschool kali ini berjalan cukup lancar dan meriah. Selain mendapatkan ilmu dan pemahaman mengenai advokasi, para peserta juga diharapkan bisa mengembangkan pola pikir kritisnya setelah mengikuti acara yang hebat ini.\r\n\r\n\r\n\r\nSampai jumpa di Webinar Advoschool selanjutnya!', 4),
(18, 'Kajian Keislaman 2022', '1673414103.jpg', 'Divisi kerohanian BEM Kemakom FPMIPA UPI telah menyelenggarakan acara kajian keislaman yang dilaksanakan pada hari Ahad, tanggal 16 Oktober 2022. Kajian keislaman ini merupakan acara yang selalu dilaksanakan setiap tahunnya oleh Divisi Kerohanian BEM Kemakom itu sendiri. Alhamdulillah pada kegiatan ini banyak sekali antusias baik itu dari Mahasiswa Departemen Pendidikan Ilmu Komputer, dan juga masyarakat umum lainnya. Untuk acara kajian keislaman ini dilaksanakan tidak jauh dari kampus Universitas Pendidikan Indonesia, yaitu dilaksanakan di Masjid At-Taqwa KPAD yang beralamat di Jl. Pak Gatot Raya H No.27, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat.\r\n\r\nKegiatan ini diselenggarakan dengan tujuan untuk meningkatkan keimanan dan keatqwaan kepada Allah SWT, meningkatkan tali persaudaraan baik itu antar warga kemakom, mau pun masyarakat umum, menambah wawasan dan pengetahuan keislaman masyarakat umum muslim, dan sebagai media atau sarana untuk menyebarkan nilai-nilai islam. Kajian Keislaman 2022 diadakan secara luring kembali setelah dua tahun ke belakang dilaksanakan secara daring. Ada pun tema pada kajian keislaman 2022 ini yaitu “Membangun Peradaban Generasi Milenial dengan Akhlak Qurani” yang dibawakan oleh seorang pemateri yang sangat luar biasa, yaitu Ustadz Muzammil Hasballah yang merupakan seorang Qari dan pendakwah Indonesia.\r\n\r\nDengan tema yang menarik serta pemateri yang sangat luar biasa, hal ini menggugah masyarakat umum, warga kemakom juga beberapa perusahaan atau organisasi untuk ikut men-support acara Kajian Keislaman ini, sehingga terdapat 150 orang yang menghadiri acara secara luring, 542 viewer di live streaming pada channel youtube BEM KEMAKOM, 6 sponsor, serta 2 Donatur. Alhamdulillah kegiatan ini berjalan dengan lancar dari awal hingga akhir dengan dinahkodai oleh seorang ketua pelaksana yaitu kang Muhammad Razif Afdan yang telah mengarahkan para panitia dari sebelum acara hingga selesainya acara.', 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
