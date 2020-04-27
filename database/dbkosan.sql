-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2017 at 05:23 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakakses`
--

CREATE TABLE IF NOT EXISTS `hakakses` (
  `id_hakakses` int(2) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id_hakakses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hakakses`
--

INSERT INTO `hakakses` (`id_hakakses`, `keterangan`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkat` int(1) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idkat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE IF NOT EXISTS `kos` (
  `idkos` int(20) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `namakos` varchar(70) DEFAULT NULL,
  `alamat` text,
  `harga` int(30) DEFAULT NULL,
  `per` varchar(20) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL,
  PRIMARY KEY (`idkos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`idkos`, `id_user`, `namakos`, `alamat`, `harga`, `per`, `kategori`, `deskripsi`, `gambar`, `no_telp`) VALUES
(17, 63, 'Pa Sandas', 'Jl. H. Umayah 2 No.32, Cikutra', 120000, 'Bulan', 'mahasiswa', 'Dekat Dengan Jalan Raya, Bebas Listrik, (Kasur Lemari Sudah Ada', '5.jpg', '08123772163'),
(20, 51, 'Bu Meida', 'Jl.Nusasari I no 21 Komp Taman Citeureup Cimahi\r\n', 2300000, 'Tahun', 'wanita', 'Lokasi dalam perumahan, tempat tenang,semua berkamar mandi dalam,parkir kendaraan,dekat pasar,angkut', 'g8.jpg', '01283123123'),
(35, 66, 'Pa Brenda', 'Jln.Tubagus Ismail Dalam No.40', 250000, 'Bulan', 'umum', 'Dekat ke Pasar Simpang, WIFI, Bersih', 'g17.jpg', '085512312321'),
(42, 64, 'Pa Raka', 'Jl. Telekomunikasi No.1, Sukapura, Dayeuhkolot', 5000000, 'Tahun', 'mahasiswa', 'Dekat Kampus Telkom, Include Kasur WIFI lemari dan Kamar Mandi di dalam', '7.jpg', '089765543'),
(43, 53, 'Pa Jamil', 'Jln. Setiabudi No 12 RT 4 RW 8', 500000, 'Bulan', 'pria', 'Lokasi dalam perumahan, tempat tenang,semua berkamar mandi dalam,parkir kendaraan,dekat pasar', '2.jpg', '087654321'),
(95, 63, 'Pa Sandas', 'Jl. Ciheulang Baru No. 3 Tubagus Ismail Dago Bandung Kota', 1000000, 'Bulan', 'pria', 'Internet, Garasi Luas, Air Panas', '311922075_2_644x461_kost-dago-tubagus-ismail-kota-bandung-upload-foto.jpg', '07864320009'),
(96, 66, 'Bu Brenda', 'Komplek Alamanda Jl. Tubagus Ismail no. 60 Kav-D no.44 Sekeloa-Bandung', 800000, 'Bulan', 'pria', 'Air Panas, Akses 24 Jam, Wifi dan Parkir Garasi Luas', '314065986_2_644x461_kost-rshs-jl-sederhana-upload-foto.jpg', '08976468823'),
(97, 51, 'Bu Meida', 'Jl. Tubagus Ismail V No. 64 Rt. 05/ Rw. 11 Kel. Coblong Kec. Sekeloa 40134 Kota Bandung Jawa Barat', 600000, 'Bulan', 'pria', 'tempat tidur lengkap, lemari baju, dapur bersama, kulkas, dispenser, tv, parkiran motor, kamar mandi', '311922075_7_644x461_kost-dago-tubagus-ismail-kota-bandung-.jpg', '09764246723'),
(98, 53, 'Pa Jamil', 'JL Tubagus Ismail VIII Timur No 1 Bandung', 5000000, 'Tahun', 'mahasiswa', 'Dekat Dengan Unikom, Akses ke Pasar Dekat, 24 Jam Wifi', 'BuJamil.jpg', '082122345678'),
(99, 51, 'Bu Nilandari', 'Jln. Cikutra No.88', 800000, 'Bulan', 'wanita', 'Akses 24 Jam, Satpam, Wifi, Air Panas', 'Jamila.jpg', '08123764500'),
(100, 68, 'Pa Edi', 'Jln. Tubagus Ismail Kampung babakan sembung no 95 rt 02/ rw 12 kel. sekeloa kec. coblong- Bandung', 600000, 'Bulan', 'pria', 'kamar tidur, kamar mandi, lantai 2, SHM, harga jual 700.000.000 atau sewa 600.000/bulan nego', 'JualSewa.jpg', '087834525100'),
(101, 68, 'Pa Edi', 'Jln.Tubagus Ismail Dalam', 6000000, 'Tahun', 'wanita', 'Dekat Kampus Unikom, Include Kasur WIFI lemari dan Kamar Mandi di dalam', 'Pa Yanto2.jpg', '081324554222'),
(102, 53, 'Pa Khairul', 'Jln.Dago Atas No.44', 5000000, 'Tahun', 'wanita', 'Lokasi dalam perumahan, tempat tenang,semua berkamar mandi dalam,parkir kendaraan,dekat pasar', 'Raka2.jpg', '08994717954'),
(103, 67, 'Bu Enoh', 'Jl. Ciheulang Baru No. 3 Tubagus Ismail Dago Bandung Kota', 1000000, 'Bulan', 'pria', 'fasilitas internet, tv kabel, kamar mandi luar, security 24 jam, dapur bersama, lemari, meja belajar', 'Enoh.jpg', '07864320009'),
(104, 66, 'Bu Melly', 'jl Ciheulang 6A, belakang RS. Ginjal Habibi, Tubagus Ismail, dago Bandung', 1300000, 'Bulan', 'wanita', 'kamar mandi dalam, air panas, token, parkir motor, tahunan bayar 11 bulan saja', '317293376_4_644x461_kamar-kos-di-tubagus-ismail-7-murah-fasilitas-lengkap-properti.jpg', '098653597543'),
(105, 68, 'Pa Edi', 'Jalan Tubagus Ismail Raya No. 60, Komplek Alamanda Dago Permai F-82, Kelurahan: Sekeloa Kecematan : Coblong, Bandung, Jawa Barat', 1600000, 'Bulan', 'pria', 'fasilitas garasi, water heater, gordyn, PAM, laundry, dapur, kamar mandi dalam, full furniture', 'Edi2.jpg', '09976554243'),
(106, 53, 'Bu Ihsan', 'Jl. Kanayakan Baru No.49, Dago, Coblong, Kota Bandung', 1500000, 'Bulan', 'wanita', 'Kamar Mandi Dalam,Wifi,Air Panas,Dapur dll', '778.jpg', '0897654321'),
(107, 53, 'Pa Khairul', 'Jln. tubagus ismail dalam, gang 1 no 28A/153A bandung kota', 550000, 'Bulan', 'pria', 'fasilitas parkit motor luas, temapt tidur, lemari , kamar mandi luar', '799.jpg', '081324555422'),
(108, 66, 'Bu Melly', 'Jln. Ciheulang Baru No.3 Tubagus Ismail Dago', 1000000, 'Bulan', 'pria', 'Lingkungan yang nyaman dan bersih, Internet TV Kabel, Dekat dengan Unikom,Unpad dan ITB', 'Brenda.jpg', '081324555422'),
(109, 66, 'Bu Melly', 'Jln. Sarijadi Raya', 1600000, 'Bulan', 'pria', 'Lingkungan yang nyaman dan bersih, Internet TV Kabel, Dekat dengan Unpas,PVJ dan Bandara Husein', '55.jpg', '081324555422'),
(110, 67, 'Bu Enoh', 'Jl.Sarijadi Blok 14 No.168 Cimahi Kota', 1000000, 'Bulan', 'wanita', 'Lingkungan yang nyaman dan bersih, Internet TV Kabel, Dekat dengan Unpas,PVJ dan Bandara Husein', '657.jpg', '081324555422'),
(111, 67, 'Bu Enoh', 'Jln.Cikutra No.23', 1000000, 'Bulan', 'wanita', 'Air Jetpam,Lokasi Strategis, Garasi untuk Motor', '3334.jpg', '081324555422'),
(112, 53, 'Pa Khairul', 'Jln.Dayeuhkolot No.120', 5000000, 'Tahun', 'umum', 'Air Jetpam,Lokasi Strategis, Garasi untuk Motor', '899.jpg', '081324555422'),
(113, 51, 'Nilandari', 'jl. Ciheulang 6 A, belakang RS. Ginjal Habibi, Tubagus Ismail, Dago, Bandung', 1300000, 'Bulan', 'wanita', 'kamar kos cantik, kamar mandi dalam, air panas, token, parkir motor, deket kampus-kampus ternama kot', '309584265_2_644x461_kmr-kos-tinggal-bw-koper-kami-memang-mahal-krn-kami-beda-upload-foto_rev003.jpg', '08921344555'),
(114, 63, 'Bapak Sandas', 'Jl Ciheulang No.3 Tubagus Ismail Dago, Bandung Kota', 1000000, 'Bulan', 'pria', 'fasilitas :\r\n1. internet + tv kabel\r\n2. kamar mandi luar\r\n3. security 24 jam\r\n4. lingkungan yang nya', '316802182_3_644x461_kost-putra-ciheulang-baru-3-tb-ismail-indekos.jpg', '08815466667'),
(115, 63, 'Bapa Sandass', 'jalan tubagus ismail 12 no 18 Dago Bandung , Bandung Kota', 1000000, 'Bulan', 'wanita', 'tersedia wifi dan pembantu lokasi strategis dekat dengan kampus unpad dipatiukur unikom ithb dan itb', 'alamanda.jpg', '08789990000'),
(116, 67, 'Ibu Enoh', 'Jln. Tubagus Ismail 15, gang legok hiris rt/rw 003/010 Sekeloa Coblong, Bandung Kota.', 800000, 'Bulan', 'wanita', 'ready stock kamar plus km mandi/tahun 10jt nego, kamar kos kamar mandi luar ukuran 3x3m, ada 6 kamar', 'kontrak.jpg', '081236447770');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(1) NOT NULL,
  `namastatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_telp` varchar(11) DEFAULT NULL,
  `id_hakakses` int(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `email`, `alamat`, `no_telp`, `id_hakakses`) VALUES
(38, 'admin', 'admin', 'discaamelia05@gmail.com', 'Tubagus Ismail', '0812312344', 1),
(51, 'nilandari', 'nilandari', 'nilandari@gmail.com', 'Sekeloa', '071281231', 2),
(53, 'jamil', 'jamil', 'jamil@gmail.com', 'Bandung', '08123123776', 2),
(63, 'sandas', 'sandas', 'sandas@yahoo.com', 'Cikutra', '08123123123', 2),
(64, 'raka', 'raka', 'raka@yahoo.com', 'Cicaheumm', '08123812777', 2),
(66, 'brenda', 'brenda', 'brenda@gmail.com', 'Tubagus', '08123123123', 2),
(67, 'enoh', 'enoh', 'enoh05@gmail.com', 'Tubagus Ismail Dalam', '08132455542', 2),
(68, 'edi', 'edi', 'edi@ymail.com', 'Tubagus', '0867543217', 2),
(69, 'amelia', 'amelia', 'amelia05@gmail.com', 'bandung', '08194717954', 2),
(70, 'riko', 'riko', 'riko04@gmail.com', 'kuningan', '08994717954', 2),
(71, 'rion', 'rion', 'rion04@gmail.com', 'bandung', '08122222222', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
