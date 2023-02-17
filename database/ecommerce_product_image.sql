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
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_image` (`product_id`),
  CONSTRAINT `fk_product_image` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (1,1,'1_1.png'),(2,1,'1_2.png'),(3,1,'1_3.png'),(4,2,'2_1.png'),(5,2,'2_2.png'),(6,2,'2_3.png'),(7,3,'3_1.png'),(8,3,'3_2.png'),(9,3,'3_3.png'),(10,4,'4_1.png'),(11,4,'4_2.png'),(12,4,'4_3.png'),(13,4,'4_4.png'),(14,5,'5_1.png'),(15,5,'5_2.png'),(16,5,'5_3.png'),(17,6,'6_1.png'),(18,6,'6_2.png'),(19,6,'6_3.png'),(20,7,'7_1.png'),(21,7,'7_2.png'),(22,8,'8_1.png'),(23,8,'8_2.png'),(24,8,'8_3.png'),(25,9,'9_1.png'),(26,9,'9_2.png'),(27,9,'9_3.png'),(28,17,'17_1.png'),(29,17,'17_2.png'),(30,17,'17_3.png'),(31,11,'11_1.png'),(32,12,'12_1.png'),(33,14,'14_1.png'),(34,15,'15_1.png'),(35,13,'13_1.png'),(36,10,'10_1.png'),(43,41,'lenovo_legion_5_2.png');
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
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
