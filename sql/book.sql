-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 09:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belongs_to` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `image`, `condition`, `belongs_to`, `status`, `created_at`, `updated_at`) VALUES
(3, 'China Harayeko Manxe', 'Hari bansa Aacharya', 'हरिवंश आचार्य नाम नै एउटा महत्वपूर्ण परिचय हो । संसारमा विरलै कोही नेपाली होलान्, जसलाई उनका बारेमा थाहा नभएको होस् । संसारमा विरलै नेपाली होलान्, जसलाई उनका बारमा सबै कुरा थाहा भएको होस् । रङ्गमञ्च र पर्दाका माध्यमबाट त उनलाई प्रायः सबैले देखेका र चिनेका छन् । उनी असल र महान् कलाकार मात्र होइनन् बेलाबेलामा भएका महत्वपूर्ण राजनीतिक तथा सामाजिक परिवर्तनका अभियन्ता पनि हुन् । यस्ता बहुआयामिक व्यक्तित्वको जीवन कस्तो छ ? अभिनय गरेर अरुलाई पेट मिचीमिची हसाउने र धरधरी रुवाउन पनि सक्ने यी महान् कलाकार आफ्नो वास्तविक जीवनमा कति हासेका छन् र कति रोएका छन् त ? यस्ता अनेक प्रसङ्गहरुको बेलिबिस्तार चिना हराएको मान्छे पुस्तकमा छन् । यो पुस्तक पढेपछि हामी उनलाई आफ्नो सबैभन्दा नजिकको आफन्तलाई झैँ चिन्नेछौँ', 'books/August2020/1597685077-ChinaHarayekoManxe.jpg', 'new', 2, 'available', '2020-08-17 11:39:37', '2020-08-18 00:51:08'),
(4, 'Radha', 'Krishna Dharabasi', 'The novel is about Radha, the famous lady character from Mahabharat. All we know about her is that she was the childhood sweetheart of Krishna (not to be confused with the the author’s name). Although she is mentioned alongside Krishna in many religious texts, very few (none, in fact) is written about her adulthood. Dharabasi presents an imaginary story of her life during her romance with Krishna during younger days and after their (probable) separation.', 'books/August2020/1597686059-9001.jpg', 'like new', 2, 'available', '2020-08-17 11:55:59', '2020-08-17 11:55:59'),
(5, 'Seto Bagh', 'Diamond Shamsher Ranaa', 'सेतो बाघ एक ऐतिहासिक पृष्ठभूमिमा लेखिएको सामाजिक उपन्यास हो । \'बडामहारानी ! आज मैले सेतो बाघ देखेँ ।\' \'कस्तो रहेछ? सरकार !\' \'निक्खुर सेतो ।\' \'त्यो सेतो बाघलाई सरकारबाट हानिबक्सिइन ?\' \'हानेँ, तर लागेन ।\'', 'books/August2020/1597686480-SetoBagh.jpg', 'old', 2, 'available', '2020-08-17 12:03:00', '2020-08-17 12:03:00'),
(6, 'Java - The Complete Reference', 'Herbert Schildt', 'This book is a comprehensive guide to the Java language, describing its syntax, keywords and fundamental programming principles. Significant portions of the Java API library are also examined. This book is for all programmers, whether you are a novice or an experienced pro. The beginner will find its carefully paced discussions and many examples especially helpful.', 'books/August2020/1597686637-Java.jpg', 'like new', 2, 'available', '2020-08-17 12:05:37', '2020-08-17 12:05:37'),
(7, 'The Algorithm Design Manual', 'Steven S Skiena', 'This newly expanded and updated second edition of the best-selling classic continues to take the \"mystery\" out of designing algorithms, and analyzing their efficacy and efficiency. Expanding on the first edition, the book now serves as the primary textbook of choice for algorithm design courses while maintaining its status as the premier practical reference guide to algorithms for programmers, researchers, and students.', 'books/August2020/1597728318-algo.jpg', 'new', 6, 'available', '2020-08-17 23:40:18', '2020-08-17 23:40:18'),
(8, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Rich Dad Poor Dad is Robert\'s story of growing up with two dads — his real father and the father of his best friend, his rich dad — and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.', 'books/August2020/1597728473-richdadpoordad.jpg', 'like new', 6, 'available', '2020-08-17 23:42:53', '2020-08-17 23:42:53'),
(9, 'Munamadan', 'Laxmi Prasad Devkota', 'Munna Madan (Nepali: मुनामदन) is a short epic narrating the tragic story of Muna & Madan written by Nepalese poet Laxmi Prasad Devkota and one of the most popular works in Nepali literature. Muna Madan is based on an 18th-century ballad in Nepal Bhasa entitled Ji Waya La Lachhi Maduni (It hasn\'t been a month since I came). The song, which is popular in Newar society, tells the story of a merchant from Kathmandu who leaves for Tibet on business leaving behind his newly wed bride. The wife is concerned for his safety as the journey to Tibet is filled with hardships, and she pleads with him not to go. But he leaves despite her protests. When he returns home after many years, he finds that she has died.', 'books/August2020/1597728640-munamadan.jpg', 'like new', 6, 'available', '2020-08-17 23:45:40', '2020-08-17 23:45:40'),
(10, 'Half Girlfriend', 'Chetan Bhagat', 'Once upon a time, there was a Bihari boy called Madhav. He fell in love with girl called Riya. Madhav didn\'t speak English well. Riya did. Madhav wanted a relationship. Riya didn\'t. Riya just wanted friendship. Madhav didn\'t. Riya suggested a compromise. She agreed to be his half-girlfriend. From the author of the blockbuster novels Five Point Someone, One Night @ the Call Center, The 3 Mistakes of My Life, 2 States and Revolution 2020 comes a simple and beautiful love story that will touch your heart and inspire you to chase your dreams.', 'books/August2020/1597729087-hg.jpg', 'like new', 5, 'available', '2020-08-17 23:53:07', '2020-08-17 23:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-06-15 10:06:07', '2020-06-15 10:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 4, 'author', 'text', 'Author', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 4, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(5, 4, 'image', 'text', 'Image', 1, 1, 1, 1, 1, 1, '{}', 5),
(6, 4, 'condition', 'text', 'Condition', 1, 1, 1, 1, 1, 1, '{}', 6),
(7, 4, 'belongs_to', 'text', 'Belongs To', 1, 1, 1, 1, 1, 1, '{}', 7),
(8, 4, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 8),
(9, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(10, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(11, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(12, 5, 'book_wanted', 'text', 'Book Wanted', 1, 1, 1, 1, 1, 1, '{}', 2),
(13, 5, 'book_offered', 'text', 'Book Offered', 1, 1, 1, 1, 1, 1, '{}', 3),
(14, 5, 'requested_by', 'text', 'Requested By', 1, 1, 1, 1, 1, 1, '{}', 4),
(15, 5, 'requested_to', 'text', 'Requested To', 1, 1, 1, 1, 1, 1, '{}', 5),
(16, 5, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 6),
(17, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(18, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(19, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(20, 6, 'role_id', 'text', 'Role Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(21, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(22, 6, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(23, 6, 'avatar', 'text', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 5),
(24, 6, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 0, 0, 0, 0, '{}', 6),
(25, 6, 'password', 'text', 'Password', 1, 1, 1, 1, 1, 1, '{}', 7),
(26, 6, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 8),
(27, 6, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 9),
(28, 6, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 10),
(29, 6, 'settings', 'text', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 11),
(30, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(31, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(32, 6, 'api_token', 'text', 'Api Token', 0, 0, 0, 0, 0, 0, '{}', 14),
(33, 3, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(34, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(35, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(36, 3, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(37, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(38, 2, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(39, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(40, 2, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(41, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-17 09:43:10', '2020-08-17 10:23:14'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-17 09:43:10', '2020-08-17 10:05:44'),
(4, 'books', 'books', 'Book', 'Books', 'voyager-book', 'App\\Book', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-17 10:00:10', '2020-08-18 01:02:53'),
(5, 'exchanges', 'exchanges', 'Exchange', 'Exchanges', 'voyager-size-small', 'App\\Exchange', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(6, 'users', 'users', 'User', 'Users', 'voyager-person', 'App\\User', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-17 10:03:25', '2020-08-17 11:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `exchanges`
--

CREATE TABLE `exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_wanted` int(11) NOT NULL,
  `book_offered` int(11) NOT NULL,
  `requested_by` int(11) NOT NULL,
  `requested_to` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exchanges`
