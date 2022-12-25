-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 07:42 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19023295_jasadesain`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(223) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(233) NOT NULL,
  `kategori_artikel` varchar(233) NOT NULL,
  `terbit` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `kategori_artikel`, `terbit`) VALUES
(2, 'Photoshop Basic ', '<p><strong>Adobe Photoshop</strong>, atau biasa disebut <strong>Photoshop</strong>, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak digunakan oleh <a href=\"https://id.wikipedia.org/wiki/Fotografer\">fotografer</a> <a href=\"https://id.wikipedia.org/wiki/Digital\">digital</a> dan perusahaan <a href=\"https://id.wikipedia.org/wiki/Iklan\">iklan</a> sehingga dianggap sebagai pemimpin pasar (<i>market leader</i>) untuk perangkat lunak pengolah gambar/foto, dan, bersama <a href=\"https://id.wikipedia.org/wiki/Adobe_Acrobat\">Adobe Acrobat</a>, dianggap sebagai produk terbaik yang pernah diproduksi oleh Adobe Systems. Versi kedelapan aplikasi ini disebut dengan nama Photoshop CS (Creative Suite), versi sembilan disebut Adobe Photoshop CS2, versi sepuluh disebut Adobe Photoshop CS3, versi kesebelas adalah Adobe Photoshop CS4, versi keduabelas adalah Adobe Photoshop CS5, versi ketigabelas adalah CS6, dan versi terbaru adalah Adobe Photoshop CC (Creative Cloud)</p>', 'photoshop.webp', 'Guide', '0000-00-00'),
(4, 'Pentingnya Packaging dalam media promosi dan identitas produk', '<p>Kemasan merupakan wadah yang dapat meningkatkan nilai dan fungsi sebuah produk. Pengemasan produk menjadi hal yang penting karena kemasan memiliki dampak fisik dan psikologis. Dalam hal dampak fisik, kemasan berfungsi sebagai wadah dan pelindung.<br><br>Sementara itu, kemasan memiliki dampak psikologis karena tampilan kemasan dapat menimbulkan kesan tertentu bagi para konsumen yang akan mempengaruhi preferensi mereka terhadap produk yang dikemas.<br>&nbsp;</p><p>Selain sebagai wadah, kemasan juga banyak memiliki manfaat. Berikut manfaat kemasan produk dikutip dari buku The Art of Packaging: Mengenal Metode, Teknik, &amp; Strategi oleh Sri Julianti:</p><p>&nbsp;</p><ol><li>Untuk menjaga produk agar tetap terlindung dan tetap bersih terjaga dari kotoran serta kontaminasi.</li><li>Membuat daya tahan produk meningkat, karena terjaga dari kerusakan fisik dan pengaruh cuaca.</li><li>Untuk menyeragamkan ukuran atau bobot produk yang akan dijual.</li><li>Untuk menambah daya jual produk, konsumen diuntungkan dengan kemudahan pemakaian produk (praktis).</li><li>Kemasan mampu menarik konsumen untuk membeli produk yang dijual.</li><li>Kemasan juga dapat menampilkan informasi produk yang dapat membantu konsumen untuk menentukan keputusan pembelian. Informasi tersebut dapat berupa bahan baku, berat produk dan tanggal kedaluwarsa.</li></ol><p>&nbsp;</p><p>&nbsp;</p>', 'FEED GABUNGAN-19.jpg', 'Design', '2022-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Logo'),
(2, 'Kemasan'),
(3, 'Poster'),
(6, 'Baju'),
(8, 'Konten'),
(9, 'Banner'),
(10, 'Brosur'),
(11, 'Laporan'),
(13, 'Video-Editing');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `isi`, `gambar`) VALUES
(2, 'Profesional', '<p>Design dikerjakan secara profesional, teliti dan rapi</p>', 'Asset2.png'),
(3, 'Design Software', '<p>Desain dikerjakan khusus menggunakan softwere design seperti AI,PS, Corel dan semacamnya</p>', 'Asset4.png'),
(4, 'Free Request', '<p>Bebas request sesuka hati anda dan hasil design selalu sesuai permintaan.</p>', 'Asset5.png'),
(5, 'File Lengkap', '<p>Format file yang lengkap seperti dari JPG,PNG,AI,PSD dan lain-lain.</p>', 'Asset6.png'),
(6, 'Creative', '<p>Desain yang dikerjakan berbeda dari yang lain dan lebih orisinil.</p>', 'Asset7.png'),
(7, 'On Time', '<p>Hasil design tepat waktu dan tidak pernah lewat deadline yang ditrtapkan sebelumnya.</p>', 'Asset3.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Logo', '<p>Desain Logo cocok untuk kamu yang akan memulai bisnis atau usaha. Desain logo sangat penting untuk branding produk dan visual product. Logo menjadi salah satu visual identity dari sebuah brand product</p>', '1 INSTASTORY-60.jpg'),
(2, 'Konten', '<p>Desain Feed &amp; Instastory untuk keperluan konten kreatif usaha. Desain Feed &amp; Instastory sangat penting untuk sebuah bisnis dan usaha, hal ini bertujuan untuk meningkatkan kepercayaan konsumen, promosi produk dan branding</p>', 'I3-01.jpg'),
(3, 'Banner', '<p>Desain banner untuk keperluan berbagai usaha dan bisnis. Tujuan banner yaitu untuk promosi, edukasi, infromasi, dan lainnya. Bisa request berbagai ukuran dan model. Dilengkapi file untuk cetak.</p>', 'BANNER-05.jpg'),
(4, 'Poster', '<p>Desain poster untuk berbagai keperluan, promosi, edukasi, informasi dan lainnya. Bisa request berbagai model desain.</p>', 'POSTER 2-08.jpg'),
(7, 'Baju', '<p>Desain poster untuk berbagai keperluan, promosi, edukasi, informasi dan lainnya. Bisa request berbagai model desain.</p>', '3-01.jpg'),
(8, 'Kemasan', '<p>Desain kemasan untuk berbagai jenis produk usaha. Kemasan makanan, kemasan minuman, kemasan brand product dan lainnya. Request sesuai keinginan dan model.</p>', 'FEED GABUNGAN-04.jpg'),
(9, 'Laporan', '<p>Desain laporan untuk berbagai keperluan. Company profile, PPT, Booklet, Laporan Perusahaan, dan lainnya. Materi bisa bisa dari kamu dan ide dari kami. Free request model desain</p>', 'CARD-07.jpg'),
(10, 'Brosur', '<p>Brosur untuk keperluan promosi produk, Pendidikan edukasi dan informasi. Bisa request berbagai ukuran, ide konsep bisa request dan dari kami</p>', '1-01 (1).jpg'),
(11, 'Video-Editing', '<p>Konten video berupa reels dan tiktok, video untuk tujuan edukasi, promosi, dan informasi.</p>', 'Produk Promotion.gif');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `id_layanan`, `keterangan`, `harga`) VALUES
(1, 'Paket Mini', 1, '<ul><li>Logo&nbsp;</li><li>File JPEG,PNG,PDF</li><li>1-2 hari</li><li>Free Revisi 1x</li></ul>', '100.000'),
(2, 'Paket Mini', 2, '<ul><li>15 Feed Berlaku 15 hari</li></ul>', '300.000'),
(3, 'Paket Bronze', 2, '<ul><li>15 Feed</li><li>Free Revisi 1x</li><li>Konsep Tersedia</li><li>Berlaku 15 hari</li></ul>', '450.000'),
(4, 'Paket Silver', 2, '<ul><li>30 Feed Free Revisi 2x</li><li>Konsep Tersedia</li><li>Berlaku 30 hari</li><li>Copywriting</li></ul>', '600.000'),
(5, 'Paket Bronze', 1, '<ul><li>Logo&nbsp;</li><li>File AI &amp; EPS&nbsp;</li><li>Color Guide&nbsp;</li><li>JPEG, PNG, PDF&nbsp;</li><li>1-2 Hari&nbsp;</li><li>Free Revisi 2x</li></ul>', '200.000'),
(6, 'Paket Mini', 3, 'Desain Banner Free Revisi 1x JPEG, PNG, PDF 1 Hari Pengerjaan', '50.000'),
(8, 'Paket Silver', 1, '<ul><li>Logo</li><li>File AI &amp; EPS</li><li>Logo Application</li><li>Color Guide</li><li>JPEG, PNG, PDF</li><li>1-2 hari</li><li>Free Revisi 2x</li></ul>', '300.000'),
(9, 'Paket Gold', 1, '<ul><li>Logo</li><li>File AI &amp; EPS</li><li>Concept Logo</li><li>Logo Application</li><li>Color Guide</li><li>JPEG, PNG, PDF</li><li>1-3 hari</li><li>Free Revisi 2x</li></ul>', '500.000'),
(10, 'Paket Premium', 1, '<ul><li>Logo</li><li>File AI &amp; EPS</li><li>Concept Logo</li><li>Logo Application</li><li>Color Guide</li><li>Kop Surat</li><li>JPEG, PNG, PDF</li><li>1-4 hari</li><li>Free Revisi 3x</li></ul>', '750.000'),
(11, 'Paket Profesional', 1, '<ul><li>2 Logo</li><li>File AI &amp; EPS</li><li>Concept Logo</li><li>Logo Application</li><li>Color Guide</li><li>Kop Surat</li><li>JPEG, PNG, PDF</li><li>1-7 hari</li><li>Free Revisi 4x</li></ul>', '1.000.000'),
(12, 'Paket Company', 1, '<ul><li>3 Logo</li><li>File AI &amp; EPS</li><li>Concept Logo</li><li>Logo Application</li><li>Color Guide</li><li>Stationery</li><li>Kop Surat</li><li>JPEG, PNG, PDF</li><li>1-7 hari</li><li>Free Revisi 4x</li></ul>', '1.250.000'),
(13, 'Paket Gold', 2, '<ul><li>30 Feed</li><li>10 Instastory</li><li>Free Revisi 2x</li><li>Konsep Tersedia</li><li>Berlaku 30 hari</li><li>Copywriting</li><li>Free Hastag</li><li>Admin Posting</li></ul>', '750.000'),
(14, 'Paket Premium', 2, '<ul><li>30 Feed</li><li>20 Instastory</li><li>Free Revisi 2x</li><li>Konsep Tersedia</li><li>Berlaku 30 hari</li><li>Copywriting</li><li>Free Hastag</li><li>Admin Posting</li></ul>', '1.000.000'),
(15, 'Paket Profesional', 2, '<ul><li>30 Feed</li><li>30 Instastory</li><li>Free Revisi 3x</li><li>Konsep Tersedia</li><li>Berlaku 30 hari</li><li>Copywriting</li><li>Free Hastag</li><li>Admin Posting</li></ul>', '1.250.000'),
(16, 'Paket Company', 2, '<ul><li>45 Feed</li><li>30 Instastory</li><li>Free Revisi 3x</li><li>Konsep Tersedia</li><li>Berlaku 30 hari</li><li>Copywriting</li><li>Free Hastag</li><li>Admin Posting</li></ul>', '1.500.000'),
(17, 'Paket Bronze', 3, '<ul><li>Desain Banner</li><li>Free Revisi 1x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '75.000'),
(18, 'Paket Silver', 3, '<ul><li>Desain Banner</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '100.000'),
(19, 'Paket Gold', 3, '<ul><li>2 Desain Banner</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '150.000'),
(20, 'Paket Premium', 3, '<ul><li>2 Desain Banner</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>2 Hari Pengerjaan</li></ul>', '175.000'),
(21, 'Paket Profesional', 3, '<ul><li>3 Desain Banner</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>2 Hari Pengerjaan</li></ul>', '225.000'),
(22, 'Paket Company', 3, '<ul><li>4 Desain Banner</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>3 Hari Pengerjaan</li></ul>', '300.000'),
(23, 'Paket Mini', 4, '<ul><li>Desain Poster</li><li>Free Revisi 1x</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '50.000'),
(24, 'Paket Bronze', 4, '<ul><li>Desain Poster</li><li>Free Revisi 1x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '75.000'),
(25, 'Paket Silver', 4, '<ul><li>Desain Poster</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '100.000'),
(26, 'Paket Gold', 4, '<ul><li>2 Desain Poster</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '150.000'),
(27, 'Paket Premium', 4, '<ul><li>2 Desain Poster</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>2 Hari Pengerjaan</li></ul>', '175.000'),
(28, 'Paket Premium', 4, '<ul><li>3 Desain Poster</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>3 Hari Pengerjaan</li></ul>', '225.000'),
(29, 'Paket Company', 4, '<ul><li>4 Desain Poster</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>4 Hari Pengerjaan</li></ul>', '300.000'),
(30, 'Paket Mini', 10, '<ul><li>Desain Brosur</li><li>1 Halaman</li><li>Free Revisi 1x</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '50.000'),
(31, 'Paket Bronze', 10, '<ul><li>Desain Brosur</li><li>1 Halaman</li><li>Free Revisi 1x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '85.000'),
(32, 'Paket Silver', 10, '<ul><li>Desain Brosur</li><li>1 Halaman</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '100.000'),
(33, 'Paket Gold', 10, '<ul><li>Desain Brosur</li><li>2 Halaman</li><li>Free Revisi 2x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>1 Hari Pengerjaan</li></ul>', '160.000'),
(34, 'Paket Premium', 10, '<ul><li>Desain Brosur</li><li>2 Halaman</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>2 Hari Pengerjaan</li></ul>', '185.000'),
(35, 'Paket Profesional', 10, '<ul><li>Desain Brosur</li><li>3 Halaman</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>3 Hari Pengerjaan</li></ul>', '240.000'),
(36, 'Paket Company', 10, '<ul><li>Desain Brosur</li><li>4 Halaman</li><li>Free Revisi 3x</li><li>File AI &amp; EPS</li><li>JPEG, PNG, PDF</li><li>3 Hari Pengerjaan</li></ul>', '300.000'),
(37, 'Paket Mini', 7, '<ul><li>Desain Baju</li><li>Free Revisi 1x</li><li>JPEG, PNG, PDF</li><li>1-2 Hari</li></ul>', '120.000'),
(38, 'Paket Bronze', 7, '<ul><li>Desain Baju</li><li>Free Revisi 1x</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-2 Hari</li></ul>', '160.000'),
(39, 'Paket Silver', 7, '<ul><li>Desain Baju</li><li>Free Revisi 2x</li><li>Mockup Aplication</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-2 Hari</li></ul>', '200.000'),
(40, 'Paket Gold', 7, '<ul><li>Desain Baju</li><li>Free Revisi 3x</li><li>Mockup Aplication</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-3 Hari</li></ul>', '235.000'),
(41, 'Paket Premium', 7, '<ul><li>2 Desain Baju</li><li>Free Revisi 3x</li><li>Mockup Aplication</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-5 Hari</li></ul>', '350.000'),
(42, 'Paket Profesional', 7, '<ul><li>3 Desain Baju</li><li>Free Revisi 3x</li><li>Mockup Aplication</li><li>Concept</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-7 Hari</li></ul>', '500.000'),
(43, 'Paket Company', 7, '<ul><li>4 Desain Baju</li><li>Free Revisi 4x</li><li>Mockup Aplication</li><li>Concept</li><li>File AI &amp; PS</li><li>JPEG, PNG, PDF</li><li>1-7 Hari</li></ul>', '625.000'),
(44, 'Paket Mini', 8, '<ul><li>Kemasan</li><li>Color Guide</li><li>JPEG, PNG, PDF</li><li>Free Revisi 1x</li><li>1-2 hari</li></ul>', '100.000'),
(45, 'Paket Bronze', 8, '<ul><li>Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 1x</li><li>Concept</li><li>1-2 hari</li></ul>', '150.000'),
(46, 'Paket Silver', 8, '<ul><li>Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 2x</li><li>Poster</li><li>Concept</li><li>1-2 hari</li></ul>', '225.000'),
(47, 'Paket Gold', 8, '<ul><li>Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 2x</li><li>Laporan</li><li>Poster</li><li>Concept</li><li>1-3 hari</li></ul>', '300.000'),
(48, 'Paket Premium', 8, '<ul><li>2 Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 2x</li><li>Laporan</li><li>Poster</li><li>Concept</li><li>1-5 hari</li></ul>', '400.000'),
(49, 'Paket Profesional', 8, '<ul><li>3 Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 3x</li><li>Laporan</li><li>Poster</li><li>Concept</li><li>1-7 hari</li></ul>', '525.000'),
(50, 'Paket Company', 8, '<ul><li>4 Kemasan</li><li>Color Guide</li><li>File AI &amp; EPS</li><li>Gambar Teknik</li><li>JPEG, PNG, PDF</li><li>Free Revisi 3x</li><li>Laporan</li><li>Poster</li><li>Concept</li><li>1-7 hari</li></ul>', '700.000'),
(51, 'Paket Mini', 11, '<ul><li>Durasi 10 Detik</li><li>Ukuran Reels</li><li>Free Revisi 1x</li><li>1 Hari</li></ul>', '75.000'),
(52, 'Paket Bronze', 11, '<ul><li>Durasi 20 Detik</li><li>Ukuran Reels</li><li>Free Revisi 1x</li><li>Konsep Tersedia</li><li>2 Hari</li></ul>', '125.000'),
(53, 'Paket Silver', 11, '<ul><li>Durasi 30 Detik</li><li>Free Request 1 Size</li><li>Free Revisi 2x</li><li>Konsep Tersedia</li><li>2 Hari</li></ul>', '180.000'),
(54, 'Paket Gold', 11, '<ul><li>Durasi 1 Menit</li><li>Free Request 1 Size</li><li>Free Revisi 2x</li><li>Konsep Tersedia</li><li>3-7 Hari</li></ul>', '225.000'),
(55, 'Paket Premium', 11, '<ul><li>Durasi 2 Menit</li><li>Free Request 1 Size</li><li>Free Revisi 2x</li><li>Konsep Tersedia</li><li>3-7 Hari</li></ul>', '350.000'),
(56, 'Paket Profesional', 11, '<ul><li>Durasi 3 Menit</li><li>Free Request 1 Size</li><li>Free Revisi 3x</li><li>Konsep Tersedia</li><li>3-7 Hari</li></ul>', '400.000'),
(57, 'Paket Company', 11, '<ul><li>Durasi 5 Menit</li><li>Free Request 1 Size</li><li>Free Revisi 3x</li><li>Konsep Tersedia</li><li>3-7 Hari</li></ul>', '525.000'),
(58, 'Paket Mini', 9, '<ul><li>1 Halaman</li><li>Free Revisi 1x</li><li>1-2 Hari</li></ul>', '50.000'),
(59, 'Paket Bronze', 9, '<ul><li>3 Halaman</li><li>Free Revisi 1x</li><li>1-3 Hari</li></ul>', '125.000'),
(60, 'Paket Silver', 9, '<ul><li>5 Halaman</li><li>File AI &amp; EPS</li><li>Free Revisi 2x</li><li>1-3 Hari</li></ul>', '200.000'),
(61, 'Paket Gold', 9, '<ul><li>8 Halaman</li><li>File AI &amp; EPS</li><li>Free Revisi 3x</li><li>Bonus Cover</li><li>1-4 Hari</li></ul>', '325.000'),
(63, 'Paket Premium', 9, '<ul><li>12 Halaman</li><li>File AI &amp; EPS</li><li>Free Revisi 3x</li><li>Bonus Cover</li><li>1-4 Hari</li></ul>', '350.000'),
(64, 'Paket Profesional', 9, '<ul><li>15 Halaman</li><li>File AI &amp; EPS</li><li>Free Revisi 3x</li><li>Bonus Cover</li><li>1-7 Hari</li></ul>', '425.000'),
(66, 'Paket Company', 9, '<ul><li>20 Halaman</li><li>File AI &amp; EPS</li><li>Free Revisi 3x</li><li>Bonus Cover</li><li>1-7 Hari</li></ul>', '625.000');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul`, `id_kategori`, `gambar`) VALUES
(12, 'Shoe box - Mockup', 2, 'FEED GABUNGAN-18.jpg'),
(13, 'Grunge T-shirt', 6, '156-01.jpg'),
(15, 'Coffee Mug', 2, 'INSTASTORY GABUNGAN-13.jpg'),
(16, 'Outdoors - Desain Baju', 6, '1-01.jpg'),
(17, 'Indonesia theme - Desain Baju', 6, '3-01.jpg'),
(18, 'Indonesia theme 02 - Desain Baju', 6, '11-01.jpg'),
(19, 'Offeroad', 6, '33-01.jpg'),
(20, 'Sci-fi theme - Desain Baju', 6, '47-01.jpg'),
(21, 'Dynamic Shape - Desain Baju', 6, '108-01.jpg'),
(22, 'Gradient - Desain Baju', 6, '112-01.jpg'),
(23, 'Ayam Geprek - Desain Banner', 9, 'BANNER-01.jpg'),
(24, 'Sneakers - Desain Banner', 9, 'BANNER-02.jpg'),
(25, 'Warung - Desain Banner', 9, 'BANNER-03.jpg'),
(26, 'Kebab - Desain Banner', 9, 'BANNER-04.jpg'),
(27, 'Boba Drink - Desain Banner', 9, 'BANNER-05.jpg'),
(28, 'Smartwatch - Desain Banner', 9, 'BANNER-06.jpg'),
(29, 'Fashion - Desain Banner', 9, 'BANNER-10.jpg'),
(30, 'Collection - Desain Banner', 9, 'BANNER-09.jpg'),
(31, 'New Collection - Desain Brosur', 10, '2-01 (1).jpg'),
(32, 'Best Gear Collection - Desain Brosur', 10, '4-01 (1).jpg'),
(33, 'Best Watch - Desain Brosur', 10, '6-01 (1).jpg'),
(34, 'Best Laptop - Desain Brosur', 10, '9-01 (1).jpg'),
(35, 'New Product - Desain Brosur', 10, '3-01 (1).jpg'),
(36, 'Best Camera - Desain Brosur', 10, '10-01 (1).jpg'),
(37, 'Urnan Fashion - Desain Brosur', 10, '11-01 (1).jpg'),
(38, 'Shopping Canter - Desain Brosur', 10, '16-01.jpg'),
(39, 'Box - Desain Kemasan', 2, 'FEED GABUNGAN-03.jpg'),
(40, 'Bottle - Desain Kemasan', 2, 'FEED GABUNGAN-17.jpg'),
(41, 'Juice- Desain Kemasan', 2, 'FEED GABUNGAN-14.jpg'),
(42, 'Tumbler - Desain Kemasan', 2, 'FEED GABUNGAN-09.jpg'),
(43, 'Bottle - Desain Kemasan', 2, 'FEED GABUNGAN-16.jpg'),
(44, 'Desain Kemasan', 2, 'FEED GABUNGAN-23.jpg'),
(45, 'Feed - Desain Konten', 8, 'E3-01.jpg'),
(46, 'Feed - Desain Konten', 8, 'A2-01.jpg'),
(47, 'Feed - Desain Konten', 8, 'Q1-01.jpg'),
(48, 'Feed - Desain Konten', 8, 'S1-01.jpg'),
(49, 'Stories - Desain Konten', 8, '3-04.jpg'),
(50, 'Stories - Desain Konten', 8, '1-02.jpg'),
(51, 'Stories - Desain Konten', 8, '1-03.jpg'),
(52, 'Stories - Desain Konten', 8, '5-01.jpg'),
(53, 'Cover 01 - Desain Cover', 11, 'CARD-02.jpg'),
(54, 'Cover 02 - Desain Cover', 11, 'CARD-03.jpg'),
(55, 'Cover 03 - Desain Cover', 11, 'CARD-04.jpg'),
(56, 'Cover 04 - Desain Cover', 11, 'CARD-07.jpg'),
(57, 'Cover 05 - Desain Cover', 11, 'CARD-10.jpg'),
(58, 'Cover 06 - Desain Cover', 11, 'CARD-19.jpg'),
(59, 'Report - Desain Laporan', 11, 'CARD-22.jpg'),
(60, 'Card - Desain Card', 11, 'CARD-23.jpg'),
(61, 'Logo 01 - Desain Logo', 1, '1 INSTASTORY-01.jpg'),
(62, 'Logo 02 - Desain Logo', 1, '1 INSTASTORY-04.jpg'),
(63, 'Logo 03 - Desain Logo', 1, '1 INSTASTORY-21.jpg'),
(64, 'Logo 04 - Desain Logo', 1, '1 INSTASTORY-26.jpg'),
(65, 'Logo 05 - Desain Logo', 1, '1 INSTASTORY-44.jpg'),
(66, 'Logo 06 - Desain Logo', 1, '1 INSTASTORY-58.jpg'),
(67, 'Logo 07 - Desain Logo', 1, 'INSTASTORY-16.jpg'),
(68, 'Logo 08 - Desain Logo', 1, '1 INSTASTORY-18.jpg'),
(69, 'Coffee shop - Desain Poster', 3, 'POSTER 2-01.jpg'),
(70, 'Party - Desain Poster', 3, 'POSTER 2-02.jpg'),
(71, 'Ski - Desain Poster', 3, 'POSTER 2-03.jpg'),
(72, 'Japan - Desain Poster', 3, 'POSTER 2-04.jpg'),
(73, 'Travel - Desain Poster', 3, 'POSTER 2-05.jpg'),
(74, 'Camera - Desain Poster', 3, 'POSTER 2-06.jpg'),
(75, 'Dessert - Desain Poster', 3, 'POSTER 2-07.jpg'),
(76, 'Promotion - Desain Poster', 3, 'POSTER 2-11.jpg'),
(77, 'Produk Promotion', 13, 'Produk Promotion.gif'),
(78, 'Skincare', 13, 'Skina Skincare.gif'),
(79, 'Warung Baim', 13, 'Warung Baim.gif'),
(80, 'Project', 13, 'New Project.gif');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `tanya` varchar(230) NOT NULL,
  `jawab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `tanya`, `jawab`) VALUES
(1, 'Apa itu Jasa Desain ?', '<p>Jasa desain.co.id merupakan Platform Layanan Design bergerak di industri digital design &amp; creative. Berdiri sejak 09 Mei 2019 dan sudah berkerjasama dengan ratusan company, organisasi dan komunitas.</p>'),
(3, 'Apa saja layanan jasa desain?', '<ul><li>Desain Logo</li><li>Desain Banner</li><li>Desain brosur</li><li>Desain Poster</li><li>Feed Instagram</li><li>Instastory</li><li>Report Desain</li><li>Desain Baju</li><li>Video Reels/Tiktok</li><li>Dan lainnya.&nbsp;</li></ul>'),
(4, 'Apakah menerima cetak / print?', '<p>Tidak menerima cetak / print</p>'),
(5, 'Berapa lama proses pengerjaan?', '<p>Mulai dari 1x24 jam</p>'),
(6, 'Apakah bisa request desain sesuai keinginan ?', '<p>Tentu bisa, sihlakan menyampaikan ingin desain seperti apa</p>'),
(7, 'Bagaimana sistem pembayaran-nya ? ', '<p>Sistemnya yaitu pembayaran terlebih dahulu, setelah pembayaran desain diproses</p>'),
(8, 'Ada paket layanan apa saja?', '<p>Sihlakan hubungi nomor WhatsApp kami</p>'),
(9, 'Siapa yang cocok menggunakan layanan ini?', '<p>Semua kalangan, mulai dari umkm, pembisnis, perorangan, mahasiswa, pelajar &nbsp;dan lainnya</p>'),
(10, 'Berapa biaya desain?', '<p>Terdapat banyak variasi harga dan jenis layanan. Sihlakan hubungi WhatsApp kami</p>'),
(12, 'Bagaimana kontak jasa desain? ', '<p>WhatsApp : 0896-3684-9242<br>Instagram : Jasa desain.Co.Id</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `email` varchar(223) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `email`) VALUES
(1, 'coba'),
(2, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `gambar`, `testimoni`) VALUES
(2, 'Najwa', 'clientScreenshot_2.png', '<p>\" Desain-nya keren dan sesuai ekspetasi. Ga kecewa pokoknya Rekomen buat yg lg nyari jasa designer deh. di <strong>jasadesain.co.id </strong>”</p>'),
(4, 'Rian A', 'client_1.png', '<p>\" Hasilnya mantep, kayaknya bakal jadi langganan disini nih, desainnya rapi &amp; detail. \"</p>'),
(5, 'Cyndi A', 'Client_3.png', '<p>“ Pengalaman pertama kali order desain baju di jasadesain.co.id dan hasil jadinya keren parah dan ngga pasaran terima kasih jasadesain.co.id”</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(7, 'UnknowDevelaper', 'admin@gmail.com', 'dev', '202cb962ac59075b964b07152d234b70', 'Superadmin', 'pembekalankknkamis (2).JPG'),
(10, 'Adminn', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '1643201033600.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
