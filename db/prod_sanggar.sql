-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 05:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prod_sanggar`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `id_order` varchar(15) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_product`
--

CREATE TABLE `detail_product` (
  `id_detail_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `kode_detail_product` varchar(100) DEFAULT NULL,
  `nama_detail_product` varchar(255) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_product`
--

CREATE TABLE `gambar_product` (
  `id_gambar` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_product`
--

INSERT INTO `gambar_product` (`id_gambar`, `id_product`, `gambar`, `deskripsi`) VALUES
(27, 73, 'a08c7b3092926a92433e86ac91f7160a.jpg', NULL),
(28, 74, '51d27a775450ef74c7ab87201879c4f4.jpg', NULL),
(29, 75, '7be994195dd8cc88e5368ddc5339ba80.jpg', NULL),
(30, 76, '9fd675b496583039e4bbb2f44afef2f9.jpg', NULL),
(31, 77, '2b96de516ab471fbff33d98e1b28a501.jpg', NULL),
(32, 78, '3b55ec5db15d2c4392c1d878a5c9125d.jpg', NULL),
(33, 79, '67bb4d206e5a57737e7ded8ea2d5b9cf.jpg', NULL),
(34, 80, 'f1d8594320fc7adfa06f774a5168bad4.jpg', NULL),
(35, 81, '5f40228f96cfc4643d83ca343df5b87d.jpg', NULL),
(36, 82, '77adeb7a92d0df80f508ee22d16edf79.jpg', NULL),
(37, 83, '63f687ab2e6d67049876716f87a02bf0.jpg', NULL),
(38, 84, 'c1a88c1c8a83f99523600785ebfe3203.jpg', NULL),
(39, 85, '16e7d75604c4ee90e611396d0e1cc304.jpg', NULL),
(40, 86, '8e874a8e88930ffe3618f79b2212abc3.jpg', NULL),
(41, 87, 'adb8e8dbb31fbd8f6a2ec3315cfb841f.jpg', NULL),
(42, 88, 'b96fc6bddb2d7b3778f322db9fb1f469.jpg', NULL),
(43, 89, '3b9dfdbd1e046454dfa01f351a4c0b0e.jpg', NULL),
(44, 90, 'a62d0f76dd74ed3d6cfc83f9fb885d80.jpg', NULL),
(45, 91, '43344258de061b4006c58a4e58b4cc10.jpg', NULL),
(46, 92, '2830fac461e0331700f566c384e83c15.jpg', NULL),
(47, 93, '1ea4357e639f22b1d533b9cc7462dd83.jpg', NULL),
(48, 94, 'd021083cd7b8ce8ff9249eb8ddfbccf7.jpg', NULL),
(49, 95, '8ee31ec4609e3bc516f7bbf87abedb86.jpg', NULL),
(50, 96, '02454213eb3982c45196ea543dbf241a.jpg', NULL),
(51, 97, '74d579bb73b87dce0bcc806a58c53af3.JPG', NULL),
(52, 98, 'a504bca025b6bafe64dbaedd7fa390ad.JPG', NULL),
(53, 99, '91b2e3047deca3887d0951f67f6e5c00.jpg', NULL),
(54, 100, '45352d5fac5dc8d9199b7779f87ce0fd.jpg', NULL),
(55, 101, 'c0c5278a02f84bdecc905ce959201d0a.jpg', NULL),
(56, 102, '1cdc702b50691180eb155df85d11a63a.jpg', NULL),
(58, 104, 'bf048fd4dbe3d312baacbb133632771f.jpg', NULL),
(59, 105, '789416600f4e7e3f1cf778652c5d2fdd.jpg', NULL),
(60, 106, 'c3f3bac9207bf0209bc3854356376836.jpg', NULL),
(61, 107, '9e9376a9c4b773ce30aa37a6eca3867a.jpg', NULL),
(62, 108, 'f91c13ca927a0383103a865f24f22b28.jpg', NULL),
(63, 109, 'a11fe2eeaf6faf85ad31c86a2eb0c1ef.jpg', NULL),
(64, 110, '8ec2b22f488f9250a2f6a77caa0c529c.jpg', NULL),
(65, 111, '0f9bc725fc9402ffe4dd8ca040311ca9.jpg', NULL),
(66, 112, 'c18c61603d1855706f31c837eba275ff.jpg', NULL),
(67, 113, 'ef6128597c7649d487ef04727ac49647.jpg', NULL),
(68, 114, '54bc1832dc6381aa6db6a336bd2108fe.jpg', NULL),
(69, 115, '6ec210a8d70074939f9d1a0383a67904.jpg', NULL),
(70, 116, '731ccc94f6aae7577d1d5d9cfb9943d8.jpg', NULL),
(71, 117, '57d83c35e005ad90d47a6e652c1d7df7.jpg', NULL),
(72, 118, '3da40b2cd97d21ad838ea5762a75f882.jpg', NULL),
(73, 119, '33ae09448c167a032fce7c5b96203e97.jpg', NULL),
(74, 120, '52484984e5d9e6ef56d62117b6a5b534.jpg', NULL),
(75, 121, '6393762466c2921da44f13ab88726cdb.jpg', NULL),
(76, 122, '1ec867ebb1fc73e18e28dcac30ee1a30.jpg', NULL),
(77, 123, '46588fe500e45f00408de729ea6fcef1.jpg', NULL),
(78, 124, 'ba0293a039246a6806ea7f74205ddad3.jpg', NULL),
(79, 125, '3b3e63d5c641c563c3f86452d4d74bef.jpg', NULL),
(80, 126, 'febc8666c3cc6f6f07406247502f461e.jpg', NULL),
(81, 127, '7a87c0e0e964909a145efbbf0e60cc0d.jpg', NULL),
(82, 128, '65e6492035dcc57351d204c2e9ba1b78.jpg', NULL),
(83, 129, 'beb31c8b44857d9865bb7fff0bf1e5d9.jpg', NULL),
(84, 130, '09d4729cd4bc6800d53a18ae0edc8fc4.jpg', NULL),
(85, 131, '9b517fe79afcb5e8a03369d9e676194d.jpg', NULL),
(86, 132, '696892793f91e648b89de9a1536669b1.jpg', NULL),
(87, 133, '963ca819a07d434c54edc46da05db766.jpg', NULL),
(88, 134, 'e62cb5f5595a07db7950e60d88c899c3.jpg', NULL),
(89, 135, '539a8f9780b40e3565b94b42c472b8da.jpg', NULL),
(90, 136, '999c0509f3f17a6854bebb049ac45b3d.jpg', NULL),
(91, 137, 'e9a995efeb48bbf3e4d0dbf6fcac91f1.jpg', NULL),
(92, 138, 'a61a74eea5fa33219619ac3cf2aef7c4.jpg', NULL),
(93, 139, 'a9d95b7e99832b27781b8733f95600e2.jpg', NULL),
(94, 140, '5539147856fda55322475e0f791a9216.jpg', NULL),
(95, 141, 'cc8faa02051c8ac92e2e8234b5ab4693.jpg', NULL),
(96, 142, 'ddb53c2b8bf669d8501fda497c35abf0.jpg', NULL),
(97, 143, 'fae9b35609301882a7957c8147004665.jpg', NULL),
(98, 144, 'fce390eadcaf0ee2d6a9fec03a199da0.jpg', NULL),
(99, 145, '702b211081832f4424b68791c2e155ca.jpg', NULL),
(100, 146, '2b71bd259c2e3626c575eefd644f10e0.jpg', NULL),
(101, 147, 'a86cf1927531291972072349ecf02c61.jpg', NULL),
(102, 148, 'db91402db9f37bac2f37d1cf63eac2b5.jpg', NULL),
(103, 149, '7322972b9148458ad833d6f3c0aaf859.jpg', NULL),
(104, 150, '764d6eadc2d4300617e533cc91ceef2f.jpg', NULL),
(105, 151, 'f02d4aec7b70e83623dc9a306f551648.jpg', NULL),
(106, 152, '0e535cc109ff4462862786c5002438d0.jpg', NULL),
(107, 153, '3095a66b027b6b2734a2cf8a7ccc2fc3.jpg', NULL),
(108, 154, 'bcc7f667306155c82b217077c6c1c60e.jpg', NULL),
(109, 155, '548acaae359fe8196b14cf40522d0050.jpg', NULL),
(110, 156, '81ee0423853bd2a925be98c6337704bb.jpg', NULL),
(111, 157, '24753c9da9b1bb6a822aa062e5bb7759.jpg', NULL),
(112, 158, '9f93b8b7138927a1d555e0acf9a43bba.jpg', NULL),
(113, 159, 'f00facd1c592bb66c666e3ff615b9968.jpg', NULL),
(114, 160, '818a2844c185318245cf6b4f8d259999.jpeg', NULL),
(115, 161, 'b5b08af904b8ffc006e64831bff13049.jpeg', NULL),
(116, 162, '5e8f369a9b710464c0d5b9e50acc3fcc.jpg', NULL),
(117, 163, 'ba8a14dcbc7aab817144bf711ba873e2.jpg', NULL),
(118, 164, '32667645434360e4cf9b7e69c9cf6a0c.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_product`
--

CREATE TABLE `jenis_product` (
  `id_jenis_product` int(11) NOT NULL,
  `nama_jenis_product` varchar(100) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_product`
--

INSERT INTO `jenis_product` (`id_jenis_product`, `nama_jenis_product`, `is_delete`) VALUES
(1, 'Kostum Tari', 0),
(2, 'Baju Adat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `les_tari`
--

CREATE TABLE `les_tari` (
  `id_less_tari` int(11) NOT NULL,
  `no_registrasi` varchar(225) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `tempat_tanggal_lahir` varchar(225) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `metode_pembayaran` enum('BCA','BRI','SIMPEDES','') DEFAULT NULL,
  `bukti_pembayaran` varchar(225) DEFAULT NULL,
  `tanggal_upload_bukti_pembayaran` datetime DEFAULT NULL,
  `status` enum('belum bayar','dalam ulasan','sudah bayar','lunas','mengikuti','selesai','batal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_metode` int(11) NOT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `norek` varchar(50) DEFAULT NULL,
  `atasnama` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_metode`, `bank`, `norek`, `atasnama`) VALUES
(7, 'BCA', '1111222333', 'Dwipayana Nusantara');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(15) NOT NULL,
  `ambil` date DEFAULT NULL,
  `kembali` date DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(70) CHARACTER SET latin1 DEFAULT 'BELUM LUNAS',
  `id_user` int(11) DEFAULT NULL,
  `is_kembali` int(11) DEFAULT 0,
  `is_notif` int(11) DEFAULT 0,
  `quantity` int(11) DEFAULT NULL,
  `dikembalikan` date DEFAULT NULL,
  `pengantaran` varchar(100) DEFAULT NULL,
  `is_rusak` int(11) DEFAULT 0,
  `keterangan_rusak` varchar(255) DEFAULT NULL,
  `ukuran` varchar(1) DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `tgl_pengembalian_user` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `ambil`, `kembali`, `id_product`, `tanggal`, `status`, `id_user`, `is_kembali`, `is_notif`, `quantity`, `dikembalikan`, `pengantaran`, `is_rusak`, `keterangan_rusak`, `ukuran`, `is_delete`, `tgl_pengembalian_user`) VALUES
('INV230621000001', '2021-06-23', '2021-06-25', 164, '2021-06-23', 'LUNAS', 2, 0, 1, 1, NULL, 'ambil_sendiri', 0, NULL, 'l', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_order` varchar(15) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `pengirim` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `bukti_transfer` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `tgl_bayar`, `id_metode`, `id_order`, `jumlah`, `pengirim`, `bukti_transfer`) VALUES
(1, '2021-06-23', 7, 'INV230621000001', 1, 'q', '4aad4546ce2aaf1afc7e4eec863ec591.jpeg'),
(2, '2021-06-23', 7, 'INV230621000001', 1, 'q', '285aeac44975de20b8279a70b84ee4c4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(100) DEFAULT NULL,
  `harga_product` double DEFAULT NULL,
  `harga_deposit` double DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `id_pulau` int(11) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `stock` bigint(20) DEFAULT NULL,
  `id_jenis_product` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga_product`, `harga_deposit`, `deskripsi`, `gender`, `id_pulau`, `id_provinsi`, `is_delete`, `stock`, `id_jenis_product`, `s`, `m`, `l`, `xl`) VALUES
(73, 'Kostum Tari Merak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Merak terdiri dari:</p>\n', 'P', 9, 23, 0, NULL, 1, 0, 3, 5, 1),
(74, 'Kostum Tari Panji Semirang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Panji Semirang terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 3),
(75, 'Kostum Tari Ratoeh Jaro', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ratoeh Jaro terdiri dari:</p>\n', 'P', 8, 13, 0, NULL, 1, 0, 3, 5, 5),
(76, 'Kostum Tari Cendrawasih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cendrawasih terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(77, 'Kostum Tari Pendet', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pendet terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 5),
(78, 'Kostum Tari Gandrung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gandrung terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 5, 1),
(79, 'Kostum Tari Sekar Jagat', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekar Jagat terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(80, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(81, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(82, 'Kostum Tari Lenggang Nyai', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Lenggang Nyai terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 1, 0, 3, 5, 1),
(83, 'Kostum Tari Jatilan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Jatilan terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 5, 1),
(84, 'Kostum Tari Ganongan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ganongan terdiri dari:</p>\n', 'L', 9, 28, 0, NULL, 1, 0, 3, 5, 1),
(85, 'Kostum Tari Manuk Rawa', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Manuk Rawa terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(86, 'Kostum Tari Joged Bumbung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Joged Bumbung terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(87, 'Kostum Tari Pakarena', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pakarena terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 1, 0, 3, 5, 1),
(88, 'Kostum Tari Legong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Legong terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(89, 'Kostum Tari Baris', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Baris terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(90, 'Kostum Tari Yapong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Yapong terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 1, 0, 3, 5, 1),
(91, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 5, 1),
(92, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\n', 'L', 9, 28, 1, NULL, 1, 0, 3, 5, 1),
(93, 'Kostum Tari Teruna Jaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari&nbsp;Teruna Jaya terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(94, 'Kostum Tari Sekapur Sirih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekapur Sirih terdiri dari:</p>\n', 'P', 8, 22, 0, NULL, 1, 0, 3, 5, 0),
(95, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(96, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(97, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(98, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(99, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(100, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 5, 0),
(101, 'Kostum Tari Kasomber', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kasomber terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 5, 0),
(102, 'Kostum Tari Bedoyo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bedoyo terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 5, 0),
(104, 'Kostum Tari Pagellu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pagellu terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 1, 0, 3, 5, 0),
(105, 'Kostum Tari Tor-tor', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Tor-tor terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 1, 0, 3, 5, 0),
(106, 'Kostum Tari Bajidor Kahot', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bajidor Kahot terdiri dari:</p>\n', 'P', 9, 24, 0, NULL, 1, 0, 3, 5, 0),
(107, 'Kostum Tari Margapati', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Margapati terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(108, 'Kostum Tari Puspanjali', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Puspanjali terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(109, 'Kostum Tari Kidang Kencana', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kidang Kencana terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(110, 'Kostum Tari Barong', 400000, 400000, '<p>Sanggar kami menyediakan Kostum Tari Barong terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 0),
(111, 'Kostum Tari Wirayuda', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wirayuda terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(112, 'Kostum Tari Kecak', 100000, 100000, '<p>Sanggar kami menyediakan Kostum Tari Kecak terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 5),
(113, 'Kostum Tari Topeng Cirebon', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Cirebon terdiri dari:</p>\n', 'L', 9, 24, 0, NULL, 1, 0, 3, 5, 0),
(114, 'Kostum Tari Gambyong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gambyong terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 5, 0),
(115, 'Kostum Tari Serimpi', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Serimpi terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 5, 0),
(116, 'Kostum Tari Burung Enggang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Burung Enggang terdiri dari:</p>\n', 'P', 11, 35, 0, NULL, 1, 0, 3, 5, 0),
(117, 'Kostum Tari Radap Rahayu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Radap Rahayu terdiri dari:</p>\n', 'P', 11, 33, 0, NULL, 1, 0, 3, 5, 0),
(118, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 3),
(119, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 3),
(120, 'Kostum Tari Topeng Tua', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Tua terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 0),
(121, 'Kostum Tari Topeng Keras', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Keras terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 5, 0),
(122, 'Kostum Tari Cilinaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cilinaya terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(123, 'Kostum Tari Wiranata', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wiranata terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 5, 1),
(124, 'Kostum Tari Sajojo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sajojo terdiri dari:</p>\n', 'P', 14, 45, 0, NULL, 1, 0, 3, 5, 0),
(125, 'Kostum Tari Soya-soya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Soya-soya terdiri dari:</p>\n', 'L', 14, 44, 0, NULL, 1, 0, 3, 5, 0),
(126, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 2, 0, 3, 5, 2),
(127, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\n', 'P', 9, 24, 0, NULL, 2, 0, 3, 5, 0),
(128, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\n', 'L', 9, 24, 0, NULL, 2, 0, 3, 5, 0),
(129, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'P', 9, 26, 1, NULL, 1, 0, 3, 5, 0),
(130, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 2, 0, 3, 5, 0),
(131, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'L', 9, 26, 0, NULL, 2, 0, 3, 5, 0),
(132, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 2, 0, 3, 5, 0),
(133, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\n', 'L', 9, 28, 0, NULL, 2, 0, 3, 5, 0),
(134, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\n', 'P', 8, 22, 0, NULL, 2, 0, 3, 5, 0),
(135, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\n', 'L', 8, 22, 0, NULL, 2, 0, 3, 5, 0),
(136, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\n', 'P', 8, 18, 0, NULL, 2, 0, 3, 5, 0),
(137, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\n', 'L', 8, 18, 0, NULL, 2, 0, 3, 5, 0),
(138, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\n', 'P', 8, 19, 0, NULL, 2, 0, 3, 5, 0),
(139, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\n', 'L', 8, 19, 0, NULL, 2, 0, 3, 5, 0),
(140, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 2, 0, 3, 5, 0),
(141, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\n', 'L', 9, 25, 0, NULL, 2, 0, 3, 5, 0),
(142, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\n', 'L', 8, 16, 0, NULL, 2, 0, 3, 5, 0),
(143, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\n', 'P', 8, 16, 0, NULL, 2, 0, 3, 5, 0),
(144, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 2, 0, 3, 5, 0),
(145, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 2, 0, 3, 5, 0),
(146, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 5, 0),
(147, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\n', 'L', 8, 14, 0, NULL, 2, 0, 3, 5, 0),
(148, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 5, 0),
(149, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 5, 0),
(150, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\n', 'P', 8, 13, 0, NULL, 2, 0, 3, 5, 0),
(151, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\n', 'L', 8, 13, 0, NULL, 2, 0, 3, 5, 0),
(152, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\n', 'P', 8, 21, 0, NULL, 2, 0, 3, 5, 0),
(153, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\n', 'L', 8, 21, 0, NULL, 2, 0, 3, 5, 0),
(154, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\n', 'P', 14, 43, 0, NULL, 2, 0, 3, 5, 0),
(155, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\n', 'L', 14, 43, 0, NULL, 2, 0, 3, 5, 0),
(156, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\n', 'P', 14, 45, 0, NULL, 2, 0, 3, 5, 0),
(157, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\n', 'L', 14, 45, 0, NULL, 2, 0, 3, 5, 0),
(158, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 2, 0, 3, 5, 0),
(159, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\n', 'L', 12, 39, 0, NULL, 2, 0, 3, 5, 0),
(160, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\n', 'L', 11, 36, 0, NULL, 2, 0, 3, 5, 0),
(161, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\n', 'P', 11, 36, 0, NULL, 2, 0, 3, 5, 0),
(162, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 2, 0, 3, 5, 3),
(163, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\n', 'P', 11, 34, 0, NULL, 2, 0, 3, 5, 0),
(164, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\n', 'L', 11, 34, 0, NULL, 2, 0, 3, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `is_delete` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `id_pulau`, `nama_provinsi`, `is_delete`) VALUES
(13, 8, 'Aceh', 0),
(14, 8, 'Sumatra Utara', 0),
(15, 8, 'Sumatra Barat', 0),
(16, 8, 'Riau', 0),
(17, 8, 'Kepulauan Riau', 0),
(18, 8, 'Jambi', 0),
(19, 8, 'Bengkulu', 0),
(20, 8, 'Sumatra Selatan', 0),
(21, 8, 'Kepulauan Bangka Belitung', 0),
(22, 8, 'Lampung', 0),
(23, 9, 'Banten', 0),
(24, 9, 'Jawa Barat', 0),
(25, 9, 'Jakarta', 0),
(26, 9, 'Jawa Tengah', 0),
(27, 9, 'Yogyakarta', 0),
(28, 9, 'Jawa Timur', 0),
(29, 10, 'Bali', 0),
(30, 13, 'Nusa Tenggara Barat', 0),
(31, 13, 'Nusa Tenggara Timur', 0),
(32, 11, 'Kalimantan Barat', 0),
(33, 11, 'Kalimantan Selatan', 0),
(34, 11, 'Kalimantan Tengah', 0),
(35, 11, 'Kalimantan Timur', 0),
(36, 11, 'Kalimantan Utara', 0),
(37, 12, 'Gorontalo', 0),
(38, 12, 'Sulawesi Barat', 0),
(39, 12, 'Sulawesi Selatan', 0),
(40, 12, 'Sulawesi Tengah', 0),
(41, 12, 'Sulawesi Tenggara', 0),
(42, 12, 'Sulawesi Utara', 0),
(43, 14, 'Maluku', 0),
(44, 14, 'Maluku Utara', 0),
(45, 14, 'Papua Barat', 0),
(46, 14, 'Papua', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id_pulau` int(11) NOT NULL,
  `nama_pulau` varchar(100) NOT NULL,
  `is_delete` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`id_pulau`, `nama_pulau`, `is_delete`) VALUES
(8, 'Sumatra', 0),
(9, 'Jawa', 0),
(10, 'Bali & Nusa Tenggara', 0),
(11, 'Kalimantan', 0),
(12, 'Sulawesi', 0),
(14, 'Maluku & Papua', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(100) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `gambar_reivew` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_order` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `level` varchar(3) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(180) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `is_verif` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `photo`, `phone`, `email`, `alamat`, `is_delete`, `is_verif`) VALUES
(1, 'Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, 812232324456, 'dwipayananusantara1234@gmail.com', 'cileungsi', 0, 1),
(2, 'andi', 'andi', 'c4ca4238a0b923820dcc509a6f75849b', '5', NULL, 9, 'andidev30.personal@gmail.com', 'te', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id_detail_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `gambar_product`
--
ALTER TABLE `gambar_product`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `jenis_product`
--
ALTER TABLE `jenis_product`
  ADD PRIMARY KEY (`id_jenis_product`);

--
-- Indexes for table `les_tari`
--
ALTER TABLE `les_tari`
  ADD PRIMARY KEY (`id_less_tari`);

--
-- Indexes for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `order_id` (`id_order`),
  ADD KEY `metode_id_bayar` (`id_metode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_pulau` (`id_pulau`),
  ADD KEY `id_jenis_product` (`id_jenis_product`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`id_pulau`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `id_detail_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar_product`
--
ALTER TABLE `gambar_product`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `jenis_product`
--
ALTER TABLE `jenis_product`
  MODIFY `id_jenis_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `les_tari`
--
ALTER TABLE `les_tari`
  MODIFY `id_less_tari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `denda_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `denda_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gambar_product`
--
ALTER TABLE `gambar_product`
  ADD CONSTRAINT `gambar_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_metode`) REFERENCES `metode_bayar` (`id_metode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_jenis_product`) REFERENCES `jenis_product` (`id_jenis_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
