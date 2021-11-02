-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2021 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kaopiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` int(1) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `slug`, `show_menu`, `desc`, `created_at`, `updated_at`, `created_by`) VALUES
(22, 'Hoodie', '', 0, '', NULL, '2020-10-15 19:57:44', -1),
(26, 'Sản phẩm mới', '', 0, '', '2020-10-15 19:56:04', '2020-10-15 19:57:54', -1),
(28, 'Đỗ Thành Trung 123123123', NULL, 1, 'sdfsdf', '2021-02-23 20:58:09', '2021-02-23 20:58:09', -1),
(30, 'trung111', '1', 1, '1', NULL, NULL, -1),
(33, 'CẮT TÓC NAM', NULL, NULL, 'cắt tóc', '2021-06-08 09:03:22', '2021-06-08 09:03:22', -1),
(34, 'CẮT TÓC NỮ', NULL, 1, 'ádasd', '2021-06-14 01:05:09', '2021-06-14 01:05:09', -1),
(35, 'CẮT TÓC Nhau', NULL, 1, 'ádadadasd', '2021-06-14 01:05:25', '2021-06-14 01:05:25', -1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(5, 'tieu cuong', '089987789', 'cuongtieu@gmail.com', '15 dong quan', 42410, 2, NULL, NULL),
(6, 'trần hữu thiện', '0987654321', 'thiendepzai@gmail.com', 'hàm nghi, nam từ liêm, hà nội', 177063, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice_detail`
--

INSERT INTO `invoice_detail` (`invoice_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(5, 96, 1, 39837, NULL, NULL),
(5, 97, 1, 2573, NULL, NULL),
(6, 89, 2, 68613, NULL, NULL),
(6, 96, 1, 39837, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_070735_create_categories_table', 2),
(5, '2019_01_05_072544_alter_table_categories_update_column', 3),
(6, '2019_01_05_074643_create_products_table', 3),
(7, '2019_01_05_075227_create_invoices_table', 4),
(8, '2019_01_05_075449_create_invoice_detail_table', 4),
(9, '2019_01_12_014833_alter_table_products_add_views_column', 5),
(10, '2019_01_12_021523_create_table_product_galleries', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL DEFAULT 0,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `short_desc`, `detail`, `star`, `created_at`, `updated_at`, `views`) VALUES
(346, 'Đỗ Thành Trung 123541', 'public/uploads/5f8ff26f651f8-DMMSPY.780962.MOCKUP.png', 26, 4324, '', '', 0.00, '2020-10-21 03:33:51', '2020-10-21 03:33:51', 1),
(348, 'Nguyễn Viết Đạt 0000', 'public/uploads/5f92291a1aa74-underestimate me1.jpg', 22, 21, 'trung', 'trung', 1.00, '2020-10-22 18:51:38', '2020-10-22 18:51:38', 13123),
(355, '', NULL, 22, 123, NULL, NULL, 0.00, '2021-06-13 04:23:34', '2021-06-13 04:23:34', 1),
(357, 'sản phẩm demo', NULL, 22, 123, NULL, NULL, 0.00, '2021-06-13 04:32:49', '2021-06-13 04:32:49', 1),
(364, 'sản phẩm 1', 'public/uploads/60c61965569dc-Array', 22, 10000, 'đây là mô tả ngắn', 'đây là ảnh 1 với rất nhaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaiều nội dunabdskjahduoahdjaljdnạdnkjandkjandjkađá', 5.00, '2021-06-13 09:42:45', '2021-06-13 09:42:45', 1),
(367, 'sản phẩm ko phải hoodie', 'public/uploads/60c62779176bf-148836870_5372832986090023_2918758491473170027_n.jpg', 28, 0, '', '', 0.00, '2021-06-13 10:32:33', '2021-06-13 10:42:49', 1),
(368, 'qưeqeqeqưeq ểtrtểtrtet', 'public/uploads/60c6f044381f7-148836870_5372832986090023_2918758491473170027_n.jpg', 30, 0, '', '', 0.00, '2021-06-13 10:40:58', '2021-06-14 00:59:32', 1),
(369, 'Cắt đi', 'public/uploads/60c6f1d1e882c-abc.jpg', 35, 999, 'đây là mô tả ngắn', 'đây là detail', 5.00, '2021-06-14 01:06:09', '2021-06-14 01:06:09', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(173, 45, 'https://lorempixel.com/640/480/cats/?98096', NULL, NULL),
(174, 45, 'https://lorempixel.com/640/480/cats/?99658', NULL, NULL),
(175, 45, 'https://lorempixel.com/640/480/cats/?28580', NULL, NULL),
(176, 46, 'https://lorempixel.com/640/480/cats/?41240', NULL, NULL),
(177, 46, 'https://lorempixel.com/640/480/cats/?26337', NULL, NULL),
(178, 46, 'https://lorempixel.com/640/480/cats/?93630', NULL, NULL),
(179, 46, 'https://lorempixel.com/640/480/cats/?84024', NULL, NULL),
(180, 47, 'https://lorempixel.com/640/480/cats/?99428', NULL, NULL),
(402, 369, 'public/uploads/60c6f8e1b645b-3.jpg', '2021-06-14 01:36:17', '2021-06-14 01:36:17'),
(403, 369, 'public/uploads/60c6f8fe72cb9-3.jpg', '2021-06-14 01:36:46', '2021-06-14 01:36:46'),
(404, 369, 'public/uploads/60c6f906423bb-148836870_5372832986090023_2918758491473170027_n.jpg', '2021-06-14 01:36:54', '2021-06-14 01:36:54'),
(405, 369, 'public/uploads/60c6f93617dda-ád.jpg', '2021-06-14 01:37:42', '2021-06-14 01:37:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trung696', '', 'trung696@gmail.com', NULL, 200, '$2y$10$4c3pQ7yn3g365/e3TI0zQOEZckwV0dq4nd.Y7b.dC63wXWIPMjXMG', 'itISWu9O0Y0DxIiYU7t9W4ARsgpkrqrJ2FTGtDEVPMZuW9ChLciMtohAHNXQ', NULL, NULL),
(2, 'chungcc', '', 'moderator@gmail.com', NULL, 700, '$2y$10$nqckGqzjiEP7BP59WM5oJO6R16EanVVG561vJqxOb6X8WiMo4PJ7K', 'pASVtJ9LtlAX6f6uFgRL9AEgI3p7KkiqVv6eWJekpRKMlULsUkAgG93E1zuQ', NULL, NULL),
(3, 'member', '', 'member@gmail.com', NULL, 1, '$2y$10$uy21.IAUibmlW1l68bVqxOoNiIrqECbTkdXufUqihT8LMNoe3GIqa', NULL, NULL, NULL),
(6, 'thienth', 'public/images/5d8dc5aebcd06-8ad2f5971cd04cbe2bd5d3849aa7c005.jpeg', 'thienth32@gmail.com', NULL, 0, '$2y$10$QivAI.SR1VuNX0cGuvApoe2GPwKizSP1QNu2cX33AFsDHIGSd.R0G', NULL, NULL, NULL),
(10, 'Đỗ Thành Trung', 'public/uploads/avatar/60419e4950cc9-me-thien-nhien-da-day-chung-ta-bai-hoc-gi-1-1109.jpg', 'dothanhtrung207@gmail.com', NULL, 1, '123541', '', NULL, NULL),
(11, 'Đỗ Thành Trung 32423423423', 'public/uploads/avatar/6041a45b99ff3-DMMSPY.695753.MOCKUP.png', 'dothanhtrungngt@gmail.com', NULL, 2, '123541', '', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`cate_name`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`invoice_id`,`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
