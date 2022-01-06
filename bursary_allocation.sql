-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursary_allocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bursary_applications`
--

CREATE TABLE `bursary_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bursary_id` int(11) NOT NULL,
  `bursary_student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bursary_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bursary_school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bursary_course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bursary_constituency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bursary_county_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guardian_full_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_helb_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_helb_status_decision` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial_assistance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_needs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_needs_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_income_loss_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_income_loss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_structure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_needs_attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_perfomance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevant_attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_support` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bursary_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_applying` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points_earned` int(50) DEFAULT NULL,
  `bursary_allocated_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bursary_applications`
--

INSERT INTO `bursary_applications` (`id`, `bursary_id`, `bursary_student_id`, `bursary_user_id`, `bursary_school_id`, `bursary_course_id`, `bursary_constituency_id`, `bursary_county_id`, `guardian_full_names`, `gender`, `guardian_phone_number`, `student_category`, `student_helb_status`, `student_helb_status_decision`, `financial_assistance`, `family_status`, `special_needs`, `special_needs_description`, `family_income_loss_description`, `family_income_loss`, `fee_structure`, `special_needs_attachment`, `school_perfomance`, `relevant_attachment`, `application_support`, `bursary_status`, `amount_applying`, `points_earned`, `bursary_allocated_amount`, `school_status`, `created_at`, `updated_at`) VALUES
(2, 713506, 1, 10, 2, 1, 1, 1, 'kdd kdkdj', 'Female', '0733665221', 'SSP', 'Yes', 'ikmded', 'Ministry of Education Bursary', 'Total Orphan', 'Yes', 'Hearing Impairment', 'Loss of Job', 'No', 'EDCI 322 (2)-1641459214.pdf', NULL, 'EDCI 322-1641459214.pdf', 'EDCI 322-1641459214.pdf', 'fvfvffvff', 'cdf', '344444', 22, '48293', 'cdf', '2022-01-06 05:53:34', '2022-01-06 06:51:38'),
(3, 14637, 2, 13, 2, 1, 1, 1, 'testing guarina', 'Female', '0722009922', 'KUCCPS', 'No', 'dededed', 'Community Based Organization Support', 'Single Parent', 'No', 'Visual Impairment', 'Retrenchment', 'Yes', '6rgvyrv-1641461775.pdf', '6rgvyrv-1641461775.pdf', '6rgvyrv-1641461775.pdf', '6rgvyrv-1641461775.pdf', 'clearing dee balance', 'cdf', '6000', 19, '41707', 'cdf', '2022-01-06 06:36:15', '2022-01-06 06:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `county_constituencies`
--

CREATE TABLE `county_constituencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constituency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount_allocated` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `county_constituencies`
--

INSERT INTO `county_constituencies` (`id`, `county`, `constituency`, `user_manager_id`, `amount_allocated`, `created_at`, `updated_at`) VALUES
(1, 'Meru', 'Tigania East', 2, '90000', '2022-01-06 04:38:06', '2022-01-06 04:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_category`, `course_description`, `created_at`, `updated_at`) VALUES
(1, 'Bsc in Information technology', 'COmputing ', 'technical course ', NULL, NULL);

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_09_30_171522_laratrust_setup_tables', 1),
(15, '2021_12_29_073008_create_schools_table', 1),
(16, '2021_12_29_073025_create_courses_table', 1),
(17, '2021_12_30_094320_create_bursary_applications_table', 1),
(19, '2021_12_29_071827_create_students_table', 2),
(20, '2021_12_30_095257_create_county_constituencies_table', 3);

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
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-01-06 04:07:43', '2022-01-06 04:07:43'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-01-06 04:07:43', '2022-01-06 04:07:43'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-01-06 04:07:43', '2022-01-06 04:07:43'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-01-06 04:07:43', '2022-01-06 04:07:43');

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
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 5),
(12, 5),
(13, 5),
(14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-01-06 04:07:40', '2022-01-06 04:07:40'),
(2, 'cdf', 'Cdf', 'Cdf', '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(3, 'school', 'School', 'School', '2022-01-06 04:07:42', '2022-01-06 04:07:42'),
(4, 'student', 'Student', 'Student', '2022-01-06 04:07:42', '2022-01-06 04:07:42'),
(5, 'role_name', 'Role Name', 'Role Name', '2022-01-06 04:07:43', '2022-01-06 04:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL),
(4, 4, 'App\\Models\\User', NULL),
(5, 5, 'App\\Models\\User', NULL),
(4, 6, 'App\\Models\\User', NULL),
(2, 7, 'App\\Models\\User', NULL),
(2, 8, 'App\\Models\\User', NULL),
(4, 9, 'App\\Models\\User', NULL),
(4, 10, 'App\\Models\\User', NULL),
(3, 11, 'App\\Models\\User', NULL),
(3, 12, 'App\\Models\\User', NULL),
(4, 13, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_admin_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `school_location_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_contacts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `school_county`, `school_category`, `school_admin_user_id`, `school_location_address`, `school_website`, `school_contacts`, `school_email`, `created_at`, `updated_at`) VALUES
(1, 'meru university of science and technology', 'Tigania East', 'Public University', 11, 'nchiru market', 'https://www.must.ac.ke', '0720882733', 'meruuniversity@gmail.com', '2022-01-06 05:12:15', '2022-01-06 05:12:15'),
(2, 'Moi University', 'Tigania East', 'Public University', 12, 'Eldoret', 'http://moi.ac.ke', '0741821113', 'moiuniversity@gmail.com', '2022-01-06 05:27:33', '2022-01-06 05:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `constituency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `county_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` int(11) NOT NULL,
  `year_of_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_student_id`, `school_id`, `constituency_id`, `county_id`, `phone_number`, `id_number`, `year_of_study`, `registration_number`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 1, 1, '0722887766', 34554433, 'Year 3', 'ct203/0013/15', 1, '2022-01-06 05:18:47', '2022-01-06 05:18:47'),
(2, 13, 2, 1, 1, '0111808686', 90987653, 'Year 4', 'ct298/0098/26', 1, '2022-01-06 06:33:57', '2022-01-06 06:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', NULL, '$2y$10$tfLEbq4zpAPKbgYaj.AxF.5we6ChLwOgJFUkSFVyEKGcxpdUmfFGm', NULL, NULL, '2022-01-06 04:07:41', '2022-01-06 04:07:41'),
(2, 'Cdf', 'cdf@app.com', NULL, '$2y$10$3XardppjqjgqjFQdA05HOOOKhFZHPFk2peYXSbxgMwfcrafMDiYq.', NULL, NULL, '2022-01-06 04:07:42', '2022-01-06 04:07:42'),
(3, 'School', 'school@app.com', NULL, '$2y$10$RlS0vHwcNuL/bAjpf635h.799Ni0kzMm7C9ARiVH0cABZksBzTy.O', NULL, NULL, '2022-01-06 04:07:42', '2022-01-06 04:07:42'),
(4, 'Student', 'student@app.com', NULL, '$2y$10$3PrupdOF.IjmsnmN3ICppeHJAEwDKKMxFZ5kpQM.7CvCjPbJSuufG', NULL, NULL, '2022-01-06 04:07:43', '2022-01-06 04:07:43'),
(5, 'Role Name', 'role_name@app.com', NULL, '$2y$10$gZ3kQE6vPP4.HLx5sf1oN.SFLZKMy.QpfHSBjaqrhOFvJB2ZHc5ZG', NULL, NULL, '2022-01-06 04:07:43', '2022-01-06 04:07:43'),
(6, 'john joan', 'john@gmail.com', NULL, '$2y$10$2WuBGJk5TjSdD9tID.jJ4.yqEXCHYFd4fj2x7bR54mBwoiHwSab0m', NULL, NULL, '2022-01-06 04:09:36', '2022-01-06 04:09:36'),
(7, 'elija k', 'meruchek@gmail.com', NULL, '$2y$10$04.Kvji4pvoBBpO6Xh9D6OBkmNq.K0JF3Fux7Vqe/oXyLNcT2RA2e', 'EM-1641454558.jpg', NULL, '2022-01-06 04:35:58', '2022-01-06 04:35:58'),
(8, 'elija k', 'meruchgek@gmail.com', NULL, '$2y$10$7w3uznlFR6VRT4hD/sp3Cuq6.xHd92LGxNnrpJDfg3Z0Gm3cFzg.u', 'constantia 2-1641454685.jpg', NULL, '2022-01-06 04:38:05', '2022-01-06 04:38:05'),
(9, 'joshua james', 'james@gmail.com', NULL, '$2y$10$u0NWTkweTFhEopxZeIgzq.2BOBu1FcTaGv.zmb9jV1lxUYPqPuv.y', NULL, NULL, '2022-01-06 04:51:34', '2022-01-06 04:51:34'),
(10, 'muange onesmus', 'vnsmusyoki@gmail.com', '2022-01-06 05:07:58', '$2y$10$Ie96xWqtJdKxH0/xxDp2Pe5FsO3uFPzf4ErJmKn6ZG1gPaTxzs.AC', 'EM-1641457127.jpg', NULL, '2022-01-06 04:59:50', '2022-01-06 05:18:47'),
(11, 'odhiambo', 'managermanager@gmail.com', NULL, '$2y$10$E/2NHxx6AM40LiaF4InGXe.FUDL5g26En/BAgfuXrXH2ZTXsOM3DO', 'Screenshot (1)-1641456735.png', NULL, '2022-01-06 05:12:15', '2022-01-06 05:12:15'),
(12, 'Moi', 'mwacharomwanyolo@gmail.com', '2022-01-06 05:30:23', '$2y$10$kfrp0l1fSGtMXZE8R6WSyOhvVVFCOZmJO7c5DxtrIswDnq3Xi55Zm', 'Screenshot (1)-1641457653.png', NULL, '2022-01-06 05:27:33', '2022-01-06 05:30:23'),
(13, 'jame scheck', 'endlesscript@gmail.com', '2022-01-06 06:32:33', '$2y$10$FOZbzTQdc4GUJ.82JPbGcukbad36bnXKVQnP3aTkiatvdXZq3ZTJ.', 'IMG_20201021_082457-1641461637.jpg', NULL, '2022-01-06 06:30:41', '2022-01-06 06:33:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bursary_applications`
--
ALTER TABLE `bursary_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bursary_applications_bursary_student_id_foreign` (`bursary_student_id`),
  ADD KEY `bursary_applications_bursary_user_id_foreign` (`bursary_user_id`),
  ADD KEY `bursary_applications_bursary_school_id_foreign` (`bursary_school_id`),
  ADD KEY `bursary_applications_bursary_course_id_foreign` (`bursary_course_id`);

--
-- Indexes for table `county_constituencies`
--
ALTER TABLE `county_constituencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `county_constituencies_user_manager_id_foreign` (`user_manager_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_school_admin_user_id_foreign` (`school_admin_user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_student_id_foreign` (`user_student_id`),
  ADD KEY `students_course_id_foreign` (`course_id`),
  ADD KEY `students_school_id_foreign` (`school_id`),
  ADD KEY `students_constituency_id_foreign` (`constituency_id`),
  ADD KEY `students_county_id_foreign` (`county_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `bursary_applications`
--
ALTER TABLE `bursary_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `county_constituencies`
--
ALTER TABLE `county_constituencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bursary_applications`
--
ALTER TABLE `bursary_applications`
  ADD CONSTRAINT `bursary_applications_bursary_course_id_foreign` FOREIGN KEY (`bursary_course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `bursary_applications_bursary_school_id_foreign` FOREIGN KEY (`bursary_school_id`) REFERENCES `schools` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `bursary_applications_bursary_student_id_foreign` FOREIGN KEY (`bursary_student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bursary_applications_bursary_user_id_foreign` FOREIGN KEY (`bursary_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `county_constituencies`
--
ALTER TABLE `county_constituencies`
  ADD CONSTRAINT `county_constituencies_user_manager_id_foreign` FOREIGN KEY (`user_manager_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_school_admin_user_id_foreign` FOREIGN KEY (`school_admin_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_constituency_id_foreign` FOREIGN KEY (`constituency_id`) REFERENCES `county_constituencies` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_county_id_foreign` FOREIGN KEY (`county_id`) REFERENCES `county_constituencies` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_user_student_id_foreign` FOREIGN KEY (`user_student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
