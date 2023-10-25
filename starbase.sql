-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Starbase Admin', 'admin@admin.com', 'password', '2022-12-16 03:19:55', '2022-12-16 03:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ano` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `time_slot` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dno` int(11) NOT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `mgrid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dno`, `dname`, `mgrid`) VALUES
(1, 'Gym', 2),
(2, 'Cafe', 1),
(3, 'Parlor', 3),
(4, 'Salon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `nid_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dno` int(11) DEFAULT NULL,
  `Admin` tinyint(1) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone_no`, `nid_no`, `address`, `dno`, `Admin`, `salary`, `password`, `join_date`) VALUES
(1, 'Kibu', 'kibu@starbase.com', '01715552255', NULL, 'Holding 317 Hazinogor', NULL, NULL, 10000.00, '123456', '2023-06-05'),
(2, 'Genos', 'genos@starbase.com', '01715552232', NULL, 'Holding 317 Hazinogor', NULL, NULL, 15000.00, '123456', '2023-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(11) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `joindate` timestamp NULL DEFAULT current_timestamp(),
  `active` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `mname`, `email`, `phone`, `pid`, `discount`, `due`, `joindate`, `active`, `password`) VALUES
(2, 'Salman', 'salman@gmail.com', '01852369656', 2, 15.00, 0.00, '2023-06-05 15:49:30', 1, '123456'),
(3, 'new member', 'member@mail.com', '01715552232', 3, NULL, NULL, '2023-06-04 19:21:01', 1, '123456'),
(5, 'member 2', 'member2@mail.com', '01715552242', 2, 10.00, NULL, '2023-06-05 15:41:32', NULL, '123456'),
(6, 'new member 5', 'member5@mail.com', '01715552266', 5, NULL, NULL, '2023-06-04 23:16:57', 1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `month_duration` decimal(10,2) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`pid`, `pname`, `month_duration`, `price`) VALUES
(1, 'Phoenix', 1.00, 6000),
(2, 'Phoenix', 3.00, 14900),
(3, 'Phoenix', 6.00, 25900),
(4, 'Phoenix', 12.00, 48900),
(5, 'Gemini', 3.00, 23900),
(6, 'Gemini', 6.00, 41900),
(7, 'Gemini', 12.00, 74900);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `Reservation_Date` date DEFAULT NULL,
  `Reservation_Time` time DEFAULT NULL,
  `Number_of_Seats` int(11) DEFAULT NULL,
  `Additional_Notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Name`, `Email`, `Phone`, `sid`, `Reservation_Date`, `Reservation_Time`, `Number_of_Seats`, `Additional_Notes`) VALUES
('new member', 'member@mail.com', '01715552232', 16, '2023-06-08', '04:55:00', NULL, 'as Clean As Possible'),
('new member 1', 'anik038opo@gmail.com', '01715552232', 22, '2023-06-15', '04:59:00', NULL, 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `s_site` varchar(255) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_price` decimal(10,2) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `s_site`, `s_name`, `s_price`, `availability`) VALUES
(1, 'Salon', 'HAIR CUT', 300.00, 1),
(2, 'Salon', 'CATALOGUE HAIR CUT', 500.00, 1),
(3, 'Salon', 'HAIR CUT & SETTING PACKAGE', 500.00, 1),
(4, 'Salon', 'CLEAN SHAVE', 200.00, 1),
(5, 'Salon', 'STYLE TRIM + SHAVE', 300.00, 1),
(6, 'Salon', 'HAIR SETTING', 200.00, 1),
(7, 'Salon', 'HAIR VOLUME TREATMENT', 2000.00, 1),
(8, 'Salon', 'HAIR STRAIGHTENING', 3000.00, 1),
(9, 'Salon', 'HAIR RE BONDING', 5000.00, 1),
(10, 'Salon', 'HAIR TREATMENT', 1600.00, 1),
(11, 'Salon', 'DANDRUFF WASH', 1200.00, 1),
(12, 'Salon', 'REGULAR HAIR TREATMENT', 900.00, 1),
(13, 'Salon', 'HOT OIL MASSAGE TREATMENT', 500.00, 1),
(14, 'Salon', 'KERATIN TREATMENT', 1500.00, 1),
(15, 'Salon', 'VLCC DIAMOND', 2900.00, 1),
(16, 'Salon', 'GOLD KIT FACIAL', 1500.00, 1),
(17, 'Salon', 'NORMAL FACAL', 1300.00, 1),
(18, 'Salon', 'BRIDAL FACIAL', 4000.00, 1),
(19, 'Salon', 'PAL FACIAL', 1200.00, 1),
(20, 'Salon', 'OXYGEN FACIAL', 1800.00, 1),
(21, 'Salon', 'SILVER KIT FACIAL', 1400.00, 1),
(22, 'Salon', 'VEGETABLE FACIAL', 1300.00, 1),
(23, 'Salon', 'FACE-NECK HAIR POLISH', 1500.00, 1),
(24, 'Salon', 'EAR PIERCING', 500.00, 1),
(25, 'Salon', 'LIP PIERCING', 1600.00, 1),
(26, 'Salon', 'EYEBROW PIERCING', 1100.00, 1),
(27, 'Salon', 'WAXING', 100.00, 1),
(28, 'Salon', 'FULL BODY WAXING', 5900.00, 1),
(29, 'Salon', 'HAIR BLACK COLOR', 900.00, 1),
(30, 'Salon', 'HIGH SPEED COLOR', 900.00, 1),
(31, 'Salon', 'BLACK SHINE', 900.00, 1),
(32, 'Salon', 'JUST FOR MEN COLOR', 1900.00, 1),
(33, 'Salon', 'FANCY COLOR', 300.00, 1),
(34, 'Salon', 'BEGGAN COLOR', 1200.00, 1),
(35, 'Salon', 'HIGHLIGHT FULL', 1600.00, 1),
(36, 'Salon', 'FOOT MASSAGE', 500.00, 1),
(37, 'Salon', 'HAIR MASSAGE', 500.00, 1),
(38, 'Salon', 'FULL BODY MASSAGE', 1800.00, 1),
(39, 'Salon', 'FULL BODY SCRUB MASSAGE', 1800.00, 1),
(40, 'Parlor', '24KGOLD', 2500.00, 1),
(41, 'Parlor', 'HYDRA FACIAL', 5000.00, 1),
(42, 'Parlor', 'HERBAL FACIAL', 1300.00, 1),
(43, 'Parlor', 'CLEANUP FACIAL', 2000.00, 1),
(44, 'Parlor', 'BRIDAL FACIAL', 2000.00, 1),
(45, 'Parlor', 'SPECIAL BRIDAL FACIAL', 3500.00, 1),
(46, 'Parlor', 'TAN CLEAR FACIAL', 3000.00, 1),
(47, 'Parlor', 'QUICK FACIAL(20MIN)', 800.00, 1),
(48, 'Parlor', 'ANTI AGEING', 2500.00, 1),
(49, 'Parlor', 'ANTI ACNE', 2500.00, 1),
(50, 'Parlor', 'BIOTIQUE FACIAL', 2200.00, 1),
(51, 'Parlor', 'SHAHNAZ FACIAL', 2000.00, 1),
(52, 'Parlor', 'THERMOHUB FACIAL', 2500.00, 1),
(53, 'Parlor', 'SILVER FACIAL', 2500.00, 1),
(54, 'Parlor', 'ALOE VERA FACIAL', 2000.00, 1),
(55, 'Parlor', 'DEEP CLEANSING', 1500.00, 1),
(56, 'Parlor', 'FRUIT FACIAL', 2000.00, 1),
(57, 'Parlor', 'WHITENING FACIAL', 2000.00, 1),
(58, 'Parlor', 'SPECIAL WHITENING FACIAL', 4000.00, 1),
(59, 'Parlor', 'SPECIAL WHITENING TIGHTENING', 3500.00, 1),
(60, 'Parlor', 'ORANGE FACIAL', 2000.00, 1),
(61, 'Parlor', 'INSTAGLOW', 2000.00, 1),
(62, 'Parlor', 'PAPAYA FACIAL', 1500.00, 1),
(63, 'Parlor', 'DIAMOND FACIAL', 2000.00, 1),
(64, 'Parlor', 'PEARL FACIAL', 2000.00, 1),
(65, 'Parlor', 'FACE', 900.00, 1),
(66, 'Parlor', 'HALF/FULLHAND', 900.00, 1),
(67, 'Parlor', 'HALF/FULLLEG', 1400.00, 1),
(68, 'Parlor', 'FULL BODY', 7000.00, 1),
(69, 'Parlor', 'FACE/FACE NECK', 900.00, 1),
(70, 'Parlor', 'HALF/FULLHAND', 700.00, 1),
(71, 'Parlor', 'HALF/FULLLEG', 700.00, 1),
(72, 'Parlor', 'FULL BODY', 5700.00, 1),
(73, 'Parlor', 'ACRYLIC EXTENSION', 3700.00, 1),
(74, 'Parlor', 'ACRYLIC EXTENSION WITH GEL POLISH', 4100.00, 1),
(75, 'Parlor', 'ACRYLIC EXTENSION WITH OMBRE', 5000.00, 1),
(76, 'Parlor', 'ACRYLIC EXTENSION WITH FRENCH', 5000.00, 1),
(77, 'Parlor', 'IN FILL', 3000.00, 1),
(78, 'Parlor', 'NAIL REMOVAL', 1800.00, 1),
(79, 'Parlor', 'CUSTOMIZED NAILS', 6000.00, 1),
(80, 'Parlor', 'GEL NAIL POLISH', 2000.00, 1),
(81, 'Parlor', 'GEL NAIL POLISH REMOVAL', 1600.00, 1),
(82, 'Parlor', 'PARTY HAIR EXTENSION', 800.00, 1),
(83, 'Parlor', 'LENS', 1100.00, 1),
(84, 'Parlor', 'NAILS', 500.00, 1),
(85, 'Parlor', 'DESIRED HAIRSTYLE', 800.00, 1),
(86, 'Parlor', 'BASIC HAIR-DO', 1000.00, 1),
(87, 'Parlor', 'SEMIBRIDAL', 2000.00, 1),
(88, 'Parlor', 'FULL BRIDAL', 4000.00, 1),
(89, 'Parlor', 'SINGLE STRING', 150.00, 1),
(90, 'Parlor', 'HEAVY STRING', 300.00, 1),
(91, 'Parlor', 'V CUT', 800.00, 1),
(92, 'Parlor', 'U CUT', 800.00, 1),
(93, 'Parlor', 'EQUAL', 800.00, 1),
(94, 'Parlor', 'FRONTLAYER', 800.00, 1),
(95, 'Parlor', 'LAYER', 1500.00, 1),
(96, 'Parlor', 'STEP', 1500.00, 1),
(97, 'Parlor', 'VOLUME LAYER', 1600.00, 1),
(98, 'Parlor', 'ANY HAIRCUT', 1600.00, 1),
(99, 'Parlor', 'BABY CUT', 800.00, 1),
(100, 'Parlor', 'LONG BOB', 1000.00, 1),
(101, 'Parlor', 'FRONT BANK', 500.00, 1),
(102, 'Parlor', 'BOY CUT', 1000.00, 1),
(103, 'Parlor', 'ANY HAIR CUT(BABY)', 1000.00, 1),
(104, 'Parlor', 'SHORT BOB', 1000.00, 1),
(105, 'Parlor', 'ANGLE BOB', 1500.00, 1),
(106, 'Parlor', 'GREY COVERAGE', 1500.00, 1),
(107, 'Parlor', 'BASECOLOR/GLOBAL', 3000.00, 1),
(108, 'Parlor', 'DIP DYE', 7800.00, 1),
(109, 'Parlor', 'OMBRE', 7500.00, 1),
(110, 'Parlor', 'BALAYAGE', 7500.00, 1),
(111, 'Parlor', 'FASHION SHADES', 6500.00, 1),
(112, 'Parlor', 'SIGNATURE BALAYAGE', 8000.00, 1),
(113, 'Parlor', 'OLAPLEX/BOND FUSION', 3000.00, 1),
(114, 'Parlor', 'HIGHLIGHTS PRSTICK', 500.00, 1),
(115, 'Parlor', 'FASHION PE RSTICK', 1000.00, 1),
(116, 'Parlor', 'BLOWDRYOUTCURLS', 1000.00, 1),
(117, 'Parlor', 'HAIR SPIDER', 1000.00, 1),
(118, 'Parlor', 'NORMAL BAN', 800.00, 1),
(119, 'Parlor', 'MESSY BAN', 1500.00, 1),
(120, 'Parlor', 'BRIDAL HAIRSTYLE', 2000.00, 1),
(121, 'Parlor', 'ANY HAIRSTYLE', 2000.00, 1),
(122, 'Parlor', 'ABSOLUTE REPAIR', 1300.00, 1),
(123, 'Parlor', 'ANTIFRIZZ&MOISTURE', 3000.00, 1),
(124, 'Parlor', 'HAIRFALLPROTEIN', 1800.00, 1),
(125, 'Parlor', 'HAIR BOTOX', 1800.00, 1),
(126, 'Parlor', 'DANDRUFF', 1500.00, 1),
(127, 'Parlor', 'HAIR SPA', 1500.00, 1),
(128, 'Parlor', 'HOT OIL MASSAGE(WITHOUTWASH)', 500.00, 1),
(129, 'Parlor', 'HOT OIL MASSAGE', 1500.00, 1),
(130, 'Parlor', 'HERBAL TREATMENT', 1200.00, 1),
(131, 'Parlor', 'HEENA', 1500.00, 1),
(132, 'Parlor', 'DEEP CLEANSE+CONDITIONER', 500.00, 1),
(133, 'Parlor', 'BRAZILIAN BLOWOUT', 12000.00, 1),
(134, 'Parlor', 'KERATIN SMOOTHENING', 10000.00, 1),
(135, 'Parlor', 'DEEP SHINE', 8000.00, 1),
(136, 'Parlor', 'REBONDING', 12000.00, 1),
(137, 'Parlor', 'STRAIGHTPUMP', 6000.00, 1),
(138, 'Parlor', 'BENIPUMP', 4000.00, 1),
(139, 'Parlor', 'FULL BODY MASSAGE(30MINS)', 2000.00, 1),
(140, 'Parlor', 'FULL BODY MASSAGE (1HOUR)', 3500.00, 1),
(141, 'Parlor', 'SHOULDER MASSAGE(30MINS)', 800.00, 1),
(142, 'Parlor', 'BACK MASSAGE(30MINS)', 1000.00, 1),
(143, 'Parlor', 'BELLY MASSAGE(30MINS)', 800.00, 1),
(144, 'Parlor', 'FOOT MASSAGE(30MINS)', 1500.00, 1),
(145, 'Parlor', 'HOT STONE MASSAGE(1HOUR)', 5000.00, 1),
(146, 'Parlor', 'SCRUB(1HOUR)', 4000.00, 1),
(147, 'Parlor', 'CALSSICMANI+PEDI', 700.00, 1),
(148, 'Parlor', 'DELUXE MANI', 1000.00, 1),
(149, 'Parlor', 'GLOWPACK', 1600.00, 1),
(150, 'Parlor', 'DELUXE EDIT', 1000.00, 1),
(151, 'Parlor', 'DELUXE PEDI+SPA', 1500.00, 1),
(152, 'Parlor', 'EYEBROWPLUCK', 100.00, 1),
(153, 'Parlor', 'UPPER LIP', 50.00, 1),
(154, 'Parlor', 'FOREHEAD', 100.00, 1),
(155, 'Parlor', 'CHIN', 80.00, 1),
(156, 'Parlor', 'WAXING(UNDERARMS)', 200.00, 1),
(157, 'Parlor', 'WAXING(ARMS)', 250.00, 1),
(158, 'Parlor', 'WAXING(LEGS)', 500.00, 1),
(159, 'Parlor', 'WAXING(FULL BODY)', 2000.00, 1),
(160, 'Parlor', 'THREADING(EYEBROW)', 50.00, 1),
(161, 'Parlor', 'THREADING(UPPERLIP)', 30.00, 1),
(162, 'Parlor', 'THREADING(FOREHEAD)', 50.00, 1),
(163, 'Parlor', 'THREADING(CHIN)', 30.00, 1),
(164, 'Parlor', 'FACIAL(AYURVEDIC)', 500.00, 1),
(165, 'Parlor', 'FACIAL(CLEANUP)', 400.00, 1),
(166, 'Parlor', 'FACIAL(GOLD)', 800.00, 1),
(167, 'Parlor', 'FACIAL(DIAMOND)', 800.00, 1),
(168, 'Parlor', 'FACIAL(PEARL)', 800.00, 1),
(169, 'Parlor', 'HAIRSPADRYWOMEN', 500.00, 1),
(170, 'Parlor', 'HAIRSPA(MEN)', 400.00, 1),
(171, 'Parlor', 'HAIRSPAKERATINWOMEN', 500.00, 1),
(172, 'Parlor', 'HAIRSPAKERATIN(MEN)', 400.00, 1),
(173, 'Parlor', 'HAIRSPASMOOTHINGWOMEN', 500.00, 1),
(174, 'Parlor', 'HAIRSPASMOOTHING(MEN)', 400.00, 1),
(175, 'Parlor', 'HAIRSPASTRAIGHTWOMEN', 500.00, 1),
(176, 'Parlor', 'HAIRSPASTRAIGHT(MEN)', 400.00, 1),
(177, 'Parlor', 'HAIRSPAREBONDINGWOMEN', 500.00, 1),
(178, 'Parlor', 'HAIRSPAREBONDING(MEN)', 400.00, 1),
(179, 'Parlor', 'HAIRSPASPAWOMEN', 500.00, 1),
(180, 'Parlor', 'HAIRSPASPA(MEN)', 400.00, 1),
(181, 'Parlor', 'MALESPA', 700.00, 1),
(182, 'Parlor', 'BACKSCRUB', 300.00, 1),
(183, 'Parlor', 'HEAD MASSAGE', 500.00, 1),
(184, 'Parlor', 'FULL BODY MASSAGE(1 HOUR)', 1200.00, 1),
(185, 'Parlor', 'FULL BODY MASSAGE(2 HOURS)', 2400.00, 1),
(186, 'Parlor', 'BACK MASSAGE', 600.00, 1),
(187, 'Parlor', 'BELLY MASSAGE', 400.00, 1),
(188, 'Parlor', 'SHOULDER MASSAGE', 400.00, 1),
(189, 'Parlor', 'HEAD MASSAGE', 400.00, 1),
(190, 'Parlor', 'BODY POLISH', 1000.00, 1),
(191, 'Parlor', 'BODY WRAP', 1500.00, 1),
(192, 'Parlor', 'MANICURE', 300.00, 1),
(193, 'Parlor', 'PEDICURE', 400.00, 1),
(194, 'Parlor', 'FRENCH MANICURE', 400.00, 1),
(195, 'Parlor', 'GEL POLISH', 500.00, 1),
(196, 'Parlor', 'ACRYLIC NAIL EXTENSION', 700.00, 1),
(197, 'Parlor', 'ACRYLIC REFILL', 500.00, 1),
(198, 'Parlor', 'NAIL ART', 300.00, 1),
(199, 'Parlor', 'NAIL REMOVAL', 200.00, 1),
(200, 'Parlor', 'WAXING(UNDERARMS)', 100.00, 1),
(201, 'Parlor', 'WAXING(ARMS)', 150.00, 1),
(202, 'Parlor', 'WAXING(LEGS)', 300.00, 1),
(203, 'Parlor', 'WAXING(FULL BODY)', 1500.00, 1),
(204, 'Parlor', 'THREADING(EYEBROWS)', 30.00, 1),
(205, 'Parlor', 'THREADING(UPPERLIP)', 20.00, 1),
(206, 'Parlor', 'THREADING(FOREHEAD)', 30.00, 1),
(207, 'Parlor', 'THREADING(CHIN)', 20.00, 1),
(208, 'Parlor', 'FACIAL(AYURVEDIC)', 250.00, 1),
(209, 'Parlor', 'FACIAL(CLEANUP)', 200.00, 1),
(210, 'Parlor', 'FACIAL(GOLD)', 400.00, 1),
(211, 'Parlor', 'FACIAL(DIAMOND)', 400.00, 1),
(212, 'Parlor', 'FACIAL(PEARL)', 400.00, 1),
(213, 'Parlor', 'HAIR SPA(WOMEN)', 200.00, 1),
(214, 'Parlor', 'HAIR SPA(MEN)', 150.00, 1),
(215, 'Parlor', 'KERATIN HAIR SPA(WOMEN)', 200.00, 1),
(216, 'Parlor', 'KERATIN HAIR SPA(MEN)', 150.00, 1),
(217, 'Parlor', 'SMOOTHING HAIR SPA(WOMEN)', 200.00, 1),
(218, 'Parlor', 'SMOOTHING HAIR SPA(MEN)', 150.00, 1),
(219, 'Parlor', 'STRAIGHTENING HAIR SPA(WOMEN)', 200.00, 1),
(220, 'Parlor', 'STRAIGHTENING HAIR SPA(MEN)', 150.00, 1),
(221, 'Parlor', 'REBONDING HAIR SPA(WOMEN)', 200.00, 1),
(222, 'Parlor', 'REBONDING HAIR SPA(MEN)', 150.00, 1),
(223, 'Parlor', 'SPA(WOMEN)', 200.00, 1),
(224, 'Parlor', 'SPA(MEN)', 150.00, 1),
(225, 'Parlor', 'MALE SPA', 250.00, 1),
(226, 'Parlor', 'BACK SCRUB', 100.00, 1),
(227, 'Parlor', 'HEAD MASSAGE', 200.00, 1),
(228, 'Parlor', 'FULL BODY MASSAGE(1 HOUR)', 500.00, 1),
(229, 'Parlor', 'FULL BODY MASSAGE(2 HOURS)', 1000.00, 1),
(230, 'Parlor', 'BACK MASSAGE', 250.00, 1),
(231, 'Parlor', 'BELLY MASSAGE', 200.00, 1),
(232, 'Parlor', 'SHOULDER MASSAGE', 200.00, 1),
(233, 'Parlor', 'HEAD MASSAGE', 200.00, 1),
(234, 'Parlor', 'BODY POLISH', 500.00, 1),
(235, 'Parlor', 'BODY WRAP', 750.00, 1),
(236, 'Parlor', 'MANICURE', 150.00, 1),
(237, 'Parlor', 'PEDICURE', 200.00, 1),
(238, 'Parlor', 'FRENCH MANICURE', 200.00, 1),
(239, 'Parlor', 'GEL POLISH', 250.00, 1),
(240, 'Parlor', 'ACRYLIC NAIL EXTENSION', 300.00, 1),
(241, 'Parlor', 'ACRYLIC REFILL', 250.00, 1),
(242, 'Parlor', 'NAIL ART', 150.00, 1),
(243, 'Parlor', 'NAIL REMOVAL', 100.00, 1),
(244, 'Parlor', 'MAKEUP', 500.00, 1),
(245, 'Parlor', 'BRIDAL MAKEUP', 2500.00, 1),
(246, 'Parlor', 'PARTY MAKEUP', 1000.00, 1),
(247, 'Parlor', 'EVENING MAKEUP', 800.00, 1),
(248, 'Parlor', 'DAY MAKEUP', 700.00, 1),
(249, 'Parlor', 'EYE MAKEUP', 400.00, 1),
(250, 'Parlor', 'HAIR STRAIGHTENING', 2000.00, 1),
(251, 'Parlor', 'HAIR CURLING', 2000.00, 1),
(252, 'Parlor', 'HAIR PERMING', 2500.00, 1),
(253, 'Parlor', 'HAIR COLORING', 1500.00, 1),
(254, 'Parlor', 'HAIR HIGHLIGHTS', 2000.00, 1),
(255, 'Parlor', 'HAIR LOWLIGHTS', 2000.00, 1),
(256, 'Parlor', 'HAIR REBONDING', 3000.00, 1),
(257, 'Parlor', 'HAIR SMOOTHENING', 2500.00, 1),
(258, 'Parlor', 'KERATIN TREATMENT', 3000.00, 1),
(259, 'Parlor', 'DANDRUFF TREATMENT', 1500.00, 1),
(260, 'Parlor', 'HAIR FALL TREATMENT', 2000.00, 1),
(261, 'Parlor', 'SCALP TREATMENT', 1500.00, 1),
(262, 'Parlor', 'HAIR SPA(WOMEN)', 300.00, 1),
(263, 'Parlor', 'HAIR SPA(MEN)', 250.00, 1),
(264, 'Parlor', 'KERATIN HAIR SPA(WOMEN)', 300.00, 1),
(265, 'Parlor', 'KERATIN HAIR SPA(MEN)', 250.00, 1),
(266, 'Parlor', 'SMOOTHING HAIR SPA(WOMEN)', 300.00, 1),
(267, 'Parlor', 'SMOOTHING HAIR SPA(MEN)', 250.00, 1),
(268, 'Parlor', 'STRAIGHTENING HAIR SPA(WOMEN)', 300.00, 1),
(269, 'Parlor', 'STRAIGHTENING HAIR SPA(MEN)', 250.00, 1),
(270, 'Parlor', 'REBONDING HAIR SPA(WOMEN)', 300.00, 1),
(271, 'Parlor', 'REBONDING HAIR SPA(MEN)', 250.00, 1),
(272, 'Parlor', 'SPA(WOMEN)', 300.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dno`),
  ADD KEY `mgrid` (`mgrid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`mgrid`) REFERENCES `employee` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `plans` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
