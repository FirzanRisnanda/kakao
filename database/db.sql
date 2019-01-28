-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2015 at 06:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah1`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `counter` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `isi_berita`, `gambar`, `hari`, `tanggal`, `jam`, `counter`) VALUES
(8, 2, 'BootCamp `Access Forbidden`', 'Bootcamp Wireless Hacking  "Acces Forbidden" yang di adakan tanggal 22 Mei 2015  Oleh FOSSIL membuka wawasan baru terhadap mahasiswa  tentang kesadaran keamanan informasi di jaringan publik. Materi yang di bawakan oleh Muhammad pailus membahas secara detail tentang teknik-teknik serangan yang dapat dilakukan di jaringan wireless dan cara pengamanan nya. Peserta sangat antusias dalam mengikuti BootCamp ini karena sering sekali menggukan jaringan sekelas wirelles, mereka ingin mengetahui bagaimana cara mengunakan jaringan tersebut itu secara aman sehingga tidak terjadi pencurian data. Info pengambilan sertifikat BootCamp dapat dilakukan hari kamis tanggal 4 Juni 2014 di ruang Sekretariat FOSSIL di Gedung BSC Lantai 3 info.085697080938', 'fossil_bootcamjpg.jpg', '', '2015-06-03', '00:00:00', 1),
(9, 39, 'Amikom Futsal Championship #3', 'Hasil turnamen Amikom Futsal Championship#3 sudah di ketahui dengan berakirnya event tersebut pada hari minggu 24 mei 2014, 32 team peserta Amikom Futsal Championship#3 sudah bertanding dengan menjunjung tinggi sportifitas dengan dipimpin wasit dari alumnus Amikom Futsal Yogyakarta.', 'webjpg.jpg', '', '2015-05-28', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
`id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`) VALUES
(1, 'Sugeng Rahmat S.', 'Jl. Mangkubumi No. 145 Yogyakarta'),
(2, 'Siti Nurhalimah', 'Jl. Jangkar Bumi No. 80 Sleman'),
(8, 'Ani', 'Magelang'),
(9, 'gds', 'dgas');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE IF NOT EXISTS `kategori_berita` (
`id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pendidikan I'),
(2, 'Teknologi'),
(15, 'Ekonomi'),
(16, 'Akutansi'),
(17, 'Kesehatan'),
(18, 'Tips & Triks'),
(39, 'Olahraga'),
(42, 'Gadget');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(5) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `gambar`) VALUES
(4, 'Mouse Gaming', '', '172b.jpg'),
(5, 'SSD HYPER X KINGSTONE', '', 'Image_06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(6) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin@sekolah.sch.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
