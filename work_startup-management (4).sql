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
(1, 'Agriculture and Animal Husbandry', 'کشاورزی و دامپروری'),
(2, 'Food products', 'محصولات غذایی'),
(3, 'Car', 'خودرو'),
(4, 'Medical Equipment', 'تجهیزات پزشکی'),
(5, 'Electronic', 'الکترونیک'),
(6, 'Materials and Nano', 'مواد و نانو'),
(7, 'Industrial equipment', 'تجهیزات صنعتی'),
(8, 'ICT', 'ICT'),
(9, 'Education', 'آموزش'),
(10, 'Internet of Things', 'اینترنت اشیا'),
(11, 'Water', 'آب'),
(12, 'Aerospace', 'هوافضا'),
(13, 'Renewable energy', 'انرژی‌های تجدیدپذیر'),
(14, 'Fossil energies', 'انرژی‌های فسیلی'),
(15, 'Cosmetics', 'آرایشی و بهداشتی'),
(16, 'Mine', 'معدن'),
(17, 'Medicinal', 'دارویی'),
(18, 'Fin Tech', 'فینتک'),
(19, 'Health', 'سلامت'),
(20, 'Medicine', 'دارو');

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
(3, 'Financial manager', 'مسئول مالی'),
(4, 'Responsible for management and raising capital', 'مسئول مدیریتی و جذب سرمایه'),
(5, 'Investor', 'سرمایه گذار'),
(6, 'Consultant', 'مشاور');

--
-- Dumping data for table `users`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
