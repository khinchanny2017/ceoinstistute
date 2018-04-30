-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 09:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceoinst`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceoinst_students`
--

CREATE TABLE `ceoinst_students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_gender` varchar(11) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` tinyint(12) NOT NULL,
  `stu_current_address` varchar(100) NOT NULL,
  `student_dob` date NOT NULL,
  `stu_learn_subject` varchar(50) NOT NULL,
  `student_img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ceo_institute_academy`
--

CREATE TABLE `ceo_institute_academy` (
  `id` int(11) NOT NULL,
  `title_academy` varchar(100) NOT NULL,
  `content_academy` varchar(500) NOT NULL,
  `img_academy` varchar(100) NOT NULL,
  `description_academy` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ceo_institute_program`
--

CREATE TABLE `ceo_institute_program` (
  `id` int(11) NOT NULL,
  `program_title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `program_img` varchar(100) NOT NULL,
  `program_subject` varchar(100) NOT NULL,
  `program_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_partner`
--

CREATE TABLE `company_partner` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `logo_company` varchar(50) NOT NULL,
  `description_company` varchar(255) NOT NULL,
  `url_website` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `main_images`
--

CREATE TABLE `main_images` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `main_img` varchar(50) NOT NULL,
  `contents` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_images`
--

INSERT INTO `main_images` (`id`, `main_title`, `sub_title`, `main_img`, `contents`, `created_at`) VALUES
(1, 'Introduction', 'Laravel provides several helpers to assist you in generating', 'adsfasdfasdf', 'Laravel provides several helpers to assist you in generating URLs for your application. Of course, these are mainly helpful when building links in your templates and API responses, or when generating redirect responses to another part of your application.', '2018-04-30 06:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professionsor`
--

CREATE TABLE `professionsor` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_subject` varchar(50) NOT NULL,
  `pro_img` varchar(100) NOT NULL,
  `decription` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `name_resource` varchar(100) NOT NULL,
  `logo_company` varchar(50) NOT NULL,
  `url_resource` varchar(100) NOT NULL,
  `refference_resource` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Johny PS', 'johnny@gmail.com', '$2y$10$2qc7SsiAOKHgEc/mgAEp0eYQgxqJ1uS1tpnu8OqMkQf8KD.aaCC4q', 'o5o4CD4lo7zaPoZTI7DY8IY5gT8lzhvzMu42muTBMIqHSCUL3BGnyOfrnuFA', '2018-04-24 20:14:26', '2018-04-24 20:14:26'),
(2, 'Channy PS', 'admin@gmail.com', '$2y$10$1i4nPkcLukrWrg.Ypf5s9uvjo5A2XhkN6TrKZR.xrP3K2U0PVyE1i', 'k2UvORtLd3T77cr8Tc6GlPxKPFcTuftKwXlGkZ4fAqilChRCJOdvndE383Ct', '2018-04-27 20:05:00', '2018-04-27 20:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ceoinst_students`
--
ALTER TABLE `ceoinst_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceo_institute_academy`
--
ALTER TABLE `ceo_institute_academy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceo_institute_program`
--
ALTER TABLE `ceo_institute_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_partner`
--
ALTER TABLE `company_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_images`
--
ALTER TABLE `main_images`
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
-- Indexes for table `professionsor`
--
ALTER TABLE `professionsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ceoinst_students`
--
ALTER TABLE `ceoinst_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceo_institute_academy`
--
ALTER TABLE `ceo_institute_academy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceo_institute_program`
--
ALTER TABLE `ceo_institute_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_partner`
--
ALTER TABLE `company_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_images`
--
ALTER TABLE `main_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professionsor`
--
ALTER TABLE `professionsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
