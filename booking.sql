-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2024 at 07:14 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_id` int NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `form` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash',
  `total` decimal(15,2) NOT NULL,
  `img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `user_id` int DEFAULT NULL,
  `approve_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `code`, `hotel_id`, `checkin`, `checkout`, `form`, `name`, `phone`, `pay_type`, `total`, `img`, `status`, `user_id`, `approve_id`, `created_at`, `updated_at`) VALUES
(1, '2406200609168662', 2, '2024-06-20', '2024-06-20', 'general', 'ພົງສະຫວັນ', '55588662', 'aon', 1000000.00, 'upload/payment/240620061021-QR.jpeg.jpg', 0, NULL, 3, '2024-06-20 11:10:21', '2024-06-20 12:03:45'),
(2, '2406200611083733', 2, '2024-06-20', '2024-06-20', 'general', 'ແມັກກີ້', '54243733', 'aon', 400000.00, 'upload/payment/240620061117-QR.jpeg.jpg', 3, NULL, 3, '2024-06-20 11:11:17', '2024-06-24 10:53:57'),
(3, '2406200752259169', 2, '2024-06-20', '2024-06-20', 'general', 'ພົງສະຫວັນ', '59829169', 'aon', 400000.00, 'upload/payment/240620075321-QR.jpeg.jpg', 2, NULL, 4, '2024-06-20 12:53:21', '2024-06-20 12:55:27'),
(4, '2406240325569169', 2, '2024-06-24', '2024-06-24', 'member', 'phongsavanh boubphachanh', '59829169', 'aon', 600000.00, 'upload/payment/240624032611-11.png.png', 3, 5, 3, '2024-06-24 08:26:11', '2024-06-24 09:13:37'),
(5, '2406240335443733', 2, '2024-06-24', '2024-06-24', 'general', 'ໄຊຍະເດດ', '54243733', 'aon', 600000.00, 'upload/payment/240624033555-2.png.png', 0, NULL, 3, '2024-06-24 08:35:55', '2024-06-24 12:10:59'),
(6, '2406240440289169', 2, '2024-06-24', '2024-06-24', 'member', 'phongsavanh boubphachanh', '59829169', 'aon', 600000.00, 'upload/payment/240624044158-2.png.png', 3, 5, 3, '2024-06-24 09:41:58', '2024-06-24 12:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_code`, `room_id`, `room`, `price`, `note`, `created_at`, `updated_at`) VALUES
(1, '2406200552148662', 1, 'B1', 200000.00, NULL, '2024-06-20 10:52:14', '2024-06-20 10:52:14'),
(2, '2406200555398662', 2, 'B3', 300000.00, NULL, '2024-06-20 10:55:39', '2024-06-20 10:55:39'),
(3, '2406200557208662', 1, 'B1', 200000.00, NULL, '2024-06-20 10:58:00', '2024-06-20 10:58:00'),
(4, '2406200557208662', 2, 'B3', 300000.00, NULL, '2024-06-20 10:58:09', '2024-06-20 10:58:09'),
(5, '2406200605538662', 1, 'B1', 200000.00, NULL, '2024-06-20 11:05:53', '2024-06-20 11:05:53'),
(6, '2406200605538662', 2, 'B3', 300000.00, NULL, '2024-06-20 11:06:01', '2024-06-20 11:06:01'),
(7, '2406200606458662', 1, 'B1', 200000.00, NULL, '2024-06-20 11:06:45', '2024-06-20 11:06:45'),
(8, '2406200606458662', 2, 'B3', 300000.00, NULL, '2024-06-20 11:06:48', '2024-06-20 11:06:48'),
(9, '2406200608128662', 1, 'B1', 200000.00, NULL, '2024-06-20 11:08:12', '2024-06-20 11:08:12'),
(10, '2406200608128662', 2, 'B3', 300000.00, NULL, '2024-06-20 11:08:13', '2024-06-20 11:08:13'),
(11, '2406200609168662', 1, 'B1', 200000.00, NULL, '2024-06-20 11:09:16', '2024-06-20 11:09:16'),
(12, '2406200609168662', 2, 'B3', 300000.00, NULL, '2024-06-20 11:09:16', '2024-06-20 11:09:16'),
(13, '2406200611083733', 1, 'B1', 200000.00, NULL, '2024-06-20 11:11:08', '2024-06-20 11:11:08'),
(14, '2406200752259169', 3, 'C1', 200000.00, NULL, '2024-06-20 12:52:25', '2024-06-20 12:52:25'),
(15, '2406240325569169', 2, 'B3', 300000.00, NULL, '2024-06-24 08:25:56', '2024-06-24 08:25:56'),
(16, '2406240335443733', 2, 'B3', 300000.00, NULL, '2024-06-24 08:35:44', '2024-06-24 08:35:44'),
(17, '2406240440289169', 2, 'B3', 300000.00, NULL, '2024-06-24 09:40:28', '2024-06-24 09:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
CREATE TABLE IF NOT EXISTS `buildings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `hotel_id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'ຕຶກ B', 3, NULL, '2024-06-19 11:36:08'),
(2, 2, 'ຕຶກ C', 3, NULL, NULL),
(3, 3, 'ຕຶກ A', 4, NULL, NULL),
(4, 3, 'ຕຶກ B', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1718913257;', 1718913257),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1718913257),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1718893712;', 1718893712),
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:2;', 1718893712),
('5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1719243413;', 1719243413),
('5c785c036466adea360111aa28563bfd556b5fba', 'i:1;', 1719243413),
('1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1718912988;', 1718912988),
('1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1718912988),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1719247293;', 1719247293),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1719247293);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `check_in_outs`
--

