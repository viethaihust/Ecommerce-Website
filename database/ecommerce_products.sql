-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `brand_id` int NOT NULL,
  `category_id` int NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Product brand` (`brand_id`),
  KEY `Product category` (`category_id`),
  CONSTRAINT `Product brand` FOREIGN KEY (`brand_id`) REFERENCES `product_brands` (`brandId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Product category` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'iPhone 13 | Chính hãng VN/A','Thiết kế với nhiều đột phá\r\nVề kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).\r\nThì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.',1,1,'appleip3',23500000,'2022-01-26 05:11:48','0000-00-00 00:00:00'),(2,'iPhone 13 Pro Max | Chính hãng VN/A','Đánh giá iPhone 13 Pro Max – Hiệu năng vô đối, camera cực đỉnh\r\niPhone 12 ra mắt cách đây chưa lâu, thì những tin đồn mới nhất về iPhone 13 Pro Max đã khiến bao tín đồ công nghệ ngóng chờ. Cụm camera được nâng cấp, màu sắc mới, đặc biệt là màn hình 120Hz với phần notch được làm nhỏ gọn hơn chính là những điểm làm cho thu hút mọi sự chú ý trong năm nay.',1,1,'appleip3promax',33990000,'2022-01-26 05:11:36','0000-00-00 00:00:00'),(3,'Samsung Galaxy Note 20 Ultra 5G','Điện thoại Samsung Note 20 Ultra 5G - Sang trọng, hiệu năng vượt trội\r\nBên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.\r\nNgoài ra, bạn có thể tham khảo Galaxy Z Fold 3 5G nếu bạn cần sự khác biệt và khẳng định đẳng cấp.\r\nThiết kế khung nhôm nguyên khối, mặt sau kính cường lực sang trọng\r\nLà một sản phẩm có kích thước màn hình lớn vì vậy Samsung đã trang bị cho Galaxy Note 20 Ultra 5G  với công nghệ kết nối dữ liệu mạnh mẽ cùng thiết kế nguyên khối. Giúp các linh kiện bên trong điện thoại được cố định chắc chắn đảm bảo mọi thứ bên trong luôn được an toàn. Không những vậy khung nhôm tạo trên những đường viền cực kỳ sang trọng và bắt mắt khi nhìn vào.',3,1,'ssnote20',2150000,'2022-01-26 06:42:15','0000-00-00 00:00:00'),(4,'Samsung Galaxy Z Flip3 5G','Samsung Galaxy Z Flip 3 (5G) – Điện thoại màn hình gập độc đáo\r\nSamsung Galaxy Z Flip 3 sở hữu một phong cách thiết kế gập vỏ sò cùng khung nhôm aluminum chắc chắn. Khi gấp gọn, điện thoại chỉ có kích thước 4.2 inch vô cùng nhỏ gọn nhưng mở râ lại là một chiếc điện thoại thông minh màn hình lớn mang lại khả năng khám phá không giới hạn. Màn hình ngoài của thiết bị được trang bị mặt kính Gorilla Glass siêu bền bỉ.',3,1,'sszflip3',23990000,'2022-01-26 06:41:15','0000-00-00 00:00:00'),(5,'Samsung Galaxy A52','Camera chất lượng - Hỗ trợ chống rung OIS 2 camera, camera selfie 32MP\r\nAn toàn khi sử dụng - Kháng nước, kháng bụi IP67\r\nChiến game mượt mà - Snapdragon 720G, RAM 8GB, công nghệ Game Booster\r\nThoải mái trải nghiệm - Pin 4500mAh, sạc nhanh 25W',3,1,'ssa52',7900000,'2022-01-26 06:41:44','0000-00-00 00:00:00'),(6,'Apple MacBook Pro 13 Touch Bar M1 256GB 2020','Tốc độ và sức mạnh hoàn hảo trong một thân máy nhỏ gọn.\r\nMacBook Pro M1 13 inch 2020 Touch Bar mới với bộ vi xử lý Apple M1 cho bạn hiệu suất và thời lượng pin tuyệt vời nhất từ trước đến nay, mang đến hiệu năng chuyên nghiệp để hoàn thành những công việc chuyên nghiệp.',1,2,'macpro13m1',33500000,'2022-01-26 05:05:48','0000-00-00 00:00:00'),(7,'Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su','Apple Watch Series 6 40mm - Sự nâng cấp đáng kể về ngoại hình lẫn công nghệ\r\nHầu hết tín đồ của Apple Watch đều muốn sở hữu ngay cho mình một chiếc Apple Watch Series 6 40mm mới nhất trong năm 2020 bởi nó đã được nâng cấp khá nhiều về ngoại hình và công nghệ. Mang đến một vẻ ngoài hoàn toàn mới, tiện lợi hơn với sự nâng cấp đáng kể chức năng.',1,5,'aplwatch6',8990000,'2022-01-26 17:07:38','0000-00-00 00:00:00'),(8,'Xiaomi Mi 11 Lite 5G','Không gian hiển thị thoải mái, chuyển động mượt - Màn hình tràn viền 6,55 inch, tần số quét 90Hz, HDR10+\r\nHiệu năng mạnh mẽ, ổn định - Chip Snapdragon 780G trên 5nm, 128GB bộ nhớ và 8GB RAM\r\nCamera chụp ảnh ấn tượng - Cụm 3 camera sau 64MP, chụp đêm rõ nét\r\nSạc nhanh, trải nghiệm suốt ngày dài - Dung lượng pin 4250 mAh và hỗ trợ sạc nhanh 33W',9,1,'xml5g',8290000,'2022-01-26 17:07:31','0000-00-00 00:00:00'),(9,'Laptop Dell Vostro 3405 V4R53500U003W','Laptop Dell Vostro 3405 V4R53500U003W được xem là mẫu laptop luôn mang đến những trải nghiệm ấn tượng cho người dùng. Không những được thiết kế một cách độc đáo, sang trọng, ấn tượng mà mẫu máy này còn có thể xử lý được nhiều tác vụ khác nhau một cách mượt mà nhơf vào bộ vi xử lý mạnh mẽ, ấn tượng.\r\nCùng khám phá thêm mẫu laptop Dell Vostro 5402 70231338 có hiệu năng hoạt động nhanh chóng, hiệu quả. Giúp giải quyết nhiều tác vụ văn phòng một cách tiện lợi nhất.',6,2,'ldvostro3405',16990000,'2021-12-05 03:32:11','0000-00-00 00:00:00'),(10,'Laptop ASUS ROG Zephyrus M16 GU603HR-K8036T','Laptop ASUS ROG Zephyrus M16 GU603HR-K8036T: laptop gaming hiệu năng vượt trội\r\nLaptop ASUS ROG Zephyrus M16 GU603HR-K8036T là dòng laptop gaming đến từ thương hiệu Asus. Laptop Asus gaming với thiết kế độc đáo nhưng không kém phần sang trọng cùng một hiệu năng mượt mà, hứa hẹn đáp ứng tốt mọi nhu cầu sử dụng của người dùng.',5,2,'asuszm16',68990000,'2021-12-05 03:33:53','0000-00-00 00:00:00'),(11,'Xiaomi Redmi Note 10 Pro 8GB','Nâng tầm nhiếp ảnh - Cụm camera 108MP chất lượng cao, chụp ảnh chi tiết và sắc nét.\r\nTốc độ bức phá - Snapdragon 732G 8 nhân, chuẩn bộ nhớ tốc độ cao UFS 2.2\r\nMàn hình vượt trội, phản hồi tức thì - AMOLED 6.67 inch, tần số quét 120Hz, độ sáng tối đa 1200 nit, hỗ trợ DCI- P3, HDR10\r\nKhông lo lắng về pin - Pin lớn 5020mAh, sạc nhanh Mi Turbo 33W ấn tượng.',9,1,'xrn10pro8gb',7300000,'2021-12-05 04:06:20','0000-00-00 00:00:00'),(12,'Xiaomi Mi 11 5G','Thiết kế quyến rũ và bền bỉ - Bo cong bốn góc, 2 mặt kính khung viền kim loại sang trọng, kính Gorilla Victus chắc chắn hơn\r\nHiệu suất bức phá giới hạn - Snapdragon 888 đầu bảng, RAM 8GB\r\nNhiếp ảnh chuẩn studio - Cụm camera 108MP nâng tầm chất lượng chụp ảnh và quay video\r\nMàn hình nâng tầm đỉnh cao - AMOLED 6.81 inch, độ phân giải 2K, tần số quét 120Hz, chất lượng A+ từ DisplayMate\r\nTận hưởng âm thanh tuyệt đỉnh - Hỗ trợ loa kép, chất lượng âm thanh tinh chỉnh bởi harman / kardon\r\nKết nối tân tiến, siêu nhanh và ổn định - Hỗ trợ 5G, Wifi 6 tốc độ cao\r\nSạc đầy 100% chỉ mất 45 phút - Sạc nhanh có dây 55W, sạc nhanh không dây 50W',9,1,'xmi115g',15200000,'2021-12-05 04:06:20','0000-00-00 00:00:00'),(13,'ASUS ROG Phone 5','Chinh phạt mọi giới hạn - Snapdragon 888 mạnh mẽ, RAM LPDDR5, bộ nhớ UFS 3.1\r\nHiển thị đẳng cấp - Màn hình AMOLED tần số quét 144Hz, phản hồi 1ms, kính Gorilla Victus\r\nTính năng dành cho game thủ - Cảm ứng đa điểm AirTrigger 5, loa kép chất lượng\r\nChiến game bất tận - Pin khủng 6000mAh, sạc siêu tốc 65W',5,1,'asusrog5',18990000,'2021-12-05 04:09:52','0000-00-00 00:00:00'),(14,'Vivo X70 Pro 5G','Nâng cao trải nghiệm giải trí - Màn hình AMOLED lớn 6.56\", Full HD+\r\nCụm camera nhiều đột phá - Camera sau lên đến 50MP, hỗ trợ chống rung gyro-EIS, HDR10+\r\nHiệu năng mạnh mẽ, cân mọi tác vụ - Chip MTK Dimensity 1200 5G cùng RAM khủng 12 GB\r\nThoải mái sử dụng cả ngày dài - Pin lớn 445-mAh, hỗ trợ sạc nhanh 44 W vượt trội',10,1,'vivox70pro5g',16990000,'2021-12-05 04:10:17','0000-00-00 00:00:00'),(15,'Samsung Galaxy S21 Ultra 5G','Giải trí đỉnh cao - Màn hình AMOLED 6.8 inch, độ phân giải 2K, tần số quét cao 120Hz\r\nChụp ảnh, quay video siêu nét - 4 camera mạnh mẽ, quay phim 8K, quay phim siêu chống rung.\r\nTốc độ vượt trội, chơi game đỉnh cao - Exynos 2100 8 nhân 5nm, RAM 8GB, bộ nhớ tốc độ cao UFS 3.1\r\nTrải nghiệm thả ga - Pin 5000mAh, hỗ trợ sạc nhanh lên đến 25W, công nghệ pin thông minh',3,1,'samsungs21ultra5g',25200000,'2021-12-05 04:11:42','0000-00-00 00:00:00'),(17,'Samsung Galaxy Watch 4','Thiết kế cổ điển,màn hình Amoled 1.19 inch hiển thị sắc nét\r\nTheo dõi sức khoẻ với chức năng đo nhịp tim,oxy trong máu.....\r\nPin dùng trong 1.5 ngày,sạc đầy trong 2 giờ\r\nChứng nhận độ bền chuẩn quân đội MIL-STD-810G',3,5,'ssgw4',6290000,'2023-02-16 08:46:13','2022-01-26 17:12:29'),(41,'Laptop Lenovo Legion 5 15IAH7','Bên trong chiếc laptop gaming này ẩn chứa một con quái vật đến từ bộ vi xử lý Intel Core i5 12500H, tăng hiệu suất lên đến 40% so với thế hệ trước. Card rời RTX 30 series - NVIDIA GeForce RTX 3050Ti 4 GB hỗ trợ bạn chiến mượt mà các tựa game như LOL, PUBG, CS:GO,... cũng như có thể xử lý hoàn hảo các tác vụ đồ họa về hình ảnh và video. Laptop RAM 8 GB cho phép bạn chuyển đổi qua lại nhiều ứng dụng cùng lúc, vừa nghe nhạc Remix vừa chiến game mà không xảy ra hiện tượng giật lag, nâng cao hiệu suất làm việc với tốc độ Bus RAM 4800 MHz và hỗ trợ nâng cấp RAM tối đa lên đến 16 GB.',7,2,'82RC003WVN',29590000,'2023-02-16 15:27:56',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-17 21:41:08
