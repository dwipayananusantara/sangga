-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2021 at 03:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_sanggar`
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

--
-- Dumping data for table `detail_product`
--

INSERT INTO `detail_product` (`id_detail_product`, `id_product`, `kode_detail_product`, `nama_detail_product`, `is_delete`) VALUES
(22, 10, 'KELENGKAPAN', 'Rok', 0),
(23, 10, 'KELENGKAPAN', 'Sayap', 0),
(24, 10, 'KELENGKAPAN', 'Apok', 0),
(25, 10, 'KELENGKAPAN', 'Baju atas', 0),
(26, 10, 'KELENGKAPAN', 'Sabuk', 0),
(27, 10, 'KELENGKAPAN', 'Sampur', 0),
(28, 10, 'AKSESORIS', 'Siger', 0),
(29, 10, 'AKSESORIS', 'Garuda mungkur', 0),
(30, 10, 'AKSESORIS', 'Sesuping', 0),
(31, 10, 'AKSESORIS', 'Kilat bahu', 0),
(32, 10, 'AKSESORIS', 'Gelang', 0),
(33, 11, 'KELENGKAPAN', 'Rok', 0),
(34, 11, 'KELENGKAPAN', 'Sayap', 0),
(35, 11, 'KELENGKAPAN', 'Apok', 0),
(36, 11, 'KELENGKAPAN', 'Baju atas', 0),
(37, 11, 'KELENGKAPAN', 'Sabuk', 0),
(38, 11, 'KELENGKAPAN', 'Sampur', 0),
(39, 11, 'AKSESORIS', 'Siger', 0),
(40, 11, 'AKSESORIS', 'Garuda mungkur', 0),
(41, 11, 'AKSESORIS', 'Sesuping', 0),
(42, 11, 'AKSESORIS', 'Kilat bahu', 0),
(43, 11, 'AKSESORIS', 'Gelang', 0),
(44, 12, 'KELENGKAPAN', 'Kain saput prada', 0),
(45, 12, 'KELENGKAPAN', 'Stagen prada', 0),
(46, 12, 'KELENGKAPAN', 'Badong', 0),
(47, 12, 'KELENGKAPAN', 'Ampok-ampok', 0),
(48, 12, 'KELENGKAPAN', 'Gelang kana', 0),
(49, 12, 'AKSESORIS', 'Gelungan', 0),
(50, 12, 'AKSESORIS', 'Bunga jepun dan pucuk', 0),
(51, 12, 'AKSESORIS', 'Kembang goyang', 0),
(52, 12, 'AKSESORIS', 'Rumbing', 0),
(53, 13, 'KELENGKAPAN', 'Kain saput prada', 0),
(54, 13, 'KELENGKAPAN', 'Stagen prada', 0),
(55, 13, 'KELENGKAPAN', 'Badong', 0),
(56, 13, 'KELENGKAPAN', 'Ampok-ampok', 0),
(57, 13, 'KELENGKAPAN', 'Gelang kana', 0),
(58, 13, 'AKSESORIS', 'Gelungan', 0),
(59, 13, 'AKSESORIS', 'Bunga jepun dan pucuk', 0),
(60, 13, 'AKSESORIS', 'Kembang goyang', 0),
(61, 13, 'AKSESORIS', 'Rumbing', 0),
(62, 14, 'KELENGKAPAN', 'Selempang', 0),
(63, 14, 'KELENGKAPAN', 'Sabuk', 0),
(64, 14, 'KELENGKAPAN', 'Songket', 0),
(65, 14, 'KELENGKAPAN', 'Baju', 0),
(66, 14, 'KELENGKAPAN', 'Celana', 0),
(67, 14, 'AKSESORIS', 'Ikat kepala', 0),
(68, 15, 'KELENGKAPAN', 'Selempang', 0),
(69, 15, 'KELENGKAPAN', 'Sabuk', 0),
(70, 15, 'KELENGKAPAN', 'Songket', 0),
(71, 15, 'KELENGKAPAN', 'Baju', 0),
(72, 15, 'KELENGKAPAN', 'Celana', 0),
(73, 15, 'AKSESORIS', 'Ikat kepala', 0),
(74, 16, 'KELENGKAPAN', 'Badong', 0),
(75, 16, 'KELENGKAPAN', 'Gelang kana', 0),
(76, 16, 'KELENGKAPAN', 'Ampok-ampok', 0),
(77, 16, 'KELENGKAPAN', 'Rok', 0),
(78, 16, 'KELENGKAPAN', 'Sayap', 0),
(79, 16, 'KELENGKAPAN', 'Stagen prada', 0),
(80, 16, 'KELENGKAPAN', 'Tutup dada', 0),
(81, 16, 'AKSESORIS', 'Mahkota jambul', 0),
(82, 16, 'AKSESORIS', 'Bunga kamboja', 0),
(83, 17, 'KELENGKAPAN', 'Badong', 0),
(84, 17, 'KELENGKAPAN', 'Gelang kana', 0),
(85, 17, 'KELENGKAPAN', 'Ampok-ampok', 0),
(86, 17, 'KELENGKAPAN', 'Rok', 0),
(87, 17, 'KELENGKAPAN', 'Sayap', 0),
(88, 17, 'KELENGKAPAN', 'Stagen prada', 0),
(89, 17, 'KELENGKAPAN', 'Tutup dada', 0),
(90, 17, 'AKSESORIS', 'Mahkota jambul', 0),
(91, 17, 'AKSESORIS', 'Bunga kamboja', 0),
(92, 18, 'KELENGKAPAN', 'Pakaian tari gandrung', 0),
(93, 18, 'KELENGKAPAN', 'Bawahan', 0),
(94, 18, 'KELENGKAPAN', 'Sampur', 0),
(95, 18, 'AKSESORIS', 'Omprok', 0),
(96, 18, 'AKSESORIS', 'Kipas', 0),
(97, 19, 'KELENGKAPAN', 'Pakaian tari gandrung', 0),
(98, 19, 'KELENGKAPAN', 'Bawahan', 0),
(99, 19, 'KELENGKAPAN', 'Sampur', 0),
(100, 19, 'AKSESORIS', 'Omprok', 0),
(101, 19, 'AKSESORIS', 'Kipas', 0),
(102, 20, 'KELENGKAPAN', 'Kain', 0),
(103, 20, 'KELENGKAPAN', 'Tapih', 0),
(104, 20, 'KELENGKAPAN', 'Pending prada jepang', 0),
(105, 20, 'KELENGKAPAN', 'Badong', 0),
(106, 20, 'KELENGKAPAN', 'Tutup dada', 0),
(107, 20, 'KELENGKAPAN', 'Strapless prada', 0),
(108, 20, 'KELENGKAPAN', 'Selendang', 0),
(109, 20, 'AKSESORIS', 'Gelungan', 0),
(110, 20, 'AKSESORIS', 'Gelang', 0),
(111, 20, 'AKSESORIS', 'Subeng/giwang', 0),
(112, 21, 'KELENGKAPAN', 'Kain', 0),
(113, 21, 'KELENGKAPAN', 'Tapih', 0),
(114, 21, 'KELENGKAPAN', 'Pending prada jepang', 0),
(115, 21, 'KELENGKAPAN', 'Badong', 0),
(116, 21, 'KELENGKAPAN', 'Tutup dada', 0),
(117, 21, 'KELENGKAPAN', 'Strapless prada', 0),
(118, 21, 'KELENGKAPAN', 'Selendang', 0),
(119, 21, 'AKSESORIS', 'Gelungan', 0),
(120, 21, 'AKSESORIS', 'Gelang', 0),
(121, 21, 'AKSESORIS', 'Subeng/giwang', 0),
(122, 22, 'KELENGKAPAN', 'Kain prada', 0),
(123, 22, 'KELENGKAPAN', 'Sabuk lilit', 0),
(124, 22, 'KELENGKAPAN', 'Tutup dada', 0),
(125, 22, 'KELENGKAPAN', 'Selendang', 0),
(126, 22, 'KELENGKAPAN', 'Ampok-ampok', 0),
(127, 22, 'KELENGKAPAN', 'Badong', 0),
(128, 22, 'KELENGKAPAN', 'Cemara', 0),
(129, 22, 'AKSESORIS', 'Gelang kana', 0),
(130, 22, 'AKSESORIS', 'Bunga perak', 0),
(131, 22, 'AKSESORIS', 'Mahkota', 0),
(132, 23, 'KELENGKAPAN', 'Sabuk lilit', 0),
(133, 23, 'KELENGKAPAN', 'Ampok-ampok', 0),
(134, 23, 'KELENGKAPAN', 'Kain prada', 0),
(135, 23, 'KELENGKAPAN', 'Badong', 0),
(136, 23, 'KELENGKAPAN', 'Tutup dada', 0),
(137, 23, 'AKSESORIS', 'Mahkota', 0),
(138, 23, 'AKSESORIS', 'Bunga gonjer', 0),
(139, 23, 'AKSESORIS', 'Rumbing', 0),
(140, 23, 'AKSESORIS', 'Kipas', 0),
(141, 24, 'KELENGKAPAN', 'Cadar manik', 0),
(142, 24, 'KELENGKAPAN', 'Baju', 0),
(143, 24, 'KELENGKAPAN', 'Celana', 0),
(144, 24, 'KELENGKAPAN', 'Gesper', 0),
(145, 24, 'KELENGKAPAN', 'Silang dada', 0),
(146, 24, 'KELENGKAPAN', 'Apok-apok', 0),
(147, 24, 'AKSESORIS', 'Hiasan bunga', 0),
(148, 24, 'AKSESORIS', 'Cepol', 0),
(149, 24, 'AKSESORIS', 'Sumpit sepasang', 0),
(150, 24, 'AKSESORIS', 'Anting', 0),
(151, 24, 'AKSESORIS', 'Bunga belakang', 0),
(152, 25, 'KELENGKAPAN', 'Cadar manik', 0),
(153, 25, 'KELENGKAPAN', 'Baju', 0),
(154, 25, 'KELENGKAPAN', 'Celana', 0),
(155, 25, 'KELENGKAPAN', 'Gesper', 0),
(156, 25, 'KELENGKAPAN', 'Silang dada', 0),
(157, 25, 'KELENGKAPAN', 'Apok-apok', 0),
(158, 25, 'AKSESORIS', 'Hiasan bunga', 0),
(159, 25, 'AKSESORIS', 'Cepol', 0),
(160, 25, 'AKSESORIS', 'Sumpit sepasang', 0),
(161, 25, 'AKSESORIS', 'Anting', 0),
(162, 25, 'AKSESORIS', 'Bunga belakang', 0),
(163, 26, 'KELENGKAPAN', 'Celana', 0),
(164, 26, 'KELENGKAPAN', 'Ikat pinggang', 0),
(165, 26, 'KELENGKAPAN', 'Sempyok', 0),
(166, 26, 'KELENGKAPAN', 'Selendang', 0),
(167, 26, 'AKSESORIS', 'Kudaan', 0),
(168, 26, 'AKSESORIS', 'Udeng', 0),
(169, 26, 'AKSESORIS', 'Gelang tangan dan kaki', 0),
(170, 27, 'KELENGKAPAN', 'Celana', 0),
(171, 27, 'KELENGKAPAN', 'Ikat pinggang', 0),
(172, 27, 'KELENGKAPAN', 'Sempyok', 0),
(173, 27, 'KELENGKAPAN', 'Selendang', 0),
(174, 27, 'AKSESORIS', 'Kudaan', 0),
(175, 27, 'AKSESORIS', 'Udeng', 0),
(176, 27, 'AKSESORIS', 'Gelang tangan dan kaki', 0),
(177, 28, 'KELENGKAPAN', 'Badong', 0),
(178, 28, 'KELENGKAPAN', 'Tutup dada', 0),
(179, 28, 'KELENGKAPAN', 'Kain prada', 0),
(180, 28, 'KELENGKAPAN', 'Sabuk', 0),
(181, 28, 'KELENGKAPAN', 'Ampok-ampok', 0),
(182, 28, 'KELENGKAPAN', 'Kain sayap', 0),
(183, 28, 'AKSESORIS', 'Gelungan', 0),
(184, 28, 'AKSESORIS', 'Bunga', 0),
(185, 29, 'KELENGKAPAN', 'Badong', 0),
(186, 29, 'KELENGKAPAN', 'Tutup dada', 0),
(187, 29, 'KELENGKAPAN', 'Kain prada', 0),
(188, 29, 'KELENGKAPAN', 'Sabuk', 0),
(189, 29, 'KELENGKAPAN', 'Ampok-ampok', 0),
(190, 29, 'KELENGKAPAN', 'Kain sayap', 0),
(191, 29, 'AKSESORIS', 'Gelungan', 0),
(192, 29, 'AKSESORIS', 'Bunga', 0),
(193, 30, 'KELENGKAPAN', 'Kain prada', 0),
(194, 30, 'KELENGKAPAN', 'Sabuk', 0),
(195, 30, 'KELENGKAPAN', 'Baju kebaya', 0),
(196, 30, 'KELENGKAPAN', 'Ikat pinggang', 0),
(197, 30, 'KELENGKAPAN', 'Selendang', 0),
(198, 30, 'AKSESORIS', 'Oncer', 0),
(199, 30, 'AKSESORIS', 'Kipas', 0),
(200, 30, 'AKSESORIS', 'Gelungan', 0),
(201, 30, 'AKSESORIS', 'Subeng/giwang', 0),
(202, 31, 'KELENGKAPAN', 'Kain prada', 0),
(203, 31, 'KELENGKAPAN', 'Sabuk', 0),
(204, 31, 'KELENGKAPAN', 'Baju kebaya', 0),
(205, 31, 'KELENGKAPAN', 'Ikat pinggang', 0),
(206, 31, 'KELENGKAPAN', 'Selendang', 0),
(207, 31, 'AKSESORIS', 'Oncer', 0),
(208, 31, 'AKSESORIS', 'Kipas', 0),
(209, 31, 'AKSESORIS', 'Gelungan', 0),
(210, 31, 'AKSESORIS', 'Subeng/giwang', 0),
(211, 32, 'KELENGKAPAN', 'Baju Pahang', 0),
(212, 32, 'KELENGKAPAN', 'Lipa’ sa’be', 0),
(213, 32, 'AKSESORIS', 'Gelang tangan', 0),
(214, 32, 'AKSESORIS', 'Kalung', 0),
(215, 32, 'AKSESORIS', 'Hiasan kepala', 0),
(216, 33, 'KELENGKAPAN', 'Baju Pahang', 0),
(217, 33, 'KELENGKAPAN', 'Lipa’ sa’be', 0),
(218, 33, 'AKSESORIS', 'Gelang tangan', 0),
(219, 33, 'AKSESORIS', 'Kalung', 0),
(220, 33, 'AKSESORIS', 'Hiasan kepala', 0),
(221, 34, 'KELENGKAPAN', 'Baju lengan panjang', 0),
(222, 34, 'KELENGKAPAN', 'Tutup dada', 0),
(223, 34, 'KELENGKAPAN', 'Ampok-ampok', 0),
(224, 34, 'KELENGKAPAN', 'Lamak', 0),
(225, 34, 'KELENGKAPAN', 'Simping', 0),
(226, 34, 'KELENGKAPAN', 'Badong', 0),
(227, 34, 'KELENGKAPAN', 'Kain prada', 0),
(228, 34, 'KELENGKAPAN', 'Stagen prada', 0),
(229, 34, 'AKSESORIS', 'Kipas', 0),
(230, 34, 'AKSESORIS', 'Gelungan', 0),
(231, 34, 'AKSESORIS', 'Subeng/giwang', 0),
(232, 34, 'AKSESORIS', 'Gelang kana', 0),
(233, 35, 'KELENGKAPAN', 'Baju lengan panjang', 0),
(234, 35, 'KELENGKAPAN', 'Tutup dada', 0),
(235, 35, 'KELENGKAPAN', 'Ampok-ampok', 0),
(236, 35, 'KELENGKAPAN', 'Lamak', 0),
(237, 35, 'KELENGKAPAN', 'Simping', 0),
(238, 35, 'KELENGKAPAN', 'Badong', 0),
(239, 35, 'KELENGKAPAN', 'Kain prada', 0),
(240, 35, 'KELENGKAPAN', 'Stagen prada', 0),
(241, 35, 'AKSESORIS', 'Kipas', 0),
(242, 35, 'AKSESORIS', 'Gelungan', 0),
(243, 35, 'AKSESORIS', 'Subeng/giwang', 0),
(244, 35, 'AKSESORIS', 'Gelang kana', 0),
(256, 37, 'KELENGKAPAN', 'Badong', 0),
(257, 37, 'KELENGKAPAN', 'Awir', 0),
(258, 37, 'KELENGKAPAN', 'Lamak', 0),
(259, 37, 'KELENGKAPAN', 'Celana panjang', 0),
(260, 37, 'KELENGKAPAN', 'Baju beludru', 0),
(261, 37, 'KELENGKAPAN', 'Stewel', 0),
(262, 37, 'KELENGKAPAN', 'Kamen putih', 0),
(263, 37, 'KELENGKAPAN', 'Angkeb tundu', 0),
(264, 37, 'AKSESORIS', 'Gelang kana', 0),
(265, 37, 'AKSESORIS', 'Gelungan', 0),
(266, 37, 'AKSESORIS', 'Keris', 0),
(267, 38, 'KELENGKAPAN', 'Baju prada lengan panjang', 0),
(268, 38, 'KELENGKAPAN', 'Simping', 0),
(269, 38, 'KELENGKAPAN', 'Tutup dada', 0),
(270, 38, 'KELENGKAPAN', 'Kain prada', 0),
(271, 38, 'KELENGKAPAN', 'Badong', 0),
(272, 38, 'KELENGKAPAN', 'Ampok-ampok', 0),
(273, 38, 'KELENGKAPAN', 'Stagen prada', 0),
(274, 38, 'AKSESORIS', 'Udeng', 0),
(275, 38, 'AKSESORIS', 'Hiasan bunga', 0),
(276, 38, 'AKSESORIS', 'Rumbing', 0),
(277, 38, 'AKSESORIS', 'Kipas', 0),
(278, 39, 'KELENGKAPAN', 'Baju prada lengan panjang', 0),
(279, 39, 'KELENGKAPAN', 'Simping', 0),
(280, 39, 'KELENGKAPAN', 'Tutup dada', 0),
(281, 39, 'KELENGKAPAN', 'Kain prada', 0),
(282, 39, 'KELENGKAPAN', 'Badong', 0),
(283, 39, 'KELENGKAPAN', 'Ampok-ampok', 0),
(284, 39, 'KELENGKAPAN', 'Stagen prada', 0),
(285, 39, 'AKSESORIS', 'Udeng', 0),
(286, 39, 'AKSESORIS', 'Hiasan bunga', 0),
(287, 39, 'AKSESORIS', 'Rumbing', 0),
(288, 39, 'AKSESORIS', 'Kipas', 0),
(289, 40, 'KELENGKAPAN', 'Toka-toka', 0),
(290, 40, 'KELENGKAPAN', 'Sarung songket', 0),
(291, 40, 'KELENGKAPAN', 'Kebaya', 0),
(292, 40, 'KELENGKAPAN', 'Pending', 0),
(293, 40, 'KELENGKAPAN', 'Selempang', 0),
(294, 40, 'AKSESORIS', 'Sunting melayu', 0),
(295, 40, 'AKSESORIS', 'Anting', 0),
(296, 40, 'AKSESORIS', 'Baki kapur sirih', 0),
(297, 41, 'KELENGKAPAN', 'Toka-toka', 0),
(298, 41, 'KELENGKAPAN', 'Sarung songket', 0),
(299, 41, 'KELENGKAPAN', 'Kebaya', 0),
(300, 41, 'KELENGKAPAN', 'Pending', 0),
(301, 41, 'KELENGKAPAN', 'Selempang', 0),
(302, 41, 'AKSESORIS', 'Sunting melayu', 0),
(303, 41, 'AKSESORIS', 'Anting', 0),
(304, 41, 'AKSESORIS', 'Baki kapur sirih', 0),
(305, 42, 'KELENGKAPAN', 'Ikat kepala', 0),
(306, 42, 'KELENGKAPAN', 'Celana galembong', 0),
(307, 42, 'KELENGKAPAN', 'Baju kurung', 0),
(308, 42, 'KELENGKAPAN', 'Iket pinggang', 0),
(309, 42, 'AKSESORIS', 'Tengkuluk tanduk', 0),
(310, 42, 'AKSESORIS', 'Piring', 0),
(311, 43, 'KELENGKAPAN', 'Ikat kepala', 0),
(312, 43, 'KELENGKAPAN', 'Celana galembong', 0),
(313, 43, 'KELENGKAPAN', 'Baju kurung', 0),
(314, 43, 'KELENGKAPAN', 'Iket pinggang', 0),
(315, 43, 'AKSESORIS', 'Tengkuluk tanduk', 0),
(316, 43, 'AKSESORIS', 'Piring', 0),
(317, 44, 'KELENGKAPAN', 'Kebaya', 0),
(318, 44, 'KELENGKAPAN', 'Kain batik', 0),
(319, 44, 'KELENGKAPAN', 'Kemben', 0),
(320, 44, 'AKSESORIS', 'Gelang tangan dan kaki', 0),
(321, 44, 'AKSESORIS', 'Kalung', 0),
(322, 44, 'AKSESORIS', 'Sanggul tengkuk samping', 0),
(323, 44, 'AKSESORIS', 'Bunga mawar dan kembang goyang', 0),
(324, 44, 'AKSESORIS', 'Anting', 0),
(325, 44, 'AKSESORIS', 'Kendi', 0),
(326, 45, 'KELENGKAPAN', 'Kebaya', 0),
(327, 45, 'KELENGKAPAN', 'Kain batik', 0),
(328, 45, 'KELENGKAPAN', 'Kemben', 0),
(329, 45, 'AKSESORIS', 'Gelang tangan dan kaki', 0),
(330, 45, 'AKSESORIS', 'Kalung', 0),
(331, 45, 'AKSESORIS', 'Sanggul tengkuk samping', 0),
(332, 45, 'AKSESORIS', 'Bunga mawar dan kembang goyang', 0),
(333, 45, 'AKSESORIS', 'Anting', 0),
(334, 45, 'AKSESORIS', 'Kendi', 0),
(335, 46, 'KELENGKAPAN', 'Selendang', 0),
(336, 46, 'KELENGKAPAN', 'Jarik parang', 0),
(337, 46, 'KELENGKAPAN', 'Dodotan', 0),
(338, 46, 'KELENGKAPAN', 'Sabuk pending', 0),
(339, 46, 'AKSESORIS', 'Kelat bahu', 0),
(340, 46, 'AKSESORIS', 'Kepala centhung', 0),
(341, 46, 'AKSESORIS', 'Garuda mungkur', 0),
(342, 46, 'AKSESORIS', 'Sisir jeram sejajar', 0),
(343, 46, 'AKSESORIS', 'Cundhuk mentul', 0),
(344, 46, 'AKSESORIS', 'Tiba dada', 0),
(345, 47, 'KELENGKAPAN', 'Selendang', 0),
(346, 47, 'KELENGKAPAN', 'Jarik parang', 0),
(347, 47, 'KELENGKAPAN', 'Dodotan', 0),
(348, 47, 'KELENGKAPAN', 'Sabuk pending', 0),
(349, 47, 'AKSESORIS', 'Kelat bahu', 0),
(350, 47, 'AKSESORIS', 'Kepala centhung', 0),
(351, 47, 'AKSESORIS', 'Garuda mungkur', 0),
(352, 47, 'AKSESORIS', 'Sisir jeram sejajar', 0),
(353, 47, 'AKSESORIS', 'Cundhuk mentul', 0),
(354, 47, 'AKSESORIS', 'Tiba dada', 0),
(355, 48, 'KELENGKAPAN', 'Kain sarung', 0),
(356, 48, 'KELENGKAPAN', 'Kain selimut', 0),
(357, 48, 'KELENGKAPAN', 'Ikat kepala', 0),
(358, 48, 'KELENGKAPAN', 'Ikat pinggang', 0),
(359, 48, 'AKSESORIS', 'Kalung', 0),
(360, 48, 'AKSESORIS', 'Gelang', 0),
(361, 49, 'KELENGKAPAN', 'Kain sarung', 0),
(362, 49, 'KELENGKAPAN', 'Kain selimut', 0),
(363, 49, 'KELENGKAPAN', 'Ikat kepala', 0),
(364, 49, 'KELENGKAPAN', 'Ikat pinggang', 0),
(365, 49, 'AKSESORIS', 'Kalung', 0),
(366, 49, 'AKSESORIS', 'Gelang', 0),
(367, 50, 'KELENGKAPAN', 'Kandaure', 0),
(368, 50, 'KELENGKAPAN', 'sa’pi’ ulu’', 0),
(369, 50, 'KELENGKAPAN', 'Tali tarrung', 0),
(370, 50, 'KELENGKAPAN', 'Baju', 0),
(371, 50, 'KELENGKAPAN', 'Bawahan', 0),
(372, 50, 'KELENGKAPAN', 'Ikat kepada', 0),
(373, 50, 'AKSESORIS', 'Keris', 0),
(374, 50, 'AKSESORIS', 'Anting', 0),
(375, 50, 'AKSESORIS', 'Gelang', 0),
(376, 51, 'KELENGKAPAN', 'Kandaure', 0),
(377, 51, 'KELENGKAPAN', 'sa’pi’ ulu’', 0),
(378, 51, 'KELENGKAPAN', 'Tali tarrung', 0),
(379, 51, 'KELENGKAPAN', 'Baju', 0),
(380, 51, 'KELENGKAPAN', 'Bawahan', 0),
(381, 51, 'KELENGKAPAN', 'Ikat kepada', 0),
(382, 51, 'AKSESORIS', 'Keris', 0),
(383, 51, 'AKSESORIS', 'Anting', 0),
(384, 51, 'AKSESORIS', 'Gelang', 0),
(385, 52, 'KELENGKAPAN', 'Rok', 0),
(386, 52, 'KELENGKAPAN', 'Sabuk', 0),
(387, 52, 'KELENGKAPAN', 'Ikat kepala', 0),
(388, 52, 'AKSESORIS', 'Ulos', 0),
(389, 53, 'KELENGKAPAN', 'Rok', 0),
(390, 53, 'KELENGKAPAN', 'Sabuk', 0),
(391, 53, 'KELENGKAPAN', 'Ikat kepala', 0),
(392, 53, 'AKSESORIS', 'Ulos', 0),
(393, 54, 'KELENGKAPAN', 'Kemben', 0),
(394, 54, 'KELENGKAPAN', 'Kebaya', 0),
(395, 54, 'KELENGKAPAN', 'Rok', 0),
(396, 54, 'KELENGKAPAN', 'Selendang', 0),
(397, 54, 'AKSESORIS', 'Kipas', 0),
(398, 54, 'AKSESORIS', 'Mahkota', 0),
(405, 56, 'KELENGKAPAN', 'Badong', 0),
(406, 56, 'KELENGKAPAN', 'Kain prada', 0),
(407, 56, 'KELENGKAPAN', 'Tutup dada', 0),
(408, 56, 'KELENGKAPAN', 'Ampok-ampok', 0),
(409, 56, 'KELENGKAPAN', 'Stagen prada', 0),
(410, 56, 'AKSESORIS', 'Gelungan', 0),
(411, 56, 'AKSESORIS', 'Rumbing', 0),
(412, 56, 'AKSESORIS', 'Gelang kana', 0),
(413, 56, 'AKSESORIS', 'Bunga', 0),
(414, 57, 'KELENGKAPAN', 'Badong', 0),
(415, 57, 'KELENGKAPAN', 'Kain prada', 0),
(416, 57, 'KELENGKAPAN', 'Tutup dada', 0),
(417, 57, 'KELENGKAPAN', 'Ampok-ampok', 0),
(418, 57, 'KELENGKAPAN', 'Stagen prada', 0),
(419, 57, 'AKSESORIS', 'Gelungan', 0),
(420, 57, 'AKSESORIS', 'Rumbing', 0),
(421, 57, 'AKSESORIS', 'Gelang kana', 0),
(422, 57, 'AKSESORIS', 'Bunga', 0),
(423, 58, 'KELENGKAPAN', 'Kain prada', 0),
(424, 58, 'KELENGKAPAN', 'Stagen prada', 0),
(425, 58, 'KELENGKAPAN', 'Sabuk', 0),
(426, 58, 'KELENGKAPAN', 'Tutup dada', 0),
(427, 58, 'KELENGKAPAN', 'Selendang', 0),
(428, 58, 'KELENGKAPAN', 'Badong kulit', 0),
(429, 58, 'AKSESORIS', 'Mahkota bunga', 0),
(430, 58, 'AKSESORIS', 'Giwang', 0),
(431, 58, 'AKSESORIS', 'Gelang kana', 0),
(453, 63, 'AKSESORIS', 'test', 0),
(465, 67, 'AKSESORIS', 't', 0),
(519, 61, 'KELENGKAPAN', 'Selop', 0),
(520, 61, 'KELENGKAPAN', 'Kain Batik', 0),
(521, 61, 'AKSESORIS', 'Kalung Sungsun', 0),
(522, 61, 'AKSESORIS', 'Paes Prada', 0),
(523, 61, 'AKSESORIS', 'Citak', 0),
(524, 61, 'AKSESORIS', 'Cunduk Mentul', 0),
(525, 60, 'KELENGKAPAN', 'Beskap', 0),
(526, 60, 'KELENGKAPAN', 'Selop', 0),
(527, 60, 'KELENGKAPAN', 'Kain batik', 0),
(528, 60, 'AKSESORIS', 'Blangkon', 0),
(529, 60, 'AKSESORIS', 'Kalung melati', 0),
(530, 9, 'AKSESORIS', 'Kembang goyang susun mawar jepun', 0),
(531, 9, 'AKSESORIS', 'Subeng/giwang', 0),
(532, 9, 'AKSESORIS', 'Subal', 0),
(533, 9, 'AKSESORIS', 'Cemara', 0),
(534, 9, 'KELENGKAPAN', 'Selendang', 0),
(535, 9, 'KELENGKAPAN', 'Stagen prada', 0),
(536, 9, 'KELENGKAPAN', 'Kamen prada', 0),
(544, 59, 'AKSESORIS', 'Gelang kana', 0),
(545, 59, 'AKSESORIS', 'Giwang', 0),
(546, 59, 'AKSESORIS', 'Mahkota bunga', 0),
(547, 59, 'KELENGKAPAN', 'Badong kulit', 0),
(548, 59, 'KELENGKAPAN', 'Selendang', 0),
(549, 59, 'KELENGKAPAN', 'Tutup dada', 0),
(550, 59, 'KELENGKAPAN', 'Sabuk', 0),
(551, 59, 'KELENGKAPAN', 'Stagen prada', 0),
(552, 59, 'KELENGKAPAN', 'Kain prada', 0),
(559, 55, 'KELENGKAPAN', 'Kemben', 0),
(560, 55, 'KELENGKAPAN', 'Kebaya', 0),
(561, 55, 'KELENGKAPAN', 'Rok', 0),
(562, 55, 'KELENGKAPAN', 'Selendang', 0),
(563, 55, 'AKSESORIS', 'Kipas', 0),
(564, 55, 'AKSESORIS', 'Mahkota', 0),
(565, 36, 'AKSESORIS', 'Keris', 0),
(566, 36, 'AKSESORIS', 'Gelungan', 0),
(567, 36, 'AKSESORIS', 'Gelang kana', 0),
(568, 36, 'KELENGKAPAN', 'Angkeb tundu', 0),
(569, 36, 'KELENGKAPAN', 'Kamen putih', 0),
(570, 36, 'KELENGKAPAN', 'Stewel', 0),
(571, 36, 'KELENGKAPAN', 'Baju beludru', 0),
(572, 36, 'KELENGKAPAN', 'Celana panjang', 0),
(573, 36, 'KELENGKAPAN', 'Lamak', 0),
(574, 36, 'KELENGKAPAN', 'Awir', 0),
(575, 36, 'KELENGKAPAN', 'Badong', 0),
(594, 72, 'KELENGKAPAN', 'selendang', 0),
(595, 72, 'KELENGKAPAN', 'stagen prada', 0),
(596, 72, 'KELENGKAPAN', 'kain prada', 0),
(597, 72, 'AKSESORIS', 'mahkota bunga', 0),
(598, 72, 'AKSESORIS', 'giwang', 0),
(599, 72, 'AKSESORIS', 'subal', 0),
(600, 72, 'AKSESORIS', 'cemara', 0),
(893, 92, 'AKSESORIS', 'gelang kaki krincing', 0),
(894, 92, 'AKSESORIS', 'keris', 0),
(895, 92, 'AKSESORIS', 'ikat kepala', 0),
(896, 92, 'KELENGKAPAN', 'selendang', 0),
(897, 92, 'KELENGKAPAN', 'celana', 0),
(898, 92, 'KELENGKAPAN', 'sarung batik', 0),
(899, 92, 'KELENGKAPAN', 'stagen', 0),
(900, 92, 'KELENGKAPAN', 'baju lengan panjang', 0),
(901, 91, 'AKSESORIS', 'gelang kaki krincing', 0),
(902, 91, 'AKSESORIS', 'keris', 0),
(903, 91, 'AKSESORIS', 'ikat kepala', 0),
(904, 91, 'KELENGKAPAN', 'selendang', 0),
(905, 91, 'KELENGKAPAN', 'celana', 0),
(906, 91, 'KELENGKAPAN', 'sarung batik', 0),
(907, 91, 'KELENGKAPAN', 'stagen', 0),
(908, 91, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1054, 102, 'KELENGKAPAN', 'selendang', 0),
(1055, 102, 'KELENGKAPAN', 'jarik panjang', 0),
(1056, 102, 'KELENGKAPAN', 'dodotan', 0),
(1057, 102, 'KELENGKAPAN', 'sabuk pending', 0),
(1058, 102, 'AKSESORIS', 'kelat bahu', 0),
(1059, 102, 'AKSESORIS', 'kepala centhung', 0),
(1060, 102, 'AKSESORIS', 'garuda mungkur', 0),
(1061, 102, 'AKSESORIS', 'sisir jeram sejajar', 0),
(1062, 102, 'AKSESORIS', 'cunduk mentul', 0),
(1063, 102, 'AKSESORIS', 'tiba dada', 0),
(1064, 103, 'KELENGKAPAN', 'kain sarung', 0),
(1065, 103, 'KELENGKAPAN', 'kain selimut', 0),
(1066, 103, 'KELENGKAPAN', 'ikat kepala', 0),
(1067, 103, 'KELENGKAPAN', 'ikat pinggang', 0),
(1068, 103, 'AKSESORIS', 'kalung', 0),
(1069, 103, 'AKSESORIS', 'gelang', 0),
(1070, 104, 'KELENGKAPAN', 'kandaure', 0),
(1071, 104, 'KELENGKAPAN', 'sa\'pi\' ulu\'', 0),
(1072, 104, 'KELENGKAPAN', 'tali tarrung', 0),
(1073, 104, 'KELENGKAPAN', 'baju', 0),
(1074, 104, 'KELENGKAPAN', 'bawahan', 0),
(1075, 104, 'KELENGKAPAN', 'ikat kepala', 0),
(1076, 104, 'AKSESORIS', 'keris', 0),
(1077, 104, 'AKSESORIS', 'anting', 0),
(1078, 104, 'AKSESORIS', 'gelang', 0),
(1079, 105, 'KELENGKAPAN', 'kebaya', 0),
(1080, 105, 'KELENGKAPAN', 'rok', 0),
(1081, 105, 'KELENGKAPAN', 'sabuk', 0),
(1082, 105, 'KELENGKAPAN', 'ikat kepala', 0),
(1083, 105, 'AKSESORIS', 'ulos', 0),
(1084, 106, 'KELENGKAPAN', 'baju lonceng', 0),
(1085, 106, 'KELENGKAPAN', 'kemben satin', 0),
(1086, 106, 'KELENGKAPAN', 'selendang', 0),
(1087, 106, 'KELENGKAPAN', 'pending', 0),
(1088, 106, 'AKSESORIS', 'hiasan dada', 0),
(1089, 106, 'AKSESORIS', 'kipas', 0),
(1090, 106, 'AKSESORIS', 'giwang', 0),
(1091, 106, 'AKSESORIS', 'hiasan kepala', 0),
(1092, 107, 'KELENGKAPAN', 'badong', 0),
(1093, 107, 'KELENGKAPAN', 'kain prada', 0),
(1094, 107, 'KELENGKAPAN', 'tutup dada', 0),
(1095, 107, 'KELENGKAPAN', 'ampok-ampok', 0),
(1096, 107, 'KELENGKAPAN', 'stagen prada', 0),
(1097, 107, 'AKSESORIS', 'gelungan', 0),
(1098, 107, 'AKSESORIS', 'rumbing', 0),
(1099, 107, 'AKSESORIS', 'gelang kana', 0),
(1100, 107, 'AKSESORIS', 'bunga', 0),
(1101, 108, 'KELENGKAPAN', 'kain prada', 0),
(1102, 108, 'KELENGKAPAN', 'stagen prada', 0),
(1103, 108, 'KELENGKAPAN', 'sabuk', 0),
(1104, 108, 'KELENGKAPAN', 'tutup dada', 0),
(1105, 108, 'KELENGKAPAN', 'selendang', 0),
(1106, 108, 'KELENGKAPAN', 'badong kulit', 0),
(1107, 108, 'AKSESORIS', 'mahkota bunga', 0),
(1108, 108, 'AKSESORIS', 'giwang', 0),
(1109, 108, 'AKSESORIS', 'gelang kana', 0),
(1110, 109, 'KELENGKAPAN', 'baju', 0),
(1111, 109, 'KELENGKAPAN', 'celana', 0),
(1112, 109, 'KELENGKAPAN', 'rampek', 0),
(1113, 109, 'KELENGKAPAN', 'draperi', 0),
(1114, 109, 'KELENGKAPAN', 'slepe', 0),
(1115, 109, 'AKSESORIS', 'kalung kace', 0),
(1116, 109, 'AKSESORIS', 'irah-irahan', 0),
(1117, 109, 'AKSESORIS', 'sumping', 0),
(1118, 109, 'AKSESORIS', 'klat bahu', 0),
(1119, 109, 'AKSESORIS', 'subeng', 0),
(1120, 109, 'AKSESORIS', 'binggel', 0),
(1121, 109, 'AKSESORIS', 'gelang', 0),
(1122, 110, 'KELENGKAPAN', 'celana', 0),
(1123, 110, 'KELENGKAPAN', 'set kostum barong', 0),
(1124, 110, 'KELENGKAPAN', 'topeng kepala barong', 0),
(1125, 110, 'KELENGKAPAN', 'badong', 0),
(1126, 111, 'KELENGKAPAN', 'kamen prada', 0),
(1127, 111, 'KELENGKAPAN', 'sabuk prada', 0),
(1128, 111, 'KELENGKAPAN', 'baju rompi', 0),
(1129, 111, 'KELENGKAPAN', 'badong', 0),
(1130, 111, 'KELENGKAPAN', 'ampok-ampok', 0),
(1131, 111, 'AKSESORIS', 'gelang kana', 0),
(1132, 111, 'AKSESORIS', 'udeng', 0),
(1133, 111, 'AKSESORIS', 'hiasan bunga', 0),
(1134, 111, 'AKSESORIS', 'tombak', 0),
(1142, 113, 'KELENGKAPAN', 'ikat pinggang', 0),
(1143, 113, 'KELENGKAPAN', 'sinjang', 0),
(1144, 113, 'KELENGKAPAN', 'selendang', 0),
(1145, 113, 'KELENGKAPAN', 'sontog', 0),
(1146, 113, 'KELENGKAPAN', 'baju kutung', 0),
(1147, 113, 'AKSESORIS', 'sobrah', 0),
(1148, 113, 'AKSESORIS', 'sumping', 0),
(1149, 113, 'AKSESORIS', 'kedok', 0),
(1150, 113, 'AKSESORIS', 'dasi', 0),
(1151, 113, 'AKSESORIS', 'ikat', 0),
(1152, 113, 'AKSESORIS', 'kain ules', 0),
(1153, 114, 'KELENGKAPAN', 'jarik sogan prada', 0),
(1154, 114, 'KELENGKAPAN', 'selendang', 0),
(1155, 114, 'AKSESORIS', 'sasak palsu', 0),
(1156, 114, 'AKSESORIS', 'sanggul jawa', 0),
(1157, 114, 'AKSESORIS', 'kembang goyang', 0),
(1158, 114, 'AKSESORIS', 'klat bahu', 0),
(1159, 114, 'AKSESORIS', 'gelang', 0),
(1160, 114, 'AKSESORIS', 'giwang', 0),
(1161, 114, 'AKSESORIS', 'sirkam', 0),
(1162, 115, 'KELENGKAPAN', 'baju beludru payet', 0),
(1163, 115, 'KELENGKAPAN', 'rok batik', 0),
(1164, 115, 'KELENGKAPAN', 'pending beludru', 0),
(1165, 115, 'KELENGKAPAN', 'selendang', 0),
(1166, 115, 'AKSESORIS', 'irahan', 0),
(1167, 115, 'AKSESORIS', 'sumping', 0),
(1168, 115, 'AKSESORIS', 'klat bahu', 0),
(1169, 115, 'AKSESORIS', 'gelang', 0),
(1170, 116, 'KELENGKAPAN', 'baju beludru payet', 0),
(1171, 116, 'KELENGKAPAN', 'rok beludru payet', 0),
(1172, 116, 'AKSESORIS', 'mahkota', 0),
(1173, 116, 'AKSESORIS', 'anting manik', 0),
(1174, 116, 'AKSESORIS', 'gelang kaki krincing', 0),
(1175, 116, 'AKSESORIS', 'bulu burung', 0),
(1176, 117, 'KELENGKAPAN', 'baju kurung', 0),
(1177, 117, 'KELENGKAPAN', 'selendang', 0),
(1178, 117, 'KELENGKAPAN', 'rok batik', 0),
(1179, 117, 'AKSESORIS', 'hiasan kepala', 0),
(1180, 118, 'KELENGKAPAN', 'celana', 0),
(1181, 118, 'KELENGKAPAN', 'baju', 0),
(1182, 118, 'KELENGKAPAN', 'badong', 0),
(1183, 118, 'KELENGKAPAN', 'sabuk prada', 0),
(1184, 118, 'AKSESORIS', 'gelungan', 0),
(1185, 118, 'AKSESORIS', 'gelang kana', 0),
(1186, 118, 'AKSESORIS', 'rumbing', 0),
(1187, 119, 'KELENGKAPAN', 'kain prada', 0),
(1188, 119, 'KELENGKAPAN', 'sabuk prada', 0),
(1189, 119, 'KELENGKAPAN', 'ampok-ampok', 0),
(1190, 119, 'KELENGKAPAN', 'selendang', 0),
(1191, 119, 'KELENGKAPAN', 'tutup dada', 0),
(1192, 119, 'AKSESORIS', 'gelungan', 0),
(1193, 119, 'AKSESORIS', 'hiasan bunga', 0),
(1194, 119, 'AKSESORIS', 'giwang', 0),
(1195, 119, 'AKSESORIS', 'gelang kana', 0),
(1196, 119, 'AKSESORIS', 'kipas', 0),
(1197, 120, 'KELENGKAPAN', 'badong', 0),
(1198, 120, 'KELENGKAPAN', 'celana panjang', 0),
(1199, 120, 'KELENGKAPAN', 'sabuk', 0),
(1200, 120, 'KELENGKAPAN', 'baju beludru', 0),
(1201, 120, 'KELENGKAPAN', 'stewel', 0),
(1202, 120, 'KELENGKAPAN', 'kamen putih', 0),
(1203, 120, 'KELENGKAPAN', 'angkeb tundu', 0),
(1204, 120, 'KELENGKAPAN', 'angkeb pale', 0),
(1205, 120, 'KELENGKAPAN', 'sabuk', 0),
(1206, 120, 'KELENGKAPAN', 'saput metris', 0),
(1207, 120, 'KELENGKAPAN', 'semayut', 0),
(1208, 120, 'AKSESORIS', 'gelang kana', 0),
(1209, 120, 'AKSESORIS', 'gelungan', 0),
(1210, 120, 'AKSESORIS', 'keris', 0),
(1211, 120, 'AKSESORIS', 'topeng', 0),
(1227, 122, 'KELENGKAPAN', 'mahkota', 0),
(1228, 122, 'KELENGKAPAN', 'badong', 0),
(1229, 122, 'KELENGKAPAN', 'tutup dada', 0),
(1230, 122, 'KELENGKAPAN', 'lamak', 0),
(1231, 122, 'KELENGKAPAN', 'ampok-ampok', 0),
(1232, 122, 'KELENGKAPAN', 'kain prada', 0),
(1233, 122, 'AKSESORIS', 'gelang kana', 0),
(1234, 123, 'KELENGKAPAN', 'badong', 0),
(1235, 123, 'KELENGKAPAN', 'sabuk prada', 0),
(1236, 123, 'KELENGKAPAN', 'ampok-ampok', 0),
(1237, 123, 'KELENGKAPAN', 'tutup dada', 0),
(1238, 123, 'KELENGKAPAN', 'kain prada', 0),
(1239, 123, 'AKSESORIS', 'udeng', 0),
(1240, 123, 'AKSESORIS', 'gelang kana', 0),
(1241, 123, 'AKSESORIS', 'gelungan', 0),
(1242, 124, 'KELENGKAPAN', 'rok rumbai', 0),
(1243, 124, 'KELENGKAPAN', 'baju hitam', 0),
(1244, 124, 'AKSESORIS', 'penutup kepala', 0),
(1245, 124, 'AKSESORIS', 'gelang rumbai', 0),
(1246, 124, 'AKSESORIS', 'kalung', 0),
(1247, 124, 'AKSESORIS', 'tifa', 0),
(1248, 125, 'KELENGKAPAN', 'baju taqoa', 0),
(1249, 125, 'KELENGKAPAN', 'celana panjang', 0),
(1250, 125, 'KELENGKAPAN', 'rok pendek warna warni', 0),
(1251, 125, 'AKSESORIS', 'tuala lipa', 0),
(1252, 125, 'AKSESORIS', 'salawaku', 0),
(1253, 125, 'AKSESORIS', 'ngana-ngana', 0),
(1280, 126, 'KELENGKAPAN', 'kain kamen', 0),
(1281, 126, 'KELENGKAPAN', 'kemeja putih', 0),
(1282, 126, 'KELENGKAPAN', 'umpal', 0),
(1283, 126, 'AKSESORIS', 'udeng', 0),
(1284, 126, 'AKSESORIS', 'sandal selop', 0),
(1285, 73, 'AKSESORIS', 'gelang', 0),
(1286, 73, 'AKSESORIS', 'klat bahu', 0),
(1287, 73, 'AKSESORIS', 'sesuping', 0),
(1288, 73, 'AKSESORIS', 'garuda mungkur', 0),
(1289, 73, 'AKSESORIS', 'siger', 0),
(1290, 73, 'KELENGKAPAN', 'sampur', 0),
(1291, 73, 'KELENGKAPAN', 'sabuk', 0),
(1292, 73, 'KELENGKAPAN', 'baju atas', 0),
(1293, 73, 'KELENGKAPAN', 'apok-apok', 0),
(1294, 73, 'KELENGKAPAN', 'sayap', 0),
(1295, 73, 'KELENGKAPAN', 'rok', 0),
(1296, 75, 'KELENGKAPAN', 'selempang', 0),
(1297, 75, 'KELENGKAPAN', 'sabuk', 0),
(1298, 75, 'KELENGKAPAN', 'songket', 0),
(1299, 75, 'KELENGKAPAN', 'baju atas', 0),
(1300, 75, 'KELENGKAPAN', 'celana', 0),
(1301, 75, 'AKSESORIS', 'ikat kepala', 0),
(1302, 74, 'KELENGKAPAN', 'kain prada', 0),
(1303, 74, 'KELENGKAPAN', 'stagen prada', 0),
(1304, 74, 'KELENGKAPAN', 'badong', 0),
(1305, 74, 'KELENGKAPAN', 'ampok-ampok', 0),
(1306, 74, 'KELENGKAPAN', 'gelang kana', 0),
(1307, 74, 'AKSESORIS', 'gelungan', 0),
(1308, 74, 'AKSESORIS', 'mahkota bunga', 0),
(1309, 74, 'AKSESORIS', 'kembang goyang', 0),
(1310, 74, 'AKSESORIS', 'rumbing', 0),
(1311, 74, 'AKSESORIS', 'kipas', 0),
(1312, 76, 'KELENGKAPAN', 'badong', 0),
(1313, 76, 'KELENGKAPAN', 'gelang kana', 0),
(1314, 76, 'KELENGKAPAN', 'ampok-ampok', 0),
(1315, 76, 'KELENGKAPAN', 'rok', 0),
(1316, 76, 'KELENGKAPAN', 'sayap', 0),
(1317, 76, 'KELENGKAPAN', 'stagen prada', 0),
(1318, 76, 'KELENGKAPAN', 'tutup dada', 0),
(1319, 76, 'AKSESORIS', 'mahkota jambul', 0),
(1320, 76, 'AKSESORIS', 'bunga kamboja', 0),
(1321, 77, 'KELENGKAPAN', 'kain prada', 0),
(1322, 77, 'KELENGKAPAN', 'stagen prada', 0),
(1323, 77, 'KELENGKAPAN', 'selendang', 0),
(1324, 77, 'AKSESORIS', 'cemara', 0),
(1325, 77, 'AKSESORIS', 'subal', 0),
(1326, 77, 'AKSESORIS', 'giwang', 0),
(1327, 77, 'AKSESORIS', 'mahkota bunga', 0),
(1328, 78, 'KELENGKAPAN', 'pakaian tari gandrung', 0),
(1329, 78, 'KELENGKAPAN', 'bawahan', 0),
(1330, 78, 'KELENGKAPAN', 'sampur', 0),
(1331, 78, 'AKSESORIS', 'omprok', 0),
(1332, 78, 'AKSESORIS', 'kipas', 0),
(1333, 79, 'KELENGKAPAN', 'kain prada', 0),
(1334, 79, 'KELENGKAPAN', 'tapih', 0),
(1335, 79, 'KELENGKAPAN', 'pending prada', 0),
(1336, 79, 'KELENGKAPAN', 'badong', 0),
(1337, 79, 'KELENGKAPAN', 'tutup dada', 0),
(1338, 79, 'KELENGKAPAN', 'strapless prada', 0),
(1339, 79, 'KELENGKAPAN', 'selendang', 0),
(1340, 79, 'AKSESORIS', 'gelungan', 0),
(1341, 79, 'AKSESORIS', 'giwang', 0),
(1342, 79, 'AKSESORIS', 'gelang', 0),
(1353, 82, 'KELENGKAPAN', 'cadar manik', 0),
(1354, 82, 'KELENGKAPAN', 'baju', 0),
(1355, 82, 'KELENGKAPAN', 'celana', 0),
(1356, 82, 'KELENGKAPAN', 'gesper', 0),
(1357, 82, 'KELENGKAPAN', 'silang dada', 0),
(1358, 82, 'KELENGKAPAN', 'apok-apok', 0),
(1359, 82, 'AKSESORIS', 'hiasan bunga', 0),
(1360, 82, 'AKSESORIS', 'cepol', 0),
(1361, 82, 'AKSESORIS', 'sumpit sepasang', 0),
(1362, 82, 'AKSESORIS', 'anting', 0),
(1363, 82, 'AKSESORIS', 'bunga belakang', 0),
(1364, 83, 'KELENGKAPAN', 'celana', 0),
(1365, 83, 'KELENGKAPAN', 'ikat pinggang', 0),
(1366, 83, 'KELENGKAPAN', 'sempyok', 0),
(1367, 83, 'KELENGKAPAN', 'selendang', 0),
(1368, 83, 'AKSESORIS', 'kudaan', 0),
(1369, 83, 'AKSESORIS', 'udeng', 0),
(1370, 83, 'AKSESORIS', 'gelang tangan', 0),
(1371, 83, 'AKSESORIS', 'gelang kaki', 0),
(1372, 85, 'KELENGKAPAN', 'badong', 0),
(1373, 85, 'KELENGKAPAN', 'tutup dada', 0),
(1374, 85, 'KELENGKAPAN', 'kain prada', 0),
(1375, 85, 'KELENGKAPAN', 'sabuk', 0),
(1376, 85, 'KELENGKAPAN', 'ampok-ampok', 0),
(1377, 85, 'KELENGKAPAN', 'sayap', 0),
(1378, 85, 'AKSESORIS', 'gelungan', 0),
(1379, 85, 'AKSESORIS', 'bunga', 0),
(1380, 86, 'KELENGKAPAN', 'kain prada', 0),
(1381, 86, 'KELENGKAPAN', 'sabuk', 0),
(1382, 86, 'KELENGKAPAN', 'baju kebaya', 0),
(1383, 86, 'KELENGKAPAN', 'ikat pinggang', 0),
(1384, 86, 'KELENGKAPAN', 'selendang', 0),
(1385, 86, 'AKSESORIS', 'oncer', 0),
(1386, 86, 'AKSESORIS', 'kipas', 0),
(1387, 86, 'AKSESORIS', 'gelungan', 0),
(1388, 86, 'AKSESORIS', 'giwang', 0),
(1389, 87, 'KELENGKAPAN', 'baju organza longgar', 0),
(1390, 87, 'KELENGKAPAN', 'selendang', 0),
(1391, 87, 'KELENGKAPAN', 'kain sarung', 0),
(1392, 87, 'AKSESORIS', 'gelang tangan', 0),
(1393, 87, 'AKSESORIS', 'kalung', 0),
(1394, 87, 'AKSESORIS', 'hiasan rambut emas', 0),
(1395, 87, 'AKSESORIS', 'kipas', 0),
(1396, 88, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1397, 88, 'KELENGKAPAN', 'tutup dada', 0),
(1398, 88, 'KELENGKAPAN', 'ampok-ampok', 0),
(1399, 88, 'KELENGKAPAN', 'lamak', 0),
(1400, 88, 'KELENGKAPAN', 'simping', 0),
(1401, 88, 'KELENGKAPAN', 'badong', 0),
(1402, 88, 'KELENGKAPAN', 'kain prada', 0),
(1403, 88, 'KELENGKAPAN', 'stagen prada', 0),
(1404, 88, 'AKSESORIS', 'kipas', 0),
(1405, 88, 'AKSESORIS', 'gelungan', 0),
(1406, 88, 'AKSESORIS', 'giwang', 0),
(1407, 88, 'AKSESORIS', 'gelang kana', 0),
(1408, 90, 'KELENGKAPAN', 'kemben', 0),
(1409, 90, 'KELENGKAPAN', 'selempang dada', 0),
(1410, 90, 'KELENGKAPAN', 'pending emas', 0),
(1411, 90, 'KELENGKAPAN', 'rok batik', 0),
(1412, 90, 'AKSESORIS', 'topi blantek', 0),
(1413, 93, 'KELENGKAPAN', 'baju prada lengan panjang', 0),
(1414, 93, 'KELENGKAPAN', 'simping', 0),
(1415, 93, 'KELENGKAPAN', 'tutup dada', 0),
(1416, 93, 'KELENGKAPAN', 'kain prada', 0),
(1417, 93, 'KELENGKAPAN', 'badong', 0),
(1418, 93, 'KELENGKAPAN', 'ampok-ampok', 0),
(1419, 93, 'KELENGKAPAN', 'stagen prada', 0),
(1420, 93, 'AKSESORIS', 'udeng', 0),
(1421, 93, 'AKSESORIS', 'hiasan bunga', 0),
(1422, 93, 'AKSESORIS', 'rumbing', 0),
(1423, 93, 'AKSESORIS', 'kipas', 0),
(1424, 94, 'KELENGKAPAN', 'toka-toka', 0),
(1425, 94, 'KELENGKAPAN', 'sarung songket', 0),
(1426, 94, 'KELENGKAPAN', 'kebaya', 0),
(1427, 94, 'KELENGKAPAN', 'pending', 0),
(1428, 94, 'KELENGKAPAN', 'selempang', 0),
(1429, 94, 'AKSESORIS', 'sunting melayu', 0),
(1430, 94, 'AKSESORIS', 'anting', 0),
(1431, 94, 'AKSESORIS', 'baki kapur sirih', 0),
(1432, 95, 'KELENGKAPAN', 'ikat kepala', 0),
(1433, 95, 'KELENGKAPAN', 'celana galembong', 0),
(1434, 95, 'KELENGKAPAN', 'baju kurung', 0),
(1435, 95, 'KELENGKAPAN', 'ikat pinggang', 0),
(1436, 95, 'AKSESORIS', 'tengkuluk tanduk', 0),
(1437, 95, 'AKSESORIS', 'piring', 0),
(1448, 101, 'KELENGKAPAN', 'kebaya', 0),
(1449, 101, 'KELENGKAPAN', 'kain batik', 0),
(1450, 101, 'KELENGKAPAN', 'kemben', 0),
(1451, 101, 'AKSESORIS', 'gelang tangan', 0),
(1452, 101, 'AKSESORIS', 'gelang kaki', 0),
(1453, 101, 'AKSESORIS', 'kalung', 0),
(1454, 101, 'AKSESORIS', 'sanggul tengkuk samping', 0),
(1455, 101, 'AKSESORIS', 'bunga mawar', 0),
(1456, 101, 'AKSESORIS', 'kembang goyang', 0),
(1457, 101, 'AKSESORIS', 'anting', 0),
(1458, 101, 'AKSESORIS', 'kendi', 0),
(1468, 80, 'AKSESORIS', 'bunga perak', 0),
(1469, 80, 'AKSESORIS', 'mahkota bunga', 0),
(1470, 80, 'AKSESORIS', 'gelang kana', 0),
(1471, 80, 'KELENGKAPAN', 'Cemara', 0),
(1472, 80, 'KELENGKAPAN', 'badong', 0),
(1473, 80, 'KELENGKAPAN', 'ampok-ampok', 0),
(1474, 80, 'KELENGKAPAN', 'selendang', 0),
(1475, 80, 'KELENGKAPAN', 'tutup dada', 0),
(1476, 80, 'KELENGKAPAN', 'sabuk lilit', 0),
(1477, 80, 'KELENGKAPAN', 'kain prada', 0),
(1478, 81, 'AKSESORIS', 'kipas', 0),
(1479, 81, 'AKSESORIS', 'rumbing', 0),
(1480, 81, 'AKSESORIS', 'bunga gonjer', 0),
(1481, 81, 'AKSESORIS', 'gelungan', 0),
(1482, 81, 'KELENGKAPAN', 'tutup dada', 0),
(1483, 81, 'KELENGKAPAN', 'badong', 0),
(1484, 81, 'KELENGKAPAN', 'kain prada', 0),
(1485, 81, 'KELENGKAPAN', 'ampok-ampok', 0),
(1486, 81, 'KELENGKAPAN', 'sabuk lilit', 0),
(1487, 84, 'KELENGKAPAN', 'rompi', 0),
(1488, 84, 'KELENGKAPAN', 'celana', 0),
(1489, 84, 'KELENGKAPAN', 'embong', 0),
(1490, 84, 'KELENGKAPAN', 'selendang', 0),
(1491, 84, 'KELENGKAPAN', 'kaos', 0),
(1492, 84, 'AKSESORIS', 'topeng', 0),
(1493, 84, 'AKSESORIS', 'gelang tangan', 0),
(1494, 84, 'AKSESORIS', 'gelang kaki', 0),
(1495, 89, 'KELENGKAPAN', 'badong', 0),
(1496, 89, 'KELENGKAPAN', 'awir', 0),
(1497, 89, 'KELENGKAPAN', 'lamak', 0),
(1498, 89, 'KELENGKAPAN', 'celana panjang', 0),
(1499, 89, 'KELENGKAPAN', 'baju beludru', 0),
(1500, 89, 'KELENGKAPAN', 'stewel', 0),
(1501, 89, 'KELENGKAPAN', 'kamen putih', 0),
(1502, 89, 'KELENGKAPAN', 'angkeb tundu', 0),
(1503, 89, 'AKSESORIS', 'gelang kana', 0),
(1504, 89, 'AKSESORIS', 'gelungan', 0),
(1505, 89, 'AKSESORIS', 'keris', 0),
(1506, 96, 'KELENGKAPAN', 'celana panjang', 0),
(1507, 96, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1508, 96, 'KELENGKAPAN', 'kain songket', 0),
(1509, 96, 'AKSESORIS', 'ikat kepala', 0),
(1510, 96, 'AKSESORIS', 'piring', 0),
(1511, 98, 'AKSESORIS', 'tengkuluk tanduk', 0),
(1512, 98, 'KELENGKAPAN', 'kain songket', 0),
(1513, 98, 'KELENGKAPAN', 'sabuk emas', 0),
(1514, 98, 'KELENGKAPAN', 'baju kurung', 0),
(1515, 97, 'KELENGKAPAN', 'celana panjang', 0),
(1516, 97, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1517, 97, 'KELENGKAPAN', 'kain songket', 0),
(1518, 97, 'AKSESORIS', 'ikat kepala', 0),
(1519, 100, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1520, 100, 'KELENGKAPAN', 'celana panjang', 0),
(1521, 100, 'KELENGKAPAN', 'kain songket', 0),
(1522, 100, 'AKSESORIS', 'ikat kepala', 0),
(1523, 100, 'AKSESORIS', 'payung', 0),
(1524, 99, 'AKSESORIS', 'kembang tusuk', 0),
(1525, 99, 'AKSESORIS', 'hiasan kepala', 0),
(1526, 99, 'KELENGKAPAN', 'selendang', 0),
(1527, 99, 'KELENGKAPAN', 'kain songket', 0),
(1528, 99, 'KELENGKAPAN', 'baju kurung', 0),
(1529, 99, 'KELENGKAPAN', 'sabuk emas', 0),
(1530, 112, 'KELENGKAPAN', 'kamen prada', 0),
(1531, 112, 'KELENGKAPAN', 'celana hitam', 0),
(1532, 112, 'KELENGKAPAN', 'kain motif kotak-kotak', 0),
(1533, 112, 'AKSESORIS', 'hiasan bunga', 0),
(1534, 121, 'KELENGKAPAN', 'badong', 0),
(1535, 121, 'KELENGKAPAN', 'celana panjang', 0),
(1536, 121, 'KELENGKAPAN', 'sabuk', 0),
(1537, 121, 'KELENGKAPAN', 'baju beludru', 0),
(1538, 121, 'KELENGKAPAN', 'stewel', 0),
(1539, 121, 'KELENGKAPAN', 'kamen putih', 0),
(1540, 121, 'KELENGKAPAN', 'angkeb tundu', 0),
(1541, 121, 'KELENGKAPAN', 'angkeb pale', 0),
(1542, 121, 'KELENGKAPAN', 'sabuk', 0),
(1543, 121, 'KELENGKAPAN', 'saput metris', 0),
(1544, 121, 'KELENGKAPAN', 'semayut', 0),
(1545, 121, 'AKSESORIS', 'gelang kana', 0),
(1546, 121, 'AKSESORIS', 'gelungan', 0),
(1547, 121, 'AKSESORIS', 'keris', 0),
(1548, 121, 'AKSESORIS', 'topeng', 0),
(1549, 127, 'KELENGKAPAN', 'kain kebat', 0),
(1550, 127, 'KELENGKAPAN', 'kebaya', 0),
(1551, 127, 'KELENGKAPAN', 'konde', 0),
(1552, 127, 'AKSESORIS', 'sandal selop', 0),
(1553, 128, 'KELENGKAPAN', 'celana pangsi hitam', 0),
(1554, 128, 'KELENGKAPAN', 'jas taqwa', 0),
(1555, 128, 'AKSESORIS', 'bendo', 0),
(1556, 128, 'AKSESORIS', 'sandal jepit', 0),
(1572, 129, 'AKSESORIS', 'sandal selop', 0),
(1573, 129, 'AKSESORIS', 'konde', 0),
(1574, 129, 'KELENGKAPAN', 'selendang', 0),
(1575, 129, 'KELENGKAPAN', 'kebaya', 0),
(1576, 129, 'KELENGKAPAN', 'kain batik', 0),
(1583, 131, 'KELENGKAPAN', 'celana panjang', 0),
(1584, 131, 'KELENGKAPAN', 'kain batik', 0),
(1585, 131, 'KELENGKAPAN', 'baju beskap', 0),
(1586, 131, 'KELENGKAPAN', 'blangkon', 0),
(1587, 131, 'AKSESORIS', 'keris', 0),
(1588, 131, 'AKSESORIS', 'sepatu selop', 0),
(1589, 130, 'AKSESORIS', 'sandal selop', 0),
(1590, 130, 'AKSESORIS', 'konde', 0),
(1591, 130, 'KELENGKAPAN', 'selendang', 0),
(1592, 130, 'KELENGKAPAN', 'kebaya', 0),
(1593, 130, 'KELENGKAPAN', 'kain batik', 0),
(1594, 132, 'KELENGKAPAN', 'kain batik', 0),
(1595, 132, 'KELENGKAPAN', 'baju kebaya', 0),
(1596, 132, 'AKSESORIS', 'konde', 0),
(1597, 132, 'AKSESORIS', 'gelang kaki', 0),
(1598, 133, 'KELENGKAPAN', 'kaos bergaris', 0),
(1599, 133, 'KELENGKAPAN', 'celana hitam', 0),
(1600, 133, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1601, 133, 'AKSESORIS', 'ikat kepala', 0),
(1602, 134, 'KELENGKAPAN', 'kain', 0),
(1603, 134, 'KELENGKAPAN', 'baju kurung', 0),
(1604, 134, 'KELENGKAPAN', 'kain lilit', 0),
(1605, 134, 'AKSESORIS', 'kalung', 0),
(1606, 134, 'AKSESORIS', 'gelang', 0),
(1607, 134, 'AKSESORIS', 'siger', 0),
(1608, 134, 'AKSESORIS', 'sandal selop', 0),
(1609, 135, 'KELENGKAPAN', 'celana panjang', 0),
(1610, 135, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1611, 135, 'KELENGKAPAN', 'kain ikat', 0),
(1612, 135, 'KELENGKAPAN', 'sarung tumpal', 0),
(1613, 135, 'AKSESORIS', 'kalung', 0),
(1614, 135, 'AKSESORIS', 'gelang', 0),
(1615, 135, 'AKSESORIS', 'keris', 0),
(1616, 135, 'AKSESORIS', 'siger', 0),
(1617, 135, 'AKSESORIS', 'sepatu pantofel', 0),
(1618, 136, 'KELENGKAPAN', 'sarung songket', 0),
(1619, 136, 'KELENGKAPAN', 'baju kurung', 0),
(1620, 136, 'KELENGKAPAN', 'selendang', 0),
(1621, 136, 'KELENGKAPAN', 'teratai dada', 0),
(1622, 136, 'AKSESORIS', 'kalung', 0),
(1623, 136, 'AKSESORIS', 'gelang', 0),
(1624, 136, 'KELENGKAPAN', 'sabuk', 0),
(1625, 136, 'AKSESORIS', 'mahkota', 0),
(1626, 136, 'AKSESORIS', 'sandal', 0),
(1627, 137, 'KELENGKAPAN', 'celana panjang', 0),
(1628, 137, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1629, 137, 'KELENGKAPAN', 'sarung songket', 0),
(1630, 137, 'KELENGKAPAN', 'sabuk', 0),
(1631, 137, 'AKSESORIS', 'keris', 0),
(1632, 137, 'AKSESORIS', 'kalung', 0),
(1633, 137, 'KELENGKAPAN', 'baju kurung', 0),
(1634, 137, 'AKSESORIS', 'gelang', 0),
(1635, 137, 'AKSESORIS', 'lacak', 0),
(1636, 137, 'AKSESORIS', 'sandal selop', 0),
(1637, 138, 'KELENGKAPAN', 'kain songket', 0),
(1638, 138, 'KELENGKAPAN', 'baju kurung', 0),
(1639, 138, 'KELENGKAPAN', 'pending', 0),
(1640, 138, 'KELENGKAPAN', 'kain bahu', 0),
(1641, 138, 'AKSESORIS', 'kalung', 0),
(1642, 138, 'AKSESORIS', 'konde', 0),
(1643, 138, 'AKSESORIS', 'sandal selop', 0),
(1644, 139, 'KELENGKAPAN', 'celana panjang', 0),
(1645, 139, 'KELENGKAPAN', 'kain sarung', 0),
(1646, 139, 'KELENGKAPAN', 'jas', 0),
(1647, 139, 'AKSESORIS', 'penutup kepala', 0),
(1648, 139, 'AKSESORIS', 'sepatu selop', 0),
(1649, 140, 'KELENGKAPAN', 'kain batik', 0),
(1650, 140, 'KELENGKAPAN', 'kebaya', 0),
(1651, 140, 'KELENGKAPAN', 'selendang', 0),
(1652, 140, 'AKSESORIS', 'sepatu selop', 0),
(1653, 141, 'KELENGKAPAN', 'celana panjang', 0),
(1654, 141, 'KELENGKAPAN', 'baju koko', 0),
(1655, 141, 'AKSESORIS', 'kain sarung', 0),
(1656, 141, 'AKSESORIS', 'peci', 0),
(1657, 141, 'AKSESORIS', 'sepatu selop', 0),
(1658, 142, 'KELENGKAPAN', 'celana panjang', 0),
(1659, 142, 'KELENGKAPAN', 'baju panjang', 0),
(1660, 142, 'KELENGKAPAN', 'ikat pinggang', 0),
(1661, 142, 'AKSESORIS', 'keris', 0),
(1662, 142, 'AKSESORIS', 'kain', 0),
(1663, 142, 'AKSESORIS', 'kopiah', 0),
(1664, 143, 'KELENGKAPAN', 'kain sarung', 0),
(1665, 143, 'KELENGKAPAN', 'baju panjang', 0),
(1666, 143, 'KELENGKAPAN', 'ikat pinggang', 0),
(1667, 143, 'AKSESORIS', 'kalung', 0),
(1668, 143, 'AKSESORIS', 'hiasan rambut', 0),
(1669, 144, 'KELENGKAPAN', 'sarung bermotif', 0),
(1670, 144, 'KELENGKAPAN', 'baju batague', 0),
(1671, 144, 'KELENGKAPAN', 'selendang', 0),
(1672, 144, 'AKSESORIS', 'kalung', 0),
(1673, 144, 'AKSESORIS', 'tengkuluk', 0),
(1674, 144, 'AKSESORIS', 'sandal selop', 0),
(1675, 145, 'AKSESORIS', 'celana sarawah', 0),
(1676, 145, 'AKSESORIS', 'baju panjang', 0),
(1677, 145, 'AKSESORIS', 'sandang', 0),
(1678, 145, 'AKSESORIS', 'keris', 0),
(1679, 145, 'AKSESORIS', 'destar', 0),
(1680, 145, 'AKSESORIS', 'sandal selop', 0),
(1681, 146, 'KELENGKAPAN', 'kain songket', 0),
(1682, 146, 'KELENGKAPAN', 'baju kurung panjang', 0),
(1683, 146, 'KELENGKAPAN', 'selendang bermotif', 0),
(1684, 146, 'KELENGKAPAN', 'sabuk', 0),
(1685, 146, 'AKSESORIS', 'kalung', 0),
(1686, 146, 'AKSESORIS', 'sepasang pisau', 0),
(1687, 146, 'AKSESORIS', 'gelang', 0),
(1688, 146, 'AKSESORIS', 'mahkota', 0),
(1689, 146, 'AKSESORIS', 'sepatu selop', 0),
(1690, 147, 'KELENGKAPAN', 'celana panjang', 0),
(1691, 147, 'KELENGKAPAN', 'baju panjang', 0),
(1692, 147, 'KELENGKAPAN', 'kain songket', 0),
(1693, 147, 'KELENGKAPAN', 'kain selempang', 0),
(1694, 147, 'AKSESORIS', 'gelang', 0),
(1695, 147, 'AKSESORIS', 'sepasang pisau', 0),
(1696, 147, 'AKSESORIS', 'ampuh', 0),
(1697, 147, 'AKSESORIS', 'sepatu selop', 0),
(1698, 148, 'KELENGKAPAN', 'kain songket', 0),
(1699, 148, 'KELENGKAPAN', 'baju kebaya', 0),
(1700, 148, 'KELENGKAPAN', 'ikat pinggang', 0),
(1701, 148, 'KELENGKAPAN', 'kain ulos', 0),
(1702, 148, 'AKSESORIS', 'kalung', 0),
(1703, 148, 'AKSESORIS', 'mahkota', 0),
(1704, 148, 'AKSESORIS', 'sepatu selop', 0),
(1705, 149, 'KELENGKAPAN', 'celana panjang', 0),
(1706, 149, 'KELENGKAPAN', 'baju panjang', 0),
(1707, 149, 'KELENGKAPAN', 'kain ulos', 0),
(1708, 149, 'AKSESORIS', 'tengkulok', 0),
(1709, 149, 'AKSESORIS', 'sepatu selop', 0),
(1710, 150, 'KELENGKAPAN', 'celana panjang', 0),
(1711, 150, 'KELENGKAPAN', 'baju kerah tegak', 0),
(1712, 150, 'KELENGKAPAN', 'songket', 0),
(1713, 150, 'KELENGKAPAN', 'rompi', 0),
(1714, 150, 'AKSESORIS', 'mahkota', 0),
(1715, 150, 'AKSESORIS', 'sandal selop', 0),
(1716, 151, 'KELENGKAPAN', 'celana panjang', 0),
(1717, 151, 'KELENGKAPAN', 'sarung', 0),
(1718, 151, 'KELENGKAPAN', 'jas', 0),
(1719, 151, 'AKSESORIS', 'pisau rencong', 0),
(1720, 151, 'AKSESORIS', 'kopeah', 0),
(1721, 151, 'AKSESORIS', 'sandal selop', 0),
(1722, 152, 'KELENGKAPAN', 'kain songket', 0),
(1723, 152, 'KELENGKAPAN', 'baju kurung panjang', 0),
(1724, 152, 'KELENGKAPAN', 'teratai', 0),
(1725, 152, 'KELENGKAPAN', 'ikat pinggang', 0),
(1726, 152, 'AKSESORIS', 'kalung', 0),
(1727, 152, 'AKSESORIS', 'mahkota', 0),
(1728, 152, 'AKSESORIS', 'sandal selop', 0),
(1729, 153, 'KELENGKAPAN', 'celana panjang', 0),
(1730, 153, 'KELENGKAPAN', 'baju jubah arab', 0),
(1731, 153, 'KELENGKAPAN', 'selendang', 0),
(1732, 153, 'KELENGKAPAN', 'ikat pinggang', 0),
(1733, 153, 'AKSESORIS', 'kalung', 0),
(1734, 153, 'AKSESORIS', 'gelang', 0),
(1735, 153, 'AKSESORIS', 'tengkulok', 0),
(1736, 153, 'AKSESORIS', 'sandal selop', 0),
(1737, 154, 'KELENGKAPAN', 'kain sarung', 0),
(1738, 154, 'KELENGKAPAN', 'baju kebaya', 0),
(1739, 154, 'KELENGKAPAN', 'kain lenso', 0),
(1740, 154, 'AKSESORIS', 'konde', 0),
(1741, 154, 'AKSESORIS', 'sandal selop', 0),
(1742, 155, 'KELENGKAPAN', 'celana panjang', 0),
(1743, 155, 'KELENGKAPAN', 'kemeja putih', 0),
(1744, 155, 'KELENGKAPAN', 'kain', 0),
(1745, 155, 'KELENGKAPAN', 'jas', 0),
(1746, 155, 'AKSESORIS', 'sepatu pantofel', 0),
(1747, 156, 'KELENGKAPAN', 'rok rumbai', 0),
(1748, 156, 'KELENGKAPAN', 'kaos polos', 0),
(1749, 156, 'KELENGKAPAN', 'kain songket', 0),
(1750, 156, 'KELENGKAPAN', 'ikat pinggang', 0),
(1751, 156, 'AKSESORIS', 'gelang rumbai', 0),
(1752, 156, 'AKSESORIS', 'mahkota', 0),
(1753, 157, 'KELENGKAPAN', 'celana rumbai', 0),
(1754, 157, 'AKSESORIS', 'kalung', 0),
(1755, 157, 'AKSESORIS', 'sarew', 0),
(1756, 157, 'AKSESORIS', 'gelang rumbai', 0),
(1757, 157, 'AKSESORIS', 'mahkota rumbai', 0),
(1758, 158, 'KELENGKAPAN', 'kain sarung', 0),
(1759, 158, 'KELENGKAPAN', 'baju bodo', 0),
(1760, 158, 'AKSESORIS', 'kalung', 0),
(1761, 158, 'AKSESORIS', 'gelang panjang', 0),
(1762, 158, 'AKSESORIS', 'tusuk konde', 0),
(1763, 158, 'AKSESORIS', 'sandal selop', 0),
(1764, 159, 'KELENGKAPAN', 'celana panjang', 0),
(1765, 159, 'KELENGKAPAN', 'baju panjang', 0),
(1766, 159, 'KELENGKAPAN', 'kain sarung', 0),
(1767, 159, 'KELENGKAPAN', 'baju bela', 0),
(1768, 159, 'AKSESORIS', 'pasapu', 0),
(1769, 159, 'AKSESORIS', 'sandal selop', 0),
(1770, 160, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1771, 160, 'KELENGKAPAN', 'celana panjang', 0),
(1772, 160, 'KELENGKAPAN', 'penutup dada', 0),
(1773, 160, 'KELENGKAPAN', 'kain sarung', 0),
(1774, 160, 'AKSESORIS', 'gelang lengan', 0),
(1775, 160, 'AKSESORIS', 'pisau', 0),
(1776, 160, 'AKSESORIS', 'sandal selop', 0),
(1777, 160, 'AKSESORIS', 'mahkota', 0),
(1778, 161, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1779, 161, 'KELENGKAPAN', 'kain songket', 0),
(1780, 161, 'KELENGKAPAN', 'ikat pinggang', 0),
(1781, 161, 'KELENGKAPAN', 'penutup dada', 0),
(1782, 161, 'KELENGKAPAN', 'selendang', 0),
(1783, 161, 'AKSESORIS', 'gelang lengan', 0),
(1784, 161, 'AKSESORIS', 'gelang tangan', 0),
(1785, 161, 'AKSESORIS', 'sandal selop', 0),
(1786, 161, 'AKSESORIS', 'mahkota', 0),
(1792, 163, 'KELENGKAPAN', 'baju polos', 0),
(1793, 163, 'KELENGKAPAN', 'rompi', 0),
(1794, 163, 'KELENGKAPAN', 'ikat pinggang', 0),
(1795, 163, 'AKSESORIS', 'kalung', 0),
(1796, 163, 'AKSESORIS', 'gelang tangan', 0),
(1797, 163, 'AKSESORIS', 'gelang kaki', 0),
(1798, 163, 'AKSESORIS', 'ikat kepala', 0),
(1799, 164, 'KELENGKAPAN', 'cawat', 0),
(1800, 164, 'KELENGKAPAN', 'rompi', 0),
(1801, 164, 'KELENGKAPAN', 'kain nyamu', 0),
(1802, 164, 'AKSESORIS', 'gelang', 0),
(1803, 164, 'AKSESORIS', 'kalung', 0),
(1804, 164, 'AKSESORIS', 'keris', 0),
(1805, 164, 'AKSESORIS', 'ikat kepala', 0),
(1806, 165, 'KELENGKAPAN', 'kain pelung', 0),
(1807, 165, 'KELENGKAPAN', 'lambung', 0),
(1808, 165, 'AKSESORIS', 'hiasan kepala', 0),
(1809, 165, 'AKSESORIS', 'kalung', 0),
(1810, 165, 'AKSESORIS', 'gelang', 0),
(1811, 166, 'KELENGKAPAN', 'baju lengan panjang', 0),
(1812, 166, 'KELENGKAPAN', 'kain sarung', 0),
(1813, 166, 'AKSESORIS', 'sapu', 0),
(1814, 167, 'KELENGKAPAN', 'kain tenun', 0),
(1815, 167, 'KELENGKAPAN', 'kebaya pendek', 0),
(1816, 167, 'KELENGKAPAN', 'selendang', 0),
(1817, 167, 'KELENGKAPAN', 'ikat pinggang', 0),
(1818, 167, 'AKSESORIS', 'kalung', 0),
(1819, 167, 'AKSESORIS', 'bulan nolik', 0),
(1820, 167, 'AKSESORIS', '', 0),
(1821, 162, 'AKSESORIS', 'sandal selop', 0),
(1822, 162, 'AKSESORIS', 'sanggul', 0),
(1823, 162, 'KELENGKAPAN', 'bulang pasang', 0),
(1824, 162, 'KELENGKAPAN', 'baju kebaya', 0),
(1825, 162, 'KELENGKAPAN', 'kain kamen', 0),
(1826, 168, 'KELENGKAPAN', 'sarung tenun', 0),
(1827, 168, 'KELENGKAPAN', 'kemeja panjang', 0),
(1828, 168, 'KELENGKAPAN', 'selendang', 0),
(1829, 168, 'KELENGKAPAN', 'ikat pinggang', 0),
(1830, 168, 'AKSESORIS', 'topi tiilangga', 0),
(1831, 168, 'AKSESORIS', 'golok', 0);

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
(8, 15, 'e18dd48af650647e90f3f302d1677d40.jpg', NULL),
(9, 10, 'e18dd48af650647e90f3f302d1677d40.jpg', NULL),
(10, 14, 'e18dd48af650647e90f3f302d1677d40.jpg', NULL),
(11, 64, 'b68a260620a6bedd5d2006bb909d2c31.jpg', NULL),
(12, 65, 'dcf53578c9e08411724f803136b72387.jpg', NULL),
(13, 66, 'b29d7636dc4961cb5a2bcbf31a64d9bc.jpg', NULL),
(14, 67, 'dfd690e7d460c2a56065689b69235458.jpg', NULL),
(15, 68, '28d49f393524407c8f7a271dd78ab1fd.jpg', NULL),
(16, 69, 'dd0f9dc55f72873b90562d82bdde8572.jpg', NULL),
(17, 70, '9257743bd503e01f1266310357bc0daf.jpg', NULL),
(19, 61, 'e70028bc567387bf3dc2efc7f506e0cc.jpg', NULL),
(20, 60, '5b044bc6af0d11ded704382fd5839a30.jpg', NULL),
(21, 8, 'a9c200f1ed0f3641af7e3e6c18686758.jpg', NULL),
(22, 59, '2adf93c8f4b8af2aa0aa927db86497b0.jpg', NULL),
(23, 55, '0faa57ed8a2128d1c2cd60344df36580.jpg', NULL),
(24, 36, '7cb697f85361ed85df2ce5ca32912ab9.jpg', NULL),
(25, 71, '9012a5667577d445c1d75a5615006dbd.jpg', NULL),
(26, 72, '6c5770e2c7fb83a6a5f180ed33b89102.jpg', NULL),
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
(57, 103, '0806967f27956d8bc99579487e16750f.jpg', NULL),
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
(118, 164, '32667645434360e4cf9b7e69c9cf6a0c.jpg', NULL),
(119, 165, '18a663f4162bb983ddd31be7d1aca3a9.jpg', NULL),
(120, 166, '5a66a5dcba791a05380646e1128d0e22.jpeg', NULL),
(121, 167, '45581f03add7a3a6d9f56164cf2a0bf7.jpg', NULL),
(122, 168, 'd0f9d27ff6dbc27c9571d41ee0b73aea.jpg', NULL);

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
  `bukti_pembayaran` varchar(225) NOT NULL,
  `status` enum('belum bayar','sudah bayar','lunas','mengikuti','selesai','batal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `les_tari`
--

INSERT INTO `les_tari` (`id_less_tari`, `no_registrasi`, `nama_lengkap`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`, `kategori`, `no_telp`, `email`, `photo`, `bukti_pembayaran`, `status`) VALUES
(1, '21212', 'andi', 'tasik', 'Laki-laki', 'petakan', 'kelompok a', '0982', 'andi@gmail.com', 'jpeg', '', 'belum bayar');

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
('INV111220000001', '2020-12-11', '2020-12-13', 8, '2020-12-11', 'LUNAS', 40, 1, 0, 5, '2021-02-16', 'ambil_sendiri', 0, NULL, 's', 0, '2020-12-14'),
('INV111220000002', '2020-12-13', '2020-12-15', 60, '2020-12-11', 'BELUM LUNAS', 40, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 1, '2020-12-16'),
('INV140321000009', '2021-03-14', '2021-03-14', 167, '2021-03-14', 'LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 'm', 0, NULL),
('INV140321000010', '2021-03-17', '2021-03-18', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 's', 0, NULL),
('INV140321000011', '2021-03-17', '2021-03-25', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'gojek', 0, NULL, 's', 0, NULL),
('INV140321000012', '2021-03-05', '2021-03-27', 166, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 'l', 0, NULL),
('INV140321000013', '2021-03-15', '2021-03-16', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 's', 0, NULL),
('INV140321000014', '2021-03-12', '2021-03-16', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 's', 0, NULL),
('INV140321000015', '2021-03-19', '2021-03-20', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000016', '2021-03-15', '2021-03-18', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'grab', 0, NULL, 'l', 0, NULL),
('INV140321000017', '2021-03-16', '2021-03-18', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 2, NULL, 'gojek', 0, NULL, 'm', 1, NULL),
('INV140321000018', '2021-03-15', '2021-03-17', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000019', '2021-03-18', '2021-03-20', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000020', '2021-03-18', '2021-03-25', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 5, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000021', '2021-03-23', '2021-03-26', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000022', '2021-03-16', '2021-03-20', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 'm', 0, NULL),
('INV140321000023', '2021-03-17', '2021-03-26', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 12, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV140321000024', '2021-03-15', '2021-03-16', 167, '2021-03-14', 'BELUM LUNAS', 49, 0, 0, 2, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV180321000025', '2021-03-19', '2021-03-20', 167, '2021-03-18', 'BELUM LUNAS', 50, 0, 0, 1, NULL, 'ambil_sendiri', 0, NULL, 's', 0, NULL),
('INV250221000003', '2021-02-25', '2021-02-25', 167, '2021-02-25', 'BELUM LUNAS', 42, 0, 0, 1, NULL, 'grab', 0, NULL, 'l', 1, NULL),
('INV250221000004', '2021-02-25', '2021-03-27', 166, '2021-02-25', 'BELUM LUNAS', 42, 0, 0, 1, NULL, 'gojek', 0, NULL, 'm', 1, NULL),
('INV250221000005', '2021-02-25', '2021-02-26', 168, '2021-02-25', 'BELUM LUNAS', 42, 0, 0, 12, NULL, 'ambil_sendiri', 0, NULL, 's', 1, NULL),
('INV250221000006', '2021-02-25', '2021-02-26', 168, '2021-02-25', 'BELUM LUNAS', 40, 0, 0, 1, NULL, 'grab', 0, NULL, 'm', 1, NULL),
('INV250221000007', '2021-02-25', '2021-02-26', 168, '2021-02-25', 'BELUM LUNAS', 40, 0, 0, 1, NULL, 'grab', 0, NULL, 's', 1, NULL),
('INV250221000008', '2021-02-25', '2021-02-26', 166, '2021-02-25', 'BELUM LUNAS', 49, 0, 0, 12, NULL, 'grab', 0, NULL, 'm', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_order` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `pengirim` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `bukti_transfer` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `tgl_bayar`, `id_metode`, `id_order`, `jumlah`, `pengirim`, `bukti_transfer`) VALUES
(3, '2020-11-18', 7, 'INV171120000001', 400000, 'test', 'ae09dc834f565d4af4ccb4e327902050.jpg'),
(4, '2020-12-06', 7, '', 1400000, 'test', '731bec3a205cc51bc2d058ed2fc464d2.jpg'),
(5, '2020-12-06', 7, '', 1400000, 'test', '96b5786a0e20b130f3ffd0869aff295b.jpg'),
(6, '2020-12-06', 7, 'INV061220000001', 140000, 'test', 'e1e916fc21e91eec76ff67654e797f01.jpg'),
(7, '2020-12-08', 7, 'INV081220000001', 280000, 'test', '8a4c9564a8cec6611466561b0243ad1e.jpeg'),
(8, '2020-12-08', 7, 'INV081220000002', 2800000, 'test', 'a1bb2d1b609ce38aa8fc5a1e00bac29e.jpg'),
(9, '2020-12-11', 7, 'INV111220000001', 3, 'Nadia Safira', '0a936a645fbece0ad5adf03108322640.png'),
(10, '2020-12-11', 7, 'INV111220000002', 1, 'Nadia Safira', 'fc3fd7739083e595c6aad87cda1f968c.png'),
(11, '2021-03-14', 7, 'INV140321000009', 1, 'ANDI', '9d8ab29595bcfb3c4fcd7c157c81a7d1.png'),
(12, '2021-03-14', 7, 'INV140321000010', 1000000, 'andi', '74f0aeb00c6d4bf94cf441ba7958b819.png'),
(13, '2021-03-18', 7, 'INV180321000025', 1000000, 'jaabdn', '2dac39245c3bb3f456e2bb31c8f3f2a1.png');

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
(72, 'Kostum Tari Pendet (Bali)', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pendet terdiri dari:</p>\r\n', 'L', 10, 29, 1, NULL, 1, 0, -4, -1, 3),
(73, 'Kostum Tari Merak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Merak terdiri dari:</p>\r\n', 'P', 9, 23, 0, NULL, 1, 0, -4, -1, 2),
(74, 'Kostum Tari Panji Semirang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Panji Semirang terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 3),
(75, 'Kostum Tari Ratoeh Jaro', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ratoeh Jaro terdiri dari:</p>\r\n', 'P', 8, 13, 0, NULL, 1, 0, -4, -1, 5),
(76, 'Kostum Tari Cendrawasih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cendrawasih terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(77, 'Kostum Tari Pendet', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pendet terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 5),
(78, 'Kostum Tari Gandrung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gandrung terdiri dari:</p>\r\n', 'P', 9, 28, 0, NULL, 1, 0, -4, -1, 1),
(79, 'Kostum Tari Sekar Jagat', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekar Jagat terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(80, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(81, 'Kostum Tari Oleg', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Oleg terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(82, 'Kostum Tari Lenggang Nyai', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Lenggang Nyai terdiri dari:</p>\r\n', 'P', 9, 25, 0, NULL, 1, 0, -4, -1, 1),
(83, 'Kostum Tari Jatilan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Jatilan terdiri dari:</p>\r\n', 'P', 9, 28, 0, NULL, 1, 0, -4, -1, 1),
(84, 'Kostum Tari Ganongan', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Ganongan terdiri dari:</p>\r\n', 'L', 9, 28, 0, NULL, 1, 0, -4, -1, 1),
(85, 'Kostum Tari Manuk Rawa', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Manuk Rawa terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(86, 'Kostum Tari Joged Bumbung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Joged Bumbung terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(87, 'Kostum Tari Pakarena', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pakarena terdiri dari:</p>\r\n', 'P', 12, 39, 0, NULL, 1, 0, -4, -1, 1),
(88, 'Kostum Tari Legong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Legong terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(89, 'Kostum Tari Baris', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Baris terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(90, 'Kostum Tari Yapong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Yapong terdiri dari:</p>\r\n', 'P', 9, 25, 0, NULL, 1, 0, -4, -1, 1),
(91, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\r\n', 'P', 9, 28, 0, NULL, 1, 0, -4, -1, 1),
(92, 'Kostum Tari Remo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Remo terdiri dari:</p>\r\n', 'L', 9, 28, 1, NULL, 1, 0, -4, -1, 1),
(93, 'Kostum Tari Teruna Jaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari&nbsp;Teruna Jaya terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(94, 'Kostum Tari Sekapur Sirih', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sekapur Sirih terdiri dari:</p>\r\n', 'P', 8, 22, 0, NULL, 1, 0, -4, -1, 0),
(95, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\r\n', 'P', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(96, 'Kostum Tari Piring', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Piring terdiri dari:</p>\r\n', 'L', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(97, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\r\n', 'L', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(98, 'Kostum Tari Rantak', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Rantak terdiri dari:</p>\r\n', 'P', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(99, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\r\n', 'P', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(100, 'Kostum Tari Payung', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Payung terdiri dari:</p>\r\n', 'L', 8, 15, 0, NULL, 1, 0, -4, -1, 0),
(101, 'Kostum Tari Kasomber', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kasomber terdiri dari:</p>\r\n', 'P', 9, 28, 0, NULL, 1, 0, -4, -1, 0),
(102, 'Kostum Tari Bedoyo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bedoyo terdiri dari:</p>\r\n', 'P', 9, 26, 0, NULL, 1, 0, -4, -1, 0),
(103, 'Kostum Tari Bidu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bidu terdiri dari:</p>\r\n', 'P', 13, 31, 0, NULL, 1, 0, -4, -1, 0),
(104, 'Kostum Tari Pagellu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Pagellu terdiri dari:</p>\r\n', 'P', 12, 39, 0, NULL, 1, 0, -4, -1, 0),
(105, 'Kostum Tari Tor-tor', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Tor-tor terdiri dari:</p>\r\n', 'P', 8, 14, 0, NULL, 1, 0, -4, -1, 0),
(106, 'Kostum Tari Bajidor Kahot', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Bajidor Kahot terdiri dari:</p>\r\n', 'P', 9, 24, 0, NULL, 1, 0, -4, -1, 0),
(107, 'Kostum Tari Margapati', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Margapati terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(108, 'Kostum Tari Puspanjali', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Puspanjali terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(109, 'Kostum Tari Kidang Kencana', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Kidang Kencana terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(110, 'Kostum Tari Barong', 400000, 400000, '<p>Sanggar kami menyediakan Kostum Tari Barong terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 0),
(111, 'Kostum Tari Wirayuda', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wirayuda terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(112, 'Kostum Tari Kecak', 100000, 100000, '<p>Sanggar kami menyediakan Kostum Tari Kecak terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 5),
(113, 'Kostum Tari Topeng Cirebon', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Cirebon terdiri dari:</p>\r\n', 'L', 9, 24, 0, NULL, 1, 0, -4, -1, 0),
(114, 'Kostum Tari Gambyong', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Gambyong terdiri dari:</p>\r\n', 'P', 9, 26, 0, NULL, 1, 0, -4, -1, 0),
(115, 'Kostum Tari Serimpi', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Serimpi terdiri dari:</p>\r\n', 'P', 9, 26, 0, NULL, 1, 0, -4, -1, 0),
(116, 'Kostum Tari Burung Enggang', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Burung Enggang terdiri dari:</p>\r\n', 'P', 11, 35, 0, NULL, 1, 0, -4, -1, 0),
(117, 'Kostum Tari Radap Rahayu', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Radap Rahayu terdiri dari:</p>\r\n', 'P', 11, 33, 0, NULL, 1, 0, -4, -1, 0),
(118, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 3),
(119, 'Kostum Tari Janger', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Janger terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 3),
(120, 'Kostum Tari Topeng Tua', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Tua terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 0),
(121, 'Kostum Tari Topeng Keras', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Topeng Keras terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 1, 0, -4, -1, 0),
(122, 'Kostum Tari Cilinaya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Cilinaya terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(123, 'Kostum Tari Wiranata', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Wiranata terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 1, 0, -4, -1, 1),
(124, 'Kostum Tari Sajojo', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Sajojo terdiri dari:</p>\r\n', 'P', 14, 45, 0, NULL, 1, 0, -4, -1, 0),
(125, 'Kostum Tari Soya-soya', 200000, 200000, '<p>Sanggar kami menyediakan Kostum Tari Soya-soya terdiri dari:</p>\r\n', 'L', 14, 44, 0, NULL, 1, 0, -4, -1, 0),
(126, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\r\n', 'L', 10, 29, 0, NULL, 2, 0, -4, -1, 3),
(127, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\r\n', 'P', 9, 24, 0, NULL, 2, 0, -4, -1, 0),
(128, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sunda terdiri dari:</p>\r\n', 'L', 9, 24, 0, NULL, 2, 0, -4, -1, 0),
(129, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\r\n', 'P', 9, 26, 1, NULL, 1, 0, -4, -1, 0),
(130, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\r\n', 'P', 9, 26, 0, NULL, 2, 0, -4, -1, 0),
(131, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jawa Tengah terdiri dari:</p>\r\n', 'L', 9, 26, 0, NULL, 2, 0, -4, -1, 0),
(132, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\r\n', 'P', 9, 28, 0, NULL, 2, 0, -4, -1, 0),
(133, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Madura terdiri dari:</p>\r\n', 'L', 9, 28, 0, NULL, 2, 0, -4, -1, 0),
(134, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\r\n', 'P', 8, 22, 0, NULL, 2, 0, -4, -1, 0),
(135, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Lampung terdiri dari:</p>\r\n', 'L', 8, 22, 0, NULL, 2, 0, -4, -1, 0),
(136, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\r\n', 'P', 8, 18, 0, NULL, 2, 0, -4, -1, 0),
(137, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Jambi terdiri dari:</p>\r\n', 'L', 8, 18, 0, NULL, 2, 0, -4, -1, 0),
(138, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\r\n', 'P', 8, 19, 0, NULL, 2, 0, -4, -1, 0),
(139, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bengkulu terdiri dari:</p>\r\n', 'L', 8, 19, 0, NULL, 2, 0, -4, -1, 0),
(140, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\r\n', 'P', 9, 25, 0, NULL, 2, 0, -4, -1, 0),
(141, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Betawi terdiri dari:</p>\r\n', 'L', 9, 25, 0, NULL, 2, 0, -4, -1, 0),
(142, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\r\n', 'L', 8, 16, 0, NULL, 2, 0, -4, -1, 0),
(143, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Riau terdiri dari:</p>\r\n', 'P', 8, 16, 0, NULL, 2, 0, -4, -1, 0),
(144, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\r\n', 'P', 8, 15, 0, NULL, 2, 0, -4, -1, 0),
(145, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Minang terdiri dari:</p>\r\n', 'L', 8, 15, 0, NULL, 2, 0, -4, -1, 0),
(146, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\r\n', 'P', 8, 14, 0, NULL, 2, 0, -4, -1, 0),
(147, 'Kostum Adat Mandailing', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Mandailing terdiri dari:</p>\r\n', 'L', 8, 14, 0, NULL, 2, 0, -4, -1, 0),
(148, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\r\n', 'P', 8, 14, 0, NULL, 2, 0, -4, -1, 0),
(149, 'Kostum Adat Toba', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Toba terdiri dari:</p>\r\n', 'P', 8, 14, 0, NULL, 2, 0, -4, -1, 0),
(150, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\r\n', 'P', 8, 13, 0, NULL, 2, 0, -4, -1, 0),
(151, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Aceh terdiri dari:</p>\r\n', 'L', 8, 13, 0, NULL, 2, 0, -4, -1, 0),
(152, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\r\n', 'P', 8, 21, 0, NULL, 2, 0, -4, -1, 0),
(153, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bangka Belitung terdiri dari:</p>\r\n', 'L', 8, 21, 0, NULL, 2, 0, -4, -1, 0),
(154, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\r\n', 'P', 14, 43, 0, NULL, 2, 0, -4, -1, 0),
(155, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Maluku terdiri dari:</p>\r\n', 'L', 14, 43, 0, NULL, 2, 0, -4, -1, 0),
(156, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\r\n', 'P', 14, 45, 0, NULL, 2, 0, -4, -1, 0),
(157, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Papua Barat terdiri dari:</p>\r\n', 'L', 14, 45, 0, NULL, 2, 0, -4, -1, 0),
(158, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\r\n', 'P', 12, 39, 0, NULL, 2, 0, -4, -1, 0),
(159, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bugis terdiri dari:</p>\r\n', 'L', 12, 39, 0, NULL, 2, 0, -4, -1, 0),
(160, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\r\n', 'L', 11, 36, 0, NULL, 2, 0, -4, -1, 0),
(161, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Tidung terdiri dari:</p>\r\n', 'P', 11, 36, 0, NULL, 2, 0, -4, -1, 0),
(162, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Bali terdiri dari:</p>\r\n', 'P', 10, 29, 0, NULL, 2, 0, -4, -1, 3),
(163, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\r\n', 'P', 11, 34, 0, NULL, 2, 0, -4, -1, 0),
(164, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Dayak terdiri dari:</p>\r\n', 'L', 11, 34, 0, NULL, 2, 0, -4, -1, 0),
(165, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sasak terdiri dari:</p>\r\n', 'P', 13, 30, 0, NULL, 2, 0, -4, -1, 0),
(166, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Sasak terdiri dari:</p>\r\n', 'L', 13, 30, 0, NULL, 2, 0, -4, -1, 0),
(167, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Rote terdiri dari:</p>\r\n', 'P', 13, 31, 0, NULL, 2, 3, 5, 1, 0),
(168, 'Kostum Adat', 150000, 150000, '<p>Sanggar kami menyediakan Kostum Adat Rote terdiri dari:</p>\r\n', 'L', 13, 31, 0, NULL, 2, 0, -4, -1, 0);

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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `review`, `gambar_reivew`, `tanggal`, `id_order`) VALUES
(6, 40, 'pentas berjalan dengan bagus karna baju yg d pakai sangat pas ', '3cef7b997b880e8db4eddaba05f404e1.jpeg', '2020-12-11', 'INV111220000001'),
(7, 40, 'bajunya bagus sekali', '276b69a42e85bb997dbc02cd33ed796d.jpg', '2020-12-11', 'INV111220000002');

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
  `is_delete` int(1) DEFAULT 0,
  `is_verif` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `photo`, `phone`, `email`, `alamat`, `is_delete`, `is_verif`) VALUES
(13, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, 1234567878891332, 'khalidabdullah213@gmail.com', 'jalan jalan', 0, 1),
(40, 'Nadia Safira', 'nadiasfira', '4a7d1ed414474e4033ac29ccb8653d9b', '5', NULL, 85843680400, 'nadiasafira338@gmail.com', 'cileungsi', 0, 1),
(49, 'andi', 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', '5', NULL, 81224204657, 'aandi30082001@gmail.com', 'andi', 0, 1),
(50, 'jaabdn', 'jaabdn', 'e87b6c6f391bd543bba2d363759de4e4', '5', NULL, 81224204652, 'andinich123@gmail.com', 'kantor dumbsway', 0, 1);

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
  ADD PRIMARY KEY (`id_detail_product`);

--
-- Indexes for table `gambar_product`
--
ALTER TABLE `gambar_product`
  ADD PRIMARY KEY (`id_gambar`);

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
  ADD PRIMARY KEY (`id_order`);

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
  ADD KEY `id_pulau` (`id_pulau`);

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
  MODIFY `id_detail_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1832;

--
-- AUTO_INCREMENT for table `gambar_product`
--
ALTER TABLE `gambar_product`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `jenis_product`
--
ALTER TABLE `jenis_product`
  MODIFY `id_jenis_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `les_tari`
--
ALTER TABLE `les_tari`
  MODIFY `id_less_tari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
