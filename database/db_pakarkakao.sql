-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2019 pada 10.08
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakarkakao`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `Username`, `Password`) VALUES
(1, 'admin', '6c86fe223e360e0f063bbea90b5f359d'),
(2, 'firzan', '39beb357710067fb3db5d608e73b2aeb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `idGejala` int(11) NOT NULL,
  `Gejala` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`idGejala`, `Gejala`) VALUES
(1, 'Daun berbintik-bintik transparan'),
(2, 'Daun menguning'),
(3, 'Daun mengering'),
(4, 'Daun berlubang'),
(5, 'Pucuk tanaman gundul sehingga tinggal tulang dan daun saja'),
(6, 'Kerusakan yang terjadi pada bagian pinggir daun'),
(7, 'Buah muda yang terserang mengering dan rontok'),
(8, 'Jika tumbuh, permukaan kulit buah akan retak'),
(9, 'Buah nampak bercak-bercak coklat kehitaman'),
(10, 'Buah berlubang'),
(11, 'Buah menjadi busuk'),
(12, 'Kerusakan sering terjadi pada buah yang sudah matang'),
(13, 'Kerusakan terjadi pada biji dan daging kakao'),
(14, 'Buah akan lebih awal berwarna kuning'),
(15, 'Jika digoyangkan tidak berbunyi'),
(16, 'Buah lebih berat'),
(17, 'Biji-biji saling melekat'),
(18, 'Batang menjadi layu'),
(19, 'Batang menjadi kering'),
(20, 'Batang menjadi mati'),
(21, 'Ranting terlihat tanpa daun'),
(22, 'Permukaan kulit ranting menjadi kasar dan belang'),
(23, 'Jaringan pembuluh kayu yang rusak berupa garis-garis kecil kecoklatan'),
(24, 'Buah kakao terasa lembek dan basah jika disentuh jari'),
(25, 'Terdapat bintik-bintik coklat tidak beraturan pada daun'),
(26, 'Buah muda menjadi layu, kering, dan mengeriput'),
(27, 'Adanya benang-benang jamur tipis seperti sutera pada ranting'),
(28, 'Terdapat seperti sarang laba-laba pada ranting'),
(29, 'Daun banyak yang tetap melekat pada ranting meskipun sudah kering'),
(30, 'Tanaman mati'),
(31, 'Daun kakao menjadi layu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalapenyakit`
--

