-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 02.29
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtubesalghi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alghi_kategori`
--

CREATE TABLE `alghi_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alghi_kategori`
--

INSERT INTO `alghi_kategori` (`id_kategori`, `nama`, `slug`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'rekayasa perangkat lunak'),
(2, 'Robotika, Kecerdasan Buatan, dan Internet Of Thing (IoT)', 'robotika, kecerdasan buatan, dan internet of thing (IoT)'),
(3, 'Multimedia dan Desain', 'multimedia dan desain'),
(4, 'Teknik Komputer dan Sistem Jaringan', 'teknik komputer dan sistem jaringan'),
(5, 'Big Data Analysis', 'big data analysis'),
(6, 'Sistem Informasi', 'sistem informas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alghi_post`
--

CREATE TABLE `alghi_post` (
  `id_posts` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alghi_post`
--

INSERT INTO `alghi_post` (`id_posts`, `id_kategori`, `user_id`, `Judul`, `Kategori`, `Isi`) VALUES
(4, 1, 1, 'KECERDASAN BUATAN (AI) dan NILAI CO-CREATION dalam PENJUALAN B2B (BUSINESS-TO-BUSINESS)', 'Robotika, Kecerdasan Buatan, dan Internet Of Thing (IoT)', 'Kemajuan berkelanjutan dalam teknologi informasi, seperti Artificial intelligence (AI), membuka peluang baru dan menarik untuk kreasi nilai bersama di antara para pelaku ekonomi. Namun, sedikit yang diketahui tentang mekanisme dan proses penciptaan nilai bersama yang dimungkinkan oleh AI. Sementara para sarjana setuju bahwa teknologi AI secara signifikan mengubah aktivitas manusia dan sumber daya manusia, saat ini kami tidak memiliki pemahaman yang memadai tentang bagaimana manusia dan teknologi AI berinteraksi dalam penciptaan nilai bersama. Ini adalah fenomena sentral yang diselidiki dalam artikel ini. Secara khusus, dengan menggunakan Service-Dominant Logic (S-DL) sebagai lensa, studi ini menyelidiki aktivitas, peran, dan sumber daya yang dipertukarkan dalam co-creation bersama nilai yang diaktifkan AI, menggunakan penciptaan kecerdasan kompetitif sebagai konteks penelitian. Analisis menunjukkan bahwa proses penciptaan bersama nilai yang diaktifkan oleh AI adalah interaksi kompleks antara aktor manusia dan non-manusia yang melakukan salah satu dari enam peran berbeda baik secara bersama-sama maupun secara independen. Artikel ini berkontribusi pada SD-L dan memberikan pemahaman yang lebih dalam tentang aktivitas (\'bagaimana\'), aktor (\'siapa\'), dan sumber daya (\'apa\') dalam kreasi bersama nilai yang didukung AI , dengan demikian membantu menutup celah yang teridentifikasi dalam literatur.'),
(5, 1, 2, 'IMPLEMENTASI MACHINE LEARNING UNTUK MEMPREDIKSI MOOD PADA LAGU', 'Robotika, Kecerdasan Buatan, dan Internet Of Thing (IoT)', 'Pada setiap tahap revolusi industri selalu ada teknologi baru yang menggantikan tugas manusia.Salah satu teknologi dalam revolusi industri 4.0 adalah teknologi kecerdasan buatan Kecerdasan buatan dideskripsikan sebagai komputer yang memiliki program yang bisa  meniru kemampuan kognitif manusia dalam memecahkan masalah. Selain rule-based, dalam bidang kecerdasan buatan terdapat teknologi machine learning.  Machine learning adalah proses pembelajaran melalui suatu algoritme dan model statistik yang digunakan oleh komputer untuk melakukan tugas tertentu tanpa diprogram secara eksplisit. Algoritme machine learning menggunakan sampel data yang sering disebut data training untuk membuat model matematika yang akan digunakan untuk melakukan prediksi dan mengambil keputusan. Pada penelitian ini penulis akan menggunakan kecerdasan buatan dengan metode machine learning untuk memprediksi mood. Mood merupakan perasaan manusia kepada lingkungan sekitar namun tidak spesifik pada satu obyek. Mood berlangsung dalam rentang waktu yang lama namun terbatas, bukan keadaan emosional yang terus melekat pada seseorang. Salah satu metode memprediksi mood adalah menggunakan image recognition pada wajah. Penelitian yang memiliki topik tersebut salah satunya dilakukan oleh Landowska dkk. Landowska dkk memprediksi mood pada peserta e-learning. Kamera diletakkan pada atas dan bawah monitor. Alat pencahayaan diletakkan di belakang monitor. Ternyata memprediksi mood menggunakan image recognition memiliki kekurangan dalam hal kualitas gambar. Posisi wajah, posisi kamera dan pencahayaan sangat berpengaruh terhadap kualitas prediksi.Pada penelitian ini penulis akan melakukan prediksi mood menggunakan lagu yang didengarkan pengguna. Alasan utama lagu layak dipakai untuk memprediksi mood karena menurut paper yang ditulis W. Chijioke mayoritas responden sangat setuju terhadap pernyataan “pendengar memilih lagu berdasarkan mood mereka”'),
(6, 1, 3, 'PENGEMBANGAN GAME EDUKASI BERBASIS ANDROID SEBAGAI MEDIA PEMBELAJARAN BIOLOGI BERNUANSA MOTIVASI SISWA KELAS XI DI SMA/MA ', 'Multimedia dan Desain', 'Berdasarkan hasil pra penelitian yang telah dilakukan diketahui bahwa media pembelajaran yang digunakan berupa media power point dan CD interaktif. Kelemahan dari media yang diterapkan yaitu masih berupa ringkasan materi yang diadaptasi dari buku dan sumber lain dengan beberapa gambar sebagai penguat materi. Penelitian ini bertujuan untuk mengetahui cara pengembangan dan kelayakan media pembelajaran game edukasi biologi berbasis android. Jenis penelitian dan pengembangan atau Research and Development (R&D) ini menggunakan prosedur Borg and Gall hingga 7 tahap pengembangan. Data yang diperoleh akan dianalisis dengan menggunakan skala likert. Hasil uji kelayakan media game edukasi menunjukkan media “sangat layak” berdasarkan hasil validasi ahli media yaitu sebesar 80,62%, ahli materi 81,24%, dan ahli bahasa 93,75%. Respon tanggapan guru menunjukkan media “sangat menarik” dengan presentase 77,84 %. Selanjutnya respon peserta didik ditiga sekolah menunjukan media “sangat menarik” dengan presentase hasil berturut-turut yaitu 85,90%, 78,69% dan 80,50%. Berdasarkan perolehan hasil tersebut dapat disimpulkan media game edukasi berbasis biologi sangat menarik digunakan sebagai media pembelajaran materi biologi bernuansa motivasi siswa kelas XI di SMA/MA.'),
(8, 1, 4, 'GAME EDUKASI SEJARAH DI INDONESIA SEBAGAI MEDIA PEMBELAJARAN BERBASIS ANDROID', 'Multimedia dan Desain', 'Pendidikan sejarah merupakan bagian dari usaha penanaman nilai-nilai yang fungsional untuk menanamkan pengetahuan. Hal ini disebabkan adanya keyakinan bahwa materi pendidikan sejarah mampu mengembangkan sifat dan karakter generasi muda bangsa. Namun dalam pembelajaran sejarah dianggap kurang menarik minat belajar siswa karena sistem pembelajaran yang kurang efektif dan metode yang bersifat monoton. Mengangkat dari fenomena ini, bagaimana membuat sebuah game edukasi sejarah sebagai media yang digunakan untuk menarik minat belajar siswa. Tujuan dari penelitian ini yaitu menariik minat belajar serta memberi kemudahan kepada siswa untuk mepelajari sejarah dengan metode yang menyenangkan. Jenis peneltian menggunakan penelitian kualitatif. Metode perancangan menggunakan metode waterfal, dan teknik Pengujiian menggunakan teknik Blackboxtesting. Hasil peneliitian yaitu sebuah aplikasi game pembelajaraan sejarah berbasis androd. Aplikasi ini sebagai sarana edukasi dan menumbuhkan minat belajar siswa serta memberi kemudahan kepada siswa untuk mempelajari sejarah. 71.4% responden setuju apabila dalam proses pembelajaran menggunakan media pembelajaran dengan teknologi berbasis android.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alghi_kategori`
--
ALTER TABLE `alghi_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `alghi_post`
--
ALTER TABLE `alghi_post`
  ADD PRIMARY KEY (`id_posts`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alghi_kategori`
--
ALTER TABLE `alghi_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `alghi_post`
--
ALTER TABLE `alghi_post`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
