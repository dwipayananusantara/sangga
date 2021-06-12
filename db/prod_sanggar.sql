-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2021 at 04:35 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwipayananusantara`
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
  `is_delete` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_product`
--

CREATE TABLE `gambar_product` (
  `id_gambar` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_product`
--

CREATE TABLE `jenis_product` (
  `id_jenis_product` int(11) NOT NULL,
  `nama_jenis_product` varchar(100) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `is_kembali` int(11) DEFAULT '0',
  `is_notif` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `dikembalikan` date DEFAULT NULL,
  `pengantaran` varchar(100) DEFAULT NULL,
  `is_rusak` int(11) DEFAULT '0',
  `keterangan_rusak` varchar(255) DEFAULT NULL,
  `ukuran` varchar(1) DEFAULT NULL,
  `is_delete` int(11) DEFAULT '0',
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
  `deskripsi` text,
  `gender` varchar(1) NOT NULL,
  `id_pulau` int(11) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `stock` bigint(20) DEFAULT NULL,
  `id_jenis_product` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id_pulau` int(11) NOT NULL,
  `nama_pulau` varchar(100) NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `is_verif` int(1) DEFAULT '0'
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
  MODIFY `id_jenis_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `les_tari`
--
ALTER TABLE `les_tari`
  MODIFY `id_less_tari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT;

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
