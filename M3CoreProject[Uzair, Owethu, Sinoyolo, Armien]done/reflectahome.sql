-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 07, 2025 at 02:07 PM
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
-- Database: `reflectahome`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status` enum('processing','shipped','delivered') NOT NULL DEFAULT 'processing',
  `courier` varchar(100) NOT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `status`, `courier`, `tracking_number`, `created_at`, `updated_at`) VALUES
(6, 10, 'ORD1741344193307', 'processing', '', '', '2025-03-07 10:57:03', '2025-03-07 10:57:03'),
(7, 10, 'ORD1741344193307', 'processing', '', '', '2025-03-07 11:08:22', '2025-03-07 11:08:22'),
(8, 10, 'ORD1741345014756', 'processing', '', '', '2025-03-07 11:08:25', '2025-03-07 11:08:25'),
(9, 11, 'ORD1741345809278', 'processing', '', '', '2025-03-07 11:10:12', '2025-03-07 11:10:12'),
(10, 1, 'ORD1741345809278', 'processing', '', '', '2025-03-07 11:11:24', '2025-03-07 11:11:24'),
(11, 1, 'ORD1741345809278', 'processing', '', '', '2025-03-07 11:15:05', '2025-03-07 11:15:05'),
(12, 1, 'ORD1741345809278', 'processing', '', '', '2025-03-07 11:15:59', '2025-03-07 11:15:59'),
(13, 7, 'ORD1741348060781', 'processing', '', '', '2025-03-07 11:51:45', '2025-03-07 11:51:45'),
(14, 7, 'ORD1741348060781', 'processing', '', '', '2025-03-07 12:03:37', '2025-03-07 12:03:37'),
(15, 5, 'ORD1741349059108', 'processing', '', '', '2025-03-07 12:04:21', '2025-03-07 12:04:21'),
(16, 5, 'ORD1741349059108', 'processing', '', '', '2025-03-07 12:34:19', '2025-03-07 12:34:19'),
(17, 5, 'ORD1741349059108', 'processing', '', '', '2025-03-07 12:51:16', '2025-03-07 12:51:16'),
(18, 5, 'ORD1741350857971', 'processing', '', '', '2025-03-07 12:51:22', '2025-03-07 12:51:22'),
(19, 5, 'ORD1741352091046', 'processing', '', '', '2025-03-07 12:54:54', '2025-03-07 12:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` enum('round','square','customized') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stock_quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `image`, `created_at`, `updated_at`, `stock_quantity`) VALUES
(1, 'Elegant Round Mirror', 'A sleek and stylish round mirror perfect for modern spaces.', 900.00, 'round', 'round-bathroom.webp', '2025-03-05 14:28:23', '2025-03-05 16:41:47', 3),
(3, 'Custom Frame Mirror', 'Personalize your mirror with a custom frame designed to match your space.', 500.00, 'customized', 'c-led-wall.jpg', '2025-03-05 14:28:23', '2025-03-05 16:42:03', 5),
(4, 'Elegant Round Mirror', 'A sleek and stylish round mirror perfect for modern spaces.', 900.00, 'round', 'round-dining.webp', '2025-03-05 14:28:23', '2025-03-05 16:42:16', 6),
(5, 'Modern Square Mirror', 'A bold and minimalist square mirror for contemporary interiors.', 520.00, 'square', 'square-4.jpg', '2025-03-05 14:28:23', '2025-03-05 16:42:28', 7),
(6, 'Custom Frame Mirror', 'Personalize your mirror with a custom frame designed to match your space.', 500.00, 'customized', 'half-moon.jpg', '2025-03-05 14:28:23', '2025-03-05 16:42:44', 5),
(7, 'Elegant Round Mirror', 'A sleek and stylish round mirror perfect for modern spaces.', 900.00, 'round', 'round-beatrice.jpg', '2025-03-05 14:28:23', '2025-03-05 16:42:55', 2),
(8, 'Modern Square Mirror', 'A bold and minimalist square mirror for contemporary interiors.', 500.00, 'square', 'square-3.webp', '2025-03-05 14:28:23', '2025-03-05 16:43:06', 7),
(13, 'Elegant Round Mirror', 'a perfect round mirror for your beautiful home', 900.00, 'round', 'round-bathroom.webp', '2025-03-05 15:07:29', '2025-03-05 16:43:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `status` enum('active','inactive') DEFAULT 'active',
  `last_activity` datetime DEFAULT NULL,
  `total_orders` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `address`, `role`, `status`, `last_activity`, `total_orders`, `created_at`, `updated_at`) VALUES
