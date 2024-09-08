-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 06:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

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
(82, '2014_10_12_000000_create_users_table', 1),
(83, '2014_10_12_100000_create_password_resets_table', 1),
(84, '2019_08_19_000000_create_failed_jobs_table', 1),
(85, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(86, '2024_08_30_142144_create__donation_table', 1),
(87, '2024_08_30_142242_create__reason_of_helping', 1),
(88, '2024_08_30_142335_create__news_table', 1),
(89, '2024_08_30_142356_create__volunteer_table', 1),
(90, '2024_08_30_142416_create__activities_table', 1),
(91, '2024_08_30_142513_create__blog_table', 1),
(92, '2024_08_30_142541_create__causes_table', 1),
(93, '2024_08_30_142557_create__comment_table', 1),
(94, '2024_08_31_144307_create__contact_table', 1),
(95, '2024_09_04_082955_create__beginning_table', 2),
(96, '2024_09_06_172417_create__about_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `expires_at`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'API TOKEN', '4fda7c2bd8806a1af2f32185af7617a22f400345e4484fa704f186d54735eef7', '[\"*\"]', NULL, NULL, '2024-08-31 16:34:30', '2024-08-31 16:34:30'),
(2, 'App\\Models\\User', 1, 'API TOKEN', '29dad3c26bd375572742900ec2b60a80c76b9f179a94cf9a1a72dc68bafb647c', '[\"*\"]', NULL, NULL, '2024-08-31 16:36:52', '2024-08-31 16:36:52'),
(3, 'App\\Models\\User', 1, 'API TOKEN', '64f32b17adafa103c06186eb80e0ce337c215ef0dda30bbe2de609578606007b', '[\"*\"]', NULL, NULL, '2024-09-01 05:53:57', '2024-09-01 05:53:57'),
(4, 'App\\Models\\User', 1, 'API TOKEN', '8676a37017bba53c6b83b575b95408aef84aed875c00cd5700e1a2715c6507c8', '[\"*\"]', NULL, NULL, '2024-09-01 06:03:19', '2024-09-01 06:03:19'),
(5, 'App\\Models\\User', 1, 'API TOKEN', '20d0593d6795994c48bc94ab6835b98a207151b090a2476c1c96edee3a0a2f2f', '[\"*\"]', NULL, NULL, '2024-09-01 06:14:15', '2024-09-01 06:14:15'),
(6, 'App\\Models\\User', 2, 'API TOKEN', '1c36a148ed0c59425004015e06316bc4100eab0408367b0f19e5dec6b096a4f1', '[\"*\"]', NULL, NULL, '2024-09-01 06:33:35', '2024-09-01 06:33:35'),
(7, 'App\\Models\\User', 3, 'API TOKEN', '342250ad5b3ab6f61cb341bc2c42e0fb325ca8396f2d95fc0864dc5592ce0da2', '[\"*\"]', NULL, NULL, '2024-09-01 06:36:09', '2024-09-01 06:36:09'),
(8, 'App\\Models\\User', 4, 'API TOKEN', '8ce7e155cb0632fbeb415efd7c34b0d6003c9eec5eee2e6f2c2cc1e1a8d9954a', '[\"*\"]', NULL, NULL, '2024-09-01 06:36:38', '2024-09-01 06:36:38'),
(9, 'App\\Models\\User', 4, 'API TOKEN', '0ce3708a595a6eadb73c1cf30ce477b96f323d1ea528ce5bed33d9988322bfde', '[\"*\"]', NULL, NULL, '2024-09-01 06:36:40', '2024-09-01 06:36:40'),
(10, 'App\\Models\\User', 5, 'API TOKEN', '8199b4b39f6cc02ac16d10e0613188c7ac529b4209680ae443f1edca9bbb963d', '[\"*\"]', NULL, NULL, '2024-09-01 13:54:41', '2024-09-01 13:54:41'),
(11, 'App\\Models\\User', 5, 'API TOKEN', 'afadbad4034f43bb010afb1b4dbb4875f1c8c2c6dead34c4c5f7fd6358132693', '[\"*\"]', NULL, NULL, '2024-09-01 13:54:43', '2024-09-01 13:54:43'),
(12, 'App\\Models\\User', 1, 'API TOKEN', 'b6e21bd7b78af1c89eac422063f21d21c226526ae39e57974298c6ff3dfa104c', '[\"*\"]', NULL, NULL, '2024-09-02 09:09:00', '2024-09-02 09:09:00'),
(13, 'App\\Models\\User', 1, 'API TOKEN', '7780c9ea28939bbad6314d72afd2670784f2a1ab5d8be1bf72bcb2ac9aaa859e', '[\"*\"]', NULL, NULL, '2024-09-02 09:10:51', '2024-09-02 09:10:51'),
(14, 'App\\Models\\User', 1, 'API TOKEN', '5cd8caf582ba3a7d290c7e98f0c35ad7a3c3b8ae0d4f009f0030dd523f0cdccf', '[\"*\"]', NULL, NULL, '2024-09-02 09:12:28', '2024-09-02 09:12:28'),
(15, 'App\\Models\\User', 1, 'API TOKEN', '353fc65e4bbfae5c8db060c7e50a814a5d738aa3703dbfe66fbed557db74ee5d', '[\"*\"]', NULL, NULL, '2024-09-02 09:16:48', '2024-09-02 09:16:48'),
(16, 'App\\Models\\User', 1, 'API TOKEN', '495f6cfcb92e823ed429b7ba48936a6b4c295161e5246efa530e7de62f956dfb', '[\"*\"]', NULL, NULL, '2024-09-02 09:17:01', '2024-09-02 09:17:01'),
(17, 'App\\Models\\User', 1, 'API TOKEN', 'b453b4d37e5f72adeee5bd1f0c7b61d1cdfd35d8ce2dbf03a87953dc5e0ccab1', '[\"*\"]', NULL, NULL, '2024-09-02 09:18:20', '2024-09-02 09:18:20'),
(18, 'App\\Models\\User', 1, 'API TOKEN', '84811f5c7b739bc6f20f1f32c1da43ed4f82b8152a51de96a73b2a3893a63a15', '[\"*\"]', NULL, NULL, '2024-09-02 09:22:35', '2024-09-02 09:22:35'),
(19, 'App\\Models\\User', 1, 'API TOKEN', 'ef3d665474d74729dfc0699fb978e107fb45f48bd97fe0259b0103d2227d3de4', '[\"*\"]', NULL, NULL, '2024-09-02 09:35:53', '2024-09-02 09:35:53'),
(20, 'App\\Models\\User', 1, 'API TOKEN', '128472633a4c086c53041eb362f862733a5d2e9872fb44ff126a4e34ac808288', '[\"*\"]', NULL, NULL, '2024-09-02 09:36:11', '2024-09-02 09:36:11'),
(21, 'App\\Models\\User', 1, 'API TOKEN', '2f7d870c935ef0cc416379962a055593f77af96514626b4d474a6a3da6571904', '[\"*\"]', NULL, NULL, '2024-09-02 09:39:42', '2024-09-02 09:39:42'),
(22, 'App\\Models\\User', 1, 'API TOKEN', '060bdeaf6c47fed72ad98a3606f9819834e700a3f8a85c37cb8dad4350aa58d9', '[\"*\"]', NULL, NULL, '2024-09-02 09:39:50', '2024-09-02 09:39:50'),
(23, 'App\\Models\\User', 6, 'API TOKEN', 'e9b18ddfa2990524712ef2922c583441bda6c9a50541a6ded00e33131ff5dadc', '[\"*\"]', NULL, NULL, '2024-09-02 13:00:28', '2024-09-02 13:00:28'),
(24, 'App\\Models\\User', 7, 'API TOKEN', '5d40dd9ef57d3726cae4292e8a5cf7ab6fd30144d019f8dd646ec03148736851', '[\"*\"]', NULL, NULL, '2024-09-02 13:05:52', '2024-09-02 13:05:52'),
(25, 'App\\Models\\User', 8, 'API TOKEN', 'd578e85ddf918cd57ebb9e7d5b303bb817dde8df6ae200afe315c401e6833fe1', '[\"*\"]', NULL, NULL, '2024-09-02 13:12:46', '2024-09-02 13:12:46'),
(26, 'App\\Models\\User', 1, 'API TOKEN', '20b64729846abccc393bbb870b5f021ed84b05604b16a13b568c28d992dea92c', '[\"*\"]', NULL, NULL, '2024-09-02 13:51:06', '2024-09-02 13:51:06');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fatma', 'ff@ff', NULL, '$2y$10$uPnrCWJMl0yMuAP54aBfYepE533Dye.p2awmJl1rSjx3XF4/ZPQS6', NULL, '2024-08-31 16:34:30', '2024-08-31 16:34:30'),
(2, 'dd', 'dd@dd', NULL, '$2y$10$dOXDZSN6VUOteFuBtNaFIem/5CnYqScQcsObrRfPEpNmYbYNZPGxe', NULL, '2024-09-01 06:33:35', '2024-09-01 06:33:35'),
(3, 'ddd', 'ddd@dd', NULL, '$2y$10$qygDZ2EGx7wdi1ttzREo2.AqglwX8AEzyDTLrFrPjwfTg8Ye7RCc.', NULL, '2024-09-01 06:36:09', '2024-09-01 06:36:09'),
(4, 'ddd', 'ddds@dd', NULL, '$2y$10$E2BQShWl51lWVRySJTl1YOrKOqt6PzMI2RoozSAaaEP1nNHpbRsni', NULL, '2024-09-01 06:36:38', '2024-09-01 06:36:38'),
(5, 'fa', 'fafa@gmail', NULL, '$2y$10$xfGpUZIBEtn.hwodblrFhOjZXc0.UP29AUbPPg3VQbdvkmJndeWUS', NULL, '2024-09-01 13:54:41', '2024-09-01 13:54:41'),
(6, 'fatma', 'ff@ffm', NULL, '$2y$10$9YM2ueRgHBEBrLzEAzCFB.PTbNE4IqTRhLjRggHp8O5m/4MVaqnRW', NULL, '2024-09-02 13:00:28', '2024-09-02 13:00:28'),
(7, 'fatma', 'ff@ffmbg', NULL, '$2y$10$YnLinDAZpPa/wdXXuOdKWu/J9vQ27JrSK7TsleKVzoZzfX0Qxj8Ay', NULL, '2024-09-02 13:05:52', '2024-09-02 13:05:52'),
(8, 'UnityNet', 'fatima.n.qunnises@gmail.com', NULL, '$2y$10$X1oEM1CepcXI2pDmHoSUa.1WW.1AgAOWqhZNS.MGQmhDLBAHFJdXy', NULL, '2024-09-02 13:12:46', '2024-09-02 13:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `_about`
--

CREATE TABLE `_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_about`
--

INSERT INTO `_about` (`id`, `phone`, `email`, `facebook`, `pinterest`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '050508585858585', 'dd@f', 'dd', 'd', 'd', 'd', '2024-09-06 15:18:27', '2024-09-06 15:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `_activities`
--

CREATE TABLE `_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `videoUrl` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_activities`
--

INSERT INTO `_activities` (`id`, `name`, `videoUrl`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'ddd', 'https://www.youtube.com/watch?v=MG3jGHnBVQs&t=1s', 'ddd', '2024-09-01 06:52:48', '2024-09-06 15:08:23'),
(2, 'Activities1', 'https://www.youtube.com/watch?v=MG3jGHnBVQs&t=1s', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation. tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation.', '2024-09-01 06:52:50', '2024-09-01 06:52:50'),
(3, 'Activities1', 'https://www.youtube.cozm/embed/MG3jGHnBVQs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation. tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation.', '2024-09-01 06:52:53', '2024-09-01 06:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `_beginning`
--

CREATE TABLE `_beginning` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_beginning`
--

INSERT INTO `_beginning` (`id`, `p1`, `p2`, `p3`, `created_at`, `updated_at`) VALUES
(1, '  ', 'dds', ';l', '2024-09-04 05:43:31', '2024-09-04 08:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `_blog`
--

CREATE TABLE `_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_blog`
--

INSERT INTO `_blog` (`id`, `name`, `date`, `imgUrl`, `style`, `disc`, `created_at`, `updated_at`) VALUES
(2, 'Google inks pact for new 35-storey office', '2019-07-18', '/images/6.png', 'Travel, Lifestyle', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '2024-09-01 06:54:57', '2024-09-01 06:54:57'),
(3, 'Google inks pact for new 35-storey office', '2019-07-18', '/images/6.png', 'Travel, Lifestyle', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '2024-09-01 06:55:00', '2024-09-01 06:55:00'),
(6, 'Google inks pact for new 35-storey office', '2024-09-06', '/images/6.png', 'Travel, Lifestyle', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '2024-09-06 18:17:45', '2024-09-06 18:17:45'),
(7, 'Friendly Volunteers2', '2024-09-06', '/images/6.png', 'Travel, Lifestyle', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '2024-09-06 18:19:56', '2024-09-07 10:39:46'),
(8, 'Friendly Volunteers', '2024-09-08', '1725805367.png', 'Travel, Lifestyle', 'fdfd', '2024-09-08 11:22:48', '2024-09-08 11:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `_causes`
--

CREATE TABLE `_causes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `raised` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `pre` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `smallDisc` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_causes`
--

INSERT INTO `_causes` (`id`, `name`, `raised`, `goal`, `pre`, `imgUrl`, `smallDisc`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Clothes For Everyone Everyone23', '$5000.00', '$9000.00', '30%', '/images/2.png\n', 'The passage is attributed to an unknown typesetter in the century who is thought', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', '2024-09-01 06:53:40', '2024-09-07 10:27:52'),
(2, 'Clothes For Everyone', '$5000.00', '$5000.00', '30%', '/images/2.png\n', 'The passage is attributed to an unknown typesetter in the century who is thought', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', '2024-09-01 06:53:42', '2024-09-05 15:15:12'),
(3, 'Clothes For Everyone4', '$5000.00', '$9000.00', '30%', '/images/2.png\n', 'The passage is attributed to an unknown typesetter in the century who is thought', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', '2024-09-01 06:53:45', '2024-09-07 10:28:10'),
(4, 'Clothes For Everyone', '$5000.00', '$9000.00', '30%', '/images/2.png\n', 'The passage is attributed to an unknown typesetter in the century who is thought', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', '2024-09-01 06:53:47', '2024-09-01 06:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `_comment`
--

CREATE TABLE `_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_contact`
--

CREATE TABLE `_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_contact`
--

INSERT INTO `_contact` (`id`, `message`, `name`, `email`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Clothes For Everyone', 'dd', 'dd@dd', 'ddd', '2024-09-01 06:55:27', '2024-09-01 06:55:27'),
(2, 'Clothes For Everyone', 'dd', 'dd@dd', 'ddd', '2024-09-01 06:55:30', '2024-09-01 06:55:30'),
(3, 'Clothes For Everyone', 'dd', 'dd@dd', 'ddd', '2024-09-01 06:55:32', '2024-09-01 06:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `_donation`
--

CREATE TABLE `_donation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ammount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_news`
--

CREATE TABLE `_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_news`
--

INSERT INTO `_news` (`id`, `name`, `date`, `imgUrl`, `desc`, `created_at`, `updated_at`) VALUES
(3, 'Pure Water Is More Essential', '2019-07-18', '/images/5.png', 'The passage experienced a surge in popularity during the 1960s when used it on their sheets, and again.', '2024-09-01 06:54:03', '2024-09-01 06:54:03'),
(4, 'Pure Water Is More Essential', '2024-09-07', '/images/5.png', 'The passage experienced a surge in popularity during the 1960s when used it on their sheets, and again2.', '2024-09-01 06:54:06', '2024-09-07 10:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `_reason_of_helping`
--

CREATE TABLE `_reason_of_helping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_reason_of_helping`
--

INSERT INTO `_reason_of_helping` (`id`, `name`, `imgUrl`, `desc`, `created_at`, `updated_at`) VALUES
(6, 'Friendly Volunteer', '/images/1.png\n', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.', '2024-09-05 05:31:54', '2024-09-07 09:00:13'),
(7, 'Friendly Volunteer', '/images/1.png\n', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.', '2024-09-05 05:32:02', '2024-09-05 05:32:02'),
(10, 's', '/images/1.png\n', 's', '2024-09-07 08:20:31', '2024-09-07 08:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `_volunteer`
--

CREATE TABLE `_volunteer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_volunteer`
--

INSERT INTO `_volunteer` (`id`, `name`, `info`, `imgUrl`, `facebook`, `pinterest`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(2, 'Emran Ahmed222', 'Volunteer222', '/images/3.png', 'https://www.facebook.com/', 'https://www.pinterest.com/', 'https://www.linkedin.com/', 'https://x.com/', '2024-09-01 06:53:20', '2024-09-06 09:57:53'),
(3, 'youssef Ahmed2', 'Volunteer', '/images/3.png', 'https://www.facebook.com/', 'https://www.pinterest.com/', 'https://www.linkedin.com/', 'https://x.com/', '2024-09-01 06:53:22', '2024-09-07 10:36:52');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_about`
--
ALTER TABLE `_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_activities`
--
ALTER TABLE `_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_beginning`
--
ALTER TABLE `_beginning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_blog`
--
ALTER TABLE `_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_causes`
--
ALTER TABLE `_causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_comment`
--
ALTER TABLE `_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_comment_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `_contact`
--
ALTER TABLE `_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_donation`
--
ALTER TABLE `_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_news`
--
ALTER TABLE `_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_reason_of_helping`
--
ALTER TABLE `_reason_of_helping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_volunteer`
--
ALTER TABLE `_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_about`
--
ALTER TABLE `_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_activities`
--
ALTER TABLE `_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_beginning`
--
ALTER TABLE `_beginning`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_blog`
--
ALTER TABLE `_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_causes`
--
ALTER TABLE `_causes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `_comment`
--
ALTER TABLE `_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_contact`
--
ALTER TABLE `_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_donation`
--
ALTER TABLE `_donation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_news`
--
ALTER TABLE `_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_reason_of_helping`
--
ALTER TABLE `_reason_of_helping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `_volunteer`
--
ALTER TABLE `_volunteer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_comment`
--
ALTER TABLE `_comment`
  ADD CONSTRAINT `_comment_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `_blog` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
