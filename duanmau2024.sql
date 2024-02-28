-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 09:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp\r\n2. Chuyển khoản\r\n3. Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(19, 'PhungDucThanh', 'số 1 đường ABC', '0123456789', 'thanhpdph18767@fpt.edu.vn', 1, '11:39:20pm 27/02/2024', 45530000, 0, NULL, NULL, NULL),
(21, 'thanh123', '123abc', '0123456789', 'thanh@gmail.com', 1, '07:00:15am 28/02/2024', 46280000, 0, NULL, NULL, NULL),
(22, 'PhungDucThanh', 'số 1 đường ABC', '0123456789', 'thanhpdph18767@fpt.edu.vn', 1, '09:21:36pm 28/02/2024', 12990000, 0, NULL, NULL, NULL),
(23, 'PhungDucThanh', 'số 1 đường ABC', '0123456789', 'thanhpdph18767@fpt.edu.vn', 1, '09:26:08pm 28/02/2024', 15240000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'iPhone 15 là một chiếc điện thoại đáng mua trong tầm giá 20 triệu đồng. Sẽ không sai khi nói rằng đây là chiếc iPhone tiêu chuẩn tốt nhất bạn nên sở hữu ở thời điểm hiện tại. Đặt cạnh thế hệ tiền nhiệm, iPhone 15 mang đến loạt nâng cấp toàn diện về cả thi', 1, 12, '08:34:19pm 27/02/202'),
(2, 'Thiết kế khá đẹp, trọng lượng vừa phải, tản nhiệt tốt', 1, 11, '08:50:25pm 27/02/202'),
(3, 'Tốt', 1, 13, '08:50:57pm 27/02/202');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(27, 1, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 19),
(28, 1, 12, 'iphone.webp', 'iPhone 15 Pro Max 256GB', 31790000, 1, 31790000, 19),
(29, 1, 11, 'acer.webp', 'Laptop Acer Gaming Aspire 7', 12990000, 1, 12990000, 19),
(31, 6, 12, 'iphone.webp', 'iPhone 15 Pro Max 256GB', 31790000, 1, 31790000, 21),
(32, 6, 11, 'acer.webp', 'Laptop Acer Gaming Aspire 7', 12990000, 1, 12990000, 21),
(33, 6, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 21),
(34, 6, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 21),
(35, 1, 11, 'acer.webp', 'Laptop Acer Gaming Aspire 7', 12990000, 1, 12990000, 22),
(36, 1, 11, 'acer.webp', 'Laptop Acer Gaming Aspire 7', 12990000, 1, 12990000, 23),
(37, 1, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 23),
(38, 1, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 23),
(39, 1, 13, 'donghocasio.webp', 'Casio A159WA-N1', 750000, 1, 750000, 23);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(16, 'Đồng hồ'),
(17, 'Điện thoại'),
(18, 'Laptop'),
(20, 'Máy Ảnh - Máy Quay Phim'),
(21, 'Thiết Bị Số - Phụ Kiện Số'),
(22, 'Sách');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(11, 'Laptop Acer Gaming Aspire 7', 12990000.00, 'acer.webp', 'Màn hình 15.6 inch Full HD nhiều màu sắc cực kì sinh động\r\n\r\nCPU Intel Core i5-12450H đủ mạnh để chạy rất nhiều loại phần mềm và ứng dụng từ làm việc văn phòng\r\n\r\n8GB RAM tiêu chuẩn cho khả năng xử lý tác vụ nhanh gọn lẹ và chạy đa nhiệm một cách dễ dàng\r\n512GB SSD cho không gian lưu trữ rộng rãi để bạn lưu trữ mọi ứng dụng, tài liệu trong chiếc laptop của mình\r\n\r\nBàn phím Full-size rộng rãi cho bạn thoải mái sử dụng, dễ dàng nhập liệu, soạn thảo văn bản', 110, 18),
(12, 'iPhone 15 Pro Max 256GB', 31790000.00, 'iphone.webp', 'iPhone 15 Pro Max: Đẳng cấp flagship vượt trội tất cả\r\niPhone 15 Pro Max vượt trội hơn tất cả các flagship Android khi sở hữu con chip A17 Pro mạnh mẽ nhất từ trước đến nay.', 10, 17),
(13, 'Casio A159WA-N1', 750000.00, 'donghocasio.webp', 'Đồng hồ Casio A159WA-N1DF mang hơi hướng cổ điển nhưng với màu sắc sáng bạc và sang trọng và đẳng cấp sẽ là một sự lựa chọn tốt trong phân khúc dòng đồng hồ Casio giá bình dân. Chiếc đồng hồ sẽ tạo lên sự mạnh mẽ, khoẻ khoắn cho chủ nhân của nó.\r\nThiết kế thanh lịch, tinh tế với mặt kính khoáng cứng cáp, ít trầy xước và khung viền nhựa PC.\r\nMặt đồng hồ: to,rõ ràng, hiển thị thời gian bằng mặt LED, bao bên ngoài là mặt nền đen của chiếc đồng hồ bên trong là mặt đồng hồ LED hiển thị thời gian chuẩn xác. Độ dày mặt: mỏng nhẹ, thanh lịch với 8.6mm.', 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'PhungDucThanh', '123456', 'thanhpdph18767@fpt.edu.vn', 'số 1 đường ABC', '0123456789', 0),
(6, 'thanh123', '123456', 'thanh@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_sanpham` (`idpro`),
  ADD KEY `cart_user` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