DROP TABLE IF EXISTS `check_in_outs`;
CREATE TABLE IF NOT EXISTS `check_in_outs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checin` date NOT NULL,
  `checkout` date DEFAULT NULL,
  `hotel_id` int NOT NULL,
  `room_id` int NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `user_id` int DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL DEFAULT '0',
  `total` decimal(15,2) NOT NULL,
  `pay_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `approve_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_in_outs`
--

INSERT INTO `check_in_outs` (`id`, `code`, `checin`, `checkout`, `hotel_id`, `room_id`, `from`, `user_id`, `name`, `phone`, `count`, `total`, `pay_type`, `img`, `status`, `approve_id`, `created_at`, `updated_at`) VALUES
(1, '2406240325569169', '2024-06-24', '2024-06-24', 2, 2, 'member', 5, 'phongsavanh boubphachanh', '59829169', 0, 600000.00, NULL, NULL, 1, 3, '2024-06-24 10:51:05', '2024-06-24 11:00:05'),
(2, '2406200611083733', '2024-06-24', '2024-06-24', 2, 1, 'general', NULL, 'ແມັກກີ້', '54243733', 0, 400000.00, NULL, NULL, 1, 3, '2024-06-24 10:53:57', '2024-06-24 11:00:09'),
(3, '2406240440289169', '2024-06-24', NULL, 2, 2, 'member', 5, 'phongsavanh boubphachanh', '59829169', 0, 600000.00, NULL, NULL, 0, 3, '2024-06-24 12:11:04', '2024-06-24 12:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `img`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'ນະຄອນຫຼວງພະບາງ', 'upload/district/240619020927.jpg', NULL, NULL, '2024-06-19 07:09:27'),
(2, 'ເມືອງນານ', 'upload/district/240619020946.jpg', NULL, NULL, '2024-06-19 07:09:46'),
(3, 'ເມືອງຊຽງເງິນ', 'upload/district/240619020953.jpg', NULL, NULL, '2024-06-19 07:09:53'),
(4, 'ເມືອງພູຄູນ', 'upload/district/240619021010.jpg', NULL, NULL, '2024-06-19 07:10:10'),
(5, 'ເມືອງປາກອູ', 'upload/district/240619021001.jpg', NULL, NULL, '2024-06-19 07:10:01'),
(6, 'ເມືອງໂພນໄຊ', 'upload/district/240619021024.jpg', NULL, NULL, '2024-06-19 07:10:24'),
(7, 'ເມືອງປາກແຊງ', 'upload/district/240619021032.jpg', NULL, NULL, '2024-06-19 07:10:32'),
(8, 'ເມືອງຈອມເພັດ', 'upload/district/240619021039.jpg', NULL, NULL, '2024-06-19 07:10:39'),
(9, 'ເມືອງນ້ຳບາກ', 'upload/district/240619021047.jpg', NULL, NULL, '2024-06-19 07:10:47'),
(10, 'ເມືອງງອຍ', 'upload/district/240619021056.jpg', NULL, NULL, '2024-06-19 07:10:56'),
(11, 'ເມືອງວຽງຄຳ', 'upload/district/240619021112.jpg', NULL, NULL, '2024-06-19 07:11:12'),
(12, 'ເມືອງໂພນທອງ', 'upload/district/240619021220.jpg', NULL, NULL, '2024-06-19 07:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dis_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `dicount` int NOT NULL DEFAULT '0',
  `promotion1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` text COLLATE utf8mb4_unicode_ci,
  `img7` text COLLATE utf8mb4_unicode_ci,
  `img8` text COLLATE utf8mb4_unicode_ci,
  `rate` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `location` text COLLATE utf8mb4_unicode_ci,
  `active` int NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `dis_id`, `name`, `phone`, `address`, `detail`, `price`, `dicount`, `promotion1`, `promotion2`, `promotion3`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `rate`, `status`, `location`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hotel LPB', '021 222222', 'ບ້ານ ຫຼວງ, ເມືອງ ຫຼວງພະບາງ, ນະຄອນຫຼວງພະບາງ', 'ຫ້ອງແອ,​ ວາຍຟາຍ, ນ້ຳອຸ່ນ', 0.00, 0, 'ຟຣີນ້ຳດື່ມທຸກມື້', 'ຟຣີອາຫານເຊົ້າ', NULL, 'upload/hotels/240620013359-12.jpg.jpg', 'upload/hotels/240620013359-11.jpg.jpg', 'upload/hotels/240620013359-07.jpg.jpg', 'upload/hotels/240620013359-03.jpg.jpg', NULL, NULL, NULL, NULL, 0, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15183.624162000895!2d102.6326748465576!3d17.936535842961778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31246624b50fe889%3A0x6e24ada05c63ec70!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4LiX4Lir4Liy4LijIDEwMw!5e0!3m2!1sth!2sla!4v1719217328934!5m2!1sth!2sla', 1, 3, NULL, '2024-06-20 06:33:59'),
(2, 1, 'Hotel Dara', '021 111111', 'ບ້ານ4ແຍກດາລາ, ເມືອງຫຼວງ, ນະຄອນຫຼວງພະບາງ', 'ຫ້ອງແອ, ນ້ຳອຸ່ນ', 0.00, 0, 'ຟຣີເຂົ້າເຊົ້າ', NULL, NULL, 'upload/hotels/240619053643.jpg', 'upload/hotels/240619053643.jpg', 'upload/hotels/240619053643.jpg', 'upload/hotels/240619053643.jpg', NULL, NULL, NULL, NULL, 0, 1, NULL, 1, 3, NULL, NULL),
(3, 2, 'ໂຮງແຮມ ເມືອງນານ', '021 222222', 'ເມືອງນານ, ຫຼວງພະບາງ', 'ແອ, ຕູ້ເຢັນ, ນ້ຳອຸ່ນ', 0.00, 0, 'ຟຣີເຂົ້າເຊົ້າ', NULL, NULL, 'upload/hotels/240620074610-05.jpg.jpg', 'upload/hotels/240620074610-02.jpg.jpg', 'upload/hotels/240620074610-09.jpg.jpg', 'upload/hotels/240620074610-15.jpg.jpg', NULL, NULL, NULL, NULL, 0, 1, NULL, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_bookings`
--

