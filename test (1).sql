-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 04:59 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory_adi`
--

CREATE TABLE `catagory_adi` (
  `cat_Id` varchar(50) NOT NULL,
  `cat_Name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagory_adi`
--

INSERT INTO `catagory_adi` (`cat_Id`, `cat_Name`, `date`) VALUES
('2', 'Mobile', '2023-11-29'),
('3', 'Cake', '2023-11-16'),
('2', 'Mobile', '2023-11-29'),
('3', 'Cake', '2023-11-16'),
('2', 'brower', '2023-11-29'),
('13', '7up', '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_frm`
--

CREATE TABLE `contact_frm` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_frm`
--

INSERT INTO `contact_frm` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'gdg'),
(2, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'gdg'),
(3, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'gdg'),
(20, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'hhhhhhhhh'),
(21, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'hhhhhhhhh'),
(22, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'hhhhhhhhh'),
(23, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'ggg'),
(24, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'ggg'),
(25, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'fdf'),
(26, 'MD. NAZMUL HAQUE', 'nazmulhaque181915@gmail.com', '01725181915', 'oio');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `joind_date` date NOT NULL,
  `balance` int(11) NOT NULL,
  `last_purches_date` date NOT NULL,
  `last_price_cost` int(11) NOT NULL,
  `create_panel` varchar(50) NOT NULL,
  `createtor_id` varchar(50) NOT NULL,
  `total_purches_count` int(11) NOT NULL,
  `customer_behebihar` varchar(50) NOT NULL,
  `coustmore_sale_id` varchar(50) NOT NULL,
  `coustmore_retun_count` varchar(50) NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Device_Info` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_name`, `mobile`, `address`, `joind_date`, `balance`, `last_purches_date`, `last_price_cost`, `create_panel`, `createtor_id`, `total_purches_count`, `customer_behebihar`, `coustmore_sale_id`, `coustmore_retun_count`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `Device_Info`, `id`) VALUES
('Hanif amed', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 12, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 1),
('rokey', '01774255010', 'hatra', '0000-00-00', 10, '2023-11-14', 150, 'sagor', '4525', 35, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 2),
('rofiqul islam', '01774255010', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 1, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 3),
('nirob', '01789457874', 'hatra', '0000-00-00', 10, '2023-10-01', 150, 'sagor', '4525', 30, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 4),
('ruble', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-11', 150, 'sagor', '4525', 33, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 5),
('allamin', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 20, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 6),
('faruk', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 16, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 7),
('taniya', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 30, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 8),
('jaidur rahamin', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-15', 150, 'sagor', '4525', 55, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 9),
('riyad', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 3, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 10),
('rifat', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-13', 150, 'sagor', '4525', 50, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 11),
('ripon', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 23, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 12),
('joykhan', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 6, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 13),
('hasan', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 5, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 14),
('cherur', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-19', 150, 'sagor', '4525', 99, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 15),
('hanna', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 10, 'good', '458', '10', '4545', '4545', 'hamja', '30', 'adrosh', '5547dsda4f', 16),
('SHAHANARA', '01303268667', 'gg', '0000-00-00', 0, '2023-11-20', 0, '54578', '362', 30, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 19),
('jibon', '01701077584', 'hatra', '0000-00-00', 0, '2023-11-20', 0, '54578', '362', 3, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 20),
('SHAHANARA', '01303268667', 'gg', '0000-00-00', 0, '2023-11-05', 0, '54578', '362', 31, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 22),
('alladuudin', '01701077584', 'hatra', '0000-00-00', 0, '2023-11-20', 0, '54578', '362', 9, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 23),
('SHAH', '01725181915', 'hatra', '0000-00-00', 5, '2023-11-05', 0, '54578', '362', 32, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 24),
('Roshany', '01725181915', 'gg', '2023-11-21', 5, '2023-11-11', 0, '54578', '362', 34, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 28),
('Nadim', '0132356464', 'hatra', '2023-11-21', 5, '2023-11-21', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 29),
('jibon', '1774255009', 'hatra', '2023-11-21', 5, '2023-11-21', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 30),
('rohan', '01789562325', 'Mokinpur', '2023-11-21', 0, '2023-11-21', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 31),
('Najmul', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 83),
('SHAHANARA', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 85),
('Roshany', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 97),
('jibon', '01701077584', 'Mokinpur', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 115);

-- --------------------------------------------------------

--
-- Table structure for table `filght`
--

CREATE TABLE `filght` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mather_name` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filght`
--

INSERT INTO `filght` (`id`, `Name`, `father_name`, `mather_name`, `Adress`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(4, 'sagor', 'abul', 'champa', 'hatra', '01774255009', 'choncholk420@gamil.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginfo`
--

