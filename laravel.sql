-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:58 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_number` int(20) NOT NULL,
  `join_date` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `mgr_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `dept_id`, `job`, `email`, `mobile_number`, `join_date`, `salary`, `mgr_id`) VALUES
(1234, 'a', 1234, 'bl-7', 'a@gmail.com', 78587, 7845, 78987, 1234),
(123, 'b', 123, 'bl-9', 'b@gmail.com', 87587, 7847, 68978, 1235);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Id`, `name`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a1', 'a1@gmail.com', NULL, '2020-03-13 00:12:46', '2020-03-13 00:12:46'),
(2, 'komarti', 'komarti@gmail.com', NULL, '2020-03-13 00:13:07', '2020-03-13 00:13:07'),
(3, 'a2', 'a2@gmail.com', NULL, '2020-03-13 00:17:19', '2020-03-13 00:17:19');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_13_045058_emps', 2),
(6, '2020_03_13_050841_employees', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mproducts`
--

CREATE TABLE `mproducts` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mproducts`
--

INSERT INTO `mproducts` (`id`, `name`) VALUES
(2, 'That is MahaLakshmi'),
(3, 'Majili'),
(4, 'Suryakantham'),
(5, 'Geetha Govindam'),
(6, 'Tholiprema'),
(7, 'GangLeader'),
(8, 'Syeraa'),
(9, 'Chanakya'),
(10, 'Saaho'),
(11, 'Simbaa'),
(12, 'URI'),
(13, 'Super 30'),
(14, 'Bharat'),
(15, 'Kalank'),
(16, 'Gully Boy'),
(17, 'Badla'),
(18, 'Luka Chuppi'),
(19, 'Total Dhamaal'),
(20, 'Spider man far from '),
(21, 'Hobbs and shaw'),
(22, 'Joker'),
(23, 'Gemini Man'),
(24, 'John wick 3'),
(25, 'Shazam'),
(26, 'Maleficient 2'),
(27, 'Aladdin'),
(28, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `musers`
--

CREATE TABLE `musers` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musers`
--

INSERT INTO `musers` (`id`, `first_name`, `last_name`, `email_id`, `password`, `phone`) VALUES
(1, 'komarti', 'venkata teja', 'a1@gmail.com', '123456', 7896547896);

-- --------------------------------------------------------

--
-- Table structure for table `muser_products`
--