DROP TABLE IF EXISTS `log_bookings`;
CREATE TABLE IF NOT EXISTS `log_bookings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `status` int NOT NULL,
  `read` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_bookings`
--

INSERT INTO `log_bookings` (`id`, `booking_code`, `user_id`, `status`, `read`, `created_at`, `updated_at`) VALUES
(1, '2406240325569169', 5, 2, 0, '2024-06-24 09:13:37', '2024-06-24 09:31:54'),
(2, '2406240440289169', 5, 2, 0, '2024-06-24 09:42:30', '2024-06-24 09:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_19_040526_create_roles_table', 2),
(5, '2024_06_19_080320_create_districts_table', 3),
(6, '2024_06_19_142513_create_hotels_table', 4),
(7, '2024_06_19_174519_create_buildings_table', 5),
(8, '2024_06_19_174528_create_rooms_table', 5),
(9, '2024_06_20_152038_create_bookings_table', 6),
(10, '2024_06_20_152443_create_booking_details_table', 6),
(11, '2024_06_24_154331_create_log_bookings_table', 7),
(12, '2024_06_24_155147_create_check_in_outs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-06-19 04:09:46', '2024-06-19 04:09:46'),
(2, 'vendor', '2024-06-19 04:09:56', '2024-06-19 04:09:56'),
(3, 'user', '2024-06-19 04:10:21', '2024-06-19 04:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `buil_id` int NOT NULL,
  `cate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'air',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'one',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `active` int NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `buil_id`, `cate`, `type`, `name`, `price`, `img`, `status`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'air', 'one', 'B1', 200000.00, 'upload/rooms/240620022756-12.jpg.jpg', 1, 1, 3, NULL, '2024-06-24 11:00:09'),
(2, 2, 1, 'air', 'two', 'B3', 300000.00, 'upload/rooms/240620022733-13.jpg.jpg', 0, 1, 3, NULL, '2024-06-24 12:11:04'),
(3, 3, 3, 'air', 'two', 'C1', 200000.00, 'upload/rooms/240620074850-15.jpg.jpg', 1, 1, 4, NULL, '2024-06-20 12:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('U3Hdj0g7wUlY91RfP3kroToAcIMCvnY3kHWBcYN2', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNldOOVk5YktGS0k5b3QxaHNmQXliZlBWRHdwdmI3OWp0SzhlVGZFQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1719256272),
('DIIPLQQvAwDkyi8DItSWan5syKSUCXeesCXnIJHR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFZ3Z1Y3cVFGRUhJZWJSQWZoYU5PeWFXMFNZWkpCejZ5c1p5RFgwayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719256425),
('HzjdpXsVPIllG8jNVLU67kDv3EMgxCnoGhJRGAUF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTJTaGY4SUFKUkVvZzVSSnAwMmFvNzRWcUk0UGM0ZWNrWk9sVVhYdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1719247830),
('hcQJYaV4NwPMPROq7p7F0DdAR0xf42XD2OxQ6hM0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1o5MmM5UnBRZldRamtpNzBoMjY2YUp2SVNTT0QyWkdJb2tFUjFaNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob3RlbC1yb29tLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719247333);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `phone`, `email`, `email_verified_at`, `password`, `role_id`, `profile`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin2', 'admin3', '99999999', NULL, NULL, '$2y$12$m3OTKJrraRIcOR0/6///1.1ksZDu68VSVyOayqRIt1oaOlAzzvOMW', 1, 'backend/assets/images/users/avatar-1.jpg', 1, NULL, '2024-06-19 03:32:03', '2024-06-18 23:47:43'),
(3, 'hotel1', 'hotel-lpb', 'lpb', '77777777', NULL, NULL, '$2y$12$umFcszSxrPjHpaOHLD/9Cu2rHMwvzqyKLqTr7qu.dmZon93XsDqoi', 2, NULL, 1, NULL, NULL, '2024-06-19 00:44:31'),
(4, 'hotel2', 'hotel2', 'hotel2', '66666666', NULL, NULL, '$2y$12$8xMFM9flx.0l3k5uG82tauThewFLUPSWzCgDkUhKISi.AN7MGKW96', 2, NULL, 1, NULL, NULL, NULL),
(5, 'phong', 'phongsavanh', 'boubphachanh', '59829169', NULL, NULL, '$2y$12$koNyoKZ67vW4nBuPemk/EuiFciG730Ps10gVTS7VistjlQYDPOqJ6', 3, NULL, 1, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