CREATE TABLE `loginfo` (
  `Adminid` int(11) NOT NULL,
  `Shopname` varchar(50) NOT NULL,
  `ShopAddress` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `StrafCount` int(5) NOT NULL,
  `AdminCat` varchar(10) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `MobileVerifa` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  `ProfileImage` varchar(150) NOT NULL,
  `UpdateProfileCout` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loginfo`
--

INSERT INTO `loginfo` (`Adminid`, `Shopname`, `ShopAddress`, `email`, `password`, `StrafCount`, `AdminCat`, `Mobile`, `MobileVerifa`, `CreateDate`, `ProfileImage`, `UpdateProfileCout`, `Name`) VALUES
(1, 'Adrosho Shop Lit', 'Kamarpara Bazar,Mohanpur,Rajshahi', 'choncholk420@gmail,com', '102030', 2, '1', '01774255009', 'ok', '2023-11-23', 'fdfsdf', '5', 'MD.SAGOR ALI');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_06_163706_create_filght_table', 2),
(21, '2023_11_12_061715_system_info', 3),
(22, '2023_11_15_142003_catgagory', 3),
(23, '2023_11_15_142920_purchers_list', 3),
(25, '2014_10_12_000000_create_users_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `Product_name` varchar(100) NOT NULL,
  `Product_cat` varchar(50) NOT NULL,
  `Add_date` date NOT NULL,
  `Update_Date` date NOT NULL,
  `product_barcode` varchar(50) NOT NULL,
  `product_compony` varchar(50) NOT NULL,
  `product_compony_id` varchar(50) NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Device_Info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purches_list`
--

CREATE TABLE `purches_list` (
  `customer_id` varchar(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `purches_date` date NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `product_Name` varchar(100) NOT NULL,
  `product_Price` int(11) NOT NULL,
  `product_Info` varchar(100) NOT NULL,
  `profit_to_Pruduct` int(11) NOT NULL,
  `prodcut_Add_date` date NOT NULL,
  `prodcut_Exp_date` date NOT NULL,
  `prodcut_Provide_com` varchar(100) NOT NULL,
  `prodcut_Purcher_price` int(11) NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Device_Info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_info`
--

CREATE TABLE `stock_info` (
  `Product_barcode_id` varchar(50) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Avilable_Product` varchar(50) NOT NULL,
  `Facility_Product` varchar(50) NOT NULL,
  `Total_product` varchar(50) NOT NULL,
  `Purches_Price` varchar(50) NOT NULL,
  `Sales_Price` int(11) NOT NULL,
  `Product_Expire_date` date NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Device_Info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `company_Id` varchar(50) NOT NULL,
  `company_Name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`company_Id`, `company_Name`, `date`) VALUES
('20', 'pan', '2023-11-09'),
('21', 'RFL', '2023-11-15'),
('20', 'pan', '2023-11-09'),
('21', 'RFL', '2023-11-15'),
('25', 'Minzah', '2023-11-09'),
('29', 'Computer', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `Shopname` varchar(50) NOT NULL,
  `ShopAddress` varchar(50) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `StrafCount` int(5) NOT NULL,
  `AdminCat` varchar(10) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `MobileVerifa` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  `image` varchar(150) NOT NULL,
  `UpdateProfileCout` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `AdminKey` varchar(50) NOT NULL,
  `last_seen` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Shopname`, `ShopAddress`, `email`, `password`, `StrafCount`, `AdminCat`, `Mobile`, `MobileVerifa`, `CreateDate`, `image`, `UpdateProfileCout`, `Name`, `AdminKey`, `last_seen`, `updated_at`) VALUES
(9, 'Adrosho', 'kamarapara', 'ferkey.net@gmail.com', '$2y$10$MUwk4g3w2REUSO8mXkkRz.dmgAU98SgWLLftxSAl64We2di4hf9Sm', 22, 'Admin', '01789658987', 'OK', '2023-11-24', '1701069398.jpg', '10', 'MD. SAGOR ALI', '420', '2023-11-27 09:49:38.000000', '2023-11-27 09:49:38.000000'),
(34, 'Adrosho', 'kamarapara', 'nazmulhaque181915@gmail.com', '$2y$10$8yyPk86k.R3ty01I.PHCkuWW7Pa9AZQAAduAS2ebw5SHjzeoxuF92', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071158.jpg', '20', 'MD. NAZMUL HAQUE', '9', '2023-11-27 08:23:54.000000', '2023-11-27 08:23:54.000000'),
(35, 'Adrosho', 'kamarapara', 'fahmida.roshny.15@gmail.com', '$2y$10$oDGr3IU8NhOfv5gsC7G9Nu934EhDcyAgEyCB5Zgx.4tvg06ntgPhy', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071385.jpg', '20', 'FAHMIDA  AKTER', '9', '2023-11-27 12:32:37.415916', '2023-11-27 14:14:20.874903');

-- --------------------------------------------------------

--
-- Table structure for table `usersxxxx`
--

CREATE TABLE `usersxxxx` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Shopname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersxxxx`
--

INSERT INTO `usersxxxx` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Shopname`) VALUES
(1, 'MD SAGOR ALI', 'ferkey.net@gmail.com', NULL, '$2y$10$MUwk4g3w2REUSO8mXkkRz.dmgAU98SgWLLftxSAl64We2di4hf9Sm', NULL, NULL, NULL, 'Adrsoh shop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_frm`
--
ALTER TABLE `contact_frm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filght`
--
ALTER TABLE `filght`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginfo`
--
ALTER TABLE `loginfo`
  ADD PRIMARY KEY (`Adminid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersxxxx`
--
ALTER TABLE `usersxxxx`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_frm`
--
ALTER TABLE `contact_frm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `filght`
--
ALTER TABLE `filght`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginfo`
--
ALTER TABLE `loginfo`
  MODIFY `Adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `usersxxxx`
--
ALTER TABLE `usersxxxx`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
