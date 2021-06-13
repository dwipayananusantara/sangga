-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2021 at 11:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prod_sanggar_isi`
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
(72, 'Kostum Tari Pendet (Bali)', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pendet terdiri dari:</p>\n', 'L', 10, 29, 1, NULL, 1, 0, 3, 2, 3),
(73, 'Kostum Tari Merak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Merak terdiri dari:</p>\n', 'P', 9, 23, 0, NULL, 1, 0, 3, 2, 1),
(74, 'Kostum Tari Panji Semirang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Panji Semirang terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 3),
(75, 'Kostum Tari Ratoeh Jaro', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ratoeh Jaro terdiri dari:</p>\n', 'P', 8, 13, 0, NULL, 1, 0, 3, 2, 5),
(76, 'Kostum Tari Cendrawasih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cendrawasih terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(77, 'Kostum Tari Pendet', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pendet terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 5),
(78, 'Kostum Tari Gandrung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gandrung terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 2, 1),
(79, 'Kostum Tari Sekar Jagat', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekar Jagat terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(80, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(81, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(82, 'Kostum Tari Lenggang Nyai', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Lenggang Nyai terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 1, 0, 3, 2, 1),
(83, 'Kostum Tari Jatilan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Jatilan terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 2, 1),
(84, 'Kostum Tari Ganongan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ganongan terdiri dari:</p>\n', 'L', 9, 28, 0, NULL, 1, 0, 3, 2, 1),
(85, 'Kostum Tari Manuk Rawa', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Manuk Rawa terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(86, 'Kostum Tari Joged Bumbung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Joged Bumbung terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(87, 'Kostum Tari Pakarena', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pakarena terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 1, 0, 3, 2, 1),
(88, 'Kostum Tari Legong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Legong terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(89, 'Kostum Tari Baris', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Baris terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(90, 'Kostum Tari Yapong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Yapong terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 1, 0, 3, 2, 1),
(91, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 2, 1),
(92, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\n', 'L', 9, 28, 1, NULL, 1, 0, 3, 2, 1),
(93, 'Kostum Tari Teruna Jaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari&nbsp;Teruna Jaya terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(94, 'Kostum Tari Sekapur Sirih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekapur Sirih terdiri dari:</p>\n', 'P', 8, 22, 0, NULL, 1, 0, 3, 2, 0),
(95, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(96, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(97, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(98, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(99, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(100, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 1, 0, 3, 2, 0),
(101, 'Kostum Tari Kasomber', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kasomber terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 1, 0, 3, 2, 0),
(102, 'Kostum Tari Bedoyo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bedoyo terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 2, 0),
(103, 'Kostum Tari Bidu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bidu terdiri dari:</p>\n', 'P', 13, 31, 0, NULL, 1, 0, 3, 2, 0),
(104, 'Kostum Tari Pagellu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pagellu terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 1, 0, 3, 2, 0),
(105, 'Kostum Tari Tor-tor', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Tor-tor terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 1, 0, 3, 2, 0),
(106, 'Kostum Tari Bajidor Kahot', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bajidor Kahot terdiri dari:</p>\n', 'P', 9, 24, 0, NULL, 1, 0, 3, 2, 0),
(107, 'Kostum Tari Margapati', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Margapati terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(108, 'Kostum Tari Puspanjali', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Puspanjali terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(109, 'Kostum Tari Kidang Kencana', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kidang Kencana terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(110, 'Kostum Tari Barong', 400000, 400000, '<p>Sanggar kami menyediakan Kostum Tari Barong terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 0),
(111, 'Kostum Tari Wirayuda', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wirayuda terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(112, 'Kostum Tari Kecak', 100000, 100000, '<p>Sanggar kami menyediakan Kostum Tari Kecak terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 5),
(113, 'Kostum Tari Topeng Cirebon', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Cirebon terdiri dari:</p>\n', 'L', 9, 24, 0, NULL, 1, 0, 3, 2, 0),
(114, 'Kostum Tari Gambyong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gambyong terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 2, 0),
(115, 'Kostum Tari Serimpi', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Serimpi terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 1, 0, 3, 2, 0),
(116, 'Kostum Tari Burung Enggang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Burung Enggang terdiri dari:</p>\n', 'P', 11, 35, 0, NULL, 1, 0, 3, 2, 0),
(117, 'Kostum Tari Radap Rahayu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Radap Rahayu terdiri dari:</p>\n', 'P', 11, 33, 0, NULL, 1, 0, 3, 2, 0),
(118, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 3),
(119, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 3),
(120, 'Kostum Tari Topeng Tua', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Tua terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 0),
(121, 'Kostum Tari Topeng Keras', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Keras terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 1, 0, 3, 2, 0),
(122, 'Kostum Tari Cilinaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cilinaya terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(123, 'Kostum Tari Wiranata', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wiranata terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 1, 0, 3, 2, 1),
(124, 'Kostum Tari Sajojo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sajojo terdiri dari:</p>\n', 'P', 14, 45, 0, NULL, 1, 0, 3, 2, 0),
(125, 'Kostum Tari Soya-soya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Soya-soya terdiri dari:</p>\n', 'L', 14, 44, 0, NULL, 1, 0, 3, 2, 0),
(126, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\n', 'L', 10, 29, 0, NULL, 2, 0, 3, 2, 2),
(127, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\n', 'P', 9, 24, 0, NULL, 2, 0, 3, 2, 0),
(128, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\n', 'L', 9, 24, 0, NULL, 2, 0, 3, 2, 0),
(129, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'P', 9, 26, 1, NULL, 1, 0, 3, 2, 0),
(130, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'P', 9, 26, 0, NULL, 2, 0, 3, 2, 0),
(131, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\n', 'L', 9, 26, 0, NULL, 2, 0, 3, 2, 0),
(132, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\n', 'P', 9, 28, 0, NULL, 2, 0, 3, 2, 0),
(133, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\n', 'L', 9, 28, 0, NULL, 2, 0, 3, 2, 0),
(134, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\n', 'P', 8, 22, 0, NULL, 2, 0, 3, 2, 0),
(135, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\n', 'L', 8, 22, 0, NULL, 2, 0, 3, 2, 0),
(136, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\n', 'P', 8, 18, 0, NULL, 2, 0, 3, 2, 0),
(137, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\n', 'L', 8, 18, 0, NULL, 2, 0, 3, 2, 0),
(138, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\n', 'P', 8, 19, 0, NULL, 2, 0, 3, 2, 0),
(139, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\n', 'L', 8, 19, 0, NULL, 2, 0, 3, 2, 0),
(140, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\n', 'P', 9, 25, 0, NULL, 2, 0, 3, 2, 0),
(141, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\n', 'L', 9, 25, 0, NULL, 2, 0, 3, 2, 0),
(142, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\n', 'L', 8, 16, 0, NULL, 2, 0, 3, 2, 0),
(143, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\n', 'P', 8, 16, 0, NULL, 2, 0, 3, 2, 0),
(144, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\n', 'P', 8, 15, 0, NULL, 2, 0, 3, 2, 0),
(145, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\n', 'L', 8, 15, 0, NULL, 2, 0, 3, 2, 0),
(146, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 2, 0),
(147, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\n', 'L', 8, 14, 0, NULL, 2, 0, 3, 2, 0),
(148, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 2, 0),
(149, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\n', 'P', 8, 14, 0, NULL, 2, 0, 3, 2, 0),
(150, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\n', 'P', 8, 13, 0, NULL, 2, 0, 3, 2, 0),
(151, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\n', 'L', 8, 13, 0, NULL, 2, 0, 3, 2, 0),
(152, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\n', 'P', 8, 21, 0, NULL, 2, 0, 3, 2, 0),
(153, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\n', 'L', 8, 21, 0, NULL, 2, 0, 3, 2, 0),
(154, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\n', 'P', 14, 43, 0, NULL, 2, 0, 3, 2, 0),
(155, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\n', 'L', 14, 43, 0, NULL, 2, 0, 3, 2, 0),
(156, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\n', 'P', 14, 45, 0, NULL, 2, 0, 3, 2, 0),
(157, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\n', 'L', 14, 45, 0, NULL, 2, 0, 3, 2, 0),
(158, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\n', 'P', 12, 39, 0, NULL, 2, 0, 3, 2, 0),
(159, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\n', 'L', 12, 39, 0, NULL, 2, 0, 3, 2, 0),
(160, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\n', 'L', 11, 36, 0, NULL, 2, 0, 3, 2, 0),
(161, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\n', 'P', 11, 36, 0, NULL, 2, 0, 3, 2, 0),
(162, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\n', 'P', 10, 29, 0, NULL, 2, 0, 3, 2, 3),
(163, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\n', 'P', 11, 34, 0, NULL, 2, 0, 3, 2, 0),
(164, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\n', 'L', 11, 34, 0, NULL, 2, 0, 3, 2, 0),
(165, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sasak terdiri dari:</p>\n', 'P', 13, 30, 0, NULL, 2, 0, 3, 2, 0),
(166, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sasak terdiri dari:</p>\n', 'L', 13, 30, 0, NULL, 2, 0, 3, 2, 0),
(167, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Rote terdiri dari:</p>\n', 'P', 13, 31, 0, NULL, 2, 7, 4, 2, 0),
(168, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Rote terdiri dari:</p>\n', 'L', 13, 31, 0, NULL, 2, 0, 3, 2, 0);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

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
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `gambar_product`
--
ALTER TABLE `gambar_product`
  ADD CONSTRAINT `gambar_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_metode`) REFERENCES `metode_bayar` (`id_metode`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_jenis_product`) REFERENCES `jenis_product` (`id_jenis_product`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
