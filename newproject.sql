-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2021 at 09:52 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) DEFAULT NULL,
  `p_coud` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `code`, `p_coud`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 111114001, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(2, 1, 111114002, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(3, 1, 111114003, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(4, 1, 111114004, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(5, 1, 111114005, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(6, 1, 111114006, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(7, 1, 111114007, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(8, 1, 111114008, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(9, 1, 111114009, '2021-03-25 07:20:39', '2021-03-25 07:20:39', NULL),
(10, 1, 111114010, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(11, 1, 111114011, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(12, 1, 111114012, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(13, 1, 111114013, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(14, 1, 111114014, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(15, 1, 111114015, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(16, 1, 111114016, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(17, 1, 111114017, '2021-03-25 07:20:40', '2021-03-25 07:20:40', NULL),
(18, 1, 111114018, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(19, 1, 111114021, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(20, 2, 112114001, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(21, 2, 112114002, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(22, 2, 112114003, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(23, 2, 112114004, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(24, 2, 112114005, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(25, 2, 112114006, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(26, 2, 112114007, '2021-03-25 07:20:41', '2021-03-25 07:20:41', NULL),
(27, 2, 112114008, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(28, 2, 112114015, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(29, 2, 112114016, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(30, 3, 113114001, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(31, 3, 113114002, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(32, 3, 113114003, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(33, 3, 113114004, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(34, 3, 113114005, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(35, 3, 113114006, '2021-03-25 07:20:42', '2021-03-25 07:20:42', NULL),
(36, 3, 113114007, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(37, 3, 113114010, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(38, 4, 114114001, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(39, 4, 114114002, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(40, 4, 114114003, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(41, 4, 114114004, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(42, 4, 114114005, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(43, 4, 114114006, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_translations`
--

CREATE TABLE `branch_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_translations`
--

INSERT INTO `branch_translations` (`id`, `branch_id`, `name`, `locale`) VALUES
(1, 1, 'المكتب الرئيسى - الرياض', 'ar'),
(2, 1, 'HO OFFICE', 'en'),
(3, 2, 'مكتب الشركات - الرياض', 'ar'),
(4, 2, 'RIYADH -COMPAMNY OFFICE', 'en'),
(5, 3, 'صالة 5 - RIYADH -AIRPORT', 'ar'),
(6, 3, 'صالة 5 - King Khalid Airport', 'en'),
(7, 4, 'مكتب المطار القديم', 'ar'),
(8, 4, 'OLD AIR PORT OFFICE', 'en'),
(9, 5, 'مكتب العليا العام', 'ar'),
(10, 5, 'OLIA OFFICE', 'en'),
(11, 6, 'مكتب السليمانية', 'ar'),
(12, 6, 'SOLIMAIYA OFFICE', 'en'),
(13, 7, 'مكتب الصناعية', 'ar'),
(14, 7, 'SENAIYA OFFICE', 'en'),
(15, 8, 'مكتب الدائرى', 'ar'),
(16, 8, 'EXIT 10 OFFICE', 'en'),
(17, 9, 'صالة 2 - RIYADH -AIRPORT', 'ar'),
(18, 9, 'صالة 2 - King Khalid Airport', 'en'),
(19, 10, 'مكتب دوار الكويت', 'ar'),
(20, 10, 'DAWAR EL KIWITE OFFICE', 'en'),
(21, 11, 'مكتب أسواق طيبة', 'ar'),
(22, 11, 'DAWAR EL KIWITE OFFICE', 'en'),
(23, 12, 'مكتب الياسمين', 'ar'),
(24, 12, 'DAWAR EL KIWITE OFFICE', 'en'),
(25, 13, 'مكتب العريجاء', 'ar'),
(26, 13, 'DAWAR EL KIWITE OFFICE', 'en'),
(27, 14, 'مكتب ظهرة لبن', 'ar'),
(28, 14, 'DAWAR EL KIWITE OFFICE', 'en'),
(29, 15, 'فندق الانتركونتينينتال - الرياض', 'ar'),
(30, 15, 'RIYADH INTRCON', 'en'),
(31, 16, 'فندق الماريوت - الرياض', 'ar'),
(32, 16, 'فندق الماريوت - الرياض', 'en'),
(33, 17, 'فندق كراون بلازا', 'ar'),
(34, 17, 'CROWNE PLAZA RIYADH MINHAL', 'en'),
(35, 18, 'فندق كورتيارد الرياض', 'ar'),
(36, 18, 'courtyard marriott', 'en'),
(37, 19, 'مكتب أون لاين الرياض', 'ar'),
(38, 19, 'DAWAR EL KIWITE OFFICE', 'en'),
(39, 20, 'مكتب  اون لاين  -جدة', 'ar'),
(40, 20, 'JEDDAH - HEAD OFFICE', 'en'),
(41, 21, 'مكتب الشركات -جدة', 'ar'),
(42, 21, 'JEDDAH  - COMPANY OFFICE', 'en'),
(43, 22, 'مطار الملك عبد العزيز - جدة', 'ar'),
(44, 22, 'KING ABDULAZIZ AIRPORT', 'en'),
(45, 23, 'مكتب الستين - جدة', 'ar'),
(46, 23, 'JEDDAH - SITTEN OFFICE', 'en'),
(47, 24, 'مكتب فلسطين - جدة', 'ar'),
(48, 24, 'JEDDAH - FHALISTINE OFFICE', 'en'),
(49, 25, 'مكتب السبعين - جدة', 'ar'),
(50, 25, 'JEDDAH - SABAIN OFFICE', 'en'),
(51, 26, 'مكتب شارع صاري - جدة', 'ar'),
(52, 26, 'JEDDAH - SARI OFFICE', 'en'),
(53, 27, 'مكتب طريق المدينة -جدة', 'ar'),
(54, 27, 'JEDDAH - TARIQ MADINAH OFFICE', 'en'),
(55, 28, 'فندق الانتركونتيال - جدة', 'ar'),
(56, 28, 'INTERCONTINENTAL HOTEL JEDDAH', 'en'),
(57, 29, ' فندق الكراون - جدة', 'ar'),
(58, 29, 'CRAWONE PLAZA HOTEL JEDDAH', 'en'),
(59, 30, 'المكتب الرئيسي -الدمام', 'ar'),
(60, 30, 'DAMMAM - HEAD OFFICE', 'en'),
(61, 31, 'مكتب الشركات- الدمام', 'ar'),
(62, 31, 'DAMMAM - COMPANY OFFICE', 'en'),
(63, 32, 'مطار الملك فهد - الدمام', 'ar'),
(64, 32, 'King Fahad  Airport', 'en'),
(65, 33, 'مكتب الدمام 1', 'ar'),
(66, 33, 'DAMMAM - DAMMAM 1', 'en'),
(67, 34, 'مكتب الدوحة', 'ar'),
(68, 34, 'DAMMAM - DOHA OFFICE', 'en'),
(69, 35, 'مكتب الخبر', 'ar'),
(70, 35, 'DAMMAM - ALKHOBAR HEAD OFFICE', 'en'),
(71, 36, 'مكتب أون لاين الدمام', 'ar'),
(72, 36, 'مكتب أون لاين الدمام', 'en'),
(73, 37, 'فندق الميرديان - الدمام', 'ar'),
(74, 37, 'فندق الميرديان - الدمام', 'en'),
(75, 38, 'المكتب الرئيسي -ابها', 'ar'),
(76, 38, 'ABHA - HEAD OFFICE', 'en'),
(77, 39, 'مكتب الشركات - ابها', 'ar'),
(78, 39, 'ABHA - COMPANY OFFICE', 'en'),
(79, 40, 'مكتب مطار أبها الاقليمي', 'ar'),
(80, 40, 'ABHA - AIRPORT OFFICE', 'en'),
(81, 41, 'مكتب خميس مشيط - ابها', 'ar'),
(82, 41, 'ABHA - KHAMIS OFFICE', 'en'),
(83, 42, 'مكتب دوار القصبة -ابها', 'ar'),
(84, 42, 'ABHA - ALKASABA OFFICE', 'en'),
(85, 43, 'مكتب العرفج -ابها', 'ar'),
(86, 43, 'ABHA - AL ARFAGA OFFICE', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `manufactory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price1` int(11) DEFAULT NULL,
  `desc` int(11) DEFAULT NULL,
  `discount_2` int(11) DEFAULT NULL,
  `discount_3` int(11) DEFAULT NULL,
  `price2` int(11) DEFAULT NULL,
  `price_from_2month_to_6month` double DEFAULT NULL,
  `price_from_6month_to_12month` double DEFAULT NULL,
  `price_from_1year_to_2years` double DEFAULT NULL,
  `price_from_2year_to_3years` double DEFAULT NULL,
  `price_after_from_2month_to_6month` double DEFAULT NULL,
  `price_after_from_6month_to_12month` double DEFAULT NULL,
  `price_after_from_1year_to_2years` double DEFAULT NULL,
  `price_after_from_2year_to_3years` double DEFAULT NULL,
  `model` int(11) DEFAULT NULL,
  `door` int(11) DEFAULT NULL,
  `luggage` int(11) DEFAULT NULL,
  `features` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baby_seat_price` double DEFAULT NULL,
  `shield_price` double DEFAULT NULL,
  `insurance_price` double DEFAULT NULL,
  `open_kilometers_price` double DEFAULT NULL,
  `navigation_price` double DEFAULT NULL,
  `home_delivery_price` double DEFAULT NULL,
  `intercity_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `category_id`, `manufactory_id`, `code`, `price1`, `desc`, `discount_2`, `discount_3`, `price2`, `price_from_2month_to_6month`, `price_from_6month_to_12month`, `price_from_1year_to_2years`, `price_from_2year_to_3years`, `price_after_from_2month_to_6month`, `price_after_from_6month_to_12month`, `price_after_from_1year_to_2years`, `price_after_from_2year_to_3years`, `model`, `door`, `luggage`, `features`, `baby_seat_price`, `shield_price`, `insurance_price`, `open_kilometers_price`, `navigation_price`, `home_delivery_price`, `intercity_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 6, '12701', 174, 5, 7, 9, 220, 5550, 5272, 4995, 4744, 4717, 4481, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 50, 100, 0, 0, 50, 50, '2021-03-25 07:20:45', '2021-03-27 05:59:07', NULL),
(2, 9, NULL, '10212', 425, 5, NULL, NULL, 500, 10500, 9975, 9450, 8977, 8925, 8478, 0, 0, 2021, 4, 2, 'automatic_transmission', 65, 0, 0, 0, 0, 50, 130, '2021-03-25 07:20:46', '2021-03-25 07:20:46', NULL),
(3, 17, NULL, '10204', 323, 5, NULL, NULL, 380, 10500, 9975, 9450, 8977, 8925, 8478, 0, 0, 2021, 4, 2, 'automatic_transmission', 65, 0, 0, 0, 0, 50, 130, '2021-03-25 07:20:46', '2021-03-25 07:20:46', NULL),
(4, 4, NULL, '10202', 185, 5, NULL, NULL, 220, 5550, 5270, 4995, 4744, 4717, 4481, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:46', '2021-03-25 07:20:46', NULL),
(5, 8, NULL, '10214', 220, 5, NULL, NULL, 250, 6000, 5400, 5400, 5130, 5100, 4845, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:46', '2021-03-25 07:20:46', NULL),
(6, 7, NULL, '12601', 185, 5, NULL, NULL, 220, 5550, 5272, 4995, 4744, 4717, 4481, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:46', '2021-03-25 07:20:46', NULL),
(7, 1, NULL, '11707', 105, 5, NULL, NULL, 120, 3000, 2850, 2700, 2565, 2550, 2422, 0, 0, 2020, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:46', '2021-03-25 07:36:47', NULL),
(8, 3, NULL, '10201', 119, 5, NULL, NULL, 140, 3300, 3135, 2970, 2821, 2805, 2664, 0, 0, 2020, 4, 2, 'automatic_transmission', 20, 0, 0, 0, 0, 50, 35, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(9, 4, NULL, '10202', 161, 5, NULL, NULL, 190, 4500, 4275, 4050, 3847, 3825, 3633, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(10, 6, NULL, '10203', 242, 5, NULL, NULL, 285, 7500, 7125, 6750, 6412, 6375, 6056, 0, 0, 2020, 4, 2, 'automatic_transmission', 35, 0, 0, 0, 0, 50, 70, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(11, 17, NULL, '10204', 297, 5, NULL, NULL, 350, 9000, 8550, 8100, 7695, 7650, 7267, 0, 0, 2020, 4, 2, 'automatic_transmission', 60, 0, 0, 0, 0, 50, 120, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(12, 16, NULL, '10417', 680, 5, NULL, NULL, 800, 21000, 19950, 18900, 17955, 17850, 16957, 0, 0, 2020, 4, 2, 'automatic_transmission', 100, 0, 0, 0, 0, 50, 200, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(13, 15, NULL, '10515', 680, 5, NULL, NULL, 800, 21000, 19950, 18900, 17955, 17850, 16957, 0, 0, 2020, 4, 2, 'automatic_transmission', 120, 0, 0, 0, 0, 50, 240, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(14, 19, NULL, '10516', 900, 5, NULL, NULL, 1100, 28000, 24000, 25200, 23940, 23800, 22610, 0, 0, 2020, 4, 2, 'automatic_transmission', 150, 0, 0, 0, 0, 50, 300, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(15, 15, NULL, '10518', 935, 5, NULL, NULL, 1100, 19500, 18525, 17550, 16672, 16575, 15746, 0, 0, 2020, 4, 2, 'automatic_transmission', 150, 0, 0, 0, 0, 50, 300, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(16, 3, NULL, '12301', 105, 5, NULL, NULL, 120, 3000, 2850, 2700, 2565, 2550, 2422, 0, 0, 2020, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(17, 15, NULL, '10517', 1105, 5, NULL, NULL, 1300, 27000, 25650, 24300, 23085, 22950, 21802, 0, 0, 2021, 4, 2, 'automatic_transmission', 0, 0, 0, 0, 0, 0, 0, '2021-03-25 07:20:47', '2021-03-25 07:20:47', NULL),
(18, 15, NULL, '10518', 1020, 5, NULL, NULL, 1200, 21000, 19950, 18900, 17955, 17850, 16957, 0, 0, 2021, 4, 2, 'automatic_transmission', 150, 0, 0, 0, 0, 50, 300, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(19, 13, NULL, '10517', 1020, 5, NULL, NULL, 1200, 25500, 24225, 22950, 21802, 21675, 20591, 0, 0, 2020, 4, 2, 'automatic_transmission', 0, 0, 0, 0, 0, 0, 0, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(20, 17, NULL, '12601', 272, 5, NULL, NULL, 320, 9000, 8550, 8100, 7695, 7650, 7267, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(21, 1, NULL, '11701', 85, 5, NULL, NULL, 100, 1900, 1805, 1710, 1624, 1615, 1534, 0, 0, 2017, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(22, 3, NULL, '10201', 85, 5, NULL, NULL, 100, 1900, 1805, 1710, 1624, 1615, 1534, 0, 0, 2017, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(23, 4, NULL, '10202', 130, 5, NULL, NULL, 180, 4000, 3300, 3600, 3420, 3400, 3230, 0, 0, 2017, 4, 2, 'automatic_transmission', 20, 0, 0, 0, 0, 50, 40, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(24, 4, NULL, '11202', 180, 5, NULL, NULL, 200, 4500, 3900, 4050, 3847, 3825, 3633, 0, 0, 2017, 4, 2, 'automatic_transmission', 20, 0, 0, 0, 0, 50, 40, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(25, 6, NULL, '11006', 289, 5, NULL, NULL, 340, 7200, 6840, 6480, 6156, 6120, 5814, 0, 0, 2017, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(26, NULL, NULL, '10505', 1900, 5, NULL, NULL, 2200, 45000, 43500, 40500, 38475, 38250, 36337, 0, 0, 2017, 4, 2, 'automatic_transmission', 150, 0, 0, 0, 0, 50, 300, '2021-03-25 07:20:48', '2021-03-25 07:20:48', NULL),
(27, NULL, NULL, '10514', 1870, 5, NULL, NULL, 2200, 60000, 57000, 54000, 51300, 51000, 48450, 0, 0, 2018, 4, 2, 'automatic_transmission', 200, 0, 0, 0, 0, 50, 400, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(28, NULL, NULL, '10406', 1400, 5, NULL, NULL, 1600, 40000, 36000, 36000, 34200, 34000, 32300, 0, 0, 2017, 4, 2, 'automatic_transmission', 200, 0, 0, 0, 0, 50, 400, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(29, NULL, NULL, '10406', 1445, 5, NULL, NULL, 1700, 40500, 38475, 36450, 34627, 34425, 32703, 0, 0, 2018, 4, 2, 'automatic_transmission', 200, 0, 0, 0, 0, 50, 400, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(30, NULL, NULL, '11006', 319, 5, NULL, NULL, 375, 8700, 8265, 7830, 7438, 7395, 7025, 0, 0, 2018, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(31, NULL, NULL, '10417', 510, 5, NULL, NULL, 800, 16000, 15000, 14400, 13680, 13600, 12920, 0, 0, 2017, 4, 2, 'automatic_transmission', 100, 0, 0, 0, 0, 50, 200, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(32, NULL, NULL, '11101', 85, 5, NULL, NULL, 100, 1900, 1805, 1710, 1624, 1615, 1534, 0, 0, 2018, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(33, NULL, NULL, '11007', 85, 5, NULL, NULL, 100, 1900, 1805, 1710, 1624, 1615, 1534, 0, 0, 2018, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(34, NULL, NULL, '11506', 85, 5, NULL, NULL, 100, 1900, 1805, 1710, 1624, 1615, 1534, 0, 0, 2019, 4, 2, 'automatic_transmission', 15, 0, 0, 0, 0, 50, 30, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(35, NULL, NULL, '10906', 450, 5, NULL, NULL, 500, 12000, 10500, 10800, 10260, 10200, 9690, 0, 0, 2016, 4, 2, 'automatic_transmission', 35, 0, 0, 0, 0, 50, 70, '2021-03-25 07:20:49', '2021-03-25 07:20:49', NULL),
(36, NULL, NULL, '10906', 550, 5, NULL, NULL, 600, 15000, 13500, 13500, 12825, 12750, 12112, 0, 0, 2018, 4, 2, 'automatic_transmission', 0, 0, 0, 0, 0, 0, 0, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(37, NULL, NULL, '10905', 552, 5, NULL, NULL, 650, 15000, 14250, 13500, 12825, 12750, 12112, 0, 0, 2017, 4, 2, 'automatic_transmission', 0, 0, 0, 0, 0, 0, 0, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(38, NULL, NULL, '10201', 105, 5, NULL, NULL, 124, 2500, 2370, 2250, 2137, 2125, 2018, 0, 0, 2019, 4, 2, 'automatic_transmission', 20, 0, 0, 0, 0, 50, 40, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(39, NULL, NULL, '10202', 120, 5, NULL, NULL, 140, 3300, 3135, 2970, 2821, 2805, 2664, 0, 0, 2019, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(40, NULL, NULL, '10203', 238, 5, NULL, NULL, 280, 5500, 5225, 4950, 4702, 4675, 4441, 0, 0, 2019, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(41, NULL, NULL, '10203', 285, 5, NULL, NULL, 350, 8000, 7500, 7200, 6840, 6800, 6460, 0, 0, 2017, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(42, NULL, NULL, '11707', 105, 5, NULL, NULL, 120, 3000, 2850, 2700, 2565, 2550, 2422, 0, 0, 2021, 4, 2, 'automatic_transmission', 50, 0, 0, 0, 0, 50, 100, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(43, NULL, NULL, '10203', 300, 5, NULL, NULL, 350, 8000, 7500, 7200, 6840, 6800, 6460, 0, 0, 2021, 4, 2, 'automatic_transmission', 100, 0, 0, 0, 0, 50, 200, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(44, NULL, NULL, '10201', 150, 5, NULL, NULL, 200, 4500, 3600, 4050, 3847, 3825, 3633, 0, 0, 2021, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:50', '2021-03-25 07:20:50', NULL),
(45, NULL, NULL, '11006', 360, 5, NULL, NULL, 450, 8500, 7200, 7650, 7267, 7225, 6863, 0, 0, 2020, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(46, NULL, NULL, '11706', 190, 5, NULL, NULL, 200, 3500, 3325, 3150, 2992, 2975, 2826, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(47, NULL, NULL, '11706', 160, 5, NULL, NULL, 220, 3500, 3325, 3150, 2992, 2975, 2826, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(48, NULL, NULL, '11106', 447, 5, NULL, NULL, 470, 6000, 5700, 5400, 5130, 5100, 4845, 0, 0, 400, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(49, NULL, NULL, '11109', 185, 5, NULL, NULL, 220, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2017, 4, 2, 'automatic_transmission', 0, 0, 0, 0, 0, 0, 0, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(50, NULL, NULL, '10101', 140, 27, NULL, NULL, 190, 4000, 3800, 3600, 3420, 3400, 3230, 0, 0, 2019, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(51, NULL, NULL, '10102', 185, 5, NULL, NULL, 220, 3000, 2850, 2700, 2565, 2550, 2422, 0, 0, 2018, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(52, NULL, NULL, '10103', 300, 5, NULL, NULL, 355, 6000, 5700, 5400, 5130, 5100, 4845, 0, 0, 2020, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(53, NULL, NULL, '10910', 102, 5, NULL, NULL, 120, 2100, 1995, 1890, 1795, 1785, 1695, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:51', '2021-03-25 07:20:51', NULL),
(54, NULL, NULL, '10905', 552, 5, NULL, NULL, 650, 17000, 16150, 15300, 14535, 14450, 13727, 0, 0, 2020, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(55, NULL, NULL, '10105', 480, 5, NULL, NULL, 565, 4500, 4275, 4050, 3847, 3825, 3633, 0, 0, 2018, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(56, NULL, NULL, '10105', 500, 5, NULL, NULL, 590, 4500, 4275, 4050, 3847, 3825, 3633, 0, 0, 2019, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(57, NULL, NULL, '10105', 550, 5, NULL, NULL, 650, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(58, NULL, NULL, '10108', 450, 5, NULL, NULL, 530, 3000, 2850, 2700, 2565, 2550, 2422, 0, 0, 2018, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(59, NULL, NULL, '10108', 480, 5, NULL, NULL, 565, 3500, 3325, 3150, 2992, 2975, 2826, 0, 0, 2019, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(60, NULL, NULL, '10108', 450, 5, NULL, NULL, 530, 4500, 4275, 4050, 3847, 3825, 3633, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(61, NULL, NULL, '10109', 300, 5, NULL, NULL, 355, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2018, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(62, NULL, NULL, '10109', 400, 5, NULL, NULL, 470, 6000, 5700, 5400, 5130, 5100, 4845, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(63, NULL, NULL, '10516', 765, 5, NULL, NULL, 900, 24000, 22800, 21600, 20520, 20400, 19380, 0, 0, 2020, 4, 2, 'automatic_transmission', 150, 0, 0, 0, 0, 50, 300, '2021-03-25 07:20:52', '2021-03-25 07:20:52', NULL),
(64, NULL, NULL, '10411', 1000, 5, NULL, NULL, 1180, 7000, 6650, 6300, 5985, 5950, 5652, 0, 0, 2020, 4, 2, 'automatic_transmission', 100, 0, 0, 0, 0, 50, 200, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(65, NULL, NULL, '10403', 800, 5, NULL, NULL, 940, 7000, 6650, 6300, 5985, 5950, 5652, 0, 0, 2020, 4, 2, 'automatic_transmission', 100, 0, 0, 0, 0, 50, 200, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(66, NULL, NULL, '10301', 170, 5, NULL, NULL, 200, 3300, 3135, 2970, 2821, 2805, 2664, 0, 0, 2017, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(67, NULL, NULL, '10301', 200, 5, NULL, NULL, 235, 3500, 3325, 3150, 2992, 2975, 2826, 0, 0, 2018, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(68, NULL, NULL, '10302', 290, 5, NULL, NULL, 340, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2020, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(69, NULL, NULL, '10302', 320, 5, NULL, NULL, 375, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2021, 4, 2, 'automatic_transmission', 25, 0, 0, 0, 0, 50, 50, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(70, NULL, NULL, '10114', 250, 5, NULL, NULL, 295, 3300, 2700, 2970, 2821, 2805, 2664, 0, 0, 2017, 4, 2, 'automatic_transmission', 40, 0, 0, 0, 0, 50, 80, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(71, NULL, NULL, '10114', 270, 5, NULL, NULL, 320, 4000, 3500, 3600, 3420, 3400, 3230, 0, 0, 2018, 4, 2, 'automatic_transmission', 40, 0, 0, 0, 0, 50, 80, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(72, NULL, NULL, '10114', 280, 5, NULL, NULL, 330, 4200, 3600, 3780, 3591, 3570, 3391, 0, 0, 2019, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(73, NULL, NULL, '10114', 300, 5, NULL, NULL, 355, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2020, 4, 2, 'automatic_transmission', 50, 0, 0, 0, 0, 50, 100, '2021-03-25 07:20:53', '2021-03-25 07:20:53', NULL),
(74, NULL, NULL, '10108', 500, 5, NULL, NULL, 590, 5000, 4750, 4500, 4275, 4250, 4037, 0, 0, 2021, 4, 2, 'automatic_transmission', 30, 0, 0, 0, 0, 50, 60, '2021-03-25 07:20:54', '2021-03-25 07:20:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cars_in_stock`
--

CREATE TABLE `cars_in_stock` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_translations`
--

CREATE TABLE `car_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_translations`
--

INSERT INTO `car_translations` (`id`, `car_id`, `name`, `locale`) VALUES
(1, 1, 'ام جى زد اس', 'ar'),
(2, 1, 'ام جى زد اس', 'en'),
(3, 2, 'هونداى ازيرا', 'ar'),
(4, 2, 'هونداى ازيرا', 'en'),
(5, 3, 'فان اتش 1', 'ar'),
(6, 3, 'فان اتش 1', 'en'),
(7, 4, 'النترا ', 'ar'),
(8, 4, 'النترا ', 'en'),
(9, 5, 'كريتا ', 'ar'),
(10, 5, 'كريتا ', 'en'),
(11, 6, 'كولراى ', 'ar'),
(12, 6, 'كولراى ', 'en'),
(13, 7, 'بيجاس', 'ar'),
(14, 7, 'بيجاس', 'en'),
(15, 8, 'هونداى اكسنت ', 'ar'),
(16, 8, 'هونداى اكسنت ', 'en'),
(17, 9, 'النترا', 'ar'),
(18, 9, 'النترا', 'en'),
(19, 10, 'سوناتا ', 'ar'),
(20, 10, 'سوناتا ', 'en'),
(21, 11, 'فان اتش 1', 'ar'),
(22, 11, 'فان اتش 1', 'en'),
(23, 12, 'رنج روفر ', 'ar'),
(24, 12, 'رنج روفر ', 'en'),
(25, 13, 'C200 AMGمرسيدس ', 'ar'),
(26, 13, 'C200 AMGمرسيدس ', 'en'),
(27, 14, 'C200 AMG-S مرسيدس ', 'ar'),
(28, 14, 'C200 AMG-S مرسيدس ', 'en'),
(29, 15, 'GLA 250 مرسيدس ', 'ar'),
(30, 15, 'GLA 250 مرسيدس ', 'en'),
(31, 16, 'شانجان V7', 'ar'),
(32, 16, 'شانجان V7', 'en'),
(33, 17, 'GLC 200مرسيدس ', 'ar'),
(34, 17, 'GLC 200مرسيدس ', 'en'),
(35, 18, 'GLA 250 مرسيدس	', 'ar'),
(36, 18, 'GLA 250 مرسيدس	', 'en'),
(37, 19, 'GLC 200مرسيدس	', 'ar'),
(38, 19, 'GLC 200مرسيدس	', 'en'),
(39, 20, 'ازكارا - Azkarra', 'ar'),
(40, 20, 'ازكارا - Azkarra', 'en'),
(41, 21, 'كيا ريو ', 'ar'),
(42, 21, 'كيا ريو ', 'en'),
(43, 22, 'هونداى اكسنت ', 'ar'),
(44, 22, 'هونداى اكسنت ', 'en'),
(45, 23, 'هونداى النترا ', 'ar'),
(46, 23, 'هونداى النترا ', 'en'),
(47, 24, 'هوندا سيفيك ', 'ar'),
(48, 24, 'هوندا سيفيك ', 'en'),
(49, 25, 'فورد تورس', 'ar'),
(50, 25, 'فورد تورس', 'en'),
(51, 26, 'S  320 مرسيدس ', 'ar'),
(52, 26, 'S  320 مرسيدس ', 'en'),
(53, 27, 'S  450 مرسيدس ', 'ar'),
(54, 27, 'S  450 مرسيدس ', 'en'),
(55, 28, '730 بى ام دبليو', 'ar'),
(56, 28, '730 بى ام دبليو', 'en'),
(57, 29, '730 بى ام دبليو', 'ar'),
(58, 29, '730 بى ام دبليو', 'en'),
(59, 30, 'فورد تورس', 'ar'),
(60, 30, 'فورد تورس', 'en'),
(61, 31, 'رنج روفر ', 'ar'),
(62, 31, 'رنج روفر ', 'en'),
(63, 32, 'نيسان صني', 'ar'),
(64, 32, 'نيسان صني', 'en'),
(65, 33, 'فورد فيجو', 'ar'),
(66, 33, 'فورد فيجو', 'en'),
(67, 34, 'متسيبوشي اتراج', 'ar'),
(68, 34, 'متسيبوشي اتراج', 'en'),
(69, 35, 'شيفورليه سوبر بان ', 'ar'),
(70, 35, 'شيفورليه سوبر بان ', 'en'),
(71, 36, 'شيفورليه سوبر بان ', 'ar'),
(72, 36, 'شيفورليه سوبر بان ', 'en'),
(73, 37, 'شيفورليه تاهو ', 'ar'),
(74, 37, 'شيفورليه تاهو ', 'en'),
(75, 38, 'هونداى اكسنت ', 'ar'),
(76, 38, 'هونداى اكسنت ', 'en'),
(77, 39, 'هونداى النترا ', 'ar'),
(78, 39, 'هونداى النترا ', 'en'),
(79, 40, 'سوناتا ', 'ar'),
(80, 40, 'سوناتا ', 'en'),
(81, 41, 'سوناتا ', 'ar'),
(82, 41, 'سوناتا ', 'en'),
(83, 42, 'بيجاس', 'ar'),
(84, 42, 'بيجاس', 'en'),
(85, 43, 'هونداى سوناتا ', 'ar'),
(86, 43, 'هونداى سوناتا ', 'en'),
(87, 44, 'هونداى اكسنت ', 'ar'),
(88, 44, 'هونداى اكسنت ', 'en'),
(89, 45, 'فورد تورس', 'ar'),
(90, 45, 'فورد تورس', 'en'),
(91, 46, 'كيا سيراتو ', 'ar'),
(92, 46, 'كيا سيراتو ', 'en'),
(93, 47, 'كيا سيراتو ', 'ar'),
(94, 47, 'كيا سيراتو ', 'en'),
(95, 48, 'نيسان باثفيندر ', 'ar'),
(96, 48, 'نيسان باثفيندر ', 'en'),
(97, 49, 'نيسان سنترا ', 'ar'),
(98, 49, 'نيسان سنترا ', 'en'),
(99, 50, 'تويوتا يارس ', 'ar'),
(100, 50, 'تويوتا يارس ', 'en'),
(101, 51, 'تويوتا كرولا ', 'ar'),
(102, 51, 'تويوتا كرولا ', 'en'),
(103, 52, 'تويوتا كامرى ', 'ar'),
(104, 52, 'تويوتا كامرى ', 'en'),
(105, 53, 'شيفورليه سبارك ', 'ar'),
(106, 53, 'شيفورليه سبارك ', 'en'),
(107, 54, 'شيفورليه تاهو ', 'ar'),
(108, 54, 'شيفورليه تاهو ', 'en'),
(109, 55, 'تويوتا برادو ', 'ar'),
(110, 55, 'تويوتا برادو ', 'en'),
(111, 56, 'تويوتا برادو ', 'ar'),
(112, 56, 'تويوتا برادو ', 'en'),
(113, 57, 'تويوتا برادو ', 'ar'),
(114, 57, 'تويوتا برادو ', 'en'),
(115, 58, 'تويوتا فورشنر ', 'ar'),
(116, 58, 'تويوتا فورشنر ', 'en'),
(117, 59, 'تويوتا فورشنر ', 'ar'),
(118, 59, 'تويوتا فورشنر ', 'en'),
(119, 60, 'تويوتا فورشنر ', 'ar'),
(120, 60, 'تويوتا فورشنر ', 'en'),
(121, 61, 'تويوتا راف فور  ', 'ar'),
(122, 61, 'تويوتا راف فور  ', 'en'),
(123, 62, 'تويوتا راف فور  ', 'ar'),
(124, 62, 'تويوتا راف فور  ', 'en'),
(125, 63, 'c200  AMG - BABY مرسيدس ', 'ar'),
(126, 63, 'c200  AMG - BABY مرسيدس ', 'en'),
(127, 64, 'بى ام دبليو اكس 5', 'ar'),
(128, 64, 'بى ام دبليو اكس 5', 'en'),
(129, 65, 'بى ام دبليو 520', 'ar'),
(130, 65, 'بى ام دبليو 520', 'en'),
(131, 66, 'مازدا 3', 'ar'),
(132, 66, 'مازدا 3', 'en'),
(133, 67, 'مازدا 3', 'ar'),
(134, 67, 'مازدا 3', 'en'),
(135, 68, 'مازدا 6 ', 'ar'),
(136, 68, 'مازدا 6 ', 'en'),
(137, 69, 'مازدا 6 ', 'ar'),
(138, 69, 'مازدا 6 ', 'en'),
(139, 70, 'تويوتا بكب غمارتين ', 'ar'),
(140, 70, 'تويوتا بكب غمارتين ', 'en'),
(141, 71, 'تويوتا بكب غمارتين ', 'ar'),
(142, 71, 'تويوتا بكب غمارتين ', 'en'),
(143, 72, 'تويوتا بكب غمارتين ', 'ar'),
(144, 72, 'تويوتا بكب غمارتين ', 'en'),
(145, 73, 'تويوتا بكب غمارتين ', 'ar'),
(146, 73, 'تويوتا بكب غمارتين ', 'en'),
(147, 74, 'تويوتا فورشنر ', 'ar'),
(148, 74, 'تويوتا فورشنر ', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderBy_numper` int(11) NOT NULL,
  `vat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `orderBy_numper`, `vat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 15, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(2, 1, 15, '2021-03-25 07:20:43', '2021-03-25 07:20:43', NULL),
(3, 4, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(4, 5, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(5, 3, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(6, 6, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(7, 7, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(8, 11, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(9, 8, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(10, 19, 15, '2021-03-25 07:20:44', '2021-03-25 07:20:44', NULL),
(11, 12, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(12, 10, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(13, 14, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(14, 18, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(15, 15, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(16, 9, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(17, 16, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(18, 17, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL),
(19, 13, 15, '2021-03-25 07:20:45', '2021-03-25 07:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `name`, `locale`) VALUES
(1, 1, 'اقتصادية', 'ar'),
(2, 1, 'Economy', 'en'),
(3, 2, 'كومباكت', 'ar'),
(4, 2, 'Compact', 'en'),
(5, 3, 'سيدان صغيرة', 'ar'),
(6, 3, 'Small Sedan', 'en'),
(7, 4, 'سيدان متوسطة', 'ar'),
(8, 4, 'Intermediate Sedan', 'en'),
(9, 5, 'عائلية اقتصادية', 'ar'),
(10, 5, 'Economy SUV', 'en'),
(11, 6, 'سيدان كبير', 'ar'),
(12, 6, 'Full Size Sedan', 'en'),
(13, 7, 'كروس أوفر', 'ar'),
(14, 7, 'Crossover', 'en'),
(15, 8, 'عائلية صغيرة', 'ar'),
(16, 8, 'Small SUV', 'en'),
(17, 9, 'مميزة', 'ar'),
(18, 9, 'Premium', 'en'),
(19, 10, 'فان صغير', 'ar'),
(20, 10, 'Mini Van', 'en'),
(21, 11, 'عائلية وسط', 'ar'),
(22, 11, 'Intermediate SUV', 'en'),
(23, 12, 'فخمة كروس اوفر', 'ar'),
(24, 12, 'Luxury Crossover', 'en'),
(25, 13, 'فخمة صغيرة', 'ar'),
(26, 13, 'Small Luxury', 'en'),
(27, 14, 'فان فخمة', 'ar'),
(28, 14, 'Luxury Van', 'en'),
(29, 15, 'فخمة متوسطة', 'ar'),
(30, 15, 'Intermediate Luxury', 'en'),
(31, 16, 'سياره رياضية', 'ar'),
(32, 16, 'Sports', 'en'),
(33, 17, 'عائلية كبيرة', 'ar'),
(34, 17, 'Full Size SUV', 'en'),
(35, 18, 'فخمة عائلية', 'ar'),
(36, 18, 'Luxury SUV', 'en'),
(37, 19, 'فخمة كبيرة', 'ar'),
(38, 19, 'Full Size Luxury', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `email`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'ut', '770.355.3282 x6921', 'ufranecki@frami.com', 'Eos adipisci aliquam et excepturi.', '2021-03-25 12:09:49', '2021-03-25 07:20:19', '2021-03-25 12:09:49'),
(2, 'atque', '(273) 932-1064 x5330', 'thea13@hammes.com', 'Voluptatem quidem deserunt cupiditate ut.', NULL, '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(3, 'perspiciatis', '1-704-852-7104 x8026', 'torphy.matteo@bogan.net', 'Voluptatem et neque ut eos quidem consequatur et.', '2021-03-25 07:20:19', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(4, 'quo', '(813) 440-2631 x633', 'phoebe06@connelly.com', 'Soluta eveniet voluptatem aliquam ullam aut ut facere neque.', NULL, '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(5, 'dolore', '684-432-8221', 'stacy53@rutherford.net', 'Deleniti voluptatum aut porro aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(6, 'ipsam', '1-275-572-7125 x74311', 'kohler.ella@effertz.net', 'Et accusamus non aut pariatur.', '2021-03-25 07:20:19', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(7, 'ducimus', '(262) 415-9128 x80563', 'marquis21@lehner.com', 'Ratione et aut doloremque sed voluptatem.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(8, 'voluptatibus', '902.358.2100 x8554', 'kathlyn.towne@hermiston.info', 'Aliquam ex mollitia nemo hic nobis et enim modi.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(9, 'vel', '804.383.2432 x9751', 'emosciski@sauer.com', 'Dignissimos non eos repudiandae delectus autem amet vel.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(10, 'sed', '+1.601.493.7893', 'deborah70@monahan.org', 'Vero ullam vel laborum non nam.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(11, 'distinctio', '(282) 884-8859 x5205', 'sierra88@bayer.com', 'Voluptatem aut accusantium fuga esse fugiat.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(12, 'in', '1-208-416-7323', 'natalie75@stehr.com', 'Ut molestiae repellat ut modi aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(13, 'pariatur', '1-332-299-8496 x9608', 'ladarius.boehm@abbott.org', 'Consectetur ab reiciendis consectetur vel quo minus nemo.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(14, 'aut', '+1 (229) 790-2992', 'dschulist@collier.org', 'Sed molestiae dolore quod dolor sit aut qui.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(15, 'animi', '442.873.9791', 'grady.amir@hermiston.info', 'Ut similique laboriosam excepturi est odio in laudantium odio.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(16, 'quidem', '1-986-781-2851', 'pbogan@gleason.com', 'Voluptatibus sit corporis sit ullam.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(17, 'similique', '+1 (618) 397-6128', 'fjakubowski@wilkinson.net', 'Inventore dolor sint asperiores quo minima magni.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(18, 'nam', '(743) 997-0333', 'isai.cruickshank@rath.com', 'Ut consequuntur eum earum.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(19, 'nisi', '1-451-744-7468 x57335', 'oparker@zemlak.info', 'Ipsam sed doloribus nihil suscipit accusantium ratione voluptas.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(20, 'quas', '+1.809.238.3820', 'weimann.davon@ward.biz', 'Dolorem excepturi doloribus magnam ipsam.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(21, 'quia', '(229) 223-3430', 'maxwell43@hartmann.org', 'Et itaque nobis dolorum error.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(22, 'mollitia', '752.688.5741', 'quitzon.wilson@blick.biz', 'Explicabo itaque et laudantium.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(23, 'placeat', '+1-557-209-2816', 'fritz95@powlowski.org', 'Dignissimos soluta voluptas non in eos voluptate corporis.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(24, 'dolor', '552-727-5030 x60309', 'cmoen@blanda.com', 'Error ea a perspiciatis quia non.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(25, 'cupiditate', '1-215-574-6119 x69286', 'schulist.jessyca@stroman.com', 'Ut doloribus itaque aliquid eum ullam.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(26, 'velit', '905.878.6915', 'gibson.aiyana@jakubowski.com', 'Suscipit ipsa quasi eligendi qui aut qui commodi.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(27, 'nulla', '614-830-1908', 'crist.madison@hayes.com', 'Velit labore ut eum reprehenderit atque accusantium eos.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(28, 'numquam', '(614) 603-9037 x9017', 'eblick@runte.com', 'Officiis voluptas cum iure nostrum.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(29, 'natus', '768-450-9477 x4537', 'hal46@cormier.net', 'Voluptatem occaecati ut dolorem velit aut odit placeat sit.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(30, 'beatae', '1-526-668-9995', 'ljakubowski@cruickshank.com', 'Excepturi voluptatibus et asperiores eveniet aspernatur.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(31, 'deleniti', '301.783.5413 x670', 'fbarton@weber.com', 'Ut est ut ex enim.', NULL, '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(32, 'nisi', '556-651-6629 x067', 'mwest@klein.org', 'Et voluptates minima laudantium quo necessitatibus.', '2021-03-25 07:20:19', '2021-03-25 07:20:20', '2021-03-25 07:20:20'),
(33, 'sit', '810-770-4006 x5296', 'orval.olson@bogisich.com', 'Ut nihil itaque vel.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(34, 'omnis', '996.274.9767 x622', 'luisa35@powlowski.com', 'Id velit occaecati ipsum ut voluptates consequuntur sequi rerum.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(35, 'iure', '(401) 528-7213 x96193', 'boehm.shea@green.org', 'Delectus dolores saepe blanditiis quia ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(36, 'molestiae', '(680) 218-7517', 'emedhurst@metz.com', 'Molestias amet sit consequatur ullam porro eos libero.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(37, 'sunt', '468.943.5281 x9969', 'perdman@rau.com', 'Repellat velit maxime placeat dignissimos et magni.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(38, 'sint', '960.585.4760', 'sluettgen@mills.com', 'Ut dolorem amet officia molestiae.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(39, 'quasi', '(964) 505-2692 x3966', 'laurence.okon@auer.org', 'Non odit a sunt aut ratione nobis.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(40, 'illum', '490-202-3712 x583', 'cory.braun@graham.com', 'Quia natus laborum ipsum inventore nam.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(41, 'eum', '258-595-7578', 'audrey91@mcglynn.com', 'Sit vitae excepturi incidunt repellat odit.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(42, 'occaecati', '+1 (524) 947-8589', 'bokon@hayes.com', 'Reprehenderit sunt architecto et non.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(43, 'iusto', '403-382-1902 x3788', 'cruickshank.ebony@langworth.org', 'Libero tempore vero cum.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(44, 'incidunt', '1-323-591-3628', 'fritsch.magnolia@cronin.com', 'Et et maxime soluta libero.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(45, 'explicabo', '(237) 769-1938 x774', 'ewalsh@rice.com', 'Sequi saepe in odio beatae tempora eius.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(46, 'sapiente', '1-941-905-0639 x5644', 'janie14@rempel.com', 'Eligendi assumenda illo quia.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(47, 'enim', '584-434-3676', 'oleta.reichel@howe.com', 'Nesciunt voluptatum incidunt nihil qui eos doloremque voluptatem eligendi.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(48, 'necessitatibus', '284-848-7233', 'donny49@daniel.net', 'Molestiae autem molestiae qui est sit repudiandae dolor fugit.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(49, 'qui', '+1 (489) 902-7851', 'bjakubowski@hamill.net', 'Minima ut deleniti ea quis eum asperiores.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(50, 'labore', '348.277.8358', 'bins.gabe@kshlerin.com', 'Saepe autem in nisi.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(51, 'tenetur', '1-778-313-7180 x80963', 'domenic.schiller@waters.com', 'Tenetur autem suscipit placeat sit iure quae a.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(52, 'temporibus', '+1 (784) 482-9943', 'upagac@toy.com', 'Tempora ipsa quae et omnis ea perspiciatis.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(53, 'dignissimos', '835-458-5342 x648', 'dora.towne@raynor.com', 'Sed tempore sit voluptas consequuntur quia ipsa vero.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(54, 'excepturi', '1-568-334-5688 x6473', 'nbahringer@zieme.com', 'Fuga ut veniam et et saepe expedita aut ut.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(55, 'exercitationem', '+1-301-670-7664', 'amos47@conn.com', 'Fugiat velit consectetur molestias debitis.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(56, 'neque', '268-612-4619', 'jaren55@kling.com', 'Ea ut non voluptate delectus nobis quas.', NULL, '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(57, 'quo', '+1-205-671-5535', 'fisher.maryam@kozey.com', 'Occaecati dolor porro rerum et reiciendis.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(58, 'qui', '890.295.8830', 'egottlieb@kling.net', 'Et et quisquam vero explicabo suscipit.', '2021-03-25 07:20:19', '2021-03-25 07:20:21', '2021-03-25 07:20:21'),
(59, 'dignissimos', '1-917-380-6769 x1028', 'hermiston.eusebio@crona.net', 'Sit architecto sunt esse adipisci qui quia ex.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(60, 'odio', '(883) 858-0615 x46947', 'fabiola.franecki@greenfelder.com', 'Eum corrupti rem aliquam ipsum quas voluptas.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(61, 'qui', '272.248.8122', 'block.arlene@volkman.info', 'Est enim qui exercitationem quo.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(62, 'ipsam', '(230) 336-1296', 'jboyer@mccullough.org', 'Consectetur quis mollitia et velit quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(63, 'repellendus', '(420) 284-7099 x861', 'oswaldo94@auer.com', 'Enim voluptate consequuntur sit ab hic sit.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(64, 'nobis', '+1 (553) 587-9720', 'pflatley@lesch.com', 'Perspiciatis et et quia corrupti odit ipsa hic tempore.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(65, 'magnam', '506.749.6146 x7332', 'stokes.wendy@howell.com', 'Et officiis omnis sapiente libero vel vel aperiam.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(66, 'minima', '+1-635-688-2417', 'summer53@cremin.org', 'Quam dolorem maiores nostrum asperiores totam.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(67, 'minus', '(591) 324-8797 x64219', 'wbalistreri@crooks.net', 'Corporis quae suscipit quibusdam eum qui tempora nulla.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(68, 'veniam', '597.239.2981', 'okey99@mccullough.com', 'A doloremque numquam blanditiis et optio dolor explicabo.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(69, 'dolorem', '(729) 292-8802 x170', 'cwalter@hackett.com', 'Dolorem quaerat quia quo cum qui sint esse.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(70, 'molestiae', '807-224-7080 x354', 'lgutmann@moen.com', 'Quis tempora ea quisquam id fugiat dolor.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(71, 'consequatur', '976-438-5453 x124', 'bayer.lyric@heaney.com', 'Totam qui quis harum architecto sapiente optio maiores.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(72, 'voluptatum', '1-923-763-6381 x95866', 'walsh.kim@effertz.com', 'Magnam rem expedita aut iste repellendus sint occaecati animi.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(73, 'consequatur', '+1-317-933-4172', 'keyshawn.glover@rowe.net', 'Et et perspiciatis magnam explicabo.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(74, 'quo', '479-263-5142 x1858', 'qbartell@fisher.com', 'Odit asperiores vel quidem saepe laudantium.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(75, 'nisi', '972-696-9305', 'fheathcote@hettinger.com', 'Sapiente rem voluptas sit rem dolore quo harum.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(76, 'unde', '1-396-743-1627 x27117', 'adrianna75@farrell.org', 'Quas iure labore voluptatibus nobis aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(77, 'similique', '1-390-261-4064', 'wmiller@feest.net', 'Quasi voluptatem tempore illum sint.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(78, 'vero', '1-904-749-0168 x64784', 'arden.nolan@crist.com', 'Nam nesciunt dolor nobis sapiente maiores.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(79, 'sit', '1-328-869-4294 x733', 'joe94@koelpin.com', 'Vel aperiam at quia deserunt in rem sit quae.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(80, 'blanditiis', '1-886-386-6955', 'jacobson.sarina@swaniawski.biz', 'Nisi asperiores voluptatem minus explicabo qui.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(81, 'quaerat', '1-274-858-1145 x571', 'lpredovic@osinski.com', 'Cupiditate inventore corporis quae enim vitae non.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(82, 'enim', '251.271.8882 x12598', 'wpadberg@schneider.com', 'Iusto veritatis culpa consequatur magni assumenda officia non.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(83, 'asperiores', '601-834-1604 x12188', 'tkovacek@bins.com', 'Vel aut iusto molestiae odit sunt repellat quam est.', '2021-03-25 07:20:19', '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(84, 'deleniti', '320.267.3947', 'tyrell02@treutel.com', 'Eius commodi dolor eum est adipisci.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(85, 'sunt', '1-325-235-9545', 'bell07@hills.com', 'Sint dolorum voluptatibus quia dolorem eius.', NULL, '2021-03-25 07:20:22', '2021-03-25 07:20:22'),
(86, 'laborum', '1-302-775-8857 x593', 'novella13@oconnell.org', 'Est soluta enim ut aliquam praesentium.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(87, 'qui', '962-814-3223 x81447', 'xmckenzie@lang.com', 'Quia placeat inventore est officia.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(88, 'at', '284-327-6427', 'jeromy65@schmitt.biz', 'Dolor repellendus in quos porro.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(89, 'quia', '662.233.6290', 'dicki.freddie@hagenes.info', 'Odit dolores praesentium aliquam quisquam exercitationem quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(90, 'pariatur', '(332) 333-9691 x869', 'bruen.litzy@feest.com', 'Consequuntur iure a sed et aut eos.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(91, 'dignissimos', '+1 (641) 285-1243', 'kilback.kip@rippin.com', 'Voluptatibus voluptatum possimus voluptas tenetur voluptatibus.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(92, 'rem', '(893) 864-5546', 'aniya.rosenbaum@hagenes.com', 'Aliquid commodi sed aut omnis voluptas molestiae.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(93, 'quo', '+1-318-662-4194', 'louisa51@green.info', 'Non minima asperiores nulla aut aut inventore alias.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(94, 'qui', '240.422.1818', 'treilly@okeefe.biz', 'Sed quo provident tempora molestiae enim cupiditate iure.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(95, 'autem', '1-893-947-2022 x681', 'torp.meta@treutel.com', 'Doloribus consequatur incidunt distinctio adipisci ipsa repudiandae esse.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(96, 'numquam', '219-709-9881 x5342', 'hkunze@jerde.com', 'Blanditiis voluptatem blanditiis nostrum animi.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(97, 'tenetur', '+1.392.456.7034', 'lucile.schuster@beier.com', 'Aut numquam fugiat et rerum dolorem quidem aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(98, 'accusantium', '896-939-9268 x82771', 'rae65@bogisich.info', 'Officiis mollitia sint veniam voluptatem et consequuntur.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(99, 'similique', '805.669.4464', 'edwin00@zulauf.info', 'Voluptas consequuntur corporis in et.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(100, 'molestiae', '+1.493.470.6758', 'aniya.strosin@casper.com', 'Facilis atque similique enim voluptates.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(101, 'odit', '+1-512-704-1082', 'bkautzer@pouros.com', 'Qui deserunt ex et id aut qui.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(102, 'voluptas', '+1-378-902-6181', 'niko.marvin@rosenbaum.com', 'Excepturi unde quidem perspiciatis ea eius commodi quos.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(103, 'eaque', '761-390-4844', 'markus.roob@fay.info', 'Iste rerum placeat earum occaecati sunt nihil et quidem.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(104, 'est', '670-657-0068 x6751', 'nathaniel03@raynor.com', 'Libero aut eveniet qui nisi.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(105, 'explicabo', '+15909323077', 'colt.macejkovic@mcglynn.com', 'Eos sed ut fugiat dolor.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(106, 'eius', '+1 (221) 213-0774', 'terrill.prosacco@mosciski.com', 'Quasi consequatur iste maxime culpa voluptatem.', NULL, '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(107, 'atque', '910.613.2533 x3936', 'caesar99@torphy.com', 'Ex voluptatibus voluptatibus omnis ea ipsam voluptas.', '2021-03-25 07:20:19', '2021-03-25 07:20:23', '2021-03-25 07:20:23'),
(108, 'sed', '+1 (627) 987-5796', 'poreilly@carter.com', 'Cumque quisquam saepe et vel error architecto aut.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(109, 'ab', '632.577.7122 x0796', 'jovani32@weber.com', 'Exercitationem aut nemo animi placeat alias saepe.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(110, 'ipsa', '1-293-489-8596 x195', 'alivia56@smitham.com', 'Assumenda maiores consequatur soluta dolorem architecto.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(111, 'aperiam', '+1 (647) 230-0595', 'kenyon47@emmerich.com', 'Vel earum id consequuntur quo molestias.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(112, 'similique', '805-345-8122', 'zachary34@fay.com', 'Voluptatibus recusandae aut itaque ea officia voluptatibus quibusdam ut.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(113, 'ex', '+1 (746) 201-2158', 'graham.morissette@dubuque.com', 'Rerum et similique fugit mollitia enim aspernatur et.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(114, 'magni', '(654) 303-6731 x28518', 'zdach@brakus.com', 'Quo aperiam odio a voluptate.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(115, 'itaque', '1-370-596-1627 x936', 'schiller.estevan@grimes.com', 'Nisi incidunt suscipit dolore vero sunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(116, 'necessitatibus', '1-468-488-4619 x7654', 'wjaskolski@heaney.com', 'Aliquid quia ut voluptatibus quae facere.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(117, 'voluptatibus', '+1-515-578-6961', 'zpagac@ebert.com', 'Officiis mollitia cumque est expedita harum ut sint.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(118, 'delectus', '242.649.3983 x5330', 'marvin.tania@schroeder.net', 'Delectus ut ut illo quam.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(119, 'voluptatem', '565-757-9981 x6995', 'geovanni24@jacobi.org', 'Fugit totam vitae molestiae quod magni.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(120, 'dolorum', '(418) 641-4849 x9811', 'america48@hayes.org', 'At et reiciendis quo aut deserunt velit.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(121, 'temporibus', '870-663-1984 x57617', 'bglover@romaguera.com', 'Molestiae accusamus ipsum qui ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(122, 'omnis', '(248) 964-6474 x84401', 'glover.tito@howe.org', 'Labore voluptatibus harum doloribus possimus distinctio fugiat.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(123, 'eum', '885-617-9143 x1525', 'leonie.leuschke@maggio.com', 'Accusantium reprehenderit eligendi animi minima molestiae tempora esse.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(124, 'error', '314-528-7517 x6677', 'dolores.cassin@baumbach.com', 'Et illum quae et natus.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(125, 'quo', '(917) 617-0010 x4523', 'zoconnell@runte.com', 'Ut omnis quibusdam et.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(126, 'enim', '725-930-1867 x29885', 'arlie04@stanton.org', 'Consequatur a ut quia similique.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(127, 'quibusdam', '924-919-0839 x2705', 'reichel.garret@frami.com', 'Aut voluptatem omnis et ducimus et quibusdam exercitationem numquam.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(128, 'velit', '(247) 316-1783 x9487', 'kirlin.leann@cremin.com', 'Sit nisi soluta magnam velit dolores sapiente.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(129, 'sunt', '712.307.5277 x507', 'norval.hessel@veum.info', 'Aut provident qui ullam vitae mollitia consequuntur.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(130, 'id', '+1.970.803.6952', 'roosevelt16@fay.info', 'Ut consequatur aut laborum eveniet et et.', NULL, '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(131, 'perspiciatis', '(306) 280-5673', 'tomasa.kunde@harris.com', 'Aut eligendi quas maxime autem sequi.', '2021-03-25 07:20:19', '2021-03-25 07:20:24', '2021-03-25 07:20:24'),
(132, 'harum', '406-214-8131 x949', 'sauer.armando@kunde.com', 'Voluptatem voluptatem iste nesciunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(133, 'deserunt', '+17249568285', 'emmanuel.torp@schmidt.com', 'Ab neque qui est omnis.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(134, 'dolores', '(823) 796-7525 x49088', 'heaney.clarabelle@mcclure.com', 'Consequuntur illum eius quae sit aliquid ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(135, 'consectetur', '1-625-338-0958 x83371', 'kohler.larue@jakubowski.net', 'Doloremque voluptatem dolor molestiae consequatur qui distinctio debitis.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(136, 'dolorem', '(613) 238-7961', 'tpfannerstill@grady.com', 'Et hic laboriosam veritatis et possimus occaecati aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(137, 'magni', '(498) 964-9668 x88438', 'macey78@rice.com', 'Officiis et omnis optio rerum officia.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(138, 'consequatur', '1-607-970-0169 x764', 'ythiel@donnelly.net', 'Accusamus illum blanditiis itaque mollitia non excepturi nam.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(139, 'necessitatibus', '+1-941-261-7934', 'monique.howell@ward.com', 'Iure voluptas ut error eveniet eaque nisi inventore quae.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(140, 'impedit', '+19409293319', 'brakus.korbin@runolfsson.biz', 'Magni vel id quis vel non aut ab ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(141, 'quasi', '569-721-0261', 'emard.zaria@mcglynn.com', 'Expedita deserunt iste aspernatur.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(142, 'labore', '(271) 773-4207', 'quigley.delta@schinner.info', 'Nemo voluptatem quia distinctio ducimus aut.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(143, 'error', '(509) 326-0659', 'trantow.ursula@welch.org', 'Dolorum quas autem ab.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(144, 'voluptatem', '(424) 203-2341', 'deckow.destany@aufderhar.com', 'Doloribus ut occaecati at est sed.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(145, 'qui', '503-394-6260 x18802', 'hazle12@runolfsson.net', 'Quos velit beatae pariatur nobis.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(146, 'vel', '1-982-478-3184 x31078', 'emard.nannie@huels.biz', 'Laudantium qui est sapiente consectetur et ut eos natus.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(147, 'quo', '+1-452-980-9510', 'bartell.sonya@morar.com', 'Amet veritatis qui ex cum vel quia.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(148, 'molestiae', '(758) 597-1098 x91085', 'mmurazik@pollich.info', 'Et cum eligendi quae laudantium est expedita.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(149, 'labore', '+1-235-627-3723', 'waylon.bashirian@schmeler.net', 'Et ad vero nostrum.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(150, 'ad', '+18929638684', 'vpouros@kub.com', 'Ipsam hic nisi tenetur sint.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(151, 'aliquid', '(658) 634-5069', 'gleichner.alivia@wilkinson.com', 'Est aliquid rerum consequatur earum sed.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(152, 'autem', '1-364-225-9475', 'torphy.angeline@windler.net', 'Sint non earum odio consequatur.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(153, 'eum', '1-940-999-8428 x890', 'adaline75@lesch.com', 'Est doloremque nisi qui fuga.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(154, 'nam', '(205) 759-9909 x886', 'zora.sawayn@west.com', 'Dolores autem aut facere qui ducimus.', '2021-03-25 07:20:19', '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(155, 'non', '(651) 587-2032 x5664', 'halvorson.wilford@koch.com', 'Aut a adipisci consectetur ad et repellat suscipit.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(156, 'consequatur', '(413) 401-2231', 'jordane16@nitzsche.net', 'Soluta sapiente sequi id iusto sint quia omnis et.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(157, 'repudiandae', '484-365-3170 x129', 'breitenberg.cathy@oconnell.com', 'Ea voluptate consequatur voluptatum praesentium voluptates quo nihil dicta.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(158, 'modi', '582.702.8038', 'garfield40@labadie.com', 'Fuga maxime rerum placeat.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(159, 'cumque', '918-288-5951 x414', 'mlesch@fadel.com', 'Consequatur esse officia expedita reprehenderit rerum.', NULL, '2021-03-25 07:20:25', '2021-03-25 07:20:25'),
(160, 'recusandae', '541.209.8844', 'elynch@hermiston.net', 'Quaerat dolores nesciunt vero libero.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(161, 'tempore', '(994) 385-1374 x815', 'nmetz@gislason.com', 'Omnis nemo distinctio omnis aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(162, 'aperiam', '387-864-9713', 'layla05@turner.com', 'Commodi vitae qui occaecati.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(163, 'dolore', '1-446-363-4246 x7918', 'zlebsack@paucek.info', 'Necessitatibus enim ex id consectetur sequi voluptate.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(164, 'est', '+1.973.723.4034', 'lue16@kohler.biz', 'Animi nobis iure sunt quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(165, 'ut', '359.562.3753 x545', 'santino84@yundt.com', 'Debitis necessitatibus totam ut reprehenderit quia.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(166, 'est', '1-419-784-8435 x40641', 'ohara.duane@klein.com', 'Quae et molestias porro aut velit voluptas pariatur.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(167, 'maiores', '890-421-3473', 'katharina00@bartoletti.com', 'Quae fugit sint vel.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(168, 'sit', '682-334-7698', 'brooke71@pacocha.net', 'Deserunt a non voluptatum maiores sit quo perferendis recusandae.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(169, 'perferendis', '1-240-883-5574 x264', 'friedrich37@roberts.com', 'Deleniti quo voluptas assumenda veritatis.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(170, 'tempore', '1-542-244-3270', 'flossie.bahringer@mohr.biz', 'Ut quidem placeat id.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(171, 'labore', '(992) 864-2585 x9928', 'zmoore@lang.com', 'Error incidunt nemo sequi et aut sequi.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(172, 'quas', '417.741.4349', 'pacocha.serena@walter.net', 'Rerum magni assumenda exercitationem aut nobis in reprehenderit.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(173, 'recusandae', '286-574-8099 x110', 'tommie26@hackett.com', 'Perspiciatis doloribus voluptatem ipsam numquam perferendis placeat soluta.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(174, 'accusamus', '478.595.4434 x2120', 'lehner.kelli@gottlieb.com', 'Illum voluptas rem veniam unde facilis dolorem.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(175, 'dignissimos', '+14937439438', 'bkiehn@powlowski.com', 'Et rerum aspernatur ut rem.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(176, 'officia', '565.783.2638', 'daugherty.jailyn@emmerich.net', 'Voluptate odio illum voluptatem amet commodi molestias.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(177, 'consequatur', '(610) 644-9571 x494', 'hyatt.liana@paucek.net', 'Non voluptas voluptatibus porro minima.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(178, 'quod', '+1.803.930.2354', 'otto10@lockman.com', 'Sit similique maxime reiciendis quia vero.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(179, 'corporis', '941-446-6392 x6068', 'edyth.lehner@hayes.org', 'Sit blanditiis itaque quia similique deserunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(180, 'omnis', '661.929.2848 x860', 'omoen@runolfsdottir.com', 'Temporibus tenetur omnis quibusdam natus maxime.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(181, 'esse', '437-667-0684', 'nicholas47@wolff.com', 'Architecto hic quam nihil perferendis ut autem rerum.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(182, 'in', '(285) 579-3960 x026', 'fredrick.bernier@dubuque.biz', 'In nulla voluptate et et.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(183, 'quam', '1-458-250-3181 x23672', 'zulauf.audra@gottlieb.net', 'Doloribus aut aut quae vel.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(184, 'sunt', '+1 (598) 767-8279', 'lessie.wolf@skiles.biz', 'Et eum esse ut ipsam ea tempore similique.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(185, 'omnis', '495-671-0594 x91307', 'vonrueden.zora@zieme.info', 'Rerum aut velit omnis aut sapiente sunt nisi delectus.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(186, 'cum', '739.325.5554 x27177', 'hilma31@stamm.biz', 'Quae fuga non minima nemo quod voluptas harum molestias.', '2021-03-25 07:20:19', '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(187, 'autem', '1-432-212-1799 x289', 'bahringer.elise@wuckert.com', 'Velit ducimus fugiat optio corporis.', NULL, '2021-03-25 07:20:26', '2021-03-25 07:20:26'),
(188, 'ut', '215-218-3671', 'franecki.sylvia@mertz.com', 'Fugiat voluptatum maiores architecto aperiam sed quis molestias.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(189, 'laboriosam', '786-783-3983 x8507', 'taylor68@schamberger.com', 'Et non voluptas quae iure.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(190, 'est', '+1 (463) 581-2304', 'crist.mozell@carroll.com', 'Aut velit laboriosam impedit cumque illum et et.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(191, 'veniam', '801.218.1250 x49671', 'erunte@graham.com', 'Quibusdam voluptatibus ut eaque quia adipisci aperiam illum sunt.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(192, 'suscipit', '1-743-422-1785 x1502', 'percy66@willms.com', 'Quam animi et cumque sit.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(193, 'fugit', '1-646-843-0854 x88140', 'dicki.ellis@fahey.com', 'Itaque ratione et omnis hic.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(194, 'sed', '1-240-221-3559', 'ljohnson@reinger.info', 'Velit esse placeat commodi.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(195, 'voluptas', '(342) 688-3091 x68931', 'feest.timothy@tromp.com', 'Eius molestiae vel sed omnis.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(196, 'consequuntur', '+1-247-308-9198', 'yost.marcelino@renner.info', 'Dolor magnam maxime consectetur et quam ut minus.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(197, 'dolorem', '350-612-1578 x088', 'arvel.rodriguez@rowe.com', 'Ut illo eligendi odit aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(198, 'atque', '(539) 694-2888 x783', 'conroy.mable@wilkinson.com', 'Perferendis modi dolore laborum.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(199, 'magnam', '243-754-8497', 'luis85@marquardt.biz', 'Id dolor sit sed consequatur debitis dolores voluptatibus nihil.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(200, 'et', '1-345-323-8553', 'daniel.justus@kunze.com', 'Voluptas non voluptate sapiente aut excepturi repudiandae.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(201, 'cumque', '+1-793-285-0963', 'dwolf@jones.org', 'Accusantium rem veniam voluptatem.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(202, 'quo', '1-701-524-6165 x73296', 'britney23@gottlieb.biz', 'Omnis laboriosam culpa quod praesentium.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(203, 'ab', '+1-570-251-0808', 'turcotte.alexander@toy.com', 'Omnis beatae quis sit voluptatem ut dolorem sed quis.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(204, 'sint', '+1 (791) 406-9512', 'millie.ohara@mayer.com', 'Impedit est omnis aperiam.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(205, 'omnis', '+1.327.835.3662', 'eve40@braun.org', 'Quisquam minus eum consequuntur numquam mollitia qui.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(206, 'quasi', '730.763.7361', 'vena.graham@pollich.net', 'Aut dolorum laudantium enim aut ipsum et et.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(207, 'error', '+1 (594) 622-0922', 'weldon17@bradtke.biz', 'Dicta ut voluptatem eveniet fuga.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(208, 'voluptates', '863-228-3935 x41111', 'hackett.willow@cassin.net', 'Nihil molestiae sit numquam numquam eligendi.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(209, 'praesentium', '1-405-600-2255 x24573', 'davis.mireya@lynch.com', 'Dolores est atque nobis asperiores et laudantium nesciunt ad.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(210, 'deserunt', '(473) 724-1699', 'hayes.marlene@crooks.org', 'Quod dolores et aut praesentium animi eius et.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(211, 'vel', '(446) 901-4492', 'austen.robel@dooley.com', 'Rerum rerum quo recusandae quae.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(212, 'rem', '863-482-5418 x652', 'abernathy.pearl@emard.com', 'Illo velit facilis voluptas vel temporibus aut laboriosam.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(213, 'aspernatur', '(410) 443-6561', 'ferry.sim@predovic.com', 'Autem minima labore est inventore libero et aliquam voluptatum.', NULL, '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(214, 'doloribus', '1-475-640-9929 x073', 'margarette.cremin@maggio.info', 'Neque saepe sit explicabo et ut vitae ipsam.', '2021-03-25 07:20:19', '2021-03-25 07:20:27', '2021-03-25 07:20:27'),
(215, 'delectus', '+1-517-407-0110', 'bkiehn@turcotte.com', 'Vero autem sed architecto.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(216, 'nisi', '353-399-1776 x585', 'jbode@krajcik.com', 'Blanditiis fugit quo adipisci.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(217, 'architecto', '+1-432-708-9280', 'turcotte.timmy@raynor.com', 'Esse dolorem repellendus totam doloremque explicabo quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(218, 'cumque', '770-216-0888 x5777', 'abailey@rohan.com', 'Similique magni ex voluptate harum.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(219, 'fuga', '+1-665-423-4792', 'xmarks@baumbach.com', 'Et magni alias sint eius.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(220, 'ut', '+1.484.244.1657', 'judd.bailey@kuhic.com', 'Fugiat deleniti beatae consequuntur quam.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(221, 'ea', '+16962730336', 'dax99@kiehn.com', 'Accusantium id perferendis voluptas.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(222, 'perspiciatis', '1-743-352-7383 x26696', 'hailee90@funk.org', 'Sit accusamus perspiciatis blanditiis nihil nesciunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(223, 'quae', '(309) 746-0204 x850', 'schamberger.emery@volkman.com', 'Veniam et nemo recusandae iure ipsum.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(224, 'temporibus', '779.246.0328 x34732', 'odessa.hickle@feest.biz', 'Atque vel modi doloribus et quos.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(225, 'est', '(680) 982-6724 x962', 'tillman.juvenal@schmeler.com', 'Neque dicta et sint.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(226, 'dolor', '623.398.7870 x942', 'rogers.corkery@treutel.net', 'Veniam odio ut enim aliquam quasi.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(227, 'quibusdam', '782-545-3376', 'katlyn.wolff@streich.com', 'Nostrum nostrum pariatur qui velit sit.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(228, 'quis', '(561) 237-9036', 'meta.howe@steuber.com', 'Dolores aut officiis optio nam minima perferendis est.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(229, 'quam', '795.232.1050 x835', 'akuhic@swift.biz', 'Explicabo ut deserunt tempore minima qui sed.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(230, 'delectus', '554-270-1976 x0946', 'jayda61@bogan.net', 'Natus quia dolor ea mollitia provident.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(231, 'voluptatem', '+18712504821', 'freddie.bosco@pfeffer.com', 'Aut ullam nihil totam impedit.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(232, 'saepe', '706.729.0651', 'adella34@gulgowski.biz', 'Hic error nesciunt impedit blanditiis quisquam consequatur officiis.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(233, 'pariatur', '742-357-1876 x9948', 'russel.marcelino@bode.org', 'Natus ducimus et voluptatem laboriosam omnis.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(234, 'quia', '221-595-8720 x618', 'lind.lindsay@shanahan.biz', 'Iusto hic qui deleniti cupiditate accusantium nihil suscipit.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(235, 'sit', '650.387.8266', 'gutmann.may@senger.biz', 'Velit ad ut cupiditate excepturi sit voluptatum deleniti optio.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(236, 'sit', '1-357-308-6975 x85096', 'waelchi.devyn@dach.com', 'Et delectus ab voluptatem fugit.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(237, 'consequatur', '(306) 326-7684 x039', 'luna.bauch@bailey.org', 'Aperiam blanditiis soluta quo ipsam provident expedita eaque repellat.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(238, 'ipsum', '1-495-488-0434 x554', 'turcotte.katarina@wolff.com', 'Aut omnis vel ea quis.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(239, 'aut', '+19855682339', 'ghegmann@pollich.info', 'Officiis deleniti dolorem similique veniam eos facilis velit est.', NULL, '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(240, 'nobis', '729.655.4266 x412', 'zgottlieb@bergstrom.com', 'Excepturi enim sit praesentium dolore.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(241, 'ut', '+1.493.769.5406', 'ullrich.art@ernser.org', 'Ullam omnis accusantium perspiciatis vero.', '2021-03-25 07:20:19', '2021-03-25 07:20:28', '2021-03-25 07:20:28'),
(242, 'vel', '323-902-6884', 'liliane.erdman@purdy.com', 'Voluptatem adipisci iure aut.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(243, 'ipsa', '+1-612-841-7440', 'maverick46@yundt.com', 'Et distinctio molestiae officia.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(244, 'incidunt', '347.223.5958 x6293', 'ledner.elmo@hoppe.com', 'Vel asperiores hic officia iusto quidem perferendis.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(245, 'consequatur', '741.842.8545', 'simone.durgan@gibson.info', 'Recusandae eos in culpa rem.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(246, 'iste', '423.675.9098', 'margie18@jenkins.net', 'Deserunt ratione aliquid mollitia vel molestiae ratione.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(247, 'rerum', '(930) 544-5263', 'frances.runolfsson@hammes.biz', 'Velit eos et nihil sunt exercitationem qui et.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(248, 'sed', '+1 (720) 908-6429', 'lleuschke@weissnat.org', 'Et eaque reiciendis enim officiis ab quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(249, 'aut', '(546) 240-4724 x830', 'fadel.dora@bradtke.com', 'Earum libero quidem sint amet voluptatem repellat.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(250, 'sapiente', '(292) 985-2583 x5864', 'jcormier@mitchell.net', 'Fugit nisi eum id praesentium.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(251, 'quos', '725-404-6441 x39372', 'rhahn@christiansen.info', 'Omnis nesciunt qui cum qui possimus similique in.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(252, 'ea', '898-675-1357 x042', 'forest.hill@champlin.com', 'Sequi nihil ut explicabo odit.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(253, 'itaque', '1-653-249-2791', 'gordon.stoltenberg@windler.net', 'Cum optio beatae libero quia laboriosam aperiam repellat ducimus.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(254, 'esse', '+1-573-542-9591', 'samantha93@hackett.com', 'Velit repellendus et non at excepturi.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(255, 'earum', '1-316-488-8088 x141', 'karolann.brakus@schneider.com', 'Necessitatibus ut laudantium velit aut error.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(256, 'iure', '346.508.4564 x124', 'dmurazik@kozey.com', 'Ratione qui cum sint necessitatibus libero porro culpa.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(257, 'sapiente', '(703) 396-2722 x54707', 'arvel59@barrows.net', 'Vero minus perferendis provident nihil eveniet in tenetur sint.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(258, 'consequatur', '1-847-491-4068 x70494', 'leffler.pink@breitenberg.com', 'Enim quisquam quis velit ut laborum voluptatibus.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(259, 'sunt', '529.492.8643 x473', 'mcdermott.matt@hartmann.com', 'Tempora ut quidem eveniet aut rem.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(260, 'qui', '1-212-917-0563 x797', 'iemard@price.com', 'Officiis vitae velit quo quia est voluptas eaque.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(261, 'consequatur', '565.818.7525', 'louisa.carroll@toy.com', 'Ut exercitationem ullam occaecati ut at.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(262, 'dolor', '+1.974.894.7946', 'nakia.crooks@hagenes.com', 'Minus pariatur rerum et quo ipsum dolorem cupiditate.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(263, 'voluptas', '384-312-3557', 'umarks@goyette.info', 'Aut qui esse tempore vero consectetur maxime.', NULL, '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(264, 'laboriosam', '(453) 763-7989', 'jettie.stark@hettinger.com', 'Rerum placeat doloremque alias unde.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(265, 'adipisci', '+1-665-742-5643', 'darlene.bernier@kunde.com', 'Id dolorem rerum minima dignissimos nihil.', '2021-03-25 07:20:19', '2021-03-25 07:20:29', '2021-03-25 07:20:29'),
(266, 'qui', '1-687-370-6420 x155', 'aglae.funk@sporer.net', 'Esse ut rerum aut consequatur ab.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(267, 'officia', '942.801.1170 x835', 'haleigh64@bailey.com', 'Deserunt eum blanditiis sit enim consequatur magni.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(268, 'et', '+1 (269) 907-2816', 'keeley.rice@ebert.com', 'Commodi placeat amet qui quos ut.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(269, 'enim', '239.309.4825', 'davonte42@weber.org', 'Porro eligendi qui iusto voluptatem sit cumque nihil natus.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(270, 'quia', '275.723.0688', 'everett86@stamm.biz', 'Asperiores nihil in ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(271, 'labore', '+1-238-777-0495', 'geovanny.bednar@friesen.info', 'Esse itaque ut soluta et laborum.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(272, 'harum', '+18028207312', 'johnnie.friesen@ziemann.com', 'Autem occaecati non cupiditate possimus animi.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(273, 'ea', '861-464-1567', 'einar.parisian@hackett.com', 'Rerum exercitationem est facilis ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(274, 'aliquid', '403.425.1031 x303', 'durgan.clement@corkery.net', 'Deleniti sunt itaque earum quas nesciunt assumenda non.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(275, 'totam', '+1-765-521-4843', 'lonny.jast@bartell.net', 'Natus necessitatibus non et repudiandae aut.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(276, 'sit', '968.324.5227', 'joel26@heidenreich.com', 'Nostrum laborum quis accusamus et tempore expedita.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(277, 'in', '(408) 692-5116 x7672', 'george.barton@hoppe.com', 'Quaerat dolor id nesciunt.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(278, 'et', '+1.595.915.7791', 'rtorp@nolan.com', 'Assumenda accusamus fugit cumque iusto.', '2021-03-25 07:20:19', '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(279, 'accusamus', '1-881-842-1196 x9513', 'nmills@cole.org', 'Libero beatae aspernatur ipsum qui voluptatem non quis.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(280, 'voluptas', '385.612.9163 x45570', 'odamore@tremblay.info', 'Quia hic ut delectus voluptate.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(281, 'dolore', '440.931.9058 x9900', 'ebalistreri@bosco.biz', 'Ullam incidunt sit tenetur dolor officia.', NULL, '2021-03-25 07:20:30', '2021-03-25 07:20:30'),
(282, 'cum', '260-813-6449 x8667', 'mitchell.hugh@ziemann.com', 'Corporis expedita sunt explicabo ut et in.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(283, 'libero', '382.999.4294 x60221', 'vwiegand@toy.com', 'Voluptas similique corporis qui tempore est odit.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(284, 'ipsum', '(606) 552-6640', 'qwilderman@hoppe.com', 'Velit harum dolor molestiae enim.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(285, 'excepturi', '(364) 748-3940 x7175', 'barton.monte@hermiston.com', 'Aut amet quam illo earum hic quae.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(286, 'voluptatem', '543.982.8725', 'estella90@stoltenberg.com', 'Velit a veniam est iste.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(287, 'quod', '858-898-5087 x28081', 'nicolas.lyric@bartoletti.com', 'Ut dolorum tenetur qui aliquam error molestias dolorem.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(288, 'suscipit', '(328) 870-8502 x2985', 'noelia.reynolds@jast.com', 'Natus assumenda vel quia doloribus aut velit perferendis.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(289, 'reprehenderit', '(867) 975-1752 x8254', 'oheathcote@grant.biz', 'Odit possimus autem placeat temporibus.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(290, 'quo', '+1 (836) 497-0445', 'carson.bauch@gusikowski.net', 'Et et eum nihil ex quam qui non.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(291, 'impedit', '642.246.4078', 'vella60@kling.com', 'Dolore rerum deleniti deserunt delectus accusamus necessitatibus.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(292, 'officiis', '(254) 413-4360 x2682', 'kcole@yost.com', 'Dolor ut quia itaque voluptas.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(293, 'error', '1-828-704-1427 x6604', 'dagmar.dach@lind.biz', 'Ratione totam at blanditiis ullam tempora aliquam.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(294, 'cumque', '(409) 900-0924 x625', 'klocko.betty@zboncak.org', 'Dicta laudantium nobis molestiae et voluptatem iure.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31');
INSERT INTO `feedback` (`id`, `name`, `phone`, `email`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(295, 'repudiandae', '1-726-956-0732 x1998', 'webster87@hilpert.net', 'Et voluptatem sit cumque.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(296, 'atque', '+1-409-312-6147', 'glennie12@schneider.biz', 'Libero et nam maxime cupiditate maiores rerum.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(297, 'eos', '+1-512-665-1993', 'brekke.marlee@schneider.info', 'Illum inventore et totam est animi impedit laudantium.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(298, 'velit', '963.293.1046 x5624', 'fwaters@kub.info', 'Aut atque deleniti et.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(299, 'dolore', '1-474-854-3451', 'parker.kamille@greenfelder.info', 'Saepe neque iusto vel laudantium placeat eos rerum.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(300, 'maxime', '974-479-7911 x3894', 'gerson.barrows@miller.net', 'Laborum aut id tenetur sit et minima at culpa.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(301, 'iusto', '(843) 853-2629 x6533', 'laila40@emmerich.net', 'Quia tempora harum mollitia consequatur quis sed quam.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(302, 'dolorem', '1-684-780-2444 x2972', 'alice.barton@cruickshank.com', 'Voluptates sint quas vel molestiae.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(303, 'sit', '382.885.5400 x997', 'white.leanne@kiehn.com', 'Tempore veniam consequatur provident.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(304, 'voluptate', '1-202-751-0093 x432', 'willis.ritchie@kiehn.biz', 'Labore assumenda non corrupti.', '2021-03-25 07:20:19', '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(305, 'et', '258-690-1285', 'flatley.jermain@fadel.com', 'Molestiae rem dolor harum nihil ut quasi.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(306, 'dolore', '(768) 767-2197 x12839', 'durward.johnson@nienow.com', 'Animi fuga porro quia nam similique minus.', NULL, '2021-03-25 07:20:31', '2021-03-25 07:20:31'),
(307, 'repellat', '590.558.2071', 'kreiger.florida@howe.com', 'Eveniet odit dolore pariatur.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(308, 'ad', '968.264.8453', 'spencer.hegmann@mraz.net', 'Numquam dolores iure architecto vel qui molestiae.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(309, 'quo', '321-467-1278', 'lwindler@boyer.com', 'Qui soluta nam nesciunt autem.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(310, 'libero', '(974) 663-7389 x2239', 'wdickens@friesen.net', 'Ad ut dicta est quia quos architecto.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(311, 'dignissimos', '+18596989247', 'bradford.graham@donnelly.com', 'Qui repudiandae at cupiditate dolor porro asperiores quo ut.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(312, 'architecto', '+1.981.268.3400', 'christop58@nicolas.com', 'Doloremque nam enim quos esse magnam.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(313, 'ex', '348.587.3595 x999', 'caterina.botsford@lowe.com', 'Eius iste nam porro in.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(314, 'vitae', '+1-904-523-8153', 'phoebe89@bayer.com', 'Libero ad consequatur et accusantium ut omnis tempora.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(315, 'porro', '(292) 279-7279 x490', 'alan92@oberbrunner.com', 'Tempore dolor officia excepturi inventore consequatur aut.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(316, 'et', '+1-724-534-6975', 'asia34@leffler.net', 'Excepturi aut sequi dolore quam fugit reiciendis minus.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(317, 'illum', '(960) 336-6890 x7422', 'evonrueden@maggio.com', 'Ut maiores quia aut dolores.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(318, 'cum', '(319) 247-0687 x9491', 'maxwell37@hane.org', 'Ex ea veritatis quia aspernatur corporis.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(319, 'quisquam', '+1-283-352-6395', 'kling.lenore@kovacek.com', 'Et iste aut exercitationem unde veritatis.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(320, 'facilis', '+1-234-321-4405', 'johnathan90@vandervort.info', 'Rem velit velit laudantium nesciunt iste soluta amet omnis.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(321, 'vel', '246-242-0503', 'isaias.heidenreich@medhurst.com', 'Explicabo error enim dolor placeat molestiae libero iusto quia.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(322, 'numquam', '363.320.7079', 'fausto10@rodriguez.net', 'Provident vero autem perspiciatis recusandae velit et aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(323, 'sed', '1-440-991-3706 x83064', 'grimes.eugenia@hodkiewicz.com', 'Ipsum autem consequuntur porro.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(324, 'dolor', '436.248.9503', 'clementine02@waelchi.org', 'Rerum omnis error consequatur vel porro.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(325, 'dolor', '904.651.4922', 'hessel.nina@lockman.com', 'Consequatur sapiente consequatur molestias aliquam.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(326, 'voluptatum', '641.549.0873', 'candace.leuschke@keebler.com', 'Ut nostrum vel dolorem ut corporis et.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(327, 'repudiandae', '814.642.1554 x788', 'emanuel.goyette@kreiger.com', 'Quos et iure odio rerum perspiciatis non.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(328, 'vitae', '269.461.2306', 'renner.xavier@lueilwitz.com', 'Dolorum ratione consequatur et voluptatem.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(329, 'atque', '+1.682.891.2755', 'schowalter.kiana@ankunding.com', 'Aliquid ratione dolores occaecati molestiae et.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(330, 'quisquam', '1-985-997-2823', 'legros.carlos@schuster.org', 'Beatae quaerat libero at qui modi nihil iste.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(331, 'adipisci', '856-772-3597 x542', 'lupe64@harris.com', 'Ea dolorum voluptatem voluptatem sunt deserunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(332, 'suscipit', '+17914360557', 'luther70@wisozk.biz', 'Cumque necessitatibus voluptatum nemo quia aut facere.', NULL, '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(333, 'id', '231.713.6840 x073', 'mann.jocelyn@bins.com', 'Ut quam a consequuntur debitis.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(334, 'ipsam', '(612) 597-7849 x12792', 'tremayne14@jacobson.biz', 'Et magni quo omnis.', '2021-03-25 07:20:19', '2021-03-25 07:20:32', '2021-03-25 07:20:32'),
(335, 'qui', '831-380-6178 x91583', 'shanahan.norene@kuvalis.com', 'Odit nemo totam qui dolor non laborum.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(336, 'explicabo', '473.394.0406', 'greta.nienow@spencer.com', 'Blanditiis voluptas ut suscipit sequi.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(337, 'autem', '791-280-4631', 'beier.frances@lubowitz.net', 'Asperiores mollitia corrupti qui velit.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(338, 'in', '(859) 517-0576 x69373', 'lisette.white@breitenberg.com', 'Rerum sit et non voluptatem.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(339, 'cupiditate', '(487) 485-1606 x7466', 'aurelie.runolfsdottir@ernser.net', 'Perspiciatis culpa sunt molestiae amet minus ut.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(340, 'doloremque', '502.335.5261', 'gerson.bruen@welch.biz', 'Quia minima quisquam tempore non amet.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(341, 'neque', '683.838.9444 x961', 'ross.walter@emard.com', 'Ut delectus qui laboriosam tempora tempore.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(342, 'et', '1-749-889-9299 x982', 'cschaefer@marquardt.biz', 'Dolorem aliquam repellat enim illo quasi hic.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(343, 'aliquid', '+1-816-723-7233', 'bartoletti.earnestine@dietrich.com', 'Deleniti illum voluptates nisi aliquam architecto libero non qui.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(344, 'voluptatem', '320.226.8234', 'nader.christina@yost.com', 'Placeat qui quas sed consectetur sint consequatur iste cumque.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(345, 'quos', '584.381.6725 x9575', 'elta.crona@skiles.com', 'Natus ipsum voluptatem quam et adipisci.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(346, 'aperiam', '1-456-903-6001', 'clare.klein@ortiz.com', 'Totam distinctio blanditiis illum ad cupiditate.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(347, 'ex', '854.889.8632 x391', 'eschiller@gibson.biz', 'Temporibus quis laborum ducimus magni laudantium hic omnis.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(348, 'sed', '379-324-5699 x13299', 'cflatley@greenholt.com', 'Voluptatum repellendus qui voluptas quo nesciunt ex in sed.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(349, 'quis', '+1-851-739-0051', 'larson.orville@conroy.com', 'Aut cumque rerum molestiae eveniet consequatur consequatur iusto.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(350, 'sit', '+17613089757', 'lmedhurst@hermann.com', 'Repellendus enim natus at dolor aut et.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(351, 'dolor', '1-537-305-6104 x71261', 'garth58@mcdermott.info', 'Ducimus qui earum at aut architecto autem unde.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(352, 'culpa', '(737) 709-2683 x535', 'alysson43@spencer.info', 'Laborum enim reprehenderit in dolorem nulla veniam in voluptatum.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(353, 'fuga', '(778) 947-0396', 'crooks.mark@bailey.com', 'Eveniet similique dolorem quisquam et mollitia sit.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(354, 'commodi', '825.609.9331 x076', 'jprosacco@kirlin.com', 'Debitis voluptas quis iure qui ut fugiat.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(355, 'doloribus', '(843) 988-4312', 'eliane15@hickle.com', 'Repudiandae veniam excepturi assumenda magni.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(356, 'asperiores', '778-835-8651', 'morgan.strosin@runolfsson.com', 'Commodi consequatur natus sit quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(357, 'nobis', '(916) 215-4552', 'kenneth.smitham@collins.com', 'Provident quaerat et est eum delectus repudiandae quia ipsa.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(358, 'vel', '+1-219-493-8434', 'brisa.klocko@welch.com', 'Quod nihil tempore libero quidem cupiditate blanditiis.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(359, 'magnam', '1-349-873-1654 x499', 'shana.emard@klein.net', 'Ullam aperiam est corrupti nam libero dolore voluptas esse.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(360, 'a', '(889) 461-8827 x240', 'jlangworth@schuppe.biz', 'Aut pariatur iure saepe aperiam sapiente est.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(361, 'odio', '(687) 441-4482', 'lwehner@nolan.com', 'Non quo voluptates sit quis ea sit inventore aut.', NULL, '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(362, 'voluptas', '587-966-2451', 'verdie.abbott@lemke.org', 'Qui nisi eos voluptatem similique dicta.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(363, 'fugit', '+12105939454', 'reilly.antoinette@prosacco.info', 'Similique tempora hic quasi nulla qui nostrum.', '2021-03-25 07:20:19', '2021-03-25 07:20:33', '2021-03-25 07:20:33'),
(364, 'sequi', '1-224-681-4526 x11626', 'gusikowski.marlon@huel.net', 'Voluptates nisi libero impedit reprehenderit voluptas qui consectetur.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(365, 'est', '+1-493-820-0053', 'wiza.chelsea@tremblay.com', 'Qui ab eius aliquid perspiciatis autem.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(366, 'ducimus', '(546) 907-4113 x77002', 'dfay@okuneva.net', 'Et qui sequi eum similique tempore ad.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(367, 'quis', '+17516181915', 'fhirthe@hagenes.com', 'Qui eveniet esse quidem eligendi cupiditate ea.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(368, 'officiis', '343-259-2638', 'zschaefer@veum.net', 'Velit molestiae neque mollitia hic adipisci.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(369, 'ducimus', '(716) 332-9866 x17350', 'orlo.heathcote@schinner.net', 'Reprehenderit consectetur ad quam est veritatis nostrum.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(370, 'harum', '(882) 952-3251 x369', 'lwintheiser@bahringer.com', 'Et quia incidunt nam fuga.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(371, 'similique', '1-935-259-0739 x0215', 'weissnat.lonny@cummerata.com', 'Amet et ut qui qui commodi voluptas aspernatur.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(372, 'amet', '1-525-584-9625', 'verda78@turcotte.net', 'Recusandae sint nihil nisi non inventore.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(373, 'ut', '+1-854-605-5529', 'zetta.cassin@schumm.com', 'Voluptatum ea natus voluptatem quia et.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(374, 'in', '(953) 466-0124', 'federico45@lockman.com', 'Qui qui aliquam ea voluptas aliquid eum.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(375, 'nihil', '218.342.9134', 'alfonso.runolfsson@runolfsson.com', 'Dolores fugit animi voluptate numquam autem ut nihil delectus.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(376, 'itaque', '+1-976-797-6848', 'feeney.seth@emard.com', 'Iure eveniet dolorum qui et ex dolor delectus.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(377, 'quos', '442.575.2945', 'rowan19@gaylord.com', 'Alias vero illum mollitia magni.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(378, 'unde', '203-808-0849 x0327', 'ledner.reva@rodriguez.net', 'Cupiditate impedit nihil corporis quae dolor magni animi.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(379, 'voluptatem', '+1-956-997-1869', 'kenyon86@wunsch.com', 'Corporis et pariatur sunt qui non.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(380, 'tempora', '+1-267-362-6223', 'rath.hank@hoeger.com', 'Sequi labore iure molestias labore eligendi est.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(381, 'harum', '(487) 967-1266 x91791', 'claire41@mueller.com', 'Pariatur et ut ut suscipit.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(382, 'doloremque', '1-350-947-5012 x135', 'iprohaska@strosin.com', 'Accusantium qui sit distinctio voluptatibus fugit quia.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(383, 'reprehenderit', '863.559.1487 x2522', 'dayna.doyle@hills.biz', 'Harum minus ut ducimus explicabo sint.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(384, 'illo', '+1.397.910.8089', 'francesco73@nader.com', 'Sunt temporibus architecto architecto architecto.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(385, 'unde', '330-988-3133', 'pschmidt@konopelski.com', 'Ducimus in ex deleniti tenetur voluptatem sit omnis temporibus.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(386, 'pariatur', '(667) 910-4082 x855', 'oswaldo.graham@bode.com', 'Id nostrum non consequatur sit.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(387, 'quo', '(398) 464-0950', 'kreiger.mohamed@kozey.biz', 'Corporis voluptatem recusandae praesentium aut aut.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(388, 'quis', '1-669-631-2695', 'zheller@bayer.com', 'Enim voluptas laboriosam blanditiis repellat eum rem qui.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(389, 'nulla', '+1.779.617.1205', 'orippin@wiegand.com', 'Deserunt nesciunt et sit necessitatibus consequatur odit inventore.', NULL, '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(390, 'ab', '1-297-859-9629 x7207', 'connelly.robbie@goodwin.biz', 'Mollitia consequuntur consequatur fugiat beatae saepe fugit explicabo quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(391, 'non', '825-241-3443 x41403', 'adolfo30@dietrich.com', 'Vel natus dolores impedit soluta.', '2021-03-25 07:20:19', '2021-03-25 07:20:34', '2021-03-25 07:20:34'),
(392, 'ea', '490-661-7824', 'kub.brett@lindgren.com', 'Soluta rerum nihil qui dolores ipsum eum adipisci.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(393, 'nam', '873-327-3210 x943', 'eweissnat@stokes.com', 'Modi possimus rerum dolor quae.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(394, 'rerum', '+1.618.996.1035', 'jschaefer@king.net', 'Molestiae dignissimos et optio quia.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(395, 'quod', '472.641.2212 x745', 'magdalen36@donnelly.net', 'Sint aperiam iste qui facere veritatis doloribus debitis.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(396, 'pariatur', '776.541.3806 x0873', 'gdach@wehner.org', 'Eum repellat eligendi laudantium facilis fugit deserunt voluptatem.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(397, 'aut', '945-980-8993 x908', 'rosanna.mertz@lueilwitz.com', 'Eum nam voluptas qui tempora vel.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(398, 'inventore', '984-959-1666', 'antonetta55@nienow.com', 'Soluta et est repudiandae et est.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(399, 'voluptatum', '1-419-389-6776 x9485', 'hahn.noel@okuneva.com', 'Corporis repudiandae repudiandae delectus quod ea facere.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(400, 'necessitatibus', '340-580-5959', 'zaria79@osinski.com', 'Eos eveniet dolorem aliquam doloremque repellendus dolores impedit.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(401, 'impedit', '1-681-390-6503 x33190', 'cboehm@altenwerth.com', 'Quis dolorum sequi facilis id voluptatem doloribus fugit.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(402, 'vel', '231-204-6144 x245', 'mhessel@gleason.net', 'Ad dolores harum vel ut ut tempora ratione ipsa.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(403, 'consequuntur', '+15658041365', 'glover.dalton@franecki.biz', 'Quia ea mollitia temporibus esse ex.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(404, 'corporis', '568-337-3947', 'shields.lottie@kihn.com', 'Quis tenetur voluptatem dolorem distinctio animi.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(405, 'similique', '1-369-957-8812', 'green.ondricka@hodkiewicz.net', 'Modi tenetur quia architecto quia.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(406, 'et', '+18516492614', 'yasmeen03@hills.com', 'Harum dolorem similique a occaecati.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(407, 'quo', '631.755.2414 x144', 'toy.sandy@gerhold.com', 'Molestiae nisi provident aut illo alias fugiat debitis laudantium.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(408, 'assumenda', '(943) 697-3113', 'avery.stiedemann@emard.com', 'Sunt corrupti qui enim eveniet qui voluptatem.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(409, 'quisquam', '(767) 313-9953', 'conroy.clemmie@fadel.com', 'Exercitationem debitis quis occaecati.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(410, 'nihil', '1-384-589-0690 x521', 'nchristiansen@williamson.com', 'Aliquid nesciunt quos omnis temporibus.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(411, 'odit', '1-917-249-4183 x654', 'levi64@harvey.com', 'Eum ducimus aspernatur reprehenderit animi beatae accusantium.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(412, 'ipsa', '+1-419-684-8913', 'michel39@tremblay.com', 'Nam magni est sit quia incidunt.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(413, 'molestias', '1-763-933-6502', 'ward.zander@koelpin.net', 'Sed a eaque numquam quis sapiente reprehenderit.', '2021-03-25 07:20:19', '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(414, 'vero', '245.636.4979', 'flavie73@trantow.net', 'Omnis omnis officia est a laboriosam illo velit.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(415, 'doloremque', '+18138129463', 'beier.kristian@huels.net', 'Sed ea est rerum minus assumenda dolor quia.', NULL, '2021-03-25 07:20:35', '2021-03-25 07:20:35'),
(416, 'vel', '+19695372622', 'okeebler@larkin.com', 'Voluptatibus aliquam quisquam recusandae qui.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(417, 'ut', '1-858-448-9370', 'leola95@emard.biz', 'Et qui dolor ipsa amet.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(418, 'vero', '(610) 485-4672 x281', 'andy.aufderhar@paucek.com', 'Asperiores impedit aut facilis placeat autem rerum.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(419, 'id', '257.831.2834 x164', 'crist.vernie@weber.biz', 'Nihil eos iure quidem eum enim.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(420, 'ducimus', '(898) 408-9669 x31122', 'krystal68@effertz.info', 'Recusandae molestias rerum ea qui aut.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(421, 'vitae', '224.864.4138', 'elissa.jaskolski@braun.com', 'Dicta aut quam earum nihil hic corporis.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(422, 'dolores', '+13638448114', 'alanna63@mann.org', 'Facere qui veniam animi eum.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(423, 'totam', '+12413509425', 'bennett60@kuvalis.info', 'Eum ad omnis pariatur cum corrupti consequuntur vero.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(424, 'dolorem', '505.832.7456 x0512', 'giovanni.langosh@haley.com', 'Voluptatum molestiae itaque provident placeat dolorem.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(425, 'doloribus', '652.390.9388', 'nicholas.hodkiewicz@reynolds.com', 'Quae ex veniam ut in sint dicta.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(426, 'voluptatum', '+1 (570) 978-3982', 'kbotsford@reichert.com', 'Similique accusamus est deserunt.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(427, 'exercitationem', '341.962.0679', 'ldonnelly@gerlach.com', 'Ab modi inventore similique aut soluta aut enim.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(428, 'alias', '(737) 737-1607 x1976', 'chet.satterfield@metz.biz', 'Et aliquam autem quas est explicabo quia.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(429, 'necessitatibus', '921-410-9597', 'schmitt.margie@kozey.com', 'Sit amet tenetur et et ut sed voluptas.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(430, 'molestiae', '614.955.7191 x36148', 'wilfrid31@crist.com', 'Doloribus sit omnis iusto doloribus quis.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(431, 'recusandae', '+1-953-545-9336', 'dietrich.jackie@streich.com', 'Distinctio quam nihil dicta veritatis voluptas ex beatae.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(432, 'nulla', '1-260-284-1091 x78336', 'jammie85@torphy.info', 'Sunt possimus eos harum debitis unde architecto.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(433, 'nam', '1-459-796-9253', 'nathan34@orn.com', 'Quaerat qui accusantium vel eaque quia qui mollitia quidem.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(434, 'accusamus', '(328) 377-9545 x2228', 'reilly.royal@hodkiewicz.com', 'Nihil at odit consectetur iste.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(435, 'est', '1-534-441-5328', 'hamill.andy@anderson.com', 'Et porro ut deserunt dolores.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(436, 'impedit', '(246) 418-9636 x354', 'maritza.terry@homenick.com', 'Quod corrupti quia unde est aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(437, 'sed', '+19495650011', 'pbreitenberg@sawayn.biz', 'Rerum assumenda tenetur hic sapiente ut.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(438, 'debitis', '439.985.0500', 'genesis80@stamm.info', 'Quia magnam ipsa blanditiis rerum.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(439, 'vel', '+1.770.678.7894', 'kutch.jenifer@breitenberg.info', 'Assumenda illo earum ut sint pariatur omnis quaerat et.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(440, 'voluptatem', '361.835.2364 x6581', 'enrique56@sawayn.com', 'Quisquam eos totam molestias natus enim cum quaerat et.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(441, 'nemo', '904.879.8518 x9490', 'lauriane.nicolas@dickinson.com', 'Ut dolor non sit nihil et dolores.', '2021-03-25 07:20:19', '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(442, 'voluptatibus', '1-591-432-3134 x972', 'kunze.cody@eichmann.com', 'Quisquam nobis consequuntur quae est assumenda veniam.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(443, 'sed', '1-451-752-5559 x715', 'naomie42@stokes.com', 'Iusto distinctio voluptas non quia adipisci velit.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(444, 'eius', '601-658-5649', 'sdurgan@feest.org', 'Repudiandae dolorem saepe et doloribus perspiciatis aut sit alias.', NULL, '2021-03-25 07:20:36', '2021-03-25 07:20:36'),
(445, 'voluptas', '1-431-551-2373', 'nicolas43@bernier.com', 'Iste voluptas est dolores est et qui.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(446, 'inventore', '1-426-499-6620', 'jaiden.reynolds@rippin.com', 'Mollitia voluptatem impedit non ea iure.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(447, 'nam', '441-589-5819 x372', 'burdette.balistreri@will.com', 'Quam velit quia amet ratione ut impedit quas similique.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(448, 'temporibus', '(993) 777-1641 x43036', 'telly.rolfson@pollich.com', 'Beatae blanditiis ab mollitia hic occaecati ab.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(449, 'blanditiis', '(520) 887-6997 x9153', 'paige88@schumm.net', 'Aut fuga repudiandae dignissimos doloremque.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(450, 'aliquid', '+1 (696) 688-9035', 'schulist.mariano@sporer.com', 'Dolorum officia culpa eligendi at odit.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(451, 'quaerat', '1-728-857-2112', 'reichert.harold@rempel.com', 'Perspiciatis odit quas atque quo quaerat officia aliquam.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(452, 'sequi', '816.434.2722 x301', 'fae20@mosciski.com', 'Quae modi dolorum quos tempore a aut nemo aut.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(453, 'qui', '461.930.7408 x3444', 'armstrong.cornelius@kshlerin.com', 'Laudantium vel saepe nihil enim quibusdam dignissimos at.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(454, 'consequatur', '791.493.0044 x66506', 'torphy.freda@damore.com', 'Impedit eos nulla ut iste consequatur itaque aut.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(455, 'nihil', '+1-657-952-9180', 'denesik.gabe@marquardt.com', 'Distinctio adipisci labore consequatur similique aliquid odio ad voluptatem.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(456, 'iste', '257-458-2853', 'hammes.eli@corwin.biz', 'Deserunt et aut beatae architecto odit.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(457, 'est', '524.631.8755 x532', 'kledner@cartwright.com', 'In pariatur ex doloremque voluptatem.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(458, 'minus', '484.294.1004 x0941', 'estrella46@spinka.com', 'Ut eveniet quo quod architecto.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(459, 'exercitationem', '1-756-370-4325 x51991', 'gibson.shakira@ankunding.com', 'Odio aut et est vero iure vel.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(460, 'voluptatem', '1-335-966-6577 x214', 'jaycee.gerlach@dickinson.com', 'Eaque voluptates sequi iusto sequi enim.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(461, 'eum', '1-417-307-7448', 'brayan34@jenkins.info', 'Voluptas corrupti aspernatur rerum dignissimos labore.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(462, 'nemo', '850.893.9477 x442', 'quitzon.jessika@wiegand.com', 'Sapiente beatae alias optio dolores.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(463, 'aut', '+1.917.698.4888', 'steuber.lauren@boyer.com', 'Corporis odit velit aliquid veniam expedita quod ea quam.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(464, 'at', '490-800-2698 x338', 'madyson51@gerhold.org', 'Et repudiandae doloribus qui.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(465, 'voluptas', '554.922.3769 x268', 'robel.shane@cruickshank.com', 'Aperiam quisquam qui consequatur sunt explicabo quo.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(466, 'neque', '+1.509.240.0505', 'sadye.deckow@sporer.net', 'Reprehenderit tenetur sed sed ratione delectus.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(467, 'vel', '245-255-7967 x6387', 'lourdes61@bailey.info', 'Blanditiis pariatur neque praesentium omnis.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(468, 'eveniet', '792.967.2975 x93198', 'hermann.sim@nader.com', 'Excepturi doloremque magnam error placeat excepturi.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(469, 'doloremque', '368.259.8384', 'wanderson@nienow.com', 'Quae fuga magnam rerum et quia.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(470, 'est', '407-762-9940 x705', 'letha00@hahn.com', 'Nobis quibusdam numquam qui laudantium at amet impedit.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(471, 'numquam', '435.307.2403', 'rosanna.hagenes@adams.net', 'Rerum autem eos qui placeat dolore.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(472, 'nesciunt', '+1 (279) 785-3755', 'cshanahan@hudson.com', 'Officia dolore asperiores sunt enim natus eligendi voluptatem.', '2021-03-25 07:20:19', '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(473, 'fugit', '(526) 634-3383', 'rzieme@swaniawski.com', 'Asperiores accusamus earum possimus quia debitis enim.', NULL, '2021-03-25 07:20:37', '2021-03-25 07:20:37'),
(474, 'ut', '1-608-400-7812 x32669', 'gregorio77@leffler.com', 'Sed eaque ipsa nihil iusto labore.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(475, 'itaque', '(935) 647-3501 x34912', 'alexandra.price@smitham.com', 'Velit iste magni nulla ipsum quisquam.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(476, 'debitis', '728.287.5779 x602', 'will.meda@marquardt.com', 'Facilis molestiae asperiores non aut suscipit pariatur nam dolor.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(477, 'voluptate', '756.625.7600', 'mkozey@hoppe.org', 'Quia in accusantium autem quis tempora.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(478, 'explicabo', '473.844.3937 x76549', 'breanna.feil@cartwright.com', 'Quidem nobis commodi natus sint.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(479, 'minus', '(339) 797-8875', 'brady22@mcclure.com', 'Vel saepe id nulla et quos et id.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(480, 'eum', '1-891-460-7155', 'flatley.karianne@denesik.biz', 'Est eum dolorum fugiat.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(481, 'qui', '(379) 493-2253 x06020', 'noemi.jast@brakus.net', 'Quas omnis veritatis eum fugit.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(482, 'in', '512-573-1565', 'bernice06@davis.biz', 'Aut saepe sapiente eum sed quia suscipit.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(483, 'quasi', '+15498703705', 'ygoodwin@hayes.info', 'Aspernatur nesciunt ad velit ut iusto autem est.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(484, 'natus', '(487) 994-1622 x899', 'larry05@schuster.com', 'Ut quo neque et officiis.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(485, 'a', '550.465.6130', 'ucremin@wehner.com', 'Harum rerum vitae ipsum sed.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(486, 'eaque', '235-793-9662 x194', 'greenholt.astrid@nitzsche.com', 'Repellendus quos enim eum et quasi eveniet eum.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(487, 'omnis', '(291) 715-0039', 'fvon@hartmann.info', 'Sed ut modi totam veniam culpa.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(488, 'vel', '(545) 707-5657', 'molly06@johns.info', 'Corporis optio quidem ducimus.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(489, 'deleniti', '1-864-902-0924 x14922', 'kari05@haag.com', 'Atque dolorum officiis nobis enim exercitationem.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(490, 'dolorum', '346.413.3790 x451', 'gleichner.rosalinda@pollich.org', 'Rerum quis numquam delectus distinctio non nesciunt.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(491, 'est', '524.766.3530', 'jasen31@schulist.info', 'Odit ut facere dicta.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(492, 'sed', '+1-574-296-9735', 'lind.dameon@lockman.biz', 'Corporis quaerat hic aut similique harum est laboriosam incidunt.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(493, 'molestiae', '1-984-489-2839 x4039', 'collins.leanna@goodwin.com', 'Maxime aut voluptatum tempora incidunt qui id est.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(494, 'reiciendis', '1-467-352-3108 x81820', 'wbergstrom@keeling.info', 'Ut vel quisquam molestiae magnam quam.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(495, 'numquam', '(358) 809-2038', 'eleonore53@zboncak.com', 'Ut praesentium saepe modi numquam quam ea numquam.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(496, 'pariatur', '+1-915-752-4069', 'isai00@heaney.com', 'Velit odit placeat dolorum.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(497, 'et', '(514) 229-7624 x11953', 'medhurst.chad@borer.com', 'Molestias quas sed voluptatem eum officia dolor.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(498, 'aliquid', '602-714-1542 x1727', 'waelchi.rosina@tillman.net', 'Cumque neque tempore sit quis et ea quibusdam.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(499, 'modi', '1-820-634-9688 x05420', 'tward@runte.com', 'Porro quibusdam quos eaque quidem ea corrupti et.', NULL, '2021-03-25 07:20:38', '2021-03-25 07:20:38'),
(500, 'ullam', '1-315-803-2005 x95646', 'oheller@ziemann.org', 'Blanditiis debitis dolore repudiandae voluptatem voluptatem doloremque ducimus.', '2021-03-25 07:20:19', '2021-03-25 07:20:38', '2021-03-25 07:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"b85cec72-8878-4956-af45-85cf5575eb23\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616664113, 1616664113),
(2, 'default', '{\"uuid\":\"282a7f5d-ad0e-48a4-bc86-a6bea2388108\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616664113, 1616664113),
(3, 'default', '{\"uuid\":\"1d017503-c73d-469a-aefb-4bb0058762be\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616666713, 1616666713),
(4, 'default', '{\"uuid\":\"7d8dc9ac-14f0-4d31-8eb0-8a14c16200eb\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616666713, 1616666713),
(5, 'default', '{\"uuid\":\"851d246b-290f-401d-86bd-abe100e195d3\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616678667, 1616678667),
(6, 'default', '{\"uuid\":\"a015cb1a-ba29-4d0c-b296-7bf6d84f61df\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616678667, 1616678667),
(7, 'default', '{\"uuid\":\"1e2726cb-9712-4f7f-a365-6832353f41a3\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616831945, 1616831945),
(8, 'default', '{\"uuid\":\"49d1df8c-f0da-4a61-ac52-d3fa3b4ee463\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616831945, 1616831945),
(9, 'default', '{\"uuid\":\"bf5be70b-d8f8-4e14-8637-35550d2e0a7d\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:5;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616831968, 1616831968),
(10, 'default', '{\"uuid\":\"0dbd48fe-a89b-4bd9-828a-664e836e155c\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:5;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616831968, 1616831968),
(11, 'default', '{\"uuid\":\"48b0cd96-8c33-40ea-8d5f-bb96c707632d\",\"displayName\":\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":18:{s:5:\\\"class\\\";s:64:\\\"AhmedAliraqi\\\\LaravelMediaUploader\\\\Listeners\\\\ProcessUploadedMedia\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:61:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Events\\\\MediaHasBeenAdded\\\":1:{s:5:\\\"media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:6;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}}}s:5:\\\"tries\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616832026, 1616832026);
INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(12, 'default', '{\"uuid\":\"c0d62d88-ed99-4fc7-b743-4032687f0555\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\",\"command\":\"O:58:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Jobs\\\\PerformConversionsJob\\\":14:{s:23:\\\"deleteWhenMissingModels\\\";b:1;s:14:\\\"\\u0000*\\u0000conversions\\\";O:52:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\ConversionCollection\\\":1:{s:8:\\\"\\u0000*\\u0000items\\\";a:4:{i:0;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"thumb\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:2:\\\"70\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:1;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"small\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"120\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:2;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:6:\\\"medium\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"160\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}i:3;O:42:\\\"Spatie\\\\MediaLibrary\\\\Conversions\\\\Conversion\\\":10:{s:7:\\\"\\u0000*\\u0000name\\\";s:5:\\\"large\\\";s:12:\\\"\\u0000*\\u0000fileNamer\\\";O:54:\\\"Spatie\\\\MediaLibrary\\\\Support\\\\FileNamer\\\\DefaultFileNamer\\\":0:{}s:28:\\\"\\u0000*\\u0000extractVideoFrameAtSecond\\\";d:0;s:16:\\\"\\u0000*\\u0000manipulations\\\";O:26:\\\"Spatie\\\\Image\\\\Manipulations\\\":1:{s:23:\\\"\\u0000*\\u0000manipulationSequence\\\";O:33:\\\"Spatie\\\\Image\\\\ManipulationSequence\\\":1:{s:9:\\\"\\u0000*\\u0000groups\\\";a:1:{i:0;a:3:{s:8:\\\"optimize\\\";s:426:\\\"{\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Jpegoptim\\\":[\\\"-m85\\\",\\\"--strip-all\\\",\\\"--all-progressive\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Pngquant\\\":[\\\"--force\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Optipng\\\":[\\\"-i0\\\",\\\"-o2\\\",\\\"-quiet\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Svgo\\\":[\\\"--disable=cleanupIDs\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Gifsicle\\\":[\\\"-b\\\",\\\"-O3\\\"],\\\"Spatie\\\\\\\\ImageOptimizer\\\\\\\\Optimizers\\\\\\\\Cwebp\\\":[\\\"-m 6\\\",\\\"-pass 10\\\",\\\"-mt\\\",\\\"-q 90\\\"]}\\\";s:6:\\\"format\\\";s:3:\\\"png\\\";s:5:\\\"width\\\";s:3:\\\"320\\\";}}}}s:23:\\\"\\u0000*\\u0000performOnCollections\\\";a:0:{}s:17:\\\"\\u0000*\\u0000performOnQueue\\\";b:1;s:26:\\\"\\u0000*\\u0000keepOriginalImageFormat\\\";b:0;s:27:\\\"\\u0000*\\u0000generateResponsiveImages\\\";b:0;s:24:\\\"\\u0000*\\u0000loadingAttributeValue\\\";N;s:16:\\\"\\u0000*\\u0000pdfPageNumber\\\";i:1;}}}s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:6;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:14:\\\"\\u0000*\\u0000onlyMissing\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:0:\\\"\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1616832026, 1616832026);

-- --------------------------------------------------------

--
-- Table structure for table `manufactories`
--

CREATE TABLE `manufactories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactories`
--

INSERT INTO `manufactories` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-03-25 07:20:54', '2021-03-25 07:20:54', NULL),
(2, '2021-03-25 07:20:54', '2021-03-25 07:20:54', NULL),
(3, '2021-03-25 07:20:54', '2021-03-25 07:20:54', NULL),
(4, '2021-03-25 07:20:54', '2021-03-25 07:20:54', NULL),
(5, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(6, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(7, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(8, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(9, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(10, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(11, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(12, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(13, '2021-03-25 07:20:55', '2021-03-25 07:20:55', NULL),
(14, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(15, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(16, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(17, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(18, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(19, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(20, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(21, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(22, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL),
(23, '2021-03-25 07:20:56', '2021-03-25 07:20:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactory_translations`
--

CREATE TABLE `manufactory_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufactory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactory_translations`
--

INSERT INTO `manufactory_translations` (`id`, `manufactory_id`, `name`, `locale`) VALUES
(1, 1, 'Toyota', 'en'),
(2, 1, 'تويوتا', 'ar'),
(3, 2, 'Volkswagen', 'en'),
(4, 2, 'فولكس فاجن', 'ar'),
(5, 3, 'Hyundai', 'en'),
(6, 3, 'هيونداي', 'ar'),
(7, 4, 'Ford', 'en'),
(8, 4, 'معقل', 'ar'),
(9, 5, 'Nissan', 'en'),
(10, 5, 'نيسان', 'ar'),
(11, 6, 'Honda', 'en'),
(12, 6, 'هوندا', 'ar'),
(13, 7, 'Fiat', 'en'),
(14, 7, 'فيات', 'ar'),
(15, 8, 'Renault', 'en'),
(16, 8, 'رينو', 'ar'),
(17, 9, 'Suzuki', 'en'),
(18, 9, 'سوزوكي', 'ar'),
(19, 10, 'BMW', 'en'),
(20, 10, 'بي إم دبليو', 'ar'),
(21, 11, 'Geely', 'en'),
(22, 11, 'جيلي', 'ar'),
(23, 12, 'BYD', 'en'),
(24, 12, 'BYD', 'ar'),
(25, 13, 'Volvo', 'en'),
(26, 13, 'فولفو', 'ar'),
(27, 14, 'Ferrari', 'en'),
(28, 14, 'فيراري', 'ar'),
(29, 15, 'jeep', 'en'),
(30, 15, 'جيب', 'ar'),
(31, 16, 'Kia', 'en'),
(32, 16, 'كيا', 'ar'),
(33, 17, 'Geely', 'en'),
(34, 17, 'جيلي', 'ar'),
(35, 18, 'range Rover', 'en'),
(36, 18, 'رينج روفر', 'ar'),
(37, 19, 'Mercedes', 'en'),
(38, 19, 'مرسيدس', 'ar'),
(39, 20, 'Changan', 'en'),
(40, 20, 'تشانجان', 'ar'),
(41, 21, 'Mazda', 'en'),
(42, 21, 'مازدا', 'ar'),
(43, 22, 'Chevrolet', 'en'),
(44, 22, 'شيفروليه', 'ar'),
(45, 23, 'Mitsubishi', 'en'),
(46, 23, 'ميتسوبيشي', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 1, 'e0d297bc-4e52-4909-a28f-dd41fc6a321c', 'default', '1613380362163', '1613380362163.png', 'image/png', 'public', 'public', 137257, '[]', '[]', '[]', '[]', 1, '2021-03-25 07:21:53', '2021-03-25 07:21:53'),
(2, 'App\\Models\\Slider', 1, 'd0b8247d-25b9-4f91-b714-24799084a5d8', 'default', '1613380389384', '1613380389384.png', 'image/png', 'public', 'public', 137257, '[]', '[]', '[]', '[]', 2, '2021-03-25 08:05:13', '2021-03-25 08:05:15'),
(4, 'App\\Models\\Car', 1, 'bf664461-410e-49d1-b548-56b2af083746', 'default', '602a2c177fdb2_bmw-g05-x5-modellfinder', '602a2c177fdb2-bmw-g05-x5-modellfinder.png', 'image/png', 'public', 'public', 229321, '[]', '[]', '[]', '[]', 3, '2021-03-27 05:59:04', '2021-03-27 05:59:07'),
(5, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 3, 'aaad83e7-2c0e-4182-94a9-dad23caa2620', 'default', '602a2ce64551a_big-up_d81e3d0362128c9ee5638bed996165ff', '602a2ce64551a-big-up-d81e3d0362128c9ee5638bed996165ff.png', 'image/png', 'public', 'public', 111902, '[]', '[]', '[]', '[]', 4, '2021-03-27 05:59:28', '2021-03-27 05:59:28'),
(6, 'AhmedAliraqi\\LaravelMediaUploader\\Entities\\TemporaryFile', 4, '01360e3e-c9dc-475e-b9e6-6879dc7a03ae', 'default', '602a2f1999472_download (2)', '602a2f1999472-download-2.jpg', 'image/jpeg', 'public', 'public', 4902, '[]', '[]', '[]', '[]', 5, '2021-03-27 06:00:26', '2021-03-27 06:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_05_16_183059_create_reset_password_codes_table', 1),
(6, '2020_05_16_183114_create_reset_password_tokens_table', 1),
(7, '2020_06_03_131044_create_temporary_files_table', 1),
(8, '2020_06_03_164835_create_jobs_table', 1),
(9, '2020_12_09_221804_create_feedback_table', 1),
(10, '2020_12_10_223347_create_verifications_table', 1),
(11, '2021_01_15_220046_create_settings_table', 1),
(12, '2021_01_28_184703_create_permission_tables', 1),
(13, '2021_02_16_091511_create_media_table', 1),
(14, '2021_03_21_200809_create_branches_table', 1),
(15, '2021_03_21_202849_create_categories_table', 1),
(16, '2021_03_21_203223_create_manufactories_table', 1),
(17, '2021_03_21_204010_create_cars_table', 1),
(18, '2021_03_25_094221_create_sliders_table', 2),
(19, '2021_03_27_094221_create_cars_in_stock_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage.supervisors', 'web', '2021-03-25 07:20:17', '2021-03-25 07:20:17'),
(2, 'manage.customers', 'web', '2021-03-25 07:20:17', '2021-03-25 07:20:17'),
(3, 'manage.feedback', 'web', '2021-03-25 07:20:17', '2021-03-25 07:20:17'),
(4, 'manage.settings', 'web', '2021-03-25 07:20:17', '2021-03-25 07:20:17'),
(5, 'manage.roles', 'web', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(6, 'manage.branches', 'web', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(7, 'manage.categories', 'web', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(8, 'manage.cars', 'web', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(9, 'manage.manufactories', 'web', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(10, 'manage.sliders', 'web', '2021-03-25 07:42:22', '2021-03-25 07:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_codes`
--

CREATE TABLE `reset_password_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_tokens`
--

CREATE TABLE `reset_password_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_translations`
--

CREATE TABLE `role_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'terms', 'ar', 's:360:\"هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\";', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(2, 'terms', 'en', 's:452:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.\";', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(3, 'privacy', 'ar', 's:360:\"هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\";', '2021-03-25 07:20:18', '2021-03-25 07:20:18'),
(4, 'privacy', 'en', 's:452:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(5, 'about', 'ar', 's:360:\"هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(6, 'about', 'en', 's:452:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(7, 'name', 'en', 's:11:\"Scaffolding\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(8, 'name', 'ar', 's:11:\"Scaffolding\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(9, 'copyright', 'en', 's:50:\"Copyright © 2021 Scaffolding All rights reserved.\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(10, 'copyright', 'ar', 's:34:\"جميع الحقوق محفوظة\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(11, 'facebook', NULL, 's:20:\"https://facebook.com\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(12, 'instagram', NULL, 's:21:\"https://instagram.com\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(13, 'snapchat', NULL, 's:20:\"https://snapchat.com\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(14, 'twitter', NULL, 's:19:\"https://twitter.com\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(15, 'apple', NULL, 's:1:\"#\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(16, 'android', NULL, 's:1:\"#\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(17, 'phone', NULL, 's:6:\"123456\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(18, 'email', NULL, 's:16:\"support@demo.com\";', '2021-03-25 07:20:19', '2021-03-25 07:20:19'),
(19, 'dashboard_template', NULL, 's:9:\"adminlte3\";', '2021-03-25 07:59:50', '2021-03-25 08:00:00'),
(20, 'logo', NULL, 'N;', '2021-03-25 07:59:50', '2021-03-25 07:59:50'),
(21, 'favicon', NULL, 'N;', '2021-03-25 07:59:50', '2021-03-25 07:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-03-25 08:05:15', '2021-03-25 08:05:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `name`, `locale`) VALUES
(1, 1, 'safasf', 'ar'),
(2, 1, 'fdsf', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_files`
--

CREATE TABLE `temporary_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temporary_files`
--

INSERT INTO `temporary_files` (`id`, `token`, `collection`, `created_at`, `updated_at`) VALUES
(1, 'CV9UmLilyJWYlHBvEdBkK68mQssLi4hqJeVlWBuWLjTZwHvhq3YIKUcRElxh', 'default', '2021-03-25 07:21:53', '2021-03-25 07:21:53'),
(3, 'DuqQGo7ZzRcVyvmvoFr76H30kamCtSp5yoNgFZ5Ql7HC0iZYqH617ijYb7Bv', 'default', '2021-03-27 05:59:28', '2021-03-27 05:59:28'),
(4, 'j8Y3mHIQVEUonLRlyYggIKBGXg9dzyATuGxxuwNfqrvrj2hyWTvg4SL9mFzx', 'default', '2021-03-27 06:00:26', '2021-03-27 06:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firebase_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `phone`, `firebase_id`, `phone_verified_at`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin', 'admin@demo.com', '111111111', NULL, '2021-03-25 07:20:18', '2021-03-25 07:20:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H7Yoc86mG8', '2021-03-25 07:20:18', '2021-03-25 07:20:18', NULL),
(2, 'Supervisor', 'supervisor', 'supervisor@demo.com', '222222222', NULL, '2021-03-25 07:20:18', '2021-03-25 07:20:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nmMSg7w7jh', '2021-03-25 07:20:18', '2021-03-25 07:20:18', NULL),
(3, 'Customer', 'customer', 'customer@demo.com', '333333333', NULL, '2021-03-25 07:20:18', '2021-03-25 07:20:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mv6qABJ8sx', '2021-03-25 07:20:18', '2021-03-25 07:20:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_translations`
--
ALTER TABLE `branch_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_translations_branch_id_locale_unique` (`branch_id`,`locale`),
  ADD KEY `branch_translations_locale_index` (`locale`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_category_id_foreign` (`category_id`),
  ADD KEY `cars_manufactory_id_foreign` (`manufactory_id`);

--
-- Indexes for table `cars_in_stock`
--
ALTER TABLE `cars_in_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_in_stock_car_id_foreign` (`car_id`),
  ADD KEY `cars_in_stock_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `car_translations`
--
ALTER TABLE `car_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_translations_car_id_locale_unique` (`car_id`,`locale`),
  ADD KEY `car_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `manufactories`
--
ALTER TABLE `manufactories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactory_translations`
--
ALTER TABLE `manufactory_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manufactory_translations_manufactory_id_locale_unique` (`manufactory_id`,`locale`),
  ADD KEY `manufactory_translations_locale_index` (`locale`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reset_password_codes`
--
ALTER TABLE `reset_password_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_password_codes_username_index` (`username`);

--
-- Indexes for table `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_password_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_translations`
--
ALTER TABLE `role_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_translations_role_id_locale_unique` (`role_id`,`locale`),
  ADD KEY `role_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_locale_unique` (`key`,`locale`),
  ADD KEY `settings_key_index` (`key`),
  ADD KEY `settings_locale_index` (`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `temporary_files`
--
ALTER TABLE `temporary_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_firebase_id_unique` (`firebase_id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifications_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `branch_translations`
--
ALTER TABLE `branch_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `cars_in_stock`
--
ALTER TABLE `cars_in_stock`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_translations`
--
ALTER TABLE `car_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manufactories`
--
ALTER TABLE `manufactories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `manufactory_translations`
--
ALTER TABLE `manufactory_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_codes`
--
ALTER TABLE `reset_password_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_translations`
--
ALTER TABLE `role_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temporary_files`
--
ALTER TABLE `temporary_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_translations`
--
ALTER TABLE `branch_translations`
  ADD CONSTRAINT `branch_translations_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_manufactory_id_foreign` FOREIGN KEY (`manufactory_id`) REFERENCES `manufactories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars_in_stock`
--
ALTER TABLE `cars_in_stock`
  ADD CONSTRAINT `cars_in_stock_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_in_stock_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_translations`
--
ALTER TABLE `car_translations`
  ADD CONSTRAINT `car_translations_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manufactory_translations`
--
ALTER TABLE `manufactory_translations`
  ADD CONSTRAINT `manufactory_translations_manufactory_id_foreign` FOREIGN KEY (`manufactory_id`) REFERENCES `manufactories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  ADD CONSTRAINT `reset_password_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_translations`
--
ALTER TABLE `role_translations`
  ADD CONSTRAINT `role_translations_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verifications`
--
ALTER TABLE `verifications`
  ADD CONSTRAINT `verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
