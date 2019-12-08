-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 05:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suba`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brandName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brandName`, `brandDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 'Made by America<br>', 1, '2019-11-04 10:15:18', '2019-11-04 10:15:18'),
(2, 'samsung', 'sdfdsf sdfdsf<br>', 1, '2019-11-05 09:56:22', '2019-11-05 09:56:22'),
(3, 'Arong', 'sdfsdf', 1, '2019-11-06 10:10:15', '2019-11-06 10:10:15'),
(4, 'sdfsdf', 'sdfdsf', 1, '2019-11-30 06:57:41', '2019-11-30 06:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rootCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `publicationStatus`, `created_at`, `updated_at`, `rootCategoryId`) VALUES
(1, 'Traditional Clothing', 'Traditional Clothing', 1, '2019-12-02 07:29:33', '2019-12-02 07:29:33', 5),
(2, 'Saree', 'Saree', 1, '2019-12-02 07:29:58', '2019-12-02 07:29:58', 5),
(3, 'Shalwar Kameez', 'Shalwar Kameez', 1, '2019-12-02 07:30:14', '2019-12-02 07:30:14', 5),
(4, 'Unstitched Fabric', 'Unstitched Fabric', 1, '2019-12-02 07:30:52', '2019-12-02 07:30:52', 5),
(5, 'Wedding Wear', 'Wedding Wear', 1, '2019-12-02 07:31:06', '2019-12-02 07:31:06', 5),
(6, 'Kurtis', 'Kurtis', 1, '2019-12-02 07:31:23', '2019-12-02 07:31:23', 5),
(7, 'Clothing', 'Clothing', 1, '2019-12-02 07:31:38', '2019-12-02 07:31:38', 5),
(8, 'Womens Bags', 'Women\'s Bags', 1, '2019-12-02 07:32:58', '2019-12-02 07:32:58', 5),
(9, 'Shoes', 'Shoes', 1, '2019-12-02 07:33:15', '2019-12-02 07:33:15', 5),
(10, 'Lingerie', 'Lingerie', 1, '2019-12-02 07:33:43', '2019-12-02 07:33:43', 5),
(11, 'Lounge', 'Lounge', 1, '2019-12-02 07:44:20', '2019-12-02 07:44:20', 5),
(12, 'Travel & amp', 'Travel &amp; amp', 1, '2019-12-02 07:45:17', '2019-12-02 07:45:17', 5),
(13, 'Luggage', 'Luggage', 1, '2019-12-02 07:45:32', '2019-12-02 07:45:32', 5),
(14, 'Watches & Accessories', 'Watches &amp; Accessories', 1, '2019-12-02 07:45:51', '2019-12-02 07:45:51', 5),
(15, 'Mobiles', 'Mobiles', 1, '2019-12-02 08:36:30', '2019-12-02 08:36:30', 3),
(16, 'Tablets', 'Tablets', 1, '2019-12-02 08:36:47', '2019-12-02 08:36:47', 3),
(17, 'Laptops', 'Laptops', 1, '2019-12-02 08:37:04', '2019-12-02 08:37:04', 3),
(18, 'Desktops', 'Desktops', 1, '2019-12-02 08:37:20', '2019-12-02 08:37:20', 3),
(19, 'Gaming Consoles', 'Gaming Consoles', 1, '2019-12-02 08:37:37', '2019-12-02 08:37:37', 3),
(20, 'DSLR', 'DSLR Camera<br>', 1, '2019-12-02 08:38:38', '2019-12-02 08:38:38', 4),
(21, 'Camera Lenses', 'Camera Lenses', 1, '2019-12-02 08:38:51', '2019-12-02 08:38:51', 4),
(22, 'Security Cameras', 'Security Cameras', 1, '2019-12-02 08:39:25', '2019-12-02 08:39:25', 4),
(23, 'Mobile Accessories', 'Mobile Accessories', 1, '2019-12-02 08:39:38', '2019-12-02 08:39:38', 4),
(24, 'Audio', 'Audio', 1, '2019-12-02 08:39:51', '2019-12-02 08:39:51', 4),
(25, 'Wearable', 'Wearable', 1, '2019-12-02 08:40:05', '2019-12-02 08:40:05', 4),
(26, 'Console Accessories', 'Console Accessories', 1, '2019-12-02 08:40:18', '2019-12-02 08:40:18', 1),
(27, 'Camera Accessories', 'Camera Accessories', 1, '2019-12-02 08:40:30', '2019-12-02 08:40:30', 1),
(28, 'Computer Accessories', 'Computer Accessories', 1, '2019-12-02 08:40:44', '2019-12-02 08:40:44', 1),
(29, 'Storage', 'Storage', 1, '2019-12-02 08:40:57', '2019-12-02 08:40:57', 1),
(30, 'Computer Components', 'Computer Components', 1, '2019-12-02 08:41:41', '2019-12-02 08:41:41', 1),
(31, 'Network Components', 'Network Components', 1, '2019-12-02 08:41:58', '2019-12-02 08:41:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `mobile_number`, `mailing_address`, `email_address`, `email_address_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'GOLAM', 'MOHIUDDIN', '01790675532', 'kdfjkldfsg sdkjfdsklg kdsljgklfdsg sdkjf jksdfljf skdjfsd fjksdsdkjfhdsf jksdfhdsjkf sdjfhds f', 'rasel.jbg@gmail.com', NULL, '$2y$10$TbQmkoRSZhs/LdUkOKVBk.FMWHQD1vgPkhzKocgZ6kIWnSl99DYCq', '2019-11-16 11:17:58', '2019-11-16 11:17:58'),
(2, 'AKRAMUL', 'HOQUE', '01684846200', 'Doina, Adrasho Balika School Road, kajla, Jatrabar, Dhaka, Bangladesh', 'akramul.jbg@gmail.com', NULL, '$2y$10$NAxnbytSa1Lh4Em9V4s93eLGvqbf/hANvOX/DrBiejcKRt3UC1j0C', '2019-11-17 11:37:53', '2019-11-17 11:37:53'),
(3, 'SAIFUL', 'HASAN', '01732871354', 'union bank lit, gulshan avenue gulshan dhaka bangladesh sdkfjsldfj sdfjksdf sdkfjsdklf', 'iuc.shihab@gmail.com', NULL, '$2y$10$0jVaLIBmPwk8URi45aAV.eVFLy9CRGEskKfXWZdeAZMnY9U6HhpES', '2019-11-30 03:01:59', '2019-11-30 03:01:59');

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
(4, '2019_10_14_100023_create_categories_table', 1),
(5, '2019_10_27_081330_create_brands_table', 1),
(6, '2019_10_31_093240_create_products_table', 1),
(7, '2019_11_11_053130_create_customers_table', 2),
(8, '2019_11_11_134613_create_shippings_table', 3),
(9, '2019_11_15_181548_create_payments_table', 4),
(10, '2019_11_15_181757_create_orders_table', 4),
(11, '2019_11_15_181843_create_order_details_table', 5),
(12, '2019_11_30_044548_create_sliders_table', 6),
(13, '2019_11_30_111606_create_root_categories_table', 7),
(14, '2019_11_30_122318_create_roots_table', 8),
(15, '2019_12_01_063958_add_root_category_id_to_categories', 9),
(16, '2019_12_01_064651_add_root_category_id_to_categories_table', 10),
(17, '2019_12_01_065208_add_root_category_id_to_categories_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total_order` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `total_order`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 800.00, 'Pending', '2019-11-16 00:54:17', '2019-11-16 00:54:17'),
(2, 3, 3, 100000.00, 'Pending', '2019-11-30 03:03:16', '2019-11-30 03:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Samsung', 800.00, 2, '2019-11-16 00:54:18', '2019-11-16 00:54:18'),
(2, 2, 5, 'ThinkPad', 100000.00, 1, '2019-11-30 03:03:16', '2019-11-30 03:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2019-11-16 00:54:18', '2019-11-16 00:54:18'),
(2, 2, 'Cash', 'Pending', '2019-11-30 03:03:16', '2019-11-30 03:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'Samsung', 800.00, 4, 'sdfsdfdf sdfdsf', '<p>sdafsdaf sdkjfhsdjf sdjfhdsjkf</p>', 'product-images/Jellyfish.jpg', 1, '2019-11-05 09:57:05', '2019-11-10 01:34:20'),
(3, 2, 2, 'Samsung', 500.00, 1, 'fsdgfd fgdfg', '<p>dfgdfg sdfgdfg dfgdfg</p>', 'product-images/Samsung.jpg', 0, '2019-11-06 10:06:16', '2019-11-30 00:37:05'),
(5, 1, 1, 'ThinkPad', 100000.00, 2, 'ngfv', '<p>fdfgd fd</p>', 'product-images/Laptop.jpg', 1, '2019-11-06 11:46:40', '2019-11-06 11:46:40'),
(6, 3, 3, 'Saree', 5000.00, 2, 'sdfsdf', '<p>sdfksdjf dskfjklsdf sdklfjskldf sdklfjdsklf sdkfjsdkf</p>', 'product-images/Saree.jpg', 1, '2019-11-09 23:29:42', '2019-11-29 22:20:45'),
(7, 3, 3, 'ksdjfklsdf', 200.00, 1, 'sdfdf', '<p>ghjghjhkjhjk</p>', 'product-images/ksdjfklsdf.jpg', 1, '2019-11-29 23:07:10', '2019-11-29 23:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `roots`
--

CREATE TABLE `roots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rootCategoryName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rootCategoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roots`
--

INSERT INTO `roots` (`id`, `rootCategoryName`, `rootCategoryDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Electronic Device & Accessories', 'Mobile, Laptop, Desktop, Camera, Headphone', 1, '2019-12-01 18:00:00', '2019-12-01 18:00:00'),
(3, 'Home Appliance', 'Televisions, Home Audio, TV Accessories &amp; Video Device, Large Appliances, Small Kitchen Appliances, Cooling &amp; Heating, Vacuums &amp; Floor Care, Ironing &amp; Sewing Machine, Water Purifiers &amp; Filters', 1, '2019-11-30 22:18:00', '2019-12-01 03:04:27'),
(4, 'Babies & Toys', 'Mother &amp; Baby, Feeding, Diapering &amp; Potty, Baby Gear, Baby Personal Care , Clothing &amp; Accessories, Nursery, Toys &amp; Games, Baby &amp; Toddler Toys, Remote Control &amp; Vehicles, Sports &amp; Outdoor Play, Traditional Games', 1, '2019-11-30 22:28:13', '2019-11-30 22:28:13'),
(5, 'Women\'s Fashion', 'Traditional Clothing , Saree, Shalwar Kameez, Unstitched Fabric, Wedding Wear, Kurtis, Clothing, Women\'s Bags, Shoes, Accessories, Lingerie, Sleep &amp; Lounge, Travel &amp, Luggage, Watches & Accessories', 1, '2019-11-30 22:31:54', '2019-11-30 22:31:54'),
(7, 'Men\'s Fashion', 'Jackets &amp;amp; Coats, Hoodies &amp;amp; Sweatshirts, Sweaters, T-Shirts, Shirts, Polo Shirts, Jeans, Pant, Men\'s Bags, Shoes,Accessories, Clothing, Watches &amp;amp; Accessories', 1, '2019-11-30 23:19:05', '2019-11-30 23:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `mobile_number`, `shipping_address`, `email_address`, `created_at`, `updated_at`) VALUES
(1, 'GOLAM MOHIUDDIN', '01790675532', 'sdjfsdkf sdkfjsdkf sdjkfhsdjkf sdjfhsdjkf sdkjfhsdjkf', 'rasel.jbg@gmail.com', '2019-11-15 10:21:13', '2019-11-15 10:21:13'),
(2, 'GOLAM MOHIUDDIN', '01790675532', 'ksldfjds fdsfjkdsf sdfkjsdf sdfjskdfj sdkfjdskf sdkfjsdkf sdkfjsdkf ksdjfsdf', 'rasel.jbg@gmail.com', '2019-11-16 00:35:32', '2019-11-16 00:35:32'),
(3, 'SAIFUL HASAN', '01732871354', 'union bank lit, gulshan avenue gulshan dhaka bangladesh sdkfjsldfj sdfjksdf sdkfjsdklf', 'iuc.shihab@gmail.com', '2019-11-30 03:02:54', '2019-11-30 03:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_name`, `slider_image`, `short_description`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'TOY', 'slider-images/TOY.png', 'sdfsdf', 1, '2019-11-30 02:48:23', '2019-11-30 02:48:23'),
(2, 'GHGFH', 'slider-images/GHGFH.png', 'fghgfh', 0, '2019-11-30 02:48:38', '2019-11-30 02:57:43'),
(3, 'FGHGFH', 'slider-images/FGHGFH.png', 'fghgfh', 1, '2019-11-30 02:48:45', '2019-11-30 02:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Golam Mohiuddin', 'rasel.jbg@gmail.com', NULL, '$2y$10$J/7qxfEA9XbGFbtRZ745G.rlJ5HJpf4xDxbi6w3OlrARm5rCtOW4m', NULL, '2019-11-04 09:46:21', '2019-11-04 09:46:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_address_unique` (`email_address`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roots`
--
ALTER TABLE `roots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roots`
--
ALTER TABLE `roots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
