-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2025 at 06:26 PM
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
-- Table structure for table `assets_and_properity`
--

CREATE TABLE `assets_and_properity` (
  `id` int(11) NOT NULL,
  `Outlet_id` int(20) NOT NULL,
  `AdminCat` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Info_update` date NOT NULL,
  `Amount` int(50) NOT NULL,
  `Amountdetails` varchar(100) NOT NULL,
  `supplier_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assets_and_properity`
--

INSERT INTO `assets_and_properity` (`id`, `Outlet_id`, `AdminCat`, `Date`, `Info_update`, `Amount`, `Amountdetails`, `supplier_id`) VALUES
(39, 4523, 'Admin', '2025-01-25', '2025-01-25', 5000, 'PayableOtherCash', 218),
(40, 4523, 'Admin', '2025-02-18', '2025-02-18', 11400, 'PaymentOtherCash', 221),
(41, 4523, 'Admin', '2025-02-18', '2025-02-18', 12000, 'PaymentOtherCash', 222),
(42, 4523, 'Admin', '2025-02-18', '2025-02-18', 14400, 'PaymentOtherCash', 220),
(43, 4523, 'Admin', '2025-02-19', '2025-02-19', 400, 'PaymentOtherCash', 223),
(44, 4523, 'Admin', '2025-02-19', '2025-02-19', 1000, 'PayableOtherCash', 223),
(45, 4523, 'Admin', '2025-02-19', '2025-02-19', 1000, 'PayableOtherCash', 223),
(46, 4523, 'Admin', '2025-02-19', '2025-02-19', 428, 'PayableOtherCash', 223),
(47, 4523, 'Admin', '2025-02-19', '2025-02-19', 500, 'PayableOtherCash', 223),
(48, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 224),
(49, 4523, 'Admin', '2025-02-20', '2025-02-20', 100, 'PayableOtherCash', 225),
(50, 4523, 'Admin', '2025-02-20', '2025-02-20', 350, 'PayableOtherCash', 226),
(51, 4523, 'Admin', '2025-02-20', '2025-02-20', 950, 'PayableOtherCash', 227),
(52, 4523, 'Admin', '2025-02-20', '2025-02-20', 6500, 'PayableOtherCash', 227),
(53, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 230),
(54, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 231),
(55, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 232),
(56, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 233),
(57, 4523, 'Admin', '2025-02-20', '2025-02-20', 1200, 'PayableOtherCash', 234),
(58, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 236),
(59, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PayableOtherCash', 235),
(60, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PaymentOtherCash', 238),
(61, 4523, 'Admin', '2025-02-20', '2025-02-20', 600, 'PaymentOtherCash', 237),
(62, 4523, 'Admin', '2025-02-21', '2025-02-21', 3000, 'PayableOtherCash', 242);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `cash_credit` int(100) NOT NULL,
  `cash_provider_name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `cash_debit` int(100) NOT NULL,
  `Outlet_Id` int(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Starf_Id` int(50) NOT NULL,
  `admin_show` int(11) NOT NULL,
  `sent_confim` int(11) NOT NULL,
  `Admin_show_date` date NOT NULL,
  `Update_date` date NOT NULL,
  `cash_mark` varchar(50) NOT NULL,
  `notifi_meg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id`, `date`, `cash_credit`, `cash_provider_name`, `details`, `cash_debit`, `Outlet_Id`, `Starf_Name`, `Starf_Id`, `admin_show`, `sent_confim`, `Admin_show_date`, `Update_date`, `cash_mark`, `notifi_meg`) VALUES
(64, '2025-01-25', 10445, 'MST ASMA', 'Next Sale data loaded', 0, 4523, 'MD. SAGOR ALI', 9, 0, 1, '2025-01-25', '2025-03-24', 'Sent Cash', 1),
(65, '2025-01-26', 0, 'MD. SAGOR ALI', 'Next Sale data loaded', 0, 4523, 'FAHMIDA  AKTER', 35, 0, 1, '2025-01-26', '2025-02-22', 'Sent Cash', 1),
(66, '2025-01-31', 141114, 'MD. SAGOR ALI', 'Next Sale data loaded', 0, 4523, 'MST ASMA', 36, 0, 1, '2025-01-31', '2025-03-23', 'Get Cash', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow_cost_info`
--

CREATE TABLE `cash_flow_cost_info` (
  `id` int(11) NOT NULL,
  `Outlet_id` varchar(20) NOT NULL,
  `Admincat` varchar(20) NOT NULL,
  `debit_tk` int(50) NOT NULL,
  `date` date NOT NULL,
  `Admin_show_date` date NOT NULL,
  `stratf_id` int(20) NOT NULL,
  `details` varchar(100) NOT NULL,
  `Ac_check` int(10) NOT NULL,
  `expend_cost` int(50) NOT NULL,
  `admin_show` int(10) NOT NULL,
  `supplier_id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Update_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cash_flow_cost_info`
--

INSERT INTO `cash_flow_cost_info` (`id`, `Outlet_id`, `Admincat`, `debit_tk`, `date`, `Admin_show_date`, `stratf_id`, `details`, `Ac_check`, `expend_cost`, `admin_show`, `supplier_id`, `Name`, `Update_Date`) VALUES
(255, '4523', 'Admin', 500, '2025-01-25', '2025-01-25', 9, 'LunchCost', 1, 1, 1, 0, 'MD. SAGOR ALI', '2025-01-25'),
(256, '4523', 'Admin', 600, '2025-01-25', '2025-01-25', 9, 'Supplier Cost', 1, 0, 1, 218, 'MD. SAGOR ALI', '2025-01-25'),
(257, '4523', 'Admin', 5000, '2025-01-25', '2025-01-25', 9, 'Payable Cash', 1, 0, 1, 218, 'MD. SAGOR ALI', '2025-01-25'),
(258, '4523', 'employee', 50, '2025-01-31', '2025-01-31', 36, 'SnackCost', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(259, '4523', 'Admin', 300, '2025-01-31', '2025-01-31', 9, 'LunchCost', 1, 1, 1, 0, 'MD. SAGOR ALI', '2025-01-31'),
(260, '4523', 'Admin', 6800, '2025-01-31', '2025-01-31', 9, 'Supplier Cost', 1, 0, 1, 219, 'MD. SAGOR ALI', '2025-01-31'),
(261, '4523', 'employee', 100, '2025-01-31', '2025-01-31', 36, 'LunchCost', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(262, '4523', 'employee', 20, '2025-01-31', '2025-01-31', 36, 'SnackCost', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(263, '4523', 'employee', 20, '2025-01-31', '2025-01-31', 36, 'GuestCost', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(264, '4523', 'employee', 20, '2025-01-31', '2025-01-31', 36, 'BreakTimeCost', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(265, '4523', 'employee', 20, '2025-01-31', '2025-01-31', 36, 'EmployerTake', 1, 1, 1, 0, 'MST ASMA', '2025-01-31'),
(309, '4523', 'employee', 100, '2025-02-21', '2025-02-21', 36, 'LunchCost', 1, 1, 1, 0, 'MST ASMA', '2025-02-21'),
(311, '4523', 'employee', 50, '2025-02-21', '2025-02-21', 36, 'SnackCost', 1, 1, 1, 0, 'MST ASMA', '2025-02-21'),
(312, '4523', 'employee', 300, '2025-02-21', '2025-02-21', 36, 'VehicleRent', 1, 1, 1, 0, 'MST ASMA', '2025-02-21'),
(324, '4523', 'Admin', 950, '2025-02-21', '2025-02-21', 9, 'Payable Cash', 1, 0, 1, 242, 'MD. SAGOR ALI', '2025-02-21'),
(325, '4523', 'Admin', 50, '2025-02-21', '2025-02-21', 9, 'Payable Cash', 1, 0, 1, 242, 'MD. SAGOR ALI', '2025-02-21'),
(335, '4523', 'Admin', 200, '2025-02-21', '2025-02-21', 9, 'SnackCost', 1, 1, 1, 0, 'MD. SAGOR ALI', '2025-02-21'),
(336, '4523', 'Admin', 50, '2025-02-21', '2025-02-21', 9, 'BreakTimeCost', 1, 1, 1, 0, 'MD. SAGOR ALI', '2025-02-21'),
(337, '4523', 'employee', 30, '2025-02-21', '2025-02-21', 36, 'SnackCost', 1, 1, 1, 0, 'MST ASMA', '2025-02-21'),
(338, '4523', 'employee', 970, '2025-02-21', '2025-02-21', 35, 'BreakTimeCost', 1, 1, 1, 0, 'FAHMIDA  AKTER', '2025-02-21'),
(339, '4523', 'Admin', 3400, '2025-02-21', '2025-02-21', 9, 'Payable Cash', 1, 0, 1, 242, 'MD. SAGOR ALI', '2025-02-21'),
(341, '4523', 'Admin', 1000, '2025-03-22', '2025-03-22', 9, 'Product Return', 1, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-22'),
(342, '4523', 'Admin', 100, '2025-03-23', '2025-03-23', 9, 'LunchCost', 1, 1, 1, 0, 'MD. SAGOR ALI', '2025-03-23'),
(343, '4523', 'Admin', 110, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(344, '4523', 'Admin', 110, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(345, '4523', 'Admin', 110, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(346, '4523', 'Admin', 110, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(347, '4523', 'Admin', 230, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(348, '4523', 'Admin', 230, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(349, '4523', 'Admin', 230, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(350, '4523', 'Admin', 230, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(351, '4523', 'Admin', 230, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(352, '4523', 'Admin', 265, '2025-03-24', '2025-03-24', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-24'),
(353, '4523', 'Admin', 780, '2025-03-26', '2025-03-26', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-26'),
(354, '4523', 'Admin', 1000, '2025-03-26', '2025-03-26', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-26'),
(355, '4523', 'Admin', 130, '2025-03-26', '2025-03-26', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-26'),
(356, '4523', 'Admin', 360, '2025-03-26', '2025-03-26', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-26'),
(357, '4523', 'Admin', 270, '2025-03-27', '2025-03-27', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-27'),
(358, '4523', 'Admin', 1000, '2025-03-27', '2025-03-27', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-27'),
(359, '4523', 'Admin', 130, '2025-03-27', '2025-03-27', 9, 'Product Return', 0, 2, 1, 0, 'MD. SAGOR ALI', '2025-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `cash_sent_any_person`
--

CREATE TABLE `cash_sent_any_person` (
  `id` int(11) NOT NULL,
  `Outlet_id` int(20) NOT NULL,
  `Starf_Name` varchar(100) NOT NULL,
  `Starf_Id` int(20) NOT NULL,
  `cash_credit` int(50) NOT NULL,
  `cash_debit` int(50) NOT NULL,
  `date` date NOT NULL,
  `Admin_show_date` date NOT NULL,
  `admin_show` int(10) NOT NULL,
  `Sent_Starf_id` int(20) NOT NULL,
  `confrm_access` int(10) NOT NULL,
  `Sender_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cash_sent_any_person`
--

INSERT INTO `cash_sent_any_person` (`id`, `Outlet_id`, `Starf_Name`, `Starf_Id`, `cash_credit`, `cash_debit`, `date`, `Admin_show_date`, `admin_show`, `Sent_Starf_id`, `confrm_access`, `Sender_Name`) VALUES
(52, 4523, 'MD. SAGOR ALI', 9, 83400, -5200, '2025-02-21', '2025-02-21', 1, 35, 1, 'FAHMIDA  AKTER'),
(60, 4523, 'MD. SAGOR ALI', 9, 83430, 3400, '2025-02-22', '2025-02-22', 1, 35, 1, 'FAHMIDA  AKTER'),
(61, 4523, 'FAHMIDA  AKTER', 35, 83760, 0, '2025-02-22', '2025-02-22', 0, 9, 1, 'MD. SAGOR ALI'),
(62, 4523, 'MST ASMA', 36, 1835, 0, '2025-03-20', '2025-03-20', 0, 9, 1, 'MD. SAGOR ALI'),
(63, 4523, 'MD. SAGOR ALI', 9, 140094, 0, '2025-03-22', '2025-03-22', 1, 36, 1, 'MST ASMA'),
(64, 4523, 'MD. SAGOR ALI', 9, 1020, 100, '2025-03-23', '2025-03-23', 1, 36, 1, 'MST ASMA');

-- --------------------------------------------------------

--
-- Table structure for table `catgory_info`
--

CREATE TABLE `catgory_info` (
  `id` int(11) NOT NULL,
  `catagory_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `Shop_cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `catgory_info`
--

INSERT INTO `catgory_info` (`id`, `catagory_name`, `date`, `Shop_cat_id`) VALUES
(1, 'Personal Care', '2023-12-11', '121'),
(2, 'Cleaning Supplies', '2023-12-11', '121'),
(11, 'bbb', '2023-12-12', '121'),
(12, 'addd', '2023-12-12', '121'),
(13, 'ttttt', '2023-12-12', '121'),
(14, 'rrr', '2023-12-12', '121'),
(15, 'gjghj', '2023-12-12', '121'),
(18, 'bnmbm', '2023-12-12', '121'),
(27, 'hello', '2023-12-21', '121'),
(30, 'me', '2024-01-04', '120'),
(31, 'IT', '2024-12-17', '121'),
(32, 'Man', '2025-01-28', '121'),
(33, 'sagor', '2025-02-19', '121');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `joind_date` date DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `last_purches_date` date DEFAULT NULL,
  `last_price_cost` decimal(10,2) DEFAULT NULL,
  `create_panel` varchar(255) DEFAULT NULL,
  `createtor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_purches_count` int(11) NOT NULL DEFAULT 0,
  `customer_behebihar` text DEFAULT NULL,
  `coustmore_sale_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coustmore_retun_count` int(11) NOT NULL DEFAULT 0,
  `coustmore_retun_date` date DEFAULT NULL,
  `Admin_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Starf_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Starf_Name` varchar(255) DEFAULT NULL,
  `Outlet_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Outlet_Name` varchar(255) DEFAULT NULL,
  `Device_Info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `mobile`, `address`, `joind_date`, `balance`, `last_purches_date`, `last_price_cost`, `create_panel`, `createtor_id`, `total_purches_count`, `customer_behebihar`, `coustmore_sale_id`, `coustmore_retun_count`, `coustmore_retun_date`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `Device_Info`, `created_at`, `updated_at`) VALUES
(1, 'MST KADIJA', '01774255009', 'laloich', '2025-03-20', 0.00, '2025-03-20', 0.00, '54578', 362, 0, 'Good', 33455, 1215, '2025-03-22', 5632, 6985, '9685', 9658, '56', '965', NULL, '2025-03-22 04:20:33'),
(2, 'Mr jaidur alom', '01754497579', 'Rajshahi', '2025-03-22', 0.00, '2025-03-22', 0.00, '54578', 362, 0, 'Good', 33455, 1212, NULL, 5632, 6985, '9685', 9658, '56', '965', NULL, NULL),
(3, 'GOLBAR HOSSAIN', '01713742051', 'কামার পাড়া বাজার, মোহনপুর, রাজশাহী।', '2025-03-22', 0.00, '2025-03-22', 0.00, '54578', 362, 0, 'Good', 33455, 1212, NULL, 5632, 6985, '9685', 9658, '56', '965', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customersold`
--

CREATE TABLE `customersold` (
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
  `coustmore_retun_count` int(10) NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Device_Info` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `coustmore_retun_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customersold`
--

INSERT INTO `customersold` (`customer_name`, `mobile`, `address`, `joind_date`, `balance`, `last_purches_date`, `last_price_cost`, `create_panel`, `createtor_id`, `total_purches_count`, `customer_behebihar`, `coustmore_sale_id`, `coustmore_retun_count`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `Device_Info`, `id`, `updated_at`, `coustmore_retun_date`) VALUES
('Hanif amed', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 12, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 1, '2025-03-08 10:26:41', NULL),
('rokey', '01774255010', 'hatra', '0000-00-00', 10, '2025-03-14', 1365, 'sagor', '4525', 38, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 2, '2025-03-14 05:42:14', NULL),
('rofiqul islam', '01774255010', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 1, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 3, '2025-03-08 10:26:41', NULL),
('ruble', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-11', 150, 'sagor', '4525', 33, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 5, '2025-03-08 10:26:41', NULL),
('allamin', '01774255009', 'hatra', '0000-00-00', 10, '2025-03-15', 4000, 'sagor', '4525', 11, 'good', '458', 40, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 6, '2025-03-18 05:25:35', '2025-03-18'),
('faruk', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 16, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 7, '2025-03-08 10:26:41', NULL),
('taniya', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 30, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 8, '2025-03-08 10:26:41', NULL),
('jaidur rahamin', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-15', 150, 'sagor', '4525', 55, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 9, '2025-03-08 10:26:41', NULL),
('riyad', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 3, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 10, '2025-03-08 10:26:41', NULL),
('rifat', '01774255009', 'hatra', '0000-00-00', 10, '2025-03-14', 885, 'sagor', '4525', 101, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 11, '2025-03-14 03:25:23', NULL),
('ripon', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 23, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 12, '2025-03-08 10:26:41', NULL),
('joykhan', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 6, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 13, '2025-03-08 10:26:41', NULL),
('hasan', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 5, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 14, '2025-03-08 10:26:41', NULL),
('cherur', '01774255009', 'hatra', '0000-00-00', 10, '2025-03-08', 130, 'sagor', '4525', 100, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 15, '2025-03-08 04:43:11', NULL),
('hanna', '01774255009', 'hatra', '0000-00-00', 10, '2023-11-01', 150, 'sagor', '4525', 10, 'good', '458', 10, '4545', '4545', 'hamja', '4523', 'adrosh', '5547dsda4f', 16, '2025-03-08 10:26:41', NULL),
('SHAHANARA', '01303268667', 'gg', '0000-00-00', 0, '2023-11-20', 0, '54578', '362', 30, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 19, '2025-03-08 10:26:41', NULL),
('jibon', '01701077584', 'hatra', '0000-00-00', 0, '2023-11-20', 0, '54578', '362', 3, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 20, '2025-03-08 10:26:41', NULL),
('SHAHANARA', '01303268667', 'gg', '0000-00-00', 0, '2025-03-14', 3500, '54578', '362', 33, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 22, '2025-03-14 04:07:05', NULL),
('SHAH', '01725181915', 'hatra', '0000-00-00', 5, '2023-11-05', 0, '54578', '362', 32, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 24, '2025-03-08 10:26:41', NULL),
('Roshany', '01725181915', 'gg', '2023-11-21', 5, '2025-03-08', 125, '54578', '362', 36, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 28, '2025-03-08 05:12:58', NULL),
('Najmul', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 83, '2025-03-08 10:26:41', NULL),
('SHAHANARA', '01725181915', 'gg', '2023-11-22', 0, '2025-03-14', 390, '54578', '362', 5, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 85, '2025-03-14 05:43:44', NULL),
('Roshany', '01725181915', 'gg', '2023-11-22', 0, '2025-03-08', 500, '54578', '362', 1, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 97, '2025-03-08 05:07:44', NULL),
('rifad', '01796587578', 'hatra', '2023-12-20', 0, '2025-03-12', 3500, '54578', '362', 97, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 117, '2025-03-12 10:33:11', NULL),
('SHAHANARA', '01701077584', 'N/A', '2024-07-09', 0, '2024-07-09', 0, '54578', '362', 0, 'Good', '33455', 1212, '5632', '6985', '9685', '4523', '56', '965', 118, '2025-03-08 10:26:41', NULL),
('GOLBAR HOSSAIN', '01713742051', 'কামার পাড়া বাজার, মোহনপুর, রাজশাহী।', '2025-03-07', 0, '2025-03-07', 0, '54578', '362', 0, 'Good', '33455', 1212, '5632', '6985', '9685', '9658', '56', '965', 119, '2025-03-08 10:26:41', NULL);

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
(25, '2014_10_12_000000_create_users_table', 4),
(26, '2024_12_19_103457_main_category', 5),
(27, '2024_12_19_104052_catagory', 6),
(28, '2024_12_19_104211_sub-catagory', 6),
(29, '2025_02_21_124930_create_transactions_table', 7),
(30, '2025_03_03_095923_create_customers_table', 8),
(31, '2025_03_20_113223_create_returnmarks_table', 8);

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
-- Table structure for table `product_info120`
--

CREATE TABLE `product_info120` (
  `Product_ID` int(11) NOT NULL,
  `Barcode` varchar(100) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Catagory` varchar(50) NOT NULL,
  `Sub_Catagory` varchar(50) NOT NULL,
  `Sub_to_sub_catagory` varchar(50) NOT NULL,
  `Create_date` date NOT NULL,
  `Update_date` date NOT NULL,
  `Product_add_user_id` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_info120`
--

INSERT INTO `product_info120` (`Product_ID`, `Barcode`, `Product_name`, `Weight`, `Image`, `Catagory`, `Sub_Catagory`, `Sub_to_sub_catagory`, `Create_date`, `Update_date`, `Product_add_user_id`, `Outlet_Id`) VALUES
(5, '4587976279998', 'Malta', '±50', '1703089000/1703089000.jpg', '1', '8', '1', '2023-12-20', '2023-12-20', '9', '4523'),
(6, '4587979272998', 'Green Apple', '±40', '1703089075/1703089075.jpg', '1', '8', '4', '2023-12-20', '2023-12-20', '9', '4523'),
(7, '4587979079998', 'Wood Apple', '± 20 gm', '1703089135/1703089135.jpg', '1', '8', '1', '2023-12-20', '2023-12-20', '9', '4523'),
(8, '4587979770998', 'Dragon Fruit Local', '± 40 gm', '1703089271/1703089271.png', '1', '8', '4', '2023-12-20', '2023-12-20', '9', '4523'),
(9, '4187979779998', 'Deshi Shosha', '± 500 gm', '1703090740/1703090740.webp', '1', '8', '2', '2023-12-20', '2023-12-20', '9', '4523'),
(10, '4582979779998', 'Orange Indian', '± 60 gm', '1703090777/1703090777.webp', '1', '8', '2', '2023-12-20', '2023-12-20', '9', '4523');

-- --------------------------------------------------------

--
-- Table structure for table `product_info121`
--

CREATE TABLE `product_info121` (
  `Product_ID` int(11) NOT NULL,
  `Barcode` varchar(100) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Catagory` varchar(50) NOT NULL,
  `Sub_Catagory` varchar(50) NOT NULL,
  `Sub_to_sub_catagory` varchar(50) NOT NULL,
  `Create_date` date NOT NULL,
  `Update_date` date NOT NULL,
  `Product_add_user_id` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_info121`
--

INSERT INTO `product_info121` (`Product_ID`, `Barcode`, `Product_name`, `Weight`, `Image`, `Catagory`, `Sub_Catagory`, `Sub_to_sub_catagory`, `Create_date`, `Update_date`, `Product_add_user_id`, `Outlet_Id`) VALUES
(6, '4587979272998', 'Green Apple', '±40', '1703089075/1703089075.jpg', '1', '8', '4', '2023-12-20', '2023-12-20', '9', '4523'),
(7, '4587979079998', 'Wood Apple', '± 20 gm', '1703089135/1703089135.jpg', '1', '8', '1', '2023-12-20', '2023-12-20', '9', '4523'),
(8, '4587979770998', 'Dragon Fruit Local', '± 40 gm', '1703089271/1703089271.png', '1', '8', '4', '2023-12-20', '2023-12-20', '9', '4523'),
(10, '4582979779998', 'Orange Indian', '± 60 gm', '1703090777/1703090777.webp', '1', '8', '2', '2023-12-20', '2023-12-20', '9', '4520'),
(11, '4587979379998', 'Quail Meat', '± 10 gm', '1703091036/1703091036.jpg', '1', '8', '1', '2023-12-20', '2023-12-20', '9', '4520'),
(12, '4587979799998', 'Banana Chompa (Ready To Eat)', '± 44 gm', '1703091288/1703091288.webp', '1', '8', '2', '2023-12-20', '2023-12-20', '9', '4520'),
(13, '4587996279998', 'China Fuji Apple', '± 30 gm', '1703091406/1703091406.jpg', '1', '7', '0', '2023-12-20', '2023-12-20', '9', '4520'),
(14, '4587979779998', 'Narikel (Coconut)', '0', '1703091440/1703091440.webp', '1', '8', '0', '2023-12-20', '2023-12-20', '9', '4520'),
(15, '8941161011042', 'Kazi Farms Kitchen', '0', '1703091688/1703091688.webp', '1', '9', '0', '2023-12-20', '2023-12-20', '9', '4520'),
(16, '4587971779998', 'Deshi Shosha', '0', '1703091772/1703091772.webp', '1', '8', '0', '2023-12-20', '2023-12-20', '9', '4523'),
(17, '45879797710998', 'Pran Flattened Rice', '0', '1703092021/1703092021.webp', '1', '7', '0', '2023-12-20', '2023-12-20', '9', '4523'),
(18, '45879762730998', 'Pran Badam Bhaja', '± 10 gm', '1703092065/1703092065.webp', '1', '8', '0', '2023-12-20', '2023-12-20', '9', '4523'),
(19, '45830979779998', 'Aarong Dairy Pure Ghee', '0', '1703141040/1703141040.webp', '1', '8', '2', '2023-12-21', '2023-12-21', '9', '4523'),
(20, '4587979779911', 'Sagor ol 2lt', '0', '1704348517/1704348516.png', '1', '6', '9', '2024-01-04', '2024-01-04', '9', '4523'),
(21, '458797927222', 'potato', '± 20 gm', '1704348738/1704348738.webp', '1', '6', '8', '2024-01-04', '2024-01-04', '9', '4523'),
(22, '4587979771098', 'Mobile', '± 10 gm', '1705052895/1705052895.webp', '1', '6', '9', '2024-01-12', '2024-01-12', '9', '4523'),
(25, '458797912998', 'Mobile', '± 10 gm', '1705053399/1705053399.webp', '1', '6', '10', '2024-01-12', '2024-01-12', '9', '4523'),
(26, '12121212', 'uuuu', '± 120 gm', '1705053473/1705053473.webp', '1', '6', '9', '2024-01-12', '2024-01-12', '9', '4523'),
(27, '22222', 'Deshi Shosha 11111', '± 1111 gm', '1705053555/1705053555.webp', '1', '6', '9', '2024-01-12', '2024-01-12', '9', '4523'),
(29, '458797977991000', 'ds', '± 10 gm', '1705119406/1705119406.webp', '1', '6', '9', '2024-01-13', '2024-01-13', '9', '4523'),
(30, '45879797412', 'banana', '± 10 gm', '1705121906/1705121906.jpg', '1', '6', '9', '2024-01-13', '2024-01-13', '9', '4523'),
(31, '1111', 'murgi 1.5kg', '0', '1705220845/1705220845.jpg', '1', '6', '9', '2024-01-14', '2024-01-14', '9', '4523'),
(32, '1212121245', 'Mobile', '± 45 gm', '1705238289/1705238289.jpg', '1', '6', '9', '2024-01-14', '2024-01-14', '9', '4523'),
(33, '11114', 'dseeeeeee', '0', '1705238991/1705238991.jpg', '1', '6', '9', '2024-01-14', '2024-01-14', '9', '4523'),
(34, '8941100500002', 'revive 100gm', '0', '1705336342/1705336342.jpg', '1', '6', '9', '2024-01-15', '2024-01-15', '9', '4523'),
(35, '6921734947994', 'EXAM ERASER DELI H099 20', '0', '1705467711/1705467711.jpg', '1', '6', '10', '2024-01-17', '2024-01-17', '9', '4523'),
(46, '3010', 'rrrr', '0', '1722255855/1722255855.webp', '1', '6', '9', '2024-07-29', '2024-07-29', '9', '4523'),
(47, '100', 'murgi 1.5kg', '0', '1722417238/1722417238.webp', '1', '6', '9', '2024-07-31', '2024-07-31', '9', '4523'),
(48, '1', 'Deshi Shosha 11111', '0', '1722417256/1722417256.webp', '1', '6', '9', '2024-07-31', '2024-07-31', '9', '4523'),
(49, '3', 'Kazi Farms Kitchen', '0', '1722417269/1722417269.webp', '1', '6', '9', '2024-07-31', '2024-07-31', '9', '4523'),
(50, '2', '5', '0', '1722417290/1722417290.webp', '1', '6', '9', '2024-07-31', '2024-07-31', '9', '4523'),
(51, '4', 'Kazi Farms Kitchen', '0', '1722509132/1722509132.webp', '1', '6', '9', '2024-08-01', '2024-08-01', '9', '4523'),
(52, '5', 'Deshi Shosha 11111', '0', '1722510628/1722510628.webp', '1', '7', '0', '2024-08-01', '2024-08-01', '9', '4523'),
(53, '6', 'Narikel (Coconut)', '0', '1722511851/1722511851.webp', '1', '7', '0', '2024-08-01', '2024-08-01', '9', '4523'),
(54, '7', 'Deshi Shosha 11111', '0', '1722511877/1722511877.webp', '1', '7', '0', '2024-08-01', '2024-08-01', '9', '4523'),
(55, '8', 'banana', '0', '1723453429/1723453429.webp', '1', '6', '9', '2024-08-12', '2024-08-12', '9', '4523'),
(56, '9', 'mango', '± 50 gm', '1723456614/1723456614.webp', '1', '6', '9', '2024-08-12', '2024-08-12', '9', '4523'),
(57, '10', 'lichu', '± 10 gm', '1723457463/1723457463.webp', '1', '7', '16', '2024-08-12', '2024-08-12', '9', '4523'),
(58, '88', 'Fresh khata 40 pages', '0', '1725103320/1725103320.webp', '1', '6', '9', '2024-08-31', '2024-08-31', '9', '4523'),
(59, '99', 'computer i5 10th', '0', '1725189668/1725189668.webp', '1', '6', '9', '2024-09-01', '2024-09-01', '9', '4523'),
(60, '845944072597', 'kata', '± 120 gm', '1738313681/1738313681.png', '12', '0', '8', '2025-01-31', '2025-01-31', '9', '4523'),
(61, '9999', 'hghg', '± 55 gm', '1739874690/1739874690.jpg', '1', '6', '8', '2025-02-18', '2025-02-18', '9', '4523'),
(62, '98989', 'Chanachur 250gm', '± 0 gm', '1739959168/1739959168.jpg', '31', '38', '17', '2025-02-19', '2025-02-19', '9', '4523'),
(63, '12124', 'Mango', '± 5 gm', '1739961114/1739961114.jpg', '1', '6', '9', '2025-02-19', '2025-02-19', '9', '4523');

-- --------------------------------------------------------

--
-- Table structure for table `profit_datails`
--

CREATE TABLE `profit_datails` (
  `id` int(11) NOT NULL,
  `Recive_number` varchar(50) NOT NULL,
  `Profit` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `show_key` int(1) NOT NULL,
  `Total_sales` int(11) NOT NULL,
  `totaldiscout` int(11) NOT NULL,
  `Net_Sale` int(11) NOT NULL,
  `Net_Profit` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Discount_type` varchar(5) NOT NULL,
  `Return_amount` int(50) NOT NULL,
  `Return_profit` int(50) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Return_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profit_datails`
--

INSERT INTO `profit_datails` (`id`, `Recive_number`, `Profit`, `Date`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `show_key`, `Total_sales`, `totaldiscout`, `Net_Sale`, `Net_Profit`, `Names`, `Discount_type`, `Return_amount`, `Return_profit`, `Customer_id`, `Return_count`) VALUES
(192, '668882757247', 6000, '2025-01-25', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 16000, 0, 16000, 6000, 'Unknown', '0%', 0, 0, 0, 0),
(193, '580812038640', 1500, '2025-01-26', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4000, 0, 4000, 1500, 'Unknown', '0%', 0, 0, 0, 0),
(194, '767573854491', 1500, '2025-01-26', '9', '35', 'FAHMIDA  AKTER', '4523', 'Adrosho', 1, 4000, 0, 4000, 1500, 'Unknown', '0%', 0, 0, 0, 0),
(195, '527978463231', 4020, '2025-01-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 10580, 529, 10051, 3491, 'Unknown', '5%', 0, 0, 0, 0),
(221, '461227653591', 2100, '2025-02-21', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3000, 300, 2700, 1800, 'Unknown', '10%', 0, 0, 0, 0),
(222, '238184720275', 10, '2025-02-21', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 30, 100, -20, 'Unknown', '30TK', 0, 0, 0, 0),
(223, '813688015510', 350, '2025-02-21', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 100, 400, 250, 'Unknown', '100TK', 0, 0, 0, 0),
(224, '488719488957', 10, '2025-02-21', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 10, 120, 0, 'Unknown', '10TK', 0, 0, 0, 0),
(225, '566028235172', 10, '2025-02-21', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(226, '142143736702', 30, '2025-02-21', '9', '35', 'FAHMIDA  AKTER', '4523', 'Adrosho', 1, 330, 0, 330, 30, 'Unknown', '0%', 0, 0, 0, 0),
(227, '848793243956', 10, '2025-02-22', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(228, '590552562248', 770, '2025-03-06', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 770, 'Unknown', '0%', 0, 0, 0, 0),
(229, '233366706464', 1595, '2025-03-06', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4395, 0, 4395, 1595, 'Unknown', '0%', 0, 0, 0, 0),
(230, '668963467243', 1515, '2025-03-06', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3615, 0, 3615, 1515, 'Unknown', '0%', 0, 0, 0, 0),
(231, '340957132459', 380, '2025-03-07', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 380, 'SHAHANARA', '0%', 0, 0, 0, 0),
(232, '123625607816', 440, '2025-03-07', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1980, 0, 1980, 440, 'GOLBAR HOSSAIN', '0%', 150, 350, 0, 0),
(233, '215190491110', 895, '2025-03-07', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4155, 5, 4150, 890, 'rokey', '5TK', 0, 0, 0, 0),
(234, '108543552345', 20, '2025-03-07', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 260, 0, 260, 20, 'SHAHANARA', '0%', 0, 0, 0, 0),
(235, '664143254388', 720, '2025-03-07', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1240, 0, 1240, 720, 'rofiqul islam', '0%', 0, 0, 0, 0),
(236, '497908818435', 100, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1380, 0, 1380, 100, 'allamin', '0%', 0, 0, 0, 0),
(237, '882289141002', 2100, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3000, 0, 3000, 2100, 'rifat', '0%', 0, 0, 0, 0),
(238, '775807918833', 20, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 260, 0, 260, 20, 'rifat', '0%', 0, 0, 0, 0),
(239, '750394553378', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'SHAHANARA', '0%', 0, 0, 0, 0),
(240, '496458345378', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'rofiqul islam', '0%', 0, 0, 0, 0),
(241, '944412813388', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'rokey', '0%', 0, 0, 0, 0),
(242, '412308957485', 700, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1000, 0, 1000, 700, 'rifat', '0%', 0, 0, 0, 0),
(243, '860420482189', 700, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1000, 0, 1000, 700, 'rifat', '0%', 0, 0, 0, 0),
(244, '176720495317', 85, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1005, 0, 1005, 85, 'rifat', '0%', 0, 0, 0, 0),
(245, '871050870520', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'cherur', '0%', 0, 0, 0, 0),
(246, '581401160592', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'rifad', '0%', 0, 0, 0, 0),
(247, '725107472441', 360, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 630, 0, 630, 360, 'Unknown', '0%', 0, 0, 0, 0),
(248, '656398467437', 20, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 0, 500, 20, 'SHAHANARA', '0%', 0, 0, 0, 0),
(249, '983969603076', 375, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 885, 0, 885, 375, 'Unknown', '0%', 0, 0, 0, 0),
(250, '701534131807', 385, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 875, 0, 875, 385, 'Roshany', '0%', 0, 0, 0, 0),
(251, '706369443244', 20, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 0, 500, 20, 'Roshany', '0%', 0, 0, 0, 0),
(252, '796902844165', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 110, 0, 110, 10, 'SHAHANARA', '0%', 0, 0, 0, 0),
(253, '649443278772', 350, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 0, 500, 350, 'SHAHANARA', '0%', 0, 0, 0, 0),
(254, '468100804445', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'SHAHANARA', '0%', 0, 0, 0, 0),
(255, '136537624878', 10, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'SHAHANARA', '0%', 0, 0, 0, 0),
(256, '782986057069', 360, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 710, 0, 710, 360, 'Unknown', '0%', 0, 0, 0, 0),
(257, '515330593974', 20, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 0, 500, 20, 'rokey', '0%', 0, 0, 0, 0),
(258, '560608630572', 5, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 125, 0, 125, 5, 'Roshany', '0%', 0, 0, 0, 0),
(259, '444310738301', 350, '2025-03-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 500, 0, 500, 350, 'rifat', '0%', 0, 0, 0, 0),
(260, '290275505678', 430, '2025-03-09', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1840, 0, 1840, 430, 'rokey', '0%', 0, 0, 0, 0),
(261, '775836136309', 1945, '2025-03-12', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4025, 0, 4025, 1945, 'Unknown', '0%', 240, 50, 0, 0),
(262, '193141870028', 1190, '2025-03-12', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3500, 0, 3500, 1190, 'rifad', '0%', 1080, 50, 0, 2),
(263, '991294150076', 415, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1505, 0, 1505, 415, 'Unknown', '0%', 0, 0, 0, 0),
(264, '485459736095', 375, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 885, 0, 885, 375, 'rifat', '0%', 0, 0, 0, 0),
(265, '879913567265', 10, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(266, '606831230061', 10, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 120, 10, 0, 1),
(267, '243817429786', 10, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(268, '358894001426', 10, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(269, '400449208139', 2450, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3500, 0, 3500, 2450, 'SHAHANARA', '0%', 0, 0, 0, 0),
(270, '988526797406', 485, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 3015, 0, 3015, 485, 'Unknown', '0%', 0, 0, 0, 0),
(271, '856859131595', 725, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1365, 0, 1365, 725, 'rokey', '0%', 0, 0, 2, 0),
(272, '815422084943', 30, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 390, 0, 390, 30, 'SHAHANARA', '0%', 240, 30, 85, 1),
(273, '216465305120', 30, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 390, 0, 390, 30, 'Unknown', '0%', 0, 0, 0, 0),
(274, '537641903017', 50, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 650, 0, 650, 50, 'GOLBAR HOSSAIN', '0%', 0, 0, 119, 0),
(275, '184939421420', 40, '2025-03-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 520, 0, 520, 40, 'Unknown', '0%', 0, 0, 0, 0),
(276, '616201046575', 880, '2025-03-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4000, 0, 4000, 880, 'allamin', '0%', 740, 80, 6, 0),
(277, '442579260994', 20, '2025-03-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 260, 10, 250, 10, 'Unknown', '10TK', 0, 0, 0, 0),
(278, '946908014986', 1060, '2025-03-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1611, 242, 1369, 818, 'Unknown', '15%', 0, 0, 0, 0),
(279, '319797712809', 455, '2025-03-18', '9', '36', 'MST ASMA', '4523', 'Adrosho', 1, 1705, 0, 1705, 455, 'Unknown', '0%', 0, 0, 0, 0),
(280, '797316070723', 10, '2025-03-18', '9', '36', 'MST ASMA', '4523', 'Adrosho', 1, 130, 0, 130, 10, 'Unknown', '0%', 0, 0, 0, 0),
(281, '595160258362', 1050, '2025-03-18', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 1500, 0, 1500, 1050, 'Unknown', '0%', 0, 0, 0, 0),
(282, '392148648591', 960, '2025-03-20', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 5440, 0, 5440, 960, 'Unknown', '0%', 6620, 1985, 0, 16),
(283, '879216986896', 1235, '2025-03-22', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4205, 0, 4205, 1235, 'MST KADIJA', '0%', 2290, 1150, 1, 3),
(284, '988369985620', 1540, '2025-03-22', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 1, 4120, 0, 4120, 1540, 'Unknown', '0%', 600, 1400, 0, 2),
(285, '242827962730', 1625, '2025-03-24', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 5625, 25, 5600, 1600, 'Unknown', '25TK', 0, 0, 0, 0),
(286, '863765723141', 5440, '2025-03-24', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 10370, 0, 10370, 5440, 'Mr jaidur alom', '0%', 0, 0, 2, 0);

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
  `profit_to_Pruduct` int(11) NOT NULL,
  `prodcut_Exp_date` date NOT NULL,
  `Sales_price` int(11) NOT NULL,
  `Admin_Id` varchar(50) NOT NULL,
  `Starf_Id` varchar(50) NOT NULL,
  `Starf_Name` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Images` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `product_unite` int(50) NOT NULL,
  `Recive_num` varchar(20) NOT NULL,
  `return_product` int(11) NOT NULL,
  `Return_recived_name` varchar(50) NOT NULL,
  `Return_recived_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purches_list`
--

INSERT INTO `purches_list` (`customer_id`, `customer_name`, `purches_date`, `product_id`, `product_Name`, `product_Price`, `profit_to_Pruduct`, `prodcut_Exp_date`, `Sales_price`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `Images`, `id`, `product_unite`, `Recive_num`, `return_product`, `Return_recived_name`, `Return_recived_date`) VALUES
('0', 'GOLBAR HOSSAIN', '2025-03-07', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 690, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 691, 1, '123625607816', 0, 'MD. SAGOR ALI', '2025-03-18'),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 692, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 693, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 694, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 695, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '8', 'banana', 200, 10, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 696, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '9', 'mango', 120, 5, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 697, 1, '123625607816', 0, '', NULL),
('0', 'GOLBAR HOSSAIN', '2025-03-07', '10', 'lichu', 130, 10, '2026-08-14', 140, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723457463/1723457463.webp', 698, 1, '123625607816', 0, '', NULL),
('0', 'rokey', '2025-03-07', '1', 'Deshi Shosha 11111', 120, 40, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 699, 4, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 700, 2, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '3', 'Kazi Farms Kitchen', 100, 30, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 701, 3, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 702, 1, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 703, 2, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '6', 'Narikel (Coconut)', 480, 40, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 704, 2, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '8', 'banana', 200, 20, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 705, 2, '215190491110', 0, '', NULL),
('0', 'rokey', '2025-03-07', '9', 'mango', 120, 20, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 706, 4, '215190491110', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-07', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 707, 2, '108543552345', 0, '', NULL),
('0', 'rofiqul islam', '2025-03-07', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 708, 1, '664143254388', 0, '', NULL),
('0', 'rofiqul islam', '2025-03-07', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 709, 2, '664143254388', 0, '', NULL),
('0', 'rofiqul islam', '2025-03-07', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 710, 1, '664143254388', 0, '', NULL),
('0', 'allamin', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 711, 1, '497908818435', 0, '', NULL),
('0', 'allamin', '2025-03-08', '3', 'Kazi Farms Kitchen', 100, 20, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 712, 2, '497908818435', 0, '', NULL),
('0', 'allamin', '2025-03-08', '4', 'Kazi Farms Kitchen', 140, 10, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 713, 2, '497908818435', 0, '', NULL),
('0', 'allamin', '2025-03-08', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 714, 2, '497908818435', 0, '', NULL),
('0', 'allamin', '2025-03-08', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 715, 1, '497908818435', 0, '', NULL),
('0', 'rifat', '2025-03-08', '2', '5', 150, 2100, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 716, 6, '882289141002', 0, '', NULL),
('0', 'rifat', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 717, 2, '775807918833', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 718, 1, '750394553378', 0, '', NULL),
('0', 'rofiqul islam', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 719, 1, '496458345378', 0, '', NULL),
('0', 'rokey', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 720, 1, '944412813388', 0, '', NULL),
('0', 'rifat', '2025-03-08', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 721, 2, '412308957485', 0, '', NULL),
('0', 'rifat', '2025-03-08', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 722, 2, '860420482189', 0, '', NULL),
('0', 'rifat', '2025-03-08', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 723, 1, '176720495317', 0, '', NULL),
('0', 'rifat', '2025-03-08', '5', 'Deshi Shosha 11111', 100, 60, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 724, 3, '176720495317', 0, '', NULL),
('0', 'rifat', '2025-03-08', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 725, 1, '176720495317', 0, '', NULL),
('0', 'cherur', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 726, 1, '871050870520', 0, '', NULL),
('0', 'rifad', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 727, 1, '581401160592', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 728, 1, '725107472441', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 729, 1, '725107472441', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 730, 1, '656398467437', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 731, 1, '983969603076', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 732, 1, '983969603076', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 733, 1, '983969603076', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 734, 1, '983969603076', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 735, 1, '701534131807', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 736, 1, '701534131807', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 737, 1, '701534131807', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 738, 1, '701534131807', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 739, 1, '706369443244', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 740, 1, '796902844165', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 741, 1, '649443278772', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 742, 1, '468100804445', 0, '', NULL),
('0', 'SHAHANARA', '2025-03-08', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 743, 1, '136537624878', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 744, 1, '782986057069', 0, '', NULL),
('0', 'Unknown', '2025-03-08', '8', 'banana', 200, 10, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 745, 1, '782986057069', 0, '', NULL),
('0', 'rokey', '2025-03-08', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 746, 1, '515330593974', 0, '', NULL),
('0', 'Roshany', '2025-03-08', '9', 'mango', 120, 5, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 747, 1, '560608630572', 0, '', NULL),
('0', 'rifat', '2025-03-08', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 748, 1, '444310738301', 0, '', NULL),
('0', 'rokey', '2025-03-09', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 749, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 750, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 751, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 752, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 753, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 754, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '8', 'banana', 200, 10, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 755, 1, '290275505678', 0, '', NULL),
('0', 'rokey', '2025-03-09', '9', 'mango', 120, 5, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 756, 1, '290275505678', 0, '', NULL),
('0', 'Unknown', '2025-03-12', '1', 'Deshi Shosha 11111', 120, 50, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 757, 2, '775836136309', 0, 'MD. SAGOR ALI', '2025-03-15'),
('0', 'Unknown', '2025-03-12', '2', '5', 150, 1750, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 758, 5, '775836136309', 0, '', NULL),
('0', 'Unknown', '2025-03-12', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 759, 1, '775836136309', 0, '', NULL),
('0', 'Unknown', '2025-03-12', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 760, 1, '775836136309', 0, '', NULL),
('0', 'Unknown', '2025-03-12', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 761, 1, '775836136309', 0, '', NULL),
('0', 'Unknown', '2025-03-12', '6', 'Narikel (Coconut)', 480, 20, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 762, 1, '775836136309', 0, '', NULL),
('0', 'rifad', '2025-03-12', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 763, 1, '193141870028', 0, 'MD. SAGOR ALI', '2025-03-26'),
('0', 'rifad', '2025-03-12', '2', '5', 150, 1050, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 764, 3, '193141870028', 0, '', NULL),
('0', 'rifad', '2025-03-12', '3', 'Kazi Farms Kitchen', 100, 20, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 765, 2, '193141870028', 0, '', NULL),
('0', 'rifad', '2025-03-12', '4', 'Kazi Farms Kitchen', 140, 10, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 766, 2, '193141870028', 0, '', NULL),
('0', 'rifad', '2025-03-12', '5', 'Deshi Shosha 11111', 100, 60, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 767, 3, '193141870028', 0, '', NULL),
('0', 'rifad', '2025-03-12', '6', 'Narikel (Coconut)', 480, 40, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 768, 2, '193141870028', 2, 'MD. SAGOR ALI', '2025-03-27'),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 769, 1, '606831230061', 1, 'MD. SAGOR ALI', '2025-03-27'),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 770, 1, '243817429786', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 771, 1, '358894001426', 0, 'N/A', NULL),
('0', 'SHAHANARA', '2025-03-14', '2', '5', 150, 2450, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 772, 7, '400449208139', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 773, 2, '988526797406', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '2', '5', 150, 350, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 774, 1, '988526797406', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '3', 'Kazi Farms Kitchen', 100, 20, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 775, 2, '988526797406', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '4', 'Kazi Farms Kitchen', 140, 10, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 776, 2, '988526797406', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 777, 1, '988526797406', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '9', 'mango', 120, 65, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 778, 13, '988526797406', 0, 'N/A', NULL),
('0', 'rokey', '2025-03-14', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 779, 2, '856859131595', 0, 'N/A', NULL),
('0', 'rokey', '2025-03-14', '3', 'Kazi Farms Kitchen', 100, 20, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 780, 2, '856859131595', 0, 'N/A', NULL),
('0', 'rokey', '2025-03-14', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 781, 1, '856859131595', 0, 'N/A', NULL),
('0', 'SHAHANARA', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 30, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 782, 3, '815422084943', 2, 'MD. SAGOR ALI', '2025-03-27'),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 30, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 783, 3, '216465305120', 0, 'N/A', NULL),
('119', 'GOLBAR HOSSAIN', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 50, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 784, 5, '537641903017', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-14', '1', 'Deshi Shosha 11111', 120, 40, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 785, 4, '184939421420', 0, 'N/A', NULL),
('6', 'allamin', '2025-03-15', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 786, 2, '616201046575', 1, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 787, 2, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '3', 'Kazi Farms Kitchen', 100, 30, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 788, 3, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '4', 'Kazi Farms Kitchen', 140, 10, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 789, 2, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 790, 2, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '6', 'Narikel (Coconut)', 480, 40, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 791, 2, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '8', 'banana', 200, 30, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 792, 3, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('6', 'allamin', '2025-03-15', '9', 'mango', 120, 10, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 793, 2, '616201046575', 0, 'MD. SAGOR ALI', '2025-03-18'),
('0', 'Unknown', '2025-03-15', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 794, 2, '442579260994', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-15', '2', '5', 150, 1050, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 795, 3, '946908014986', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-15', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 796, 1, '946908014986', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '1', 'Deshi Shosha 11111', 120, 30, '2025-02-28', 130, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722417256/1722417256.webp', 797, 3, '319797712809', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '2', '5', 150, 350, '2026-07-31', 500, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722417290/1722417290.webp', 798, 1, '319797712809', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '3', 'Kazi Farms Kitchen', 100, 50, '2026-07-31', 110, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722417269/1722417269.webp', 799, 5, '319797712809', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722509132/1722509132.webp', 800, 1, '319797712809', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '5', 'Deshi Shosha 11111', 100, 20, '2026-08-01', 120, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722510628/1722510628.webp', 801, 1, '319797712809', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '1', 'Deshi Shosha 11111', 120, 10, '2025-02-28', 130, '9', '36', 'MST ASMA', '4523', 'Adrosho', '1722417256/1722417256.webp', 802, 1, '797316070723', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-18', '2', '5', 150, 1050, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 803, 3, '595160258362', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-20', '1', 'Deshi Shosha 11111', 120, 60, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 804, 6, '392148648591', 1, 'MD. SAGOR ALI', '2025-03-26'),
('0', 'Unknown', '2025-03-20', '2', '5', 150, 700, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 805, 2, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-26'),
('0', 'Unknown', '2025-03-20', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 806, 1, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-24'),
('0', 'Unknown', '2025-03-20', '4', 'Kazi Farms Kitchen', 140, 15, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 807, 3, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-20'),
('0', 'Unknown', '2025-03-20', '5', 'Deshi Shosha 11111', 100, 60, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 808, 3, '392148648591', 1, 'MD. SAGOR ALI', '2025-03-26'),
('0', 'Unknown', '2025-03-20', '6', 'Narikel (Coconut)', 480, 60, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 809, 3, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-20'),
('0', 'Unknown', '2025-03-20', '8', 'banana', 200, 30, '2026-08-01', 210, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723453429/1723453429.webp', 810, 3, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-24'),
('0', 'Unknown', '2025-03-20', '9', 'mango', 120, 25, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 811, 5, '392148648591', 0, 'MD. SAGOR ALI', '2025-03-24'),
('1', 'MST KADIJA', '2025-03-22', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 812, 2, '879216986896', 0, 'N/A', NULL),
('1', 'MST KADIJA', '2025-03-22', '2', '5', 150, 1050, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 813, 3, '879216986896', 0, 'MD. SAGOR ALI', '2025-03-22'),
('1', 'MST KADIJA', '2025-03-22', '3', 'Kazi Farms Kitchen', 100, 40, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 814, 4, '879216986896', 0, 'MD. SAGOR ALI', '2025-03-22'),
('1', 'MST KADIJA', '2025-03-22', '4', 'Kazi Farms Kitchen', 140, 5, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 815, 1, '879216986896', 0, 'N/A', NULL),
('1', 'MST KADIJA', '2025-03-22', '5', 'Deshi Shosha 11111', 100, 60, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 816, 3, '879216986896', 0, 'N/A', NULL),
('1', 'MST KADIJA', '2025-03-22', '6', 'Narikel (Coconut)', 480, 60, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 817, 3, '879216986896', 0, 'MD. SAGOR ALI', '2025-03-22'),
('0', 'Unknown', '2025-03-22', '1', 'Deshi Shosha 11111', 120, 20, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 818, 2, '988369985620', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-22', '2', '5', 150, 1400, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 819, 4, '988369985620', 0, 'MD. SAGOR ALI', '2025-03-22'),
('0', 'Unknown', '2025-03-22', '3', 'Kazi Farms Kitchen', 100, 30, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 820, 3, '988369985620', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-22', '4', 'Kazi Farms Kitchen', 140, 10, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 821, 2, '988369985620', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-22', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 822, 2, '988369985620', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-22', '6', 'Narikel (Coconut)', 480, 40, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 823, 2, '988369985620', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '1', 'Deshi Shosha 11111', 120, 50, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 824, 5, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '2', '5', 150, 1400, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 825, 4, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '3', 'Kazi Farms Kitchen', 100, 50, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 826, 5, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '4', 'Kazi Farms Kitchen', 140, 15, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 827, 3, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 828, 2, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '6', 'Narikel (Coconut)', 480, 40, '2026-08-01', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722511851/1722511851.webp', 829, 2, '242827962730', 0, 'N/A', NULL),
('0', 'Unknown', '2025-03-24', '9', 'mango', 120, 30, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 830, 6, '242827962730', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '1', 'Deshi Shosha 11111', 120, 30, '2025-02-28', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 831, 3, '863765723141', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '2', '5', 150, 5250, '2026-07-31', 500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 832, 15, '863765723141', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '3', 'Kazi Farms Kitchen', 100, 60, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 833, 6, '863765723141', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '4', 'Kazi Farms Kitchen', 140, 20, '2026-08-01', 145, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722509132/1722509132.webp', 834, 4, '863765723141', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '5', 'Deshi Shosha 11111', 100, 40, '2026-08-01', 120, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722510628/1722510628.webp', 835, 2, '863765723141', 0, 'N/A', NULL),
('2', 'Mr jaidur alom', '2025-03-24', '9', 'mango', 120, 40, '2026-08-12', 125, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1723456614/1723456614.webp', 836, 8, '863765723141', 0, 'N/A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `returnmarks`
--

CREATE TABLE `returnmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text DEFAULT NULL,
  `Starf_Id` bigint(20) UNSIGNED NOT NULL,
  `Outlet_Id` bigint(20) UNSIGNED NOT NULL,
  `Product_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `received_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `returnmarks`
--

INSERT INTO `returnmarks` (`id`, `details`, `Starf_Id`, `Outlet_Id`, `Product_id`, `date`, `created_at`, `updated_at`, `received_number`) VALUES
(7, 'I don\'t know why this product is return', 9, 4523, 786, '2025-03-24', '2025-03-24 03:05:59', '2025-03-24 03:05:59', '392148648591'),
(8, 'date exprite this product', 9, 4523, 804, '2025-03-26', '2025-03-26 10:11:22', '2025-03-26 10:11:22', '392148648591'),
(9, 'date exprite this product', 9, 4523, 805, '2025-03-26', '2025-03-26 10:11:56', '2025-03-26 10:11:56', '392148648591'),
(10, 'fg', 9, 4523, 763, '2025-03-26', '2025-03-26 10:16:00', '2025-03-26 10:16:00', '193141870028'),
(11, 'fdfdf', 9, 4523, 808, '2025-03-26', '2025-03-26 10:18:49', '2025-03-26 10:18:49', '392148648591'),
(12, 'dd', 9, 4523, 782, '2025-03-27', '2025-03-27 02:09:31', '2025-03-27 02:09:31', '815422084943'),
(13, 'ghhhhhhhhh gfgfg', 9, 4523, 768, '2025-03-27', '2025-03-27 02:10:14', '2025-03-27 02:10:14', '193141870028'),
(14, 'ftab', 9, 4523, 769, '2025-03-27', '2025-03-27 02:10:51', '2025-03-27 02:10:51', '606831230061');

-- --------------------------------------------------------

--
-- Table structure for table `stock_info`
--

CREATE TABLE `stock_info` (
  `Barcode` varchar(50) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Facility_Product_for_internet` tinyint(1) NOT NULL,
  `Total_product` varchar(50) NOT NULL,
  `Purches_Price` int(50) NOT NULL,
  `Sales_Price` int(50) NOT NULL,
  `Product_add_user_id` varchar(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Outlet_Name` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Catagory` varchar(50) NOT NULL,
  `Sub_Catagory` varchar(50) NOT NULL,
  `Sub_to_sub_catagory` varchar(50) NOT NULL,
  `Expire_date` date NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Add_date` date NOT NULL,
  `Update_Date` date NOT NULL,
  `Descount_rate` int(50) NOT NULL,
  `Top_rating_range` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `pieces` varchar(50) NOT NULL,
  `Product_load_numer` varchar(50) NOT NULL,
  `Product_show_by_admin` int(2) NOT NULL,
  `Toral_product_load_count` int(50) NOT NULL,
  `Total_sales_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_info`
--

INSERT INTO `stock_info` (`Barcode`, `Product_name`, `Facility_Product_for_internet`, `Total_product`, `Purches_Price`, `Sales_Price`, `Product_add_user_id`, `Outlet_Id`, `Outlet_Name`, `Image`, `Catagory`, `Sub_Catagory`, `Sub_to_sub_catagory`, `Expire_date`, `Weight`, `Add_date`, `Update_Date`, `Descount_rate`, `Top_rating_range`, `id`, `pieces`, `Product_load_numer`, `Product_show_by_admin`, `Toral_product_load_count`, `Total_sales_count`) VALUES
('4587979779998', 'Narikel (Coconut)', 0, '10', 4, 8, '9', '4520', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', '0', '2024-01-14', '2024-01-14', 0, 0, 19, '0', '35', 0, 0, 0),
('4587979779998', 'Narikel (Coconut)', 0, '12', 6, 15, '9', '4523', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', '0', '2024-01-14', '2024-08-26', 0, 0, 21, '200gm', '0', 2, 0, 4),
('4587979779998', 'Narikel (Coconut)', 0, '10', 4, 8, '9', '4521', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', '0', '2024-01-14', '2024-01-14', 0, 0, 22, '250gm', '15', 0, 0, 0),
('22222', 'Deshi Shosha', 0, '22', 16, 21, '9', '4523', 'Adrosho', '1705053555/1705053555.webp', '1', '6', '9', '2025-01-15', '± 1111 gm', '2024-01-15', '2024-08-26', 0, 0, 23, '250gm', '0', 2, 0, 1),
('8941161011042', 'Kazi Farms Kitchen', 0, '13', 6, 18, '9', '4523', 'Adrosho', '1703091688/1703091688.webp', '1', '9', '0', '2026-01-15', '0', '2024-01-15', '2024-08-26', 0, 0, 32, '200gm', '0', 2, 0, 18),
('8941100500002', 'revive 100gm', 0, '10', 40, 51, '9', '4523', 'Adrosho', '1705336342/1705336342.jpg', '1', '6', '9', '2026-01-15', '0', '2024-01-15', '2024-08-26', 0, 0, 33, '200gm', '0', 2, 0, 0),
('6921734947994', 'EXAM ERASER DELI H099 20', 0, '14', 60, 80, '9', '4523', 'Adorso Library', '1705467711/1705467711.jpg', '1', '6', '10', '2026-05-31', '0', '2024-02-01', '2024-08-26', 0, 0, 34, '200gm', '0', 2, 0, 1),
('45879762730998', 'Pran Badam Bhaja', 0, '59', 20, 25, '9', '4523', 'Adorso Library', '1703092065/1703092065.webp', '1', '8', '0', '2026-02-02', '± 10 gm', '2024-02-02', '2024-08-26', 0, 0, 35, '0', '0', 2, 0, 0),
('4587979799998', 'Banana Chompa (Ready To Eat)', 0, '9', 120, 130, '9', '4520', 'Adorso Library', '1703091288/1703091288.webp', '1', '8', '2', '2024-02-29', '± 44 gm', '2024-02-02', '2024-02-02', 0, 0, 36, '0', '25', 0, 0, 0),
('45830979779998', 'Aarong Dairy Pure Ghee', 0, '30', 12, 15, '9', '4523', 'Adorso Library', '1703141040/1703141040.webp', '1', '8', '2', '2024-07-31', ' 0', '2024-02-02', '2024-08-26', 0, 0, 37, '0', '0', 2, 0, 0),
('45879797412', 'banana', 0, '35', 10, 15, '9', '4523', 'Adorso Library', '1705121906/1705121906.jpg', '1', '6', '9', '2026-02-02', '± 10 gm', '2024-02-02', '2024-08-26', 0, 0, 38, '0', '0', 2, 0, 0),
('4587979079998', 'Wood Apple', 0, '15', 10, 12, '9', '4523', 'Adorso Library', '1703089135/1703089135.jpg', '1', '8', '1', '2026-02-02', '± 20 gm', '2024-02-02', '2024-08-26', 0, 0, 39, '0', '0', 2, 0, 0),
('666', 'sampu', 0, '0', 133, 150, '9', '4523', 'Adorso Shop', '1722252840/1722252840.webp', '1', '7', '0', '2026-07-29', '± 500 gm', '2024-07-29', '2024-08-26', 10, 0, 40, '0', '0', 2, 0, 0),
('3010', 'rrrr', 0, '50', 150, 180, '9', '4523', 'Adorso Shop', '1722255855/1722255855.webp', '1', '6', '9', '2026-07-29', '0', '2024-07-29', '2024-09-04', 0, 0, 41, '5KG', '0', 2, 50, 0),
('2', '5', 0, '243', 150, 500, '9', '4523', 'Adorso Shop', '1722417290/1722417290.webp', '1', '6', '9', '2026-07-31', '0', '2024-07-31', '2025-02-20', 0, 0, 42, '3', '49', 1, 360, 198),
('3', 'Kazi Farms Kitchen', 0, '176', 100, 110, '9', '4523', 'Adorso Shop', '1722417269/1722417269.webp', '1', '6', '9', '2026-07-31', '0', '2024-07-31', '2025-02-18', 0, 0, 43, '3', '0', 2, 248, 121),
('845944072597', 'Deshi Shosha 11111', 0, '229', 500, 800, '36', '4523', 'Adorso Shop', '1722417256/1722417256.webp', '1', '6', '9', '2026-07-31', '0', '2024-07-31', '2025-01-24', 0, 0, 44, '3', '0', 2, 280, 563),
('100', 'murgi 1.5kg', 0, '0', 1250, 1500, '9', '4523', 'Adorso Shop', '1722417238/1722417238.webp', '1', '6', '9', '2026-07-31', ' 0', '2024-07-31', '2024-08-26', 0, 0, 45, '3', '0', 2, 0, 0),
('4', 'Kazi Farms Kitchen', 0, '22', 140, 145, '36', '4523', 'Adorso Shop', '1722509132/1722509132.webp', '1', '6', '9', '2026-08-01', '0', '2024-08-01', '2025-01-31', 0, 0, 46, '3', '0', 2, 58, 65),
('5', 'Deshi Shosha 11111', 0, '174', 100, 120, '36', '4523', 'Adorso Shop', '1722510628/1722510628.webp', '1', '7', '0', '2026-08-01', '0', '2024-08-01', '2025-01-25', 0, 0, 47, '3', '0', 2, 210, 77),
('6', 'Narikel (Coconut)', 0, '0', 480, 500, '9', '4523', 'Adorso Shop', '1722511851/1722511851.webp', '1', '7', '0', '2026-08-01', '0', '2024-08-01', '2025-01-24', 0, 0, 48, '3', '0', 2, 31, 103),
('7', 'Deshi Shosha 11111', 0, '0', 600, 610, '9', '4523', 'Adorso Shop', '1722511877/1722511877.webp', '1', '7', '0', '2026-08-01', '0', '2024-08-01', '2025-03-22', 0, 0, 49, '3', '40', 1, 9, 34),
('8', 'banana', 0, '0', 200, 210, '36', '4523', 'Adorso Shop', '1723453429/1723453429.webp', '1', '6', '9', '2026-08-01', '0', '2024-08-12', '2024-11-06', 0, 0, 50, '5', '0', 2, 17, 26),
('9', 'mango', 0, '127', 120, 125, '9', '4523', 'Adorso Shop', '1723456614/1723456614.webp', '1', '6', '9', '2026-08-12', '± 50 gm', '2024-08-12', '2024-12-15', 0, 0, 51, '5KG', '0', 2, 170, 53),
('10', 'lichu', 0, '17', 130, 140, '9', '4523', 'Adorso Shop', '1723457463/1723457463.webp', '1', '7', '16', '2026-08-14', '± 10 gm', '2024-08-13', '2024-09-02', 0, 0, 52, '5KG', '0', 2, 100, 7),
('88', 'Fresh khata 40 pages', 0, '45', 150, 180, '9', '4523', 'Adorso Shop', '1725103320/1725103320.webp', '1', '6', '9', '2026-08-31', '0', '2024-08-31', '2024-08-31', 0, 0, 53, '0', '0', 2, 50, 0),
('99', 'computer i5 10th', 0, '10', 500, 800, '9', '4523', 'Adorso Shop', '1725189668/1725189668.webp', '1', '6', '9', '2024-12-13', '0', '2024-09-01', '2024-09-01', 0, 0, 54, '0', '0', 2, 100, 10),
('1', 'Deshi Shosha 11111', 0, '184', 120, 130, '9', '4523', 'Adorso Shop', '1722417256/1722417256.webp', '1', '6', '9', '2025-02-28', '0', '2025-02-18', '2025-02-21', 0, 0, 55, '0', '0', 2, 300, 136);

-- --------------------------------------------------------

--
-- Table structure for table `subcatgory_info`
--

CREATE TABLE `subcatgory_info` (
  `id` int(11) NOT NULL,
  `catagory_id` varchar(100) NOT NULL,
  `catagory_name_s` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Shop_cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcatgory_info`
--

INSERT INTO `subcatgory_info` (`id`, `catagory_id`, `catagory_name_s`, `date`, `Shop_cat_id`) VALUES
(6, '1', 'Handwash', '2023-12-13', '121'),
(7, '1', 'Tissue & Wipes', '2023-12-13', '121'),
(8, '1', 'Women\'s Care', '2023-12-13', '121'),
(9, '1', 'Men\'s Care', '2023-12-13', '121'),
(21, '2', 'Dishwashing Supplies', '2023-12-21', '121'),
(22, '2', 'Laundry', '2023-12-21', '121'),
(23, '2', 'Toilet Cleaners', '2023-12-21', '121'),
(24, '2', 'Napkins & Paper Products', '2023-12-21', '121'),
(25, '2', 'Pest Control', '2023-12-21', '121'),
(26, '2', 'Floor & Glass Cleaners', '2023-12-21', '121'),
(27, '2', 'Cleaning Accessories', '2023-12-21', '121'),
(28, '2', 'Air Fresheners', '2023-12-21', '121'),
(29, '2', 'Disposables & Trash Bags', '2023-12-21', '121'),
(30, '2', 'Trash Bin & Basket', '2023-12-21', '121'),
(31, '2', 'Shoe Care', '2023-12-21', '121'),
(32, '1', 'A', '2024-01-04', '121'),
(33, '1', 'B', '2024-01-04', '121'),
(34, '1', 'C', '2024-01-04', '121'),
(35, '1', 'ohghgh', '2024-01-04', '120'),
(37, '1', 'gdfgfdg', '2024-12-17', '121'),
(38, '31', 'Computer', '2024-12-17', '121'),
(39, '31', 'router', '2024-12-17', '121'),
(40, '31', 'printer', '2024-12-17', '121'),
(41, '32', 'T-shart', '2025-01-28', '121'),
(42, '32', 'Lowngi', '2025-01-28', '121'),
(43, '32', 'Pant', '2025-01-28', '121'),
(44, '32', 'Underwar', '2025-01-28', '121'),
(45, '32', 'Shirt', '2025-01-28', '121'),
(46, '18', 'k', '2025-01-28', '121'),
(47, '2', 'k', '2025-01-28', '121'),
(48, '18', 'u', '2025-01-28', '121');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_catgory_info`
--

CREATE TABLE `sub_sub_catgory_info` (
  `id` int(11) NOT NULL,
  `catagory_id` varchar(50) NOT NULL,
  `sub_catagory_id` varchar(50) NOT NULL,
  `sub_catagory_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Shop_cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_sub_catgory_info`
--

INSERT INTO `sub_sub_catgory_info` (`id`, `catagory_id`, `sub_catagory_id`, `sub_catagory_name`, `date`, `Shop_cat_id`) VALUES
(1, '1', '8', 'Women\'s Soaps', '2023-12-11', '121'),
(2, '1', '8', 'Hair Care', '2023-12-11', '121'),
(3, '1', '8', 'Women\'s Shampoos & Conditioners', '2023-12-11', '121'),
(4, '1', '8', 'Feminine Care', '2023-12-11', '121'),
(5, '21', '19', 'sss', '2023-12-13', '121'),
(6, '21', '19', 'ssdd', '2023-12-13', '121'),
(7, '21', '19', 'sdsd', '2023-12-13', '121'),
(8, '1', '6', 'a', '2024-01-04', '121'),
(9, '1', '6', 'b', '2024-01-04', '121'),
(10, '1', '6', 'c', '2024-01-04', '121'),
(11, '1', '6', 'd', '2024-01-04', '120'),
(12, '30', '36', 'I', '2024-01-04', '120'),
(13, '30', '36', 'and', '2024-01-04', '120'),
(14, '30', '36', 'Love', '2024-01-04', '120'),
(15, '1', '7', 'me', '2024-08-12', '121'),
(16, '1', '7', 'you', '2024-08-12', '121'),
(17, '31', '38', 'mouse', '2024-12-17', '121'),
(18, '31', '38', 'Keyboard', '2024-12-17', '121'),
(19, '31', '38', 'monitor', '2024-12-17', '121'),
(20, '32', '41', 'a', '2025-01-28', '121'),
(21, '32', '41', 'b', '2025-01-28', '121'),
(22, '32', '41', 'c', '2025-01-28', '121');

-- --------------------------------------------------------

--
-- Table structure for table `suppile_info`
--

CREATE TABLE `suppile_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `unite` int(20) NOT NULL,
  `totaltk` int(50) NOT NULL,
  `date` date NOT NULL,
  `paymentdate` date NOT NULL,
  `ShopID` int(11) NOT NULL,
  `payable` int(50) NOT NULL,
  `paymenttk` int(50) NOT NULL,
  `paymentmethod` varchar(20) NOT NULL,
  `admin_show` int(10) NOT NULL,
  `Stratf_id` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `suppile_info`
--

INSERT INTO `suppile_info` (`id`, `company_name`, `name`, `mobile`, `address`, `unite`, `totaltk`, `date`, `paymentdate`, `ShopID`, `payable`, `paymenttk`, `paymentmethod`, `admin_show`, `Stratf_id`, `updated_at`) VALUES
(230, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(231, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(232, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(233, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(234, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 10, 1200, '2025-02-20', '2025-02-21', 4523, 0, 1200, 'cashdrawer', 1, 0, '2025-02-21 10:02:35'),
(235, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(236, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(237, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(238, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 5, 600, '2025-02-20', '2025-02-20', 4523, 0, 600, 'other', 1, 0, '2025-02-21 10:02:35'),
(239, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 10, 1200, '2025-02-21', '2025-02-21', 4523, 0, 1200, 'cashdrawer', 1, 0, '2025-02-21 10:02:35'),
(240, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 20, 2400, '2025-02-21', '2025-02-21', 4523, 0, 600, 'cashdrawer', 1, 9, '2025-02-21 10:02:35'),
(241, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 20, 2400, '2025-02-21', '2025-02-21', 4523, 0, 0, 'cashdrawer', 1, 9, '2025-02-21 10:03:06'),
(242, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 50, 6000, '2025-02-21', '2025-02-21', 4523, 1600, 4400, 'cashdrawer', 1, 9, '2025-02-21 07:58:53'),
(243, 'SUCHUNA ENTER PRICE', 'Md.ALLAMHAMMUD KHAN', '01713742051', 'hatarr,monapur', 40, 24000, '2025-03-22', '2025-03-22', 4523, 0, 0, '0', 0, 9, '2025-03-22 10:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `suppile_info_log`
--

CREATE TABLE `suppile_info_log` (
  `id` int(11) NOT NULL,
  `Product_load_numer` varchar(50) NOT NULL,
  `pieces` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Purches_Price` int(50) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Descount_rate` int(50) NOT NULL,
  `Update_Date` date NOT NULL,
  `Product_add_user_id` varchar(50) NOT NULL,
  `Sales_Price` int(50) NOT NULL,
  `Admindatasentdate` date NOT NULL,
  `supplier_id` int(50) NOT NULL,
  `Outlet_Id` varchar(50) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Barcode` varchar(50) NOT NULL,
  `Admin_show` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `suppile_info_log`
--

INSERT INTO `suppile_info_log` (`id`, `Product_load_numer`, `pieces`, `Image`, `Purches_Price`, `Weight`, `Descount_rate`, `Update_Date`, `Product_add_user_id`, `Sales_Price`, `Admindatasentdate`, `supplier_id`, `Outlet_Id`, `Product_name`, `Barcode`, `Admin_show`) VALUES
(273, '16', '3', '1722510628/1722510628.webp', 100, '0', 0, '2025-01-25', '36', 120, '2025-01-25', 218, '4523', 'Deshi Shosha 11111', '5', 1),
(274, '10', '3', '1722417269/1722417269.webp', 100, '0', 0, '2025-01-25', '36', 110, '2025-01-25', 218, '4523', 'Kazi Farms Kitchen', '3', 1),
(275, '20', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-01-25', '36', 500, '2025-01-25', 218, '4523', '5', '2', 1),
(276, '20', '3', '1722509132/1722509132.webp', 140, '0', 0, '2025-01-31', '36', 145, '2025-01-31', 219, '4523', 'Kazi Farms Kitchen', '4', 1),
(277, '10', '3', '1722417269/1722417269.webp', 100, '0', 0, '2025-01-31', '36', 110, '2025-01-31', 219, '4523', 'Kazi Farms Kitchen', '3', 1),
(278, '20', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-01-31', '36', 500, '2025-01-31', 219, '4523', '5', '2', 1),
(279, '20', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-18', '9', 130, '2025-02-18', 220, '4523', 'Deshi Shosha 11111', '1', 1),
(280, '30', '3', '1722417269/1722417269.webp', 100, '0', 0, '2025-02-18', '9', 110, '2025-02-18', 220, '4523', 'Kazi Farms Kitchen', '3', 1),
(281, '60', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-02-18', '9', 500, '2025-02-18', 220, '4523', '5', '2', 1),
(282, '20', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-18', '9', 130, '2025-02-18', 221, '4523', 'Deshi Shosha 11111', '1', 1),
(283, '60', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-02-18', '9', 500, '2025-02-18', 221, '4523', '5', '2', 1),
(284, '100', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-18', '9', 130, '2025-02-18', 222, '4523', 'Deshi Shosha 11111', '1', 1),
(285, '70', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-18', '9', 130, '2025-02-18', 223, '4523', 'Deshi Shosha 11111', '1', 1),
(286, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 224, '4523', 'Deshi Shosha 11111', '1', 0),
(287, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 225, '4523', 'Deshi Shosha 11111', '1', 0),
(288, '49', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-02-20', '9', 500, '2025-02-20', 226, '4523', '5', '2', 0),
(289, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 227, '4523', 'Deshi Shosha 11111', '1', 0),
(290, '49', '3', '1722417290/1722417290.webp', 150, '0', 0, '2025-02-20', '9', 500, '2025-02-20', 227, '4523', '5', '2', 0),
(291, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 228, '4523', 'Deshi Shosha 11111', '1', 0),
(292, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 229, '4523', 'Deshi Shosha 11111', '1', 0),
(293, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 230, '4523', 'Deshi Shosha 11111', '1', 0),
(294, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 231, '4523', 'Deshi Shosha 11111', '1', 0),
(295, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 232, '4523', 'Deshi Shosha 11111', '1', 0),
(296, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 233, '4523', 'Deshi Shosha 11111', '1', 0),
(297, '10', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 234, '4523', 'Deshi Shosha 11111', '1', 0),
(298, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 235, '4523', 'Deshi Shosha 11111', '1', 0),
(299, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 236, '4523', 'Deshi Shosha 11111', '1', 0),
(300, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 237, '4523', 'Deshi Shosha 11111', '1', 1),
(301, '5', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-20', '9', 130, '2025-02-20', 238, '4523', 'Deshi Shosha 11111', '1', 1),
(302, '10', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-21', '9', 130, '2025-02-21', 239, '4523', 'Deshi Shosha 11111', '1', 1),
(303, '20', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-21', '9', 130, '2025-02-21', 240, '4523', 'Deshi Shosha 11111', '1', 1),
(304, '20', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-21', '9', 130, '2025-02-21', 241, '4523', 'Deshi Shosha 11111', '1', 1),
(305, '50', '0', '1722417256/1722417256.webp', 120, '0', 0, '2025-02-21', '9', 130, '2025-02-21', 242, '4523', 'Deshi Shosha 11111', '1', 1),
(306, '40', '3', '1722511877/1722511877.webp', 600, '0', 0, '2025-03-22', '9', 610, '2025-03-22', 243, '4523', 'Deshi Shosha 11111', '7', 0);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(255) NOT NULL,
  `amount_trans` int(20) NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `shatf_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount_catagorise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `details`, `amount_trans`, `shop_id`, `shatf_id`, `created_at`, `updated_at`, `amount_catagorise`) VALUES
(41, 'Balance Transfer by MD. SAGOR ALI to  FAHMIDA  AKTER because Balance close for todays ', 83430, 4523, 9, '2025-02-22 03:49:01', '2025-02-22 03:49:01', 0),
(42, 'Balance Transfer by FAHMIDA  AKTER to  MD. SAGOR ALI because Balance close for todays ', 83430, 4523, 35, '2025-02-22 03:49:01', '2025-02-22 03:49:01', 1),
(43, 'Balance Transfer by FAHMIDA  AKTER to  MD. SAGOR ALI because Balance close for todays ', 83760, 4523, 35, '2025-02-22 03:51:01', '2025-02-22 03:51:01', 0),
(44, 'Balance Transfer by MD. SAGOR ALI to  FAHMIDA  AKTER because Balance close for todays ', 83760, 4523, 9, '2025-02-22 03:51:01', '2025-02-22 03:51:01', 1),
(45, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-02-22 05:47:32', '2025-02-22 05:47:32', 1),
(46, 'Expence add by MD. SAGOR ALI insert form LunchCost', 600, 4523, 9, '2025-02-22 06:52:28', '2025-02-22 06:52:28', 0),
(47, 'Expence Update add by MD. SAGOR ALI insert form LunchCost befor amount was 600', 200, 4523, 9, '2025-02-22 06:53:01', '2025-02-22 06:53:01', 2),
(48, 'Delete expence by MD. SAGOR ALI Where form LunchCost', 200, 4523, 9, '2025-02-22 06:59:00', '2025-02-22 06:59:00', 1),
(49, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-06 03:59:51', '2025-03-06 03:59:51', 1),
(50, 'Product Sales Transaction by MD. SAGOR ALI', 4395, 4523, 9, '2025-03-06 04:00:55', '2025-03-06 04:00:55', 1),
(51, 'Product Sales Transaction by MD. SAGOR ALI', 3615, 4523, 9, '2025-03-06 04:06:03', '2025-03-06 04:06:03', 1),
(52, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-07 05:29:55', '2025-03-07 05:29:55', 1),
(53, 'Product Sales Transaction by MD. SAGOR ALI', 1980, 4523, 9, '2025-03-07 05:38:31', '2025-03-07 05:38:31', 1),
(54, 'Product Sales Transaction by MD. SAGOR ALI', 4155, 4523, 9, '2025-03-07 05:45:07', '2025-03-07 05:45:07', 1),
(55, 'Product Sales Transaction by MD. SAGOR ALI', 260, 4523, 9, '2025-03-07 05:53:46', '2025-03-07 05:53:46', 1),
(56, 'Product Sales Transaction by MD. SAGOR ALI', 1240, 4523, 9, '2025-03-07 05:54:35', '2025-03-07 05:54:35', 1),
(57, 'Product Sales Transaction by MD. SAGOR ALI', 1380, 4523, 9, '2025-03-08 03:43:02', '2025-03-08 03:43:02', 1),
(58, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-08 04:11:34', '2025-03-08 04:11:34', 1),
(59, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-08 04:12:06', '2025-03-08 04:12:06', 1),
(60, 'Product Sales Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-08 04:12:38', '2025-03-08 04:12:38', 1),
(61, 'Product Sales 0 Transaction by MD. SAGOR ALI', 630, 4523, 9, '2025-03-08 05:04:27', '2025-03-08 05:04:27', 1),
(62, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 885, 4523, 9, '2025-03-08 05:06:49', '2025-03-08 05:06:49', 1),
(63, 'Product Sales SHAHANARA Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-08 05:11:06', '2025-03-08 05:11:06', 1),
(64, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 710, 4523, 9, '2025-03-08 05:11:37', '2025-03-08 05:11:37', 1),
(65, 'Product Sales rokey Transaction by MD. SAGOR ALI', 500, 4523, 9, '2025-03-08 05:12:10', '2025-03-08 05:12:10', 1),
(66, 'Product Sales Roshany Transaction by MD. SAGOR ALI', 125, 4523, 9, '2025-03-08 05:12:58', '2025-03-08 05:12:58', 1),
(67, 'Product Sales rifat Transaction by MD. SAGOR ALI', 500, 4523, 9, '2025-03-08 06:01:01', '2025-03-08 06:01:01', 1),
(68, 'Product Sales rokey Transaction by MD. SAGOR ALI', 1840, 4523, 9, '2025-03-09 04:13:15', '2025-03-09 04:13:15', 1),
(69, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 4025, 4523, 9, '2025-03-12 05:52:11', '2025-03-12 05:52:11', 1),
(70, 'Product Sales rifad Transaction by MD. SAGOR ALI', 3500, 4523, 9, '2025-03-12 10:33:11', '2025-03-12 10:33:11', 1),
(71, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 1505, 4523, 9, '2025-03-14 03:23:42', '2025-03-14 03:23:42', 1),
(72, 'Product Sales rifat Transaction by MD. SAGOR ALI', 885, 4523, 9, '2025-03-14 03:25:23', '2025-03-14 03:25:23', 1),
(73, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-14 03:26:26', '2025-03-14 03:26:26', 1),
(74, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-14 03:27:11', '2025-03-14 03:27:11', 1),
(75, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-14 03:27:46', '2025-03-14 03:27:46', 1),
(76, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 130, 4523, 9, '2025-03-14 04:06:01', '2025-03-14 04:06:01', 1),
(77, 'Product Sales SHAHANARA Transaction by MD. SAGOR ALI', 3500, 4523, 9, '2025-03-14 04:07:05', '2025-03-14 04:07:05', 1),
(78, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 3015, 4523, 9, '2025-03-14 04:40:55', '2025-03-14 04:40:55', 1),
(79, 'Product Sales rokey Transaction by MD. SAGOR ALI', 1365, 4523, 9, '2025-03-14 05:42:14', '2025-03-14 05:42:14', 1),
(80, 'Product Sales SHAHANARA Transaction by MD. SAGOR ALI', 390, 4523, 9, '2025-03-14 05:43:44', '2025-03-14 05:43:44', 1),
(81, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 390, 4523, 9, '2025-03-14 05:44:28', '2025-03-14 05:44:28', 1),
(82, 'Product Sales GOLBAR HOSSAIN Transaction by MD. SAGOR ALI', 650, 4523, 9, '2025-03-14 05:59:22', '2025-03-14 05:59:22', 1),
(83, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 520, 4523, 9, '2025-03-14 06:00:05', '2025-03-14 06:00:05', 1),
(84, 'Product Sales allamin Transaction by MD. SAGOR ALI', 4000, 4523, 9, '2025-03-15 05:41:09', '2025-03-15 05:41:09', 1),
(85, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 260, 4523, 9, '2025-03-15 05:42:21', '2025-03-15 05:42:21', 1),
(86, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 1611, 4523, 9, '2025-03-15 05:43:29', '2025-03-15 05:43:29', 1),
(87, 'Product Sales Unknown Transaction by MST ASMA', 1705, 4523, 36, '2025-03-18 05:27:21', '2025-03-18 05:27:21', 1),
(88, 'Product Sales Unknown Transaction by MST ASMA', 130, 4523, 36, '2025-03-18 05:54:33', '2025-03-18 05:54:33', 1),
(89, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 1500, 4523, 9, '2025-03-18 05:55:41', '2025-03-18 05:55:41', 1),
(90, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 5440, 4523, 9, '2025-03-20 03:08:10', '2025-03-20 03:08:10', 1),
(91, 'Balance Transfer by MST ASMA to  MD. SAGOR ALI because Balance close for todays ', 1835, 4523, 36, '2025-03-20 03:49:50', '2025-03-20 03:49:50', 0),
(92, 'Balance Transfer by MD. SAGOR ALI to  MST ASMA because Balance close for todays ', 1835, 4523, 9, '2025-03-20 03:49:50', '2025-03-20 03:49:50', 1),
(93, 'Product Sales MST KADIJA Transaction by MD. SAGOR ALI', 4205, 4523, 9, '2025-03-22 03:38:23', '2025-03-22 03:38:23', 1),
(94, 'Balance Transfer by MD. SAGOR ALI to  MST ASMA because Balance close for todays ', 140094, 4523, 9, '2025-03-22 04:22:49', '2025-03-22 04:22:49', 0),
(95, 'Balance Transfer by MST ASMA to  MD. SAGOR ALI because Balance close for todays ', 140094, 4523, 36, '2025-03-22 04:22:49', '2025-03-22 04:22:49', 1),
(96, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 4120, 4523, 9, '2025-03-22 04:28:12', '2025-03-22 04:28:12', 1),
(97, 'Expence add by MD. SAGOR ALI Product Return to Sales ', 1000, 4523, 9, '2025-03-22 05:58:06', '2025-03-22 05:58:06', 0),
(98, 'Expence add by MD. SAGOR ALI insert form LunchCost', 100, 4523, 9, '2025-03-23 05:22:11', '2025-03-23 05:22:11', 0),
(99, 'Balance Transfer by MD. SAGOR ALI to  MST ASMA because Balance close for todays ', 1020, 4523, 9, '2025-03-23 05:23:00', '2025-03-23 05:23:00', 0),
(100, 'Balance Transfer by MST ASMA to  MD. SAGOR ALI because Balance close for todays ', 1020, 4523, 36, '2025-03-23 05:23:00', '2025-03-23 05:23:00', 1),
(101, 'Product Sales Unknown Transaction by MD. SAGOR ALI', 5625, 4523, 9, '2025-03-24 02:29:46', '2025-03-24 02:29:46', 1),
(102, 'Product Sales Mr jaidur alom Transaction by MD. SAGOR ALI', 10370, 4523, 9, '2025-03-24 02:31:18', '2025-03-24 02:31:18', 1),
(103, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 806', 110, 4523, 9, '2025-03-24 02:59:11', '2025-03-24 02:59:11', 0),
(104, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 806', 110, 4523, 9, '2025-03-24 02:59:49', '2025-03-24 02:59:49', 0),
(105, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 806', 110, 4523, 9, '2025-03-24 03:00:44', '2025-03-24 03:00:44', 0),
(106, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 806', 110, 4523, 9, '2025-03-24 03:01:13', '2025-03-24 03:01:13', 0),
(107, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 810', 230, 4523, 9, '2025-03-24 03:02:18', '2025-03-24 03:02:18', 0),
(108, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 810', 230, 4523, 9, '2025-03-24 03:02:38', '2025-03-24 03:02:38', 0),
(109, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 810', 230, 4523, 9, '2025-03-24 03:04:01', '2025-03-24 03:04:01', 0),
(110, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 810', 230, 4523, 9, '2025-03-24 03:05:05', '2025-03-24 03:05:05', 0),
(111, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 810', 230, 4523, 9, '2025-03-24 03:05:12', '2025-03-24 03:05:12', 0),
(112, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 811', 265, 4523, 9, '2025-03-24 03:05:59', '2025-03-24 03:05:59', 0),
(113, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 804', 780, 4523, 9, '2025-03-26 10:11:22', '2025-03-26 10:11:22', 0),
(114, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 805', 1000, 4523, 9, '2025-03-26 10:11:56', '2025-03-26 10:11:56', 0),
(115, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 763', 130, 4523, 9, '2025-03-26 10:16:00', '2025-03-26 10:16:00', 0),
(116, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 808', 360, 4523, 9, '2025-03-26 10:18:49', '2025-03-26 10:18:49', 0),
(117, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 782', 270, 4523, 9, '2025-03-27 02:09:31', '2025-03-27 02:09:31', 0),
(118, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 768', 1000, 4523, 9, '2025-03-27 02:10:14', '2025-03-27 02:10:14', 0),
(119, 'Expence add by MD. SAGOR ALI Product Return to Sales , product Id 769', 130, 4523, 9, '2025-03-27 02:10:51', '2025-03-27 02:10:51', 0);

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
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `ShopID` varchar(10) NOT NULL,
  `Shop_cat_id` varchar(10) NOT NULL,
  `acount_permision` int(10) NOT NULL,
  `Notifi_meg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Shopname`, `ShopAddress`, `email`, `password`, `StrafCount`, `AdminCat`, `Mobile`, `MobileVerifa`, `CreateDate`, `image`, `UpdateProfileCout`, `Name`, `AdminKey`, `last_seen`, `updated_at`, `ShopID`, `Shop_cat_id`, `acount_permision`, `Notifi_meg`) VALUES
(9, 'Adorso Shop', 'kamarapara', 'ferkey.net@gmail.com', '$2y$10$MUwk4g3w2REUSO8mXkkRz.dmgAU98SgWLLftxSAl64We2di4hf9Sm', 23, 'Admin', '01789658987', 'OK', '2023-11-24', '1701069398.jpg', '10', 'MD. SAGOR ALI', '420', '2025-03-27 11:24:05.000000', '2025-03-27 11:24:05.000000', '4523', '121', 1, 0),
(34, 'najmul shop', 'kamarapara', 'nazmulhaque181915@gmail.com', '$2y$10$8yyPk86k.R3ty01I.PHCkuWW7Pa9AZQAAduAS2ebw5SHjzeoxuF92', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071158.jpg', '20', 'MD. NAZMUL HAQUE', '10', '2024-08-03 06:23:26.000000', '2024-08-03 06:23:26.000000', '4520', '120', 0, 0),
(35, 'Adrosho', 'kamarapara', 'fahmida.roshny.15@gmail.com', '$2y$10$MUwk4g3w2REUSO8mXkkRz.dmgAU98SgWLLftxSAl64We2di4hf9Sm', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071385.jpg', '20', 'FAHMIDA  AKTER', '9', '2025-02-22 03:51:01.000000', '2025-02-22 03:51:01.000000', '4523', '121', 0, 0),
(36, 'Adrosho', 'kamarapara', 'asma@gmail.com', '$2y$10$q7RE91KROfbXpEZEtlavAeeIMAhPOT0.pkX/LEYFUoDq/qDjNk37.', 5, 'employee', '01789898777', 'OK', '2023-12-06', '1701875809.jpg', '20', 'MST ASMA', '9', '2025-03-24 02:34:18.000000', '2025-03-24 02:34:18.000000', '4523', '121', 0, 0);

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
-- Indexes for table `assets_and_properity`
--
ALTER TABLE `assets_and_properity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow_cost_info`
--
ALTER TABLE `cash_flow_cost_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_sent_any_person`
--
ALTER TABLE `cash_sent_any_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catgory_info`
--
ALTER TABLE `catgory_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_frm`
--
ALTER TABLE `contact_frm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

--
-- Indexes for table `customersold`
--
ALTER TABLE `customersold`
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
-- Indexes for table `product_info120`
--
ALTER TABLE `product_info120`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `product_info121`
--
ALTER TABLE `product_info121`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `profit_datails`
--
ALTER TABLE `profit_datails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purches_list`
--
ALTER TABLE `purches_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnmarks`
--
ALTER TABLE `returnmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_info`
--
ALTER TABLE `stock_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcatgory_info`
--
ALTER TABLE `subcatgory_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_catgory_info`
--
ALTER TABLE `sub_sub_catgory_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppile_info`
--
ALTER TABLE `suppile_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppile_info_log`
--
ALTER TABLE `suppile_info_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `assets_and_properity`
--
ALTER TABLE `assets_and_properity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cash_flow_cost_info`
--
ALTER TABLE `cash_flow_cost_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `cash_sent_any_person`
--
ALTER TABLE `cash_sent_any_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `catgory_info`
--
ALTER TABLE `catgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_frm`
--
ALTER TABLE `contact_frm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customersold`
--
ALTER TABLE `customersold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_info120`
--
ALTER TABLE `product_info120`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_info121`
--
ALTER TABLE `product_info121`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `profit_datails`
--
ALTER TABLE `profit_datails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `purches_list`
--
ALTER TABLE `purches_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=837;

--
-- AUTO_INCREMENT for table `returnmarks`
--
ALTER TABLE `returnmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stock_info`
--
ALTER TABLE `stock_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `subcatgory_info`
--
ALTER TABLE `subcatgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sub_sub_catgory_info`
--
ALTER TABLE `sub_sub_catgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `suppile_info`
--
ALTER TABLE `suppile_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `suppile_info_log`
--
ALTER TABLE `suppile_info_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usersxxxx`
--
ALTER TABLE `usersxxxx`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
