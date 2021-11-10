-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 09:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_startup-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `nickname`) VALUES
(1, 'keshavarzi', 'کشاورزی و دامپروری'),
(2, 'car', 'خودرو'),
(3, 'wahter', 'آب'),
(4, 'blockchain', 'اینترنت اشیا');

-- --------------------------------------------------------

--
-- Table structure for table `affordable_questions`
--

CREATE TABLE `affordable_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `after_sale_services`
--

CREATE TABLE `after_sale_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `after_sale_services`
--

INSERT INTO `after_sale_services` (`id`, `description`, `number`, `unit_cost`, `total_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'بببببب', 3333333, 3333333, 33333, 2, 2, '2021-10-19 14:49:47', '2021-10-25 21:08:20'),
(2, 'سیبش', 3342, 324, 324, 2, 2, '2021-10-24 21:12:12', NULL),
(3, 'سیبلا', 4235, 6324, 56234, 2, 2, '2021-10-24 21:12:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alternative_products`
--

CREATE TABLE `alternative_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternative_products`
--

INSERT INTO `alternative_products` (`id`, `product_title`, `description`, `team_id`, `created_at`, `updated_at`) VALUES
(7, 'یییییییی', 'بلیبسل', 2, '2021-11-08 20:39:04', '2021-11-09 04:03:54'),
(8, 'سیبلیسل', 'یسلیبل', 2, '2021-11-08 20:39:04', NULL),
(9, 'سیبلیبسلسییبش', 'سشیلبیلس', 2, '2021-11-08 20:39:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `description`, `area`, `price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سسسس', 23, 42, 2, '2021-10-25 09:13:11', '2021-10-25 20:13:12'),
(2, 'سشیبشسب', 324, 234, 2, '2021-10-25 09:13:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `annual_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `description`, `annual_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ییییی', 4444, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:57:21'),
(2, 'شسیبسشی', 324234, 2, 2, '2021-10-24 20:34:33', NULL),
(3, 'سشیبسشیب', 32423, 2, 2, '2021-10-24 20:35:23', NULL),
(4, 'شسیبسشیب', 4234234, 2, 2, '2021-10-24 20:35:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_canvases`
--

CREATE TABLE `business_canvases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key_partners` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_activities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_sources` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_structure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggested_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `communication_with_clients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `distribution_channels` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `income_flow` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_managers`
--

CREATE TABLE `business_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_managers`
--

INSERT INTO `business_managers` (`id`, `owner`, `phone_number`, `email`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'a@f.f', 2, '2021-10-16 09:30:32', '2021-10-17 07:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `business_questions`
--

CREATE TABLE `business_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `growth_center` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `important_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_questions`
--

INSERT INTO `business_questions` (`id`, `growth_center`, `start_date`, `location_address`, `phone_number`, `site_address`, `important_note`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'e', '2021-10-06', 'b', '3', 'a', 'ش', 2, '2021-10-16 09:30:32', '2021-10-17 07:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `capacities`
--

CREATE TABLE `capacities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal_capacity` int(11) NOT NULL,
  `unit` bigint(20) UNSIGNED NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `total_production` int(11) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capacities`
--

INSERT INTO `capacities` (`id`, `nominal_capacity`, `unit`, `percent`, `total_production`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 123213, 3, 60, 100, 2, 2, '2021-10-19 14:49:46', '2021-10-23 08:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `commercialization_questions`
--

CREATE TABLE `commercialization_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competitive_position_questions`
--

CREATE TABLE `competitive_position_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consumer_items`
--

CREATE TABLE `consumer_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `year` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consumer_items`
--

INSERT INTO `consumer_items` (`id`, `description`, `number`, `unit_cost`, `total_cost`, `team_id`, `year`, `created_at`, `updated_at`) VALUES
(1, 'سشیبسیشب', 234234, 234234, 234, 2, 2, '2021-10-19 14:49:47', NULL),
(2, 'سسسسسسسسسس', 44444, 44444, 444, 2, 2, '2021-10-24 21:07:24', '2021-10-25 21:05:52'),
(3, 'یسشبسیب', 2342, 4124, 1234, 2, 2, '2021-10-24 21:07:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `count_days`
--

CREATE TABLE `count_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_1` bigint(20) NOT NULL,
  `question_2` bigint(20) NOT NULL,
  `question_3` bigint(20) NOT NULL,
  `question_4` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `count_days`
--

INSERT INTO `count_days` (`id`, `question_1`, `question_2`, `question_3`, `question_4`, `team_id`, `created_at`, `updated_at`) VALUES
(3, 3, 3, 3, 3, 2, '2021-10-02 09:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_commitment_questions`
--

CREATE TABLE `customer_commitment_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_recognition_questions`
--

CREATE TABLE `customer_recognition_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depreciation_rates`
--

CREATE TABLE `depreciation_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_1` tinyint(4) NOT NULL,
  `question_2` tinyint(4) NOT NULL,
  `question_3` tinyint(4) NOT NULL,
  `question_4` tinyint(4) NOT NULL,
  `question_5` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depreciation_rates`
--

INSERT INTO `depreciation_rates` (`id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `team_id`, `created_at`, `updated_at`) VALUES
(3, 4, 4, 4, 4, 4, 2, '2021-10-02 09:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `development_costs`
--

CREATE TABLE `development_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `development_costs`
--

INSERT INTO `development_costs` (`id`, `description`, `total_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'شششش', 324, 2, 2, '2021-10-19 14:49:46', '2021-10-21 17:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name`, `nickname`) VALUES
(1, 'Diploma', 'دیپلم'),
(2, 'Associate degree', 'فوق دیپلم'),
(3, 'Bachelor’s degree', 'لیسانس'),
(4, 'Master’s degree', 'فوق لیسانس'),
(5, 'Doctoral degree', 'دکتری'),
(6, 'Post doctoral degree', 'فوق دکتری');

-- --------------------------------------------------------

--
-- Table structure for table `employee_responsibility`
--

CREATE TABLE `employee_responsibility` (
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `responsibility_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `energy_consumptions`
--

CREATE TABLE `energy_consumptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` bigint(20) UNSIGNED NOT NULL,
  `annual_consumption` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `annual_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `energy_consumptions`
--

INSERT INTO `energy_consumptions` (`id`, `description`, `unit`, `annual_consumption`, `unit_cost`, `annual_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ننننننننن', 2, 234234, 3242342, 3423, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:51:16'),
(2, 'یسشبسیب', 2, 23423, 234234, 234, 2, 2, '2021-10-24 20:01:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `environmental_effects`
--

CREATE TABLE `environmental_effects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `economical` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `political` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmental` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `environmental_effects`
--

INSERT INTO `environmental_effects` (`id`, `economical`, `social`, `political`, `environmental`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ییییییییییییی', 'ییییییییییییی', 'یییییییییییییی', 'یییییییی', 2, '2021-11-06 15:19:39', '2021-11-08 17:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_and_machineries`
--

CREATE TABLE `equipment_and_machineries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_and_machineries`
--

INSERT INTO `equipment_and_machineries` (`id`, `description`, `count`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سیبشسیب', 3, 2234, 243, 2, '2021-10-25 09:13:31', NULL),
(2, '342314', 2, 234, 234, 2, '2021-10-25 09:13:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `description`, `count`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ضضضضضض', 213, 213, 231, 2, '2021-10-25 09:30:14', NULL),
(2, 'ثثثثثث', 231, 123, 4231, 2, '2021-10-25 09:30:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiscals`
--

CREATE TABLE `fiscals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dollar` bigint(20) NOT NULL,
  `inflation` bigint(20) NOT NULL,
  `loan` bigint(20) NOT NULL,
  `profit` bigint(20) NOT NULL,
  `reimbursement` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fiscals`
--

INSERT INTO `fiscals` (`id`, `dollar`, `inflation`, `loan`, `profit`, `reimbursement`, `team_id`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 2, 2, 2, 2, '2021-10-02 09:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `functional_management_questions`
--

CREATE TABLE `functional_management_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `year` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `description`, `percent`, `total_cost`, `team_id`, `year`, `created_at`, `updated_at`) VALUES
(1, '2', 100, 234, 2, 2, '2021-10-19 14:49:47', NULL),
(2, '2', 100, 213, 2, 2, '2021-10-24 20:41:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intellectual_property_management_questions`
--

CREATE TABLE `intellectual_property_management_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `key_employees`
--

CREATE TABLE `key_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `education_id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` bigint(20) NOT NULL,
  `resume` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `description`, `area`, `price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ششش', 23112, 312, 2, '2021-10-05 09:08:08', '2021-10-05 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `liquidity_and_access_to_capital_questions`
--

CREATE TABLE `liquidity_and_access_to_capital_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managerials`
--

CREATE TABLE `managerials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_competencies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `targets` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem_statement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturing_questions`
--

CREATE TABLE `manufacturing_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `q11` tinyint(1) NOT NULL DEFAULT 0,
  `q12` tinyint(1) NOT NULL DEFAULT 0,
  `q13` tinyint(1) NOT NULL DEFAULT 0,
  `q14` tinyint(1) NOT NULL DEFAULT 0,
  `q15` tinyint(1) NOT NULL DEFAULT 0,
  `q16` tinyint(1) NOT NULL DEFAULT 0,
  `q17` tinyint(1) NOT NULL DEFAULT 0,
  `q18` tinyint(1) NOT NULL DEFAULT 0,
  `q19` tinyint(1) NOT NULL DEFAULT 0,
  `q20` tinyint(1) NOT NULL DEFAULT 0,
  `q21` tinyint(1) NOT NULL DEFAULT 0,
  `q22` tinyint(1) NOT NULL DEFAULT 0,
  `q23` tinyint(1) NOT NULL DEFAULT 0,
  `q24` tinyint(1) NOT NULL DEFAULT 0,
  `q25` tinyint(1) NOT NULL DEFAULT 0,
  `q26` tinyint(1) NOT NULL DEFAULT 0,
  `q27` tinyint(1) NOT NULL DEFAULT 0,
  `q28` tinyint(1) NOT NULL DEFAULT 0,
  `q29` tinyint(1) NOT NULL DEFAULT 0,
  `q30` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `man_powers`
--

CREATE TABLE `man_powers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `total_rights` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `man_powers`
--

INSERT INTO `man_powers` (`id`, `description`, `number`, `salary`, `total_rights`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ییییی', 23423, 423423, 4234, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:30:39'),
(2, 'سشبسیب', 23214, 213123, 213123, 2, 2, '2021-10-24 07:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_competitive_advantages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_analysis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_pricing_strategy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_marketing_strategy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `market_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forecast_the_future_of_the_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `product_introduction`, `product_features`, `product_competitive_advantages`, `position_analysis`, `product_pricing_strategy`, `product_marketing_strategy`, `market_status`, `target_market`, `forecast_the_future_of_the_market`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سیب', 'شسیبسشی', 'بسشیب', 'سیشب', 'بسشی', 'شسیب', 'شسیب', 'شیسب', 'سشیب', 2, '2021-11-06 15:19:38', '2021-11-08 13:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `market_questions`
--

CREATE TABLE `market_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_share_question`
--

CREATE TABLE `member_share_question` (
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_share_question`
--

INSERT INTO `member_share_question` (`member_id`, `question_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 1),
(2, 2),
(2, 5),
(2, 7),
(2, 8),
(2, 9),
(3, 1),
(3, 3),
(3, 7),
(3, 9);

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
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_08_12_093621_create_activities_table', 1),
(17, '2021_08_12_094114_create_responsibilities_table', 1),
(18, '2021_08_12_094310_create_product_types_table', 1),
(19, '2021_08_12_095919_create_teams_table', 1),
(20, '2021_08_12_102117_create_users_table', 1),
(21, '2021_08_12_102756_create_products_table', 1),
(22, '2021_08_12_104112_create_education_table', 1),
(23, '2021_08_12_104113_create_team_members_table', 1),
(24, '2021_08_15_110551_create_responsibility_member_table', 1),
(25, '2021_08_25_130412_create_key_employees_table', 1),
(26, '2021_08_25_134951_create_employee_responsibility_table', 1),
(27, '2021_09_18_200648_add_percent_column_to_team_members_table', 1),
(28, '2021_09_18_201925_create_previous_investors_table', 1),
(29, '2021_09_19_101431_create_share_questions_table', 1),
(30, '2021_09_19_102708_create_share_variables_table', 1),
(31, '2021_09_19_103553_create_member_share_question_table', 1),
(32, '2021_09_22_131205_create_plan_years_table', 1),
(33, '2021_09_22_140146_create_fiscals_table', 1),
(34, '2021_09_22_140229_create_count_days_table', 1),
(35, '2021_09_22_140744_create_depreciation_rates_table', 1),
(36, '2021_09_22_143101_create_lands_table', 1),
(37, '2021_09_22_143429_create_buildings_table', 1),
(38, '2021_09_22_143543_create_equipment_and_machineries_table', 1),
(39, '2021_09_22_144111_create_office_equipment_and_supplies_table', 1),
(40, '2021_09_22_144353_create_facilities_table', 1),
(41, '2021_09_22_144747_create_transportations_table', 1),
(42, '2021_09_22_144948_create_pre_operating_costs_table', 1),
(43, '2021_09_25_102113_create_types_table', 1),
(44, '2021_09_25_102121_create_type_of_locations_table', 1),
(46, '2021_09_29_205535_add_team_id_to_previous_investors_table', 2),
(54, '2021_09_29_100543_create_rds_table', 3),
(357, '2021_09_29_094611_create_development_costs_table', 4),
(358, '2021_09_29_095115_create_capacities_table', 4),
(359, '2021_09_29_095421_create_raw_materials_table', 4),
(360, '2021_09_29_095520_create_man_powers_table', 4),
(361, '2021_09_29_095649_create_rents_table', 4),
(362, '2021_09_29_095731_create_energy_consumptions_table', 4),
(363, '2021_09_29_100425_create_businesses_table', 4),
(364, '2021_09_29_100648_create_insurances_table', 4),
(365, '2021_09_29_100711_create_repairs_table', 4),
(366, '2021_09_29_100911_create_transportation_costs_table', 4),
(367, '2021_09_29_100953_create_warranties_table', 4),
(368, '2021_09_29_101038_create_consumer_items_table', 4),
(369, '2021_09_29_101247_create_after_sale_services_table', 4),
(370, '2021_09_29_101527_create_other_information_table', 4),
(371, '2021_09_30_131945_create_previous_investors_table', 4),
(372, '2021_10_03_191335_create_valuation_costs_table', 4),
(373, '2021_10_03_191910_create_valuation_tenements_table', 4),
(374, '2021_10_03_192159_create_valuation_machineries_table', 4),
(375, '2021_10_03_192334_create_valuation_additional_questions_table', 4),
(376, '2021_10_03_194826_create_valuation_other_assets_table', 4),
(377, '2021_10_03_194904_create_valuation_office_supplies_table', 4),
(378, '2021_10_07_100756_create_technology_questions_table', 4),
(379, '2021_10_07_100906_create_manufacturing_questions_table', 4),
(380, '2021_10_07_100939_create_market_questions_table', 4),
(381, '2021_10_07_101034_create_commercialization_questions_table', 4),
(382, '2021_10_07_101109_create_public_management_questions_table', 4),
(383, '2021_10_07_101138_create_functional_management_questions_table', 4),
(384, '2021_10_07_101313_create_sale_and_technical_support_questions_table', 4),
(385, '2021_10_07_101416_create_liquidity_and_access_to_capital_questions_table', 4),
(386, '2021_10_07_101453_create_competitive_position_questions_table', 4),
(387, '2021_10_07_101552_create_customer_recognition_questions_table', 4),
(388, '2021_10_07_101635_create_customer_commitment_questions_table', 4),
(389, '2021_10_07_101812_create_affordable_questions_table', 4),
(390, '2021_10_07_101853_create_intellectual_property_management_questions_table', 4),
(391, '2021_10_07_102000_create_sale_forecast_questions_table', 4),
(392, '2021_10_07_102030_create_uncertainty_prediction_questions_table', 4),
(393, '2021_10_07_102102_create_supply_chain_questions_table', 4),
(394, '2021_10_07_102146_create_rule_questions_table', 4),
(395, '2021_10_09_130051_create_rds_table', 4),
(396, '2021_10_10_123917_create_registered_teams_table', 4),
(397, '2021_10_10_124056_create_business_questions_table', 4),
(398, '2021_10_11_101715_create_business_canvases_table', 4),
(399, '2021_10_12_113837_create_business_managers_table', 4),
(400, '2021_10_13_112120_create_preliminary_justification_plans_table', 4),
(402, '2021_10_18_095440_create_unit_of_measurements_table', 5),
(403, '2021_10_18_095810_add_unit_columns_to_tables', 6),
(404, '2021_10_19_134648_add_year_to_rds_table', 7),
(525, '2021_10_18_100032_create_managerials_table', 8),
(526, '2021_10_18_100148_create_technicals_table', 8),
(527, '2021_10_18_100216_create_markets_table', 8),
(528, '2021_10_18_100401_create_obtained_certificates_table', 8),
(529, '2021_10_24_210656_create_product_customers_table', 8),
(530, '2021_10_24_210924_create_producers_table', 8),
(531, '2021_10_24_211000_create_suppliers_table', 8),
(532, '2021_10_24_211319_create_environmental_effects_table', 8),
(533, '2021_10_24_211456_create_product_supply_and_demands_table', 8),
(534, '2021_10_24_211621_create_raw_material_suppliers_table', 8),
(535, '2021_10_24_211919_create_product_competitors_table', 8),
(536, '2021_10_24_211959_create_strengths_table', 8),
(537, '2021_10_24_212044_create_weak_points_table', 8),
(538, '2021_10_24_212127_create_opportunity_points_table', 8),
(539, '2021_10_24_212150_create_threats_table', 8),
(540, '2021_10_24_213226_create_retails_table', 8),
(541, '2021_10_24_222257_create_required_certificates_table', 8),
(542, '2021_11_06_113442_create_plan_implementations_table', 8),
(543, '2021_11_06_180356_create_alternative_products_table', 9),
(544, '2021_11_02_111846_create_participation_pre_investors_table', 10),
(545, '2021_11_02_112056_create_participation_new_investors_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `obtained_certificates`
--

CREATE TABLE `obtained_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acquisition_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_equipment_and_supplies`
--

CREATE TABLE `office_equipment_and_supplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_equipment_and_supplies`
--

INSERT INTO `office_equipment_and_supplies` (`id`, `description`, `count`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'لللللل', 34, 234, 234, 2, '2021-10-25 09:16:37', NULL),
(2, 'ااااا', 234, 234, 23423, 2, '2021-10-25 09:16:37', NULL),
(3, 'تتتتتت', 23, 123, 4124, 2, '2021-10-25 09:16:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opportunity_points`
--

CREATE TABLE `opportunity_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opportunity_points`
--

INSERT INTO `opportunity_points` (`id`, `description`, `weight`, `score`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'شیسبسشبی', 'ییییییی', 'سشیبسشیب', 2, '2021-11-06 15:19:39', '2021-11-09 04:07:40'),
(2, 'سیشبسیبسیشب', 'بببل', 'لللللللل', 2, '2021-11-08 17:33:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE `other_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_price` bigint(20) NOT NULL,
  `tax_rate` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_information`
--

INSERT INTO `other_information` (`id`, `sale_price`, `tax_rate`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 111, 234234, 2, 2, '2021-10-19 14:49:47', '2021-10-23 08:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `participation_new_investors`
--

CREATE TABLE `participation_new_investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment` int(11) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participation_pre_investors`
--

CREATE TABLE `participation_pre_investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `investor` bigint(20) UNSIGNED NOT NULL,
  `investment` int(11) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('a@a.com', '$2y$10$1vgQnqjsey8pu8I2Dc/.Z.IUBUbZs8l0eN5IGc61nrRSskevP0wx.', '2021-09-28 07:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `plan_implementations`
--

CREATE TABLE `plan_implementations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_of_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_of_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan_years`
--

CREATE TABLE `plan_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_of_plan_year` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_years`
--

INSERT INTO `plan_years` (`id`, `number_of_plan_year`, `team_id`, `created_at`, `updated_at`) VALUES
(3, 5, 2, '2021-10-02 09:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preliminary_justification_plans`
--

CREATE TABLE `preliminary_justification_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitive_advantage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_market` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `required_budget` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_life` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_development` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_knowledge` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preliminary_justification_plans`
--

INSERT INTO `preliminary_justification_plans` (`id`, `requirement`, `solution`, `competitors`, `competitive_advantage`, `target_market`, `technology_level`, `required_budget`, `income`, `technology_life`, `plan_development`, `technical_knowledge`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'س', 'ی', 'ب', 'ظ', 'ط', 'ز', 'ذ', 'ض', 'ص', 'ث', 'ق', 2, '2021-10-16 09:30:33', '2021-10-17 07:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `previous_investors`
--

CREATE TABLE `previous_investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_operating_costs`
--

CREATE TABLE `pre_operating_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_operating_costs`
--

INSERT INTO `pre_operating_costs` (`id`, `description`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'گگگگگ', 23, 2, '2021-10-25 09:31:43', NULL),
(2, 'ککککککککککککک', 21321, 2, '2021-10-25 09:31:43', NULL),
(3, 'حححححححححححح', 3213, 2, '2021-10-25 09:31:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographical_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `geographical_region`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سسسسسسسس', 'سسسسسسسسسسسسس', 2, '2021-11-06 15:19:39', '2021-11-09 04:24:50'),
(2, 'شیسب', 'شسیب', 2, '2021-11-08 17:09:54', NULL),
(3, 'سشیب', 'شسیب', 2, '2021-11-08 17:10:02', NULL),
(4, 'ریبل', 'یلالبییبل', 2, '2021-11-08 17:10:03', NULL),
(5, 'یشسبت', 'البیییییی', 2, '2021-11-08 17:12:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `team_id`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'kala', 2, 1, '2021-09-28 07:07:01', NULL),
(2, 'khadamat', 2, 1, '2021-09-28 07:07:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_competitors`
--

CREATE TABLE `product_competitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographical_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `market_share` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitive_feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weakness` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_competitors`
--

INSERT INTO `product_competitors` (`id`, `name`, `geographical_region`, `market_share`, `competitive_feature`, `weakness`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ییییی', 'بسیشب', 'یییییی', 'بسشیب', 'یییییی', 2, '2021-11-06 15:19:39', '2021-11-09 04:10:26'),
(2, 'شیسبشسیب', 'شسیب', 'سشیب', 'شسیب', 'شسیب', 2, '2021-11-08 17:24:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_customers`
--

CREATE TABLE `product_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_group_customers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_group_customers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_group_customers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_group_customers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_customers`
--

INSERT INTO `product_customers` (`id`, `customer_features`, `first_group_customers`, `second_group_customers`, `third_group_customers`, `fourth_group_customers`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'شششششششششش', 'بسیشب', 'سشیبسی', 'شبسشیب', 'سشیب', 2, '2021-11-06 15:19:39', '2021-11-09 04:14:21'),
(2, 'شیسب', 'شسیب', 'شسیب', 'شسیب', 'سشیب', 2, '2021-11-08 17:04:47', NULL),
(3, 'سشیب', 'شسیب', 'سشیب', 'الی', 'سیب', 2, '2021-11-08 17:04:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_supply_and_demands`
--

CREATE TABLE `product_supply_and_demands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `general_request` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domestic_production` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_supply_and_demands`
--

INSERT INTO `product_supply_and_demands` (`id`, `year`, `general_request`, `domestic_production`, `importation`, `unit_id`, `team_id`, `created_at`, `updated_at`) VALUES
(1, '22222', 'صیب', 'اتذ', 'یییییییی', 2, 2, '2021-11-06 15:19:39', '2021-11-09 04:32:04'),
(2, '324', 'سیشبشیس', 'بسشیب', 'شسیب', 4, 2, '2021-11-08 16:43:36', '2021-11-09 04:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `nickname`) VALUES
(1, 'commodity', 'کالا'),
(2, 'Services', 'خدمات');

-- --------------------------------------------------------

--
-- Table structure for table `public_management_questions`
--

CREATE TABLE `public_management_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumption` int(11) NOT NULL,
  `unit` bigint(20) UNSIGNED NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`id`, `description`, `consumption`, `unit`, `unit_price`, `total_price`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ثثثثثثثث', 100, 2, 23423, 324, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:19:09'),
(2, 'یبسلیسبلسیبلتصث', 100, 2, 23423, 324, 2, 2, '2021-10-19 14:49:47', NULL),
(3, 'یسشبشسیب', 32, 3, 213421, 312213, 2, 2, '2021-10-24 06:03:18', NULL),
(4, 'بسیلبیسات', 35465768, 2, 213421, 32423, 2, 2, '2021-10-24 06:04:35', NULL),
(5, 'سیبشسی', 42323, 2, 234234, 234, 2, 2, '2021-10-24 20:00:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `raw_material_suppliers`
--

CREATE TABLE `raw_material_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographical_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raw_material_suppliers`
--

INSERT INTO `raw_material_suppliers` (`id`, `name`, `geographical_region`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ششششش', 'شششش', 2, '2021-11-06 15:19:39', '2021-11-09 04:24:42'),
(2, 'سشب', 'بسیبش', 2, '2021-11-08 17:07:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rds`
--

CREATE TABLE `rds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `annual_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rds`
--

INSERT INTO `rds` (`id`, `description`, `annual_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'صبشیب', 3333333, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:54:36'),
(2, 'شیسبیسب', 234423, 2, 2, '2021-10-24 20:26:05', NULL),
(3, 'سبیلیبسل', 213123, 2, 2, '2021-10-24 20:27:19', NULL),
(4, 'سشیبشسیب', 234234, 2, 2, '2021-10-24 20:28:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registered_teams`
--

CREATE TABLE `registered_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` date NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_teams`
--

INSERT INTO `registered_teams` (`id`, `registration_number`, `registration_date`, `team_id`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-10-16', 2, '2021-10-16 09:30:32', '2021-10-17 07:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `monthly_rent` int(11) NOT NULL,
  `total_rent` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `description`, `area`, `monthly_rent`, `total_rent`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سزبریشب', 222, 324234, 23423, 2, 2, '2021-10-19 14:49:47', '2021-10-25 20:35:04'),
(2, 'یسشبسشیب', 324, 234, 324, 2, 2, '2021-10-24 11:23:25', NULL),
(3, 'سلبل', 3242, 34234, 344, 2, 2, '2021-10-24 11:23:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `description`, `percent`, `total_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, '1', 100, 324234, 2, 2, '2021-10-19 14:49:47', NULL),
(2, '1', 23, 213, 2, 2, '2021-10-24 20:47:01', NULL),
(3, '2', 11, 124, 2, 2, '2021-10-24 20:47:01', NULL),
(4, '1', 34, 235, 2, 2, '2021-10-24 20:47:37', NULL),
(5, '2', 56, 1234, 2, 2, '2021-10-24 20:47:37', NULL),
(6, '2', 46, 2134, 2, 2, '2021-10-24 20:53:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `required_certificates`
--

CREATE TABLE `required_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `received` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`id`, `name`, `nickname`) VALUES
(1, 'Technical Assistant', 'مسئول فنی'),
(2, 'Responsible for the market', 'مسئول بازار'),
(3, 'Consultant', 'مشاور');

-- --------------------------------------------------------

--
-- Table structure for table `responsibility_member`
--

CREATE TABLE `responsibility_member` (
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `responsibility_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsibility_member`
--

INSERT INTO `responsibility_member` (`member_id`, `responsibility_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `retails`
--

CREATE TABLE `retails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographical_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retails`
--

INSERT INTO `retails` (`id`, `name`, `geographical_region`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'بببببب', 'بببببببببب', 2, '2021-11-06 15:19:39', '2021-11-09 04:25:07'),
(2, 'زرظدئذ', 'رررررررررر', 2, '2021-11-08 17:14:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rule_questions`
--

CREATE TABLE `rule_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_and_technical_support_questions`
--

CREATE TABLE `sale_and_technical_support_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_forecast_questions`
--

CREATE TABLE `sale_forecast_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `share_questions`
--

CREATE TABLE `share_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `share_questions`
--

INSERT INTO `share_questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'سوال 1', NULL, NULL),
(2, 'سوال 2', NULL, NULL),
(3, 'سوال 3', NULL, NULL),
(4, 'سوال 4', NULL, NULL),
(5, 'سوال 5', NULL, NULL),
(6, 'سوال 6', NULL, NULL),
(7, 'سوال 7', NULL, NULL),
(8, 'سوال 8', NULL, NULL),
(9, 'سوال 9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `share_variables`
--

CREATE TABLE `share_variables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idea` bigint(20) NOT NULL,
  `finance` bigint(20) NOT NULL,
  `experience` bigint(20) NOT NULL,
  `risk` bigint(20) NOT NULL,
  `technology` bigint(20) NOT NULL,
  `investment` bigint(20) NOT NULL,
  `management` bigint(20) NOT NULL,
  `sale` bigint(20) NOT NULL,
  `full_time` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `share_variables`
--

INSERT INTO `share_variables` (`id`, `idea`, `finance`, `experience`, `risk`, `technology`, `investment`, `management`, `sale`, `full_time`, `team_id`, `created_at`, `updated_at`) VALUES
(5, 20, 20, 20, 20, 20, 0, 0, 0, 0, 2, '2021-09-30 16:06:14', '2021-09-30 16:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `strengths`
--

CREATE TABLE `strengths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strengths`
--

INSERT INTO `strengths` (`id`, `description`, `weight`, `score`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'یییییییی', 'یییی', 'ییییی', 2, '2021-11-06 15:19:39', '2021-11-09 04:34:29'),
(2, 'شیسبشسیب', 'شسیب', 'سشیب', 2, '2021-11-08 17:26:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographical_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `geographical_region`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'یییییییی', 'ییییییی', 2, '2021-11-06 15:19:39', '2021-11-09 04:24:59'),
(2, 'رزذذذذ', 'ذذذذذذ', 2, '2021-11-08 17:12:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supply_chain_questions`
--

CREATE TABLE `supply_chain_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `project_name`, `status`, `activity_id`, `email`, `address`, `phone_number`, `landline`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'sadasd', 0, 2, 'startup@gmail.com', NULL, '09019585040', NULL, NULL, NULL),
(2, 'aaaaa', 'Amlak', 1, 3, 'amlak@gmail.com', NULL, '09151055279', NULL, '2021-09-28 07:07:01', '2021-09-28 07:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `education_id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` bigint(20) NOT NULL,
  `resume` tinyint(4) NOT NULL,
  `investment` bigint(20) NOT NULL,
  `percent` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `fname`, `lname`, `team_id`, `education_id`, `major`, `age`, `resume`, `investment`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'احسان', 'روزبخش', 2, 3, 'کامپیوتر', 1377, 15, 2000000, 50, '2021-09-28 07:07:01', '2021-09-29 05:51:25'),
(2, 'علی', 'اکبری', 2, 1, 'شسیب', 1394, 15, 214253, 50, '2021-09-28 08:33:12', '2021-11-09 08:48:58'),
(3, 'رضا', 'رضایی', 2, 2, 'سیبلیسبل', 1397, 16, 324324, 0, '2021-09-28 08:33:24', '2021-11-09 08:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `technicals`
--

CREATE TABLE `technicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_specifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientific_principles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_features_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technology_questions`
--

CREATE TABLE `technology_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `q11` tinyint(1) NOT NULL DEFAULT 0,
  `q12` tinyint(1) NOT NULL DEFAULT 0,
  `q13` tinyint(1) NOT NULL DEFAULT 0,
  `q14` tinyint(1) NOT NULL DEFAULT 0,
  `q15` tinyint(1) NOT NULL DEFAULT 0,
  `q16` tinyint(1) NOT NULL DEFAULT 0,
  `q17` tinyint(1) NOT NULL DEFAULT 0,
  `q18` tinyint(1) NOT NULL DEFAULT 0,
  `q19` tinyint(1) NOT NULL DEFAULT 0,
  `q20` tinyint(1) NOT NULL DEFAULT 0,
  `q21` tinyint(1) NOT NULL DEFAULT 0,
  `q22` tinyint(1) NOT NULL DEFAULT 0,
  `q23` tinyint(1) NOT NULL DEFAULT 0,
  `q24` tinyint(1) NOT NULL DEFAULT 0,
  `q25` tinyint(1) NOT NULL DEFAULT 0,
  `q26` tinyint(1) NOT NULL DEFAULT 0,
  `q27` tinyint(1) NOT NULL DEFAULT 0,
  `q28` tinyint(1) NOT NULL DEFAULT 0,
  `q29` tinyint(1) NOT NULL DEFAULT 0,
  `q30` tinyint(1) NOT NULL DEFAULT 0,
  `q31` tinyint(1) NOT NULL DEFAULT 0,
  `q32` tinyint(1) NOT NULL DEFAULT 0,
  `q33` tinyint(1) NOT NULL DEFAULT 0,
  `q34` tinyint(1) NOT NULL DEFAULT 0,
  `q35` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threats`
--

CREATE TABLE `threats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threats`
--

INSERT INTO `threats` (`id`, `description`, `weight`, `score`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سسسسسسسس', 'یییییی', 'یییییییی', 2, '2021-11-06 15:19:39', '2021-11-09 04:37:38'),
(2, 'ببببببب', 'ببببب', 'بببببب', 2, '2021-11-08 17:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint(20) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transportations`
--

INSERT INTO `transportations` (`id`, `description`, `count`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'ذذذذذذ', 123, 412, 4213, 2, '2021-10-25 09:31:31', NULL),
(2, 'دددددددددددد', 23, 2314, 213, 2, '2021-10-25 09:31:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_costs`
--

CREATE TABLE `transportation_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transportation_costs`
--

INSERT INTO `transportation_costs` (`id`, `description`, `number`, `unit_cost`, `total_cost`, `year`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'یسشبسشیب', 111, 11111, 1111, 2, 2, '2021-10-19 14:49:47', '2021-10-25 21:00:41'),
(2, 'یسشبسشیب', 324, 234235, 234234, 2, 2, '2021-10-24 20:56:07', NULL),
(3, 'سشبسشیبسشیب', 234, 23435, 234, 2, 2, '2021-10-24 20:56:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'ساخت'),
(2, 'خرید'),
(3, 'اجاره');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_locations`
--

CREATE TABLE `type_of_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_locations`
--

INSERT INTO `type_of_locations` (`id`, `type`, `team_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2021-10-02 09:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uncertainty_prediction_questions`
--

CREATE TABLE `uncertainty_prediction_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `q1` tinyint(1) NOT NULL DEFAULT 0,
  `q2` tinyint(1) NOT NULL DEFAULT 0,
  `q3` tinyint(1) NOT NULL DEFAULT 0,
  `q4` tinyint(1) NOT NULL DEFAULT 0,
  `q5` tinyint(1) NOT NULL DEFAULT 0,
  `q6` tinyint(1) NOT NULL DEFAULT 0,
  `q7` tinyint(1) NOT NULL DEFAULT 0,
  `q8` tinyint(1) NOT NULL DEFAULT 0,
  `q9` tinyint(1) NOT NULL DEFAULT 0,
  `q10` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measurements`
--

CREATE TABLE `unit_of_measurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_of_measurements`
--

INSERT INTO `unit_of_measurements` (`id`, `name`) VALUES
(1, 'کیلوگرم'),
(2, 'گرم'),
(3, 'لیتر'),
(4, 'میلی لیتر');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `level`, `team_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ehsan', 'ehsan@admin.com', 1, NULL, NULL, '$2y$10$a/XmT.Zm7Wi5DfkrDw8BZOrTeSeygoc4xW5arHezKzFzQMMYPd8be', 'sruqiCjV1yj3gLW32w080LBdy5WpyAws8rnaMYEOWVUSyAyrhLroEwOLQfmi', '2021-08-13 02:00:44', '2021-08-13 04:26:17'),
(2, 'hasan', 'hasan@hasan.com', 0, 1, NULL, 'sEtaXHXLDti+6nqjbw7ZkksIMUhtZooBQGPRy87e958=', 'kEZH9HcUeeCM8kSBabl2Ol8a56wA3lr2FnMiwARn7Geg4FG1HaSPagCHTDaI', '2021-08-13 02:01:16', '2021-08-13 04:46:25'),
(3, 'aaa', 'a@a.a', 0, 2, NULL, '$2y$10$9lbBjyFBrAuXRTuE1BvRoOBhkZ/OZyrj8rB7x5VKHJyvcJts98TvS', NULL, '2021-09-28 07:07:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `valuation_additional_questions`
--

CREATE TABLE `valuation_additional_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_1` int(11) DEFAULT NULL,
  `question_2` int(11) NOT NULL,
  `question_3` int(11) NOT NULL,
  `question_4` int(11) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_costs`
--

CREATE TABLE `valuation_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valuation_machineries`
--

CREATE TABLE `valuation_machineries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valuation_machineries`
--

INSERT INTO `valuation_machineries` (`id`, `description`, `number`, `owner`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'یسبشیب', 234234, 1, 342342, 24234324, 2, '2021-10-30 08:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `valuation_office_supplies`
--

CREATE TABLE `valuation_office_supplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valuation_office_supplies`
--

INSERT INTO `valuation_office_supplies` (`id`, `description`, `number`, `owner`, `unit_price`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'یسشبسیب', 234234, 1, 23423, 234234, 2, '2021-10-30 08:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `valuation_other_assets`
--

CREATE TABLE `valuation_other_assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valuation_other_assets`
--

INSERT INTO `valuation_other_assets` (`id`, `description`, `owner`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'سشیبسیب', 2, 234234, 2, '2021-10-30 08:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `valuation_tenements`
--

CREATE TABLE `valuation_tenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` bigint(20) NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valuation_tenements`
--

INSERT INTO `valuation_tenements` (`id`, `description`, `area`, `owner`, `total_price`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'بیسلسیبسیب', 32423, 2, 24234324, 2, '2021-10-30 08:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `total_cost` bigint(20) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `year` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `description`, `percent`, `total_cost`, `team_id`, `year`, `created_at`, `updated_at`) VALUES
(1, 'یسشبسیب', 22, 22, 2, 2, '2021-10-19 14:49:47', '2021-10-25 21:02:57'),
(2, 'شیسب', 24, 1234, 2, 2, '2021-10-24 21:00:04', NULL),
(3, 'یسشبسیب', 35, 2323, 2, 2, '2021-10-24 21:00:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weak_points`
--

CREATE TABLE `weak_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weak_points`
--

INSERT INTO `weak_points` (`id`, `description`, `weight`, `score`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'طططططططط', 'طططططططططط', 'طططططط', 2, '2021-11-06 15:19:39', '2021-11-09 04:37:57'),
(2, 'شسیبشیسب', 'بلسبیل', 'یلیسلیبسل', 2, '2021-11-08 17:28:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affordable_questions`
--
ALTER TABLE `affordable_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affordable_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `after_sale_services`
--
ALTER TABLE `after_sale_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `after_sale_services_team_id_foreign` (`team_id`);

--
-- Indexes for table `alternative_products`
--
ALTER TABLE `alternative_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_products_team_id_foreign` (`team_id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buildings_team_id_foreign` (`team_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_team_id_foreign` (`team_id`);

--
-- Indexes for table `business_canvases`
--
ALTER TABLE `business_canvases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_canvases_team_id_foreign` (`team_id`);

--
-- Indexes for table `business_managers`
--
ALTER TABLE `business_managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_managers_owner_foreign` (`owner`),
  ADD KEY `business_managers_team_id_foreign` (`team_id`);

--
-- Indexes for table `business_questions`
--
ALTER TABLE `business_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `capacities`
--
ALTER TABLE `capacities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capacities_team_id_foreign` (`team_id`),
  ADD KEY `capacities_unit_foreign` (`unit`);

--
-- Indexes for table `commercialization_questions`
--
ALTER TABLE `commercialization_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commercialization_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `competitive_position_questions`
--
ALTER TABLE `competitive_position_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `competitive_position_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `consumer_items`
--
ALTER TABLE `consumer_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consumer_items_team_id_foreign` (`team_id`);

--
-- Indexes for table `count_days`
--
ALTER TABLE `count_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `count_days_team_id_foreign` (`team_id`);

--
-- Indexes for table `customer_commitment_questions`
--
ALTER TABLE `customer_commitment_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_commitment_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `customer_recognition_questions`
--
ALTER TABLE `customer_recognition_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_recognition_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `depreciation_rates`
--
ALTER TABLE `depreciation_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depreciation_rates_team_id_foreign` (`team_id`);

--
-- Indexes for table `development_costs`
--
ALTER TABLE `development_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `development_costs_team_id_foreign` (`team_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_responsibility`
--
ALTER TABLE `employee_responsibility`
  ADD PRIMARY KEY (`employee_id`,`responsibility_id`),
  ADD KEY `employee_responsibility_responsibility_id_foreign` (`responsibility_id`);

--
-- Indexes for table `energy_consumptions`
--
ALTER TABLE `energy_consumptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `energy_consumptions_team_id_foreign` (`team_id`),
  ADD KEY `energy_consumptions_unit_foreign` (`unit`);

--
-- Indexes for table `environmental_effects`
--
ALTER TABLE `environmental_effects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `environmental_effects_team_id_foreign` (`team_id`);

--
-- Indexes for table `equipment_and_machineries`
--
ALTER TABLE `equipment_and_machineries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_and_machineries_team_id_foreign` (`team_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_team_id_foreign` (`team_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fiscals`
--
ALTER TABLE `fiscals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fiscals_team_id_foreign` (`team_id`);

--
-- Indexes for table `functional_management_questions`
--
ALTER TABLE `functional_management_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `functional_management_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insurances_team_id_foreign` (`team_id`);

--
-- Indexes for table `intellectual_property_management_questions`
--
ALTER TABLE `intellectual_property_management_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intellectual_property_management_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `key_employees`
--
ALTER TABLE `key_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_employees_team_id_foreign` (`team_id`),
  ADD KEY `key_employees_education_id_foreign` (`education_id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lands_team_id_foreign` (`team_id`);

--
-- Indexes for table `liquidity_and_access_to_capital_questions`
--
ALTER TABLE `liquidity_and_access_to_capital_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liquidity_and_access_to_capital_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `managerials`
--
ALTER TABLE `managerials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `managerials_team_id_foreign` (`team_id`);

--
-- Indexes for table `manufacturing_questions`
--
ALTER TABLE `manufacturing_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturing_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `man_powers`
--
ALTER TABLE `man_powers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `man_powers_team_id_foreign` (`team_id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `markets_team_id_foreign` (`team_id`);

--
-- Indexes for table `market_questions`
--
ALTER TABLE `market_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `market_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `member_share_question`
--
ALTER TABLE `member_share_question`
  ADD PRIMARY KEY (`member_id`,`question_id`),
  ADD KEY `member_share_question_question_id_foreign` (`question_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obtained_certificates`
--
ALTER TABLE `obtained_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obtained_certificates_team_id_foreign` (`team_id`);

--
-- Indexes for table `office_equipment_and_supplies`
--
ALTER TABLE `office_equipment_and_supplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_equipment_and_supplies_team_id_foreign` (`team_id`);

--
-- Indexes for table `opportunity_points`
--
ALTER TABLE `opportunity_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opportunity_points_team_id_foreign` (`team_id`);

--
-- Indexes for table `other_information`
--
ALTER TABLE `other_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_information_team_id_foreign` (`team_id`);

--
-- Indexes for table `participation_new_investors`
--
ALTER TABLE `participation_new_investors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participation_new_investors_team_id_foreign` (`team_id`);

--
-- Indexes for table `participation_pre_investors`
--
ALTER TABLE `participation_pre_investors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participation_pre_investors_investor_foreign` (`investor`),
  ADD KEY `participation_pre_investors_team_id_foreign` (`team_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plan_implementations`
--
ALTER TABLE `plan_implementations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_implementations_team_id_foreign` (`team_id`);

--
-- Indexes for table `plan_years`
--
ALTER TABLE `plan_years`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_years_team_id_foreign` (`team_id`);

--
-- Indexes for table `preliminary_justification_plans`
--
ALTER TABLE `preliminary_justification_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preliminary_justification_plans_team_id_foreign` (`team_id`);

--
-- Indexes for table `previous_investors`
--
ALTER TABLE `previous_investors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `previous_investors_team_id_foreign` (`team_id`);

--
-- Indexes for table `pre_operating_costs`
--
ALTER TABLE `pre_operating_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_operating_costs_team_id_foreign` (`team_id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producers_team_id_foreign` (`team_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_team_id_foreign` (`team_id`),
  ADD KEY `products_type_id_foreign` (`type_id`);

--
-- Indexes for table `product_competitors`
--
ALTER TABLE `product_competitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_competitors_team_id_foreign` (`team_id`);

--
-- Indexes for table `product_customers`
--
ALTER TABLE `product_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_customers_team_id_foreign` (`team_id`);

--
-- Indexes for table `product_supply_and_demands`
--
ALTER TABLE `product_supply_and_demands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_supply_and_demands_unit_id_foreign` (`unit_id`),
  ADD KEY `product_supply_and_demands_team_id_foreign` (`team_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_management_questions`
--
ALTER TABLE `public_management_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_management_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `raw_materials_team_id_foreign` (`team_id`),
  ADD KEY `raw_materials_unit_foreign` (`unit`);

--
-- Indexes for table `raw_material_suppliers`
--
ALTER TABLE `raw_material_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `raw_material_suppliers_team_id_foreign` (`team_id`);

--
-- Indexes for table `rds`
--
ALTER TABLE `rds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rds_team_id_foreign` (`team_id`);

--
-- Indexes for table `registered_teams`
--
ALTER TABLE `registered_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_teams_team_id_foreign` (`team_id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rents_team_id_foreign` (`team_id`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repairs_team_id_foreign` (`team_id`);

--
-- Indexes for table `required_certificates`
--
ALTER TABLE `required_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `required_certificates_team_id_foreign` (`team_id`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsibility_member`
--
ALTER TABLE `responsibility_member`
  ADD PRIMARY KEY (`member_id`,`responsibility_id`),
  ADD KEY `responsibility_member_responsibility_id_foreign` (`responsibility_id`);

--
-- Indexes for table `retails`
--
ALTER TABLE `retails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `retails_team_id_foreign` (`team_id`);

--
-- Indexes for table `rule_questions`
--
ALTER TABLE `rule_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `sale_and_technical_support_questions`
--
ALTER TABLE `sale_and_technical_support_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_and_technical_support_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `sale_forecast_questions`
--
ALTER TABLE `sale_forecast_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_forecast_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `share_questions`
--
ALTER TABLE `share_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_variables`
--
ALTER TABLE `share_variables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `share_variables_team_id_foreign` (`team_id`);

--
-- Indexes for table `strengths`
--
ALTER TABLE `strengths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `strengths_team_id_foreign` (`team_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_team_id_foreign` (`team_id`);

--
-- Indexes for table `supply_chain_questions`
--
ALTER TABLE `supply_chain_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supply_chain_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`),
  ADD UNIQUE KEY `teams_email_unique` (`email`),
  ADD UNIQUE KEY `teams_phone_number_unique` (`phone_number`),
  ADD KEY `teams_activity_id_foreign` (`activity_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_members_team_id_foreign` (`team_id`),
  ADD KEY `team_members_education_id_foreign` (`education_id`);

--
-- Indexes for table `technicals`
--
ALTER TABLE `technicals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technicals_team_id_foreign` (`team_id`);

--
-- Indexes for table `technology_questions`
--
ALTER TABLE `technology_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technology_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `threats`
--
ALTER TABLE `threats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threats_team_id_foreign` (`team_id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportations_team_id_foreign` (`team_id`);

--
-- Indexes for table `transportation_costs`
--
ALTER TABLE `transportation_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_costs_team_id_foreign` (`team_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_locations`
--
ALTER TABLE `type_of_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_of_locations_type_foreign` (`type`),
  ADD KEY `type_of_locations_team_id_foreign` (`team_id`);

--
-- Indexes for table `uncertainty_prediction_questions`
--
ALTER TABLE `uncertainty_prediction_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uncertainty_prediction_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `unit_of_measurements`
--
ALTER TABLE `unit_of_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_additional_questions`
--
ALTER TABLE `valuation_additional_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_additional_questions_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_costs`
--
ALTER TABLE `valuation_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_costs_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_machineries`
--
ALTER TABLE `valuation_machineries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_machineries_owner_foreign` (`owner`),
  ADD KEY `valuation_machineries_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_office_supplies`
--
ALTER TABLE `valuation_office_supplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_office_supplies_owner_foreign` (`owner`),
  ADD KEY `valuation_office_supplies_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_other_assets`
--
ALTER TABLE `valuation_other_assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_other_assets_owner_foreign` (`owner`),
  ADD KEY `valuation_other_assets_team_id_foreign` (`team_id`);

--
-- Indexes for table `valuation_tenements`
--
ALTER TABLE `valuation_tenements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valuation_tenements_owner_foreign` (`owner`),
  ADD KEY `valuation_tenements_team_id_foreign` (`team_id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warranties_team_id_foreign` (`team_id`);

--
-- Indexes for table `weak_points`
--
ALTER TABLE `weak_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `weak_points_team_id_foreign` (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `affordable_questions`
--
ALTER TABLE `affordable_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `after_sale_services`
--
ALTER TABLE `after_sale_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alternative_products`
--
ALTER TABLE `alternative_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_canvases`
--
ALTER TABLE `business_canvases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_managers`
--
ALTER TABLE `business_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_questions`
--
ALTER TABLE `business_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `capacities`
--
ALTER TABLE `capacities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commercialization_questions`
--
ALTER TABLE `commercialization_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competitive_position_questions`
--
ALTER TABLE `competitive_position_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumer_items`
--
ALTER TABLE `consumer_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `count_days`
--
ALTER TABLE `count_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_commitment_questions`
--
ALTER TABLE `customer_commitment_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_recognition_questions`
--
ALTER TABLE `customer_recognition_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depreciation_rates`
--
ALTER TABLE `depreciation_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `development_costs`
--
ALTER TABLE `development_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `energy_consumptions`
--
ALTER TABLE `energy_consumptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `environmental_effects`
--
ALTER TABLE `environmental_effects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment_and_machineries`
--
ALTER TABLE `equipment_and_machineries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fiscals`
--
ALTER TABLE `fiscals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `functional_management_questions`
--
ALTER TABLE `functional_management_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `intellectual_property_management_questions`
--
ALTER TABLE `intellectual_property_management_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_employees`
--
ALTER TABLE `key_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `liquidity_and_access_to_capital_questions`
--
ALTER TABLE `liquidity_and_access_to_capital_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managerials`
--
ALTER TABLE `managerials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturing_questions`
--
ALTER TABLE `manufacturing_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `man_powers`
--
ALTER TABLE `man_powers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `market_questions`
--
ALTER TABLE `market_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;

--
-- AUTO_INCREMENT for table `obtained_certificates`
--
ALTER TABLE `obtained_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_equipment_and_supplies`
--
ALTER TABLE `office_equipment_and_supplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opportunity_points`
--
ALTER TABLE `opportunity_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_information`
--
ALTER TABLE `other_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participation_new_investors`
--
ALTER TABLE `participation_new_investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participation_pre_investors`
--
ALTER TABLE `participation_pre_investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_implementations`
--
ALTER TABLE `plan_implementations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_years`
--
ALTER TABLE `plan_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preliminary_justification_plans`
--
ALTER TABLE `preliminary_justification_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `previous_investors`
--
ALTER TABLE `previous_investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_operating_costs`
--
ALTER TABLE `pre_operating_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_competitors`
--
ALTER TABLE `product_competitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_customers`
--
ALTER TABLE `product_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_supply_and_demands`
--
ALTER TABLE `product_supply_and_demands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public_management_questions`
--
ALTER TABLE `public_management_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raw_materials`
--
ALTER TABLE `raw_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `raw_material_suppliers`
--
ALTER TABLE `raw_material_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rds`
--
ALTER TABLE `rds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registered_teams`
--
ALTER TABLE `registered_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `required_certificates`
--
ALTER TABLE `required_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsibilities`
--
ALTER TABLE `responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `retails`
--
ALTER TABLE `retails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rule_questions`
--
ALTER TABLE `rule_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_and_technical_support_questions`
--
ALTER TABLE `sale_and_technical_support_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_forecast_questions`
--
ALTER TABLE `sale_forecast_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `share_questions`
--
ALTER TABLE `share_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `share_variables`
--
ALTER TABLE `share_variables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `strengths`
--
ALTER TABLE `strengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supply_chain_questions`
--
ALTER TABLE `supply_chain_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicals`
--
ALTER TABLE `technicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technology_questions`
--
ALTER TABLE `technology_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threats`
--
ALTER TABLE `threats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportation_costs`
--
ALTER TABLE `transportation_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_of_locations`
--
ALTER TABLE `type_of_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uncertainty_prediction_questions`
--
ALTER TABLE `uncertainty_prediction_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_of_measurements`
--
ALTER TABLE `unit_of_measurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `valuation_additional_questions`
--
ALTER TABLE `valuation_additional_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `valuation_costs`
--
ALTER TABLE `valuation_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `valuation_machineries`
--
ALTER TABLE `valuation_machineries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `valuation_office_supplies`
--
ALTER TABLE `valuation_office_supplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `valuation_other_assets`
--
ALTER TABLE `valuation_other_assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `valuation_tenements`
--
ALTER TABLE `valuation_tenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weak_points`
--
ALTER TABLE `weak_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affordable_questions`
--
ALTER TABLE `affordable_questions`
  ADD CONSTRAINT `affordable_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `after_sale_services`
--
ALTER TABLE `after_sale_services`
  ADD CONSTRAINT `after_sale_services_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `alternative_products`
--
ALTER TABLE `alternative_products`
  ADD CONSTRAINT `alternative_products_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `buildings_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `business_canvases`
--
ALTER TABLE `business_canvases`
  ADD CONSTRAINT `business_canvases_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `business_managers`
--
ALTER TABLE `business_managers`
  ADD CONSTRAINT `business_managers_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `business_managers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `business_questions`
--
ALTER TABLE `business_questions`
  ADD CONSTRAINT `business_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `capacities`
--
ALTER TABLE `capacities`
  ADD CONSTRAINT `capacities_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `capacities_unit_foreign` FOREIGN KEY (`unit`) REFERENCES `unit_of_measurements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commercialization_questions`
--
ALTER TABLE `commercialization_questions`
  ADD CONSTRAINT `commercialization_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `competitive_position_questions`
--
ALTER TABLE `competitive_position_questions`
  ADD CONSTRAINT `competitive_position_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `consumer_items`
--
ALTER TABLE `consumer_items`
  ADD CONSTRAINT `consumer_items_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `count_days`
--
ALTER TABLE `count_days`
  ADD CONSTRAINT `count_days_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_commitment_questions`
--
ALTER TABLE `customer_commitment_questions`
  ADD CONSTRAINT `customer_commitment_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_recognition_questions`
--
ALTER TABLE `customer_recognition_questions`
  ADD CONSTRAINT `customer_recognition_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `depreciation_rates`
--
ALTER TABLE `depreciation_rates`
  ADD CONSTRAINT `depreciation_rates_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `development_costs`
--
ALTER TABLE `development_costs`
  ADD CONSTRAINT `development_costs_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_responsibility`
--
ALTER TABLE `employee_responsibility`
  ADD CONSTRAINT `employee_responsibility_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `key_employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_responsibility_responsibility_id_foreign` FOREIGN KEY (`responsibility_id`) REFERENCES `responsibilities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `energy_consumptions`
--
ALTER TABLE `energy_consumptions`
  ADD CONSTRAINT `energy_consumptions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `energy_consumptions_unit_foreign` FOREIGN KEY (`unit`) REFERENCES `unit_of_measurements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `environmental_effects`
--
ALTER TABLE `environmental_effects`
  ADD CONSTRAINT `environmental_effects_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `equipment_and_machineries`
--
ALTER TABLE `equipment_and_machineries`
  ADD CONSTRAINT `equipment_and_machineries_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fiscals`
--
ALTER TABLE `fiscals`
  ADD CONSTRAINT `fiscals_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `functional_management_questions`
--
ALTER TABLE `functional_management_questions`
  ADD CONSTRAINT `functional_management_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `insurances`
--
ALTER TABLE `insurances`
  ADD CONSTRAINT `insurances_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intellectual_property_management_questions`
--
ALTER TABLE `intellectual_property_management_questions`
  ADD CONSTRAINT `intellectual_property_management_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `key_employees`
--
ALTER TABLE `key_employees`
  ADD CONSTRAINT `key_employees_education_id_foreign` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `key_employees_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lands`
--
ALTER TABLE `lands`
  ADD CONSTRAINT `lands_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `liquidity_and_access_to_capital_questions`
--
ALTER TABLE `liquidity_and_access_to_capital_questions`
  ADD CONSTRAINT `liquidity_and_access_to_capital_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `managerials`
--
ALTER TABLE `managerials`
  ADD CONSTRAINT `managerials_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manufacturing_questions`
--
ALTER TABLE `manufacturing_questions`
  ADD CONSTRAINT `manufacturing_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `man_powers`
--
ALTER TABLE `man_powers`
  ADD CONSTRAINT `man_powers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `markets`
--
ALTER TABLE `markets`
  ADD CONSTRAINT `markets_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `market_questions`
--
ALTER TABLE `market_questions`
  ADD CONSTRAINT `market_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_share_question`
--
ALTER TABLE `member_share_question`
  ADD CONSTRAINT `member_share_question_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `member_share_question_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `share_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `obtained_certificates`
--
ALTER TABLE `obtained_certificates`
  ADD CONSTRAINT `obtained_certificates_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `office_equipment_and_supplies`
--
ALTER TABLE `office_equipment_and_supplies`
  ADD CONSTRAINT `office_equipment_and_supplies_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `opportunity_points`
--
ALTER TABLE `opportunity_points`
  ADD CONSTRAINT `opportunity_points_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `other_information`
--
ALTER TABLE `other_information`
  ADD CONSTRAINT `other_information_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `participation_new_investors`
--
ALTER TABLE `participation_new_investors`
  ADD CONSTRAINT `participation_new_investors_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `participation_pre_investors`
--
ALTER TABLE `participation_pre_investors`
  ADD CONSTRAINT `participation_pre_investors_investor_foreign` FOREIGN KEY (`investor`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `participation_pre_investors_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plan_implementations`
--
ALTER TABLE `plan_implementations`
  ADD CONSTRAINT `plan_implementations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plan_years`
--
ALTER TABLE `plan_years`
  ADD CONSTRAINT `plan_years_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preliminary_justification_plans`
--
ALTER TABLE `preliminary_justification_plans`
  ADD CONSTRAINT `preliminary_justification_plans_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `previous_investors`
--
ALTER TABLE `previous_investors`
  ADD CONSTRAINT `previous_investors_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pre_operating_costs`
--
ALTER TABLE `pre_operating_costs`
  ADD CONSTRAINT `pre_operating_costs_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `producers`
--
ALTER TABLE `producers`
  ADD CONSTRAINT `producers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_competitors`
--
ALTER TABLE `product_competitors`
  ADD CONSTRAINT `product_competitors_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_customers`
--
ALTER TABLE `product_customers`
  ADD CONSTRAINT `product_customers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_supply_and_demands`
--
ALTER TABLE `product_supply_and_demands`
  ADD CONSTRAINT `product_supply_and_demands_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_supply_and_demands_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `unit_of_measurements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `public_management_questions`
--
ALTER TABLE `public_management_questions`
  ADD CONSTRAINT `public_management_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD CONSTRAINT `raw_materials_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `raw_materials_unit_foreign` FOREIGN KEY (`unit`) REFERENCES `unit_of_measurements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `raw_material_suppliers`
--
ALTER TABLE `raw_material_suppliers`
  ADD CONSTRAINT `raw_material_suppliers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rds`
--
ALTER TABLE `rds`
  ADD CONSTRAINT `rds_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registered_teams`
--
ALTER TABLE `registered_teams`
  ADD CONSTRAINT `registered_teams_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `repairs_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `required_certificates`
--
ALTER TABLE `required_certificates`
  ADD CONSTRAINT `required_certificates_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `responsibility_member`
--
ALTER TABLE `responsibility_member`
  ADD CONSTRAINT `responsibility_member_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `responsibility_member_responsibility_id_foreign` FOREIGN KEY (`responsibility_id`) REFERENCES `responsibilities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `retails`
--
ALTER TABLE `retails`
  ADD CONSTRAINT `retails_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rule_questions`
--
ALTER TABLE `rule_questions`
  ADD CONSTRAINT `rule_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sale_and_technical_support_questions`
--
ALTER TABLE `sale_and_technical_support_questions`
  ADD CONSTRAINT `sale_and_technical_support_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sale_forecast_questions`
--
ALTER TABLE `sale_forecast_questions`
  ADD CONSTRAINT `sale_forecast_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `share_variables`
--
ALTER TABLE `share_variables`
  ADD CONSTRAINT `share_variables_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `strengths`
--
ALTER TABLE `strengths`
  ADD CONSTRAINT `strengths_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supply_chain_questions`
--
ALTER TABLE `supply_chain_questions`
  ADD CONSTRAINT `supply_chain_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_members`
--
ALTER TABLE `team_members`
  ADD CONSTRAINT `team_members_education_id_foreign` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_members_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technicals`
--
ALTER TABLE `technicals`
  ADD CONSTRAINT `technicals_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technology_questions`
--
ALTER TABLE `technology_questions`
  ADD CONSTRAINT `technology_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `threats`
--
ALTER TABLE `threats`
  ADD CONSTRAINT `threats_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transportations`
--
ALTER TABLE `transportations`
  ADD CONSTRAINT `transportations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transportation_costs`
--
ALTER TABLE `transportation_costs`
  ADD CONSTRAINT `transportation_costs_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `type_of_locations`
--
ALTER TABLE `type_of_locations`
  ADD CONSTRAINT `type_of_locations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `type_of_locations_type_foreign` FOREIGN KEY (`type`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `uncertainty_prediction_questions`
--
ALTER TABLE `uncertainty_prediction_questions`
  ADD CONSTRAINT `uncertainty_prediction_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_additional_questions`
--
ALTER TABLE `valuation_additional_questions`
  ADD CONSTRAINT `valuation_additional_questions_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_costs`
--
ALTER TABLE `valuation_costs`
  ADD CONSTRAINT `valuation_costs_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_machineries`
--
ALTER TABLE `valuation_machineries`
  ADD CONSTRAINT `valuation_machineries_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `valuation_machineries_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_office_supplies`
--
ALTER TABLE `valuation_office_supplies`
  ADD CONSTRAINT `valuation_office_supplies_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `valuation_office_supplies_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_other_assets`
--
ALTER TABLE `valuation_other_assets`
  ADD CONSTRAINT `valuation_other_assets_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `valuation_other_assets_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `valuation_tenements`
--
ALTER TABLE `valuation_tenements`
  ADD CONSTRAINT `valuation_tenements_owner_foreign` FOREIGN KEY (`owner`) REFERENCES `team_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `valuation_tenements_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `warranties`
--
ALTER TABLE `warranties`
  ADD CONSTRAINT `warranties_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `weak_points`
--
ALTER TABLE `weak_points`
  ADD CONSTRAINT `weak_points_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