--

INSERT INTO `exchanges` (`id`, `book_wanted`, `book_offered`, `requested_by`, `requested_to`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 3, 2, 6, 'requested', '2020-08-18 01:18:48', '2020-08-18 01:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-17 09:43:10', '2020-08-17 09:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-08-17 09:43:10', '2020-08-17 09:43:10', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 6, '2020-08-17 09:43:10', '2020-08-17 10:16:05', 'voyager.media.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-08-17 09:43:10', '2020-08-17 10:16:10', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 7, '2020-08-17 09:43:10', '2020-08-17 10:15:59', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-08-17 09:43:10', '2020-08-17 10:04:31', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-08-17 09:43:10', '2020-08-17 10:04:36', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-08-17 09:43:10', '2020-08-17 10:04:36', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-08-17 09:43:10', '2020-08-17 10:04:36', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 8, '2020-08-17 09:43:10', '2020-08-17 10:15:59', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-08-17 09:43:10', '2020-08-17 10:04:36', 'voyager.hooks', NULL),
(12, 1, 'Books', '', '_self', 'voyager-book', '#000000', NULL, 4, '2020-08-17 10:00:10', '2020-08-17 10:16:26', 'voyager.books.index', 'null'),
(13, 1, 'Exchanges', '', '_self', 'voyager-resize-small', '#000000', NULL, 5, '2020-08-17 10:01:08', '2020-08-17 10:21:58', 'voyager.exchanges.index', 'null'),
(14, 1, 'Users', '', '_self', 'voyager-person', '#000000', NULL, 3, '2020-08-17 10:03:25', '2020-08-17 10:16:10', 'voyager.users.index', 'null');

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
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_01_01_000000_create_pages_table', 1),
(5, '2016_01_01_000000_create_posts_table', 1),
(6, '2016_02_15_204651_create_categories_table', 1),
(7, '2016_05_19_173453_create_menu_table', 1),
(8, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(9, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(10, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(11, '2016_06_01_000004_create_oauth_clients_table', 1),
(12, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(13, '2016_10_21_190000_create_roles_table', 1),
(14, '2016_10_21_190000_create_settings_table', 1),
(15, '2016_11_30_135954_create_permission_table', 1),
(16, '2016_11_30_141208_create_permission_role_table', 1),
(17, '2016_12_26_201236_data_types__add__server_side', 1),
(18, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(19, '2017_01_14_005015_create_translations_table', 1),
(20, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(21, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(22, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(23, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(24, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(25, '2017_08_05_000000_add_group_to_settings_table', 1),
(26, '2017_11_26_013050_add_user_role_relationship', 1),
(27, '2017_11_26_015000_create_user_roles_table', 1),
(28, '2018_03_11_000000_add_user_settings', 1),
(29, '2018_03_14_000000_add_details_to_data_types_table', 1),
(30, '2018_03_16_000000_make_settings_value_nullable', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2020_06_28_064859_create_books_table', 1),
(33, '2020_07_10_031739_create_exchanges_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('71cbd40fc60339957fe176280964fcb0392bc4c58e4a8300a5b38e68a82bce1b0d6df39b5d49a2e5', 12, 1, 'MyApp', '[]', 0, '2020-06-18 02:41:03', '2020-06-18 02:41:03', '2021-06-18 08:26:03'),
('b0a672ba3b14e918b5f2000e131dbb84edd3b4883015b4780cc296dbde5e9d2bb8be50018356f3a3', 10, 1, 'MyApp', '[]', 0, '2020-06-18 02:38:45', '2020-06-18 02:38:45', '2021-06-18 08:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'hwc1s3quGY2cBGlppIZ0g7CB1xpDf4W9v2RUu2fD', NULL, 'http://localhost', 1, 0, 0, '2020-06-18 02:38:30', '2020-06-18 02:38:30'),
(2, NULL, 'Laravel Password Grant Client', 'NtgGzVpKwB2eHDT6U1pl58B1JJbuyNR8afRsHL47', 'users', 'http://localhost', 0, 1, 0, '2020-06-18 02:38:30', '2020-06-18 02:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-18 02:38:30', '2020-06-18 02:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-06-15 10:06:07', '2020-06-15 10:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(2, 'browse_bread', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(3, 'browse_database', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(4, 'browse_media', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(5, 'browse_compass', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(6, 'browse_menus', 'menus', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(7, 'read_menus', 'menus', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(8, 'edit_menus', 'menus', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(9, 'add_menus', 'menus', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(10, 'delete_menus', 'menus', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(11, 'browse_roles', 'roles', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(12, 'read_roles', 'roles', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(13, 'edit_roles', 'roles', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(14, 'add_roles', 'roles', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(15, 'delete_roles', 'roles', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(21, 'browse_settings', 'settings', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(22, 'read_settings', 'settings', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(23, 'edit_settings', 'settings', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(24, 'add_settings', 'settings', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(25, 'delete_settings', 'settings', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(26, 'browse_hooks', NULL, '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(27, 'browse_books', 'books', '2020-08-17 10:00:10', '2020-08-17 10:00:10'),
(28, 'read_books', 'books', '2020-08-17 10:00:10', '2020-08-17 10:00:10'),
(29, 'edit_books', 'books', '2020-08-17 10:00:10', '2020-08-17 10:00:10'),
(30, 'add_books', 'books', '2020-08-17 10:00:10', '2020-08-17 10:00:10'),
(31, 'delete_books', 'books', '2020-08-17 10:00:10', '2020-08-17 10:00:10'),
(32, 'browse_exchanges', 'exchanges', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(33, 'read_exchanges', 'exchanges', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(34, 'edit_exchanges', 'exchanges', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(35, 'add_exchanges', 'exchanges', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(36, 'delete_exchanges', 'exchanges', '2020-08-17 10:01:08', '2020-08-17 10:01:08'),
(37, 'browse_users', 'users', '2020-08-17 10:03:25', '2020-08-17 10:03:25'),
(38, 'read_users', 'users', '2020-08-17 10:03:25', '2020-08-17 10:03:25'),
(39, 'edit_users', 'users', '2020-08-17 10:03:25', '2020-08-17 10:03:25'),
(40, 'add_users', 'users', '2020-08-17 10:03:25', '2020-08-17 10:03:25'),
(41, 'delete_users', 'users', '2020-08-17 10:03:25', '2020-08-17 10:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-15 10:06:07', '2020-06-15 10:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-08-17 09:43:10', '2020-08-17 09:43:10'),
(2, 'user', 'Normal User', '2020-08-17 09:43:10', '2020-08-17 09:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-06-15 10:06:07', '2020-06-15 10:06:07'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-06-15 10:06:07', '2020-06-15 10:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `settings`, `created_at`, `updated_at`, `api_token`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$KkQcAfQd1u/Etc5DOQ5Hhuo/YzhePxdIEHpurvDHClR0Y3N7CnwMW', '9849940443', 'Admin City', NULL, NULL, '2020-08-17 09:36:17', '2020-08-17 09:36:17', NULL),
(2, 2, 'Biaksh Bhattarai', 'bhattaraibikash55@gmail.com', 'users/default.png', NULL, '$2y$10$.51X3hcEIa3DlIOKHDKtdOn8ln4QNc5U3YMrHppmiebTsE8XhREmO', '9849940440', 'Koteshwor, Ktm', NULL, NULL, '2020-08-12 02:13:41', '2020-08-18 01:30:23', NULL),
(5, 2, 'Anish Dhakal', 'anish@gmail.com', 'users/default.png', NULL, '$2y$10$nUe3yLhMbC415Wg8bZGF2uftcBOY3NgLvEeb6ffLWezKB070yAo.K', '9845854545', 'Balaju, Ktm', NULL, NULL, '2020-08-17 11:09:02', '2020-08-17 11:09:02', NULL),
(6, 2, 'Pasang Sherpa', 'pasang@gmail.com', 'users/default.png', NULL, '$2y$10$7lXnxKtheukFnxchgexGj.MRnnBiMeptkjx7sbaW3Y9h46eR7oaw.', '98545458521', 'Jorpati, Ktm', NULL, NULL, '2020-08-17 11:10:40', '2020-08-17 11:10:40', NULL),
(7, 2, 'Binod Rana', 'binod@gmail.com', 'users/default.png', NULL, '$2y$10$BS9P4OHwIfxNAhklO70lQ.uV40zYmTga3x/htodfUt4A0H.fM6JnG', '9854541256', 'Dillibazar, Ktm', NULL, NULL, '2020-08-17 11:11:36', '2020-08-17 11:11:36', NULL),
(8, 2, 'Saroj Pathak', 'saroj@gmail.com', 'users/default.png', NULL, '$2y$10$I7h7.XkYdc6GxbFR0I4XJ.qgFZEHglRCO4xoM/YOfQmCmMR83/P8y', '98545458666', 'Dhading', NULL, NULL, '2020-08-17 11:12:38', '2020-08-17 11:12:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `exchanges`
--
ALTER TABLE `exchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exchanges`
--
ALTER TABLE `exchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
