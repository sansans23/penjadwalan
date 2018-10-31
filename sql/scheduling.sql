-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduling`
--

-- --------------------------------------------------------

--
-- Table structure for table `harikerjas`
--

CREATE TABLE `harikerjas` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `harikerjas`
--

INSERT INTO `harikerjas` (`id`, `job_id`, `tanggal`, `bulan`, `tahun`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 2018, 8, NULL, '2018-08-15 00:32:38'),
(2, 1, 2, 3, 2018, 6, NULL, '2018-08-15 00:32:39'),
(3, 1, 3, 3, 2018, 7, NULL, '2018-08-15 00:32:39'),
(4, 1, 4, 3, 2018, 10, NULL, '2018-08-15 00:32:39'),
(5, 1, 5, 3, 2018, 7, NULL, '2018-08-15 00:32:39'),
(6, 1, 6, 3, 2018, 6, NULL, '2018-08-15 00:32:39'),
(7, 1, 7, 3, 2018, 4, NULL, NULL),
(8, 1, 8, 3, 2018, 4, NULL, NULL),
(9, 1, 9, 3, 2018, 4, NULL, NULL),
(10, 1, 10, 3, 2018, 4, NULL, NULL),
(11, 1, 11, 3, 2018, 4, NULL, NULL),
(12, 1, 12, 3, 2018, 4, NULL, NULL),
(13, 1, 13, 3, 2018, 4, NULL, NULL),
(14, 1, 14, 3, 2018, 4, NULL, NULL),
(15, 1, 15, 3, 2018, 4, NULL, NULL),
(16, 1, 16, 3, 2018, 4, NULL, NULL),
(17, 1, 17, 3, 2018, 4, NULL, NULL),
(18, 1, 18, 3, 2018, 4, NULL, NULL),
(19, 1, 19, 3, 2018, 4, NULL, NULL),
(20, 1, 20, 3, 2018, 4, NULL, NULL),
(21, 1, 21, 3, 2018, 4, NULL, NULL),
(22, 1, 22, 3, 2018, 4, NULL, NULL),
(23, 1, 23, 3, 2018, 4, NULL, NULL),
(24, 1, 24, 3, 2018, 4, NULL, NULL),
(25, 1, 25, 3, 2018, 4, NULL, NULL),
(26, 1, 26, 3, 2018, 4, NULL, NULL),
(27, 1, 27, 3, 2018, 4, NULL, NULL),
(28, 1, 28, 3, 2018, 4, NULL, NULL),
(29, 1, 29, 3, 2018, 4, NULL, NULL),
(30, 1, 30, 3, 2018, 4, NULL, NULL),
(31, 1, 31, 3, 2018, 4, NULL, NULL),
(32, 2, 1, 3, 2018, 109, NULL, '2018-07-17 05:34:19'),
(33, 2, 2, 3, 2018, 100, NULL, '2018-07-17 05:10:26'),
(34, 2, 3, 3, 2018, 100, NULL, '2018-07-17 05:10:26'),
(35, 2, 4, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(36, 2, 5, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(37, 2, 6, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(38, 2, 7, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(39, 2, 8, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(40, 2, 9, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(41, 2, 10, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(42, 2, 11, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(43, 2, 12, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(44, 2, 13, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(45, 2, 14, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(46, 2, 15, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(47, 2, 16, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(48, 2, 17, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(49, 2, 18, 3, 2018, 100, NULL, '2018-07-17 05:10:27'),
(50, 2, 19, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(51, 2, 20, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(52, 2, 21, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(53, 2, 22, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(54, 2, 23, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(55, 2, 24, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(56, 2, 25, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(57, 2, 26, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(58, 2, 27, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(59, 2, 28, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(60, 2, 29, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(61, 2, 30, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(62, 2, 31, 3, 2018, 100, NULL, '2018-07-17 05:10:28'),
(63, 2, 1, 1, 2018, 4, NULL, NULL),
(64, 2, 2, 1, 2018, 4, NULL, NULL),
(65, 2, 3, 1, 2018, 4, NULL, NULL),
(66, 2, 4, 1, 2018, 4, NULL, NULL),
(67, 2, 5, 1, 2018, 4, NULL, NULL),
(68, 2, 6, 1, 2018, 4, NULL, NULL),
(69, 2, 7, 1, 2018, 4, NULL, NULL),
(70, 2, 8, 1, 2018, 4, NULL, NULL),
(71, 2, 9, 1, 2018, 4, NULL, NULL),
(72, 2, 10, 1, 2018, 4, NULL, NULL),
(73, 2, 11, 1, 2018, 4, NULL, NULL),
(74, 2, 12, 1, 2018, 4, NULL, NULL),
(75, 2, 13, 1, 2018, 4, NULL, NULL),
(76, 2, 14, 1, 2018, 4, NULL, NULL),
(77, 2, 15, 1, 2018, 4, NULL, NULL),
(78, 2, 16, 1, 2018, 4, NULL, NULL),
(79, 2, 17, 1, 2018, 4, NULL, NULL),
(80, 2, 18, 1, 2018, 4, NULL, NULL),
(81, 2, 19, 1, 2018, 4, NULL, NULL),
(82, 2, 20, 1, 2018, 4, NULL, NULL),
(83, 2, 21, 1, 2018, 4, NULL, NULL),
(84, 2, 22, 1, 2018, 4, NULL, NULL),
(85, 2, 23, 1, 2018, 4, NULL, NULL),
(86, 2, 24, 1, 2018, 4, NULL, NULL),
(87, 2, 25, 1, 2018, 4, NULL, NULL),
(88, 2, 26, 1, 2018, 4, NULL, NULL),
(89, 2, 27, 1, 2018, 4, NULL, NULL),
(90, 2, 28, 1, 2018, 4, NULL, NULL),
(91, 2, 29, 1, 2018, 4, NULL, NULL),
(92, 2, 30, 1, 2018, 4, NULL, NULL),
(93, 2, 31, 1, 2018, 4, NULL, NULL),
(94, 2, 1, 2, 2018, 4, NULL, NULL),
(95, 2, 2, 2, 2018, 4, NULL, NULL),
(96, 2, 3, 2, 2018, 4, NULL, NULL),
(97, 2, 4, 2, 2018, 4, NULL, NULL),
(98, 2, 5, 2, 2018, 4, NULL, NULL),
(99, 2, 6, 2, 2018, 4, NULL, NULL),
(100, 2, 7, 2, 2018, 4, NULL, NULL),
(101, 2, 8, 2, 2018, 4, NULL, NULL),
(102, 2, 9, 2, 2018, 4, NULL, NULL),
(103, 2, 10, 2, 2018, 4, NULL, NULL),
(104, 2, 11, 2, 2018, 4, NULL, NULL),
(105, 2, 12, 2, 2018, 4, NULL, NULL),
(106, 2, 13, 2, 2018, 4, NULL, NULL),
(107, 2, 14, 2, 2018, 4, NULL, NULL),
(108, 2, 15, 2, 2018, 4, NULL, NULL),
(109, 2, 16, 2, 2018, 4, NULL, NULL),
(110, 2, 17, 2, 2018, 4, NULL, NULL),
(111, 2, 18, 2, 2018, 4, NULL, NULL),
(112, 2, 19, 2, 2018, 4, NULL, NULL),
(113, 2, 20, 2, 2018, 4, NULL, NULL),
(114, 2, 21, 2, 2018, 4, NULL, NULL),
(115, 2, 22, 2, 2018, 4, NULL, NULL),
(116, 2, 23, 2, 2018, 4, NULL, NULL),
(117, 2, 24, 2, 2018, 4, NULL, NULL),
(118, 2, 25, 2, 2018, 4, NULL, NULL),
(119, 2, 26, 2, 2018, 4, NULL, NULL),
(120, 2, 27, 2, 2018, 4, NULL, NULL),
(121, 2, 28, 2, 2018, 4, NULL, NULL),
(122, 2, 1, 7, 2018, 6, NULL, '2018-07-24 07:44:03'),
(123, 2, 2, 7, 2018, 3, NULL, '2018-07-24 07:44:03'),
(124, 2, 3, 7, 2018, 4, NULL, NULL),
(125, 2, 4, 7, 2018, 4, NULL, NULL),
(126, 2, 5, 7, 2018, 4, NULL, NULL),
(127, 2, 6, 7, 2018, 4, NULL, NULL),
(128, 2, 7, 7, 2018, 4, NULL, NULL),
(129, 2, 8, 7, 2018, 6, NULL, '2018-07-24 07:44:03'),
(130, 2, 9, 7, 2018, 3, NULL, '2018-07-24 07:44:04'),
(131, 2, 10, 7, 2018, 4, NULL, NULL),
(132, 2, 11, 7, 2018, 4, NULL, NULL),
(133, 2, 12, 7, 2018, 4, NULL, NULL),
(134, 2, 13, 7, 2018, 4, NULL, NULL),
(135, 2, 14, 7, 2018, 4, NULL, NULL),
(136, 2, 15, 7, 2018, 6, NULL, '2018-07-24 07:44:04'),
(137, 2, 16, 7, 2018, 3, NULL, '2018-07-24 07:44:04'),
(138, 2, 17, 7, 2018, 4, NULL, NULL),
(139, 2, 18, 7, 2018, 4, NULL, NULL),
(140, 2, 19, 7, 2018, 4, NULL, NULL),
(141, 2, 20, 7, 2018, 4, NULL, NULL),
(142, 2, 21, 7, 2018, 4, NULL, NULL),
(143, 2, 22, 7, 2018, 6, NULL, '2018-07-24 07:44:04'),
(144, 2, 23, 7, 2018, 3, NULL, '2018-07-24 07:44:04'),
(145, 2, 24, 7, 2018, 4, NULL, NULL),
(146, 2, 25, 7, 2018, 4, NULL, NULL),
(147, 2, 26, 7, 2018, 4, NULL, NULL),
(148, 2, 27, 7, 2018, 4, NULL, NULL),
(149, 2, 28, 7, 2018, 4, NULL, NULL),
(150, 2, 29, 7, 2018, 6, NULL, '2018-07-24 07:44:04'),
(151, 2, 30, 7, 2018, 3, NULL, '2018-07-24 07:44:04'),
(152, 2, 31, 7, 2018, 4, NULL, NULL),
(153, 1, 1, 7, 2018, 6, NULL, '2018-07-24 07:48:13'),
(154, 1, 2, 7, 2018, 3, NULL, '2018-07-24 07:48:13'),
(155, 1, 3, 7, 2018, 4, NULL, NULL),
(156, 1, 4, 7, 2018, 4, NULL, NULL),
(157, 1, 5, 7, 2018, 4, NULL, NULL),
(158, 1, 6, 7, 2018, 4, NULL, NULL),
(159, 1, 7, 7, 2018, 4, NULL, NULL),
(160, 1, 8, 7, 2018, 6, NULL, '2018-07-24 07:48:13'),
(161, 1, 9, 7, 2018, 3, NULL, '2018-07-24 07:48:13'),
(162, 1, 10, 7, 2018, 4, NULL, NULL),
(163, 1, 11, 7, 2018, 4, NULL, NULL),
(164, 1, 12, 7, 2018, 4, NULL, NULL),
(165, 1, 13, 7, 2018, 4, NULL, NULL),
(166, 1, 14, 7, 2018, 4, NULL, NULL),
(167, 1, 15, 7, 2018, 6, NULL, '2018-07-24 07:48:13'),
(168, 1, 16, 7, 2018, 3, NULL, '2018-07-24 07:48:13'),
(169, 1, 17, 7, 2018, 4, NULL, NULL),
(170, 1, 18, 7, 2018, 4, NULL, NULL),
(171, 1, 19, 7, 2018, 4, NULL, NULL),
(172, 1, 20, 7, 2018, 4, NULL, NULL),
(173, 1, 21, 7, 2018, 4, NULL, NULL),
(174, 1, 22, 7, 2018, 6, NULL, '2018-07-24 07:48:13'),
(175, 1, 23, 7, 2018, 3, NULL, '2018-07-24 07:48:13'),
(176, 1, 24, 7, 2018, 4, NULL, NULL),
(177, 1, 25, 7, 2018, 4, NULL, NULL),
(178, 1, 26, 7, 2018, 4, NULL, NULL),
(179, 1, 27, 7, 2018, 4, NULL, NULL),
(180, 1, 28, 7, 2018, 4, NULL, NULL),
(181, 1, 29, 7, 2018, 6, NULL, '2018-07-24 07:48:13'),
(182, 1, 30, 7, 2018, 3, NULL, '2018-07-24 07:48:13'),
(183, 1, 31, 7, 2018, 4, NULL, NULL),
(184, 1, 1, 4, 2018, 8, NULL, '2018-08-15 00:34:34'),
(185, 1, 2, 4, 2018, 4, NULL, NULL),
(186, 1, 3, 4, 2018, 4, NULL, NULL),
(187, 1, 4, 4, 2018, 4, NULL, NULL),
(188, 1, 5, 4, 2018, 4, NULL, NULL),
(189, 1, 6, 4, 2018, 4, NULL, NULL),
(190, 1, 7, 4, 2018, 4, NULL, NULL),
(191, 1, 8, 4, 2018, 9, NULL, '2018-08-15 00:34:34'),
(192, 1, 9, 4, 2018, 4, NULL, NULL),
(193, 1, 10, 4, 2018, 4, NULL, NULL),
(194, 1, 11, 4, 2018, 4, NULL, NULL),
(195, 1, 12, 4, 2018, 4, NULL, NULL),
(196, 1, 13, 4, 2018, 4, NULL, NULL),
(197, 1, 14, 4, 2018, 4, NULL, NULL),
(198, 1, 15, 4, 2018, 8, NULL, '2018-08-15 00:34:35'),
(199, 1, 16, 4, 2018, 4, NULL, NULL),
(200, 1, 17, 4, 2018, 4, NULL, NULL),
(201, 1, 18, 4, 2018, 4, NULL, NULL),
(202, 1, 19, 4, 2018, 4, NULL, NULL),
(203, 1, 20, 4, 2018, 4, NULL, NULL),
(204, 1, 21, 4, 2018, 4, NULL, NULL),
(205, 1, 22, 4, 2018, 8, NULL, '2018-08-15 00:34:35'),
(206, 1, 23, 4, 2018, 4, NULL, NULL),
(207, 1, 24, 4, 2018, 4, NULL, NULL),
(208, 1, 25, 4, 2018, 4, NULL, NULL),
(209, 1, 26, 4, 2018, 4, NULL, NULL),
(210, 1, 27, 4, 2018, 4, NULL, NULL),
(211, 1, 28, 4, 2018, 4, NULL, NULL),
(212, 1, 29, 4, 2018, 8, NULL, '2018-08-15 00:34:35'),
(213, 1, 30, 4, 2018, 4, NULL, NULL),
(214, 1, 1, 10, 2018, 4, NULL, NULL),
(215, 1, 2, 10, 2018, 4, NULL, NULL),
(216, 1, 3, 10, 2018, 4, NULL, NULL),
(217, 1, 4, 10, 2018, 4, NULL, NULL),
(218, 1, 5, 10, 2018, 4, NULL, NULL),
(219, 1, 6, 10, 2018, 4, NULL, '2018-10-02 22:49:02'),
(220, 1, 7, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(221, 1, 8, 10, 2018, 4, NULL, NULL),
(222, 1, 9, 10, 2018, 4, NULL, NULL),
(223, 1, 10, 10, 2018, 4, NULL, NULL),
(224, 1, 11, 10, 2018, 4, NULL, NULL),
(225, 1, 12, 10, 2018, 4, NULL, NULL),
(226, 1, 13, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(227, 1, 14, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(228, 1, 15, 10, 2018, 4, NULL, NULL),
(229, 1, 16, 10, 2018, 4, NULL, NULL),
(230, 1, 17, 10, 2018, 4, NULL, NULL),
(231, 1, 18, 10, 2018, 4, NULL, NULL),
(232, 1, 19, 10, 2018, 4, NULL, NULL),
(233, 1, 20, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(234, 1, 21, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(235, 1, 22, 10, 2018, 4, NULL, NULL),
(236, 1, 23, 10, 2018, 4, NULL, NULL),
(237, 1, 24, 10, 2018, 4, NULL, NULL),
(238, 1, 25, 10, 2018, 4, NULL, NULL),
(239, 1, 26, 10, 2018, 4, NULL, NULL),
(240, 1, 27, 10, 2018, 4, NULL, '2018-10-02 22:49:02'),
(241, 1, 28, 10, 2018, 4, NULL, '2018-10-03 05:32:01'),
(242, 1, 29, 10, 2018, 4, NULL, NULL),
(243, 1, 30, 10, 2018, 4, NULL, NULL),
(244, 1, 31, 10, 2018, 4, NULL, NULL),
(245, 1, 1, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(246, 1, 2, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(247, 1, 3, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(248, 1, 4, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(249, 1, 5, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(250, 1, 6, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(251, 1, 7, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(252, 1, 8, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(253, 1, 9, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(254, 1, 10, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(255, 1, 11, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(256, 1, 12, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(257, 1, 13, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(258, 1, 14, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(259, 1, 15, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(260, 1, 16, 1, 2018, 1, NULL, '2018-08-15 03:10:56'),
(261, 1, 17, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(262, 1, 18, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(263, 1, 19, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(264, 1, 20, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(265, 1, 21, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(266, 1, 22, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(267, 1, 23, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(268, 1, 24, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(269, 1, 25, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(270, 1, 26, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(271, 1, 27, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(272, 1, 28, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(273, 1, 29, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(274, 1, 30, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(275, 1, 31, 1, 2018, 1, NULL, '2018-08-15 03:10:57'),
(276, 1, 1, 6, 2018, 4, NULL, NULL),
(277, 1, 2, 6, 2018, 4, NULL, NULL),
(278, 1, 3, 6, 2018, 4, NULL, NULL),
(279, 1, 4, 6, 2018, 4, NULL, NULL),
(280, 1, 5, 6, 2018, 4, NULL, NULL),
(281, 1, 6, 6, 2018, 4, NULL, NULL),
(282, 1, 7, 6, 2018, 4, NULL, NULL),
(283, 1, 8, 6, 2018, 4, NULL, NULL),
(284, 1, 9, 6, 2018, 4, NULL, NULL),
(285, 1, 10, 6, 2018, 4, NULL, NULL),
(286, 1, 11, 6, 2018, 4, NULL, NULL),
(287, 1, 12, 6, 2018, 4, NULL, NULL),
(288, 1, 13, 6, 2018, 4, NULL, NULL),
(289, 1, 14, 6, 2018, 4, NULL, NULL),
(290, 1, 15, 6, 2018, 4, NULL, NULL),
(291, 1, 16, 6, 2018, 4, NULL, NULL),
(292, 1, 17, 6, 2018, 4, NULL, NULL),
(293, 1, 18, 6, 2018, 4, NULL, NULL),
(294, 1, 19, 6, 2018, 4, NULL, NULL),
(295, 1, 20, 6, 2018, 4, NULL, NULL),
(296, 1, 21, 6, 2018, 4, NULL, NULL),
(297, 1, 22, 6, 2018, 4, NULL, NULL),
(298, 1, 23, 6, 2018, 4, NULL, NULL),
(299, 1, 24, 6, 2018, 4, NULL, NULL),
(300, 1, 25, 6, 2018, 4, NULL, NULL),
(301, 1, 26, 6, 2018, 4, NULL, NULL),
(302, 1, 27, 6, 2018, 4, NULL, NULL),
(303, 1, 28, 6, 2018, 4, NULL, NULL),
(304, 1, 29, 6, 2018, 4, NULL, NULL),
(305, 1, 30, 6, 2018, 4, NULL, NULL),
(306, 1, 1, 9, 2018, 5, NULL, '2018-09-04 08:23:41'),
(307, 1, 2, 9, 2018, 8, NULL, '2018-09-04 08:23:42'),
(308, 1, 3, 9, 2018, 4, NULL, NULL),
(309, 1, 4, 9, 2018, 4, NULL, NULL),
(310, 1, 5, 9, 2018, 4, NULL, NULL),
(311, 1, 6, 9, 2018, 4, NULL, NULL),
(312, 1, 7, 9, 2018, 4, NULL, NULL),
(313, 1, 8, 9, 2018, 5, NULL, '2018-09-04 08:23:42'),
(314, 1, 9, 9, 2018, 6, NULL, '2018-09-04 08:23:42'),
(315, 1, 10, 9, 2018, 4, NULL, NULL),
(316, 1, 11, 9, 2018, 4, NULL, NULL),
(317, 1, 12, 9, 2018, 4, NULL, NULL),
(318, 1, 13, 9, 2018, 4, NULL, NULL),
(319, 1, 14, 9, 2018, 4, NULL, NULL),
(320, 1, 15, 9, 2018, 5, NULL, '2018-09-04 08:23:42'),
(321, 1, 16, 9, 2018, 6, NULL, '2018-09-04 08:23:42'),
(322, 1, 17, 9, 2018, 4, NULL, NULL),
(323, 1, 18, 9, 2018, 4, NULL, NULL),
(324, 1, 19, 9, 2018, 4, NULL, NULL),
(325, 1, 20, 9, 2018, 4, NULL, NULL),
(326, 1, 21, 9, 2018, 4, NULL, NULL),
(327, 1, 22, 9, 2018, 5, NULL, '2018-09-04 08:23:42'),
(328, 1, 23, 9, 2018, 6, NULL, '2018-09-04 08:23:42'),
(329, 1, 24, 9, 2018, 4, NULL, NULL),
(330, 1, 25, 9, 2018, 4, NULL, NULL),
(331, 1, 26, 9, 2018, 4, NULL, NULL),
(332, 1, 27, 9, 2018, 4, NULL, NULL),
(333, 1, 28, 9, 2018, 4, NULL, NULL),
(334, 1, 29, 9, 2018, 5, NULL, '2018-09-04 08:23:42'),
(335, 1, 30, 9, 2018, 6, NULL, '2018-09-04 08:23:42'),
(336, 1, 1, 11, 2018, 4, NULL, NULL),
(337, 1, 2, 11, 2018, 4, NULL, NULL),
(338, 1, 3, 11, 2018, 4, NULL, NULL),
(339, 1, 4, 11, 2018, 4, NULL, NULL),
(340, 1, 5, 11, 2018, 4, NULL, NULL),
(341, 1, 6, 11, 2018, 4, NULL, NULL),
(342, 1, 7, 11, 2018, 4, NULL, NULL),
(343, 1, 8, 11, 2018, 4, NULL, NULL),
(344, 1, 9, 11, 2018, 4, NULL, NULL),
(345, 1, 10, 11, 2018, 4, NULL, NULL),
(346, 1, 11, 11, 2018, 4, NULL, NULL),
(347, 1, 12, 11, 2018, 4, NULL, NULL),
(348, 1, 13, 11, 2018, 4, NULL, NULL),
(349, 1, 14, 11, 2018, 4, NULL, NULL),
(350, 1, 15, 11, 2018, 4, NULL, NULL),
(351, 1, 16, 11, 2018, 4, NULL, NULL),
(352, 1, 17, 11, 2018, 4, NULL, NULL),
(353, 1, 18, 11, 2018, 4, NULL, NULL),
(354, 1, 19, 11, 2018, 4, NULL, NULL),
(355, 1, 20, 11, 2018, 8, NULL, '2018-10-02 23:09:29'),
(356, 1, 21, 11, 2018, 4, NULL, NULL),
(357, 1, 22, 11, 2018, 4, NULL, NULL),
(358, 1, 23, 11, 2018, 4, NULL, NULL),
(359, 1, 24, 11, 2018, 4, NULL, NULL),
(360, 1, 25, 11, 2018, 4, NULL, NULL),
(361, 1, 26, 11, 2018, 4, NULL, NULL),
(362, 1, 27, 11, 2018, 4, NULL, NULL),
(363, 1, 28, 11, 2018, 4, NULL, NULL),
(364, 1, 29, 11, 2018, 4, NULL, NULL),
(365, 1, 30, 11, 2018, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hari_sdms`
--

