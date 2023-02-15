-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 06:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `session_id`, `product_id`, `quantity`, `created_at`, `modified_at`) VALUES
(1, 5, 4, 7, 1, '2022-01-26 07:56:12', NULL),
(5, 3, 3, 8, 3, '2022-01-26 17:33:19', NULL),
(6, 3, 3, 17, 3, '2022-01-26 17:33:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `user_ID` int(11) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `send_Time` date NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `option_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `option_group_id`) VALUES
(1, 'Hồng', 1),
(2, 'Trắng', 1),
(3, 'Xanh', 1),
(4, 'Đen', 1),
(5, 'Đỏ', 1),
(6, 'Vàng', 1),
(7, '64GB', 2),
(8, '128GB', 2),
(9, '256GB', 2),
(10, '512GB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `option_groups`
--

CREATE TABLE `option_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option_groups`
--

INSERT INTO `option_groups` (`id`, `name`) VALUES
(1, 'Màu'),
(2, 'Dung lượng RAM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `total` float NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shipping_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status_id`, `ship_address`, `total`, `order_date`, `shipping_date`) VALUES
(1, 1, 3, 'Hà Nội', 10000000, '2021-11-27 03:46:57', '2021-12-01'),
(2, 2, 2, 'Nam Định', 15000000, '2021-12-01 03:48:23', '2021-12-03'),
(3, 3, 4, 'Quảng Ninh', 10000000, '2021-12-02 03:51:02', '0000-00-00'),
(4, 4, 1, 'Khánh Hòa', 8900000, '2021-12-05 03:52:06', '0000-00-00'),
(5, 5, 2, 'Quảng Ngãi', 12000000, '2021-12-02 03:54:53', '2021-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 23500000),
(2, 2, 5, 1, 8290000),
(3, 3, 4, 1, 7900000),
(3, 5, 6, 1, 33500000),
(4, 3, 7, 1, 8990000),
(1, 1, 1, 1, 23500000),
(2, 2, 5, 1, 8290000),
(3, 3, 4, 1, 7900000),
(3, 5, 6, 1, 33500000),
(4, 3, 7, 1, 8990000);

-- --------------------------------------------------------

--
-- Table structure for table `pre_order`
--

CREATE TABLE `pre_order` (
  `user_ID` int(11) DEFAULT NULL,
  `product_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `brand_id`, `category_id`, `sku`, `price`, `created_at`, `modified_at`) VALUES
(1, 'iPhone 13 | Chính hãng VN/A', 'Thiết kế với nhiều đột phá\r\nVề kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).\r\nThì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.', 1, 1, 'appleip3', 23500000, '2022-01-26 05:11:48', '0000-00-00 00:00:00'),
(2, 'iPhone 13 Pro Max | Chính hãng VN/A', 'Đánh giá iPhone 13 Pro Max – Hiệu năng vô đối, camera cực đỉnh\r\niPhone 12 ra mắt cách đây chưa lâu, thì những tin đồn mới nhất về iPhone 13 Pro Max đã khiến bao tín đồ công nghệ ngóng chờ. Cụm camera được nâng cấp, màu sắc mới, đặc biệt là màn hình 120Hz với phần notch được làm nhỏ gọn hơn chính là những điểm làm cho thu hút mọi sự chú ý trong năm nay.', 1, 1, 'appleip3promax', 33990000, '2022-01-26 05:11:36', '0000-00-00 00:00:00'),
(3, 'Samsung Galaxy Note 20 Ultra 5G', 'Điện thoại Samsung Note 20 Ultra 5G - Sang trọng, hiệu năng vượt trội\r\nBên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.\r\nNgoài ra, bạn có thể tham khảo Galaxy Z Fold 3 5G nếu bạn cần sự khác biệt và khẳng định đẳng cấp.\r\nThiết kế khung nhôm nguyên khối, mặt sau kính cường lực sang trọng\r\nLà một sản phẩm có kích thước màn hình lớn vì vậy Samsung đã trang bị cho Galaxy Note 20 Ultra 5G  với công nghệ kết nối dữ liệu mạnh mẽ cùng thiết kế nguyên khối. Giúp các linh kiện bên trong điện thoại được cố định chắc chắn đảm bảo mọi thứ bên trong luôn được an toàn. Không những vậy khung nhôm tạo trên những đường viền cực kỳ sang trọng và bắt mắt khi nhìn vào.', 3, 1, 'ssnote20', 2150000, '2022-01-26 06:42:15', '0000-00-00 00:00:00'),
(4, 'Samsung Galaxy Z Flip3 5G', 'Samsung Galaxy Z Flip 3 (5G) – Điện thoại màn hình gập độc đáo\r\nSamsung Galaxy Z Flip 3 sở hữu một phong cách thiết kế gập vỏ sò cùng khung nhôm aluminum chắc chắn. Khi gấp gọn, điện thoại chỉ có kích thước 4.2 inch vô cùng nhỏ gọn nhưng mở râ lại là một chiếc điện thoại thông minh màn hình lớn mang lại khả năng khám phá không giới hạn. Màn hình ngoài của thiết bị được trang bị mặt kính Gorilla Glass siêu bền bỉ.', 3, 1, 'sszflip3', 23990000, '2022-01-26 06:41:15', '0000-00-00 00:00:00'),
(5, 'Samsung Galaxy A52', 'Camera chất lượng - Hỗ trợ chống rung OIS 2 camera, camera selfie 32MP\r\nAn toàn khi sử dụng - Kháng nước, kháng bụi IP67\r\nChiến game mượt mà - Snapdragon 720G, RAM 8GB, công nghệ Game Booster\r\nThoải mái trải nghiệm - Pin 4500mAh, sạc nhanh 25W', 3, 1, 'ssa52', 7900000, '2022-01-26 06:41:44', '0000-00-00 00:00:00'),
(6, 'Apple MacBook Pro 13 Touch Bar M1 256GB 2020', 'Tốc độ và sức mạnh hoàn hảo trong một thân máy nhỏ gọn.\r\nMacBook Pro M1 13 inch 2020 Touch Bar mới với bộ vi xử lý Apple M1 cho bạn hiệu suất và thời lượng pin tuyệt vời nhất từ trước đến nay, mang đến hiệu năng chuyên nghiệp để hoàn thành những công việc chuyên nghiệp.', 1, 2, 'macpro13m1', 33500000, '2022-01-26 05:05:48', '0000-00-00 00:00:00'),
(7, 'Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su', 'Apple Watch Series 6 40mm - Sự nâng cấp đáng kể về ngoại hình lẫn công nghệ\r\nHầu hết tín đồ của Apple Watch đều muốn sở hữu ngay cho mình một chiếc Apple Watch Series 6 40mm mới nhất trong năm 2020 bởi nó đã được nâng cấp khá nhiều về ngoại hình và công nghệ. Mang đến một vẻ ngoài hoàn toàn mới, tiện lợi hơn với sự nâng cấp đáng kể chức năng.', 1, 5, 'aplwatch6', 8990000, '2022-01-26 17:07:38', '0000-00-00 00:00:00'),
(8, 'Xiaomi Mi 11 Lite 5G', 'Không gian hiển thị thoải mái, chuyển động mượt - Màn hình tràn viền 6,55 inch, tần số quét 90Hz, HDR10+\r\nHiệu năng mạnh mẽ, ổn định - Chip Snapdragon 780G trên 5nm, 128GB bộ nhớ và 8GB RAM\r\nCamera chụp ảnh ấn tượng - Cụm 3 camera sau 64MP, chụp đêm rõ nét\r\nSạc nhanh, trải nghiệm suốt ngày dài - Dung lượng pin 4250 mAh và hỗ trợ sạc nhanh 33W', 9, 1, 'xml5g', 8290000, '2022-01-26 17:07:31', '0000-00-00 00:00:00'),
(9, 'Laptop Dell Vostro 3405 V4R53500U003W', 'Laptop Dell Vostro 3405 V4R53500U003W được xem là mẫu laptop luôn mang đến những trải nghiệm ấn tượng cho người dùng. Không những được thiết kế một cách độc đáo, sang trọng, ấn tượng mà mẫu máy này còn có thể xử lý được nhiều tác vụ khác nhau một cách mượt mà nhơf vào bộ vi xử lý mạnh mẽ, ấn tượng.\r\nCùng khám phá thêm mẫu laptop Dell Vostro 5402 70231338 có hiệu năng hoạt động nhanh chóng, hiệu quả. Giúp giải quyết nhiều tác vụ văn phòng một cách tiện lợi nhất.', 6, 2, 'ldvostro3405', 16990000, '2021-12-05 03:32:11', '0000-00-00 00:00:00'),
(10, 'Laptop ASUS ROG Zephyrus M16 GU603HR-K8036T', 'Laptop ASUS ROG Zephyrus M16 GU603HR-K8036T: laptop gaming hiệu năng vượt trội\r\nLaptop ASUS ROG Zephyrus M16 GU603HR-K8036T là dòng laptop gaming đến từ thương hiệu Asus. Laptop Asus gaming với thiết kế độc đáo nhưng không kém phần sang trọng cùng một hiệu năng mượt mà, hứa hẹn đáp ứng tốt mọi nhu cầu sử dụng của người dùng.', 5, 2, 'asuszm16', 68990000, '2021-12-05 03:33:53', '0000-00-00 00:00:00'),
(11, 'Xiaomi Redmi Note 10 Pro 8GB', 'Nâng tầm nhiếp ảnh - Cụm camera 108MP chất lượng cao, chụp ảnh chi tiết và sắc nét.\r\nTốc độ bức phá - Snapdragon 732G 8 nhân, chuẩn bộ nhớ tốc độ cao UFS 2.2\r\nMàn hình vượt trội, phản hồi tức thì - AMOLED 6.67 inch, tần số quét 120Hz, độ sáng tối đa 1200 nit, hỗ trợ DCI- P3, HDR10\r\nKhông lo lắng về pin - Pin lớn 5020mAh, sạc nhanh Mi Turbo 33W ấn tượng.', 9, 1, 'xrn10pro8gb', 7300000, '2021-12-05 04:06:20', '0000-00-00 00:00:00'),
(12, 'Xiaomi Mi 11 5G', 'Thiết kế quyến rũ và bền bỉ - Bo cong bốn góc, 2 mặt kính khung viền kim loại sang trọng, kính Gorilla Victus chắc chắn hơn\r\nHiệu suất bức phá giới hạn - Snapdragon 888 đầu bảng, RAM 8GB\r\nNhiếp ảnh chuẩn studio - Cụm camera 108MP nâng tầm chất lượng chụp ảnh và quay video\r\nMàn hình nâng tầm đỉnh cao - AMOLED 6.81 inch, độ phân giải 2K, tần số quét 120Hz, chất lượng A+ từ DisplayMate\r\nTận hưởng âm thanh tuyệt đỉnh - Hỗ trợ loa kép, chất lượng âm thanh tinh chỉnh bởi harman / kardon\r\nKết nối tân tiến, siêu nhanh và ổn định - Hỗ trợ 5G, Wifi 6 tốc độ cao\r\nSạc đầy 100% chỉ mất 45 phút - Sạc nhanh có dây 55W, sạc nhanh không dây 50W', 9, 1, 'xmi115g', 15200000, '2021-12-05 04:06:20', '0000-00-00 00:00:00'),
(13, 'ASUS ROG Phone 5', 'Chinh phạt mọi giới hạn - Snapdragon 888 mạnh mẽ, RAM LPDDR5, bộ nhớ UFS 3.1\r\nHiển thị đẳng cấp - Màn hình AMOLED tần số quét 144Hz, phản hồi 1ms, kính Gorilla Victus\r\nTính năng dành cho game thủ - Cảm ứng đa điểm AirTrigger 5, loa kép chất lượng\r\nChiến game bất tận - Pin khủng 6000mAh, sạc siêu tốc 65W', 5, 1, 'asusrog5', 18990000, '2021-12-05 04:09:52', '0000-00-00 00:00:00'),
(14, 'Vivo X70 Pro 5G', 'Nâng cao trải nghiệm giải trí - Màn hình AMOLED lớn 6.56\", Full HD+\r\nCụm camera nhiều đột phá - Camera sau lên đến 50MP, hỗ trợ chống rung gyro-EIS, HDR10+\r\nHiệu năng mạnh mẽ, cân mọi tác vụ - Chip MTK Dimensity 1200 5G cùng RAM khủng 12 GB\r\nThoải mái sử dụng cả ngày dài - Pin lớn 445-mAh, hỗ trợ sạc nhanh 44 W vượt trội', 10, 1, 'vivox70pro5g', 16990000, '2021-12-05 04:10:17', '0000-00-00 00:00:00'),
(15, 'Samsung Galaxy S21 Ultra 5G', 'Giải trí đỉnh cao - Màn hình AMOLED 6.8 inch, độ phân giải 2K, tần số quét cao 120Hz\r\nChụp ảnh, quay video siêu nét - 4 camera mạnh mẽ, quay phim 8K, quay phim siêu chống rung.\r\nTốc độ vượt trội, chơi game đỉnh cao - Exynos 2100 8 nhân 5nm, RAM 8GB, bộ nhớ tốc độ cao UFS 3.1\r\nTrải nghiệm thả ga - Pin 5000mAh, hỗ trợ sạc nhanh lên đến 25W, công nghệ pin thông minh', 3, 1, 'samsungs21ultra5g', 25200000, '2021-12-05 04:11:42', '0000-00-00 00:00:00'),
(16, 'Samsung Galaxy Z Flip3 5G', 'Thiết kế độc đáo tiện lợi, khẳng định đẳng cấp - Thiết kế gập mở vỏ sò, khung nhôm aluminum chắc chắn\r\nMàn hình kép ấn tượng - Màn hình chính: 6.7\", màn hình phụ: 1.9\" AMOLED\r\nHệ thống camera siêu ấn tượng - Bộ 3 ống kính camera 12MP, camera selfie sắc nét\r\nHiệu năng ấn tượng, làm chủ tốc độ - Snapdragon 888 kết hợp RAM 8GB, hỗ trợ 5G', 3, 1, 'samsunggalaxyflip5g', 23990000, '2021-12-05 04:13:00', '0000-00-00 00:00:00'),
(17, 'Samsung Galaxy Watch 4', 'Thiết kế cổ điển,màn hình Amoled 1.19 inch hiển thị sắc nét\r\nTheo dõi sức khoẻ với chức năng đo nhịp tim,oxy trong máu.....\r\nPin dùng trong 1.5 ngày,sạc đầy trong 2 giờ\r\nChứng nhận độ bền chuẩn quân đội MIL-STD-810G', 3, 5, 'ssgw4', 6290000, '2022-01-26 17:12:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `brand_name`) VALUES
(1, 'Apple'),
(2, 'Microsoft'),
(3, 'Samsung'),
(4, 'Oppo'),
(5, 'Asus'),
(6, 'Dell'),
(7, 'Lenovo'),
(8, 'Huawei'),
(9, 'Xiaomi'),
(10, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop, PC, Màn hình'),
(3, 'Tablet'),
(4, 'Âm thanh'),
(5, 'Đồng hồ'),
(6, 'Máy ảnh'),
(7, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_image_1` varchar(100) DEFAULT NULL,
  `product_image_2` varchar(100) DEFAULT NULL,
  `product_image_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_image_1`, `product_image_2`, `product_image_3`) VALUES
(1, '1_1.png', '1_2.png', '1_3.png'),
(2, '2_1.png', '2_2.png', '2_3.png'),
(3, '3_1.png', '3_2.png', '3_3.png'),
(4, '4_1.png', '4_2.png', '4_3.png'),
(5, '5_1.png', '5_2.png', '5_3.png'),
(6, '6_1.png', '6_2.png', '6_3.png'),
(7, '7_1.png', '7_2.png', '7_3.png'),
(8, '8_1.png', '8_2.png', '8_3.png'),
(9, '9_1.png', '9_2.png', '9_3.png'),
(17, '17_1.png', '17_2.png', '17_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE `product_options` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_group_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`id`, `option_id`, `option_group_id`, `product_id`) VALUES
(1, 1, 1, 1),
(2, 8, 2, 2),
(3, 5, 1, 5),
(4, 3, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_session`
--

CREATE TABLE `shopping_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_session`
--

INSERT INTO `shopping_session` (`id`, `user_id`, `total`, `created_at`, `modified_at`) VALUES
(1, 1, 10000000, '2021-12-05 03:43:41', '0000-00-00 00:00:00'),
(2, 2, 15000000, '2021-12-05 03:43:41', '0000-00-00 00:00:00'),
(3, 5, 10000000, '2021-12-05 03:53:10', '0000-00-00 00:00:00'),
(4, 8, 15000000, '2021-12-05 03:53:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'processing'),
(2, 'delivering'),
(3, 'delivered'),
(4, 'canceled');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `address`, `created_at`) VALUES
(1, 'Nguyễn Thụy Long', '0945652662', 'ntlong213@gmail.com', '', 'Hà Nội', '2021-11-30 23:44:13'),
(2, 'Tôn Việt Thanh', '0946612544', 'tvthanh123@gmail.com', '', 'Nam Định', '2021-12-05 01:47:50'),
(3, 'Ngô Khánh Phi', '0958751365', 'nkphi@yahoo.com', '', 'Quảng Ninh', '2021-11-02 19:25:53'),
(4, 'Thân Anh Sơn', '0978459365', 'tanhson@hotmail.com', '', 'Ninh Bình', '2021-10-11 19:07:53'),
(5, 'Trần Kiến Bình', '0846621564', 'kienbinh056@msn.com', '', 'Bình Dương', '2021-05-12 21:33:28'),
(6, 'Bành Kiến Văn', '0846411524', 'banhkienvan332@hotmail.com', '', 'Vĩnh Phúc', '2021-12-05 01:56:14'),
(7, 'Dương Giang Nam', '0864656432', 'duonggiang221@gmail.com', '', 'Nghệ An', '2020-10-07 20:56:25'),
(8, 'Phạm Ðức Bằng', '0946664663', 'ducbang941@gmail.com', '', 'Phú Thọ', '2021-07-15 08:26:25'),
(9, 'Vưu Hữu Tường', '0846335424', 'huutruong223@gmail.com', '', 'Hậu Giang', '2020-03-12 04:56:25'),
(10, 'Lý Lập Thành', '0946646443', 'lapthanh331@gmail.com', '', 'Tuyên Quang', '2021-05-21 14:01:19'),
(11, 'Lương Thế Lâm', '0958766453', 'ltlam244@hotmail.com', '', 'Nha Trang', '2021-12-04 03:57:49'),
(12, 'Đàm Khắc Vũ', '0963344654', 'dkhacvu1222@gmail.com', '', 'Sài Gòn', '2021-12-01 03:57:49'),
(13, 'Nguyễn Ðăng Minh', '0943131644', 'nguyendangming1313@gmail.com', '', 'Cà Mau', '2021-12-01 03:59:31'),
(14, 'Hồ Hoàng Vương', '0954643131', 'hoangvuong9762gmail.com', '', 'Cần Thơ', '2021-12-05 04:00:51'),
(15, 'Đỗ Chấn Phong', '0954613134', 'chanphong745@hotmail.com', '', 'Huế', '2021-12-05 04:02:19'),
(16, 'Trần Minh Nhật', '0961131233', 'minhnhat29548@gmail.com', '', 'Đà Nẵng', '2021-12-03 04:01:00'),
(17, 'Đàm Hải Sơn', '0946311313', 'haison35342gmail.com', '', 'Bắc Giang', '2021-12-05 04:03:53'),
(18, 'Hoàng Công Vinh', '0946131311', 'conggvinh586@gmail.com', '', 'Hà Nội', '2021-12-03 04:02:28'),
(19, 'Nguyễn Ngọc Hoàn', '0946461348', 'ngochoan343@gmail.com', '', 'Khánh Hòa', '2021-12-05 04:07:58'),
(20, 'Bùi Diễm Châu', '0946613131', 'diemchau2342gmail.com', '', 'Hà Nội', '2021-12-05 04:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`send_Time`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_group_id` (`option_group_id`);

--
-- Indexes for table `option_groups`
--
ALTER TABLE `option_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pre_order`
--
ALTER TABLE `pre_order`
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `product_ID` (`product_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product brand` (`brand_id`),
  ADD KEY `Product category` (`category_id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `option_id` (`option_id`),
  ADD KEY `option_group_id` (`option_group_id`);

--
-- Indexes for table `shopping_session`
--
ALTER TABLE `shopping_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `option_groups`
--
ALTER TABLE `option_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shopping_session`
--
ALTER TABLE `shopping_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `shopping_session` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`);

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`option_group_id`) REFERENCES `option_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pre_order`
--
ALTER TABLE `pre_order`
  ADD CONSTRAINT `pre_order_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pre_order_ibfk_2` FOREIGN KEY (`product_ID`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Product brand` FOREIGN KEY (`brand_id`) REFERENCES `product_brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Product category` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_product_image` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_options`
--
ALTER TABLE `product_options`
  ADD CONSTRAINT `product_options_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `product_options_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `product_options_ibfk_3` FOREIGN KEY (`option_group_id`) REFERENCES `option_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shopping_session`
--
ALTER TABLE `shopping_session`
  ADD CONSTRAINT `shopping_session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
