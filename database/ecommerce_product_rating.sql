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
-- Table structure for table `product_rating`
--

DROP TABLE IF EXISTS `product_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_rating` (
  `ratingId` int NOT NULL AUTO_INCREMENT,
  `productId` int NOT NULL,
  `userId` int NOT NULL,
  `ratingNumber` int NOT NULL,
  `comments` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_rating`
--

LOCK TABLES `product_rating` WRITE;
/*!40000 ALTER TABLE `product_rating` DISABLE KEYS */;
INSERT INTO `product_rating` VALUES (43,3,3,4,'rất tốt','2023-02-16 15:15:43','2023-02-16 15:15:43',1),(44,3,3,1,'kh&ocirc;ng ph&ugrave; hợp với gi&aacute; tiền','2023-02-16 15:17:06','2023-02-16 15:17:06',1),(45,3,2,5,'sản phẩm rẻ','2023-02-16 15:18:39','2023-02-16 15:18:39',1),(46,2,2,5,'d&ugrave;ng rất th&iacute;ch','2023-02-16 15:19:07','2023-02-16 15:19:07',1),(47,1,2,5,'sản phẩm tốt','2023-02-16 15:19:39','2023-02-16 15:19:39',1),(49,1,2,5,'tốt','2023-02-17 12:45:03','2023-02-17 12:45:03',1),(50,6,2,5,'tốt','2023-02-17 14:06:11','2023-02-17 14:06:11',1);
/*!40000 ALTER TABLE `product_rating` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-17 21:41:09