CREATE TABLE `hari_sdms` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hari_kerja` int(11) NOT NULL,
  `id_sdm` int(11) NOT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hari_sdms`
--

INSERT INTO `hari_sdms` (`id`, `id_hari_kerja`, `id_sdm`, `kehadiran`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 1, NULL, '2018-08-25 00:10:03'),
(2, 1, 22, 1, NULL, '2018-08-25 00:10:03'),
(3, 1, 23, 1, NULL, '2018-08-25 00:10:03'),
(4, 1, 24, 1, NULL, '2018-08-25 00:10:03'),
(5, 1, 25, 1, NULL, '2018-08-25 00:10:03'),
(6, 1, 1, 1, NULL, '2018-08-25 00:10:03'),
(7, 1, 18, 1, NULL, '2018-08-25 00:10:03'),
(8, 1, 36, 1, NULL, '2018-08-25 00:10:03'),
(9, 2, 26, NULL, NULL, NULL),
(10, 2, 27, NULL, NULL, NULL),
(11, 2, 28, NULL, NULL, NULL),
(12, 2, 29, NULL, NULL, NULL),
(13, 2, 30, NULL, NULL, NULL),
(14, 2, 31, NULL, NULL, NULL),
(15, 3, 32, NULL, NULL, NULL),
(16, 3, 33, NULL, NULL, NULL),
(17, 3, 34, NULL, NULL, NULL),
(18, 3, 35, NULL, NULL, NULL),
(19, 3, 36, NULL, NULL, NULL),
(20, 3, 37, NULL, NULL, NULL),
(21, 3, 14, NULL, NULL, NULL),
(22, 4, 37, NULL, NULL, NULL),
(23, 4, 17, NULL, NULL, NULL),
(24, 4, 36, NULL, NULL, NULL),
(25, 4, 35, NULL, NULL, NULL),
(26, 4, 34, NULL, NULL, NULL),
(27, 4, 33, NULL, NULL, NULL),
(28, 4, 32, NULL, NULL, NULL),
(29, 4, 25, NULL, NULL, NULL),
(30, 4, 24, NULL, NULL, NULL),
(31, 4, 23, NULL, NULL, NULL),
(32, 5, 37, NULL, NULL, NULL),
(33, 5, 1, NULL, NULL, NULL),
(34, 5, 2, NULL, NULL, NULL),
(35, 5, 3, NULL, NULL, NULL),
(36, 5, 4, NULL, NULL, NULL),
(37, 5, 5, NULL, NULL, NULL),
(38, 5, 6, NULL, NULL, NULL),
(39, 6, 9, NULL, NULL, NULL),
(40, 6, 10, NULL, NULL, NULL),
(41, 6, 11, NULL, NULL, NULL),
(42, 6, 12, NULL, NULL, NULL),
(43, 6, 13, NULL, NULL, NULL),
(44, 6, 14, NULL, NULL, NULL),
(45, 7, 15, NULL, NULL, NULL),
(46, 7, 16, NULL, NULL, NULL),
(47, 7, 18, NULL, NULL, NULL),
(48, 7, 19, NULL, NULL, NULL),
(49, 8, 21, NULL, NULL, NULL),
(50, 8, 22, NULL, NULL, NULL),
(51, 8, 23, NULL, NULL, NULL),
(52, 8, 24, NULL, NULL, NULL),
(53, 9, 26, 1, NULL, '2018-10-02 06:31:04'),
(54, 9, 27, 1, NULL, '2018-10-02 06:31:04'),
(55, 9, 28, 1, NULL, '2018-10-02 06:31:04'),
(56, 9, 29, 1, NULL, '2018-10-02 06:31:04'),
(57, 10, 32, NULL, NULL, NULL),
(58, 10, 33, NULL, NULL, NULL),
(59, 10, 34, NULL, NULL, NULL),
(60, 10, 35, NULL, NULL, NULL),
(61, 11, 20, NULL, NULL, NULL),
(62, 11, 19, NULL, NULL, NULL),
(63, 11, 14, NULL, NULL, NULL),
(64, 11, 30, NULL, NULL, NULL),
(65, 12, 7, NULL, NULL, NULL),
(66, 12, 37, NULL, NULL, NULL),
(67, 12, 1, NULL, NULL, NULL),
(68, 12, 2, NULL, NULL, NULL),
(69, 13, 8, NULL, NULL, NULL),
(70, 13, 9, NULL, NULL, NULL),
(71, 13, 10, NULL, NULL, NULL),
(72, 13, 11, NULL, NULL, NULL),
(73, 14, 15, NULL, NULL, NULL),
(74, 14, 16, NULL, NULL, NULL),
(75, 14, 17, NULL, NULL, NULL),
(76, 14, 18, NULL, NULL, NULL),
(77, 15, 21, NULL, NULL, NULL),
(78, 15, 22, NULL, NULL, NULL),
(79, 15, 25, NULL, NULL, NULL),
(80, 15, 23, NULL, NULL, NULL),
(81, 16, 31, NULL, NULL, NULL),
(82, 16, 26, NULL, NULL, NULL),
(83, 16, 27, NULL, NULL, NULL),
(84, 16, 28, NULL, NULL, NULL),
(85, 17, 36, NULL, NULL, NULL),
(86, 17, 32, NULL, NULL, NULL),
(87, 17, 33, NULL, NULL, NULL),
(88, 17, 34, NULL, NULL, NULL),
(89, 18, 20, NULL, NULL, NULL),
(90, 18, 12, NULL, NULL, NULL),
(91, 18, 13, NULL, NULL, NULL),
(92, 18, 19, NULL, NULL, NULL),
(93, 19, 3, NULL, NULL, NULL),
(94, 19, 4, NULL, NULL, NULL),
(95, 19, 5, NULL, NULL, NULL),
(96, 19, 6, NULL, NULL, NULL),
(97, 20, 8, NULL, NULL, NULL),
(98, 20, 9, NULL, NULL, NULL),
(99, 20, 10, NULL, NULL, NULL),
(100, 20, 11, NULL, NULL, NULL),
(101, 21, 15, NULL, NULL, NULL),
(102, 21, 16, NULL, NULL, NULL),
(103, 21, 17, NULL, NULL, NULL),
(104, 21, 18, NULL, NULL, NULL),
(105, 22, 21, NULL, NULL, NULL),
(106, 22, 22, NULL, NULL, NULL),
(107, 22, 24, NULL, NULL, NULL),
(108, 22, 25, NULL, NULL, NULL),
(109, 23, 29, NULL, NULL, NULL),
(110, 23, 30, NULL, NULL, NULL),
(111, 23, 31, NULL, NULL, NULL),
(112, 23, 26, NULL, NULL, NULL),
(113, 24, 35, NULL, NULL, NULL),
(114, 24, 36, NULL, NULL, NULL),
(115, 24, 32, NULL, NULL, NULL),
(116, 24, 33, NULL, NULL, NULL),
(117, 25, 20, NULL, NULL, NULL),
(118, 25, 14, NULL, NULL, NULL),
(119, 25, 13, NULL, NULL, NULL),
(120, 25, 12, NULL, NULL, NULL),
(121, 26, 7, NULL, NULL, NULL),
(122, 26, 37, NULL, NULL, NULL),
(123, 26, 1, NULL, NULL, NULL),
(124, 26, 2, NULL, NULL, NULL),
(125, 27, 8, NULL, NULL, NULL),
(126, 27, 9, NULL, NULL, NULL),
(127, 27, 10, NULL, NULL, NULL),
(128, 27, 11, NULL, NULL, NULL),
(129, 28, 15, NULL, NULL, NULL),
(130, 28, 16, NULL, NULL, NULL),
(131, 28, 17, NULL, NULL, NULL),
(132, 28, 18, NULL, NULL, NULL),
(133, 29, 21, NULL, NULL, NULL),
(134, 29, 22, NULL, NULL, NULL),
(135, 29, 23, NULL, NULL, NULL),
(136, 29, 24, NULL, NULL, NULL),
(137, 30, 27, NULL, NULL, NULL),
(138, 30, 28, NULL, NULL, NULL),
(139, 30, 29, NULL, NULL, NULL),
(140, 30, 30, NULL, NULL, NULL),
(141, 31, 34, NULL, NULL, NULL),
(142, 31, 35, NULL, NULL, NULL),
(143, 31, 36, NULL, NULL, NULL),
(144, 31, 32, NULL, NULL, NULL),
(145, 214, 1, NULL, NULL, NULL),
(146, 214, 2, NULL, NULL, NULL),
(147, 214, 3, NULL, NULL, NULL),
(148, 214, 4, NULL, NULL, NULL),
(149, 215, 8, NULL, NULL, NULL),
(150, 215, 9, NULL, NULL, NULL),
(151, 215, 10, NULL, NULL, NULL),
(152, 215, 11, NULL, NULL, NULL),
(153, 216, 15, 1, NULL, '2018-10-02 22:49:58'),
(154, 216, 16, 1, NULL, '2018-10-02 22:49:58'),
(155, 216, 17, 1, NULL, '2018-10-02 22:49:58'),
(156, 216, 18, 1, NULL, '2018-10-02 22:49:58'),
(157, 217, 21, NULL, NULL, NULL),
(158, 217, 22, NULL, NULL, NULL),
(159, 217, 23, NULL, NULL, NULL),
(160, 217, 24, NULL, NULL, NULL),
(161, 218, 26, NULL, NULL, NULL),
(162, 218, 27, NULL, NULL, NULL),
(163, 218, 28, NULL, NULL, NULL),
(164, 218, 29, NULL, NULL, NULL),
(165, 219, 32, NULL, NULL, NULL),
(166, 219, 33, NULL, NULL, NULL),
(167, 219, 34, NULL, NULL, NULL),
(168, 219, 35, NULL, NULL, NULL),
(169, 220, 37, NULL, NULL, NULL),
(170, 220, 12, NULL, NULL, NULL),
(171, 220, 36, NULL, NULL, NULL),
(172, 220, 31, NULL, NULL, NULL),
(173, 221, 5, NULL, NULL, NULL),
(174, 221, 6, NULL, NULL, NULL),
(175, 221, 7, NULL, NULL, NULL),
(176, 221, 1, NULL, NULL, NULL),
(177, 222, 14, NULL, NULL, NULL),
(178, 222, 13, NULL, NULL, NULL),
(179, 222, 8, NULL, NULL, NULL),
(180, 222, 9, NULL, NULL, NULL),
(181, 223, 19, NULL, NULL, NULL),
(182, 223, 20, NULL, NULL, NULL),
(183, 223, 15, NULL, NULL, NULL),
(184, 223, 16, NULL, NULL, NULL),
(185, 224, 25, NULL, NULL, NULL),
(186, 224, 21, NULL, NULL, NULL),
(187, 224, 22, NULL, NULL, NULL),
(188, 224, 23, NULL, NULL, NULL),
(189, 225, 30, NULL, NULL, NULL),
(190, 225, 26, NULL, NULL, NULL),
(191, 225, 27, NULL, NULL, NULL),
(192, 225, 28, NULL, NULL, NULL),
(193, 226, 32, NULL, NULL, NULL),
(194, 226, 33, NULL, NULL, NULL),
(195, 226, 34, NULL, NULL, NULL),
(196, 226, 35, NULL, NULL, NULL),
(197, 227, 37, NULL, NULL, NULL),
(198, 227, 14, NULL, NULL, NULL),
(199, 227, 36, NULL, NULL, NULL),
(200, 227, 31, NULL, NULL, NULL),
(201, 228, 2, NULL, NULL, NULL),
(202, 228, 3, NULL, NULL, NULL),
(203, 228, 4, NULL, NULL, NULL),
(204, 228, 5, NULL, NULL, NULL),
(205, 229, 10, NULL, NULL, NULL),
(206, 229, 11, NULL, NULL, NULL),
(207, 229, 12, NULL, NULL, NULL),
(208, 229, 13, NULL, NULL, NULL),
(209, 230, 17, NULL, NULL, NULL),
(210, 230, 18, NULL, NULL, NULL),
(211, 230, 19, NULL, NULL, NULL),
(212, 230, 20, NULL, NULL, NULL),
(213, 231, 24, NULL, NULL, NULL),
(214, 231, 25, NULL, NULL, NULL),
(215, 231, 21, NULL, NULL, NULL),
(216, 231, 22, NULL, NULL, NULL),
(217, 232, 29, NULL, NULL, NULL),
(218, 232, 30, NULL, NULL, NULL),
(219, 232, 26, NULL, NULL, NULL),
(220, 232, 27, NULL, NULL, NULL),
(221, 233, 32, NULL, NULL, NULL),
(222, 233, 33, NULL, NULL, NULL),
(223, 233, 34, NULL, NULL, NULL),
(224, 233, 35, NULL, NULL, NULL),
(225, 234, 7, NULL, NULL, NULL),
(226, 234, 6, NULL, NULL, NULL),
(227, 234, 1, NULL, NULL, NULL),
(228, 234, 17, NULL, NULL, NULL),
(229, 235, 2, NULL, NULL, NULL),
(230, 235, 3, NULL, NULL, NULL),
(231, 235, 4, NULL, NULL, NULL),
(232, 235, 5, NULL, NULL, NULL),
(233, 236, 8, NULL, NULL, NULL),
(234, 236, 9, NULL, NULL, NULL),
(235, 236, 10, NULL, NULL, NULL),
(236, 236, 11, NULL, NULL, NULL),
(237, 237, 15, NULL, NULL, NULL),
(238, 237, 16, NULL, NULL, NULL),
(239, 237, 18, NULL, NULL, NULL),
(240, 237, 19, NULL, NULL, NULL),
(241, 238, 23, NULL, NULL, NULL),
(242, 238, 24, NULL, NULL, NULL),
(243, 238, 25, NULL, NULL, NULL),
(244, 238, 21, NULL, NULL, NULL),
(245, 239, 28, NULL, NULL, NULL),
(246, 239, 29, NULL, NULL, NULL),
(247, 239, 30, NULL, NULL, NULL),
(248, 239, 31, NULL, NULL, NULL),
(249, 240, 36, NULL, NULL, NULL),
(250, 240, 32, NULL, NULL, NULL),
(251, 240, 33, NULL, NULL, NULL),
(252, 240, 34, NULL, NULL, NULL),
(253, 241, 37, NULL, NULL, NULL),
(254, 241, 12, NULL, NULL, NULL),
(255, 241, 6, NULL, NULL, NULL),
(256, 241, 7, NULL, NULL, NULL),
(257, 242, 1, NULL, NULL, NULL),
(258, 242, 2, NULL, NULL, NULL),
(259, 242, 3, NULL, NULL, NULL),
(260, 242, 4, NULL, NULL, NULL),
(261, 243, 14, NULL, NULL, NULL),
(262, 243, 13, NULL, NULL, NULL),
(263, 243, 8, NULL, NULL, NULL),
(264, 243, 9, NULL, NULL, NULL),
(265, 244, 20, NULL, NULL, NULL),
(266, 244, 15, NULL, NULL, NULL),
(267, 244, 16, NULL, NULL, NULL),
(268, 244, 17, NULL, NULL, NULL),
(269, 153, 1, NULL, NULL, NULL),
(270, 153, 28, NULL, NULL, NULL),
(271, 153, 22, NULL, NULL, NULL),
(272, 153, 23, NULL, NULL, NULL),
(273, 153, 24, NULL, NULL, NULL),
(274, 153, 25, NULL, NULL, NULL),
(275, 154, 2, NULL, NULL, NULL),
(276, 154, 3, NULL, NULL, NULL),
(277, 154, 4, NULL, NULL, NULL),
(278, 155, 8, NULL, NULL, NULL),
(279, 155, 9, NULL, NULL, NULL),
(280, 155, 10, NULL, NULL, NULL),
(281, 155, 11, NULL, NULL, NULL),
(282, 156, 15, NULL, NULL, NULL),
(283, 156, 16, NULL, NULL, NULL),
(284, 156, 17, NULL, NULL, NULL),
(285, 156, 18, NULL, NULL, NULL),
(286, 157, 21, NULL, NULL, NULL),
(287, 157, 22, NULL, NULL, NULL),
(288, 157, 23, NULL, NULL, NULL),
(289, 157, 24, NULL, NULL, NULL),
(290, 158, 26, NULL, NULL, NULL),
(291, 158, 27, NULL, NULL, NULL),
(292, 158, 29, NULL, NULL, NULL),
(293, 158, 30, NULL, NULL, NULL),
(294, 159, 32, NULL, NULL, NULL),
(295, 159, 33, NULL, NULL, NULL),
(296, 159, 34, NULL, NULL, NULL),
(297, 159, 35, NULL, NULL, NULL),
(298, 160, 37, NULL, NULL, NULL),
(299, 160, 12, NULL, NULL, NULL),
(300, 160, 36, NULL, NULL, NULL),
(301, 160, 31, NULL, NULL, NULL),
(302, 160, 20, NULL, NULL, NULL),
(303, 160, 14, NULL, NULL, NULL),
(304, 161, 5, NULL, NULL, NULL),
(305, 161, 6, NULL, NULL, NULL),
(306, 161, 7, NULL, NULL, NULL),
(307, 162, 13, NULL, NULL, NULL),
(308, 162, 8, NULL, NULL, NULL),
(309, 162, 9, NULL, NULL, NULL),
(310, 162, 10, NULL, NULL, NULL),
(311, 163, 19, NULL, NULL, NULL),
(312, 163, 15, NULL, NULL, NULL),
(313, 163, 16, NULL, NULL, NULL),
(314, 163, 17, NULL, NULL, NULL),
(315, 164, 21, NULL, NULL, NULL),
(316, 164, 25, NULL, NULL, NULL),
(317, 164, 22, NULL, NULL, NULL),
(318, 164, 23, NULL, NULL, NULL),
(319, 165, 26, NULL, NULL, NULL),
(320, 165, 27, NULL, NULL, NULL),
(321, 165, 28, NULL, NULL, NULL),
(322, 165, 29, NULL, NULL, NULL),
(323, 166, 32, NULL, NULL, NULL),
(324, 166, 33, NULL, NULL, NULL),
(325, 166, 34, NULL, NULL, NULL),
(326, 166, 35, NULL, NULL, NULL),
(327, 167, 1, NULL, NULL, NULL),
(328, 167, 12, NULL, NULL, NULL),
(329, 167, 36, NULL, NULL, NULL),
(330, 167, 31, NULL, NULL, NULL),
(331, 167, 30, NULL, NULL, NULL),
(332, 167, 20, NULL, NULL, NULL),
(333, 168, 2, NULL, NULL, NULL),
(334, 168, 3, NULL, NULL, NULL),
(335, 168, 4, NULL, NULL, NULL),
(336, 169, 11, NULL, NULL, NULL),
(337, 169, 13, NULL, NULL, NULL),
(338, 169, 14, NULL, NULL, NULL),
(339, 169, 8, NULL, NULL, NULL),
(340, 170, 18, NULL, NULL, NULL),
(341, 170, 19, NULL, NULL, NULL),
(342, 170, 15, NULL, NULL, NULL),
(343, 170, 16, NULL, NULL, NULL),
(344, 171, 21, NULL, NULL, NULL),
(345, 171, 24, NULL, NULL, NULL),
(346, 171, 25, NULL, NULL, NULL),
(347, 171, 22, NULL, NULL, NULL),
(348, 172, 26, NULL, NULL, NULL),
(349, 172, 27, NULL, NULL, NULL),
(350, 172, 28, NULL, NULL, NULL),
(351, 172, 29, NULL, NULL, NULL),
(352, 173, 32, NULL, NULL, NULL),
(353, 173, 33, NULL, NULL, NULL),
(354, 173, 34, NULL, NULL, NULL),
(355, 173, 35, NULL, NULL, NULL),
(356, 174, 37, NULL, NULL, NULL),
(357, 174, 5, NULL, NULL, NULL),
(358, 174, 6, NULL, NULL, NULL),
(359, 174, 7, NULL, NULL, NULL),
(360, 174, 14, NULL, NULL, NULL),
(361, 174, 36, NULL, NULL, NULL),
(362, 175, 1, NULL, NULL, NULL),
(363, 175, 2, NULL, NULL, NULL),
(364, 175, 3, NULL, NULL, NULL),
(365, 176, 9, NULL, NULL, NULL),
(366, 176, 10, NULL, NULL, NULL),
(367, 176, 11, NULL, NULL, NULL),
(368, 176, 12, NULL, NULL, NULL),
(369, 177, 17, NULL, NULL, NULL),
(370, 177, 18, NULL, NULL, NULL),
(371, 177, 19, NULL, NULL, NULL),
(372, 177, 20, NULL, NULL, NULL),
(373, 178, 21, NULL, NULL, NULL),
(374, 178, 23, NULL, NULL, NULL),
(375, 178, 24, NULL, NULL, NULL),
(376, 178, 25, NULL, NULL, NULL),
(377, 179, 30, NULL, NULL, NULL),
(378, 179, 31, NULL, NULL, NULL),
(379, 179, 26, NULL, NULL, NULL),
(380, 179, 27, NULL, NULL, NULL),
(381, 180, 32, NULL, NULL, NULL),
(382, 180, 33, NULL, NULL, NULL),
(383, 180, 34, NULL, NULL, NULL),
(384, 180, 35, NULL, NULL, NULL),
(385, 181, 37, NULL, NULL, NULL),
(386, 181, 4, NULL, NULL, NULL),
(387, 181, 5, NULL, NULL, NULL),
(388, 181, 6, NULL, NULL, NULL),
(389, 181, 7, NULL, NULL, NULL),
(390, 181, 13, NULL, NULL, NULL),
(391, 182, 1, NULL, NULL, NULL),
(392, 182, 2, NULL, NULL, NULL),
(393, 182, 3, NULL, NULL, NULL),
(394, 183, 8, NULL, NULL, NULL),
(395, 183, 9, NULL, NULL, NULL),
(396, 183, 10, NULL, NULL, NULL),
(397, 183, 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Parkir & Karcis', NULL, '2018-07-23 02:37:11'),
(2, 'Petani', '2018-07-20 23:38:55', '2018-07-24 07:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(176, '2014_10_12_000000_create_roles_table', 1),
(177, '2014_10_12_100000_create_users_table', 1),
(178, '2014_10_12_200000_create_password_resets_table', 1),
(179, '2018_04_19_160416_create_schedules_table', 1),
(180, '2018_07_05_062045_create_jobs_table', 1),
(181, '2018_07_07_053227_create_sdms_table', 1),
(182, '2018_07_07_060922_create_harikerjas_table', 1),
(183, '2018_07_28_072815_create_hari_sdms_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'karyawan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `user_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '22 april 2018', 'kasir', '2018-07-17 04:31:13', '2018-07-17 04:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `sdms`
--

CREATE TABLE `sdms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kelompok_hari` int(11) NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sdms`
--

INSERT INTO `sdms` (`id`, `user_id`, `name`, `kelompok_hari`, `pekerjaan_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Warno', 1, 1, NULL, NULL),
(2, 2, 'Fendi', 1, 1, NULL, NULL),
(3, 3, 'Yono', 1, 1, '2018-07-21 00:53:22', '2018-07-21 00:53:22'),
(4, 4, 'Esi', 1, 1, '2018-07-21 00:54:05', '2018-07-21 00:54:05'),
(5, 5, 'Riski', 1, 1, '2018-07-21 00:54:58', '2018-07-21 00:54:58'),
(6, 6, 'Feri', 1, 1, '2018-07-21 00:55:43', '2018-07-21 00:55:43'),
(7, 7, 'Rozi', 1, 1, '2018-07-21 00:56:16', '2018-07-21 00:56:16'),
(8, 8, 'Teken', 2, 1, '2018-07-21 00:58:29', '2018-07-21 00:58:29'),
(9, 9, 'Hanif', 2, 1, '2018-07-21 00:59:03', '2018-07-21 00:59:03'),
(10, 10, 'Slamet', 2, 1, '2018-07-21 00:59:47', '2018-07-21 00:59:47'),
(11, 11, 'Aans', 2, 1, '2018-07-21 01:00:38', '2018-07-21 01:00:38'),
(12, 12, 'Aan', 2, 1, '2018-07-21 01:01:11', '2018-07-21 01:01:11'),
(13, 13, 'Iwan', 2, 1, '2018-07-21 01:01:44', '2018-07-21 01:01:44'),
(14, 14, 'Kadar', 2, 1, '2018-07-21 01:02:14', '2018-07-21 01:02:14'),
(15, 15, 'Nurgi', 3, 1, '2018-07-21 01:02:58', '2018-07-21 01:02:58'),
(16, 16, 'Gunawan', 3, 1, '2018-07-21 01:03:35', '2018-07-21 01:03:35'),
(17, 17, 'Anjar', 3, 1, '2018-07-21 01:04:02', '2018-07-21 01:04:02'),
(18, 18, 'Ucup', 3, 1, '2018-07-21 01:06:04', '2018-07-21 01:06:04'),
(19, 19, 'Samsul', 3, 1, '2018-07-21 01:06:40', '2018-07-21 01:06:40'),
(20, 20, 'Riska', 3, 1, '2018-07-21 01:07:38', '2018-07-21 01:07:38'),
(21, 21, 'Arif', 4, 1, '2018-07-21 01:08:12', '2018-07-21 01:08:12'),
(22, 22, 'Agung', 4, 1, '2018-07-21 01:08:47', '2018-07-21 01:08:47'),
(23, 23, 'Alifin', 4, 1, '2018-07-21 01:09:22', '2018-07-21 01:09:22'),
(24, 24, 'Galih', 4, 1, '2018-07-21 01:10:07', '2018-07-21 01:10:07'),
(25, 25, 'Bejo', 4, 1, '2018-07-21 01:10:42', '2018-07-21 01:10:42'),
(26, 26, 'Dodo', 5, 1, '2018-07-21 01:40:44', '2018-07-21 01:40:44'),
(27, 27, 'Idris', 5, 1, '2018-07-21 01:41:24', '2018-07-21 01:41:24'),
(28, 28, 'Rina', 5, 1, '2018-07-21 01:41:57', '2018-07-21 01:41:57'),
(29, 29, 'Gangga', 5, 1, '2018-07-21 01:42:26', '2018-07-21 01:42:26'),
(30, 30, 'Marsono', 5, 1, '2018-07-21 01:42:58', '2018-07-21 01:42:58'),
(31, 31, 'David', 5, 1, '2018-07-21 01:43:36', '2018-07-21 01:43:36'),
(32, 32, 'Topik', 6, 1, '2018-07-21 01:44:08', '2018-07-21 01:44:08'),
(33, 33, 'Yuntrio', 6, 1, '2018-07-21 01:44:40', '2018-07-21 01:44:40'),
(34, 34, 'Sutejo', 6, 1, '2018-07-21 01:45:18', '2018-07-21 01:45:18'),
(35, 35, 'Dayat', 6, 1, '2018-07-21 01:46:08', '2018-07-21 01:46:08'),
(36, 36, 'Alif', 6, 1, '2018-07-21 01:46:46', '2018-07-21 01:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `birth`, `address`, `gender`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'aji', 'setyaaji@gmail.com', '$2y$10$sR5BHc.MKxrneb.6cme5felaej8qhaVjy4MpIYLkjpRD6Mc57KNSi', '23 januari 1994', 'Bandungan', 'Male', 'logo.png', 't64NdnU4G0ZiZRt4XBDHUmtf36zm0XxkcDdlTReaIPQfS6wvM516VogdweiG', '2018-07-17 04:31:13', '2018-07-17 04:31:13'),
(2, 2, 'santi', 'santis@gmail.com', '$2y$10$j.NS972pLRFKtjeiFhR8B.f6qe.Z6CX0E/joGWe2zO0yuchkI0G9O', '23 januari 1996', 'Tegal', 'Female', 'logo.png', '6T6Fi8wf71W23fNC3UqUPveAbStgvSLKFtVDG9T0VniTvG9yuNAlUC55fRsA', '2018-07-17 04:31:13', '2018-07-17 04:31:13'),
(3, 2, 'Yono', 'yono@gmail.com', 'yono', '1995-02-03', 'Bnadungan', 'male', 'jskaj', NULL, '2018-07-21 00:53:21', '2018-07-21 00:53:21'),
(4, 2, 'Esi', 'Esi@gmail.com', 'esi', '1996-02-05', 'Bandungan', 'female', 'jskaj', NULL, '2018-07-21 00:54:05', '2018-07-21 00:54:05'),
(5, 2, 'Riski', 'riski@gmail.com', 'riski', '2000-04-06', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:54:58', '2018-07-21 00:54:58'),
(6, 2, 'Feri', 'feri@gmail.com', 'feri', '1995-03-07', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:55:43', '2018-07-21 00:55:43'),
(7, 2, 'Rozi', 'rozi@gmail.com', 'rozi', '2001-07-09', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:56:16', '2018-07-21 00:56:16'),
(8, 2, 'Teken', 'teken@gmail.com', 'teken', '1999-04-08', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:58:29', '2018-07-21 00:58:29'),
(9, 2, 'Hanif', 'hanif@gmail.com', 'hanif', '1999-05-09', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:59:03', '2018-07-21 00:59:03'),
(10, 2, 'Slamet', 'slamet@gmail.com', 'slamet', '2000-07-08', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 00:59:47', '2018-07-21 00:59:47'),
(11, 2, 'Aans', 'aans@gmail.com', 'aans', '1998-08-09', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:00:38', '2018-07-21 01:00:38'),
(12, 2, 'Aan', 'aan@gmail.com', 'aan', '2000-03-04', 'Aan', 'male', 'jskaj', NULL, '2018-07-21 01:01:11', '2018-07-21 01:01:11'),
(13, 2, 'Iwan', 'iwan@gmail.com', 'iwan', '1999-09-08', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:01:44', '2018-07-21 01:01:44'),
(14, 2, 'Kadar', 'kadar@gmail.com', 'kadar', '2000-08-07', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:02:14', '2018-07-21 01:02:14'),
(15, 2, 'Nurgi', 'nurgi@gmail.com', 'nurgi', '2000-02-03', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:02:58', '2018-07-21 01:02:58'),
(16, 2, 'Gunawan', 'gunawan@gmail.com', 'gunawan', '1997-08-09', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:03:35', '2018-07-21 01:03:35'),
(17, 2, 'Anjar', 'anjar@gmail.com', 'anjar', '2000-08-09', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:04:02', '2018-07-21 01:04:02'),
(18, 2, 'Ucup', 'ucup@gmail.com', 'ucup', '1999-08-07', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:06:04', '2018-07-21 01:06:04'),
(19, 2, 'Samsul', 'samsul@gmail.com', 'samsul', '2002-09-10', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:06:40', '2018-07-21 01:06:40'),
(20, 2, 'Riska', 'riska@gmail.com', 'riska', '2002-12-30', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:07:38', '2018-07-21 01:07:38'),
(21, 2, 'Arif', 'arif@gmail.com', 'arif', '2002-03-15', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:08:12', '2018-07-21 01:08:12'),
(22, 2, 'Agung', 'agung@gmail.com', 'agung', '2000-11-29', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:08:47', '2018-07-21 01:08:47'),
(23, 2, 'Alifin', 'alifin@gmail.com', 'alifin', '1995-09-11', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:09:22', '2018-07-21 01:09:22'),
(24, 2, 'Galih', 'galih@gmail.com', 'galih', '2002-10-05', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:10:07', '2018-07-21 01:10:07'),
(25, 2, 'Bejo', 'bejo@gmail.com', 'bejo', '1997-07-07', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:10:42', '2018-07-21 01:10:42'),
(26, 2, 'Dodo', 'dodo@gmail.com', 'dodo', '2000-05-10', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:40:44', '2018-07-21 01:40:44'),
(27, 2, 'Idris', 'idris@gmail.com', 'idris', '1993-01-22', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:41:24', '2018-07-21 01:41:24'),
(28, 2, 'Rina', 'rina@gmail.com', 'rina', '1996-12-01', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:41:56', '2018-07-21 01:41:56'),
(29, 2, 'Gangga', 'gangga@gmail.com', 'gangga', '2000-08-19', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:42:26', '2018-07-21 01:42:26'),
(30, 2, 'Marsono', 'marsono@gmail.com', 'marsono', '1994-02-01', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:42:58', '2018-07-21 01:42:58'),
(31, 2, 'David', 'david@gmail.com', 'david', '2000-08-18', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:43:36', '2018-07-21 01:43:36'),
(32, 2, 'Topik', 'topik@gmail.com', 'topik', '1992-09-04', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:44:08', '2018-07-21 01:44:08'),
(33, 2, 'Yuntrio', 'yun@gmail.com', 'yuntrio', '19995-07-05', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:44:40', '2018-07-21 01:44:40'),
(34, 2, 'Sutejo', 'sutejo@gmail.com', 'sutejo', '1991-09-05', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:45:18', '2018-07-21 01:45:18'),
(35, 2, 'Dayat', 'dayat@gmail.com', 'dayat', '1995-02-01', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:46:08', '2018-07-21 01:46:08'),
(36, 2, 'Alif', 'alif@gmail.com', 'alif', '1995-05-05', 'Bandungan', 'male', 'jskaj', NULL, '2018-07-21 01:46:46', '2018-07-21 01:46:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harikerjas`
--
ALTER TABLE `harikerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hari_sdms`
--
ALTER TABLE `hari_sdms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_user_id_foreign` (`user_id`);

--
-- Indexes for table `sdms`
--
ALTER TABLE `sdms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harikerjas`
--
ALTER TABLE `harikerjas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `hari_sdms`
--
ALTER TABLE `hari_sdms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sdms`
--
ALTER TABLE `sdms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
