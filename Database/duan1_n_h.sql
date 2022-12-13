-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_n_h`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `username` varchar(50) NOT NULL COMMENT 'Tên đăng nhập',
  `name` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `password` varchar(50) NOT NULL COMMENT 'Mật khẩu đăng nhập',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `tell` varchar(50) DEFAULT NULL COMMENT 'Sđt khách hàng',
  `role` tinyint(2) NOT NULL DEFAULT 0 COMMENT 'Vai trò'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `account_admin`
--

CREATE TABLE `account_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `role` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_admin`
--

INSERT INTO `account_admin` (`id`, `email`, `username`, `password`, `img`, `role`, `facebook`, `instagram`) VALUES
(1, 'hoandps23837@fpt.edu.vn', 'Duy Hòa', 12345, 'Upload2022120484121.Array', 'QUẢN LÝ', 'https://www.facebook.com/duyhoa102201?mibextid=LQQJ4d', 'https://www.instagram.com/duyhoa_17/'),
(2, 'nguyendcpc04554@fpt.edu.vn', 'Chí Nguyện', 123456, 'HINH34.jpg', 'QUẢN LÝ', 'https://www.facebook.com/profile.php?id=100064938350701', 'https://www.instagram.com/_nguyen_1210/');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL COMMENT 'Mã hóa đơn',
  `user_id` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `name` varchar(255) NOT NULL COMMENT 'Tên khách hàng',
  `address` varchar(255) NOT NULL COMMENT 'Địa chỉ khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `tell` varchar(20) NOT NULL COMMENT 'Sdt khách hàng',
  `pay` tinyint(3) NOT NULL COMMENT 'Phương thức thanh toán: 1- TT khi nhận hàng, 2- TT qua VnPay, 3- TT chuyển khoản',
  `day` date DEFAULT NULL COMMENT 'Ngày đặt hàng',
  `total` int(10) NOT NULL COMMENT 'Tổng đơn hàng(tiền)',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Trạng thái đơn hàng: 0- đơn hàng mới, 1- Đang xử lí, 2- Đang giao hàng, 4- Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `view` int(10) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(5) NOT NULL,
  `expire` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'nguyendcpc04554@fpt.edu.vn', 83879, 1668827067),
(2, 'nguyendcpc04554@fpt.edu.vn', 86645, 1668827427),
(3, 'nguyendcpc04554@fpt.edu.vn', 37189, 1668827495),
(4, 'nguyendcpc04554@fpt.edu.vn', 45491, 1668827715),
(5, 'nguyendcpc04554@fpt.edu.vn', 97390, 1668828052),
(6, 'nguyendcpc04554@fpt.edu.vn', 90163, 1668828080),
(7, 'nguyendcpc04554@fpt.edu.vn', 70975, 1668828173),
(8, 'nguyendcpc04554@fpt.edu.vn', 94597, 1669001696),
(9, 'nguyendcpc04554@fpt.edu.vn', 25967, 1669107598);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL COMMENT 'Mã bình luận',
  `comment` text NOT NULL COMMENT 'Nội dung bình luận',
  `id_product` int(11) NOT NULL COMMENT 'Mã hàng hóa',
  `id_user` int(11) NOT NULL COMMENT 'Mã khách hàng( tài khoản)',
  `day` date NOT NULL COMMENT 'Ngày bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Mã hàng hóa',
  `id_type` int(11) NOT NULL COMMENT 'Mã loại hàng hóa',
  `name` varchar(255) NOT NULL COMMENT 'Tên hàng hóa',
  `price` double(10,2) NOT NULL COMMENT 'Giá hàng hóa',
  `img` varchar(255) DEFAULT NULL COMMENT 'Ảnh hàng hóa',
  `description` text DEFAULT NULL COMMENT 'Mô tả hàng hóa',
  `view` int(10) DEFAULT NULL COMMENT 'Lượt xem',
  `discount` int(10) NOT NULL COMMENT 'Giảm giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL COMMENT 'Mã loại hàng',
  `name` varchar(255) NOT NULL COMMENT 'Tên loại hàng',
  `status` tinyint(2) NOT NULL COMMENT 'trạng thái loại hàng: 0- bât, 1- tắt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_admin`
--
ALTER TABLE `account_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idu` (`user_id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idddd` (`id_product`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_product`),
  ADD KEY `idu` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `account_admin`
--
ALTER TABLE `account_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hàng hóa', AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
