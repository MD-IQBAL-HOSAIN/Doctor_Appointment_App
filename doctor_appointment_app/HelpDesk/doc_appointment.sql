-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 05:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `schedule` enum('morning','afternoon','evening') NOT NULL DEFAULT 'morning',
  `status` enum('pending','accepted','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `description`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'Gynocology', 'department/JnEvLzSeg81gwcqvgi3nxcdXPaCeVBoPi90lOPwR.jpg', 'For women', 1, NULL, '2024-06-01 10:15:54', '2024-06-03 11:03:33'),
(8, 'Psychology', 'department/hW9LZzNk3ilqjEQ32UYrHHwaQmnh8VnI1pOVikWp.webp', 'fgsdfgdfgfds', 1, NULL, '2024-06-01 10:52:20', '2024-06-03 10:07:23'),
(9, 'Cardiology', 'department/NSgEAxuWNcGeBI8NUgyFLTnk0bIoQxKLG1GlRSiG.jpg', 'Cardiology dfhfghjsfjjs', 1, NULL, '2024-06-01 11:02:55', '2024-06-01 11:02:55'),
(10, 'dental', 'department/lMKIsOxhRiBm4MJNNQ1etpOyyADdp3G7sjoiy0qB.jpg', 'dental hjhgjdghjhhhgt', 1, NULL, '2024-06-01 11:03:32', '2024-06-02 12:37:22'),
(11, 'Endocrinology', 'department/QOk3AoBOc31HJ1ZzoVZih917dd0vov8B07Gw7Wi6.jpg', 'Endocrinology jfiytf', 1, NULL, '2024-06-01 11:06:11', '2024-06-01 12:44:51'),
(12, 'Gastroenterology', 'department/CuGTfmXMeiwmN1YadEorSvPsxszF4BNZLMwcthV0.jpg', 'Gastroenterology fgjgj', 1, NULL, '2024-06-01 11:10:20', '2024-06-01 11:10:20'),
(14, 'Ophthalmology', 'department/GB06DRSljARyNjZ9iOs3eftir0xb9FMbOOazb3yW.jpg', 'Ophthalmology hhhhhhhhhhhhhhhhhhh', 1, NULL, '2024-06-02 11:31:59', '2024-06-02 11:31:59'),
(15, 'Pediatrilogy', 'department/NlFvCSLvnb5c7gkPGUPWUka3r3VZlAsRqTB54gkG.jpg', 'Pediatrilogy bvngfdhgf', 1, NULL, '2024-06-02 11:57:48', '2024-06-02 11:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profiles`
--

CREATE TABLE `doctor_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `gender` enum('men','women','other') NOT NULL DEFAULT 'men',
  `degree` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_profiles`
--

INSERT INTO `doctor_profiles` (`id`, `name`, `email`, `image`, `department_id`, `education`, `experience`, `fees`, `about`, `gender`, `degree`, `university`, `country`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Abir', 'abir@gmail.com', 'doctor_images/Pep1JofmQh9em8sR0EDPNZjm0Iu8CuhomDj7yqGn.jpg', 11, 'ffffff', 'ffff', '100', 'dddddddd', 'men', 'ddddddd', 'ddddddddd', 'dddddddddd', '87656576', 'ddddddddd', NULL, '2024-06-04 10:10:05'),
(2, 'Dr. Tamim Zubayer', 'zubayer@gmail.com', 'department/b3ZFmZMdgI23HXMaKTpaAKqNKt4Mm1GXTcp8oFbs.jpg', 7, 'MBBS', 'Five years', '1000', 'ggggggggggg', 'women', 'BCS Health', 'Sher-E-Bangla', 'Bangladesh', '01620745692', 'Mirpur 10', '2024-06-04 09:53:50', '2024-06-04 12:43:51'),
(3, 'Dr. Tasnim Zara', 'Zara@gmail.com', 'doctor_images/mmCdhW9GMGBsKnFDpmJ4SVoJmoVhMz9s9vOvBysm.webp', 10, 'MBBS', 'Two years', '1200', 'aaaaaaaa', 'women', 'BCS Health', 'Sher-E-Bangla', 'Bangladesh', '01620745692', 'Mirpur 10', '2024-06-04 12:29:35', '2024-06-04 12:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_histories`
--

CREATE TABLE `medical_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `medical_condition` text NOT NULL,
  `diagnosis` text NOT NULL,
  `prescription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(15, '2024_05_27_031739_create_appointments_table', 4),
(16, '2024_05_27_042112_create_medical_histories_table', 5),
(17, '2024_05_27_042331_create_hospitals_table', 5),
(18, '2024_05_27_130811_create_schedules_table', 6),
(19, '2024_05_27_131220_create_notifications_table', 7),
(20, '2024_05_27_132206_create_payments_table', 8),
(21, '2024_05_27_132722_create_reports_table', 9),
(22, '2024_05_27_132939_create_settings_table', 9),
(26, '2024_05_26_202914_create_departments_table', 11),
(27, '2024_05_27_031539_create_patient_profiles_table', 12),
(29, '2024_05_27_031458_create_doctor_profiles_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `notification_type` enum('Email','SMS') NOT NULL,
  `notification_content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_profiles`
--

CREATE TABLE `patient_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `medical_history` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL DEFAULT 'male',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_profiles`
--

INSERT INTO `patient_profiles` (`id`, `name`, `email`, `password`, `image`, `age`, `blood_group`, `medical_history`, `country`, `phone`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(3, 'Abdullah Al Mamun', 'mamun@gmail.com', 'aaaaaaaa', 'images/DnPVzeAuGBrCbwaItaA4GreKXNm6oQlw6qe5LRff.webp', '28', 'B+', 'aaaaaaaa', 'Bangladesh', '01620745692', 'Mirpur 2', 'male', '2024-05-31 11:25:20', '2024-05-31 11:25:20'),
(4, 'Sulaiman Sukhon', 'sukhon@gmail.com', 'aaaaaaaa', 'images/Ie2rv47RoLqBUFbVVFvnjXZtRsXuZUXUiygqCrA7.jpg', '40', 'O-', 'psychological problem', 'Bangladesh', '01620745692', 'Agargaon', 'male', '2024-05-31 11:42:54', '2024-05-31 11:42:54'),
(5, 'Maisha', 'maisa@gmail.com', 'aaaaaaaa', 'images/2sxxAtVPSsMpE4fY3PcqMiflx5mHWcViLIHjPJ1p.jpg', '25', 'A-', 'kjfhgjytd', 'Bangladesh', '01620745692', 'Mirpur 10', 'female', '2024-05-31 12:13:56', '2024-05-31 12:13:56'),
(6, 'Sumaiya', 'sumaiya@gmail.com', 'aaaaaaaa', 'images/5b55sjHwhby1eUgC8F26BghnRXy38eZa0Mc8zvDQ.jpg', '35', 'O-', 'yjuytt', 'Bangladesh', '01620745692', 'Mirpur 10', 'female', '2024-05-31 12:19:54', '2024-05-31 12:19:54'),
(7, 'Bijoy Chowdhury', 'bijoy@gmail.com', 'aaaaaaaa', 'department/BD4rMMZKRhG6LnKfNvLg3DSLkMKtwPDnNDz5Z7Sr.png', '28', 'B+', 'Sinusitis: Symptoms, causes, and treatment', 'Bangladesh', '01620745692', 'Mirpur 10', 'male', '2024-06-01 11:58:04', '2024-06-01 11:58:04'),
(8, 'Sara Ali Khan', 'sara@gmail.com', 'aaaaaaaa', 'department/CpuT3bITxFMZpAo9USZDFEv463TxNognc7YAiWRx.jpg', '40', 'AB-', 'ddddddddddddd', 'Bangladesh', '01620745692', 'Mirpur 10', 'female', '2024-06-01 12:00:34', '2024-06-01 12:31:45'),
(9, 'Durjoy Khan', 'durjoy@gmail.com', 'aaaaaaaa', 'department/xnzTvueXwv8GEPYNTWosbFEyk2YE1XnmFXv3xgI0.webp', '40', 'A+', 'ytrdfvgafd', 'Bangladesh', '01620745692', 'Mirpur 10', 'male', '2024-06-01 12:01:55', '2024-06-01 12:01:55'),
(11, 'Nur', 'nur@gmail.com', 'aaaaaaaa', 'department/zDAAQYKDV27gKFxC7Ke52T0UQkEHG8N1Il5hGYI3.jpg', '35', 'O-', 'Nora fatehi', 'Bangladesh', '01620745692', 'Mirpur 10', 'male', '2024-06-01 12:48:57', '2024-06-01 12:48:57'),
(12, 'Alif', 'alif@gmail.com', 'aaaaaaaa', 'department/TkBjzxBy9g0I9aVzvPk79GyXdmEZxu9CHDlLoBUP.jpg', '44', 'B-', 'hfdsstyu', 'Bangladesh', '01620745692', 'Mirpur 10', 'male', '2024-06-01 13:05:49', '2024-06-01 13:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_status` enum('Pending','Completed') NOT NULL,
  `billing_info` text NOT NULL,
  `payment_type` set('cash','bkash','nogod','upay','free') NOT NULL,
  `trxid` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `outcome` text NOT NULL,
  `appointment_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AcXkVDIgsVpeO2aiIhflFaTIvlMhUShiVEyQucZs', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMzA2WDlwSFBLeXBSWmFZeEZMMTVnSkZmS3RlaTE3UWZZOFlUalhkYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODg6Imh0dHA6Ly9sb2NhbGhvc3QvTGFyYXZlbC9Eb2N0b3JfQXBwb2ludG1lbnRfQXBwL2RvY3Rvcl9hcHBvaW50bWVudF9hcHAvcHVibGljL2ZpbmRkb2N0b3IiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717524497),
('ghe3c0n1yr9yhjzkRTirTOrGMMHw2oSBkJlD1PAs', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVmN2ZzhSaG5YUGFsYUxpWndlMTEyNjJYTW9JckdJMzlUNWVMMFBDYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODg6Imh0dHA6Ly9sb2NhbGhvc3QvTGFyYXZlbC9Eb2N0b3JfQXBwb2ludG1lbnRfQXBwL2RvY3Rvcl9hcHBvaW50bWVudF9hcHAvcHVibGljL2ZpbmRkb2N0b3IiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1717557346),
('GR1vPjdhzIGQr4GFLS9lDGTBni0BCFmeaACGyp5v', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUkdITWtoM2JsN0xPTEtmaWh2eWxiNW01Nk9DNTdnOEIxZ05UMkNreiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjg4OiJodHRwOi8vbG9jYWxob3N0L0xhcmF2ZWwvRG9jdG9yX0FwcG9pbnRtZW50X0FwcC9kb2N0b3JfYXBwb2ludG1lbnRfYXBwL3B1YmxpYy9maW5kZG9jdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1717528628);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` set('admin','patient','doctor') NOT NULL DEFAULT 'patient',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bijoy Chowdhury', 'admin@gmail.com', NULL, '$2y$12$1L7V1g5q823v0K5KlBdMNuARBjdFzz7THaW9spIvfZnoPpCrIkMBm', 'admin', 'qw2edClTaiD6Mu2WiyRhSp1SAsDe8XsDvG0jnLyUqPGAdwtKlVA0RyWnRVK7', '2024-05-26 13:36:13', '2024-06-01 13:10:03'),
(2, 'patient', 'patient@gmail.com', NULL, '$2y$12$TeBc02rurVlU1ER3V2PKEehYpWhGFVHKaniR5Z9tNZFlaUmxURTva', 'patient', NULL, '2024-05-26 13:37:03', '2024-05-26 13:37:03'),
(3, 'doctor', 'doctor@gmail.com', NULL, '$2y$12$h/TCVN4rjqEZXaM6IMU7nepknqAOOudP5Oa1ezIRdpuRSZKZnzuKu', 'doctor', NULL, '2024-05-26 13:37:38', '2024-05-26 13:37:38'),
(4, 'Misty', 'misty@gmail.com', NULL, '$2y$12$PO3IVpxHTj3vb2xGQEweXuPAaKKhezplyO5bjdET0bTzRMYWSq6Lm', 'admin', NULL, '2024-05-29 13:10:42', '2024-05-29 22:27:17'),
(5, 'Dr. Tasnim Zara', 'zara@gmail.com', NULL, '$2y$12$398udQDGsI3fPeuq38R22eLeCLpGFOhmPDRUR5LBoD.HlqJDORE/6', 'patient', 'Q6E9YUZ0M6VJqHBKhG4WDAxTKtnHNoVY33dG7SPtJwaJ1grtxz5cOvrqpbqH', '2024-05-29 13:17:54', '2024-05-29 15:50:31'),
(6, 'Dr. Mosaidul Isalam', 'mosaidul@gmail.com', NULL, '$2y$12$iQuLynTRodNqnn7dZHpYwess8fB36f9V.MG90hvmYTWLwAKh08sey', 'patient', NULL, '2024-05-29 13:20:08', '2024-05-29 13:20:08'),
(10, 'Adil', 'adil@gmail.com', NULL, '$2y$12$f5s6Zjytpa7c55SrxWNyE.Ay1ud02g82.gNT0y9gSjtgYVYeqDSAy', 'patient', NULL, '2024-06-01 13:10:51', '2024-06-01 13:10:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctor_profiles_email_unique` (`email`),
  ADD KEY `doctor_profiles_department_id_foreign` (`department_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_histories`
--
ALTER TABLE `medical_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_histories_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patient_profiles`
--
ALTER TABLE `patient_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_histories`
--
ALTER TABLE `medical_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_profiles`
--
ALTER TABLE `patient_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_profiles` (`id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patient_profiles` (`id`);

--
-- Constraints for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  ADD CONSTRAINT `doctor_profiles_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `medical_histories`
--
ALTER TABLE `medical_histories`
  ADD CONSTRAINT `medical_histories_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patient_profiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
