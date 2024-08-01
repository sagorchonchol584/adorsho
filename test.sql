-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 11:56 AM
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
(23, 'roshany', '2023-12-12', '121'),
(27, 'hello', '2023-12-21', '121'),
(30, 'me', '2024-01-04', '120');

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
('SHAH', '01725181915', 'hatra', '0000-00-00', 5, '2023-11-05', 0, '54578', '362', 32, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 24),
('Roshany', '01725181915', 'gg', '2023-11-21', 5, '2023-11-11', 0, '54578', '362', 34, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 28),
('Najmul', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 83),
('SHAHANARA', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 85),
('Roshany', '01725181915', 'gg', '2023-11-22', 0, '2023-11-22', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 97),
('rifad', '01796587578', 'hatra', '2023-12-20', 0, '2023-12-20', 0, '54578', '362', 95, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 117),
('SHAHANARA', '01701077584', 'N/A', '2024-07-09', 0, '2024-07-09', 0, '54578', '362', 0, 'Good', '33455', '1212', '5632', '6985', '9685', '9658', '56', '965', 118);

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
(50, '2', '5', '0', '1722417290/1722417290.webp', '1', '6', '9', '2024-07-31', '2024-07-31', '9', '4523');

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
  `Discount_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profit_datails`
--

INSERT INTO `profit_datails` (`id`, `Recive_number`, `Profit`, `Date`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `show_key`, `Total_sales`, `totaldiscout`, `Net_Sale`, `Net_Profit`, `Names`, `Discount_type`) VALUES
(1, '151043950351', 40, '2024-05-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 500, 0, 0, 0, 'lalto', ''),
(2, '752338294175', 40, '2024-05-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 100, 0, 0, 0, 'hello', ''),
(3, '589946653605', 26, '2024-05-14', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 90, 0, 0, 0, 'imaran', ''),
(4, '613133920596', 28, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 61, 0, 0, 0, 'jafran', ''),
(5, '210325813197', 26, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 53, 0, 0, 0, 'rohit', ''),
(6, '318780577037', 28, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 61, 0, 0, 0, 'nahit', ''),
(7, '533881373804', 14, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 32, 4, 0, 0, 'usub', ''),
(8, '695552572737', 29, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 50, 6, 0, 0, 'nur khan', ''),
(9, '491306286852', 40, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 70, 9, 0, 0, 'shihab', ''),
(10, '197365947958', 27, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 46, 5, 41, 0, 'saroyar', ''),
(11, '463249855524', 35, '2024-05-15', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 59, 9, 50, 26, 'jibon', ''),
(12, '797397019669', 9, '2024-05-17', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 15, 0, 15, 9, 'sakil', ''),
(21, '912438627822', 5, '2024-06-04', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 20, 0, 20, 5, 'haim', ''),
(22, '652232268472', 41, '2024-07-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 120, 0, 120, 41, 'me', ''),
(23, '391205329581', 50, '2024-07-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 163, 0, 163, 50, 'Unknown', ''),
(24, '249287432312', 9, '2024-06-04', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 15, 0, 15, 9, 'Unknown', ''),
(25, '314043799983', 10, '2024-06-04', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 40, 0, 40, 10, 'Unknown', ''),
(26, '147148398786', 24, '2024-06-04', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 36, 0, 36, 24, 'Unknown', ''),
(27, '706440721617', 5, '2024-07-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 20, 0, 20, 5, 'Unknown', ''),
(28, '239588350023', 14, '2024-07-08', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 26, 0, 26, 14, 'Unknown', ''),
(29, '498030529775', 2, '2024-07-09', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 8, 0, 8, 2, 'Unknown', ''),
(30, '975311168657', 88, '2024-07-29', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 422, 0, 422, 88, 'Unknown', ''),
(31, '582488987081', 127, '2024-07-29', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 645, 0, 645, 127, 'Unknown', ''),
(32, '632240742540', 14, '2024-07-29', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 36, 0, 36, 14, 'Unknown', ''),
(33, '898319844704', 9, '2024-07-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 15, 0, 15, 9, 'Unknown', ''),
(34, '186920241843', 44, '2024-07-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 134, 10, 124, 34, 'Unknown', ''),
(35, '375997677761', 661, '2024-07-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 3087, 87, 3000, 574, 'Unknown', ''),
(36, '806594467996', 1018, '2024-07-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 3060, 153, 2907, 865, 'Unknown', ''),
(37, '266036185069', 5, '2024-07-31', '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', 0, 21, 1, 20, 4, 'Unknown', 'tk');

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
  `Recive_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purches_list`
--

INSERT INTO `purches_list` (`customer_id`, `customer_name`, `purches_date`, `product_id`, `product_Name`, `product_Price`, `profit_to_Pruduct`, `prodcut_Exp_date`, `Sales_price`, `Admin_Id`, `Starf_Id`, `Starf_Name`, `Outlet_Id`, `Outlet_Name`, `Images`, `id`, `product_unite`, `Recive_num`) VALUES
('50', 'customer_name', '2024-05-14', '22222', 'Deshi Shosha', 15, 10, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 41, 2, '752338294175'),
('50', 'customer_name', '2024-05-14', '4587979779998', 'Narikel (Coconut)', 6, 18, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 42, 2, '752338294175'),
('50', 'customer_name', '2024-05-14', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 43, 1, '752338294175'),
('50', 'customer_name', '2024-05-14', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 44, 1, '589946653605'),
('50', 'customer_name', '2024-05-14', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 45, 1, '589946653605'),
('50', 'customer_name', '2024-05-14', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 46, 1, '589946653605'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 47, 1, '136119665903'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 27, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 48, 3, '136119665903'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 49, 1, '136119665903'),
('50', 'customer_name', '2024-05-15', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 10, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 50, 5, '136119665903'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 51, 1, '613133920596'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 52, 1, '613133920596'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 53, 1, '613133920596'),
('50', 'customer_name', '2024-05-15', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 54, 1, '613133920596'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 55, 1, '210325813197'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 56, 1, '210325813197'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 57, 1, '210325813197'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 58, 1, '318780577037'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 59, 1, '318780577037'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 60, 1, '318780577037'),
('50', 'customer_name', '2024-05-15', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 61, 1, '318780577037'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 62, 1, '533881373804'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 63, 1, '533881373804'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 64, 1, '695552572737'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 65, 2, '695552572737'),
('50', 'customer_name', '2024-05-15', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 66, 1, '491306286852'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 67, 1, '491306286852'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 68, 2, '491306286852'),
('50', 'customer_name', '2024-05-15', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 69, 1, '491306286852'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 27, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 70, 3, '197365947958'),
('50', 'customer_name', '2024-05-15', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 71, 1, '463249855524'),
('50', 'customer_name', '2024-05-15', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 72, 2, '463249855524'),
('50', 'customer_name', '2024-05-15', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 73, 1, '463249855524'),
('50', 'customer_name', '2024-05-17', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 74, 1, '797397019669'),
('50', 'customer_name', '2024-05-17', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 75, 1, '880283923026'),
('50', 'customer_name', '2024-05-17', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 76, 1, '966960581909'),
('50', 'customer_name', '2024-05-17', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 77, 1, '369248283843'),
('50', 'customer_name', '2024-05-17', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 78, 1, '125185903203'),
('50', 'customer_name', '2024-05-17', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 79, 2, '940276361429'),
('50', 'customer_name', '2024-05-17', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 80, 1, '823824634807'),
('50', 'customer_name', '2024-05-17', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 81, 1, '147969416162'),
('50', 'customer_name', '2024-05-26', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 82, 1, '851517646495'),
('50', 'customer_name', '2024-05-26', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 83, 1, '389603877330'),
('50', 'customer_name', '2024-05-26', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 84, 1, '524877997080'),
('50', 'customer_name', '2024-05-26', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 85, 1, '802476456904'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 10, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 86, 2, '690114988858'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 87, 1, '690114988858'),
('50', 'customer_name', '2024-06-04', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 88, 2, '690114988858'),
('50', 'customer_name', '2024-06-04', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 4, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 89, 2, '690114988858'),
('50', 'customer_name', '2024-06-04', '45879762730998', 'Pran Badam Bhaja', 20, 5, '2026-02-02', 25, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703092065/1703092065.webp', 90, 1, '690114988858'),
('50', 'customer_name', '2024-06-04', '4587979799998', 'Banana Chompa (Ready To Eat)', 120, 10, '2024-02-29', 130, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091288/1703091288.webp', 91, 1, '690114988858'),
('50', 'customer_name', '2024-06-04', '8941100500002', 'revive 100gm', 40, 22, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 92, 2, '690114988858'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 18, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 93, 2, '687245613020'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 94, 1, '651575981981'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 95, 1, '556289322482'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 96, 1, '248901513044'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 97, 1, '631438284500'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 98, 1, '912438627822'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 99, 1, '827696606168'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 100, 1, '827696606168'),
('50', 'customer_name', '2024-06-04', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 101, 1, '827696606168'),
('50', 'customer_name', '2024-06-04', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 102, 1, '827696606168'),
('50', 'customer_name', '2024-06-04', '8941100500002', 'revive 100gm', 40, 11, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 103, 1, '827696606168'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 104, 1, '652232268472'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 105, 1, '652232268472'),
('50', 'customer_name', '2024-06-04', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 106, 1, '652232268472'),
('50', 'customer_name', '2024-06-04', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 4, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 107, 2, '652232268472'),
('50', 'customer_name', '2024-06-04', '8941100500002', 'revive 100gm', 40, 11, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 108, 1, '652232268472'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 109, 1, '391205329581'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 110, 1, '391205329581'),
('50', 'customer_name', '2024-06-04', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 111, 1, '391205329581'),
('50', 'customer_name', '2024-06-04', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 112, 1, '391205329581'),
('50', 'customer_name', '2024-06-04', '8941100500002', 'revive 100gm', 40, 22, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 113, 2, '391205329581'),
('50', 'customer_name', '2024-06-04', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 114, 1, '249287432312'),
('50', 'customer_name', '2024-06-04', '22222', 'Deshi Shosha', 15, 10, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 115, 2, '314043799983'),
('50', 'customer_name', '2024-06-04', '8941161011042', 'Kazi Farms Kitchen', 6, 24, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 116, 2, '147148398786'),
('50', 'customer_name', '2024-07-08', '22222', 'Deshi Shosha', 15, 5, '2025-01-15', 20, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 117, 1, '706440721617'),
('50', 'customer_name', '2024-07-08', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 118, 1, '239588350023'),
('50', 'customer_name', '2024-07-08', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 119, 1, '239588350023'),
('50', 'customer_name', '2024-07-09', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 120, 1, '498030529775'),
('50', 'customer_name', '2024-07-29', '3010', 'rrrr', 150, 60, '2026-07-29', 180, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722255855/1722255855.webp', 121, 2, '975311168657'),
('50', 'customer_name', '2024-07-29', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 122, 1, '975311168657'),
('50', 'customer_name', '2024-07-29', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 123, 1, '975311168657'),
('50', 'customer_name', '2024-07-29', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 124, 1, '975311168657'),
('50', 'customer_name', '2024-07-29', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 125, 1, '975311168657'),
('50', 'customer_name', '2024-07-29', '3010', 'rrrr', 150, 90, '2026-07-29', 180, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722255855/1722255855.webp', 126, 3, '582488987081'),
('50', 'customer_name', '2024-07-29', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 127, 1, '582488987081'),
('50', 'customer_name', '2024-07-29', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 128, 1, '582488987081'),
('50', 'customer_name', '2024-07-29', '8941100500002', 'revive 100gm', 40, 11, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 129, 1, '582488987081'),
('50', 'customer_name', '2024-07-29', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 130, 1, '582488987081'),
('50', 'customer_name', '2024-07-29', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 131, 1, '632240742540'),
('50', 'customer_name', '2024-07-29', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 132, 1, '632240742540'),
('50', 'customer_name', '2024-07-31', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 133, 1, '898319844704'),
('50', 'customer_name', '2024-07-31', '22222', 'Deshi Shosha', 16, 10, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 134, 2, '186920241843'),
('50', 'customer_name', '2024-07-31', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 135, 1, '186920241843'),
('50', 'customer_name', '2024-07-31', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 136, 1, '186920241843'),
('50', 'customer_name', '2024-07-31', '8941100500002', 'revive 100gm', 40, 11, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 137, 1, '186920241843'),
('50', 'customer_name', '2024-07-31', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 138, 1, '186920241843'),
('50', 'customer_name', '2024-07-31', '1', 'Deshi Shosha 11111', 500, 300, '2026-07-31', 800, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 139, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '2', '5', 150, 10, '2026-07-31', 155, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 140, 2, '375997677761'),
('50', 'customer_name', '2024-07-31', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 141, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '100', 'murgi 1.5kg', 1250, 250, '2026-07-31', 1500, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417238/1722417238.webp', 142, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '3010', 'rrrr', 150, 30, '2026-07-29', 180, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722255855/1722255855.webp', 143, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 144, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '4587979779998', 'Narikel (Coconut)', 6, 18, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 145, 2, '375997677761'),
('50', 'customer_name', '2024-07-31', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 146, 1, '375997677761'),
('50', 'customer_name', '2024-07-31', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 4, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 147, 2, '375997677761'),
('50', 'customer_name', '2024-07-31', '8941100500002', 'revive 100gm', 40, 22, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 148, 2, '375997677761'),
('50', 'customer_name', '2024-07-31', '1', 'Deshi Shosha 11111', 500, 900, '2026-07-31', 800, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417256/1722417256.webp', 149, 3, '806594467996'),
('50', 'customer_name', '2024-07-31', '2', '5', 150, 5, '2026-07-31', 155, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417290/1722417290.webp', 150, 1, '806594467996'),
('50', 'customer_name', '2024-07-31', '3', 'Kazi Farms Kitchen', 100, 10, '2026-07-31', 110, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722417269/1722417269.webp', 151, 1, '806594467996'),
('50', 'customer_name', '2024-07-31', '3010', 'rrrr', 150, 30, '2026-07-29', 180, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1722255855/1722255855.webp', 152, 1, '806594467996'),
('50', 'customer_name', '2024-07-31', '22222', 'Deshi Shosha', 16, 10, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 153, 2, '806594467996'),
('50', 'customer_name', '2024-07-31', '4587979779998', 'Narikel (Coconut)', 6, 27, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 154, 3, '806594467996'),
('50', 'customer_name', '2024-07-31', '8941161011042', 'Kazi Farms Kitchen', 6, 12, '2026-01-15', 18, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091688/1703091688.webp', 155, 1, '806594467996'),
('50', 'customer_name', '2024-07-31', '6921734947994', 'EXAM ERASER DELI H099 20', 6, 2, '2026-05-07', 8, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705467711/1705467711.jpg', 156, 1, '806594467996'),
('50', 'customer_name', '2024-07-31', '8941100500002', 'revive 100gm', 40, 22, '2026-01-15', 51, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705336342/1705336342.jpg', 157, 2, '806594467996'),
('50', 'customer_name', '2024-07-31', '4587979779998', 'Narikel (Coconut)', 6, 9, '2026-01-14', 15, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1703091440/1703091440.webp', 158, 1, '785106021551'),
('50', 'customer_name', '2024-07-31', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 159, 1, '177092523053'),
('50', 'customer_name', '2024-07-31', '22222', 'Deshi Shosha', 16, 5, '2025-01-15', 21, '420', '9', 'MD. SAGOR ALI', '4523', 'Adorso Shop', '1705053555/1705053555.webp', 160, 1, '266036185069');

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
  `pieces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_info`
--

INSERT INTO `stock_info` (`Barcode`, `Product_name`, `Facility_Product_for_internet`, `Total_product`, `Purches_Price`, `Sales_Price`, `Product_add_user_id`, `Outlet_Id`, `Outlet_Name`, `Image`, `Catagory`, `Sub_Catagory`, `Sub_to_sub_catagory`, `Expire_date`, `Weight`, `Add_date`, `Update_Date`, `Descount_rate`, `Top_rating_range`, `id`, `pieces`) VALUES
('4587979779998', 'Narikel (Coconut)', 0, '10', 4, 8, '9', '4520', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', '', '2024-01-14', '2024-01-14', 0, 0, 19, '0'),
('4587979779998', 'Narikel (Coconut)', 0, '101', 6, 15, '9', '4523', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', ' ', '2024-01-14', '2024-07-29', 0, 0, 21, '200gm'),
('4587979779998', 'Narikel (Coconut)', 0, '10', 4, 8, '9', '4521', 'Adrosho', '1703091440/1703091440.webp', '1', '8', '0', '2026-01-14', '', '2024-01-14', '2024-01-14', 0, 0, 22, '250gm'),
('22222', 'Deshi Shosha', 0, '130', 16, 21, '9', '4523', 'Adrosho', '1705053555/1705053555.webp', '1', '6', '9', '2025-01-15', '± 1111 gm', '2024-01-15', '2024-07-29', 0, 0, 23, '250gm'),
('8941161011042', 'Kazi Farms Kitchen', 0, '15', 6, 18, '9', '4523', 'Adrosho', '1703091688/1703091688.webp', '1', '9', '0', '2026-01-15', ' ', '2024-01-15', '2024-07-29', 0, 0, 32, '200gm'),
('8941100500002', 'revive 100gm', 0, '8', 40, 51, '9', '4523', 'Adrosho', '1705336342/1705336342.jpg', '1', '6', '9', '2026-01-15', ' ', '2024-01-15', '2024-07-29', 0, 0, 33, '0'),
('6921734947994', 'EXAM ERASER DELI H099 20', 0, '7', 6, 8, '9', '4523', 'Adorso Library', '1705467711/1705467711.jpg', '1', '6', '10', '2026-05-07', ' ', '2024-02-01', '2024-07-09', 0, 0, 34, '200gm'),
('45879762730998', 'Pran Badam Bhaja', 0, '49', 20, 25, '9', '4523', 'Adorso Library', '1703092065/1703092065.webp', '1', '8', '0', '2026-02-02', '± 10 gm', '2024-02-02', '2024-07-30', 0, 0, 35, '0'),
('4587979799998', 'Banana Chompa (Ready To Eat)', 0, '9', 120, 130, '9', '4520', 'Adorso Library', '1703091288/1703091288.webp', '1', '8', '2', '2024-02-29', '± 44 gm', '2024-02-02', '2024-02-02', 0, 0, 36, '0'),
('45830979779998', 'Aarong Dairy Pure Ghee', 0, '0', 12, 15, '9', '4523', 'Adorso Library', '1703141040/1703141040.webp', '1', '8', '2', '2024-07-31', ' ', '2024-02-02', '2024-02-02', 0, 0, 37, '0'),
('45879797412', 'banana', 0, '10', 10, 15, '9', '4523', 'Adorso Library', '1705121906/1705121906.jpg', '1', '6', '9', '2026-02-02', '± 10 gm', '2024-02-02', '2024-07-29', 0, 0, 38, '0'),
('4587979079998', 'Wood Apple', 0, '0', 10, 12, '9', '4523', 'Adorso Library', '1703089135/1703089135.jpg', '1', '8', '1', '2026-02-02', '± 20 gm', '2024-02-02', '2024-02-02', 0, 0, 39, '0'),
('666', 'sampu', 0, '18', 133, 150, '9', '4523', 'Adorso Shop', '1722252840/1722252840.webp', '1', '7', '0', '2026-07-29', '± 500 gm', '2024-07-29', '2024-07-29', 10, 0, 40, '0'),
('3010', 'rrrr', 0, '3', 150, 180, '9', '4523', 'Adorso Shop', '1722255855/1722255855.webp', '1', '6', '9', '2026-07-29', ' ', '2024-07-29', '2024-07-29', 0, 0, 41, '0'),
('2', '5', 0, '47', 150, 155, '9', '4523', 'Adorso Shop', '1722417290/1722417290.webp', '1', '6', '9', '2026-07-31', ' ', '2024-07-31', '2024-07-31', 0, 0, 42, '0'),
('3', 'Kazi Farms Kitchen', 0, '48', 100, 110, '9', '4523', 'Adorso Shop', '1722417269/1722417269.webp', '1', '6', '9', '2026-07-31', ' ', '2024-07-31', '2024-07-31', 10, 0, 43, '0'),
('1', 'Deshi Shosha 11111', 0, '46', 500, 800, '9', '4523', 'Adorso Shop', '1722417256/1722417256.webp', '1', '6', '9', '2026-07-31', ' ', '2024-07-31', '2024-07-31', 0, 0, 44, '3'),
('100', 'murgi 1.5kg', 0, '59', 1250, 1500, '9', '4523', 'Adorso Shop', '1722417238/1722417238.webp', '1', '6', '9', '2026-07-31', ' ', '2024-07-31', '2024-07-31', 0, 0, 45, '3');

-- --------------------------------------------------------

--
-- Table structure for table `subcatgory_info`
--

CREATE TABLE `subcatgory_info` (
  `id` int(11) NOT NULL,
  `catagory_id` varchar(100) NOT NULL,
  `catagory_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Shop_cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcatgory_info`
--

INSERT INTO `subcatgory_info` (`id`, `catagory_id`, `catagory_name`, `date`, `Shop_cat_id`) VALUES
(6, '1', 'Handwash', '2023-12-13', '121'),
(7, '1', 'Tissue & Wipes', '2023-12-13', '121'),
(8, '1', 'Women\'s Care', '2023-12-13', '121'),
(9, '1', 'Men\'s Care', '2023-12-13', '121'),
(19, '21', 'boss', '2023-12-13', '121'),
(20, '21', 'ali', '2023-12-13', '121'),
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
(35, '1', 'o', '2024-01-04', '120'),
(36, '30', 'You', '2024-01-04', '120');

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
(14, '30', '36', 'Love', '2024-01-04', '120');

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
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `ShopID` varchar(10) NOT NULL,
  `Shop_cat_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Shopname`, `ShopAddress`, `email`, `password`, `StrafCount`, `AdminCat`, `Mobile`, `MobileVerifa`, `CreateDate`, `image`, `UpdateProfileCout`, `Name`, `AdminKey`, `last_seen`, `updated_at`, `ShopID`, `Shop_cat_id`) VALUES
(9, 'Adorso Shop', 'kamarapara', 'ferkey.net@gmail.com', '$2y$10$MUwk4g3w2REUSO8mXkkRz.dmgAU98SgWLLftxSAl64We2di4hf9Sm', 23, 'Admin', '01789658987', 'OK', '2023-11-24', '1701069398.jpg', '10', 'MD. SAGOR ALI', '420', '2024-07-31 03:55:58.000000', '2024-07-31 03:55:58.000000', '4523', '121'),
(34, 'najmul shop', 'kamarapara', 'nazmulhaque181915@gmail.com', '$2y$10$8yyPk86k.R3ty01I.PHCkuWW7Pa9AZQAAduAS2ebw5SHjzeoxuF92', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071158.jpg', '20', 'MD. NAZMUL HAQUE', '10', '2024-03-15 03:59:28.000000', '2024-03-15 03:59:28.000000', '4520', '120'),
(35, 'Adrosho', 'kamarapara', 'fahmida.roshny.15@gmail.com', '$2y$10$oDGr3IU8NhOfv5gsC7G9Nu934EhDcyAgEyCB5Zgx.4tvg06ntgPhy', 5, 'employee', '01789898777', 'OK', '2023-11-27', '1701071385.jpg', '20', 'FAHMIDA  AKTER', '9', '2023-12-31 03:59:48.055303', '2023-11-27 14:14:20.874903', '4523', '121'),
(36, 'Adrosho', 'kamarapara', 'asma@gmail.com', '$2y$10$q7RE91KROfbXpEZEtlavAeeIMAhPOT0.pkX/LEYFUoDq/qDjNk37.', 5, 'employee', '01789898777', 'OK', '2023-12-06', '1701875809.jpg', '20', 'MST ASMA', '9', '2024-03-15 04:02:19.000000', '2024-03-15 04:02:19.000000', '4523', '121');

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
-- AUTO_INCREMENT for table `catgory_info`
--
ALTER TABLE `catgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
-- AUTO_INCREMENT for table `product_info120`
--
ALTER TABLE `product_info120`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_info121`
--
ALTER TABLE `product_info121`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `profit_datails`
--
ALTER TABLE `profit_datails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `purches_list`
--
ALTER TABLE `purches_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `stock_info`
--
ALTER TABLE `stock_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subcatgory_info`
--
ALTER TABLE `subcatgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_sub_catgory_info`
--
ALTER TABLE `sub_sub_catgory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