(1, 'Uzair Meyer', 'uzair_meyer', 'uzair.meyer@gmail.com', '$2y$10$ZvZs7los55Bzswkr5U4QVuU/adzeyDzCcmd.3UcQpzaivBHkuAAkW', '333 Benny Street, Cape Town', 'user', 'active', '2025-03-04 12:51:47', 0, '2025-03-04 12:51:47', '2025-03-05 13:59:58'),
(2, 'Jane Smith', 'jane_smith', 'jane.smith@example.com', '$2y$10$2KsoDFNTPMk66J/zWKlw2e1Z1sndBU88gYkw81cfMdaGq4E8eHQom', '58 Stewart Street, Goodwood, Cape Town', 'user', 'active', '2025-03-04 12:51:47', 0, '2025-03-04 12:51:47', '2025-03-05 11:02:36'),
(3, 'Michael Johnson', 'michael_johnson', 'michael.johnson@example.com', '$2y$10$p/TVxftJ.PJcKCq75L8hBuYr1dwCcMv4.DhSGSSAN6GrZn1FkVryq', '10 Sandy Road, Ottery, Cape Town', 'user', 'active', '2025-03-04 12:51:47', 0, '2025-03-04 12:51:47', '2025-03-05 11:02:36'),
(4, 'Emily Brown', 'emily_brown', 'emily.brown@example.com', '$2y$10$3VJvgt8j.Ie3TGtGPW9dTu6djB8j.kCDNVtIB00d/z6WkNNVY/fSC', '47 Church Street, Lansdowne, Cape Town', 'user', 'active', '2025-03-04 12:51:47', 0, '2025-03-04 12:51:47', '2025-03-05 11:02:36'),
(5, 'David Wilson', 'david_wilson', 'david.wilson@example.com', '$2y$10$PZ6j3n.qc2qLw5qR1xRcpe5kmJ3ynKrV7uwOOkLNKa3Eu82cnGLYK', '57 Civic Road, Grassy Park, Cape Town', 'user', 'active', '2025-03-04 12:51:47', 0, '2025-03-04 12:51:47', '2025-03-05 11:02:36'),
(7, 'Owethu Sityata', 'owethu_sityata', 'owethu.sityata@gmail.com', '$2y$10$Mm/yzhHdRutUiAiTUz2pneVMaERX/870QfzQxDl2nwdmqGYrLy1DO', '78 Gugulethu, Cape Town, South Africa', 'admin', 'active', '2025-03-04 12:51:48', 0, '2025-03-04 12:51:48', '2025-03-05 13:52:19'),
(10, 'Mathew Brown', 'Mathew', 'mathew.brown@user.com', '$2y$10$6sQSZ4e83W/.ym9FfbztuOX3ce8cfwDelWEf52Gxb7djsPeQBMSny', 'na', 'user', 'active', NULL, 0, '2025-03-04 16:34:28', '2025-03-04 16:34:28'),
(11, 'Armien kill', 'A@gmail.com', 'a@gmail.com', '$2y$10$8UNgOia1jXBd1PbhW24Nqus8jlkBwVkoXccxNl.3RretVl7MIi5Zm', '26 cape town', 'user', 'active', NULL, 0, '2025-03-05 13:51:14', '2025-03-06 11:05:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