CREATE TABLE `muser_products` (
  `id` bigint(100) NOT NULL,
  `uid` bigint(100) NOT NULL,
  `pid` bigint(100) NOT NULL,
  `no of tickets` bigint(100) NOT NULL,
  `total` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','confirmed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muser_products`
--

INSERT INTO `muser_products` (`id`, `uid`, `pid`, `no of tickets`, `total`, `date`, `status`) VALUES
(1, 0, 8, 1, 260, '0000-00-00', 'pending'),
(2, 4, 8, 10, 2600, '0000-00-00', 'pending'),
(3, 4, 8, 1, 260, '0000-00-00', 'pending'),
(4, 1, 8, 4, 1040, '0000-00-00', 'pending'),
(5, 1, 8, 10, 2600, '0000-00-00', 'confirmed'),
(6, 1, 8, 1, 260, '0000-00-00', 'confirmed'),
(7, 1, 13, 1, 260, '0000-00-00', 'pending'),
(8, 1, 8, 1, 260, '0000-00-00', 'confirmed'),
(9, 1, 14, 6, 1560, '0000-00-00', 'confirmed'),
(10, 1, 13, 10, 2600, '0000-00-00', 'pending'),
(11, 1, 8, 20, 5200, '0000-00-00', 'pending'),
(12, 1, 8, 1, 260, '0000-00-00', 'confirmed'),
(13, 1, 18, 4, 1040, '0000-00-00', 'confirmed'),
(14, 1, 26, 3, 780, '0000-00-00', 'pending'),
(15, 1, 8, 16, 4160, '0000-00-00', 'confirmed'),
(16, 1, 28, 1, 260, '0000-00-00', 'pending'),
(17, 1, 8, 70, 18200, '0000-00-00', 'confirmed'),
(18, 1, 5, 1, 260, '0000-00-00', 'pending'),
(19, 1, 14, 1, 260, '0000-00-00', 'confirmed'),
(20, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(21, 1, 14, 1, 260, '2020-03-25', 'confirmed'),
(22, 1, 8, 2, 520, '2020-03-25', 'confirmed'),
(23, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(24, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(25, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(26, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(27, 1, 8, 10, 2600, '2017-12-22', 'confirmed'),
(28, 1, 8, 7, 1820, '2020-05-25', 'confirmed'),
(29, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(30, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(31, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(32, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(33, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(34, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(35, 1, 8, 1, 260, '2020-03-26', 'confirmed'),
(36, 1, 8, 1, 260, '2020-04-25', 'confirmed'),
(37, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(38, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(39, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(40, 1, 6, 1, 260, '2020-03-26', 'confirmed'),
(41, 1, 6, 1, 260, '2020-03-27', 'confirmed'),
(42, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(43, 1, 6, 1, 260, '2020-03-26', 'confirmed'),
(44, 1, 8, 1, 260, '2020-03-26', 'confirmed'),
(45, 1, 8, 1, 260, '2020-03-26', 'confirmed'),
(46, 1, 8, 1, 260, '2020-04-25', 'confirmed'),
(47, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(48, 1, 8, 1, 260, '2020-04-25', 'confirmed'),
(49, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(50, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(51, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(52, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(53, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(54, 1, 6, 1, 260, '2020-03-25', 'confirmed'),
(55, 1, 6, 1, 260, '2020-03-25', 'pending'),
(56, 1, 6, 1, 260, '2020-03-26', 'pending'),
(57, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(58, 1, 8, 1, 260, '2020-03-26', 'confirmed'),
(59, 1, 8, 1, 260, '2020-05-25', 'confirmed'),
(60, 1, 8, 1, 260, '2020-04-25', 'confirmed'),
(61, 1, 8, 1, 260, '2020-03-25', 'confirmed'),
(62, 1, 8, 1, 260, '2020-05-25', 'confirmed'),
(63, 1, 8, 1, 260, '2020-07-26', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_no` int(20) NOT NULL,
  `purch_amt` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `salesmen_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_no`, `purch_amt`, `customer_id`, `salesmen_id`) VALUES
(1, 1458, 1234, 2589),
(1, 1458, 1234, 2589),
(2, 7857, 1244, 2779),
(3, 4557, 1644, 2699);

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`) VALUES
(1, 'name1', 'venkata@gmail.com', 34),
(2, 'name2', 'teja@gmail.com', 12),
(3, 'name3', 'name3@gmail.com', 10),
(4, 'babcd1', 'a2@gmail.com', 23),
(6, 'abcc', 'a3@gmail.com', 25),
(7, 'komarti', 'komarti@gmail.com', 19),
(7, 'komarti', 'komarti@gmail.com', 19),
(7, 'komarti', 'komarti@gmail.com', 19),
(0, '1', 'a1@exam.com', 0),
(0, '2', 'b1@exam.com', 0),
(0, '1', 'a1@exam.com', 0),
(0, '2', 'b1@exam.com', 0),
(0, '1', 'a1@exam.com', 0),
(0, '2', 'b1@exam.com', 0),
(0, '1', 'a1@exam.com', 0),
(0, '2', 'b1@exam.com', 0),
(0, '1', 'a1@exam.com', 0),
(0, '2', 'b1@exam.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`uname`, `email`, `age`) VALUES
('venkata', 'gfgcggch@ghgjhj.gfg', 56),
('a1', 'a1@gmail.com', 12),
('a2', 'a2@gmail.com', 15),
('a3', 'a3@gmail.com', 14),
('a4', 'a4@gmail.com', 19),
('a5', 'a5@bablu.com', 12),
('a6', 'a6@gmail.com', 12);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mproducts`
--
ALTER TABLE `mproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musers`
--
ALTER TABLE `musers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muser_products`
--
ALTER TABLE `muser_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `musers`
--
ALTER TABLE `musers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muser_products`
--
ALTER TABLE `muser_products`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
