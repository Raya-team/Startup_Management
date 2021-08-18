-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 10:52 AM
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

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `nickname`) VALUES
(1, 'keshavarzi', 'کشاورزی و دامپروری'),
(2, 'car', 'خودرو'),
(3, 'wahter', 'آب'),
(4, 'blockchain', 'اینترنت اشیا');

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name`, `nickname`) VALUES
(1, 'Diploma', 'دیپلم');
(2, 'Associate degree', 'فوق دیپلم');
(3, 'Bachelor’s degree', 'لیسانس');
(4, 'Master’s degree', 'فوق لیسانس');
(5, 'Doctoral degree', 'دکتری');
(6, 'Post doctoral degree', 'فوق دکتری');

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `nickname`) VALUES
(1, 'commodity', 'کالا'),
(2, 'Services', 'خدمات');

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`id`, `name`, `nickname`) VALUES
(1, 'Technical Assistant', 'مسئول فنی'),
(2, 'Responsible for the market', 'مسئول بازار'),
(3, 'Consultant', 'مشاور');

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `project_name`, `status`, `activity_id`, `email`, `address`, `phone_number`, `landline`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'sadasd', 1, 2, 'startup@gmail.com', NULL, '09019585040', NULL, NULL, NULL);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `level`, `team_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ehsan', 'ehsan@admin.com', 1, NULL, NULL, '$2y$10$a/XmT.Zm7Wi5DfkrDw8BZOrTeSeygoc4xW5arHezKzFzQMMYPd8be', 'sruqiCjV1yj3gLW32w080LBdy5WpyAws8rnaMYEOWVUSyAyrhLroEwOLQfmi', '2021-08-13 06:30:44', '2021-08-13 08:56:17'),
(2, 'hasan', 'hasan@startup.com', 0, 1, NULL, '$2y$10$/F8G7XNp63xgXkedoJSh.OCDmUl3.nDzjOVNEBB16TYr.qGQ4jhEm', 'kEZH9HcUeeCM8kSBabl2Ol8a56wA3lr2FnMiwARn7Geg4FG1HaSPagCHTDaI', '2021-08-13 06:31:16', '2021-08-13 09:16:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