CREATE TABLE `gejalapenyakit` (
  `idGejalaPenyakit` int(11) NOT NULL,
  `idPenyakit` int(11) NOT NULL,
  `GejalaPenyakit` varchar(500) NOT NULL,
  `Penyakit` varchar(500) NOT NULL,
  `Penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejalapenyakit`
--

INSERT INTO `gejalapenyakit` (`idGejalaPenyakit`, `idPenyakit`, `GejalaPenyakit`, `Penyakit`, `Penjelasan`) VALUES
(1, 1, 'Daun berbintik-bintik transparan <br>\r\nDaun menguning <br>\r\nDaun mengering<br>\r\nDaun berlubang', 'Ulat Api', 'abcd'),
(2, 2, 'Daun berlubang<br>\r\nPucuk tanaman gundul sehingga tinggal tulang dan daun saja<br>', 'Ulat Kilan', 'abcd'),
(3, 3, 'Daun berlubang <br>\r\nKerusakan yang terjadi pada pinggir daun', 'Kumbang Apoginia sp ', 'abcd'),
(4, 4, 'Buah muda yang terserang mengering dan rontok<br>\r\nJika tumbuh, permukaan kulit buah akan retakBuah tampak bercak-bercak hitam ', 'Kepik penghisap Buah', 'abcd'),
(5, 5, 'Buah menjadi berlubang<br>\r\nBuah menjadi busuk<br>\r\nKerusakan sering terjadi pada buah yang sudah matang<br>\r\nKerusakan terjadi pada biji dan daging kakao', 'Tikus', 'abcd'),
(6, 6, 'Kerusakan terjadi pada biji dan daging kakao<br> \r\nBuah akan lebih awal berwarna kuning<br>\r\nJika digoyangkan tidak berbunyi\r\nBuah lebih berat<br>\r\nBiji-biji saling melekat<br>', 'Penggerek Buah Kakao', 'abcd'),
(7, 7, 'Batang menjadi layu<br>\r\nBatang menjadi kering<br>\r\nBatang menjadi mati<br>', 'Penggerek Batang Kakao', 'abcd'),
(8, 8, 'Daun menguning<br>\r\nRanting terlihat tanpa daun (ompong)<br>\r\nPermukaan kulit ranting menjadi kasar dan belang<br>\r\nJaringan pembuluh kayu yang rusak berupa garis-garis kecil kecoklatan ', 'Vascular Streak Diebak (VSD)', 'abcd'),
(9, 9, 'Buah tampak bercak-bercak coklat kehitaman<br>\r\nBuah menjadi busuk<br>\r\nBuah kakao terasa lembek dan basah jika tersentuh jari', 'Busuk Buah', 'abcd'),
(10, 10, 'Daun mengering<br>\r\nBuah nampak bercak-bercak coklat kehitaman<br>\r\nBuah menjadi busuk<br>\r\nTerdapat bintik-bintik coklat tidak beraturan pada daun<br>\r\nBuah muda menjadi layu, kering dan mengeriput', 'Antraknose', 'abcd'),
(11, 11, 'Adanya benang-benang jamur tipis seperti sutera pada ranting<br>\r\nTerdapat seperti sarang laba-laba<br>\r\nDaun banyak yang tetap melekat pada ranting meskipun sudah kering<br>\r\nTanaman mati', 'Jamur Upas', 'abcd'),
(12, 12, 'Daun menguning<br>\r\nDaun mengering<br>\r\nTanaman mati <br>\r\nDaun kakao menjadi layu ', 'Jamur Akar', 'abcd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_prob`
--

CREATE TABLE `jumlah_prob` (
  `idJumlahProb` int(11) NOT NULL,
  `idPenyakit` int(11) NOT NULL,
  `Jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_prob_akhir`
--

CREATE TABLE `jumlah_prob_akhir` (
  `idJumlahProbAkhir` int(11) NOT NULL,
  `idPenyakit` int(11) NOT NULL,
  `Jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `idPenyakit` int(11) NOT NULL,
  `Penyakit` varchar(500) NOT NULL,
  `Penanganan` text NOT NULL,
  `Probabilitas_penyakit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`idPenyakit`, `Penyakit`, `Penanganan`, `Probabilitas_penyakit`) VALUES
(1, 'Ulat Api', 'a. Hayati, memanfaatkan musuh alami seperti semut hitam dan laba-laba yang terdapat di alam,dengan teknik konservasi.<br>\r\nb. Mekanis, dengan pemangkasan ranting-ranting pohon pelindung pada saat ulat masih kecil kemudian dimusnahkan', 0.3),
(2, 'Ulat Kilan', 'a. Hayati, menggunakan musuh alami yang ada di alam. Penggunaan lamtoro sebagai tanaman pelindung. <br>\r\nb. Mekanis, dengan pemangkasan ranting-ranting pada pohon pelindung pada saat ulat masih kecil lalu dimusnahkan.', 0.3),
(3, 'Kumbang Apoginia Sp', 'a. Hayati, menggunakan musuh alami yang ada di alam. Penggunaan lamtoro sebagai tanaman pelindung. <br>\r\nb. Kimiawi, dengan penyemprotan larutan insektisida Thiodan 35 EC (bahan aktif endosulfan) konsentrasi 0,2 %. Sevidan 70 WP (bahan aktif endosulfan) konsentrasi 0,2 %.Penyemprotan larutan insektisida dilakukan pada sore hari sampai pukul 21.00 wib dengan 1-2 kali seminggu (jika serangan meluas). ', 0.3),
(4, 'Kepik Penghisap Buah', 'a. Hayati, dengan pemanfaatan agensia hayati, seperti Beauveria bassiana, semut hitam, laba-laba, belalang sembah, dan capung. Penyemprotan suspensi jamur Beauveria bassiana dapat dilakukan sebulan sekali pada sore hari.<br> \r\nb. Mekanis, dengan sarungisasi (pembungkusan buah). Kantong pembungkus tersebut harus dilubangi di bagian bawah supaya air dapat keluar. Jika tidak dilubangi, mungkin buah kakao akan membusuk. <br>\r\nc. Mekanis, pemangkasan mengurangi atau membuang cabang, ranting, dan daun yang tidak berguna sehingga penggunaan zat makanan lebih efisien. Selain itu, pemangkasan akan memberikan banyak penetrasi sinar matahari, serta gerakan angin yang bebas sehingga akan mengurangi serangan Helopeltis, karena itu lakukanlah pemangkasan yang tepat, waktu dan cara yang benar baik dalam pemangkasan bentuk, maupun pemangkasan produk. Drainase kebun perlu diperhatikan agar tidak ada air yang menggenang di kebun.', 0.6),
(5, 'Tikus', 'a. Hayati, dengan menggunakan predator yaitu burung hantu Tyto alba, 1 pasang untuk 25 Ha. <br>\r\nb. Kimiawi, dengan menggunakan racun tikus. Umpan dibuat dengan menggunakan bahan racun racumin / rodentisida lain yang dicampur dengan menggunakan jagung giling, ikan asin, minyak sawit dan lilin kemudian dicetak menjadi persegi 2,5 x 2,5 cm, berat per umpan 13-15 gram. Diletakkan pada pangkal batang 1 buah per pohon biarkan selama sehari. ', 0.5),
(6, 'Penggerek Buah Kakao', 'a. Sanitasi, dengan membelah kulit buah yang terserang setelah panen, seluruhnya dikubur.<br> \r\nb. Mekanis, dengan sarungisasi (pembungkusan buah). Kantong pembungkus tersebut harus dilubangi di bagian bawah supaya air dapat keluar. Jika tidak dilubangi, mungkin buah kakao akan membusuk.<br> \r\nc. Mekanis, dengan pemangkasan yaitu mengurangi atau membuang cabang, ranting, dan daun yang tidak berguna.<br> \r\nd. Memanen sering yaitu satu minggu sekali. ', 0.5),
(7, 'Penggerek Batang', 'a. Hayati, dengan memanfaatkan agensia hayati, seperti Beauveria bassiana dan berbagai serangga predator yang ada di alam seperti semut hitam, laba-laba, belalang sembah, dan capung. Penyemprotan suspensi jamur Beauveria bassiana dapat dilakukan sebulan sekali pada sore hari.<br> \r\nb. Mekanis, dengan memotong batang terserang 10 cm dibawah lubang gerekan ke arah batang, kemudian ulat dibakar atau dimusnahkan. <br>', 0.7),
(8, 'Vascular Streak Dieback (VSD)', 'a. Sanitasi, dengan parit drainase yang dibuat agar tidak ada genangan air dalam kebun pada musim hujan. <br>\r\nb. Mekanis, dengan memotong ranting/ cabang terserang sampai 30 cm pada bagian yang masih sehat kemudian dipupuk NPK 1,5 kali dosis anjuran.', 0.6),
(9, 'Busuk Buah', 'a. Sanitasi kebun, dengan pemangkasan buah terserang. Buah busuk tersebut dipendam dalam tanah dengan kedalaman 30 cm. Pengendalian secara sanitasi sebaiknya sering dilakukan terutama pada saat memasuki musim hujan. <br>\r\nb. Kimiawi, yaitu menggunakan fungisida. Fungisida yang digunakan umumnya berbahan aktif tembaga nordox, kocide77, cupravit, dan lainnya.<br>\r\nc. Kultur Tenis, yaitu dengan memodifikasi lingkungan bertujuan untuk mencegah tumbuh dan berkembangnya penyakit seperti pengaturan dan pemangkasan pohon pelindung. ', 0.6),
(10, 'Antraknose', 'a. Sanitasi, dengan pengaturan naungan sehingga tajuk pohon kakao tidak terkena sinar matahari langsung. <br>\r\nb. Mekanis, dengan memangkas cabang dan ranting yang terinfeksi, mengambil buah yang terserang, dikumpulkan, dan ditanam atau dibakar. <br>\r\nc. Perbaikan drainase tanah untuk menghindari genangan air dalam kebun. ', 0.6),
(11, 'Jamur Upas', 'a. Kultur teknis, dengan pemangkasan pohon pelindung untuk mengurangi kelembapan kebun sehingga sinar matahari dapat masuk areal pertanaman kakao. <br>\r\nb. Mekanis, yaitu memotong cabang/ ranting sakit sampai 15 cm pada bagian yang masih sehat, membersihkan/ mengeruk benang-benang jamur pada gejala awal dari cabang yang sakit, kemudian diolesi dengan fungisida.', 0.9),
(12, 'Jamur Akar', 'a. Sanitasi, dengan membongkar semua tunggul pada saat persiapan lahan terutama yang terinfeksi jamur akar. <br>\r\nb. Lubang bekas bongkaran dibiarkan terkena sinar matahari selama satu tahun. \r\n/nc. Kimiawi, dengan memberikan belerang 150 gr minimal 6 bulan pada lubang bekas bongkaran.<br>\r\nd. Minimal 4 pohon sekitarnya diberi Trichoderma sp. 200gr/pohon pada awal musim hujan dan diulang setiap 6 bulan sekali sampai tidak ditemukan gejala penyakit akar di areal pertanaman kakao tersebut. ', 0.9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `idRule` int(11) NOT NULL,
  `idGejala` int(11) NOT NULL,
  `idPenyakit` int(11) NOT NULL,
  `Probabilitas_gejala` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`idRule`, `idGejala`, `idPenyakit`, `Probabilitas_gejala`) VALUES
(1, 1, 1, 0.1),
(2, 2, 1, 0.2),
(3, 3, 1, 0.3),
(4, 4, 1, 0.3),
(5, 4, 2, 0.3),
(6, 5, 2, 0.3),
(7, 4, 3, 0.3),
(8, 6, 3, 0.1),
(9, 7, 4, 0.2),
(10, 8, 4, 0.2),
(11, 9, 4, 0.4),
(12, 10, 5, 0.5),
(13, 11, 5, 0.5),
(14, 12, 5, 0.3),
(15, 13, 5, 0.3),
(16, 13, 6, 0.3),
(17, 14, 6, 0.3),
(18, 15, 6, 0.4),
(19, 16, 6, 0.2),
(20, 17, 6, 0.3),
(21, 18, 7, 0.3),
(22, 19, 7, 0.3),
(23, 20, 7, 0.4),
(24, 2, 8, 0.2),
(25, 21, 8, 0.4),
(26, 22, 8, 0.5),
(27, 23, 8, 0.7),
(28, 9, 9, 0.4),
(29, 11, 9, 0.5),
(30, 24, 9, 0.4),
(31, 3, 10, 0.3),
(32, 9, 10, 0.4),
(33, 11, 10, 0.5),
(34, 25, 10, 0.6),
(35, 26, 10, 0.6),
(36, 27, 11, 0.2),
(37, 28, 11, 0.6),
(38, 29, 11, 0.2),
(39, 30, 11, 0.3),
(40, 2, 12, 0.2),
(41, 3, 12, 0.3),
(42, 30, 12, 0.3),
(43, 31, 12, 0.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  ADD PRIMARY KEY (`idGejalaPenyakit`),
  ADD KEY `idPenyakit` (`idPenyakit`);

--
-- Indexes for table `jumlah_prob`
--
ALTER TABLE `jumlah_prob`
  ADD PRIMARY KEY (`idJumlahProb`),
  ADD KEY `idPenyakit` (`idPenyakit`);

--
-- Indexes for table `jumlah_prob_akhir`
--
ALTER TABLE `jumlah_prob_akhir`
  ADD PRIMARY KEY (`idJumlahProbAkhir`),
  ADD KEY `idPenyakit` (`idPenyakit`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idPenyakit`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`idRule`,`idGejala`,`idPenyakit`),
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idPenyakit` (`idPenyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `idGejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  MODIFY `idGejalaPenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jumlah_prob`
--
ALTER TABLE `jumlah_prob`
  MODIFY `idJumlahProb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `jumlah_prob_akhir`
--
ALTER TABLE `jumlah_prob_akhir`
  MODIFY `idJumlahProbAkhir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `idPenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `idRule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  ADD CONSTRAINT `gejala` FOREIGN KEY (`idPenyakit`) REFERENCES `penyakit` (`idPenyakit`);

--
-- Ketidakleluasaan untuk tabel `jumlah_prob`
--
ALTER TABLE `jumlah_prob`
  ADD CONSTRAINT `jml_probb` FOREIGN KEY (`idPenyakit`) REFERENCES `penyakit` (`idPenyakit`);

--
-- Ketidakleluasaan untuk tabel `jumlah_prob_akhir`
--
ALTER TABLE `jumlah_prob_akhir`
  ADD CONSTRAINT `jumlah_prob_akhir_1` FOREIGN KEY (`idPenyakit`) REFERENCES `penyakit` (`idPenyakit`);

--
-- Ketidakleluasaan untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`idGejala`) REFERENCES `gejala` (`idGejala`),
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`idPenyakit`) REFERENCES `penyakit` (`idPenyakit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
