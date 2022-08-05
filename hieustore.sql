-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 06:08 AM
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
-- Database: `hieustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL,
  `ma_tk` int(10) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_tk`, `ma_sp`, `noi_dung`, `ngay_bl`) VALUES
(55, 40, 11, 'kkk', '2021-12-06'),
(56, 40, 5, 'good', '2021-12-08'),
(57, 40, 5, 'nếu có màu hồng thì mình mua rồi', '2021-12-08'),
(58, 40, 5, 'rẻ quá', '2021-12-08'),
(59, 40, 17, 'good', '2021-12-08'),
(60, 40, 9, 'CHẤT LƯỢNG', '2021-12-08'),
(61, 40, 9, 'sản phẩm còn nguyên zin', '2021-12-08'),
(62, 40, 11, 'ddd', '2021-12-08'),
(63, 6, 6, 'good', '2021-12-09'),
(64, 6, 7, 'good', '2021-12-09'),
(65, 6, 7, 'good', '2021-12-09'),
(66, 6, 17, 'ddd', '2021-12-10'),
(67, 6, 17, 'ss', '2021-12-10'),
(68, 6, 23, 'good', '2021-12-12'),
(69, 6, 12, 'good', '2021-12-13'),
(71, 6, 5, 'good', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(10) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `cate_img` varchar(255) NOT NULL,
  `cate_role` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1. đặc biệt 0. bình thường'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `categoryname`, `cate_img`, `cate_role`) VALUES
(5, 'iPhone', 'iphone.png', 1),
(6, 'iPad', 'ipad-m1-giam-gia.png', 1),
(11, 'Macbook', 'macbook.png', 1),
(12, 'AirPods', 'airpods.png', 1),
(13, 'iWatch', 'Watch.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(10) NOT NULL,
  `order_total` float NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_note` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(10) NOT NULL COMMENT '1. Đang Xử Lý 2.Đang Giao Hàng 3. Đã giao hàng 4.Trả hàng 5.Đã hủy',
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `order_total`, `order_address`, `order_note`, `order_date`, `order_status`, `userID`) VALUES
(48, 32, '1111wqfwtưetwt', '', '2021-12-08', 2, 40),
(49, 32699000, '1111wqfwtưetwt', '', '2021-12-08', 5, 40),
(50, 291, '1111wqfwtưetwt', '', '2021-12-08', 2, 40),
(51, 94148000, '1111wqfwtưetwt', '', '2021-12-08', 2, 40),
(52, 32699000, '1111wqfwtưetwt', '', '2021-12-08', 5, 6),
(53, 204030000, '1111wqfwtưetwt', '', '2021-12-08', 5, 6),
(54, 144530000, '1111wqfwtưetwt', '', '2021-12-08', 2, 6),
(55, 114527000, '1111wqfwtưetwt', '', '2021-12-08', 2, 6),
(56, 163, '1111wqfwtưetwt', '', '2021-12-08', 2, 6),
(57, 65, '1111wqfwtưetwt', '', '2021-12-08', 1, 6),
(59, 32, '1111wqfwtưetwt', 'ccbcc', '2021-12-10', 2, 6),
(60, 95230000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(61, 6980000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(62, 9435000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(63, 10590000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(64, 116519000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(65, 1523500000, '1111wqfwtưetwt', '', '2021-12-13', 1, 6),
(66, 329751000, '', '', '2021-12-15', 5, 6),
(67, 176034000, '1111wqfwtưetwt', '', '2021-12-15', 1, 6),
(69, 97199000, 'luong kim', 'dhdfh', '2021-12-16', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `order_ID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`order_ID`, `productID`, `number`, `price`) VALUES
(48, 5, 1, 32669000),
(49, 5, 1, 32669000),
(50, 5, 3, 32669000),
(50, 6, 3, 21559000),
(50, 18, 2, 64500000),
(51, 6, 2, 21559000),
(51, 17, 1, 51000000),
(52, 5, 1, 32669000),
(53, 17, 4, 51000000),
(54, 18, 1, 64500000),
(54, 7, 4, 20000000),
(55, 5, 3, 32669000),
(55, 9, 1, 16490000),
(56, 5, 5, 32669000),
(57, 5, 2, 32669000),
(59, 5, 1, 32669000),
(60, 22, 8, 11900000),
(61, 25, 1, 6950000),
(62, 12, 1, 9405000),
(63, 11, 1, 10560000),
(64, 7, 1, 20000000),
(64, 8, 1, 25999000),
(64, 18, 1, 64500000),
(64, 29, 1, 5990000),
(65, 22, 14, 11900000),
(65, 14, 9, 20790000),
(65, 15, 8, 16150000),
(65, 28, 13, 4990000),
(65, 18, 13, 64500000),
(65, 10, 10, 13719000),
(66, 5, 9, 32669000),
(66, 22, 3, 11900000),
(67, 5, 3, 32669000),
(67, 8, 3, 25999000),
(69, 5, 1, 32669000),
(69, 18, 1, 64500000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_number` int(10) NOT NULL,
  `pro_discount` float NOT NULL DEFAULT 0,
  `pro_image` varchar(255) NOT NULL,
  `pro_date` date NOT NULL,
  `CategoryID` int(10) NOT NULL,
  `pro_view` int(10) NOT NULL DEFAULT 0,
  `pro_detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `pro_name`, `pro_price`, `pro_number`, `pro_discount`, `pro_image`, `pro_date`, `CategoryID`, `pro_view`, `pro_detail`) VALUES
(5, 'iPhone 13 Pro Max', 32999000, 536, 1, 'iphone-13-pro-max-gold.png', '2021-11-23', 5, 285, 'Yếu tố duy nhất mà nhà Táo cải tiến đều đặn hàng năm là bộ vi xử lý bên trong iPhone. Tuy nhiên, năm 2021 có thể chứng kiến thay đổi nhiều hơn ở cấu hình iPhone 13 series. Các thông số rò rỉ cho thấy nhà Táo muốn đem tới sự bứt phá trên nhiều khía cạnh của iPhone mới thay vì chỉ nâng cấp chip. <br>\r\niPhone 13 Pro Max sẽ được trang bị màn hình 6.7 inch độ phân giải 2.778 x 1.228 pixels, hỗ trợ tần số quét 120Hz. Apple sẽ ưu ái trang bị cho iPhone 13 Pro Max bộ RAM dung lượng 6GB và ba tùy chọn bộ nhớ gồm 128GB, 256GB và 512GB. Tất nhiên, bộ vi xử lý mạnh mẽ A15 Bionic cũng sẽ là trái tim sức mạnh của thiết bị.\r\n\r\nĐiều đáng nói trong cấu hình iPhone 13 Pro Max là dung lượng pin được gia tăng mạnh mẽ. Chiếc điện thoại này sẽ là mẫu iPhone có pin lớn nhất trong lịch sử nếu thông số rò rỉ 4.352 mAh trở thành sự thực.'),
(6, 'iPhone 13', 21999000, 0, 2, 'iphone-13-pink-select-2021-254x300.png', '2021-11-09', 5, 122, 'iPhone 13 Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có trên iPhon'),
(7, 'iPhone 12 Pro', 20000000, 4, 0, 'ip12-pro-gold-400x400.png', '2021-11-03', 5, 18, 'iPhone 13 Pro Max Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có tr'),
(8, 'iPhone 12 Pro Max', 25999000, 976, 0, 'ip12-pro-max-silver-400x400.png', '2021-11-09', 5, 76, 'iPhone 13 Pro Max Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có tr'),
(9, 'iPhone 11', 17000000, 83, 3, 'ip11-red-400x400.png', '2021-11-10', 5, 56, 'iPhone 13 Pro Max Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có tr'),
(10, 'iPhone XR', 13999000, 56, 2, 'ipXR-coral-400x400.png', '2021-11-16', 5, 3, 'iPhone 13 Pro Max Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có tr'),
(11, 'iPhone SE 2020', 11000000, 43, 4, 'ipSE-2020-white-400x400.png', '2021-11-02', 5, 15, 'iPhone 13 Pro Max Một nâng cấp hệ thống camera chuyên nghiệp hoành tráng chưa từng có. Màn hình Super Retina XDR với ProMotion cho cảm giác nhanh nhạy hơn. Chip A15 Bionic thần tốc. Mạng 5G siêu nhanh. Thiết kế bền bỉ và thời lượng pin dài nhất từng có tr'),
(12, 'iPad gen 9', 9500000, 43, 1, 'ipad-gen-9-2021-hero-silver-wifi-select-254x300.png', '2021-11-10', 6, 48, 'iPad Gen 9 (2021) Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, v'),
(13, 'iPad mini 6', 14999000, 0, 0, 'ipad-mini-6-select-wifi-purple-202109-254x300.png', '2021-11-18', 6, 38, 'iPad Gen 9 (2021) Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, v'),
(14, 'iPad Pro M1', 21000000, 13, 1, 'iPad-Pro-m1-pez10rs772tge2mtw42jg1fg0nu9jtk6goriiy42bc.png', '2021-11-11', 6, 13, 'iPad Gen 9 (2021) Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, v'),
(15, 'iPad Pro 2020', 17000000, 115, 5, 'ipad-pro-12.9inch-2020-silver-400x400.png', '2021-11-19', 6, 11, 'iPad Gen 9 (2021) Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, v'),
(16, 'iPad Air 4', 16999000, 88, 0, 'iPad-air-gen4-skyblue-400x400.png', '2021-11-11', 6, 0, 'iPad Gen 9 (2021) Mạnh mẽ. Dễ sử dụng. Đa năng. Học sinh thích học với iPad mới. Với chip A13 Bionic mạnh mẽ, thời lượng pin bền bỉ cả ngày, màn hình Retina 10.2 inch tuyệt đẹp, Wi-Fi siêu nhanh, camera trước Ultra Wide với tính năng Trung Tâm Màn Hình, v'),
(17, 'Macbook Pro 14-inch', 51000000, 94, 0, 'MacBook_Pro_14-in_Silver-400x400 (1).png', '2021-12-02', 11, 34, 'MacBook Pro (14 inch) mới mang đến hiệu năng cao ấn tượng cho người dùng pro. Lựa chọn M1 Pro mạnh mẽ hay M1 Max còn mạnh hơn thế để tăng tốc xử lý các luồng công việc đẳng cấp pro cùng thời lượng pin đáng kinh ngạc. Với màn hình Liquid Retina XDR 14 inch'),
(18, 'Macbook Pro 16-inch', 64500000, 81, 0, 'MacBook_Pro_16-in_Space_Gray-400x400.png', '2021-11-18', 11, 51, 'MacBook Pro (14 inch) mới mang đến hiệu năng cao ấn tượng cho người dùng pro. Lựa chọn M1 Pro mạnh mẽ hay M1 Max còn mạnh hơn thế để tăng tốc xử lý các luồng công việc đẳng cấp pro cùng thời lượng pin đáng kinh ngạc. Với màn hình Liquid Retina XDR 14 inch'),
(19, 'MacBook Air M1 2020', 25000000, 0, 0, 'MacBook-Air-M1_Overview-400x400.png', '2021-11-24', 11, 15, 'MacBook Air M1 Là máy tính xách tay mỏng và nhẹ nhất của Apple – nay thay đổi ngoạn mục với chip Apple M1 mạnh mẽ. Tạo ra một cú nhảy vọt về hiệu năng CPU và đồ họa, cùng thời lượng pin lên đến 18 giờ.'),
(20, 'MacBook Pro M1 2020', 32000000, 0, 1, 'MacBook-Pro-M1-400x400.png', '2021-11-26', 11, 10, 'MacBook Air M1 Là máy tính xách tay mỏng và nhẹ nhất của Apple – nay thay đổi ngoạn mục với chip Apple M1 mạnh mẽ. Tạo ra một cú nhảy vọt về hiệu năng CPU và đồ họa, cùng thời lượng pin lên đến 18 giờ.'),
(21, 'Apple Watch Series 7 Thép', 20000000, 0, 0, 'Apple_Watch_Series_7_Cell_41mm_Gold_Stainless_Steel_Gold_Milanese_Loop_PDP_Image_Position-1__VN-removebg-preview-400x400.png', '2021-11-27', 13, 56, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(22, 'Apple Watch Series 7 Nhôm', 11900000, 60, 0, 'Apple_Watch_Series_7_Cell_45mm_ProductRED_Aluminum_ProductRed_Sport_Band_PDP_Image_Position-1__VN-removebg-preview-400x400.png', '0000-00-00', 13, 143, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(23, 'Apple Watch Series 6 Nhôm', 16500000, 0, 0, 'Watch-6-Thép-3-400x400.png', '2021-11-25', 13, 11, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(24, 'Apple Watch Series 6 Nhôm', 8900000, 0, 0, 'Watch-6-Thép-2-400x400.png', '2021-11-27', 13, 1, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(25, 'Apple Watch SE', 6950000, 22, 0, 'Watch-SE-400x400.png', '2021-11-26', 13, 5, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(26, 'Apple Watch Series 5 Nike', 8250000, 23, 0, 'Watch-5-Nike-1-400x400.png', '2021-11-27', 13, 0, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(27, 'Apple Watch Series 5', 7200000, 34, 0, 'Watch.png', '2021-11-27', 13, 1, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(28, 'AirPods Gen 3', 4990000, 41, 0, '2.-AirPods-Pro-1-400x400.png', '2021-11-27', 12, 5, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(29, 'AirPods Pro', 5990000, 42, 0, '2.-AirPods-Pro-1-400x400.png', '2021-11-27', 12, 8, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti'),
(30, 'AirPods 2', 2900000, 0, 2, '3.-AirPods-2-400x400.png', '2021-11-27', 12, 4, 'Apple Watch Series 6 (GPS + Cellular)  luôn sẵn sàng cho các bài tập thể chất yêu thích của bạn với các tính năng tiên tiến để giúp bạn trở nên tốt nhất. Với Apple Watch Series 6, một cảm biến và ứng dụng mới để đo nồng độ ôxi trong máu, thông báo nhịp ti');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `user_name`, `user_pass`, `user_email`, `user_phone`, `user_image`, `user_address`, `user_role`) VALUES
(6, 'hieunqpd04773', 'Nguyễn Quang Hiếu', '12345678', 'hieunqh@gmail.com', 374162121, 'hieu.jpg', '1111wqfwtưetwt', 3),
(40, 'admin', 'Nguyễn Trung Hải', '12345678', 'ninh@gmail.com', 374161211, 'hai.jpg', '1111wqfwtưetwt', 1),
(43, 'admin1', 'Nguyễn Quang Hiếu', '12345678', 'hieunqh@gmail.com', 374162121, 'hieu.jpg', 'kjdgjsd', 0),
(44, 'admin2', 'Nguyễn Quang Hiếu 2', '12345678', 'hieunqh@gmail.com', 374162121, 'hieu.jpg', 'Luong kim', 2),
(45, 'hieunqpd04773', 'Nguyễn Quang Hiếu Dz', '12345678', 'hieunqpd04773@fpt.edu.vn', 51565, 'user.png', '', 3),
(53, 'hieunguyennqh', 'Nguyen Quang Hieu', '123123', 'hieunqpd04773@fpt.edu.vn', 374162121, 'hieu.jpg', 'Da Nang', 3),
(54, 'hieunqpd04773', '', '12345678', '', 0, '', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `binh_luan_ibfk_2` (`ma_tk`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `ma_tk` (`userID`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `ma_dh` (`order_ID`),
  ADD KEY `ma_sp` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `ma_loai` (`CategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_tk`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_3` FOREIGN KEY (`ma_sp`) REFERENCES `product` (`productID`) ON DELETE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`order_ID`) REFERENCES `orders` (`order_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
