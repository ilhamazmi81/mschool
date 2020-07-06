-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 05:44 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(2, 'Peluncuran Website Resmi M-Sekolah', '2017-01-22 06:26:33', 'Peluncuran website resmi  M-Sekolah, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'M-Sekolah', '07.30 - 12.00 WIB', '-', 'M Fikri Setiadi'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2017-01-22 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'M-Sekolah', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'M Fikri Setiadi'),
(4, 'UAD Award 2020', '2020-03-02 04:10:20', 'UAD Awards Bidang Kemahasiswaan dan Alumni adalah ajang pemberian penghargaan kepada mahasiswa, dosen, organisasi mahasiwa (ormawa), organisasi otonom (ortom), komunitas, program studi, dan alumni yang memiliki prestasi terbaik dalam bidang kemahasiswaan.', '2020-02-29', '2020-02-29', 'Emphitarium Kampus 4 UAD', '07:00 - 11:30 WIB', 'Wajib Membawa Undangan ', 'ilham'),
(5, 'Wisuda Periode 1 Tahun 2020', '2020-03-02 04:23:17', 'Bertempat di Gedung JEC Yogyakarta', '2020-03-21', '2020-03-21', 'JEC', '07:00 - 11:00 WIB', 'Setiap wisudawan memiliki undangan untuk dua orang', 'ilham'),
(6, 'Wisuda Periode 2', '2020-03-05 04:57:15', 'periode 2', '2020-03-06', '2020-03-06', 'JEC', '07:00 - 11:30 WIB', 'bagus', 'ilham'),
(7, 'UAD Award 2021', '2020-03-13 14:58:46', 'Agenda ini diadakan untuk memberikan penghargaan bagi seluruh kelurga besar Universitas Ahmad Dahlan yang telah membesarkan dan mengharumkan nama universitas', '2020-02-27', '2020-03-10', 'JEC', '07:00 - 11:30 WIB', 'Silahkan Bawa undangan', 'ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(13, 'Pedoman-Mawapres-Sarjana-2016', 'Pedoman-Mawapres-Sarjana-2016', '2020-02-27 13:54:40', 'Suhendra', 0, 'e45dc33d9848a2d1b7da0b986223a762.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '9b10fa300633f62f105e9b52789fc8f3.jpg', 3, 1, 'M Fikri Setiadi'),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '0ec0c2f9aae6501d7ed7930995d48b57.jpg', 3, 1, 'M Fikri Setiadi'),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', 'bfbe6cc1c8096f5f36c68e93da53c248.jpg', 3, 1, 'M Fikri Setiadi'),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', '831e5ad43ccc3c851d50c128ff095541.jpg', 1, 1, 'M Fikri Setiadi'),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', '84afbf1d3ad45932f1d7ac47b8a00949.jpg', 1, 1, 'M Fikri Setiadi'),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', 'a99ab060d5d5bf8c96f24fe385f7dd8b.jpg', 1, 1, 'M Fikri Setiadi'),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', 'd70cedba6391b7b3c74b914efd82953f.jpg', 1, 1, 'M Fikri Setiadi'),
(11, 'Foto bareng native speaker', '2017-01-24 01:28:54', '10de99f425b9961ce1e87c5e5575f8f4.jpg', 1, 1, 'M Fikri Setiadi'),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '9df82241493b94d1e06b461129cf57b2.jpg', 4, 1, 'M Fikri Setiadi'),
(13, 'Belajar sambil bermain', '2017-01-24 01:31:55', '5374415f11683ad6dd31572a7bbf8a7b.jpg', 4, 1, 'M Fikri Setiadi'),
(14, 'Belajar komputer programming', '2017-01-24 01:32:24', '82b91bd35706b21c3ab04e205e358eb6.jpg', 4, 1, 'M Fikri Setiadi'),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', '93048f2a103987bce8c8ec8d6912de06.jpg', 4, 1, 'M Fikri Setiadi'),
(16, 'Belajar komputer programming', '2017-01-24 01:32:44', '41f46be181f2f8452c2041b5e79a05a5.jpg', 4, 1, 'M Fikri Setiadi'),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', '2858b0555c252690e293d29b922ba8e6.jpg', 4, 1, 'M Fikri Setiadi'),
(18, 'Makan bersama', '2017-01-24 01:33:24', '90d67328e33a31d3f5eecd7dcb25b55d.jpg', 4, 1, 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(9, 'Azmi', 'azmi@gmail.com', '089212123893', 'Keren Sekali admin satu ini', '2020-03-02 02:47:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(5, 'KP', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31'),
(14, 'Bidikmisi', '2020-03-05 06:35:52'),
(16, 'SSO', '2020-03-05 09:20:06'),
(17, 'PPA', '2020-03-05 09:20:19'),
(18, 'SEM2', '2020-03-05 09:20:34'),
(20, 'BSM', '2020-03-05 09:22:42'),
(21, 'PKM', '2020-03-05 10:40:40'),
(22, 'Kompetisi', '2020-03-05 10:41:09'),
(23, 'SKPI', '2020-03-05 10:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1),
(6, 'oke', 'oke@gmail.com', 'keren min<br />\r\n ', '2020-03-09 07:23:33', '1', 27, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(5, 'ilham', 'L', 'ilham', 'd1568ac35ca5f47bfb6381970e7c044a', 'ilhamazmi@gmail.com', '121212212', 1, '1', '2020-02-05 02:10:11', 'd19f3439ec9f8f55a44cefa8db5a8ac1.jpg'),
(7, 'agung', 'L', 'agung', 'd1568ac35ca5f47bfb6381970e7c044a', 'ilham@gmail.com', '0890998273', 1, '2', '2020-03-06 09:25:56', 'd54d19a23079da857d78514925a57654.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017', 'Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.', '2017-01-21 01:17:30', 'ilham'),
(6, 'Pengumuman Perkuliahan  di Semester Genap Tahun Ajaran 2019-2020', 'Setelah libur semester ganjil tahun ajaran 2019-2020, proses Perkuliahan di semester genap tahun ajaran 2019-2020 mulai aktif kembali tanggal 2 Maret 2020', '2020-03-05 06:44:19', 'ilham'),
(7, 'Pencegahan Virus Corona (Covid-19)', 'Dihimbau kepada seluruh civitas akademika UAD untuk selalu menjaga kebersihan dengan selalu mencuci tangan dengan sabun sebelum makan, serta menggunakan masker ketika beraktifitas di luar ruangan', '2020-03-05 06:45:52', 'ilham'),
(8, 'Libur Semester Genap Tahun Ajaran 2019-2020', 'Dengan berakhirnya masa Ujian Akhir Semester Genap, Maka Libur Perkuliahan dimulai pada 29 Juli - 30 Agustus 2020.', '2020-03-05 06:47:15', 'ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-02-05 13:58:48', '::1', 'Firefox'),
(932, '2020-02-06 09:14:11', '::1', 'Firefox'),
(933, '2020-02-07 02:25:11', '::1', 'Firefox'),
(934, '2020-02-08 03:11:34', '::1', 'Firefox'),
(935, '2020-02-10 02:32:47', '::1', 'Firefox'),
(936, '2020-02-11 02:42:53', '127.0.0.1', 'Firefox'),
(937, '2020-02-11 09:34:14', '::1', 'Firefox'),
(938, '2020-02-12 06:27:11', '::1', 'Firefox'),
(939, '2020-02-14 09:04:34', '::1', 'Firefox'),
(940, '2020-02-15 11:52:29', '::1', 'Chrome'),
(941, '2020-02-24 08:31:50', '::1', 'Firefox'),
(942, '2020-02-26 12:43:25', '::1', 'Chrome'),
(943, '2020-02-27 06:54:14', '::1', 'Chrome'),
(944, '2020-02-28 01:08:05', '::1', 'Chrome'),
(945, '2020-02-29 01:30:09', '::1', 'Chrome'),
(946, '2020-03-02 01:51:31', '::1', 'Chrome'),
(947, '2020-03-03 04:19:11', '::1', 'Chrome'),
(948, '2020-03-04 03:10:50', '::1', 'Chrome'),
(949, '2020-03-05 02:57:39', '::1', 'Chrome'),
(950, '2020-03-06 07:15:33', '::1', 'Chrome'),
(951, '2020-03-08 12:59:24', '::1', 'Chrome'),
(952, '2020-03-09 05:42:24', '::1', 'Chrome'),
(953, '2020-03-10 15:22:37', '::1', 'Chrome'),
(954, '2020-03-11 01:10:14', '::1', 'Chrome'),
(955, '2020-03-13 14:45:21', '::1', 'Chrome'),
(956, '2020-03-15 11:33:15', '::1', 'Chrome'),
(957, '2020-03-16 03:27:13', '::1', 'Chrome'),
(958, '2020-04-14 15:41:42', '::1', 'Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(25, 'iPhone 8 Baru Mengungkapkan Fitur Mengecewakan', '<p>Apple CEO Tim Cook delivers the opening keynote address the 2017 Apple.</p>\r\n\r\n<p><br />\r\nSudah lama sekali sejak Apple mampu menyimpan kejutan nyata dari beledu digital dan mengungkapkan &#39;satu hal&#39; yang sebenarnya selama sebuah keynote. Fase desain dan prototyping yang panjang, ditambah dengan rantai pasokan yang diperluas, telah menghasilkan garis manufaktur yang bocor.<br />\r\n<br />\r\nTariklah permintaan yang tak terpuaskan dari si geekerati dan Anda tidak akan pernah bisa menyimpan rahasianya ... bahkan jika penonton akan berpura-pura bahwa segala sesuatu yang dikatakan Tim Cook adalah sebuah wahyu.<br />\r\n<br />\r\nSemuanya di tampilkan untuk portofolio iPhone baru, meskipun jika kita jujur ??tidak ada hal baru yang bisa dilihat. Ini hanya Tim Cook dan timnya yang membuat model tahun lalu &#39;sedikit lebih baik&#39; dan mengajukan konsumen proposisi yang sama seperti setiap produsen smartphone lainnya.<br />\r\n<br />\r\nMungkin aku berharap terlalu banyak dari Apple. Pengulangan Timey dari mimpi Silicon Valley tidak dibangun dengan risiko, mendorong amplop, atau bereksperimen dengan bentuk atau fungsinya. Bagaimana Tim Cook bisa mendorong inovasi ketika begitu banyak kekaisarannya dibangun di seputar kebutuhan akan penjualan siklis iPhone yang terjamin? Jika penjualan smartphone turun, maka yayasan Cupertino akan berada dalam bahaya.<br />\r\n<br />\r\nJawaban Apple untuk ini adalah iPhone 8. Sementara iPhone 7S dan iPhone 7S Plus menjaga harapan, iPhone 8 bisa bereksperimen dengan bentuk, harga, dan kekuatan. Ini adalah handset yang akan mendorong batas teknologi Apple dengan layar OLED yang cerah dan jelas di bawah kaca melengkung yang membentuk bagian luarnya. Inilah smartphone yang membawa kekuatan magis wireless charging ke ekosistem iOS dan akan menawarkan pengenalan wajah untuk keamanan.<br />\r\n<br />\r\nYang semua terdengar hebat tapi itu satu set poin peluru yang bisa diterapkan ke banyak handset Android terkemuka yang ada di pasaran saat ini. Bahkan dengan andalannya yang maju untuk tahun 2017, Apple melakukan sedikit lebih banyak daripada mengenalkan teknologi yang ada ke portofolio iOS.<br />\r\n<br />\r\nItu tidak terlihat seperti ini beberapa bulan yang lalu. Fitur yang diduga dikeluarkan oleh Apple dari iPhone 8 memamerkan beberapa pemikiran terbaru tentang perangkat mobile, termasuk pengisian daya nirkabel jarak jauh dan sensor biometrik tertanam di bawah layar kaca. Ini perlahan-lahan telah terbantahkan oleh industri rumahan dan desas-desus, sampai-sampai kita cukup tahu apa yang terjadi dari iPhone 8.<br />\r\n<br />\r\nTentu saja iPhone 8 (dan lebih dari kemungkinan iPhone 7S dan 7S Plus) akan mendapat keuntungan dari perubahan pada konstruksi interior. Akan ada pencantuman iOS 11 dan integrasi perangkat lunak yang ketat ke perangkat keras. Akan ada anggukan Apple untuk kesederhanaan di UI dan aplikasi pihak ketiga akan segera menghadirkan fitur lanjutan kepada pengguna rata-rata.<br />\r\n<br />\r\nIni bukan perubahan sepele, tapi yang menyoroti ini adalah menjelaskan bagaimana sosis dibuat. Mereka adalah rakit tweak untuk paket yang sama. Anda bisa menambahkan kancing diamante ke gaun Anda, mengganti lapisannya, dan mengeluarkan pinggulnya karena tahun-tahun yang lewat, tapi pakaiannya tetap sama seperti yang orang lihat berkali-kali. Itu cukup bagi bisnis Apple untuk terus melakukannya dengan baik dan membuat pemegang saham tetap bahagia, namun Anda tidak dapat terus kembali ke bidang yang sama dan berharap untuk tetap berada di puncak permainan smartphone. Sesuatu harus diberikan.<br />\r\n<br />\r\nPortofolio Apple 2017 membajak bidang yang sama persis dengan tahun-tahun sebelumnya. Tulang punggung penjualan akan terdiri dari iPhone 7S dan iPhone 7S Plus yang berulang-ulang saat Tim Cook kembali menanam benih di alur yang sama persis seperti model sebelumnya. IPhone 8 dapat diluncurkan tepat waktu, namun stok akan sulit didapat dan Apple akan, sekali lagi, tidak merilis angka penjualan. Ini akan menjadi hal baru yang menarik dan berkilau, tapi mari kita panggil apa adanya.</p>\r\n\r\n<p>Tim Cook akan menyilangkan jari-jarinya sehingga cukup banyak orang yang senang bisa &#39;membeli iPhone lain&#39; dan terus menggelontorkannya tanpa melihat persaingan. IPhone 8 adalah Apple yang bermain mengejar kemajuan teknologi kompetisi, dengan harapan tidak ada yang memperhatikan bahwa iPhone Baru Kaisar tidak semudah yang terlihat.</p>\r\n', '2018-08-08 13:26:08', 5, 'Penelitian', 20, '6a970a1294eb9eeb540279e3803d5f83.jpg', 5, 'ilham', 0, 'iphone-8-baru-mengungkapkan-fitur-mengecewakan'),
(26, 'UKM SEPAKBOLA JUARA PIALA GUBERNUR DIY', '<p>UKM SEPAKBOLA JUARA PIALA GUBERNUR DIY</p>\r\n', '2020-02-26 12:57:57', 6, 'Prestasi', 18, '79c9ac2775a302ca4308592cad68f01f.jpg', 5, 'ilham', 0, 'ukm-sepakbola-juara-piala-gubernur-diy'),
(27, 'Penerima Beasiswa BPM-KP  2019', '<p>Universitas Ahmad Dahlan (UAD) mengirimkan 3 delegasi ke World Universities Debating Championship (WUDC) atau Kompetisi Debat Bahasa Inggris tingkat dunia di Bangkok Thailand sejak 17 Desember 2019 hingga 4 Januari 2020.</p>\r\n\r\n<p>Ketiga delegasi itu, Ika Suciwati (Pendidikan Bahasa Inggris), Annisa Rizki Nola Nursagi (Sastra Inggris) dan Rifki Wuda Sudirman (Sastra Inggris). &ldquo;Kedua orang, Annisa dan Ika sebagai tim debat, 1 orang yakni Rifki sebagai adjudicator atau dewan juri,&rdquo; ujar Ika Suciwati mengabarkan dari Bangkok, Kamis (2/1/2020).</p>\r\n\r\n<p>Disebutkan Ika Suciwati, setelah melewati 9 babak penyisihan atau prelimibary rounds, meski tidak lolos untuk babak semifinal, Tim Debating UAD meraih total 9 poin kemenangan, merupakan poin yang cukup tinggi dengan penuh kerja keras yang maksimal.</p>\r\n\r\n<p>Sedangkan Rifki, berhasil menjadi dewan juri ahli atau disebut panelist selama 9 rounds penuh tanpa pernah diturunkan ke level terbawah yakni trainee. Tim Debating didampingi Nur Rufa&rsquo;i Akhsan MEd,&nbsp; dosen UAD sebagai observer dari Kemenristek Dikti.</p>\r\n\r\n<p>Ditambahkan Ika Suciwati, ada 20 tim debating dari Indonesia yang mengikuti ajang WUDC tahun ini. &ldquo;Selama 5 hari ini memang tidak dianjurkan untuk menggunakan atribut universitas dalam bentuk apapun untuk menghindari keberpihakan ke institusi tertentu,&rdquo; ujarnya.</p>\r\n\r\n<p>Sedangkan Danang Sukantar MPd, Kabid Pengembangan Mahasiswa Biro Kemahasiswaan dan Alumni (Bimawa) UAD yang mengirimkan delegasi tersebut berkomentar, Debater UAD ini memang membanggakan. &ldquo;Tim ini, membanggakan, selalu bersemangat dan fokus setiap moment baik di tingkat nasional maupun internasional,&rdquo; ujarnya.</p>\r\n', '2020-03-02 04:07:31', 5, 'KP', 25, '05ff7d2398439dab7080293728492033.jpg', 5, 'ilham', 0, 'penerima-beasiswa-bpm-kp--2019'),
(28, 'Tunavoice alat bantu penyandang tunawicara ', '<p>Tunavoice alat bantu penyandang&nbsp;tunawicara&nbsp;hasil rancangan mahasiswa Universitas Ahmad Dahlan (UAD) Yogyakarta memenangkan medali emas dan perak dalam ajang internasional inovasi teknologi di&nbsp;Bangkok, Ahad-Kamis (2-6/2/2020).</p>\r\n\r\n<p>Tim mahasiswa&nbsp;UADperancang Tunavoice ini terdiri Ilham Akbari Winoto, M Fahrurazi IB, Renangga Yudianto, dan Sariningsih. Tim ini dibimbing dosen Dr Anton Yudhana.</p>\r\n\r\n<p>Temuan mereka yang sangat membantu penyandang&nbsp;tunawicaraini menang untuk kategori kreativitas dan inovasi.</p>\r\n\r\n<p>Lomba ini diadakan Badan Riset Nasional Thailand. Nama acaranya Thailand Inventors Day-Bangkok International Intellectual Property, Invention, Innovation and Technology Expotition (IPITEx) 2020.</p>\r\n\r\n<p>Acara ini diikuti oleh 45 negara dengan jumlah peserta mencapai 1.500 orang. Ribuan inovasi teknologi dipamerkan dalam arena ini termasuk buatan empat mahasiswa dari Yogya.</p>\r\n\r\n<p>Alat Bantu Bicara</p>\r\n\r\n<p>Dosen pembimbing Anton Yudhana menjelaskan, Tunavoice adalah alat untuk mendeteksi gerakan jari tangan yang kemudian diolah datanya di arduino dalam bentuk sebuah huruf atau kata.</p>\r\n\r\n<p>&ldquo;Lalu hasil olahan datanya dikirim melalui Bluetooth. Olahan data ini muncul pada display layar smartphone berupa teks dan suara yang dapat membantu tunawicara dalam berkomunikasi,&rdquo; terang Anton Yudhana.</p>\r\n\r\n<p>Menurut Anton Yudhana, IPITEx 2020 merupakan acara tahunan yang masuk dalam agenda World Invention Intellectual Property Association (WIIPA).</p>\r\n\r\n<p>Sementara Danang Sukantar, MPd, kepala Bidang Pengembangan Kemahasiswaan Biro Kemahasiswaan dan Alumni (Bimawa) UAD, menambahkan, kegiatan tahunan yang diselenggarakan oleh Badan Riset Nasional Thailand &nbsp;sebagai puncak acara peringatan Hari Inovasi Nasional Thailand yang diperingati setiap tanggal 2 Februari.</p>\r\n\r\n<p>&ldquo;IPITex merupakan suatu ajang perlombaan di bidang inovasi terbesar di Asia yang diikuti oleh para inovator dari berbagai negara di dunia,&rdquo; kata Danang Sukantar di ruang kerjanya, Sabtu (8/2/2020).</p>\r\n\r\n<p>Danang merasa bangga karena Tim UAD Yogyakarta berhasil dalam satu event, dua competition, dua medal gold dan silver. Dalam kegiatan itu lebih dari seribu penemuan dan lebih dari 20 ribu orang berkunjung dalam acara ini dan 1.500 delegasi dari 45 negara.</p>\r\n\r\n<p>Sumber : https://pwmu.co/131144/02/10/tunavoice-buatan-mahasiswa-uad-raih-emas-di-bangkok/</p>\r\n', '2020-03-02 04:11:34', 6, 'Prestasi', 13, '862b1a89a9089cf8f8327bd9ead5a173.jpg', 5, 'ilham', 0, 'tunavoice-alat-bantu-penyandang-tunawicara'),
(31, 'Beasiswa DIKPORA Tahun 2019', '<p>Bantuan Biaya Pendidikan Bagi Mahasiswa Reguler</p>\r\n\r\n<p>Dinas Pendidikan, Pemuda dan Olahraga</p>\r\n\r\n<p>Daerah Istimewa Yogyakarta</p>\r\n\r\n<p>Tahun 2019</p>\r\n\r\n<p>Dinas Pendidikan, Pemuda dan Olahraga Daerah Istimewa Yogyakarta memberikan bantuan biaya pendidikan&nbsp; bagi mahasiswa reguler. informasi mengenai hal tersebut silakan diunduh dibawah ini:&nbsp;<a href=\"http://bimawa.uad.ac.id/wp-content/uploads/2019/02/Informasi-Beasiswa-DIKPORA.pdf\">Panduan Bantuan Beasiswa DIKPORA</a>]]&gt;</p>\r\n\r\n<h3>AGENDA KEGIATAN</h3>\r\n', '2020-03-05 15:12:43', 16, 'SSO', 5, '3427de944e6732124e25f3e3a676ee97.jpg', 5, 'ilham', 0, 'beasiswa-dikpora-tahun-2019'),
(32, 'Undangan Mahasiswa Beasiswa', '<p>16 Agustus 2018</p>\r\n\r\n<p>Nomor :&nbsp; R.III/73/D.66/VIII/2018 Lamp.&nbsp; :&nbsp; &ndash; Hal&nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; Undangan &nbsp; Kepada Yth. 1. Para Wakil Dekan</p>\r\n\r\n<ol>\r\n	<li>Para Kaprodi</li>\r\n</ol>\r\n\r\n<p>di Tempat Assalamu&rsquo;alaikum warahmatullahi wabarakatuh. Kami mengharap kehadiran Saudara pada acara Orientasi, Penandatanganan Kontrak, Calon Mahasiswa Baru Beasiswa Program Misi Keluarga Persyarikatan (BPM-KP), Sains, Seni, dan Olahraga (BPM-SSO) dan BidikMisi pada: Hari&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Senin Tanggal&nbsp; &nbsp; &nbsp; &nbsp; : 20 Agustus 2018 Waktu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 09.00 &ndash; 12.00 WIB Tempat&nbsp; &nbsp; &nbsp; &nbsp; : Auditorium Kampus 1 UAD Rapat akan dimulai tepat pada waktunya, dan bagi yang berhalangan hadir harap memberitahu sebelumnya. Terima kasih atas perhatian dan kerjasamanya. Wassalamu&rsquo;alaikum warahmatullahi wabarakatuh.&nbsp;<em>&nbsp;</em>&nbsp;a.n. Rektor, Wakil Rektor III &nbsp; Dr. Abdul Fadlil, M.T. NIY. 60960140&nbsp;<strong>Undangan silahkan klik</strong>&nbsp;<a href=\"http://bimawa.uad.ac.id/wp-content/uploads/2018/08/disini.pdf\">disini</a>]]&gt;</p>\r\n', '2020-03-05 15:29:57', 21, 'PKM', 5, '429106d72badbfd44d98d5a54cc594ae.jpg', 5, 'ilham', 0, 'undangan-mahasiswa-beasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=959;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
