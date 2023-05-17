-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2023 lúc 03:58 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `sort_by` varchar(10) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `status`, `sort_by`, `view`, `icon`, `slug`, `created_at`, `updated_at`) VALUES
(55, 1, 'true', 'Page', 1, NULL, 'gioi-thieu', '2023-05-13 07:42:31', '2023-05-14 04:03:11'),
(56, 1, 'true', 'News', 2, NULL, 'du-hoc-duc', '2023-05-13 07:43:10', '2023-05-14 04:03:12'),
(57, 1, 'true', 'News', 3, NULL, 'hoc-tieng-duc', '2023-05-13 07:43:39', '2023-05-14 04:03:13'),
(58, 1, 'true', 'News', 4, NULL, 'tin-tuc', '2023-05-13 07:44:14', '2023-05-14 04:03:14'),
(59, 1, 'true', 'News', 5, NULL, 'du-an', '2023-05-14 03:57:02', '2023-05-14 04:03:14'),
(60, 1, 'true', 'News', 6, NULL, 'hinh-anh', '2023-05-14 03:57:25', '2023-05-14 04:03:15'),
(61, 1, 'true', 'Page', 7, NULL, 'lien-he', '2023-05-14 03:57:43', '2023-05-14 04:03:15'),
(62, 1, 'true', 'News', NULL, NULL, 'du-hoc-nghe-tai-duc-voi-bang-cap-quoc-te', '2023-05-14 04:04:41', '2023-05-14 04:04:41'),
(63, 1, 'true', 'News', NULL, NULL, 'du-hoc-nghe-tai-duc', '2023-05-14 04:04:58', '2023-05-14 04:04:58'),
(64, 1, 'true', 'News', NULL, NULL, 'cac-chuong-trinh-du-hoc', '2023-05-14 04:05:19', '2023-05-14 04:05:19'),
(65, 1, 'true', 'News', NULL, NULL, 'du-hoc-dai-hoc-tai-duc', '2023-05-14 04:05:43', '2023-05-14 04:05:43'),
(66, 1, 'true', 'News', NULL, NULL, 'kinh-nghiem-du-hoc-duc', '2023-05-14 04:06:01', '2023-05-14 04:06:01'),
(67, 1, 'true', 'News', NULL, NULL, 'hoc-thu-mien-phi', '2023-05-14 04:12:45', '2023-05-14 04:12:45'),
(68, 1, 'true', 'News', NULL, NULL, 'lop-khai-giang', '2023-05-14 04:13:07', '2023-05-14 04:13:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `locale` varchar(20) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `content`, `category_id`, `locale`, `parent`, `title`, `description`, `created_at`, `updated_at`) VALUES
(149, 'Giới thiệu', NULL, 55, 'vi', 0, NULL, NULL, '2023-05-13 07:42:31', '2023-05-13 07:42:31'),
(150, 'Einführen', NULL, 55, 'de', 0, NULL, NULL, '2023-05-13 07:42:31', '2023-05-13 07:46:42'),
(151, 'Du học Đức', NULL, 56, 'vi', 0, NULL, NULL, '2023-05-13 07:43:10', '2023-05-13 07:43:10'),
(152, 'Studieren in Deutschland', NULL, 56, 'de', 0, NULL, NULL, '2023-05-13 07:43:10', '2023-05-13 07:43:10'),
(153, 'Học tiếng Đức', NULL, 57, 'vi', 0, NULL, NULL, '2023-05-13 07:43:39', '2023-05-13 07:43:39'),
(154, 'Lerne Deutsch', NULL, 57, 'de', 0, NULL, NULL, '2023-05-13 07:43:39', '2023-05-13 07:43:39'),
(155, 'Tin tức', NULL, 58, 'vi', 0, NULL, NULL, '2023-05-13 07:44:14', '2023-05-13 07:44:14'),
(156, 'Nachricht', NULL, 58, 'de', 0, NULL, NULL, '2023-05-13 07:44:14', '2023-05-13 07:44:14'),
(157, 'Dự án', NULL, 59, 'vi', 0, NULL, NULL, '2023-05-14 03:57:02', '2023-05-14 03:57:02'),
(158, 'Projekt', NULL, 59, 'de', 0, NULL, NULL, '2023-05-14 03:57:02', '2023-05-14 03:57:02'),
(159, 'Hình ảnh', NULL, 60, 'vi', 0, NULL, NULL, '2023-05-14 03:57:25', '2023-05-14 03:57:25'),
(160, 'Bild', NULL, 60, 'de', 0, NULL, NULL, '2023-05-14 03:57:25', '2023-05-14 03:57:25'),
(161, 'Liên hệ', NULL, 61, 'vi', 0, NULL, NULL, '2023-05-14 03:57:43', '2023-05-14 03:57:43'),
(162, 'Kontakt', NULL, 61, 'de', 0, NULL, NULL, '2023-05-14 03:57:43', '2023-05-14 03:57:43'),
(163, 'Du học nghề tại Đức với bằng quốc tế', NULL, 62, 'vi', 151, NULL, NULL, '2023-05-14 04:04:41', '2023-05-14 04:10:52'),
(164, 'Studieren Sie im Ausland in Deutschland mit einem internationalen Abschluss', NULL, 62, 'de', 152, NULL, NULL, '2023-05-14 04:04:41', '2023-05-14 04:10:52'),
(165, 'Du học nghề tại Đức', NULL, 63, 'vi', 151, NULL, NULL, '2023-05-14 04:04:58', '2023-05-14 04:11:13'),
(166, 'Auslandsstudium in Deutschland', NULL, 63, 'de', 152, NULL, NULL, '2023-05-14 04:04:58', '2023-05-14 04:11:13'),
(167, 'Các chương trình học', NULL, 64, 'vi', 151, NULL, NULL, '2023-05-14 04:05:19', '2023-05-14 04:11:40'),
(168, 'Studienprogramme', NULL, 64, 'de', 152, NULL, NULL, '2023-05-14 04:05:19', '2023-05-14 04:11:40'),
(169, 'Du học đại học tại Đức', NULL, 65, 'vi', 151, NULL, NULL, '2023-05-14 04:05:43', '2023-05-14 04:12:00'),
(170, 'Auslandsstudium in Deutschland', NULL, 65, 'de', 152, NULL, NULL, '2023-05-14 04:05:43', '2023-05-14 04:12:00'),
(171, 'Kinh nghiệm du học Đức', NULL, 66, 'vi', 151, NULL, NULL, '2023-05-14 04:06:01', '2023-05-14 04:12:18'),
(172, 'Auslandserfahrung in Deutschland', NULL, 66, 'de', 152, NULL, NULL, '2023-05-14 04:06:01', '2023-05-14 04:12:18'),
(173, 'Học thử miễn phí', NULL, 67, 'vi', 153, NULL, NULL, '2023-05-14 04:12:45', '2023-05-14 04:12:45'),
(174, 'Kostenlose Probestunden', NULL, 67, 'de', 154, NULL, NULL, '2023-05-14 04:12:45', '2023-05-14 04:12:45'),
(175, 'Lớp khai giảng', NULL, 68, 'vi', 153, NULL, NULL, '2023-05-14 04:13:07', '2023-05-14 04:13:07'),
(176, 'Eröffnungskurs', NULL, 68, 'de', 154, NULL, NULL, '2023-05-14 04:13:07', '2023-05-14 04:13:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(10, 1, 'true', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(11, 1, 'true', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(12, 1, 'true', '2023-04-13 19:30:30', '2023-04-13 19:30:30'),
(13, 1, 'true', '2023-04-13 20:48:20', '2023-04-13 20:48:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district_translations`
--

CREATE TABLE `district_translations` (
  `id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `district_translations`
--

INSERT INTO `district_translations` (`id`, `district_id`, `province_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(28, 10, 16, 'Thanh Xuan', 'en', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(29, 10, 17, 'Thanh Xuân', 'vi', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(30, 10, 18, '青年', 'cn', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(31, 11, 19, 'Quan 1', 'en', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(32, 11, 20, 'Quận 1', 'vi', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(33, 11, 21, '1區', 'cn', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(37, 13, 19, 'sdfsdfs 1', 'en', '2023-04-13 20:48:20', '2023-04-13 20:57:16'),
(38, 13, 20, 'sfsfsdf 2 1', 'vi', '2023-04-13 20:48:20', '2023-04-14 00:48:12'),
(39, 13, 21, 'fsfsdf 4', 'cn', '2023-04-13 20:48:20', '2023-04-13 20:57:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `note` varchar(10) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_04_13_035737_create_images_table', 2),
(10, '2023_04_13_084106_create_provinces_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `sort_by` varchar(10) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `post` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `status`, `sort_by`, `slug`, `post`, `img`) VALUES
(71, 1, 'true', 'Product', 'deluxe-twin', NULL, NULL),
(72, 1, 'true', 'Product', 'executive-double', NULL, NULL),
(73, 1, 'true', 'Product', 'superior-double', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_translations`
--

CREATE TABLE `post_translations` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `category_tras_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `locale` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `category_tras_id`, `province_id`, `district_id`, `ward_id`, `name`, `detail`, `content`, `price`, `unit`, `address`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(209, 71, 116, NULL, NULL, NULL, 'Deluxe Twin', NULL, NULL, 1500000, 'VNĐ/Đêm', NULL, 'en', NULL, NULL, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(210, 71, 117, NULL, NULL, NULL, 'Deluxe 2 giường', NULL, NULL, 1500000, 'VNĐ/Đêm', NULL, 'vi', NULL, NULL, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(211, 71, 118, NULL, NULL, NULL, 'デラックスツイン', NULL, NULL, 1500000, 'VNĐ/Đêm', NULL, 'jp', NULL, NULL, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(212, 72, 116, NULL, NULL, NULL, 'Executive Double', NULL, NULL, 1600000, 'VNĐ/Đêm', NULL, 'en', NULL, NULL, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(213, 72, 117, NULL, NULL, NULL, 'Executive giường đôi', NULL, NULL, 1600000, 'VNĐ/Đêm', NULL, 'vi', NULL, NULL, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(214, 72, 118, NULL, NULL, NULL, 'エグゼクティブダブル', NULL, NULL, 1600000, 'VNĐ/Đêm', NULL, 'jp', NULL, NULL, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(215, 73, 116, NULL, NULL, NULL, 'Superior Double', NULL, NULL, 1800000, 'VNĐ/Đêm', NULL, 'en', NULL, NULL, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(216, 73, 117, NULL, NULL, NULL, 'Superior Double', NULL, NULL, 1800000, 'VNĐ/Đêm', NULL, 'vi', NULL, NULL, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(217, 73, 118, NULL, NULL, NULL, 'スーペリア ダブル', NULL, NULL, 1800000, 'VNĐ/Đêm', NULL, 'jp', NULL, NULL, '2023-05-05 03:04:14', '2023-05-05 03:04:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 'true', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(7, 1, 'true', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(8, 1, 'true', '2023-04-13 19:13:36', '2023-04-13 19:13:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province_translations`
--

CREATE TABLE `province_translations` (
  `id` int(11) NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `province_translations`
--

INSERT INTO `province_translations` (`id`, `province_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(16, 6, 'Ha Noi', 'en', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(17, 6, 'Hà Nội', 'vi', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(18, 6, '河內', 'cn', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(19, 7, 'Ho Chi Minh', 'en', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(20, 7, 'Hồ Chí Minh', 'vi', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(21, 7, '胡志明', 'cn', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(22, 8, 'Quang Ninh', 'en', '2023-04-13 19:13:36', '2023-04-13 19:52:55'),
(23, 8, 'Quảng Ninh', 'vi', '2023-04-13 19:13:36', '2023-04-13 19:52:55'),
(24, 8, '廣寧', 'cn', '2023-04-13 19:13:36', '2023-04-13 19:52:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sections`
--

INSERT INTO `sections` (`id`, `user_id`, `status`) VALUES
(48, 1, NULL),
(49, 1, NULL),
(50, 1, NULL),
(51, 1, NULL),
(52, 1, NULL),
(53, 1, NULL),
(54, 1, NULL),
(55, 1, NULL),
(56, 1, NULL),
(57, 1, NULL),
(58, 1, NULL),
(59, 1, NULL),
(60, 1, NULL),
(61, 1, NULL),
(62, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_translations`
--

CREATE TABLE `section_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_translations`
--

INSERT INTO `section_translations` (`id`, `name`, `header`, `content`, `img`, `locale`, `view`, `section_id`, `post_id`, `created_at`, `updated_at`) VALUES
(142, 'Tổng quan', NULL, NULL, NULL, 'vi', 1, 48, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(143, 'Overview', NULL, NULL, NULL, 'en', 1, 48, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(144, '概述', NULL, NULL, NULL, 'jp', 1, 48, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(145, 'Vị trí', NULL, NULL, NULL, 'vi', 2, 49, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(146, 'Location', NULL, NULL, NULL, 'en', 2, 49, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(147, '地點', NULL, NULL, NULL, 'jp', 2, 49, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(148, 'Liên kết vùng', NULL, NULL, NULL, 'vi', 3, 50, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(149, 'Regional link', NULL, NULL, NULL, 'en', 3, 50, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(150, '區域鏈接', NULL, NULL, NULL, 'jp', 3, 50, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(151, 'Tiện ích', NULL, NULL, NULL, 'vi', 4, 51, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(152, 'Utilities', NULL, NULL, NULL, 'en', 4, 51, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(153, '公用事業', NULL, NULL, NULL, 'jp', 4, 51, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(154, 'Mặt bằng', NULL, NULL, NULL, 'vi', 5, 52, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(155, 'Ground', NULL, NULL, NULL, 'en', 5, 52, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(156, '地面', NULL, NULL, NULL, 'jp', 5, 52, 71, '2023-05-05 03:01:08', '2023-05-05 03:01:08'),
(157, 'Tổng quan', NULL, NULL, NULL, 'vi', 1, 53, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(158, 'Overview', NULL, NULL, NULL, 'en', 1, 53, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(159, '概述', NULL, NULL, NULL, 'jp', 1, 53, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(160, 'Vị trí', NULL, NULL, NULL, 'vi', 2, 54, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(161, 'Location', NULL, NULL, NULL, 'en', 2, 54, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(162, '地點', NULL, NULL, NULL, 'jp', 2, 54, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(163, 'Liên kết vùng', NULL, NULL, NULL, 'vi', 3, 55, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(164, 'Regional link', NULL, NULL, NULL, 'en', 3, 55, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(165, '區域鏈接', NULL, NULL, NULL, 'jp', 3, 55, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(166, 'Tiện ích', NULL, NULL, NULL, 'vi', 4, 56, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(167, 'Utilities', NULL, NULL, NULL, 'en', 4, 56, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(168, '公用事業', NULL, NULL, NULL, 'jp', 4, 56, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(169, 'Mặt bằng', NULL, NULL, NULL, 'vi', 5, 57, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(170, 'Ground', NULL, NULL, NULL, 'en', 5, 57, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(171, '地面', NULL, NULL, NULL, 'jp', 5, 57, 72, '2023-05-05 03:01:53', '2023-05-05 03:01:53'),
(172, 'Tổng quan', NULL, NULL, NULL, 'vi', 1, 58, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(173, 'Overview', NULL, NULL, NULL, 'en', 1, 58, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(174, '概述', NULL, NULL, NULL, 'jp', 1, 58, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(175, 'Vị trí', NULL, NULL, NULL, 'vi', 2, 59, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(176, 'Location', NULL, NULL, NULL, 'en', 2, 59, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(177, '地點', NULL, NULL, NULL, 'jp', 2, 59, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(178, 'Liên kết vùng', NULL, NULL, NULL, 'vi', 3, 60, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(179, 'Regional link', NULL, NULL, NULL, 'en', 3, 60, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(180, '區域鏈接', NULL, NULL, NULL, 'jp', 3, 60, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(181, 'Tiện ích', NULL, NULL, NULL, 'vi', 4, 61, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(182, 'Utilities', NULL, NULL, NULL, 'en', 4, 61, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(183, '公用事業', NULL, NULL, NULL, 'jp', 4, 61, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(184, 'Mặt bằng', NULL, NULL, NULL, 'vi', 5, 62, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(185, 'Ground', NULL, NULL, NULL, 'en', 5, 62, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14'),
(186, '地面', NULL, NULL, NULL, 'jp', 5, 62, 73, '2023-05-05 03:04:14', '2023-05-05 03:04:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `status`) VALUES
(1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` int(11) NOT NULL,
  `setting_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `hotline` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `maps` text DEFAULT NULL,
  `footer` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `name`, `address`, `hotline`, `email`, `facebook`, `youtube`, `maps`, `footer`, `img`, `favicon`, `title`, `description`, `keywords`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Candle Hotel', '301 P. Đội Cấn, Cống Vị, Ba Đình, Hà Nội', '0437339933', 'sales@superhotelcandle.vn - info@superhotelcandle.vn', 'https://www.facebook.com/candeohanoi', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.68490599453!2d105.8185352!3d21.0358377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd7e28c9d85%3A0xecfc9364d29957bb!2sSuper%20Hotel%20Candle!5e0!3m2!1svi!2s!4v1683269907636!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'cropped-bla_logo_full_150px.png', 'faviconhotel.png', 'Candle Hotel - New four stars Japanese hotel in Hanoi', 'Candle Hotel - New four stars Japanese hotel in Hanoi', NULL, 'vi', '2023-04-26 03:32:21', '2023-05-13 06:27:43'),
(2, 1, 'Super Candle Hotel', '301 P. Đội Cấn, Cống Vị, Ba Đình, Hà Nội', '0437339933', 'sales@superhotelcandle.vn - info@superhotelcandle.vn', 'https://www.facebook.com/candeohanoi', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.68490599453!2d105.8185352!3d21.0358377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd7e28c9d85%3A0xecfc9364d29957bb!2sSuper%20Hotel%20Candle!5e0!3m2!1svi!2s!4v1683269907636!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'cropped-bla_logo_full_150px.png', 'faviconhotel.png', 'Candle Hotel - New four stars Japanese hotel in Hanoi', 'Candle Hotel - New four stars Japanese hotel in Hanoi', NULL, 'en', '2023-04-26 03:32:21', '2023-05-13 06:27:43'),
(3, 1, 'Super Candle Hotel', '301 P. Đội Cấn, Cống Vị, Ba Đình, Hà Nội', '0437339933', 'sales@superhotelcandle.vn - info@superhotelcandle.vn', 'https://www.facebook.com/candeohanoi', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.68490599453!2d105.8185352!3d21.0358377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd7e28c9d85%3A0xecfc9364d29957bb!2sSuper%20Hotel%20Candle!5e0!3m2!1svi!2s!4v1683269907636!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'cropped-bla_logo_full_150px.png', 'faviconhotel.png', 'Candle Hotel - New four stars Japanese hotel in Hanoi', 'Candle Hotel - New four stars Japanese hotel in Hanoi', NULL, 'jp', '2023-04-26 03:32:21', '2023-05-13 06:27:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `permission`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'tuan.pn92@gmail.com', 1, NULL, '$2y$10$9fz78ri8PAvBIbSerrENiuTjo5WlAXRXdfCtkh.40ByOcTeSNYCsO', NULL, '2023-03-20 09:17:19', '2023-03-20 09:17:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wards`
--

CREATE TABLE `wards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wards`
--

INSERT INTO `wards` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 'true', '2023-04-14 00:38:07', '2023-04-14 00:38:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward_translations`
--

CREATE TABLE `ward_translations` (
  `id` int(11) NOT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ward_translations`
--

INSERT INTO `ward_translations` (`id`, `ward_id`, `province_id`, `district_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(19, 7, 16, 28, 'Nhan hoa', 'en', '2023-04-14 00:38:07', '2023-04-14 00:38:07'),
(20, 7, 17, 29, 'Nhân Hòa', 'vi', '2023-04-14 00:38:07', '2023-04-14 00:38:07'),
(21, 7, 18, 30, 'nhanhoa', 'cn', '2023-04-14 00:38:07', '2023-04-14 00:38:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district_translations`
--
ALTER TABLE `district_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `province_translations`
--
ALTER TABLE `province_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ward_translations`
--
ALTER TABLE `ward_translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `district_translations`
--
ALTER TABLE `district_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `province_translations`
--
ALTER TABLE `province_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `ward_translations`
--
ALTER TABLE `ward_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
