-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2022 lúc 02:48 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_n_h`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
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
-- Cấu trúc bảng cho bảng `bills`
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
  `number` int(10) NOT NULL COMMENT 'Số lượng đơn hàng',
  `total` int(10) NOT NULL COMMENT 'Tổng đơn hàng(tiền)',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Trạng thái đơn hàng: 0- đơn hàng mới, 1- Đang xử lí, 2- Đang giao hàng, 4- Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL COMMENT 'Mã giỏ hàng',
  `product_id` int(11) NOT NULL COMMENT 'Mã hàng hóa',
  `user_id` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `bill_id` int(11) NOT NULL COMMENT 'Mã hóa đơn',
  `name` varchar(255) NOT NULL COMMENT 'Tên hàng hóa',
  `price` double(10,2) NOT NULL COMMENT 'Giá hàng hóa',
  `img` varchar(255) DEFAULT NULL COMMENT 'Ảnh hàng hóa',
  `number` int(3) NOT NULL COMMENT 'Số lượng hàng hóa',
  `total_money` int(10) NOT NULL COMMENT 'Tổng tiền hàng hóa',
  `discount` int(10) NOT NULL COMMENT 'Giảm giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL COMMENT 'Mã bình luận',
  `comment` text NOT NULL COMMENT 'Nội dung bình luận',
  `product_id` int(11) NOT NULL COMMENT 'Mã hàng hóa',
  `user_id` int(11) NOT NULL COMMENT 'Mã khách hàng( tài khoản)',
  `day` date NOT NULL COMMENT 'Ngày bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Mã hàng hóa',
  `id_type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên hàng hóa',
  `price` double(10,2) NOT NULL COMMENT 'Giá hàng hóa',
  `img` varchar(255) DEFAULT NULL COMMENT 'Ảnh hàng hóa',
  `description` text DEFAULT NULL COMMENT 'Mô tả hàng hóa',
  `view` int(10) DEFAULT NULL COMMENT 'Lượt xem',
  `discount` int(10) NOT NULL COMMENT 'Giảm giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL COMMENT 'Mã loại hàng',
  `name` varchar(255) NOT NULL COMMENT 'Tên loại hàng',
  `status` tinyint(2) NOT NULL COMMENT 'trạng thái loại hàng: 0- bât, 1- tắt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idu` (`user_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`product_id`),
  ADD KEY `idu` (`user_id`),
  ADD KEY `idb` (`bill_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`product_id`),
  ADD KEY `idu` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_type`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng';

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn';

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã giỏ hàng';

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận';

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hàng hóa';

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng';

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
