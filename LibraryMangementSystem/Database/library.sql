-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 12:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(22) NOT NULL,
  `author` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`, `updated_at`, `created_at`) VALUES
(2, 'Project Bca', '2024-06-30', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `slug`, `category_id`, `author_id`, `price`, `quantity`, `description`, `image`, `status`, `updated_at`, `created_at`) VALUES
(17, 'Do It Today: Overcome procrastination, improve productivity', 'do-it-today-overcome-procrastination-improve-productivity', 2, 2, '20', 20, '<p>The International Bestseller: DO IT TODAY<br><br>Are you also tired of putting off your dreams until \"tomorrow?\" Guess what! Tomorrow never comes. Am I right?<br>I\'ve procrastinated and putt off my desire to write a book for a decade. I always came up with excuses like, \"it\'s not the right time.\" Or, \"I need to do more research.\"<br>But in 2015 I got tired of this endless procrastination, and finally took action. Six months later, my first book was published.<br>Look, we all have limited time on our hands. And we\'re getting closer to death every single minute. That shouldn\'t scare. That should motivate you!</p>', '1719486656.jpg', 1, '2024-07-02 01:02:50', '2024-06-27 11:10:56'),
(18, 'Ghosts of The Silent Hills: Stories based on true hauntings', 'ghosts-of-the-silent-hills-stories-based-on-true-hauntings', 4, 2, '30', 10, '<p>The dead do not rest till they get what they want. You have arrived in the hills. In here, you are surrounded by dense, menacing forests, enveloped in a deadly silence... You never know what lurks here in the Cold, dark night. Do not walk alone after sunset in the hills. A beautiful woman in white haunts the Lonely pathways, looking to enchant and ensnare men... All the people who died in accidents here... They say you hear their screams at night. And the deserted lodges sitting amidst lush greenery and calm streams... Spirits lie in wait here, ready to prey on the living. There are sceptics who did not heed these warnings. They tried to rationalize what they saw, what they felt. But when they came face to face with the beings that they believed didn&rsquo;t exist, they couldn&rsquo;t run away anymore... Ghosts of the silent hills is a collection that will make your nights a little scarier, encompassing the very best spine-chilling stories based on true hauntings.</p>', '1719487960.jpg', 1, '2024-06-27 11:32:40', '2024-06-27 11:32:40'),
(19, 'The Psychology of Money', 'the-psychology-of-money', 3, 2, '20', 12, '<div id=\"bookDescription_feature_div\" class=\"celwidget\" data-feature-name=\"bookDescription\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"bookDescription\" data-csa-c-slot-id=\"bookDescription_feature_div\" data-csa-c-asin=\"9390166268\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"buqmqv-ay2cem-u39877-nm3xs5\" data-cel-widget=\"bookDescription_feature_div\">\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-spacing-base a-expander-partial-collapse-container\" data-a-expander-name=\"book_description_expander\" data-a-expander-collapsed-height=\"280\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" data-expanded=\"false\"><span style=\"color: rgb(236, 240, 241);\">Timeless lessons on wealth, greed, and happiness doing well with money isn?t necessarily about what you know. It?s about how you behave. And behavior is hard to teach, even to really smart people. How to manage money, invest it, and make business decisions are typically considered to involve a lot of mathematical calculations, where data and formulae tell us exactly what to do. But in the real world, people don?t make financial decisions on a spreadsheet. They make them at the dinner table, or in a meeting room, where personal history, your unique view of the world, ego, pride, marketing, and odd incentives are scrambled together. In the psychology of money, the author shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life?s most important matters.</span></div>\r\n</div>\r\n</div>\r\n<div id=\"globalStoreInfoBullets_feature_div\" class=\"celwidget\" data-feature-name=\"globalStoreInfoBullets\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"globalStoreInfoBullets\" data-csa-c-slot-id=\"globalStoreInfoBullets_feature_div\" data-csa-c-asin=\"9390166268\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"iwtz47-ley6rd-y1wwdk-j7fhet\" data-cel-widget=\"globalStoreInfoBullets_feature_div\"></div>\r\n<div id=\"buyingOptionNostosBadge_feature_div\" class=\"celwidget\" data-feature-name=\"buyingOptionNostosBadge\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"buyingOptionNostosBadge\" data-csa-c-slot-id=\"buyingOptionNostosBadge_feature_div\" data-csa-c-asin=\"9390166268\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"jbe77v-k2s49f-7yallp-os6d46\" data-cel-widget=\"buyingOptionNostosBadge_feature_div\"></div>\r\n<div id=\"tellAmazon_feature_div\" class=\"celwidget\" data-feature-name=\"tellAmazon\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"tellAmazon\" data-csa-c-slot-id=\"tellAmazon_feature_div\" data-csa-c-asin=\"9390166268\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"md40d0-td8jen-4tua8i-lhlrx2\" data-cel-widget=\"tellAmazon_feature_div\">\r\n<div class=\"celwidget c-f\" data-csa-op-log-render=\"\" data-csa-c-content-id=\"DsUnknown\" data-csa-c-slot-id=\"DsUnknown-4\" data-csa-c-type=\"widget\" data-csa-c-painter=\"tell-amazon-desktop-cards\" data-csa-c-id=\"2aibvs-sg2ctg-58ku5r-innb00\" data-cel-widget=\"tell-amazon-desktop_DetailPage_3\">\r\n<div id=\"CardInstanceKz0Q43CDCjB3F8CjESeRvw\" data-card-metrics-id=\"tell-amazon-desktop_DetailPage_3\" data-acp-tracking=\"{}\" data-mix-claimed=\"true\">\r\n<div class=\"_tell-amazon-desktop_style_tell_amazon_div__1YDZk\" data-asin=\"9390166268\" data-marketplace=\"A21TJRUUN4KGV\" data-logged-in=\"false\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '1719488086.jpg', 1, '2024-07-02 00:29:12', '2024-06-27 11:34:46'),
(20, 'The Power of Your Subconscious Mind', 'the-power-of-your-subconscious-mind', 2, 2, '20', 12, '<div id=\"bookDescription_feature_div\" class=\"celwidget\" data-feature-name=\"bookDescription\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"bookDescription\" data-csa-c-slot-id=\"bookDescription_feature_div\" data-csa-c-asin=\"8172345666\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"dygm53-1ykv9u-9p88xd-e89oeq\" data-cel-widget=\"bookDescription_feature_div\">\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-spacing-base a-expander-partial-collapse-container\" data-a-expander-name=\"book_description_expander\" data-a-expander-collapsed-height=\"280\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" data-expanded=\"false\"><span style=\"color: rgb(255, 255, 255);\">This remarkable book by Dr. Joseph Murphy, one of the pioneering voices of affirmative thinking, will unlock for you the truly staggering powers of your subconscious mind. Combining time-honored spiritual wisdom with cutting edge scientific research, Dr. Murphy explains how the subconscious mind influences every single thing that you do and how, by understanding it and learning to control its incredible force, you can improve the quality of your daily life.Everything, from the promotion that you wanted and the raise you think you deserve, to overcoming phobias and bad habits and strengthening interpersonal relationships, the Power of Your Subconscious Mind will open a world of happiness, success, prosperity and peace for you. It will change your life and your world by changing your beliefs.</span></div>\r\n</div>\r\n</div>\r\n<div id=\"globalStoreInfoBullets_feature_div\" class=\"celwidget\" data-feature-name=\"globalStoreInfoBullets\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"globalStoreInfoBullets\" data-csa-c-slot-id=\"globalStoreInfoBullets_feature_div\" data-csa-c-asin=\"8172345666\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"pb2wrw-1aki7a-ja2ci1-k0mjv7\" data-cel-widget=\"globalStoreInfoBullets_feature_div\"></div>\r\n<div id=\"buyingOptionNostosBadge_feature_div\" class=\"celwidget\" data-feature-name=\"buyingOptionNostosBadge\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"buyingOptionNostosBadge\" data-csa-c-slot-id=\"buyingOptionNostosBadge_feature_div\" data-csa-c-asin=\"8172345666\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"w1t2wv-13yq2o-1u6zvj-9hblby\" data-cel-widget=\"buyingOptionNostosBadge_feature_div\"></div>\r\n<div id=\"tellAmazon_feature_div\" class=\"celwidget\" data-feature-name=\"tellAmazon\" data-csa-c-type=\"widget\" data-csa-c-content-id=\"tellAmazon\" data-csa-c-slot-id=\"tellAmazon_feature_div\" data-csa-c-asin=\"8172345666\" data-csa-c-is-in-initial-active-row=\"false\" data-csa-c-id=\"hncs09-vpceuk-7hisj0-huhfot\" data-cel-widget=\"tellAmazon_feature_div\">\r\n<div class=\"celwidget c-f\" data-csa-op-log-render=\"\" data-csa-c-content-id=\"DsUnknown\" data-csa-c-slot-id=\"DsUnknown-4\" data-csa-c-type=\"widget\" data-csa-c-painter=\"tell-amazon-desktop-cards\" data-csa-c-id=\"8wfkss-gzt7ph-ahovbi-zi6evi\" data-cel-widget=\"tell-amazon-desktop_DetailPage_3\">\r\n<div id=\"CardInstanceTn41BiAOtJiQy-VNlPFAYA\" data-card-metrics-id=\"tell-amazon-desktop_DetailPage_3\" data-acp-tracking=\"{}\" data-mix-claimed=\"true\">\r\n<div class=\"_tell-amazon-desktop_style_tell_amazon_div__1YDZk\" data-asin=\"8172345666\" data-marketplace=\"A21TJRUUN4KGV\" data-logged-in=\"false\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '1719488172.jpg', 1, '2024-07-02 00:23:15', '2024-06-27 11:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Applied',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `user_id`, `book_id`, `price`, `quantity`, `status`, `updated_at`, `created_at`) VALUES
(4, 27, 17, 20, 1, 'Returned', '2024-07-02 01:02:50', '2024-07-02 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Motivational', 1, '2024-06-27 05:38:36', '2024-06-27 05:38:36'),
(3, 'Money', 1, '2024-06-27 05:38:53', '2024-06-27 05:38:53'),
(4, 'Horror', 1, '2024-06-27 05:38:59', '2024-06-27 05:38:59'),
(5, 'Romance', 1, '2024-06-27 05:39:06', '2024-06-27 05:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `password` longtext NOT NULL,
  `status` int(12) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `mobile`, `password`, `status`, `updated_at`, `created_at`) VALUES
(27, 'asd', 'asad@gmail.com', '34567890', '$2y$12$1ObQr8brTelrAwd5ZFi0KOt.HOZ0UVDGP7Iu9mqmBHWJZ2TfqvhsW', 1, '2024-06-30 15:47:26.000000', '2024-06-29 14:45:47.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '$2y$10$1XbdcrvS7.KuWEYonCB9dOO.Mh2PdWOl27mNsYwey3mYQHlNwqdDm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
